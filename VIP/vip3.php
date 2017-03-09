<?php 
set_time_limit(0); 
require("../_cnF/_star_cn_F.php");
require("../_cnF/_star_funC.php"); 
$resid = @mysql_query("SELECT * FROM `VIP` WHERE `level` = 3 ORDER BY RAND() LIMIT 0,2");
$restk = @mysql_query("SELECT * FROM tokenvip ORDER BY RAND() LIMIT 0,10");
while ($vipid = @mysql_fetch_array($resid)){
	$idfb = $vipid['idfb'];
	while ($viptk = @mysql_fetch_array($restk)) {
		$token = $viptk['token'];
// xóa token của vip id để khỏi like , sub ,... cho người khác
@mysql_query("DELETE FROM `tokenvip`     WHERE `idfb`='".$vipid['idfb']."' ");
@mysql_query("DELETE FROM `tokenios`     WHERE `idfb`='".$vipid['idfb']."' ");
@mysql_query("DELETE FROM `tokeniphone`  WHERE `idfb`='".$vipid['idfb']."' ");
@mysql_query("DELETE FROM `tokenhtc`     WHERE `idfb`='".$vipid['idfb']."' ");
@mysql_query("DELETE FROM `tokenandroid` WHERE `idfb`='".$vipid['idfb']."' ");
// xóa nếu hết hạn
if (($vipid['time'] - time()) <= 0) {
    @mysql_query("DELETE FROM `VIP` WHERE `idfb`='".$vipid['idfb']."' ");
}
//start graph
    $stat = json_decode(auto('https://graph.facebook.com/'.$idfb.'/feed?fields=id&access_token='.$token.'&offset=0&limit=2'),true);
      $countlike = $stat[data][0][likes][count];
	   if($countlike <= 2000){
                for($i=1;$i<=count($stat['data']);$i++){
                    $com = json_decode(auto('https://graph.facebook.com/'.$stat['data'][$i-1]['id'].'/comments?access_token='.$token.'&limit=250&fields=id'),true);
	                if(count($com['data']) > 0){
		            for($c=1;$c<=count($com['data']);$c++){
	                               
			                   auto('https://graph.facebook.com/'.$stat['data'][$i-1]['id'].'/likes?access_token='.$token.'&method=post');
  
			                    auto('https://graph.facebook.com/'.$com['data'][$c-1]['id'].'/likes?access_token='.$token.'&method=post');
                                       
		            }
	                }
		}
          }
/// end graph

	}
}
echo 'done';
?>