@extends('adminlte::page')

@section('title', 'Senseis')

@section('content_header')<div class="container-fluid">
    <div class="col-md-12">
    <h1>Cadastrar Sensei</h1>

@stop

@section('content')



<form enctype="multipart/form-data" role="form" method="post" action=" {{ route('senseis.store') }}  ">
  @csrf
<div class="row">
  <div class="col-md-6">
    <div class="box box-danger">
      <div class="box-header with-border">
        <h3 class="box-title">Dados de Acesso</h3>
      </div>
       
        <div class="box-body">
          <div class="form-group">
            <label>Nome</label>
            <input class="form-control" id="req-nome" placeholder="Inserir Nome" type="text" name="nome"/>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input class="form-control" id="req-email" name="email" placeholder="email@email.com" type="email"/>
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
          <label>CPF</label>
          <input class="form-control" type="text" name="cpf"/>
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
    <a href="{{route('senseis.index')}}" class="btn btn-dark">Voltar</a>
</div>

</form>

@stop
<!--  @section('js')
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
@stop  -->
