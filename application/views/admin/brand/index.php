
					<!-- start: page -->
						<section class="panel">
					<?php $this->load->view('include/admin/message');?>

							<header class="panel-heading">
								<a href="<?=base_url();?>admin/brand/add"><button class=" mb-xs mt-xs mr-xs btn btn-primary pull-right" style="position: absolute; top:10px; right: 90px;">Thêm</button></a>
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title"><?=$catalog; ?></h2>

							</header>
							<div class="panel-body">

								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th>STT</th>
											<th>Tên nhóm hàng</th>
											<th>Ngày Tạo</th>
											<th>Chọn</th>
											<!-- <th class="hidden-phone">Engine version</th>
											<th class="hidden-phone">CSS grade</th> -->
										</tr>
									</thead>
									<tbody>
										<?php 
										$stt=1;
										foreach ($brands->result() as $item) {
											
										 ?>
										<tr class="gradeX">
											<td><?=$stt;?></td>
											<td><a href="<?php echo base_url().'admin/brand/edit/'.$item->id;?>" style="text-decoration:none; "><?=$item->brand; ?></a></td>
											<td><?php echo date('d/m/Y',strtotime($item->created));?></td>
											<td class="text-center"><a href="<?php echo base_url().'admin/brand/edit/'.$item->id;?>"><i class="fa fa-edit"></i></a>-<a href="<?php echo base_url().'admin/brand/delete/'.$item->id;?>"><i class="glyphicon glyphicon-remove"></i></a></td>
											<!-- <td class="center hidden-phone">4</td>
											<td class="center hidden-phone">X</td> -->
										</tr>
										<?php 

										$stt++;
										}?>
										
									</tbody>

								</table>
							<?php print_r($links);?>
								
							</div>

						</section>
						

					<!-- end: page -->