<?php

class Model_DanhGia extends Model_TinTuc {

    public $MaDanhGia;
    public $TieuDe;
    public $NoiDung;
    public $TenHinh;
    public $UrlHinh;
    public $STT;
    public $AnHien;
    static private $_MaDanhMucDanhGia = -3;
    function GetDanhMucDanhGia() {
        return self::$_MaDanhMucDanhGia;
    }
    function DanhGia($DanhGia) {
        $this->MaDanhGia = $DanhGia['IdTin'];
        $this->TenHinh = $DanhGia['TieuDe'];
        $this->TieuDe = $DanhGia['TieuDe'];
        $this->NoiDung = $DanhGia['NoiDung'];
        $this->UrlHinh = BASE_DIR . "public/img/images/" . $DanhGia['UrlHinh'];
        $this->STT = $DanhGia['Stt'];
        $this->AnHien = $DanhGia['AnHien'];
    }

    function DSDanhGia() {
        return $this->DSTinTheoLoai(self::$_MaDanhMucDanhGia);
    }

    function SuaDanhGia($DanhGia) {
        return $this->SuaTinTuc($DanhGia);
    }
    function ThemDanhGia($DanhGia) {
        $DanhGia['IdTin'] = date("YmdHis") . rand(1, 100);
        $this->ThemTinTuc($DanhGia);
    }

    function XoaDanhGia($MaDanhGia) {
        return $this->XoaTinTuc($MaDanhGia);
    }

    function HinhDanhGia($hinh) {
        return BASE_DIR . "public/img/images/" . $hinh;
    }

    function TimDanhGia($MaTinTuc) {
        return $this->TimTinTuc($MaTinTuc);
    }

}

?>