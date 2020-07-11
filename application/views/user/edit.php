<?php echo form_open('user/edit/'.$user['IdUser'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="Username" class="col-md-4 control-label">Username</label>
		<div class="col-md-8">
			<input type="text" name="Username" value="<?php echo ($this->input->post('Username') ? $this->input->post('Username') : $user['Username']); ?>" class="form-control" id="Username" />
		</div>
	</div>
	<div class="form-group">
		<label for="Password" class="col-md-4 control-label">Password</label>
		<div class="col-md-8">
			<input type="text" name="Password" value="<?php echo ($this->input->post('Password') ? $this->input->post('Password') : $user['Password']); ?>" class="form-control" id="Password" />
		</div>
	</div>
	<div class="form-group">
		<label for="IdDecentralization" class="col-md-4 control-label">IdDecentralization</label>
		<div class="col-md-8">
			<input type="text" name="IdDecentralization" value="<?php echo ($this->input->post('IdDecentralization') ? $this->input->post('IdDecentralization') : $user['IdDecentralization']); ?>" class="form-control" id="IdDecentralization" />
		</div>
	</div>
	<div class="form-group">
		<label for="Fullname" class="col-md-4 control-label">Fullname</label>
		<div class="col-md-8">
			<input type="text" name="Fullname" value="<?php echo ($this->input->post('Fullname') ? $this->input->post('Fullname') : $user['Fullname']); ?>" class="form-control" id="Fullname" />
		</div>
	</div>
	<div class="form-group">
		<label for="IdentityCard" class="col-md-4 control-label">IdentityCard</label>
		<div class="col-md-8">
			<input type="text" name="IdentityCard" value="<?php echo ($this->input->post('IdentityCard') ? $this->input->post('IdentityCard') : $user['IdentityCard']); ?>" class="form-control" id="IdentityCard" />
		</div>
	</div>
	<div class="form-group">
		<label for="Birthday" class="col-md-4 control-label">Birthday</label>
		<div class="col-md-8">
			<input type="text" name="Birthday" value="<?php echo ($this->input->post('Birthday') ? $this->input->post('Birthday') : $user['Birthday']); ?>" class="form-control" id="Birthday" />
		</div>
	</div>
	<div class="form-group">
		<label for="Phone" class="col-md-4 control-label">Phone</label>
		<div class="col-md-8">
			<input type="text" name="Phone" value="<?php echo ($this->input->post('Phone') ? $this->input->post('Phone') : $user['Phone']); ?>" class="form-control" id="Phone" />
		</div>
	</div>
	<div class="form-group">
		<label for="Email" class="col-md-4 control-label">Email</label>
		<div class="col-md-8">
			<input type="text" name="Email" value="<?php echo ($this->input->post('Email') ? $this->input->post('Email') : $user['Email']); ?>" class="form-control" id="Email" />
		</div>
	</div>
	<div class="form-group">
		<label for="Address" class="col-md-4 control-label">Address</label>
		<div class="col-md-8">
			<input type="text" name="Address" value="<?php echo ($this->input->post('Address') ? $this->input->post('Address') : $user['Address']); ?>" class="form-control" id="Address" />
		</div>
	</div>
	<div class="form-group">
		<label for="Note" class="col-md-4 control-label">Note</label>
		<div class="col-md-8">
			<input type="text" name="Note" value="<?php echo ($this->input->post('Note') ? $this->input->post('Note') : $user['Note']); ?>" class="form-control" id="Note" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>