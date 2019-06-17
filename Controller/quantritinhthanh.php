<?php

class Controller_quantritinhthanh extends Controller_quantri {

    private $Param;
    private $Lang;
    private $TinhThanh;

    function __construct() {
        $this->Lang = $this->getLang();
        $this->Param = $this->getParam();
        $this->TinhThanh = new Model_TinhThanh();
        parent::__construct();
    }

    function listtinh() {
        $this->QView("");
    }

    function tinhthem() {
        if (isset($_POST['MaDiaChiCha'])) {
            $TinhThanh = $_POST;
            $TinhThanh['GhiChu'] = "";
            $this->TinhThanh->ThemTinhThanh($TinhThanh);
            $this->TinhThanh->_header($this->TinhThanh->getLinkQuanTri());
        }
        $this->QView("");
    }

    function tinhsua() {
        if (isset($_POST['MaDiaChi'])) {
            $TinhThanh = $_POST;
            $TinhThanh['GhiChu'] = "";
            $this->TinhThanh->SuaTinhThanh($TinhThanh);
            $this->TinhThanh->_header($this->TinhThanh->getLinkQuanTri());
        }
        $this->QView("");
    }

    function tinhxoa() {
        $this->TinhThanh->XoaTinhThanh($this->Param[0]);
        $this->TinhThanh->_header($this->TinhThanh->getLinkQuanTri());
    }

    function listhuyen() {
        $this->QView("");
    }

    function index() {
        $this->QView("");
    }

}

?>