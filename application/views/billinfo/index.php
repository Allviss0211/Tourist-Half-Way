<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Danh sách chi tiết hóa đơn</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('billinfo/add'); ?>" class="btn btn-success btn-sm">Thêm</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID chi tiết</th>
						<th>ID hóa đơn</th>
						<th>Số người lớn</th>
						<th>Số trẻ em</th>
						<th>Tổng tiền</th>
						<th>Ghi chú</th>
						<th>Thao tác</th>
                    </tr>
                    <?php foreach($billinfo as $b){ ?>
                    <tr>
						<td><?php echo $b['IdBillInfo']; ?></td>
						<td><?php echo $b['IdBill']; ?></td>
						<td><?php echo $b['NoAdult']; ?></td>
						<td><?php echo $b['NoChildren']; ?></td>
						<td><?php echo $b['TotalPrice']; ?></td>
						<td><?php echo $b['Note']; ?></td>
						<td>
                            <a href="<?php echo site_url('billinfo/edit/'.$b['IdBillInfo']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Sửa</a> 
                            <a href="<?php echo site_url('billinfo/remove/'.$b['IdBillInfo']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Xóa</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
