
<body class="portfolio">
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
					<h2>Portfolio</h2>
				</div><!-- caption -->					
			</div>						
													
		</div><!-- intro -->
	</div><!-- intro-wrap -->
	

	<div id="main" class="row">
		<div class="row-content buffer clear-after">
			<ul class="inline cats filter-options">
				<li data-group="all">Tout</li>
				<li data-group="web">Sites web</li>
				<li data-group="desktop">Applications Desktop</li>
				<li data-group="mobile">Applications Mobiles</li>
				<li data-group="design">Designs</li>
				<li data-group="other">Autres</li>
			</ul>
			<div class="grid-items portfolio-section preload lightbox">

				<?php 

				foreach ($portfolio as $key => $value) {
					echo '

						<article class="item column three" data-groups=\'["all", "'.$value->category.'"]\'>
							<figure><img src="./assets/front/img/portfolio_images/'.$value->image.'" width="300" height="180" alt=""></figure>
							<a class="overlay" href="./assets/front/img/portfolio_images/'.$value->image.'">
								<div class="overlay-content">
									<div class="post-type"><i class="icon icon-search"></i></div>
									<h2>'.$value->title.'</h2>
									<p>'.$value->description.'</p>
								</div><!-- overlay-content -->
							</a><!-- overlay -->
						</article>

					';
				}

				

				?>

				<div class="shuffle-sizer three"></div>
			</div><!-- grid-items -->																												
		</div><!-- row-content -->
	</div><!-- row -->
</main><!-- main -->

</body>	
	