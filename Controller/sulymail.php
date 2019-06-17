<?php

class Controller_sulymail extends Application {

    public $param;
    public $DangKy;

    function __construct() {
        $this->param = $this->getParam();
        $this->DangKy = new Model_DangKy();
    }

    function index() {
        if (isset($_POST['email'])) {
            if ($this->KiemTraEmai($_POST['email'])) {
                $email = $_POST;
                $email['name'] = "";
                $this->DangKy->LuuThongDangKy($email);
            }
        }
    }

    function loinhan() {
        if (isset($_POST['Email'])) {
            if ($this->KiemTraEmai($_POST['Email'])) {
                $LoiNhan = $_POST;
                $this->DangKy->ThemLoiNhan($LoiNhan);
                $_NoiDung = "Tiêu Đề - " . $LoiNhan['TieuDE'] . "<hr>" . "SDT - " . $LoiNhan['SDT'] . "<hr>" . "Họ Tên - " . $LoiNhan['HoTen']
                        . "<hr>" . "Email - " . $LoiNhan['Email'] . "<hr>" . "Nội Dung - " . $LoiNhan['NoiDung'];
                $NoiDungMail['NguoiGui'] = "___Quản Trị IPS___" . date("d-m-Y");
                $NoiDungMail['ToMail'] = EmailToSystem;
                $NoiDungMail['TieuDe'] = $LoiNhan['TieuDE'] . date("d-m-Y");
                $NoiDungMail['NoiDung'] = $_NoiDung;
                $NoiDungMail['FromMail'] = EmailSystem;
                $NoiDungMail['PassWord'] = Password;
                $this->DangKy->guimail($NoiDungMail);
            }
        }
    }

}
?>

