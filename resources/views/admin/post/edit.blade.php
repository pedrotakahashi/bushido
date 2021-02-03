@extends('adminlte::page')

@section('title', 'Page')

@section('content_header')<div class="container-fluid">
    <div class="col-md-12">
    <h1>Postagens</h1>

    <ol class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li><a href="">Postagens</a></li>
    </ol></div></div>
@stop

@section('content')
<div class="box box-primary">

  <div class="box-header with-border">
    <h3 class="box-title"></h3>
  </div>

  @include('includes.alerts')

  <form enctype="multipart/form-data" role="form" method="post" action=" @if(isset($post->id)) {{ route('post.update',$post->id) }} @else {{ route('post.store') }} @endif ">
    {!! csrf_field() !!}
    @if(isset($post->id))
      <input type="hidden" value="{{$post->id}}" name="id" />
      {{ method_field('PATCH') }}
    @endif
    <div class="box-body">
      <div class="form-group">
        <label>Título</label>
        <input class="form-control" placeholder="Inserir Nome" type="text" name="title" value="@if(isset($post)){{$post->title}}@endif" required>
      </div>
      <div class="form-group">
        <label>Descrição</label>
        <input class="form-control" name="description" type="text" value="@if(isset($post)){{$post->description}}@endif">
      </div>
      <div class="form-group">
        <div class="checkbox">
            <label><input name="published" type="checkbox" value="on"
                @isset($post) @if($post->published) checked='checked' @endif @endisset />Publicar</label>
        </div>
      </div>
      <div class="form-group">
        <label>Conteudo</label>
        <textarea class="form-control editor" name="content" >@if(isset($post)){{$post->content}}@endif</textarea>
      </div>
      <div class="form-group">
        <label>Imagem destaque da página</label>
        <a id="show-input" class="btn">Adicionar nova</a>
        <div class="form-group" id="input-image" style="display:none">
          <input name="main_image" type="file" />
        </div>

        @if(isset($post->main_image))
          <img class="form-group" src="{{ URL::to('/images/uploads/blog')}}/{{$post->main_image}}" width="400px"/>
        @endif
      </div>
      <div class="form-group">
        @foreach ($categories as $category)
          <div class="checkbox">
            <label><input type="checkbox" name="category[]" value="{{$category->id}}"
              @isset($post)@if( in_array($category->id, $post->checked_boxes)) checked="checked" @endif @endisset/>{{$category->title}}</label>
          </div>
        @endforeach
      </div>
      <div class="form-group">
        <label>Url</label>
        <input class="form-control" name="url" type="text" value="@if(isset($post)){{$post->url}}@endif">
      </div>
      <div class="form-group">
        <label>Meta Title</label>
        <input class="form-control" name="meta_title" type="text" value="@if(isset($post)){{$post->meta_title}}@endif">
      </div>
      <div class="form-group">
        <label>Meta Keywords</label>
        <input class="form-control" name="meta_keywords" type="text" value="@if(isset($post)){{$post->meta_keywords}}@endif">
      </div>
      <div class="form-group">
        <label>Meta Description</label>
        <input class="form-control" name="meta_description" type="text" value="@if(isset($post)){{$post->meta_description}}@endif">
      </div>
    </div>

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">@if(isset($post))Atualizar @else Salvar @endif</button>
      <a href="{{route('post.index')}}" class="btn">Voltar</a>
    </div>
    @stop
    @section('js')

    <script type="text/javascript">
    jQuery.noConflict();
    jQuery(document).ready(function(){
      jQuery("#show-input").on("click", function(e){
          e.preventDefault();
          jQuery("#input-image").toggle();
      });

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
