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
                    <div class="container-fluid">
                        <div class="row">


                            <!-- <div class="col-md-12">

                                <div class="sufee-alert alert with-close alert-secondary alert-dismissible fade show">
                                    <span class="badge badge-pill badge-secondary">Padrão</span>
                                     Você leu com sucesso este alerta importante.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                    <span class="badge badge-pill badge-success">Sucesso</span>
                                     Você leu com sucesso este alerta importante.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                    <span class="badge badge-pill badge-danger">Alerta</span>
                                     Você leu com sucesso este alerta importante.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div> -->
                            
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h2>Tela Inicial</h2>
                                            
                                    </div>
                                </div>
                            </div>
                            
                        <div class="col-lg-12">
                      
                                <form method="post" class="form-horizontal" action="{{url("/inicial-editar-cards/mais/")}}" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Cards</strong> 
                                            
                                    </div>
                                    <div class="card-body card-block">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="selectLg" class=" form-control-label">Titulo</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="titulo" name="titulo" placeholder="Titulo" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Descrição</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="content" id="content" rows="9" placeholder="Descrição" class="form-control"></textarea>
                                                </div>
                                            </div>
                                       
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Salvar
                                        </button>
                                    </div>
                             
                            

                            </form>
                           
                        </div>

                        @foreach($cards as $c)

                        
                            <div class="col-md-12 mt-3 bg-dark">
                            <div class="card-body card-block">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="selectLg" class="text-light form-control-label">Titulo</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="text-light">{{ $c->titulo }} </p>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class="text-light form-control-label">Descrição</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="text-light">{{$c->content}}</p>
                                                </div>
                                            </div>


                                            <a href="{{ url("/inicial-editar-cards/editar/$c->id}")}}" class="btn text-light ml-3 float-right btn-info btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Editar
                                            </a>

                                            <a href="{{ url("/inicial-editar-cards/deletar/$c->id") }}" class="btn text-light float-right btn-danger btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Delete
                                            </a>
                                       
                                    </div>
                                </div>
                        
                            @endforeach
                            </div>
                            </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    Copyright &copy; 2021<strong><span>Unisebra</span></strong>. 
                                    <p>Todos os Direitos Reservados</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

</div>


@endsection
