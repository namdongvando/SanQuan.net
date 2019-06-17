<?php

class Controller_tintonghop extends Application {

    public $param;

    function __construct() {
        $this->param = $this->getParam();
    }

    function index() {
        $this->ViewTheme("", Model_ViewTheme::get_viewthene(), "");
    }

}

?>