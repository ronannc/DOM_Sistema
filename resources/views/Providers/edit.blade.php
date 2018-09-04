@extends('adminlte::page')

@section('title', 'Editar Fornecedor')

@section('content')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Editar Fornecedor</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="post" action="{{route('providers.update', ['provider' => $provider->id])}}">

        {{method_field('PUT')}}
        @include('Providers._form_provider')
        <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Atualizar</button>
            </div>
        </form>
    </div>

@stop