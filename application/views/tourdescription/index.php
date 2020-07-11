<div class="pull-right">
	<a href="<?php echo site_url('tourdescription/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IdDesciption</th>
		<th>Description</th>
		<th>Timeline</th>
		<th>Image</th>
		<th>IdTour</th>
		<th>Note</th>
		<th>Actions</th>
    </tr>
	<?php foreach($tourdescription as $t){ ?>
    <tr>
		<td><?php echo $t['IdDesciption']; ?></td>
		<td><?php echo $t['Description']; ?></td>
		<td><?php echo $t['Timeline']; ?></td>
		<td><?php echo $t['Image']; ?></td>
		<td><?php echo $t['IdTour']; ?></td>
		<td><?php echo $t['Note']; ?></td>
		<td>
            <a href="<?php echo site_url('tourdescription/edit/'.$t['IdDesciption']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('tourdescription/remove/'.$t['IdDesciption']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
