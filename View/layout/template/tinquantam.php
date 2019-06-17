<div class="panel panel-primary panel-timkiem"  >
    <div class="panel-heading"  >
        <h3 class="panel-title"  style="padding-left: 0px;" >
            Có thể bạn quan tâm
        </h3>
    </div>                     
    <div class="panel-body" >
        <div class="row" >
            <?php
            $Model_SanPham = new Model_SanPham();
            $DSSanPham = $Model_SanPham->DSSanPham();
            foreach ($DSSanPham as $SanPham) {
                $_SanPham = new Model_SanPham($SanPham);
                $View_SanPham = new View_sanphamview();
                $View_SanPham->ListSanPhamQuanTam($_SanPham);
            }
            ?>

        </div>
    </div>
</div>
