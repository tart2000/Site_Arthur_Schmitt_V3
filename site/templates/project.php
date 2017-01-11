<?php snippet('header') ?>


<div class="center bmt">
	<h1><?php echo $page->title() ?></h1>
</div>

<div class="container">
	<div id="posts" class="card">
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<?php if($page->hasImages()): ?>
					<div class="project-thumb">
						<?php echo thumb($page->images()->first(), array('width' => 400, 'crop' => true)); ?>
					</div>
				<?php endif ?>
			</div>
			<div class="col-md-8 col-sm-6 pb">
				<h2><?php echo $page->baseline() ?></h2>
				<?php if ($page->with() != '') : ?>
					<em>With <?php echo $page->with() ?></em>
				<?php endif ?>
				<hr>
				<?php echo snippet('project-links', array('project' => $page)) ?>
				<?php echo $page->text()->kirbytext() ?>
			</div>
		</div>
	</div>
</div>

<div class="container bmt">
	<div class="card">
		<?php snippet('cats') ?>
	</div>
</div>

<?php snippet('footer') ?>