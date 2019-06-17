<?php

    function minify_output($buffer) {
    $search = array(
        '/\>[^\S ]+/s',
        '/[^\S ]+\</s',
        '/(\s)+/s'
    );
    $replace = array(
        '>',
        '<',
        '\\1'
    );

    if (preg_match("/\<html/i", $buffer) == 1 && preg_match("/\<\/html\>/i", $buffer) == 1) {
        $buffer = preg_replace($search, $replace, $buffer);
    }
    return $buffer;
}

$url = $_SERVER['REQUEST_URI'];
session_start();
ob_start('minify_output');
include 'config.php';
$_SESSION[KhachHang] = isset($_SESSION[KhachHang]) ? $_SESSION[KhachHang] : null;
$Model_Option = new Model_Option();
$_SESSION["TinhThanh"] = isset($_SESSION["TinhThanh"]) ? $_SESSION["TinhThanh"] : 32;
$_SESSION["TenDanhMucKhongDau"] = isset($_SESSION["TenDanhMucKhongDau"]) ? $_SESSION["TenDanhMucKhongDau"] : $Model_Option->DanhMucMacDinh();
$_SESSION[KhachHang] = isset($_SESSION[KhachHang]) ? $_SESSION[KhachHang] : FALSE;
$Application = new Application($url);
$cnameV = $Application->getController();
$cname = "Controller_" . $Application->getController();
$action = $Application->getAction();
if ($Application->is_mobile()) {
    Model_ViewTheme::set_viewthene('mobie');
} else {
    Model_ViewTheme::set_viewthene('home');
}

if (class_exists($cname, TRUE)) {
    if (method_exists($cname, $action)) {
        $c = new $cname();
        $c->$action();
    } else {
        $Application->setParam($action);
        $Application->getParam();
        $Application->setAction("index");
        $Application->getAction();
        $c = new $cname();
        $c->index();
    }
} else {
    $Application->setController("router");
//    controler mặc định lấy 
    if ($Application->PTURL($url) == FALSE) {
        header("Location: " . BASE_DIR);
    } else {
        $action = $Application->PTURL($url);
        $C = new Controller_router();
        $Application->setAction($action);
        $C->$action($url);
    }
//    echo $Application->getController();
}
$str = ob_get_clean();
$DSOption = $Model_Option->DSOption();
foreach ($DSOption as $option) {
    $_Option = new Model_Option($option);
    $str = str_replace("{{$_Option->MaOption}}", $_Option->GiaTri, $str);
}
echo $str;
//    $Application->setParam($cnameV);
//    $Application->getParam();
//    $cname = "Controller_index";
//    $c = new $cname();
//    $c->index();
?>
