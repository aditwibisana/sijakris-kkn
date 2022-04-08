<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.head')
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light top-nav fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="logo" />
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a class="nav-link" href="index.html">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="about.html">About</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="services.html">Services</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Portfolio
                     </a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                        <a class="dropdown-item" href="portfolio-1-col.html">1 Column Portfolio</a>
                        <a class="dropdown-item" href="portfolio-2-col.html">2 Column Portfolio</a>
                        <a class="dropdown-item" href="portfolio-3-col.html">3 Column Portfolio</a>
                        <a class="dropdown-item" href="portfolio-4-col.html">4 Column Portfolio</a>
                        <a class="dropdown-item" href="portfolio-item.html">Single Portfolio Item</a>
                     </div>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Blog
                     </a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item" href="blog-home-1.html">Blog Home 1</a>
                        <a class="dropdown-item" href="blog-home-2.html">Blog Home 2</a>
                        <a class="dropdown-item" href="blog-post.html">Blog Post</a>
                     </div>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Pages
                     </a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item" href="faq.html">FAQ</a>
                        <a class="dropdown-item" href="404.html">404</a>
                        <a class="dropdown-item" href="pricing.html">Pricing Table</a>
                     </div>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="contact.html">Contact</a>
                  </li>
               </ul>
            </div>
        </div>
    </nav>
	
	<!-- full Title -->
	<div class="full-title">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3">Portfolio 1
				<small>Subheading</small>
			</h1>
		</div>
	</div>

    <!-- Page Content -->
    <div class="container">
		<div class="breadcrumb-main">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.html">Home</a>
				</li>
				<li class="breadcrumb-item active">Portfolio 1</li>
			</ol>
		</div>
	<div class="project-inner">
		<!-- Project One -->
		<div class="row">
			<div class="col-md-7">
				<a href="#">
					<img class="img-fluid rounded mb-3 mb-md-0" src="images/portfolio-big-01.jpg" alt="" />
				</a>
			</div>
			<div class="col-md-5">
				<h3>Morbi eu nulla ac mauris euismod aliquet.</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
				<p>Suspendisse potenti. Suspendisse potenti. Phasellus rutrum metus at odio consectetur tempus. Pellentesque sed tellus et ligula luctus auctor et non erat.</p>
				<a class="btn btn-primary" href="#">View Project
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</div>
		<!-- /.row -->
	</div>
    <hr>
	<div class="project-inner">
		<!-- Project Two -->
		<div class="row">
			<div class="col-md-7">
			  <a href="#">
				<img class="img-fluid rounded mb-3 mb-md-0" src="images/portfolio-big-02.jpg" alt="" />
			  </a>
			</div>
			<div class="col-md-5">
			  <h3>Morbi eu nulla ac mauris euismod aliquet.</h3>
			  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
			  <p>Suspendisse potenti. Suspendisse potenti. Phasellus rutrum metus at odio consectetur tempus. Pellentesque sed tellus et ligula luctus auctor et non erat.</p>
			  <a class="btn btn-primary" href="#">View Project
				<span class="glyphicon glyphicon-chevron-right"></span>
			  </a>
			</div>
		</div>
		<!-- /.row -->
	</div>
    <hr>
	<div class="project-inner">
		<!-- Project Three -->
		<div class="row">
			<div class="col-md-7">
				<a href="#">
					<img class="img-fluid rounded mb-3 mb-md-0" src="images/portfolio-big-03.jpg" alt="" />
				</a>
			</div>
			<div class="col-md-5">
				<h3>Morbi eu nulla ac mauris euismod aliquet.</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
				<p>Suspendisse potenti. Suspendisse potenti. Phasellus rutrum metus at odio consectetur tempus. Pellentesque sed tellus et ligula luctus auctor et non erat.</p>
				<a class="btn btn-primary" href="#">View Project
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</div>
		<!-- /.row -->
	</div>
    <hr>

    <!-- Project Four -->
	<div class="project-inner">
		<div class="row">		
			<div class="col-md-7">
				<a href="#">
					<img class="img-fluid rounded mb-3 mb-md-0" src="images/portfolio-big-04.jpg" alt="" />
				</a>
			</div>
			<div class="col-md-5">
				<h3>Morbi eu nulla ac mauris euismod aliquet.</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
				<p>Suspendisse potenti. Suspendisse potenti. Phasellus rutrum metus at odio consectetur tempus. Pellentesque sed tellus et ligula luctus auctor et non erat.</p>
				<a class="btn btn-primary" href="#">View Project
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</div>
		<!-- /.row -->
	</div>
	
		<hr>

		<div class="pagination_bar">
			<!-- Pagination -->
			<ul class="pagination justify-content-center">
				<li class="page-item">
				  <a class="page-link" href="#" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span>
					<span class="sr-only">Previous</span>
				  </a>
				</li>
				<li class="page-item">
				  <a class="page-link" href="#">1</a>
				</li>
				<li class="page-item">
				  <a class="page-link" href="#">2</a>
				</li>
				<li class="page-item">
				  <a class="page-link" href="#">3</a>
				</li>
				<li class="page-item">
				  <a class="page-link" href="#" aria-label="Next">
					<span aria-hidden="true">&raquo;</span>
					<span class="sr-only">Next</span>
				  </a>
				</li>
			</ul>
		</div>
    </div>
    <!-- /.container -->
    <!--footer starts from here-->
    <footer class="footer">
        @include('includes.foot')
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('asset/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>