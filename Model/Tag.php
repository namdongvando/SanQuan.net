<?php

class Model_Tag extends Model_Adapter {

   function DSTag() {
      $sql = "SELECT * FROM `" . table_fix . "tag`";
      $this->Query($sql);
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchAll();
         return $kq;
      } else {
         return FALSE;
      }
   }

   function DSTagTheoTin($MaTinTuc) {
      $sql = "SELECT * FROM `" . table_fix . "tagchitiet` where `MaTinTuc` = '{$MaTinTuc}'";
      $this->Query($sql);
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchAll();
         return $kq;
      } else {
         return FALSE;
      }
   }

   function TaoBangTag() {
      $sql = "CREATE TABLE IF NOT EXISTS `" . table_fix . "tag` (`TagID` int(11) NOT NULL AUTO_INCREMENT,`TagName` varchar(200) NOT NULL, `GhiChu` text, PRIMARY KEY (`TagID`)) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;";
      $this->Query($sql);
      return $this->Luu();
   }

   function TaoBangTagChiTiet() {
      $sql = "CREATE TABLE IF NOT EXISTS `" . table_fix . "tagchitiet` (  `TagID` int(11) NOT NULL,`MaSanPham` varchar(50) NOT NULL, `MaTintuc` varchar(20) NOT NULL, PRIMARY KEY (`TagID`,`MaSanPham`,`MaTintuc`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
      $this->Query($sql);
      return $this->Luu();
   }

   function ThemTag($TagName) {
      $sql = "INSERT INTO `" . table_fix . "tag` SET `TagName` = '{$TagName['TagName']}',`GhiChu` = '{$TagName['GhiChu']}'";
      $this->Query($sql);
      return $this->Luu();
   }

   function XoaTag($TagName) {
      $sql = "DELETE FROM `" . table_fix . "tag` WHERE `TagID` = '{$TagName}'";
      $this->Query($sql);
      return $this->Luu();
   }

   function SuaTag($TagName) {
      $sql = "UPDATE `" . table_fix . "tag` SET `TagName` = '{$TagName['TagName']}',`GhiChu` = '{$TagName['GhiChu']}' WHERE `TagID` ='{$TagName['TagID']}'";
      $this->Query($sql);
      return $this->Luu();
   }

   function ThemChiTietTag($TagChiTiet) {
      $sql = "INSERT INTO `" . table_fix . "tagchitiet` SET `TagID` = '{$TagChiTiet['TagID']}',`MaSanPham` = '{$TagChiTiet['MaSanPham']}',`MaTintuc` = '{$TagChiTiet['MaTinTuc']}'";
      $this->Query($sql);
      return $this->Luu();
   }

   function XoaChiTietTagTinTuc($MaTinTuc) {
      $sql = "DELETE FROM `".table_fix."tagchitiet` WHERE `MaTintuc` = '{$MaTinTuc}'";
      $this->Query($sql);
      return $this->Luu();
   }

}

?>