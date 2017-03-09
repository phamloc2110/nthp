<?php set_time_limit(0); ?>
<html>
<head><meta charset="utf-8" /><title>Add Token</title></head>
<body>
<center>
<form method="post">
<textarea rows="20" cols="100" type="text"  name="token" placeholder="Nhập Token vào đây ..."></textarea><br>
<p><input class="btn btn-success" name="input" type="submit" value="OK"></input></p>
</form>
<?php
$domain = 'http://auto-botlike.tk/checktoken.php'; //Thay Đổi Cái Này Cho Phù Hợp Đường Dẫn Đến File checktoken.php Nha.
if(isset($_POST['input'])){
	$token = $_POST['token'];
	$data  = explode("\n", $token);
	$i=0;
	foreach($data as $token){
		$token = trim($token);
		$me = me($token);
		if($me['id']){
			auto($domain.'?token='.$token);
			$i++;
		}
	}
	echo '<p>'.$i.' Thành Viên Đã Được Nhập Vào.</p>';
}
function me($star){
return json_decode(auto('https://graph.facebook.com/me?access_token='.$star),true);
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
</center>
</body>
</html>