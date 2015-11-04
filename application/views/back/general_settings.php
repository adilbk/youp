					
						<!-- BEGIN INTRO -->
						<div class="row">
							<div class="col-lg-12">
								<h2 class="text-primary">Réglages principaux</h2>
							</div><!--end .col -->
							<div class="col-lg-8">
								<p class="lead">
									Modifier le titre et la description du site et enregistrer.
								</p>
							</div><!--end .col -->
						</div><!--end .row -->
					<div class="row">
						<div class="col-lg-12">
														<form class="form" method="POST" action="<?php echo base_url().'panel/operations/general_settings'; ?>">
															<div class="card">
																<div class="card-head style-primary">
																	<header>Réglages généraux</header>
																</div>
																<div class="card-body">
							
																	<br/>
																	<div class="row">
																		<div class="col-sm-6">
																			
																		</div>
																	</div>
																	<div class="form-group">
																		<input type="text" class="form-control" name="title">
																		<label for="Username1">Titre</label>
																	</div>
																	<div class="form-group">
																		<input type="text" class="form-control" name="description">
																		<label for="Password1">Description</label>
																	</div>
																</div><!--end .card-body -->
																<div class="card-actionbar">
																	<div class="card-actionbar-row">
																		<input type="submit" class="btn btn-flat btn-primary ink-reaction" value="Save"/>
																	</div>
																</div>
															</div><!--end .card -->
														</form>
						</div>
					</div>