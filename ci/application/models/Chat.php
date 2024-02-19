<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Model {
    public function send_chat($url, $data, $headers)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        $response = curl_exec($curl);
        if(curl_errno($curl)) {
            $error_message = curl_error($curl);
            echo "Error: $error_message";
        }
        curl_close($curl);
        $text_response = json_decode($response, TRUE)["atext"];
        return array(
                array(
                    "class"=>"user",
                    "image"=>"assets/images/me.jpg",
                    "alt"=>"This is me",
                    "message"=>$data["utext"]
                ),
                array(
                    "class"=>"simsimi",
                    "image"=>"assets/images/simsimi.png",
                    "alt"=>"This is simsimi",
                    "message"=>$text_response
                )
            );
    }
}