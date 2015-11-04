<body class="single single-post">
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

		<main role="main">
			<div id="intro-wrap" style="height:300px;">
				<div id="intro" class="preload darken" data-autoplay="5000" data-navigation="true" data-pagination="true" data-transition="fadeUp">													
					<div class="intro-item" style="background-image: url(<?php echo asset_url().'/img/slider_images/slider_image_1.jpg'; ?>); ">
						<div class="caption">
							<h2><?php echo $post->title; ?></h2>
						</div><!-- caption -->					
					</div>						
															
				</div><!-- intro -->
			</div><!-- intro-wrap -->

			<div id="main" class="row">
				<div class="row-content buffer-left buffer-right buffer-bottom">
					<div id="post-nav">
						<ul class="clear-after reset plain">
							<li id="prev-items" class="post-nav"><a href="#"><i class="fa fa-chevron-left"></i><span class="label">Prev</span></a></li> 
							<li id="all-items" class="post-nav"><a href="#"><i class="icon icon-images"></i></a></li> 							 
							<li id="next-items" class="post-nav"><a href="#"><span class="label">Next</span><i class="fa fa-chevron-right"></i></a></li>  
						</ul>
					</div>

					<div class="post-area clear-after">
						<article role="main">
							<h5 class="meta-post"><a href="#">Travels</a>, <a href="#">World</a> - <time datetime="2013-11-09">November 9, 2013</time></h5>
							<h1><?php echo $post->title; ?></h1>
							<p><?php echo $post->content; ?></p>
						</article>

					</div><!-- post-area -->			
											
				</div><!-- row-content -->
			</div><!-- row -->
		</main><!-- main -->