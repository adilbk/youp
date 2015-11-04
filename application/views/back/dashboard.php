						
						<!-- BEGIN INTRO -->
						<div class="row">
							<div class="col-lg-12">
								<h2 class="text-primary">Tableau de bord</h2>
							</div><!--end .col -->
							<div class="col-lg-8">
								<p class="lead">
									Les informations pertinantes a propos de votre site.
								</p>
							</div><!--end .col -->
						</div><!--end .row -->
						<div class="row">
							<!-- BEGIN ALERT - REVENUE -->
							<div class="col-md-3 col-sm-6">
								<div class="card">
									<div class="card-body no-padding">
										<div class="alert alert-callout alert-info no-margin">
											<strong class="text-xl"><?php echo $total_visits; ?></strong><br/>
											<span class="opacity-50">Total Visits</span>
											<div class="stick-bottom-left-right">
												<div class="height-2 sparkline-revenue" data-line-color="#bdc1c1"></div>
											</div>
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END ALERT - REVENUE -->

							<!-- BEGIN ALERT - VISITS -->
							<div class="col-md-3 col-sm-6">
								<div class="card">
									<div class="card-body no-padding">
										<div class="alert alert-callout alert-warning no-margin">
											<strong class="text-xl"><?php echo $total_visits; ?></strong><br/>
											<span class="opacity-50">Today Visits</span>
											<div class="stick-bottom-right">
												<div class="height-1 sparkline-visits" data-bar-color="#e5e6e6"></div>
											</div>
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END ALERT - VISITS -->

							<!-- BEGIN ALERT - BOUNCE RATES -->
							<div class="col-md-3 col-sm-6">
								<div class="card">
									<div class="card-body no-padding">
										<div class="alert alert-callout alert-danger no-margin">
											<strong class="text-xl"><?php echo $total_messages; ?></strong><br/>
											<span class="opacity-50">Total Messages</span>
											<div class="stick-bottom-left-right">
												<div class="progress progress-hairline no-margin">
													<div class="progress-bar progress-bar-danger" style="width:43%"></div>
												</div>
											</div>
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END ALERT - BOUNCE RATES -->

							<!-- BEGIN ALERT - TIME ON SITE -->
							<div class="col-md-3 col-sm-6">
								<div class="card">
									<div class="card-body no-padding">
										<div class="alert alert-callout alert-success no-margin">
											<h1 class="pull-right text-success"><i class="md md-timer"></i></h1>
											<strong class="text-xl"><?php echo $total_messages; ?></strong><br/>
											<span class="opacity-50">Today's Messages</span>
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END ALERT - TIME ON SITE -->

						</div><!--end .row -->


						<div class="row">

							<!-- BEGIN SITE ACTIVITY -->
							<div class="col-md-12">
								<div class="card ">
									<div class="row">
										<div class="col-md-12">
											<div class="card-head">
												<header>Activité du site</header>
											</div><!--end .card-head -->
											<div class="card-body height-8">
												<div id="flot-visitors-legend" class="flot-legend-horizontal stick-top-right no-y-padding"></div>
												<div id="flot-visitors" class="flot height-7" data-title="Activity entry" data-color="#7dd8d2,#0aa89e"></div>
											</div><!--end .card-body -->
										</div><!--end .col -->
									</div><!--end .row -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END SITE ACTIVITY -->

						</div><!--end .row -->