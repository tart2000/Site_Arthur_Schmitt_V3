<?php snippet('header') ?>
<?php snippet('back') ?>


<div class="center bmt">
	<h1><?php echo $page->title()->html() ?></h1>
</div>

<div class="container bmt">
	<div class="card">
		<?php snippet('cats') ?>
	</div>
</div>

<?php $subpages   = $page->children()->visible() ?>
<?php if($tag = param('tag')) : ?>
  <?php $subpages = $subpages->filterBy('categories', $tag, ','); ?>
<?php endif ?>

<div class="container">
	<div id="posts" class="card">
		<div class="row">
			<?php foreach($subpages as $project): ?>
				<?php snippet('project-list-item', array('project' => $project)) ?>
			<?php endforeach ?>
		</div>
	</div>
</div>

<?php snippet('footer') ?>