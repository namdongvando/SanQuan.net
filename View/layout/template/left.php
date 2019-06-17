<?php
$View_QuanCao = new View_quancaoview();
$View_SanPham = new View_sanphamview();
$View_QuanCao->ListQuanCao4ViTri3(3);
?>
<div class="row "  >
    <div class="panel panel-defaultt" style="margin-bottom: 0px;" >
        <div class="panel-body"  >
            <?php
            $Model_DanhMuc = new Model_DanhMuc();
            $DSDanhMuc = $Model_DanhMuc->DSDanhMuc();
            foreach ($DSDanhMuc as $DanhMuc) {
                $_DanhMuc = new Model_DanhMuc($DanhMuc);
                ?>
            <h3 class="text-center SanPhamTenCom SanPhamDanhMuc" >
                    <a href="<?php echo $_DanhMuc->LinkDanhMuc ?>" >
                        <img src="<?php echo $_DanhMuc->UrlHinh ?>" style="width: 24px;height: 24px;" >
                        <?php echo $_DanhMuc->TenDanhMuc; ?>
                    </a>
                </h3>
                <?php
            }
            ?>
        </div>
    </div>
    <div class="clearfix" ></div>
    <div class="panel panel-noiBat" style="margin-bottom: 0px;border-radius: 0px;" >
        <div class="panel-heading bg_xanh" style="border-radius: 0px;"  >
            <h3 class="panel-title text-center"  >Cần Sang Gấpaaa</h3>
        </div>
    </div>
    <?php
    $Model_SanPham = new Model_SanPham();
    $DSSanPham = $Model_SanPham->DSSanPhamHome();
    if ($DSSanPham)
        foreach ($DSSanPham as $SanPham) {
            $_SanPham = new Model_SanPham($SanPham);
            $View_SanPham->ListSanPhamSangGap($_SanPham);
        }
    ?>

    <div class="panel panel-noiBat" style="margin-bottom: 0px;background-color:#dde9f1; " >
        <div class="panel-heading bg_do" >
            <h3 class="panel-title text-center"  >Tìm Tin Sang Nhượng</h3>
        </div>
        <div class="panel-body" >
            <form action="<?php echo BASE_DIR ?>timkiem/index/" method="POST" >
                <table class="table table-compare " style="margin-bottom: 0px;" >
                    <tr>
                        <td colspan="3" >
                            <select class="form-control" name="SDanhMuc" >
                                <?php
                                $Model_DanhMuc = new Model_DanhMuc();
                                $DSTinh = $Model_DanhMuc->DSDanhMuc();
                                foreach ($DSTinh as $DanhMuc) {
                                    $_DanhMuc = new Model_DanhMuc($DanhMuc);
                                    ?>
                                    <option value="<?php echo $_DanhMuc->MaDanhMuc; ?>" ><?php echo $_DanhMuc->TenDanhMuc; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" >
                            <select class="form-control" name="STinh" onchange="LayHuyen(this.value)" >
                                <option value="0" >-- Chọn Tỉnh | Thành Phố--</option>
                                <?php
                                $Model_TinhThanh = new Model_TinhThanh();
                                $DSTinh = $Model_TinhThanh->DSTinh();
                                foreach ($DSTinh as $Tinh) {
                                    $_Tinh = new Model_TinhThanh($Tinh);
                                    ?>
                                    <option value="<?php echo $_Tinh->MaDiaChi; ?>" ><?php echo $_Tinh->TenDiaChi; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" >
                            <select class="form-control" name="SHuyen" id="SelectHuyen" >
                                <option value="0" >Hyện</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php
                            $Gia = array(1, 2, 5, 10, 20, 50, 100, 150, 200, 250, 300, 350, 400, 450, 500, 550, 600, 650, 700, 750, 800, 850, 900);
                            ?>
                            <select class="form-control" name="GiaTu" >
                                <?php
                                foreach ($Gia as $k => $v) {
                                    ?>
                                    <option value="<?php echo $v ?>" ><?php echo $v ?></option>
                                    <?php
                                }
                                ?>
                            </select></td>
                        <td>
                            <select class="form-control" name="GiaDen" >
                                <?php
                                foreach ($Gia as $k => $v) {
                                    ?>
                                    <option value="<?php echo $v ?>" ><?php echo $v ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </td>
                        <td style="border: 0px;white-space: nowrap" >
                            <label>
                                <input name="DonVi" value="1" type="radio" checked="checked" >
                                Triệu
                            </label>
                            <label>
                                <input name="DonVi" value="0" type="radio" >
                                Tỷ
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center" >
                            <input type="submit" name="TimKiem" value="Tìm kiếm" class="btn btn-primary" >
                        </td>
                    </tr>
                </table>
            </form>
        </div>

    </div>

</div>

<script>
    function LayHuyen(str) {
        if (str.length == 0) {
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("SelectHuyen").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "<?php echo BASE_DIR ?>index/layhuyen/" + str, true);
            xmlhttp.send();
        }
    }
</script>