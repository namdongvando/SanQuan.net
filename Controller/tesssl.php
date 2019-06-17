<?php

class Controller_tesssl extends Application {

    function __construct() {
        $options = array('location' => 'http://chothue.dev:8080/ssl.php',
            'uri' => 'SanPham');
        $api = new SoapClient(NULL, $options);
        var_dump($api->__getFunctions());
    }

    function index() {
        
    }

    public function chao() {
        return "as dasdas";
    }

}
?>
