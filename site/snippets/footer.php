
 	 	<footer class="footer" role="contentinfo">
 	 		<div class="container">
				<div class="row">
					<div class="col-sm-4 copyright">
						<b><?php echo page('links')->title() ?></b>
						<div class="mt">
							<?php foreach (page('links')->children() as $l) : ?>
								<a href="<?php echo $l->link() ?>" target="_blank"><?php echo $l->title() ?></a></br>
							<?php endforeach ?>		
						</div>			
					</div>
					<div class="col-sm-4">
						<strong>Contact me</strong>
						<form class="mt" action="//formspree.io/tart2000design@gmail.com" method="POST">
						    <div class="form-group">
						    	<input class="form-control" type="text" name="name" placeholder="Name">
						    </div>
						    <div class="form-group">
						    	<input class="form-control" type="email" name="_replyto" placeholder="Email">
						    </div>
						    <div class="form-group">
							    <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
							</div>
						    <input class="btn btn-default" type="submit" value="Send">
						</form>
					</div>
					<div class="col-sm-4 colophon text-right">
						<strong>Code</strong>
						<div class="mt">
							Made with <a href="http://getkirby.com/" target="_blank">Kirby</a><br> 
							Using <a href="http://getbootstrap.com/" target="_blank">Bootstrap</a> and <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">Font Awesome</a></br>
							Source code available on <a href="https://github.com/tart2000/Site_Arthur_Schmitt_V3" target="_blank">Github</a>
						</div>
					</div>
				</div>
 	 		</div>
		</footer>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="<?php url('assets/js/vendor/jquery-1.11.2.min.js') ?>"><\/script>')</script>

    <?php echo getBlogFooter($page); ?>

    <?php echo js('assets/js/vendor/bootstrap.min.js'); ?>
    <?php echo js('assets/js/main.js'); ?>


		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<script>
				(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
				function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
				e=o.createElement(i);r=o.getElementsByTagName(i)[0];
				e.src='//www.google-analytics.com/analytics.js';
				r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
				ga('create','<?php echo $site->analytics() ? $site->analytics() : 'UA-XXXXX-X' ?>','auto');ga('send','pageview');
		</script>
		
  </body>
</html>
