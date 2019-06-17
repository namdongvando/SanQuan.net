
function ajax1thamso(obj) {
    var DuongDan = $(obj).attr("duongdan");
    var id = $(obj).attr("dataset");
    var DuLieu = $(obj).val();
    $.ajax({
        url: DuongDan,
        type: "post",
        data: {postname: DuLieu},
        success: function (response) {
            if (response == 0) {
                $(id).val("fail");
                $(id).html("fail");
                $(id).css({"color": "red"});
                return;
            }
            if (response == 1) {
                $(id).val("ok");
                $(id).html("ok");
                $(id).css({"color": "#4caf50"});
                return;
            }
            $(id).val(response);
            $(id).html(response);

        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });
}
function ajaxCheck(obj) {
    var DuongDan = $(obj).attr("duongdan");
    var DuLieu = $(obj).val();
    $.ajax({
        url: DuongDan,
        type: "post",
        data: {postname: DuLieu},
        success: function (response) {
            $(obj).val(response);
            $(obj).html(response);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });
}

function ajax(DuongDan) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
        }
    };
    xmlhttp.open("GET", DuongDan, true);
    xmlhttp.send();
}
