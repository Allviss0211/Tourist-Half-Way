<div class="pull-right">
	<a href="<?php echo site_url('tourtype/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IdTourType</th>
		<th>Name</th>
		<th>Note</th>
		<th>Actions</th>
    </tr>
	<?php foreach($tourtype as $t){ ?>
    <tr>
		<td><?php echo $t['IdTourType']; ?></td>
		<td><?php echo $t['Name']; ?></td>
		<td><?php echo $t['Note']; ?></td>
		<td>
            <a href="<?php echo site_url('tourtype/edit/'.$t['IdTourType']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('tourtype/remove/'.$t['IdTourType']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
