<?php echo form_open('tourdescription/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="Description" class="col-md-4 control-label">Description</label>
		<div class="col-md-8">
			<input type="text" name="Description" value="<?php echo $this->input->post('Description'); ?>" class="form-control" id="Description" />
		</div>
	</div>
	<div class="form-group">
		<label for="Timeline" class="col-md-4 control-label">Timeline</label>
		<div class="col-md-8">
			<input type="text" name="Timeline" value="<?php echo $this->input->post('Timeline'); ?>" class="form-control" id="Timeline" />
		</div>
	</div>
	<div class="form-group">
		<label for="Image" class="col-md-4 control-label">Image</label>
		<div class="col-md-8">
			<input type="text" name="Image" value="<?php echo $this->input->post('Image'); ?>" class="form-control" id="Image" />
		</div>
	</div>
	<div class="form-group">
		<label for="IdTour" class="col-md-4 control-label">IdTour</label>
		<div class="col-md-8">
			<input type="text" name="IdTour" value="<?php echo $this->input->post('IdTour'); ?>" class="form-control" id="IdTour" />
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