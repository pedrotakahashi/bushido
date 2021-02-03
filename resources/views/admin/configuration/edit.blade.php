@extends('adminlte::page')

@section('title', 'Configurations')

@section('content_header')<div class="container-fluid">
    <div class="col-md-12">
    <h1>Editar Configurações do Sistema</h1>

    <ol class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li><a href="">Sistema</a></li>
      <li><a href="">Configurações</a></li>
    </ol></div></div>
@stop

@section('content')

@include('includes.alerts')

<form enctype="multipart/form-data" role="form" method="post" action=" @if(isset($configuration->id)) {{ route('configuration.update',$configuration->id) }} @else {{ route('configuration.store') }} @endif ">
{!! csrf_field() !!}
<div class="row">
  <div class="col-md-6">
    <div class="box box-danger">
      <div class="box-header with-border">
        <h3 class="box-title">Dados de Acesso</h3>
      </div>
        @if(isset($configuration->id))
          <input type="hidden" value="{{$configuration->id}}" name="id" />
          {{ method_field('PATCH') }}
        @endif
        <div class="box-body">
          <div class="form-group">
            <label>Nome do site</label>
            <input class="form-control" type="text" name="sitename" value="@if(isset($configuration)){{$configuration->sitename}}@endif" />
          </div>
          <div class="form-group">
            <label>Descrição para o site</label>
            <input class="form-control" type="text" name="description" value="@if(isset($configuration)){{$configuration->description}}@endif" />
          </div>
          <div class="form-group">
            <label>Logotipo</label>

            @if(isset($configuration->logotipo))
              <img src="{{asset('/images/uploads/')}}/{{$configuration->logotipo}}" width="200px" />
            @endif
              <a id="show-input" href="#" onclick="show()" class="btn">Adicionar nova</a>
              <div id="input-image" style="display:none">
                <input name="logotipo" type="file" />
              </div>
              <script>
                  function show(){
                      document.getElementById('input-image').style.display = 'block';
                  }
              </script>

          </div>
        </div>
    </div>
  </div>
  <!-- coluna direita -->

    <div class="col-md-6">
      <div class="box box-info">
        <div class="box-body">
          <div class="form-group">
            <label>CNPJ</label>
            <input class="form-control cnpj" type="text" name="cnpj" placeholder="00.000.000/0000-00" value="@if(isset($configuration)){{$configuration->cnpj}}@endif" />
          </div>
          <div class="form-group">
            <label>Nome fantasia</label>
            <input class="form-control" type="text" name="nome_fantasia" value="@if(isset($configuration)){{$configuration->nome_fantasia}}@endif" />
          </div>
          <div class="form-group">
            <label>Data de abertura</label>
            <input class="form-control" type="date" name="data_abertura" value="@if(isset($configuration)){{$configuration->data_abertura}}@endif" />
          </div>
          <div class="form-group">
            <label>Natureza Juridica</label>
            <input class="form-control" type="text" name="natureza_juridica" value="@if(isset($configuration)){{$configuration->natureza_juridica}}@endif" />
          </div>
          <div class="form-group">
            <label>Nome Representante</label>
            <input class="form-control" type="text" name="representante" value="@if(isset($configuration)){{$configuration->representante}}@endif" />
          </div>
          <div class="form-group">
            <label>Documento</label>
            <input class="form-control" type="text" name="documento" value="@if(isset($configuration)){{$configuration->documento}}@endif" />
          </div>
          <div class="form-group">
            <label>Estado Civil</label>
            <input class="form-control" type="text" name="estado_civil" value="@if(isset($configuration)){{$configuration->estado_civil}}@endif" />
          </div>
          <div class="form-group">
            <label>nacionalidade</label>
            <input class="form-control" type="text" name="nacionalidade" value="@if(isset($configuration)){{$configuration->nacionalidade}}@endif" />
          </div>
        </div>
      </div>
    </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Contatos</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="form-group col-md-2">
          <label>CEP</label>
          <input class="form-control" type="text" name="cep" value="@if(isset($configuration)){{$configuration->cep}}@endif" />
        </div>
        <div class="form-group col-md-1">
          <label>Número</label>
          <input class="form-control" type="text" name="numero" value="@if(isset($configuration)){{$configuration->numero}}@endif" />
        </div>
        <div class="form-group col-md-4">
          <label>Endereço Residencial</label>
          <input class="form-control" type="text" name="logradouro" value="@if(isset($configuration)){{$configuration->logradouro}}@endif" />
        </div>
        <div class="form-group col-md-2">
          <label>Complemento</label>
          <input class="form-control" type="text" name="complemento" value="@if(isset($configuration)){{$configuration->complemento}}@endif" />
        </div>
        <div class="form-group col-md-2">
          <label>Bairro</label>
          <input class="form-control" type="text" name="bairro" value="@if(isset($configuration)){{$configuration->bairro}}@endif" />
        </div>
        <div class="form-group col-md-4">
          <label>Municipio</label>
          <input class="form-control" type="text" name="municipio" value="@if(isset($configuration)){{$configuration->municipio}}@endif" />
        </div>
        <div class="form-group col-md-1">
          <label>UF</label>
          <input class="form-control" type="text" name="uf" value="@if(isset($configuration)){{$configuration->uf}}@endif" />
        </div>
        <div class="form-group col-md-3">
          <label>Telefones (Separar por vírgula)</label>
          <input class="form-control" type="text" name="contato_telefone" value="@if(isset($configuration)){{$configuration->contato_telefone}}@endif" />
        </div>
        <div class="form-group col-md-3">
          <label>Email</label>
          <input class="form-control" type="text" name="contato_email" value="@if(isset($configuration)){{$configuration->contato_email}}@endif" />
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Redes Sociais</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="form-group">
          <label>Facebook</label>
          <input class="form-control" type="text" name="link_facebook" value="@if(isset($configuration->link_facebook)){{$configuration->link_facebook}}@endif" />
        </div>
        <div class="form-group">
          <label>Twitter</label>
          <input class="form-control" type="text" name="link_twitter" value="@if(isset($configuration->link_twitter)){{$configuration->link_twitter}}@endif" />
        </div>
        <div class="form-group">
          <label>Instagram</label>
          <input class="form-control" type="text" name="link_instagram" value="@if(isset($configuration->link_instagram)){{$configuration->link_instagram}}@endif" />
        </div>
        <div class="form-group">
          <label>Linkedin</label>
          <input class="form-control" type="text" name="link_linkedin" value="@if(isset($configuration->link_linkedin)){{$configuration->link_linkedin}}@endif" />
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Configuração API</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="form-group">
          <label>Google Analytics</label>
          <input class="form-control" type="text" name="google_analytics" value="@if(isset($configuration->google_analytics)){{$configuration->google_analytics}}@endif" />
        </div>
      </div>
    </div>
  </div>
</div>

  <div class="box-footer">
    <button type="submit" class="btn btn-primary">@if(isset($configuration))Atualizar @else Salvar @endif</button>
    <a href="{{route('user.index')}}" class="btn">Voltar</a>
  </div>

</form>

@stop
