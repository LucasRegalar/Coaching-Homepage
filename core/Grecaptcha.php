<?php

namespace core;

class Grecaptcha {

    //my secret key
    private $secret = "6LejRNApAAAAAM8Fol9Iu4w21TsNk4fh1KDzojOQ";
    // Verification URL
    private $url = 'https://www.google.com/recaptcha/api/siteverify';


    public function validate($token) {

        $data = [
            'secret'   => $this->secret,
            'response' => $token,
        ];

        $options = [
            'http' => [
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            ]
        ];

        $context  = stream_context_create($options);
        $response = file_get_contents($this->url, false, $context);
        return json_decode($response); 
    }
}