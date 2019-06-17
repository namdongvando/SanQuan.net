<?php

$str = ob_get_clean();
$Model_Option = new Model_Option();
$DSOption = $Model_Option->DSOption();
foreach ($DSOption as $option) {
    $_Option = new Model_Option($option);
    $str = str_replace("{{$_Option->MaOption}}", $_Option->GiaTri, $str);
}
echo $str;
?>