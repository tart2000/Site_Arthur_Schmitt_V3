
 	 	<footer class="footer" role="contentinfo">
 	 		<div class="container">
				<div class="row">
					<div class="col-sm-6 copyright">
						<b>Links :</b>					
					</div>
					<div class="col-sm-6 colophon text-right">
						Made with <a href="http://getkirby.com/" target="_blank">Kirby</a><br> 
						Source code available on <a href="https://github.com/tart2000/Site_Arthur_Schmitt_V3" target="_blank">Github</a>
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
