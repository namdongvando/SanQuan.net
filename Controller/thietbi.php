<?php

class Controller_thietbi extends Application {

    public $param;
    public $DanhMuc;
    public $TinTuc;
    public $SanPham;
    public $Pages;

    function __construct() {
        $this->param = $this->getParam();
        $this->DanhMuc = new Model_DanhMuc();
        $this->Pages = new Model_Pages();
        $this->TinTuc = new Model_TinTuc();
        $this->SanPham = new Model_SanPham();
    }
    function index() {
        $this->ViewC("", "chitiet");
    }
    function dsthietbi() {
        $this->ViewC("", "thietbi");
    }
    

}
?>

