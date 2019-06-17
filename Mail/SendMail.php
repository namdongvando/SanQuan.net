<?php

require_once 'PHPMailerAutoload.php';
require_once 'class.phpmailer.php';
require_once 'class.pop3.php';
require_once 'class.smtp.php';

class Mail_SendMail {

    function __construct($TenNguoiGui, $MailNhan, $MailGui, $Password, $TieuDe, $NoiDung) {
        $tennguoigui = $TenNguoiGui;
        $to_email = trim(strip_tags($MailNhan));
        $from_email = $MailGui;
        $mail = new PHPMailer();
        $mail->isSMTP(); //Tell PHPMailer to use SMTP
        $mail->SMTPDebug = 2; //0=off,1=client messages,2=client and server messages
        $mail->Debugoutput = 'html';
        $mail->CharSet = 'UTF-8';
        $mail->ContentType = 'text/html; charset=utf-8';
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465;  //25,465 or 587	
        $mail->SMTPSecure = 'ssl';
        $mail->SMTPAuth = true;
        $mail->Username = $MailGui;
        $mail->Password = $Password;
        $mail->setFrom($from_email, $TenNguoiGui);
        $mail->addAddress($to_email);
        $mail->Subject = $TieuDe;
        $mail->msgHTML($NoiDung);
        $mail->send();
//        if (!$mail->send()) {
//            return FALSE;
//        } else {
//            return TRUE;
//        }
    }

    function SendMail() {
        $tennguoigui = $NoiDungMail['NguoiGui'];
        $to_email = trim(strip_tags($NoiDungMail['ToMail']));
        $from_email = $NoiDungMail['FromMail'];
        $tieude = $NoiDungMail['TieuDe'];
        $noidung = $NoiDungMail['NoiDung'];
        $username = $NoiDungMail['FromMail']; // Tài khoản gmail dùng để gửi thư
        $password = $NoiDungMail['PassWord']; // mật khẩu của tài khoản gửi mail
        $mail = new PHPMailer();
        $mail->isSMTP(); //Tell PHPMailer to use SMTP
        $mail->SMTPDebug = 2; //0=off,1=client messages,2=client and server messages
        $mail->Debugoutput = 'html';
        $mail->CharSet = 'UTF-8';
        $mail->ContentType = 'text/html; charset=utf-8';
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465;  //25,465 or 587	
        $mail->SMTPSecure = 'ssl';
        $mail->SMTPAuth = true;
        $mail->Username = $username;
        $mail->Password = $password;
        $mail->setFrom($from_email, $tennguoigui);
        $mail->addAddress($to_email);
        $mail->Subject = $tieude;
        $mail->msgHTML($noidung);
        if (!$mail->send()) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

}

?>