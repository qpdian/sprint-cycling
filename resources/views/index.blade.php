<!DOCTYPE html>

<head>
	<title>Sprint-Cycling</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content=""> @include('commons.head')
</head>

<body class="header-fixed">

	<div class="wrapper">
		<!--=== Header v5 ===-->
		<div class="header-v5 header-static">


			<!-- Navbar -->
			<div class="navbar navbar-default mega-menu" role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.html">
							<img id="logo-header" src="assets/images/logoResize.png" alt="Logo">
						</a>
					</div>
					<div class="pull-right">
						<div class="clock" style="margin:2em;"></div>
						<div class="message"></div>
					</div>


					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-responsive-collapse">

					</div>
				</div>
			</div>
			<!-- End Navbar -->
		</div>
		<!--=== End Header v5 ===-->

		<!--=== Slider ===-->
		<div class="tp-banner-container">
			<div class="tp-banner">
				<ul>
					<!-- SLIDE -->
					<li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 1">
						<!-- MAIN IMAGE -->
						<img src="assets/images/bike3.jpg" alt="darkblurbg" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

						<div class="tp-caption revolution-ch1 sft start" data-x="center" data-hoffset="0" data-y="100" data-speed="1500" data-start="0" data-easing="Back.easeInOut" data-endeasing="Power1.easeIn" data-endspeed="300">
							Nuestra pagina
							<br>
							<strong>esta en</strong>
							<br> construccion

						</div>

						<!-- LAYER -->
						<div class="tp-caption sft" data-x="center" data-hoffset="0" data-y="380" data-speed="1600" data-start="1800" data-easing="Power4.easeOut" data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">
							<a href="#" class="btn-u btn-brd btn-brd-hover btn-u-light">Conócenos</a>
						</div>
					</li>
					<!-- END SLIDE -->

				</ul>
				<div class="tp-bannertimer tp-bottom"></div>
			</div>
		</div>
		<!--=== End Slider ===-->





	</div>
	<!--/wrapper-->



	<!-- JS Global Compulsory -->
	<script src="assets/plugins/jquery/jquery.min.js"></script>
	<script src="assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script src="assets/plugins/back-to-top.js"></script>
	<script src="assets/plugins/smoothScroll.js"></script>
	<script src="assets/plugins/jquery.parallax.js"></script>
	<script src="assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
	<script src="assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<!-- JS Customization -->
	<script src="assets/js/custom.js"></script>
	<!-- JS Page Level -->
	<script src="assets/js/shop.app.js"></script>
	<script src="assets/js/plugins/owl-carousel.js"></script>
	<script src="assets/js/plugins/revolution-slider.js"></script>
	<script src="assets/js/plugins/style-switcher.js"></script>

	<script src="assets/plugins/flipClock/flipclock.js"></script>
	<script>
		jQuery(document).ready(function() {
			App.init();
			App.initScrollBar();
			App.initParallaxBg();
			OwlCarousel.initOwlCarousel();
			RevolutionSlider.initRSfullWidth();
			StyleSwitcher.initStyleSwitcher();
		});
	</script>

	<script type="text/javascript">
		var clock;

		$(document).ready(function() {
			var clock;

			clock = $('.clock').FlipClock({
				clockFace: 'DailyCounter',
				autoStart: false,
				callbacks: {
					stop: function() {
						$('.message').html('El conteo termin!')
					}
				}
			});

			clock.setTime(448880);
			clock.setCountdown(true);
			clock.start();

		});
	</script>


</body>

</html>
