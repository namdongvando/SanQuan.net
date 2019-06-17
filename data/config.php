<?php
define("DEFAULT_CONTROLLER", "index");
define("DEFAULT_ACTION", "index");
define("BASE_URL", "http://sangshop.dev:8080/");
define("BASE_DIR", "/");
define("GioHangPGV", "GioHangPGV");
define("KhachHang", "PGV_KhachHang");
define("CapChaPGV", "PGV_CapCha");
define("NgonNgu", "NgonNgu");
define("EmailSystem", "ipsvn.com@gmail.com");
define("EmailToSystem", "namdong92@gmail.com");
define("Password", "@NguyenVanDo1");
define("QuanTri", "QuanTri_PGV");
define("table_fix", "sangnhanh_");
$_SESSION['TenHienThi'] = 0;
global $INI;
//
//Database:	sangnhan_24h
//Host:	localhost
//Username:	sangnhan_24h
//Password:	sangnhanh@123

$INI['host'] = "localhost";
$INI['username'] = "atmcoinn_admin";
$INI['password'] = "132077621442";
$INI['DBname'] = "atmcoinn_admin";

function __autoload($class) {
    $class = str_replace("_", "/", $class);
    if (file_exists($class . ".php")) {
        include_once $class . ".php";
    }
}

function bodautv($str) {
    if (!$str)
        return false;
    $str = str_replace(array(',', '<', '>', '&', '{', '}', "[", "]", '*', '?', '/', '+', '@', '%', '"'), array(' '), $str);
    $str = str_replace(array(',', '<', '>', '&', '{', '}', "[", "]", '*', '?', '/', '+', '@', '%', '"'), array(' '), $str);
    $str = str_replace(array("'"), array(' '), $str);
    while (strpos($str, "  ") > 0) {
        $str = str_replace("  ", " ", $str);
    }
    $unicode = array(
        'a' => 'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',
        'A' => 'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
        'd' => 'đ',
        'D' => 'Đ',
        'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
        'E' => 'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
        'i' => 'í|ì|ỉ|ĩ|ị',
        'I' => 'Í|Ì|Ỉ|Ĩ|Ị',
        'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
        'O' => 'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
        'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
        'U' => 'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
        'y' => 'ý|ỳ|ỷ|ỹ|ỵ',
        'Y' => 'Ý|Ỳ|Ỷ|Ỹ|Ỵ'
    );
    foreach ($unicode as $khongdau => $codau) {
        $str = preg_replace("/($codau)/i", $khongdau, $str);
    }
    $str = strtolower($str);
    $str = trim($str);
    $str = preg_replace('/[^a-zA-Z0-9\ ]/', '', $str);
    $str = str_replace("  ", " ", $str);
    $str = str_replace(" ", "-", $str);
    return $str;
}
?>

