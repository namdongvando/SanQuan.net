<?php

class Model_simple extends Model_Adapter {

    function __construct() {

        parent::__construct();
    }

    function redxml() {
        include 'simple_html_dom.php';
        $html = file_get_html("http://sangquan.net/ssl.php");
        var_dump($html);
    }

}

?>