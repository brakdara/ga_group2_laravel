<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="front_end/img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>SNIQ</title>	
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="front_end/css/linearicons.css">
	<link rel="stylesheet" href="front_end/css/font-awesome.min.css">
	<link rel="stylesheet" href="front_end/css/themify-icons.css">
	<link rel="stylesheet" href="front_end/css/bootstrap.css">
	<link rel="stylesheet" href="front_end/css/owl.carousel.css">
	<link rel="stylesheet" href="front_end/css/nice-select.css">
	<link rel="stylesheet" href="front_end/css/nouislider.min.css">
	<link rel="stylesheet" href="front_end/css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="front_end/css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="front_end/css/magnific-popup.css">
	<link rel="stylesheet" href="front_end/css/main.css">
	

</head>

<body>

    @include('front_end.layout.header')

	<!-- start banner Area -->
	@include('front_end.layout.banner')
	<!-- End banner Area -->

	<!-- start features Area -->
    @include('front_end.layout.feature')
	<!-- end features Area -->

	<!-- Start category Area -->
    @include('front_end.layout.category_section')
	<!-- End category Area -->

	<!-- start product Area -->
    @include('front_end.layout.productarea')
	<!-- end product Area -->

	<!-- Start exclusive deal Area -->
    @include('front_end.layout.exclusive')
	<!-- End exclusive deal Area -->

	<!-- Start brand Area -->
    @include('front_end.layout.brand')
	<!-- End brand Area -->

	<!-- Start related-product Area -->
    @include('front_end.layout.relatedproduct')
	<!-- End related-product Area -->

    @include('front_end.layout.footer')

	<script src="front_end/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="front_end/js/vendor/bootstrap.min.js"></script>
	<script src="front_end/js/jquery.ajaxchimp.min.js"></script>
	<script src="front_end/js/jquery.nice-select.min.js"></script>
	<script src="front_end/js/jquery.sticky.js"></script>
	<script src="front_end/js/nouislider.min.js"></script>
	<script src="front_end/js/countdown.js"></script>
	<script src="front_end/js/jquery.magnific-popup.min.js"></script>
	<script src="front_end/js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="front_end/js/gmaps.min.js"></script>
	<script src="front_end/js/main.js"></script>
</body>

</html>