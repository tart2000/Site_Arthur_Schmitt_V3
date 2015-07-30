<div class="row">
	<?php foreach(page('projects')->children()->visible()->limit(12) as $project): ?>
		<?php snippet('project-list-item', array('project' => $project)) ?>
	<?php endforeach ?>
</div>