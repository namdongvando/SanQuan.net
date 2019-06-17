<?php

class Model_DonHang extends Model_Adapter {

   function DSDonhang() {
      $sql = "SELECT * FROM `" . table_fix . "donhang`";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchAll();
         return $kq;
      } else {
         return FALSE;
      }
   }

   function TimDonhang() {
      
   }

   function DonhangChiTiet() {
      
   }

   function XoaDonHang($MaDonHang) {
      $sql = "DELETE FROM `" . table_fix . "donhang` WHERE `MaDonHang` = '$MaDonHang' ";
      $this->Query($sql);
      $this->Luu();
      $sql = "DELETE FROM `" . table_fix . "donhangchitiet` WHERE `MaDonHang` = '{$MaDonHang}'";
      $this->Query($sql);
      $this->Luu();
   }

}

?>