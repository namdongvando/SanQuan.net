<?php

class Model_KhachHang extends Model_Adapter {

    public $ID;
    public $email;
    public $active;
    public $nhom;
    public $DiaChi;
    public $SDT;
    public $HoTen;
    static public $LinkDangNhap;
    static public $LinkDangXuat;
    static public $LinkDangKy;
    static public $LinkDangTin;
    static public $LinkBuoc1;
    static public $LinkBuoc2;

    function __construct($Kh = NULL) {

        self::$LinkDangNhap = BASE_DIR . "taikhoan/dangnhap/";
        self::$LinkDangXuat = BASE_DIR . "taikhoan/dangxuat/";
        self::$LinkDangKy = BASE_DIR . "taikhoan/dangky/";
        self::$LinkDangTin = BASE_DIR . "dangtin/";
        self::$LinkBuoc1 = BASE_DIR . "taikhoan/buoc1";
        self::$LinkBuoc2 = BASE_DIR . "taikhoan/buoc2";

        parent::__construct();
    }

    function addKhachHangDefaut($KhachHang) {

        $KhachHang['email'] = $this->createUserCustomer();
        $KhachHang['password'] = "14789";
        $KhachHang['random'] = $KhachHang['email'];
        $KhachHang['active'] = isset($KhachHang['active']) ? $KhachHang['active'] : '';
        $KhachHang['nhom'] = isset($KhachHang['nhom']) ? $KhachHang['nhom'] : '';
        $KhachHang['DiaChi'] = isset($KhachHang['DiaChi']) ? $KhachHang['DiaChi'] : '';
        $KhachHang['SDT'] = isset($KhachHang['SDT']) ? $KhachHang['SDT'] : '';
        $KhachHang['HoTen'] = isset($KhachHang['HoTen']) ? $KhachHang['HoTen'] : '';
        $this->ThemKhachHang($KhachHang);
        return $this->ThongTinKhachHang($KhachHang['email']);
    }

    function createUserCustomer() {
        $sql = "SELECT count(`ID`) as `TongKhachHang` FROM `" . table_fix . "khachang` ";
        $this->Query($sql);
        $kq = $this->fetchRow();
        $kq['TongKhachHang'] = $kq['TongKhachHang'] + 1;
        if ($kq['TongKhachHang'] < 10) {
            return "KH000" . $kq['TongKhachHang'];
        }
        if ($kq['TongKhachHang'] < 100) {
            return "KH00" . $kq['TongKhachHang'];
        }
        if ($kq['TongKhachHang'] < 1000) {
            return "KH0" . $kq['TongKhachHang'];
        }
        return "KH" . $kq['TongKhachHang'];
    }

    function getLinkDangNhap() {
        return self::$LinkDangNhap;
    }

    function getLinkBuoc1() {
        return self::$LinkBuoc1;
    }

    function getLinkBuoc2() {
        return self::$LinkBuoc2;
    }

    function getLinkDangXuat() {
        return self::$LinkDangXuat;
    }

    function getLinkDangKy() {
        return self::$LinkDangKy;
    }

    function getLinkDangTin() {
        return self::$LinkDangTin;
    }

    function KhachHangHienTai() {
        if (isset($_SESSION[KhachHang])) {
            return $_SESSION[KhachHang];
        }
        return FALSE;
    }

    function ThemKhachHang($KhachHang) {
        $sql = "INSERT INTO `" . table_fix . "khachang` SET "
                . "`password` = SHA1( concat( '{$KhachHang['password']}', '{$KhachHang['random']}' ) ), "
                . "`random` = '{$KhachHang['random']}', "
                . "`HoTen` = '{$KhachHang['HoTen']}', "
                . "`SDT` = '{$KhachHang['SDT']}', "
                . "`DiaChi` = '{$KhachHang['DiaChi']}', "
                . "`nhom` = '1', "
                . "`active` = '1', "
                . "`email` = '{$KhachHang['email']}'";
        $this->Query($sql);
        return $this->Luu();
    }

    function KichHoat($MaKichHoat) {
        $sql = "UPDATE `" . table_fix . "khachang` SET `active` = '1' WHERE `active` = '{$MaKichHoat}'";
        $this->Query($sql);
        return $this->Luu();
    }

    function ThongTinChung($ThongTinChung) {
        $sql = "UPDATE `" . table_fix . "khachang` SET `ThongTinChung` = '{$ThongTinChung['ThongTinChung']}' WHERE `email` = '{$ThongTinChung['email']}'";
        $this->Query($sql);
        return $this->Luu();
    }

    function ThemKhachHangVangLai($KhachHang) {
        $sql = "INSERT INTO `" . table_fix . "khachangvanglai` SET "
                . "`HoTen` = '{$KhachHang['HoTen']}', "
                . "`SDT` = '{$KhachHang['SDT']}', "
                . "`DiaChi` = '{$KhachHang['DiaChi']}', "
                . "`email` = '{$KhachHang['email']}'";
        $this->Query($sql);
        return $this->Luu();
    }

    function SuaThongTinChung($ThongTinChung) {
        $sql = "UPDATE `" . table_fix . "khachang` SET"
                . " `HoTen` = '{$ThongTinChung['HoTen']}',"
                . "`SDT` = '{$ThongTinChung['SDT']}',"
                . "`ThongTinChung` = '{$ThongTinChung['ThongTinChung']}',"
                . "`DiaChi` = '{$ThongTinChung['DiaChi']}' WHERE "
                . "`email` = '{$ThongTinChung['email']}'";
        $this->Query($sql);
        return $this->Luu();
    }

    function LayThongTinKhachHang($Email) {
        $sql = "SELECT * FROM `" . table_fix . "khachang` where "
                . "`email` ='{$Email}'";
        $this->Query($sql);
        $kq = $this->Tim();
        if ($this->GetNumRow() >= 1) {
            return $this->fetchRow($kq);
        } else {
            return FALSE;
        }
    }

    function TongSanPhamKhachHang($Email) {
        $sql = "SELECT count(*) as `TongSanPham` FROM `" . table_fix . "sanpham` where `ChuSanPham` = '{$Email}'";
        $this->Query($sql);
        $kq = $this->Tim();
        if ($this->GetNumRow() >= 1) {
            return $this->fetchRow($kq);
        } else {
            return FALSE;
        }
    }

    function DSKhachHangTimKiem($key) {
        $sql = "SELECT * FROM `" . table_fix . "khachang` where `HoTen` like '%{$key}%' or `email` like '%{$key}%' or `SDT` like '%{$key}%' or `DiaChi` like '%{$key}%'";
        $this->Query($sql);
        $kq = $this->Tim();
        if ($this->GetNumRow() >= 1) {
            $SanPham = $this->fetchAll();
            return $SanPham;
        } else {
            return FALSE;
        }
    }

    function DSKhachHangChuaActive() {
        $sql = "SELECT * FROM `" . table_fix . "khachang` where `active` != '1'";
        $this->Query($sql);
        $kq = $this->Tim();
        if ($this->GetNumRow() >= 1) {
            $SanPham = $this->fetchAll();
            return $SanPham;
        } else {
            return FALSE;
        }
    }

    function DSKhachHang() {
        $sql = "SELECT * FROM `" . table_fix . "khachang`";
        $this->Query($sql);
        $kq = $this->Tim();
        if ($this->GetNumRow() >= 1) {
            $SanPham = $this->fetchAll();
            return $SanPham;
        } else {
            return FALSE;
        }
    }

    function TimKhachHang($KhachHang) {
        $sql = "SELECT * FROM `" . table_fix . "khachang` where "
                . "`email` ='{$KhachHang['email']}' and "
                . "`password` = SHA1(concat('{$KhachHang['password']}',`random`)) and `active` = '1'";
        $this->Query($sql);
        $kq = $this->fetchRow();
        if ($kq) {
            $SanPham = $this->fetchRow($kq);
            return $SanPham;
        } else {
            return FALSE;
        }
    }

    function ThongTinKhachHang($Email) {
        $sql = "SELECT * FROM `" . table_fix . "khachang` where "
                . "`email` ='{$Email}' or `ID`  = '{$Email}'";
        $this->Query($sql);
        $kq = $this->Tim();
        if ($this->GetNumRow() >= 1) {
            $SanPham = $this->fetchRow($kq);
            return $SanPham;
        } else {
            return FALSE;
        }
    }

    function ThongTinKhachHangReSetPassword($email) {
        $sql = "SELECT * FROM `" . table_fix . "khachang` where "
                . "`password` ='{$email}'";
        $this->Query($sql);
        $kq = $this->Tim();
        if ($this->GetNumRow() >= 1) {
            $SanPham = $this->fetchRow($kq);
            return $SanPham;
        } else {
            return FALSE;
        }
    }

    function DSCongTy() {
        $sql = "SELECT * FROM `" . table_fix . "congtylienket`";
        $this->Query($sql);
        $kq = $this->Tim();
        if ($this->GetNumRow() >= 1) {
            $SanPham = $this->fetchAll();
            return $SanPham;
        } else {
            return FALSE;
        }
    }

    function SuaMatKhau($KhachHang) {
        $sql = "UPDATE `" . table_fix . "khachang` SET"
                . " `password` = SHA1(CONCAT( '{$KhachHang['NewPass']}', `random` ) )  "
                . "WHERE `email` = '{$KhachHang['email']}'";
        $this->Query($sql);
        return $this->Luu();
    }

    function KichHoatTaiKhoan($KhachHang) {
        $sql = "UPDATE `" . table_fix . "khachang` SET `active` = '1' WHERE `email` = '{$KhachHang['email']}' and `random`='{$KhachHang['random']}'";
        $this->Query($sql);
        return $this->Luu();
    }

    function LockAccount($KhachHang) {
        $sql = "UPDATE `" . table_fix . "khachang` SET `active` = '-1' WHERE `email` = '{$KhachHang['email']}'";
        $this->Query($sql);
        return $this->Luu();
    }

    function UnLockAccount($KhachHang) {
        $sql = "UPDATE `" . table_fix . "khachang` SET `active` = '1' WHERE `email` = '{$KhachHang['email']}'";
        $this->Query($sql);
        return $this->Luu();
    }

    function SetResetPassword($KhachHang) {
        $sql = "UPDATE `" . table_fix . "khachang` SET `password` = '{$KhachHang['TextReSet']}' WHERE `email` = '{$KhachHang['email']}'";
        $this->Query($sql);
        return $this->Luu();
    }

    function DeleteAccount($KhachHang) {
        $sql = "DELETE FROM `" . table_fix . "khachang` WHERE `email` = '{$KhachHang['email']}'";
        $this->Query($sql);
        return $this->Luu();
    }

}

?>