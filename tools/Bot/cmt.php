<?php  
$res = @mysql_query("SELECT * FROM `BotCmt` WHERE `idfb`= $_SESSION[idfb]");
$cmt = @mysql_fetch_array($res);
if(@mysql_num_rows($res) > 0){
$key = 1;
}else{
$key = 0;
}
?>
<div class="col-md-12">
	<div class="box box-success">
		<div class="box-title box-header with-border">
			<h4><i class="fa fa-comments" aria-hidden="true"></i> Bot Comment - Robot Tự Động Bình Luận</h4>
			
		</div>
		<div class="box-content">
			<div class="alert alert-info" style="font-size: 15px; background-color: rgba(157, 248, 89, 0.62); border-color: rgba(157, 248, 89, 0.62);">
                              		<?php echo ($key == 1) ? 'Chào Bạn<strong> '.$_SESSION[ten].'</strong>. Hiện Tại Bạn <strong style="color: red; font-size: 15px;"> Đã </strong> Cài Đặt Bot Trên Hệ Thống' : 'Chào Bạn <strong>'.$_SESSION[ten].'</strong>. Hiện Tại Bạn <strong style="color: red; font-size: 15px;"> Chưa </strong> Cài Đặt Bot Trên Hệ Thống'; ?>
                           	</div>
			<div class="alert alert-warning" style="background-color: rgba(245, 215, 66, 0.32); border-color: rgba(245, 215, 66, 0.32);">
				<span style="color: black; font-size: 15px;"><i class="fa fa-reddit-square"></i> Biểu Tượng : <font color ="red"><?php echo $cmt[bieutuong] == 1 ? "Hoạt Động" : "Không Sử Dụng";?> </font></span><br />
                    			<span style="color: black; font-size: 15px;"><i class="fa fa-reddit-square"></i> Quảng Cáo Giúp Website : <font color ="red"><?php echo $cmt[quangcao] == 1 ? "Hoạt Động " : "Không Sử Dụng"; ?></font></span>
			</div>
			<div class="alert alert-info" id="star" style="display: none;">
				<div id="message"></div>
			</div>
			<hr> <center><h2><p class="text-danger"><strong>Thiết Lập BOT</strong></p></h2></center><hr>
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-key"></i></span>
				<input type="text" class="form-control" id="yeucau" name="yeucau" style="color: red; font-size: 15px;" placeholder="<?php if($key != 1) {echo 'Điền  OK  Để Cài Bot';}else{echo 'Điền  UP  Để Cập Nhật Hoặc  HUY Để Xóa Bot';}?>">
				<span class="input-group-addon"><i class="fa fa-key"></i></span>
			</div><br />

			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-key"></i></span>
				<input type="text" class="form-control" id="bieutuong" name="bieutuong" value="" style="color: red; font-size: 15px;" placeholder="Điền 1 Nếu Muốn Chèn Biểu Tượng Hoặc 0 Nếu Không Muốn">
				<span class="input-group-addon"><i class="fa fa-key"></i></span>
			</div><br />

			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-key"></i></span>
				<input type="text" class="form-control" id="quangcao" name="quangcao" value="" style="color: red; font-size: 15px;" placeholder="Điền 1 Nếu Muốn Quảng Cáo Giúp Site Hoặc 0 Nếu Không Muốn">
				<span class="input-group-addon"><i class="fa fa-key"></i></span>
			</div><br />
			<? $_SESSION['_SERVER'] = cap(30); ?>
			<input type="hidden" name="_SERVER" id="_SERVER" value="<? echo $_SESSION['_SERVER']; ?>">
			<input type="hidden" class="form-control" id="id" name="idfb" value="<?php echo $_SESSION[idfb]; ?>">
			<input type="hidden" class="form-control" id="token" name="token" value="<?php echo $_SESSION[matoken]; ?>" />
			<div class="form-group">
				<button class="btn btn-success btn-block" id="botcmt" onclick="post_BotCmt();">
					<i class="fa fa-exchange"></i> Thực Thi
				</button>
			</div>
		</div>
		<div class="box-footer">
		</div>
	</div>
</div>