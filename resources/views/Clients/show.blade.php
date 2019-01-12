@extends('adminlte::page')

@section('title', 'Cliente')

{{--@section('content_header')--}}
{{--<h1>Cadastrar Cliente</h1>--}}
{{--@stop--}}

@section('content')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Cliente -> {{$client->name}}</h3>
        </div>

        <table class="table table-bordered">
            <tbody>
            <tr>
                <th scope="row">ID</th>
                <td>{{$client->id}}</td>
            </tr>
            <tr>
                <th scope="row">Nome</th>
                <td>{{$client->name}}</td>
            </tr>
            <tr>
                <th scope="row">Telefone</th>
                <td>{{$client->phone}}</td>
            </tr>
            <tr>
                <th scope="row">Email</th>
                <td>{{$client->email}}</td>
            </tr>
            <tr>
                <th scope="row">Documento</th>
                <td>{{$client->doc}}</td>
            </tr>
            <tr>
                <th scope="row">Endereço</th>
                <td>{{$client->adress}}</td>
            </tr>
            </tbody>
        </table>
        <a class="btn btn-primary" href="{{route('clients.edit',['client' => $client->id])}}">Editar</a>
        <a class="btn btn-danger" href="{{route('clients.destroy',['client' => $client->id])}}"
           onclick="event.preventDefault();if(confirm('Deseja realmente excluir este cliente ?')){document.getElementById('form-delete').submit();}">Excluir</a>
        <form id="form-delete" style="display:none" action="{{route('clients.destroy',['client' => $client->id])}}" method="post">
            {{csrf_field()}}
            {{method_field('DELETE')}}
        </form>
    </div>
@stop
