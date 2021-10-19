<?php

namespace App\Console\Commands;

use App\Models\Contest;
use App\Models\Winner;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class FindWinner extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'find:winner';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Find everyday winner from contest list';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
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
                        'text' => "[RESULTATS CONCOURS] \r\n Le prix actuel du Bitcoin est à ".$btcValue." \r\n Le gagnant du concours est : ".$u->pseudo." avec une prédiction de prix à ".$u->price." !",
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
        return Command::SUCCESS;
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
