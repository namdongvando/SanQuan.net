<?php

class Model_ViewTheme {

    static public $ViewTheme;

    function __construct() {
        
    }

    static public function set_viewthene($view) {
        self::$ViewTheme = $view;
    }

    static public function get_viewthene() {
        if (self::$ViewTheme)
            return self::$ViewTheme;
        return "home";
    }

}

?>