<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $cursos->nome}}</title>

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
    </head>
    <body>

<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-none d-lg-flex align-items-center topbar-inner-pages fixed-top">
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
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

    <h1 class="rounded-circle mr-auto"><a href="#header" class="scrollto">
        <img src="{{ asset('img/logos.png')}}" alt="" style="width: 60px;height: 60px;" class="img-fluid rounded-circle bg-light">
      </a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="#header" class="logo mr-auto scrollto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="{{ url('/')}}">Home</a></li>
          <li class="active"><a href="{{ url('http://unisebra.com.br/unisebra-cursos')}}">Cursos</a></li>
          <!--<li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>-->
          <!--<li><a href="#contact">Contact</a></li>-->

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container mt-5">

        <!--<h2>{{ $cursos->nome}}</h2>-->

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">
                @php
                    $img = $cursos->img;
                @endphp
              <div class="entry-img">
                <img src="{{url("storage/$img")}}" alt="{{$cursos->nome}}" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a>{{ $cursos->nome}}</a>
              </h2>

              <div class="entry-content">
                <p>
                   {{ $cursos->detalhes }}
                </p>

                <p>
                   {{ $cursos->publico_alvo}}
                </p>

              </div>


              <p class="entry-title">
                <a>CH</a>
              </p>

              <div class="entry-content">
                <p>
                   {{ $cursos->ch }}
                </p>

              </div>


              <p class="entry-title">
                <a>Modulos</a>
              </p>

              <div class="entry-content">
                <p>

                   @php 
                      $cmodulos = $cursos->find($cursos->id)->cursosmodulos;

                   @endphp
                   @foreach($cmodulos as $c)
                      <p>{{ $c->modulo }}</p>
                   @endforeach

                </p>

              </div>


              <p class="entry-title">
                <a>Descrição</a>
              </p>

              <div class="entry-content">
                <p>

                   @php 
                      $cdescricao = $cursos->find($cursos->id)->cursosdescricao;

                   @endphp
                   @foreach($cdescricao as $c)
                      <p> {{ $c->descricao }}</p>
                   @endforeach

                </p>

              </div>

              <div class="entry-footer clearfix">

                <!-- <div class="float-right share">
                  <a href="" title="Share on Twitter"><i class="icofont-twitter"></i></a>
                  <a href="" title="Share on Facebook"><i class="icofont-facebook"></i></a>
                  <a href="" title="Share on Instagram"><i class="icofont-instagram"></i></a>
                </div> -->

              </div>

            </article><!-- End blog entry -->

            <div class="blog-author clearfix">
              <!-- <img src="assets/img/blog-author.jpg" class="rounded-circle float-left" alt="">
              <h4>Carla Moraes</h4>
              <div class="social-links">
                <a href="https://twitters.com/#"><i class="icofont-twitter"></i></a>
                <a href="https://facebook.com/#"><i class="icofont-facebook"></i></a>
                <a href="https://instagram.com/#"><i class="icofont-instagram"></i></a>
              </div>
              <p>
                Comentário sobre a publicação... Comentário sobre a publicação... Comentário sobre a publicação... Comentário sobre a publicação... Comentário sobre a publicação... Comentário sobre a publicação...
              </p> -->
            </div>
            <!-- End blog author bio -->

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <!-- <h3 class="sidebar-title">Um pouco mais sobre o curso</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="#">Conteudo do um pouco mais sobre o curso</a></li>
                </ul>

              </div> -->
              
              <!-- End sidebar categories-->

            <!--  <h3 class="sidebar-title">Instrutor</h3>-->


            <!--  <div class="row mt-4 mb-4">-->
            <!-- <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">-->
            <!--  <div class="member d-flex align-items-start">-->
            <!--    <div class="w-50 pic circle"><img src="{{url("storage/$img")}}" class="w-100 img-fluid rounded-circle w-50" alt=""></div>-->
            <!--    <div class="w-100 ml-3 text-left member-info">-->
            <!--      <h6><strong>João Carlos</strong></h6>-->
            <!--      <p>Gestão</p>-->
            <!--    <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>-->
            <!--      <div class="social">-->
            <!--        <a href=""><i class="ri-twitter-fill"></i></a>-->
            <!--        <a href=""><i class="ri-facebook-fill"></i></a>-->
            <!--        <a href=""><i class="ri-instagram-fill"></i></a>-->
            <!--        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
            <!--</div>-->


            <h3 class="sidebar-title">Preço</h3>
              <div class="sidebar-item categories">
                <ul>

                    @php 
                        $cpreco = $cursos->find($cursos->id)->cursospreco;

                    @endphp
                    @foreach($cpreco as $c)
                    <li>
                    
                      <a>{{ $c->vezes }}</a>

                      <a>{{ $c->parcelas }}</a>

                    </li>
                    <li>
                      <p>{{ $c->total }}</p>
                    </li>
                  @endforeach                  
                </ul>

              </div>
              <!-- End sidebar categories-->

              <!-- data-toggle="modal" data-target="#exampleModalMatricula" -->
              <a href="https://docs.google.com/forms/d/e/1FAIpQLSfuVvE7AyWIb5nbiB5IZ8LNwtU_2Sd_6W6Jdea2-ImZ035iLA/viewform" class="btn btn-info text-light btn-block mb-4" >Matricula-se</a>

                <h3 class="sidebar-title">Conteudos Relacionados</h3>
              
                    <div class="sidebar-item tags">
                        <ul>
                          <!-- <li><a href="#">Mundo</a></li> -->
                          <li><a href="{{url("/cursos")}}">Cursos</a></li>
                          <!-- <li><a href="#">Certificação</a></li> -->
                        </ul>
        
                    </div>




                <!-- <div class="sidebar-item categories">
                <ul>
                  <li>
                    <a>{{ $cursos->descricao}}</a>
                  </li>
                </ul> -->

              </div>


            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->
    

  </main><!-- End #main -->
  
    <!-- ======= Footer ======= -->
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