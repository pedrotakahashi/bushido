{{-- <form action="{{route('users.store')}}" method="POST"></form> --}}
<form action="">
  <div class="container">
      <div class="row">
          <div class="col-12 col-lg-6 ">
              <span> Cadastro </span> 
              <div class="form-row">
                <div class="col-md-5 mb-3">
                  <label for="validationCustom01">Primeiro nome</label>
                  <input type="text" class="form-control" id="validationCustom01" placeholder="Nome" value="Nome" required>
                  <div class="valid-feedback">
                    Tudo certo!
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="validationCustom02">Sobrenome</label>
                  <input type="text" class="form-control" id="validationCustom02" placeholder="Sobrenome" value="Sobrenome" required>
                  <div class="valid-feedback">
                    Tudo certo!
                  </div>
                </div>
    
              </div>
              <div class="form-row">
                <div class="col-md-5 mb-3">
                  <label for="validationCustom03">Cidade</label>
                  <input type="text" class="form-control" id="validationCustom03" placeholder="Cidade" required>
                  <div class="invalid-feedback">
                    Por favor, informe uma cidade válida.
                  </div>
                </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom04">Estado</label>
                <input type="text" class="form-control" id="validationCustom04" placeholder="Estado" required>
                <div class="invalid-feedback">
                  Por favor, informe um estado válido.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom05">CEP</label>
                <input type="text" class="form-control" id="validationCustom05" placeholder="CEP" required>
                <div class="invalid-feedback">
                  Por favor, informe um CEP válido.
                </div>
              </div>
            </div>
  
             <button class="btn btn-primary" type="submit">Enviar</button>
        </div>
      </form>
        
        <div class="col-12 col-lg-6 ">
            <span> Login de usuário </span> 
        </div>
    </div>