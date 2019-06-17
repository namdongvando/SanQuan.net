<?php

class Controller_quantri extends Application {

    private $Param;
    private $QuanTri;
    private $DanhGia;
    private $Menu;
    private $Tag;
    private $SanPham;
    private $TinTuc;
    private $CuaHang;
    private $DonHang;
    private $DanhMuc;
    private $QuanCao;
    private $Slide;
    private $DoiTac;
    private $Option;
    private $HoTro;
    private $GioiThieu;
    private $TrangLienKet;
    private $KhachHang;
    private $PhanQuyen;
    private $Pages;

    function __construct() {
        $this->PhanQuyen = new Model_PhanQuyen();
        $this->Pages = new Model_Pages();
        $this->DonHang = new Model_DonHang();
        $this->KhachHang = new Model_KhachHang();
        $this->Tag = new Model_Tag();
        $this->TrangLienKet = new Model_TrangLienKet();
        $this->QuanTri = new Model_QuanTri();
        $this->Menu = new Model_Menu();
        $this->SanPham = new Model_SanPham();
        $this->DanhMuc = new Model_DanhMuc();
        $this->CuaHang = new Model_CuaHang();
        $this->GioiThieu = new Model_GioiThieu();
        $this->QuanCao = new Model_QuangCao();
        $this->TinTuc = new Model_TinTuc();
        $this->Slide = new Model_Slide();
        $this->Param = $this->getParam();
        $this->DoiTac = new Model_DoiTac();
        $this->Option = new Model_Option();
        $this->DanhGia = new Model_DanhGia();
        if (!isset($_SESSION[QuanTri])) {
            if ($this->getController() == "quantri" & $this->getAction() == "quenmatkhau") {
                
            } elseif ($this->getController() != "quantri" || $this->getAction() != "login") {
                header("Location: " . BASE_DIR . "quantri/login");
            } else {
                
            }
        }
    }

    function index() {

        if (isset($_POST['SuaDoQuanTrong'])) {
            foreach ($_POST['DoQuanTrong'] as $k => $DoQuanTrong) {
                $SP = $this->SanPham->TimSanPham($k);
                $SP['DoQuanTrong'] = $DoQuanTrong;
                $this->SanPham->SuaSanPham($SP);
            }
        }

        $this->QView("");
    }

    function tintucanhien() {
        $IdTin = $this->Param[0];
        $TinTuc = $this->TinTuc->TimTinTuc($IdTin);
        $TinTuc['AnHien'] = $TinTuc['AnHien'] == 1 ? 0 : 1;
        $this->TinTuc->SuaTinTuc($TinTuc);
    }

    function tintucanhiennoibat() {
        $IdTin = $this->Param[0];
        $TinTuc = $this->TinTuc->TimTinTuc($IdTin);
        foreach ($TinTuc as $k => $value) {
            $TinTuc[$k] = mysqli_real_escape_string($this->TinTuc->getconn(), $value);
        }
        $TinTuc['TinNoiBat'] = $TinTuc['TinNoiBat'] == 1 ? 0 : 1;
        $this->TinTuc->SuaTinTuc($TinTuc);
        return;
    }

    function tintuc() {
        $data['DSTinTuc'] = $this->TinTuc->DSTinTuc();
        if ($this->Param[0]) {
            $data['DSTinTuc'] = $this->TinTuc->DSAllTinTheoLoai($this->Param[0]);
        }
        $DSDanhMuc = array();
        $data['DSLoaiTin'] = $this->DanhMuc->LayDanhMucDeQuy();
        $this->QView($data);
    }

    function xoatintuc() {
        if (isset($this->Param[0])) {
            $IdTin = $this->Param[0];
            $this->TinTuc->XoaTinTuc($IdTin);
        }
        if (isset($_POST['XoaChon'])) {
            foreach ($_POST['Chon'] as $maTinTuc) {
                $this->TinTuc->XoaTinTuc($maTinTuc);
            }
        }

        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

    function Taotabletag() {
        $this->Tag->TaoBangTag();
        $this->Tag->TaoBangTagChiTiet();
    }

    function tintucthem() {
        if (isset($_POST['them'])) {
            $TinTuc['IdTin'] = date("Ymd") . time();
            $TinTuc['lang'] = "vi";
            $TinTuc['MaDanhMuc'] = $_POST['MaDanhMuc'];
            $TinTuc['TieuDe'] = $this->SanPham->Bokytusql($_POST['TieuDe']);
            $TinTuc['TieuDeKhongDau'] = strtolower(bodautv($_POST['TieuDe'])) . $TinTuc['IdTin'];
            $TinTuc['TomTat'] = $_POST['TomTat'];
            $TinTuc['keyword'] = $_POST['keyword'];
            $TinTuc['NoiDung'] = $this->SanPham->Bokytusql($_POST['NoiDung']);
            $TinTuc['title'] = $this->SanPham->Bokytusql($_POST['title']);
            $TinTuc['description'] = $_POST['description'];
            $TinTuc['Stt'] = $_POST['Stt'];
            $TinTuc['AnHien'] = isset($_POST['AnHien']) ? 1 : 0;
            $TinTuc['TinNoiBat'] = isset($_POST['TinNoiBat']) ? 1 : 0;
            $TinTuc['NgayDang'] = date("Y-m-d h:i:s");
            $TinTuc['SoLanXem'] = 0;
            $hinh = explode("/images/", $_POST['UrlHinh']);
            $TinTuc['UrlHinh'] = end($hinh);
            foreach ($TinTuc as $k => $value) {
                $TinTuc[$k] = mysqli_real_escape_string($this->TinTuc->getconn(), $value);
            }
            $this->TinTuc->ThemTinTuc($TinTuc);

            header("Location: " . BASE_DIR . "quantri/tintuc/" . $TinTuc['MaDanhMuc']);
        }
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
                    $TinTuc[$k] = mysqli_real_escape_string($this->TinTuc->getconn(), $value);
                }
                $this->TinTuc->SuaTinTuc($TinTuc);
                $this->TinTuc->_header(BASE_DIR . "quantri/tintuc/" . $TinTuc['MaDanhMuc']);
            }
        }
        $data['TinTuc'] = $this->TinTuc->TimTinTuc($this->Param['0']);
        $data['DSLoaiTin'] = $this->DanhMuc->LayDanhMucDeQuy();
        $this->QView($data);
    }

    function sanphamsua() {
        if (isset($_POST['sua'])) {
            $TinTuc = $this->SanPham->TimSanPham($_POST['IdTin']);
            if ($TinTuc) {
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
                $TinTuc['TinNoiBat'] = isset($_POST['TinNoiBat']) ? 1 : 0;
                $hinh = explode("/images/", $_POST['UrlHinh']);
                $TinTuc['UrlHinh'] = end($hinh);
                foreach ($TinTuc as $k => $value) {
                    $TinTuc[$k] = mysqli_real_escape_string($this->TinTuc->getconn(), $value);
                }
                $this->SanPham->SuaSanPham($TinTuc);
                header("Location: " . $_SERVER["HTTP_REFERER"]);
            }
        }
        $data['TinTuc'] = $this->SanPham->TimSanPham($this->Param['0']);
        $data['DSLoaiTin'] = $this->DanhMuc->LayDanhMucDeQuy();
        $this->QView($data);
    }

    function logout() {
//$this->LaySanPhamTheoLoai($maLoai);
        unset($_SESSION[QuanTri]);
        header("Location: " . BASE_DIR . "quantri/index");
    }

    function login() {

        $gfa = new PHPGangsta_GoogleAuthenticator();
        $secret = "WK7ZYHSVGFQM2UWZ";
        if (isset($_POST['submit'])) {
            $gfa = new PHPGangsta_GoogleAuthenticator();
            $code = $gfa->getCode($secret);
            $gfac = intval($_POST["gfa"]);
            if (true) {
                $NhanVien['username'] = $_POST['user'];
                $NhanVien['password'] = $_POST['pass'];
                $kq = $this->QuanTri->KienTraDangNhap($NhanVien);
                if ($kq) {
                    $_SESSION[QuanTri] = $kq;
                    header("Location: " . BASE_DIR . "quantri");
                }
            }
        }
        
        $this->AView("");
    }

// chủng laoị tin
    function xoadanhmuc() {
        if (isset($this->Param[0])) {
            if ($this->Param[0]) {
                $danhMuc = $this->DanhMuc->ChiTietDM($this->Param[0]);
                if ($danhMuc) {
// kiểm tra xem có con hay khong
                    if ($this->DanhMuc->XoaDanhMuc($danhMuc, TRUE)) {
                        $this->setThongBao("Xóa Thành Công");
                    } else {
                        $this->setThongBao("Không Thể Xóa Danh Mục Này");
                    }

// neu khong có con thi có thể xóa
                } else {
                    $this->setThongBao("Không Có Danh Mục Này");
                }
            }
        }
        if (isset($_SERVER["HTTP_REFERER"]))
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        header("Location: " . BASE_DIR . "quantri/danhmuc");
    }

    function danhmuc() {
        $data['ChonDanhMuc'] = FALSE;
        $data['DSDanhMucCha'] = $this->DanhMuc->DSDanhMuc(0);
        if (isset($this->Param[0])) {
            if ($this->Param[0]) {
                $data['DSDanhMucCha'] = $this->DanhMuc->DSDanhMuc($this->Param[0]);
            }
        }

        $DanhMuc1 = $this->DanhMuc->DSDanhMucTheoLoai(1);
        $data['DSDanhMuc'] = $DanhMuc1;
        $data['DSDanhMucOp'] = $this->DanhMuc->LayDanhMucDeQuy();
        if (!$data['DSDanhMucCha']) {
            header("Location: " . BASE_DIR . "quantri/danhmucthem");
        }
        $this->QView($data);
    }

    function danhmucthem() {
        if (isset($_POST['ThemDanhMuc'])) {
            $DanhMuc = $_POST;
            $DanhMuc['TenKhongDau'] = strtolower(bodautv($DanhMuc['TenDanhMuc']));
            $Hinh = explode("/images/", $_POST['UrlHinh']);
            $DanhMuc['UrlHinh'] = end($Hinh);
            $DanhMuc['ThuocTinh'] = "";
            $DanhMuc['LoaiDanhMuc'] = isset($_POST['LoaiDanhMuc']) ? 1 : 0;
            $kq = $this->DanhMuc->TimDanhMucTieuDe($DanhMuc['TenKhongDau']);
            if (!$kq) {
                $this->DanhMuc->ThemDanhMuc($DanhMuc);
            }
            header("Location: " . BASE_DIR . "quantri/danhmuc");
        }
        $DanhMuc1 = $this->DanhMuc->DSDanhMucTheoLoai(1);
        $data['DSDanhMuc'] = $DanhMuc1;
        $data['DSDanhMucOp'] = $this->DanhMuc->DSDanhMuc(0);
        $data['DSDanhMucCha'] = $this->LayDanhMuc();
        $this->QView($data);
    }

    function danhmucsua() {
        if (isset($_POST['SuaDanhMuc'])) {
            $DanhMuc = $this->DanhMuc->TimDanhCha($_POST['MaDanhMuc']);
            foreach ($DanhMuc as $k => $v) {
                if (isset($_POST[$k]))
                    $DanhMuc[$k] = $_POST[$k];
            }
            $Hinh = explode("/images/", $_POST['UrlHinh']);
            $DanhMuc['TenKhongDau'] = strtolower(bodautv($DanhMuc['TenDanhMuc']));
            $DanhMuc['UrlHinh'] = end($Hinh);
            $DanhMuc['LoaiDanhMuc'] = isset($_POST['LoaiDanhMuc']) ? 1 : 0;
            $this->DanhMuc->SuaDanhMuc($DanhMuc);
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
        $DanhMuc1 = $this->DanhMuc->DSDanhMucTheoLoai(1);
        $data['DSDanhMuc'] = $DanhMuc1;
        $data['DSDanhMucOp'] = $this->DanhMuc->DSDanhMuc(0);
        $data['DSDanhMucCha'] = $this->LayDanhMuc();
        if (isset($this->Param[0])) {
            $data['DMChon'] = $this->DanhMuc->TimDanhCha($this->Param[0]);
        }
        $this->QView($data);
    }

    protected function LayDanhMuc() {

        $Cap1 = $this->DanhMuc->DSDanhMuc();
//      lấy ra cấp 1 thanh công
//      print_r($Cap1);
        if ($Cap1) {
            foreach ($Cap1 as $DSDanhMuc1) {
//         dsn sách các danh muc cap2 theop cap1
//       danh sách cáp 2
                $Cap2 = $this->DanhMuc->DSDanhMuc($DSDanhMuc1['MaDanhMuc']);
//         print_r($Cap2);
                if ($Cap2)
                    if (count($Cap2) >= 1) {
                        foreach ($Cap2 as $DSDanhMuc2) {
                            $Cap3 = $this->DanhMuc->DSDanhMuc($DSDanhMuc2['MaDanhMuc']);
                            if ($Cap3) {
                                foreach ($Cap3 as $DSDanhMuc3) {
                                    $DSDanhMuc2['CapCon'][] = $DSDanhMuc3;
                                }
                            }
                            $DSDanhMuc1['CapCon'][] = $DSDanhMuc2;
                        }
                    }
                $data[] = $DSDanhMuc1;
            }
        } else {
            return FALSE;
        }

        return $data;
    }

    function suasanpham() {

        if (isset($_POST['SuaSanPham'])) {
            $SanPham = $this->SanPham->TimSanPham($_POST['MaSanPham']);
            $SanPham["TenSanPham"] = $this->BokyTuDacBiet($_POST["TenSanPham"]);
            $SanPham["MaDanhMuc"] = $_POST["MaDanhMuc"];
            $SanPham["Gia"] = $_POST["Gia"];
            $SanPham["MoTa"] = $_POST["MoTa"];
            $SanPham["ChiTiet"] = $_POST["ChiTiet"];
            $SanPham["AnHien"] = isset($_POST["AnHien"]) ? 1 : 0;
            date_default_timezone_set("Asia/Bangkok");
            $SanPham["NgayDang"] = date("Y-m-d h:i:s");
            $UrlHinh = explode("images/", $_POST['UrlHinh']);
            $SanPham["UrlHinh"] = end($UrlHinh);
            $this->SanPham->SuaSanPham($SanPham);


            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }

        if ($this->Param[0]) {
            $data['SanPham'] = $this->SanPham->TimSanPham($this->Param[0]);
        } else {
            header("Lcoation: " . BASE_DIR . "quantri/sanpham");
        }

        $data['DSDanhMuc'] = $this->DanhMuc->LayDanhMucDeQuy();
        $this->QView($data);
    }

    function xoasanpham() {
        $kt = TRUE;
        if (isset($this->Param[0])) {
            $maSanPham = $this->Param[0];
            if ($maSanPham) {
                $SanPham = $this->SanPham->TimSanPham4ID($maSanPham);
                $this->SanPham->XoaSanPham($SanPham['IdTin']);
//                $urlHinh = "public/img/images/" . $SanPham['UrlHinh'];
//                if (is_file($urlHinh)) {
//                    unlink("public/img/images/" . $SanPham['UrlHinh']);
//                }
            }
        }
        $_SERVER['HTTP_REFERER'] = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : BASE_DIR . "quantri/sanpham/";
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }

    function xoaslide() {
        $this->Slide->XoaSlide($this->Param[0]);
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

    function slidesua() {
        $data["Slide"] = FALSE;
        if (isset($_POST['SuaSlide'])) {
            $hinh = explode("/images/", $_POST['UrlHinh']);
            $_POST["UrlHinh"] = end($hinh);
            $hinh = explode("/images/", $_POST['TomTat']);
            $_POST["TomTat"] = end($hinh);
            $this->Slide->SuaSlide($_POST);
            $data['TBT'] = "Thành Công";
            header("Location: " . BASE_DIR . "quantri/slide");
        }
        if (isset($this->Param[0])) {
            $data["Slide"] = $this->Slide->TimSlide($this->Param[0]);
        }
        $this->QView($data);
    }

    function slidethem() {
        $data = "";
        if (isset($_POST['ThemSlide'])) {
            $hinh = explode("/images/", $_POST['UrlHinh']);
            $_POST["UrlHinh"] = end($hinh);
            $hinh = explode("/images/", $_POST['TomTat']);
            $_POST["TomTat"] = end($hinh);
            $this->Slide->ThemSlide($_POST);
            header("Location: " . BASE_DIR . "quantri/slide");
            $data['TBT'] = "Thành Công";
        }
        $this->QView($data);
    }

    function slide() {
        $data['DSSlide'] = $this->Slide->DSSlide();
        if (count($data['DSSlide'])) {
            $data['TBF'] = "Chưa Có Slide";
        }
        $this->QView($data);
    }

    function themsanpham() {
//      Array ( [TenSanPham] => sdsfsd [MaDanhMuc] => 20 [Gia] => 23423 [MoTa] => asdas [ChiTiet] => wedfsfsd [AnHien] => 1 [ThemSanPham] => {Them} )

        if (isset($_POST["ThemSanPham"])) {
            $SanPham["MaSanPham"] = $this->RandomString(4) . $this->RandomString(4);
            $SanPham["TenSanPham"] = $_POST["TenSanPham"];
            $SanPham["MaDanhMuc"] = $_POST["MaDanhMuc"];
            $SanPham["Gia"] = $_POST["Gia"];
            $SanPham["MoTa"] = $_POST["MoTa"];
            $SanPham["ChiTiet"] = $_POST["ChiTiet"];
            $SanPham["AnHien"] = isset($_POST["AnHien"]) ? 1 : 0;
            date_default_timezone_set("Asia/Bangkok");
            $SanPham["NgayDang"] = date("Y-m-d h:i:s");
            $UrlHinh = explode("images/", $_POST['UrlHinh']);
            $SanPham["UrlHinh"] = end($UrlHinh);
            $SanPham["ChuSanPham"] = "PGV_EXPRess";
            $SanPham["GhiChu"] = '';
            $SanPham["SoLanMua"] = 0;
            $SanPham["SoLanXem"] = 0;
            $SanPham["GiamGia"] = 0;
//         print_r($SanPham);

            $this->SanPham->ThemSanPham($SanPham);
            header("Location: " . BASE_DIR . "quantri/sanpham/" . $SanPham["MaDanhMuc"]);
        }

//      $SanPham['TenSanPham'] = $this->BokyTuDacBiet($_POST['TenSanPham']);
//      $SanPham['MaDanhMuc'] = $this->BokyTuDacBiet($_POST['MaDanhMuc']);

        if ($this->Param[0]) {
            $data['DanhMucHienTai'] = $this->Param[0];
        } else {
            $data['DanhMucHienTai'] = FALSE;
        }

        $DanhMuc1 = $this->DanhMuc->DSDanhMucTheoLoai(1);
        $data['DSDanhMuc'] = $DanhMuc1;
        $this->QView($data);
    }

    function duyetsanpham() {

        if (isset($this->Param[0])) {
            if ($this->Param[0] == 'chapnhan') {
                $SanPham['AnHien'] = 1;
                $SanPham['MaSanPham'] = $this->Param[1];
                $this->SanPham->DuyetSanPham($SanPham);
            }
            if ($this->Param[0] == 'an') {
                $SanPham['AnHien'] = 0;
                $SanPham['MaSanPham'] = $this->Param[1];
                $this->SanPham->DuyetSanPham($SanPham);
            }
            if ($this->Param[0] == 'khongchapnhan') {
                $SanPham['AnHien'] = -2;
                $SanPham['MaSanPham'] = $this->Param[1];
                $this->SanPham->DuyetSanPham($SanPham);
            }
        }




        $data['DSDanhMucChoDuyet'] = $this->SanPham->DSSanPhamChoDuyet();
//      $DSSanPhamChoDuyet = ; 
        $data['DSDanhMuc'] = $this->LayDanhMuc();
        $this->QView($data);
    }

    function xemsanphamduyet() {
        $data['SanPhamDuyet'] = $this->SanPham->TimSanPham($this->Param[0]);
        $data['ChuSanPham'] = $this->KhachHang->LayThongTinKhachHang($data['SanPhamDuyet']['ChuSanPham']);
        $data['DanhMucSanPham'] = $this->DanhMuc->TimDanhCha($data['SanPhamDuyet']['MaDanhMuc']);

        $this->QView($data);
    }

    function LaySanPhamTheoLoai($maLoai) {

        $DSDanhMucCon[] = $this->DanhMuc->TimDanhCha($maLoai);
        $this->DanhMuc->LayDanhMucDeQuy($maLoai, $DSDanhMucCon);
        $data['DSSanPham'] = array();
        if ($DSDanhMucCon) {
            foreach ($DSDanhMucCon as $DanhMucCon) {
//               ds sản pham cap con
                $DSSanPham0 = $this->SanPham->DSSanPhamLoaiALL($DanhMucCon['MaDanhMuc']);
                if ($DSSanPham0) {
                    $data['DSSanPham'] = array_merge($data['DSSanPham'], $DSSanPham0);
                }
//               danh sách sản pham cap ccon
                if (isset($DanhMucCon['CapCon'])) {
                    foreach ($DanhMucCon['CapCon'] as $DMCon) {
                        $DSSanPham1 = $this->SanPham->DSSanPhamLoaiALL($DMCon['MaDanhMuc']);
                        if ($DSSanPham1) {
                            $data['DSSanPham'] = array_merge($data['DSSanPham'], $DSSanPham1);
                        }
// danh sách sản phảm cap con
                        if (isset($DMCon['CapCon'])) {
                            foreach ($DMCon['CapCon'] as $DM) {
                                $DSSanPham2 = $this->SanPham->DSSanPhamLoaiALL($DM['MaDanhMuc']);
                                if ($DSSanPham2) {
                                    $data['DSSanPham'] = array_merge($data['DSSanPham'], $DSSanPham2);
                                }
                            }
                        }
                    }
                }
            }
        }
        return $data['DSSanPham'];
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

    function sanphamtrangchu() {
        $data['DSTinTuc'] = $this->SanPham->DSSanPhamHome();
        $this->QView($data);
    }

    function sanphamthem() {
        if (isset($_POST['them'])) {
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
            $TinTuc['TinNoiBat'] = isset($_POST['TinNoiBat']) ? 1 : 0;
            $TinTuc['NgayDang'] = date("Y-m-d h:i:s");
            $TinTuc['SoLanXem'] = 0;
            $hinh = explode("/images/", $_POST['UrlHinh']);
            $TinTuc['UrlHinh'] = end($hinh);
            foreach ($TinTuc as $k => $value) {
                $TinTuc[$k] = mysqli_real_escape_string($this->TinTuc->getconn(), $value);
            }
            $this->SanPham->ThemSanPham($TinTuc);
            header("Location: " . BASE_DIR . "quantri/sanpham/" . $TinTuc['MaDanhMuc']);
        }
        $data['DSLoaiTin'] = $this->DanhMuc->LayDanhMucDeQuy();
        $this->QView($data);
    }

    private function DSSanPhamDanhMuc($MaDanhMuc) {
        $SanPham = array();
        $DSDanhMucCon = $this->DanhMuc->DSDanhMuc($MaDanhMuc);
        $SanPhamDanhMucHT = $this->SanPham->DSSanPhamLoai($MaDanhMuc);
        if ($SanPhamDanhMucHT) {
            foreach ($SanPhamDanhMucHT as $SanPhams) {
                array_push($SanPham, $SanPhams);
            }
        }
//      return $SanPham;
//có danh muc con
        if ($DSDanhMucCon) {

            foreach ($DSDanhMucCon as $DanhMucCon) {
//	  lấy san pham cua danh muc con hien tai
                $SanPhamDanhMuc1 = $this->SanPham->DSSanPhamLoai($DanhMucCon["MaDanhMuc"]);
                if ($SanPhamDanhMuc1) {
                    foreach ($SanPhamDanhMuc1 as $SanPhams) {
                        array_push($SanPham, $SanPhams);
                    }
                }
                $DSDanhMucCon2 = $this->DanhMuc->DSDanhMuc($DanhMucCon['MaDanhMuc']);
                if ($DSDanhMucCon2) {
                    foreach ($DSDanhMucCon2 as $DanhMucCon2) {
                        $SanPhamDanhMuc2 = $this->SanPham->DSSanPhamLoai($DanhMucCon2["MaDanhMuc"]);
                        if ($SanPhamDanhMuc2) {
                            foreach ($SanPhamDanhMuc2 as $SanPhams) {
                                array_push($SanPham, $SanPhams);
                            }
                        }
                    }
                }
            }
        }
        return $SanPham;
    }

    function suaquangcao() {
        if (isset($_POST['Suaquancao'])) {
//         print_r($_POST);
            $MaViTri = $this->BokyTuDacBiet($_POST['MaViTri']);
            $quancao = $this->QuanCao->TimQuangCao($MaViTri);
            if (isset($_FILES['UrlHinh']) and $_FILES['UrlHinh']['error'] == 0) {
                if ($_FILES['UrlHinh']['size'] < 1000000) {
                    $nameHinh = bodautv(trim($_POST['TenHinh']));
                    $path = 'public/img/quancao/';
                    $filecu = $path . $quancao['UrlHinh'];
                    if (file_exists($filecu)) {
                        unset($filecu);
                    }
                    $extension = "jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF";
                    $urlhinh = $this->upload_image('UrlHinh', $extension, $path, $nameHinh);

//	        $DanhMucSua["QuangCao"] = $this->KiemTraFileHinh($_FILES['QuangCao'], 1000000, $nameHinh, $path);
                    if ($urlhinh) {
                        $quancao['UrlHinh'] = $urlhinh;
                    }
                }
            }


            $quancao['Link'] = $_POST['Link'];
            $quancao['TenHinh'] = $_POST['TenHinh'];

            $this->QuanCao->SuaQuangCao($quancao);
        }
        $ViTriQuanCao = $this->Param[0];
        $data['ChonQuangCao'] = $this->QuanCao->TimQuangCao($ViTriQuanCao);
        $this->QView($data);
    }

    function quangcao() {
        if (isset($_POST['SuaQuanCao'])) {
//         print_r($_POST);
            foreach ($_POST['UrlHinh'] as $MaViTri => $UrlHinh) {

                $hinh = explode("images/", $UrlHinh);
                $QuanCao['UrlHinh'] = end($hinh);
//            print_r($_POST['Link']);
                $QuanCao['MaQuanCao'] = $_POST['MaQuanCao'][$MaViTri];
                $QuanCao['TenHinh'] = $_POST['TenHinh'][$MaViTri];
                $QuanCao['Link'] = $_POST['Link'][$MaViTri];
                $QuanCao['MaViTri'] = $MaViTri;
//            print_r($QuanCao);
                $this->QuanCao->SuaQuangCao($QuanCao);
            }
        }

        if (isset($_POST['XoaQuangCao'])) {
            foreach ($_POST['XoaMaQuanCao'] as $QuanCao) {
                $this->QuanCao->XoaQuanCao($QuanCao);
            }
        }

        $data['DSQuangCao'] = $this->QuanCao->DSQuangCao();
        $this->QView($data);
    }

    function quangcaothem() {
        if ($this->Param[0]) {
            $QuangCao['MaQuanCao'] = $this->Param[0];
            $QuangCao['UrlHinh'] = "";
            $QuangCao['TenHinh'] = "";
            $QuangCao['Link'] = "";
            $QuangCao['KichThuoc'] = $this->Param[1];
            $QuangCao['MaViTri'] = $this->Param[0];
            $this->QuanCao->ThemQuangCao($QuangCao);
        }
        header("Location: " . BASE_DIR . "quantri/quangcao");
    }

    function themoption() {
        if (isset($_POST['ThemOption'])) {
            $Option['MaOption'] = "Option_" . $_POST['MaOption'];
            $Option['LoaiOption'] = $_POST['type'] == "IMG" ? 1 : 0;
            $ThuocTinh['type'] = $_POST['type'];
            $ThuocTinh['title'] = $_POST['title'];
            $Option['GhiChu'] = json_encode($ThuocTinh, JSON_UNESCAPED_UNICODE);
            $this->Option->ThemOption($Option);
            header("Location: " . BASE_DIR . "quantri/option");
        }
        $this->QView("");
    }

    function suaoption() {
        if ($this->Param[0]) {
            $data['Option'] = $this->Option->TimOption($this->Param[0]);
        }
        if (isset($_POST['SuaOption'])) {
            $Option['MaOption'] = $_POST['MaOption'];
            $GhiChu['title'] = $_POST['title'];
            $GhiChu['type'] = $_POST['type'];
            $Option['GhiChu'] = json_encode($GhiChu, JSON_UNESCAPED_UNICODE);
            $this->Option->SuaOptionGhiChu($Option);
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }

//      print_r($data);
        $this->QView($data);
    }

    function option() {
        if (isset($_POST['SuaOption'])) {
            foreach ($_POST['GiaTriVn'] as $MaOption => $GiaTri) {
                $Optionsua = $this->Option->TimOption($MaOption);
                if ($Optionsua['LoaiOption'] == 1) {
                    $Hinh = explode("/images/", $GiaTri);
                    $Hinh = isset($Hinh[0]) ? end($Hinh) : $Hinh;
                    $Optionsua['GiaTriVN'] = $Hinh;
                } else {
                    $Optionsua['GiaTriVN'] = $GiaTri;
                }
                $this->Option->SuaOption($Optionsua);
            }

            unset($_POST);
        }
        $data['DSOption'] = $this->Option->DSOption();
        if ($this->Param[0]) {
            $data['DSOption'] = $this->Option->DSOptionTheoTem($this->Param[0]);
        }
        $this->QView($data);
    }

    function xoaoption() {

        if (isset($_POST['XoaOption'])) {
            foreach ($_POST['OptionXoa'] as $Option) {
                $this->Option->XoaOption($Option['MaOption']);
            }
        }
        if (isset($this->Param[0])) {
            $this->Option->XoaOption($this->Param[0]);
        }
        header("Location: " . BASE_DIR . 'quantri/option');
    }

    function hotroxoa() {
        $this->HoTro->XoaHoTro($this->Param[0]);
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

    function hotro() {
        $data['DSHoTro'] = $this->HoTro->DSHoTro();
        $this->QView($data);
    }

    function hotrothem() {
        $data = FALSE;
        if (isset($_POST['ThemSlide'])) {
            $hinh = explode("/images/", $_POST['UrlHinh']);
            $_POST["UrlHinh"] = end($hinh);
            $this->Slide->ThemSlide($_POST);
            header("Location: " . BASE_DIR . "quantri/hotro");
            $data['TBT'] = "Thành Công";
        }

        $this->QView($data);
    }

    function hotrosua() {
        $data["HoTro"] = FALSE;
        if (isset($_POST['SuaHoTro'])) {
            $hinh = explode("/images/", $_POST['UrlHinh']);
            $_POST["UrlHinh"] = end($hinh);
            $this->HoTro->SuaHoTro($_POST);
            $data['TBT'] = "Thành Công";
            header("Location: " . BASE_DIR . "quantri/hotro");
        }
        if (isset($this->Param[0])) {
            $data["HoTro"] = $this->HoTro->TimHoTro($this->Param[0]);
        }
        $this->QView($data);
    }

    function gioithieu() {
        if (isset($_POST['SuaGioiThieu'])) {
            $GioiThieu = $_POST;
            $GioiThieu['ghichu'] = "";
            $this->GioiThieu->SuaGioiThieu($GioiThieu);
        }
        $data['GioiThieu'] = $this->GioiThieu->TimGioiThieu("GioiThieu");
        $this->QView($data);
    }

    function Lien_Ket_Trang() {
        if (isset($_POST['ThemTrangLienKet'])) {
            $TrangLienKet['TenTrang'] = $_POST['TenTrang'];
            $TrangLienKet['Link'] = $_POST['Link'];
            $TrangLienKet['GhiChu'] = $_POST['GhiChu'];
            $this->TrangLienKet->ThemTrangLienKet($TrangLienKet);
        }
        $data['DSTrangLienKet'] = $this->TrangLienKet->DSTrangLienKet();
        $this->QView($data);
    }

    function Sua_Lien_Ket_Trang() {
        if (isset($_POST['SuaTrangLienKet'])) {
//         print_r($_POST);
//         die();
            $TrangLienKet['MaTrangLienKiet'] = $_POST['MaTrangLienKiet'];
            $TrangLienKet['TenTrang'] = $_POST['TenTrang'];
            $TrangLienKet['Link'] = $_POST['Link'];
            $TrangLienKet['GhiChu'] = "";
            $this->TrangLienKet->SuaTrangLienKet($TrangLienKet);
        }
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

    function Xoa_Lien_Ket_Trang() {
        $this->TrangLienKet->XoaTrangLienKet($this->Param[0]);
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

    function timkiemkhachhang() {
        $data['DSKhachHang'] = $this->KhachHang->DSKhachHangTimKiem($this->Param[0]);
//      print_r($data);
        $this->AView($data);
    }

    function lockaccount() {
        $KhachHang['email'] = $this->Param[0];
        $this->KhachHang->LockAccount($KhachHang);
//      print_r($data);
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

    function unlockaccount() {
        $KhachHang['email'] = $this->Param[0];
        $this->KhachHang->UnLockAccount($KhachHang);

        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

    function xoaaccount() {
        $KhachHang['email'] = $this->Param[0];
        $this->KhachHang->DeleteAccount($KhachHang);
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

    function tranglienket() {
        
    }

    function xemtaikhoan() {
        $data['SanPham'] = $this->KhachHang->LayThongTinKhachHang($this->Param[0]);
        $this->AView($data);
    }

    function nhanvien_xoa() {
        $this->QuanTri->DSNhanVien();
        header("Localtion: " . $_SERVER["HTTP_REFERER"]);
    }

    function nhanvien_xem() {

        $this->QView("");
    }

    function nhanvien() {
        $data['DSNhanVien'] = $this->QuanTri->DSNhanVien();
        $this->QView($data);
    }

    function themnhom() {
        $this->PhanQuyen->ThemNhom();
        header("Location: " . BASE_DIR . "quantri/nhom");
    }

    function nhom() {
        if (isset($_POST['SuaNhom'])) {
            foreach ($_POST['TenNhom'] as $key => $TenNhom) {
                $Quen['Nhom'] = $key;
                $Quen['TenNhom'] = $TenNhom;
                $this->PhanQuyen->SuaTenNhom($Quen);
            }
        }
        $data['DSNhom'] = $this->PhanQuyen->DSNhom();

        $this->QView($data);
    }

    function khachhang() {
        $data['DSKhachHang'] = $this->KhachHang->DSKhachHang();
        $this->QView($data);
    }

    function khachhangct() {

        $data['ThongTinKhachHang'] = $this->KhachHang->ThongTinKhachHang($this->Param[0]);

        $this->QView($data);
    }

    function dskhachhang() {
        $data['DSKhachHang'] = $this->KhachHang->DSKhachHang();
        $DSKhachHang = $data['DSKhachHang'];
        foreach ($DSKhachHang as $k => $KhachHang) {
            $TongSanPham = $this->KhachHang->TongSanPhamKhachHang($KhachHang['email']);
            $data['DSKhachHang'][$k]['TongSanPham'] = $TongSanPham['TongSanPham'];
        }
        $this->QView($data);
    }

    function thongke() {
        if ($this->Param[0]) {
            $NgayThongKe = date("Y-m-d", strtotime($this->Param[0]));
            $data['DSThongKe'] = $this->SanPham->ThongKeKhachHangTheoNgay($NgayThongKe);
        } else {
            $data['DSThongKe'] = $this->SanPham->ThongKeKhachHang();
        }

        $this->QView($data);
    }

    function thongkeseo() {
        $this->QView("");
    }

    function capnhatngaydang() {
        $this->SanPham->CapNhatNgayDang();
        header("Location: " . BASE_DIR . "quantri/thongke");
    }

    function quanlymenufooter() {
        $data['DSDanhMuc'] = $this->DanhMuc->LayDanhMucDeQuy();
        $this->QView($data);
    }

    function thembotmenufooter() {
        $MaDanhMuc = $this->Param[0];
        $DanhMucChon = $this->DanhMuc->TimDanhCha($MaDanhMuc);
        $TTDanhMuc = json_decode($DanhMucChon['ThuocTinh']);
        foreach ($TTDanhMuc as $key => $value) {
            $ThuocTinh[$key] = $value;
        }
        $ThuocTinh['menufooter'] = $ThuocTinh['menufooter'] == 1 ? 0 : 1;
        $ThuocTinh = json_encode($ThuocTinh);
        $this->DanhMuc->SuaTTDanhMuc($MaDanhMuc, $ThuocTinh);
    }

    function thembotmenungang() {
        $MaDanhMuc = $this->Param[0];
        $DanhMucChon = $this->DanhMuc->TimDanhCha($MaDanhMuc);
        $TTDanhMuc = json_decode($DanhMucChon['ThuocTinh']);
        foreach ($TTDanhMuc as $key => $value) {
            $ThuocTinh[$key] = $value;
        }
        $ThuocTinh['MenuNgang'] = $ThuocTinh['MenuNgang'] == 1 ? 0 : 1;
        $ThuocTinh = json_encode($ThuocTinh);
        $this->DanhMuc->SuaTTDanhMuc($MaDanhMuc, $ThuocTinh);
    }

    function thembotdanhmucchinh() {
        $MaDanhMuc = $this->Param[0];
        $DanhMucChon = $this->DanhMuc->TimDanhCha($MaDanhMuc);
        $TTDanhMuc = json_decode($DanhMucChon['ThuocTinh']);
        foreach ($TTDanhMuc as $key => $value) {
            $ThuocTinh[$key] = $value;
        }
        $ThuocTinh['DanhMucChinh'] = $ThuocTinh['DanhMucChinh'] == 1 ? 0 : 1;
        $ThuocTinh = json_encode($ThuocTinh);
        $this->DanhMuc->SuaTTDanhMuc($MaDanhMuc, $ThuocTinh);
    }

    function thembotcontrollertintuc() {
        $MaDanhMuc = $this->Param[0];
        $DanhMucChon = $this->DanhMuc->TimDanhCha($MaDanhMuc);
        $TTDanhMuc = json_decode($DanhMucChon['ThuocTinh']);
        foreach ($TTDanhMuc as $key => $value) {
            $ThuocTinh[$key] = $value;
        }
        $ThuocTinh['TinTuc'] = $ThuocTinh['TinTuc'] == 1 ? 0 : 1;
        $ThuocTinh = json_encode($ThuocTinh);
        $this->DanhMuc->SuaTTDanhMuc($MaDanhMuc, $ThuocTinh);
    }

    function thembotcontrollerthethao() {
        $MaDanhMuc = $this->Param[0];
        $DanhMucChon = $this->DanhMuc->TimDanhCha($MaDanhMuc);
        $TTDanhMuc = json_decode($DanhMucChon['ThuocTinh']);
        foreach ($TTDanhMuc as $key => $value) {
            $ThuocTinh[$key] = $value;
        }
        $ThuocTinh['TheThao'] = $ThuocTinh['TheThao'] == 1 ? 0 : 1;
        $ThuocTinh = json_encode($ThuocTinh);
        $this->DanhMuc->SuaTTDanhMuc($MaDanhMuc, $ThuocTinh);
    }

    function quantritag() {
        $data['DSTag'] = $this->Tag->DSTag();
        $this->QView($data);
    }

    function suatag() {
        $url = explode("_", $this->Param[0]);
        $TagName['TagName'] = str_replace("%20", " ", end($url));
        $TagName['TagID'] = reset($url);
        $TagName['GhiChu'] = "";
        if ($this->Tag->SuaTag($TagName)) {
            echo "Ok";
        } else {
            echo"Fail";
        }
    }

    function xoatag() {
        if ($this->Tag->XoaTag($this->Param[0])) {
            echo "Ok";
        } else {
            echo"Fail";
        }
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

    function themtag() {
        if (isset($_POST['ThemTag'])) {
            $TagName['TagName'] = $_POST['TagName'];
            $TagName['GhiChu'] = $_POST['GhiChu'];
            if ($this->Tag->ThemTag($TagName)) {
                echo "Ok";
            } else {
                echo"Fail";
            }
        }
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

    function menutintuc() {
        $data['DSMenu'] = $this->Menu->DSMenu(2);
        $this->QView($data);
    }

    function timkiem() {
        $_POST['txtTim'] = isset($_POST['txtTim']) ? $_POST['txtTim'] : '';
        $data['DSTinTuc'] = $this->TinTuc->TimTinTuc4TieuDe($_POST['txtTim']);
        $this->QView($data);
    }

    function dstinhot() {
        $data['DSTinHot'] = $this->TinTuc->DSTinHot();
        $this->QView($data);
    }

    function timtintuc() {
        $data['DSTinTuc'] = $this->TinTuc->TimTieuDeTinTuc($this->getLang());
        $this->QView($data);
    }

    function chonbomenutintuc() {
        $MaDanhMuc = $this->Param[0];
        $DanhMucChon = $this->DanhMuc->TimDanhCha($MaDanhMuc);
        $TTDanhMuc = json_decode($DanhMucChon['ThuocTinh']);
        foreach ($TTDanhMuc as $key => $value) {
            $ThuocTinh[$key] = $value;
        }
        $ThuocTinh['MenuTinTuc'] = $ThuocTinh['MenuTinTuc'] == 1 ? 0 : 1;
        $ThuocTinh = json_encode($ThuocTinh);
        if ($this->DanhMuc->SuaTTDanhMuc($MaDanhMuc, $ThuocTinh)) {
            echo 'ok';
        }
    }

    function themdanhmuc() {
        if (isset($_POST['TenDanhMuc'])) {
            $DanhMuc['TenDanhMucEN'] = mysqli_real_escape_string($this->TinTuc->getconn(), $_POST['TenDanhMucEn']);
            $DanhMuc['TenDanhMuc'] = mysqli_real_escape_string($this->TinTuc->getconn(), $_POST['TenDanhMuc']);
            $DanhMuc['STT'] = mysqli_real_escape_string($this->TinTuc->getconn(), $_POST['STT']);
            $DanhMuc['ThuocTinh'] = "";
            $DanhMuc['CapCha'] = mysqli_real_escape_string($this->TinTuc->getconn(), $_POST['CapCha']);
            $this->DanhMuc->ThemDanhMuc($DanhMuc);
        }
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

    function chonbochonbohuongdan() {
        $MaDanhMuc = $this->Param[0];
        $DanhMucChon = $this->DanhMuc->TimDanhCha($MaDanhMuc);
        $TTDanhMuc = json_decode($DanhMucChon['ThuocTinh']);
        foreach ($TTDanhMuc as $key => $value) {
            $ThuocTinh[$key] = $value;
        }
        $ThuocTinh['HuongDanTinTuc'] = $ThuocTinh['HuongDanTinTuc'] == 1 ? 0 : 1;
        $ThuocTinh = json_encode($ThuocTinh);
        if ($this->DanhMuc->SuaTTDanhMuc($MaDanhMuc, $ThuocTinh)) {
            echo 'ok';
        }
    }

    function chonbochonbokhunggiuatintuc() {
        $MaDanhMuc = $this->Param[0];
        $DanhMucChon = $this->DanhMuc->TimDanhCha($MaDanhMuc);
        $TTDanhMuc = json_decode($DanhMucChon['ThuocTinh']);
        foreach ($TTDanhMuc as $key => $value) {
            $ThuocTinh[$key] = $value;
        }
        $ThuocTinh['KhungGiuaTinTuc'] = $ThuocTinh['KhungGiuaTinTuc'] == 1 ? 0 : 1;
        $ThuocTinh = json_encode($ThuocTinh);
        if ($this->DanhMuc->SuaTTDanhMuc($MaDanhMuc, $ThuocTinh)) {
            echo 'ok';
        }
    }

    function chonbochonbotintucindex() {
        $MaDanhMuc = $this->Param[0];
        $DanhMucChon = $this->DanhMuc->TimDanhCha($MaDanhMuc);
        $TTDanhMuc = json_decode($DanhMucChon['ThuocTinh']);
        foreach ($TTDanhMuc as $key => $value) {
            $ThuocTinh[$key] = $value;
        }
        $ThuocTinh['TinTucIndex'] = $ThuocTinh['TinTucIndex'] == 1 ? 0 : 1;
        $ThuocTinh = json_encode($ThuocTinh);
        if ($this->DanhMuc->SuaTTDanhMuc($MaDanhMuc, $ThuocTinh)) {
            echo 'ok';
        }
    }

    function chonbochonbotincongty() {
        $MaDanhMuc = $this->Param[0];
        $DanhMucChon = $this->DanhMuc->TimDanhCha($MaDanhMuc);
        $TTDanhMuc = json_decode($DanhMucChon['ThuocTinh']);
        foreach ($TTDanhMuc as $key => $value) {
            $ThuocTinh[$key] = $value;
        }
        $ThuocTinh['VeCongTy'] = $ThuocTinh['VeCongTy'] == 1 ? 0 : 1;
        $ThuocTinh = json_encode($ThuocTinh);
        if ($this->DanhMuc->SuaTTDanhMuc($MaDanhMuc, $ThuocTinh)) {
            echo 'ok';
        }
    }

    function thembotindex() {
        $MaDanhMuc = $this->Param[0];
        $DanhMucChon = $this->DanhMuc->TimDanhCha($MaDanhMuc);
        $TTDanhMuc = json_decode($DanhMucChon['ThuocTinh']);
        foreach ($TTDanhMuc as $key => $value) {
            $ThuocTinh[$key] = $value;
        }
        $ThuocTinh['index'] = $ThuocTinh['index'] == 1 ? 0 : 1;
        $ThuocTinh = json_encode($ThuocTinh);
        if ($this->DanhMuc->SuaTTDanhMuc($MaDanhMuc, $ThuocTinh)) {
            echo 'ok';
        }
    }

    function thembotraovat() {
        $MaDanhMuc = $this->Param[0];
        $DanhMucChon = $this->DanhMuc->TimDanhCha($MaDanhMuc);
        $TTDanhMuc = json_decode($DanhMucChon['ThuocTinh']);
        foreach ($TTDanhMuc as $key => $value) {
            $ThuocTinh[$key] = $value;
        }
        $ThuocTinh['RaoVat'] = $ThuocTinh['RaoVat'] == 1 ? 0 : 1;
        $ThuocTinh = json_encode($ThuocTinh);
        if ($this->DanhMuc->SuaTTDanhMuc($MaDanhMuc, $ThuocTinh)) {
            echo 'ok';
        }
    }

    function suabannermenudanhmuc() {

        if (isset($_POST['BannerMenuDanhMuc'])) {
            foreach ($_POST['BannerMenuDanhMuc'] as $k => $DanhMuc) {
                $DanhMucChon = $this->DanhMuc->TimDanhCha($k);
                $TTDanhMuc = json_decode($DanhMucChon['ThuocTinh']);
                if ($TTDanhMuc) {
                    foreach ($TTDanhMuc as $key => $value) {
                        $ThuocTinh[$key] = $value;
                    }
                }
                $u = explode("images/", $DanhMuc);
                $ThuocTinh['BannerMenuDanhMuc'] = end($u);
                $ThuocTinh = json_encode($ThuocTinh);
                if ($this->DanhMuc->SuaTTDanhMuc($k, $ThuocTinh)) {
                    echo 'ok';
                }
                unset($ThuocTinh);
            }
        }
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

    function tudien() {
        if (isset($_POST['XoaTV'])) {
            foreach ($_POST['XoaTuVung'] as $TuVung) {
                $this->Option->XoaTuVung($TuVung);
            }
        }
        $data['DSTuVung'] = $this->Option->DSTuVung();
        $this->QView($data);
    }

    function tudienthem() {
        if (isset($_POST['MaTuVung'])) {
            $TuVung['MaText'] = "Lang_" . $this->BokyTuDacBiet(strip_tags($this->TaoMaTuVung(trim($_POST['MaTuVung']))));
            $TuVung['GiaTriVI'] = $_POST['MaTuVung'];
            $TuVung['GiaTriEN'] = $_POST['MaTuVung'];
            $this->Option->ThemTuDien($TuVung);
        }
        header("Location: " . $_SERVER["HTTP_REFERER"]);
        die();
    }

    function tudienxoa() {
        $this->Option->ThemTuDien($TuVung);
        $this->QView("");
    }

    function tudiensua() {
        if (isset($_POST['TuVung'])) {
            header('Content-Type: text/html; charset=utf-8');
            $TuVung['MaText'] = $this->BokyTuDacBiet(strip_tags(trim($_POST['TuVung'])));
            $TuVung['GiaTriVI'] = str_replace("%20", " ", $this->BokyTuDacBiet(strip_tags(trim($_POST['GiaTriVI']))));
            $TuVung['GiaTriEN'] = str_replace("%20", " ", $this->BokyTuDacBiet(strip_tags(trim($_POST['GiaTriEN']))));
        }
        $kt = $this->Option->SuaTuVung($TuVung);
        if ($kt) {
            echo "ok";
        }
    }

    function TaoMaTuVung($str) {
        $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|�� �|ắ|ặ|ẳ|ẵ)/", 'a', $str);
        $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
        $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
        $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|�� �|ợ|ớ|ở|ỡ)/", 'o', $str);
        $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
        $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
        $str = preg_replace("/(đ)/", 'd', $str);
        $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|�� �|Ặ|Ẳ|Ẵ)/", 'A', $str);
        $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
        $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
        $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|�� �|Ợ|Ở|Ớ|Ỡ)/", 'O', $str);
        $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
        $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
        $str = preg_replace("/(Đ)/", 'D', $str);
        $str = preg_replace("/('|,|:|;|%|!|)/", '', $str);
        $str = preg_replace("/( )/", '_', $str);
        $str = preg_replace('/("|"|")/', '', $str);
        $str = str_replace('?', '', $str);

        return $str;
    }

    function xoatuvung() {
        $MaTungVung = $this->Param[0];
        $this->Option->XoaTuVung($MaTungVung);
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

    function QTGianHang() {
        $data['DSGianHang'] = $this->CuaHang->DSGianHangAll();
        $this->QView($data);
    }

    function AnHienCuaHang() {
        $MaCuaHang = $this->Param[0];
        $CuaHang = $this->CuaHang->TimCuaHang($this->Param[0]);
        $AnHien = $CuaHang['AnHien'] == 1 ? 0 : 1;
        $kq = $this->CuaHang->AnHienCuaHang($MaCuaHang, $AnHien);
        if ($kq) {
            echo $AnHien == 0 ? "Đã Ẩn" : "Đã Hiện";
        } else {
            echo "Thất Bại";
        }
    }

    function CuaHangDamBao() {

        if ($this->Param[0]) {
//         tìm cua hàng hien tại
            $CuaHang = $this->CuaHang->TimCuaHang($this->Param[0]);
            $TTCuaHang = json_decode($CuaHang['GhiChu']);
            if ($TTCuaHang) {
                foreach ($TTCuaHang as $key => $value) {
                    $ThuocTinh[$key] = $value;
                }
            }
            if (isset($ThuocTinh['GianHangDamBao'])) {

                $ThuocTinh['GianHangDamBao'] = $ThuocTinh['GianHangDamBao'] == 1 ? 0 : 1;
            } else {
                $ThuocTinh['GianHangDamBao'] = 1;
            }
            echo $ThuocTinh['GianHangDamBao'] == 1 ? 'Đảm Bảo' : 'Không Đảm Bảo';
            $ThuocTinh = json_encode($ThuocTinh, JSON_UNESCAPED_UNICODE);
            $this->CuaHang->SuaGhiChuCuaHang($ThuocTinh, $CuaHang['MaCuaHang']);
        }
    }

    function phanquyen() {
        if (isset($_POST['CapQuen'])) {
            $this->QuanTri->XoaQuyenNhom($_POST['MaNhom']);
            if (isset($_POST['Quyen'])) {
                if ($_POST['Quyen']) {
                    foreach ($_POST['Quyen'] as $v) {
                        $QuenNhom['TenAction'] = $v;
                        $QuenNhom['MaNhom'] = $_POST['MaNhom'];
                        $this->QuanTri->ThemQuyenNhom($QuenNhom);
                    }
                }
            }
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
        $data['DSAction'] = array_diff(get_class_methods(get_class()), get_class_methods(get_parent_class()));
        $this->QView($data);
    }

    function thuoctinhdanhmuc() {
        $data['DanhMucHienTai'] = FALSE;
        if ($this->Param[0]) {
            $DanhMucHienTai = $this->DanhMuc->TimDanhCha($this->Param[0]);
            if ($DanhMucHienTai) {
                $data['DanhMucHienTai'] = $DanhMucHienTai;
            } else {
                $this->setThongBao("Không Có Danh Mục Bạn Đang Chọn");
            }
        }

        if (isset($_POST['MaDanhMuc'])) {
            $DanhMucHienTai = $this->DanhMuc->TimDanhCha($this->Param[0]);
            if ($DanhMucHienTai) {
                $ThuocTinhDM = json_decode($DanhMucHienTai['ThuocTinh']);
                $ThuocTinh = array();
                foreach ($ThuocTinhDM as $k => $value) {
                    $ThuocTinh[$k] = $value;
                }
                $img = explode("/images/", $_POST['Icon']);
                $ThuocTinh['Icon'] = end($img);
                $img = explode("/images/", $_POST['Banner']);
                $ThuocTinh['Banner'] = end($img);

                $ThuocTinh = json_encode($ThuocTinh, JSON_UNESCAPED_UNICODE);
                $this->DanhMuc->SuaTTDanhMuc($DanhMucHienTai['MaDanhMuc'], $ThuocTinh);
            } else {
                $this->setThongBao("Không Có Danh Mục Bạn Đang Chọn");
            }
        }


        $this->QView($data);
    }

    function sualoaitintuc() {
        $IdTin = $this->Param[0];
        $LoaiTin = $this->Param[1];
        $TinTuc = $this->TinTuc->TimTinTuc($IdTin);
        $TinTuc['MaDanhMuc'] = $LoaiTin;
        $this->TinTuc->SuaTinTuc($TinTuc);
    }

    function suapass() {
        if (isset($_POST['SuaPassword'])) {
            $Post = $_POST;
            $KhachHang['username'] = $_SESSION[QuanTri]['username'];
            $KhachHang['password'] = $Post['password'];
            $kq = $this->QuanTri->KienTraDangNhap($KhachHang);
            if ($kq) {
                if ($Post['repassword'] == $Post['newpassword']) {
                    $this->QuanTri->SuaPass($Post);
                }
            } else {
                $this->setThongBao("Nhập sai Password");
            }
        }
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

    function xoasanphamchon() {
        if (isset($_POST['XoaChon'])) {

            foreach ($_POST['Chon'] as $key => $value) {
                $SanPham = $this->SanPham->TimSanPham($value);
                $this->SanPham->XoaSanPham($SanPham['IdTin']);
            }
        }
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

    function donhang() {
        $DSDonHang = $this->DonHang->DSDonhang();
        $data['DSDonHang'] = $DSDonHang;
        $this->QView($data);
    }

    function xoadonhang() {
        if (isset($this->Param[0])) {
            $MaDonHang = $this->Param[0];
            $this->DonHang->XoaDonHang($MaDonHang);
        }
        if (isset($_POST['XoaSelect'])) {
            foreach ($_POST['xoa'] as $MaDonHang) {
                $this->DonHang->XoaDonHang($MaDonHang);
            }
        }
        $Chuyen = isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : BASE_DIR . "quantri/donhang";
        header("Location: " . $Chuyen);
    }

    function pages() {
        $data['DSPages'] = $this->Pages->DSPages();
        $this->QView($data);
    }

    function pagessua() {
        if (isset($_POST['SuaPages'])) {
            $_POST['UrlHinh'] = explode("/images/", $_POST['UrlHinh']);
            $_POST['UrlHinh'] = end($_POST['UrlHinh']);
            $this->Pages->SuaPages($_POST);
            $this->Pages->_header($_SERVER["HTTP_REFERER"]);
        }
        $data['Pages'] = $this->Pages->TimPages($this->Param[0]);
        $this->QView($data);
    }

    function pagessuabv() {
        if (isset($_POST['SuaPages'])) {
            $_POST['UrlHinh'] = explode("/images/", $_POST['UrlHinh']);
            $_POST['UrlHinh'] = end($_POST['UrlHinh']);
            $this->Pages->SuaPages($_POST);
            $this->Pages->_header(BASE_DIR . "quantri/pages");
        }
        $data['Pages'] = $this->Pages->TimPages($this->Param[0]);
        $this->QView($data);
    }

    function pagesxoa() {

        if (isset($_POST['XoaPages'])) {
            foreach ($_POST['idPa'] as $k => $v) {
                $this->Pages->XoaPages($k, TRUE);
            }
        }
        if (isset($this->Param[0])) {
            $this->Pages->XoaPages($this->Param[0], TRUE);
        }
        $this->Pages->_header($_SERVER["HTTP_REFERER"]);
    }

    function pagesthem() {
        if (isset($_POST['ThemPages'])) {
            $this->Pages->ThemPages($_POST);
            header("Location: " . BASE_DIR . "quantri/pages/");
        }
        $this->QView("");
    }

    function xoadanhgia() {
        $this->Slide->XoaSlide($this->Param[0]);
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

    function danhgiasua() {
        $data["DanhGia"] = FALSE;
        if (isset($_POST['SuaDanhGia'])) {
            $hinh = explode("/images/", $_POST['UrlHinh']);
            $_POST["UrlHinh"] = end($hinh);
            $_POST["TieuDeKhongDau"] = strtolower(bodautv($_POST["TieuDe"]));
            $this->DanhGia->SuaDanhGia($_POST);
            $data['TBT'] = "Thành Công";
            header("Location: " . BASE_DIR . "quantri/danhgia");
        }
        if (isset($this->Param[0])) {
            $data["DanhGia"] = $this->DanhGia->TimDanhGia($this->Param[0]);
        }
        $this->QView($data);
    }

    function danhgiathem() {
        $data = "";
        if (isset($_POST['ThemDanhGia'])) {
            $hinh = explode("/images/", $_POST['UrlHinh']);
            $_POST["UrlHinh"] = end($hinh);
            $_POST["TieuDeKhongDau"] = strtolower(bodautv($_POST["TieuDe"]));
            $this->DanhGia->ThemDanhGia($_POST);
            header("Location: " . BASE_DIR . "quantri/danhgia");
            $data['TBT'] = "Thành Công";
        }
        $this->QView($data);
    }

    function danhgia() {
        $data['DSDanhGia'] = $this->DanhGia->DSDanhGia();
        if (!$data['DSDanhGia']) {
            $data['TBF'] = "Chưa Có Slide";
            header("Location: " . BASE_DIR . "quantri/danhgiathem");
        }
        $this->QView($data);
    }

    function xoadoitac() {
        $this->Slide->XoaSlide($this->Param[0]);
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

    function doitacsua() {
        $data["DoiTac"] = FALSE;
        if (isset($_POST['SuaDoiTac'])) {
            $hinh = explode("/images/", $_POST['UrlHinh']);
            $_POST["UrlHinh"] = end($hinh);
            $_POST["TieuDeKhongDau"] = strtolower(bodautv($_POST["TieuDe"]));
            $this->DoiTac->SuaDoiTac($_POST);
            $data['TBT'] = "Thành Công";
            header("Location: " . BASE_DIR . "quantri/doitac");
        }
        if (isset($this->Param[0])) {
            $data["DoiTac"] = $this->DoiTac->TimDoiTac($this->Param[0]);
        }
        $this->QView($data);
    }

    function doitacthem() {
        $data = "";
        if (isset($_POST['ThemDoiTac'])) {
            $hinh = explode("/images/", $_POST['UrlHinh']);
            $_POST["UrlHinh"] = end($hinh);
            $hinh = explode("/images/", $_POST['TomTat']);
            $_POST["TomTat"] = end($hinh);
            $_POST["TieuDeKhongDau"] = strtolower(bodautv($_POST["TieuDe"]));
            $this->DoiTac->ThemDoiTac($_POST);
            header("Location: " . BASE_DIR . "quantri/doitac");
            $data['TBT'] = "Thành Công";
        }
        $this->QView($data);
    }

    function doitac() {
        $data['DSDoiTac'] = $this->DoiTac->DSDoiTac();
        if (!$data['DSDoiTac']) {
            $data['TBF'] = "Chưa Có Slide";
            header("Location: " . BASE_DIR . "quantri/doitacthem");
        }
        $this->QView($data);
    }

    function profile() {
        if (isset($_POST['SuaThongTinChung'])) {
            $User = $_POST;
            $this->QuanTri->SuaThongTin($User);
        }
        $data['User'] = $this->QuanTri->ThongTinUser();
        $this->QView($data);
    }

}
?>