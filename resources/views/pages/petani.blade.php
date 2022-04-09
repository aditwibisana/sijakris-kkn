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
                        <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/petani">Petani</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.html">Cocok Tanam</a>
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
            <h1 class="mt-4 mb-3">Daftar Petani
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
                <li class="breadcrumb-item active">Daftar Petani</li>
            </ol>
        </div>
        @foreach ($data as $item)
        <div class="project-inner">
            <!-- Project One -->
            <div class="row">
                <div class="col-md-7">
                    <a href="#">
                        <img class="img-fluid rounded mb-3 mb-md-0" src="{{$item->photo}}" alt="" height="400px" width="600px" />
                    </a>
                </div>
                <div class="col-md-5">
                    <h2>{{$item->name}}</h2>
                    <p>No Telepon: {{$item->contact}}</p>
                    <p>Daftar Tanaman:</p>
                    <p>{{$item->list_of_plant}}</p>
                    <a class="btn btn-primary" href="#">Hubungi
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
            <!-- /.row -->
            <hr>
        </div>

        @endforeach
        <div class="pagination">
            <nav aria-label="Page navigation example">
                <ul>
                    {{$data->links()}}
                </ul>
            </nav>
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
