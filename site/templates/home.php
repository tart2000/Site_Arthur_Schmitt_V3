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
				<h1><?php echo $page->name() ?></h1>
				<h2><?Php echo $page->baseline() ?></h2>
				<?php if ($page->education() != '') : ?>
					<em><i class="fa fa-graduation-cap"></i> <?php echo $page->education() ?></em>  
				<?php endif ?>
				<?php if ($page->location() != '') : ?>
				<br><em><i class="fa fa-map-marker"></i> <?php echo $page->location() ?></em>
				<?php endif ?>
				<hr>
				<?php echo page('home')->text()->kirbytext() ?>
				<a href="/about" class="btn btn-default">more »</a> <a href="http://cv.arthurschmitt.com" class="btn btn-default" target="_blank">CV</a>
			</div>
		</div>
	</div>
</div>

<?php snippet('socials') ?>

<div class="center">
	<i class="fa fa-chevron-down fa-3x"></i>
</div>




<h1 class="center"><?php echo page('projects')->title() ?></h1>

<div class="container bmt">
	<div class="card">
		<?php snippet('cats') ?>
	</div>
</div>

<div class="container">
	<div id="posts" class="card">
		<?php snippet('projects') ?>
	</div>
	<div class="center project-button">
		<a href="/projects" class="center btn btn-default btn-lg">View all projects</a>
	</div>
</div>



<?php snippet('footer') ?>