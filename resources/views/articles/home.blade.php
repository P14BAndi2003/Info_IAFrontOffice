<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Cache-Control" content="max-age=2592000, public">
  <meta http-equiv="Expires" content="Sun, 06 Jun 2023 00:00:00 GMT">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
		<meta name="description" content="Un site spécialisé sur les informations sur l'IA | IA_Info est en voie de développement pour donner le plus d'expérience possible aux amoureux de l'informatique surtout de l'IA">
		<!-- Shareable -->
		<title>Tous les derniers articles de l'IA sur IA_Info</title>
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
							<h1>Tous les derniers articles de l'IA sur IA_Info</h1>
							<p>Un site spécialisé sur les informations sur l'IA | IA_Info est en voie de développement pour donner le plus d'expérience possible aux amoureux de l'informatique surtout de l'IA</p>						
						</div>
					
					</div>
				</div>
			</div>

		
			<!-- End nav -->
		</header>

		<section class="page">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12" >
						
						
						<div class="line">
							<div>Latest News</div>
						</div>
						<div class="row">
						@foreach($pagines as $pagine)
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="row">
									<article class="article col-md-12" >
										<div class="inner">
											<figure>
												<a href="{{route('articles.retail',['id' => $pagine->id, 'slug' => Str::slug($pagine->titre) ,'randch' => rand(10000, 99999)]) }}">
													<img src="data:image/png;base64,{{ $pagine->image }}" alt="Sample Article">
												</a>
											</figure>
											<div class="padding" style="height: 350px;">
												<div class="detail">
													<div class="time">{{$pagine->datecreation->format('d/m/Y')}}</div>
													<div class="category"><a href="category.html">{{$pagine->auteur->username}}</a></div>
												</div>
												<h2><a href="{{route('articles.retail',['id' => $pagine->id, 'slug' => Str::slug($pagine->titre) ,'randch' => rand(10000, 99999)]) }}">{{$pagine->titre}}</a></h2>
												<p>{{$pagine->description}}	</p>
												<footer>
												
													<a class="btn btn-primary more" href="{{route('articles.retail',['id' => $pagine->id, 'slug' => Str::slug($pagine->titre) ,'randch' => rand(10000, 99999)]) }}">
														<div>More</div>
														<div><i class="ion-ios-arrow-thin-right"></i></div>
													</a>
												</footer>
											</div>
										</div>
									</article>
							
								</div>

							
							</div>
							@endforeach
						
					</div>
						</div>
				</div>
				</div>
				</div>
				<div class="pagination-container">
      
    {{ $pagines->links('vendor.pagination.default') }}
  
</div>
		</section>

		<!-- Start footer -->
		<footer class="footer">
			<div class="container">
		
				<div class="row">
					<div class="col-md-12">
						<div class="copyright">
							COPYRIGHT &copy; 2023. ALL RIGHT RESERVED.
							<div>
								
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


