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

<form enctype="multipart/form-data" role="form" method="post" action=" @if(isset($customer->id)) {{ route('customer.update',$customer->id) }} @else {{ route('customer.store') }} @endif ">
{!! csrf_field() !!}
<div class="row">
  <div class="col-md-6">
    <div class="box box-danger">
      <div class="box-header with-border">
        <h3 class="box-title">Dados de Acesso</h3>
      </div>
        @if(isset($customer->id))
          <input type="hidden" value="{{$customer->id}}" name="id" />
          {{ method_field('PATCH') }}
        @endif
        <div class="box-body">
          <div class="form-group">
            <label>Nome</label>
            <input class="form-control" placeholder="Inserir Nome" type="text" name="name" required value="@if(isset($customer)){{$customer->user['name']}}@endif" />
          </div>
          <div class="form-group">
            <label>Email</label>
            <input class="form-control" name="email" placeholder="email@email.com" type="email" value="@if(isset($customer)){{$customer->user->email}}@endif" />
          </div>
          <div class="form-group">
            <label>Imagem</label>

            @if(isset($customer))
              <img src="/images/customers/{{$customer->user->image}}" width="200px" />
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
        <div class="form-group">
          <label>Numero de Cadastro</label>
          <input class="form-control" type="text" name="numero_cadastro" value="@if(isset($customer)){{$customer->user->numero_cadastro}}@endif" />
        </div>
        <div class="form-group">
          <label>RG</label>
          <input class="form-control" type="text" name="rg" required value="@if(isset($customer)){{$customer->user->rg}}@endif" />
        </div>
        <div class="form-group">
          <label>RG Expedição</label>
          <input type="date" class="form-control" type="text" name="rg_expedicao" value="@if(isset($customer)){{$customer->user->rg_expedicao}}@endif" />
        </div>
        <div class="form-group">
          <label>RG Orgão Expedidor</label>
          <input class="form-control" type="text" name="rg_orgaoexpedidor" value="@if(isset($customer)){{$customer->user->rg_orgaoexpedidor}}@endif" />
        </div>
        <div class="form-group">
          <label>CPF</label>
          <input class="form-control cpf" placeholder="___.___.___-__" data-mask="999.999.999-99" type="text" required name="cpf" value="@if(isset($customer)){{$customer->user->cpf}}@endif" />
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
          <input class="form-control" type="date" name="data_nascimento" value="@if(isset($customer)){{$customer->user->data_nascimento}}@endif" />
        </div>
        <div class="form-group col-md-6">
          <label>Local de Nascimento</label>
          <input class="form-control" type="text" name="local_nascimento" value="@if(isset($customer)){{$customer->user->local_nascimento}}@endif" />
        </div>
        <div class="form-group col-md-2">
          <label>Tipo Sanguíneo</label>
          <input class="form-control" type="text" name="tipo_sanguineo" value="@if(isset($customer)){{$customer->user->tipo_sanguineo}}@endif" />
        </div>
        <div class="form-group col-md-8">
          <label>Nome do Pai</label>
          <input class="form-control" type="text" name="filiacao_pai" value="@if(isset($customer)){{$customer->user->filiacao_pai}}@endif" />
        </div>
        <div class="form-group col-md-4">
          <label>Data de Nascimento</label>
          <input class="form-control" type="date" name="filiacao_pai_nascimento" value="@if(isset($customer)){{$customer->user->filiacao_pai_nascimento}}@endif" />
        </div>
        <div class="form-group col-md-8">
          <label>Nome da Mãe</label>
          <input class="form-control" type="text" name="filiacao_mae" value="@if(isset($customer)){{$customer->user->filiacao_mae}}@endif" />
        </div>
        <div class="form-group col-md-4">
          <label>Data de Nascimento</label>
          <input class="form-control" type="date" name="filiacao_mae_nascimento" value="@if(isset($customer)){{$customer->user->filiacao_mae_nascimento}}@endif" />
        </div>
        <div class="form-group col-md-2">
          <label>Estado Civil</label>
          <select name="estado_civil" class="form-control">
            @foreach($listEstadoCivil as $estadocivil)
                <option value="{{$estadocivil['value']}}"
                @if(isset($customer)) @if($customer->user->estado_civil == $estadocivil['value']) selected @endif @endif >
                {{$estadocivil['name']}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group col-md-2">
          <label>Data de Casamento</label>
          <input class="form-control" type="date" name="data_casamento" value="@if(isset($customer)){{$customer->user->data_casamento}}@endif" />
        </div>
        <div class="form-group col-md-6">
          <label>Nome do conjuge</label>
          <input class="form-control" type="text" name="nome_conjuge" value="@if(isset($admin)){{$admin->user->nome_esposa}}@endif" />
        </div>
        <div class="form-group col-md-2">
          <label>Data de Nascimento</label>
          <input class="form-control" type="date" name="data_nascimento_conjuge" value="@if(isset($admin)){{$admin->user->data_nascimento_esposa}}@endif" />
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
            <input class="form-control cep" type="text" name="endereco_cep" onblur="pesquisacep(this.value);" value="@if(isset($customer)){{$customer->user->endereco_cep}}@endif" />
        </div>
        <div class="form-group col-md-5">
          <label>Endereço Residencial</label>
          <input class="form-control" type="text" id="endereco" name="endereco_residencial" value="@if(isset($customer)){{$customer->user->endereco_residencial}}@endif" />
        </div>
        <div class="form-group col-md-2">
          <label>Bairro</label>
          <input class="form-control" type="text" id="bairro" name="endereco_bairro" value="@if(isset($customer)){{$customer->user->endereco_bairro}}@endif" />
        </div>
        <div class="form-group col-md-3">
          <label>Cidade - Estado</label>
          <input class="form-control" type="text" id="cidade" name="endereco_cidade" value="@if(isset($customer)){{$customer->user->endereco_cidade}}@endif" />
        </div>
        <div class="form-group col-md-2">
          <label>Telefone Residencial</label>
          <input class="form-control phone" type="text" name="telefone_residencial" placeholder="(00) 0000-00000" value="@if(isset($customer)){{$customer->user->telefone_residencial}}@endif" />
        </div>
        <div class="form-group col-md-2">
          <label>Celular</label>
          <input class="form-control phone_with_ddd" type="text" name="celular" placeholder="(00) 00000-00000" value="@if(isset($customer)){{$customer->user->celular}}@endif" />
        </div>
        <div class="form-group col-md-2">
          <label>Telefone Comercial</label>
          <input class="form-control phone" type="text" name="telefone_comercial" value="@if(isset($customer)){{$customer->user->telefone_comercial}}@endif" />
        </div>
        <div class="form-group col-md-2">
          <label>Fax</label>
          <input class="form-control" type="text" name="fax" value="@if(isset($customer)){{$customer->user->fax}}@endif" />
        </div>
        <div class="form-group col-md-2">
          <label>Telefone (outros)</label>
          <input class="form-control" type="text" name="telefone_outro" value="@if(isset($customer)){{$customer->user->telefone_outro}}@endif" />
        </div>
        <div class="form-group col-md-6">
          <label>Idiomas</label>
          <input class="form-control" type="text" name="idiomas" value="@if(isset($customer)){{$customer->user->idiomas}}@endif" />
        </div>
        <div class="form-group col-md-6">
          <label>Email (outros)</label>
          <input class="form-control" type="email" name="email_outro" value="@if(isset($customer)){{$customer->user->email_outro}}@endif" />
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
          <label>CEP</label>
          <input class="form-control cep" type="text" id="cep_comercial" onblur="pesquisacepcomercial(this.value);" name="endereco_profissional_cep" value="@if(isset($customer)){{$customer->user->endereco_profissional_cep}}@endif" />
        </div>
        <div class="form-group col-md-4">
          <label>Endereço Comercial</label>
          <input class="form-control" type="text" id="endereco_comercial" name="endereco_profissional" value="@if(isset($customer)){{$customer->user->endereco_profissional}}@endif" />
        </div>
        <div class="form-group col-md-4">
          <label>Bairro</label>
          <input class="form-control" type="text" id="bairro_comercial" name="endereco_profissional_bairro" value="@if(isset($customer)){{$customer->user->endereco_profissional_bairro}}@endif" />
        </div>
        <div class="form-group col-md-4">
          <label>Cidade</label>
          <input class="form-control" type="text" id="cidade_comercial" name="endereco_profissional_cidade" value="@if(isset($customer)){{$customer->user->endereco_profissional_cidade}}@endif" />
        </div>
        <div class="form-group col-md-4">
          <label>Profissão</label>
          <input class="form-control" type="text" name="profissao" value="@if(isset($customer)){{$customer->user->profissao}}@endif" />
        </div>
        <div class="form-group col-md-4">
          <label>Ramo de Atividade</label>
          <input class="form-control" type="text" name="ramo_atividade" value="@if(isset($customer)){{$customer->user->ramo_atividade}}@endif" />
        </div>
      </div>
    </div>
  </div>
</div>

<div class="box-footer">
    <button type="submit" class="btn btn-primary">@if(isset($customer))Atualizar @else Salvar @endif</button>
    <a href="{{route('customer.index')}}" class="btn">Voltar</a>
</div>

</form>

@stop
