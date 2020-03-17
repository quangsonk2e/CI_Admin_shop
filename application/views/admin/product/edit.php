<style>
	.image{
		margin: 10px;
    width: 200px;
    height: 150px;
	}
	#image_preview{
		overflow: auto;
		max-height: 200px;
	}
</style>
					<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								
						<!--  -->
								<h2 class="panel-title"><?=$catalog; ?></h2>
							</header>
							<div class="panel-body">
							<?php $this->load->view('include/admin/message');?>
							<?php
							$sizes='';
							 foreach ($item as $key) {
							 	$sizes=$key->sizes;
							 	?>
							<form class="form-horizontal form-bordered" method="post" id="form1"  enctype="multipart/form-data" action="<?php echo base_url();?>admin/product/edit_valid">
								<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
								<input type="text" class="form-control hidden" name="id" id="id" value="<?=$key->id; ?>">
											<div class="form-group">
												<label class="col-md-3 control-label" for="title">Tên sản phẩm</label>
												<div class="col-md-6">
													<input type="text" class="form-control" name="title" id="title" value="<?=$key->title; ?>">
												</div>
												<span class="text-danger"><?php echo form_error('title'); ?></span>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label" for="brand">Thuộc nhóm</label>
												<div class="col-md-6">
													<select data-plugin-selectTwo class="form-control populate" name="brand">
														<?php foreach ($brands as $item) {
															
														?>
														
															<option value="<?=$item->id;?>" <?php echo $key->brand==$item->id?'selected':''; ?>><?=$item->brand;?></option>
														<?php }?>
													</select>
												</div>
											 <span class="text-danger"><?php echo form_error('brand'); ?></span>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Thuộc loại</label>
												<div class="col-md-6">
													<select data-plugin-selectTwo class="form-control populate" name="category">
														<?php foreach ($categories as $item) {
															
														?>
														
															<option value="<?=$item->id;?>" <?php echo $key->categories==$item->id?'selected':''; ?>><?=$item->category;?></option>
														<?php }?>
													</select>
												</div>
												<!-- <div class="col-md-6">
													<input type="text" class="form-control" name="catalog" id="inputDefault" value="<?php echo set_value('catalog'); ?>">
												</div> -->
												<span class="text-danger"><?php echo form_error('catalog'); ?></span>
											</div>
												<div class="form-group">
												<label class="col-md-3 control-label" for="price">Giá sản phẩm</label>
												<div class="col-md-6">
													<div class="input-group">
													<input type="text" class="form-control money text-right" name="price" id="price" value="<?=number_format($key->price); ?>">
													<span class="input-group-addon">
															<i class="fa">&#8363;</i>
														</span>
												</div>
												</div>
												<span class="text-danger"><?php echo form_error('price'); ?></span>
											</div>
												<div class="form-group">
												<label class="col-md-3 control-label" for="list_price">Giá ưu đãi</label>
												<div class="col-md-6">
													<div class="input-group ">
													<input type="text" class="form-control money text-right" name="list_price" id="inputDefault" value="<?=number_format($key->list_price);  ?>">
													<span class="input-group-addon">
															<i class="fa">&#8363;</i>
														</span>
												</div>
												</div>
												<span class="text-danger"><?php echo form_error('list_price'); ?></span>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label" for="sizes">Chọn nhập số lượng và kích cỡ</label>
												<div class="col-md-4">
													<input type="text" class="form-control" name="sizes" id="sizes" value="<?=$key->sizes;  ?>" readonly>
													
												</div>
												<div class="col-md-2"><button class="btn btn-primary" onclick="jQuery('#sizesModal').modal('toggle'); return false;"> Số lượng và cỡ</button></div>
												<span class="text-danger"><?php echo form_error('sizes'); ?></span>
											</div>
											<!-- <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Ảnh</label>
												<div class="col-md-4">
													<input type="file" class="form-control" name="files[]" id="inputDefault" value="<?php echo set_value('b_sizes'); ?>" multiple accept=".gif, .jpg, .png">
													
												</div>
												
												<span class="text-danger"><?php echo form_error('b_sizes'); ?></span>
											</div> -->
												<div class="form-group">
												<label class="col-md-3 control-label" for="images">Chọn ảnh thay thế</label>
												<div class="col-md-4">
													<input type="file" class="form-control" name="images[]" id="images" multiple value=""  onchange="preview_image();">
													
												</div>
												
												<span class="text-danger"><?php echo form_error('images'); ?></span>

											</div>
											<div class="text-center">
												<label ><strong>Xem trước</strong></label>
												<div id="image_preview"><img src="<?=base_url('uploads/').$key->image;?>" class="image"></div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" for="description">Mô tả</label>
												<div class="col-md-6">
													<textarea class="col-md-12 form-control" name="description" value="<?=$key->description?>"></textarea>
													
													
												</div>
												
												<span class="text-danger"><?php echo form_error('sizes'); ?></span>
											</div>
											
											<div class="form-group">
												<label class="col-md-3 control-label">Ngày tạo</label>
												<div class="col-md-6">
													<div class="input-group">
														<input type="text" data-plugin-datepicker="" data-plugin-options='{"language":"vi"}' class="form-control date" value="<?php echo date('d/m/Y'); ?>" name="date">
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
													</div>
												</div>
											</div>

							</div>
							<footer class="panel-footer text-center" >
										<button class="btn btn-primary" type="submit">Lưu</button>
										<button type="reset" class="btn btn-default">Reset</button>
							</footer>

							</form>
						<?php }?>
						
							<div id="preview"><img src="" /></div><br>
							<div id="err"></div>
						</section>
						

					<!-- end: page -->

<!--start model bootstrap -->
<div class="modal fade datails-1" id="sizesModal" tabindex="-1" role="dialog" aria-labelledby="sizesModallabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
	<div class="modal-content">
		<div class="modal-header">
			<button class="close" type="button"  onclick="closeModal()" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title text-center">Kích cỡ và số lượng</h4>
		</div>
		
		<div class="modal-body">
		<div class="container-fluid">
			<?php 
			$sArray=array();
			$qArray=array();
			if(!empty($sizes)){
			$sizeString=$sizes;
			$sizeString=rtrim($sizeString,',');
			$sizesArray=explode(',',$sizeString);
			
			foreach($sizesArray as $ss){
				$s=explode(':',$ss);
				$sArray[]=$s[0];
				$qArray[]=$s[1];
				
			}
		
		}
		else {
			$sizesArray= array();
		}

			for($i=1;$i<=8;$i++):?>
				
					<div class="form-group col-md-4">
						<label for="size<?=$i;?>">Kích cỡ</label>
						<input type="text" name="size<?=$i;?>" id="size<?=$i;?>" value="<?=!empty($sArray[$i-1])?$sArray[$i-1]:'';?>" class="form-control">
					</div>
					<div class="form-group col-md-2">
						<label for="qty<?=$i;?>">Số Lượng</label>
						<input type="number" name="qty<?=$i;?>" id="qty<?=$i;?>" value="<?=!empty($qArray[$i-1])?$qArray[$i-1]:'';?>" min="0" class="form-control">
					</div>
			<?php endfor;?>
		
		
		</div>
		</div>
		<div class="modal-footer">
			<button class="btn btn-default" onclick="closeModal()">Close</button>
			<button class="btn btn-primary" onclick="updateSizes(); $('#sizesModal').modal('toggle');return false;">Save changes</button>
			
		</div>
	</div>
	</div>
</div>
<!--end model bootstrap -->