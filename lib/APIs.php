<?php

namespace lib;

class APIs {

    function XMLToJson($XML) 
    {
        return json_encode($XML);
    }
    
    
    function ArrayToJson($array) {
        if ($array) {
            $a = json_encode($array, JSON_UNESCAPED_UNICODE);
            return html_entity_decode($a);
        }
        return "{}";
    }

    function ArrayToApi($array) {
        $a = new \Model_Adapter();
        if ($array) {
            $a = json_encode($array, JSON_UNESCAPED_UNICODE);
            echo html_entity_decode($a);
        } else {
            echo "[]";
        }
    }

    function ArrayToApiString($array) {
        $a = new \Model_Adapter();
        if ($array) {
            $a = json_encode($array, JSON_UNESCAPED_UNICODE);
            return html_entity_decode($a);
        } else {
            return "[]";
        }
    }

}
