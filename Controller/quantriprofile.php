<?php

class Controller_quantriprofile extends Controller_quantri {

    public $QuanTri;

    function __construct() {

        $this->QuanTri = new Model_QuanTri();

        parent::__construct();
    }

    function index() {
        if (isset($_POST['SuaThongTinChung'])) {
            $User = $_POST;
            $this->QuanTri->SuaThongTin($User);
            $ThongBao["Loai"] = 'success';
            $ThongBao["NoiDung"] = 'Sửa Thành Công';
            $data['ThongBao'] = $this->QuanTri->_encode($ThongBao);
        }
        $data['User'] = $this->QuanTri->ThongTinUser();
        $this->QView($data);
    }

}

?>