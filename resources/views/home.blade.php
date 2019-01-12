@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">

        <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{$value_fluxo}}</h3>

                    <p>Fluxo de Caixa Atual</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                {{--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
            </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{$value_entrada}}</h3>

                    <p>Entrada Mes</p>
                </div>
                <div class="icon">
                    <i class="ion ion-arrow-graph-up-right"></i>
                </div>
                {{--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
            </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>{{$value_saida}}</h3>

                    <p>Saida Mes</p>
                </div>
                <div class="icon">
                    <i class="ion ion-arrow-graph-down-right"></i>
                </div>
                {{--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
            </div>
        </div>



    </div>
@stop
