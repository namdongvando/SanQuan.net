<?php $Model_KhachHang = new Model_KhachHang(); ?>
<div style="background-color: rgba(238, 238, 238, 0.37)"  >
    <nav class="navbar navbar-inverse hidden-xs hidden-sm"  style="margin-bottom: 0px;" >
        <div class="container"  >
            <div class="row" >
                <ul class="nav navbar-nav"  >
                    <li >
                        <a href="<?php echo BASE_DIR ?>" >
                            <img src="{LogoSangQuan}" style="height: 50px;" title="{Title}" > 
                        </a>
                    </li>
                    <li >
                        <a  href="<?php echo BASE_DIR ?>">
                            Trang Chủ
                        </a>
                    </li>
                    <?php
                    $Model_DanhMuc = new Model_DanhMuc();
                    $DSDM = $Model_DanhMuc->DSDanhMuc4ThuocTinh('\"MailMenu\"\:\"1\"');
                    if ($DSDM)
                        foreach ($DSDM as $DM) {
                            $_DanhMuc = new Model_DanhMuc($DM);
                            ?>
                            <li>
                                <a href="<?php echo $_DanhMuc->LinkDanhMuc ?>"><?php echo $_DanhMuc->TenDanhMuc ?></a>
                            </li>
                            <?php
                        }

                    $Model_Pages = new Model_Pages();
                    $DSPages = $Model_Pages->DSPages4idGroup(1);
                    $Page = new Model_Pages($DSPages[0]);
                    ?>
                    <li>
                        <a href="<?php echo $Page->LinkPages ?>"><?php echo $Page->TieuDe ?></a>
                    </li>
                </ul>
                <ul class="nav navbar-nav pull-right "  >

                    <li>
                        <?php
                        if (!$_SESSION[KhachHang]) {
                            ?>
                            <a  href="<?php echo $Model_KhachHang->getLinkDangNhap(); ?>">
                                <samp class="btn btn-primary" >
                                    Đăng Nhập
                                </samp>
                            </a>
                            <?php
                        } else {
                            ?>
                            <a  href="<?php echo $Model_KhachHang->getLinkDangXuat(); ?>">
                                <samp class="btn btn-primary" >
                                    Đăng Xuất
                                </samp>
                            </a>
                            <?php
                        }
                        ?>
                    </li>
                    <li>
                        <a  href="<?php echo $Model_KhachHang->getLinkDangTin(); ?>">
                            <samp class="btn btn-primary" >
                                Đăng Tin 
                                <i style="color: #fff;background-color: lightgreen;padding: 3px;border-radius: 100%; " class="fa fa-upload" ></i>
                            </samp>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</div>
<!--mobie-->
<nav class="navbar navbar-default hidden-md hidden-lg" style="background-color: #fff;margin-bottom: 0px;" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" style="color: #888;font-weight: bold;" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Sangnhanh24h.com</span>
                Menu
            </button>
            <a class="navbar-brand" href="<?php echo BASE_DIR ?>" style="padding: 0px;" >
                <img src="{Logo}" style="height: 55px;max-width: 250px" >
            </a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <?php
                $Model_DanhMuc = new Model_DanhMuc();
                $DSDM = $Model_DanhMuc->DSDanhMuc4ThuocTinh('\"MailMenu\"\:\"1\"');
                if ($DSDM)
                    foreach ($DSDM as $DM) {
                        $_DanhMuc = new Model_DanhMuc($DM);
                        ?>
                        <li>
                            <a href="<?php echo $_DanhMuc->LinkDanhMuc ?>"><?php echo $_DanhMuc->TenDanhMuc ?>

                                <img class="pull-right" src="<?php echo $_DanhMuc->UrlHinh ?>" style="height: 30px;"  >
                            </a>
                        </li>
                        <?php
                    }

                $Model_Pages = new Model_Pages();
                $DSPages = $Model_Pages->DSPages4idGroup(1);
                $Page = new Model_Pages($DSPages[0]);
                ?>
                <li>
                    <a href="<?php echo $Page->LinkPages ?>"><?php echo $Page->TieuDe ?>
                        <img src="<?php echo $Page->UrlHinh; ?>" style="height: 35px;width: 35px;" class="pull-right" >
                    </a>
                </li>
                <li>
                    <?php
                    if (!$_SESSION[KhachHang]) {
                        ?>
                        <a  href="<?php echo $Model_KhachHang->getLinkDangNhap(); ?>">
                            Đăng Nhập
                            <i class="fa fa-sign-in" ></i>
                        </a>
                        <?php
                    } else {
                        ?>
                        <a  href="<?php echo $Model_KhachHang->getLinkDangXuat(); ?>">
                            Đăng Xuất
                            <i class="fa fa-sign-out" ></i>
                        </a>
                        <?php
                    }
                    ?>
                </li>
                <li>
                    <a  href="<?php echo $Model_KhachHang->getLinkDangTin(); ?>">
                        Đăng Tin 
                        <i style="color: #fff;background-color: lightgreen;padding: 3px;border-radius: 100%; " class="fa fa-upload" ></i>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid hidden-lg hidden-md" >
    <div >
        <p class="text-center"  style="font-size: 16px;font-weight: bold;color: #888;" >Hỗ trợ tư vấn, chụp hình đăng tin miễn phí:
            <b style="font-size: 18px;color: #0e78bc;" >
                {SDTHoTro}
            </b>
        </p>

    </div>
</div>