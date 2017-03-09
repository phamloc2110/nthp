<?php
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
require("../_cnF/_star_cn_F.php");


if(isset($_POST["mess"])){
		$username = $_SESSION['ten'];
		$userid = $_SESSION['idfb'];
		$message = htmlspecialchars($_POST["mess"]);
		$user_ip = $_SERVER['REMOTE_ADDR'];
		$time = date('H:i:s d-m-Y');
$xxx=array('dm','đm','đéo','Dm','Đm','dcm','đcm','vl','fuck','dit','djt','địt','lồn','loz','vc','cc','cặc','djt','http://','.com','.net','.tk','.xyz','www','.info','.org','.me','.top','.ml','.ga','.vn','.lol','.pro','.online','.club','.asia');
foreach($xxx as $xn=> $mades){
if(ereg($mades,strtolower($message))){
$madesu=true;
}
}

if($madesu){
print '<script type="text/javascript">toarst("success","Không nói bậy.  Không Quảng Cáo. <br> Địch Mẹ Mày Biến Nhé!.","Lời Nhắn")</script>';
}else{
mysql_query('INSERT INTO shout_box(user,user_id,message,ip_address,date_time) VALUES("'.$username.'","'.$userid.'","'.$message.'","'.$user_ip.'","'.$time.'")');
echo '<script type="text/javascript">toarst("success","Gửi Tin Nhắn Thành Công.","Lời Nhắn")</script>';
}
}

$req = mysql_query("SELECT * FROM `shout_box` ORDER BY `id` DESC LIMIT 30");
while($res = mysql_fetch_assoc($req)) {           

$res['user'] = str_replace('
Lê Duy Ánh','<font color="red">
Lê Duy Ánh</font><font color="green"> [ ADMIN <i class="fa fa-check-square" aria-hidden="true" tille=" Đã Xác Minh "></i> ]</font>', $res['user']);

$res['message'] = str_replace(':D','<img src="http://www.w3schools.com/tags/smiley.gif" alt="Smiley face" height="20" width="20">', $res['message']);

$res['message'] = str_replace(':3','<img src="http://1hot.vn/bieutuongfb_files/curlylipsemoticon.png" alt="Smiley face" height="16" width="16">', $res['message']);

$res['message'] = str_replace(':V','<img src="http://1hot.vn/bieutuongfb_files/pacmanemoticon.png" alt="Smiley face" height="16" width="16">', $res['message']);

$res['message'] = str_replace(':v','<img src="http://1hot.vn/bieutuongfb_files/pacmanemoticon.png" alt="Smiley face" height="16" width="16">', $res['message']);

$res['message'] = str_replace(':P','<img src="http://4.bp.blogspot.com/-bTF2qiAqvi0/UZCuIO7xbOI/AAAAAAAADnI/GVx0hhhmM40/s1600/facebook-tongue-out-emoticon.png" alt="Smiley face" height="16" width="16">', $res['message']);

$res['message'] = str_replace(':p','<img src="http://4.bp.blogspot.com/-bTF2qiAqvi0/UZCuIO7xbOI/AAAAAAAADnI/GVx0hhhmM40/s1600/facebook-tongue-out-emoticon.png" alt="Smiley face" height="16" width="16">', $res['message']);

$res['message'] = str_replace('(y)','<img src="http://3.bp.blogspot.com/--h4eLCX9klE/UZHjEBYfY2I/AAAAAAAADoo/W5bcUQjtXls/s1600/thumb-up-facebook-emoticon-like-symbol.png" alt="Smiley face" height="16" width="16">', $res['message']);

$res['message'] = str_replace('(^^^)','<img src="http://2.bp.blogspot.com/-znxWwMOlNCQ/Tv9DCSAbEDI/AAAAAAAAAjw/fqnxvczUEWw/s400/shark%2Bemoticon.gif" alt="Smiley face" height="16" width="16">', $res['message']);

$res['message'] = str_replace('*present*','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f381.svg">', $res['message']);

$res['message'] = str_replace(':poop:','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f4a9.svg">', $res['message']);

$res['message'] = str_replace(':v','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f600.svg">', $res['message']);

$res['message'] = str_replace('<3','<img height="23" width="23" src="https://cdn1.iconfinder.com/data/icons/DarkGlass_Reworked/128x128/apps/package_favourite.png">', $res['message']);

$res['message'] = str_replace('^_^','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f606.svg">', $res['message']);

$res['message'] = str_replace(':)','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f642.svg">', $res['message']);

$res['message'] = str_replace(':(','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f641.svg">', $res['message']);

$res['message'] = str_replace(':p','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f61d.svg">', $res['message']);

$res['message'] = str_replace(':D','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f601.svg">', $res['message']);

$res['message'] = str_replace(';)','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f609.svg">', $res['message']);

$res['message'] = str_replace('B-)','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f913.svg">', $res['message']);

$res['message'] = str_replace('8-|','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f60e.svg">', $res['message']);

$res['message'] = str_replace('x(','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f635.svg">', $res['message']);

$res['message'] = str_replace(':-/','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f60f.svg">', $res['message']);

$res['message'] = str_replace(':*','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f618.svg">', $res['message']);

$res['message'] = str_replace('(y)','<img height="23" width="23" src="https://lh3.ggpht.com/--h4eLCX9klE/UZHjEBYfY2I/AAAAAAAADoo/W5bcUQjtXls/s1600/thumb-up-facebook-symbol-like-symbol.png">', $res['message']);

$res['message'] = str_replace('(^^^)','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f608.svg">', $res['message']);

$res['message'] = str_replace('*angry*','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f621.svg">', $res['message']);

$res['message'] = str_replace('*inlove*','<img height="23" width="23" src="https://cdn.jsdelivr.net/emojione/assets/png/1f60d.png?v=2.2.4">', $res['message']);

$res['message'] = str_replace('*kiss*','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f61a.svg">', $res['message']);

$res['message'] = str_replace('*poke*','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f61c.svg">', $res['message']);

$res['message'] = str_replace('*fight*','<img height="23" width="23" src="https://cdn.jsdelivr.net/emojione/assets/png/1f4aa.png?v=2.2.4">', $res['message']);

$res['message'] = str_replace('*cry*','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f622.svg">', $res['message']);

$res['message'] = str_replace('*sad*','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f613.svg">', $res['message']);

$res['message'] = str_replace('*oke*','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f44c.svg">', $res['message']);

$res['message'] = str_replace('*clap*','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f44f.svg">', $res['message']);

$res['message'] = str_replace('*lip*','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f444.svg">', $res['message']);

$res['message'] = str_replace('*$*','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f911.svg">', $res['message']);

$res['message'] = str_replace('*cat*','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f63d.svg">', $res['message']);

$res['message'] = str_replace('*wanwan*','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f476.svg">', $res['message']);

$res['message'] = str_replace('*mymy*','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f467.svg">', $res['message']);

$res['message'] = str_replace('*zzz*','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f4a4.svg">', $res['message']);

$res['message'] = str_replace('*alien*','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f47d.svg">', $res['message']);

$res['message'] = str_replace('*lovely*','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f917.svg">', $res['message']);

$res['message'] = str_replace('*tearjoy*','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f602.svg">', $res['message']);

$res['message'] = str_replace('*sleepy*','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f62a.svg">', $res['message']);

$res['message'] = str_replace('*wow*','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f631.svg">', $res['message']);

$res['message'] = str_replace('*sleep*','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f634.svg">', $res['message']);

$res['message'] = str_replace('*thatvong*','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f61e.svg">', $res['message']);

$res['message'] = str_replace('*shutup*','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f910.svg">', $res['message']);

$res['message'] = str_replace('*ngai*','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f633.svg">', $res['message']);

$res['message'] = str_replace('*tatse*','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f60b.svg">', $res['message']);

$res['message'] = str_replace('*fuck*','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f595.svg">', $res['message']);

$res['message'] = str_replace('*ghost*','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f47b.svg">', $res['message']);

$res['message'] = str_replace('*sick*','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f912.svg">', $res['message']);

$res['message'] = str_replace('*check*','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/2705.svg">', $res['message']);

$res['message'] = str_replace('*present*','<img height="23" width="23" src="https://emojione.com/wp-content/uploads/assets/emojis/1f381.svg">', $res['message']);

echo'<div class="shout_msg">
<div class="username"> <img src="../img/online.png" style="padding: 3px 6px 3px 1px;"> <b><a href="https://www.facebook.com/profile.php?id='.$res['user_id'].'" target="_blank"><font style="color: #607573;">'.$res['user'].'</font></a></b>  : <font color="black">'.$res['message'].'</font> <font size="1">'.$res['date_time'].' </font></div></div>';


}


?>