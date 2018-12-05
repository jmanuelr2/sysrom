
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="/img/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/pages/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/pages/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/pages/css/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/pages/css/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/pages/css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/pages/css/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/pages/css/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/pages/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/pages/css/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/pages/css/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/pages/css/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/pages/css/lightbox.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/responsive.css">	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/pages/css/util.css">
	<link rel="stylesheet" type="text/css" href="/pages/css/main.css">
<!--===============================================================================================-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!--===============================================================================================-->	
</head>
<body class="animsition">

	<!-- Header -->
	@include('layouts.nav')


	<!-- Slide1 -->
	@yield('home')

	@include('pages.politica')
	@include('pages.about')
	@include('pages.services')
	@include('pages.post')
	<!-- Footer -->
	@include('pages.footer')



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="/pages/js/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="/pages/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="/pages/js/popper.js"></script>
	<script type="text/javascript" src="/pages/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="/pages/js/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="/pages/js/slick.min.js"></script>
	<script type="text/javascript" src="/pages/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="/pages/js/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="/pages/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="/pages/js/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script src="/pages/js/main.js"></script>

</body>
</html>
