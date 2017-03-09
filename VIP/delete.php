<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
  <title>Xóa Token Die</title><center>
<form method="post">
   <select name="tab"> 
		<option value="tokenvip" >Token Vip </option>
			<option value="tokenios" >Token IOS</option>
			<option value="tokenhtc" >Token HTC</option>
			<option value="tokeniphone" >Token Iphone</option>
			<option value="tokenandroid" >Token Android</option>
	
		 </select><br/> 
<p><input class="btn btn-success" name="sub" type="submit" value="OK"/></p>
<h3>



<?
require("../_cnF/_star_cn_F.php");
if(isset($_POST['sub'])){
$table=$_POST['tab']; 
//count member
$babi = mysql_query ("SELECT ten, COUNT(ten) FROM ".$table."");
$rober = mysql_fetch_array($babi);
$rec=$rober['COUNT(ten)'];
?>
    <font size="4" color="red">Số Like Hack Được Bây Giờ Là : <?php echo $rec; ?><br></font>


<?php
$result = mysql_query("SELECT * FROM ".$table." ORDER BY id");
    if($result){
         while($row = mysql_fetch_array($result)) {
            $token = $row['token'];
            $userData = json_decode(file_get_contents('https://graph.facebook.com/me?access_token='.$token.'&fields=name,id,email'),true);
                print($userData['name']).'<br/>';
                      if(!$userData['name']){
                        mysql_query(" DELETE FROM ".$table." WHERE token='" . mysql_real_escape_string($token) . "'");
                      }
         }
    }
}
?>