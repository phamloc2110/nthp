<div class="col-md-12">
	<div class="box box-success text-left">
		<div class="box-title box-header with-border"><h4><i class="fa fa-heart"></i> VIP Tương Tác là gì?</h4></div>
		<div class="box-body">
			+ Hệ thống tự động nhận dạng id người dùng. Tự LIKE status,ảnh,video mới nhất. Sau khi mua xong, bạn chỉ cần đăng ảnh/status/video thì sẽ được tự động tăng like trong vòng 5-30p<br> + Là một hệ thống hoạt động hoàn toàn tự động. <br> + Khi là V.I.P bạn sẽ không phải LIKE, SUB, COMMENT, SHARE cho bất cứ ai <br> + Bạn sẽ được bảo vệ thông tin bởi hệ thống. Chúng tôi không xóa tài khoản của bạn nếu bạn ko hoạt động trong ngày, không như member thường. <br> + Bạn không phải cập nhật token hàng ngày để like có thể lên đều, hệ thống chỉ cần id của bạn. <br>
		</div>
	</div>
</div>
<div class="col-md-6">
	<div class="box box-info">
		<div class="box-title box-header with-border"><h4><i class="fa fa-heartbeat"></i> Panel Chính</h4></div>
		<div class="box-body">
			<div class="form-group has-success">
				<label class="control-label">Tên Người Dùng</label>
				<input type="text" class="form-control" value="<? echo $_SESSION[ten]; ?>" id="tenfb" name="tenfb">
			</div>
			<div class="form-group has-success">
				<label class="control-label">ID Facebook</label>
				<input type="text" class="form-control" value="<? echo $_SESSION[idfb]; ?>" id="idfb" name="idfb">
			</div>
			<div class="form-group has-success">
				<label class="control-label">Chọn Gói VIP</label>
				<select class="form-control m-b" onchange='muavip()' name='level' id='goi_vip' class='input'>
					<option value='0'>Chọn Gói</option>
					<option value='1'>VIP Member</option>
					<option value='2'>Medium Member</option>
					<option value='3'>Super Member</option>
					<option value='4'>Boss Member</option>
				</select>
			</div>
			<div class="form-group has-success">
				<label class="control-label">Ngày Sử Dụng</label>
				<select class="form-control m-b" onchange='muavip()' id='time' name='time' class='input'>
					<option value='3'>3 Ngày</option>
					<option value='7'>1 Tuần</option>
					<option value='30'>1 tháng</option>
					<option value='60'>2 tháng</option>
					<option value='90'>3 Tháng</option>
					<option value='365'>1 Năm</option>
				</select>
			</div>
			<button type="button" class="btn btn-block btn-primary" id="muavip" onclick="postVip();"><i class="fa fa-exchange"></i> Mua VIP</button>
		</div>
	</div>
</div>
<div class="col-md-6">
	<div class="box box-info">
		<div class="box-title box-header with-border"><h4><i class="fa fa-info"></i> Panel Thông Tin Vip</h4></div>
		<div class="box-body">
			<table class="table">
				<div class="alert alert-info" id="star" style="display: none;">
					<div id="message"></div>
				</div>
				<tbody>
					<tr>
						<td>Tài Khoản</td>
						<td><b><? echo number_format($vnd).' VNĐ'; ?></b></td>
					</tr>
					<tr>
						<td>Số Tiền Cần</td>
						<td><b id="tien">0</b> VNĐ</td>
					</tr>
					<tr>
						<td>Còn Lại</td>
						<td><b id="sodu"><? echo number_format($vnd); ?></b> VNĐ</td>
					</tr>
				</tbody>
			</table>
			<div class="col-md-12">
			<ul>
				<li>
					<h3>Thông Tin Gói V.I.P</h3>
				</li>
				<li>
				<ul>
					<li>Tên Gói VIP: <b id="tenvip"></b></li>
					<li><b id="luonglike"></b> Like mỗi status/ảnh/video được đăng tải</li>
					<li><b id="luonglikec"></b> Like cho 250 Comment mỗi Status</li>
					<li><b id="luongngay"></b> Ngày sử dụng.</li>
					<li> Tự động được thêm vào sever VIP. Khi sử dụng auto like, sub, comment không bị chéo. Không phải like, sub, comment cho bất kỳ ai !</li>
					<li>
						<p class="text-danger" style="font-size: 14px;"> KHÔNG NÊN ĐĂNG QUÁ NHIỀU BÀI VIẾT TRONG 1 NGÀY. TRÁNH VIỆC BỊ BLOCK KHỎI HỆ THỐNG</p>
					</li>
				</ul>
				</li>
			</ul>
			</div>
		</div>
	</div>
</div>