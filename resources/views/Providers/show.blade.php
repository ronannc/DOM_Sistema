@extends('adminlte::page')

@section('title', 'Fornecedor')

@section('content')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Fornecedor -> {{$provider->name}}</h3>
        </div>

        <table class="table table-bordered">
            <tbody>
            <tr>
                <th scope="row">ID</th>
                <td>{{$provider->id}}</td>
            </tr>
            <tr>
                <th scope="row">Nome</th>
                <td>{{$provider->name}}</td>
            </tr>
            <tr>
                <th scope="row">Telefone</th>
                <td>{{$provider->phone}}</td>
            </tr>
            <tr>
                <th scope="row">Email</th>
                <td>{{$provider->email}}</td>
            </tr>
            </tbody>
        </table>
        <a class="btn btn-primary" href="{{route('providers.edit',['client' => $provider->id])}}">Editar</a>
        <a class="btn btn-danger" href="{{route('providers.destroy',['client' => $provider->id])}}"
           onclick="event.preventDefault();if(confirm('Deseja realmente excluir este cliente ?')){document.getElementById('form-delete').submit();}">Excluir</a>
        <form id="form-delete" style="display:none" action="{{route('providers.destroy',['client' => $provider->id])}}" method="post">
            {{csrf_field()}}
            {{method_field('DELETE')}}
        </form>
    </div>
@stop
