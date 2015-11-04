
						<!-- BEGIN INTRO -->
						<div class="row">
							<div class="col-lg-12">
								<h2 class="text-primary">Ajouter un nouvel article</h2>
							</div><!--end .col -->
							<div class="col-lg-8">
								<p class="lead">
									Entrer le titre, la description et le contenu de votre post et publiez-le.
								</p>
							</div><!--end .col -->
						</div><!--end .row -->
						<!-- END INTRO -->

						<!-- BEGIN HORIZONTAL FORM - BASIC ELEMENTS-->
						<div class="card">
							<div class="card-body">
								<div id="success_message" hidden="true" class="alert alert-callout alert-success" role="alert">
									<strong>Bien fait!</strong> Vous avez publié l'article avec succès.
								</div>
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label for="regular13" class="col-sm-1 control-label">Titre de l'article</label>
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
									<input id="article_id" type="hidden" value="0">
									<br/>
									<div id="summernote" style="min-heigth:1000px;">
										<h2>Saisissez un article agréable!</h2>
										<p>Vous pouvez faire plains de chose avec nos plugins!</p>
									</div>
									<br/>
									<p><button type="button" OnClick="post_data('<?php echo base_url(); ?>panel/operations/ajouter_post')" class="btn btn-block ink-reaction btn-success">Publier</button></p>
								</form>
							</div><!--end .card-body -->
						</div><!--end .card -->