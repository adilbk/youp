
<?php 
foreach ($message as $key => $value) {
	echo '<div class="col-xs-12 col-lg-12 hbox-xs">
								<div class="hbox-column width-2">
									<img class="img-circle img-responsive pull-left" src="<?php echo back_asset_url(); ?>/img/avatar9.jpg?1404026744" alt="" />
								</div><!--end .hbox-column -->
								<div class="hbox-column v-top">
									<div class="clearfix">
										<div class="col-lg-12 margin-bottom-lg">
											<a class="text-lg text-medium" href="../../../html/pages/contacts/details.html">'.$value->name.'</a>
										</div>
									</div>
									<div class="clearfix opacity-75">
										<div class="col-md-5">
											<span class="glyphicon glyphicon-envelope text-sm"></span> &nbsp;567-890-1234
										</div>
										<div class="col-md-7">
											<span class="glyphicon glyphicon-phone text-sm"></span> &nbsp;ann@laurens.com
										</div>
									</div>
									<div class="clearfix">
										<div class="col-lg-12">
											<span class="opacity-75"><span class="glyphicon glyphicon-map-marker text-sm"></span> &nbsp;795 Folsom Ave, San Francisco, CA 94107</span>
										</div>
									</div>
									<div class="stick-top-right small-padding">
										<i class="fa fa-dot-circle-o fa-fw text-success" data-toggle="tooltip" data-placement="left" data-original-title="User online"></i>
									</div>
								</div><!--end .hbox-column -->
							</div><!--end .hbox-xs -->';

}
?>
