@extends('adminlte::page')

@section('title', 'Alunos')

@section('content_header')<div class="container-fluid">
    <div class="col-md-12">
    <h1>Alunos</h1>

@stop

@section('content')

<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"></h3>

          <div class="box-tools">
            <a href="{{ route('alunos.create') }}" class="btn btn-primary pull-left mb-2" style="margin-right:10px">Adiconar Aluno</a>
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
              @foreach($alunos as $alunos)
              <tr>
                <td>{{$alunos->id}}</td>
                <td>{{$alunos->nome}}</td>
                <td>{{$alunos->updated_at}}</td>
                <td>

                  <div class="btn-group"><a href="{{route('alunos.show',$alunos->id)}}"   class="btn btn-default">Exibir</a></div>
                  <div class="btn-group"><a href="{{route('editAluno',$alunos->id)}}"   class="btn btn-warning">Editar</a></div>
                  
                  <div class="btn-group"><form action="{{ route('alunos.destroy',$alunos->id) }}" method="post">
                 
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
