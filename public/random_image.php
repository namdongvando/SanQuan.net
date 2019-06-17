<?php 
session_start();
create_image(); 
exit(); 
function create_image() 
{ 
    $md5_hash = md5(rand(0,999)); 
    $security_code = substr($md5_hash, 15, 5); 
    $_SESSION["CapChaPGV"] = $security_code;
    $width = 100; 
    $height = 40;  
    $image = ImageCreate($width, $height);  
    $white = ImageColorAllocate($image, 255, 255, 255); 
    $black = ImageColorAllocate($image, 26, 172, 231); 
    ImageFill($image, 0, 0, $black); 
    ImageString($image, 30, 10, 10, $security_code, $white); 
    header("Content-Type: image/jpeg"); 
    ImageJpeg($image); 
    ImageDestroy($image); 
} 
?>