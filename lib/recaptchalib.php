<?php

namespace lib;

class recaptchalib {

    function __construct($response = null) {

//        6LeRE5oUAAAAAIF1EYgiBgvSM4Cgl0DwB_XieXQk
    }

    function recaptchalib($response) {
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = array(
            'secret' => '6LeRE5oUAAAAAIF1EYgiBgvSM4Cgl0DwB_XieXQk',
            'response' => $response
        );

        $options = array(
            'http' => array(
                'method' => 'POST'
                ,'content' => http_build_query($data)
                , 'header' => "Content-Type: application/x-www-form-urlencoded\r\n" 
            )
        );
        $context = stream_context_create($options);
        $verify = file_get_contents($url, false, $context);
        $captcha_success = json_decode($verify);
        if ($captcha_success->success == false) {
            return FALSE;
        } else if ($captcha_success->success == true) {
            return TRUE;
        }
        return FALSE;
    }

}
