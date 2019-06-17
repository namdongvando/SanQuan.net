<?php

class Controller_laytin extends Controller_quantri {

    function __construct() {
        
        parent::__construct();
    }

    function index() {
        set_time_limit(0);
        include 'Model/simple_html_dom.php';
        $this->QView("");
    }
    function tinchodanhmuc() {
   
        include_once 'Model/simple_html_dom.php';
        $this->QView("");
    }

}
