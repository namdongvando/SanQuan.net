<?php

class Controller_chitietsp extends Application {

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

    function index($url) {
        print_r($url);
        $Pages = $this->Pages->TimPages4TieuDeKD($url[0]);
        Model_SEO::set_Title($_SanPham->title);
        Model_SEO::set_Keyword($_SanPham->keyword);
        Model_SEO::set_Description($_SanPham->description);
        $this->ViewTheme($data, Model_ViewTheme::get_viewthene(), "");
    }

}
?>

