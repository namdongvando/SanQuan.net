<?php

class Model_apiSanPham extends Model_SanPham {

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
            $this->title = $TinTuc['title'];
            $this->keyword = $TinTuc['keyword'];
            $this->description = $TinTuc['description'];
            $this->MaDanhMuc = $TinTuc['MaDanhMuc'];
            $this->TenDanhMuc = $this->getTenDanhMuc($this->MaDanhMuc);
            $this->TenSP = $TinTuc['TieuDe'];
            $this->TenSPKhongDau = $TinTuc['TieuDeKhongDau'];
            $this->TomTat = $TinTuc['TomTat'];
            $this->NoiDungSua = $this->NoiDungTinTuc($TinTuc['NoiDung']);
            $this->NoiDung = $TinTuc['NoiDung'];
            $this->AnHien = $TinTuc['AnHien'] == 1 ? TRUE : FALSE;
            $this->NgayDang = date("d-m-Y", strtotime($TinTuc['NgayDang']));
            if (is_file("public/img/images/" . $TinTuc['UrlHinh'])) {
                $this->UrlHinh = BASE_DIR . "public/img/images/" . $TinTuc['UrlHinh'];
            } else {
                $this->UrlHinh = "{Option_Logo}";
            }
            $this->LinkGioHang = BASE_DIR . "giohang/them/" . $TinTuc['IdTin'];
            $this->TangSLGioHang = BASE_DIR . "giohang/tang/" . $TinTuc['IdTin'];
            $this->GiamSLGioHang = BASE_DIR . "giohang/giam/" . $TinTuc['IdTin'];
            $this->XoaGioHang = BASE_DIR . "giohang/xoa/" . $TinTuc['IdTin'];
            $this->TinNoiBat = intval($TinTuc['TinNoiBat']);
            $this->SoLanXem = $TinTuc['SoLanXem'];
            $this->Stt = $TinTuc['Stt'];
            $this->Gia = $TinTuc['Gia'];
            $this->GhiChu = $TinTuc['GhiChu'];
            $this->DoQuanTrong = $TinTuc['DoQuanTrong'];
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

    function DSSanPhamAn($Page, $SL, &$Tong) {
        $vitri = ($Page - 1) * $SL;
        $sql = "SELECT count(*) as `TongSanPham` FROM `" . table_fix . "sanpham` where `AnHien` = '0' ";
        $this->Query($sql);
        $kq = $this->fetchRow();
        $Tong = $kq['TongSanPham'];
        $sql = "SELECT * FROM `" . table_fix . "sanpham` where `AnHien` = '0' ORDER BY `NgayDang` DESC limit {$vitri},{$SL} ";
        $this->Query($sql);
        return $this->fetchAll();
    }

    function DSSanPhamHien($Page, $SL, &$Tong) {
        $vitri = ($Page - 1) * $SL;
        $sql = "SELECT count(*) as `TongSanPham` FROM `" . table_fix . "sanpham` where `AnHien` = '1'";
        $this->Query($sql);
        $kq = $this->fetchRow();
        $Tong = $kq['TongSanPham'];
        $sql = "SELECT * FROM `" . table_fix . "sanpham` where `AnHien` = '1' ORDER BY `NgayDang` DESC limit {$vitri},{$SL} ";
        $this->Query($sql);
        return $this->fetchAll();
    }

    function DSSanPhamALL($Page, $SL, &$Tong) {
        $vitri = ($Page - 1) * $SL;
        $sql = "SELECT count(*) as `TongSanPham` FROM `" . table_fix . "sanpham` where 1";
        $this->Query($sql);
        $kq = $this->fetchRow();
        $Tong = $kq['TongSanPham'];
        $sql = "SELECT * FROM `" . table_fix . "sanpham` where 1 ORDER BY `NgayDang` DESC limit {$vitri},{$SL} ";
        $this->Query($sql);
        return $this->fetchAll();
    }

}

?>