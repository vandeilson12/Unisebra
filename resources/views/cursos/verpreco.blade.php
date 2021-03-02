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
                            
              


                       
                            <div class="col-lg-12 mt-4">

                                <div class="card bg-dark">
                                    <div class="card-body card-block">

                                       
                                        
                                            <div class="row form-group">

                                                <div class="col col-md-3">
                                                    <label for="selectLg" class=" form-control-label">Curso</label>
                                                </div>
                                               
                                                <div class="col-12 col-md-9">
                                                    <label for="selectLg" class=" form-control-label">
                                                  @php
                                                    $cc = $cursopreco->find($cursopreco->id)->cursos;

                                                    
                                                   @endphp
                                                    
                                                    @foreach($cc as $c)
                                                        {{ $c->nome}}
                                                    @endforeach
                                                    </label>
                                                </div>
                                                


                                                <div class="col col-md-3">
                                                    <label for="selectLg" class=" form-control-label">Total</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p>{{$cursopreco->total}}</p>
                                                </div>


                                                <div class="col col-md-3">
                                                    <label for="selectLg" class=" form-control-label">Parcelado</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <p>{{$cursopreco->parcelas}}</p>
                                                </div>

                                                <div class="col col-md-3">
                                                    <label for="selectLg" class=" form-control-label">Vezes</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p>{{$cursopreco->vezes}}</p>
                                                </div>
                                            </div>
                                    


                                        <a href="{{ url('cursos/finalizar/preco/$c->id')}}" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Deletar
                                        </a>
                                    </div>

                                    <div class="card-footer">
                                    </div>
                                </div>
                            </div>
                       
                         
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
