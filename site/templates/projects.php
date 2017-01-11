<?php snippet('header') ?>


<div class="center bmt">
	<h2><?php echo $page->title()->html() ?></h2>
</div>

<div class="container-fluid bmt">
	<div class="card">
		<?php snippet('cats') ?>
	</div>
</div>

<?php $subpages   = $page->children()->visible() ?>
<?php if($tag = param('tag')) : ?>
  <?php $subpages = $subpages->filterBy('categories', $tag, ','); ?>
<?php endif ?>

<div class="container-fluid" id="posts">
	<div class="row">
		<?php foreach($subpages as $project): ?>
			<?php snippet('project-list-item', array('project' => $project)) ?>
		<?php endforeach ?>
	</div>
</div>

<?php snippet('footer') ?>