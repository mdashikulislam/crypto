<?php

namespace App\Http\Controllers;

use App\Models\Contest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use App\Helper\Mailin;
class HomeController extends Controller
{
    public function index()
    {
        return view('main-page');
    }

    public function inscription()
    {
        return view('inscription');
    }

    public function getContest()
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
            toast('Contest not start yet. Please try after 12am','error')->position('center-end');
            return redirect()->back();
        }
        if ($currentTime > $endTime){
            toast('Contest already end. Please try try after 12am','error')->position('center-end');
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
            toast('You already participate on this contest','error')->position('center-end');
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
            toast('Thank you for participate on this contest','success')->position('center-end');
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

    public function valider()
    {
        return view('valider');
    }

    public function rdv()
    {
        return view('edv');
    }

    public function vip()
    {
       return view('vip');
    }

    public function signup(Request $request)
    {

        $prenom = $_GET['prenom'];
        $phoneget = $_GET['phone'];
        $email = $_GET['email'];

        $vis_ip = $this->getVisIPAddr();

        // Use JSON encoded string and converts
        // it into a PHP variable
        $ipdat = @json_decode(file_get_contents(
            "http://www.geoplugin.net/json.gp?ip=" . $vis_ip));
        $pays = $ipdat->geoplugin_countryName;
        $phone = str_replace(' ', '', $phoneget);


        $sFile = file_get_contents("https://go.stormgain.com/api/sghyb/?api_username=shirer&api_password=Lyonstrasbourg69*&module=customer&command=add&email=".$email."&phone=".$phone."&country=fra&language=fra&registrationType=CELLXPERT_AUTO_LOGIN&is_encode_autolink=1");
        $xml = simplexml_load_string($sFile);
        $json = json_encode($xml);
        $array = json_decode($json,TRUE);
        echo $array['Customer']['AutoLoginLink'];
        $idstormgain = $array['Customer']['id'];
        if(empty($idstormgain)){
            $idstormgain = "COMPTE EXISTANT";
        }

        $_SESSION["deeplink"] = $array['Customer']['AutoLoginLink'];
        $_SESSION["prenom"] = $prenom;
        $_SESSION["phone"] = $phone;
        $_SESSION["email"] = $email;
        $ref = $_SESSION["ref"] ? :'';
        $deeplink = $array['Customer']['AutoLoginLink'];
        if(isset($prenom) && !empty($prenom)){
            $token = "1319815845:AAHj_aAS8GCYKYuFY7JULmPR8lPIlHYZUtc";
            $data = [
                'text' => "[INSCRIPTION]\r\n"."Prénom : ".$prenom." (".$pays.")\r\n"."Téléphone : ".$phone."\r\n"."Source :".$ref."\r\n"."Mail : ".$email."\r\n\r\n"."Identifiant stormgain : ".$idstormgain.".",
                'chat_id' => '-1001288082687'
            ];
            file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
        }

        $mailin = new \Mailin("https://api.sendinblue.com/v2.0","hImk62UgGV5cLdF9");

        if ($pays=="France" || $pays=="Switzerland" || $pays=="Belgium"){
            $data = array( "email" => $email,
                "attributes" => array('PRENOM'=>$prenom, 'NOM'=>$username, 'GDPR_CONSENT'=>true),
                "listid" => array(5)
            );
        }else{
            $data = array( "email" => $email,
                "attributes" => array('PRENOM'=>$prenom, 'NOM'=>$username, 'GDPR_CONSENT'=>true),
                "listid" => array(6)
            );
        }


        var_dump($mailin->create_update_user($data));

// Content of create_deal.php

// Pipedrive API token
        $api_token = "4d344beb250f9cf98596f9b30ad1317b8965b28b";
        $person = array(
            'name' => '['.$pays.'] '.$prenom . ' (' . $username .')',
            'phone' => $phone,
            'email' => $email,
            'org_id' => $ref,
            '76ce9dd2825486b854967cdf7808b51630697f2f' => $prenom,
        );

// Person's ID

// URL for updating a Person
        $url = 'https://synergietrading-abfd3f.pipedrive.com/v1/persons?api_token=' . $api_token;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $person);

//echo 'Sending request...' . PHP_EOL;

        $output = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($output, true);

// Create an array from the data that is sent back from the API
// As the original content from server is in JSON format, you need to convert it to PHP array

// Deal title and Organization ID
        $deal = array(
            'title' => '['.$pays.'] '.$prenom.'',
            'value' => "50",
            'org_id' => $ref,
            'person_id' => $result['data']['id'],
            'user_id' => 11542994,
            '6db0a35426ca4df3b06d61467610c0b0bd96d0ac' => $prenom,
            '0b3b9ce923f080a6d8ad2bca3602b39b237ddd00' => $pays,
            '6149ba62d2ee2f948dc3f60616255f399fe211a7' => $idstormgain,
        );

        $url = 'https://synergietrading-abfd3f.pipedrive.com/v1/deals?api_token=' . $api_token;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $deal);

        echo 'Sending request...' . PHP_EOL;

        $output = curl_exec($ch);
        curl_close($ch);


// Create an array from the data that is sent back from the API
// As the original content from server is in JSON format, you need to convert it to PHP array
        $result2 = json_decode($output, true);

        if(substr( $phone, 0, 2 ) === "06" || substr( $phone, 0, 3 ) === "+33" || substr( $phone, 0, 3 ) === "+32" || substr( $phone, 0, 1 ) === "6" || substr( $phone, 0, 4 ) === "0032" || substr( $phone, 0, 2 ) === "32" || substr( $phone, 0, 2 ) === "04" || substr( $phone, 0, 2 ) === "41" || substr( $phone, 0, 3 ) === "+41" || substr( $phone, 0, 4 ) === "0041" || substr( $phone, 0, 4 ) == "0033" || substr( $phone, 0, 2 ) == "07" || substr( $phone, 0, 1 ) == "7") {
            $url = "https://semysms.net/api/3/sms.php"; //Url address for sending SMS
            $msg = 'Bonjour '.$prenom.', je suis Anthony conseiller chez Cryptotraders.fr, ton inscription a été retenu par tirage au sort automatique. Es-tu disponible aujourd\'hui ou demain par téléphone pour t\'en dire un peu plus sur nous et en savoir plus sur toi ? Tu peux aussi me joindre sur telegram via https://t.me/anthonycryptotradersfr pour échanger. Bien à toi,';  // Message
            $device = '298005';  //  Device code
            $token = '0137a81a93b787ebbae4156eb2a87067';  //  Your token (secret)

            $data = array(
                "phone" => $phone,
                "msg" => $msg,
                "device" => $device,
                "token" => $token
            );
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            $output = curl_exec($curl);
            curl_close($curl);

            echo $output;
// Check if an ID came back, if did print it out
        }
        return redirect()->route('valider');

    }
    public function getVisIpAddr() {

        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            return $_SERVER['HTTP_CLIENT_IP'];
        }
        else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else {
            return $_SERVER['REMOTE_ADDR'];
        }
    }

    public function login()
    {
        return view('login');

    }

    public function login2()
    {
        $mail = $_GET['email'];
        $email = strtolower($mail);

        $_SESSION["email"] = $email;

        $search      = $email;
        $path = public_path().'/cryptotraders.csv';
        $lines       = file($path);
        $line_number = false;

        foreach ($lines as $l){
            $line_number = (strpos($l, $search) !== FALSE);
        }

        if($line_number){
            $_SESSION["log"] = "ok";
            return redirect()->route('vip');
        }else{
            return redirect()->route('valider');
        }

    }

    public function deblok()
    {
        return view('deblok');
    }

    public function deblokSave(Request $request)
    {
        $firs=$_POST["fn"];
        $prenom=$_POST["prenom"];
        $first = strtolower($firs);

        if(!empty($first)){

            $cvsData = "\n" . $first  . ","; // Add newline
            $path = public_path().'/cryptotraders.csv';
            $fp = fopen($path,"a"); // $fp is now the file pointer to file $filename

            if($fp)
            {
                fwrite($fp,$cvsData); // Write information to the file
                fclose($fp); // Close the file
            }
        }

        $mailin = new \Mailin("https://api.sendinblue.com/v2.0","hImk62UgGV5cLdF9");

        $data = array( "email" => $first,
            "listid" => array(7),
            "listid_unlink" => array(5, 6, 2)
        );
        var_dump($mailin->create_update_user($data));

    }

    public function contact(Request $request)
    {
        /**
         * EDIT THE VALUES BELOW THIS LINE TO ADJUST THE CONFIGURATION
         * EACH OPTION HAS A COMMENT ABOVE IT WITH A DESCRIPTION
         */
        /**
         * Specify the email address to which all mail messages are sent.
         * The script will try to use PHP's mail() function,
         * so if it is not properly configured it will fail silently (no error).
         */
        $mailTo     = 'email@example.com';

        /**
         * Set the message that will be shown on success
         */
        $successMsg = 'Thank you, mail sent successfully!';

        /**
         * Set the message that will be shown if not all fields are filled
         */
        $fillMsg    = 'Please fill all fields!';

        /**
         * Set the message that will be shown on error
         */
        $errorMsg   = 'Hm.. seems there is a problem, sorry!';

        /**
         * DO NOT EDIT ANYTHING BELOW THIS LINE, UNLESS YOU'RE SURE WHAT YOU'RE DOING
         */


        if(
            !isset($_POST['name']) ||
            !isset($_POST['email']) ||
            !isset($_POST['subject']) ||
            empty($_POST['name']) ||
            empty($_POST['email']) ||
            empty($_POST['subject'])

        ) {

            if( empty($_POST['name']) && empty($_POST['email']) ) {
                $json_arr = array( "type" => "error", "msg" => $fillMsg );
                echo json_encode( $json_arr );
            } else {

                $fields = "";
                if( !isset( $_POST['name'] ) || empty( $_POST['name'] ) ) {
                    $fields .= "Name";
                }

                if( !isset( $_POST['email'] ) || empty( $_POST['email'] ) ) {
                    if( $fields == "" ) {
                        $fields .= "Email";
                    } else {
                        $fields .= ", Email";
                    }
                }

                if( !isset( $_POST['subject'] ) || empty( $_POST['subject'] ) ) {
                    if( $fields == "" ) {
                        $fields .= "Subject";
                    } else {
                        $fields .= ", Subject";
                    }
                }

                $json_arr = array( "type" => "error", "msg" => "Please fill ".$fields." fields!" );
                echo json_encode( $json_arr );

            }

        } else {

            // Validate e-mail
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {

                $msg = "Name: ".$_POST['name']."\r\n";
                $msg .= "Email: ".$_POST['email']."\r\n";
                $msg .= "Subject: ".$_POST['subject']."\r\n";
                if( isset( $_POST['message'] ) && $_POST['message'] != '' ) { $msg .= "Message: ".$_POST['message']."\r\n"; }

                $success = @mail($mailTo, $_POST['email'], $msg, 'From: ' . $_POST['name'] . '<' . $_POST['email'] . '>');

                if ($success) {
                    $json_arr = array( "type" => "success", "msg" => $successMsg );
                    echo json_encode( $json_arr );
                } else {
                    $json_arr = array( "type" => "error", "msg" => $errorMsg );
                    echo json_encode( $json_arr );
                }

            } else {
                $json_arr = array( "type" => "error", "msg" => "Please enter valid email address!" );
                echo json_encode( $json_arr );
            }

        }
    }
}
