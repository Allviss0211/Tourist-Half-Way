<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Thêm hóa đơn</h3>
            </div>
            <?php echo form_open('bill/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="OrderDate" class="control-label">Ngày đặt vé</label>
						<div class="form-group">
							<input type="date" name="OrderDate" value="<?php echo $this->input->post('OrderDate'); ?>" class="form-control" id="OrderDate"/>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Status" class="control-label">Trạng thái</label>
						<div class="form-group">
							<input type="text" name="Status" value="<?php echo $this->input->post('Status'); ?>" class="form-control" id="Status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="IdUser" class="control-label">ID người dùng</label>
						<div class="form-group">
							<input type="text" name="IdUser" value="<?php echo $this->input->post('IdUser'); ?>" class="form-control" id="IdUser" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="CustomerName" class="control-label">Họ tên KH</label>
						<div class="form-group">
							<input type="text" name="CustomerName" value="<?php echo $this->input->post('CustomerName'); ?>" class="form-control" id="CustomerName" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="CustomerIdentityCard" class="control-label">Chứng minh thư KH</label>
						<div class="form-group">
							<input type="text" name="CustomerIdentityCard" value="<?php echo $this->input->post('CustomerIdentityCard'); ?>" class="form-control" id="CustomerIdentityCard" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="CustomerBirthday" class="control-label">Ngày sinh KH</label>
						<div class="form-group">
							<input type="text" name="CustomerBirthday" value="<?php echo $this->input->post('CustomerBirthday'); ?>" class="has-datepicker form-control" id="CustomerBirthday" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="CustomerAddress" class="control-label">Địa chỉ</label>
						<div class="form-group">
							<input type="text" name="CustomerAddress" value="<?php echo $this->input->post('CustomerAddress'); ?>" class="form-control" id="CustomerAddress" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="CustomerPhone" class="control-label">Số điện thoại KH</label>
						<div class="form-group">
							<input type="text" name="CustomerPhone" value="<?php echo $this->input->post('CustomerPhone'); ?>" class="form-control" id="CustomerPhone" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="CustomerEmail" class="control-label">Email KH</label>
						<div class="form-group">
							<input type="text" name="CustomerEmail" value="<?php echo $this->input->post('CustomerEmail'); ?>" class="form-control" id="CustomerEmail" />
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