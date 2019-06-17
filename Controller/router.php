<?php

class Controller_router extends Application {

    public $param;

    function __construct() {
        $this->param = $this->getParam();
    }

    function newsdetail($TinTuc) {
        
        $this->ViewTheme(["TinTuc" => $TinTuc], Model_ViewTheme::get_viewthene(), "");
    }
    function productdetail($sampham) {
        $this->ViewTheme(["SanPham" => $sampham], Model_ViewTheme::get_viewthene(), "");
//        $this->ViewTheme($data, Model_ViewTheme::get_viewthene(), "");
    }

    function danhmuc($Danhmuc) {
        
        $this->ViewTheme(["DanhMuc" => $Danhmuc], Model_ViewTheme::get_viewthene(), "");
    }
    function pages($Danhmuc) {
        
        $this->ViewTheme(["Pages" => $Danhmuc], Model_ViewTheme::get_viewthene(), "");
    }
    function pagesdetail($pages) {
//        var_dump($pages);
        $this->ViewTheme(["Pages" => $pages], Model_ViewTheme::get_viewthene(), "");
    }
    function index() {

        $this->ViewTheme("", Model_ViewTheme::get_viewthene(), "");
    }

}
?>

