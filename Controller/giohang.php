<?php

class Controller_giohang extends Application {

    public $GioHang;
    public $SanPham;

    function __construct() {
        $this->Param = $this->getParam();
        $this->GioHang = new Model_GioHang();
        $this->SanPham = new Model_SanPham();
    }

    function index() {
        if (isset($_SESSION[GioHangPGV])) {
            $data['GioHang'] = $_SESSION[GioHangPGV];
        } else {
            $data['GioHang'] = FALSE;
        }
        $this->View($data);
    }

    function them() {
        $MaSanPham = $this->Param[0];
        $SanPham = $this->SanPham->TimSanPham($MaSanPham);
        if ($SanPham) {
            $SanPham['NoiDung'] = "";

            $_SanPham = new Model_SanPham($SanPham);
            $GioHang = $_SESSION[GioHangPGV];
            if ($GioHang) {
                if (isset($GioHang[$_SanPham->MaSP])) {
                    $SanPham['Soluong'] = 1;
                    $GioHang[$_SanPham->MaSP]['SoLuong'] ++;
                } else {
                    $SanPham['SoLuong'] = 1;
                    $GioHang[$_SanPham->MaSP] = $SanPham;
                }
            } else {
                $SanPham['SoLuong'] = 1;
                $GioHang[$_SanPham->MaSP] = $SanPham;
            }
            $_SESSION[GioHangPGV] = $GioHang;
        }
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

    function tang() {
        $GioHang = $_SESSION[GioHangPGV];
        $MaSanPham = $this->Param[0];
        $GioHang[$MaSanPham]['SoLuong'] ++;
        $_SESSION[GioHangPGV] = $GioHang;
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

    function giam() {
        $GioHang = $_SESSION[GioHangPGV];
        $MaSanPham = $this->Param[0];
        if ($GioHang[$MaSanPham]['SoLuong'] > 1)
            $GioHang[$MaSanPham]['SoLuong'] --;
        $_SESSION[GioHangPGV] = $GioHang;
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

    function xoa() {
        $GioHang = $_SESSION[GioHangPGV];
        $MaSanPham = $this->Param[0];
        unset($GioHang[$MaSanPham]);
        $_SESSION[GioHangPGV] = $GioHang;
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

    function xoasanphamgiohang() {

        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

}
