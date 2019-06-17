<?php

class Controller_timkiem extends Application {

    public $param;
    public $DanhMuc;
    public $TinTuc;
    public $SanPham;

    function __construct() {
        $this->param = $this->getParam();
        $this->DanhMuc = new Model_DanhMuc();
        $this->TinTuc = new Model_TinTuc();
        $this->SanPham = new Model_SanPham();
    }

    function index() {
        if ($_POST) {
        }
        $this->View("");
    }

}
?>

