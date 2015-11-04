
<div id="content">
<section>
	<div class="section-header">
		<ol class="breadcrumb">
			<li class="active"><h2 class="text-primary">Votre boite de reception</h2></li>
		</ol>
	</div>
	<div class="section-body">
		<div class="card">

			<!-- BEGIN SEARCH HEADER 
			<div class="card-head style-primary">
				<div class="tools pull-left">
					<form class="navbar-search" role="search">
						<div class="form-group">
							<input type="text" class="form-control" name="contactSearch" placeholder="Chercher par Email">
						</div>
						<button type="submit" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-search"></i></button>
					</form>
				</div>
			</div><!--end .card-head -->
			<!-- END SEARCH HEADER -->

			<!-- BEGIN SEARCH RESULTS -->
			<div class="card-body">
				<div class="row">

					<!-- BEGIN SEARCH NAV -->
					<div class="col-sm-4 col-md-3 col-lg-2">
						<ul class="nav nav-pills nav-stacked">
							<li class="opacity-75"><h4>Mr.Annouri ilias</h4></li>
							<li class="active"><a href="<?php echo base_url()."/contact";?>">Envoyer email</a></li>
						
						</ul>
					</div><!--end .col -->
					<!-- END SEARCH NAV -->

					<div class="col-sm-8 col-md-9 col-lg-10">
						<div class="list-results">
							<?php 
							if (count($message)==0) 
							{
							echo '<div class="col-xs-12 col-lg-12 hbox-xs">
								<div class="hbox-column v-top">
									<div class="clearfix">
										<div class="col-lg-12 margin-bottom-lg">
											<h2 class="text-primary">Désolé, il y a aucun message pour le moment ! </h2>
								</div><!--end .hbox-column -->
							</div><!--end .hbox-xs -->';
								

							}
else{
foreach ($message as $key => $value) {
	echo '<div class="col-xs-12 col-lg-12 hbox-xs">
								
								<div class="hbox-column v-top">
									<div class="clearfix">
										<div class="col-lg-12 margin-bottom-lg">
											<a class="text-lg text-medium" >'.$value->name.'</a>
										</div>
									</div>
									<div class="clearfix opacity-75">
										<div class="col-md-5">
											<span class="glyphicon glyphicon-envelope text-sm"></span> &nbsp;'.$value->email.'
										</div>
										<div class="col-lg-12">
											<span class="glyphicon glyphicon-comment"></span> &nbsp;'.$value->content.'
										</div>
									</div>
									<div class="clearfix">
										<div class="col-lg-12">
											<span class="opacity-75"><span class="glyphicon glyphicon-calendar "></span> &nbsp;'.$value->date. '</span>
										</div>
									</div>
									
								</div><!--end .hbox-column -->
							</div><!--end .hbox-xs -->';

}
}
?>


							
						</div><!--end .list-results -->
						<!-- BEGIN SEARCH RESULTS LIST -->

						<!-- BEGIN SEARCH RESULTS PAGING -->
						<!--<div class="text-center">
							<ul class="pagination">
								<li class="disabled"><a href="#">«</a></li>
								<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">»</a></li>
							</ul>
						</div><!--end .text-center -->

						<!-- BEGIN SEARCH RESULTS PAGING -->
					</div><!--end .col -->
				</div><!--end .row -->
			</div><!--end .card-body -->
			<!-- END SEARCH RESULTS -->

		</div><!--end .card -->
	</div><!--end .section-body -->
</section>
</div>
	