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
	<link rel="stylesheet" href="{{asset('front_end/css/linearicons.css"')}}>
	<link rel="stylesheet" href="{{asset('front_end/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('front_end/css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{asset('front_end/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('front_end/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('front_end/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('front_end/css/nouislider.min.css')}}">
	<link rel="stylesheet" href="{{asset('front_end/css/ion.rangeSlider.css')}}" />
	<link rel="stylesheet" href="{{asset('front_end/css/ion.rangeSlider.skinFlat.css')}}" />
	<link rel="stylesheet" href="{{asset('front_end/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('front_end/css/main.css')}}">
	

</head>

<body>

    @include('front_end.layout.header')

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Product Details Page</h1>
					<nav class="d-flex align-items-center">
						<a href="{{url('/')}}">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="{{url('/shop')}}">Shop<span class="lnr lnr-arrow-right"></span></a>
						<a href="">product-details</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

    	<!--================Single Product Area =================-->
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="s_Product_carousel">
						<div class="single-prd-item">
							<img class="img-fluid" src="{{asset('images/' . $product->image)}}" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="{{asset('images/' . $product->image)}}" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="{{asset('images/' . $product->image)}}" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3>{{$product->name}}</h3>
						<h2>${{$product->price}}</h2>

						<ul class="list">
							<li><a class="active" href="#"><span>Category</span> : {{$product->category}}</a></li>
							<li><a href="#"><span>Availibility</span> : In Stock</a></li>
						</ul>
						<p>{{$product->detail}}</p>
						<div class="product_count">
							<label for="qty">Quantity:</label>
							<input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
							 class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
							 class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
						</div>
						<div class="card_area d-flex align-items-center">
							<a class="primary-btn" href="#">Add to Cart</a>
							<a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a>
							<a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->

    @include('front_end.layout.footer')

	<script src="{{asset('front_end/js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="{{asset('front_end/js/vendor/bootstrap.min.js')}}"></script>
	<script src="{{asset('front_end/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset('front_end/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('front_end/js/jquery.sticky.js')}}"></script>
	<script src="{{asset('front_end/js/nouislider.min.js')}}"></script>
	<script src="{{asset('front_end/js/countdown.js')}}"></script>
	<script src="{{asset('front_end/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('front_end/js/owl.carousel.min.js')}}"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{asset('front_end/js/gmaps.min.js')}}"></script>
	<script src="{{asset('front_end/js/main.js')}}"></script>
</body>

</html>