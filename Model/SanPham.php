<?php

class Model_SanPham extends Model_DanhMuc {

    public $MaSP;
    public $ListHinh;
    public $DiaChi;
    public $IDKhachHang;
    public $title;
    public $keyword;
    public $description;
    public $MaDanhMuc;
    public $TenDanhMuc;
    public $TenSP;
    public $TenSPKhongDau;
    public $TomTat;
    public $NoiDung;
    public $NoiDungSua;
    public $AnHien;
    public $NgayDang;
    public $UrlHinh;
    public $TinNoiBat;
    public $SoLanXem;
    public $Stt;
    public $LinkChiTiet;
    public $LinkFullChiTiet;
    public $LinkGioHang;
    public $TangSLGioHang;
    public $GiamSLGioHang;
    public $GoiDangTin;
    public $TenGoiDangTin;
    public $XoaGioHang;
    public $Gia;
    public $SoLuong;
    public $Tinh;
    public $TenTinh;
    public $NguoiLienHe;
    public $DienThoai;
    public $ChieuNgang;
    public $ChieuRong;
    public $HienGia;
    public $ViTri;
    public $TenViTri;
    public $PhongCach;
    public $TenPhongCach;
    public $SoPhong;
    public $Toilet;
    public $TenHuyen;
    public $DoQuanTrong;
    public $Huyen;
    public $GiaVND;
    public $DonVi;
    static public $LinkThemSanPham;
    static public $LinkSuaSanPham;
    static public $LinkXoaSanPham;
    static public $LinkDSSanPham;
    static public $LinkXemSanPham;

    function __construct($TinTuc = NULL) {
        self::$LinkThemSanPham = BASE_DIR . "quantrisanpham/sanphamthem/";
        self::$LinkSuaSanPham = BASE_DIR . "quantrisanpham/sanphamsua/";
        self::$LinkXoaSanPham = BASE_DIR . "quantrisanpham/sanphamxoa/";
        self::$LinkDSSanPham = BASE_DIR . "quantrisanpham/sanpham/";
        self::$LinkXemSanPham = BASE_DIR . "quantrisanpham/sanphamdetail/";

        if ($TinTuc) {
            $this->MaSP = isset($TinTuc['IdTin']) ? $TinTuc['IdTin'] : "";
            $this->IDKhachHang = $TinTuc['IDKhachHang'];
            $this->title = isset($TinTuc['title']) ? $TinTuc['title'] : "";
            $this->keyword = isset($TinTuc['keyword']) ? $TinTuc['keyword'] : "";
            $this->description = isset($TinTuc['description']) ? $TinTuc['description'] : "";
            $this->MaDanhMuc = isset($TinTuc['MaDanhMuc']) ? intval($TinTuc['MaDanhMuc']) : 1;
            $this->TenDanhMuc = $this->getTenDanhMuc($this->MaDanhMuc);
            $this->TenSP = $TinTuc['TieuDe'];
            $this->TenSPKhongDau = $TinTuc['TieuDeKhongDau'];
            $this->TomTat = isset($TinTuc['TomTat']) ? $TinTuc['TomTat'] : '';
            $this->NoiDung = isset($TinTuc['NoiDung']) ? $TinTuc['NoiDung'] : "";
            $this->NoiDungSua = $this->NoiDungTinTuc($this->NoiDung);
            $TinTuc['AnHien'] = isset($TinTuc['AnHien']) ? $TinTuc['AnHien'] : 1;
            $this->AnHien = $TinTuc['AnHien'] == 1 ? TRUE : FALSE;
            $TinTuc['NgayDang'] = isset($TinTuc['NgayDang']) ? $TinTuc['NgayDang'] : "2018-01-01 00:00:00";
            $this->NgayDang = date("d-m-Y", strtotime($TinTuc['NgayDang']));
            if (is_file("public/img/images/" . $TinTuc['UrlHinh'])) {
                $this->UrlHinh = BASE_DIR . "public/img/images/" . $TinTuc['UrlHinh'];
            } else {
                $this->UrlHinh = "/public/noimg.jpg";
            }
            $this->LinkGioHang = BASE_DIR . "giohang/them/" . $TinTuc['IdTin'];
            $this->TangSLGioHang = BASE_DIR . "giohang/tang/" . $TinTuc['IdTin'];
            $this->GiamSLGioHang = BASE_DIR . "giohang/giam/" . $TinTuc['IdTin'];
            $this->XoaGioHang = BASE_DIR . "giohang/xoa/" . $TinTuc['IdTin'];
            $TinTuc['TinNoiBat'] = isset($TinTuc['TinNoiBat']) ? $TinTuc['TinNoiBat'] : 0;
            $this->TinNoiBat = intval($TinTuc['TinNoiBat']);
            $this->SoLanXem = isset($TinTuc['SoLanXem']) ? $TinTuc['SoLanXem'] : 0;
            $this->Stt = isset($TinTuc['Stt']) ? $TinTuc['Stt'] : 0;
            $this->Gia = isset($TinTuc['Gia']) ? $TinTuc['Gia'] : 0;
            $TinTuc['GhiChu'] = isset($TinTuc['GhiChu']) ? $TinTuc['GhiChu'] : "{}";
            $this->GhiChu = isset($TinTuc['GhiChu']) ? $TinTuc['GhiChu'] : "{}";
            $this->DoQuanTrong = isset($TinTuc['DoQuanTrong']) ? $TinTuc['DoQuanTrong'] : "";
            $GhiChu = $this->_decode($TinTuc['GhiChu']);
            $this->Tinh = isset($GhiChu->Tinh) ? $GhiChu->Tinh : 0;
            $this->Huyen = isset($GhiChu->Huyen) ? $GhiChu->Huyen : 33;
            $this->NguoiLienHe = isset($GhiChu->NguoiLienHe) ? $GhiChu->NguoiLienHe : "";
            $this->DienThoai = isset($GhiChu->DienThoai) ? $GhiChu->DienThoai : "";
            $this->ChieuNgang = isset($GhiChu->ChieuNgang) ? $GhiChu->ChieuNgang : 5;
            $this->ChieuRong = isset($GhiChu->ChieuRong) ? $GhiChu->ChieuRong : 5;
            $this->HienGia = isset($GhiChu->HienGia) ? $GhiChu->HienGia : 0;
            $this->ViTri = isset($GhiChu->ViTri) ? $GhiChu->ViTri : 1;
            $this->TenViTri = $this->getTenViTri($this->ViTri);
            $this->PhongCach = isset($GhiChu->PhongCach) ? $GhiChu->PhongCach : 1;
            $this->TenPhongCach = $this->getPhongCach($this->PhongCach);
            $this->SoPhong = isset($GhiChu->SoPhong) ? $GhiChu->SoPhong : 1;
            $this->Toilet = isset($GhiChu->Toilet) ? $GhiChu->Toilet : "Đang cập nhật";
            $this->DiaChi = isset($GhiChu->DiaChi) ? $GhiChu->DiaChi : "Đang cập nhật";
            $this->ListHinh = $this->getListHinhSanPham();
            $this->DonVi = isset($GhiChu->DonVi) ? $GhiChu->DonVi : 1; //triệu
            $this->GoiDangTin = isset($GhiChu->GoiDangTin) ? $GhiChu->GoiDangTin : 1;
            $this->TenGoiDangTin = $this->TenGoiDichVu($this->GoiDangTin);
            $this->TenTinh = $this->getTenTinhThanh($this->Tinh);
            $this->TenHuyen = $this->getTenTinhThanh($this->Huyen);
            $this->SoLuong = isset($TinTuc['SoLuong']) ? $TinTuc['SoLuong'] : 1;
            $this->GiaVND = $this->getGiaSanPham($this->Gia, $this->DonVi);
            $this->LinkChiTiet = $this->getLinkChiTietSP();
            $this->LinkFullChiTiet = $this->getLinkChiTietSP();
        }

        parent::__construct();
    }

    function UrlHinh() {
        if ($this->UrlHinh != "/public/noimg.jpg") {
            $url = substr($this->UrlHinh, 1);
            $a = explode(basename($url), $url);
            $ThuMuc = reset($a);
            $TenHinh = basename($this->UrlHinh);
            $filename = $ThuMuc . $TenHinh;
            $_TenHinh = explode(".", $TenHinh);
            $__TenHinh = reset($_TenHinh);
            $__MoRong = end($_TenHinh);
            $KiemTraHinh = $ThuMuc . $__TenHinh . "_250x250.{$__MoRong}";
            if (file_exists($KiemTraHinh)) {
                return BASE_DIR . $KiemTraHinh;
            }
            $imgc = new ImageComp_ini();
            return  $imgc->layHinh($this->UrlHinh, 250, 250);
        }
        return $this->UrlHinh;
    }

    function getGiaSanPham($Gia, $Donvi) {
        if ($Gia == 0) {
            return "Thương Lượng";
        }
        if ($Gia == -1) {
            return "Liên Hệ";
        }
        if ($Donvi == 1) {
            return $Gia . " <span>Triệu</span>";
        } else if ($Donvi == 2) {
            return $Gia . " <span>Tỷ</span>";
        } else if ($Donvi == 3) {
            return $Gia . " <span> $</span>";
        }
    }

    function getLinkXemSanPham() {
        return self::$LinkXemSanPham;
    }

    function getListHinhSanPham() {
        $Model_KhachHang = new Model_KhachHang();
        $Kh = $Model_KhachHang->ThongTinKhachHang($this->IDKhachHang);
        return $this->DSHinhSanPham($Kh['random']);
    }

    function DSHinhSanPham($Rand) {
        $dir = "public/img/images/khachhang/" . $Rand . "/";
        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                $a = array();
                while (($file = readdir($dh)) !== false) {
                    if ($file != "." && $file != "..")
                        if (is_file($dir . $file)) {
                            $a[] = BASE_DIR . $dir . $file;
                        }
                }
                closedir($dh);
                return $a;
            }
        }
        return FALSE;
    }

    function getTenTinhThanh($maTinhThanh) {
        $Model_TinhThanh = new Model_TinhThanh();
        $TT = $Model_TinhThanh->TimTinhHuyen($maTinhThanh);
        return $TT['TenDiaChi'];
    }

    function getPhongCach($MaPhongCach) {
        return FALSE;
        $DSPC = $this->DSPhongCach($MaPhongCach);
        return $DSPC[$MaPhongCach];
    }

    function DanhMucSanPham() {
        return $this->TimDanhCha($this->MaDanhMuc);
    }
    
    function DSPhongCach() {
        $Vitri = array(1 => "Sâm Vườn", 2 => "Máy Lạnh", 3 => "Take Away", 4 => "Cafe DJ");
        return $Vitri;
    }

    function TenGoiDichVu($MaDichVu) {
        $MaDichVu = intval($MaDichVu);
        $MaDichVu = $MaDichVu == 1 ? $MaDichVu : 2;
        $DV = array(1 => "Gói Basic", 2 => "Gói Maximun");
        return $DV[$MaDichVu];
    }

    function getLinkChiTietSP() {
        $dm = $this->TimDanhCha($this->MaDanhMuc);
        $Link = BASE_URL . $dm['TenKhongDau'] . "/" . $this->TenSPKhongDau . ".html";
        return $Link;
    }

    function getLinkThemSanPham() {
        return self::$LinkThemSanPham;
    }

    function getLinkXoaSanPham() {
        return self::$LinkXoaSanPham;
    }

    function getLinkSuaSanPham() {
        return self::$LinkSuaSanPham;
    }

    function getLinkDSSanPham() {
        return self::$LinkDSSanPham;
    }

    function getTenDanhMuc($MaDanhMuc) {
        $Kq = $this->TimDanhCha($MaDanhMuc);
        return $Kq['TenDanhMuc'];
    }

    function getTenViTri($maVitri = 1) {
        $Vitri = array(1 => "Đường Lớn", 2 => "Đường Nhỏ", 3 => "Trong Hẻm", 4 => "Trong Hẻm Cụt");
        return isset($Vitri[$maVitri]) ? $Vitri[$maVitri] : $Vitri[1];
    }

    function getTenPhongCach($maVitri = 1) {
        $Vitri = array(1 => "Sâm Vườn", 2 => "Máy Lạnh", 3 => "Take Away", 4 => "Cafe DJ");
        return isset($Vitri[$maVitri]) ? $Vitri[$maVitri] : $Vitri[1];
    }

    function getDSPhongCach($maVitri = 1) {
        return NULL;
        $Vitri = array(1 => "Sâm Vườn", 2 => "Máy Lạnh", 3 => "Take Away", 4 => "Cafe DJ");
        return $Vitri;
    }

    function getDSViTri() {
        $Vitri = array(1 => "Đường Lớn", 2 => "Đường Nhỏ", 3 => "Trong Hẻm", 4 => "Trong Hẻm Cụt");
        return $Vitri;
    }

    function DSTinTucLoaiPT1($vitri, $soluong = 8, $MaDanhMuc, &$TongSanPham) {
        $vitri = intval($vitri);
        $vitri = $vitri <= 0 ? 1 : $vitri;
        $vitri = ($vitri - 1) * $soluong;
        $TongSanPham = 0;
        $sql = "SELECT count(*) as `TongSanPham` FROM `" . table_fix . "sanpham` where `MaDanhMuc` = '{$MaDanhMuc}' ORDER BY `NgayDang` DESC";
        $this->Query($sql);
        $result = $this->Tim();
        if ($this->GetNumRow() >= 1) {
            $SanPham = $this->fetchRow($result);
            $TongSanPham = $SanPham['TongSanPham'];
        }
        if ($TongSanPham <= 0) {
            return FALSE;
        } else {
            $sql = "SELECT * "
                    . "FROM `" . table_fix . "sanpham` where `MaDanhMuc` = '{$MaDanhMuc}' ORDER BY `NgayDang` DESC limit {$vitri},{$soluong} ";
            $this->Query($sql);
            if ($this->GetNumRow() >= 1) {
                $SanPham = $this->fetchAll();
                return $SanPham;
            }
            return FALSE;
        }
    }

    function DSTinTuc4LoaiHuyen($MaDanhMuc, $Huyen, &$TongSanPham, $vitri = 0, $soluong = 21) {
        $vitri = intval($vitri);
        $vitri = $vitri <= 0 ? 1 : $vitri;
        $vitri = ($vitri - 1) * $soluong;
        $TongSanPham = 0;
        $sql = "SELECT count(*) as `TongSanPham` FROM `" . table_fix . "sanpham` where `MaDanhMuc` = '{$MaDanhMuc}' and ( `GhiChu` like '%\"Huyen\":\"{$Huyen}\"%' or `GhiChu` like '%\"Tinh\"\:\"{$Huyen}\"%') ORDER BY `NgayDang` DESC";
        $this->Query($sql);
        $result = $this->Tim();
        if ($this->GetNumRow() >= 1) {
            $SanPham = $this->fetchRow($result);
            $TongSanPham = $SanPham['TongSanPham'];
        }
        if ($TongSanPham <= 0) {
            return FALSE;
        } else {
            $sql = "SELECT * FROM `" . table_fix . "sanpham` "
                    . "where `MaDanhMuc` = '{$MaDanhMuc}' and "
                    . "( `GhiChu` like '%\"Huyen\":\"{$Huyen}\"%' or `GhiChu` like '%\"Tinh\"\:\"{$Huyen}\"%') ORDER BY `NgayDang` DESC limit {$vitri},{$soluong} ";
            $this->Query($sql);
            if ($this->GetNumRow() >= 1) {
                $SanPham = $this->fetchAll();
                return $SanPham;
            }
            return FALSE;
        }
    }

    function DSSanPhamHome() {
        $sql = "SELECT * FROM `" . table_fix . "sanpham` where `TinNoiBat`  = '1' and `AnHien`= '1'  order by `DoQuanTrong` DESC ";
        $this->Query($sql);
        return $this->fetchAll();
    }

    function DSSanPhamHOT($sl = 10) {
        $sql = "SELECT * FROM `" . table_fix . "sanpham` where `TinNoiBat`  = '1' and `AnHien`= '1' order by `DoQuanTrong` DESC  limit 0,{$sl}";
        $this->Query($sql);
        return $this->fetchAll();
    }

    function LinkSanPham() {
        $Model_DanhMuc = new Model_DanhMuc();
        $DMSP = new Model_DanhMuc($Model_DanhMuc->TimDanhCha($this->MaDanhMuc));
        return BASE_DIR . $DMSP->TenKhongDau . "/" . $this->TenSPKhongDau . ".html";
    }

    function DSSanPham() {
        $sql = "SELECT * FROM `" . table_fix . "sanpham` where `AnHien` = '1' ";
        $this->Query($sql);
        return $this->fetchAll();
    }

    function DSSanPhamPT($Page, $SL, &$Tong) {
        $vitri = ($Page - 1) * $SL;
        $sql = "SELECT count(*) as `TongSanPham` FROM `" . table_fix . "sanpham` where `AnHien` = '1'   ";
        $this->Query($sql);
        $kq = $this->fetchRow();
        $Tong = $kq['TongSanPham'];
        $sql = "SELECT `MaDanhMuc`,`IdTin`,`Gia`,`TomTat`,`IDKhachHang`,`GhiChu`,`Title`,`TieuDe`,`TieuDeKhongDau`,`UrlHinh` FROM `" . table_fix . "sanpham` where `AnHien` = '1'  order by `DoQuanTrong` desc limit {$vitri},{$SL}";
        $this->Query($sql);
        return $this->fetchAll();
    }

    function DSSanPhamPTAn($Page, $SL, &$Tong) {
        $vitri = ($Page - 1) * $SL;
        $sql = "SELECT count(*) as `TongSanPham` FROM `" . table_fix . "sanpham` where `AnHien` <= 0   ";
        $this->Query($sql);
        $kq = $this->fetchRow();
        $Tong = $kq['TongSanPham'];
        $sql = "SELECT * FROM `" . table_fix . "sanpham` WHERE `AnHien` <= 0 order by `NgayDang` DESC limit {$vitri},{$SL}";
        $this->Query($sql);
        return $this->fetchAll();
    }

    function DSSanPhamLoai($MaDanhMuc) {
        $sql = "SELECT * FROM `" . table_fix . "sanpham` where `MaDanhMuc`  ='{$MaDanhMuc}' ";
        $this->Query($sql);
        return $this->fetchAll();
    }

    function DSSanPham4LoaiPT($MaDanhMuc, $Page, $SL, &$Tong) {
        $vitri = ($Page - 1) * $SL;
        $sql = "SELECT count(*) as `TongSanPham` FROM `" . table_fix . "sanpham` where `MaDanhMuc`  ='{$MaDanhMuc}' and `AnHien` = '1' ";
        $this->Query($sql);
        $kq = $this->fetchRow();
        $Tong = $kq['TongSanPham'];
        $sql = "SELECT * FROM `" . table_fix . "sanpham` where `MaDanhMuc` ='{$MaDanhMuc}' and `AnHien` = '1' limit {$vitri},{$SL} ";
        $this->Query($sql);
        return $this->fetchAll();
    }

    function DSSanPham4ViTri($ViTri, $Page, $SL, &$Tong) {
        $vitri = ($Page - 1) * $SL;
        $sql = "SELECT count(*) as `TongSanPham` FROM `" . table_fix . "sanpham` where `TinNoiBat`  ='{$ViTri}' and `AnHien` = '1' ";
        $this->Query($sql);
        $kq = $this->fetchRow();
        $Tong = $kq['TongSanPham'];
        $sql = "SELECT *  FROM `" . table_fix . "sanpham` where `TinNoiBat` ='{$ViTri}' and `AnHien` = '1' order by `DoQuanTrong` DESC limit {$vitri},{$SL} ";
        $this->Query($sql);
        return $this->fetchAll();
    }

    function ThemSanPham($TinTuc) {
        $sql = "INSERT INTO `" . table_fix . "sanpham` SET "
                . "`IdTin` = '{$TinTuc['IdTin']}',"
                . "`IDKhachHang` = '{$TinTuc['IDKhachHang']}',"
                . "`title` = '{$TinTuc['title']}',"
                . "`keyword` = '{$TinTuc['keyword']}',"
                . "`description` = '{$TinTuc['description']}',"
                . "`MaDanhMuc` = '{$TinTuc['MaDanhMuc']}',"
                . "`TieuDe` = '{$TinTuc['TieuDe']}',"
                . "`TieuDeKhongDau` = '{$TinTuc['TieuDeKhongDau']}',"
                . "`TomTat` = '{$TinTuc['TomTat']}',"
                . "`NoiDung` = '{$TinTuc['NoiDung']}',"
                . "`AnHien` = '{$TinTuc['AnHien']}',"
                . "`NgayDang` = '{$TinTuc['NgayDang']}',"
                . "`UrlHinh` = '{$TinTuc['UrlHinh']}',"
                . "`SoLanXem` = '{$TinTuc['SoLanXem']}', "
                . "`STT` = '{$TinTuc['SoLanXem']}', "
                . "`DoQuanTrong` = '{$TinTuc['DoQuanTrong']}', "
                . "`GhiChu` = '{$TinTuc['GhiChu']}', "
                . "`TinNoiBat` = '{$TinTuc['TinNoiBat']}', "
                . "`Gia` = '{$TinTuc['Gia']}'";
        $this->Query($sql);
        return $this->Luu();
    }

    function ThemSanPhamDefaut() {

        $TinTuc['IdTin'] = date("Ymd") . time();
        $TinTuc['IDKhachHang'] = $_SESSION[KhachHang]["ID"];
        $sql = "INSERT INTO `" . table_fix . "sanpham` SET "
                . "`IdTin` = '{$TinTuc['IdTin']}',"
                . "`IDKhachHang` = '{$TinTuc['IDKhachHang']}',"
                . "`title` = '',"
                . "`keyword` = '',"
                . "`description` = '',"
                . "`MaDanhMuc` = '1',"
                . "`TieuDe` = '',"
                . "`TieuDeKhongDau` = '',"
                . "`TomTat` = '',"
                . "`NoiDung` = '',"
                . "`AnHien` = '0',"
                . "`NgayDang` = now(),"
                . "`UrlHinh` = '',"
                . "`SoLanXem` = '0', "
                . "`STT` = '0', "
                . "`DoQuanTrong` = '0', "
                . "`GhiChu` = '{}', "
                . "`TinNoiBat` = '0', "
                . "`Gia` = '0'";
        $this->Query($sql);
        return $this->Luu();
    }

    function XoaSanPham($idTin) {
        $sql = "DELETE FROM `" . table_fix . "sanpham` WHERE `idTin` = '{$idTin}'";
        $this->Query($sql);
        return $this->Luu();
    }

    function SuaSanPham($TinTuc) {
        $sql = "UPDATE `" . table_fix . "sanpham` SET "
                . "`title` = '{$TinTuc['title']}',"
                . "`keyword` = '{$TinTuc['keyword']}',"
                . "`description` = '{$TinTuc['description']}',"
                . "`MaDanhMuc` = '{$TinTuc['MaDanhMuc']}',"
                . "`TieuDe` = '{$TinTuc['TieuDe']}',"
                . "`TieuDeKhongDau` = '{$TinTuc['TieuDeKhongDau']}',"
                . "`TomTat` = '{$TinTuc['TomTat']}',"
                . "`NoiDung` = '{$TinTuc['NoiDung']}',"
                . "`AnHien` = '{$TinTuc['AnHien']}',"
                . "`NgayDang` = '{$TinTuc['NgayDang']}',"
                . "`UrlHinh` = '{$TinTuc['UrlHinh']}',"
                . "`Gia` = '{$TinTuc['Gia']}',"
                . "`SoLanXem` = '{$TinTuc['SoLanXem']}', "
                . "`DoQuanTrong` = '{$TinTuc['DoQuanTrong']}', "
                . "`GhiChu` = '{$TinTuc['GhiChu']}', "
                . "`Stt` = '{$TinTuc['Stt']}', "
                . "`TinNoiBat` = '{$TinTuc['TinNoiBat']}' where "
                . "`IdTin` = '{$TinTuc['IdTin']}'";
        $this->Query($sql);
        return $this->Luu();
    }

    function TimSanPham($MaTinTuc) {
        $sql = "SELECT * FROM `" . table_fix . "sanpham` where `IdTin` ='{$MaTinTuc}' or `TieuDeKhongDau` ='{$MaTinTuc}' and `AnHien`= '1' ";
        $this->Query($sql);
        return $this->fetchRow();
    }

    function TimSanPham4TemKhongDau($MaTinTuc) {
        $sql = "SELECT * FROM `" . table_fix . "sanpham` where `TieuDeKhongDau` ='{$MaTinTuc}' ";
        $this->Query($sql);
        return $this->fetchRow();
    }

    function TimSanPham4ID($MaTinTuc) {
        $sql = "SELECT * FROM `" . table_fix . "sanpham` where `IdTin` ='{$MaTinTuc}'";
        $this->Query($sql);
        return $this->fetchRow();
    }

    function TimSanPham4IDKhachHang($MaKhachHang) {
        $sql = "SELECT * FROM `" . table_fix . "sanpham` where `IDKhachHang` ='{$MaKhachHang}'";
        $this->Query($sql);
        return $this->fetchAll();
    }

    function LayTenKhongDau($url) {
        $url = explode(".", $url);
        return reset($url);
    }

    function NoiDungTinTuc($str) {

        $pattern = "#{Hinh}(.*){/Hinh}#i";
        preg_match($pattern, $str, $m);
        if (count($m) == 0)
            return $str;
        $bd = $m[1];
        if ($bd == "")
            return $str;
        $a = explode("|", $bd);
        if (count($a) == 0)
            return $str;
        $codebando = '<section id="portfolio"><div class="container"><div class="row"><div class="portfolio-items">';
        foreach ($a as $img) {
            $codebando .= '<div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3" style="margin-bottom: 10px" >
                            <div class="recent-work-wrap">
                             <a class="preview" href="' . $img . '" rel="prettyPhoto">
                                <img class="img-responsive" src="' . $img . '" alt="Su Kiệm"/>
                               </a>
                            </div>
                        </div>';
        }
        $codebando .= '</div></div></div></section>';


        $str = preg_replace($pattern, $codebando, $str);
        return $str;
    }

    function converText2Array($GhiChu) {
        $GC = array();
        $ghichu = $this->_decode($GhiChu);
        foreach ($ghichu as $k => $v) {
            $GC[$k] = $v;
        }
        return $GC;
    }

    function suaGhiChuSanPham($GhiChu, $MaSanPham) {
        $sql = "UPDATE `" . table_fix . "sanpham` SET "
                . "`GhiChu` = '{$GhiChu}' "
                . "where `IdTin` = '{$MaSanPham}'";
        $this->Query($sql);
        return $this->Luu();
        $this->SuaSanPham($TinTuc);
    }

    function DSViTri() {
        return array("Tin bình Thường", "Cần Sang Gấp", "Tin Đặc Biệt");
    }

    function getNameViTri($id) {
        $a = $this->DSViTri();
        return $a[$id];
    }

    function DSSanPhamHien($Page, $SL, &$Tong) {
        $vitri = ($Page - 1) * $SL;
        $sql = "SELECT count(*) as `TongSanPham` FROM `" . table_fix . "sanpham` where `AnHien` = '1'";
        $this->Query($sql);
        $kq = $this->fetchRow();
        $Tong = $kq['TongSanPham'];
        $sql = "SELECT * FROM `" . table_fix . "sanpham` where `AnHien` = '1'  limit {$vitri},{$SL} ";
        $this->Query($sql);
        return $this->fetchAll();
    }

    function DSSanPhamXoa($Page, $SL, &$Tong) {
        $vitri = ($Page - 1) * $SL;
        $sql = "SELECT count(*) as `TongSanPham` FROM `" . table_fix . "sanpham` where `AnHien` = '-1'";
        $this->Query($sql);
        $kq = $this->fetchRow();
        $Tong = $kq['TongSanPham'];
        $sql = "SELECT * FROM `" . table_fix . "sanpham` where `AnHien` = '-1'  limit {$vitri},{$SL} ";
        $this->Query($sql);
        return $this->fetchAll();
    }

    function DSSanPhamAn($Page, $SL, &$Tong) {
        $vitri = ($Page - 1) * $SL;
        $sql = "SELECT count(*) as `TongSanPham` FROM `" . table_fix . "sanpham` where `AnHien` = '1'";
        $this->Query($sql);
        $kq = $this->fetchRow();
        $Tong = $kq['TongSanPham'];
        $sql = "SELECT * FROM `" . table_fix . "sanpham` where `AnHien` = '1'  limit {$vitri},{$SL} ";
        $this->Query($sql);
        return $this->fetchAll();
    }

    function DSSanPhamALL($Page, $SL, &$Tong) {
        $vitri = ($Page - 1) * $SL;
        $sql = "SELECT count(*) as `TongSanPham` FROM `" . table_fix . "sanpham` where 1";
        $this->Query($sql);
        $kq = $this->fetchRow();
        $Tong = $kq['TongSanPham'];
        $sql = "SELECT * FROM `" . table_fix . "sanpham` where 1  limit {$vitri},{$SL} ";
        $this->Query($sql);
        return $this->fetchAll();
    }

}

?>