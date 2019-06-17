<?php

class Model_GioHang extends Model_SanPham {

    function GioHang() {
        return $_SESSION[GioHangPGV];
    }

    function TongSanPham() {
        if (isset($_SESSION[GioHangPGV])) {
            return count($_SESSION[GioHangPGV]);
        } else {
            return 0;
        }
    }

    function DSSanPhamGioHang() {
        if (isset($_SESSION[GioHangPGV])) {
            return $_SESSION[GioHangPGV];
        } else {
            return FALSE;
        }
    }

    function TongTien() {
        if (isset($_SESSION[GioHangPGV])) {
            $GioHang = $_SESSION[GioHangPGV];
            $sum = 0;
            foreach ($GioHang as $SanPham) {
                $sum += $SanPham['Gia'] * $SanPham['SoLuong'];
            }
            return $sum;
        } else {
            return 0;
        }
    }

    function ThemDonHang($DonHang) {
        $sql = "INSERT INTO `" . table_fix . "donhang` SET `NgayTao` = '{$DonHang['NgayTao']}',"
                . "`TongTien` = '{$DonHang['TongTien']}',"
                . "`MaKhachHang` = '{$DonHang['MaKhachHang']}', "
                . "`EmailKhachHang` = '{$DonHang['EmailKhachHang']}', "
                . "`MaDonHang` = '{$DonHang['MaDonHang']}', "
                . "`GhiChu` = '{$DonHang['GhiChu']}'";
        $this->Query($sql);
        $this->Tim();
    }

    function ThemDonHangChiTiet($DonHangChiTiet) {
        $sql = "INSERT INTO `" . table_fix . "donhangchitiet` "
                . "(`MaDonHangChiTiet`, `MaSanPham`, `Gia`, `MaDonHang`, `SoLuong`, `GhiChu`) "
                . "VALUES (NULL, '{$DonHangChiTiet['MaSanPham']}',"
                . " '{$DonHangChiTiet['Gia']}',"
                . " '{$DonHangChiTiet['MaDonHang']}', "
                . "'{$DonHangChiTiet['SoLuong']}', "
                . "'{$DonHangChiTiet['GhiChu']}')";
        $this->Query($sql);
        $this->Tim();
    }

    function TaoBangDonHang() {
        $sql = "CREATE TABLE IF NOT EXISTS `" . table_fix . "donhang` (`MaDonHang` varchar(20) NOT NULL,`NgayTao` date NOT NULL,`TongTien` double NOT NULL,`MaKhachHang` varchar(200) NOT NULL,`GhiChu` text NOT NULL,PRIMARY KEY (`MaDonHang`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
        $this->Query($sql);
        $this->Tim();
    }

    function TaoBangDonHangChiTiet() {
        $sql = "CREATE TABLE IF NOT EXISTS `" . table_fix . "donhangchitiet` (`MaDonHangChiTiet` int(11) NOT NULL AUTO_INCREMENT,`MaSanPham` varchar(50) NOT NULL,`Gia` float NOT NULL,`MaDonHang` varchar(20) NOT NULL,`SoLuong` int(11) NOT NULL,`GhiChu` text NOT NULL,PRIMARY KEY (`MaDonHangChiTiet`)) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ";
        $this->Query($sql);
        $this->Tim();
    }

    function DSDonHangTheoTaiKhoan($Khachhang) {
        $sql = "SELECT * FROM `" . table_fix . "donhang` where `MaKhachHang` = '{$Khachhang}'";
        $this->Query($sql);
        $kq = $this->Tim();
        if ($this->GetNumRow() >= 1) {
            return $this->fetchAll($kq);
        } else {
            return FALSE;
        }
    }

    function TimDonHang($MadonHang) {
        $sql = "SELECT * FROM `" . table_fix . "donhang` where `MaDonHang` = '{$MadonHang}'";
        $this->Query($sql);
        $kq = $this->Tim();
        if ($this->GetNumRow() >= 1) {
            return $this->fetchAll($kq);
        } else {
            return FALSE;
        }
    }

    function TimChiTietDonHang($MadonHang) {
        $sql = "SELECT * FROM `" . table_fix . "donhangchitiet` where `MaDonHang` = '{$MadonHang}'";
        $this->Query($sql);
        $kq = $this->Tim();
        if ($this->GetNumRow() >= 1) {
            return $this->fetchAll($kq);
        } else {
            return FALSE;
        }
    }

    function DonHangChiTiet($MaDonHang) {
        $sql = "SELECT * FROM `" . table_fix . "donhangchitiet` where `MaDonHang`= '$MaDonHang'";
        $this->Query($sql);
        $kq = $this->Tim();
        if ($this->GetNumRow() >= 1) {
            return $this->fetchAll($kq);
        } else {
            return FALSE;
        }
    }

}

?>