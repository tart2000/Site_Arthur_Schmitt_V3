<ul class="nav nav-pills centered">
	<li role="presentation">
		<a href="<?php echo $site->url().'/projects' ?>">All</a>
	</li>
	<?php foreach(page('categories')->children() as $cat): ?>
		<li role="presentation">
			<a href="<?php echo $site->url() . '/projects/tag:' . $cat->uid() ?>"><?php echo $cat->title() ?></a>
		</li>
	<?php endforeach ?>
</ul>