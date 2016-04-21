<ul class="nav nav-pills nav-justified">
	<?php foreach(page('categories')->children() as $cat): ?>
		<li role="presentation">
			<a href="<?php echo $site->url() . '/projects/tag:' . $cat->uid() ?>"><?php echo $cat->title() ?></a>
		</li>
	<?php endforeach ?>
</ul>