<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <script src="{{ asset('resources/js/jquery-3.5.1.slim.min.js') }}"></script>
    <script src="{{ asset('resources/js/bootstrap.bundle.js') }}" ></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/css/bootstrap.min.css') }}">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .blue{
        color: blue;
      }
      .carousel-caption{
        background-color: #ffffff7a;
        border-radius: 1em;
      }
      .t{
        color: gray;
        font-weight: 400;
      }
      .t:hover{
        color: black;
        font-weight: 500;
      }
      a:hover,.a:hover{
        font-weight: 600;
      }
      .us:focus{
        background-color: transparent;
        color: black; 
      }
      @media(max-width: 768px)
      {
        .f{
          flex-direction: column;
          align-items: center;
        }
        .lr{
          display: none;
        }
        .ic{
          width: 100% ! important;
        }
      }
      @media(max-width: 813px)
      {
          .l2{
            display: flex ! important;
            justify-content: center;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{ asset('resources/css/carousel.css') }}" rel="stylesheet">
  </head>
<body>

<header class="d-flex justify-content-center">
  
    <div style="width: 90%">
    
    <div class="d-flex justify-content-between align-items-center" style="padding: 1rem 3rem 1rem;">
        <div style="width: 150px" class="d-flex justify-content-between ic">
            <svg style="color: dodgerblue;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
            </svg>

            <svg style="color: deepskyblue;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
              <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
            </svg>

            <svg style="color: blueviolet;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
            </svg>

            <svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
              <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.122C.002 7.343.01 6.6.064 5.78l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
            </svg>

            <svg style="color: forestgreen;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
              <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
            </svg>
        </div>
        <div class="lr">
        
        @if (Route::has('login'))
                    @auth
                      
                            <div class=" navbar-collapse" id="navbarSupportedContent">
                              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item dropdown">
                                  <a style="margin: 0" class="dropdown-item a dropdown-toggle us" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                  </a>
                                  <ul class="dropdown-menu right" aria-labelledby="navbarDropdown1">
                                     <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                               onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                                                                {{ __('Logout') }}
                                                            </a>
                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                              {{ csrf_field() }}
                                               
                                          </form>
                                        </li>
                                  </ul>
                                </li>
                              </ul>
                            </div>
                    
                    @else
                      <div class="d-flex">
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline t">Login </a>
                        <p style="margin: 0em 0.5em 0em 0.5em; color: black"> | </p>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-sm text-gray-700 underline t">Register</a>
                        @endif
                      </div>
                    @endauth
            @endif
        </div>
    </div>

<nav class="navbar navbar-expand-lg navbar-light bg-light pt-0">
  <div class="container-fluid" style="border-top: 1px groove">
    <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('resources/imgs/LOGOAIC.png') }}" alt="" width="150" height="180" class="img-fluid"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown" id="dmenu1">
          <p style="margin: 0" class="dropdown-item a" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ASPEL
          </p>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
             <li><a class="dropdown-item" href="ccaaspel.html">CCA ASPEL</a></li>
                <li><a class="dropdown-item" href="listaaspel.html">LISTA DE PRECIOS</a></li>
                <li><a class="dropdown-item" href="soporte.html">SOPORTE TECNICO</a></li>
                <li><a class="dropdown-item" href="descargatusistema.html">DESCARGA TU SISTEMA</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown" id="dmenu">
          <p style="margin: 0" class="dropdown-item a" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            SERVICIOS
          </p>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="computo.html">COMPUTO</a></li>
            <li><a class="dropdown-item" href="desarrollo.html">DESARROLLO</a></li>
            <li><a class="dropdown-item" href="servidores.html">RENTA DE SERVIDORES</a></li>
            <li><a class="dropdown-item" href="cableado.html">CABLEADO ESTRUCTURADO</a></li>
          </ul>
        </li>
        <li class="nav-item">
            <a href="{{ route('cursos')}}" class="dropdown-item">CURSOS</a> 
        </li>
        <li class="nav-item">
            <a href="#" class="dropdown-item">EVENTOS</a> 
        </li>
         <li class="nav-item">
            <a href="#" class="dropdown-item">NOSOTROS</a>
        </li>
        <li class="nav-item">
           <a href="#" class="dropdown-item">CONTACTOS</a>  
        </li>
        <div class="w-100 collapse l2 mt-2">
          <div class="d-flex btn btn-primary w-75">
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline t w-50 text-light">Login </a>
                @if (Route::has('register'))
                  <a href="{{ route('register') }}" class="text-sm text-gray-700 underline t w-50 text-light">Register</a>
                 @endif
          </div>
          </div>
          
      
      </ul>
    </div>
  </div>
</nav>
</header>
  <main>
    @yield('content')




<footer class="pt-4 mt-5 pt-md-5 border-top d-flex justify-content-center f" style="background-color: gainsboro">
    <div class="row f" style="width: 90%">
      <div class="col-12 col-md text-center">
        <img class="mb-2" src="{{ asset('resources/imgs/aspel_logo_aic.png') }}" alt="" width="200" height="200">
        <small class="d-block text-muted blue">AIC GRUPO CONSULTOR</small>
        <small class="d-block mb-3 text-muted">&copy;Copyright 2020</small>
      </div>
      <div class="col-6 col-md text-center">
        <h5>Mapa del sitio</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Aspel</a></li>
          <li><a class="text-muted" href="#">Servicios</a></li>
          <li><a class="text-muted" href="#">Eventos</a></li>
          <li><a class="text-muted" href="#">Nosotros</a></li>
          <li><a class="text-muted" href="#">Another one</a></li>
          <li><a class="text-muted" href="#">Contacto</a></li>
        </ul>
      </div>
      <div class="col-6 col-md text-center">
        <h5>Datos de contacto</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Direccion: Mango 505 Chapultepec Poza rica Veracruz</a></li>
          <li><a class="text-muted" href="#">Telefono:782-821-31-42</a></li>
          <li><a class="text-muted" href="#">E-mail:info@aicgrupoconsultor.com</a></li>
          <li><a class="text-muted" href="#">Horario: L-V 09:00-14:00 y 16:00-19:00</a></li>
        </ul>
      </div>
    </div>
  </footer>
</main>

   </nav>
<script type="text/javascript"> 
    $('#dmenu').hover(function(){
        $('#navbarDropdown').trigger('click')
        console.log("holaaa");
    })
    $('#dmenu1').hover(function(){
        $('#navbarDropdown1').trigger('click')
    })
</script>
</body>
</html>