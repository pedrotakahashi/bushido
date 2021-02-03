@extends('adminlte::page')

@section('title', 'Depoimentos')

@section('content_header')<div class="container-fluid">
    <div class="col-md-12">
    <h1>Depoimentos</h1>

    <ol class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li><a href="">Depoimentos</a></li>
    </ol></div></div>
@stop

@section('content')
<div class="box box-primary">

  <div class="box-header with-border">
    <h3 class="box-title"></h3>
  </div>

  @include('includes.alerts')

  <form enctype="multipart/form-data" role="form" method="post" action=" @if(isset($testimony->id)) {{ route('testimony.update',$testimony->id) }} @else {{ route('testimony.store') }} @endif ">
    {!! csrf_field() !!}
    @if(isset($testimony->id))
      <input type="hidden" value="{{$testimony->id}}" name="id" />
      {{ method_field('PATCH') }}
    @endif
    <div class="box-body">
      <div class="form-group">
        <label>Nome</label>
        <input class="form-control" placeholder="Inserir Nome" type="text" name="name" value="@if(isset($testimony)){{$testimony->name}}@endif">
      </div>
      <div class="form-group">
        <label>Função/Cargo</label>
        <input class="form-control" name="role" type="text" value="@if(isset($testimony)){{$testimony->role}}@endif">
      </div>
      <div class="form-group">
        <label>Empresa</label>
        <input class="form-control" name="company" type="text" value="@if(isset($testimony)){{$testimony->company}}@endif">
      </div>
      <div class="form-group">
        <label>Depoimento</label>
        <textarea class="form-control" rows="5" name="testimony" id="editor">@if(isset($testimony)){{$testimony->testimony}}@endif</textarea>
      </div>
      <div class="form-group">
        <label>Data</label>
        <input class="form-control" name="date" type="date" value="@if(isset($testimony)){{$testimony->date}}@endif">
      </div>
      <div class="form-group">
          <label>Imagem</label>

          @if(isset($testimony->image_profile))
            <img src="/images/uploads/testimony/{{$testimony->image_profile}}" width="200px" />
          @endif
            <a id="show-input" href="#" onclick="show()" class="btn">Adicionar Nova</a>
            <div id="input-image" style="display:none">
              <input name="image_profile" type="file" />
            </div>
            <script>
                function show(){
                    document.getElementById('input-image').style.display = 'block';
                }
            </script>
        </div>
    </div>

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">@if(isset($testimony))Atualizar @else Salvar @endif</button>
      <a href="{{route('testimony.index')}}" class="btn">Voltar</a>
    </div>
  </form>
</div>

@stop
@section('js')
<script type="text/javascript">
jQuery.noConflict();
jQuery(document).ready(function(){
  jQuery('#content-wysihtml').wysihtml5({
    //size: 'default'
  });

});
</script>
@stop
