<?php

class Model_SEO extends Model_Adapter {

    static public $Title;
    static public $Keyword;
    static public $Description;

    function __construct() {
        
    }

    static function set_Title($Title) {
        self::$Title = $Title;
    }

    static function get_Title() {
        if (self::$Title) {
            return self::$Title;
        }
        return "{SEO_Title}";
    }

    static function set_Keyword($Keyword) {
        self::$Keyword = $Keyword;
    }

    static function get_Keyword() {
        if (self::$Keyword) {
            return  self::$Keyword;
        }
        return "{SEO_keywords}";
    }

    static function set_Description($Description) {
        self::$Description = $Description;
    }

    static function get_Description() {
        if (self::$Description) {
            return self::$Description;
        }
        return "{SEO_description}";
    }

}

?>