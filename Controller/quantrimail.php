<?php

class Controller_quantrimail extends Controller_quantri {

    public $QuanTri;
    public $DangKy;
    public $Param;

    function __construct() {
        $this->QuanTri = new Model_QuanTri();
        $this->DangKy = new Model_DangKy();
        $this->Param = $this->getParam();
        parent::__construct();
    }

    function index() {
        $data = FALSE;

        $this->QView($data);
    }

    function tatcaloinhan() {
        $data = FALSE;
        $this->QView($data);
    }
    function xoaloinhan() {
        $this->DangKy->XoaLoiNhan($this->Param[0]);
        $this->DangKy->_header($_SERVER["HTTP_REFERER"]);
    }
    function xoadangky() {
        $this->DangKy->XoaDangKy($this->Param[0]);
        
    }

}

?>