<?php

class UploadImges_IM {

// đường dẫn ổ đĩa
    public static $UrlUpload;
//   đường dẫn sever sử lý
    public static $Sever;
//    luu session $UrlUpload;
    public $SessionUrlUpload;
//    luu session $SessionSever;
    public $SessionSever;

    function __construct() {
        $this->SessionSever = "SessionSever";
        $this->SessionUrlUpload = "SessionUrlUpload";
    }

    function client($callbackfunction = NULL) {
//        ajax uploahinh
        include 'client.php';
    }

    function setUrlUpload($url) {
        $_SESSION[$this->SessionUrlUpload] = $url;
    }

    function getUrlUpload() {
        return $_SESSION[$this->SessionUrlUpload];
    }

    function setSever($url) {
         $_SESSION[$this->SessionSever] = $url;
    }

    function getSever() {
        return $_SESSION[$this->SessionSever];
    }

    public function _createDir($StringPath) {
        $Dir = explode("/", $StringPath);
        $root = "";
        if ($Dir)
            foreach ($Dir as $NDir) {
                if ($NDir) {
                    $root.=$NDir . "/";
                    if (!is_dir($root)) {
                        mkdir($root, 0777);
                    }
                }
            }
    }

// thêm 1 file hinh
    function getNumberRandom($DoDai = 6) {
        $str = "";
        for ($i = 0; $i < $DoDai; $i++) {
            $str.=rand(0, 9);
        }
        return $str;
    }    
    public function upload_image($file, $tienTo = "img") {
//        url = "imghinh/";
        $this->_createDir($this->getUrlUpload());
        $tienTo .= time() . $this->getNumberRandom();
        $ext = trim(substr($file["type"], 6, strlen($file["type"])));
        $name = basename($file['name'], '.' . $ext);
        $extension = "jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF";
        if (strpos($extension, $ext) === false) {
            return false;
        }
        if (file_exists($this->getUrlUpload() . $name))
            for ($i = 0; $i < 100; $i++) {
                if (!file_exists($this->getUrlUpload() . $name . $i . '.' . $ext)) {
                    $file['name'][$k] = $name . $i . '.' . $ext;
                    break;
                }
            }
        $file['name'] = $this->getUrlUpload() . $tienTo . "." . $ext;
        copy($file["tmp_name"], $file['name']);
        move_uploaded_file($file["tmp_name"], $file['name']);
        return $file['name'];
    }

// thêm nhiều file hinh
    public function upload_multi_image($file) {
        $this->_createDir($this->getUrlUpload());
        $extension = "jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF";
        $listName = array();
        foreach ($file['name'] as $k => $name) {
            $tienTo = "img-" . time() . rand(1, 1000);
            $ext = trim(substr($file["type"][$k], 6, strlen($file["type"][$k])));
            $name = basename($file['name'][$k], '.' . $ext);
            if (strpos($extension, $ext) === false) {
                break;
            }
            if (file_exists($this->getUrlUpload() . $file['name'][$k]))
                for ($i = 0; $i < 100; $i++) {
                    if (!file_exists($this->getUrlUpload() . $name . $i . '.' . $ext)) {
                        $file['name'][$k] = $name . $i . '.' . $ext;
                        break;
                    }
                }
            $listName[] = $file['name'][$k] = $this->getUrlUpload() . $tienTo . "-" . $k . '.' . $ext;
            copy($file["tmp_name"][$k], $file['name'][$k]);
            move_uploaded_file($file["tmp_name"][$k], $file['name'][$k]);
        }
        return $listName;
    }

}

?>