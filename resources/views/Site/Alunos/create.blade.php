@extends('Template.template-base')


@section('title', 'Cadastro de Alunos')

@section('content_header')<div class="container-fluid">
    <div class="col-md-12">
    <h1>Cadastrar Aluno</h1>

@stop

@section('content')



<form enctype="multipart/form-data" role="form" method="post" action="#">
  @csrf
  <div class="container">
<div class="row">
  <div class="col-md-6">
    <div class="box box-danger">
      <div class="box-header with-border">
        <h3 class="box-title">Dados de Acesso</h3>
      </div>
       
        <div class="box-body">
          <div class="form-group">
            <label>E-mail</label>
            <input class="form-control col-6" id="req-nome" placeholder="Inserir Nome" type="text" name="nome"/>
          </div>

          <div class="col-6">
      <input type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
       
        </div>    
    </div>
  </div>
  <!-- coluna direita -->

  <div class="col-md-6">
    <div class="box box-success">
      <div class="box-header with-border">
        <h3 class="box-title">Dados Cadastrais</h3>
      </div>
      <div class="box-body">
      <div class="form-group">
            <label>Nome</label>
            <input class="form-control col-6" id="req-nome" placeholder="Inserir Nome" type="text" name="nome"/>
          </div>
        <div class="form-group">
          <label>CPF</label>
          <input class="form-control" type="text" name="cpf"/>
        </div>
        <div class="form-group">
            <label>Graduação</label>
            <select class="form-control  col-4" name="graduacao" >
                <option>Faixa branca</option>
                <option>Faixa cinza</option>
                <option>Faixa Azul</option>
                <option>Faixa Amarela</option>
                <option>Faixa Laranja</option>
                <option>Faixa Verde</option>
                <option>Faixa Roxa</option>
                <option>Faixa Marrom</option>
                <option>Faixa Preta</option>
            </select>
        </div>
        <div class="form-group">
          <label for="biography">Data de nascimento</label>
          <input class="form-control" name = "nascimento" type="text" id="biography" col = "100 "rows="3"/>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-md-12">
    <div class="box box-info collapsed-box">
      <div class="box-header with-border">
        <h3 class="box-title">Cadastro Residencial</h3>
       
      </div>
      
        <div class="form-group col-md-4">
          <label>Rua </label>
          <input class="form-control" type="text" name="rua"/>
        </div>
        <div class="form-group col-md-4">
          <label>CEP</label>
          <input class="form-control" type="text" name="cep"/>
        </div>
        <div class="form-group col-md-4">
          <label>Bairro</label>
          <input class="form-control" type="text" name="bairro"/>
        </div>
        <div class="form-group col-md-4">
          <label>Cidade</label>
          <input class="form-control" type="text" name="cidade"/>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="box-footer">
    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="#" class="btn btn-dark">Voltar</a>
</div>
</div>
</form>

@stop
