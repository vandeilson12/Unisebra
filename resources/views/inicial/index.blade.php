@extends('layouts.app')

@section('content')


    <div class="page-wrapper">

            @include('menu.menu')

        <!-- PAGE CONTAINER-->
        <div class="page-container">

            @include('menu.usuario')

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid bg-light">
                        
                        <div class="row">
                            <!-- <div class="col-md-12">

                                <div class="mt-2 sufee-alert alert with-close alert-secondary alert-dismissible fade show">
                                    <span class="badge badge-pill badge-secondary">Padrão</span>
                                     Você leu com sucesso este alerta importante.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="mt-2 sufee-alert alert with-close alert-success alert-dismissible fade show">
                                    <span class="badge badge-pill badge-success">Sucesso</span>
                                     Você leu com sucesso este alerta importante.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="mt-2 sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                    <span class="badge badge-pill badge-danger">Alerta</span>
                                     Você leu com sucesso este alerta importante.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div> -->
                    </div>
                        </div>

                        <div class="col-md-12 mb-3 mt-3">
                            <div class="overview-wrap">
                                <h2 class="title-1">Cursos</h2>
                                <button class="au-btn au-btn-icon au-btn--blue">
                                    <a href="{{url("/cursos/create")}}" class="text-light"><i class="zmdi zmdi-plus"></i>ADD</a>
                                </button>
                            </div>
                        </div>

                        <div class="row">

                        @foreach($curso as $ver)
                            <div class="col-md-4">
                                <input type="hidden" id="cod_curso" value="{{ $ver->cod_curso}}"/>
                                <div class="card">
                                    <img src="{{url("storage/$ver->img")}}" id="img" name="img" alt="{{$ver->categoria}}" class="card-img-top" >
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">{{ $ver->subcategoria}}</h4>
                                        <p class="card-text">{{ $ver->descricao}}
                                        </p>

                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <a href="#">
                                                    <i class="fa fa-user"></i> Alunos
                                                </a>
                                                <span class="badge badge-success pull-right">--</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-footer">
                                        <a href="{{ url("/cursos/$ver->id")}}" class="text-light btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Ver
                                        </a>
                                        <a href="{{ url("/cursos/$ver->id/edit")}}" class="text-light btn btn-secondary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Editar
                                        </a>

                                        <a  href="{{ url("/cursos/finalizar/$ver->id")}}" class="text-light btn btn-danger btn-sm float-right js-del">
                                            <i class="fa fa-ban"></i> Deletar
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTAINER-->
            
        </div>

    </div>


@endsection
