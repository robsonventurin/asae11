<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>ASAE11 - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            header { background:#222; color:#fff; background-position: center center; background-size:cover; background-repeat:no-repeat;
                    background-image: url("http://ifsc.edu.br/documents/20181/45323/banner+aviso+imagem+c%C3%A2mpus/f5bea92c-ed24-873b-4434-5e0e61f4b460?t=1535551466563");}
            header .row > div { margin:75px 0; }

            main { margin:50px 0; }

            footer { background-position: center center, center center;  background-size: cover, cover;  background-repeat: repeat, repeat; }
            footer p a { display: block; text-decoration: none; color: #999; }
            footer p a:hover { text-decoration:none; color:#aaa; }
            footer img { margin-bottom:35px; width:100px; }
      </style>
    </head>
    <body>

        <header id="page-top">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container">
                <a class="navbar-brand" href="{{ route('index') }}">ASAE10</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Usuários
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('listar_usuarios') }}">Listar Usuários</a>
                            <a class="dropdown-item" href="{{ route('cadastrar_usuarios') }}">Cadastrar Novo Usuário</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Clientes
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('listar_clientes') }}">Listar Clientes</a>
                            <a class="dropdown-item" href="{{ route('cadastrar_clientes') }}">Cadastrar Novo Cliente</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Vendas
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('listar_vendas') }}">Listar Vendas</a>
                            <a class="dropdown-item" href="{{ route('cadastrar_venda') }}">Cadastrar Nova Venda</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown" >
                            @if(session()->has('login'))
                                <a class="nav-link " href="{{ route('logout') }}">Fazer Logout</a>
                            @else 
                                <a class="nav-link " href="{{ route('tela_login') }}">Fazer Login</a>
                            @endif
                        </li>
                    </ul>
                </div>
                </div>
            </nav>

            <div class="container">
                <div class="row">
                    <div class="col-lg-8 py-5">
                        <h1 class="mb-2">@yield('title')</h1>
                        <p class="m-0">
                            @yield('subtitle')
                        </p>
                    </div>
                </div>
            </div>
        </header>
        
        <main>
            <div class="container">
                
                @yield('content')
                
            </div>
        </main>


        <footer class="py-5 text-white" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75));" >
            
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2 text-center">
                            <p class="mb-5" style="font-size:0.9em;">
                                <strong>Câmpus Caçador<br>Instituto Federal de Educação, Ciência e Tecnologia de Santa Catarina - IFSC</strong>
                            </p>
                            <p class="mb-5" style="font-size:0.9em;">
                                Avenida Fahdo Thomé, 3000 – Champagnat<br>
                                CEP 89500 000 – Caçador – SC<br>
                                Fone: (49) 3561 5700<br>
                                E-mail: atendimento.cdr@ifsc.edu.br<br>
                                CNPJ: 11.402.887/0018-09
                            </p>
                            <p class="mb-0" style="font-size:0.7em;">
                            Copyright © 2019 Instituto Federal de Santa Catarina IFSC Câmpus Caçador<br>Todos os Direitos Reservados.
                            </p>
                        </div>
                    </div>
                </div>

        </footer>


        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.1.60/inputmask/jquery.inputmask.js"></script>

        <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
        </script>

        @yield('script')
    </body>
</html>
