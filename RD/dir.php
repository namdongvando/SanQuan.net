<?php

class RD_dir {

    public static $URL;

    function __construct($dir = "public/img/images/khachhang/") {
        self::$URL = $dir;
    }

    function ListFile() {
        if (is_dir(self::$URL)) {
            if ($dh = opendir(self::$URL)) {
                $a = array();
                while (($file = readdir($dh)) !== false) {
                    if ($file != "." && $file != "..")
                        if (is_file(self::$URL . $file)) {
                            $a[] = BASE_DIR . self::$URL . $file;
                        }
                }
                closedir($dh);
                return $a;
            }
        }
        return FALSE;
    }

}

?>