<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cursos</title>

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
          <li class="active"><a href="#">Cursos</a></li>
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

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container mt-5">

    <!-- <ol>
      <li><a href="index.html">Home</a></li>
      <li>Curso</li>
    </ol> -->
    <h2>Cursos</h2>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
  <div class="container">

    <div class="row">
    @foreach($curso as $cursos)

      <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
      
        <article class="entry">

          <div class="entry-img">
            <img src="{{url("storage/$cursos->img")}}" alt="{{$cursos->subcategoria}}" class="img-fluid">
          </div>

          <h2 class="entry-title">
            <a>{{$cursos->nome}}</a>
          </h2>

          <div class="entry-meta">
            <ul>
              
            </ul>
          </div>

          <div class="entry-content">
            <p id="deta" style="white-space: nowrap;width: 20em; overflow: hidden;text-overflow: ellipsis;">
              {{$cursos->publico_alvo}}
            </p>
            <div class="read-more">
            <a href="{{ url("/unisebra-curso/$cursos->id")}}" class="btn btn-warning text-light">Observar</a>
            </div>
          </div>
        </article><!-- End blog entry -->
      
      </div>
     
      @endforeach

    </div>

    <!-- <div class="blog-pagination" data-aos="fade-up">
      <ul class="justify-content-center">
        <li class="disabled"><i class="icofont-rounded-left"></i></li>
        <li><a href="#">1</a></li>
        <li class="active"><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
      </ul>
    </div> -->

  </div>
</section><!-- End Blog Section -->

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
   
   <!--modal-->

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

  <script>
      //  var a  = document.getElementById('deta'); 
      //  alert(a);

      // a.slice(5);

      //  var a = $('#deta').text();

        // a.substring(0,4);
  </script>

    </body>
</html>
