<?php

namespace App\Helpers;

use Carbon\Carbon;
use Illuminate\Support\Str;

class Helper
{
    public static function isMobileDevice()
    {
        return preg_match(
            "/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i",
            $_SERVER["HTTP_USER_AGENT"]
        );
    }


    public static function sendSms($phoneno, $messageBody)
    {


        $url = "http://103.53.84.5:1222/sendtext?apikey=d23583bbd5258301&secretkey=f9844d4f&callerID=8801922002381&toUser=88" . $phoneno . "&messageContent=" . urlencode($messageBody);
        return Self::smsApi($url);
    }

    public static function smsApi($url)
    {

        //return $url;
        $ch = curl_init(); // Initialize cURL
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response, true);
    }





    //SSL SMS gateway
    public static function singleSms($msisdn, $messageBody)
    {

        $params = [
            "api_token" => "p92inyhx-b2gxx0ti-tjfk4vta-pxvlvnxu-hge77etv",
            "sid" => "NATIONALIFE",
            "msisdn" => $msisdn,
            "sms" => $messageBody,
            "csms_id" => Str::random(7),
        ];
        $url = "https://smsplus.sslwireless.com/api/v3/send-sms?";
        $params = json_encode($params);

        // echo callApi($url, $params);

        return Self::callApi($url, $params);
    }

    public static function callApi($url, $params)
    {

        // dd(1);
        $ch = curl_init(); // Initialize cURL
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($params),
            'accept:application/json'
        ));

        $response = curl_exec($ch);

        curl_close($ch);

        return $response;
    }
}
