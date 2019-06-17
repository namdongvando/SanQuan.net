<?php

class Controller_controller extends Application {

    function __construct() {
        
    }

    function index() {
        if (isset($_POST['createController'])) {
            $this->createFileSystem($_POST['nameController']);
        }
        $this->createFormModel("Model_SanPham");

        $this->View("");
    }

    function createformEdit($nameClassModel) {
        $className = new $nameClassModel();
        $str = "";
        foreach ($className as $k => $v) {


            $str .= <<<INPUT
                        <tr>
                <td>
                    {$k}
                </td>
                <td>
                    <input name="$k" class="btn btn-success" type="text" value="<?php echo \$_{$nameClassModel}->{$k} ?>"  >
                </td>
            </tr>
INPUT;
        }
        $stringData = '<table>';
        $stringData .= $str;
        $stringData .= '</table>';
        return $stringData;
    }

    function createFormModel($Model) {
        if (!is_dir("View/FormModel/")) {
            mkdir("View/FormModel/", 0777);
        }
        if (!is_dir("View/FormModel/" . $Model)) {
            mkdir("View/FormModel/" . $Model, 0777);
        }
        $txt = $this->createformEdit($Model);
        $myfile = fopen("View/FormModel/" . $Model . "/edit.phtml", "w") or die("Unable to open file!");
        fwrite($myfile, $txt);
        fclose($myfile);
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
        if (is_file("Controller/{$nameController}.php")) {
            return;
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