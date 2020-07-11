<div class="pull-right">
	<a href="<?php echo site_url('bill/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IdBill</th>
		<th>OrderDate</th>
		<th>Status</th>
		<th>IdUser</th>
		<th>CustomerName</th>
		<th>CustomerIdentityCard</th>
		<th>CustomerBirthday</th>
		<th>CustomerAddress</th>
		<th>CustomerPhone</th>
		<th>CustomerEmail</th>
		<th>Note</th>
		<th>Actions</th>
    </tr>
	<?php foreach($bill as $b){ ?>
    <tr>
		<td><?php echo $b['IdBill']; ?></td>
		<td><?php echo $b['OrderDate']; ?></td>
		<td><?php echo $b['Status']; ?></td>
		<td><?php echo $b['IdUser']; ?></td>
		<td><?php echo $b['CustomerName']; ?></td>
		<td><?php echo $b['CustomerIdentityCard']; ?></td>
		<td><?php echo $b['CustomerBirthday']; ?></td>
		<td><?php echo $b['CustomerAddress']; ?></td>
		<td><?php echo $b['CustomerPhone']; ?></td>
		<td><?php echo $b['CustomerEmail']; ?></td>
		<td><?php echo $b['Note']; ?></td>
		<td>
            <a href="<?php echo site_url('bill/edit/'.$b['IdBill']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('bill/remove/'.$b['IdBill']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
