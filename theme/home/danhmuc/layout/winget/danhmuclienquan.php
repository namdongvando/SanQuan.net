<?php
$_DanhMuc = new Model_DanhMuc($data['Page']);
$_DanhMuc1 = new Model_DanhMuc($_DanhMuc->TimDanhCha($_DanhMuc->DanhMucLienQuan1));
$_DanhMuc2 = new Model_DanhMuc($_DanhMuc->TimDanhCha($_DanhMuc->DanhMucLienQuan2));
?>
<div class="row" style="margin-top: 20px;margin-bottom: 80px;" > 
    <div class="col-lg-6" >
        <div class="row" >
            <h3 class="bg_2 btn" style="margin-bottom: 10px;" >
                <?php echo $_DanhMuc1->TenDanhMuc; ?>
            </h3>
            <?php
            $Model_SanPham = new Model_SanPham();
            $DSSanPham = $Model_SanPham->DSSanPham4LoaiPT($_DanhMuc1->MaDanhMuc, 1, 12, $Tong);
            if ($DSSanPham)
                foreach ($DSSanPham as $SanPham) {
                    $_SanPham = new Model_SanPham($SanPham);
                    $View_SanPham = new View_sanphamview();
                    $View_SanPham->ListSanPhamLienQuan($_SanPham);
                }
            ?>
            <div class="clearfix" ></div>
            <div style="display: table;margin: auto;" >
                <a class="btn bg_2" style="padding: 5px 15px;border-radius: 3px; " href="<?php echo $_DanhMuc1->LinkDanhMuc; ?>" >Xem thêm</a>
            </div>
        </div>

    </div>
    <div class="col-lg-6" >
        <h3 class="bg_3 btn" style="margin-bottom: 10px;" >
            <?php echo $_DanhMuc2->TenDanhMuc; ?>
        </h3>
        <?php
        $Model_SanPham = new Model_SanPham();
        $DSSanPham = $Model_SanPham->DSSanPham4LoaiPT($_DanhMuc2->MaDanhMuc, 1, 12, $Tong);
        if ($DSSanPham)
            foreach ($DSSanPham as $SanPham) {
                $_SanPham = new Model_SanPham($SanPham);
                $View_SanPham = new View_sanphamview();
                $View_SanPham->ListSanPhamLienQuan($_SanPham);
            }
        ?>
        <div class="clearfix" ></div>
        <div style="display: table;margin: auto;" >
            <a class="btn bg_3 "  style="padding: 5px 15px;border-radius: 3px; " href="<?php echo $_DanhMuc2->LinkDanhMuc; ?>" >Xem thêm</a>
        </div>
    </div>
</div>
<!--pannal Tìm Kiếm-->
<div class="panel panel-primary panel-timkiem"  >
    <div class="panel-heading" style="display: table" >
        <h3 class="panel-title" style="position: relative;padding-left: 0px;"  >
            Tại sao chọn SANGNHANH24H.com khi Sang Quán? Google+
        </h3>
    </div>                     
    <div class="panel-body" >
        <div class="row" >
            <?php
            $Model_Pages = new Model_Pages();
            $Model_TinTuc = new Model_TinTuc();
            $DSPages = $Model_Pages->DSPages4idGroup(2);
            $_Page = new Model_Pages($DSPages[0]);
            $DSTinTuc = $Model_TinTuc->DSTinMoiNhat4Loai(3, $_Page->Pagesid);

            if ($DSTinTuc) {
                foreach ($DSTinTuc as $TinTuc) {
                    $_TinTuc = new Model_TinTuc($TinTuc);
                    ?>
                    <div class="col-lg-4 col-md-4" >
                        <div class="row" >
                            <div style="margin: 0px;font-size: 18px;" >
                                <img style="float: left;margin-right: 10px;width: 70px;" src="<?php echo $_TinTuc->UrlHinh; ?>" alt="Map"/>
                                <h3 style="margin: 0px;vertical-align: top;" >
                                    <a  style="font-size: 18px;color: blue;" >
                                        <?php echo $_TinTuc->TieuDe; ?>
                                    </a>
                                </h3>
                                <p style="font-size: 14px;" >
                                    <?php echo strip_tags($_TinTuc->TomTat); ?>
                                </p>

                            </div>

                        </div>

                    </div>

                    <?php
                }
            }
            ?>

        </div>
    </div>
</div>
<!-- Pnanel Tim kiếm -->