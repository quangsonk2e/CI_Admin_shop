<form action="<?php echo base_url();?>admin/test/add" method="POST" class="form-horizontal" role="form">
		<div class="form-group">
			<legend>Form title</legend>

		</div>
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
		
			<div class="form-group">
				<label for="input" class="col-sm-2 control-label">Tên:</label>
				<div class="col-sm-5">
					<input type="text" name="name" id="name" class="form-control" value="<?php echo set_value('name'); ?>"  >
					
				</div>
				<span class="text-danger"><?php echo form_error('name'); ?></span>
			</div>
			<div class="form-group">
				<label for="input" class="col-sm-2 control-label">Đia chỉ:</label>
				<div class="col-sm-5">
					<input type="text" name="diachi" id="diachi" class="form-control" value="<?php echo set_value('diachi'); ?>" >
				</div>
				<span class="text-danger"><?php echo form_error('diachi'); ?></span>
			</div>
			

		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
</form>