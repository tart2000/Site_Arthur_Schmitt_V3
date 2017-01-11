<div class="col-md-3 col-sm-4">
			<?php if($project->hasImages()): ?>
				<div class="project-thumb">
					<?php echo thumb($project->images()->first(), array('width' => 400, 'crop' => true)); ?>
				</div>
			<?php endif ?>
			<!-- shows up on hover -->
			<div class="project-text">	
				<div class="project-cont">
					<?php if ($project->paged() == 'true'): ?>
						<a href="<?php echo $project->url() ?>">
							<h2><?php echo $project->title()->html() ?></h2>
						</a>
					<?php else : ?>
						<h2><?php echo $project->title()->html() ?></h2>
					<?php endif ?>
					<strong><?php echo $project->baseline() ?></strong>
					<p><?php echo $project->text()->excerpt(80) ?></p>
					<?php if ($project->with() != '') : ?>
						<em>With <?php echo $project->with() ?></em>
					<?php endif ?>
					<hr>
					<!-- external links -->
					<?php echo snippet('project-links', array('project' => $project)) ?>
					
				</div>
			</div>
		</div>