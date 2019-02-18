<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<title>Yavana - Give Your Someonelove Something Special</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
		
		window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
	</script>
	<script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>
	<link href="{{ asset('css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
	<!-- <link href="{{ asset('css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' /> -->
	<link href="{{ asset('css/login_overlay.css') }}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('css/style6.css') }}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('css/easy-responsive-tabs.css') }}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('css/fontawesome-all.css') }}" rel="stylesheet">
	<link href="{{ asset('css/simplyCountdown.css') }}" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="{{ asset('css/creditly.css') }}" type="text/css" media="all" />
	<link rel="stylesheet" href="{{ asset('css/shop.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}" type="text/css" media="all">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui1.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/checkout.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">
	<link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="screen" />
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
</head>

<body>
	@include('layouts.header')	
	<div class="banner-top container-fluid" id="home">
	@yield('content')
	@include('layouts.footer')
	</div>
	<script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
	<script src="{{ asset('js/classie-search.js') }}"></script>
	<!-- <script src="{{ asset('js/demo1-search.js') }}"></script> -->
	<script src="{{ asset('js/minicart.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.js') }}"></script>
	<script src="{{ asset('js/easy-responsive-tabs.js') }}"></script>
	<script src="{{ asset('js/move-top.js') }}"></script>
	<script src="{{ asset('js/easing.js') }}"></script>
	<script src="{{ asset('js/simplyCountdown.js') }}"></script>
	<script src="{{ asset('js/easy-responsive-tabs.js') }}"></script>
	<script src="{{ asset('js/jquery-ui.js') }}"></script>
	<script src="{{ asset('js/imagezoom.js') }}"></script>
	<script src="{{ asset('js/jquery.flexslider.js') }}"></script>
	<script src="{{ asset('js/vue.js') }}"></script>
	<script src="{{ asset('js/vue.resource.min.js') }}"></script>
	<script src="{{ asset('js/tether.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.js') }}"></script>
	<script src="{{ asset('js/app.js') }}"></script>
	<!-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> -->
	<script type="text/javascript" src="{{ asset('js/creditly.js') }}"></script>

	<!-- <script>
		googles.render();

		googles.cart.on('googles_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<script>
		$(document).ready(function () {
			$(".button-log a").click(function () {
				$(".overlay-login").fadeToggle(200);
				$(this).toggleClass('btn-open').toggleClass('btn-close');
			});
		});
		$('.overlay-close1').on('click', function () {
			$(".overlay-login").fadeToggle(200);
			$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
			open = false;
		});
	</script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 2,
						nav: false
					},
					900: {
						items: 3,
						nav: false
					},
					1000: {
						items: 4,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
	</script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<script>
		$('.value-plus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) + 1;
			divUpd.text(newVal);
		});

		$('.value-minus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) - 1;
			if (newVal >= 1) divUpd.text(newVal);
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close1').on('click', function (c) {
				$('.rem1').fadeOut('slow', function (c) {
					$('.rem1').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close2').on('click', function (c) {
				$('.rem2').fadeOut('slow', function (c) {
					$('.rem2').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close3').on('click', function (c) {
				$('.rem3').fadeOut('slow', function (c) {
					$('.rem3').remove();
				});
			});
		});
	</script>
	<script>
		//<![CDATA[ 
		$(window).load(function () {
			$("#slider-range").slider({
				range: true,
				min: 0,
				max: 9000,
				values: [50, 6000],
				slide: function (event, ui) {
					$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
				}
			});
			$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

		}); //]]>
	</script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function () {
			$('.flexslider1').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
	</script>
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<script>
		var d = new Date();
		simplyCountdown('simply-countdown-custom', {
			year: d.getFullYear(),
			month: d.getMonth() + 2,
			day: 25
		});
	</script>

  <script>
      jQuery(document).ready(function($) {
          $(".scroll").click(function(event) {
              event.preventDefault();
              $('html,body').animate({
                  scrollTop: $(this.hash).offset().top
              }, 900);
          });
      });
  </script>
  <script>
      $(document).ready(function() {
          /*
          						var defaults = {
          							  containerID: 'toTop', // fading element id
          							containerHoverID: 'toTopHover', // fading element hover id
          							scrollSpeed: 1200,
          							easingType: 'linear' 
          						 };
          						*/

          $().UItoTop({
              easingType: 'easeOutQuart'
          });

      });
  </script>
  <script type="text/javascript">
		$(function () {
			var creditly = Creditly.initialize(
				'.creditly-wrapper .expiration-month-and-year',
				'.creditly-wrapper .credit-card-number',
				'.creditly-wrapper .security-code',
				'.creditly-wrapper .card-type');

			$(".creditly-card-form .submit").click(function (e) {
				e.preventDefault();
				var output = creditly.validate();
				if (output) {
					// Your validated credit card output
					console.log(output);
				}
			});
		});
	</script> -->
	@stack('scripts')
</body>
</html>