@extends('adminlte::page')

@section('title', 'Depoimentos')

@section('content_header')<div class="container-fluid">
  <div class="col-md-12">
    <h1>Depoimentos</h1>

    <ol class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li><a href="">Depoimentos</a></li>
    </ol>
  </div>
</div>
@stop

@section('content')
<div class="row">
  <div class="col-xs-12">
    @include('includes.alerts')
    <div style="margin-bottom: 10px !important">
      <form method="get" action="" class="form-inline">
        <div class="form-group">
          <a href="{{ route('testimony.create') }}" class="btn btn-success span12"><i class="icon-plus icon-white"></i>
            Novo Depoimento</a>
        </div>
      </form>
    </div>
    <div class="box col-md-12">
      <div class="box-header">
        <h3 class="box-title"></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table id="datatable" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Enviado em</th>
              <th>Criado em</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($testimonies as $testimony)
            <tr>
              <td>{{$testimony->id}}</td>
              <td>{{$testimony->name}}</td>
              <td>{{date('d-m-Y H:i', strtotime($testimony->date))}}</td>
              <td>{{date('d-m-Y H:i', strtotime($testimony->created_at))}}</td>
              <td>
                <div class="btn-group"><a href="{{route('testimony.index')}}/{{$testimony->id}}/edit"
                    class="btn btn-warning pull-left">Editar</a></div>
                <div class="btn-group">
                  <form action="{{ route('testimony.destroy',$testimony->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button class="btn btn-danger" onclick="return confirm('Deseja realmente excluir?')"
                      type="submit">Excluir</button>
                  </form>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
@stop