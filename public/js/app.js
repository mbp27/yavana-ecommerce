googles.render();

googles.cart.on('googles_checkout', function (evt) {
	var items, len, i;

	if (this.subtotal() > 0) {
		items = this.items();

		for (i = 0, len = items.length; i < len; i++) {}
	}
});

// // When the user scrolls the page, execute myFunction
// window.onscroll = function() {myFunction()};

// // Get the navbar
// var navbar = document.getElementById("melayang");

// // Get the offset position of the navbar
// var sticky = navbar.offsetTop;

// // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
// function myFunction() {
//   if (window.pageYOffset >= sticky) {
//     navbar.classList.add("sticky")
//   } else {
//     navbar.classList.remove("sticky");
//   }
// } 

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

$(document).ready(function (c) {
	$('.close1').on('click', function (c) {
		$('.rem1').fadeOut('slow', function (c) {
			$('.rem1').remove();
		});
	});
});

$(document).ready(function (c) {
	$('.close2').on('click', function (c) {
		$('.rem2').fadeOut('slow', function (c) {
			$('.rem2').remove();
		});
	});
});

$(document).ready(function (c) {
	$('.close3').on('click', function (c) {
		$('.rem3').fadeOut('slow', function (c) {
			$('.rem3').remove();
		});
	});
});

//<![CDATA[ 
$(window).load(function () {
	$("#slider-range").slider({
		range: true,
		min: 0,
		max: 200000,
		values: [50000, 200000],
		slide: function (event, ui) {
			$("#amount").val("Rp" + ui.values[0] + " - Rp" + ui.values[1]);
		}
	});
	$("#amount").val("Rp" + $("#slider-range").slider("values", 0) + " - Rp" + $("#slider-range").slider("values", 1));
}); //]]>

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

// Can also be used with $(document).ready()
$(window).load(function () {
	$('.flexslider1').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
	});
});

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

var d = new Date();
simplyCountdown('simply-countdown-custom', {
	year: d.getFullYear(),
	month: d.getMonth() + 2,
	day: 25
});

jQuery(document).ready(function($) {
    $(".scroll").click(function(event) {
        event.preventDefault();
        $('html,body').animate({
            scrollTop: $(this.hash).offset().top
        }, 900);
    });
});

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

$(document).ready(function () {
	$('.select-address').hide();
});

$(function() {    // Makes sure the code contained doesn't run until
                  //     all the DOM elements have loaded

    $('#select-provinsi').change(function(){
    	$('.select-address').hide();
        $('#select-kota').show();
    });
    $('#select-kota').change(function(){
        $('#select-kecamatan').show();
    });
    $('#select-kecamatan').change(function(){
        $('#select-kelurahan').show();
    });

});

function changeValue(){
	var qty = $('#qty').val();
	$('#add-qty').val(qty);
};


    