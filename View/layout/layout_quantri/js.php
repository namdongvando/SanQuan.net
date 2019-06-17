

<script type="text/javascript">
    var editor = CKEDITOR.replace('NoiDungTomTat', {
        filebrowserImageBrowseUrl: '<?php echo BASE_DIR ?>public/ckfinder/ckfinder.html?Type=Images',
        filebrowserFlashBrowseUrl: '<?php echo BASE_DIR ?>public/ckfinder/ckfinder.html?Type=Flash',
        filebrowserImageUploadUrl: '<?php echo BASE_DIR ?>public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl: '<?php echo BASE_DIR ?>public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
        height: '150px',
        toolbar: [
            {name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Image', 'Format', 'RemoveFormat']},
        ]
    });</script>
<script type="text/javascript">
    var editor = CKEDITOR.replace('NoiDungChinh', {
        filebrowserImageBrowseUrl: '<?php echo BASE_DIR ?>public/ckfinder/ckfinder.html?Type=Images',
        filebrowserFlashBrowseUrl: '<?php echo BASE_DIR ?>public/ckfinder/ckfinder.html?Type=Flash',
        filebrowserImageUploadUrl: '<?php echo BASE_DIR ?>public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl: '<?php echo BASE_DIR ?>public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
        height: '400px',
        toolbar: [
            {name: 'document', items: ['Source', '-', 'Templates']},
            {name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo']},
            {name: 'editing', items: ['Find', 'Replace', '-', 'SelectAll', '-', 'SpellChecker', 'Scayt']},
            {name: 'forms', items: ['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton',
                    'HiddenField']},
            '/',
            {name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat']},
            {name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv',
                    '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl']},
            {name: 'links', items: ['Link', 'Unlink', 'Anchor']},
            {name: 'insert', items: ['Image', 'MediaEmbed', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe']},
            '/',
            {name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize']},
            {name: 'colors', items: ['TextColor', 'BGColor']},
            {name: 'tools', items: ['Maximize', 'ShowBlocks', '-', 'About']}
        ]
    });</script>


<script src="<?php echo BASE_DIR ?>public/templateadmin/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo BASE_DIR ?>public/templateadmin/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $(".xoa").click(function () {
            return confirm("Xóa đối tượng này?");
        });
        $(".them").click(function () {
            return confirm("Thêm mới?");
        });
        $(".sua").click(function () {
            return confirm("Cập nhật?");
        });
        $('#datatable').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true
        });

        $("#selecctall").change(function () {
            $(".checkbox1").prop('checked', $(this).prop("checked"));
        });

    });</script>
<script>

    function BrowseServer(startupPath, functionData) {
        var finder = new CKFinder();
        finder.BasePath = '<?php echo BASE_DIR ?>public/'; //Đường path nơi đặt ckfinder
        finder.startupPath = startupPath; //Đường path hiện sẵn cho user chọn file
        finder.selectActionFunction = SetFileField; // hàm sẽ được gọi khi 1 file được chọn
        finder.selectActionData = functionData; //id của text field cần hiện địa chỉ hình
        finder.selectThumbnailActionFunction = ShowThumbnails; //hàm sẽ được gọi khi 1 file thumnail được chọn
        finder.popup();
    }
    function SetFileField(fileUrl, data) {
        document.getElementById(data["selectActionData"]).value = fileUrl;
        var ID = data["selectActionData"];
        hienthumb(fileUrl,ID);
    }
    function ShowThumbnails(fileUrl, data) {
        var sFileName = this.getSelectedFile().name; // this = CKFinderAPI
        
        document.getElementById('thumbnails').innerHTML +=
                '<div class="thumb">' +
                '<img src="' + fileUrl + '" />' +
                '<div class="caption">' +
                '<a href="' + data["fileUrl"] + '" target="_blank">' + sFileName + '</a> (' + data["fileSize"] + 'KB)' +
                '</div>' +
                '</div>';
        document.getElementById('preview').style.display = "";
        return false; // nếu là true thì ckfinder sẽ tự đóng lại khi 1 file thumnail được chọn

    }
    function hienthumb(fileUrl,ID) {
        if (fileUrl != "") {
            $('#HinhQuanCao').attr('src',fileUrl);
            var bien = "<img src='" + fileUrl + "'  height='100'>";
            $('#'+ID).parent().children('label').children('.HinhChon').html(bien);
        }
        ;
    }

</script>
<script src="<?php echo BASE_DIR ?>public/templateadmin/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo BASE_DIR ?>public/templateadmin/plugins/morris/morris.min.js"></script>
<script src="<?php echo BASE_DIR ?>public/templateadmin/dist/js/app.min.js"></script>
<script src="<?php echo BASE_DIR ?>public/templateadmin/dist/js/pages/dashboard.js"></script>
<script src="<?php echo BASE_DIR ?>public/templateadmin/dist/js/demo.js"></script>
<script src="<?php echo BASE_DIR ?>public/templateadmin/cmjs.js" type="text/javascript"></script>
