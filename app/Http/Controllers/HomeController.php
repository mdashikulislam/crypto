<?php

namespace App\Http\Controllers;

use App\Models\Contest;
use App\Models\Winner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
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


//        if ($currentTime < $startTime ){
//            toast('Contest not start yet. Please try after 12am','error');
//            return redirect()->back();
//        }
//
//        if ($currentTime > $endTime){
//            toast('Contest already end. Please try after 12am','error');
//            return redirect()->back();
//        }
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
            toast('You already participate on this contest','error');
            return redirect()->back();
        }
        $contest = new Contest();
        $contest->price = $request->btc;
        $contest->email = $request->email;
        $contest->pseudo = $request->pseudo;
        $contest->phone = $request->phone;
        $contest->wallet = $request->wallet ? :'';
        $contest->ip = $request->ip();
        $contest->agent = $request->userAgent();
        if ($contest->save()){
            Session::put('email',$contest->email);
            toast("Merci ! Pour valider valider votre participation merci de retweeter ce <a href='https://twitter'>post</a>",'success');
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
                        'text' => "the winner of the contest is ".$u->pseudo." with a price prediction at ".$u->price." !",
                        'chat_id' => '1101366135'
                    ];
                    file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
                    //Transfer withdraw automatically

                    if (!empty($u->wallet)){
                        $api = new \Binance\API(getenv('BINANCE_API_KEY'),getenv('BINANCE_SECRET_KEY'));
                        $asset = "USD";
                        $address = $u->wallet;
                        $amount = 10;
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
        $api = new \Binance\API(getenv('BINANCE_API_KEY'),getenv('BINANCE_SECRET_KEY'),true);
        $asset = "NEAR";
        $address = "bc972d5bd40f224d2c24b619236a20e40819483da695e85ac942cbbaf16f034f";
        $amount = 1.3;
        $response = $api->withdraw($asset, $address, $amount);
        print_r($response);
    }
}
