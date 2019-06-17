<?php

class View_quancaoview {

    public $Model_QuanCao;

    function __construct() {
        $this->Model_QuanCao = new Model_QuanCao();
    }

    function ListQuanCao4ViTri2($ViTri = 2) {
        $DSQuanCao = $this->Model_QuanCao->DSQuanCao4Vitri($ViTri);
        foreach ($DSQuanCao as $Quancao) {
            $_QuanCao = new Model_QuanCao($Quancao);
            ?>
            <div class="col-lg-6 col-md-6 banner bannertrai hidden-xs hidden-sm "  >
                <a href="<?php echo $_QuanCao->LinkQuanCao ?>" >
                    <img src="<?Php echo $_QuanCao->UrlHinh ?>" style="width: 100%;height: 120px;" alt="<?Php echo $_QuanCao->TenQuanCao ?>"/>
                </a>
            </div>
            <?php
        }
    }

    function ListQuanCao4ViTri($ViTri = 1) {
        $DSQuanCao = $this->Model_QuanCao->DSQuanCao4Vitri($ViTri);
        if ($DSQuanCao)
            foreach ($DSQuanCao as $Quancao) {
                $_QuanCao = new Model_QuanCao($Quancao);
                ?>
                <div class="col-lg-6 col-md-6 col-md-6 col-sm-12 col-xs-12"  style="margin-bottom: 10px;" >
                    <a href="<?php echo $_QuanCao->LinkQuanCao ?>" >
                        <img src="<?Php echo $_QuanCao->UrlHinh ?>" style="width: 100%;height: 120px;" alt="<?Php echo $_QuanCao->TenQuanCao ?>"/>
                    </a>
                </div>
                <?php
            }
    }

    function ListQuanCao4ViTri3($ViTri = 3) {
        $DSQuanCao = $this->Model_QuanCao->DSQuanCao4Vitri($ViTri);
        foreach ($DSQuanCao as $Quancao) {
            $_QuanCao = new Model_QuanCao($Quancao);
            ?>
            <div class="row banner"  >
                <a href="<?php echo $_QuanCao->LinkQuanCao ?>" >
                    <img src="<?Php echo $_QuanCao->UrlHinh ?>" style="width: 100%;height: 120px;" alt="<?Php echo $_QuanCao->TenQuanCao ?>"/>
                </a>
            </div>
            <?php
        }
    }

}
?>