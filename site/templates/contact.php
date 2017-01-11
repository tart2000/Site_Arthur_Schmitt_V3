<?php snippet('header') ?>

	<div class="container text" role="main">
		<div class="col-md-6">
			<form class="mt" action="//formspree.io/tart2000design@gmail.com" method="POST">
			    <div class="form-group">
			    	<input class="form-control" type="text" name="name" placeholder="Name">
			    </div>
			    <div class="form-group">
			    	<input class="form-control" type="email" name="_replyto" placeholder="Email">
			    </div>
			    <div class="form-group" style="display:none">
			    	<input type="text" name="_gotcha" style="display:none" />
			    </div>
			    <div class="form-group">
				    <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
				</div>
			    <input class="btn btn-default" type="submit" value="Send">
			</form>
		</div>

		<div class="col-md-6">
			<?php echo $page->text()->kirbytext() ?>
		</div>
		
	</div> <!-- // container -->

<?php snippet('footer') ?>