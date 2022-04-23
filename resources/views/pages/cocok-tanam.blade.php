<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light top-nav fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="{{asset('asset/images/logosijakris.png')}}" alt="logo" />
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/petani">Petani</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/cocok-tanam">Cocok Tanam</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.html">Info Pupuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Kontak</a>
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

    <!-- full Title -->
    <div class="full-title">
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3">Cocok Tanam
                <small>Subheading</small>
            </h1>
        </div>
    </div>

    <!-- Page Content -->
    <div class="container">
        <div class="breadcrumb-main">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Beranda</a>
                </li>
                <li class="breadcrumb-item active">Cocok Tanam</li>
            </ol>
        </div>

        <!-- Image Header -->
        <img class="img-fluid rounded mb-4" src="images/services-big.jpg" alt="" />

        <!-- Services Section -->
        <div class="services-bar">
            <h1 class="my-4">Cara Menanam Jambu </h1>
            <!-- Services Section -->
            <div class="row">
                @foreach ($data as $tanam)
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <h4 class="card-header">{{$tanam->headline}}</h4>
                        <div class="card-img">
                            <img class="img-fluid" src="{{$tanam->photo}}" alt="" />
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{$tanam->description}}</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div> <!-- one frame-->
                @endforeach
            </div>

            <!-- /.row -->
        </div>
        <!-- Our Customers -->
        <div class="customers-box">
            <h2>Sistem Informasi Jambu Kristal</h2>
            <div class="row">
                <div class="col-lg-2 col-sm-4 mb-4">
                    <img class="img-fluid" src="images/logo_01.png" alt="" />
                </div>
                <div class="col-lg-2 col-sm-4 mb-4">
                    <img class="img-fluid" src="images/logo_02.png" alt="" />
                </div>
                <div class="col-lg-2 col-sm-4 mb-4">
                    <img class="img-fluid" src="images/logo_03.png" alt="" />
                </div>
                <div class="col-lg-2 col-sm-4 mb-4">
                    <img class="img-fluid" src="images/logo_04.png" alt="" />
                </div>
                <div class="col-lg-2 col-sm-4 mb-4">
                    <img class="img-fluid" src="images/logo_05.png" alt="" />
                </div>
                <div class="col-lg-2 col-sm-4 mb-4">
                    <img class="img-fluid" src="images/logo_06.png" alt="" />
                </div>
            </div>
            <!-- /.row -->
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
