


		<main role="main">
			<div id="intro-wrap" style="height:300px;">
				<div id="intro" class="preload darken" data-autoplay="5000" data-navigation="true" data-pagination="true" data-transition="fadeUp">													
					<div class="intro-item" style="background-image: url(<?php echo asset_url().'/img/slider_images/slider_image_1.jpg'; ?>); ">
						<div class="caption">
							<h2>Blog</h2>
						</div><!-- caption -->					
					</div>						
															
				</div><!-- intro -->
			</div><!-- intro-wrap -->

			<div id="main" class="row">
				<div class="row-content buffer-left buffer-right buffer-bottom clear-after">
					<div class="column nine">
						<?php


						foreach ($blog as $key => $value) {
							echo '

									<article class="clear-after">
										<div class="column three">
											<figure><img src="'.asset_url().'/img/blog_images/'.$value->image.'"></figure>
										</div><!-- column three -->
										<div class="column nine last">
											<h2><a href="'.base_url().'blog/article/'.$value->id.'">'.$value->title.'</a></h2>
											<h5 class="meta-post"><time datetime="2013-11-10">'.$value->date.' - EL GARRAB Hamza</time></h5>
											<p>'.$value->description.'</p>	
										</div><!-- column nine -->
									</article>

							';
						}
						

						?>
						<div id="pagination">
							<ul class="clear-after reset plain">
								<li id="older" class="pagination-nav"><a href="#" class="button transparent aqua"><i class="fa fa-chevron-left"></i><span class="label">Older</span></a></li> 
								<li id="newer" class="pagination-nav"><a href="#" class="button transparent aqua"><span class="label">Newer</span><i class="fa fa-chevron-right"></i></a></li>  
							</ul>
						</div>											
					</div><!-- column nine -->
					<aside role="complementary" class="sidebar column three last">
						<div class="widget widget_search">
							<form role="search">
								<span class="pre-input"><i class="icon icon-search"></i></span>
								<input type="text" placeholder="Search..." value="" class="plain buffer">
							</form>
						</div>
						<div class="widget">
							<h4>About the Blog</h4>
							<div class="textwidget">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
							</div><!-- la class="textwidget" è forse generata automaticamente da wp -->
						</div>
						<div class="widget">
							<h4>Recent Posts</h4>
							<ul class="plain">
								<li><a href="#">Uff e che fatica</a></li>
								<li><a href="#">Un weekend al mare</a></li>
								<li><a href="#">Il signor Kasper</a></li>
								<li><a href="#">Ottimo lavoro</a></li>
							</ul>
						</div>						
					</aside>
				</div><!-- row-content -->
			</div><!-- row -->
		</main><!-- main -->