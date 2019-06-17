<?php

class Controller_mobie extends Application {

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
       $data="";
        $this->controllerView($data);
    }

    function chitiet() {
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

}
?>

