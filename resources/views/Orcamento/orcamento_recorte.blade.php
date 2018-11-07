@extends('adminlte::page')

@section('title', 'Orcamento Recorte')

{{--@section('content_header')--}}
{{--<h1>Cadastrar Cliente</h1>--}}
{{--@stop--}}

@section('content')
<div class="box">
    <div class="box-header">
      <h3 class="box-title">Orcamento Recorte</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form role="form" method="get" action="{{route('recorte.calc')}}">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="text" id="preco_chapa" name="preco_chapa" class="form-control" placeholder="Preco Chapa" >
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon">@</span>
                <input type="text" id="base_chapa" name="base_chapa" class="form-control" placeholder="Base Chapa" >
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                <input type="text" id="altura_chapa" name="altura_chapa" class="form-control" placeholder="Altura Chapa" >
            </div>
            <br>
            {{--<div class="input-group">--}}
                {{--<span class="input-group-addon"><i class="fa fa-phone"></i></span>--}}
                {{--<input type="text" id="comprimento_chapa" name="comprimento_chapa" class="form-control" placeholder="Comprimento Chapa" value="{{old('comprimento_chapa',$client->comprimento_chapa)}}">--}}
            {{--</div>--}}
            {{--<br>--}}
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                <input type="text" id="indice_ganho" name="indice_ganho" class="form-control" placeholder="Indice Ganho" >
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon">@</span>
                <input type="text" id="base_chapa_encomenda" name="base_chapa_encomenda" class="form-control" placeholder="Base Chapa Encomenda" >
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                <input type="text" id="altura_chapa_encomenda" name="altura_chapa_encomenda" class="form-control" placeholder="Altura Chapa Encomenda" >
            </div>
            <br>
            {{--<div class="input-group">--}}
                {{--<span class="input-group-addon"><i class="fa fa-phone"></i></span>--}}
                {{--<input type="text" id="comprimento_chapa_encomenda" name="comprimento_chapa_encomenda" class="form-control" placeholder="Comprimento Chapa Emcomenda" >--}}
            {{--</div>--}}

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Calcular</button>
            </div>


        </form>

        <div class="row">

            <div class="col-lg-6 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>{{$custo}}</h3>

                        <p>Preco de Custo</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    {{--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
                </div>
            </div>

            <!-- ./col -->
            <div class="col-lg-6 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{{$venda}}</h3>

                        <p>Preco de Venda</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-arrow-graph-up-right"></i>
                    </div>
                    {{--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
                </div>
            </div>

        </div>
    <!-- /.box-body -->
  </div>
</div>
@stop
