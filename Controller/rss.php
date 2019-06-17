<?php

class Controller_rss extends Application {

    public $API;

    function __construct() {
        $this->API = new \lib\APIs();
    }

    function index() {
        $Model_simple = new Model_simple();
        $Model_simple->redxml();
    }

    function getrsskinhdoanh() {
        try {
            $url = 'https://vnexpress.net/rss/kinh-doanh.rss';
            $fileName = sha1($url);
            $Content = "";
            $kt = Application\cachefile::getCacheFile("cache/rss/" . $fileName, $Content);
            if ($kt) {
                echo $Content;
                flush();
                return;
            } else {
                $xml = simplexml_load_file($url);
                $Content = $this->API->XMLToJson($xml);
                echo $Content;
                flush();
                Application\cachefile::setCacheFile("cache/rss/" . $fileName, $Content);
                return;
            }
        } catch (Exception $ex) {
            echo "{}";
        }
    }

    function getrssbylink() {
        try {
            $url = 'https://vnexpress.net/rss/phap-luat.rss';
            $fileName = sha1($url);
            $Content = "";
            $kt = Application\cachefile::getCacheFile("cache/rss/" . $fileName, $Content);
            if ($kt) {
                echo $Content;
                flush();
                return;
            } else {
                $xml = simplexml_load_file($url);
                $Content = $this->API->XMLToJson($xml);
                echo $Content;
                flush();
                Application\cachefile::setCacheFile("cache/rss/" . $fileName, $Content);
                return;
            }
        } catch (Exception $exc) {
            echo "{}";
        }

//        https://vnexpress.net/rss/phap-luat.rss
    }

}

?>