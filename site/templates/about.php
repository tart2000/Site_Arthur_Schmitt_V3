<?php snippet('header') ?>
<?php snippet('back') ?>


	<div class="container text" role="main">

		<div class="card page">
			<h2><?php echo $page->title()->html() ?></h2>
			<?php echo $page->text()->kirbytext() ?>
		</div>

	</div> <!-- // container -->

<?php snippet('footer') ?>