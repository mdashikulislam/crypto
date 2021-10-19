<?php

namespace App\Http\Controllers;

use App\Models\Contest;
use App\Models\Winner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Mailin;
use function PHPUnit\Framework\returnArgument;

class HomeController extends Controller
{
    public function index()
    {
        return view('home-page');
    }

    public function contest(Request $request)
    {
        $currentTime = date('H:i:s');
        $currentTime = strtotime($currentTime);
        $startTime = '00:00:01';
        $startTime = strtotime($startTime);
        $endTime = '20:00:00';
        $endTime = strtotime($endTime);


        if ($currentTime < $startTime ){
            toast('Le gagnant du jour est annoncé sur notre <a href="https://t.me/cryptotradersfr"><u>canal telegram</u></a> à 22h. <br><br> Ouverture des participations à partir de minuit.','error');
            return redirect()->back();
        }

        if ($currentTime > $endTime){
            toast('Heure limite dépassée !<br><br>🏆 Le gagnant du jour est annoncé sur notre <a href="https://t.me/cryptotradersfr"><u>canal telegram</u></a> à 22h. <br><br> 🙏 Réessayer demain !','error');
            return redirect()->back();
        }
        $email = $request->email;
        $ip = $request->ip();
        $exist = Contest::where(function ($q) use ($email){
                $q->where('email',$email);
                $q->whereDate('created_at',Carbon::today());
        })->orWhere(function ($s) use ($ip){
               $s->where('ip',$ip);
               $s->whereDate('created_at',Carbon::today());
        })->first();
        if ($exist){
            toast('⚠️ Vous avez déjà saisi une prédiction aujourd\'hui, n\'oubliez pas de like & retweet notre <a href="https://twitter.com/cryptotradersfr/status/1450034141865590786?ref_src=twsrc%5Etfw">post twitter</a> pour valider votre participation.','error');
            return redirect()->back();
        }
        $contest = new Contest();
        $contest->price = $request->btc;
        $contest->email = $request->email;
        $contest->pseudo = $request->pseudo;
        $contest->phone = $request->phone;
        $contest->currency = $request->currency;
        $contest->wallet = $request->wallet ? :'';
        $contest->ip = $request->ip();
        $contest->agent = $request->userAgent();
        if ($contest->save()){
            Session::put('email',$contest->email);
            $info = [
                'email'=>$request->email,
                'pseudo'=>$request->pseudo,
                'phone'=>$request->phone,
                'currency'=>$request->currency,
                'wallet'=>$request->wallet ? :'',
            ];
            setcookie('exist',json_encode($info),time() + (86400 * 30 * 2));
            $mailin = new Mailin("https://api.sendinblue.com/v2.0","hImk62UgGV5cLdF9");

            $datamail = array( "email" => 'ashik.nwu@gmail.com',
                "attributes" => array('PSEUDO'=>'md ashikul islam', 'SMS'=>'+8801521458894', 'GDPR_CONSENT'=>true),
                "listid" => array(14)
            );
            $mailin->create_update_user($datamail);
            toast('✅ Prédiction enregistrée ! <br><br>⚠️ Pour valider votre participation merci de like & retweet notre <a href="https://twitter.com/cryptotradersfr/status/1450034141865590786?ref_src=twsrc%5Etfw">post</a><br>.','success');
	}
        return redirect()->back();
    }

    public function result()
    {
        $winner = Winner::with('contests')->whereHas('contests')->orderByDesc('created_at')->limit(10)->get()->groupBy(function ($item){
            return $item->created_at->format('Y-m-d');
        });
        return  view('winner')
            ->with([
                'winners'=>$winner
            ]);
    }
    private function getClosest($search, $arr) {
        $closest = null;
        foreach ($arr as $item) {
            if ($closest === null || abs($search - $closest) > abs($item - $search)) {
                $closest = $item;
            }
        }
        return $closest;
    }

    public function cornJob()
    {
        $url='https://blockchain.info/ticker';
        $data = Http::get($url);
        if(!empty($data)){
            $btcValue = $data['USD']['sell'];
        }else{
            return false;
        }
        $valueList = Contest::whereDate('created_at',Carbon::today())->groupBy('price')->pluck('price')->toArray();
        if (!empty($valueList) && !empty($btcValue)){
            $val = $this->getClosest($btcValue,$valueList);
            $users = Contest::where('price',$val)->whereDate('created_at',Carbon::today())->get();
            if (!empty($users)){
                foreach ($users as $u){
                    Winner::create(['contest_id'=>$u->id]);
                    $token = "1319815845:AAHj_aAS8GCYKYuFY7JULmPR8lPIlHYZUtc";
                    $data = [
                        'text' => "Le prix actuel du Bitcoin est à ".$btcValue." Le gagnant du concours est : ".$u->pseudo." avec une prédiction de prix à ".$u->price." !",
                        'chat_id' => '1101366135'
                    ];
                    file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
                    //Transfer withdraw automatically

                    if (!empty($u->wallet)){
                        $api = new \Binance\API(getenv('BINANCE_API_KEY'),getenv('BINANCE_SECRET_KEY'));
                        $asset = "NEAR";
                        $address = $u->wallet;
                        $amount = 1.3;
                        $response = $api->withdraw($asset, $address, $amount);
                    }
                }
            }
        }else{
            return false;
        }
    }

    public function paymentTest()
    {
        $api = new \Binance\API(getenv('BINANCE_API_KEY'),getenv('BINANCE_SECRET_KEY'));
        $asset = "NEAR";
        $address = "bc972d5bd40f224d2c24b619236a20e40819483da695e85ac942cbbaf16f034f";
        $amount = 1.3;
        $response = $api->withdraw($asset, $address, $amount);
        print_r($response);
    }
}
