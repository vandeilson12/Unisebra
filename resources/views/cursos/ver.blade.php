@extends('layouts.app')


@section('content')
<div class="container p-5">
<h2 class="title-1 m-b-25">
        {{$c['nome']}}
    
      <a  href="{{ url("/cursos/finalizar/$c->id")}}" class="text-light mt-3 mb-3 btn btn-danger btn-sm float-right js-del">
          <i class="fa fa-ban"></i> Deletar
      </a>
</h2>
<div class="table-responsive table--no-card m-b-40">


<table class="table table-borderless table-striped table-earning">
<thead>
    <tr>
        <th scope="col">Img</th>
        <th scope="col">Nome</th>
        <th scope="col">Modalidade</th>
        <th scope="col">Detalhes</th>
        <th scope="col">Publico Alvo</th>
        <th scope="col">CH</th>
    <!-- <th scope="col">Id</th> -->
    </tr>

</thead>
  <tbody>
      @php  
        $img = $c['img'];
      @endphp
    <tr>
      <th class="table" style="width: 200px">
        <a href="{{url("storage/$img")}}">
          <img src="{{url("storage/$img")}}" id="img" name="img" alt="{{$c['categoria']}}">
        </a>
      </th>
        
      <th>{{$c['nome']}}</th>
      <th>{{$c['modalidade']}}</th>
      <th>{{$c['detalhes']}}</th>
      <th>{{$c['publico_alvo']}}</th>
      <th>{{$c['ch']}}</th>

    </tr>

  </tbody>
</table>


<table class="table table-borderless table-striped table-earning">
<thead>

    <tr>
        <th scope="col">código do curso</th>
    <!-- <th scope="col">Id</th> -->
    </tr>

</thead>
  <tbody>

    <tr>      
      <th>{{$c['cod_curso']}}</th>
    </tr>

  </tbody>
</table>

</div>
</div>



@foreach($cc as $c)
<div class="col-lg-12 mt-4">

          <div class="card bg-dark">
              <div class="card-body card-block">

                      <div class="row form-group">                          

                          <div class="col col-md-3">
                              <label for="selectLg" class=" form-control-label">Descriaco</label>
                          </div>
                          <div class="col-12 col-md-9">
                              <p class="text-light">
                                
                                    {{ $c->descricao}}
                                
                                </p>

                          </div>


                          <div class="col col-md-3">
                              <label for="selectLg" class=" form-control-label">Icon</label>
                          </div>
                          <div class="col-12 col-md-9">
                              <p class="text-light">
                                
                                    {{ $c->icon}}
                                
                              </p>

                          </div>

                      </div>

                   
                  <a href="{{ url("/cursos/editar/descricao/$c->id")}}" class="btn btn-info m-2 float-right btn-sm">
                      <i class="fa fa-ban"></i> Editar
                  </a>


                  <a href="{{ url("/cursos/finalizar/descricao/$c->id")}}" class="btn btn-danger m-2 float-right btn-sm">
                      <i class="fa fa-ban"></i> Deletar
                  </a>
              </div>
           
          </div>
      </div>
  
  </div>

  @endforeach



  @foreach($mm as $c)
  <div class="col-lg-12 mt-4">

          <div class="card bg-dark">
              <div class="card-body card-block">

                      <div class="row form-group">                          

                          <div class="col col-md-3">
                              <label for="selectLg" class=" form-control-label">Modulo</label>
                          </div>
                          <div class="col-12 col-md-9">
                              <p class="text-light">
                             
                                
                                
                                    {{ $c->modulo}}
                                
                                </p>

                          </div>


                      </div>

                   
              

                  <a href="{{ url("/cursos/editar/modulo/$c->id")}}" class="btn btn-info m-2 float-right btn-sm">
                      <i class="fa fa-ban"></i> Editar
                  </a>
                  <a href="{{ url("/cursos/finalizar/modulo/$c->id")}}" class="btn btn-danger m-2 float-right btn-sm">
                      <i class="fa fa-ban"></i> Deletar
                  </a>
              </div>
           
          </div>
      </div>
  
    
  </div>

  @endforeach



  @foreach($hh as $c)
  <div class="col-lg-12 mt-4">

          <div class="card bg-dark">
              <div class="card-body card-block">

                      <div class="row form-group">                          

                          <div class="col col-md-3">
                              <label for="selectLg" class=" form-control-label">Total</label>
                          </div>
                          <div class="col-12 col-md-9">
                              <p class="text-light">
                             
                                
                                
                                    {{ $c->total}}
                                
                                </p>

                          </div>


                          <div class="col col-md-3">
                              <label for="selectLg" class=" form-control-label">Parcelas</label>
                          </div>
                          <div class="col-12 col-md-9">
                              <p class="text-light">
                             
                                
                                
                                    {{ $c->parcelas}}
                                
                                </p>

                          </div>


                          <div class="col col-md-3">
                              <label for="selectLg" class=" form-control-label">Vezes</label>
                          </div>
                          <div class="col-12 col-md-9">
                              <p class="text-light">
                             
                                
                                
                                    {{ $c->vezes}}
                                
                                </p>

                          </div>


                      </div>

                   
              

                  <a href="{{ url("/cursos/editar/preco/$c->id")}}" class="btn btn-info m-2 float-right btn-sm">
                      <i class="fa fa-ban"></i> Editar
                  </a>
                  <a href="{{ url("/cursos/finalizar/preco/$c->id")}}" class="btn btn-danger m-2 float-right btn-sm">
                      <i class="fa fa-ban"></i> Deletar
                  </a>
              </div>
           
          </div>
      </div>
  
    
  </div>

  @endforeach

@endsection
