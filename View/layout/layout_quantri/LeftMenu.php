<?php
$_QuanTri = new Model_QuanTri($_SESSION[QuanTri]);
?>
<aside class="main-sidebar">
    <section class="sidebar" >
        <form action="<?php echo BASE_DIR ?>quantri/timkiem/" method="POST" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="txtTim" class="form-control" placeholder="Tìm sản phẩm">
                <span class="input-group-btn">
                    <button type="submit" name="TimKiem" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <ul class="sidebar-menu" >
            <li class="treeview <?php
            echo $_Action == "pages" ? "active" : '';
            echo $_Action == "pagessua" ? "active" : '';
            echo $_Action == "pagesthem" ? "active" : '';
            echo $_Action == "pagessuabv" ? "active" : '';
            ?>">
                <a href="#"> <i class="fa fa-list"></i><span>Quản lý Trang</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="treeview-menu" >
                    <?php
                    if ($_QuanTri->Nhom == 1) {
                        ?>
                        <li ><a href="<?php echo BASE_DIR ?>quantripages/pages/"><i class="fa fa-list"></i> Tất Cả Trang</a></li>
                        <?php
                    }
                    ?>
                    <?php
                    if ($_QuanTri->Nhom == 1) {
                        ?>
                        <li><a href="<?php echo BASE_DIR ?>quantripages/pagesthem/"><i class="fa fa-plus"></i> Thêm Trang</a></li>
                        <?php
                    }
                    $Model_Pages = new Model_Pages();
                    $DSPages = $Model_Pages->DSPages4LoaiPage(0);
                    if ($DSPages) {
                        foreach ($DSPages as $Pages) {
                            $_Pages = new Model_Pages($Pages);
                            ?>
                            <li><a href="<?php echo BASE_DIR ?>quantripages/pagessuabv/<?php echo $_Pages->Pagesid ?>"><i class="fa fa-edit"></i> <?php echo $_Pages->TieuDe ?></a></li>
                            <?php
                        }
                    }
                    ?>


                </ul>
            </li>


            <li class="treeview <?php
            echo $_Action == "danhmuc" ? "active" : '';
            echo $_Action == "danhmucsua" ? "active" : '';
            echo $_Action == "danhmucthem" ? "active" : '';
            ?>">
                <a href="#"> <i class="fa fa-list"></i><span>Quản lý Danh Mục</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="treeview-menu" >
                    <li><a href="<?php echo BASE_DIR ?>quantridanhmuc/"><i class="fa fa-circle-o"></i> Tất Cả Danh Mục</a></li>
                    <li><a href="<?php echo BASE_DIR ?>quantridanhmuc/danhmucthem"><i class="fa fa-circle-o"></i> Thêm Danh Mục</a></li>
                </ul>
            </li>

            <li class="treeview <?php
            echo $_Action == "tintuc" ? "active" : '';
            echo $_Action == "tintucthem" ? "active" : '';
            echo $_Action == "tintucsua" ? "active" : '';
            ?>">
                <a href="#"> <i class="fa fa-newspaper-o"></i><span>Quản lý Bài Viết</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="treeview-menu" >
                    <li><a href="<?php echo BASE_DIR ?>quantribaiviet/tintuc"><i class="fa fa-list-alt"></i> Tất Cả Bài Viết</a></li>
                    <li><a href="<?php echo BASE_DIR ?>quantribaiviet/tintucthem/"><i class="fa fa-list-ol"></i> Thêm Bài Viết</a></li>
                </ul>
            </li>
            <li class="treeview <?php
            echo $_Action == "sanpham" ? "active" : '';
            echo $_Action == "sanphamthem" ? "active" : '';
            echo $_Action == "sanphamsua" ? "active" : '';
            ?>">
                <a href="#"> <i class="fa fa-shopping-cart"></i><span>Quản lý Tin Sang Nhượng</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="treeview-menu" >
                    <li><a href="<?php echo BASE_DIR . "quantrisanpham/sanpham" ?>"><i class="fa fa-list-alt"></i> Tất Tin Sang Nhượng</a></li>
                    <li><a href="<?php echo BASE_DIR . "quantrisanpham/duyetsanpham" ?>"><i class="fa fa-list-alt"></i> Duyệt Tin</a></li>
                    <li><a href="<?php echo BASE_DIR . "quantrisanpham/sanphamthem" ?>"  ><i class="fa fa-list-ol"></i> Thêm Tin Sang Nhượng</a></li>
                </ul>
            </li>

            <li class="treeview ">
                <a href="<?php echo BASE_DIR ?>quantritinhthanh/"> 
                    <i class="fa fa-list-alt"></i><span>Quản lý Tỉnh Thành Phố</span><i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="treeview-menu" >
                    <li ><a href="<?php echo BASE_DIR ?>quantritinhthanh/listtinh"><i class="fa fa-list"></i> Tất Cả Tinh Thành Phố</a></li>
                    <li><a href="<?php echo BASE_DIR ?>quantritinhthanh/tinhthem"><i class="fa fa-plus"></i> Thêm Tỉnh</a></li>
                </ul>
            </li>
            <li class="treeview ">
                <a href="<?php echo BASE_DIR ?>quantriquancao/"> 
                    <i class="fa fa-support"></i><span>Quản lý Quảng Cáo</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="treeview-menu" >
                    <li ><a href="<?php echo BASE_DIR ?>quantriquancao/index/"><i class="fa fa-list"></i> Tất Cả Quảng Cáo</a></li>
                    <li><a href="<?php echo BASE_DIR ?>quantriquancao/quancaothem/"><i class="fa fa-plus"></i> Thêm Quảng Cáo</a></li>
                </ul>
            </li>
            <?php
            if ($_QuanTri->Nhom == 1) {
                ?>    
                <li class="treeview ">
                    <a href="#"> <i class="fa fa-users"></i><span>Quản lý Nhân Viên</span><i class="fa fa-angle-right pull-right"></i></a>
                    <ul class="treeview-menu" >
                        <li><a href="<?php echo BASE_DIR ?>quantriuser/"><i class="fa fa-users"></i> Tất Cả Nhân Viên</a></li>
                    </ul>
                </li>
                <li class="treeview ">
                    <a href="<?php echo BASE_DIR ?>quantrioption/optionlayout"> 
                        <i class="fa fa-lastfm"></i><span>Quản lý Layout</span><i class="fa fa-angle-right pull-right"></i></a>
                    <ul class="treeview-menu" >
                        <li><a href="<?php echo BASE_DIR ?>quantrioption/optionlayout/"><i class="fa fa-list"></i> Tất Cả Layout</a></li>
                    </ul>
                </li>
                <li class="treeview ">
                    <a href="<?php echo BASE_DIR ?>quantrioption/optionlayout"> 
                        <i class="fa fa-lastfm"></i><span>Quản lý Tag</span><i class="fa fa-angle-right pull-right"></i>
                    </a>
                    <ul class="treeview-menu" >
                        <li><a href="<?php echo BASE_DIR ?>quantritag/index/"><i class="fa fa-list"></i> Tất Cả Tag</a></li>
                    </ul>
                </li>
                <li class="treeview ">
                    <a href="<?php echo BASE_DIR ?>quantritinhthanh/listtinh"> 
                        <i class="fa fa-lastfm"></i><span>Tỉnh Thành </span><i class="fa fa-angle-right pull-right"></i>
                    </a>
                    <ul class="treeview-menu" >
                        <li><a href="<?php echo BASE_DIR ?>quantritinhthanh/listtinh"><i class="fa fa-list"></i> Tất Cả Tỉnh</a></li>
                    </ul>
                </li>

            <?php } ?>
        </ul>
    </section>
</aside>