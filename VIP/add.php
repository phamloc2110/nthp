<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
  <title>Add Token</title><center>
<form method="post">
<textarea rows="20" cols="100" type="text"  name="token" placeholder="Nhập Token vào đây ..."></textarea><br>
   <select name="tab"> 
		<option value="tokenvip" >Token Vip </option>
			<option value="tokenios" >Token IOS</option>
			<option value="tokenhtc" >Token HTC</option>
			<option value="tokeniphone" >Token Iphone</option>
			<option value="tokenandroid" >Token Android</option>
	
		 </select><br/> 
<p><input class="btn btn-success" name="sub" type="submit" value="OK"/></p>
<h3>


<?php
require("../_cnF/_star_cn_F.php");

if(isset($_POST['sub'])){
$token=$_POST['token'];
$table=$_POST['tab']; 
$insert = $update = 0;


$data  = explode("\n", $token);

foreach ($data as $token) {
   $me = cek(trim($token));


   if ($me['id']) {
      if (mysql_num_rows(mysql_query("SELECT `ten` FROM ".$table." WHERE idfb = '" . mysql_real_escape_string($me['id']) . "'"))) {
         mysql_query("UPDATE ".$table." SET `token` = '" . mysql_real_escape_string($token) . "' WHERE `idfb` = " . $me['id'] . "");
         ++$insert;
      } else {
         mysql_query("INSERT INTO ".$table." SET
               `idfb` = '" . mysql_real_escape_string($me['id']) . "',
               `ten` = '" . mysql_real_escape_string($me['name']) . "',
               `token` = '" . mysql_real_escape_string($token) . "'
         ");
         ++$update;
      }
   }
}

echo 'INSERT ' . $insert;
echo '<br>UPDATE ' . $update;
}
function cek($o) {
   return json_decode(auto('https://graph.facebook.com/me?access_token='.$o),true);
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


</body>
</html>