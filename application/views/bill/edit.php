<?php echo form_open('bill/edit/'.$bill['IdBill'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="OrderDate" class="col-md-4 control-label">OrderDate</label>
		<div class="col-md-8">
			<input type="text" name="OrderDate" value="<?php echo ($this->input->post('OrderDate') ? $this->input->post('OrderDate') : $bill['OrderDate']); ?>" class="form-control" id="OrderDate" />
		</div>
	</div>
	<div class="form-group">
		<label for="Status" class="col-md-4 control-label">Status</label>
		<div class="col-md-8">
			<input type="text" name="Status" value="<?php echo ($this->input->post('Status') ? $this->input->post('Status') : $bill['Status']); ?>" class="form-control" id="Status" />
		</div>
	</div>
	<div class="form-group">
		<label for="IdUser" class="col-md-4 control-label">IdUser</label>
		<div class="col-md-8">
			<input type="text" name="IdUser" value="<?php echo ($this->input->post('IdUser') ? $this->input->post('IdUser') : $bill['IdUser']); ?>" class="form-control" id="IdUser" />
		</div>
	</div>
	<div class="form-group">
		<label for="CustomerName" class="col-md-4 control-label">CustomerName</label>
		<div class="col-md-8">
			<input type="text" name="CustomerName" value="<?php echo ($this->input->post('CustomerName') ? $this->input->post('CustomerName') : $bill['CustomerName']); ?>" class="form-control" id="CustomerName" />
		</div>
	</div>
	<div class="form-group">
		<label for="CustomerIdentityCard" class="col-md-4 control-label">CustomerIdentityCard</label>
		<div class="col-md-8">
			<input type="text" name="CustomerIdentityCard" value="<?php echo ($this->input->post('CustomerIdentityCard') ? $this->input->post('CustomerIdentityCard') : $bill['CustomerIdentityCard']); ?>" class="form-control" id="CustomerIdentityCard" />
		</div>
	</div>
	<div class="form-group">
		<label for="CustomerBirthday" class="col-md-4 control-label">CustomerBirthday</label>
		<div class="col-md-8">
			<input type="text" name="CustomerBirthday" value="<?php echo ($this->input->post('CustomerBirthday') ? $this->input->post('CustomerBirthday') : $bill['CustomerBirthday']); ?>" class="form-control" id="CustomerBirthday" />
		</div>
	</div>
	<div class="form-group">
		<label for="CustomerAddress" class="col-md-4 control-label">CustomerAddress</label>
		<div class="col-md-8">
			<input type="text" name="CustomerAddress" value="<?php echo ($this->input->post('CustomerAddress') ? $this->input->post('CustomerAddress') : $bill['CustomerAddress']); ?>" class="form-control" id="CustomerAddress" />
		</div>
	</div>
	<div class="form-group">
		<label for="CustomerPhone" class="col-md-4 control-label">CustomerPhone</label>
		<div class="col-md-8">
			<input type="text" name="CustomerPhone" value="<?php echo ($this->input->post('CustomerPhone') ? $this->input->post('CustomerPhone') : $bill['CustomerPhone']); ?>" class="form-control" id="CustomerPhone" />
		</div>
	</div>
	<div class="form-group">
		<label for="CustomerEmail" class="col-md-4 control-label">CustomerEmail</label>
		<div class="col-md-8">
			<input type="text" name="CustomerEmail" value="<?php echo ($this->input->post('CustomerEmail') ? $this->input->post('CustomerEmail') : $bill['CustomerEmail']); ?>" class="form-control" id="CustomerEmail" />
		</div>
	</div>
	<div class="form-group">
		<label for="Note" class="col-md-4 control-label">Note</label>
		<div class="col-md-8">
			<input type="text" name="Note" value="<?php echo ($this->input->post('Note') ? $this->input->post('Note') : $bill['Note']); ?>" class="form-control" id="Note" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>