<?php

namespace Model;

class Error {

    static public $type;
    static public $Content;

    function setError($content, $type) {
        self::$type = $type;
        self::$Content = $content;
    }

    function getError() {
        $content = self::$Content;
        $type = self::$type;
        if (!self::$type)
            return null;
        self::$Content = NULL;
        self::$type = NULL;
        return [
            "Content" => $content
            , "Type" => $type
        ];
    }

//put your code here
}
