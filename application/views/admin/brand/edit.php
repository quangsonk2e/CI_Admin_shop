
					<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								
						
								<h2 class="panel-title"><?=$catalog; ?></h2>
							</header>
							<div class="panel-body">
							<?php $this->load->view('include/admin/message');?>
							<?php foreach ($item as $key) {?>
							<form class="form-horizontal form-bordered" method="post" id="form123" action="<?php echo base_url();?>admin/brand/edit/<?=$key->id; ?>">
								<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
								
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Tên nhóm</label>
												<div class="col-md-6">
													
													
													
													<input type="text" class="form-control" name="b_name" id="inputDefault" value="<?php echo $key->brand;?>">
												
												</div>
												 <span class="text-danger"><?php echo form_error('b_name'); ?></span>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label">Ngày tạo</label>
												<div class="col-md-6">
													<div class="input-group">
														<input type="text" data-plugin-datepicker="" data-plugin-options='{"language":"vi"}' class="form-control" value="<?php echo date('d/m/Y',strtotime($key->created));?>" name="b_date">
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
													</div>
												</div>
											</div>
										
							</div>
							<footer class="panel-footer text-center" >
										<button class="btn btn-primary" type="submit" name="submit">Lưu </button>
										<button type="reset" class="btn btn-default">Reset</button>
							</footer>
							</form>
							<?php }?>
						</section>
						

					<!-- end: page -->