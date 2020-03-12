<form action="<?=base_url()?>admin/test/uploads" enctype="multipart/form-data" method="POST" class="form-inline" role="form">
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
	<div class="form-group">
		<label class="sr-only" for="">label</label>
		<input type="file" class="form-control" name="files[]" multiple>
	</div>

	

	<button type="submit" class="btn btn-primary">Submit</button>
</form>
<form action="<?=base_url()?>admin/test/upload" enctype="multipart/form-data" method="POST" class="form-inline" role="form">
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
	<div class="form-group">
		<label class="sr-only" for="">label</label>
		<input type="file" class="form-control" name="son">
	</div>

	

	<button type="submit" class="btn btn-primary">Submit</button>
</form>
<textarea name="ckeditor" id="ckeditor" class="form-control" rows="3" required="required"></textarea>