<?php

class Model_Slide extends Model_TinTuc {

    public $MaSlide;
    public $NoiDung;
    public $TenHinh;
    public $UrlHinh;
    public $UrlHinh1;
    public $STT;
    public $AnHien;
    static private $_MaDanhMucSlide = -1;

    function GetDanhMucSlide() {
        return self::$_MaDanhMucSlide;
    }

    function __construct($Slide = NULL) {
        if ($Slide) {
            $this->MaSlide = $Slide['IdTin'];
            $this->TenHinh = $Slide['TieuDe'];
            $this->NoiDung = $Slide['NoiDung'];
            $this->UrlHinh = BASE_DIR . "public/img/images/" . $Slide['UrlHinh'];
            $this->UrlHinh1 = BASE_DIR . "public/img/images/" . $Slide['TomTat'];
            $this->STT = $Slide['Stt'];
            $this->AnHien = $Slide['AnHien'];
        }
        parent:: __construct();
    }

    function Slide($Slide) {
        $this->MaSlide = $Slide['IdTin'];
        $this->TenHinh = $Slide['TieuDe'];
        $this->NoiDung = $Slide['NoiDung'];
        $this->UrlHinh = BASE_DIR . "public/img/images/" . $Slide['UrlHinh'];
        $this->UrlHinh1 = BASE_DIR . "public/img/images/" . $Slide['TomTat'];
        $this->STT = $Slide['Stt'];
        $this->AnHien = $Slide['AnHien'];
    }

    function DSSlide() {
        return $this->DSTinTheoLoai(self::$_MaDanhMucSlide);
    }

    function SuaSlide($Slide) {
        return $this->SuaTinTuc($Slide);
    }

    function ThemSlide($Slide) {
        $Slide['IdTin'] = date("YmdHis") . rand(1, 100);
        $this->ThemTinTuc($Slide);
    }

    function XoaSlide($MaSlide) {
        return $this->XoaTinTuc($MaSlide);
    }

    function HinhSlide($hinh) {
        return BASE_DIR . "public/img/images/" . $hinh;
    }

    function TimSlide($MaTinTuc) {
        return $this->TimTinTuc($MaTinTuc);
    }

}

?>