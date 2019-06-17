<?php

class Controller_danhmuc extends Application {

    public $param;
    public $DanhMuc;
    public $Pages;
    public $TinTuc;
    public $SanPham;

    function __construct() {
        $this->param = $this->getParam();
        $this->DanhMuc = new Model_DanhMuc();
        $this->Pages = new Model_Pages();
        $this->TinTuc = new Model_TinTuc();
        $this->SanPham = new Model_SanPham();
    }

    function index($url) {
        $DanhMuc = $this->DanhMuc->TimDanhMucTieuDe($url);
        if ($DanhMuc) {
            $_DanhMuc = new Model_DanhMuc($DanhMuc);
        } else {
            $this->DanhMuc->_header(BASE_DIR . "index/loi404");
        }
        $data['Page'] = $DanhMuc;
        Model_SEO::$Title = $_DanhMuc->Title;
        Model_SEO::$Keyword = $_DanhMuc->keywords;
        Model_SEO::$Description = $_DanhMuc->Des;
        $this->ViewTheme($data, Model_ViewTheme::get_viewthene(), "");
//        view dành cho danh muc có action nhiều view
    }

    function chitiet($url) {
        $DMHH = $this->DanhMuc->TimDanhMucTieuDe($url);
        if (!$DMHH) {
            $BaiViet = new Model_TinTuc($this->TinTuc->TimTieuDeTinTuc($url));
            $data['NoiDung'] = $BaiViet->NoiDungHH;
        } else {
            $DMHH = new Model_DanhMuc($DMHH);
            $data['NoiDung'] = $DMHH->NoiDungHH;
        }
        $this->View($data);
    }

    function timkiem() {
        $this->View("");
    }

    function timkiem1() {
        $this->View("");
    }

}
?>

