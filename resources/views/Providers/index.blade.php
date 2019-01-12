@extends('adminlte::page')

@section('title', 'Cadastro de Fornecedores')

@section('content')
<div class="box">
    <div class="box-header">
      <h3 class="box-title">Fornecedores</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">


        <table id="table_provider" class="table table-bordered table-striped dataTable display">
            <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                {{--<th>Endereço</th>--}}
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($providers as $provider)
                <tr onclick="window.location='{{route('providers.show', ['provider' => $provider->id])}}'">
                    <td>{{$provider->id}}</td>
                    <td>{{$provider->name}}</td>
                    <td>{{$provider->email}}</td>
                    <td>{{$provider->phone}}</td>
                    <td>
                        <a href="{{route('providers.edit',['provider' => $provider->id])}}">Editar</a>
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
           $('#table_provider').DataTable();
       } );

   </script>
@stop
