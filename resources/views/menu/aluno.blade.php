<!-- MENU SIDEBAR-->
<aside class="menu-sidebar2">
            <div class="logo">
                <a class="text-light">
                    <img src="{{ asset('adm/images/logos.png')}}" class="w-25" alt="Admin" />
                    Unisebra
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="{{ asset('adm/images/icon/avatar-01.jpg')}}" alt="usuario" />
                    </div>
                    <h4 class="name">Usuario</h4>
                    <!-- <a href="#">Sign out</a> -->
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                            <li>
                                <a href="{{ url('/aluno/home') }}">
                                    Aluno</a>
                            </li>
                             <li>
                                <a href="{{ url('/aluno/cursos') }}">
                                    Cursos</a>
                                <span class="inbox-num">3</span>
                            </li>
                            <li>
                                <a href="{{ url('/aluno/financeiro') }}">
                                    Financeiro</a>
                                
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    </i>Ajuda
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="{{ url('/aluno/secretaria')}}">
                                            Secretaria</a>
                                    </li>
                                </ul>
                            </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                            <a class="text-light">
                                <img src="{{ asset('adm/images/logos.png')}}" style="width: 40px;height: 40px;" alt="Admin" />
                                Unisebra
                            </a>
                            </div>
                            <div class="header-button2">
                                <div class="header-button-item js-item-menu">
                                    <i class="zmdi zmdi-search"></i>
                                    <div class="search-dropdown js-dropdown">
                                        <form action="">
                                            <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports..." />
                                            <span class="search-dropdown__icon">
                                                <i class="zmdi zmdi-search"></i>
                                            </span>
                                        </form>
                                    </div>
                                </div>
                                <div class="header-button-item has-noti js-item-menu">
                                    <i class="zmdi zmdi-notifications"></i>
                                    <div class="notifi-dropdown js-dropdown">
                                        <!-- <div class="notifi__title">
                                            <p>You have 3 Notifications</p>
                                        </div> -->
                                        <div class="notifi__item">
                                            <div class="bg-c1 img-cir img-40">
                                                <i class="zmdi zmdi-email-open"></i>
                                            </div>
                                            <div class="content">
                                                <p>menssagem</p>
                                                <span class="date">12 de Abril 2018 06:50</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                                <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Dados</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">

                                        <div class="account-dropdown__item">
                                            <a href="{{ url('/aluno/finalizar')}}">
                                                Sair</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                <div class="logo">
                    <a href="#">
                        <img src="images/icon/logo-white.png" alt="Cool Admin" />
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                    <div class="account2">
                        <div class="image img-cir img-120">
                            <img src="{{ asset('images/icon/avatar-big-01.jpg')}}" alt="John Doe" />
                        </div>
                        <h4 class="name">john doe</h4>
                        <a href="#">Sign out</a>
                    </div>
                    <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                            <li>
                                <a href="{{ url('/aluno/home') }}">
                                    Aluno</a>
                            </li>
                            <li>
                                <a href="{{ url('/aluno/cursos') }}">
                                    Cursos</a>
                                <span class="inbox-num">3</span>
                            </li>
                            <li>
                                <a href="{{ url('/aluno/financeiro') }}">
                                    Financeiro</a>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    </i>Ajuda
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="{{ url('/aluno/secretaria')}}">
                                            Secretaria</a>
                                    </li>
                                </ul>
                            </li>
                            
                            
                            
                            
                            
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END HEADER DESKTOP-->
