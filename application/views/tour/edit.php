<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Chỉnh sửa Tour</h3>
            </div>
			<?php echo form_open('tour/edit/'.$tour['IdTour']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="Name" class="control-label">Tên</label>
						<div class="form-group">
							<input type="text" name="Name" value="<?php echo ($this->input->post('Name') ? $this->input->post('Name') : $tour['Name']); ?>" class="form-control" id="Name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Schedule" class="control-label">Lịch trình </label>
						<div class="form-group">
							<input type="text" name="Schedule" value="<?php echo ($this->input->post('Schedule') ? $this->input->post('Schedule') : $tour['Schedule']); ?>" class="form-control" id="Schedule" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Start" class="control-label">Nơi khởi hành</label>
						<div class="form-group">
							<input type="text" name="Start" value="<?php echo ($this->input->post('Start') ? $this->input->post('Start') : $tour['Start']); ?>" class="form-control" id="Start" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="NoDay" class="control-label">Ngày</label>
						<div class="form-group">
							<input type="text" name="NoDay" value="<?php echo ($this->input->post('NoDay') ? $this->input->post('NoDay') : $tour['NoDay']); ?>" class="form-control" id="NoDay" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="NoNight" class="control-label">Đêm</label>
						<div class="form-group">
							<input type="text" name="NoNight" value="<?php echo ($this->input->post('NoNight') ? $this->input->post('NoNight') : $tour['NoNight']); ?>" class="form-control" id="NoNight" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Vehicle" class="control-label">Phương tiện</label>
						<div class="form-group">
							<input type="text" name="Vehicle" value="<?php echo ($this->input->post('Vehicle') ? $this->input->post('Vehicle') : $tour['Vehicle']); ?>" class="form-control" id="Vehicle" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Hotel" class="control-label">Khách sạn</label>
						<div class="form-group">
							<input type="text" name="Hotel" value="<?php echo ($this->input->post('Hotel') ? $this->input->post('Hotel') : $tour['Hotel']); ?>" class="form-control" id="Hotel" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="NoTicket" class="control-label">Vé</label>
						<div class="form-group">
							<input type="text" name="NoTicket" value="<?php echo ($this->input->post('NoTicket') ? $this->input->post('NoTicket') : $tour['NoTicket']); ?>" class="form-control" id="NoTicket" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Price" class="control-label">Giá</label>
						<div class="form-group">
							<input type="text" name="Price" value="<?php echo ($this->input->post('Price') ? $this->input->post('Price') : $tour['Price']); ?>" class="form-control" id="Price" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="IdTourType" class="control-label">Loại Tour</label>
						<div class="form-group">
							<select name="IdTourType" id="IdTourType" class="form-control"><option value="0">Chọn loại Tour</option><?php
							foreach($tourtype as $t)
							{
								if($tour['IdTourType'] === $t['IdTourType']) {
									echo "<option value={$t["IdTourType"]} selected>{$t["Name"]}</option>";
								}
								else 
									echo "<option value={$t["IdTourType"]}>{$t["Name"]}</option>";
							}
							?></select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Image" class="control-label">Hình ảnh</label>
						<div class="form-group">
							<input type="file" name="Image" value="<?php echo $this->input->post('Image'); ?>" class="form-control" id="Image" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Note" class="control-label">Ghi chú</label>
						<div class="form-group">
							<input type="text" name="Note" value="<?php echo ($this->input->post('Note') ? $this->input->post('Note') : $tour['Note']); ?>" class="form-control" id="Note" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Lưu
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>