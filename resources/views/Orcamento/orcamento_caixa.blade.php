@extends('adminlte::page')

@section('title', 'Orcamento Caixa')

{{--@section('content_header')--}}
{{--<h1>Cadastrar Cliente</h1>--}}
{{--@stop--}}

@section('content')
<div class="box">
    <div class="box-header">
      <h3 class="box-title">Orcamento Caixa</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form role="form" method="POST" action="{{route('caixa.calc')}}">
            <div class="form-group">
                <label for="preco_chapa">Preco Chapa</label>
                <input type="text" class="form-control" id="preco_chapa" name="preco_chapa" placeholder="Preco Chapa">
            </div>
            <div class="form-group">
                <label for="preco_chapa">Base Chapa</label>
                <input type="text" class="form-control" id="base_chapa" name="base_chapa" placeholder="Base Chapa">
            </div>
            <div class="form-group">
                <label for="altura_chapa">Altura Chapa</label>
                <input type="text" class="form-control" id="altura_chapa" name="altura_chapa" placeholder="Altura Chapa">
            </div>
            <div class="form-group">
                <label for="indice_ganho">Indice Ganho</label>
                <input type="text" class="form-control" id="indice_ganho" name="indice_ganho" placeholder="Indice Ganho">
            </div>
            <div class="form-group">
                <label for="base_chapa_encomenda">Base Caixa Encomenda</label>
                <input type="text" class="form-control" id="base_chapa_encomenda" name="base_chapa_encomenda" placeholder="Base Caixa Encomenda">
            </div>
            <div class="form-group">
                <label for="altura_chapa_encomenda">Altura Caixa Encomenda</label>
                <input type="text" class="form-control" id="altura_chapa_encomenda" name="altura_chapa_encomenda" placeholder="Altura Caixa Encomenda">
            </div>
            <div class="form-group">
                <label for="largura_chapa_encomenda">Largra Caixa Emcomenda</label>
                <input type="text"  class="form-control" id="largura_chapa_encomenda" name="largura_chapa_encomenda" placeholder="Largra Caixa Emcomenda" >
            </div>
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
