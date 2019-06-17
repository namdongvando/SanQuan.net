<?php
$UploadImges_IM = new UploadImges_IM();
// creter class UploadImges_IM
$Sever = $UploadImges_IM->getSever();
// get url save file
?>
<label class="btn btn-primary" >
    <input type="file" style="display: none;" class="btn btn-primary" name="Hinh" id="Hinh" onchange="doUpload(this, 'UploadImges_mes')" multiple>
    Chọn hình Từ Máy
</label>
<span id="UploadImges_mes" ></span>
<script>
    function doUpload(files, id) {
        files = files.files;
        for (i = 0; i < files.length; i++) {
            uploadFile(files[i], id);
        }
        CapNhat();
        return false;
    }
    function uploadFile(file) {
        var http = new XMLHttpRequest();
        var data = new FormData();
        data.append('filename', file.name);
        //        add $_POST["filename"]
        data.append('UploadImges_Hinh', file);
        //        add $_FILES["UploadImges_Hinh"]
        http.open('POST', '<?php echo $Sever ?>', true);
        http.send(data);
        http.onreadystatechange = function (e) {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("UploadImges_mes").innerHTML = this.responseText;
            }
        }
    }
</script>
