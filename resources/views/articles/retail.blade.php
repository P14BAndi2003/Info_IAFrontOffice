<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Cache-Control" content="max-age=2592000, public">
  <meta http-equiv="Expires" content="Sun, 06 Jun 2023 00:00:00 GMT">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
		<meta name="description" content="{{ $article->description }}">  
		<!-- Shareable -->
		<title>{{ $article->titre }}</title>
		<!-- Bootstrap -->
		<link rel="stylesheet" href="assets/scripts/bootstrap/bootstrap.min.css">
		<!-- IonIcons -->
		<link rel="stylesheet" href="assets/scripts/ionicons/css/ionicons.min.css">
		<!-- Toast -->
		<link rel="stylesheet" href="assets/scripts/toast/jquery.toast.min.css">
		<!-- OwlCarousel -->
		<link rel="stylesheet" href="assets/scripts/owlcarousel/dist/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/scripts/owlcarousel/dist/assets/owl.theme.default.min.css">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="assets/scripts/magnific-popup/dist/magnific-popup.css">
		<link rel="stylesheet" href="assets/scripts/sweetalert/dist/sweetalert.css">
		<!-- Custom style -->
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/skins/all.css">
		<link rel="stylesheet" href="assets/css/demo.css">
	</head>

	<body class="skin-orange">
		<header class="primary">
			<div class="firstbar">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-12">
							<div class="brand">
								<a href="index.html">
									<img src="assets/images/logo.png" alt="Magz Logo">
								</a>
							</div>						
						</div>
						<div class="col-md-9 col-sm-12">
							</div>
					
					</div>
				</div>
			</div>

		
			<!-- End nav -->
		</header>

		<section class="page">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
	          <ol class="breadcrumb">
			  <li class="active">{{ $article->datecreation->format('d/m/Y') }}</li>
			  <li class="active">{{ $article->auteur->username }}</li>
	          </ol>
			  <img src="data:image/png;base64,{{ $article->image }}" alt="Photo indisponible" >
						<h1 class="page-title">{{ $article->titre }}</h1>
						<h2 class="page-subtitle">{{$article->description}}</h2>
						<div class="line thin"></div>
						
						<div class="page-description">
						{!!$article->contenu!!}
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Start footer -->
		<footer class="footer">
			<div class="container">
		
				<div class="row">
					<div class="col-md-12">
						<div class="copyright">
							COPYRIGHT &copy; MAGZ 2017. ALL RIGHT RESERVED.
							<div>
								Made with <i class="ion-heart"></i> by <a href="http://kodinger.com">Kodinger</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer -->

		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/jquery.migrate.js"></script>
		<script src="assets/scripts/bootstrap/bootstrap.min.js"></script>
		<script src="assets/scripts/jquery-number/jquery.number.min.js"></script>
		<script src="assets/scripts/owlcarousel/dist/owl.carousel.min.js"></script>
		<script src="assets/scripts/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
		<script src="assets/scripts/easescroll/jquery.easeScroll.js"></script>
		<script src="assets/scripts/sweetalert/dist/sweetalert.min.js"></script>
		<script src="assets/scripts/toast/jquery.toast.min.js"></script>
		<script src="assets/js/demo.js"></script>
		<script src="assets/js/e-magz.js"></script>
	</body>
</html>

















