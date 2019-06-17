<?php

class Model_ChiNhanh extends Model_Option {

    public $MaChinhanh;
    public $TenChiNhanh;
    public $SDT;
    public $DiaChi;
    public $LoaiChiNhanh;
    public $GhiChu;
    public $Title;
    public static $LinkThemChiNhanh;
    public static $LinkDSChiNhanh;
    public static $LinkXoaChiNhanh;
    public static $LinkSuaChiNhanh;

    function __construct($chinhanh = NULL) {
        if ($chinhanh) {
            $this->MaChinhanh = $chinhanh["MaOption"];
            $this->LoaiOption = $chinhanh["LoaiOption"];
            $this->GhiChu = $this->_decode($chinhanh['GhiChu']);
            $this->TenChiNhanh = $chinhanh['GiaTriVN'];
            $this->SDT = isset($this->GhiChu->SDT) ? $this->GhiChu->SDT : '';
            $this->DiaChi = isset($this->GhiChu->DiaChi) ? $this->GhiChu->DiaChi : '';
        }
        self::$LinkSuaChiNhanh = BASE_DIR . "quantrioption/chinhanhsua/";
        self::$LinkThemChiNhanh = BASE_DIR . "quantrioption/chinhanhthem/";
        self::$LinkXoaChiNhanh = BASE_DIR . "quantrioption/chinhanhxoa/";
        self::$LinkDSChiNhanh = BASE_DIR . "quantrioption/chinhanh/";
        parent::__construct();
    }

    function DSChiNhanh() {
        $sql = "SELECT * FROM `" . table_fix . "option` WHERE `LoaiOption` =2  ";
        $this->Query($sql);
        $kq = $this->Tim();
        return $this->fetchAll();
    }

    function SuaChiNhanh($Option) {
        $sql = "UPDATE `" . table_fix . "option` SET "
                . "`GiaTriVN` = '{$Option['GiaTriVN']}',"
                . "`LoaiOption` = '2',"
                . "`GhiChu` = '{$Option['GhiChu']}',"
                . "`GiaTriEN` = '{$Option['GiaTriEN']}' WHERE "
                . "`MaOption` = '{$Option['MaOption']}'";
        $this->Query($sql);
        return $this->Luu();
    }

    function XoaOption($Option) {
        $sql = "DELETE FROM `" . table_fix . "option` WHERE `MaOption` = '{$Option}'";
        $this->Query($sql);
        return $this->Luu();
    }

    function ThemChiNhanh($ChiNhanh = NULL) {
        $sql = "SELECT count(*) as `Tong` FROM `" . table_fix . "option` ";
        $this->Query($sql);
        $kq = $this->fetchRow();
        $MaOption = "CN" . (intval($kq['Tong']) + 1).  time();
        if ($ChiNhanh) {
            $ChiNhanh['GiaTriVN'] = isset($ChiNhanh['GiaTriVN']) ? $ChiNhanh['GiaTriVN'] : "";
            $ChiNhanh['GiaTriEN'] = isset($ChiNhanh['GiaTriEN']) ? $ChiNhanh['GiaTriEN'] : "";
            $ChiNhanh['GhiChu'] = isset($ChiNhanh['GhiChu']) ? $ChiNhanh['GhiChu'] : "";
        }
        $sql = "INSERT INTO `" . table_fix . "option` SET "
                . "`GiaTriVN` = '{$ChiNhanh['GiaTriVN']}',"
                . "`LoaiOption` = '2',"
                . "`GiaTriEN` = '{$ChiNhanh['GiaTriEN']}',"
                . "`MaOption` = '{$MaOption}',"
                . "`GhiChu` = '{$ChiNhanh['GhiChu']}'";
        $this->Query($sql);
        return $this->Luu();
    }

    function TimChiNhanh($MaChiNhanh) {
        $sql = "SELECT * FROM `" . table_fix . "option` where `MaOption` = '{$MaChiNhanh}'";
        $this->Query($sql);
        $KQ = $this->Tim();
        return $this->fetchRow($KQ);
    }

}

?>