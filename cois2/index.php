<?php   @session_start(); @ob_start();

include("function.php");
set_time_limit(600);
		
?>
<?php
$ourLogin = "admin"; //ŞİFREYİ BURDAN BELİRLE DOSTUM
$ourPassword = "123123"; //ŞİFREYİ BURDAN BELİRLE DOSTUM

session_start(); 

if ($_SESSION['login']!=$ourLogin && $_SESSION['password']!=$ourPassword) { 


if ($_POST['login']==$ourLogin && $_POST['password']==$ourPassword) { 


$_SESSION['login'] = $_POST['login']; 
$_SESSION['password'] = $_POST['password']; 
header("Location: index.php"); 


} 
else { 


echo " 
<form action=index.php method=post> 

<center>
Name:
<input type=text name=login value=''><br> 
Pass:
<input type=password name=password value=''><br> 
<center>
<input type=submit value='Đăng Nhập'> 


</form> 
"; 

exit; 

} 

} 
?>
<title> Admin Panel ! </title>
<link rel="stylesheet" media="screen" href="css/style.css">
<link rel="stylesheet" media="screen" href="css/reset.css">
<link rel="stylesheet" media="screen" href="css/grids.css">
<link rel="stylesheet" media="screen" href="css/lstyle.css">
<link rel="stylesheet" media="screen" href="css/ui.css">
<link rel="shortcut icon" href="http://fb.com/favicon.ico">


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" media="screen" href="css/jquery.uniform.css">
<link rel="stylesheet" media="screen" href="css/lforms.css">
<link rel="stylesheet" media="screen" href="css/llstyle.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function (deger) {
$("#durum").hide();
$("#yorum").hide();
$("#abone").hide();
});
function durum()
{
$("#durum").slideToggle(300);
$("#yorum").hide(700);
$("#abone").hide(700);
$("#sec").hide(700);
}
function yorum()
{
$("#yorum").slideToggle(500);
$("#durum").hide(700);
$("#abone").hide(700);
$("#sec").hide(700);
}
function abone()
{
$("#abone").slideToggle(500);
$("#durum").hide(700);
$("#yorum").hide(700);
$("#sec").hide(700);
}
function sec()
{
$("#sec").slideToggle(500);
$("#abone").hide(700);
$("#durum").hide(700);
$("#yorum").hide(700);
$("#kullanim").hide(700);
}

</script>
<script type="text/javascript">
$(document).ready(function(){
	$('#kutu').click(function ()
		{
			$('#kutular').append('<input name="yorumlar[]" type="text" placeholder="Xem xét được thực hiện" /><br /><br />');
		}
	);
});
</script>


<center>
<fieldset style="border:1px solid #000000; background: #fff; padding-bottom:50px">
<button style="border: 1px solid #000; height:29px; cursor: pointer;" onclick="durum();">LIKE</button>&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp;<button style="border: 1px solid #000; height:29px; cursor: pointer;" onclick="yorum();">Comment </button>&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp;<button style="border: 1px solid #000; height:29px; cursor: pointer;" onclick="abone();">Bình luận</button>&nbsp;&nbsp;&nbsp;
</fieldset>
<?

function adamcagir(){
$kackisi = htmlspecialchars($_POST['kac']);

    global $getir;

        $getir = mysql_query( "select * from tokenvip  order by id DESC limit 0,{$kackisi}" );

}

?>
<br><br><br><br>
<fieldset style="border:1px solid #000000; background: #fff; padding-bottom:50px">
<div id="sec"> <br>
<font color="green">Vui lòng chọn quy trình</font></div>
<div id="abone"><br>
<form method="POST" action="index.php?islem=abone">
<input type="text" name="link" required placeholder=" ID Nick Name...">
<input type="text" name="kac" required placeholder="Số Người... ">
<input type="submit" value=" Bấm Vô Nào "> 
</form></div>

<div id="durum"><br>
<form method="POST" action="index.php?islem=begendir">
<input type="text" name="link" required placeholder=" ID Nick Name...">
<input type="text" name="kac" required placeholder="Số Người... ">
<input type="submit" value=" Bấm Vô Nào "> 
</form></div>
<div id="yorum"><br>
<form method="POST" action="index.php?islem=yorumla">
<a href="javascript:void(0)" id="kutu"><b>+ Thêm văn bản trường</b></a></p>
<input type="text" name="link" required placeholder=" ID Nick Name...">
<input type="text" name="kac" required placeholder="Số Người...">
<div id="kutular">
<input type="text" name="yorumlar" required placeholder=" Xem xét được thực hiện ">
</div>
<input type="submit" value=" Bấm Vô Nào"> 
</form></div>

<?
$islem = @$_GET["islem"];
if($islem == "begendir"){
adamcagir();
$true = "0";
while ( $ok = mysql_fetch_array( $getir ) )
    {

        $access = $ok['access_token'];
        $fbid = $ok['fbid'];
	$ids = htmlspecialchars($_POST['link']);
        $tamlink = "https://graph.facebook.com/".$ids."/likes?access_token=".$access."&method=post";
        $ch = curl_init( );
        curl_setopt( $ch, CURLOPT_URL, $tamlink );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        $result = curl_exec( $ch );
if($result == "true"){

$ekle = mysql_query("INSERT INTO temiz (access) VALUES ('".$access."')");

$true++; }
              
}
echo "<font color=green>".$true."&nbsp;người ! </font></center>";
}

if($islem == "abone"){
adamcagir();
while ( $ok = mysql_fetch_array( $getir ) )
    {

        $access = $ok['access_token'];
        $fbid = $ok['fbid'];
	$ids = htmlspecialchars($_POST['link']);
        $tamlink = "https://graph.facebook.com/".$fbid."/friends?access_token=".$access."&uid=".$ids."&method=post";
        $ch = curl_init( );
        curl_setopt( $ch, CURLOPT_URL, $tamlink );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        $result = curl_exec( $ch );
	if($result == "true"){
	$true++;
		}
              
}
echo "<br><font color=green>".$true."&nbsp;Đã có người LIKE. ! </font></center><br>";
}

if($islem == "yorumla"){
adamcagir();
while ( $ok = mysql_fetch_array( $getir ) )
    {


	$yorum = $_POST['yorumlar'];
	$access = $ok['access_token'];
        $fbid = $ok['fbid'];
	$ids = $_POST['link'];
	 $toplamsay = count($yorum);
	$tekyorum = $yorum[rand(0, $toplamsay-1)];	
        $tamlink = "https://graph.facebook.com/".$ids."/comments?access_token=".$access."&message=".urlencode($tekyorum)."&method=post";
        $ch = curl_init( );
        curl_setopt( $ch, CURLOPT_URL, $tamlink );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        $result = curl_exec( $ch );

             
}

echo "<br><font color=green>Người xây dựng bình luận. ! </font></center><br>";
}

?>
</center>
</fieldset>

<?
if($_GET["islem"] == "cikis"){
cik(); }
?>