<?php

class Controller_quantripages extends Controller_quantri {

    public $Pages;
    public $Param;
    function __construct() {
        $this->Pages = new Model_Pages();
        $this->Param = $this->getParam();
        parent::__construct();
    }
    function pages() {
        $data['DSPages'] = $this->Pages->DSPages();
        $this->QView($data);
    }
    function pagessua() {
        if (isset($_POST['SuaPages'])) {
            $_POST['UrlHinh'] = explode("/images/", $_POST['UrlHinh']);
            $_POST['UrlHinh'] = end($_POST['UrlHinh']);
            $this->Pages->SuaPages($_POST);
            $this->Pages->_header($this->Pages->getLinkDSPages());
        }
        $data['Pages'] = $this->Pages->TimPages($this->Param[0]);
        $this->QView($data);
    }
    function pagessuabv() {
        if (isset($_POST['SuaPages'])) {
            $_POST['UrlHinh'] = explode("/images/", $_POST['UrlHinh']);
            $_POST['UrlHinh'] = end($_POST['UrlHinh']);
            $this->Pages->SuaPages($_POST);
            $this->Pages->_header(BASE_DIR . "quantri/pages");
        }
        $data['Pages'] = $this->Pages->TimPages($this->Param[0]);
        $this->QView($data);
    }
    function pagesxoa() {

        if (isset($_POST['XoaPages'])) {
            foreach ($_POST['idPa'] as $k => $v) {
                $this->Pages->XoaPages($k, TRUE);
            }
        }
        if (isset($this->Param[0])) {
            $this->Pages->XoaPages($this->Param[0], TRUE);
        }
        $this->Pages->_header($_SERVER["HTTP_REFERER"]);
    }
    function pagesthem() {
        if (isset($_POST['ThemPages'])) {
            $this->Pages->ThemPages($_POST);
            $this->Pages->_header($this->Pages->getLinkDSPages());
        }
        $this->QView("");
    }
    
}

?>