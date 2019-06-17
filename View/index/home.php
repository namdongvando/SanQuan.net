<div class="text-center">
    <div class="row row-wrap" id="masonry">
        <?php
        $Model_TinTuc = new Model_TinTuc();
        $DSSanPham = $Model_TinTuc->DSTinHot();
        if ($DSSanPham) {
            $dem = 1;
            foreach ($DSSanPham as $SanPham) {
                $_SanPham = new Model_TinTuc($SanPham);
                ?>
                <a class="col-md-3 col-masonry" href="<?php echo $_SanPham->LinkChiTiet; ?>">
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="<?php echo $_SanPham->UrlHinh ?>" alt="<?php echo $_SanPham->TieuDe; ?>" title="<?php echo $_SanPham->TieuDe; ?>" />
                        </header>
                        <div class="product-inner">
                            <h5 class="product-title"><?php echo $_SanPham->TieuDe; ?></h5>
                            <!--                            <div class="product-meta">
                                                            <ul class="product-price-list">
                                                                <li><span class="product-price">Giá: <?php echo $_SanPham->GiaVND; ?></span>
                                                                </li>
                                                            </ul>
                                                        </div>-->
                        </div>
                    </div>
                </a>
                <?php
                $dem++;
            }
        }
        ?>
    </div>
</div>    

