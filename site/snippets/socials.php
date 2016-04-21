<div class="container">
	<div id="socialz" class="card">
		<div class="social-cont row">
			<div class="social col-md-1 col-sm-2 col-xs-3">
				<a href="mailto:hi@arthurschmitt.com"><i class="fa fa-3x fa-envelope"></i></a>
			</div>
			<?php foreach (page('socials')->children() as $so) : ?>
			<div class="social col-md-1 col-sm-2 col-xs-3">
				<a href="<?php echo $so->solink() ?>" target="_blank"><i class="fa fa-<?php echo $so->fontawesome() ?> fa-3x"></i></a>
			</div>
			<?php endforeach ?>
		</div>
	</div>
</div>