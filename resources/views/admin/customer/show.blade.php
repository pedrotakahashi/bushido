@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')<div class="container-fluid">
    <div class="col-md-12">
    <h1>Edição de Usuário</h1>

    <ol class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li><a href="">Cliente</a></li>
    </ol></div></div>
@stop

@section('content')

@include('includes.alerts')

<form enctype="multipart/form-data" role="form" method="post" action=" @if(isset($user->id)) {{ route('user.update',$user->id) }} @else {{ route('user.store') }} @endif ">
{!! csrf_field() !!}
<div class="row">
  <div class="col-md-6">
    <div class="box box-danger">
      <div class="box-header with-border">
        <h3 class="box-title">Dados de Acesso</h3>
      </div>
        @if(isset($user->id))
          <input type="hidden" value="{{$user->id}}" name="id" />
          {{ method_field('PATCH') }}
        @endif
        <div class="box-body">
          <div class="form-group">
            @if(isset($user)){{$user->name}}@endif
          </div>
          <div class="form-group">
            @if(isset($user)){{$user->email}}@endif
          </div>
          <div class="form-group">


            @if(isset($user))
              <img src="/images/users/{{$user->image}}" width="200px" />
              <a id="show-input" href="#" onclick="show()" class="btn">Adicionar nova</a>
              <div id="input-image" style="display:none">
                <input name="image" type="file" />
              </div>
              <script>
              function show(){
                  document.getElementById('input-image').style.display = 'block';
              }
              </script>
            @else
              <input name="image" type="file" />
            @endif
          </div>
          <div class="form-group">

          </div>
        </div>
    </div>
  </div>
  <!-- coluna direita -->

  <div class="col-md-6">
    <div class="box box-success">
      <div class="box-header with-border">
        <h3 class="box-title">Documentos</h3>
      </div>
      <div class="box-body">
        @if(isset($user)){{$user->numero_cadastro}}@endif
        <div class="form-group">
          <label>RG</label>
          @if(isset($user)){{$user->rg}}@endif
        </div>
        <div class="form-group">
          <label>RG Expedição</label>
          @if(isset($user)){{$user->rg_expedicao}}@endif
        </div>
        <div class="form-group">
          <label>RG Orgão Expedidor</label>
          @if(isset($user)){{$user->rg_orgaoexpedidor}}@endif
        </div>
        <div class="form-group">
          <label>CPF</label>
          @if(isset($user)){{$user->cpf}}@endif
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">


  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Naturalidade</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="form-group col-md-2">
          <label>Data de Nascimento</label>
          @if(isset($user)){{$user->data_nascimento}}@endif
        </div>
        <div class="form-group col-md-6">
          <label>Local de Nascimento</label>
          @if(isset($user)){{$user->local_nascimento}}@endif
        </div>
        <div class="form-group col-md-2">
          <label>Tipo Sanguíneo</label>
          @if(isset($user)){{$user->tipo_sanguineo}}@endif
        </div>
        <div class="form-group col-md-8">
          <label>Nome do Pai</label>
          @if(isset($user)){{$user->filiacao_pai}}@endif
        </div>
        <div class="form-group col-md-4">
          <label>Data de Nascimento</label>
          @if(isset($user)){{$user->filiacao_pai_nascimento}}@endif
        </div>
        <div class="form-group col-md-8">
          <label>Nome da Mãe</label>
          @if(isset($user)){{$user->filiacao_mae}}@endif
        </div>
        <div class="form-group col-md-4">
          <label>Data de Nascimento</label>
          @if(isset($user)){{$user->filiacao_mae_nascimento}}@endif
        </div>
        <div class="form-group col-md-2">
          <label>Estado Civil</label>
          @if(isset($user)){{$user->estado_civil}}@endif
        </div>
        <div class="form-group col-md-2">
          <label>Data de Casamento</label>
          @if(isset($user)){{$user->data_casamento}}@endif
        </div>
        <div class="form-group col-md-6">
          <label>Nome da Esposa</label>
          @if(isset($user)){{$user->nome_esposa}}@endif
        </div>
        <div class="form-group col-md-2">
          <label>Data de Nascimento</label>
          @if(isset($user)){{$user->data_nascimento_esposa}}@endif
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
        <div class="form-group col-md-5">
          <label>Endereço Residencial</label>
          @if(isset($user)){{$user->endereco_residencial}}@endif
        </div>
        <div class="form-group col-md-2">
          <label>CEP</label>
          @if(isset($user)){{$user->endereco_cep}}@endif
        </div>
        <div class="form-group col-md-2">
          <label>Bairro</label>
          @if(isset($user)){{$user->endereco_bairro}}@endif
        </div>
        <div class="form-group col-md-3">
          <label>Cidade</label>
          @if(isset($user)){{$user->endereco_cidade}}@endif
        </div>
        <div class="form-group col-md-2">
          <label>Telefone Residencial</label>
          @if(isset($user)){{$user->telefone_residencial}}@endif
        </div>
        <div class="form-group col-md-2">
          <label>Celular</label>
          @if(isset($user)){{$user->celular}}@endif
        </div>
        <div class="form-group col-md-2">
          <label>Telefone Comercial</label>
          @if(isset($user)){{$user->telefone_comercial}}@endif
        </div>
        <div class="form-group col-md-2">
          <label>Fax</label>
          @if(isset($user)){{$user->fax}}@endif
        </div>
        <div class="form-group col-md-2">
          <label>Telefone (outros)</label>
          @if(isset($user)){{$user->telefone_outro}}@endif
        </div>
        <div class="form-group col-md-6">
          <label>Idiomas</label>
          @if(isset($user)){{$user->idiomas}}@endif
        </div>
        <div class="form-group col-md-2">
          <label>Email (outros)</label>
          @if(isset($user)){{$user->email_outro}}@endif
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Profissional</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="form-group col-md-4">
          <label>Profissão</label>
          @if(isset($user)){{$user->profissao}}@endif
        </div>
        <div class="form-group col-md-4">
          <label>Ramo de Atividade</label>
          @if(isset($user)){{$user->ramo_atividade}}@endif
        </div>
        <div class="form-group col-md-4">
          <label>Endereço Comercial</label>
          @if(isset($user)){{$user->endereco_profissional}}@endif
        </div>
        <div class="form-group col-md-4">
          <label>CEP</label>
          @if(isset($user)){{$user->endereco_profissional_cep}}@endif
        </div>
        <div class="form-group col-md-4">
          <label>Bairro</label>
          @if(isset($user)){{$user->endereco_profissional_bairro}}@endif
        </div>
        <div class="form-group col-md-4">
          <label>Cidade</label>
          @if(isset($user)){{$user->endereco_profissional_cidade}}@endif
        </div>
      </div>
    </div>
  </div>
</div>

<div class="box-footer">
    <button type="submit" class="btn btn-primary">@if(isset($user))Atualizar @else Salvar @endif</button>
    <a href="{{route('user.index')}}" class="btn">Voltar</a>
</div>

</form>

@stop
