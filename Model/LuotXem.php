<?php

class Model_LuotXem extends Model_Adapter {

    function __construct() {
        $_SESSION['LuotXem'] = isset($_SESSION['LuotXem']) ? $_SESSION['LuotXem'] : FALSE;
        $this->ThemLuotXem();
        if (!$_SESSION['LuotXem']) {
//            them lươt xem
            $_SESSION['LuotXem'] = TRUE;
        }
    }

    function ThemLuotXem() {
        $ThongTin = $this->LuotXem();
        $ThongTin[2] = rand(500, 800);
        $ThongTin[0] = intval($ThongTin[0]) + ($ThongTin[2] - 500);
        $ThongTin[1] = intval($ThongTin[1]) + ($ThongTin[2] - 500);
        $data = "";
        foreach ($ThongTin as $TT) {
            if ($TT)
                $data .= $TT . " \n";
        }

        $file = fopen("public/luotxem.txt", "w+") or die("Unable to open file!");
        fwrite($file, "");
        fwrite($file, $data);
        fclose($file);
    }

    function LuotXem() {
        $file = fopen("public/luotxem.txt", "r") or die("Unable to open file!");
        while (!feof($file)) {
            $ThongKeLX[] = fgets($file);
        }
        fclose($file);
        return $ThongKeLX;
    }

}
?>



