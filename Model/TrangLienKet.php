<?php

class Model_TrangLienKet extends Model_Adapter {

   function __construct() {
      parent::__construct();
   }

   function DSTrangLienKet() {
      $sql = "SELECT * FROM `" . table_fix . "tranglienket` limit 0,5";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchAll();
         return $kq;
      } else {
         return FALSE;
      }
   }

   function SuaTrangLienKet($TrangLienKet) {
      $sql = "UPDATE `" . table_fix . "tranglienket` SET "
              . "`TenTrang` = '{$TrangLienKet['TenTrang']}',"
              . "`Link` = '{$TrangLienKet['Link']}',"
              . "`GhiChu` = '{$TrangLienKet['GhiChu']}' WHERE "
              . "`MaTrangLienKiet` ='{$TrangLienKet['MaTrangLienKiet']}'";
      $this->Query($sql);
      return $this->Luu();
   }

   function XoaTrangLienKet($MaTrangLienKet) {
      $sql = "DELETE FROM `" . table_fix . "tranglienket` WHERE `MaTrangLienKiet` = '{$MaTrangLienKet}'";
      $this->Query($sql);
      Return $this->Luu();
   }

   function ThemTrangLienKet($TrangLienKet) {
      $sql = "INSERT INTO `" . table_fix . "tranglienket` SET "
              . "`TenTrang` = '{$TrangLienKet['TenTrang']}',"
              . "`Link` = '{$TrangLienKet['Link']}',"
              . "`GhiChu` = '{$TrangLienKet['GhiChu']}', "
              . "`MaTrangLienKiet` = NULL";
      $this->Query($sql);
      return $this->Luu();
   }

}

?>