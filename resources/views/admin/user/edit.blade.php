@extends('adminlte::page')

@section('title', 'Usuários')

@section('content_header')<div class="container-fluid">
    <div class="col-md-12">
    <h1>Usuários</h1>

    <ol class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li><a href="">Usuários</a></li>
    </ol></div></div>
@stop

@section('content')

@include('includes.alerts')

<form enctype="multipart/form-data" role="form" method="post" action=" @if(isset($admin->id)) {{ route('user.update',$admin->id) }} @else {{ route('user.store') }} @endif ">
{!! csrf_field() !!}
<div class="row">
  <div class="col-md-6">
    <div class="box box-danger">
      <div class="box-header with-border">
        <h3 class="box-title">Dados de Acesso</h3>
      </div>
        @if(isset($admin->id))
          <input type="hidden" value="{{$admin->id}}" name="id" />
          {{ method_field('PATCH') }}
        @endif
        <div class="box-body">
          <div class="form-group">
            <label>Nome</label>
            <input class="form-control" id="req-nome" placeholder="Inserir Nome" type="text" name="name" value="@if(isset($admin)){{$admin->user->name}}@endif" />
          </div>
          <div class="form-group">
            <label>Email</label>
            <input class="form-control" id="req-email" name="email" placeholder="email@email.com" type="email" value="@if(isset($admin)){{$admin->user->email}}@endif" @if(isset($admin)) disabled @endif/>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input class="form-control" name="password" type="password" value="" />
          </div>
          <div class="form-group">
            <label>Image</label>

            @if(isset($admin))
              <img src="/images/uploads/users/{{$admin->user->image}}" width="200px" />
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
            <label>Funções</label>
            @foreach($roles as $role)
            <ol>
                <input name="roles[]" type="checkbox" value="{{$role->id}}" @isset($admin) @if($admin->user->roles->contains('name', $role->name)) checked=checked @endif @endisset />
                 {{$role->name}} - {{$role->label}}
            </ol>
            @endforeach
          </div>
          <div class="form-group">
            <label>Biografia</label>
            <textarea class="form-control" name="biography" >@if(isset($admin)){{$admin->user->biography}}@endif</textarea>
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
          <label>RG</label>
          <input class="form-control" type="text" name="rg" value="@if(isset($admin)){{$admin->user->rg}}@endif" />
        </div>
        <div class="form-group">
          <label>RG Expedição</label>
          <input class="form-control" type="text" name="rg_expedicao" value="@if(isset($admin)){{$admin->user->rg_expedicao}}@endif" />
        </div>
        <div class="form-group">
          <label>RG Orgão Expedidor</label>
          <input class="form-control" type="text" name="rg_orgaoexpedidor" value="@if(isset($admin)){{$admin->user->rg_orgaoexpedidor}}@endif" />
        </div>
        <div class="form-group">
          <label>CPF</label>
          <input class="form-control cpf" placeholder="___.___.___-__" data-mask="999.999.999-99" type="text" name="cpf" value="@if(isset($admin)){{$admin->user->cpf}}@endif" />
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="box box-info collapsed-box">
      <div class="box-header with-border">
        <h3 class="box-title">Naturalidade</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="form-group col-md-2">
          <label>Data de Nascimento</label>
          <input class="form-control" type="date" name="data_nascimento" value="@if(isset($admin)){{$admin->user->data_nascimento}}@endif" />
        </div>
        <div class="form-group col-md-6">
          <label>Local de Nascimento</label>
          <input class="form-control" type="text" name="local_nascimento" value="@if(isset($admin)){{$admin->user->local_nascimento}}@endif" />
        </div>
        <div class="form-group col-md-2">
          <label>Tipo Sanguíneo</label>
          <input class="form-control" type="text" name="tipo_sanguineo" value="@if(isset($admin)){{$admin->user->tipo_sanguineo}}@endif" />
        </div>
        <div class="form-group col-md-8">
          <label>Nome do Pai</label>
          <input class="form-control" type="text" name="filiacao_pai" value="@if(isset($admin)){{$admin->user->filiacao_pai}}@endif" />
        </div>
        <div class="form-group col-md-4">
          <label>Data de Nascimento</label>
          <input class="form-control" type="date" name="filiacao_pai_nascimento" value="@if(isset($admin)){{$admin->user->filiacao_pai_nascimento}}@endif" />
        </div>
        <div class="form-group col-md-8">
          <label>Nome da Mãe</label>
          <input class="form-control" type="text" name="filiacao_mae" value="@if(isset($admin)){{$admin->user->filiacao_mae}}@endif" />
        </div>
        <div class="form-group col-md-4">
          <label>Data de Nascimento</label>
          <input class="form-control" type="date" name="filiacao_mae_nascimento" value="@if(isset($admin)){{$admin->user->filiacao_mae_nascimento}}@endif" />
        </div>
        <div class="form-group col-md-2">
          <label>Estado Civil</label>
          <select name="estado_civil" class="form-control">
            @foreach($listEstadoCivil as $estadocivil)
                <option value="{{$estadocivil['value']}}"
                @if(isset($admin)) @if($admin->user->estado_civil == $estadocivil['value']) selected @endif @endif >
                {{$estadocivil['name']}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group col-md-2">
          <label>Data de Casamento</label>
          <input class="form-control" type="date" name="data_casamento" value="@if(isset($admin)){{$admin->user->data_casamento}}@endif" />
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
    <div class="box box-info collapsed-box">
      <div class="box-header with-border">
        <h3 class="box-title">Contatos</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="form-group col-md-5">
          <label>Endereço Residencial</label>
          <input class="form-control" type="text" name="endereco_residencial" value="@if(isset($admin)){{$admin->user->endereco_residencial}}@endif" />
        </div>
        <div class="form-group col-md-2">
          <label>CEP</label>
          <input id="cep" class="form-control cep" type="text" name="endereco_cep" value="@if(isset($admin)){{$admin->user->endereco_cep}}@endif" onblur="pesquisacep(this.value);"/>
        </div>
        <div class="form-group col-md-2">
          <label>Bairro</label>
          <input class="form-control" type="text" name="endereco_bairro" value="@if(isset($admin)){{$admin->user->endereco_bairro}}@endif" />
        </div>
        <div class="form-group col-md-3">
          <label>Cidade</label>
          <input class="form-control" type="text" name="endereco_cidade" value="@if(isset($admin)){{$admin->user->endereco_cidade}}@endif" />
        </div>
        <div class="form-group col-md-2">
          <label>Telefone Residencial</label>
          <input class="form-control" type="text" name="telefone_residencial" value="@if(isset($admin)){{$admin->user->telefone_residencial}}@endif" />
        </div>
        <div class="form-group col-md-2">
          <label>Celular</label>
          <input class="form-control phone_with_ddd" type="text" name="celular" placeholder="(00) 00000-0000" value="@if(isset($admin)){{$admin->user->celular}}@endif" />
        </div>
        <div class="form-group col-md-2">
          <label>Telefone Comercial</label>
          <input class="form-control" type="text" name="telefone_comercial" value="@if(isset($admin)){{$admin->user->telefone_comercial}}@endif" />
        </div>
        <div class="form-group col-md-2">
          <label>Fax</label>
          <input class="form-control" type="text" name="fax" value="@if(isset($admin)){{$admin->user->fax}}@endif" />
        </div>
        <div class="form-group col-md-2">
          <label>Telefone (outros)</label>
          <input class="form-control" type="text" name="telefone_outro" value="@if(isset($admin)){{$admin->user->telefone_outro}}@endif" />
        </div>
        <div class="form-group col-md-6">
          <label>Idiomas</label>
          <input class="form-control" type="text" name="idiomas" value="@if(isset($admin)){{$admin->user->idiomas}}@endif" />
        </div>
        <div class="form-group col-md-2">
          <label>Email (outros)</label>
          <input class="form-control" type="text" name="email_outro" value="@if(isset($admin)){{$admin->user->email_outro}}@endif" />
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="box box-info collapsed-box">
      <div class="box-header with-border">
        <h3 class="box-title">Profissional</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="form-group col-md-4">
          <label>Profissão</label>
          <input class="form-control" type="text" name="profissao" value="@if(isset($admin)){{$admin->user->profissao}}@endif" />
        </div>
        <div class="form-group col-md-4">
          <label>Ramo de Atividade</label>
          <input class="form-control" type="text" name="ramo_atividade" value="@if(isset($admin)){{$admin->user->ramo_atividade}}@endif" />
        </div>
        <div class="form-group col-md-4">
          <label>Endereço Comercial</label>
          <input class="form-control" type="text" name="endereco_profissional" value="@if(isset($admin)){{$admin->user->endereco_profissional}}@endif" />
        </div>
        <div class="form-group col-md-4">
          <label>CEP</label>
          <input class="form-control" type="text" name="endereco_profissional_cep" value="@if(isset($admin)){{$admin->user->endereco_profissional_cep}}@endif" />
        </div>
        <div class="form-group col-md-4">
          <label>Bairro</label>
          <input class="form-control" type="text" name="endereco_profissional_bairro" value="@if(isset($admin)){{$admin->user->endereco_profissional_bairro}}@endif" />
        </div>
        <div class="form-group col-md-4">
          <label>Cidade</label>
          <input class="form-control" type="text" name="endereco_profissional_cidade" value="@if(isset($admin)){{$admin->user->endereco_profissional_cidade}}@endif" />
        </div>
      </div>
    </div>
  </div>
</div>

<div class="box-footer">
    <button type="submit" class="btn badmin@user.comtn-primary">@if(isset($admin))Atualizar @else Salvar @endif</button>
    <a href="{{route('user.index')}}" class="btn">Voltar</a>
</div>

</form>

@stop
@section('js')
<script type="text/javascript">

jQuery.noConflict();
function kclick(){
  jQuery('ul.dropdown-email li').on('click',function(){
      // alert(jQuery(this).html());
      // console.log($input.innerHTML);
      var CSRF_TOKEN = jQuery('meta[name="csrf-token"]').attr('content');
      jQuery.ajaxSetup({
          headers: { 'X-CSRF-TOKEN': CSRF_TOKEN }
      });

      jQuery.ajax({
        type:"GET",
        url:"/admin/user/buscaUser",
        data: 'email='+jQuery(this).html(),
        dataType: 'JSON',
        async: false,
        cache: false,
        timeout: 30000,
        success: function(data) {
          console.log(data[0]);
          jQuery('#req-nome').val(data[0].name);
          jQuery('#req-email').val(data[0].email);
          jQuery('#req-telefone').val(data[0].celular);
        },
      });

      jQuery('ul.dropdown-email').toggle();
  });
}

jQuery(document).ready(function(){
  jQuery('#req-email').on("keyup", function(){
    //console.log(jQuery(this).val());

    if(jQuery('#req-email').val().length > 3){
        jQuery('ul.dropdown-email').toggle();
        //console.log("buscaUser ajax");
        var CSRF_TOKEN = jQuery('meta[name="csrf-token"]').attr('content');
        jQuery.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': CSRF_TOKEN
            }
        });

        jQuery.ajax({
          type:"GET",
          url:"/admin/user/buscaUser",
          data: 'email='+jQuery('#req-email').val(),
          dataType: 'JSON',
          async: false,
          cache: false,
          timeout: 30000,
          success: function(data) {
            //console.log(data);
            $html =  '';
            jQuery(data).each(function(key, li){
              $html += "<li>"+li.email+"</li>";
              //console.log(key + li.name);
            });
            jQuery('ul.dropdown-email').html($html);
            kclick();
          },
        });

    }
  });

});

</script>
@stop
