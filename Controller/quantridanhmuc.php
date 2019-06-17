<?php

class Controller_quantridanhmuc extends Controller_quantri {

    private $Param;
    private $Lang;
    private $DanhMuc;

    function __construct() {
        $this->Lang = $this->getLang();
        $this->Param = $this->getParam();
        $this->DanhMuc = new Model_DanhMuc();
        parent::__construct();
    }

    function index() {
        $data['ChonDanhMuc'] = FALSE;
        $data['DSDanhMucCha'] = $this->DanhMuc->DSDanhMuc(0);
        if (isset($this->Param[0])) {
            if ($this->Param[0]) {
                $data['DSDanhMucCha'] = $this->DanhMuc->DSDanhMuc($this->Param[0]);
            }
        }
        $DanhMuc1 = $this->DanhMuc->DSDanhMucTheoLoai(1);
        $data['DSDanhMuc'] = $DanhMuc1;
        $data['DSDanhMucOp'] = $this->DanhMuc->LayDanhMucDeQuy();
        if (!$data['DSDanhMucCha']) {
            header("Location: " . BASE_DIR . "quantridanhmuc/danhmucthem");
        }
        $this->QView($data);
    }

    function danhmuc() {
        $data['ChonDanhMuc'] = FALSE;
        $data['DSDanhMucCha'] = $this->DanhMuc->DSDanhMuc(0);
        if (isset($this->Param[0])) {
            if ($this->Param[0]) {
                $data['DSDanhMucCha'] = $this->DanhMuc->DSDanhMuc($this->Param[0]);
            }
        }
        $DanhMuc1 = $this->DanhMuc->DSDanhMucTheoLoai(1);
        $data['DSDanhMuc'] = $DanhMuc1;
        $data['DSDanhMucOp'] = $this->DanhMuc->LayDanhMucDeQuy();
        if (!$data['DSDanhMucCha']) {
            header("Location: " . BASE_DIR . "quantri/danhmucthem");
        }
        $this->QView($data);
    }

    function danhmucthem() {
        if (isset($_POST['ThemDanhMuc'])) {
            $DanhMuc = $_POST;
            $DanhMuc['TenKhongDau'] = strtolower(bodautv($DanhMuc['TenDanhMuc']));
            $Hinh = explode("/images/", $_POST['UrlHinh']);
            $DanhMuc['UrlHinh'] = end($Hinh);
            $DanhMuc['ThuocTinh'] = $this->DanhMuc->_decode($_POST['ThuocTinh']);
            $DanhMuc['LoaiDanhMuc'] = isset($_POST['LoaiDanhMuc']) ? 1 : 0;
            $kq = $this->DanhMuc->TimDanhMucTieuDe($DanhMuc['TenKhongDau']);
            if (!$kq) {
                $this->DanhMuc->ThemDanhMuc($DanhMuc);
            }
            header("Location: " . BASE_DIR . "quantridanhmuc");
        }
        $DanhMuc1 = $this->DanhMuc->DSDanhMucTheoLoai(1);
        $data['DSDanhMuc'] = $DanhMuc1;
        $data['DSDanhMucOp'] = $this->DanhMuc->DSDanhMuc(0);
        $data['DSDanhMucCha'] = $this->LayDanhMuc();
        $this->QView($data);
    }

    function danhmucsua() {
        if (isset($_POST['SuaDanhMuc'])) {
            $DanhMuc = $this->DanhMuc->TimDanhCha($_POST['MaDanhMuc']);
            foreach ($DanhMuc as $k => $v) {
                if (isset($_POST[$k]))
                    $DanhMuc[$k] = $_POST[$k];
            }
            $Hinh = explode("/images/", $_POST['UrlHinh']);
            $DanhMuc['TenKhongDau'] = strtolower(bodautv($DanhMuc['TenDanhMuc']));
            $DanhMuc['UrlHinh'] = end($Hinh);
            $DanhMuc['ThuocTinh'] = $this->DanhMuc->_encode($_POST['ThuocTinh']);
            $DanhMuc['LoaiDanhMuc'] = isset($_POST['LoaiDanhMuc']) ? 1 : 0;
            $this->DanhMuc->SuaDanhMuc($DanhMuc);
            header("Location: " . BASE_DIR . "quantridanhmuc");
        }
        $DanhMuc1 = $this->DanhMuc->DSDanhMucTheoLoai(1);
        $data['DSDanhMuc'] = $DanhMuc1;
        $data['DSDanhMucOp'] = $this->DanhMuc->DSDanhMuc(0);
        $data['DSDanhMucCha'] = $this->LayDanhMuc();
        if (isset($this->Param[0])) {
            $data['DMChon'] = $this->DanhMuc->TimDanhCha($this->Param[0]);
        }
        $this->QView($data);
    }

    function danhmuccopy() {
        if (isset($_POST['SuaDanhMuc'])) {
            $DanhMuc = $_POST;
            foreach ($DanhMuc as $k => $v) {
                if (isset($_POST[$k]))
                    $DanhMuc[$k] = $_POST[$k];
            }
            $Hinh = explode("/images/", $_POST['UrlHinh']);
            $DanhMuc['TenKhongDau'] = strtolower(bodautv($DanhMuc['TenDanhMuc']));
            $DanhMuc['UrlHinh'] = end($Hinh);
            $DanhMuc['ThuocTinh'] = $this->DanhMuc->_encode($_POST['ThuocTinh']);
            $DanhMuc['LoaiDanhMuc'] = isset($_POST['LoaiDanhMuc']) ? 1 : 0;
            $this->DanhMuc->ThemDanhMuc($DanhMuc);
            header("Location: " . BASE_DIR . "quantridanhmuc");
        }
        $DanhMuc1 = $this->DanhMuc->DSDanhMucTheoLoai(1);
        $data['DSDanhMuc'] = $DanhMuc1;
        $data['DSDanhMucOp'] = $this->DanhMuc->DSDanhMuc(0);
        $data['DSDanhMucCha'] = $this->LayDanhMuc();
        if (isset($this->Param[0])) {
            $data['DMChon'] = $this->DanhMuc->TimDanhCha($this->Param[0]);
        }
        $this->QView($data);
    }

    // chủng laoị tin
    function xoadanhmuc() {
        if (isset($this->Param[0])) {
            if ($this->Param[0]) {
                $danhMuc = $this->DanhMuc->ChiTietDM($this->Param[0]);
                if ($danhMuc) {
// kiểm tra xem có con hay khong
                    if ($this->DanhMuc->XoaDanhMuc($danhMuc, TRUE)) {
                        $this->setThongBao("Xóa Thành Công");
                    } else {
                        $this->setThongBao("Không Thể Xóa Danh Mục Này");
                    }

// neu khong có con thi có thể xóa
                } else {
                    $this->setThongBao("Không Có Danh Mục Này");
                }
            }
        }
        if (isset($_SERVER["HTTP_REFERER"]))
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        header("Location: " . BASE_DIR . "quantri/danhmuc");
    }

    function danhmucxoa() {
        if (isset($this->Param[0])) {
            if ($this->Param[0]) {
                $danhMuc = $this->DanhMuc->ChiTietDM($this->Param[0]);
                if ($danhMuc) {
// kiểm tra xem có con hay khong
                    if ($this->DanhMuc->XoaDanhMuc($danhMuc, TRUE)) {
                        $this->setThongBao("Xóa Thành Công");
                    } else {
                        $this->setThongBao("Không Thể Xóa Danh Mục Này");
                    }
// neu khong có con thi có thể xóa
                } else {
                    $this->setThongBao("Không Có Danh Mục Này");
                }
            }
        }
        if (isset($_SERVER["HTTP_REFERER"]))
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        header("Location: " . BASE_DIR . "quantridanhmuc");
    }

    function importdanhmuc() {
        $DSDanhMuc = array();
        if (isset($_POST['SubmitImport'])) {
            if ($_FILES['FileImport']['error'] == 0) {
                $DSDanhMuc = $this->DanhMuc->import($_FILES['FileImport']['tmp_name']);
                foreach ($DSDanhMuc as $DanhMuc) {
                    if ($this->DanhMuc->TimDanhCha($DanhMuc['MaDanhMuc']) == FALSE) {
                        $this->DanhMuc->ThemDanhMuc($DanhMuc);
                    }
                }
            }
        }

        $this->QView($DSDanhMuc);
    }

}

?>