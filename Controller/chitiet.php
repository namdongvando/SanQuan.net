<?php

class Controller_chitiet extends Application {

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
        $Pages = $this->DanhMuc->TimDanhMucTieuDe($url[0]);
        if (!$Pages) {
            $this->DanhMuc->_header(BASE_DIR . "index/loi404");
        }
        $url[1] = explode(".", $url[1]);
        $url[1] = reset($url[1]);
        $_SanPham = $this->SanPham->TimSanPham4TemKhongDau($url[1]);
        if (!$_SanPham) {
            $this->DanhMuc->_header(BASE_DIR . "index/loi404");
        }
        $data['SanPham'] = $_SanPham;
        $_SanPham = new Model_SanPham($_SanPham);
        Model_SEO::set_Title($_SanPham->title);
        Model_SEO::set_Keyword($_SanPham->keyword);
        Model_SEO::set_Description($_SanPham->description);
        $this->ViewTheme($data, Model_ViewTheme::get_viewthene(), "");
    }

}
?>

