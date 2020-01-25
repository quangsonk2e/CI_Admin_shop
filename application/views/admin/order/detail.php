<style>
						.font-label{
							font-weight:bold;
							text-align: right;
						}
					</style>
					<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title"><?=$catalog; ?></h2>
							</header>
							<div class="panel-body">
								<div class="col-md-12">
									<div class="col-md-12 col-xs-12">
										<div class="col-md-2 col-xs-4 text-right"><label >Tên khách hàng:</label></div>
										<div class="col-md-10 col-xs-8"><label class="font-label">Lại Quang Sơn</label></div>
									</div>
									<div class="col-md-12 col-xs-12">
										<div class="col-md-2 col-xs-4 text-right"><label >Địa chỉ:</label></div>
										<div class="col-md-10 col-xs-8"><label class="font-label">Lại Quang Sơn</label></div>
									</div>
									<div class="col-md-6 col-xs-6">
										<div class="col-md-6 col-xs-6">
											<div class="col-md-4 text-right"><label >SĐT</label></div>
											<div class="col-md-8"><label class="font-label">Lại Quang Sơn</label></div>
										</div>
										<div class="col-md-6 col-xs-6">
											<div class="col-md-4"><label >TG giao</label></div>
											<div class="col-md-8"><label class="font-label">Lại Quang Sơn</label></div>
										</div>
										
									</div>
									<div class="col-md-6 col-xs-6">
										<div class="col-md-4 col-xs-4">
											<div class="col-md-4"><label >Tổng tiền</label></div>
											<div class="col-md-8"><label class="font-label">Lại Quang Sơn</label></div>
										</div>
									</div>
								</div>
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									 <thead>
										<tr>
											<th>STT</th>
											<th>Tên khách hàng</th>
											<th >Thời gian đặt hàng</th>
											<th >Miêu tả</th>
											<th>Chi tiết</th>
										</tr>
									</thead>
									<tbody>
										<?php $stt=1;
										foreach ($order->result() as $item) {
											
											?>
										
										<tr class="gradeX">
											<td><?php echo $stt;?></td>
											<td><?php echo $item->full_name;?></td>
											<td><?php echo date('H:i:s d/m/Y',strtotime($item->txtn_date));?></td>
											<td ><?= $item->description;?></td>
											<td class="text-center"><a><button class="btn btn-primary" style="padding: 3px">Chi tiết</button></a></td>
										</tr>
										<?php $stt++;
									}?>
										
									</tbody>

								</table>
							
								<?php echo $links;?> 
							</div>

						</section>
						

					<!-- end: page -->
					