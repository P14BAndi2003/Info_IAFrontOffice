<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Tous les derniers articles de l'IA sur IA_Info</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="Un site spécialisé sur les informations sur l'IA | IA_Info est en voie de développement pour donner le plus d'expérience possible aux amoureux de l'informatique surtout de l'IA">  

	

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="assets/css/base.css">
   <link rel="stylesheet" href="assets/css/vendor.css">  
   <link rel="stylesheet" href="assets/css/main.css">
     

   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
	<link rel="icon" href="assets/favicon.ico" type="image/x-icon">

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header class="short-header">   

   	<div class="gradient-block"></div>	

   	<div class="row header-content">

   		<div class="logo">
	         <a href="index.html">Author</a>
	      </div>

	   	<nav id="main-nav-wrap">
				<ul class="main-navigation sf-menu">
													
				</ul>
			</nav> <!-- end main-nav-wrap -->

		
   		
   	</div>     		
   	
   </header> <!-- end header -->

   <section id="page-header">
   	<div class="row current-cat">
   		<div class="col-full">
   			<h1>Tous les derniers articles de l'IA sur IA_Info</h1>
			   <h2>Un site spécialisé sur les informations sur l'IA | IA_Info est en voie de développement pour donner le plus d'expérience possible aux amoureux de l'informatique surtout de l'IA</h2>
   		</div>   		
   	</div>
   </section>
   <!-- masonry
   ================================================== -->
   <section id="bricks">

   	<div class="row masonry">

   		<!-- brick-wrapper -->
         <div class="bricks-wrapper">

         	<div class="grid-sizer"></div>

         	<div class="brick entry featured-grid animate-this">
         		<div class="entry-content">
         			<div id="featured-post-slider" class="flexslider">
			   			<ul class="slides">
						@foreach($articles as $article)
				   			<li>
				   				<div class="featured-post-slide">

						   			<div class="post-background" style="background-image:url('data:image/png;base64,{{ $article->image }}');"></div>

								   	<div class="overlay"></div>			   		

								   	<div class="post-content">
								   		<ul class="entry-meta">
												<li>{{ $article->datecreation->format('d/m/Y')}}</li> 
												<li><a href="#" >{{ $article->auteur->username }}</a></li>				
											</ul>	

								   		<h1 class="slide-title"><a href="{{route('articles.retail',['id' => $article->id, 'slug' => Str::slug($article->titre) ,'randch' => rand(10000, 99999)]) }}" title="">{{ $article->titre }}</a></h1> 
								   	</div> 				   					  
				   			
				   				</div>
				   			</li> <!-- /slide -->
							 
						@endforeach
				   		

				   		</ul> <!-- end slides -->
				   	</div> <!-- end featured-post-slider -->        			
         		</div> <!-- end entry content -->         		
         	</div>
			 @foreach($pagines as $pagine)
         	<article class="brick entry format-standard animate-this">

               <div class="entry-thumb">
                  <a href="{{route('articles.retail',['id' => $pagine->id, 'slug' => Str::slug($pagine->titre) ,'randch' => rand(10000, 99999)]) }}" class="thumb-link">
	                  <img src="data:image/png;base64,{{ $pagine->image }}" alt="building">             
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">{{$pagine->auteur->username}}</a> 
							<p>	<a href="#">{{$pagine->datecreation->format('d/m/Y')}}</a>               				
               			</p>
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="{{route('articles.retail',['id' => $pagine->id, 'slug' => Str::slug($pagine->titre) ,'randch' => rand(10000, 99999)]) }}">{{$pagine->titre}}</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
						{{$pagine->description}}	
					</div>
               </div>

        		</article> <!-- end article -->

				@endforeach


         </div> <!-- end brick-wrapper --> 
		

   	</div> <!-- end row -->
       <div class="row">
       <nav class="pagination">
@if ($pagines->currentPage() > 1)
    <a href="{{ $pagine->previousPageUrl() }}">Précédent</a>
@endif

@if ($pagines->hasMorePages())
    <a href="{{ $pagine->nextPageUrl() }}">Suivant</a>
@endif
    </nav>
</div>


   </section> <!-- end bricks -->

   
   <!-- footer
   ================================================== -->
   <footer>


      <div class="footer-bottom">
      	<div class="row">

      		<div class="col-twelve">
	      		<div class="copyright">
		         	<span>© Copyright 2023</span> 
		         	<span>Design by <a href="">IA_Info company</a></span>		         	
		         </div>

		         <div id="go-top">
		            <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon icon-arrow-up"></i></a>
		         </div>         
	      	</div>

      	</div> 
      </div> <!-- end footer-bottom -->  

   </footer>  

   <!-- Java Script
   ================================================== --> 
   <script src="assets/js/jquery-2.1.3.min.js"></script>
   <script src="assets/js/plugins.js"></script>
   <script src="assets/js/main.js"></script>

</body>

</html>