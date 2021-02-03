@extends('adminlte::page')

@section('title', 'Produto')

@section('head-meta')
<script src="{{ asset('bootstrap/wysihtml5/bootstrap-wysihtml5-0.0.2.min.css') }}"></script>
@stop

@section('content_header')<div class="container-fluid">
    <div class="col-md-12">
    <h1>Adicionar Produto</h1>
    <ol class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li><a href="">Produto</a></li>
    </ol></div></div>
@stop
@section('content')

@include('includes.alerts')

<form enctype="multipart/form-data" role="form" method="post" action=" @if(isset($product->id)) {{ route('product.update',$product->id) }} @else {{ route('product.store') }} @endif ">
  <div class="row">
    <div class="col-md-6">
      <div class="box box-primary">

        {!! csrf_field() !!}
        @if(isset($product->id))
          <input type="hidden" value="{{$product->id}}" name="id" />
          {{ method_field('PATCH') }}
        @endif
        <div class="box-body">
          <div class="form-group">
            <label>Nome</label>
            <input class="form-control" placeholder="Inserir Nome" type="text" name="name"  required value="@if(isset($product)){{$product->name}}@endif">
          </div>
          <div class="form-group">
            <label>Descrição Resumida</label>
            <textarea class="form-control" rows="5" placeholder="Descreva em poucas palavras as caracteristicas do seu produto" name="short_description" >@if(isset($product)){{$product->short_description}}@endif</textarea>
          </div>
          <div class="form-group">
            <label>Descrição</label>
            <textarea class="form-control editor" rows="20" name="description" id="editor">@if(isset($product)){{$product->description}}@endif</textarea>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-body">
          @isset($product->images)
              @foreach($product->images as $image)

                <div class="form-group col-md-2">
                  <img src="{{URL::to('/images/uploads/product') }}/{{$image->id_name}}" width="100px" height="100px" />
                  <!-- <input type="text" value="{{ $image->name}}" name="image_name[{{$image->id}}]" />
                  <input type="text" value="{{ $image->description}}" name="image_description[{{$image->id}}]" /> -->
                  <a href="{{ route('image.delete',$image->id) }}" class="btn btn-danger">Excluir</a>
                </div>
              @endforeach
          @endif
            <div class="col-md-12 input_fields_wrap">
              <div class="btn-group"><button class="btn btn-flat add_field_button"><i class="fa fa-picture-o" aria-hidden="true"></i> Adicionar Imagem</button></div>
            </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-body">
          <div class="form-group">
            <label>Posição <small>(na listagem do site)</small></label>
            <input class="form-control" name="position"  type="number" value="@if(isset($product)){{$product->position}}@endif" />
          </div>
          <div class="form-group">
            <label>Categoria</label>
              @foreach ($categories as $category)
                <div class="checkbox">
                  <label><input type="checkbox" name="category[]" value="{{$category->id}}"
                    @isset($product)@if( in_array($category->id, $product->checked_boxes)) checked="checked" @endif @endisset/>{{$category->name}}</label>
                </div>
              @endforeach
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-body">
          <div class="form-group">
            <label>Imagem destaque da página</label>
            <a id="show-input" class="btn">Adicionar nova</a>
            <div class="form-group" id="input-image" style="display:none">
              <input name="image_template" type="file" />
            </div>

            @if(isset($product->image_template))
            <img class="form-group" src="{{ URL::to('/images/uploads/template')}}/{{$product->image_template}}" width="400px"/>
            @endif
          </div>
          <div class="form-group">
            <label>Url</label>
            <input class="form-control" name="url" type="text" value="@if(isset($product)){{$product->url}}@endif">
          </div>
          <div class="form-group">
            <label>Meta Title</label>
            <input class="form-control" name="meta_title" type="text" value="@if(isset($product)){{$product->meta_title}}@endif">
          </div>
          <div class="form-group">
            <label>Meta Keywords</label>
            <input class="form-control" name="meta_keywords" type="text" value="@if(isset($product)){{$product->meta_keywords}}@endif">
          </div>
          <div class="form-group">
            <label>Meta Description</label>
            <input class="form-control" name="meta_description" type="text" value="@if(isset($product)){{$product->meta_description}}@endif">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="box-footer">
    <button type="submit" class="btn btn-primary">@if(isset($product))Atualizar @else Salvar @endif</button>
    <a href="{{route('product.index')}}" class="btn">Voltar</a>
  </div>
</form>

@stop
@section('js')
<script type="text/javascript">
jQuery.noConflict();
jQuery(document).ready(function(){

  var max_fields      = 10; //maximum input boxes allowed
  var wrapper         = jQuery(".input_fields_wrap"); //Fields wrapper
  var add_button      = jQuery(".add_field_button"); //Add button ID

  var x = 1; //initlal text box count
  jQuery('.add_field_button').on('click', function(e){ //on add input button click
      e.preventDefault();
      if(x < max_fields){ //max input box allowed
          x++; //text box increment
          jQuery(wrapper).append('<div><input type="file" name="new_image_file[]" /><a href="#" class="remove_field">Remover</a></div>'); //add input box
      }
  });

  jQuery(wrapper).on("click",".remove_field", function(e){ //user click on remove text
      e.preventDefault(); jQuery(this).parent('div').remove(); x--;
  });

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
