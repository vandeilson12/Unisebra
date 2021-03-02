<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Cursos</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('adm/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('adm/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('adm/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('adm/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('adm/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('adm/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('adm/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('adm/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('adm/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('adm/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('adm/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('adm/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('adm/vendor/vector-map/jqvmap.min.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('adm/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
            
            @include('menu.aluno')

            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <!-- <span class="au-breadcrumb-span">You are here:</span> -->
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="#">Cursos</a>
                                            </li>
                                            <!-- <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Dashboard</li> -->
                                        </ul>
                                    </div>
                                    <!-- <button class="au-btn au-btn-icon au-btn--green">
                                        <i class="zmdi zmdi-plus"></i>add item</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->
         

            <section>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">

                           

                            <div class="col-md-4">
                                <div class="card border border-secondary">
                                    <div class="card-header">
                                        <strong class="card-title">Card Outline</strong>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card border border-secondary">
                                    <div class="card-header">
                                        <strong class="card-title">Card Outline</strong>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card border border-secondary">
                                    <div class="card-header">
                                        <strong class="card-title">Card Outline</strong>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.
                                        </p>
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-4">
                                <div class="card border border-secondary">
                                    <div class="card-header">
                                        <strong class="card-title">Card Outline</strong>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.
                                        </p>
                                    </div>
                                </div>
                            </div>



                         
                            
                        </div>
                    </div>
                </div>
            </section>

           
            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                            <div class="copyright">
                                Copyright &copy; 2021<strong><span>Unisebra</span></strong>. 
                                <p>Todos os Direitos Reservados</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('adm/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('adm/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('adm/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('adm/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('adm/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('adm/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('adm/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('adm/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('adm/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('adm/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('adm/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('adm/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('adm/vendor/select2/select2.min.js') }}">
    </script>
    <script src="{{ asset('adm/vendor/vector-map/jquery.vmap.js') }}"></script>
    <script src="{{ asset('adm/vendor/vector-map/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('adm/vendor/vector-map/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ asset('adm/vendor/vector-map/jquery.vmap.world.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('adm/js/main.js') }}"></script>

</body>

</html>
<!-- end document-->
