<?php
ob_start();
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh"); 
require("./_cnF/_star_cn_F.php");
require("./_cnF/_star_funC.php");
if (!$_SESSION['idfb']) {
 	header("Location: index.html");
 }
$getTaikhoan = @mysql_query("SELECT * FROM TAIKHOAN WHERE idfb = $_SESSION[idfb]");
$vnds = @mysql_fetch_array($getTaikhoan, MYSQL_ASSOC);
$vnd = $vnds['vnd'];
require('./incfiles/head.php');
$gioihan = 300; //5 phút
$hientai = time();
$res = @mysql_query("SELECT * FROM BLOCK WHERE idfb = $_SESSION[idfb]");
$block = @mysql_fetch_array($res, MYSQL_ASSOC);
$dacho = $hientai - $block['thoigian'];
$conlai = $gioihan - $dacho;
if($dacho < $gioihan)
{
	$block = 0;
}
else
{
	@mysql_query(" DELETE FROM BLOCK WHERE idfb = $_SESSION[idfb]");
	$block = 1;
}
?>
		<?php
		if (!$_GET){
			include("./tools/MENU.php");
		}else{
		if (($_GET['act'] == "Tools" || $_GET['act'] == "Auto" || $_GET['act'] == "Bot" || $_GET['act']  == "Boom" || $_GET['act'] == "Vip" || $_GET['act']  == "Sim") && ($_GET['id'] == "tralike" || $_GET['id'] == "exlike" || $_GET['id'] == "exlove" ||    $_GET['id'] == "like" || $_GET['id'] == "share" || $_GET['id'] == "cmt" || $_GET['id'] == "friend" || $_GET['id'] == "sub" || $_GET['id'] == "cmts" || $_GET['id'] == "camxuc" || $_GET['id'] == "rate" ||  $_GET['id'] == "muavip" || $_GET['id'] == "naptien" || $_GET['id'] == "vip" || $_GET['id'] == "feed" || $_GET['id'] == "status" || $_GET['id'] == "tokenpage" || $_GET['id'] == "postgroup" || $_GET['id'] == "postpage" || $_GET['id'] == "postfriend" || $_GET['id'] == "confirm" || $_GET['id'] == "xoastt" || $_GET['id'] == "inbox" || $_GET['id'] == "sendinbox"  || $_GET['id'] == "poke")) 
			{
				if ($_GET['act'] && $_GET['id']) 
				{
					include("./tools/".$_GET['act']."/".$_GET['id'].".php");
				}
			}
			else
			{
				echo "ERROR";
			}
		}
		?>


<?php
require('./incfiles/footer.php');
?>