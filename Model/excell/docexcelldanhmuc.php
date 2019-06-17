<?php

class Model_excell_docexcelldanhmuc {

    function __construct() {
        
    }

    function index() {
        require_once 'PHPExcel.php';
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A1', 'Mã Danh Mục')
                ->setCellValue('B1', 'Loai Danh Mục')
                ->setCellValue('C1', 'Tên Danh Mục')
                ->setCellValue('D1', 'Tên Không Dấu')
                ->setCellValue('E1', 'UrlHinh')
                ->setCellValue('F1', 'STT')
                ->setCellValue('G1', 'Nội Dung')
                ->setCellValue('H1', 'Thuộc Tinh')
                ->setCellValue('I1', 'CapCha');
        $Model_DanhMuc = new Model_DanhMuc();
        $lists = $Model_DanhMuc->DSDanhMuc();
        $i = 2;
        foreach ($lists as $DanhMuc) {
            $_DanhMuc = new Model_DanhMuc($DanhMuc);
            $objPHPExcel->setActiveSheetIndex(0)
                    ->setCellValue('A' . $i, $_DanhMuc->MaDanhMuc)
                    ->setCellValue('B' . $i, $_DanhMuc->LoaiDanhMuc)
                    ->setCellValue('C' . $i, $_DanhMuc->TenDanhMuc)
                    ->setCellValue('D' . $i, $_DanhMuc->TenKhongDau)
                    ->setCellValue('E' . $i, $_DanhMuc->UrlHinh)
                    ->setCellValue('F' . $i, $_DanhMuc->STT)
                    ->setCellValue('G' . $i, $_DanhMuc->NoiDung)
                    ->setCellValue('H' . $i, $_DanhMuc->_encode($_DanhMuc->ThuocTinh))
                    ->setCellValue('I' . $i, $_DanhMuc->CapCha);
            $i++;
        }
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $full_path = 'public/excell/data.xlsx';
        $objWriter->save($full_path);
        return BASE_URL . $full_path;
    }

    function import($File) {
        require_once 'PHPExcel.php';
        $objReader = PHPExcel_IOFactory::createReader('Excel2007');
        $objReader->setReadDataOnly(true); //optional
        $full_path = $File;
        $objPHPExcel = $objReader->load($full_path);
        $objWorksheet = $objPHPExcel->getActiveSheet();
        $Model_DanhMuc = new Model_DanhMuc();
        $i = 2;
        foreach ($objWorksheet->getRowIterator() as $row) {
            $DanhMuc['MaDanhMuc'] = $objPHPExcel->getActiveSheet()->getCell("A$i")->getValue();
            $DanhMuc['LoaiDanhMuc'] = $objPHPExcel->getActiveSheet()->getCell("B$i")->getValue();
            $DanhMuc['TenDanhMuc'] = $objPHPExcel->getActiveSheet()->getCell("C$i")->getValue();
            $DanhMuc['TenKhongDau'] = $objPHPExcel->getActiveSheet()->getCell("D$i")->getValue();
            $DanhMuc["UrlHinh"] = $objPHPExcel->getActiveSheet()->getCell("E$i")->getValue();
            $DanhMuc["STT"] = $objPHPExcel->getActiveSheet()->getCell("F$i")->getValue();
            $DanhMuc["NoiDung"] = $objPHPExcel->getActiveSheet()->getCell("G$i")->getValue();
            $DanhMuc["ThuocTinh"] = $objPHPExcel->getActiveSheet()->getCell("H$i")->getValue();
            $DanhMuc["CapCha"] = $objPHPExcel->getActiveSheet()->getCell("I$i")->getValue();
            $i++;
            if ($DanhMuc['MaDanhMuc'] != "")
                $DanhMucs[] = $DanhMuc;
        }
        return $DanhMucs;
    }

}

?>