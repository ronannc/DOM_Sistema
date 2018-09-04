@extends('adminlte::page')

@section('title', 'Editar Cliente')

{{--@section('content_header')--}}
{{--<h1>Cadastrar Cliente</h1>--}}
{{--@stop--}}

@section('content')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Editar Cliente</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="post" action="{{route('clients.update', ['client' => $client->id])}}">

        {{method_field('PUT')}}
        @include('Clients._form_client')
        <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Atualizar</button>
            </div>
        </form>
    </div>

@stop