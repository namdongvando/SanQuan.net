<div id="alertLoiNhan" style="display: none;" class="container  alert alert-success" >
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <div id="NoiDungThongBao" >Lời nhắn đã ghi nhận</div>
</div>
<section class="no-print" >
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <h3><span class="tieude color_web">Liên hệ</span></h3>
                <div class="row" >
                    <ul class="nav nav-tabs col-lg-12 col-md-12" role="tablist" style="border: none;padding-right: 0px;" >
                        <li role="presentation" class="col-lg-6 col-md-6 col-xs-6 col-sm-6 active">
                            <a class="text-center title-hanoi " style="white-space: nowrap" data-toggle="tab" href="#hochiminh">Hồ Chí Minh</a>
                        </li>
                        <li role="presentation" class="col-lg-6 col-md-6 col-xs-6 col-sm-6" >
                            <a class="text-center title-hcm "  data-toggle="tab" href="#hanoi">Hà Nội</a>
                        </li>
                    </ul>
                    <div class="clearfix" ></div>
                    <div class="tab-content">
                        <div id="hochiminh" class="tab-pane fade in active text">
                            <div>
                                <div class="col-md-2 col-lg-2 hidden-sm hidden-xs col-xs-2 text-center"><i class="fa fa-home fa-border" style="font-size:35px;color: #FF6E00;width: 55px;"></i></div>
                                <div class="col-md-10 col-lg-10">
                                    <h3 class="margin0  title" style="font-size: 16px;" >{HCMIPS}</h3>
                                    <p class="noidung" style="text-transform: none;font-size: 16px;" >{DiaChiHCMIPS}</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div>
                                <div class="col-md-2 col-lg-2 hidden-sm hidden-xs  text-center"><i class="fa fa-envelope-o fa-border" style="font-size:35px;color: #FF6E00;width: 55px;"></i></div>
                                <div class="col-md-10 col-lg-10">
                                    <h3 class="margin0 title" style="font-size: 16px;" >Email</h3>
                                    <p class="Email" style="font-size: 16px;text-transform: none;" >{EmailHoTro}</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div>
                                <div class="col-md-2 col-lg-2 hidden-sm hidden-xs col-xs-2 text-center"><i class="fa fa-mobile fa-border" style="font-size:35px;color: #FF6E00;width: 55px;"></i></div>
                                <div class="col-md-10 col-lg-10">
                                    <h3 class="margin0 title" style="font-size: 16px" >Điện thoại</h3>
                                    <p class="noidung" style="font-size: 16px;text-transform: none;" >{SDTHCM}</p>
                                </div>
                            </div>

                        </div>
                        <div id="hanoi" class="tab-pane fade">
                            <div>
                                <div class="col-md-2 col-lg-2 hidden-sm hidden-xs col-xs-2 text-center"><i class="fa fa-home fa-border" style="font-size:35px;color: #FF6E00;width: 55px;"></i></div>
                                <div class="col-md-10 col-lg-10">
                                    <h3 class="margin0 title" style="font-size: 16px" >{HNIPS}</h3>
                                    <p class="noidung" style="font-size: 16px;text-transform: none;" >{DiaChiHNIPS}</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div>
                                <div class="col-md-2 col-lg-2 hidden-sm hidden-xs col-xs-2 text-center"><i class="fa fa-envelope-o fa-border" style="font-size:35px;color: #FF6E00;width: 55px;"></i></div>
                                <div class="col-md-10 col-lg-10">
                                    <h3 class="margin0 title" style="font-size: 16px" >Email</h3>
                                    <p class="Email" style="font-size: 16px;text-transform: none;" >{EmailHoTro}</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div>
                                <div class="col-md-2 col-lg-2 hidden-sm hidden-xs col-xs-2 text-center"><i class="fa fa-mobile fa-border" style="font-size:35px;color: #FF6E00;width: 55px;"></i></div>
                                <div class="col-md-10 col-lg-10">
                                    <h3 class="margin0 title" style="font-size: 16px" >Điện thoại</h3>
                                    <p class="noidung" style="font-size: 16px;text-transform: none;" >
                                        {SDTHaNoi}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <h3><span class="tieude color_web">Để lại lời nhắn</span></h3>
                <div class="row" >
                    <form action="<?php echo BASE_DIR ?>sulymail/loinhan/" method="POST" onsubmit="return LoiNhan();" >
                        <div class="col-xs-12 col-sm-6 col-lg-6 col-md-6 ">
                            <div class="form-group">
                                <input type="text" required="required" class="form-control" name="inputname" id="inputname" aria-describedby="nameHelp"  placeholder="* Họ tên">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-6 col-md-6 ">
                            <div class="form-group">
                                <input type="text" required="required" class="form-control" name="inputphone" id="inputphone" placeholder="* Số điện thoại">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-6 col-md-6 ">
                            <div class="form-group">
                                <input type="email" required="required" class="form-control" name="inputemail"s id="inputemail" aria-describedby="emailHelp" placeholder="* Email">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-6 col-md-6 ">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required"  name="inputtieude" id="inputtieude" placeholder="* Tiêu đề">
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <textarea class="form-control" rows="5" id="noidung" required="required"  placeholder="* Lời nhắn"></textarea>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <p class="noidung" style="font-size: 16px;text-transform: none;" >Thông tin bắt đầu bằng (<i style="color: red;" >*</i>) là bắt buộc</p> 
                                <div class="clearfix"></div>
                                <button class="btn btn-warning" type="submit" style="background-color: #ff6733" >Gửi đi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-585b8a48c85b2adf"></script>-->

<script>
    function LoiNhan() {
        if ($('#inputemail').val() != "") {
            $.ajax({
                url: "<?php echo BASE_URL ?>sulymail/loinhan/",
                method: "POST",
                data: {
                    Email: $('#inputemail').val(),
                    HoTen: $('#inputname').val(),
                    SDT: $('#inputphone').val(),
                    TieuDE: $('#inputtieude').val(),
                    NoiDung: $('#noidung').val(),
                },
                success: function (result) {
//                    $("#alertLoiNhan").show(10).html(result);
                    $("#alertLoiNhan").show(10);
                    $("#NoiDungThongBao").html('Lời nhắn của bạn thành công');
                }});
            $("#alertLoiNhan").show(10);
            $('#inputemail').val("");
            $('#inputname').val("");
            $('#inputphone').val("");
            $('#inputtieude').val("");
            $('#noidung').val("");
        }
        return false;
    }
</script>

<div class="container-fluid map no-print">
    <div class="row text-center">
        <!--<div class="mask"></div>-->
        <a target="_blank"  href="https://www.google.com/maps/dir/10.7461616,106.7018822/10.7408586,106.6948749/@10.743307,106.6981431,16.17z/data=!4m2!4m1!3e0" >
            <h3 style="font-size: 18px;color: #FF6E00;line-height: 50px" >Xem IPS trên bản đồ</h3>
        </a>
    </div>
</div>
<footer class="text-left" >
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12 no-print">
                <p>Copyright © <a href="http://nguyenvando.net">ips</a>. All rights reserved.</p>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12 no-print">
                <a style="padding: 10px" href="#" >
                    <i style="font-size:16px;color: #3b5998" class="fa fa-facebook" ></i>
                </a>
                <a style="padding: 10px" href="#" >
                    <i style="font-size:16px;color: #33ccff" class="fa fa-twitter"></i>
                </a>
                <a style="padding: 10px" href="#" >
                    <i style="color: red;font-size: 16px;" class="fa fa-google-plus"></i>
                </a>
                <a style="padding: 10px" href="#" >
                    <i style="color: #FF6E00;font-size: 16px;" class="fa fa-pinterest"></i>
                </a>
                <a style="padding: 10px" href="#" >
                    <i style="color: #1395DD;font-size: 16px;" class="fa fa-skype"></i>
                </a>
            </div>
        </div>
    </div>
</footer>

<div style="position: fixed;top: 55px;overflow: hidden;display: table;right: 0px;float: right;cursor: pointer ;z-index: 200"  onclick="$(document).ready(function () {
            $('.giolamviec').toggle('right')
        });" id="giolamviec_title"  >
    <div class="clearfix" ></div>
    <span class="giolamviec_title hidden-sm hidden-xs"  style="color:#fff;left: 0px;list-style-type: none;border: 1px solid #FF6E00;padding: 12px;background-color: #ff6733;"  >
        <i class="fa fa-clock-o" ></i>
    </span>
    <div style="background-color: #ff6733;border-top:3px solid #fff;text-align: center; "  >
        <p style="color: #fff" >Giờ</p>
        <p style="color: #fff" >Làm </p>
        <p style="color: #fff" >Việc</p>
    </div>
</div>
<div class="hidden-xs hidden-sm no-print"  style="width: 241px;position: fixed;top: 167px;display: block;right: 0px;z-index: 0;" >
<!--    <div style="overflow: hidden;display: table;right: 0px;float: right;cursor: pointer ;"  onclick="$(document).ready(function () {
                $('.giolamviec').toggle('left')
            });" id="giolamviec_title"  >
        <div class="clearfix" ></div>
        <span class="giolamviec_title hidden-sm hidden-xs"  style="color:#fff;left: 0px;list-style-type: none;border: 1px solid #FF6E00;padding: 12px;background-color: #FF6E00;"  >
            <i class="fa fa-clock-o" ></i>
        </span>
        <div style="background-color: #FF6E00;border-top:3px solid #fff;text-align: center; "  >
            <p style="color: #fff" >Giờ</p>
            <p style="color: #fff" >Làm </p>
            <p style="color: #fff" >Việc</p>
        </div>
    </div>-->
    <ul class="list-group giolamviec" style="position: relative;display: none;" >
        <li class="list-group-item text-center" style="padding: 5px;" >
            <a style="padding: 10px" href="#" >
                <i style="font-size:16px;color: #3b5998" class="fa fa-facebook" ></i>
            </a>
            <a style="padding: 10px" href="#" >
                <i style="font-size:16px;color: #33ccff" class="fa fa-twitter"></i>
            </a>
            <a style="padding: 10px" href="#" >
                <i style="color: red;font-size: 16px;" class="fa fa-google-plus"></i>
            </a>
            <a style="padding: 10px" href="#" >
                <i style="color: #FF6E00;font-size: 16px;" class="fa fa-pinterest"></i>
            </a>
            <a style="padding: 10px" href="#" >
                <i style="color: #1395DD;font-size: 16px;" class="fa fa-skype"></i>
            </a>
        </li>
        <li class="list-group-item"  >
            <h3 class="color_web" style="font-size: 16px;margin: 0px;margin-bottom: 10px;text-transform: uppercase" >
                <img src="{UrlIcon}images/calendar-icon.png" style="height: 20px;margin-top: -5px" >
                Giờ làm việc:
            </h3>
            <p style="color: #FF6E00;text-transform: none;font-size: 16px !important;white-space: pre"  ><span style="color: #707070" >Thứ 2 - 6  :</span>  8:00 am – 5:00 pm</p>
            <p style="color: #FF6E00;text-transform: none;font-size: 16px !important;white-space: pre"  ><span style="color: #707070" >Thứ 7       :</span>  8:00 am – 12:00 pm</p>
            <p style="color: #FF6E00;text-transform: none;font-size: 16px !important;white-space: pre"  ><span style="color: #707070" >Chủ nhật & Lễ :</span>  Nghỉ</p>
        </li>
        <li class="list-group-item" >
            <h3 class="color_web" style="font-size: 16px;margin: 0px;margin-bottom: 10px;text-transform: uppercase" >
                <img src="{UrlIcon}images/phone.png" style="height: 20px;" >
                Điện thoại hỗ trợ:
            </h3>
            <div class="" >
                <p style="color: #FF6E00;font-size: 16px; " >
                    <i class="fa fa-phone" >
                    </i>
                    {SDT1}
                </p>
                <p style="color: #FF6E00;font-size: 16px; " >
                    <i class="fa fa-phone" >
                    </i>
                    {SDT2}
                </p>
                <p style="color: #FF6E00;font-size: 16px; " >
                    <i class="fa fa-phone" >
                    </i>
                    {SDT3}
                </p>
            </div>
        </li>
        <li class="list-group-item" >
            <h3 class="color_web" style="font-size: 16px;margin: 0px;margin-bottom: 10px;text-transform: uppercase" >
                <i class="fa fa-envelope-o" style="color: #FF6E00 !important;" ></i>
                Email:
            </h3>
            <p class="Email" style="color: #FF6E00;font-size: 16px;text-transform: lowercase;" >
                {EmailHoTro}
            </p>
        </li>
    </ul>
</div>

<a id="link" class="text-center" >
    <b class="fa fa-angle-double-up fa-2x" ></b>
    <br>
    <img style="height: 30px;" src="{UrlIcon}images/topicon.png" >
</a>
<div style="bottom: 0px;right: 0px;position: fixed;width: 240px;" class="no-print" >
    <button type="button" class="btn " style="background-color: #ff6733;color: #fff;" data-toggle="collapse" data-target="#demo">Hỗ Trợ Khách Hàng </button>
    <div id="demo" class="collapse" >
        <div class="fb-page" data-href="https://www.facebook.com/IPSCOMMUNITY/" data-tabs="messages" data-height="300px" data-width="230px" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false"><blockquote cite="https://www.facebook.com/IPSCOMMUNITY/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/IPSCOMMUNITY/">IPS</a></blockquote></div>
    </div>
</div>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=137325053404470";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>