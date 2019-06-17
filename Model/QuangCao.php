<?php

class Model_QuangCao extends Model_Adapter {

    function __construct() {
        parent::__construct();
    }

    function ThemQuangCao($QuangCao) {
        $sql = "INSERT INTO `" . table_fix . "vitri` SET "
                . "`MaQuanCao` = '{$QuangCao['MaQuanCao']}',"
                . "`UrlHinh` = '{$QuangCao['UrlHinh']}',"
                . "`TenHinh` = '{$QuangCao['TenHinh']}',"
                . "`KichThuoc` = '{$QuangCao['KichThuoc']}',"
                . "`Link` = '{$QuangCao['Link']}',"
                . "`MaViTri` = '{$QuangCao['MaViTri']}'";
        $this->Query($sql);
        return $this->Luu();
    }

    function XoaQuanCao($MaQuangCao) {
        $sql = "DELETE from `" . table_fix . "vitri` where `MaViTri` = '{$MaQuangCao}' ";
        $this->Query($sql);
        return $this->Luu();
    }

    function SuaQuangCao($QuangCao) {
        $sql = "UPDATE `" . table_fix . "vitri` SET "
                . "`MaQuanCao` = '{$QuangCao['MaQuanCao']}',"
                . "`UrlHinh` = '{$QuangCao['UrlHinh']}',"
                . "`TenHinh` = '{$QuangCao['TenHinh']}',"
                . "`Link` = '{$QuangCao['Link']}' "
                . "WHERE `MaViTri` = '{$QuangCao['MaViTri']}'";
        $this->Query($sql);
        return $this->Luu();
    }

    function TimQuangCao($MaVitri) {
        $sql = "SELECT * FROM `" . table_fix . "vitri` where `MaViTri` = '{$MaVitri}'";
        $this->Query($sql);
        $kq = $this->Tim();
        if ($this->GetNumRow() >= 1) {
            $kq = $this->fetchRow($kq);
            return $kq;
        } else {
            return FALSE;
        }
    }

    function DSQuangCao() {
        $sql = "SELECT * FROM `" . table_fix . "vitri`";
        $this->Query($sql);
        $kq = $this->Tim();
        if ($this->GetNumRow() >= 1) {
            $kq = $this->fetchAll();
            return $kq;
        } else {
            return FALSE;
        }
    }

    function DSDMCuaHang($MaKhacHang) {
        $sql = "SELECT `MaDanhMuc` FROM `" . table_fix . "sanpham` where `ChuSanPham` = '{$MaKhacHang}' group by `MaDanhMuc` limit 0,6";
        $this->Query($sql);
        $kq = $this->Tim();
        if ($this->GetNumRow() >= 1) {
            $kq = $this->fetchAll();
            return $kq;
        } else {
            return FALSE;
        }
    }

}

?>