@extends('adminlte::page')

@section('title', 'Configuration')

@section('content_header')<div class="container-fluid">
    <div class="col-md-12">
    <h1>Configurações</h1>

    <ol class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li><a href="">Configurações</a></li>
    </ol></div></div>
@stop

@section('content')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"></h3>

          <div class="box-tools">
            <a href="{{ route('user.create') }}" class="btn btn-primary pull-left" style="margin-right:10px">Novo Cliente</a>
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
              <th>Name</th>
              <th>Updated at</th>
              <th></th>
            </tr>
              @foreach($users as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->updated_at}}</td>
                <td>
                  <div class="btn-group"><a href="{{route('user.show',$user->id)}}"   class="btn btn-default pull-left">Exibir</a></div>
                  <div class="btn-group"><a href="{{route('user.edit',$user->id)}}" class="btn btn-warning pull-left">Editar</a></div>
                  <?php //<a href="{{route('user.index')}}/{{$user->id}}/destroy" class="btn btn-danger">Deletar</a> ?>

                    <div class="btn-group"><form action="{{ route('user.destroy',$user->id) }}" method="post">
                      @csrf
                      {{ method_field('DELETE') }}
                      <button class="btn btn-danger" type="submit">Excluir</button>
                    </form></div>
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
