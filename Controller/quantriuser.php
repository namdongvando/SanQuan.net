<?php
class Controller_quantriuser extends Controller_quantri {

    public $QuanTri;
    public $Param;

    function __construct() {
        $this->QuanTri = new Model_QuanTri();
        $this->Param = $this->getParam();
        parent::__construct();
//        if ($this->QuanTri->Nhom != 1) {
//            $this->QuanTri->_header(BASE_DIR . "quantri/");
//        }
    }
    function index() {
        $data = FALSE;
        if (isset($_POST['username'])) {
            $Kq = $this->QuanTri->TimUser($_POST['username']);
            if (!$Kq) {
                $_POST['Nhom'] = intval($_POST['Nhom']);
                $_POST['Nhom'] < 1 ? 2 : $_POST['Nhom'];
                $UserName['random'] = $this->RandomString(8);
                $UserName['HoTen'] = $_POST['HoTen'];
                $UserName['email'] = $_POST['email'];
                $UserName['SDT'] = $_POST['SDT'];
                $UserName['DiaChi'] = $_POST['DiaChi'];
                $UserName['Nhom'] = $_POST['Nhom'];
                $UserName['username'] = $_POST['username'];
                $UserName['password'] = SHA1($_POST['password'] . $UserName['random']);
                $this->QuanTri->ThemNhanVien($UserName);
                $ThongBao["Loai"] = 'success';
                $ThongBao['NoiDung'] = "Đã Thêm Mới Tài khoản " . $UserName['username'];
                $data['ThongBao'] = $this->QuanTri->_encode($ThongBao);
            } else {
                $ThongBao["Loai"] = 'danger';
                $ThongBao['NoiDung'] = "Đã có username " . $_POST['username'];
                $data['ThongBao'] = $this->QuanTri->_encode($ThongBao);
            }
        }

        $this->QView($data);
    }

    function xoanhanvien() {
        if ($this->Param[0]) {
            $KH = $this->QuanTri->TimUser($this->Param[0]);
            if ($KH) {
                $NguoiDungHienTai = $this->QuanTri->NhanVienHienTai();
                $this->QuanTri->XoaNhanVien($this->Param[0], $NguoiDungHienTai['Nhom'] <= 1);
            }
        }
        $this->QuanTri->_header(BASE_DIR . "quantriuser/");
    }

    function xemnhanvien() {
        $data['ThongBao'] = isset($_SESSION['ThongBao']) ? $_SESSION['ThongBao'] : FALSE;
        unset($_SESSION['ThongBao']);
        if ($this->Param[0]) {
            $data['NhanVien'] = $this->QuanTri->TimUser($this->Param[0]);
        } else {
            $this->QuanTri->_header(BASE_DIR . "quantriuser");
        }
        $this->QView($data);
    }

    function resetpassword() {
        if (isset($_POST['SuaPassword'])) {
            $this->QuanTri->SuaPass4Username($_POST['username'], $_POST['password']);
            $ThongBao['Loai'] = "success";
            $ThongBao['NoiDung'] = "Reset Password Thàng Công cho tài khoản : {$_POST['username']}!";
            $_SESSION['ThongBao'] = $this->QuanTri->_encode($ThongBao);
            $this->QuanTri->_header($_SERVER["HTTP_REFERER"]);
        }
    }

    function SuaThongTinNhanVien() {
        $data = FALSE;
        if (isset($_POST['username'])) {
            $Kq = $this->QuanTri->TimUser($_POST['username']);
            if ($Kq) {
                $_POST['Nhom'] = intval($_POST['Nhom']);
                $_POST['Nhom'] < 1 ? 2 : $_POST['Nhom'];
                $UserName['HoTen'] = $_POST['HoTen'];
                $UserName['email'] = $_POST['email'];
                $UserName['SDT'] = $_POST['SDT'];
                $UserName['DiaChi'] = $_POST['DiaChi'];
                $UserName['Nhom'] = $_POST['Nhom'];
                $UserName['username'] = $_POST['username'];
                $this->QuanTri->SuaThongTin4User($UserName);
                $ThongBao["Loai"] = 'success';
                $ThongBao['NoiDung'] = "Đã Sửa Thông Tin Tài khoản " . $UserName['username'];
                $_SESSION['ThongBao'] = $this->QuanTri->_encode($ThongBao);
            } else {
                $ThongBao["Loai"] = 'danger';
                $ThongBao['NoiDung'] = "Không có username " . $_POST['username'];
                $_SESSION['ThongBao'] = $this->QuanTri->_encode($ThongBao);
            }
        }
        $this->QuanTri->_header($_SERVER["HTTP_REFERER"]);
    }

}

?>