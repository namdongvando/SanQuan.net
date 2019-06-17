<?php

class Model_CongTy extends Model_Adapter {
 
   function DSCongTy() {
      $sql = "SELECT * FROM `".table_fix."congtylienket`";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchAll();
         return $kq;
      } else {
         return FALSE;
      }
   }
   function DSTimCongTy($TuKhoa) {
      $sql = "SELECT * FROM `".table_fix."congtylienket` where `TenCongTy` like '%{$TuKhoa}%'";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchAll();
         return $kq;
      } else {
         return FALSE;
      }
   }
   function XoaCongTy($maCognTy) {
      $sql = "DELETE FROM `".table_fix."congtylienket` WHERE `MaCongTy` = '{$maCognTy}'";
      $this->Query($sql);
      return $this->Tim();
    
   }
   function SuaCongTy($CognTy) {
      $sql = "UPDATE `".table_fix."congtylienket` SET "
	    . "`TenCongTy` = '{$CognTy['TenCongTy']}',"
	    . "`DiaChi` = '{$CognTy['DiaChi']}',"
	    . "`LogoDaiDien` = '{$CognTy['LogoDaiDien']}',"
	    . "`Banner` = '{$CognTy['Banner']}',"
	    . "`SoDienThoai` = '{$CognTy['SoDienThoai']}',"
	    . "`Email` = '{$CognTy['Email']}' WHERE "
	    . "`MaCongTy` = '{$CognTy['MaCongTy']}'";
      $this->Query($sql);
      return $this->Tim();
   }
   function ThemCongTy($CognTy) {
      $sql = "INSERT INTO `".table_fix."congtylienket` SET "
	    . "`TenCongTy` = '',"
	    . "`DiaChi` = '',"
	    . "`LogoDaiDien` = '',"
	    . "`Banner` = '',"
	    . "`SoDienThoai` = '',"
	    . "`Email` = '',"
	    . "`MaCongTy` = '{$CognTy}'";
      $this->Query($sql);
      return $this->Tim();
    
   }

}

?>
