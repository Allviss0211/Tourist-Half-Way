<div class="pull-right">
	<a href="<?php echo site_url('decentralization/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IdDecentralization</th>
		<th>Name</th>
		<th>Note</th>
		<th>Actions</th>
    </tr>
	<?php foreach($decentralization as $d){ ?>
    <tr>
		<td><?php echo $d['IdDecentralization']; ?></td>
		<td><?php echo $d['Name']; ?></td>
		<td><?php echo $d['Note']; ?></td>
		<td>
            <a href="<?php echo site_url('decentralization/edit/'.$d['IdDecentralization']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('decentralization/remove/'.$d['IdDecentralization']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
