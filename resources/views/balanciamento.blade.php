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
                            <div class="col-lg-12">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40">Anual</h3>
                                        <canvas id="sales-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40">Bar chart</h3>
                                        <canvas id="barChart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40">Line Chart</h3>
                                        <canvas id="lineChart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40">Doughut Chart</h3>
                                        <canvas id="doughutChart"></canvas>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Calcular</strong> 
                                    </div>
                                    <div class="card-body card-block">
                                        <form class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-12">
                                                    <div class="input-group">
                                                        <div class="input-group-btn">
                                                            <div class="btn-group">
                                                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-primary">Dropdown</button>
                                                                <div tabindex="-1" aria-hidden="true" role="menu" class="dropdown-menu">
                                                                    <button type="button" tabindex="0" class="dropdown-item">Action</button>
                                                                    <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                                    <button type="button" tabindex="0" class="dropdown-item">Something else here</button>
                                                                    <div tabindex="-1" class="dropdown-divider"></div>
                                                                    <button type="button" tabindex="0" class="dropdown-item">Separated link</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="text" id="input1-group3" name="input1-group3" placeholder="Username" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-12">
                                                    <div class="input-group">
                                                        <input type="email" id="input2-group3" name="input2-group3" placeholder="Email" class="form-control">
                                                        <div class="input-group-btn">
                                                            <div class="btn-group">
                                                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-primary">Dropdown</button>
                                                                <div tabindex="-1" aria-hidden="true" role="menu" class="dropdown-menu">
                                                                    <button type="button" tabindex="0" class="dropdown-item">Action</button>
                                                                    <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                                    <button type="button" tabindex="0" class="dropdown-item">Something else here</button>
                                                                    <div tabindex="-1" class="dropdown-divider"></div>
                                                                    <button type="button" tabindex="0" class="dropdown-item">Separated link</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-12">
                                                    <div class="input-group">
                                                        <div class="input-group-btn">
                                                            <div class="btn-group">
                                                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-primary">Action</button>
                                                                <div tabindex="-1" aria-hidden="true" role="menu" class="dropdown-menu">
                                                                    <button type="button" tabindex="0" class="dropdown-item">Action</button>
                                                                    <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                                    <button type="button" tabindex="0" class="dropdown-item">Something else here</button>
                                                                    <div tabindex="-1" class="dropdown-divider"></div>
                                                                    <button type="button" tabindex="0" class="dropdown-item">Separated link</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="text" id="input3-group3" name="input3-group3" placeholder=".." class="form-control">
                                                        <div class="input-group-btn">
                                                            <div class="btn-group">
                                                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-primary">Dropdown</button>
                                                                <div tabindex="-1" aria-hidden="true" role="menu" class="dropdown-menu">
                                                                    <button type="button" tabindex="0" class="dropdown-item">Action</button>
                                                                    <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                                    <button type="button" tabindex="0" class="dropdown-item">Something else here</button>
                                                                    <div tabindex="-1" class="dropdown-divider"></div>
                                                                    <button type="button" tabindex="0" class="dropdown-item">Separated link</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>


@endsection
