<?php echo form_open('user/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="Username" class="col-md-4 control-label">Username</label>
		<div class="col-md-8">
			<input type="text" name="Username" value="<?php echo $this->input->post('Username'); ?>" class="form-control" id="Username" />
		</div>
	</div>
	<div class="form-group">
		<label for="Password" class="col-md-4 control-label">Password</label>
		<div class="col-md-8">
			<input type="text" name="Password" value="<?php echo $this->input->post('Password'); ?>" class="form-control" id="Password" />
		</div>
	</div>
	<div class="form-group">
		<label for="IdDecentralization" class="col-md-4 control-label">IdDecentralization</label>
		<div class="col-md-8">
			<input type="text" name="IdDecentralization" value="<?php echo $this->input->post('IdDecentralization'); ?>" class="form-control" id="IdDecentralization" />
		</div>
	</div>
	<div class="form-group">
		<label for="Fullname" class="col-md-4 control-label">Fullname</label>
		<div class="col-md-8">
			<input type="text" name="Fullname" value="<?php echo $this->input->post('Fullname'); ?>" class="form-control" id="Fullname" />
		</div>
	</div>
	<div class="form-group">
		<label for="IdentityCard" class="col-md-4 control-label">IdentityCard</label>
		<div class="col-md-8">
			<input type="text" name="IdentityCard" value="<?php echo $this->input->post('IdentityCard'); ?>" class="form-control" id="IdentityCard" />
		</div>
	</div>
	<div class="form-group">
		<label for="Birthday" class="col-md-4 control-label">Birthday</label>
		<div class="col-md-8">
			<input type="text" name="Birthday" value="<?php echo $this->input->post('Birthday'); ?>" class="form-control" id="Birthday" />
		</div>
	</div>
	<div class="form-group">
		<label for="Phone" class="col-md-4 control-label">Phone</label>
		<div class="col-md-8">
			<input type="text" name="Phone" value="<?php echo $this->input->post('Phone'); ?>" class="form-control" id="Phone" />
		</div>
	</div>
	<div class="form-group">
		<label for="Email" class="col-md-4 control-label">Email</label>
		<div class="col-md-8">
			<input type="text" name="Email" value="<?php echo $this->input->post('Email'); ?>" class="form-control" id="Email" />
		</div>
	</div>
	<div class="form-group">
		<label for="Address" class="col-md-4 control-label">Address</label>
		<div class="col-md-8">
			<input type="text" name="Address" value="<?php echo $this->input->post('Address'); ?>" class="form-control" id="Address" />
		</div>
	</div>
	<div class="form-group">
		<label for="Note" class="col-md-4 control-label">Note</label>
		<div class="col-md-8">
			<input type="text" name="Note" value="<?php echo $this->input->post('Note'); ?>" class="form-control" id="Note" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>