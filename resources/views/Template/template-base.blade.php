<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <title>BUSHIDO - PRESIDENTE PRUDENTE</title>
</head>
<body>
    <header>
        <div class="container">                      
            <div class="row">
                <div class="col-2">
                    <img src="/img/logo-bushido-2.jpg" alt="" class= "logo-header" >
                </div>
                <div class="col-10">
                
                    <nav class="navbar navbar-expand-lg navbar-light offset-2 mt-5 pt-5 ">
                        <a class="navbar-brand" href="#"></a>
                        <button class="navbar-toggler mt-2" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" 
                        aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                        <span class="navbar-toggler-icon"></span> </button>
                            <div class="collapse navbar-collapse " id="conteudoNavbarSuportado">
                                <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('home')}}">BUSHIDO <span class="sr-only">(página atual)</span></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{route('aulas')}}">AULAS <span class="sr-only">(página atual)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('sobrenos')}}">SOBRE NOS</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    EQUIPES</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">BUSHIDO</a>
                                    <a class="dropdown-item" href="#">SEMEPP</a>
                                    <a class="dropdown-item" href="#">UNESP</a>
                                    <a class="dropdown-item" href="#">UNOESTE</a>
                                    </li>

                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    CADASTRAR ALUNO</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('alunos.create') }}">CADASTRO</a>
                                    </li>
                               
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('contato')}}">CONTATO</a>
                                </li>
                                </ul>
                              
                                </form>
                            </div>
                    </nav>
                </div>
                            
            </div>
        </div>   
        <!-- fim menu header     -->
    </header>
    
    @yield('content')
 
    <footer>
        <div class="container mt-2">
            <div class="row">
                <div class="col-12 col-md bg-light ">
                    <img src="/img/logo-bushido-footer.png" class="mb-2 ml-4" alt="">                    
                </div>
                <div class="col-6 col-md bg-light">
                
                </div>
                <div class="col-6 col-md bg-light">
                    <h5 class="ml-5">Siga-nos</h5>
                    <ul class="list-unstyled d-flex d-inline-flex ml-5">
                        <li class="list-item "><a href="https://www.facebook.com/www.associacao.bushidopp.com.br" class="ig-icon"> <i class="fab fa-facebook fa-2x"></i></li> </a>
                        <li class="list-item"><a href="https://www.instagram.com/associacaodejudobushido/" class="ig-icon"> <i class="fab fa-instagram fa-2x ml-2"></i></li></a>
                        <li class="list-item"></li>
                    </ul>
                
                </div>
            </div>
        </div>
    </footer>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>