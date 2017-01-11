<?php snippet('header') ?>

	<div class="container text" role="main">
		<h2><?php echo $page->title()->html() ?></h2>
		<?php echo $page->text()->kirbytext() ?>
	</div> <!-- // container -->

<?php snippet('footer') ?>