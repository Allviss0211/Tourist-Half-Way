<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Danh sách Tour</h3>
				<div class="box-tools">
					<a href="<?php echo site_url('tour/add'); ?>" class="btn btn-success btn-sm">Thêm</a>
				</div>
			</div>
			<div class="box-body">
				<table class="table table-striped">
					<tr>
						<!-- <th>Mã Tour</th> -->
						<th>Tên</th>
						<th>Lịch trình</th>
						<th>Nơi khởi hành</th>
						<th>Ngày</th>
						<th>Đêm</th>
						<th>Phương tiện</th>
						<th>Khách sạn</th>
						<th>Vé</th>
						<th>Giá</th>
						<th>Loại tour</th>
						<th>Ảnh nền</th>
						<th>Ghi chú</th>
						<th>Thao tác</th>
					</tr>
					<?php foreach ($tour as $t) { ?>
						<tr>
							<!-- <td><?php echo $t['IdTour']; ?></td> -->
							<td><?php echo $t['NameTour']; ?></td>
							<td><?php echo $t['Schedule']; ?></td>
							<td><?php echo $t['Start']; ?></td>
							<td><?php echo $t['NoDay']; ?></td>
							<td><?php echo $t['NoNight']; ?></td>
							<td><?php echo $t['Vehicle']; ?></td>
							<td><?php echo $t['Hotel']; ?></td>
							<td><?php echo $t['NoTicket']; ?></td>
							<td><?php echo $t['Price']; ?></td>
							<td><?php echo $t['NameTourType'] ?></td>
							<td><?php echo $t['Banner'] ?></td>
							<td><?php echo $t['Note']; ?></td>
							<td>
								<a href="<?php echo site_url('tour/edit/' . $t['IdTour']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Sửa</a>
								<a href="<?php echo site_url('tour/remove/' . $t['IdTour']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Xóa</a>
							</td>
						</tr>
					<?php } ?>
				</table>

			</div>
		</div>
	</div>
</div>