<?php

class Model_ThongBao extends Model_Adapter {

    function __construct() {
        
    }

    function setThongBao($ThongBao) {
        return $_SESSION["ThongBao"] = $ThongBao;
    }

    private function unsetThongBao() {
        unset($_SESSION['ThongBao']);
    }

    function getThongBao() {
        $MaThongBao = isset($_SESSION["ThongBao"]) ? $_SESSION["ThongBao"] : FALSE;
        unset($_SESSION["ThongBao"]);
        if ($MaThongBao) {
            $DSDinhNghia = $this->DNThongbao();
            if ($DSDinhNghia) {
                foreach ($DSDinhNghia as $DinhNgia) {
                    if ($DinhNgia['MaThongBao'] == $MaThongBao) {
                        $this->unsetThongBao();
                        return $DinhNgia;
                    }
                }
            } else {
                return $MaThongBao;
            }
        }
        return FALSE;
    }

    private function DNThongbao() {
        return FALSE;
    }

}

?>