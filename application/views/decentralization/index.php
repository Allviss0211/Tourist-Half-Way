<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Danh sách phân quyền</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('decentralization/add'); ?>" class="btn btn-success btn-sm">Thêm</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<!-- <th>IdDecentralization</th> -->
						<th>Tên</th>
						<th>Ghi chú</th>
						<th>Thao tác</th>
                    </tr>
                    <?php foreach($decentralization as $d){ ?>
                    <tr>
						<!-- <td><?php echo $d['IdDecentralization']; ?></td> -->
						<td><?php echo $d['Name']; ?></td>
						<td><?php echo $d['Note']; ?></td>
						<td>
                            <a href="<?php echo site_url('decentralization/edit/'.$d['IdDecentralization']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Sửa</a> 
                            <a href="<?php echo site_url('decentralization/remove/'.$d['IdDecentralization']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Xóa</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
