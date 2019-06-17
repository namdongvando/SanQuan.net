<?php

class View_html {

    static function getElementImg($url, $id = "", $class = "", $style = "") {
        echo <<<IMGSP
        <img src="{$url}" class='{$class}' style="{$style}"  id="{$id}" >
IMGSP;
    }

    static function GetElementOptionByID($array, $id) {
        $str = "";
        foreach ($array as $k => $v) {
            if ($k == $id) {
                $str .= "<option selected='selected' value='{$k}' >{$v}</option>";
            } else {
                $str .= "<option value='{$k}' >{$v}</option>";
            }
        }
        return $str;
    }
    

}

?>