<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>{{ $article->titre }}</title>
	<meta name="description" content="{{ $article->description }}">  
	<meta name="author" content="Andi Rakotonirina">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="{{asset('assets/css/base.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/vendor.css')}}">  
   <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
     
   <!-- script
   ================================================== -->
	<script src="{{asset('assets/js/modernizr.js')}}"></script>
	<script src="{{asset('assets/js/pace.min.js')}}"></script>

   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="{{asset('assets/favicon.ico')}}" type="image/x-icon">
	<link rel="icon" href="{{asset('assets/favicon.ico')}}" type="image/x-icon">

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
			
			</nav> <!-- end main-nav-wrap -->

		
   	</div>     		
   	
   </header> <!-- end header -->
   

   <!-- content
   ================================================== -->
   <section id="content-wrap" class="blog-single">
   	<div class="row">
   		<div class="col-twelve">

   			<article class="format-standard">  

   				<div class="content-media">
<center><div class="post-thumb">
							<img src="data:image/png;base64,{{ $article->image }}"> 
						</div>  </center>
					</div>

					<div class="primary-content">

						<h1 class="page-title">{{ $article->titre }}</h1>	

						<ul class="entry-meta">
							<li class="date">{{ $article->datecreation->format('d/m/Y') }}</li>						
							<li class="cat"><a href="">{{ $article->auteur->username }}</a></li>				
						</ul>						

						
						<h3 class="lead">{{$article->description}}</h3>
						{!!$article->contenu!!}
						
		  	
					</div> <!-- end entry-primary -->		  			   

	  			

				</article>
   		

			</div> <!-- end col-twelve -->
   	</div> <!-- end row -->



   </section> <!-- end content -->


   <!-- footer
   ================================================== -->
   <footer>

   	
      <div class="footer-bottom">
      	<div class="row">

      		<div class="col-twelve">
	      		<div class="copyright">
		         	<span>© Copyright 2023</span> 
		         	<span>Design by <a href="">Someone</a></span>		         	
		         </div>

		         <div id="go-top">
		            <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon icon-arrow-up"></i></a>
		         </div>         
	      	</div>

      	</div> 
      </div> <!-- end footer-bottom -->  

   </footer>  

   <script src="{{asset('assets/js/jquery-2.1.3.min.js')}}"></script>
   <script src="{{asset('assets/js/plugins.js')}}"></script>
   <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>