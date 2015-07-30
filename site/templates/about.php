<?php snippet('header') ?>
<?php snippet('back') ?>


	<div class="container text" role="main">
		<div class="card page">
			<h1><?php echo $page->title()->html() ?></h1>
			<?php echo $page->text()->kirbytext() ?>
		</div>
	</div> <!-- // container -->

<?php snippet('footer') ?>