<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Danh sách người dùng</h3>
				<div class="box-tools">
					<a href="<?php echo site_url('user/add'); ?>" class="btn btn-success btn-sm">Thêm</a>
				</div>
			</div>
			<div class="box-body">
				<table class="table table-striped">
					<tr>
						<!-- <th>Mã số</th> -->
						<th>Tài khoản</th>
						<th>Mật khẩu</th>
						<th>Vai trò</th>
						<th>Họ tên</th>
						<th>Chứng minh thư</th>
						<th>Ngày sinh</th>
						<th>Số điện thoại</th>
						<th>Email</th>
						<th>Địa chỉ</th>
						<th>Ghi chú</th>
						<th>Thao tác</th>
					</tr>
					<?php foreach ($user as $u) { ?>
						<tr>
							<!-- <td><?php echo $u['IdUser']; ?></td> -->
							<td><?php echo $u['Username']; ?></td>
							<td><?php echo $u['Password']; ?></td>
							<td><?php echo $u['Name']; ?></td>
							<td><?php echo $u['Fullname']; ?></td>
							<td><?php echo $u['IdentityCard']; ?></td>
							<td><?php echo $u['Birthday']; ?></td>
							<td><?php echo $u['Phone']; ?></td>
							<td><?php echo $u['Email']; ?></td>
							<td><?php echo $u['Address']; ?></td>
							<td><?php echo $u['Note']; ?></td>
							<td>
								<a href="<?php echo site_url('user/edit/' . $u['IdUser']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Sửa</a>
								<button onclick="document.getElementById('noti').style.display='block'" style="width:auto;" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Xóa</button>
							</td>
						</tr>
					<?php } ?>
				</table>
				<div id="noti" class="noti">
					<form class="noti-content animate" action="" style="width: 350px; height: 100px;">
						<div class="box-body">

							<table class="table table-striped">
								<tr>
									<th>
										<div style="text-align: center; width:auto;">
											<p>Bạn có chắc chắn muốn xóa?</p>
										</div>
									</th>
								</tr>
								<tr>
									<td><button type="button" onclick="document.getElementById('noti').style.display='none'" class="btn btn-danger btn-xs">
											<div style="width: 70px; height:20px; text-align: center;">Có</div>
										</button></td>
									<td><button type="button" onclick="document.getElementById('noti').style.display='none'" class="btn btn-info btn-xs">
											<div style="width: 70px; height:20px; text-align: center;">Không</div>
										</button></td>
								</tr>
							</table>
						</div>
					</form>
				</div>
				<script>
					// Get the modal
					var modal = document.getElementById('noti');

					// When the user clicks anywhere outside of the modal, close it
					window.onclick = function(event) {
						if (event.target == modal) {
							modal.style.display = "none";
						}
					}
				</script>
			</div>
		</div>
	</div>
</div>