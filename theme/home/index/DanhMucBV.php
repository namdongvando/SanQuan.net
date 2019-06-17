<?php
$DSBV = $data["DSbaiViet"];
$DanhMucHH = $data["DanhMuc"];
?>

<?php
if ($DSBV) {
    foreach ($DSBV as $Tin) {
        $_Tin = new Model_TinTuc($Tin);
        ?>
        <div class="views-row col-xs-12 col-sm-6 col-lg-3 col-md-3">
            <div class="thumbnail">
                <div class="images">
                    <a href="<?php echo $_Tin->LinkChiTiet; ?>"><img src="<?php echo BASE_DIR ?>public/home/images/img_news.png" alt="images" /></a>
                </div>
                <div class="info">
                    <div class="title">
                        <a class="wow fadeInDown" style="color: #625f5f;font-family: roboto-bold;font-size: 15px;line-height: 20px;text-transform: uppercase;padding:  10px 0px;display: block;" href="<?php echo $_Tin->LinkChiTiet; ?>"><?php echo $_Tin->TieuDe; ?></a>
                    </div>
                    <div class="botum" style="border-top:1px solid #ddd;padding: 10px; " >
                        <div style="width: 50%;float: left" class="more wow fadeInDown"><a style="color: #ff9000" href="<?php echo $_Tin->LinkChiTiet; ?>">Xem thêm</a></div>
                        <div style="width: 50%;float: left;text-align: right" class="date wow fadeInDown"><?php echo $_Tin->NgayDang; ?></div>
                        <div class="clearfix" ></div>
                    </div>

                </div>
            </div>
        </div>
        <?php
    }
}
?>
