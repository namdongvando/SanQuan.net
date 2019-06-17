<?php

namespace Application;

class Alert {

    static public $Type;
    static public $Content;

    function __construct($type = "", $content = "") {
        if ($type)
            $this->setAlert($type, $content);
    }

    static public function setAlert($type, $content) {
        self::$Type = $type;
        self::$Content = $content;
    }

    static public function getAlert() {
        if (self::$Type) {
            $a = [
                "Type" => self::$Type
                , "Content" => self::$Content
            ];
            self::$Type = NULL;
            self::$Content = "";
            return $a;
        }
        return NULL;
    }

}

?>