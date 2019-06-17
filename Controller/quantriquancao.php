<?php

class Controller_quantriquancao extends Controller_quantri {

    public $Param;
    public $QuanCao;

    function __construct() {
        parent::__construct();
        $this->Param = $this->getParam();
        $this->QuanCao = new Model_QuanCao();
    }

    function index() {
        $this->QView("");
    }

    function quancaoxoa() {
        if ($this->Param[0]) {
            $kq = $this->QuanCao->TimQuanCao4ID($this->Param[0]);
            $this->QuanCao->XoaQuanCao4ID($kq['MaQuanCao']);
            $this->QuanCao->_header($this->QuanCao->getLinkDSQuanCao());
        }
        $this->QView("");
    }

    function quancaosua() {
        if ($this->Param[0]) {
            $kq = $this->QuanCao->TimQuanCao4ID($this->Param[0]);
            if (!$kq) {
                $this->QuanCao->_header($this->QuanCao->getLinkDSQuanCao());
            }
        }

        if (isset($_POST['MaQuanCao'])) {
            $QuanCao = $this->QuanCao->TimQuanCao4ID($this->Param[0]);
            $url = explode("/images/", $_POST['UrlHinh']);
            $QuanCao['UrlHinh'] = $this->QuanCao->Bokytusql(end($url));
            $QuanCao['TenQuanCao'] = $_POST['TenQuanCao'];
            $QuanCao['ViTri'] = $_POST['ViTri'];
            $QuanCao['Stt'] = $_POST['Stt'];
            $QuanCao['LinkQuanCao'] = $_POST['LinkQuanCao'];
            $this->QuanCao->SuaQuanCao($QuanCao);
            $this->QuanCao->_header($this->QuanCao->getLinkDSQuanCao());
        }

        $this->QView("");
    }

    function quancaothem() {
        if (isset($_POST['ThemQuanCao'])) {
            $QuanCao = $_POST;
            $url = explode("/images/", $QuanCao['UrlHinh']);
            $QuanCao['UrlHinh'] = $this->QuanCao->Bokytusql(end($url));
            $QuanCao['NoiDung'] = '';
            $QuanCao['GhiChu'] = '';
            $this->QuanCao->ThemQuanCao($QuanCao);
            unset($_POST);
            $this->QuanCao->_header($this->QuanCao->getLinkDSQuanCao());
        }

        $this->QView("");
    }

}

?>