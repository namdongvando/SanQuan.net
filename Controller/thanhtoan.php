<?php

class Controller_thanhtoan extends Application {

    function __construct() {
        
    }

    function index() {
        
        $this->ViewTheme("", Model_ViewTheme::get_viewthene(), "");
    }

}

?>