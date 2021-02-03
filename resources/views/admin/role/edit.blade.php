@extends('adminlte::page')

@section('title', 'Usuários')

@section('content_header')<div class="container-fluid">
    <div class="col-md-12">
    <h1>Role Edit</h1>

    <ol class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li><a href="">Role</a></li>
    </ol></div></div>
@stop

@section('content')
<div class="box box-primary">

  <div class="box-header with-border">
    <h3 class="box-title">Funções</h3>
  </div>

  @include('includes.alerts')

  <form enctype="multipart/form-data" role="form" method="post" action=" @if(isset($role->id)) {{ route('role.update',$role->id) }} @else {{ route('role.store') }} @endif ">
    {!! csrf_field() !!}
    @isset($role->id)
      <input type="hidden" value="{{$role->id}}" name="id" />
      {{ method_field('PATCH') }}
    @endisset
    <div class="box-body">
      <div class="form-group">
        <label>Nome</label>
        <input class="form-control" placeholder="Inserir Nome" type="text" name="name" value="@isset($role){{$role->name}}@endisset" />
      </div>
      <div class="form-group">
        <label>Label</label>
        <input class="form-control" placeholder="Enter label" type="text" name="label" value="@isset($role){{$role->label}}@endisset" />
      </div>
      <div class="form-group">
        <label>Permissões</label>
        <ul>
          @foreach($permissions as $permit)
          <ol>
              <input name="permissions[]" type="checkbox" value="{{$permit->id}}"
              @isset($role) @if($role->permissions->contains('name', $permit->name)) checked=checked @endif @endisset />
              {{$permit->name}} - {{$permit->label}}
          </ol>
          @endforeach
        </ul>
      </div>
    </div>

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">@if(isset($role))Atualizar @else Salvar @endif</button>
      <a href="{{route('role.index')}}" class="btn">Voltar</a>
    </div>
  </form>
</div>

@stop
