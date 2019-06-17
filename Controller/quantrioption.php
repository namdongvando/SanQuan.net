<?php

class Controller_quantrioption extends Controller_quantri {

    public $Option;
    public $Param;

    function __construct() {
        $this->Option = new Model_Option();
        $this->Param = $this->getParam();
        parent::__construct();
    }

    function index() {
        if (isset($_POST['SuaOption'])) {
            foreach ($_POST['GiaTriVN'] as $MaOption => $GiaTri) {
                $Optionsua = $this->Option->TimOption($MaOption);
                if ($Optionsua['LoaiOption'] == 1) {
                    $Hinh = explode("/images/", $GiaTri);
                    $Hinh = end($Hinh);
                    $Optionsua['GiaTriVN'] = $Hinh;
                } else {
                    $Optionsua['GiaTriVN'] = $GiaTri;
                }
                $this->Option->SuaOption($Optionsua);
            }
            unset($_POST);
        }
        $this->QView("");
    }

    function optionthem() {
        if (isset($_POST['ThemOption'])) {
            $TienTo = $this->Option->getTienToOption($_POST['LoaiOption']);
            $Option['MaOption'] = $TienTo . $_POST['MaOption'];
            $Option['LoaiOption'] = $_POST['LoaiOption'];
            $ThuocTinh['type'] = $_POST['LoaiOption'];
            $ThuocTinh['title'] = $_POST['title'];
            $Option['GhiChu'] = $this->Option->_encode($ThuocTinh);
            $this->Option->ThemOption($Option);
            $this->Option->_header(BASE_DIR . "quantrioption");
        }
        $this->QView("");
    }

    function optionsua() {
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

    function xoaoption() {

        if (isset($_POST['XoaOption'])) {
            foreach ($_POST['OptionXoa'] as $Option) {
                $this->Option->XoaOption($Option['MaOption']);
            }
        }
        if (isset($this->Param[0])) {
            $this->Option->XoaOption($this->Param[0]);
        }
        header("Location: " . BASE_DIR . 'quantrioption/index');
    }

}

?>