<?php

namespace Application;

class cachefile {

    function __construct($filename = "", $content = "") {
        
    }

    static function setCacheFile($filename,$content) {
        $oi = new \lib\io();
        $oi->writeFile($filename, $content);
    }
    static function getCacheFile($filename,&$Content) {
        $oi = new \lib\io();
        if (is_file($filename)) {
            if (time() - filemtime($filename) < 300)
            {
                $Content = $oi->readFile($filename);
                return true;
            }
        }
        $Content = "";
        return FALSE;
        //$oi->writeFile($filename, $content);
    }

}

?>