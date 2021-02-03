@extends('adminlte::page')

@section('title', 'Mensagens')

@section('content_header')<div class="container-fluid">
    <div class="col-md-12">
    <h1>Visualização de Mensagens</h1>
    <ol class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li><a href="">Mensagens</a></li>
    </ol></div></div>
@stop
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Mensagem pelo site</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body no-padding">
        <div class="mailbox-read-info">
            @isset($mensagem)
          <h3>Assunto: {{$mensagem->assunto}}</h3>
          <h5>De: <b>{{$mensagem->nome." ".$mensagem->sobrenome}}</b><br> Email: {{$mensagem->email}}<br>Telefone: {{$mensagem->telefone}}
          @endisset
            <span class="mailbox-read-time pull-right">@isset($mensagem)
                {{\Carbon\Carbon::parse($mensagem->created_at)->format('d/m/Y G:i:s')}}
            @endisset</span></h5>
        </div>
        <div class="mailbox-read-message">
          <p>@isset($mensagem)
              {{$mensagem->mensagem}}
          @endisset</p>
        </div>
      </div>
      <div class="box-footer">
      </div>
    </div>
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
