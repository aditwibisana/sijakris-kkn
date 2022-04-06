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
                <img src="{{asset('asset/images/logo.png')}}" alt="logo" />
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">Petani</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.html">Cocok Tanam</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.html">Info Pupuk</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Aksi
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                            <a class="dropdown-item" href="/login">Login</a>
                            <a class="dropdown-item" href="portfolio-2-col.html">Signup</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="slider-main">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('images/slider-01.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Sistem Informasi</h3>
                        <p>Pengelolaan Jambu Kristal</p>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('images/slider-02.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Sistem Informasi</h3>
                        <p>Pengelolaan Jambu Kristal</p>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('images/slider-03.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Sistem Informasi</h3>
                        <p>Pengelolaan Jambu Kristal</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <!-- Page Content -->
    <div class="container">
        <div class="services-bar">
            <h1 class="my-4">Our Best Services </h1>
            <!-- Services Section -->
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <h4 class="card-header">Garden Fence</h4>
                        <div class="card-img">
                            <img class="img-fluid" src="images/services-img-01.jpg" alt="" />
                        </div>
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <h4 class="card-header">Garden Watering</h4>
                        <div class="card-img">
                            <img class="img-fluid" src="images/services-img-02.jpg" alt="" />
                        </div>
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <h4 class="card-header">Garden Supplies</h4>
                        <div class="card-img">
                            <img class="img-fluid" src="images/services-img-03.jpg" alt="" />
                        </div>
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- About Section -->
        <div class="about-main">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Welcome to N & LW Lawn Care</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <h5>Our smart approach</h5>
                    <ul>
                        <li>Sed at tellus eu quam posuere mattis.</li>
                        <li>Phasellus quis erat et enim laoreet posuere ac porttitor ipsum.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li>Duis porttitor odio pellentesque mollis vulputate.</li>
                        <li>Quisque ac eros non ex hendrerit vehicula.</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid rounded" src="images/about-img.jpg" alt="" />
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- Portfolio Section -->
        <div class="portfolio-main">
            <h2>Our Portfolio</h2>
            <div class="row">
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <div class="card-img">
                            <a href="#">
                                <img class="card-img-top" src="images/portfolio-img-01.jpg" alt="" />
                                <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Lawn & garden care</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <div class="card-img">
                            <a href="#">
                                <img class="card-img-top" src="images/portfolio-img-02.jpg" alt="" />
                                <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Lawn renovation</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <div class="card-img">
                            <a href="#">
                                <img class="card-img-top" src="images/portfolio-img-03.jpg" alt="" />
                                <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Tree planting</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <div class="card-img">
                            <a href="#">
                                <img class="card-img-top" src="images/portfolio-img-04.jpg" alt="" />
                                <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Water Baganig</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <div class="card-img">
                            <a href="#">
                                <img class="card-img-top" src="images/portfolio-img-05.jpg" alt="" />
                                <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Growing plants</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <div class="card-img">
                            <a href="#">
                                <img class="card-img-top" src="images/portfolio-img-01.jpg" alt="" />
                                <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Snow removal</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <hr>
        <!-- Get In Touch Now Section -->
        <div class="row mb-4">
            <div class="col-md-8">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="#">Get In Touch Now</a>
            </div>
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
