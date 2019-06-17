<?php

class Model_PhanQuyen extends Model_Adapter {

   function TimNhom($Nhom) {
       $sql = "SELECT * FROM `".table_fix."phanquyen` where `Nhom`  = '{$Nhom}'";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchRow($kq);
         return $kq;
      } else {
         return FALSE;
      }
   }
   function DSNhom() {
       $sql = "SELECT * FROM `pgv_phanquyen`";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchAll();
         return $kq;
      } else {
         return FALSE;
      }
   }
   function SuaQuyen($Quen) {
      $sql = "UPDATE  `" . table_fix . "phanquyen` SET  `Quen` =  '{$Quen['NhomQuen']}' WHERE  `Nhom` ='{$Quen['nhom']}'";
      $this->Query($sql);
      return $this->Luu();
   }
   function SuaTenNhom($Quen) {
      $sql = "UPDATE  `" . table_fix . "phanquyen` SET  `TenNhom` =  '{$Quen['TenNhom']}' WHERE  `Nhom` ='{$Quen['Nhom']}'";
      $this->Query($sql);
      return $this->Luu();
   }
   function ThemNhom() {
      $sql = "INSERT INTO  `" . table_fix . "phanquyen` SET  `Quen` =  '',`TenNhom` =  '',`Nhom` = NULL";
      $this->Query($sql);
      return $this->Luu();
   }
   
}
?>

