<?php 
View_layout::SanQuanKhuVuc();

?>
<!-- Pnanel Tim kiếm -->
<!--pannal Tìm Kiếm-->
<div class="panel panel-primary panel-timkiem"  >
    <div class="panel-heading" style="display: table" >
        <h3 class="panel-title" style="position: relative;padding-left: 0px;"  >
            Tại sao chọn {Option_TenTrangWeb} khi Sang Quán? Google+
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
                                    <?php  echo strip_tags($_TinTuc->TomTat); ?>
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