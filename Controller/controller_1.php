<?php

class Controller_controller extends Application {

    function __construct() {
        
    }

    function index() {
        if (isset($_POST['Taocontroller'])) {
            $this->createFileSystem("controller");
        }
        $this->View("");
    }

    function createFileSystem($nameController) {
        if (!is_dir("View/" . $nameController)) {
            mkdir("View/" . $nameController, 0777);
        }
        $myfile = fopen("View/{$nameController}/index.phtml", "w") or die("Unable to open file!");
        if (!is_dir("View/" . $nameController . "/layout/")) {
            mkdir("View/" . $nameController . "/layout/", 0777);
        }
        $myfile = fopen("View/{$nameController}/layout/{$nameController}_layout.phtml", "w") or die("Unable to open file!");
        if(is_file("Controller/{$nameController}.php")){
            return ;
        }
        $myfile = fopen("Controller/{$nameController}.php", "w+") or die("Unable to open file!");
        $nameController = "test";
        $txt = <<<HTML
<?php
class Controller_{$nameController} extends Application {
    function __construct() {
    }
    function index() {
    }
}                
?>
HTML;
        fwrite($myfile, $txt);
        fclose($myfile);
    }

}

?>