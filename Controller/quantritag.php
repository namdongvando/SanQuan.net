<?php

class Controller_quantritag extends Controller_quantri {

    public $Option;
    public $Param;

    function __construct() {
        $this->Option = new Model_Option();
        $this->Param = $this->getParam();
        parent::__construct();
    }

    function index() {
        $this->QView("");
    }

    function tagthem() {
        if (isset($_POST['ThemOption'])) {
            $Option['MaOption'] = "tag_" . time() . rand(1, 10000);
            $Option['LoaiOption'] = 4;
            $Option['GiaTriVN'] = $_POST['GiaTri'];
            $Option['GiaTriEN'] = $_POST['GiaTri'];
            $Option['GhiChu'] = "{}";
            $this->Option->ThemOptionFull($Option);
        }
        $this->Option->_header(BASE_DIR . "quantritag/");
    }

    function xoatag() {
        if ($this->Param[0]) {
            $Option = $this->Option->TimOption($this->Param[0]);
            $this->Option->XoaOption($Option['MaOption']);
            $this->Option->_header(BASE_DIR . "quantritag/index");
        }
    }
    function tagsua() {
        $Option = $this->Option->TimOption($this->Param[0]);
        if (!$Option) {
            $_Option['LoaiOption'] = 1;
            $_Option['MaOption'] = $this->Param[0];
            $_Option['GhiChu'] = "";
            $this->Option->ThemOption($_Option);
        }
        if (isset($_POST['SuaOption'])) {
            $Option = $this->Option->TimOption($this->Param[0]);
            $GiTri = array();
            if (isset($_POST['k']))
                foreach ($_POST['k'] as $k => $v) {
                    $GiTri[$v] = $_POST['v'][$k];
                }
            $Option["LoaiOption"] = $_POST['LoaiOption'];
            $Option["GhiChu"] = $this->Option->_encode($_POST["GhiChu"]);
            $Option["GiaTriVN"] = $Option["GiaTriEN"] = $this->Option->_encode($GiTri);
            $this->Option->SuaOption($Option);
        }
        if (isset($_POST['SuaOptionGiaTri'])) {
            $Option = $this->Option->TimOption($this->Param[0]);
            $Option["LoaiOption"] = $_POST['LoaiOption'];
            $Option["GhiChu"] = $this->Option->_encode($_POST["GhiChu"]);
            $Option["GiaTriVN"] = $Option["GiaTriEN"] = $_POST['GiaTri'];
            $this->Option->SuaOption($Option);
        }



        $data['Option'] = $Option = $this->Option->TimOption($this->Param[0]);
        $this->QView($data);
    }

}

?>