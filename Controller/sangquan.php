<?php

class Controller_sangquan extends Application {

    public $_Param;

    function __construct() {
        $this->_Param = $this->getParam();
    }

    function index() {
        $Model_TinhThanh = new Model_TinhThanh();
        $Model_DanhMuc = new Model_DanhMuc();
        $_Param = $this->_Param;
        if ($_Param[1] != "all") {
            $maTinhThanh = explode("-", $_Param[1]);
            $Model_TinhThanh = new Model_TinhThanh();
            $maTinhThanh = end($maTinhThanh);
            $_Tinh = new Model_TinhThanh($Model_TinhThanh->TimTinhHuyen($maTinhThanh));
            $_SESSION["TenTinhThanh"] = $_Tinh->TenKhongDau;
        } else {
            $_Tinh = new Model_TinhThanh();
            $_Tinh->MaDiaChi = 0;
            $_Tinh->TenDiaChi = "{Lang_TatCa}";
        }
        if ($_Param[0] != "all") {
            $_DanhMuc = new Model_DanhMuc($Model_DanhMuc->TimDanhMucTieuDe($_Param[0]));
            $_SESSION["TenDanhMucKhongDau"] = $_DanhMuc->TenKhongDau;
        } else {
            $_DanhMuc = new Model_DanhMuc(0);
            $_DanhMuc->TenDanhMuc = "{Lang_TatCa}";
            $_DanhMuc->MaDanhMuc = "";
        }
        Model_SEO::set_Title($_DanhMuc->TenDanhMuc . " - " . $_Tinh->TenDiaChi);
        Model_SEO::set_Description($_Tinh->TenDiaChi . " , " . $_DanhMuc->Des);
        Model_SEO::set_Keyword($_DanhMuc->keywords);

        $this->ViewTheme("", Model_ViewTheme::get_viewthene(), "");
    }

}

?>