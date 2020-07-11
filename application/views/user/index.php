<div class="pull-right">
	<a href="<?php echo site_url('user/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IdUser</th>
		<th>Username</th>
		<th>Password</th>
		<th>IdDecentralization</th>
		<th>Fullname</th>
		<th>IdentityCard</th>
		<th>Birthday</th>
		<th>Phone</th>
		<th>Email</th>
		<th>Address</th>
		<th>Note</th>
		<th>Actions</th>
    </tr>
	<?php foreach($user as $u){ ?>
    <tr>
		<td><?php echo $u['IdUser']; ?></td>
		<td><?php echo $u['Username']; ?></td>
		<td><?php echo $u['Password']; ?></td>
		<td><?php echo $u['IdDecentralization']; ?></td>
		<td><?php echo $u['Fullname']; ?></td>
		<td><?php echo $u['IdentityCard']; ?></td>
		<td><?php echo $u['Birthday']; ?></td>
		<td><?php echo $u['Phone']; ?></td>
		<td><?php echo $u['Email']; ?></td>
		<td><?php echo $u['Address']; ?></td>
		<td><?php echo $u['Note']; ?></td>
		<td>
            <a href="<?php echo site_url('user/edit/'.$u['IdUser']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('user/remove/'.$u['IdUser']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
