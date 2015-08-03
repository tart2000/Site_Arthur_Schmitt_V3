<?php snippet('header') ?>
<?php snippet('back') ?>


	<div class="container text" role="main">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<div class="card page">
					<h1><?php echo $page->title()->html() ?></h1>
					<?php echo $page->text()->kirbytext() ?>
				</div>
			</div>
		</div>
	</div> <!-- // container -->

<?php snippet('footer') ?>