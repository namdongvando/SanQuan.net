<?php

class View_sanphamview {

    public $Model_SanPham;

    function __construct() {
        $this->Model_SanPham = new Model_SanPham();
    }

    function ListSanPham(Model_SanPham $_SanPham) {
//        $_SanPham = new Model_SanPham();
        ?>    
        <div class="col-sm-6 col-xs-6 col-md-4 item"  >
            <div class="SanPham " style="padding: 5px;" >
                <div class="SanPhamHinh" style="overflow: hidden;" >
                    <a href="<?php echo $_SanPham->LinkChiTiet ?>" >
                        <img src="<?php echo $_SanPham->UrlHinh(); ?>" style="width: 100%;height: auto;min-height: 150px;" alt="<?php echo $_SanPham->TenSP ?>"/>
                    </a>
                </div>
                <div style="padding: 5px;" >
                    <h3 class="text-center SanPhamGia"  >
                        <?php echo $_SanPham->GiaVND; ?>
                    </h3>
                    <a href="<?php echo $_SanPham->LinkChiTiet ?>"  >
                        <h3 class="text-center SanPhamTenCom "  >
                            <?php echo $_SanPham->TenSP; ?>
                        </h3>
                    </a>
                    <p style="color: red;white-space: nowrap;overflow: hidden"  >
                        <a  href="tel:<?php echo $_SanPham->DienThoai ?>"  >
                            <i class="fa fa-phone fa-border" style="color: #18baa5;border: #18baa5 1px solid;" ></i>
                        </a>
                        <?php echo $_SanPham->DienThoai ?>(<?php echo $_SanPham->NguoiLienHe ?>)
                    </p>
                    <p class="" style="padding: 0px;margin: 0px;line-height: 14px;" >
                        ĐC:<?php echo $_SanPham->DiaChi ?>
                    </p>
                </div>
            </div>
        </div>
        <?php
    }

    function ListSanPhamLienQuan($_SanPham) {
        ?>    
        <div class="col-lg-6 col-md-6 "  >
            <div class="thumbnail" style="padding: 0px;border: 1px solid #fff;" >
                <div class="SanPhamHinh" style="overflow: hidden;width: 100%;height: 180px;" >
                    <a href="<?php echo $_SanPham->LinkChiTiet ?>" >
                        <img src="<?php echo $_SanPham->UrlHinh; ?>" style="width: 100%;height: auto;min-height: 180px;" alt="<?php echo $_SanPham->TenSP ?>"/>
                    </a>
                </div>
                <div style="padding: 5px;" >
                    <h3 class="text-center SanPhamGia" >
                        <?php echo $_SanPham->GiaVND; ?>
                    </h3>
                    <h3 class="text-center SanPhamTenCom" >
                        <a href="<?php echo $_SanPham->LinkChiTiet ?>" >
                            <?php
                            if (strlen($_SanPham->TenSP) > 62) {
                                echo $_SanPham->_subStringUnicode($_SanPham->TenSP, 62) . "...";
                            } else {
                                echo $_SanPham->TenSP;
                            }
                            ?>
                        </a>
                    </h3>
                    <p class="SanPhamKV " style="white-space: nowrap; color: #888;overflow: hidden;" >
                        <span style="color: #888;" >
                            Khu vực:
                        </span> 
                        <?php echo $_SanPham->TenTinh ?>
                    </p>
                    <p class="SanPhamKV " style="white-space: nowrap; color: #666;overflow: hidden;" >
                        <span style="color: #888;" >
                            Danh mục:
                        </span>
                        <?php echo $_SanPham->TenDanhMuc ?>
                    </p>
                </div>
            </div>
        </div>
        <?php
    }

    function ListSanPhamQuanTam($_SanPham) {
        ?>    
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 "  >
            <div class="media SanPham">
                <div class="media-left media-top"  >
                    <a href="<?php echo $_SanPham->LinkChiTiet ?>"  >
                        <img src="<?php echo $_SanPham->UrlHinh ?>" class="HinhSanPham"  >
                    </a>
                </div>
                <div class="media-body" >
                    <h3 class="media-heading SanPhamTenCom">
                        <a href="<?php echo $_SanPham->LinkChiTiet ?>" >
                            <?php echo $_SanPham->TenSP; ?>
                        </a>
                    </h3>
                    <p class="SanPhamKV " style="white-space: nowrap; color: #888;overflow: hidden;" >
                        <span style="color: #888;" >
                            Khu vực:
                        </span> 
                        <?php echo $_SanPham->TenTinh ?>
                    </p>
                    <div class="media" style="margin-bottom: 0px;">
                        <div class="media-body" >
                            <h4 class="media-heading"><?php echo $_SanPham->TenGoiDangTin ?></h4>
                            <p>
                                <a class="btn btn-info" href="#"><?php echo $_SanPham->GiaVND ?></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

    function ListSanPhamSangGap($_SanPham) {
//        quản banner cáo Trang 
//        $_SanPham = new Model_SanPham();
        ?>    
        
        <?php
    }

}
?>