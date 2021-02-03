@extends('adminlte::page')

@section('title', 'Mensagens')

@section('content_header')<div class="container-fluid">
    <div class="col-md-12">
    <h1>Mensagens</h1>

    <ol class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li><a href="">Mensagens</a></li>
    </ol></div></div>
@stop
@section('content')
<div class="row">
    <div class="col-xs-12">
      @include('includes.alerts')

      <div class="box col-md-12">
        <div class="box-header">
          <h3 class="box-title"></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table id="datatable" class="table table-bordered table-striped">
            <thead>
              <tr>
              <th>Nome</th>
              <th>Assunto</th>
              <th>Telefone</th>
              <th>Em:</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
              @foreach($message as $msg)
              <tr>
                <td>{{$msg->nome}}</td>
                <td>{{$msg->assunto}}</td>
                <td>{{$msg->telefone}}</td>
                <td>{{\Carbon\Carbon::parse($msg->created_at)->format('d/m/Y H:i:s')}}</td>
                <td>
                  <div class="btn-group"><a href="{{ route('message.show',$msg->id) }}" class="btn btn-warning pull-left">Ver Mais</a></div>
                </td>
              </tr>
              @endforeach
          </tbody></table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
  @stop
  @section('adminlte_js')
  <script>
          $(function () {
            $('#datatable').DataTable({
              'paging'      : true,
              'lengthChange': false,
              'searching'   : true,
              'ordering'    : true,
              'info'        : true,
              'autoWidth'   : false,
              "language": {
                  "url": "/js/datatables.net/Portuguese.json"
              }
            })
          })
        </script>
  @stop
