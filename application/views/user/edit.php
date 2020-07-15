<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Chỉnh sửa người dùng</h3>
            </div>
			<?php echo form_open('user/edit/'.$user['IdUser']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="Username" class="control-label">Tài khoản</label>
						<div class="form-group">
							<input type="text" name="Username" value="<?php echo ($this->input->post('Username') ? $this->input->post('Username') : $user['Username']); ?>" class="form-control" id="Username" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Password" class="control-label">Mật khẩu</label>
						<div class="form-group">
							<input type="text" name="Password" value="<?php echo ($this->input->post('Password') ? $this->input->post('Password') : $user['Password']); ?>" class="form-control" id="Password" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="IdDecentralization" class="control-label">Vai trò</label>
						<div class="form-group">
							<select name="IdDecentralization" class="form-control" id="IdDecentralization">
								<?php
									foreach($decentralization as $role) { 
										if($user['IdDecentralization'] === $role['IdDecentralization']){
											echo "<option value={$role['IdDecentralization']} selected >{$role['Name']}</option>";
										}
										else
											echo "<option value={$role['IdDecentralization']}>{$role['Name']}</option>";
									} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Fullname" class="control-label">Họ tên</label>
						<div class="form-group">
							<input type="text" name="Fullname" value="<?php echo ($this->input->post('Fullname') ? $this->input->post('Fullname') : $user['Fullname']); ?>" class="form-control" id="Fullname" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="IdentityCard" class="control-label">Chứng minh thư</label>
						<div class="form-group">
							<input type="text" name="IdentityCard" value="<?php echo ($this->input->post('IdentityCard') ? $this->input->post('IdentityCard') : $user['IdentityCard']); ?>" class="form-control" id="IdentityCard" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Birthday" class="control-label">Ngày sinh</label>
						<div class="form-group">
							<input type="date" name="Birthday" value="<?php echo ($this->input->post('Birthday') ? $this->input->post('Birthday') : $user['Birthday']); ?>" class="form-control" id="Birthday" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Phone" class="control-label">Số điện thoại</label>
						<div class="form-group">
							<input type="text" name="Phone" value="<?php echo ($this->input->post('Phone') ? $this->input->post('Phone') : $user['Phone']); ?>" class="form-control" id="Phone" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="Email" value="<?php echo ($this->input->post('Email') ? $this->input->post('Email') : $user['Email']); ?>" class="form-control" id="Email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Address" class="control-label">Địa chỉ</label>
						<div class="form-group">
							<input type="text" name="Address" value="<?php echo ($this->input->post('Address') ? $this->input->post('Address') : $user['Address']); ?>" class="form-control" id="Address" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Note" class="control-label">Ghi chú</label>
						<div class="form-group">
							<input type="text" name="Note" value="<?php echo ($this->input->post('Note') ? $this->input->post('Note') : $user['Note']); ?>" class="form-control" id="Note" />
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