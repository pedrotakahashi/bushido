@extends('adminlte::page')

@section('title', 'Configuration')

@section('content_header')<div class="container-fluid">
    <div class="col-md-12">
    <h1>Configurações do Sistema</h1>

    <ol class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li><a href="">Configurações</a></li>
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
              <img src="{{asset('/images/uploads/')}}/{{$configuration->logotipo}}" width="200px" style="background-color:black" />
            @endif
          </div>
        </div>
    </div>
    <div class="box box-success">
      <div class="box-header with-border">
        <h3 class="box-title">Contatos</h3>
      </div>
      <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Endereço</strong>
              <p class="text-muted">{{$configuration->logradouro}}, {{$configuration->numero}}
              {{$configuration->bairro}} {{$configuration->municipio}} {{$configuration->uf}}</p>
              <hr>
              <strong><i class="fa fa-book margin-r-5"></i> CEP</strong>
              <p class="text-muted">{{$configuration->cep}}</p>
              <hr>
              <strong><i class="fa fa-book margin-r-5"></i> Data de abertura</strong>
              <p class="text-muted">{{$configuration->complemento}}</p>
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
        <strong><i class="fa fa-book margin-r-5"></i> Data de abertura</strong>
        <p class="text-muted">{{$configuration->data_abertura}}</p>
        <hr>
        <strong><i class="fa fa-book margin-r-5"></i> Nome Fantasia</strong>
        <p class="text-muted">{{$configuration->nome_fantasia}}</p>
        <hr>
          <strong><i class="fa fa-book margin-r-5"></i> CNPJ</strong>
          <p class="text-muted">{{$configuration->cnpj}}</p>
          <hr>
          <strong><i class="fa fa-book margin-r-5"></i> Natureza Juridica</strong>
          <p class="text-muted">{{$configuration->natureza_juridica}}</p>
          <hr>
          <strong><i class="fa fa-book margin-r-5"></i> Representada por:</strong>
          <p class="text-muted">{{$configuration->representante}}</p>
          <hr>
          <strong><i class="fa fa-book margin-r-5"></i> Documento</strong>
          <p class="text-muted">{{$configuration->documento}}</p>
          <hr>
      </div>
    </div>
  </div>
</div>

@stop
