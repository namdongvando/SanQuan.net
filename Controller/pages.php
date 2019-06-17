<?php

class Controller_pages extends Application {

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
        $data['Pages'] = $this->Pages->TimPages($this->Pages->GetIDPagesTieuDe($url));
        $_DanhMuc = new Model_Pages($data['Pages']);
        Model_SEO::set_Title($_DanhMuc->Title);
        Model_SEO::set_Keyword($_DanhMuc->Keyword);
        Model_SEO::set_Description($_DanhMuc->Des);
         $this->ViewTheme($data, Model_ViewTheme::get_viewthene(), "");
    }

}
?>

