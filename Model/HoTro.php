<?php

class Model_HoTro extends Model_TinTuc {

    public $MaHoTro;
    public $TenHoTro;
    public $SDTHoTro;
    public $EmailHoTro;
    public $HinhHoTro;
    public $SuaHoTro;
    public $XoaHoTro;
    public $SttHoTro;
    static private $_MaDanhMuc = -2;

    function HoTro($HoTro) {
        $this->MaHoTro = $HoTro['IdTin'];
        $this->TenHoTro = $HoTro['description'];
        $this->SDTHoTro = $HoTro['title'];
        $this->EmailHoTro = $HoTro['keyword'];
        $this->HinhHoTro = BASE_DIR . "public/img/images/" . $HoTro['UrlHinh'];
        $this->SuaHoTro = BASE_DIR . "quantri/hotrosua/" . $this->MaHoTro;
        $this->XoaHoTro = BASE_DIR . "quantri/hotroxoa/" . $this->MaHoTro;
        $this->SttHoTro = $HoTro['Stt'];
    }

    function GetDanhMuc() {
        return self::$_MaDanhMuc;
    }

    function SuaHoTro($HoTro) {
        return $this->SuaTinTuc($HoTro);
    }

    function TimHoTro($MaTin) {
        return $this->TimTinTuc($MaTin);
    }

    function DSHoTro() {
        return $this->DSTinTheoLoai(self::$_MaDanhMuc);
    }

    function XoaHoTro($MaHoTro) {
        return $this->XoaTinTuc($MaHoTro);
    }

    function ThemHoTro($Tintuc) {
        return $this->ThemTinTuc($Tintuc);
    }

    function HinhHoTro($hinh) {
        return BASE_DIR . "public/img/images/" . $hinh;
    }

}

?>
