<link href="<?php echo BASE_DIR ?>public/filter-anmated/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo BASE_DIR ?>public/filter-anmated/css/prettyPhoto.css" rel="stylesheet" type="text/css"/>
<!--<link href="<?php echo BASE_DIR ?>public/filter-anmated/css/main.css" rel="stylesheet" type="text/css"/>-->
<link href="<?php echo BASE_DIR ?>public/filter-anmated/css/responsive.css" rel="stylesheet" type="text/css"/>
<?php
$BaiViet['TieuDe'] = "";
$BaiViet['NoiDung'] = "";
$BaiViet = isset($data['BaiViet']) ? $data['BaiViet'] : FALSE;
?>
<?php echo $BaiViet['NoiDung'] ?>
<div class="clearfix" ></div>