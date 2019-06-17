<?php

class Controller_test extends Application {

    function __construct() {
        
    }

    function index() {
        $a = new \Model\Database();
        $b = $a->Query("SELECT * FROM `users` Where 1");
        var_dump($a->ToArray($b));
    }
    
    function install1() {
        
        $a = new \Model\Database();
        $b = $a->CreateTable();
    }

}

?>