<div class="row "   >
    <div class="panel panel-noiBat" style="margin-bottom: 0px;margin-top: 0px;" >
        <div class="panel-body" style="padding-top: 0px;" >
            <div  class="row" style="padding: 0px;" >
                <?php
                $Model_QuanCao = new Model_QuanCao();
                $DSQuanCao = $Model_QuanCao->DSQuanCao4Vitri(1);
                foreach ($DSQuanCao as $QuanCao) {
                    $_QuanCao = new Model_QuanCao($QuanCao);
                    ?>
                    <a href="<?php echo $_QuanCao->LinkQuanCao ?>" >
                        <img src="<?php echo $_QuanCao->UrlHinh ?>" style="width: 100%;margin-bottom: 5px;" >
                    </a>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>

</div>
