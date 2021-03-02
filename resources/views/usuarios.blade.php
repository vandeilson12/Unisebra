@extends('layouts.app')

@section('content')


    <div class="page-wrapper">

            @include('menu.menu')

        <!-- PAGE CONTAINER-->
        <div class="page-container">

            @include('menu.usuario')
            
            <!-- MAIN CONTENT-->
            <!-- <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-12">

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
                    </div>
                        </div>

                        <h3 class="mt-5 mb-5">Professores</h3>

                        <div class="row">

                            <div class="col-md-12 mb-3 mt-3">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Professores</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>ADD</button>
                                </div>
                            </div>
                           
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-user"></i>
                                        <strong class="card-title pl-2">#id76545</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                            <img class="rounded-circle mx-auto d-block" src="images/icon/avatar-01.jpg" alt="Card image cap">
                                            <h5 class="text-sm-center mt-2 mb-1">Steven Lee</h5>
                                            <div class="location text-sm-center">
                                                </div>
                                        </div>
                                        <hr>
                                        <div class="card-text text-sm-center">
                                            <a href="#">
                                                <i class="fa fa-facebook pr-1"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-twitter pr-1"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-linkedin pr-1"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-pinterest pr-1"></i>
                                            </a>

                                            <div class="card-footer">
                                                <button type="button" class="btn btn-secondary btn-sm mb-1" data-toggle="modal" data-target="#scrollmodal">
                                                    <i class="fa fa-ban"></i> Ver
                                                </button>
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> <a class="text-light" href="form10.html">Editar</a>
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Deletar
                                                </button>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-user"></i>
                                        <strong class="card-title pl-2">#id76545</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                            <img class="rounded-circle mx-auto d-block" src="images/icon/avatar-01.jpg" alt="Card image cap">
                                            <h5 class="text-sm-center mt-2 mb-1">Steven Lee</h5>
                                            <div class="location text-sm-center">
                                                </div>
                                        </div>
                                        <hr>
                                        <div class="card-text text-sm-center">
                                            <a href="#">
                                                <i class="fa fa-facebook pr-1"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-twitter pr-1"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-linkedin pr-1"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-pinterest pr-1"></i>
                                            </a>

                                            <div class="card-footer">
                                                <button type="button" class="btn btn-secondary btn-sm mb-1" data-toggle="modal" data-target="#scrollmodal">
                                                    <i class="fa fa-ban"></i> Ver
                                                </button>
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> <a class="text-light" href="form10.html">Editar</a>
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Deletar
                                                </button>
                                            </div>
                                            
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-user"></i>
                                        <strong class="card-title pl-2">#id76545</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                            <img class="rounded-circle mx-auto d-block" src="images/icon/avatar-01.jpg" alt="Card image cap">
                                            <h5 class="text-sm-center mt-2 mb-1">Steven Lee</h5>
                                            <div class="location text-sm-center">
                                                </div>
                                        </div>
                                        <hr>
                                        <div class="card-text text-sm-center">
                                            <a href="#">
                                                <i class="fa fa-facebook pr-1"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-twitter pr-1"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-linkedin pr-1"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-pinterest pr-1"></i>
                                            </a>

                                            <div class="card-footer">
                                                <button type="button" class="btn btn-secondary btn-sm mb-1" data-toggle="modal" data-target="#scrollmodal">
                                                    <i class="fa fa-ban"></i> Ver
                                                </button>
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> <a class="text-light" href="form10.html">Editar</a>
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Deletar
                                                </button>
                                            </div>
                                            
                                        </div>


                                    </div>
                                </div>
                            </div>


                        </div>



                        <h3 class="mt-5 mb-5">Alunos</h3>

                        <div class="row">
                           
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-user"></i>
                                        <strong class="card-title pl-2">#id9667</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                            <img class="rounded-circle mx-auto d-block" src="images/icon/avatar-01.jpg" alt="Card image cap">
                                            <h5 class="text-sm-center mt-2 mb-1">Steven Lee</h5>
                                            <div class="location text-sm-center">
                                                cursos   <span class="badge badge-danger pull-right">15</span></div>
                                        </div>
                                        <hr>
                                        <div class="card-text text-sm-center">
                                            <a href="#">
                                                <i class="fa fa-facebook pr-1"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-twitter pr-1"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-linkedin pr-1"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-pinterest pr-1"></i>
                                            </a>

                                            <div class="card-footer">
                                                <button type="button" class="btn btn-secondary btn-sm mb-1" data-toggle="modal" data-target="#scrollmodal">
                                                    <i class="fa fa-ban"></i> Ver
                                                </button>
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> <a class="text-light" href="form10.html">Editar</a>
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Deletar
                                                </button>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-user"></i>
                                        <strong class="card-title pl-2">#id9667</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                            <img class="rounded-circle mx-auto d-block" src="images/icon/avatar-01.jpg" alt="Card image cap">
                                            <h5 class="text-sm-center mt-2 mb-1">Steven Lee</h5>
                                            <div class="location text-sm-center">
                                                cursos   <span class="badge badge-danger pull-right">15</span></div>
                                        </div>
                                        <hr>
                                        <div class="card-text text-sm-center">
                                            <a href="#">
                                                <i class="fa fa-facebook pr-1"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-twitter pr-1"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-linkedin pr-1"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-pinterest pr-1"></i>
                                            </a>

                                            <div class="card-footer">
                                                <button type="button" class="btn btn-secondary btn-sm mb-1" data-toggle="modal" data-target="#scrollmodal">
                                                    <i class="fa fa-ban"></i> Ver
                                                </button>
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> <a class="text-light" href="form10.html">Editar</a>
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Deletar
                                                </button>
                                            </div>
                                            
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-user"></i>
                                        <strong class="card-title pl-2">#id9667</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                            <img class="rounded-circle mx-auto d-block" src="images/icon/avatar-01.jpg" alt="Card image cap">
                                            <h5 class="text-sm-center mt-2 mb-1">Steven Lee</h5>
                                            <div class="location text-sm-center">
                                                cursos   <span class="badge badge-danger pull-right">15</span></div>
                                        </div>
                                        <hr>
                                        <div class="card-text text-sm-center">
                                            <a href="#">
                                                <i class="fa fa-facebook pr-1"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-twitter pr-1"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-linkedin pr-1"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-pinterest pr-1"></i>
                                            </a>

                                            <div class="card-footer">
                                                <button type="button" class="btn btn-secondary btn-sm mb-1" data-toggle="modal" data-target="#scrollmodal">
                                                    <i class="fa fa-ban"></i> Ver
                                                </button>
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> <a class="text-light" href="form10.html">Editar</a>
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Deletar
                                                </button>
                                            </div>
                                            
                                        </div>


                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div> -->
        <!-- END PAGE CONTAINER-->


        <!-- modal scroll -->
			<div class="modal fade" id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="scrollmodalLabel">Scrolling Long Content Modal</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>
								Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
								risus, porta ac consectetur ac, vestibulum at eros.
								<br> Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum
								faucibus dolor auctor.
								<br> Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
								Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
								<br> Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi
								leo risus, porta ac consectetur ac, vestibulum at eros.
								<br> Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum
								faucibus dolor auctor.
								<br> Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
								Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
								<br> Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi
								leo risus, porta ac consectetur ac, vestibulum at eros.
								<br> Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum
								faucibus dolor auctor.
								<br> Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
								Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
								<br> Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi
								leo risus, porta ac consectetur ac, vestibulum at eros.
								<br> Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum
								faucibus dolor auctor.
							</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary">Confirm</button>
						</div>
					</div>
				</div>
			</div>
			<!-- end modal scroll -->  
    </div>


@endsection
