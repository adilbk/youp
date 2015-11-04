

					</div><!--end .section-body -->
				</section>
			</div><!--end #content-->
			<!-- END CONTENT -->
		<!-- BEGIN MENUBAR-->
			<div id="menubar" class="menubar-inverse ">
				<div class="menubar-fixed-panel">
					<div>
						<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
							<i class="fa fa-bars"></i>
						</a>
					</div>
					<div class="expanded">
						<a href="../../html/dashboards/dashboard.html">
							<span class="text-lg text-bold text-primary ">Youpel</span>
						</a>
					</div>
				</div>
				<div class="menubar-scroll-panel">

					<!-- BEGIN MAIN MENU -->
					<ul id="main-menu" class="gui-controls">

						<!-- BEGIN DASHBOARD -->
						<li>
							<a href="<?php echo base_url().'panel'; ?>" class="active">
								<div class="gui-icon"><i class="md md-home"></i></div>
								<span class="title">Motherboard</span>
							</a>
						</li><!--end /menu-li -->
						<!-- END DASHBOARD -->

						<!-- BEGIN General settings -->
						<li>
							<a href="<?php echo base_url().'panel/general_settings'; ?>" >
								<div class="gui-icon"><i class="md md-account-balance"></i></div>
								<span class="title">Réglages principaux</span>
							</a>
						</li><!--end /menu-li -->
						<!-- END General settings -->

						<!-- BEGIN PAGES -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><i class="md md-computer"></i></div>
								<span class="title">Elements du site</span>
							</a>
							<!--start submenu -->
							<ul>
								<li>
									<a href="<?php echo base_url().'panel/page/accueil'; ?>">
										<span class="title">Slider</span>
									</a>
								</li>
								<li>
									<a href="<?php echo base_url().'panel/page/qui_sommes_nous'; ?>">
										<span class="title">Qui Sommes Nous</span>
									</a>
								</li>
								<li>
									<a href="<?php echo base_url().'panel/page/portfolio'; ?>">
										<span class="title">Portfolios</span>
									</a>
								</li>
								<li>
									<a href="<?php echo base_url().'panel/page/blog'; ?>">
										<span class="title">Blog</span>
										
									</a>
								</li>
								<li>
									<a href="<?php echo base_url().'panel/page/contact'; ?>">
										<span class="title">Contact</span>
									</a>
								</li>
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->

						<!-- BEGIN Messages -->
						<li>
							<a href="<?php echo base_url().'panel/messages'; ?>" >
								<div class="gui-icon"><i class="md md-message"></i></div>
								<span class="title">Messages</span>
							</a>
						</li><!--end /menu-li -->
						<!-- END Messages -->

						<!-- BEGIN  settings -->
						<li>
							<a href="<?php echo base_url().'panel/settings'; ?>" >
								<div class="gui-icon"><i class="md md-settings"></i></div>
								<span class="title">settings</span>
							</a>
						</li><!--end /menu-li -->
						<!-- END  settings -->


					</ul><!--end .main-menu -->
					<!-- END MAIN MENU -->

					<div class="menubar-foot-panel">
						<small class="no-linebreak hidden-folded">
							<span class="opacity-75">Copyright &copy; 2014</span> <strong>CodeCovers</strong>
						</small>
					</div>
				</div><!--end .menubar-scroll-panel-->
			</div><!--end #menubar-->
		<!-- END MENUBAR -->

		</div><!--end #base-->
		<!-- END BASE -->
