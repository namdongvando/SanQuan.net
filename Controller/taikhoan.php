<?php

class Controller_taikhoan extends Application {

    public $KhachHang;
    public $Param;
    public $Erro;

    function __construct() {
        $this->KhachHang = new Model_KhachHang();
        $this->Param = $this->getParam();
        $this->Erro = new \Model\Error();
        if ($_SESSION[KhachHang]) {
            $this->KhachHang->_header("/dangtin/");
        }
    }

    function index() {
        $this->ViewTheme("", Model_ViewTheme::get_viewthene(), "");
    }

    function dangky() {
        $ThongBao = FALSE;
        if (isset($_POST["g-recaptcha-response"])) {
            $recap = new lib\recaptchalib();
            $recap = $recap->recaptchalib($_POST["g-recaptcha-response"]);
            if ($recap == FALSE) {
//                $this->Erro->setError("Bạn chưa nhập capcha", "danger");
                new Application\Alert("danger", "Bạn chưa nhập capcha");
            } else {
                $KhachHang = $_POST;
                $KhachHang['random'] = $this->RandomString();
                $KhachHang['email'] = $_POST['TaiKhoan'];
                if (!$this->KhachHang->ThongTinKhachHang($KhachHang['email'])) {
                    if (strlen($KhachHang['password']) >= 6) {
                        if ($KhachHang['password'] == $KhachHang['repassword']) {
                            if (strlen($KhachHang['SDT'] <= 11 || strlen($KhachHang['SDT']) >= 10)) {
                                $this->KhachHang->ThemKhachHang($KhachHang);
                                $tk = $this->KhachHang->ThongTinKhachHang($_POST['TaiKhoan']);
                                if ($tk) {
                                    $_SESSION[KhachHang] = $tk;
                                    $this->KhachHang->_header(BASE_DIR . "dangtin");
                                } else {
                                    new Application\Alert("danger", "Hệ Thống Không Thể Ghi Nhận Thông Tin Cua Bạn Lúc Này");
                                }
                            } else {
                                new Application\Alert("danger", "Điện Thoại Không Đúng Định Dạng");
                            }
                        } else {
                            new Application\Alert("danger", "Mật Khẩu Chưa Khớp");
                        }
                    } else {

                        new Application\Alert("danger", "Mật Khẩu Chưa Đủa An Toàn");
                    }
                } else {
                    new Application\Alert("danger", "Tài Khoản này đã được sửa dụng");
                }
            }
        }
        $data['ThongBao'] = $this->KhachHang->_encode($ThongBao);
        $this->ViewTheme("", Model_ViewTheme::get_viewthene(), "dangtin");
    }

    function dangnhap() {
        if ($_SESSION[KhachHang]) {
            $this->KhachHang->_header("/dangtin");
        }
        if (isset($_POST["g-recaptcha-response"])) {
            $recap = new lib\recaptchalib();
            $recap = $recap->recaptchalib($_POST["g-recaptcha-response"]);
            if ($recap == FALSE) {
                $this->Erro->setError("Bạn chưa nhập capcha", "danger");
            } else {
                if (isset($_POST['email'])) {
                    $KhachHang['email'] = $_POST['email'];
                    $KhachHang['password'] = $_POST['password'];
                    $tk = $this->KhachHang->TimKhachHang($KhachHang);
                    if ($tk) {
                        $_SESSION[KhachHang] = $tk;
                        $this->KhachHang->_header("/dangtin/");
                        exit();
                    } else {
                        $this->Erro->setError("Tài khoản/mật khẩu không đúng", "danger");
                    }
                }
            }
        }
        
        $this->ViewTheme("", Model_ViewTheme::get_viewthene(), "dangtin");
    }

    function buoc1() {
        if (!$_SESSION[KhachHang]) {
            $this->KhachHang->_header($this->KhachHang->getLinkDangKy());
        }
        $this->ViewC("", "dangtin");
    }

    function buoc2() {
        if (!$_SESSION[KhachHang]) {
            $this->KhachHang->_header($this->KhachHang->getLinkDangKy());
        }
        $this->ViewC("", "dangtin");
    }

    function goidv() {
        $this->ViewC("", "dangtin");
    }

}

?>