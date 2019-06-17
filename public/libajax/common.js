function ajaxclick() {
    $(".ajaxclick").click(function () {
        var URLajax = $(this).data("url");
        var functioncallback = $(this).data("function");
        $.ajax({
            method: "POST",
            url: URLajax,
        }).done(function (msg) {
            if (typeof window[functioncallback] === "function") {
                window[functioncallback](msg);
            }
            ajaxclick();
        });
    });
}
function ajaxscroll(element) {
    if (element) {
        var URLajax = $(element).data("url");
        var functioncallback = $(element).data("function");
        $.ajax({
            method: "POST",
            url: URLajax,
        }).done(function (msg) {
            if (typeof window[functioncallback] === "function") {
                window[functioncallback](msg);
            }
        });
    }
}
$(document).ready(function () {
    $(".ajaxclick").click(function () {
        var URLajax = $(this).data("url");
        var functioncallback = $(this).data("function");
        $.ajax({
            method: "POST",
            url: URLajax,
        }).done(function (msg) {
            if (typeof window[functioncallback] === "function") {
                window[functioncallback](msg);
            }
            ajaxclick();
        });
    });
});