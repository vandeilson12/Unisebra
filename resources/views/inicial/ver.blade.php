@extends('layouts.app')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

@section('content')

 <!-- ======= Hero Section ======= -->
 <a href="{{ url('inicial-editar-carrosel')}}" type="button" class="btn btn-info float-right text-light m-5">Editar</a>
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

<!-- ======= Icon Boxes Section ======= -->
<section id="icon-boxes" class="icon-boxes p-5">
  <div class="container">

    <div class="row">

      @foreach($cards as $c)
      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
        <div class="icon-box">
          <!-- <div class="icon"><i class="bx bxl-dribbble"></i></div> -->
          <h4 class="title"><a href="cursos.html">{{ $c->titulo}}</a></h4>
          <p class="description">{{ $c->content}}</p>
        </div>
      </div>
      @endforeach

     

    </div>
    <a href="{{ url('inicial-editar-cards')}}" type="button" class="btn btn-info float-right text-light m-5">Editar</a>

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
        <a href="{{url("storage/$c->video")}}" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
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

    <a href="{{ url('inicial-editar-motivacao')}}" type="button" class="btn btn-info float-right text-light m-5">Editar</a>

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
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="{{$c->id}}00">
        <div class="member d-flex align-items-start">
          <div class="pic"><img src="{{url("storage/$c->img")}}" class="img-fluid" alt=""></div>
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

    <a href="{{ url('inicial-editar-instrutores')}}" type="button" class="btn btn-info float-right text-light m-5">Editar</a>

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

    <a href="{{ url('inicial-editar-perguntas')}}" type="button" class="btn btn-info float-right text-light m-5">Editar</a>

  </div>
</section><!-- End Frequently Asked Questions Section -->



@endsection
