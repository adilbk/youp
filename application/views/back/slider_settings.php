						
						<!-- BEGIN INTRO -->
						<div class="row">
							<div class="col-lg-12">
								<h2 class="text-primary">Slider Principal</h2>
							</div><!--end .col -->
							<div class="col-lg-12">
								<p class="lead">
									Selectionnez le slide à personnaliser, modifier les champs que vous désirez et enregistrer. (Résolution recommendée : 1800x600)
								</p>
							</div><!--end .col -->
						</div><!--end .row -->
						<div class="row">
							<?php
								foreach ($slider as $key => $value) {
									echo '

											<div class="col-md-4 col-sm-12">
												<div id="'.$value->id.'" class="card" style="background: url(\''.asset_url().'/img/slider_images/'.$value->image.'\'); background-size: cover; background-repeat: no-repeat; background-position: center center; cursor: pointer; cursor: hand;" onclick="updateDivs(\''.$value->title.'\',\''.$value->description.'\','.$value->id.',\''.$value->image.'\');">
													<div class="card-body no-padding" >
														<div class="alert" >
															<strong class="text-xl" style="color:white; text-shadow: 0 0 7px rgba(0,0,0, 0.8);">'.$value->title.'</strong><br/>
															<span class="opacity-50" style="color:white; text-shadow: 0 0 7px rgba(0,0,0, 0.8);">'.$value->description.'</span>
															<div class="stick-bottom-right">
																<div class="height-1 sparkline-visits" data-bar-color="#e5e6e6"></div>
															</div>
														</div>
													</div><!--end .card-body -->
												</div><!--end .card -->
											</div><!--end .col -->


									';
								}


							?>


						</div><!--end .row -->

						<!-- BEGIN HORIZONTAL FORM - BASIC ELEMENTS-->
						<div class="card">
							<div class="card-body">
									<?php 
									$attributes = array('class' => 'form-horizontal', 'role' => 'form');
									echo form_open_multipart(base_url().'panel/operations/upload_slider_image',$attributes); 
									?>
									<div class="form-group">
										<label for="regular13" class="col-sm-2 control-label">Title</label>
										<div class="col-sm-10">
											<input id="article_title" name="article_title" disabled type="text" class="form-control" >
										</div>
									</div>
									<div class="form-group">
										<label for="password13" class="col-sm-2 control-label">Description</label>
										<div class="col-sm-10">
											<input id="article_description" name="article_description" disabled type="text" class="form-control" >
										</div>
									</div>
							</div><!--end .card-body -->
						</div><!--end .card -->

						<div class="row">
							<div class="card-body no-padding" >
								<div class="col-md-12 col-sm-12">
									<div id="preview_div" class="card" style="background: url('<?php echo asset_url(); ?>/img/slider_images/preview.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center center; height:33.333em; margin-bottom:40px; overflow: hidden;">
										<div class="alert" style="">
												<div class="col-sm-2 pull-right">
														<button id="upload_button" disabled OnClick="performUpload();" class="btn ink-reaction btn-success"><i class="fa fa-floppy-o"></i> Enregistrer</button>
														<button id="browse_btn" type="button" disabled OnClick="performClick('to_upload_image');" class="btn ink-reaction btn-success"><i class="fa fa-refresh"></i> Changer l'image</button> 
														<input id="slide_to_update" name="slide_to_update" type="hidden"/>
														<input id="to_upload_image" name="to_upload_image" type="file" style="opacity: 0;" />
												<?php form_close(); ?>	
												</div>
												<div class="stick-bottom-right">
													<div class="height-1 sparkline-visits" data-bar-color="#e5e6e6"></div>
												</div>
										</div>
										</div><!--end .card -->
								</div><!--end .col -->
							</div>
						</div><!--end .row -->