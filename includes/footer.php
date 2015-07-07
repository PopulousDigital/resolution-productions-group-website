	<footer id="footer">
		<div class="container text-center">
			<p>
        &copy; Ops 3 LLC.  All rights reserved. <br />
        <a href="/legal.php">Legal</a>
      </p>
		</div>
		<a data-scroll href="#main-carousel" class="to-top"><i class="fa fa-angle-up"></i></a>
	</footer><!--/#footer--> 
	
	<!--/#scripts--> 
  <script>
  function toggleAccordion(section) {
    $('.accordion-section').hide();
    $('#' + section + '-section').show();
    $('.tab-pane').removeClass('active').removeClass('in');
    $('.tab-list li').removeClass('active');
    $('#' + section).addClass('active').addClass('in');
    $('#' + section + '-tab').addClass('active');
  }
  </script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="js/gmaps.js"></script>
  <script type="text/javascript" src="js/jquery.parallax.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/jquery.countTo.js"></script>
	<script type="text/javascript" src="js/smooth-scroll.js"></script>
	<script type="text/javascript" src="js/canvas.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="js/portfolio.js"></script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-64860914-1', 'auto');
    ga('send', 'pageview');

  </script>
  <script>
    <?php
    $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : preg_replace('/[0-9]{2}$/', "", gethostname());
    switch ($host) {
      case "dev.rdschicago.com":
      case "stage.rdschicago.com":
      case "rdschicago.com":
      case "www.rdschicago.com":
        if ($_SESSION['rds_alert'] !== "true") {
          echo "alert('Looking for Resolution Digital Studios? We’ve rebranded into Resolution Productions Group and are now bigger and better than ever. Stick around and check out our newest offerings. Thanks for stopping by!');";
          $_SESSION['rds_alert'] = "true";
        }
        break;
      case "dev.showdepartment.com":
      case "stage.showdepartment.com":
      case "showdepartment.com":
      case "www.showdepartment.com":
        if ($_SESSION['sd_alert'] !== "true") {
          echo "alert('Looking for Show Department? We’ve rebranded into Resolution Productions Group and are now bigger and better than ever. Stick around and check out our newest offerings. Thanks for stopping by!');";
          $_SESSION['sd_alert'] = "true";
        }
        break;
    }
    ?>
  </script>
</body>
</html>
