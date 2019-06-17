<?php

class Model_QuanCao extends Model_Adapter {

    public $MaQuanCao;
    public $TenQuanCao;
    public $NoiDung;
    public $UrlHinh;
    public $LinkQuanCao;
    public $GhiChu;
    public $ViTri;
    public $Stt;
    static public $LinkSuaQuanCao;
    static public $LinkThemQuanCao;
    static public $LinkXoaQuanCao;
    static public $LinkDSQuanCao;

    function __construct($QuanCao = NULL) {

        self::$LinkSuaQuanCao = BASE_DIR . "quantriquancao/quancaosua/";
        self::$LinkThemQuanCao = BASE_DIR . "quantriquancao/quancaothem/";
        self::$LinkXoaQuanCao = BASE_DIR . "quantriquancao/quancaoxoa/";
        self::$LinkDSQuanCao = BASE_DIR . "quantriquancao/index/";

        if ($QuanCao) {
            $this->MaQuanCao = $QuanCao['MaQuanCao'];
            $this->TenQuanCao = $QuanCao['TenQuanCao'];
            $this->NoiDung = $QuanCao['NoiDung'];
            $this->UrlHinh = BASE_DIR . "public/img/images/" . $QuanCao['UrlHinh'];
            $this->LinkQuanCao = $QuanCao['LinkQuanCao'];
            $this->GhiChu = $QuanCao['GhiChu'];
            $this->Stt = $QuanCao['Stt'];
            $this->ViTri = $QuanCao['ViTri'];
        }
        parent::__construct();
    }

    function getLinkSuaQuanCao() {
        return self::$LinkSuaQuanCao;
    }

    function getLinkThemQuanCao() {
        return self::$LinkThemQuanCao;
    }

    function getLinkXoaQuanCao() {
        return self::$LinkXoaQuanCao;
    }

    function getLinkDSQuanCao() {
        return self::$LinkDSQuanCao;
    }

    function DSQuanCao($Page, $SL, &$Tong) {
        $Page = intval($Page);
        $Page = $Page <= 0 ? 1 : $Page;
        $vt = ($Page - 1) * $SL;
        $sql = "SELECT count(*) as `Tong`  FROM `" . table_fix . "quancao`";
        $this->Query($sql);
        $kq = $this->fetchRow();
        $Tong = $kq['Tong'];
        $sql = "SELECT * FROM `" . table_fix . "quancao` limit {$vt},{$SL} ";
        $this->Query($sql);
        return $this->fetchAll();
    }

    function DSQuanCao4Vitri($Vitri) {
        $sql = "SELECT * FROM `" . table_fix . "quancao` where `ViTri` = '{$Vitri}' ";
        $this->Query($sql);
        return $this->fetchAll();
    }

    function ThemQuanCao($QuanCao) {
        $sql = "INSERT INTO `" . table_fix . "quancao` SET "
                . "`TenQuanCao` = '{$QuanCao['TenQuanCao']}', "
                . "`NoiDung` = '{$QuanCao['NoiDung']}', "
                . "`UrlHinh` = '{$QuanCao['UrlHinh']}', "
                . "`LinkQuanCao` = '{$QuanCao['LinkQuanCao']}', "
                . "`GhiChu` = '{$QuanCao['GhiChu']}', "
                . "`ViTri` = '{$QuanCao['ViTri']}', "
                . "`Stt` = '{$QuanCao['Stt']}'";
        $this->Query($sql);
        $this->Luu();
    }

    function SuaQuanCao($QuanCao) {
        $sql = "UPDATE `" . table_fix . "quancao` SET "
                . "`TenQuanCao` = '{$QuanCao['TenQuanCao']}', "
                . "`NoiDung` = '{$QuanCao['NoiDung']}', "
                . "`UrlHinh` = '{$QuanCao['UrlHinh']}', "
                . "`LinkQuanCao` = '{$QuanCao['LinkQuanCao']}', "
                . "`GhiChu` = '{$QuanCao['GhiChu']}', "
                . "`ViTri` = '{$QuanCao['ViTri']}', "
                . "`Stt` = '{$QuanCao['Stt']}' "
                . "WHERE `MaQuanCao` = '{$QuanCao['MaQuanCao']}'";

        $this->Query($sql);
        $this->Luu();
    }

    function TimQuanCao4ID($MaQuanCao) {
        $sql = "SELECT * FROM `" . table_fix . "quancao` where `MaQuanCao` = '$MaQuanCao'";
        $this->Query($sql);
        return $this->fetchRow();
    }

    function XoaQuanCao4ID($MaQuanCao) {
        $sql = "DELETE FROM `" . table_fix . "quancao` WHERE `MaQuanCao` = '{$MaQuanCao}'";
        $this->Query($sql);
        $this->Luu();
    }

}

?>