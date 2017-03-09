<div class="col-md-12">
	<div class="box box-success">
		<div class="box-title box-header with-border">
			<h4><i class="fa fa-thumbs-up"></i> Boom Comment - Bão Comment Trên Status</h4>
			
		</div>
		<div class="box-content">
			<h4><strong><p class="text-danger"> Hệ Thống Bão Comment Trên Status Theo ID Bất Kỳ</p></strong></h4>
			<font style="color:#ed5565;">Lưu Ý: Status Cần Bão Phải Được Đặt Ở Chế Độ Công Khai Và Cho Phép Mọi Người Comment. </font>
			<hr>
			<div class="alert alert-info" id="star" style="display: none;">
				<div id="message"></div>
			</div>
			<div class="input-prepend input-group ">
				<span class="input-group-addon"><i class="fa fa-paste"></i>
				</span>
					<input name="id" type="text" id="id" class="form-control" placeholder="Nhập ID Status"><span class="input-group-addon"><i class="fa fa-paste"></i>
				</span>
				<? $_SESSION['_SERVER'] = cap(30); ?>
				<input type="hidden" name="_SERVER" id="_SERVER" value="<? echo $_SESSION['_SERVER']; ?>">
			</div><br />
			<div class="form-group">
				<label for="name">Nhập Nội Dung  </label>
				<textarea rows="5" type="text" class="form-control" id="noidung" name="noidung" placeholder="Nhập Nội Dung Cần Post Vào Đây. Mỗi Dòng Ứng Với 1 Comment <3..."></textarea>
				<input class="form-control" type="hidden" name="token" id="token" value="<?php echo $_SESSION[matoken];?>" />
			</div>
			<div class="form-group">
			<label>Nếu Muốn Sử Dụng Biểu Tượng. Click Vào</label>
			<button type="button" class="btn btn-success btn-rounded btn-xs" data-toggle="modal" data-target="#myModal5">
				Đây
			</button>
			</div><br />
			<div class="form-group">
				<label for="name">Chọn Số Lượng Comment Sẻ Bão - Kéo Thanh Trượt Để Điều Chỉnh</label>
				<center>
					<div id="soluong" class="label label-info" align="center">1</div>
				</center>
				<input class="form-control" type="range" name="soluong" min="1" max="100" id="limit" value="1" onchange="document.getElementById('soluong').innerHTML=this.value;">
			</div>
			<div class="form-group">
				<button class="btn btn-success btn-block" id="boomcmt2" onclick="post_BoomCmt2();">
					<i class="fa fa-exchange"></i> Bão Comment
				</button>
			</div>
		</div>
		<div class="box-footer">
		</div>
	</div>
</div>
<?
require("MODAL-EMOJI.php");
?>