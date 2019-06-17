<?php

namespace lib;

class redDirectory {

    function redDirectoryByPath($dir, &$a) {
        if (!is_dir($dir)) {
            return;
        }
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                $fileName = $dir . $file;
                if (is_file($fileName)) {
                    $a[] = $file;
                }
            }
            closedir($dh);
        }
    }

    function redDirectoryByPathSub($dir, &$a) {
        if (!is_dir($dir)) {
            return;
        }
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                if ($file != "." && $file != "..") {
                    $fileName = $dir . $file;
                    if (is_file($fileName)) {
                        $a[] = $file;
                    } else {
                        $this->redDirectoryByPathSub($dir . $file . "/", $a);
                    }
                }
            }
            closedir($dh);
        }
    }

    function ClearDir($from) {
        $a = [];
        $this->redDirectoryByPath($from, $a);
        if ($a)
            foreach ($a as $value) {
                unlink($from . $value);
            }
    }

}

?>