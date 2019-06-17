<?php

class Model_DoiTac extends Model_TinTuc {

    public $MaDoiTac;
    public $NoiDung;
    public $TenHinh;
    public $TenDoiTac;
    public $UrlHinh;
    public $STT;
    public $AnHien;
    static private $_MaDanhMucDoiTac = -4;
    function GetDanhMucDoiTac() {
        return self::$_MaDanhMucDoiTac;
    }
    function __construct($DoiTac = NULL) {
        if ($DoiTac) {
            $this->MaDoiTac = $DoiTac['IdTin'];
            $this->TenDoiTac = $DoiTac['TieuDe'];
            $this->TenHinh = $DoiTac['TieuDe'];
            $this->NoiDung = $DoiTac['NoiDung'];
            $this->UrlHinh = BASE_DIR . "public/img/images/" . $DoiTac['UrlHinh'];
            $this->STT = $DoiTac['Stt'];
            $this->AnHien = $DoiTac['AnHien'];
        }
        parent::__construct();
    }
    function DoiTac($DoiTac) {
        $this->MaDoiTac = $DoiTac['IdTin'];
        $this->TenHinh = $DoiTac['TieuDe'];
        $this->NoiDung = $DoiTac['NoiDung'];
        $this->UrlHinh = BASE_DIR . "public/img/images/" . $DoiTac['UrlHinh'];
        $this->STT = $DoiTac['Stt'];
        $this->AnHien = $DoiTac['AnHien'];
    }

    function DSDoiTac() {
        return $this->DSTinTheoLoai(self::$_MaDanhMucDoiTac);
    }

    function SuaDoiTac($DoiTac) {
        return $this->SuaTinTuc($DoiTac);
    }

    function ThemDoiTac($DoiTac) {
        $DoiTac['IdTin'] = date("YmdHis") . rand(1, 100);
        $this->ThemTinTuc($DoiTac);
    }

    function XoaDoiTac($MaDoiTac) {
        return $this->XoaTinTuc($MaDoiTac);
    }

    function HinhDoiTac($hinh) {
        return BASE_DIR . "public/img/images/" . $hinh;
    }

    function TimDoiTac($MaTinTuc) {
        return $this->TimTinTuc($MaTinTuc);
    }

}

?>