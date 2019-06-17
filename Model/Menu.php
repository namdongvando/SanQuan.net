<?php

class Model_Menu extends Model_Adapter {

   function DSMenu($DanhMucChuNang) {
      $sql = "SELECT * FROM `" . table_fix . "menus` where `MenuChucNang` = '2'";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchAll();
         return $kq;
      } else {
         return FALSE;
      }
   }

   function LayDSMenu($DanhMucChucNang) {
      $DSMenu = $this->DSMenu($DanhMucChucNang);
      if($DSMenu) {
         foreach($DSMenu as $k => $Menu) {
            foreach($Menu as $value) {
               
            }
            
            
            $DSMenu[$k]['MenuCapCon'] = $Menu;
         }
      } else {
         return FALSE;
      }
   }

   function DSMenuCha($CapCha) {
      $sql = "SELECT * FROM `" . table_fix . "menus` where `MenuCha` = '{$CapCha}'";
      $this->Query($sql);
      $kq = $this->Tim();
      if($this->GetNumRow() >= 1) {
         $kq = $this->fetchAll();
         return $kq;
      } else {
         return FALSE;
      }
   }

   function ThemMenu($Menu) {
      $sql = "INSERT INTO `" . table_fix . "menus` SET `MenuLink` = '{$Menu['MenuLink']}',`MenuChucNang` = '{$Menu['MenuChucNang']}',`MenuTitle` = '{$Menu['MenuTitle']}',`MenuCha` = '{$Menu['MenuCha']}',`GhiChu` = '{$Menu['GhiChu']}'";
      $this->Query($sql);
      $this->Luu();
   }

}

?>