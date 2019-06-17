<?php

class Controller_quantrisanpham extends Controller_quantri {

    public $SanPham;
    public $Param;
    public $DanhMuc;
    public $KhachHang;

    function __construct() {
        $this->SanPham = new Model_SanPham();
        $this->Param = $this->getParam();
        $this->DanhMuc = new Model_DanhMuc();
        $this->KhachHang = new Model_KhachHang();
        parent::__construct();
    }

    function index() {
        
    }

    function sanphamdetail() {
        $this->QView('');
    }

    function sanpham() {
        $data['DSTinTuc'] = $this->SanPham->DSSanPham();
        if ($this->Param[0]) {
            $data['DSTinTuc'] = $this->SanPham->DSSanPhamLoai($this->Param[0]);
        }
        $DSDanhMuc = array();
        $data['DSLoaiTin'] = $this->DanhMuc->LayDanhMucDeQuy();
//        $data['DSLoaiTin'] = $this->DanhMuc->DSDanhMucTheoLoai($DanhMuc['MaDanhMuc']);
        $this->QView($data);
    }

    function duyetsanpham() {
        $this->QView("");
    }

    function quantrisanphamhientin() {
        $a = $this->SanPham->TimSanPham($this->Param[0]);
        $a["AnHien"] = 1;
        $this->SanPham->SuaSanPham($a);
        $this->SanPham->_header($_SERVER["HTTP_REFERER"]);
    }

    function tindaxoa() {
        $data['DSLoaiTin'] = $this->SanPham->DSSanPhamXoa(1, 1000, $Tong);
        $this->QView($data);
    }

    function sanphamthem() {
        if (isset($_POST['them'])) {
//            them khach hang
            $hinhDaiDien = "";
            $KhachHang['SDT'] = $_POST['GhiChu']['DienThoai'];
            $KhachHang = $this->KhachHang->addKhachHangDefaut($KhachHang);
            $path = 'public/img/images/khachhang/' . $KhachHang['random'] . "/";
            var_dump($_POST);
            $Upload_img = new UploadImges_IM();
            $Upload_img->setUrlUpload($path);
            if ($_FILES['UrlHinh']['error'] == 0) {
                $hinhDaiDien = $Upload_img->upload_image($_FILES['UrlHinh'], "avata-");
            }
            if (isset($_FILES['imgClien'])) {
                if ($_FILES['imgClien'][0]['error'] == 0) {
                    $Upload_img->upload_multi_image($_FILES['imgClien']);
                }
            }


            $TinTuc['IdTin'] = date("Ymd") . time();
            $TinTuc['lang'] = "vi";
            $TinTuc['MaDanhMuc'] = $_POST['MaDanhMuc'];
            $TinTuc['TieuDe'] = $_POST['TieuDe'];
            $TinTuc['TieuDeKhongDau'] = strtolower(bodautv($_POST['TieuDe'])) . $TinTuc['IdTin'];
            $TinTuc['TomTat'] = $_POST['TomTat'];
            $TinTuc['keyword'] = $_POST['keyword'];
            $TinTuc['NoiDung'] = $_POST['NoiDung'];
            $TinTuc['title'] = $_POST['title'];
            $TinTuc['Gia'] = $_POST['Gia'];
            $TinTuc['description'] = $_POST['description'];
            $TinTuc['AnHien'] = isset($_POST['AnHien']) ? 1 : 0;
            $TinTuc['TinNoiBat'] = intval($_POST['TinNoiBat']);
            $TinTuc['NgayDang'] = date("Y-m-d h:i:s");
            $TinTuc['SoLanXem'] = 0;
            $TinTuc['IDKhachHang'] = $KhachHang['ID'];
            $TinTuc['DoQuanTrong'] = intval($_POST['DoQuanTrong']);
            $hinh = explode("/images/", $hinhDaiDien);
            $TinTuc['UrlHinh'] = end($hinh);
            $TinTuc['GhiChu'] = $this->SanPham->_encode($_POST['GhiChu']);

            foreach ($TinTuc as $k => $value) {
                $TinTuc[$k] = $this->SanPham->BoHieuUngSQL($value);
            }
            $this->SanPham->ThemSanPham($TinTuc);
            $this->SanPham->_header(BASE_DIR . "quantrisanpham/sanpham/" . $TinTuc['MaDanhMuc']);
        }
        $data['DSLoaiTin'] = $this->DanhMuc->LayDanhMucDeQuy();
        $this->QView($data);
    }

    function sanphamxoa() {
        if (isset($this->Param[0])) {
            $IdTin = $this->Param[0];
            $TinTuc = $this->SanPham->TimSanPham($IdTin);
            if ($TinTuc) {
                $TinTuc['AnHien'] = -1;
                $this->SanPham->SuaSanPham($TinTuc);
            }
        }
        if (isset($_POST['XoaChon'])) {
            foreach ($_POST['Chon'] as $key => $value) {
                $TinTuc = $this->SanPham->TimSanPham($value);
                if ($TinTuc) {
                    $TinTuc['AnHien'] = -1;
                    $this->SanPham->SuaSanPham($TinTuc);
                }
            }
        }
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

    function xoahinh() {
        if (isset($this->Param[0])) {
            $kh = $this->KhachHang->ThongTinKhachHang($this->Param[0]);
            if ($kh) {
                $path = "public/img/images/khachhang/" . $kh['random'] . '/' . $this->Param[1];
                unlink($path);
            }
        }
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

    function sanphamsua() {
        if (isset($_POST['sua'])) {
            $TinTuc = $this->SanPham->TimSanPham($_POST['IdTin']);
            if ($TinTuc) {

                $hinhDaiDien = $TinTuc['UrlHinh'];
                $KhachHang = $this->KhachHang->ThongTinKhachHang($TinTuc["IDKhachHang"]);
                $path = 'public/img/images/khachhang/' . $KhachHang['random'] . "/";
                $Upload_img = new UploadImges_IM();
                $Upload_img->setUrlUpload($path);
                if ($_FILES['UrlHinh']['error'] == 0) {
                    $hinhDaiDien = $Upload_img->upload_image($_FILES['UrlHinh'], "avata-");
                }
                if (isset($_FILES['imgClien'])) {
//                   var_dump($_FILES['imgClien']);
                    if ($_FILES['imgClien']['error'][0] == 0) {
                        $Upload_img->upload_multi_image($_FILES['imgClien']);
                    }
                }
                $TinTuc['lang'] = "vi";
                $TinTuc['MaDanhMuc'] = $_POST['MaDanhMuc'];
                $TinTuc['TieuDe'] = $_POST['TieuDe'];
                $TinTuc['TieuDeKhongDau'] = strtolower(bodautv($_POST['TieuDe'])) . $TinTuc['IdTin'];
                $TinTuc['TomTat'] = strip_tags($_POST['TomTat']);
                $TinTuc['keyword'] = $_POST['keyword'];
                $TinTuc['NoiDung'] = $_POST['NoiDung'];
                $TinTuc['title'] = $_POST['title'];
                $TinTuc['Gia'] = $_POST['Gia'];
                $TinTuc['DoQuanTrong'] = $_POST['DoQuanTrong'];
                $TinTuc['description'] = $_POST['description'];
                $TinTuc['AnHien'] = isset($_POST['AnHien']) ? intval($_POST['AnHien']) : 0;
                $TinTuc['TinNoiBat'] = intval($_POST['TinNoiBat']);
                $hinh = explode("/images/", $hinhDaiDien);
                $TinTuc['UrlHinh'] = end($hinh);
                $TinTuc['GhiChu'] = $this->SanPham->_encode($_POST['GhiChu']);
                foreach ($TinTuc as $k => $value) {
                    $TinTuc[$k] = $this->SanPham->BoHieuUngSQL($value);
                }
                $this->SanPham->SuaSanPham($TinTuc);
//                $this->SanPham->_header($this->SanPham->getLinkDSSanPham());
            }
        }
        $data['TinTuc'] = $this->SanPham->TimSanPham($this->Param['0']);
        $data['DSLoaiTin'] = $this->DanhMuc->LayDanhMucDeQuy();
        $this->QView($data);
    }

}

?>