<?php snippet('header') ?>
<?php snippet('back') ?>

<div class="center">
	<h1><?php echo $page->title()->html() ?></h1>
</div>
<div class="container">
	<div id="posts" class="card">
		<div class="row">
			<?php foreach($page->children()->visible() as $project): ?>
				<?php snippet('project-list-item', array('project' => $project)) ?>
			<?php endforeach ?>
		</div>
	</div>
</div>

<?php snippet('footer') ?>