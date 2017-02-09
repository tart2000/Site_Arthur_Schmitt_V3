<?php $tag=param('tag') ?>

<ul class="nav nav-pills centered">
	<?php $active ='active' ?>
	<?php if ($tag != '') : ?>
	  <?php $active = '' ?>
	<?php endif ?>
	<li role="presentation" class="<?php echo $active ?>">
		<a href="<?php echo $site->url().'/projects' ?>">All</a>
	</li>

	<?php foreach(page('categories')->children() as $cat): ?>
		<?php if ($cat->uid() == $tag) : ?>
	      <?php $active='active' ?>
	    <?php else : ?>
	      <?php $active ='' ?>
	    <?php endif ?>
		<li role="presentation" class="<?php echo $active ?>">
			<a href="<?php echo $site->url() . '/projects/tag:' . $cat->uid() ?>"><?php echo $cat->title() ?></a>
		</li>
	<?php endforeach ?>
</ul>