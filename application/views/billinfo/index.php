<div class="pull-right">
	<a href="<?php echo site_url('billinfo/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IdBillInfo</th>
		<th>IdBill</th>
		<th>NoAdult</th>
		<th>NoChildren</th>
		<th>TotalPrice</th>
		<th>Note</th>
		<th>Actions</th>
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
            <a href="<?php echo site_url('billinfo/edit/'.$b['IdBillInfo']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('billinfo/remove/'.$b['IdBillInfo']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
