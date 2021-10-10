<?php

namespace App\Http\Controllers;

use App\Models\Contest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        return view('home-page');
    }

    public function contest(Request $request)
    {

        $currentTime = date('H:i:s');
        $startTime = '12:00:01';
        $startTime = strtotime($startTime);
        $endTime = '20:00:00';
        $endTime = strtotime($endTime);
        $currentTime = strtotime($currentTime);

        if ($currentTime < $startTime ){
            toast('Contest not start yet. Please try after 12am','error');
            return redirect()->back();
        }
        if ($currentTime > $endTime){
            toast('Contest already end. Please try after 12am','error');
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
            toast('You already participate on this contest','error');
            return redirect()->back();
        }
        $contest = new Contest();
        $contest->price = $request->btc;
        $contest->email = $request->email;
        $contest->pseudo = $request->pseudo;
        $contest->phone = $request->phone;
        $contest->ip = $request->ip();
        $contest->agent = $request->userAgent();
        if ($contest->save()){
            Session::put('email',$contest->email);
            toast('Thank you for participate on this contest','success');
        }
        return redirect()->back();
    }

    public function result()
    {
        $url='https://blockchain.info/ticker';
        $data = Http::get($url);
        if(!empty($data)){
            $btcValue = $data['USD']['sell'];
        }else{
            return 'Convert value not found';
        }
        $valueList = Contest::whereDate('created_at',Carbon::today())->groupBy('price')->pluck('price')->toArray();
        $users = [];
        if (!empty($valueList) && !empty($btcValue)){
            $val = $this->getClosest($btcValue,$valueList);
            $users = Contest::where('price',$val)->whereDate('created_at',Carbon::today())->get();
            if (!empty($users)){
                foreach ($users as $u){
                    $token = "1319815845:AAHj_aAS8GCYKYuFY7JULmPR8lPIlHYZUtc";
                    $data = [
                        'text' => "the winner of the contest is ".$u->pseudo." with a price prediction at ".$u->price." !",
                        'chat_id' => '1101366135'
                    ];
                    file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
                }
            }


        }


        return  view('winner')
            ->with([
                'users'=>$users
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

}
