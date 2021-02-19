@extends('adminlte::page')

@section('title', 'Senseis')

@section('content_header')<div class="container-fluid">
    <div class="col-md-12">
    <h1>Senseis</h1>

@stop

@section('content')

<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"></h3>

          <div class="box-tools">
            <a href="{{ route('senseis.create') }}" class="btn btn-primary pull-left mb-2" style="margin-right:10px">Adiconar Sensei</a>
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
              <th>Nome</th>
              <th>Atualizado em</th>
              <th></th>
            </tr>
              @foreach($senseis as $senseis)
              <tr>
                <td>{{$senseis->id}}</td>
                <td>{{$senseis->nome}}</td>
                <td>{{$senseis->updated_at}}</td>
                <td>

                  <div class="btn-group"><a href="{{route('senseis.show',$senseis->id)}}"   class="btn btn-default">Exibir</a></div>
                  <div class="btn-group"><a href="{{route('senseis.edit',$senseis->id)}}"   class="btn btn-warning">Editar</a></div>
                  
                  <div class="btn-group"><form action="{{ route('senseis.destroy',$senseis->id) }}" method="post">

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
