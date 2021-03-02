<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Name') }}</title> -->


    <!-- Title Page-->
    <title>ADM - Controle</title>
    <link href="{{ asset('adm/images/logos.png')}}" rel="icon">

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

    <!-- Main CSS-->
    <link href="{{ asset('adm/css/theme.css')}}" rel="stylesheet" media="all">

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    

    <style>
        @media (max-width: 991px){
            .page-container {
                top: 128px !important;
            }
        }

        .animsition{
            opacity: 1 !important;
        }
        .page-container{
            padding-left: 140px;
        }

    </style>
</head>
<body class="animsition">
    <div class="page-wrapper">

    <main class="py-4">
            @yield('content')
        </main>
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

    <!-- Main JS-->
    <script src="{{ asset('adm/js/main.js') }}"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   

</body>
</html>
