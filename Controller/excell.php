<?php
class Controller_excell extends Application {

    function __construct() {
        
    }
    
    function index() {
        $Ex = new Model_excell_docexcelldanhmuc();
        $Ex->index();
    }

}


?>