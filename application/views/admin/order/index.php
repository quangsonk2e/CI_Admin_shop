
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
											<td><a href="" style="text-decoration:none; "><?php echo $item->full_name;?></a></td>
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