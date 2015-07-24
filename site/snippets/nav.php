<nav class="navbar navbar-default navbar-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo $site->url() ?>"><img src="<?php echo url('assets/images/logo.svg') ?>" alt="<?php echo $site->title()->html() ?>" class="img-responsive" /></a>
		</div>
    <?php snippet('menu') ?>
	</div>
</nav>