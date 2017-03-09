<?php 
ob_start();
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
if ($_POST && $_SESSION[idfb]) 
{	
	require("../_cnF/_star_cn_F.php");
	require("../_cnF/_star_funC.php");
	$yeucau = isset($_POST['yeucau']) ? baove($_POST['yeucau']) : FALSE;
	$idfb = isset($_POST['id']) ? baove($_POST['id']) : FALSE;
	$token = isset($_POST['token']) ? baove($_POST['token']) : FALSE;
	$server = $_POST['_SERVER'];
	if ($server != $_SESSION['_SERVER']) die("Đã Xảy Ra Lỗi");
	if (!$yeucau) 
	{
		die('ERROR: Không Tìm Thấy Yêu Cầu.<script type="text/javascript">toarst("error","Điền OK Để Cài Đặt, Điền  UP  Để Cập Nhật Hoặc  HUY Để Xóa Bot.","Thông Báo Lỗi")</script>');
	}
	$loai = $_POST['auto'];
	if ($loai == "botcamsuc"){
		$tk = checktk($token);
		if($tk['id'] !== '6628568379'){
                echo '<h4>ERROR: Đăng Nhập Bằng Tài Khoản FB và Chọn Apps là FACEBOOK FOR IPHONE Để Sử Dụng Chức Năng Này</h4>';
		die('<script type="text/javascript">toarst("error","Bạn Vui Lòng Đăng Xuất.<br> Sau Đó Đăng Nhập Bằng Cách Sử Dụng Tài Khoản FB và Chọn Apps là FACEBOOK FOR IPHONE Để Sử Dụng Chức Năng Này.","Thông Báo Lỗi")</script>');
                }
	        $camsuc =  isset($_POST['camsuc']) ? baove($_POST['camsuc']) : FALSE;
	 	$likecmt =  isset($_POST['likecmt']) ? baove($_POST['likecmt']) : FALSE;
		if($yeucau == "OK" || $yeucau == "ok" || $yeucau == "Ok" || $yeucau == "oK" ){
			$res = @mysql_query("SELECT * FROM BotCamsuc WHERE idfb = $idfb");
			if (mysql_num_rows($res) > 0) {
				die('ERROR: Bạn Đang Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi.<script type="text/javascript">toarst("error","Bạn Đang Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Chỉ Có Thể Cập Nhật Hoặc Xóa BOT.","Thông Báo Lỗi")</script>');
			}
			@mysql_query("INSERT INTO BotCamsuc SET 
				`idfb` = '".$idfb."', 
				`token` = '".$token."', 
				`camsuc` = '".$camsuc."', 
				`likecmt` = '".$likecmt."', 
				`ten` = '".$_SESSION[ten]."'
				");
			die('SUCCESS: Cài Đặt BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Lưu Ý: Khi Token Ko Còn Sử Dụng Được Chúng Tôi Sẽ Tự Động Xóa Token Của Bạn Tại Hệ Thống Lúc Đó Bạn Phải Cài Đặt Lại. ^_^ <br /> Cập Nhật BOT Thường Xuyên Để BOT Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cài Đặt BOT Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","Lời Nhắn Từ Hệ Thống")</script>');
		}elseif ($yeucau == "up" || $yeucau == "UP" || $yeucau == "uP" || $yeucau == "Up" ) {
			$res = @mysql_query("SELECT * FROM BotCamsuc WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
				die('ERROR: Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Nhập OK Để Tiến Hành Cài Đặt BOT<script type="text/javascript">toarst("error","Bạn Không Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt  BOT.","Thông Báo Lỗi")</script>');
			}
			@mysql_query("UPDATE BotCamsuc
				         SET
				            `token` = '".$token."',
				            `camsuc` = '".$camsuc."',
				            `likecmt` = '".$likecmt."'
				         WHERE
				            `idfb` = ".$idfb."
				      ");
			die('SUCCESS: Cập Nhật BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Cập Nhật BOT Thường Xuyên Để BOT Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cập Nhật BOT Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","TLời Nhắn Từ Hệ Thống")</script>');
		}elseif ($yeucau == "Huy" || $yeucau == "HUY" || $yeucau == "hUy" || $yeucau == "huY" || $yeucau == "HUy" || $yeucau == "hUY" || $yeucau == "huy" || $yeucau == "hUY" || $yeucau == "HuY") 
		{
			$res = @mysql_query("SELECT * FROM BotCamsuc WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
				die('ERROR: Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Nhập OK Để Tiến Hành Cài Đặt BOT<script type="text/javascript">toarst("error","Bạn Không Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt  BOT.","Thông Báo Lỗi")</script>');
			}
			@mysql_query("DELETE FROM BotCamsuc
			            WHERE
			               idfb = '".$idfb."'
			         ");
			die('SUCCESS: Xóa BOT Thành Công.<script type="text/javascript">toarst("success","Tài Khoản Của Bạn Đã Được Xóa Khỏi Hệ Thống.","Lời Nhắn Từ Hệ Thống")</script>');
		}
		else
		{
			//die("<li> Sai Cú Pháp - Vui Lòng Nhập OK Để Bắt Đầu </li>");
			die('ERROR: Sai Cú Pháp.<script type="text/javascript">toarst("error","Điền OK Để Cài Đặt, Điền  UP  Để Cập Nhật Hoặc  HUY Để Xóa Bot.","Thông Báo Lỗi")</script>');
		}
	}elseif ($loai == "botlike") 
	{	$likecmt =  isset($_POST['likecmt']) ? baove($_POST['likecmt']) : FALSE;
		if($yeucau == "OK" || $yeucau == "ok" || $yeucau == "Ok" || $yeucau == "oK" ){
			$res = @mysql_query("SELECT * FROM BotLike WHERE idfb = $idfb");
			if (mysql_num_rows($res) > 0) {
				die('ERROR: Bạn Đang Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi.<script type="text/javascript">toarst("error","Bạn Đang Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Chỉ Có Thể Cập Nhật Hoặc Xóa BOT.","Thông Báo Lỗi")</script>');
			}
			@mysql_query("INSERT INTO BotLike SET 
				`idfb` = '".$idfb."', 
				`token` = '".$token."', 
				`likecmt` = '".$likecmt."', 
				`ten` = '".$_SESSION[ten]."'
				");
			die('SUCCESS: Cài Đặt BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Lưu Ý: Khi Token Ko Còn Sử Dụng Được Chúng Tôi Sẽ Tự Động Xóa Token Của Bạn Tại Hệ Thống Lúc Đó Bạn Phải Cài Đặt Lại. ^_^ <br /> Cập Nhật BOT Thường Xuyên Để BOT Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cài Đặt BOT Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","Lời Nhắn Từ Hệ Thống")</script>');
		}elseif ($yeucau == "up" || $yeucau == "UP" || $yeucau == "uP" || $yeucau == "Up" ) {
			$res = @mysql_query("SELECT * FROM BotLike WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
				die('ERROR: Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Nhập OK Để Tiến Hành Cài Đặt BOT<script type="text/javascript">toarst("error","Bạn Không Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt  BOT.","Thông Báo Lỗi")</script>');
			}
			@mysql_query("UPDATE BotLike
				         SET
				            `token` = '".$token."',
				            `likecmt` = '".$likecmt."'
				         WHERE
				            `idfb` = ".$idfb."
				      ");
			die('SUCCESS: Cập Nhật BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Cập Nhật BOT Thường Xuyên Để BOT Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cập Nhật BOT Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","TLời Nhắn Từ Hệ Thống")</script>');
		}elseif ($yeucau == "Huy" || $yeucau == "HUY" || $yeucau == "hUy" || $yeucau == "huY" || $yeucau == "HUy" || $yeucau == "hUY" || $yeucau == "huy" || $yeucau == "hUY" || $yeucau == "HuY") 
		{
			$res = @mysql_query("SELECT * FROM BotLike WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
				die('ERROR: Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Nhập OK Để Tiến Hành Cài Đặt BOT<script type="text/javascript">toarst("error","Bạn Không Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt  BOT.","Thông Báo Lỗi")</script>');
			}
			@mysql_query("DELETE FROM BotLike
			            WHERE
			               idfb = '".$idfb."'
			         ");
			die('SUCCESS: Xóa BOT Thành Công.<script type="text/javascript">toarst("success","Tài Khoản Của Bạn Đã Được Xóa Khỏi Hệ Thống.","Lời Nhắn Từ Hệ Thống")</script>');
		}
		else
		{
			//die("<li> Sai Cú Pháp - Vui Lòng Nhập OK Để Bắt Đầu </li>");
			die('ERROR: Sai Cú Pháp.<script type="text/javascript">toarst("error","Điền OK Để Cài Đặt, Điền  UP  Để Cập Nhật Hoặc  HUY Để Xóa Bot.","Thông Báo Lỗi")</script>');
		}
	}elseif ($loai == "botexlike") 
	{	$likecmt =  isset($_POST['likecmt']) ? baove($_POST['likecmt']) : FALSE;
		if($yeucau == "OK" || $yeucau == "ok" || $yeucau == "Ok" || $yeucau == "oK" ){
			$res = @mysql_query("SELECT * FROM BotEx WHERE idfb = $idfb");
			if (mysql_num_rows($res) > 0) {
				die('ERROR: Bạn Đang Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi.<script type="text/javascript">toarst("error","Bạn Đang Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Chỉ Có Thể Cập Nhật Hoặc Xóa BOT.","Thông Báo Lỗi")</script>');
			}
			@mysql_query("INSERT INTO BotEx SET 
				`idfb` = '".$idfb."', 
				`token` = '".$token."', 
				`likecmt` = '".$likecmt."', 
				`ten` = '".$_SESSION[ten]."'
				");
			die('SUCCESS: Cài Đặt BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Lưu Ý: Khi Token Ko Còn Sử Dụng Được Chúng Tôi Sẽ Tự Động Xóa Token Của Bạn Tại Hệ Thống Lúc Đó Bạn Phải Cài Đặt Lại. ^_^ <br /> Cập Nhật BOT Thường Xuyên Để BOT Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cài Đặt BOT Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","Lời Nhắn Từ Hệ Thống")</script>');
		}elseif ($yeucau == "up" || $yeucau == "UP" || $yeucau == "uP" || $yeucau == "Up" ) {
			$res = @mysql_query("SELECT * FROM BotEx WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
				die('ERROR: Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Nhập OK Để Tiến Hành Cài Đặt BOT<script type="text/javascript">toarst("error","Bạn Không Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt  BOT.","Thông Báo Lỗi")</script>');
			}
			@mysql_query("UPDATE BotEx
				         SET
				            `token` = '".$token."',
				            `likecmt` = '".$likecmt."'
				         WHERE
				            `idfb` = ".$idfb."
				      ");
			die('SUCCESS: Cập Nhật BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Cập Nhật BOT Thường Xuyên Để BOT Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cập Nhật BOT Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","TLời Nhắn Từ Hệ Thống")</script>');
		}elseif ($yeucau == "Huy" || $yeucau == "HUY" || $yeucau == "hUy" || $yeucau == "huY" || $yeucau == "HUy" || $yeucau == "hUY" || $yeucau == "huy" || $yeucau == "hUY" || $yeucau == "HuY") 
		{
			$res = @mysql_query("SELECT * FROM BotEx WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
				die('ERROR: Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Nhập OK Để Tiến Hành Cài Đặt BOT<script type="text/javascript">toarst("error","Bạn Không Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt  BOT.","Thông Báo Lỗi")</script>');
			}
			@mysql_query("DELETE FROM BotEx WHERE idfb = '".$idfb."'");
			die('SUCCESS: Xóa BOT Thành Công.<script type="text/javascript">toarst("success","Tài Khoản Của Bạn Đã Được Xóa Khỏi Hệ Thống.","Lời Nhắn Từ Hệ Thống")</script>');
		}else{
			die('ERROR: Sai Cú Pháp. Điền OK Để Cài Đặt, Điền  UP  Để Cập Nhật Hoặc  HUY Để Xóa Bot.<script type="text/javascript">toarst("error","Điền OK Để Cài Đặt, Điền  UP  Để Cập Nhật Hoặc  HUY Để Xóa Bot.","Thông Báo Lỗi")</script>');
		}
	}elseif ($loai == "botexlove"){
		$tk = checktk($token);
		if($tk['id'] !== '6628568379'){
                echo '<h4>ERROR: Đăng Nhập Bằng Tài Khoản FB và Chọn Apps là FACEBOOK FOR IPHONE Để Sử Dụng Chức Năng Này</h4>';
		die('<script type="text/javascript">toarst("error","Bạn Vui Lòng Đăng Xuất.<br> Sau Đó Đăng Nhập Bằng Cách Sử Dụng Tài Khoản FB và Chọn Apps là FACEBOOK FOR IPHONE Để Sử Dụng Chức Năng Này.","Thông Báo Lỗi")</script>');
                }
             $likecmt =  isset($_POST['likecmt']) ? baove($_POST['likecmt']) : FALSE;
		if($yeucau == "OK" || $yeucau == "ok" || $yeucau == "Ok" || $yeucau == "oK" ){
			$res = @mysql_query("SELECT * FROM BotEx WHERE idfb = $idfb");
			if (mysql_num_rows($res) > 0) {
				die('ERROR: Bạn Đang Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi.<script type="text/javascript">toarst("error","Bạn Đang Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Chỉ Có Thể Cập Nhật Hoặc Xóa BOT.","Thông Báo Lỗi")</script>');
			}
			@mysql_query("INSERT INTO BotExLove SET 
				`idfb` = '".$idfb."', 
				`token` = '".$token."', 
				`likecmt` = '".$likecmt."', 
				`ten` = '".$_SESSION[ten]."'
				");
			die('SUCCESS: Cài Đặt BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Lưu Ý: Khi Token Ko Còn Sử Dụng Được Chúng Tôi Sẽ Tự Động Xóa Token Của Bạn Tại Hệ Thống Lúc Đó Bạn Phải Cài Đặt Lại. ^_^ <br /> Cập Nhật BOT Thường Xuyên Để BOT Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cài Đặt BOT Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","Lời Nhắn Từ Hệ Thống")</script>');
		}elseif ($yeucau == "up" || $yeucau == "UP" || $yeucau == "uP" || $yeucau == "Up" ) {
			$res = @mysql_query("SELECT * FROM BotExLove WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
				die('ERROR: Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Nhập OK Để Tiến Hành Cài Đặt BOT<script type="text/javascript">toarst("error","Bạn Không Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt  BOT.","Thông Báo Lỗi")</script>');
			}
			@mysql_query("UPDATE BotExLove
				         SET
				            `token` = '".$token."',
				            `likecmt` = '".$likecmt."'
				         WHERE
				            `idfb` = ".$idfb."
				      ");
			die('SUCCESS: Cập Nhật BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Cập Nhật BOT Thường Xuyên Để BOT Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cập Nhật BOT Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","TLời Nhắn Từ Hệ Thống")</script>');
		}elseif ($yeucau == "Huy" || $yeucau == "HUY" || $yeucau == "hUy" || $yeucau == "huY" || $yeucau == "HUy" || $yeucau == "hUY" || $yeucau == "huy" || $yeucau == "hUY" || $yeucau == "HuY") 
		{
			$res = @mysql_query("SELECT * FROM BotEx WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
				die('ERROR: Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Nhập OK Để Tiến Hành Cài Đặt BOT<script type="text/javascript">toarst("error","Bạn Không Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt  BOT.","Thông Báo Lỗi")</script>');
			}
			@mysql_query("DELETE FROM BotExLove
			            WHERE
			               idfb = '".$idfb."'
			         ");
			die('SUCCESS: Xóa BOT Thành Công.<script type="text/javascript">toarst("success","Tài Khoản Của Bạn Đã Được Xóa Khỏi Hệ Thống.","Lời Nhắn Từ Hệ Thống")</script>');
		}else{
			die('ERROR: Sai Cú Pháp. Điền OK Để Cài Đặt, Điền  UP  Để Cập Nhật Hoặc  HUY Để Xóa Bot.<script type="text/javascript">toarst("error","Điền OK Để Cài Đặt, Điền  UP  Để Cập Nhật Hoặc  HUY Để Xóa Bot.","Thông Báo Lỗi")</script>');
		}
	}elseif ($loai == "botcmt"){	
		$bieutuong =  isset($_POST['bieutuong']) ? baove($_POST['bieutuong']) : FALSE;
		$quangcao =  isset($_POST['quangcao']) ? baove($_POST['quangcao']) : FALSE;
		if($yeucau == "OK" || $yeucau == "ok" || $yeucau == "Ok" || $yeucau == "oK" )
		{
			$res = @mysql_query("SELECT * FROM BotCmt WHERE idfb = $idfb");
			if (mysql_num_rows($res) > 0) {
				die('ERROR: Bạn Đang Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi.<script type="text/javascript">toarst("error","Bạn Đang Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Chỉ Có Thể Cập Nhật Hoặc Xóa BOT.","Thông Báo Lỗi")</script>');
			}
			@mysql_query("INSERT INTO BotCmt SET 
				`idfb` = '".$idfb."', 
				`token` = '".$token."', 
				`bieutuong` = '".$bieutuong."',
				`quangcao` = '".$quangcao."',  
				`ten` = '".$_SESSION[ten]."'
				");
			die('SUCCESS: Cài Đặt BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Lưu Ý: Khi Token Ko Còn Sử Dụng Được Chúng Tôi Sẽ Tự Động Xóa Token Của Bạn Tại Hệ Thống Lúc Đó Bạn Phải Cài Đặt Lại. ^_^ <br /> Cập Nhật BOT Thường Xuyên Để BOT Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cài Đặt BOT Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","Lời Nhắn Từ Hệ Thống")</script>');
		}
		elseif ($yeucau == "up" || $yeucau == "UP" || $yeucau == "uP" || $yeucau == "Up" ) 
		{
			$res = @mysql_query("SELECT * FROM BotCmt WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
				die('ERROR: Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Nhập OK Để Tiến Hành Cài Đặt BOT<script type="text/javascript">toarst("error","Bạn Không Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt  BOT.","Thông Báo Lỗi")</script>');
			}
			@mysql_query("UPDATE BotCmt SET `token` = '".$token."', `quangcao` = '".$quangcao."', `bieutuong` = '".$bieutuong."' WHERE `idfb` = ".$idfb."");
			die('SUCCESS: Cập Nhật BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Cập Nhật BOT Thường Xuyên Để BOT Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cập Nhật BOT Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","TLời Nhắn Từ Hệ Thống")</script>');
		}
		elseif ($yeucau == "Huy" || $yeucau == "HUY" || $yeucau == "hUy" || $yeucau == "huY" || $yeucau == "HUy" || $yeucau == "hUY" || $yeucau == "huy" || $yeucau == "hUY" || $yeucau == "HuY") 
		{
			$res = @mysql_query("SELECT * FROM BotCmt WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
				die('ERROR: Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Nhập OK Để Tiến Hành Cài Đặt BOT<script type="text/javascript">toarst("error","Bạn Không Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt  BOT.","Thông Báo Lỗi")</script>');
			}
			@mysql_query("DELETE FROM BotCmt
			            WHERE
			               idfb = '".$idfb."'
			         ");
			die('SUCCESS: Xóa BOT Thành Công.<script type="text/javascript">toarst("success","Tài Khoản Của Bạn Đã Được Xóa Khỏi Hệ Thống.","Lời Nhắn Từ Hệ Thống")</script>');
		}
		else
		{
			//die("<li> Sai Cú Pháp - Vui Lòng Nhập OK Để Bắt Đầu </li>");
			die('ERROR: Sai Cú Pháp.<script type="text/javascript">toarst("error","Điền OK Để Cài Đặt, Điền  UP  Để Cập Nhật Hoặc  HUY Để Xóa Bot.","Thông Báo Lỗi")</script>');
		}
	}
	elseif ($loai == "bottralike") 
	{
		if($yeucau == "OK" || $yeucau == "ok" || $yeucau == "Ok" || $yeucau == "oK" ){
			$res = @mysql_query("SELECT * FROM BotTraLike WHERE idfb = $idfb");
			if (mysql_num_rows($res) > 0) {
				die('ERROR: Bạn Đang Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi.<script type="text/javascript">toarst("error","Bạn Đang Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Chỉ Có Thể Cập Nhật Hoặc Xóa BOT.","Thông Báo Lỗi")</script>');
			}
			@mysql_query("INSERT INTO BotTraLike SET 
				`idfb` = '".$idfb."', 
				`token` = '".$token."', 
				`ten` = '".$_SESSION[ten]."'
				");
			die('SUCCESS: Cài Đặt BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Lưu Ý: Khi Token Ko Còn Sử Dụng Được Chúng Tôi Sẽ Tự Động Xóa Token Của Bạn Tại Hệ Thống Lúc Đó Bạn Phải Cài Đặt Lại. ^_^ <br /> Cập Nhật BOT Thường Xuyên Để BOT Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cài Đặt BOT Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","Lời Nhắn Từ Hệ Thống")</script>');
		}elseif ($yeucau == "up" || $yeucau == "UP" || $yeucau == "uP" || $yeucau == "Up" ) {
			$res = @mysql_query("SELECT * FROM BotTraLike WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
				die('ERROR: Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Nhập OK Để Tiến Hành Cài Đặt BOT<script type="text/javascript">toarst("error","Bạn Không Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt  BOT.","Thông Báo Lỗi")</script>');
			}
			@mysql_query("UPDATE BotTraLike
			         SET
			            `token` = '".$token."'
			         WHERE
			            `idfb` = ".$idfb."
			      ");
			die('SUCCESS: Cập Nhật BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Cập Nhật BOT Thường Xuyên Để BOT Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cập Nhật BOT Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","TLời Nhắn Từ Hệ Thống")</script>');
		}elseif ($yeucau == "Huy" || $yeucau == "HUY" || $yeucau == "hUy" || $yeucau == "huY" || $yeucau == "HUy" || $yeucau == "hUY" || $yeucau == "huy" || $yeucau == "hUY" || $yeucau == "HuY") 
		{
			$res = @mysql_query("SELECT * FROM BotTraLike WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
				die('ERROR: Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Nhập OK Để Tiến Hành Cài Đặt BOT<script type="text/javascript">toarst("error","Bạn Không Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt  BOT.","Thông Báo Lỗi")</script>');
			}
			@mysql_query("DELETE FROM BotTraLike
			            WHERE
			               idfb = '".$idfb."'
			         ");
			die('SUCCESS: Xóa BOT Thành Công.<script type="text/javascript">toarst("success","Tài Khoản Của Bạn Đã Được Xóa Khỏi Hệ Thống.","Lời Nhắn Từ Hệ Thống")</script>');
		}
		else
		{
			//die("<li> Sai Cú Pháp - Vui Lòng Nhập OK Để Bắt Đầu </li>");
			die('ERROR: Sai Cú Pháp.<script type="text/javascript">toarst("error","Điền OK Để Cài Đặt, Điền  UP  Để Cập Nhật Hoặc  HUY Để Xóa Bot.","Thông Báo Lỗi")</script>');
		}
	}
		
}