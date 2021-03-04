@extends('adminlte::page')

@section('title', 'Cadastro de Alunos')

@section('content_header')<div class="container-fluid">
    <div class="col-md-12">
    <h1>Cadastrar Aluno</h1>

@stop

@section('content')



<form enctype="multipart/form-data" role="form" method="post" action=" {{ route('alunos.store') }} ">
  @csrf
    <div class="container">
      <div class="row">
      <div class="col-lg-3">
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">Dados de Acesso</h3>
          </div>
          <div class="col-12">
            <div class="box-body">
              <div class="form-group">
                <label>E-mail</label>
                <input class="form-control col-12" id="req-email" placeholder="Exemplo@email.com.br" type="text" name="email"/>
                <label>Password</label>
                <input type="password" class="form-control col-12" id="inputPassword"  placeholder="Password" name="senha">
              </div>
            </div>
          </div>    
        </div>
      </div>
      <!-- coluna direita -->

      <div class="col-12 col-md-3">
        
        <div class="box-header with-border">
          <h4 class="box-title">Dados Cadastrais</h4>
        </div>
        <div class="box-body">
          <div class="form-group">
            <label>Nome</label>
            <input class="form-control col-12" id="req-nome" placeholder="Inserir Nome" type="text" name="nome"/>
          </div>
          <div class="form-group">
            <label>Sobrenome</label>
            <input class="form-control col-12" id="req-nome" placeholder="Inserir Sobrenome" type="text" name="sobrenome"/>
          </div>
            <label>CPF</label>
            <input class="form-control col-12" type="text" placeholder="111.111.111-11" name="cpf"/>
          </div>     
          <div class="form-group">
            <label>Graduação</label>
            <select class="form-control  col-12" name="graduacao" >
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
            <label>Nacimento</label>
            <input class="form-control col-12" type="date" value="2011-08-19" id="date-input" name="data-nascimento">
          </div>
        </div> <!-- box-body-end -->

        <div class="col-12 col-md-3">
            <div class="box-header with-border">
              <h4 class="box-title">Dados Familiares</h4>
            </div>
            <div class="box-body">
              <div class="form-group">
                  <label>Nome da Mãe</label>
                  <input class="form-control col-12" id="req-nome" placeholder="Nome da mãe" type="text" name="nomeMae"/>
              </div>

              <div class="form-group">
                  <label>Nome do Pai</label>
                  <input class="form-control col-12" id="req-nome" placeholder="Nome do Pai" type="text" name="nomePai"/>
              </div>
                  <label>Telefone</label>
                  <input class="form-control col-12" type="tel" value="(18)99999-9999" name ="telefone" id="telefone">
              </div>     
          </div> <!-- ultima col -->
          <div class="col-lg-3">
          <h4 class="box-title">Cadastro Residencial</h4>
          <div class="form-group col-12">
            <label>Rua: </label>
            <input class="form-control col-12" type="text" name="rua"/>
            <label>CEP</label>
            <input class="form-control col-12" type="text" name="cep"/>
            <label>Bairro</label>
            <input class="form-control col-12" type="text" name="bairro"/>
            <label>Cidade</label>
            <input class="form-control" type="text" name="cidade"/>
            <div class="box-footer mt-2">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="#" class="btn btn-dark">Voltar</a>
          </div>
        </div>
          
      </div> <!-- col -->

    
    </div> <!-- end-col-md-6 -->

        
         
        </div>
        
      </div>
    </div>
      </div>
    </div>
   <!-- end container -->


  

</form>

@stop
