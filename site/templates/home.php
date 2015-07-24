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
				<h1>Arthur Schmitt</h1>
				<h2>Creative Technologist</h2>
				<p><i class="fa fa-map-marker"></i> Montral, Canada</p>
				<hr>
				<?php echo page('home')->text()->kirbytext() ?>
			</div>
		</div>
	</div>
	<div id="socialz" class="card">
		<div class="social-cont">
			<?php foreach (page('socials')->children() as $so) : ?>
				<a href="<?php echo $so->solink() ?>" target="_blank"><i class="fa fa-<?php echo $so->fontawesome() ?> fa-3x"></i></a>
			<?php endforeach ?>
		</div>
	</div>
</div>


	<div class="container" role="main">
    <?php snippet('projects') ?>
	</div> <!-- // container -->

<?php snippet('footer') ?>