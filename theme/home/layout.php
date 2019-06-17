<?php

class theme_home_layout {

    function __construct() {
        
    }

    function layoutLienHe() {
        ?>
        <?php
    }

    function layoutMenu() {
        ?>
        <?php
    }

    function layoutMenuCom($_Controller, $_Param) {
        if (isset($_SESSION["KhuVuc"]))
            $KhuVuc = new Model_TinhThanh($_SESSION["KhuVuc"]);
        ?>
        <div class="container" >
            <div class="dropdown">
                <a class="btn dropdown-toggle" style="color: #01aef0;font-weight: bold;" >
                    <?php echo isset($KhuVuc) ? $KhuVuc->TenDiaChi : 'Xin Chọn Tỉnh' ?>
                    <span class="caret"></span>
                </a>
                <div class="Tinh dropdown-menu" >
                    <button style="position: absolute;right:10px;z-index: 2100" class="dropdown-toggle pull-right" ><i class="fa fa-times" ></i></button>
                    <div class="container" ng-controller="locationController" >
                        <a href="<?php echo BASE_DIR ?>index/chonkhuvuc/{{item.MaDiaChi}}" ng-repeat="item in getLocationByParent(0)" class="col-lg-3 col-md-3 col-xs-6" style="color: #000;padding: 3px;font-weight: bold;box-sizing: border-box;"  >
                            {{item.TenDiaChi}}
                        </a>
                        <div class="clearfix" ></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix" ></div>



        <script type="text/javascript" >
            function hidemenu() {
                $(".Tinh.dropdown-menu").toggle();
            }
            $(document).ready(function() {

                $(".dropdown-toggle").click(function() {
                    $(this).parents(".dropdown").find(".dropdown-menu").toggle();
                });
            });
        </script>
        <div class="container" ng-controller="quangcaoController" ng-init="loadQuangCao('1')" style="margin-bottom: 10px;" >
            <div class="row" >
                <div class="col-md-4" ng-repeat="item in DSQuangCao" >
                    <a href="{{item.LinkQuanCao}}" >
                        <img style="max-height: 120px;width: 100%;" class="img img-responsive" title="{{item.TenQuanCao}}" src="{{item.UrlHinh}}" >
                    </a>
                </div>
            </div>

            <h2 class="text-center" style="white-space: nowrap;font-size: 16px;" >
                {Lang_HTDangTin} <b style="font-size: 18px;color: #0e78bc;" ><i class="fa fa-phone" ></i> {Lang_SDTHoTro}</b>  
            </h2>
        </div>
        <div class="clearfix" ></div>
        <div style="background-color: rgb(5, 86, 153);  "  >
            <nav class="navbar "  style="margin-bottom: 0px;" >
                <div class="container"  >
                    <div class="row"  >
                        <ul class="nav navbar-nav"  >
                            <li >
                                <a class="logo-TenTrangWeb " href="<?php echo BASE_DIR ?>"  >
                                    <img src="{Option_Logo}" style="max-height: 50px;margin: 0px;padding: 0px;"  title="{Lang_TenWebSite}" alt="{Lang_TenWebSite}" >
                                </a>
                            </li>

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

                        </ul>
                        <ul class="nav navbar-nav pull-right"  >
                            <?php
                            if ($_SESSION[KhachHang]) {
                                ?> 
                                <li>
                                    <a href="<?php echo BASE_DIR ?>dangtin/dangxuat" class="btn pull-right" >Đăng Xuất</a>
                                </li>
                                <?php
                            } else {
                                ?> 
                                <li>
                                    <a href="<?php echo BASE_DIR ?>taikhoan/dangnhap" class="btn pull-right" >Đăng Nhập</a>
                                </li>
                                <?php
                            }
                            ?>
                            <li>
                                <a href="<?php echo BASE_DIR ?>dangtin/"  >Đăng tin
                                    <i class="fa fa-upload" ></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>



        </div>
        <div class="container" >
            <a class="ThayColor2" href="<?php echo BASE_DIR ?>" style="" >
                {Lang_Slogan} <b>: {Lang_SDT}</b>
            </a>

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

    function layoutLeft() {
//        $View_QuanCao = new View_quancaoview();
//        $View_SanPham = new View_sanphamview();
//        $View_QuanCao->ListQuanCao4ViTri3(3);
        ?>
        <div class="row "  >
            <div class="clearfix" ></div>
            <div class="panel panel-primary" style="border-radius: 0px;border-color: #fff;" >
                <div class="panel-body" style="padding-top: 0px;" >
                    <div class="row" >
                        <div ng-repeat="item in _CanSangGap" class="panel panel-TinNoiBat" style="margin-top: 5px;" >
                            <div class="panel-heading" style="background-color: #055699;overflow: hidden;" >
                                <h3 class="panel-title" >
                                    <a href="{{item.Link}}"   >
                                        {{item.TieuDe}}
                                    </a>
                                </h3>
                            </div>
                            <div class="panel-body"  style="" >
                                <div class="BannerNoiBat"  >
                                    <a href="{{item.Link}}" class="LinkBannerNoiBat" >
                                        <img  src="{{item.UrlHinh}}"  alt="{{item.TieuDe}}"/>
                                    </a>
                                    <div class="GiaTinNoiBat" style="">
                                        <h3 style=" "  >{{item.GiaVND}}</h3>
                                    </div>
                                    <a href="{{item.Link}}" class="XemNgayTinNoibat" style="position: absolute;right: 10px;bottom: 10px;color: #000;font-weight: bold;padding: 7px;background-color: gold;border-radius: 3px; " >
                                        Xem Ngay
                                    </a>
                                </div>
                                <div class="clearfix" ></div>
                            </div>
                            <div class="clearfix" ></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
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
        <script type="text/javascript" >
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


//                $('.owl-carousel').owlCarousel({
//                    loop: true,
//                    margin: 10,
//                    stagePadding: 0,
//                    autoplay: true,
//                    autoplayTimeout: 1500,
//                    responsive: {
//                        0: {
//                            items: 1
//                        },
//                        600: {
//                            items: 4
//                        },
//                        1000: {
//                            items: 4
//                        }
//                    }
//                });
//                $('.owl-carouselChiTiet').owlCarousel({
//                    loop: true,
//                    margin: 10,
//                    stagePadding: 0,
//                    autoplay: true,
//                    autoplayTimeout: 1500,
//                    responsive: {
//                        0: {
//                            items: 1
//                        },
//                        600: {
//                            items: 1
//                        },
//                        1000: {
//                            items: 1
//                        }
//                    }
//                });

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
        ?>
        <title><?php echo Model_SEO::get_Title(); ?></title>
        <link rel="icon" href="{Option_Icon}" >
        <meta http-equiv="Cache-control" content="max-age=31536000,public">
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <meta name="google-site-verification" content="{Lang_KeyGoogle}" />
        <meta name="keywords" content="<?php echo Model_SEO::get_Keyword(); ?>" />
        <meta name="description" content="<?php echo Model_SEO::get_Description(); ?>">
        <meta name="author" content="http://nguyenvando.net">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo BASE_DIR ?>public/home/css/bootstrap.min.css">
        <link href="<?php echo BASE_DIR ?>public/home/css/font-awesome.css" rel="stylesheet" type="text/css" />
        
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_DIR ?>public/home/css/style.css">
        <script type="text/javascript" src="<?php echo BASE_DIR ?>public/home/js/jquery-1.11.3.min.js"></script> 
        <script src="<?php echo BASE_DIR ?>public/libajax/common.js" type="text/javascript"></script>
        <meta property="og:image" content="{Option_Logo}">
        <!-- Facebook -->
        <?php
        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        ?> 
        <meta property="og:url" content="<?php echo $actual_link; ?>">
        <meta property="og:title" content="<?php echo Model_SEO::get_Title(); ?>">
        <meta property="og:description" content="<?php echo Model_SEO::get_Description(); ?>">
        <meta property="og:image" content="{Option_Logo}">
        <meta property="og:image:secure_url" content="{Option_Logo}">
        <script type="text/javascript" src="<?php echo BASE_DIR ?>public/home/js/bootstrap.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function() {
                //                window.oncontextmenu = new Function("return false;");
            });
            $('#link').click(function() {
                $("html, body").animate({scrollTop: 0}, 600);
                return false;
            });
        </script>

        <?php
        flush();
    }

    function viewTopMenu() {
        ?> 
        <a style="position: fixed;top: 200px;right: 0px;" class="btn btn-success" data-toggle="modal" id="TinhThanh" href='#modal-id'><i class="fa fa-dollar" ></i></a>
        <a style="position: fixed;top: 260px;right: 0px;" class="btn btn-success" data-toggle="modal" id="TinhThanh" href='#modal-id'><i class="fa fa-envelope" ></i></a>

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

    function TinHot() {
        ?> 
        <div class="container" style="margin-top: 15px;" >
            <div class="row" >
                <div ng-repeat="item in _SanPhamHOT" class="col-sm-3 "  >
                    <div class="SanPhamHome" >
                        <div >
                            <div class="SanPhamImg" >
                                <img src="{{item.UrlHinh}}" class="img img-sanpham img-responsive"  >
                            </div>
                            <span class="bnt-gia btn-sm pull-left"  >{{item.GiaVND}}</span>
                            <a href="{{item.Link}}" >
                                <h2 class="title"  >
                                    {{item.TieuDe}}
                                </h2>
                            </a>
                            <a href="tel:{{item.DienThoai}}" style="font-weight: bold;" class="center-block"  >
                                <i class="fa fa-phone " style="border: 1px solid #18baa5;padding: 2px;" ></i>
                                {{item.DienThoai}}({{item.NguoiLienHe}})
                            </a>
                            <div class="clearfix" > </div>
                            <span class="lblKhuVuc pull-right"  >{{item.KhuVuc}}</span>
                        </div>
                        <div class="clearfix" ></div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

}
?>