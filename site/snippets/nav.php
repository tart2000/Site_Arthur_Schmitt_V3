<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
  	<?php foreach ($site->pages()->visible() as $lk) : ?>
  		<a href="<?php echo $lk->url() ?>"><?php echo $lk->title() ?></a>
	<?php endforeach ?>
  </div>
</div>

<span class="burger" onclick="openNav()">&#9776;</span>