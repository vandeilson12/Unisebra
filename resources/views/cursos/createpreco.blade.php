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


                            <div class="col-md-12">

                                <div class="sufee-alert alert with-close alert-secondary alert-dismissible fade show">
                                    <span class="badge badge-pill badge-secondary">Crear</span>
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
                            </div>
                            
              
                            <div class="col-lg-12">
                                <form method="post" class="form-horizontal" action="{{url("/cursos/preco")}}" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Preço Curso</strong> 
                                    </div>
                                    <div class="card-body card-block">
                                           
                                            <div class="row form-group">
                                         
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="selectLg" class=" form-control-label">Curso</label>
                                                </div>
                                                <div class="col-12 col-md-9">

                                                
                                                    <select name="id_curso" id="id_curso" class="form-control">
                                                    <option value="0">Cursos</option>
                                                      @foreach($cursos as $c)
                                                        <option value="{{ $c->id }}">{{$c->nome}}</option>
                                                      @endforeach
                                                    </select>

                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="selectLg" class=" form-control-label">Total</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="total" name="total" placeholder="Total" class="form-control"/>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="selectLg" class=" form-control-label">Parcelas</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="parcelas" name="parcelas" placeholder="Parcelas" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Vezes</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="vezes" id="vezes" rows="9" placeholder="Vezes ..." class="form-control"/>
                                                </div>
                                            </div>

                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Salvar
                                        </button>
                                        <a href="{{ url('cursos')}}" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Cancelar
                                        </a>
                                    </div>
                                </div>
                            </div>

                            </form>


                         
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
