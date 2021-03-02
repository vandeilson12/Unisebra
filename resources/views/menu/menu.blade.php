        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                      
                        <a class="logo" href="index.html">
                            <img class="w-25 mb-2" src="{{ asset('adm/images/logos.png')}}" />
                        </a>
                       
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a style="text-decoration: line-through;" class="js-arrow" href="{{ url('/home') }}">
                                <i class="fas fa-tachometer-alt"></i>Controle</a>
                           
                        </li>
                        <li>
                            <a style="text-decoration: line-through;" href="{{ url('/redimento') }}">
                                <i class="fas fa-table"></i>
                                Redimento
                            </a>
                        </li>

                        <li>
                            <a style="text-decoration: line-through;" href="{{ url('/usuarios') }}">
                                <i class="fas fa-users"></i>
                                Usuarios
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/cursos') }}">
                                <i class="fas fa-chart-bar"></i>
                                Cursos
                            </a>
                        </li>

                        <li>
                            <a style="text-decoration: line-through;" href="{{ url('/eventos') }}">
                                <i class="fas fa-calendar-alt"></i>
                                Eventos
                            </a>
                        </li>

                        <li class=" has-sub">
                            <a class="js-arrow" href="{{ url('/inicial') }}">
                                <i class="fas fa-home"></i>
                                Tela Inicial
                            </a>
                        </li>

                        <!-- <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Logando</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li> -->
                      
                        
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo bg-light  mt-5 mb-5 text-center">
                <a href="{{ url('/')}}">
                    <img class="w-25 mt-1 mb-5" src="{{ asset('adm/images/logos.png')}}" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class=" has-sub">
                            <a style="text-decoration: line-through;" class="js-arrow" href="{{ url('/home') }}">
                                <i class="fas fa-tachometer-alt"></i>Controle</a>
                        </li>
                        <li>
                            <a style="text-decoration: line-through;" href="{{ url('/redimento') }}">
                                <i class="fas fa-table"></i>
                                Redimento
                            </a>
                        </li>

                        <li>
                            <a style="text-decoration: line-through;" href="{{ url('/usuarios') }}">
                                <i class="fas fa-users"></i>
                                Usuarios
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/cursos') }}">
                                <i class="fas fa-chart-bar"></i>
                                Cursos
                            </a>
                        </li>

                        <li class=" has-sub">
                            <a class="js-arrow" href="{{ url('/inicial') }}">
                                <i class="fas fa-home"></i>Tela Inicial</a>
                        </li>

                        <li>
                            <a style="text-decoration: line-through;" href="{{ url('/eventos') }}">
                                <i class="fas fa-calendar-alt"></i>
                                Eventos
                            </a>
                        </li>
                        <!-- <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Logando</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                <li>
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            </ul>
                        </li> -->
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
        