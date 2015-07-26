<div class="row">
	<?php foreach(page('projects')->children()->visible()->limit(3) as $project): ?>
		<div class="col-sm-4">
			<?php if($project->hasImages()): ?>
				<div class="project-thumb">
					<?php echo thumb($project->images()->first(), array('width' => 400, 'crop' => true)); ?>
				</div>
			<?php endif ?>
			<!-- shows up on hover -->
			<div class="project-text">	
				<div class="project-cont">
					<a href="<?php echo $project->url() ?>">
						<h2><?php echo $project->title()->html() ?></h2>
					</a>
					<p><?php echo $project->text() ?></p>
					<hr>
					<!-- external links -->
					<a href="<?php echo $project->url() ?>">
						<i class="fa fa-eye" title="view"></i>
					</a>
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
					<?php if ($project->forkLink() != '') : ?>
						<a href="<?php echo $project->forkLink() ?>" target="_blank">
							<i class="fa fa-code-fork" title="fork project"></i>
						</a>
					<?php endif ?>
				</div>
			</div>
		</div>
	<?php endforeach ?>
</div>