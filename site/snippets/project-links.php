<?php if ($project->videoLink() != '') : ?>
	<a href="<?php echo $project->videoLink() ?>" target="_blank">
		<i class="fa fa-film" title="watch video"></i>
	</a>
<?php endif ?>
<?php if ($project->externalLink() != '') : ?>
	<a href="<?php echo $project->externalLink() ?>" target="_blank">
		<i class="fa fa-external-link" title="view project"></i>
	</a>
<?php endif ?>
<?php if ($project->downLink() != '') : ?>
	<a href="<?php echo $project->downLink() ?>" target="_blank">
		<i class="fa fa-download" title="download"></i>
	</a>
<?php endif ?>
<?php if ($project->hasDocuments()) : ?>
	<a href="<?php echo $project->documents()->first()->url() ?>" target="_blank" download>
		<i class="fa fa-download" title="download"></i>
	</a>
<?php endif ?>
<?php foreach ($project->files() as $f) : ?>
	<?php if ($f->type() == 'archive') : ?>
		<a href="<?php echo $f->url() ?>" target="_blank" download>
			<i class="fa fa-download" title="download"></i>
		</a>
	<?php endif ?>
<?php endforeach ?>
<?php if ($project->forkLink() != '') : ?>
	<a href="<?php echo $project->forkLink() ?>" target="_blank">
		<i class="fa fa-code-fork" title="fork project"></i>
	</a>
<?php endif ?>