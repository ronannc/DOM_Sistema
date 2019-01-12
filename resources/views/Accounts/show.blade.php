@extends('adminlte::page')

@section('title', 'Fluxo de Caixa')

{{--@section('content_header')--}}
{{--<h1>Cadastrar Cliente</h1>--}}
{{--@stop--}}

@section('content')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Fluxo de Caixa -> {{$account->name}}</h3>
        </div>
        <div class="box-body">
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th scope="row">ID</th>
                    <td>{{$account->id}}</td>
                </tr>
                <tr>
                    <th scope="row">Nome</th>
                    <td>{{$account->name}}</td>
                </tr>
                <tr>
                    <th scope="row">Valor</th>
                    <td>{{$account->value}}</td>
                </tr>
                <tr>
                    <th scope="row">Tipo</th>
                    <td>{{$account->type}}</td>
                </tr>
                {{--<tr>--}}
                    {{--<th scope="row">Endereço</th>--}}
                    {{--<td>{{$client->address}}</td>--}}
                {{--</tr>--}}
                </tbody>
            </table>
            <a class="btn btn-primary" href="{{route('clients.edit',['client' => $account->id])}}">Editar</a>
            <a class="btn btn-danger" href="{{route('clients.destroy',['client' => $account->id])}}"
               onclick="event.preventDefault();if(confirm('Deseja realmente excluir este cliente ?')){document.getElementById('form-delete').submit();}">Excluir</a>
            <form id="form-delete" style="display:none" action="{{route('clients.destroy',['client' => $account->id])}}" method="post">
                {{csrf_field()}}
                {{method_field('DELETE')}}
            </form>
        </div>
    </div>
@stop
