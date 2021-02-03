@extends('adminlte::page')

@section('title', 'Page')

@section('content_header')<div class="container-fluid">
    <div class="col-md-12">
    <h1>Paginas</h1>

    <ol class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li><a href="">Paginas</a></li>
    </ol></div></div>
@stop

@section('content')
<div class="box box-primary">

  <div class="box-header with-border">
    <h3 class="box-title"></h3>
  </div>

  @include('includes.alerts')

  <form role="form" method="post" action=" @if(isset($page->id)) {{ route('page.update',$page->id) }} @else {{ route('page.store') }} @endif ">
    {!! csrf_field() !!}
    @if(isset($page->id))
      <input type="hidden" value="{{$page->id}}" name="id" />
      {{ method_field('PATCH') }}
    @endif
    <div class="box-body">
      <div class="form-group">
        <label>Nome</label>
        <input class="form-control" placeholder="Inserir Nome" type="text" name="title" value="@if(isset($page)){{$page->title}}@endif">
      </div>
      <div class="form-group">
        <label>Descrição</label>
        <input class="form-control" name="description" type="text" value="@if(isset($page)){{$page->description}}@endif">
      </div>
      <div class="form-group">
        <label>Conteudo</label>
        <textarea class="form-control editor" rows="5" name="content">@if(isset($page)){{$page->content}}@endif</textarea>
      </div>
      <div class="form-group">
        <label>Url</label>
        <input class="form-control" name="url" type="text" value="@if(isset($page)){{$page->url}}@endif">
      </div>
      <div class="form-group">
        <label>Meta Title</label>
        <input class="form-control" name="meta_title" type="text" value="@if(isset($page)){{$page->meta_title}}@endif">
      </div>
      <div class="form-group">
        <label>Meta Keywords</label>
        <input class="form-control" name="meta_keywords" type="text" value="@if(isset($page)){{$page->meta_keywords}}@endif">
      </div>
      <div class="form-group">
        <label>Meta Description</label>
        <input class="form-control" name="meta_description" type="text" value="@if(isset($page)){{$page->meta_description}}@endif">
      </div>
    </div>

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">@if(isset($page))Atualizar @else Salvar @endif</button>
      <a href="{{route('page.index')}}" class="btn">Voltar</a>
    </div>
  </form>
</div>

@stop
@section('js')
<script type="text/javascript">
jQuery.noConflict();
jQuery(document).ready(function(){
  var editor_config = { selector:'.editor',
      path_absolute : "/",
      language: 'pt_BR',
      height:700,
      relative_urls: false,
      menu: false,
      plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern help',
      toolbar: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
      image_advtab: true,
      branding: false,
      removed_menuitems: 'newdocument',
      file_picker_callback: function (callback, value, meta) {
          let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
          let y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
          let type = 'image' === meta.filetype ? 'Images' : 'Files',
              url  = editor_config.path_absolute + 'laravel-filemanager?editor=tinymce5&type=' + type;
          tinymce.activeEditor.windowManager.openUrl({
              url : url,
              title : 'Escolha os Arquivos',
              width : x * 0.8,
              height : y * 0.9,
              onMessage: (api, message) => {
                  callback(message.content);
              }
          });
      }
  }
  tinymce.init(editor_config);

});
</script>
@stop
