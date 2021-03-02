<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Unisebra</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> -->

        <!-- Styles -->
        <link href="{{asset('/img/logos.png') }}" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/venobox/venobox.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <style>
            @media(max-width:332px){
                .team .member span{
                    font-size: 10px !important;
                }
                .team .member .social a + a{
                    margin-left: 4px;
                }
            }
        </style>
    </head>
    <body>

        <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
      <div class="container d-flex align-items-center">
        <div class="contact-info mr-auto">
          <ul>
            <li><i class="icofont-envelope"></i><a href="mailto:secretaria@unisebra.com.br">secretaria@unisebra.com.br</a></li>
            <li><i class="icofont-phone"></i> (98) 98878-5437</li>
          <!-- <li><i class="icofont-clock-time icofont-flip-horizontal"></i> 24hrs</li> -->
        </ul>
      </div>
      <div class="cta">
        <!-- <a class="scrollto" data-toggle="modal" data-target="#exampleModalLong">Entrar</a>
        <a class="scrollto" data-toggle="modal" data-target="#exampleModalMatricula">Matricula-se</a> -->
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="rounded-circle mr-auto"><a href="#header" class="scrollto">
        <img src="{{ asset('img/logos.png')}}" alt="" style="width: 60px;height: 60px;" class="img-fluid rounded-circle bg-light">
      </a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="#header" class="logo mr-auto scrollto"><img src="assets/img/logos.png" alt="" class="img-fluid"></a> -->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <!-- <li><a href="#clients">Instituições</a></li> -->
          <!--<li><a href="#services">Services</a></li>-->
          <!--<li><a href="#portfolio">Portfolio</a></li>-->
          <li><a href="#team">Instrutores</a></li>
          <!-- <li><a href="#pricing">Planos</a></li> -->
          <li><a href="{{ url('unisebra-cursos')}}">Cursos</a></li>
         <!--<li class="drop-down"><a href="">Polos</a>-->
         <!--   <ul>-->
         <!--     <li class="drop-down"><a href="#">São Bento/MA</a>-->
         <!--       <ul>-->
         <!--         <li><a href="#">Curso 1</a></li>-->
         <!--         <li><a href="#">Curso 2</a></li>-->
         <!--         <li><a href="#">Curso 3</a></li>-->
         <!--         <li><a href="#">Curso 4</a></li>-->
         <!--         <li><a href="#">Curso 5</a></li>-->
         <!--       </ul>-->
         <!--     </li>-->

         <!--   </ul>-->
         <!-- </li>-->

          <!--@if (Route::has('login'))-->
          <!--          @auth-->
          <!--          <li><a href="{{ url('/home') }}">Longado</a></li>-->
          <!--          @else-->
          <!--              <li><a href="{{ route('login') }}">Login</a></li>-->
          <!--              <li><a href="{{ route('register') }}">Register</a></li>-->
          <!--          @endauth-->
          <!--        @endif-->

        </ul>

      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

     <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->

      @foreach($carrosel as $c)
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">{{ $c->titulo}}</h2>
          <p class="animate__animated animate__fadeInUp">{{ $c->content}}</p>
        </div>
      </div>
    @endforeach


    @foreach($carrosel2 as $c)
      <!-- Slide 1 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">{{ $c->titulo}}</h2>
          <p class="animate__animated animate__fadeInUp">{{ $c->content}}</p>
        </div>
      </div>
    @endforeach

    

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">


<!-- ======= Icon Boxes Section ======= -->
<section id="icon-boxes" class="icon-boxes p-5">
  <div class="container">

    <div class="row">

      @foreach($cards as $c)
      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
        <div class="icon-box">
          <!-- <div class="icon"><i class="bx bxl-dribbble"></i></div> -->
          <h4 class="title"><a>{{ $c->titulo}}</a></h4>
          <p class="description" style=" white-space: nowrap; heigth: 12em; overflow-x: hidden;text-overflow: ellipsi; ">{{ $c->content}}</p>
        </div>
      </div>
      @endforeach

     

    </div>   

  </div>
</section><!-- End Icon Boxes Section -->

<!-- ======= About Us Section ======= -->
<!--<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>About Us</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row content">
      <div class="col-lg-6">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua.
        </p>
        <ul>
          <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
          <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
          <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
        </ul>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0">
        <p>
          Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
          velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
          culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <a href="#" class="btn-learn-more">Learn More</a>
      </div>
    </div>

  </div>
</section>-->
<!-- End About Us Section -->

<!-- ======= Clients Section ======= -->
<!-- <section id="clients" class="clients">
  
  <div class="section-title">
      <h2>Instituições Parceiras</h2>
  </div>
  <div class="container" data-aos="zoom-in">

    <div class="owl-carousel clients-carousel">
      <img src="assets/img/clients/client-1.png" alt="">
      <img src="assets/img/clients/client-2.png" alt="">
      <img src="assets/img/clients/client-3.png" alt="">
      <img src="assets/img/clients/client-4.png" alt="">
      <img src="assets/img/clients/client-5.png" alt="">
      <img src="assets/img/clients/client-6.png" alt="">
      <img src="assets/img/clients/client-7.png" alt="">
      <img src="assets/img/clients/client-8.png" alt="">
    </div>

  </div>
</section> -->
<!-- End Clients Section -->

<!-- ======= Why Us Section ======= -->
<section id="why-us" class="p-5 why-us">
  <div class="container-fluid">

    <div class="row">


    @foreach($motivacao as $c)
      <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("storage/{{$c->img}}");' data-aos="fade-right">
        <!-- <a href="{{url("storage/$c->video")}}" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> -->
      </div>
    @endforeach

      <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch" data-aos="fade-left">

      @foreach($motivacao as $c)
        <div class="content">
          <h3><strong>{{ $c->titulo }}</strong></h3>
          <p>
              {{ $c->content }}
          </p>
        </div>
        @endforeach

        <div class="accordion-list">
          <ul>
          @foreach($motivacaomotivo as $c)
       
            <li data-aos="fade-up" data-aos-delay="{{$c->id}}00">
              <a data-toggle="collapse" class="collapse" href="#accordion-list-{{{$c->id}}}">
                    {{$c->titulo}}
                  <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
               </a>
              <div id="accordion-list-{{$c->id}}" class="collapse show" data-parent=".accordion-list">
                <p>
                    {{$c->motivo}}
                </p>
              </div>
            </li>

            @endforeach

           

          </ul>
        </div>

      </div>

    </div>

  </div>
</section>
<!-- End Why Us Section -->

<!-- ======= Services Section ======= -->
<!--<section id="services" class="services">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Services</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row">
      <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
        <div class="icon-box">
          <i class="icofont-computer"></i>
          <h4><a href="#">Lorem Ipsum</a></h4>
          <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
        </div>
      </div>
      <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
        <div class="icon-box">
          <i class="icofont-chart-bar-graph"></i>
          <h4><a href="#">Dolor Sitema</a></h4>
          <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
        </div>
      </div>
      <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="300">
        <div class="icon-box">
          <i class="icofont-image"></i>
          <h4><a href="#">Sed ut perspiciatis</a></h4>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
        </div>
      </div>
      <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="400">
        <div class="icon-box">
          <i class="icofont-settings"></i>
          <h4><a href="#">Nemo Enim</a></h4>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
      </div>
      <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="500">
        <div class="icon-box">
          <i class="icofont-earth"></i>
          <h4><a href="#">Magni Dolore</a></h4>
          <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
        </div>
      </div>
      <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="600">
        <div class="icon-box">
          <i class="icofont-tasks-alt"></i>
          <h4><a href="#">Eiusmod Tempor</a></h4>
          <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
        </div>
      </div>
    </div>

  </div>
</section>-->
<!-- End Services Section -->

<!-- ======= Cta Section ======= -->
<!-- <section id="cta" class="cta">
  <div class="container">

    <div class="row" data-aos="zoom-in">
      <div class="col-lg-9 text-center text-lg-left">
        <h3>O Por que fazer os cursos</h3>
        <p> Explicação apelativa das causas...Explicação apelativa das causas...Explicação apelativa das causas...Explicação apelativa das causas...Explicação apelativa das causas...Explicação apelativa das causas...Explicação apelativa das causas...</p>
      </div>
      <div class="col-lg-3 cta-btn-container text-center">
        <a class="cta-btn align-middle"  data-toggle="modal" data-target="#exampleModalLong"  href="#exampleModalLong">Entrar</a>
      </div>
    </div>

  </div>
</section> -->
<!-- End Cta Section -->

<!-- ======= Portfoio Section ======= -->
<!--<section id="portfolio" class="portfoio">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Portfoio</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-card">Card</li>
          <li data-filter=".filter-web">Web</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container">

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>App 1</h4>
          <p>App</p>
          <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Web 3</h4>
          <p>Web</p>
          <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>App 2</h4>
          <p>App</p>
          <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Card 2</h4>
          <p>Card</p>
          <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Web 2</h4>
          <p>Web</p>
          <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>App 3</h4>
          <p>App</p>
          <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Card 1</h4>
          <p>Card</p>
          <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Card 3</h4>
          <p>Card</p>
          <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Web 3</h4>
          <p>Web</p>
          <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

    </div>

  </div>
</section>-->
 <!--End Portfoio Section -->

<!-- ======= Team Section ======= -->
<section id="team" class="p-5 team section-bg">
  <div class="container" data-aos="fade-up">

  
  @foreach($instrutoresarea as $c)

    <div class="section-title">
      <h2>{{$c->titulo}}</h2>
      <p>{{$c->content}}</p>
    </div>

    @endforeach

    <div class="row">

    @foreach($instrutores as $c)
      <div class="col-lg-6 mt-3 mb-3" data-aos="fade-up" data-aos-delay="{{$c->id}}00">
        <div class="member d-flex align-items-start">
          <div class="pic"><img src="{{url("storage/$c->img")}}" class="img-fluid" alt="{{$c->name}}"></div>
          <div class="member-info">
            <h4>{{$c->name}}</h4>
            <span>{{$c->email}}</span>
            <span>{{$c->funcao}}</span>
            <!--<p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>-->
            <div class="social">
              <a href="{{$c->redetwitter}}"><i class="ri-twitter-fill"></i></a>
              <a href="{{$c->redefacebook}}"><i class="ri-facebook-fill"></i></a>
              <a href="{{$c->redeinstagram}}"><i class="ri-instagram-fill"></i></a>
              <a href="{{$c->redelinkedin}}"> <i class="ri-linkedin-box-fill"></i> </a>
            </div>
          </div>
        </div>
      </div>
    @endforeach


    </div>

  </div>
</section><!-- End Team Section -->

<!-- ======= Pricing Section ======= -->


<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="p-5 faq section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Perguntas Frequêntes</h2>
    </div>

    <div class="faq-list">
      <ul>
      @foreach($perguntas as $c)
        <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="{{$c->id}}00">
          <i class="bx bx-help-circle icon-help"></i> 
          <a data-toggle="collapse" class="collapse" href="#faq-list-{{$c->id}}">
              {{$c->titulo}}
          <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-{{$c->id}}" class="collapse" data-parent=".faq-list">
            <p>
              {{ $c->pergunta}}
            </p>
          </div>
        </li>
        @endforeach

      </ul>
    </div>

  </div>
</section><!-- End Frequently Asked Questions Section -->


  </main><!-- End #main -->
  
  
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Entrar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email@exemplo.com">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Senhar</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senhar">
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Lembre-me dos dados</label>
        </div>
        <br/>
        <button type="submit" class="btn btn-primary float-right">Entrar</button>
      </form>

      </div>
     
    </div>
  </div>
   </div>
   
   <!--modal-->
   
   
   <div class="modal fade" id="exampleModalMatricula" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form class="form-horizontal">
<fieldset>
<div class="panel panel-primary">
  
    
    <div class="panel-body">

<!--
<div class="form-group">   
<div class="col-md-4 control-label">
    <img id="logo" src="http://blogdoporao.com.br/wp-content/uploads/2016/12/Faculdade-pitagoras.png"/>
</div>
<div class="col-md-4 control-label">
    <h1>Cadastro de Cliente</h1>
    
</div>
</div>
    -->



<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="Nome">Nome <h11>*</h11></label>  
  <div class="col-md-12">
  <input id="Nome" name="Nome" placeholder="Nome e SobreNome" class="form-control input-md" required="" type="text">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="Nome">CPF <h11>*</h11></label>  
  <div class="col-md-12">
  <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">
  </div>

</div>

<div class="form-group">
  <label class="col-md-1 control-label" for="Nome">Nascimento<h11>*</h11></label>  
  <div class="col-md-12">
  <input id="dtnasc" name="dtnasc" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
</div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-12 control-label" for="radios">Sexo <h11>*</h11></label>
  <div class="col-md-4"> 
    <label required="" class="radio-inline" for="radios-0" >
      <input name="sexo" id="sexo" value="feminino" type="radio" required>
      Feminino
    </label> 
    <label class="radio-inline" for="radios-1">
      <input name="sexo" id="sexo" value="masculino" type="radio">
      Masculino
    </label>
  </div>
</div>
</div>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-12 control-label" for="prependedtext">Telefone <h11>*</h11></label>
  <div class="col-md-12">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
      <input id="prependedtext" name="prependedtext" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
      OnKeyPress="formatar('## #####-####', this)">
    </div>
  </div>

 </div> 

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-12 control-label" for="prependedtext">Email <h11>*</h11></label>
  <div class="col-md-12">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input id="prependedtext" name="prependedtext" class="form-control" placeholder="exemplo@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
    </div>
  </div>
</div>


<!-- Search input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="CEP">CEP <h11>*</h11></label>
  <div class="col-md-12">
    <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" required="" value="" type="search" maxlength="8" pattern="[0-9]+$">
  </div>
</div>


<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-12 control-label" for="Estado Civil">Estado Civil <h11>*</h11></label>
  <div class="col-md-12">
    <select required id="Estado Civil" name="Estado Civil" class="form-control">
        <option value=""></option>
      <option value="Solteiro(a)">Solteiro(a)</option>
      <option value="Casado(a)">Casado(a)</option>
      <option value="Divorciado(a)">Divorciado(a)</option>
      <option value="Viuvo(a)">Viuvo(a)</option>
    </select>
  </div>
  
  <!-- Prepended checkbox -->
    
  </div>
</div>


<!-- Select Basic -->
<div class="form-group">
    
  <label class="col-md-12 control-label" for="selectbasic">Escolaridade <h11>*</h11></label>
  
  <div class="col-md-12">
    <select required id="escolaridade" name="escolaridade" class="form-control">
    <option value=""></option>
      <option value="Analfabeto">Analfabeto</option>
      <option value="Fundamental Incompleto">Fundamental Incompleto</option>
      <option value="Fundamental Completo">Fundamental Completo</option>
      <option value="Médio Incompleto">Médio Incompleto</option>
      <option value="Médio Completo">Médio Completo</option>
      <option value="Superior Incompleto">Superior Incompleto</option>
      <option value="Superior Completo">Superior Completo</option>
    </select>
  </div>


<!-- Text input-->


  </div>
  
</div>
<button type="submit" class="btn btn-primary float-right">Matricular</button>

</div>

</div>


</fieldset>
</form>
        

      </div>
     
    </div>
  </div>
   </div>
   


   <footer id="footer">

<!--<div class="footer-newsletter">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h4>Our Newsletter</h4>
        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
      </div>
      <div class="col-lg-6">
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>
      </div>
    </div>
  </div>
</div>-->

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-4 col-md-8 footer-links">
        <h4>Navegação</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/unisebra-cursos')}}">Cursos</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-8 footer-contact">
        <h4>Nossos Contatos</h4>
        <p>
           <!-- <br>
          ,  ..<br> -->
           <br><br>
          <strong>Telefone:</strong> <a class="text-light">+55 (98) 98878-5437</a><br>
          <strong>Email:</strong><a class="text-light" href="mailto:secretaria@unisebra.com.br"> secretaria@unisebra.com.br</a><br>
        </p>

      </div>

      <div class="col-lg-4 col-md-8 footer-info">
        <h3>Todas nossas redes sociais</h3>
        <!--<p>Todas nossas redes sociais...</p>-->
        <div class="social-links mt-3">
          <!--<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>-->
          <a href="https://www.facebook.com/unisebra/" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/unisebra/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <!--<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>-->
          <!--<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>-->
        </div>
      </div>

    </div>
  </div>
</div>

<div class="container">
  <div class="copyright">
     Copyright &copy; 2021<strong><span>Unisebra</span></strong>. 
    <p>Todos os Direitos Reservados</p>
  </div>
</div>
</footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js')}}"></script>
  
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>
