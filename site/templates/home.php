<?php snippet('header') ?>
<div id="card1" class="container">

	<div class="avatar">
		<img src="<?php echo $site->url() ?>/assets/images/arthur.jpg" class="img-responsive">
	</div>


	<h1><?php echo $page->name() ?></h1>
	<h2><?Php echo $page->baseline() ?></h2>
	<?php if ($page->education() != '') : ?>
		<em><i class="fa fa-graduation-cap"></i> <?php echo $page->education() ?></em>  
	<?php endif ?>
	<?php if ($page->location() != '') : ?>
	<br><em><i class="fa fa-map-marker"></i> <?php echo $page->location() ?></em>
	<?php endif ?>

	<?php echo page('home')->text()->kirbytext() ?>
	<a href="/about" class="btn btn-default">more »</a> 
	<a href="http://cv.arthurschmitt.com" class="btn btn-default" target="_blank">CV</a>


</div>

<?php snippet('socials') ?>

<?php snippet('footer') ?>