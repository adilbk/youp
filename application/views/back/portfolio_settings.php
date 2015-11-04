<!-- BEGIN INTRO -->
<div class="row">
							<div class="col-lg-12">
								<h2 class="text-primary">Portfolio</h2>
							</div><!--end .col -->
							<div class="col-lg-8">
								<p class="lead">
									Ajouter ou modifier/supprimer les images que vous désirez.
								</p>
							</div><!--end .col -->
						</div><!--end .row -->
		<div class="card">
				<div class="card-head style-primary">
					<header>Portfolio </header>
					<div class="tools">
						<div class="btn-group">
							<!-- <a class="btn btn-icon-toggle btn-refresh"><i class="md md-refresh"></i></a>-->
							<a href="<?php echo base_url() ?>Portfolio_ajout" class="btn btn-icon-toggle"><i class="fa fa-plus"></i></a>
						</div>
					</div>
				</div>
				<div class="card-body">
						<!-- BEGIN DATATABLE 2 -->
						<div class="row">
							<div class="col-lg-12">
								<div class="table-responsive">
									<table id="datatable1" class="table table-striped table-hover">
										<thead>
											<tr>
												<th>Image</th>
												<th>Title</th>
												<th>Description</th>
												<th>Category</th>
												<th>Actions</th>
											</tr>
										</thead>
										
											<?php 

											foreach ($AllPosts as $key => $value) {
												echo '
											<tr>
												
												<td><img src="'.asset_url().'/img/portfolio_images/'.$value->image.'" width="150" height="100" border="0" /></div></td>
												<td>'.$value->title.'</td>
												<td>'.$value->description.'</td>
												<td>'.$value->category.'</td>
												<td><a href="#f">Editer</a> - <a href="'.base_url().'panel/operations/supprimer_portfolio?id='.$value->id.'">Supprimer</a></td>
											</tr>
											';
											}
											
											?>

										
									</table>
								</div><!--end .table-responsive -->
							</div><!--end .col -->
						</div><!--end .row -->
						<!-- END DATATABLE 2 -->
				</div>
		</div>