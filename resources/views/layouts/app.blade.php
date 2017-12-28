<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ariel</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
	@include('inc.navbar')
	@yield('content')

	<!-- Footer -->
	<footer class="footer bg-dark text-white">

	    <!-- Social Icons -->
	    <div class="bg-primary">
	        <div class="container">
	            <div class="row py-4">
	                <div class="col-md-6 col-lg-7">
	                    <h4 class="mb-0 white-text">Get connected with us on social networks!</h4>
	                </div>
	                <div class="col-md-6 col-lg-5 text-right">
	                    <a><i class="fa fa-facebook white-text mr-lg-4 fa-2x"> </i></a>
	                    <a><i class="fa fa-twitter white-text mr-lg-4 fa-2x"> </i></a>
	                    <a><i class="fa fa-google-plus white-text mr-lg-4 fa-2x"> </i></a>
	                    <a><i class="fa fa-linkedin white-text mr-lg-4 fa-2x"> </i></a>
	                    <a><i class="fa fa-instagram white-text mr-lg-4 fa-2x"> </i></a>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!-- Social Icons -->

	    <!-- Footer Links -->
	    <div class="container pt-5 pb-2">
	        <div class="row">

	            <div class="col-md-3 col-lg-4 col-xl-3">
	                <h4>Maximiliano Ungredda</h4>
	                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
	                <p>
	                    When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting
	                </p>
	            </div>

	            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
	                <h4>Products</h4>
	                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
	                <p><a href="#" class="text-white">Product-1</a></p>
	                <p><a href="#" class="text-white">Product-2</a></p>
	                <p><a href="#" class="text-white">Product-3</a></p>
	                <p><a href="#" class="text-white">Product-4</a></p>
	            </div>

	            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto">
	                <h4>Useful links</h4>
	                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
	                <p><a href="#" class="text-white">Home</a></p>
	                <p><a href="#" class="text-white">About Us</a></p>
	                <p><a href="#" class="text-white">Services</a></p>
	                <p><a href="#" class="text-white">Contact</a></p>
	            </div>

	            <div class="col-md-4 col-lg-3 col-xl-3">
	                <h4>Contact</h4>
	                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
	                <p><i class="fa fa-home mr-3"></i> Company Location</p>
	                <p><i class="fa fa-envelope mr-3"></i> info@example.com</p>
	                <p><i class="fa fa-phone mr-3"></i> + 98 765 432 11</p>
	                <p><i class="fa fa-print mr-3"></i> + 98 765 432 10</p>
	            </div>

	        </div>
	    </div>
	    <!-- Footer Links-->

	    <hr class="bg-white mx-4 mt-2 mb-1">

	    <!-- Copyright-->
	    <div class="container-fluid">
	        <p class="text-center m-0 py-1">
	            © 2017 Copyright <a href="https://getbootstrap.com/" class="text-white">Bootstrap 4</a>
	        </p>
	    </div>
	    <!-- Copyright -->

	</footer>
	<!-- Footer -->


</body>
</html>
