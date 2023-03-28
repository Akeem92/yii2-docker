<?php

namespace frontend\models;


use Yii;
use yii\helpers\Json;

class ApiCurl
{
    const base_url = "http://localhost";

    const acces_token = "$2y$10de1749470aa64D4ukac47837a4vxL5Nb6yqu8KpBy3FQk9af9767";
    const url = ApiCurl::base_url . "/api/web/v1/";


    public static function ApiGet(array $data = [], string $url)
    {
        set_time_limit(0);
    }


    /**
     * @param $curl
     * @param array $data
     * @return mixed
     * @throws \Exception
     */
    public static function ApiPost($curl, array $data = [])
    {
        set_time_limit(0);
        $link = ApiCurl::url . $curl;
        $ch = curl_init($link);
        $data['access_token'] =  ApiCurl::acces_token;
        $data['registration_id'] = "";
        $curlConfig = [
            CURLOPT_URL            => $link,
            CURLOPT_POST           => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => ['Content-Type: multipart/form-data'],
            CURLOPT_CONNECTTIMEOUT => 5,
            CURLOPT_POSTFIELDS     => $data,
        ];

        //print_r($ch);exit;

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt_array($ch, $curlConfig);
        $response = curl_exec($ch);

        if ($errno = curl_errno($ch)) {
            $error_message = curl_strerror($errno);
            $message = "cURL error ({$errno}):\n {$error_message}";
            $tab["status"] = "005";
            $tab["message"] = $message;
            $response = json_encode($tab);
        }

        return $response;
    }
}
