<?php

class Controller_index extends Application {

    public $param;
    public $DanhMuc;
    public $TinTuc;
    public $SanPham;
    public $TinhThanh;

    function __construct() {
        $this->param = $this->getParam();
        $this->DanhMuc = new Model_DanhMuc();
        $this->TinTuc = new Model_TinTuc();
        $this->SanPham = new Model_SanPham();
        $this->TinhThanh = new Model_TinhThanh();
    }

    function index() {

        $this->ViewTheme("", Model_ViewTheme::get_viewthene(), "");
    }

    function loi404() {
        $this->View("");
    }

    function layhuyen() {
        $data['DSHuyen'] = $this->TinhThanh->DSHuyenTheoTinh($this->param[0]);
        $this->AView($data);
    }

    function showhodden() {
        $TinhThanh = $this->TinhThanh->TimTinhHuyen(intval($_POST['TinhThanh']));
        $_SESSION['ShowHidden'] = "hidden";
        $_SESSION['Tien'] = intval($_POST['Tien']);
        $this->TinhThanh->_header(BASE_DIR . "sangquan/all/" . $this->TinhThanh->bodautv($TinhThanh['TenDiaChi']) . "-" . $TinhThanh["MaDiaChi"]);
    }

    function chonkhuvuc() {
        $_SESSION["KhuVuc"] = $this->TinhThanh->TimTinhHuyen(intval($this->param[0]));
        $this->TinTuc->_header($_SERVER["HTTP_REFERER"]);
    }

}
?>

