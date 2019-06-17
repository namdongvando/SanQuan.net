<?php

class Controller_getapi extends Application {

    public $SanPham;
    public $Param;

    function __construct() {
        $this->SanPham = new Model_SanPham();
        $this->Param = $this->getParam();
    }

    function index() {
        $html = 'http://sangquan.dev:8080/api/201703011488368435';
        $text = file_get_contents($html, false);
        $xml = simplexml_load_file($html) or die("Error: Cannot create object");
        $this->AView($xml);
    }

}

?>