<?php

class Model_DangKy extends Model_Adapter {

    function LuuThongDangKy($email) {
        $sql = "insert into  `" . table_fix . "dangky` set `email` = '{$email['email']}',`name` = '{$email['name']}',`created_at` = '" . date("Y-m-d H:i:s") . "',`updated_at` = '" . date("Y-m-d H:i:s") . "'";
        $this->Query($sql);
        $this->Luu();
    }

    function ThemLoiNhan($loinhan) {
        $sql = "insert into  `" . table_fix . "loinhan` SET "
                . "`Email` = '{$loinhan['Email']}', "
                . "`HoTen` = '{$loinhan['HoTen']}', "
                . "`SDT` = '{$loinhan['SDT']}', "
                . "`TieuDE` = '{$loinhan['TieuDE']}', "
                . "`NoiDung` = '{$loinhan['NoiDung']}'";
        $this->Query($sql);
        $this->Luu();
    }

    function XoaLoiNhan($id) {
        $sql = "DELETE FROM `".table_fix."loinhan` WHERE `id` = '{$id}'";
        $this->Query($sql);
        $this->Luu();
    }
    function XoaDangKy($id) {
        $sql = "DELETE FROM `".table_fix."dangky` WHERE `id` = '{$id}'";
        $this->Query($sql);
        $this->Luu();
    }

    function DSMailPT($page, $Soluong, &$TongSanPham) {
        $ViTtri = ($page - 1) * $Soluong;
        $ViTtri = $ViTtri < 0 ? 0 : $ViTtri;
        $sql = "SELECT count(*) as `TongSanPham` FROM `" . table_fix . "dangky` ";
        $this->Query($sql);
        $kq = $this->Tim();
        $TSP = $this->fetchRow($kq);
        $TongSanPham = $TSP['TongSanPham'];
        $sql = "SELECT * FROM `" . table_fix . "dangky` order by `id` desc limit {$ViTtri},{$Soluong} ";
        $this->Query($sql);
        $kq = $this->fetchAll();
        return $kq;
    }

    function DSLoiNhanPT($page, $Soluong, &$TongSanPham) {
        $ViTtri = ($page - 1) * $Soluong;
        $ViTtri = $ViTtri < 0 ? 0 : $ViTtri;
        $sql = "SELECT count(*) as `TongSanPham` FROM `" . table_fix . "loinhan` ";
        $this->Query($sql);
        $kq = $this->Tim();
        $TSP = $this->fetchRow($kq);
        $TongSanPham = $TSP['TongSanPham'];
        $sql = "SELECT * FROM `" . table_fix . "loinhan` order by `id` desc limit {$ViTtri},{$Soluong} ";
        $this->Query($sql);
        $kq = $this->fetchAll();
        return $kq;
    }

}

?>