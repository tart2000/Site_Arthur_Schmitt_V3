<?php snippet('header') ?>
<div class="container">
	<div id="card1" class="card">
		<div class="row">
			<div class="col-sm-4">
				<div class="avatar">
					<img src="<?php echo $site->url() ?>/assets/images/arthur.jpg" class="img-responsive">
				</div>
			</div>
			<div class="col-sm-8 text-box">
				<h1>Arthur Schmitt </h1>
				<h2>Creative Technologist</h2>
				<em><i class="fa fa-graduation-cap"></i> MA RCA / MSc Imperial College / MEng ENSAM</em>  
				<br><em><i class="fa fa-map-marker"></i> Montreal, Canada</em>
				<hr>
				<?php echo page('home')->text()->kirbytext() ?>
			</div>
		</div>
	</div>
	<div id="socialz" class="card">
		<div class="social-cont">
			<a href="mailto:hi@arthurschmitt.com"><i class="fa fa-3x fa-envelope"></i></a>
			<?php foreach (page('socials')->children() as $so) : ?>
				<a href="<?php echo $so->solink() ?>" target="_blank"><i class="fa fa-<?php echo $so->fontawesome() ?> fa-3x"></i></a>
			<?php endforeach ?>
		</div>
	</div>
</div>

<h1 class="center">What have I been up to?</h1>

<div class="container">
	<div id="posts" class="card">
		Posts here
	</div>
</div>

	<div class="container" role="main">
    <?php snippet('projects') ?>
	</div> <!-- // container -->

<?php snippet('footer') ?>