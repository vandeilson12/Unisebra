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
                     
                                <form method="post" class="form-horizontal" action="{{url("/inicial-editar-motivacao/mais")}}" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Motivação</strong> 
                                            
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
                                                    <textarea name="content" id="content" rows="9" placeholder="Descrição ..." class="form-control"></textarea>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Imagem</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="img" name="img" class="form-control-file">
                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Video</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="video" name="video" class="form-control-file">
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

                        @foreach($motivacao as $c)

                        
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

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class="text-light form-control-label">Imagem</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="text-light">{{$c->img}}</p>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class="text-light form-control-label">Video</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="text-light">{{$c->video}}</p>
                                                </div>
                                            </div>



                                            <a href="{{ url("/inicial-editar-motivacao/editar/$c->id}")}}" class="btn text-light ml-3 float-right btn-info btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Editar
                                            </a>

                                            <a href="{{ url("/inicial-editar-motivacao/deletar/$c->id") }}" class="btn text-light ml-3 float-right btn-danger btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Delete
                                            </a>
                                       
                                    </div>
                                </div>
                        
                            @endforeach
                        </div>
                        


                        <div class="col-lg-12 mt-2">
                      
                                <form method="post" class="form-horizontal" action="{{url("/inicial-editar-motivacao/motivo/mais")}}" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Motivo</strong> 
                                            
                                    </div>
                                            
                                            <div class="row p-3 form-group">
                                                <div class="col col-md-3">
                                                    <label for="selectLg" class=" form-control-label">Motivo</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="titulo" name="titulo" placeholder="Motivo" value="" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row p-3 form-group">
                                                <div class="col col-md-3">
                                                    <label for="selectLg" class=" form-control-label">Explicação</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="motivo" id="motivo" rows="9" placeholder="Descrição ..." class="form-control"></textarea>
                                                </div>
                                            </div>
                                       
                                  
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Salvar
                                        </button>
                                        
                                    </div>
                             
                            </form>
                           
                        </div>


            @foreach($motivacaomotivo as $c)

                        
            <div class="col-md-12 mt-3 bg-dark">
            <div class="card-body card-block">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="selectLg" class="text-light form-control-label">Motivo</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <p class="text-light">{{ $c->titulo }} </p>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="textarea-input" class="text-light form-control-label">Explicacao</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <p class="text-light">{{$c->motivo}}</p>
                                </div>
                            </div>


                            <a href="{{ url("/inicial-editar-motivacao/area/editar/$c->id}")}}" class="btn text-light ml-3 float-right btn-info btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Editar
                            </a>

                            <a href="{{ url("/inicial-editar-motivacao/motivo/deletar/$c->id") }}" class="btn text-light float-right btn-danger btn-sm">
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
