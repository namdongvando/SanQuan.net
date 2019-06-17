<?php

class theme_mobie_layout {

    function __construct() {
        
    }

    function ListSanPham($_SanPham) {
//        $_SanPham = new Model_SanPham();
        ?>    
        <div class="col-sm-6 col-xs-6 col-md-4 item"  >
            <div class="row" >
                <div class="SanPham " style="padding: 5px;" >
                    <a href="<?php echo $_SanPham->LinkChiTiet ?>"  >
                        <h3 class="text-center SanPhamTenCom "  >
                            <?php echo $_SanPham->TenSP; ?>
                        </h3>
                    </a>
                    <div class="SanPhamHinh" style="overflow: hidden;" >
                        <a href="<?php echo $_SanPham->LinkChiTiet ?>" >
                            <img src="<?php echo $_SanPham->UrlHinh(); ?>" style="width: 100%;height: auto;min-height: 150px;" alt="<?php echo $_SanPham->TenSP ?>"/>
                        </a>
                    </div>
                    <div style="padding: 5px;" >
                        <h3 class="text-center SanPhamGia"  >
                            <?php echo $_SanPham->GiaVND; ?>
                        </h3>
                        <p class="" style="padding: 0px;margin: 0px;line-height: 14px;" >
                            ĐC:
                            <?php echo $_SanPham->DiaChi ?>
                        </p>
                        <p style="color: red;white-space: nowrap;overflow: hidden"  >
                            <a  href="tel:<?php echo $_SanPham->DienThoai ?>"  >
                                <i class="fa fa-phone fa-border" style="color: #18baa5;border: #18baa5 1px solid;" ></i>
                            </a>
                            <?php echo $_SanPham->DienThoai ?>(<?php echo $_SanPham->NguoiLienHe ?>)
                        </p>
                    </div>
                </div>    
            </div>

        </div>
        <?php
    }

    function layoutLienHe() {
        ?>
        <?php
    }

    function layoutMenu() {
        ?>
        <!--Top menu-->
        <header class="main-header">
            <a href="<?php echo BASE_DIR ?>" class="logo" style="background-color: #3C8DBC;" >
                <img src="{Option_Logo}" style="margin-bottom: 15px;height: 50px;" class="img" alt="Logo" title="Logo" >
            </a>
            <p class="text-center" >{Lang_Slogan}</p>
            <nav class="navbar navbar-static-top" role="navigation">
                <a href="<?php echo BASE_DIR ?>" class="sidebar-toggle" data-toggle="offcanvas" role="button" >
                    <i class="fa fa-list" ></i>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="<?php echo BASE_DIR ?>"  >
                                Trang Chủ</a>
                        </li>
                        <li>
                            <a href="<?php echo BASE_DIR ?>thanh-toan.html" >
                                Thanh Toán
                            </a>
                        </li>
                        <li>
                            <a href="#" data-toggle="control-sidebar">
                                <i class="fa fa-map-marker" ></i>
                                Chọn Tỉnh 
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">
            <section class="sidebar">
                <ul class="sidebar-menu">
                    <li><a href="<?php echo BASE_DIR ?>"><i class="fa fa-home"></i> <span>Trang Chủ</span></a></li>
                    <li><a href="<?php echo BASE_DIR ?>/dangtin">
                            <i class="fa fa-edit"></i> 
                            <span>Đăng Tin</span>
                        </a>
                    </li>
                    <?php
                    $Model_DanhMuc = new Model_DanhMuc();
                    $DSDanhMuc = $Model_DanhMuc->DSDanhMuc();
                    $TenTinhThanh = isset($_SESSION["TenTinhThanh"]) ? $_SESSION["TenTinhThanh"] : "all";
                    foreach ($DSDanhMuc as $DanhMuc) {
                        $_DanhMuc = new Model_DanhMuc($DanhMuc);
                        ?>
                        <li>
                            <a href="<?php echo BASE_DIR ?>sangquan/<?php echo $_DanhMuc->TenKhongDau; ?>/<?php echo $TenTinhThanh ?>"   >
                                <i class="fa fa-angle-double-right" ></i>
                                <span>
                                    <?php echo $_DanhMuc->TenDanhMuc; ?>
                                </span>
                            </a>
                        </li>
                        <?php
                    }
                    ?>

                </ul>
            </section>
        </aside>
        <!--end left  menu-->
        

        <?php
    }

    function layoutMenuCom($_Controller, $_Param) {
        ?>
        <?php
        $Model_KhachHang = new Model_KhachHang();
        $Model_TinhThanh = new Model_TinhThanh();
        ?>
        <div class="container" >
            <div class="dropdown">
                <a class="btn dropdown-toggle" style="color: #01aef0;font-weight: bold;" >Xin Chọn Tỉnh
                    <span class="caret"></span>
                </a>
                <div class="dropdown-menu"  style="background-color: rgba(90, 216, 174, 1)" >
                    <button style="position: absolute;right:10px;z-index: 2100" class="dropdown-toggle pull-right" ><i class="fa fa-times" ></i></button>
                    <div class="container" >
                        <?php
                        $TenDanhMuc = "all";
                        if ($_Controller == "sangquan") {
                            $TenDanhMuc = $_Param[0];
                        }
                        $DSTinh = $Model_TinhThanh->DSTinh();
                        foreach ($DSTinh as $Tinh) {
                            $_Tinh = new Model_TinhThanh($Tinh);
                            $Url = BASE_DIR . "sangquan/" . $TenDanhMuc . "/" . $_Tinh->TenKhongDau;
                            ?> 
                            <a style="color: #000;padding: 3px;box-sizing: border-box;" class="col-lg-2 col-md-2 col-xs-6" href="<?php echo $Url ?>"  ><?php echo $_Tinh->TenDiaChi ?></a>
                            <?php
                        }
                        ?>
                        <div class="clearfix" ></div>
                    </div>
                </div>

            </div>
        </div>

        <div class="clearfix" ></div>
        <script type="text/javascript" >
            $(document).ready(function() {
                $(".dropdown-toggle").click(function() {
                    $(this).parents(".dropdown").find(".dropdown-menu").toggle();

                });
            });
        </script>


        <!--mobie-->
        <div class="hidden-md hidden-lg" >
            <a class="navbar-brand" style="padding: 0px;margin: auto;display: block;width: 100%;" href="<?php echo BASE_DIR ?>"  >
                <img style="max-height: 55px;max-width: 200px;margin: auto;" src="{Option_Logo}" alt="sangquan" >
            </a>
            <div class="clearfix" ></div>
            <nav class="navbar navbar-default hidden-md hidden-lg" style="background-color: #fff;margin-bottom: 0px;" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" style="color: #888;font-weight: bold;" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">sangquan.com</span>
                            Menu
                        </button>
                        <a href="<?php echo BASE_DIR ?>thanh-toan.html" class="navbar-toggle pull-left" style="margin-left: 15px;font-weight: bold;color: red;"   >
                            Thanh Toán
                        </a>
                    </div>
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <?php
                            $Model_Pages = new Model_Pages();
                            $DSPages = $Model_Pages->DSPages4idGroup(1);
                            foreach ($DSPages as $value) {
                                $Page = new Model_Pages($value);
                                ?>
                                <li>
                                    <a href="<?php echo $Page->LinkPages ?>"><?php echo $Page->TieuDe ?></a>
                                </li>
                                <?php
                            }
                            ?>
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
        </div>
        <div class="container-fluid " >
            <div >
                <p class="text-center"  style="font-size: 16px;font-weight: bold;color: #888;" >
                    {Lang_HTDangTin}
                    <b style="font-size: 18px;color: #0e78bc;" >
                        {Lang_SDTHoTro}
                    </b>
                </p>
            </div>
        </div>

        <?php
    }

    function layoutMenuNet() {
        ?>
        <?php $Model_KhachHang = new Model_KhachHang(); ?>
        <div style="background-color: rgba(238, 238, 238, 0.37)"  >
            <nav class="navbar navbar-inverse hidden-xs hidden-sm"  style="margin-bottom: 0px;" >
                <div class="container"  >
                    <div class="row"  >
                        <ul class="nav navbar-nav"  >
                            <li >
                                <a href="<?php echo BASE_DIR ?>" >
                                    <img src="{LogoNet}" style="height: 50px;max-width: 250px;" title="{Title}" > 
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
                                        <samp class="btn btn-success" >
                                            Đăng Nhập
                                        </samp>
                                    </a>
                                    <?php
                                } else {
                                    ?>
                                    <a  href="<?php echo $Model_KhachHang->getLinkDangXuat(); ?>">
                                        <samp class="btn btn-success" >
                                            Đăng Xuất
                                        </samp>
                                    </a>
                                    <?php
                                }
                                ?>
                            </li>
                            <li>
                                <a  href="<?php echo $Model_KhachHang->getLinkDangTin(); ?>">
                                    <samp class="btn btn-success" >
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

        <?php
    }

    function layoutMenuSangQuan() {
        ?>
        <?php $Model_KhachHang = new Model_KhachHang(); ?>
        <div style="background-color: rgba(238, 238, 238, 0.37)"  >
            <nav class="navbar navbar-inverse hidden-xs hidden-sm"  style="margin-bottom: 0px;" >
                <div class="container"  >
                    <div class="row"  >
                        <ul class="nav navbar-nav"  >
                            <li >
                                <a href="<?php echo BASE_DIR ?>" >
                                    <img src="{LogoSangQuan}" style="height: 50px;max-width: 250px;" title="{Title}" > 
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
                                        <samp class="btn btn-success" >
                                            Đăng Nhập
                                        </samp>
                                    </a>
                                    <?php
                                } else {
                                    ?>
                                    <a  href="<?php echo $Model_KhachHang->getLinkDangXuat(); ?>">
                                        <samp class="btn btn-success" >
                                            Đăng Xuất
                                        </samp>
                                    </a>
                                    <?php
                                }
                                ?>
                            </li>
                            <li>
                                <a  href="<?php echo $Model_KhachHang->getLinkDangTin(); ?>">
                                    <samp class="btn btn-success" >
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


        <?php
    }

    function layoutMenuIndex() {
        ?>
        <?php $Model_KhachHang = new Model_KhachHang(); ?>
        <div style="background-color: rgba(238, 238, 238, 0.37)"  >
            <nav class="navbar navbar-inverse hidden-xs hidden-sm"  style="margin-bottom: 0px;" >
                <div class="container"  >
                    <div class="row" >
                        <ul class="nav navbar-nav"  >
                            <li >
                                <a href="<?php echo BASE_DIR ?>" >
                                    <img src="{LogoSangQuan}" style="height: 50px;max-width: 250px;" title="{Title}" > 
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
                                        <samp class="btn btn-success" >
                                            Đăng Nhập
                                        </samp>
                                    </a>
                                    <?php
                                } else {
                                    ?>
                                    <a  href="<?php echo $Model_KhachHang->getLinkDangXuat(); ?>">
                                        <samp class="btn btn-success" >
                                            Đăng Xuất
                                        </samp>
                                    </a>
                                    <?php
                                }
                                ?>
                            </li>
                            <li>
                                <a  href="<?php echo $Model_KhachHang->getLinkDangTin(); ?>">
                                    <samp class="btn btn-success" >
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


        <?php
    }

    function layoutLeft($KhuVuc) {
        $View_QuanCao = new View_quancaoview();
        $View_SanPham = new View_sanphamview();
//        $View_QuanCao->ListQuanCao4ViTri3(3);
        ?>
        <div class="row "  >
            <div class="panel panel-primary" style="margin-bottom: 15px;border-radius: 0px;" >
                <div class="panel-heading" style="border-radius: 0px;"  >
                    <h3 class="panel-title text-center" style="font-size: 20px;"  >{Lang_DanhMuc}</h3>
                </div>
                <div class="panel-body" >
                    <div class="fb-page" data-href="{Lang_Facebook}" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="{Lang_Facebook}" class="fb-xfbml-parse-ignore"><a href="{Lang_Facebook}">Dịch Vụ Quán</a></blockquote></div>
                    <?php
                    $Model_DanhMuc = new Model_DanhMuc();
                    $DSDanhMuc = $Model_DanhMuc->DSDanhMuc();
                    foreach ($DSDanhMuc as $DanhMuc) {
                        $_DanhMuc = new Model_DanhMuc($DanhMuc);
                        ?>
                        <a href="<?php echo $_DanhMuc->getLinkDanhMucTinhThanh($KhuVuc); ?>" style="display: block;padding: 3px;color: #777"  >
                            <i class="fa fa-angle-double-right" ></i>
                            <?php echo $_DanhMuc->TenDanhMuc; ?>
                        </a>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div class="clearfix" ></div>
            <div class="panel panel-primary" style="border-radius: 0px;" >
                <div class="panel-heading" style="border-radius: 0px;"  >
                    <h3 class="panel-title text-center" style="font-size: 20px;"  >{Lang_CanSangGap}</h3>
                </div>
                <div class="panel-body" style="padding-top: 0px;" >
                    <div class="row" >
                        <?php
                        $Model_SanPham = new Model_SanPham();
                        $DSSanPham = $Model_SanPham->DSSanPham4ViTri(1, 1, 100, $Tong);
                        if ($DSSanPham)
                            foreach ($DSSanPham as $SanPham) {
                                $_SanPham = new Model_SanPham($SanPham);
                                $View_SanPham->ListSanPhamSangGap($_SanPham);
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="panel panel-noiBat" style="margin-bottom: 0px;background-color:#dde9f1; " >
                <div class="panel-heading bg_xanh" >
                    <h3 class="panel-title text-center"  >{Lang_TimKiem}</h3>
                </div>
                <div class="panel-body" >
                    <form action="<?php echo BASE_DIR ?>timkiem/index/" method="POST" >
                        <table class="table table-compare " style="margin-bottom: 0px;" >
                            <tr>
                                <td colspan="3" >
                                    <select class="form-control" name="SDanhMuc" >
                                        <?php
                                        $Model_DanhMuc = new Model_DanhMuc();
                                        $DSTinh = $Model_DanhMuc->DSDanhMuc();
                                        foreach ($DSTinh as $DanhMuc) {
                                            $_DanhMuc = new Model_DanhMuc($DanhMuc);
                                            ?>
                                            <option value="<?php echo $_DanhMuc->MaDanhMuc; ?>" ><?php echo $_DanhMuc->TenDanhMuc; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" >
                                    <select class="form-control" name="STinh" onchange="LayHuyen(this.value)" >
                                        <option value="0" >-- Chọn Tỉnh | Thành Phố--</option>
                                        <?php
                                        $Model_TinhThanh = new Model_TinhThanh();
                                        $DSTinh = $Model_TinhThanh->DSTinh();
                                        foreach ($DSTinh as $Tinh) {
                                            $_Tinh = new Model_TinhThanh($Tinh);
                                            ?>
                                            <option value="<?php echo $_Tinh->MaDiaChi; ?>" ><?php echo $_Tinh->TenDiaChi; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" >
                                    <select class="form-control" name="SHuyen" id="SelectHuyen" >
                                        <option value="0" >Hyện</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php
                                    $Gia = array(1, 2, 5, 10, 20, 50, 100, 150, 200, 250, 300, 350, 400, 450, 500, 550, 600, 650, 700, 750, 800, 850, 900);
                                    ?>
                                    <select class="form-control" name="GiaTu" >
                                        <?php
                                        foreach ($Gia as $k => $v) {
                                            ?>
                                            <option value="<?php echo $v ?>" ><?php echo $v ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select></td>
                                <td>
                                    <select class="form-control" name="GiaDen" >
                                        <?php
                                        foreach ($Gia as $k => $v) {
                                            ?>
                                            <option value="<?php echo $v ?>" ><?php echo $v ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td style="border: 0px;white-space: nowrap" >
                                    <label>
                                        <input name="DonVi" value="1" type="radio" checked="checked" >
                                        Triệu
                                    </label>
                                    <label>
                                        <input name="DonVi" value="0" type="radio" >
                                        Tỷ
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-center" >
                                    <input type="submit" name="TimKiem" value="Tìm kiếm" class="btn btn-success" >
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>

            </div>

        </div>
        <script>
            function LayHuyen(str) {
                if (str.length == 0) {
                    return;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("SelectHuyen").innerHTML = this.responseText;
                        }
                    };
                    xmlhttp.open("GET", "<?php echo BASE_DIR ?>index/layhuyen/" + str, true);
                    xmlhttp.send();
                }
            }
        </script>
        <?php
    }

    function LayoutCopyright() {
        ?>

        <div class="" style="background-color: #0063dc;" >
            <div class="container" >
                <div class="col-lg-6 col-md-6" >
                    <h6 class="text-center" style="color: #fff;" >
                        {Lang_KenhQuanCao}
                    </h6>
                </div>
                <div class="col-lg-6 col-md-6" >
                    <h6 class="text-center" style="color: #fff;" >
                        Copyright 2016 - <?php echo date("Y") ?> &circledR;
                    </h6>
                </div>
            </div>
        </div>
        <a href="tel:{Lang_SDT}" class="hidden-lg hidden-md" style="position: fixed;left: 0px;bottom: 0px;" >
            <img style="height: 50px;" src="<?php echo BASE_DIR ?>public/home/img/phone.png" alt="" />
        </a>

        <script>
            $(document).ready(function() {

                var flag = 1;
                setInterval(function() {
                    var d = new Date();
                    var t = d.getSeconds();
                    if (flag == 1) {
                        $(".ThayColor").css({"color": "#ff0"});
                        $(".ThayColor2").css({"color": "#00f"});
                        $(".ThayColor1").css({"color": "#fff"});
                        flag = 0;
                    } else {
                        $(".ThayColor").css({"color": "#fff"});
                        $(".ThayColor1").css({"color": "#00f"});
                        $(".ThayColor2").css({"color": "#f00"});
                        flag = 1;
                    }

                }, 200);


                $('.owl-carousel').owlCarousel({
                    loop: true,
                    margin: 10,
                    stagePadding: 0,
                    autoplay: true,
                    autoplayTimeout: 1500,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 4
                        },
                        1000: {
                            items: 4
                        }
                    }
                });
                $('.owl-carouselChiTiet').owlCarousel({
                    loop: true,
                    margin: 10,
                    stagePadding: 0,
                    autoplay: true,
                    autoplayTimeout: 1500,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 1
                        },
                        1000: {
                            items: 1
                        }
                    }
                });

            });

        </script>

        <?php
    }

    function SanQuanKhuVuc() {
        ?>
        <div class="panel panel-primary panel-timkiem"  >
            <div class="panel-heading" style="" >
                <h3 class="panel-title" style="position: relative;"  >
                    <img class="hidden-sm hidden-xs" src="<?php echo BASE_DIR ?>public/home/img/map.png" alt="Map"/>
                    Tìm kiếm sang quán tại Hà Nội
                </h3>
            </div>                     
            <div class="panel-body" >
                <div class="row" >
                    <?php
                    $Model_TinhThanh = new Model_TinhThanh();
                    $DSTinh = $Model_TinhThanh->DSHuyenTheoTinh(1);
                    foreach ($DSTinh as $Tinh) {
                        $_Tinh = new Model_TinhThanh($Tinh);
                        ?>
                        <div class="col-lg-3 col-md-3 LinkCol3" >
                            <a  href="<?php echo $_Tinh->LinkSanPhamTheoTinhThanh ?>" class="linkTinKiemKV btn btn-block btn-default" style="color: #000;overflow: hidden;text-align: left;"  >
                                <i style="color: #0066cc;" class="fa fa-angle-double-right" ></i>
                                <?php echo $_Tinh->TenDiaChi; ?>
                            </a>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="panel panel-primary panel-timkiem"  >
            <div class="panel-heading" style="" >
                <h3 class="panel-title" style="position: relative;"  >
                    <img class="hidden-sm hidden-xs" src="<?php echo BASE_DIR ?>public/home/img/map.png" alt="Map"/>
                    Tìm kiếm sang quán tại Tp.HCM
                </h3>
            </div>                     
            <div class="panel-body" >
                <div class="row" >
                    <?php
                    $Model_TinhThanh = new Model_TinhThanh();
                    $DSTinh = $Model_TinhThanh->DSHuyenTheoTinh(32);
                    foreach ($DSTinh as $Tinh) {
                        $_Tinh = new Model_TinhThanh($Tinh);
                        ?>
                        <div class="col-lg-3 col-md-3 LinkCol3" >
                            <a  href="<?php echo $_Tinh->LinkSanPhamTheoTinhThanh ?>" class="linkTinKiemKV btn btn-block btn-default" style="color: #000;overflow: hidden;text-align: left;"  >
                                <i style="color: #0066cc;" class="fa fa-angle-double-right" ></i>
                                <?php echo $_Tinh->TenDiaChi; ?>
                            </a>
                        </div>
                        <?php
                    }
                    ?>

                </div>
            </div>
        </div>
        <?php
    }

    function layoutTinhThanh() {
        ?>
        <ul class="TinhThanhNoiBat" >
            <?php
            $Model_TinhThanh = new Model_TinhThanh();
            $DSTinhThanh = $Model_TinhThanh->DSTinhNoiBat();
            foreach ($DSTinhThanh as $TinhThanh) {
                $_TinhThanh = new Model_TinhThanh($TinhThanh);
                echo <<<SANGQUAN
                <li><a href="{$_TinhThanh->LinkSanPhamTheoTinhThanh}" >{$_TinhThanh->TenDiaChi}</a></li>
SANGQUAN;
            }
            ?>
            <li class="dropdown" style="float: right;margin-right: 3px;" >
                <a class="dropdown-toggle" type="button" data-toggle="dropdown"><span class="fa fa-angle-double-right"></span></a>
                <ul class="dropdown-menu">
                    <?php
                    $Model_TinhThanh = new Model_TinhThanh();
                    $DSTinhThanh = $Model_TinhThanh->DSTinh0NoiBat();
                    foreach ($DSTinhThanh as $TinhThanh) {
                        $_TinhThanh = new Model_TinhThanh($TinhThanh);
                        echo <<<DANHMUCKHAC
                            <li><a href="{$_TinhThanh->LinkSanPhamTheoTinhThanh}" >{$_TinhThanh->TenDiaChi}</a></li>
DANHMUCKHAC;
                    }
                    ?>
                </ul>
            </li>
        </ul>
        <?php
    }

    function layoutDanhMucTinhThanh($DanhMuc) {
        ?>
        <ul class="TinhThanhNoiBat" >
            <?php
            $Model_TinhThanh = new Model_TinhThanh();
            $DSTinhThanh = $Model_TinhThanh->DSTinhNoiBat();
            foreach ($DSTinhThanh as $TinhThanh) {
                $_TinhThanh = new Model_TinhThanh($TinhThanh);
                $Url = BASE_DIR . "sangquan/" . $DanhMuc . "/" . $_TinhThanh->TenKhongDau;
                echo <<<SANGQUAN
                <li><a href="{$Url}" >{$_TinhThanh->TenDiaChi}</a></li>
SANGQUAN;
            }
            ?>
            <li class="dropdown" style="float: right;margin-right: 3px;" >
                <a class="dropdown-toggle" type="button" data-toggle="dropdown"><span class="fa fa-angle-double-right"></span></a>
                <ul class="dropdown-menu">
                    <?php
                    $Model_TinhThanh = new Model_TinhThanh();
                    $DSTinhThanh = $Model_TinhThanh->DSTinh0NoiBat();
                    foreach ($DSTinhThanh as $TinhThanh) {
                        $_TinhThanh = new Model_TinhThanh($TinhThanh);
                        $Url = BASE_DIR . "sangquan/" . $DanhMuc . "/" . $_TinhThanh->TenKhongDau;
                        echo <<<DANHMUCKHAC
                            <li><a href="{$Url}" >{$_TinhThanh->TenDiaChi}</a></li>
DANHMUCKHAC;
                    }
                    ?>
                </ul>
            </li>
        </ul>
        <?php
    }

    function layoutSanPhamDacBiet($DSSanPham) {
        ?>
        <ul class="owl-carousel owl-carouselul" >
            <?php
            foreach ($DSSanPham as $SP) {
                $_SanPham = new Model_SanPham($SP);
                ?>
                <li class="item SanPhamDacBiet ">
                    <div class="thumbnail">
                        <a href="<?php echo $_SanPham->LinkChiTiet ?>" >
                            <h3 class="TenSanPham" >
                                <?php echo $_SanPham->TenSP; ?>
                            </h3>
                        </a>
                        <a class="HinhSanPham" href="<?php echo $_SanPham->LinkChiTiet ?>" >
                            <img src="<?php echo $_SanPham->UrlHinh; ?>" alt="<?php echo $_SanPham->TenSP; ?>">
                        </a>
                        <div class="caption">
                            <h3 class="text-center SanPhamGia"  >
                                <?php echo $_SanPham->GiaVND; ?>
                            </h3>
                            <p class="" style="padding: 0px;margin: 0px;" >
                                ĐC:
                                <?php echo $_SanPham->DiaChi ?>
                            </p>
                            <p style="color: red;"  >
                                <i class="fa fa-phone fa-border" style="color: #18baa5;border: #18baa5 1px solid;" ></i>
                                <?php echo $_SanPham->DienThoai ?>(<?php echo $_SanPham->NguoiLienHe ?>)
                            </p>

                            <h3 class="KhuVuc" >
                                <?php echo $_SanPham->TenTinh; ?>-<?php echo $_SanPham->TenHuyen; ?>
                            </h3>
                        </div>
                    </div>
                </li>
                <?php
            }
            ?>

        </ul>
        <?php
    }

    function layouthead() {
        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        ?>
        <title><?php echo Model_SEO::get_Title() ?></title>
        <link rel="icon" href="{Option_Icon}" >
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <meta name="google-site-verification" content="{Lang_KeyGoogle}" />
        <meta name="keywords" content="<?php echo Model_SEO::get_Keyword() ?>" />
        <meta name="description" content="<?php echo Model_SEO::get_Description() ?>">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta property="og:url" content="<?php echo $actual_link; ?>">
        <meta property="og:title" content="<?php echo Model_SEO::get_Title(); ?>">
        <meta property="og:description" content="<?php echo Model_SEO::get_Description(); ?>">
        <meta property="og:image" content="{Option_Logo}">
        <meta property="og:image:secure_url" content="{Option_Logo}">
        <link rel="shortcut icon" href="<?php echo BASE_DIR ?>public/templateadmin/dist/img/user1-128x128.jpg" type="image/x-icon"/>
        <link type="text/css" rel="stylesheet" href="<?php echo BASE_DIR ?>public/templateadmin/bootstrap/css/bootstrap.min.css">
        <link href="/public/home/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo BASE_DIR ?>public/templateadmin/dist/css/AdminLTE.css">
        <link type="text/css" rel="stylesheet" href="<?php echo BASE_DIR ?>public/templateadmin/dist/css/skins/_all-skins.min.css">
        <link type="text/css" rel="stylesheet" href="<?php echo BASE_DIR ?>public/templateadmin/plugins/iCheck/flat/blue.css">
        <!--<link type="text/css" rel="stylesheet" href="<?php echo BASE_DIR ?>public/templateadmin/plugins/morris/morris.css">-->
        <!--<link type="text/css" rel="stylesheet" href="<?php echo BASE_DIR ?>public/templateadmin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">-->
        <!--<link type="text/css" rel="stylesheet" href="<?php echo BASE_DIR ?>public/templateadmin/plugins/datepicker/datepicker3.css">-->
        <!--<link type="text/css" rel="stylesheet" href="<?php echo BASE_DIR ?>public/templateadmin/plugins/daterangepicker/daterangepicker-bs3.css">-->
        <link href="<?php echo BASE_DIR ?>public/templateadmin/dist/css/style_quantri.css" rel="stylesheet" type="text/css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo BASE_DIR ?>public/templateadmin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
        <link href="<?php echo BASE_DIR ?>public/templateadmin/plugins/select2/select2.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo BASE_DIR ?>public/mobie/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo BASE_DIR ?>public/home/css/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
        <script src="<?php echo BASE_DIR ?>public/templateadmin/dist/js/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="<?php echo BASE_DIR ?>public/libajax/common.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo BASE_DIR ?>public/templateadmin/bootstrap/js/bootstrap.min.js"></script>
        <?php
        flush();
    }

    function layoutjs() {
        ?>
        <script src="<?php echo BASE_DIR ?>public/home/js/owl.carousel.min.js" type="text/javascript"></script>
        <script src="<?php echo BASE_DIR ?>public/templateadmin/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="<?php echo BASE_DIR ?>public/templateadmin/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
        <!--<script type="text/javascript" src="<?php echo BASE_DIR ?>public/templateadmin/plugins/morris/morris.min.js"></script>-->
        <script type="text/javascript" src="<?php echo BASE_DIR ?>public/templateadmin/dist/js/app.js"></script>
        <script type="text/javascript" src="<?php echo BASE_DIR ?>public/templateadmin/dist/js/demo.js"></script>
        <script src="<?php echo BASE_DIR ?>public/templateadmin/cmjs.js" type="text/javascript"></script>
        <?php
    }

    function viewTopMenu() {
        ?> 
        <a style="position: fixed;top: 200px;right: 0px;" class="btn btn-success" data-toggle="modal" id="TinhThanh" href='#modal-id'><i class="fa fa-dollar" ></i></a>
        <a style="position: fixed;top: 260px;right: 0px;" class="btn btn-success" data-toggle="modal" id="TinhThanh" href='#modal-id'><i class="fa fa-envelope" ></i></a>

        <div style="background-color: #eee;" >
            <div class="container" >
                <div class="nav navbar-nav navbar-right">
                    <a data-toggle="modal" id="TinhThanh" href='#modal-id'>Tùy Chọn</a>
                    <div class="modal fade" id="modal-id">
                        <div class="modal-dialog"   >
                            <div class="modal-content" style="border-radius: 0px;" >
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Tùy Chọn</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo BASE_DIR ?>index/showhodden" method="POST" enctype="multipart/form-data" >
                                        <table class="table" >
                                            <tr style="border: none">
                                                <td style="border: none" >Tiền Tệ</td>
                                                <td style="border: none" >
                                                    <select name="Tien" class="form-control" >
                                                        <?php
                                                        echo View_html::GetElementOptionByID(array("USD ($)", "VMĐ (đ)"), $_SESSION['Tien']);
                                                        ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr style="border: none" >
                                                <td style="border: none" >Tỉnh Thành</td>
                                                <td style="border: none" >
                                                    <select name="TinhThanh" class="form-control" >
                                                        <?php
                                                        $Model_TinhThanh = new Model_TinhThanh();
                                                        $DSTinhOption = $Model_TinhThanh->DSTinhOption();
                                                        echo View_html::GetElementOptionByID($DSTinhOption, 32);
                                                        ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" >
                                                    <input class="btn btn-primary " name="ChonNgonNgu"  value="OK" type="submit" > 
                                                </td>
                                            </tr>
                                        </table>    
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        $_SESSION['ShowHidden'] = isset($_SESSION['ShowHidden']) ? $_SESSION['ShowHidden'] : 'show';
        if ($_SESSION['ShowHidden'] == "show") {
            ?> 
            <script>
                $(document).ready(function() {
                    $("#modal-id").modal("show");
                });
            </script>
            <?php
        }
        ?>


        <?php
    }

    function chontienvung() {
        $_SESSION['ShowHidden'] = isset($_SESSION['ShowHidden']) ? $_SESSION['ShowHidden'] : 'show';
        ?> 
        <div class="<?php echo $_SESSION['ShowHidden'] == "show" ? 'show' : "hidden"; ?>" style="position: fixed;top: 0px;width: 100%;height: 100%;margin: auto;background-color: rgba(0,0,0,0.8)" >
            <div style="width: 500px;margin: auto;margin-top: 200px;" >
                <div class="panel panel-primary" >
                    <div class="panel-heading" >
                        <h3 class="panel-title" >Tùy Chon</h3>
                    </div>
                    <div class="panel-body" >
                        <form action="<?php echo BASE_DIR ?>index/showhodden" method="POST" enctype="multipart/form-data" >
                            <table class="table table-compare table-bordered no-border" >
                                <tr>
                                    <td>Tiền Tệ</td>
                                    <td>
                                        <select name="Tien" class="form-control" >
                                            <?php
                                            echo View_html::GetElementOptionByID(array("USD ($)", "VMĐ (đ)"), 1);
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tỉnh Thành</td>
                                    <td>
                                        <select name="TinhThanh" class="form-control" >
                                            <?php
                                            $Model_TinhThanh = new Model_TinhThanh();
                                            $DSTinhOption = $Model_TinhThanh->DSTinhOption();
                                            echo View_html::GetElementOptionByID($DSTinhOption, 32);
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" >
                                        <input class="btn btn-primary " name="ChonNgonNgu"  value="OK" type="submit" > 
                                    </td>
                                </tr>
                            </table>    
                        </form>
                    </div>
                </div>    
            </div>

        </div>
        <?php
    }

    function footer($_Controller, $_Param) {
        ?> 
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>{Lang_KenhQuanCao}</b> 
            </div>
        </footer>
        <aside ng-controller="locationController" class="control-sidebar control-sidebar-light"  id="dstinh" >
            <?php
            $Tenkhondau = isset($_SESSION["TenDanhMucKhongDau"]) ? $_SESSION["TenDanhMucKhongDau"] : "all";
            $Model_TinhThanh = new Model_TinhThanh();
            $TenDanhMuc = "all";
            if ($_Controller == "sangquan") {
                $TenDanhMuc = $_Param[0];
            }
            ?>
            <a ng-repeat="item in getLocationByParent(0)" href="<?php echo BASE_DIR ?>sangquan/<?php echo $Tenkhondau ?>/{{item.Link}}" class="col-xs-4 btn"   >
                {{item.TenDiaChi}}
            </a>
        </aside><!-- /.control-sidebar -->
        <div class="control-sidebar-bg"></div>
        
        <?php
    }

}
?>