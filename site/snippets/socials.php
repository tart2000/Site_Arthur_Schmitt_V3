<div id="socialz" class="card">
	<div class="social-cont">
		<a href="mailto:hi@arthurschmitt.com"><i class="fa fa-3x fa-envelope"></i></a>
		<?php foreach (page('socials')->children() as $so) : ?>
			<a href="<?php echo $so->solink() ?>" target="_blank"><i class="fa fa-<?php echo $so->fontawesome() ?> fa-3x"></i></a>
		<?php endforeach ?>
	</div>
</div>