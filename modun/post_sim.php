<?php 
ob_start();
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
if ($_POST && $_SESSION['idfb']) 
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
	if (!$token) 
	{
		die('ERROR: Vui Lòng Nhập Token Để Tiếp Tục.<script type="text/javascript">toarst("error","Trường Token Đang Trống. Vui Lòng Xem Lại Hướng Dẫn.","Thông Báo Lỗi")</script>');
	}
	$loai = $_POST['auto'];
	if ($loai == "simfeed") 
	{
		if($yeucau == "OK" || $yeucau == "ok" || $yeucau == "Ok" || $yeucau == "oK" ){
			$res = @mysql_query("SELECT * FROM SimCmtFeed WHERE idfb = $idfb");
			if (mysql_num_rows($res) > 0) {
				die('ERROR: Bạn Đang Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi.<script type="text/javascript">toarst("error","Bạn Đang Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Chỉ Có Thể Cập Nhật Hoặc Xóa BOT.","Thông Báo Lỗi")</script>');
			}
			@mysql_query("INSERT INTO SimCmtFeed SET 
				`idfb` = '".$idfb."', 
				`token` = '".$token."', 
				`ten` = '".$_SESSION[ten]."'
				");
			die('SUCCESS: Cài Đặt BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Lưu Ý: Khi Token Ko Còn Sử Dụng Được Chúng Tôi Sẽ Tự Động Xóa Token Của Bạn Tại Hệ Thống Lúc Đó Bạn Phải Cài Đặt Lại. ^_^ <br /> Cập Nhật BOT Thường Xuyên Để BOT Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cài Đặt BOT Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","Lời Nhắn Từ Hệ Thống")</script>');
		}elseif ($yeucau == "up" || $yeucau == "UP" || $yeucau == "uP" || $yeucau == "Up" ) {
			$res = @mysql_query("SELECT * FROM SimCmtFeed WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
				die('ERROR: Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Nhập OK Để Tiến Hành Cài Đặt BOT<script type="text/javascript">toarst("error","Bạn Không Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt  BOT.","Thông Báo Lỗi")</script>');
			}
			@mysql_query("UPDATE SimCmtFeed
			         SET
			            `token` = '".$token."'
			         WHERE
			            `idfb` = ".$idfb."
			      ");
			die('SUCCESS: Cập Nhật BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Cập Nhật BOT Thường Xuyên Để BOT Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cập Nhật BOT Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","TLời Nhắn Từ Hệ Thống")</script>');
		}elseif ($yeucau == "Huy" || $yeucau == "HUY" || $yeucau == "hUy" || $yeucau == "huY" || $yeucau == "HUy" || $yeucau == "hUY" || $yeucau == "huy" || $yeucau == "hUY" || $yeucau == "HuY") 
		{
			$res = @mysql_query("SELECT * FROM SimCmtFeed WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
				die('ERROR: Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Nhập OK Để Tiến Hành Cài Đặt BOT<script type="text/javascript">toarst("error","Bạn Không Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt  BOT.","Thông Báo Lỗi")</script>');
			}
			@mysql_query("DELETE FROM SimCmtFeed
			            WHERE
			               idfb = '".$idfb."'
			         ");
			die('SUCCESS: Xóa BOT Thành Công.<script type="text/javascript">toarst("success","Tài Khoản Của Bạn Đã Được Xóa Khỏi Hệ Thống.","Lời Nhắn Từ Hệ Thống")</script>');
		}
		else
		{
			die('ERROR: Sai Cú Pháp.<script type="text/javascript">toarst("error","Điền OK Để Cài Đặt, Điền  UP  Để Cập Nhật Hoặc  HUY Để Xóa Bot.","Thông Báo Lỗi")</script>');
		}
	}elseif ($loai == "simstatus") 
	{	
		if($yeucau == "OK" || $yeucau == "ok" || $yeucau == "Ok" || $yeucau == "oK" )
		{
			$res = @mysql_query("SELECT * FROM SimCmt WHERE idfb = $idfb");
			if (mysql_num_rows($res) > 0) {
				die('ERROR: Bạn Đang Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi.<script type="text/javascript">toarst("error","Bạn Đang Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Chỉ Có Thể Cập Nhật Hoặc Xóa BOT.","Thông Báo Lỗi")</script>');
			}
			@mysql_query("INSERT INTO SimCmt SET 
				`idfb` = '".$idfb."', 
				`token` = '".$token."', 
				`ten` = '".$_SESSION[ten]."',
				`vip` = 0
				");
			die('SUCCESS: Cài Đặt BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Lưu Ý: Khi Token Ko Còn Sử Dụng Được Chúng Tôi Sẽ Tự Động Xóa Token Của Bạn Tại Hệ Thống Lúc Đó Bạn Phải Cài Đặt Lại. ^_^ <br /> Cập Nhật BOT Thường Xuyên Để BOT Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cài Đặt BOT Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","Lời Nhắn Từ Hệ Thống")</script>');
		}
		elseif ($yeucau == "up" || $yeucau == "UP" || $yeucau == "uP" || $yeucau == "Up" ) 
		{
			$res = @mysql_query("SELECT * FROM SimCmt WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
				die('ERROR: Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Nhập OK Để Tiến Hành Cài Đặt BOT<script type="text/javascript">toarst("error","Bạn Không Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt  BOT.","Thông Báo Lỗi")</script>');
			}
			@mysql_query("UPDATE SimCmt
			         SET
			            `token` = '".$token."'
			         WHERE
			            `idfb` = ".$idfb."
			      ");
			die('SUCCESS: Cập Nhật BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. <br /> Cập Nhật BOT Thường Xuyên Để BOT Hoạt Động Tốt Nhất. <script type="text/javascript">toarst("success","Bạn Đã Tiến Hành Cập Nhật BOT Thành Công Tại Hệ Thống. Vui Lòng Không Sử Dụng Chức Năng Này Tại Các Website Khác Tránh Tình Trạng Die Token.","TLời Nhắn Từ Hệ Thống")</script>');
		}
		elseif ($yeucau == "Huy" || $yeucau == "HUY" || $yeucau == "hUy" || $yeucau == "huY" || $yeucau == "HUy" || $yeucau == "hUY" || $yeucau == "huy" || $yeucau == "hUY" || $yeucau == "HuY") 
		{
			$res = @mysql_query("SELECT * FROM SimCmt WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
				die('ERROR: Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Nhập OK Để Tiến Hành Cài Đặt BOT<script type="text/javascript">toarst("error","Bạn Không Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Phải Cài Đặt  BOT.","Thông Báo Lỗi")</script>');
			}
			@mysql_query("DELETE FROM SimCmt
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