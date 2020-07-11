<?php echo form_open('billinfo/edit/'.$billinfo['IdBillInfo'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="IdBill" class="col-md-4 control-label">IdBill</label>
		<div class="col-md-8">
			<input type="text" name="IdBill" value="<?php echo ($this->input->post('IdBill') ? $this->input->post('IdBill') : $billinfo['IdBill']); ?>" class="form-control" id="IdBill" />
		</div>
	</div>
	<div class="form-group">
		<label for="NoAdult" class="col-md-4 control-label">NoAdult</label>
		<div class="col-md-8">
			<input type="text" name="NoAdult" value="<?php echo ($this->input->post('NoAdult') ? $this->input->post('NoAdult') : $billinfo['NoAdult']); ?>" class="form-control" id="NoAdult" />
		</div>
	</div>
	<div class="form-group">
		<label for="NoChildren" class="col-md-4 control-label">NoChildren</label>
		<div class="col-md-8">
			<input type="text" name="NoChildren" value="<?php echo ($this->input->post('NoChildren') ? $this->input->post('NoChildren') : $billinfo['NoChildren']); ?>" class="form-control" id="NoChildren" />
		</div>
	</div>
	<div class="form-group">
		<label for="TotalPrice" class="col-md-4 control-label">TotalPrice</label>
		<div class="col-md-8">
			<input type="text" name="TotalPrice" value="<?php echo ($this->input->post('TotalPrice') ? $this->input->post('TotalPrice') : $billinfo['TotalPrice']); ?>" class="form-control" id="TotalPrice" />
		</div>
	</div>
	<div class="form-group">
		<label for="Note" class="col-md-4 control-label">Note</label>
		<div class="col-md-8">
			<input type="text" name="Note" value="<?php echo ($this->input->post('Note') ? $this->input->post('Note') : $billinfo['Note']); ?>" class="form-control" id="Note" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>