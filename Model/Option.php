<?php

class Model_Option extends Model_Adapter {

    public $MaOption;
    public $GiaTri;
    public $LoaiOption;
    public $GhiChu;
    public $Title;
    public $DanhMucMacDinh;
    
//    1 : IMG 2: TEXT
    public static $LinkThemOption;
    public static $LinkDSOption;
    public static $LinkXoaOption;
    public static $LinkSuaOption;

    function __construct($option = NULL) {
        if ($option) {
            $this->MaOption = $option["MaOption"];
            $this->LoaiOption = $option["LoaiOption"];
            $this->GiaTri = $this->LoaiOption == 1 ? BASE_DIR . "public/img/images/" . $option["GiaTriVN"] : $option["GiaTriVN"];
            $this->GhiChu = $this->_decode($option['GhiChu']);
            $this->Title = isset($this->GhiChu->title) ? $this->GhiChu->title : '';
        }
        self::$LinkSuaOption = BASE_DIR . "quantrioption/optionsua/";
        self::$LinkThemOption = BASE_DIR . "quantrioption/optionthem/";
        self::$LinkXoaOption = BASE_DIR . "quantrioption/optionxoa/";
        self::$LinkDSOption = BASE_DIR . "quantrioption/index/";
        parent::__construct();
    }

    function getLinkThemOption() {
        return self::$LinkThemOption;
    }

    function getLinkDSOption() {
        return self::$LinkDSOption;
    }

    function getLinkSuaOption() {
        return self::$LinkSuaOption;
    }

    function getLinkXoaOption() {
        return self::$LinkXoaOption;
    }

    function TimOption($MaOption) {
        $sql = "SELECT * FROM `" . table_fix . "option` where `MaOption` = '{$MaOption}'";
        $this->Query($sql);
        $KQ = $this->Tim();
        return $this->fetchRow($KQ);
    }

    function SuaOptionGhiChu($Option) {
        $sql = "UPDATE `" . table_fix . "option` SET "
                . "`GhiChu` = '{$Option['GhiChu']}' WHERE "
                . "`MaOption` = '{$Option['MaOption']}'";
        $this->Query($sql);
        return $this->Luu();
    }

    function DSOption() {
        $sql = "SELECT * FROM `" . table_fix . "option` ";
        $this->Query($sql);
        $kq = $this->Tim();
        if ($this->GetNumRow() >= 1) {
            $kq = $this->fetchAll();
            return $kq;
        } else {
            return FALSE;
        }
    }

    function DSOption4LoaiOption($LoaiOption) {
        $sql = "SELECT * FROM `" . table_fix . "option` where `LoaiOption` = '{$LoaiOption}'";
        $this->Query($sql);
        return $this->fetchAll();
    }

    function DSOptionTheoTem($TuKhoa) {
        $sql = "SELECT * FROM `" . table_fix . "option` where `MaOption` like '%{$TuKhoa}%'";
        $this->Query($sql);
        $kq = $this->Tim();
        if ($this->GetNumRow() >= 1) {
            $kq = $this->fetchAll();
            return $kq;
        } else {
            return FALSE;
        }
    }

    function SuaOption($Option) {
        $sql = "UPDATE `" . table_fix . "option` SET "
                . "`GiaTriVN` = '{$Option['GiaTriVN']}',"
                . "`LoaiOption` = '{$Option['LoaiOption']}',"
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

    function ThemOption($Option) {
        $sql = "INSERT INTO `" . table_fix . "option` SET "
                . "`GiaTriVN` = '',"
                . "`LoaiOption` = '{$Option['LoaiOption']}',"
                . "`GiaTriEN` = '',"
                . "`MaOption` = '{$Option['MaOption']}',"
                . "`GhiChu` = '{$Option['GhiChu']}'";
        $this->Query($sql);
        return $this->Luu();
    }

    function ThemOptionFull($Option) {
        $sql = "INSERT INTO `" . table_fix . "option` SET "
                . "`GiaTriVN` = '{$Option['GiaTriVN']}' ,"
                . "`LoaiOption` = '{$Option['LoaiOption']}',"
                . "`GiaTriEN` = '{$Option['GiaTriEN']}',"
                . "`MaOption` = '{$Option['MaOption']}',"
                . "`GhiChu` = '{$Option['GhiChu']}'";

        $this->Query($sql);
        return $this->Luu();
    }

    function ThemTuDien($TuVung) {
        $sql = "INSERT INTO `" . table_fix . "lang` SET `MaText` = '{$TuVung['MaText']}', "
                . "`GiaTriVI` = '{$TuVung['GiaTriVI']}',"
                . " `GiaTriEN` = '{$TuVung['GiaTriEN']}'";
        $this->Query($sql);
        return $this->Luu();
    }

    function DSTuVung() {
        $sql = "SELECT * FROM `" . table_fix . "lang`";
        $this->Query($sql);
        $kq = $this->Tim();
        if ($this->GetNumRow() >= 1) {
            $kq = $this->fetchAll();
            return $kq;
        } else {
            return FALSE;
        }
    }

    function SuaTuVung($TuVung) {
        $sql = "UPDATE `" . table_fix . "lang` SET "
                . "`GiaTriVI` = '{$TuVung['GiaTriVI']}',"
                . "`GiaTriEN` = '{$TuVung['GiaTriEN']}' where "
                . "`MaText` = '{$TuVung['MaText']}'";
//      UPDATE `pgexpress`.`pgv_lang` SET `GiaTriVI` = 'a',
//`GiaTriEN` = 'a' WHERE `pgv_lang`.`MaText` = 'TaiKhoan';

        $this->Query($sql);
        return $this->Luu();
    }

    function XoaTuVung($TuVung) {
        $sql = "DELETE FROM `" . table_fix . "lang` WHERE `MaText` = '{$TuVung}'";
//      UPDATE `pgexpress`.`pgv_lang` SET `GiaTriVI` = 'a',
//`GiaTriEN` = 'a' WHERE `pgv_lang`.`MaText` = 'TaiKhoan';
        $this->Query($sql);
        return $this->Luu();
    }

    function DSLoaiOption() {
        return array(1 => "Hình Ảnh", "Ngôn Ngữ", "SEO");
    }

    function DSTienToOption() {
        return array(1 => "Option_", "Lang_", "SEO_");
    }

    function DSOption4TienTo($TienTo) {
        $sql = "SELECT * FROM `" . table_fix . "option` where `MaOption` like '%{$TienTo}%'";
        $this->Query($sql);
        return $this->fetchAll();
    }

    function getTienToOption($id) {
        $a = $this->DSTienToOption();
        return $a[$id];
    }

    function getLoaiOption($id) {
        $a = $this->DSLoaiOption();
        return $a[$id];
    }

    function DanhMucMacDinh() {
        $kq =  $this->TimOption("Lang_defautcat");
        if($kq){
            return intval($kq["GiaTriVN"]);
        }  else {
               $Model_DanhMuc = new Model_DanhMuc();
               $DSDanhMuc = $Model_DanhMuc->DSDanhMuc();
               return $DSDanhMuc[0]['TenKhongDau'];
        }
    }
    
}

?>