<?php

class Controller_ajax extends Application {

    public $Param;
    public $TinhThanh;
    public $Option;

    function __construct() {
        $this->Option = new Model_Option();
        $this->Param = $this->getParam();
        $this->TinhThanh = new Model_TinhThanh();
    }

    function listhuyen4tinh() {
        $DSTinh = $this->TinhThanh->DSHuyenTheoTinh($this->Param[0]);
        $this->AView($DSTinh);
    }

    function danhsachsanphamindex() {
        $_Param = $this->Param;
        $SL = 60;
        $pageht = $_Param[0];
        $pageht = intval($pageht);
        $pageht = max($pageht, 1);
        $Model_SanPham = new Model_SanPham();
        $View_SanPham = new View_sanphamview();
        $DSSanPham = $Model_SanPham->DSSanPhamPT($pageht, $SL, $Tong);
        if ($DSSanPham) {
            foreach ($DSSanPham as $SanPham) {
                $_SanPham = new Model_SanPham($SanPham);
                $View_SanPham->ListSanPham($_SanPham);
                flush();
            }
        }


        $TPages = ceil($Tong / $SL);
        if ($pageht <= $TPages) {
            ?> 
            <div  id="XemThem" >
                <div class="clearfix"></div>
                <button class="btn btn-success ajaxclick"  data-function="addSanPham" data-taget="#Noidung" data-url="<?php echo BASE_DIR ?>ajax/danhsachsanphamindex/<?php echo $pageht + 1 ?>"  >Xem Thêm</button>
            </div>
            <?php
        }
        ?> 
        <?php
    }

    function dshuyen() {
        $Model_DanhMuc = new Model_DanhMuc();
        $Tinh = $this->Param[0];
        $Tenkhondau = $_SESSION["TenDanhMucKhongDau"];
        $_SESSION["TinhThanh"] = $Tinh;
        $DSTinh = $this->TinhThanh->DSHuyenTheoTinh($Tinh);
        $DanhMuc = new Model_DanhMuc($Model_DanhMuc->TimDanhMucTieuDe($Tenkhondau));
        foreach ($DSTinh as $Tinh) {
            $_Tinh = new Model_TinhThanh($Tinh);
            ?> 
            <div class="col-lg-2 col-md-3"  >
                <div class="row"  >
                    <a href="<?php echo BASE_DIR ?>sangquan/<?php echo $Tenkhondau ?>/<?php echo $_Tinh->TenKhongDau ?>" title="<?php echo $DanhMuc->TenDanhMuc; ?> - <?php echo $_Tinh->TenDiaChi; ?>" ><?php echo $DanhMuc->TenDanhMuc; ?> - <?php echo $_Tinh->TenDiaChi; ?></a>
                </div>
            </div>
            <?php
        }
    }

    function dshuyen4tinh() {
        $Tinh = $this->Param[0];
        $_SESSION["TinhThanh"] = intval($Tinh);
        $DSTinh = $this->TinhThanh->DSHuyenTheoTinh($Tinh);
        $Tenkhondau = $_SESSION["TenDanhMucKhongDau"];
        if ($DSTinh)
            foreach ($DSTinh as $Tinh) {
                $_Tinh = new Model_TinhThanh($Tinh);
                if ($_SESSION["TinhThanh"] != 0) {
                    ?> 
                    <a href="<?php echo BASE_DIR ?>sangquan/<?php echo $Tenkhondau ?>/<?php echo $_Tinh->TenKhongDau; ?>" style="color: #000;padding: 3px;box-sizing: border-box;" class="col-xs-4" ><?php echo $_Tinh->TenDiaChi ?></a>
                    <?php
                } else {
                    ?> 
                    <a href="<?php echo BASE_DIR ?>sangquan/<?php echo $Tenkhondau ?>/<?php echo $_Tinh->TenKhongDau; ?>" style="color: #000;padding: 3px;box-sizing: border-box;" class="col-xs-4 ajaxclick" data-url="<?php echo BASE_DIR ?>ajax/dshuyen4tinh/<?php echo $_Tinh->MaDiaChi; ?>" data-target="#dstinh" data-function="layhuyen"    ><?php echo $_Tinh->TenDiaChi ?></a>
                    <?php
                }
            }
    }

    function __destruct() {
        $str = ob_get_clean();
        $DSOption = $this->Option->DSOption();
        foreach ($DSOption as $option) {
            $_Option = new Model_Option($option);
            $str = str_replace("{{$_Option->MaOption}}", $_Option->GiaTri, $str);
        }
        echo $str;
    }

}
?>