@extends('adminlte::page')

@section('title', 'Configuration')

@section('content_header')<div class="container-fluid">
    <div class="col-md-12">
    <h1>Configuration</h1>

    <ol class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li><a href="">Configuration</a></li>
    </ol></div></div>
@stop

@section('content')

@include('includes.alerts')
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
          <div class="form-group">{{$configuration->sitename}}</div>
          <div class="form-group">{{$configuration->description}}</div>
          <div class="form-group">
            @if(isset($configuration->logotipo))
              <img src="/images/{{$configuration->logotipo}}" width="200px" />
            @endif
          </div>
        </div>
    </div>
    <div class="box box-success">
      <div class="box-header with-border">
        <h3 class="box-title">Contatos</h3>
      </div>
      <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Logradouro</strong>
              <p class="text-muted">{{$configuration->logradouro}}</p>
              <hr>
              <strong><i class="fa fa-book margin-r-5"></i>Número</strong>
              <p class="text-muted">{{$configuration->numero}}</p>
              <hr>
              <strong><i class="fa fa-book margin-r-5"></i> CEP</strong>
              <p class="text-muted">{{$configuration->cep}}</p>
              <hr>
              <strong><i class="fa fa-book margin-r-5"></i> Data de abertura</strong>
              <p class="text-muted">{{$configuration->complemento}}</p>
              <hr>
              <strong><i class="fa fa-book margin-r-5"></i> Bairro</strong>
              <p class="text-muted">{{$configuration->bairro}}</p>
              <hr>
              <strong><i class="fa fa-book margin-r-5"></i> Município</strong>
              <p class="text-muted">{{$configuration->municipio}}</p>
              <hr>
              <strong><i class="fa fa-book margin-r-5"></i> UF</strong>
              <p class="text-muted">{{$configuration->uf}}</p>
              <hr>
              <strong><i class="fa fa-book margin-r-5"></i> Telefones</strong>
              <p class="text-muted">{{$configuration->contato_telefone}}</p>
              <hr>
              <strong><i class="fa fa-book margin-r-5"></i> Email</strong>
              <p class="text-muted">{{$configuration->contato_email}}</p>
              <hr>
      </div>
    </div>
  </div>
  <!-- coluna direita -->
  <div class="col-md-6">
    <div class="box box-info">
      <div class="box-body">
        <div class="form-group col-md-12">
          <div class="btn-group"><a href="{{route('configuration.edit',$configuration->id)}}" class="btn btn-warning pull-left">Editar</a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="box box-success">
      <div class="box-header with-border">
        <h3 class="box-title">Documentos</h3>
      </div>
      <div class="box-body">
          <strong><i class="fa fa-book margin-r-5"></i> CNPJ</strong>
          <p class="text-muted">{{$configuration->cnpj}}</p>
          <hr>
          <strong><i class="fa fa-book margin-r-5"></i> Nome</strong>
          <p class="text-muted">{{$configuration->nome}}</p>
          <hr>
          <strong><i class="fa fa-book margin-r-5"></i> Nome Fantasia</strong>
          <p class="text-muted">{{$configuration->nome_fantasia}}</p>
          <hr>
          <strong><i class="fa fa-book margin-r-5"></i> Data de abertura</strong>
          <p class="text-muted">{{$configuration->data_abertura}}</p>
          <hr>
          <strong><i class="fa fa-book margin-r-5"></i> Natureza Juridica</strong>
          <p class="text-muted">{{$configuration->natureza_juridica}}</p>
          <hr>
          <strong><i class="fa fa-book margin-r-5"></i> Tipo</strong>
          <p class="text-muted">{{$configuration->tipo}}</p>
          <hr>
          <strong><i class="fa fa-book margin-r-5"></i> Capital Social</strong>
          <p class="text-muted">{{$configuration->capital_social}}</p>
          <hr>
      </div>
    </div>
  </div>
</div>

@stop
