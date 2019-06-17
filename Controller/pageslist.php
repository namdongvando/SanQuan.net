<?php

class Controller_pageslist extends Application {

    public $param;
    public $TinTuc;
    public $Pages;

    function __construct() {
        $this->param = $this->getParam();
        $this->Pages = new Model_Pages();
        $this->TinTuc = new Model_TinTuc();
    }
    function index($url) {
        $Page = new Model_Pages($this->Pages->TimPages4TieuDeKD($url));
        $data['page'] = $Page->Pagesid;
        $data['title'] = $Page->Title;
        $data['Keywords'] = $Page->Keyword;
        $data['Description'] = $Page->Des;
        $this->View($data);
    }

}
?>

