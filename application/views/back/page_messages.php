
						<!-- BEGIN DATATABLE 2 -->
						<div class="row">
							<div class="col-md-12">
								<h4>Boite de reception: </h4>
							</div><!--end .col -->
							<div class="col-lg-12">
								<div class="table-responsive">
									<table id="datatable2" class="table order-column hover"  data-swftools="<?php echo back_asset_url(); ?>/js/libs/DataTables/extensions/TableTools/swf/copy_csv_xls_pdf.swf">
										<thead>
											<tr>
												<th></th>
												<th>Email</th>
												<th>Description</th>
												<th>Date</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody>
											<?php 

											foreach ($AllPosts as $key => $value) {
												echo '
											<tr>
												<td></td>
												<td>'.$value->title.'</td>
												<td>'.$value->description.'</td>
												<td>'.$value->date.'</td>
												<td><a href="'.base_url().'panel/operations/view_message">Lire</a> - <a href="'.base_url().'panel/operations/delete_message?id='.$value->id.'">Supprimer</a></td>
											</tr>
											';
											}
											
											?>

										</tbody>
									</table>
								</div><!--end .table-responsive -->
							</div><!--end .col -->
						</div><!--end .row -->
						<!-- END DATATABLE 2 -->