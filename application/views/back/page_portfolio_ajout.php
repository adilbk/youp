
						<!-- BEGIN INTRO -->
						<div class="row">
							<div class="col-lg-12">
								<h2 class="text-primary">Ajouter un Portfolio </h2>
							</div><!--end .col -->
							<div class="col-lg-8">
								<p class="lead">
									Soyez Creatif.
								</p>
							</div><!--end .col -->
						</div><!--end .row -->
						<!-- END INTRO -->

						<!-- BEGIN HORIZONTAL FORM - BASIC ELEMENTS-->
						<div class="card">
							<div class="card-body">
								<div id="success_message" hidden="true" class="alert alert-callout alert-success" role="alert">
									<strong>Bien fait!</strong> Vous avez ajouter l'image avec succès.
								</div>
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label for="regular13" class="col-sm-1 control-label">Titre de l'image</label>
										<div class="col-sm-11">
											<input id="article_title" type="text" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<label for="password13" class="col-sm-1 control-label">Description</label>
										<div class="col-sm-11">
											<input id="article_description" type="text" class="form-control">
										</div>
									</div>
									<div class="form-group">
												
										<label for="select1" class="col-sm-1 control-label">Categorie</label>
										<div class="col-sm-11">
										<select id="select1" name="select1" class="form-control">
													<option value="">&nbsp;</option>
													<option value="30">30</option>
													<option value="40">40</option>
													<option value="50">50</option>
													<option value="60">60</option>
													<option value="70">70</option>
										</select>
										</div>
									</div>
									<br/>

									<div class="form-group">
										
										<div class="col-sm-12">
											<div class="card">
												<div class="card-head style-primary">
													<header>Ajouter image</header>
												</div>
												<div class="card-body no-padding">
													<form action="../../html/forms/advanced.html" class="dropzone" id="my-awesome-dropzone">
												<div class="dz-message">
													<h3><center><font color="#B0B0B0 ">glisser ton fichier ici ou bien  Clicker pour telecharger.</font></center></h3>
												</div>
													</form>
												</div><!--end .card-body -->
											</div><!--end .card -->
								
										</div><!--end .col -->
									</div><!--end .row -->


									<input id="article_id" type="hidden" value="0">
									
									<br/>
									<p><button type="button" OnClick="post_data('<?php echo base_url(); ?>panel/operations/ajouter_post')" class="btn btn-block ink-reaction btn-success">Valider</button></p>
								</form>
							</div><!--end .card-body -->
						</div><!--end .card -->

