<?php

class Model_common extends Model_Adapter {

    function LayMa($Url) {
        // abc-cde_123.html
        $Url = explode("_", $Url);
        $Url = end($Url);
        $Url = explode(".html", $Url);
        $Url = reset($Url);
        return $Url;
    }

    function PhanTrang($TongTrang = 3, $TrangHienTai, $DuongDan) {
        $PhanTrang = ' <ul class="pagination">';

        $tu = $TrangHienTai - 4;
        $den = $TrangHienTai + 4;
        $tu = $tu <= 0 ? 1 : $tu;
        if ($tu > 1) {
            $DuongDan1 = str_replace("[i]", 1, $DuongDan);
            $PhanTrang .='<li><a href="' . $DuongDan1 . '"><<</a></li>';
        }
        if ($tu > 1) {
            $DuongDan1 = str_replace("[i]", $TrangHienTai - 1, $DuongDan);
            $PhanTrang .='<li><a href="' . $DuongDan1 . '"><</a></li>';
        }

        $den = $den >= $TongTrang ? $TongTrang : $den;
        for ($i = $tu; $i <= $den; $i++) {
            $DuongDan1 = str_replace("[i]", $i, $DuongDan);
            if ($i == $TrangHienTai)
                $PhanTrang .='<li class="active" ><a href="' . $DuongDan1 . '">' . $i . '</a></li>';
            else
                $PhanTrang .='<li><a href="' . $DuongDan1 . '">' . $i . '</a></li>';
        }

        if ($den < $TongTrang) {
            $DuongDan1 = str_replace("[i]", $TrangHienTai + 1, $DuongDan);
            $PhanTrang .='<li><a href="' . $DuongDan1 . '">></a></li>';
        }
        if ($den < $TongTrang) {
            $DuongDan1 = str_replace("[i]", $TongTrang, $DuongDan);
            $PhanTrang .='<li><a href="' . $DuongDan1 . '">>></a></li>';
        }

        $PhanTrang .= '</ul>';
        return $PhanTrang;
    }

    function DuongDanLoaiTin($LoaiTin) {
        $link = BASE_DIR .'baiviet/loaibaiviet/' .strtolower(bodautv($LoaiTin['TenDanhMuc']))."_".$LoaiTin['MaDanhMuc'].".html";
        return $link;
    }
    function DuongDanTinChiTiet($TinTuc) {
        $link = BASE_DIR .'baiviet/' .strtolower(bodautv($TinTuc['TieuDe']))."_".$TinTuc['idTin'].".html";
        return $link;
    }
    function DuongDanSPChiTiet($SanPham) {
        $link = BASE_DIR .'sanpham/' .strtolower(bodautv($TinTuc['TieuDe']))."_".$TinTuc['idTin'].".html";
        return $link;
    }
    function DuongDanSPLoai($LoaiSanPham) {
        $link = BASE_DIR .'sanpham/sanphamloai/' .strtolower(bodautv($LoaiSanPham['TenDanhMuc']))."_".$LoaiSanPham['MaDanhMuc'].".html";
        return $link;
    }
}
?>


