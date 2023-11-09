<div class="footer">
		<nav>
			
		</nav>
		<div class="container">
		<div class="colr-row col-md-6  ">
			
			
			
			<div class="clearfix"> </div>
			</div>
			<div class="colr-row  col-md-6">
			
			
			<!-- //Copyright -->
			<div class="clearfix"> </div>
		</div>
		</div>
	</div>
	<footer>
		<p>Covid Management System | Codeigniter Frame Work <a href="https://atees.org/" target="_blank">ATEES Industrial Training Pvt Ltd</a></p>
	</footer>
	<!--menu script-->
	<script type='text/javascript' src='<?php echo base_url('Asset/Hospital/js/jquery-2.2.3.min.js')?>'></script>
	<script src="<?php echo base_url('Asset/Hospital/js/bootstrap.js')?>"></script>
	<!--//menu script-->
	<!--FlexSlider banner-->

	<script defer src="<?php echo base_url('Asset/Hospital/js/jquery.flexslider.js')?>"></script>
	<script type="text/javascript">
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!--End-slider-script-->
	<!-- OnScroll-Number-Increase-JavaScript -->
	<script src="<?php echo base_url('Asset/Hospital/js/jquery.waypoints.min.js')?>"></script>
	<script src="<?php echo base_url('Asset/Hospital/js/jquery.countup.js')?>"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //OnScroll-Number-Increase-JavaScript -->
	<script src="<?php echo base_url('Asset/Hospital/js/jquery.chocolat.js')?>"></script>

	<!--light-box-files -->
	<script type="text/javascript">
		$(function () {
			$('.w3_agile_gallery_grid a').Chocolat();
		});
	</script>
	<!-- //gallery -->
	<!--client carousel -->
	<script src="<?php echo base_url('Asset/Hospital/js/owl.carousel.js')?>"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo").owlCarousel({
				items: 1,
				itemsDesktop: [768, 1],
				itemsDesktopSmall: [414, 1],
				lazyLoad: true,
				autoPlay: true,
				navigation: true,

				navigationText: false,
				pagination: true,

			});

		});
	</script>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="<?php echo base_url('Asset/Hospital/js/move-top.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('Asset/Hospital/js/easing.js')?>"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
	<!-- //here ends scrolling icon -->
</body>

</html>