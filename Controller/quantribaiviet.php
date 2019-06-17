<?php

class Controller_quantribaiviet extends Controller_quantri {

    public $TinTuc;
    public $Param;
    public $DanhMuc;

    function __construct() {
        parent::__construct();
        $this->TinTuc = new Model_TinTuc();
        $this->Param = $this->getParam();
        $this->DanhMuc = new Model_DanhMuc();
    }

    function index() {
        
    }

    function tintuc() {
        $data['DSTinTuc'] = $this->TinTuc->DSTinTucAll();
        $this->Param[0] = intval($this->Param[0]);
        if ($this->Param[0] > 0) {
            $data['DSTinTuc'] = $this->TinTuc->DSAllTinTheoLoai($this->Param[0]);
        }
        $DSDanhMuc = array();
        $data['DSLoaiTin'] = $this->DanhMuc->LayDanhMucDeQuy();
        $this->QView($data);
    }

    function tintucsua() {
        if (isset($_POST['sua'])) {
            $TinTuc = $this->TinTuc->TimTinTuc($_POST['IdTin']);
            if ($TinTuc) {
                $TinTuc['lang'] = "vi";
                $TinTuc['MaDanhMuc'] = $_POST['MaDanhMuc'];
                $TinTuc['TieuDe'] = $_POST['TieuDe'];
                $TinTuc['TieuDeKhongDau'] = strtolower(bodautv($_POST['TieuDe'])) . $TinTuc['IdTin'];
                $TinTuc['TomTat'] = $_POST['TomTat'];
                $TinTuc['keyword'] = $_POST['keyword'];
                $TinTuc['NoiDung'] = $_POST['NoiDung'];
                $TinTuc['Stt'] = $_POST['Stt'];
                $TinTuc['title'] = $_POST['title'];
                $TinTuc['description'] = $_POST['description'];
                $TinTuc['AnHien'] = isset($_POST['AnHien']) ? 1 : 0;
                $TinTuc['TinNoiBat'] = isset($_POST['TinNoiBat']) ? 1 : 0;
                $TinTuc['NgayDang'] = date("Y-m-d h:i:s");
                $hinh = explode("/images/", $_POST['UrlHinh']);
                $TinTuc['UrlHinh'] = end($hinh);
                foreach ($TinTuc as $k => $value) {
                    $TinTuc[$k] = htmlspecialchars_decode($value);
                }
                $this->TinTuc->SuaTinTuc($TinTuc);
                $this->TinTuc->_header($this->TinTuc->getLinkDSBVPages());
            }
        }
        $data['TinTuc'] = $this->TinTuc->TimTinTuc($this->Param['0']);
        $data['DSLoaiTin'] = $this->DanhMuc->LayDanhMucDeQuy();
        $this->QView($data);
    }

    function tintucthem() {
        if (isset($_POST['them'])) {
            $TinTuc['IdTin'] = date("Ymd") . time();
            $TinTuc['lang'] = "vi";
            $TinTuc['MaDanhMuc'] = $_POST['MaDanhMuc'];
            $TinTuc['TieuDe'] = htmlspecialchars_decode($_POST['TieuDe']);
            $TinTuc['TieuDeKhongDau'] = strtolower(bodautv($_POST['TieuDe'])) . $TinTuc['IdTin'];
            $TinTuc['TomTat'] = htmlspecialchars_decode($_POST['TomTat']);
            $TinTuc['keyword'] = $_POST['keyword'];
            $TinTuc['NoiDung'] = htmlspecialchars_decode($_POST['NoiDung']);
            $TinTuc['title'] = htmlspecialchars_decode($_POST['title']);
            $TinTuc['description'] = $_POST['description'];
            $TinTuc['Stt'] = $_POST['Stt'];
            $TinTuc['AnHien'] = isset($_POST['AnHien']) ? 1 : 0;
            $TinTuc['TinNoiBat'] = isset($_POST['TinNoiBat']) ? 1 : 0;
            $TinTuc['NgayDang'] = date("Y-m-d h:i:s");
            $TinTuc['SoLanXem'] = 0;
            $hinh = explode("/images/", $_POST['UrlHinh']);
            $TinTuc['UrlHinh'] = end($hinh);
            $this->TinTuc->ThemTinTuc($TinTuc);
            $this->TinTuc->_header($this->TinTuc->getLinkDSBVPages() . $TinTuc['MaDanhMuc']);
        }
        $data['DSLoaiTin'] = $this->DanhMuc->LayDanhMucDeQuy();
        $this->QView($data);
    }

    function tintucxoa() {
        if (isset($this->Param[0])) {
            $IdTin = $this->Param[0];
            $this->TinTuc->XoaTinTuc($IdTin);
        }
        if (isset($_POST['XoaChon'])) {
            foreach ($_POST['Chon'] as $maTinTuc) {
                $this->TinTuc->XoaTinTuc($maTinTuc);
            }
        }
        $this->TinTuc->_header($this->TinTuc->getLinkDSBVPages());
    }

}

?>