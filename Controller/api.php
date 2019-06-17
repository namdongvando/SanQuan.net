<?php

class Controller_api extends Application {

    public $SanPham;
    public $Param;

    function __construct() {
        header('Access-Control-Allow-Origin: *');
        $this->SanPham = new Model_apiSanPham();
        $this->Param = $this->getParam();
    }

    function index() {
        $kq = $this->SanPham->TimSanPham4ID($this->Param[0]);
        echo $this->SanPham->_encode($kq);
    }

    function danhsachtinhien() {
        $this->Param[0] = max(intval($this->Param[0]), 1);
        $kq = $this->SanPham->DSSanPhamHien($this->Param[0], 10, $Tong);
        $data[] = ceil($Tong / 10);
        foreach ($kq as $SanPham) {
            $data[] = new Model_SanPham($SanPham);
        }

        echo $this->SanPham->_encode($data);
    }

    function timtin() {
        $IdTin = $this->Param[0];
        $kq = $this->SanPham->TimSanPham($IdTin);
        $data = new Model_SanPham($kq);
        echo $this->SanPham->_encode($data);
    }

    function danhsachtinan() {
        $this->Param[0] = max(intval($this->Param[0]), 1);
        $kq = $this->SanPham->DSSanPhamAn($this->Param[0], 10, $Tong);
        $data[] = ceil($Tong / 10);
        foreach ($kq as $SanPham) {
            $data[] = new Model_SanPham($SanPham);
        }

        echo $this->SanPham->_encode($data);
    }

    function hientin() {
        $IdTin = $this->Param[0];
        $kq = $this->SanPham->TimSanPham($IdTin);
        $kq['AnHien'] = 1;
        $this->SanPham->SuaSanPham($kq);
        echo "Sửa Thành Công";
    }

    function antin() {
        $IdTin = $this->Param[0];
        $kq = $this->SanPham->TimSanPham($IdTin);
        $kq['AnHien'] = 0;
        $this->SanPham->SuaSanPham($kq);
        echo "Sửa Thành Công";
    }

    function getLocation() {
        $tinhThanh = new Model_TinhThanh();
        $tinhThanhs = $tinhThanh->TinhThanhs();
        $oi = new lib\io();
        $filename = "data/" . md5("getLocation") . ".js";
        if (is_file($filename)) {
            echo $nd = $oi->readFile($filename);
            flush();
            if (time() - filemtime($filename) < 300)
                return;
        }
        foreach ($tinhThanhs as $k => $TT) {
            $tinhThanhs[$k]["Alias"] = $tinhThanh->bodautv($TT["TenDiaChi"]);
            $tinhThanhs[$k]["Link"] = $tinhThanhs[$k]["Alias"] . "-" . $tinhThanhs[$k]["MaDiaChi"];
        }
        $api = new lib\APIs();
        $content = $api->ArrayToApiString($tinhThanhs);
        $oi->writeFile($filename, $content);
    }

    function danhsachdanhmuc() {
        $DanhMuc = new Model_DanhMuc();
        $a = $DanhMuc->AllDanhMuc();
        foreach ($a as $k => $DM) {
            $_DM = new Model_DanhMuc($DM);
            $a[$k]["TenKhongDau"] = $_DM->TenKhongDau;
            $a[$k]["Link"] = $_DM->LinkDanhMuc;
            unset($a[$k]["ThuocTinh"]);
        }
        $api = new \lib\APIs();
        $api->ArrayToApi($a);
    }

    function CanSangGap() {
        $Model_SanPham = new Model_SanPham();
        $DSSanPham = $Model_SanPham->DSSanPham4ViTri(1, 1, 10, $Tong);
        if ($DSSanPham)
            foreach ($DSSanPham as $k => $v) {
                $_SanPham = new Model_SanPham($v);
                $DSSanPham[$k]["Link"] = $_SanPham->LinkSanPham();
                $DSSanPham[$k]["TieuDe"] = mb_strtolower($DSSanPham[$k]["TieuDe"]);
                $DSSanPham[$k]["UrlHinh"] = $_SanPham->UrlHinh();
                $DSSanPham[$k]["TomTat"] = strip_tags($DSSanPham[$k]["TomTat"]);
                $DSSanPham[$k]["GiaVND"] = htmlspecialchars(strip_tags($_SanPham->GiaVND));
                $DSSanPham[$k]["DiaChi"] = $_SanPham->DiaChi;
                $DSSanPham[$k]["DienThoai"] = $_SanPham->DienThoai;
                $DSSanPham[$k]["NguoiLienHe"] = $_SanPham->NguoiLienHe;
                unset($DSSanPham[$k]["GhiChu"]);
            }
        $api = new \lib\APIs();
        $api->ArrayToApi($DSSanPham);
    }

    function SanPhamHome() {
        $SL = 100;
        $Tong = 0;
        $Model_SanPham = new Model_SanPham();
        $DSSanPham = $Model_SanPham->DSSanPham4ViTri(0, 1, 10, $Tong);
        if ($DSSanPham)
            foreach ($DSSanPham as $k => $v) {
                $_SanPham = new Model_SanPham($v);
                $DSSanPham[$k]["Link"] = $_SanPham->LinkSanPham();
                $DSSanPham[$k]["TieuDe"] = mb_strtolower($DSSanPham[$k]["TieuDe"]);
                $DSSanPham[$k]["UrlHinh"] = $_SanPham->UrlHinh();
                $DSSanPham[$k]["TomTat"] = strip_tags($DSSanPham[$k]["TomTat"]);
                $DSSanPham[$k]["GiaVND"] = strip_tags($_SanPham->GiaVND);
                $DSSanPham[$k]["DiaChi"] = $_SanPham->DiaChi;
                $DSSanPham[$k]["DienThoai"] = $_SanPham->DienThoai;
                $DSSanPham[$k]["NguoiLienHe"] = $_SanPham->NguoiLienHe;
                $DSSanPham[$k]["KhuVuc"] = $_SanPham->TenHuyen . ", " . $_SanPham->TenTinh;
                unset($DSSanPham[$k]["GhiChu"]);
                unset($DSSanPham[$k]["NoiDung"]);
            }
        $api = new \lib\APIs();
        $api->ArrayToApi($DSSanPham);
    }

    function SanPhamHot() {

        $io = new lib\io();
        $fileName = "data/cache/" . md5("SanPhamHot") . ".js";

        if (is_file($fileName)) {
            echo $io->readFile($fileName);
            flush();
            if (time() - filemtime($fileName) < 100) {
                return;
            }
        }


        $SL = 100;
        $Tong = 0;
        $Model_SanPham = new Model_SanPham();
        $DSSanPham = $Model_SanPham->DSSanPham4ViTri(2, 1, $SL, $Tong);

        if ($DSSanPham)
            foreach ($DSSanPham as $k => $v) {
                $_SanPham = new Model_SanPham($v);
                $DSSanPham[$k]["Link"] = substr(BASE_URL, 0, -1) . $_SanPham->LinkSanPham();
                $DSSanPham[$k]["TieuDe"] = mb_strtolower($DSSanPham[$k]["TieuDe"]);
                $DSSanPham[$k]["TomTat"] = strip_tags($DSSanPham[$k]["TomTat"]);
                $DSSanPham[$k]["UrlHinh"] = substr(BASE_URL, 0, -1) . $_SanPham->UrlHinh();
                $DSSanPham[$k]["GiaVND"] = htmlspecialchars(strip_tags($_SanPham->GiaVND));
                $DSSanPham[$k]["DiaChi"] = $_SanPham->DiaChi;
                $DSSanPham[$k]["DienThoai"] = $_SanPham->DienThoai;
                $DSSanPham[$k]["KhuVuc"] = $_SanPham->TenHuyen . ", " . $_SanPham->TenTinh;
                $DSSanPham[$k]["NguoiLienHe"] = $_SanPham->NguoiLienHe;
                unset($DSSanPham[$k]["GhiChu"]);
                unset($DSSanPham[$k]["NoiDung"]);
            }
        $api = new \lib\APIs();
//        $api->ArrayToApiString($DSSanPham);
        $content = $api->ArrayToApiString($DSSanPham);
        $io->writeFile($fileName, $content);
        if (!is_file($fileName))
            echo $DSSanPham;
    }

    function quangcao() {
        $Model_QuangCao = new Model_QuanCao();
        $a = $Model_QuangCao->DSQuanCao4Vitri($this->Param[0]);
        $api = new lib\APIs();
        foreach ($a as $k => $qc) {
            $_qc = new Model_QuanCao($qc);
            $a[$k]["UrlHinh"] = $_qc->UrlHinh;
        }
        $api->ArrayToApi($a);
    }

}

?>