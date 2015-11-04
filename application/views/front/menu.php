
	<body class="blog list-style">
		<header role="banner" class="transparent light">
			<div class="row">
				<div class="nav-inner row-content buffer-left buffer-right even clear-after">
					<div id="brand">
						<h1 class="reset"><!--<img src="img/logo.png" alt="logo">--><a href="<?php echo base_url(); ?>"><?php echo $website->title; ?></a></h1>
					</div><!-- brand -->
					<a id="menu-toggle" href="#"><i class="fa fa-bars fa-lg"></i></a>
					<nav>
						<ul class="reset" role="navigation">
							<?php
								foreach ($menu as $key => $value) {
									echo '
											<li class="menu-item">
												<a href="'.base_url().$value->url.'">'.$value->title.'</a>
											</li>
									';
								}
							?>
						</ul>
					</nav>
				</div><!-- row-content -->	
			</div><!-- row -->	
		</header>