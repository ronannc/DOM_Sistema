@extends('adminlte::page')

@section('title', 'Fluxo de Caixa')

{{--@section('content_header')--}}
{{--<h1>Cadastrar Cliente</h1>--}}
{{--@stop--}}

@section('content')
<div class="box">
    <div class="box-header">
      <h3 class="box-title">Fluxo de Caixa</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">


        <table id="table_account" class="table table-bordered table-striped dataTable display">
            <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Valor</th>
                <th>Tipo</th>
                {{--<th>Endereço</th>--}}
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($accounts as $account)
                <tr onclick="window.location='{{route('accounts.show', ['account' => $account->id])}}'">
                    <td>{{$account->id}}</td>
                    <td>{{$account->name}}</td>
                    <td>{{$account->value}}</td>
                    <td>{{$account->type}}</td>
                    <td>
                        <a href="{{route('accounts.edit',['account' => $account->id])}}">Editar</a>
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
           $('#table_account').DataTable();
       } );

   </script>
@stop
