<?php

class Controller_ssl extends Application {

    function __construct() {
        $options = array('uri' => 'http://localhost/');
        $server = new SoapServer(NULL, $options);
        $server->addFunction("chao");
        $server->handle();
        
        

// client
    }

    public function chao($str) {
        return "Chào bạn: " . $str;
    }

    public function index() {
        
    }

    public function some() {
        
    }

}
?>