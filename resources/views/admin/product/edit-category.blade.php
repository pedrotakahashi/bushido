@extends('adminlte::page')

@section('title', 'Categoria de Produtos')

@section('content_header')<div class="container-fluid">
    <div class="col-md-12">
    <h1>Categoria de Produtos</h1>

    <ol class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li><a href="">Categoria</a></li>
    </ol></div></div>
@stop

@section('content')

@include('includes.alerts')

<form role="form" method="post" action=" @if(isset($category->id)) {{ route('product.category.update',$category->id) }} @else {{ route('product.category.store') }} @endif ">
  <div class="row">
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Categoria</h3>
        </div>
        {!! csrf_field() !!}
        @if(isset($category->id))
          <input type="hidden" value="{{$category->id}}" name="id" />
          {{ method_field('PATCH') }}
        @endif
        <div class="box-body">
          <div class="form-group">
            <label>Nome</label>
            <input class="form-control" placeholder="Inserir Nome" required type="text" name="name" value="@if(isset($category)){{$category->name}}@endif">
          </div>
        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">@if(isset($category))Atualizar @else Salvar @endif</button>
          <a href="{{route('product.category.index')}}" class="btn">Voltar</a>
        </div>
      </div>
    </div>
  </div>
</form>
@stop

@section('js')
<script src="{{ asset('bootstrap/wysihtml5/bootstrap-wysihtml5-0.0.2.min.js') }}"></script>
<!-- wysihtml core javascript with default toolbar functions -->
<script src="bower_components/wysihtml/dist/wysihtml-toolbar.min.js"></script>

<!-- rules defining tags, attributes and classes that are allowed -->
<script src="bower_components/wysihtml/parser_rules/advanced_and_extended.js"></script>
<script type="text/javascript">
jQuery.noConflict();
jQuery(document).ready(function(){
  jQuery('#content-wysihtml').wysihtml5({
      toolbar: 'toolbar',
      parserRules:  wysihtml5ParserRules
  });

});
</script>
@stop
