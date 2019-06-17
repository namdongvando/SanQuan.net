<?php

class Model_TimKiem extends Model_Adapter {
 
      function TongDSTimSanPhamTheoTen($TuKhoa) {

        $sql = "SELECT count(*) as `Tong` FROM `" . table_fix . "sanpham` where `TenSanPham` like BINARY '%{$TuKhoa}%' or `MaSanPham` like '%{$TuKhoa}%' ORDER BY `NgayDang` DESC";
        $this->Query($sql);
        $a = $this->fetchAll();
        if($a[0]['Tong']!=0) {
           $kq = $this->Tim();
           $tong  = $this->fetchRow($kq);
        }else{
            $sql = "SELECT count(*) as `Tong` FROM `" . table_fix . "sanpham` where `TenSanPham` like '%{$TuKhoa}%' or `MaSanPham` like '%{$TuKhoa}%' ORDER BY `NgayDang` DESC";
            $this->Query($sql);
            $kq = $this->Tim();
            $tong  = $this->fetchRow($kq);
        }
        return $tong;

    }

   function DSTimSanPhamTheoTen($TuKhoa, $ViTri, $SoLuong) {
        $sql = "SELECT * FROM `" . table_fix . "sanpham` where `TenSanPham` like BINARY '%{$TuKhoa}%' or `MaSanPham` like '%{$TuKhoa}%' ORDER BY `NgayDang` DESC LIMIT {$ViTri},{$SoLuong} ";
        $this->Query($sql);
        if($this->GetNumRow() >= 1) {
           $SanPham = $this->fetchAll();
           return $SanPham;
        }else{
            $sql = "SELECT * FROM `" . table_fix . "sanpham` where `TenSanPham` like '%{$TuKhoa}%' or `MaSanPham` like '%{$TuKhoa}%' ORDER BY `NgayDang` DESC LIMIT {$ViTri},{$SoLuong} ";
            $this->Query($sql);
            $SanPham = $this->fetchAll();
            return $SanPham;
        }
        return FALSE;
   }
   function DSTimSanPhamTheoSapXep($TuKhoa, $ViTri, $SoLuong, $SapXep, $TangGiam) {
        $sql = "SELECT * FROM `" . table_fix . "sanpham` where `TenSanPham` like BINARY '%{$TuKhoa}%' or `MaSanPham` like '%{$TuKhoa}%' ORDER BY `$SapXep` $TangGiam LIMIT {$ViTri},{$SoLuong} ";
        $this->Query($sql);
        if($this->GetNumRow() >= 1) {
           $SanPham = $this->fetchAll();
           return $SanPham;
        }else{
            $sql = "SELECT * FROM `" . table_fix . "sanpham` where `TenSanPham` like '%{$TuKhoa}%' or `MaSanPham` like '%{$TuKhoa}%' ORDER BY `$SapXep` $TangGiam LIMIT {$ViTri},{$SoLuong} ";
            $this->Query($sql);
            $SanPham = $this->fetchAll();
            return $SanPham;
        }
        return FALSE;
   }
   function TimDMTheoSPTK($TuKhoa) {
        $sql = "SELECT `MaDanhMuc` FROM `" . table_fix . "sanpham` where `TenSanPham` like BINARY '%{$TuKhoa}%' or `MaSanPham` like '%{$TuKhoa}%' GROUP BY `MaDanhMuc`";
        $kq = $this->Query($sql);
        $kq = $this->tim();
        if($this->GetNumRow() >= 1) {
           $DanhMuc['dsdm'] = $this->fetchAll();
        }else{
            $sql = "SELECT `MaDanhMuc` FROM `" . table_fix . "sanpham` where `TenSanPham` like '%{$TuKhoa}%' or `MaSanPham` like '%{$TuKhoa}%' GROUP BY `MaDanhMuc`";
            $this->Query($sql);
            $kq = $this->tim();
            $DanhMuc['dsdm'] = $this->fetchAll();
        }
        return $DanhMuc;
   }
   /* tim ma san pham theo từ khóa liên quan đến tên sản phẩm. được tìm thấy*/
   function TimMaTuKhoaLienQuan($MaSP) {
        $sql = "SELECT TagID FROM `" . table_fix . "tagchitiet` where `MaSanPham` in ('$MaSP')";
        $kq = $this->Query($sql);
        $TuKhoaLienQuan['matukhoasp'] = $this->fetchAll();
        return $TuKhoaLienQuan;
   }
   /* tìm  tên sản phẩm luên quan đến sản phẩm đang tìm kiếm*/
   function TimTuKhoaLienQuan($TagID) {
        $sql = "SELECT TagName FROM `" . table_fix . "tag` where `TagId` in ($TagID)";
        $kq = $this->Query($sql);
        $TuKhoaLienQuan['tukhoaSP'] = $this->fetchAll();
        return $TuKhoaLienQuan;
   }
   
}

?>
