<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Thêm Tour</h3>
            </div>
            <?php echo form_open('tour/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="Name" class="control-label">Tên tour</label>
						<div class="form-group">
							<input type="text" name="Name" value="<?php echo $this->input->post('Name'); ?>" class="form-control" id="Name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Schedule" class="control-label">Lịch trình</label>
						<div class="form-group">
							<input type="text" name="Schedule" value="<?php echo $this->input->post('Schedule'); ?>" class="form-control" id="Schedule" holder="TPHCM-Đà Nẵng-Hà Nội"/>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Start" class="control-label">Nơi khởi hành</label>
						<div class="form-group">
							<input type="text" name="Start" value="<?php echo $this->input->post('Start'); ?>" class="form-control" id="Start" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="NoDay" class="control-label">Số ngày</label>
						<div class="form-group">
							<input type="number" name="NoDay" value="<?php echo $this->input->post('NoDay'); ?>" class="form-control" id="NoDay" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="NoNight" class="control-label">Số đêm</label>
						<div class="form-group">
							<input type="number" name="NoNight" value="<?php echo $this->input->post('NoNight'); ?>" class="form-control" id="NoNight" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Vehicle" class="control-label">Phương tiện</label>
						<div class="form-group">
							<input type="text" name="Vehicle" value="<?php echo $this->input->post('Vehicle'); ?>" class="form-control" id="Vehicle" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Hotel" class="control-label">Khách sạn</label>
						<div class="form-group">
							<input type="text" name="Hotel" value="<?php echo $this->input->post('Hotel'); ?>" class="form-control" id="Hotel" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="NoTicket" class="control-label">Số lượng vé</label>
						<div class="form-group">
							<input type="number" name="NoTicket" value="<?php echo $this->input->post('NoTicket'); ?>" class="form-control" id="NoTicket" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Price" class="control-label">Giá</label>
						<div class="form-group">
							<input type="number" name="Price" value="<?php echo $this->input->post('Price'); ?>" class="form-control" id="Price" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="IdTourType" class="control-label">Loại Tour</label>
						<div class="form-group">
							<!-- <input type="select" name="IdTourType" value="<?php echo $this->input->post('IdTourType'); ?>" class="form-control" id="IdTourType" /> -->
							<select name="IdTourType" id="IdTourType" class="form-control"><option value="0">Chọn loại Tour</option><?php
							foreach($tourtype as $t)
							{?>
								<option value="<?php echo $t["IdTourType"]; ?>"><?php echo $t["Name"]?></option>;
							<?php }
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
							<input type="text" name="Note" value="<?php echo $this->input->post('Note'); ?>" class="form-control" id="Note" />
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