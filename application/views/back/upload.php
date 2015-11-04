
<!-- BEGIN INTRO -->
<div class="row">
	<div class="col-lg-12">
		<h2 class="text-primary">Ajouter un Portfolio </h2>

			<?php
			if(isset($_GET["op"])){
			if($_GET["op"]=="success") echo '<p class="alert alert-callout alert-success">Ajout de portfolio reussi</p>';
			else if($_GET["op"]=="failed") echo '<p class="alert alert-callout alert-fail">Echec lors de l´ajout du portfolio</p>';
			}
			?>
	</div><!--end .col -->
	<div class="col-lg-8">
		<p class="lead">
			Soyez Creatif.
		</p>
		
	</div><!--end .col -->
</div><!--end .row -->
<!-- END INTRO -->

<!-- BEGIN HORIZONTAL FORM - BASIC ELEMENTS-->

<div class="card">
	<div class="card-body">
		<div id="success_message" hidden="true" class="alert alert-callout alert-success" role="alert">
			<strong>Bien fait!</strong> Vous avez ajouter l'image avec succès.
		</div>
			<div class="form-horizontal">
			<?php echo form_open_multipart('upload_file/upload_it');?>
			<div class="form-group">
				<label for="regular13" class="col-sm-1 control-label">Titre de l'image</label>
				<div class="col-sm-11">
					<input type="text" class="form-control" name="title" required/>
				</div>
			</div>
			<div class="form-group">
				<label for="password13" class="col-sm-1 control-label">Description</label>
				<div class="col-sm-11">
					<input type="text" class="form-control" name="description" required/>
				</div>
			</div>
			<div class="form-group">
						
				<label for="select1" class="col-sm-1 control-label">Categorie</label>
				<div class="col-sm-11">
				<select id="portfolio_category" name="categorie" class="form-control" required/>
							<option value="">&nbsp;</option>
							<option value="30">30</option>
							<option value="40">40</option>
							<option value="50">50</option>
							<option value="60">60</option>
							<option value="70">70</option>
				</select>
				</div>
			</div>
			<br/>

			<div class="form-group">
				
				<div class="col-sm-12">
					<div class="card">
						<div class="card-head style-primary">
							<header>Ajouter image</header>
						</div>
						    <span class="btn btn-default btn-file">
        					parcourir...<input type="file" name="userfile"  required/>
						</span>
						</div><!--end .card-body -->
					</div><!--end .card -->
		
				</div><!--end .col -->
			<div class="card-actionbar">
				<div class="card-actionbar-row">
					
				<input type="submit" class="btn btn-block ink-reaction btn-success" value="upload" />				
				</div>
			</div>
		
			</div><!--end .row -->
</div>
		</form>
	</div><!--end .card-body -->
</div><!--end .card -->

