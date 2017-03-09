<?php
/*
DẠNG APP KO CẦN KEY:
http://newapp.simsimi.com/v1/simsimi/talkset?uid=1&av=6.7.3.1&lc=vn&cc=US&tz=HOABINH&os=a&isFilter=0&message_sentence=text
KEY: ef2ba992-acba-4fe1-95f8-f4bb937e712f
http://api.simsimi.com/request.p?key=ef2ba992-acba-4fe1-95f8-f4bb937e712f&lc=vn&ft=1.0&text=text
*/
function StarSim($noidung){
$c = curl_init("http://api.vina4u.pro/api.php?ngonngu=vn&loctuxau=1&tenbot=Bé Điệu&msg=$noidung");
curl_setopt($c, CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($c, CURLOPT_SSL_VERIFYHOST,false);
curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
$phanhoi = curl_exec($c);
curl_close($c);
if(strpos($phanhoi, '<head><title>400')===false)
$st = 1;
else $phanhoi = 'Hệ Thống Phản Hồi Đang Quá Tải';
return $phanhoi;
} 
function cap( $length ) {
$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$size = strlen( $chars );
for( $i = 0; $i < $length; $i++ ) {
$str .= $chars[ rand( 0, $size - 1 ) ];
 }
return $str;
}
function baove($star){
	$star = trim($star);
	$star = stripslashes($star);
	$star = htmlentities($star, ENT_QUOTES);
	$star = mysql_real_escape_string($star);
	return $star;

}
function LikeAD($id, $token){
$starthien = json_decode(auto('https://graph.facebook.com/'.$id.'/feed?limit=1&access_token='.$token),true);
$sttid = $starthien[data][0][id];
return auto('https://graph.facebook.com/'.$sttid.'/likes?method=post&access_token='.$token);
}
//Hàm Check Thông Tin Cá Nhân
function me($star){
return json_decode(auto('https://graph.facebook.com/me?access_token='.$star),true);
}
//Hàm Check Thông Tin Token
function checktk($thienbk){
return json_decode(auto('https://graph.facebook.com/app/?access_token='.$thienbk), true);
}
//Hàm cURL
function auto($url) {
   $ch = curl_init();
   curl_setopt_array($ch, array(
      CURLOPT_CONNECTTIMEOUT => 5,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_URL            => $url,
      )
   );
   $result = curl_exec($ch);
   curl_close($ch);
   return $result;
}

function thoigian($from, $to = '') {
if (empty($to))
$to = time();
$diff = (int) abs($to - $from);
if ($diff <= 60) {
$since = sprintf('NULL');
} elseif ($diff <= 3600) {
$mins = round($diff / 60);
if ($mins <= 1) {
$mins = 1;
}
/* translators: min=minute */
$since = 0;
} else if (($diff <= 86400) && ($diff > 3600)) {
$hours = round($diff / 3600);
if ($hours <= 1) {
$hours = 1;
}
$since = 0;
} elseif ($diff >= 86400) {
$days = round($diff / 86400);
if ($days <= 1) {
$days = 1;
}
$since =  $days;
}
return $since;
}
function thoigiantinh($from, $to = '') {
if (empty($to))
$to = time();
$diff = (int) abs($to - $from);
if ($diff <= 60) {
$since = sprintf('NULL');
} elseif ($diff <= 3600) {
$mins = round($diff / 60);
if ($mins <= 1) {
$mins = 1;
}
/* translators: min=minute */
$since = sprintf('%s phút', $mins);
} else if (($diff <= 86400) && ($diff > 3600)) {
$hours = round($diff / 3600);
if ($hours <= 1) {
$hours = 1;
}
$since = sprintf('%s giờ', $hours);
} elseif ($diff >= 86400) {
$days = round($diff / 86400);
if ($days <= 1) {
$days = 1;
}
$since = sprintf('%s ngày', $days);
}
return $since;
}


function Mobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
?>