<?php echo form_open('tour/edit/'.$tour['IdTour'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="Name" class="col-md-4 control-label">Name</label>
		<div class="col-md-8">
			<input type="text" name="Name" value="<?php echo ($this->input->post('Name') ? $this->input->post('Name') : $tour['Name']); ?>" class="form-control" id="Name" />
		</div>
	</div>
	<div class="form-group">
		<label for="Schedule" class="col-md-4 control-label">Schedule</label>
		<div class="col-md-8">
			<input type="text" name="Schedule" value="<?php echo ($this->input->post('Schedule') ? $this->input->post('Schedule') : $tour['Schedule']); ?>" class="form-control" id="Schedule" />
		</div>
	</div>
	<div class="form-group">
		<label for="Start" class="col-md-4 control-label">Start</label>
		<div class="col-md-8">
			<input type="text" name="Start" value="<?php echo ($this->input->post('Start') ? $this->input->post('Start') : $tour['Start']); ?>" class="form-control" id="Start" />
		</div>
	</div>
	<div class="form-group">
		<label for="NoDay" class="col-md-4 control-label">NoDay</label>
		<div class="col-md-8">
			<input type="text" name="NoDay" value="<?php echo ($this->input->post('NoDay') ? $this->input->post('NoDay') : $tour['NoDay']); ?>" class="form-control" id="NoDay" />
		</div>
	</div>
	<div class="form-group">
		<label for="NoNight" class="col-md-4 control-label">NoNight</label>
		<div class="col-md-8">
			<input type="text" name="NoNight" value="<?php echo ($this->input->post('NoNight') ? $this->input->post('NoNight') : $tour['NoNight']); ?>" class="form-control" id="NoNight" />
		</div>
	</div>
	<div class="form-group">
		<label for="Vehicle" class="col-md-4 control-label">Vehicle</label>
		<div class="col-md-8">
			<input type="text" name="Vehicle" value="<?php echo ($this->input->post('Vehicle') ? $this->input->post('Vehicle') : $tour['Vehicle']); ?>" class="form-control" id="Vehicle" />
		</div>
	</div>
	<div class="form-group">
		<label for="Hotel" class="col-md-4 control-label">Hotel</label>
		<div class="col-md-8">
			<input type="text" name="Hotel" value="<?php echo ($this->input->post('Hotel') ? $this->input->post('Hotel') : $tour['Hotel']); ?>" class="form-control" id="Hotel" />
		</div>
	</div>
	<div class="form-group">
		<label for="NoTicket" class="col-md-4 control-label">NoTicket</label>
		<div class="col-md-8">
			<input type="text" name="NoTicket" value="<?php echo ($this->input->post('NoTicket') ? $this->input->post('NoTicket') : $tour['NoTicket']); ?>" class="form-control" id="NoTicket" />
		</div>
	</div>
	<div class="form-group">
		<label for="Price" class="col-md-4 control-label">Price</label>
		<div class="col-md-8">
			<input type="text" name="Price" value="<?php echo ($this->input->post('Price') ? $this->input->post('Price') : $tour['Price']); ?>" class="form-control" id="Price" />
		</div>
	</div>
	<div class="form-group">
		<label for="IdTourType" class="col-md-4 control-label">IdTourType</label>
		<div class="col-md-8">
			<input type="text" name="IdTourType" value="<?php echo ($this->input->post('IdTourType') ? $this->input->post('IdTourType') : $tour['IdTourType']); ?>" class="form-control" id="IdTourType" />
		</div>
	</div>
	<div class="form-group">
		<label for="Note" class="col-md-4 control-label">Note</label>
		<div class="col-md-8">
			<input type="text" name="Note" value="<?php echo ($this->input->post('Note') ? $this->input->post('Note') : $tour['Note']); ?>" class="form-control" id="Note" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>