@extends('adminlte::page')

@section('title', 'Cadastro de Cliente')

{{--@section('content_header')--}}
{{--<h1>Cadastrar Cliente</h1>--}}
{{--@stop--}}

@section('content')
<div class="box">
    <div class="box-header">
      <h3 class="box-title">Clientes</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">


        <table id="table_client" class="table table-bordered table-striped dataTable display">
            <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Documento</th>
                <th>Endereço</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clients as $client)
                <tr onclick="window.location='{{route('clients.show', ['client' => $client->id])}}'">
                    <td>{{$client->id}}</td>
                    <td>{{$client->name}}</td>
                    <td>{{$client->email}}</td>
                    <td>{{$client->phone}}</td>
                    <td>{{$client->doc}}</td>
                    <td>{{$client->address}}</td>
                    <td>
                        <a href="{{route('clients.edit',['client' => $client->id])}}">Editar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    <!-- /.box-body -->
  </div>
</div>
@stop

@section('js')
   <script>
       $(document).ready( function () {
           $('#table_client').DataTable();
       } );

   </script>
@stop
