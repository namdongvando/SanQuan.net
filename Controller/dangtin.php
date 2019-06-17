<?php

class Controller_dangtin extends Controller_index {

    public $KhachHang;
    public $SanPham;
    public $Param;

    function __construct() {
        $this->KhachHang = new Model_KhachHang();
        $this->SanPham = new Model_SanPham();
        $this->Param = $this->getParam();
        if (!$_SESSION[KhachHang]) {
            $this->KhachHang->_header("/taikhoan/dangnhap/");
            exit();
        }
    }

    function dangxuat() {
        $_SESSION[KhachHang] = null;
        $this->KhachHang->_header("/taikhoan/dangnhap");
        exit();
    }

    function index() {
        $ThongBao = FALSE;
        $data["GuiMail"] = FALSE;
        if (isset($_POST['DangTin'])) {
            $data["GuiMail"] = TRUE;
            $KH = new Model_KhachHang($this->KhachHang->ThongTinKhachHang($_SESSION[KhachHang]['email']));
            $SP = $this->SanPham->TimSanPham4ID($_POST['IdTin']);
            $extension = "jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF";
            $path = 'public/img/images/khachhang/' . $_SESSION[KhachHang]['random'] . "/";
            $this->SanPham->_createDir($path, '/');
            $_POST['UrlHinh'] = $SP['UrlHinh'];

            if ($_FILES['UrlHinh']['error'] == 0) {
                $Hinh = $this->KhachHang->upload_image($_FILES['UrlHinh'], $extension, $path, "daidien" . time());
                $Hinh = explode("/images/", $Hinh);
                $_POST['UrlHinh'] = end($Hinh);
            }
            if ($this->CoutHinhKhachHang() < 6) {
                if ($_FILES['FileLisHinh']['error'][0] == 0) {
                    $path .= "HinhKhac/";
                    try {
                        $this->SanPham->_createDir($path, '/');
                        $this->KhachHang->upload_multi_image($_FILES['FileLisHinh'], $path);
                    } catch (Exception $ex) {
                        echo $ex->getMessage();
                    }
                }
            }
            $SP['UrlHinh'] = $_POST['UrlHinh'];
            $SP['TieuDe'] = $_POST['TieuDe'];
            $SP['MaDanhMuc'] = $_POST['MaDanhMuc'];
            $SP['Gia'] = $_POST['Gia'];
            $SP['TieuDeKhongDau'] = $this->SanPham->bodautv($_POST['TieuDe']) . $SP['IdTin'];
            $SP['GhiChu'] = $this->SanPham->_encode($_POST['GhiChu']);
            $SP['NoiDung'] = $_POST['NoiDung'];
            $SP['AnHien'] = 0;
            $SP['TomTat'] = $_POST['TomTat'];
            $this->SanPham->SuaSanPham($SP);
//            $this->SanPham->_header(BASE_DIR . "dangtin/thanhcong/" . $SP['IdTin']);
        }
        $data['ThongBao'] = $this->KhachHang->_encode($ThongBao);
        $this->ViewTheme($data, Model_ViewTheme::get_viewthene(), "dangtin");
    }

    function SendMail() {
        $MaSanPham = $this->Param[0];
        $_SanPham = new Model_SanPham($this->SanPham->TimSanPham($MaSanPham));
        $_SanPham->NoiDung = '';
        $_SanPham->NoiDungSua = '';
        $NoiDung = '<table style="width:100%;" >';
        foreach ($_SanPham as $k => $v) {
            $NoiDung .= '<tr><td>' . $k . '</td><td>' . $v . '</td></tr> ';
        }
        $NoiDung .= '</table>';
        new Mail_SendMail("Quản Tri web" . date("Y-m-d H:i:s", time()), EmailToSystem, EmailSystem, Password, "Tin Đăng Mới" . date("Y-m-d H:i:s", time()), $NoiDung);
    }

    function listtin() {
        $this->ViewTheme("", Model_ViewTheme::get_viewthene(), "");
    }

    function xoahinh() {
        $kq = $this->LoadHinhKhachHang();
        foreach ($kq as $Hinh) {
            if (md5($Hinh) == $this->Param[0]) {
                $Hinh = substr($Hinh, 1);
                unlink($Hinh);
            }
        }
        $this->KhachHang->_header($_SERVER["HTTP_REFERER"]);
    }

    function listhinh() {
        $kq = $this->LoadHinhKhachHang();
        $this->AView($kq);
    }

    function listhinhApi() {
        $kq = $this->LoadHinhKhachHang();
        $api = new \lib\APIs();
        $data = [];
        if ($kq)
            foreach ($kq as $k => $value) {
                $data[$k]["Key"] = md5($value);
                $data[$k]["Value"] = $value;
            }
        $api->ArrayToApi($data);
    }

    function CoutHinhKhachHang() {
        $path = "public/img/images/khachhang/" . $_SESSION[KhachHang]["random"] . "/HinhKhac/";
        $RD_dir = new RD_dir($path);
        $kq = $RD_dir->ListFile();
        if ($kq)
            return count($kq);
        return 0;
    }

    function LoadHinhKhachHang() {
        $path = "public/img/images/khachhang/" . $_SESSION[KhachHang]["random"] . "/HinhKhac/";
        $RD_dir = new RD_dir($path);
        $kq = $RD_dir->ListFile();
        return $kq;
    }

    function thanhcong() {
        $this->ViewTheme("", Model_ViewTheme::get_viewthene(), "");
    }

    function uploadhinh() {
        if (isset($_FILES['UploadImges_Hinh'])) {
            if ($_FILES['UploadImges_Hinh']["error"] == 0) {
                $SoHinh = $this->LoadHinhKhachHang();
                if (count($SoHinh) < 6) {
                    $UpLoadHinh = new UploadImges_IM();
                    $UpLoadHinh->upload_image($_FILES["UploadImges_Hinh"], "dangtin");
                }
            }
        }
    }

}

?>