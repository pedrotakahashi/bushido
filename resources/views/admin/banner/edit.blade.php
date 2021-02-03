@extends('adminlte::page')

@section('title', 'Banners')

@section('content_header')<div class="container-fluid">
    <div class="col-md-12">
    <h1>Adicionar novo Banner </h1>

    <ol class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li><a href="">Banners</a></li>
    </ol>
  </div></div>
@stop

@section('content')

@include('includes.alerts')

<form enctype="multipart/form-data" role="form" method="post" action=" @if(isset($banner->id)) {{ route('banner.update',$banner->id) }} @else {{ route('banner.store') }} @endif ">
{!! csrf_field() !!}
<div class="row">
  <div class="col-md-12">
    <div class="box box-danger">
      <div class="box-header with-border">
        <h3 class="box-title"></h3>
      </div>
        @if(isset($banner->id))
          <input type="hidden" value="{{$banner->id}}" name="id" />
          {{ method_field('PATCH') }}
        @endif
        <div class="box-body">
          <div class="form-group">
            <label>Nome</label>
            <input class="form-control" type="text" name="name" value="@if(isset($banner)){{$banner->name}}@endif" />
          </div>
          <input type="hidden" name="position" value="1" />
          <!-- <div class="form-group">
            <label>Posição</label>
            <select name="order">
              <option value="1"
                @isset($banner)@if($banner->position == 1) selected @endif @endisset>Principal</option>
              <option value="2"
                @isset($banner)@if($banner->position == 2) selected @endif @endisset >Lateral</option>
            </select>
          </div> -->
          <div class="form-group">
            <label>Ativo</label>
            <input class="" type="checkbox" name="active"
              @isset($banner)@if($banner->active) checked @endif @endisset
              data-toggle="toggle">
          </div>
          <div class="form-group">
            <label>Imagem</label>

            @if(isset($banner->image_url))
              <img src="/images/uploads/banner/{{$banner->image_url}}" width="600px" />
            @endif
              <a id="show-input" href="#" onclick="show()" class="btn">Adicionar Nova</a>
              <div id="input-image" style="display:none">
                <input name="image" type="file" />
              </div>
              <script>
                  function show(){
                      document.getElementById('input-image').style.display = 'block';
                  }
              </script>
          </div>
          <div class="form-group">
            <label>Ordem</label>
            <input class="form-control" type="number" name="order" value="@isset($banner){{$banner->order}}@endisset" />
          </div>
          <div class="form-group">
            <label>Url de destino</label>
            <input class="form-control" type="text" name="link" value="@isset($banner){{$banner->link}}@endisset" />
          </div>
        </div>
    </div>
  </div>
</div>

  <div class="box-footer">
    <button type="submit" class="btn btn-primary">@if(isset($banner))Atualizar @else Salvar @endif</button>
    <a href="{{route('banner.index')}}" class="btn">Voltar</a>
  </div>

</form>

@stop
