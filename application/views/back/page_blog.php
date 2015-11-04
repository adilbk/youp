<!-- BEGIN INTRO -->
<div class="row">
							<div class="col-lg-12">
								<h2 class="text-primary">Articles du blog</h2>
							</div><!--end .col -->
							<div class="col-lg-8">
								<p class="lead">
									Ajouter ou modifier/supprimer les posts que vous désirez.
								</p>
							</div><!--end .col -->
						</div><!--end .row -->
		<div class="card">
				<div class="card-head style-primary">
					<header>Blog Posts</header>
					<div class="tools">
						<div class="btn-group">
							<a class="btn btn-icon-toggle btn-refresh"><i class="md md-refresh"></i></a>
							<a href="<?php echo base_url() ?>panel/page/blog_ajouter" class="btn btn-icon-toggle"><i class="fa fa-plus"></i></a>
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
												
												<th>Title</th>
												<th>Description</th>
												<th>Date</th>
												<th>Actions</th>
											</tr>
										</thead>
										
											<?php 

											foreach ($AllPosts as $key => $value) {
												echo '
											<tr>
												
												<td>'.$value->title.'</td>
												<td>'.$value->description.'</td>
												<td>'.$value->date.'</td>
												<td><a href="'.base_url().'panel/page/blog_edit?id='.$value->id.'">Editer</a> - <a href="'.base_url().'panel/operations/supprimer_post?id='.$value->id.'">Supprimer</a></td>
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