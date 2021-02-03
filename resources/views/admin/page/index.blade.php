@extends('adminlte::page')

@section('title', 'Pagina')

@section('content_header')<div class="container-fluid">
    <div class="col-md-12">
    <h1>Paginas</h1>

    <ol class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li><a href="">Paginas</a></li>
    </ol></div></div>
@stop

@section('content')
<div class="row">
    <div class="col-xs-12">
      @include('includes.alerts')

      <div class="box">
        <div class="box-header">
          <h3 class="box-title"></h3>
          <div class="box-tools">
            <a href="{{ route('page.create') }}" class="btn btn-primary pull-left" style="margin-right:10px">Nova Pagina</a>
            <div class="input-group input-group-sm" style="width: 150px;">
              <input name="table_search" class="form-control pull-right" placeholder="Buscar" type="text">

              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tbody><tr>
              <th>ID</th>
              <th>Título</th>
              <th>Criado em</th>
              <th></th>
            </tr>
              @foreach($pages as $page)
              <tr>
                <td>{{$page->id}}</td>
                <td>{{$page->title}}</td>
                <td>{{date('d-m-Y H:i', strtotime($page->created_at))}}</td>
                <td>
                  <div class="btn-group"><a href="{{route('page.index')}}/{{$page->id}}/edit" class="btn btn-warning pull-left">Editar</a></div>
                  <div class="btn-group"><form action="{{ route('page.destroy',$page->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button class="btn btn-danger" onclick="return confirm('Deseja realmente excluir?')" type="submit">Excluir</button>
                    </form>
                </div>
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
