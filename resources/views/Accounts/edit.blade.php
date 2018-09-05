@extends('adminlte::page')

@section('title', 'Fluxo de Caixa')

{{--@section('content_header')--}}
{{--<h1>Cadastrar Cliente</h1>--}}
{{--@stop--}}

@section('content')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Editar Fluxo de Caixa</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="post" action="{{route('accounts.update', ['account' => $account->id])}}">

        {{method_field('PUT')}}
        @include('Accounts._form_account')
        <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Atualizar</button>
            </div>
        </form>
    </div>

@stop