<?php

class Model_CuaHang extends Model_Adapter {

//   function ThemSoLanXem() {
//      $sql = "ALTER TABLE `" . table_fix . "cuahang` ADD `SoLanXem` INT NULL DEFAULT '0' AFTER `GhiChu`";
//      $this->Query($sql);
//      $this->Tim();
//      $sql = "ALTER TABLE `" . table_fix . "cuahang` ADD `DoUuTien` INT NOT NULL DEFAULT '0'";
//      $this->Query($sql);
//      $this->Tim();
//   }
//   function DSCuaHangXemNhieuNhat($soluong) {
////      tìm cua hàng có luot xem nhieu nhất
////      độ quan trong
////      tính tông các lout xem sản phẩm
//      $sql = "SELECT `MaCuaHang`,`TenCuaHang`,`SoLanXem`,`TenHienThi` FROM `" . table_fix . "cuahang` ORDER BY `SoLanXem`  DESC limit 0,{$soluong}";
//      $this->Query($sql);
//      $kq = $this->Tim();
//      if($this->GetNumRow() >= 1) {
//         $kq = $this->fetchAll();
//         return $kq;
//      } else {
//         return FALSE;
//      }
//   }

   function DSCuaHangNoiBat($soluong) {
//      tìm cua hàng có luot xem nhieu nhất
//      độ quan trong
//      tính tông các lout xem sản phẩm
      $sql = "SELECT `MaCuaHang`,`TenCuaHang`,`SoLanXem`,`TenHienThi` FROM `" . table_fix . "cuahang` ORDER BY `DoUuTien`  DESC limit 0,{$soluong}";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchAll();
         return $kq;
      } else {
         return FALSE;
      }
   }

   function DSCuaHangNhieuSanPhamNhat($soluong) {
      // tìm trong cửa hàng sản phẩm có tổng sản phẩm xếp thep từ lớn tới bé. lấy 5 gian hàng có nhiều sản phẩm nhất
      $sql = "SELECT COUNT(*) AS Tong, `ch`.`TenCuaHang`, `ch`.`TenHienThi` FROM `" . table_fix . "cuahang_sanpham`
                as `ch_sp` INNER JOIN `" . table_fix . "cuahang` as `ch` ON `ch_sp`.`MaCuaHang`=`ch`.`MaCuaHang`
                WHERE AnHien=1
                GROUP BY `ch_sp`.`MaCuaHang` ORDER BY Tong DESC LIMIT 0,{$soluong}";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchAll();
         return $kq;
      } else {
         return FALSE;
      }
   }

   function DSCuaHangGiaoDichThanhCongNhat($soluong) {
      // tìm trong cửa hàng sản phẩm có tổng sản phẩm xếp thep từ lớn tới bé. lấy 5 gian hàng có nhiều sản phẩm nhất
      $sql = "SELECT COUNT(*) AS TongGiaoDich, `ch`.`TenCuaHang`, `ch`.`TenHienThi`
               FROM `" . table_fix . "donhang` as `dh` INNER JOIN `" . table_fix . "cuahang` as `ch`
               ON `dh`.`MaKhachHang`=`ch`.`MaKhachHang`
               WHERE `TinhTrang`=1
               GROUP BY `dh`.`MaKhachHang` ORDER BY TongGiaoDich DESC LIMIT 0,{$soluong}";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() == 0) {
         $sql = "SELECT COUNT(*) AS Tong, `ch`.`TenCuaHang`, `ch`.`TenHienThi` FROM `" . table_fix . "cuahang_sanpham`
                as `ch_sp` INNER JOIN `" . table_fix . "cuahang` as `ch` ON `ch_sp`.`MaCuaHang`=`ch`.`MaCuaHang`
                WHERE AnHien=1
                GROUP BY `ch_sp`.`MaCuaHang` ORDER BY Tong DESC LIMIT 0,5";
         $this->Query($sql);
         $kq = $this->Tim();
      }
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchAll();
         return $kq;
      } else {
         return FALSE;
      }
   }

   function DSCuaHang($Vitri, $soluong) {
      $sql = "SELECT * FROM `" . table_fix . "cuahang` where `AnHien`= '1' ORDER BY `DoUuTien` DESC  limit {$Vitri},{$soluong}";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchAll();
         return $kq;
      } else {
         return FALSE;
      }
   }

   function TongDSCuaHang(&$TongGianHang) {
      $sql = "SELECT count(*) as `TongGianHang` FROM `" . table_fix . "cuahang` where `AnHien`= '1' ORDER BY `DoUuTien` DESC ";
      $this->Query($sql);
      $kq = $this->Tim();
      $TSP = $this->fetchRow($kq);
      $TongGianHang = $TSP['TongGianHang'];
   }

   function DSCuaHangXemNhieuNhat($Vitri, $soluong) {
      $sql = "SELECT `MaCuaHang`,`TenCuaHang`,`SoLanXem`,`TenHienThi`,`GhiChu` FROM `" . table_fix . "cuahang` ORDER BY `SoLanXem`  DESC limit {$Vitri},{$soluong}";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchAll();
         return $kq;
      } else {
         return FALSE;
      }
   }

//   function DSCuaHangNoiBat($Vitri, $soluong) {
////      tìm cua hàng có luot xem nhieu nhất
////      độ quan trong
////      tính tông các lout xem sản phẩm
//      $sql = "SELECT `MaCuaHang`,`TenCuaHang`,`SoLanXem`,`TenHienThi` FROM `" . table_fix . "cuahang` ORDER BY `DoUuTien`  DESC limit {$Vitri},{$soluong}";
//      $this->Query($sql);
//      $kq = $this->Tim();
//      if($this->GetNumRow() >= 1) {
//         $kq = $this->fetchAll();
//         return $kq;
//      } else {
//         return FALSE;
//      }
//   }

   function DSDMCuaHang($MaKhacHang) {
      $sql = "SELECT `MaDanhMuc` FROM `" . table_fix . "sanpham` where `ChuSanPham` = '{$MaKhacHang}' group by `MaDanhMuc` ";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchAll();
         return $kq;
      } else {
         return FALSE;
      }
   }

   function DSSanPhamTheoTheoChuCuaHang($MaKachHang, $ViTri, $SoLuong) {
      $sql = "SELECT `TenSanPham`,`SoLanXem`,`SoLanMua`,`MaSanPham`,`ChuSanPham`,`Gia`,`MoTa`,`UrlHinh`,`NgayDang`,`GhiChu` FROM `" . table_fix . "sanpham` "
              . "where `ChuSanPham` = '{$MaKachHang}' and `AnHien` = 1 limit {$ViTri},{$SoLuong}";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchAll();
         return $kq;
      } else {
         return FALSE;
      }
   }

   function KienTraTenHienThi($TenHienThi) {
      $sql = "SELECT * FROM `" . table_fix . "cuahang` where `TenHienThi` ='{$TenHienThi}'";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         return $this->fetchRow($kq);
      } else {
         return FALSE;
      }
   }

   function getconn() {
      return self::$_conn;
   }

   function DSCuaHangTheoNguoiDung($MaKhacHang) {
      $sql = "SELECT * FROM `" . table_fix . "cuahang` where `MaKhachHang` = '{$MaKhacHang}' LIMIT 0,10";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchAll();
         return $kq;
      } else {
         return FALSE;
      }
   }

   function TimCuaHang($MaShop) {
      $sql = "SELECT * FROM `" . table_fix . "cuahang` where `MaCuaHang` = '{$MaShop}' or `TenHienThi` = '{$MaShop}' ";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         return $this->fetchRow($kq);
      } else {
         return FALSE;
      }
   }

   function ThemCuaHang($CuaHang) {
      echo $sql = "INSERT INTO `" . table_fix . "cuahang` SET "
      . "`TenCuaHang` = '{$CuaHang['TenCuaHang']}', "
      . "`MaCuaHang` = '{$CuaHang['MaCuaHang']}', "
      . "`CauHinhCSS` = '{$CuaHang['CauHinhCSS']}', "
      . "`MaKhachHang` = '{$CuaHang['MaKhachHang']}', "
      . "`TenHienThi` = '{$CuaHang['TenHienThi']}', "
      . "`GhiChu` = '{$CuaHang['GhiChu']}', "
      . "`AnHien` = '{$CuaHang['AnHien']}'";
      $this->Query($sql);
      return $this->Tim();
   }

   function SuaGhiChuSanPham($ThuocTinh, $MaSanPham) {
      $sql = "UPDATE `" . table_fix . "sanpham` SET `GhiChu` = '{$ThuocTinh}' WHERE `MaSanPham` = '{$MaSanPham}'";
      $this->Query($sql);
      return $this->Tim();
   }

   function SuaGhiChuCuaHang($ThuocTinh, $MaCuaHang) {
      $sql = "UPDATE `" . table_fix . "cuahang` SET `GhiChu` = '$ThuocTinh' WHERE `MaCuaHang` = '{$MaCuaHang}'";
      $this->Query($sql);
      return $this->Tim();
   }

   function SuaTenCuaHang($ThuocTinh, $MaCuaHang) {
      $sql = "UPDATE `" . table_fix . "cuahang` SET `TenCuaHang` = '$ThuocTinh' WHERE `MaCuaHang` = '{$MaCuaHang}'";
      $this->Query($sql);
      return $this->Tim();
   }

   function ThemDanhMucCuaHang($DanhMucCuaHang) {
      $sql = "INSERT INTO `" . table_fix . "danhmuccuahang` SET "
              . "`MaCuaHang` = '{$DanhMucCuaHang['MaCuaHang']}' ,"
              . "`MaDanhMuc` = '{$DanhMucCuaHang['MaDanhMuc']}' ,"
              . "`TenDanhMuc` = '{$DanhMucCuaHang['TenDanhMuc']}' ,"
              . "`TenDanhMucEN` = '{$DanhMucCuaHang['TenDanhMucEN']}' ,"
              . "`STT` = '{$DanhMucCuaHang['STT']}' ,"
              . "`GhiChu` = '{$DanhMucCuaHang['GhiChu']}'";
      $this->Query($sql);
      return $this->Tim();
   }

   function BoDanhMucCuaHang($MaCuaHang, $MaDanhMuc) {
      $sql = "DELETE FROM `" . table_fix . "danhmuccuahang` WHERE `MaCuaHang` = '{$MaCuaHang}' AND `MaDanhMuc` = '{$MaDanhMuc}'";
      $this->Query($sql);
      return $this->Tim();
   }

   function TimDanhMucCuaHang($MaCuaHang, $MaDanhMuc) {
      $sql = "SELECT * FROM `" . table_fix . "danhmuccuahang` WHERE `MaCuaHang` = '{$MaCuaHang}' AND `MaDanhMuc` = '{$MaDanhMuc}'";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         return $this->fetchRow($kq);
      } else {
         return FALSE;
      }
   }

   function DSDanhMucCuaHang($MaCuaHang) {
      $sql = "SELECT * FROM `" . table_fix . "danhmuccuahang` WHERE `MaCuaHang` = '{$MaCuaHang}'";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchAll();
         return $kq;
      } else {
         return FALSE;
      }
   }

   function DSGianHangCuaKhachHang($MaKhachHang) {
      $sql = "SELECT * FROM `" . table_fix . "cuahang` WHERE `MaKhachHang` = '{$MaKhachHang}'";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchAll();
         return $kq;
      } else {
         return FALSE;
      }
   }

   function DSGianHangAll() {
      $sql = "SELECT * FROM `" . table_fix . "cuahang`";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchAll();
         return $kq;
      } else {
         return FALSE;
      }
   }

   function DonHangCuaGianHang($MaKhachHang) {
      $sql = "SELECT * FROM `" . table_fix . "donhang` where `MaKhachHang` = '{$MaKhachHang}' order by `TinhTrang` ASC ";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchAll();
         return $kq;
      } else {
         return FALSE;
      }
   }

   function DSDonHangOfGianHangChuaXuLy($MaKhachHang) {
      $sql = "SELECT * FROM `" . table_fix . "donhang` where `MaKhachHang` = '{$MaKhachHang}' and `TinhTrang` = '-1'";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchAll();
         return $kq;
      } else {
         return FALSE;
      }
   }

   function TimDonHang($MaDonHang) {
      $sql = "SELECT * FROM `" . table_fix . "donhang` where `MaDonHang` = '{$MaDonHang}'";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         return $this->fetchRow($kq);
      } else {
         return FALSE;
      }
   }

   function ThemGioiThieuCuaHang($GioiThieu) {
      $sql = "INSERT INTO `" . table_fix . "gioithieu` SET "
              . "`MaGioiThieu` = '{$GioiThieu['MaGioiThieu']}',"
              . "`NoiDung` = '{$GioiThieu['NoiDung']}',"
              . "`ChuGioiThieu` = '{$GioiThieu['ChuGioiThieu']}',"
              . "`ghichu` = '{$GioiThieu['ghichu']}',"
              . "`NoiDungEN` = '{$GioiThieu['NoiDungEN']}'";
      $this->Query($sql);
      return $this->Tim();
   }

   function SuaGioiThieuCuaHang($GioiThieu) {
      $sql = "UPDATE `" . table_fix . "gioithieu` SET "
              . "`NoiDung` = '{$GioiThieu['NoiDung']}',"
              . "`ghichu` = '{$GioiThieu['ghichu']}',"
              . "`NoiDungEN` = '{$GioiThieu['NoiDungEN']}' where `ChuGioiThieu` = '{$GioiThieu['ChuGioiThieu']}'";
      $this->Query($sql);
      return $this->Tim();
   }

   function TimGioiThieuCuaHang($GianHang) {
      $sql = "SELECT * FROM `" . table_fix . "gioithieu` where `ChuGioiThieu` = '{$GianHang}'";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         return $this->fetchRow($kq);
      } else {
         return FALSE;
      }
   }

   function caidatCuaHang() {
      $sql = "";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         return $this->fetchRow($kq);
      } else {
         return FALSE;
      }
   }

   function BoScriptDacBiet($str) {
      if(!empty($str)) {
         $kytu = array("<script>", "</script>");
         foreach($kytu as $k => $v) {
            $str = str_replace($v, "", $str);
         }
         return $str;
      } else {
         return FALSE;
      }
   }

   function DSSanPhamCuaHangLoai($MaKhachHang, $LoaiSanPham, $ViTri, $Soluong, &$TongSanPham) {
      $sql = "SELECT count(*) as `TongSanPham` FROM `" . table_fix . "sanpham` where "
              . "`ChuSanPham` = '{$MaKhachHang}' and "
              . "`AnHien` = '1' and "
              . "`MaDanhMuc` = '$LoaiSanPham'";
      $this->Query($sql);
      $kq = $this->Tim();
      $TSP = $this->fetchRow($kq);
      $TongSanPham = $TSP['TongSanPham'];
      $sql = "SELECT `MaSanPham`,`MaDanhMuc`,`TenSanPham`,`SoLanXem`,`SoLanMua`,`GhiChu`,`Gia`,`MoTa`,`UrlHinh`,`NgayDang`,`GiamGia` FROM `" . table_fix . "sanpham` where "
              . "`ChuSanPham` = '{$MaKhachHang}' and "
              . "`AnHien` = '1' and "
              . "`MaDanhMuc` = '$LoaiSanPham' limit {$ViTri},{$Soluong}";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchAll();
         return $kq;
      } else {
         return FALSE;
      }
   }

   function DSSanPhamKhachCuaHangLoai($MaKhachHang, $LoaiSanPham, $ViTri, $Soluong, &$TongSanPham) {
      $sql = "SELECT count(*) as `TongSanPham` FROM `" . table_fix . "sanpham` where "
              . "`ChuSanPham` != '{$MaKhachHang}' and "
              . "`AnHien` = '1' and "
              . "`MaDanhMuc` = '$LoaiSanPham'";
      $this->Query($sql);
      $kq = $this->Tim();
      $TSP = $this->fetchRow($kq);
      $TongSanPham = $TSP['TongSanPham'];
      $sql = "SELECT `MaSanPham`,`MaDanhMuc`,`TenSanPham`,`GhiChu`,`Gia`,`MoTa`,`UrlHinh`,`NgayDang`,`GiamGia` FROM `" . table_fix . "sanpham` where "
              . "`ChuSanPham` != '{$MaKhachHang}' and "
              . "`AnHien` = '1' and "
              . "`MaDanhMuc` = '$LoaiSanPham' limit {$ViTri},{$Soluong}";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchAll();
         return $kq;
      } else {
         return FALSE;
      }
   }

   function DSSanPhamCuaHangCungLoai($MaKhachHang, $LoaiSanPham, $MaSanPham, $ViTri, $Soluong) {
      $sql = "SELECT `MaSanPham`,`MaDanhMuc`,`TenSanPham`,`GhiChu`,`Gia`,`MoTa`,`UrlHinh`,`NgayDang`,`GiamGia` FROM `" . table_fix . "sanpham` where "
              . "`ChuSanPham` = '{$MaKhachHang}' and "
              . "`AnHien` = '1' and `MaSanPham` != '$MaSanPham' and "
              . "`MaDanhMuc` = '$LoaiSanPham' limit {$ViTri},{$Soluong}";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchAll();
         return $kq;
      } else {
         return FALSE;
      }
   }

   function DSSanPhamCuaHang($TenHienThi) {
      $sql = "SELECT * FROM `" . table_fix . "cuahang_sanpham` where `MaCuaHang` = '{$TenHienThi}'";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchAll();
         return $kq;
      } else {
         return FALSE;
      }
   }

   function DSTatCaSanPhamKhachHang($MaKhachHang, $ViTri, $Soluong, &$TongSanPham) {
      $sql = "SELECT count(*) as `TongSanPham` FROM `" . table_fix . "sanpham` where `ChuSanPham` = '{$MaKhachHang}'";
      $this->Query($sql);
      $kq = $this->Tim();
      $TSP = $this->fetchRow($kq);
      $TongSanPham = $TSP['TongSanPham'];
      $sql = "SELECT `MaSanPham`,`MaDanhMuc`,`TenSanPham`,`GhiChu`,`Gia`,`MoTa`,`UrlHinh`,`NgayDang`,`GiamGia` FROM `" . table_fix . "sanpham` where "
              . "where `ChuSanPham` = '{$MaKhachHang}' limit {$ViTri},{$Soluong}";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchAll();
         return $kq;
      } else {
         return FALSE;
      }
   }

   function DSSanPhamThemChuPT($email, $ViTri, $Soluong, &$TongSanPham) {
      $sql = "SELECT count(*) as `TongSanPham` FROM `" . table_fix . "sanpham` as a,`" . table_fix . "danhmuc` as b where a.MaDanhMuc = b.MaDanhMuc and `ChuSanPham` = '{$email}' ";
      $this->Query($sql);
      $kq = $this->Tim();
      $TSP = $this->fetchRow($kq);
      $TongSanPham = $TSP['TongSanPham'];
      $sql = "SELECT a.*,b.`TenDanhMuc` FROM `" . table_fix . "sanpham` as a,`" . table_fix . "danhmuc` as b where a.MaDanhMuc = b.MaDanhMuc and `ChuSanPham` = '{$email}' limit {$ViTri},{$Soluong} ";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchAll();
         return $kq;
      } else {
         return FALSE;
      }
   }

   function DSSanPhamTheoTheoChuCuaHangXemNhieu($MaKachHang, $ViTri, $SoLuong) {
      $sql = "SELECT `TenSanPham`,`SoLanXem`,`SoLanMua`,`MaSanPham`,`ChuSanPham`,`Gia`,`MoTa`,`UrlHinh`,`NgayDang`,`GhiChu` FROM `" . table_fix . "sanpham`"
              . " where `ChuSanPham` = '{$MaKachHang}' and `AnHien` = 1 and `Gia` >0 order by `SoLanXem` desc limit {$ViTri},{$SoLuong}";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchAll();
         return $kq;
      } else {
         return FALSE;
      }
   }

   function DSSanPhamTheoTheoChuCuaHangKhongPT($MaKachHang) {
      $sql = "SELECT `TenSanPham`,`SoLanXem`,`SoLanMua`,`MaSanPham`,`ChuSanPham`,`Gia`,`MoTa`,`UrlHinh`,`NgayDang`,`GhiChu` FROM `" . table_fix . "sanpham`"
              . " where `ChuSanPham` = '{$MaKachHang}' and `AnHien` = 1 order by `SoLanXem` desc ";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchAll();
         return $kq;
      } else {
         return FALSE;
      }
   }

   function DSSanPhamTheoTheoChuCuaHangGiamGia($MaKachHang, $ViTri, $SoLuong) {
      $sql = "SELECT `TenSanPham`,`SoLanXem`,`SoLanMua`,`MaSanPham`,`ChuSanPham`,`Gia`,`MoTa`,`UrlHinh`,`NgayDang`,`GhiChu` FROM `" . table_fix . "sanpham`"
              . " where `ChuSanPham` = '{$MaKachHang}' and `AnHien` = 1 and `GiamGia` >0 order by `GiamGia` desc limit {$ViTri},{$SoLuong}";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchAll();
         return $kq;
      } else {
         return FALSE;
      }
   }

   function DSSanPhamTheoTheoChuCuaHangMuaNhieu($MaKachHang, $ViTri, $SoLuong) {
      $sql = "SELECT `TenSanPham`,`SoLanXem`,`SoLanMua`,`MaSanPham`,`ChuSanPham`,`Gia`,`MoTa`,`UrlHinh`,`NgayDang`,`GhiChu` FROM `" . table_fix . "sanpham`"
              . " where `ChuSanPham` = '{$MaKachHang}' and `AnHien` = 1 and `Gia` >0 order by `SoLanMua` desc limit {$ViTri},{$SoLuong}";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchAll();
         return $kq;
      } else {
         return FALSE;
      }
   }

   function DSSanPhamNoiBat() {
      $sql = "SELECT `TenSanPham`,`SoLanXem`,`SoLanMua`,`MaSanPham`,`ChuSanPham`,`Gia`,`MoTa`,`UrlHinh`,`NgayDang`,`GhiChu` FROM `" . table_fix . "sanpham` where `AnHien` = '1' ORDER BY `SoLanXem`  DESC LIMIT 0,10 ";
      $this->Query($sql);
      return $kq = $this->fetchAll();
   }

   function DSSanPhamMuaNhieu() {
      $sql = "SELECT `TenSanPham`,`SoLanXem`,`SoLanMua`,`MaSanPham`,`ChuSanPham`,`Gia`,`MoTa`,`UrlHinh`,`NgayDang`,`GhiChu` FROM `" . table_fix . "sanpham` where `AnHien` = '1' ORDER BY `SoLanMua`  DESC LIMIT 0,10 ";
      $this->Query($sql);
      return $kq = $this->fetchAll();
   }

   function DSSanPhamCuaGianHangTheoLoai($MaGianHang) {
      $sql = "SELECT * FROM `" . table_fix . "danhmuccuahang` where `MaCuaHang` = '{$MaGianHang}'";
      $this->Query($sql);
      return $kq = $this->fetchAll();
   }

   function AnHienCuaHang($MaCuaHang, $An) {
      $sql = "UPDATE `" . table_fix . "cuahang` SET `AnHien` = '{$An}' WHERE `MaCuaHang` = '{$MaCuaHang}'";
      $this->Query($sql);
      return $this->Luu();
   }

   function ThemSanPhamGianHang($SanPhamGianHang) {
      echo $sql = "INSERT INTO `" . table_fix . "cuahang_sanpham` SET "
              . "`MaSanPham` = '{$SanPhamGianHang['MaSanPham']}',"
              . "`MaCuaHang` = '{$SanPhamGianHang['MaCuaHang']}',"
              . "`TenSanPham` = '{$SanPhamGianHang['TenSanPham']}',"
              . "`NoiBat` = '{$SanPhamGianHang['NoiBat']}',"
              . "`SoLanXem` = '{$SanPhamGianHang['SoLanXem']}',"
              . "`SoLanMua` = '{$SanPhamGianHang['SoLanMua']}',"
              . "`GhiChu` = '{$SanPhamGianHang['GhiChu']}'";
      $this->Query($sql);
      return $this->Luu();
   }

   function XoaSanPhamTrongGianHang() {
      $sql = "";
      $this->Query($sql);
      return $this->Luu();
   }

   function TongSanPhamDanhMucCuaHang($MaDanhMuc, $MaCuaHang) {
      $sql = "SELECT count(*) as `TongSanPham` FROM `" . table_fix . "sanpham` where `ChuSanPham` ='{$MaCuaHang}' and `MaDanhMuc` = '{$MaDanhMuc}'";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         return $this->fetchRow($kq);
      } else {
         return FALSE;
      }
   }

   function ThemKhuyenMai($KhuyenMai) {
      $sql = "INSERT INTO `" . table_fix . "khuyenmai` SET "
              . "`MaKhuyenMai` = '{$KhuyenMai['MaKhuyenMai']}',"
              . "`TenKhuyenMai` = '{$KhuyenMai['TenKhuyenMai']}',"
              . "`SDT` = '{$KhuyenMai['SDT']}',"
              . "`DiaChi` = '{$KhuyenMai['DiaChi']}',"
              . "`MaKhachHang` = '{$KhuyenMai['MaKhachHang']}',"
              . "`NgayBatDau` = '{$KhuyenMai['NgayBatDau']}',"
              . "`NgayKetThuc` = '{$KhuyenMai['NgayKeThuc']}',"
              . "`GhiChu` = '{$KhuyenMai['GhiChu']}'";
      $this->Query($sql);
      return $this->Luu();
   }

   function DSCTKhuyenMaiTheoKhachHang($MaKhachHang, $ViTri, $SoLuong, &$TongCTKhuyenMai) {
      $sql = "SELECT count(*) as `TongSanPham` FROM `" . table_fix . "khuyenmai` where `MaKhachHang` = '$MaKhachHang'";
      $this->Query($sql);
      $kq = $this->Tim();
      $TSP = $this->fetchRow($kq);
      $TongCTKhuyenMai = $TSP['TongSanPham'];
      $sql = "SELECT * FROM `" . table_fix . "khuyenmai` where `MaKhachHang` = '$MaKhachHang' ORDER BY `NgayBatDau` DESC limit {$ViTri},{$SoLuong}";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchAll();
         return $kq;
      } else {
         return FALSE;
      }
   }

   function ThemMaKhuyenMai($MaKhuyenMai) {
      $sql = "INSERT INTO `" . table_fix . "khuyenmai_magiamgia` SET "
              . "`MaKhuyenMai` = '{$MaKhuyenMai['MaKhuyenMai']}', "
              . "`MaGiamGia` = '{$MaKhuyenMai['MaGiamGia']}',"
              . " `GiaTri` = '{$MaKhuyenMai['GiaTri']}',"
              . " `TinhTrang` = '{$MaKhuyenMai['TinhTrang']}',"
              . " `DonVi` = '{$MaKhuyenMai['DonVi']}',"
              . " `ApDung` = '{$MaKhuyenMai['ApDung']}'";

//              die();
      $this->Query($sql);
      $this->Luu();
   }

   function TimCTKhuyenMai($CTKhuyenMai, $ChuKhuyenMai) {
//      Tìm khuyến mai theo chủ
      $sql = "SELECT * FROM `" . table_fix . "khuyenmai` where `MaKhachHang` = '{$ChuKhuyenMai}' and `MaKhuyenMai` = '{$CTKhuyenMai}'";
      $this->Query($sql);
      $kq = $this->Tim();
      return $this->fetchRow($kq);
   }

   function DSMaKhuyenMai($CTKhuyenMai) {
      $sql = "SELECT * FROM `" . table_fix . "khuyenmai_magiamgia` where `MaKhuyenMai` = '{$CTKhuyenMai}'";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchAll();
         return $kq;
      } else {
         return FALSE;
      }
   }

}

?>
