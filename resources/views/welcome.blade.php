@extends('layouts.principal')
@section('content')
    <audio preload="auto" controls="controls" autoplay="autoplay" loop="loop" __idm_id__="1055385601" style="display: none">
        <source src="{{ asset('resources/sounds/SPOTAIC.mp3') }}" type="audio/mp3">
      </audio>

<div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img  class="bd-placeholder-img d-block" src="{{ asset('resources/imgs/NOI90.jpg') }}" alt="" width="100%" height="100%" class="img-fluid">aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
        <div class="container">
          <div class="carousel-caption text-start">
            <h1 class="blue">ASPEL NOI 9.0</h1>
            <p class="blue">CONCILIA TUS XML CON LOS DEL SAT</p>
          </div>
        </div>
     
     </div>
      
      <div class="carousel-item">
        <img  class="bd-placeholder-img d-block" src="{{ asset('resources/imgs/BANCO50.jpg') }}" alt="" width="100%" height="100%" class="img-fluid">aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
        <div class="container">
          <div class="carousel-caption">
            <h1 class="blue">ASPEL BANCO 5.0</h1>
            <p class="blue">GENERA Y ENVIA POR CORREO TU COMPLEMENTO DE PAGO DESDE BANCO</p>
          </div>
        </div>
      </div>
      
      <div class="carousel-item">
        <img  class="bd-placeholder-img d-block" src="{{ asset('resources/imgs/PROD40.jpg') }}" alt="" width="100%" height="100%" class="img-fluid">aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
        <div class="container">
          <div class="carousel-caption text-end">
            <h1 class="blue">ASPEL PROD 4.0</h1>
            <p class="blue">TE LLEVAMOS DE LA MANO EN TODO TU PROCESO DE PRODUCCION.</p>
          </div>
        </div>
      </div>
    
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
      <svg class="text-dark" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
        </svg>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
        <svg class="text-dark" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
        </svg>
    </a>
  </div>

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="text-center" style="padding: .1em 5em;">
        <h2 class="featurette-heading blue" style="margin: 0; line-height: 1.5em; font-weight: 600;">AIC GRUPO CONSULTOR</h2>
            <h3 style="margin:0; line-height: 1.5em;" class="featurette-heading text-primary">TU ALIADADO PARA AUTOMATIZAR TU EMPRESA O NEGOCIO</h3>   
            <h6 style="margin: 0em 0em 1em;line-height: 1.5em;" class="featurette-heading"><span class="text-muted mt-2 mb-5">DISTRIBUIDOR INTEGRAL CERTIFICADO ASPEL</span></h6>    
    </div>
  
  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img  class="bd-placeholder-img" src="{{ asset('resources/imgs/VENTA-EN-RUTA.png') }}" alt="" width="140" height="140" role="img"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/>

        <h2 class="blue mt-2">VENTA EN RUTA</h2>
        <p>APP PARA DISPOSITIVOS ANDROID CON LA CUAL LLEVAS EL CONTROL DE TU VENTA EN RUTA Y TE LA GRABA DIRECTO EN ASPEL SAE</p>
        <p><a class="btn btn-success" href="#" role="button">CONOCE MÁS... &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img  class="bd-placeholder-img" src="{{ asset('resources/imgs/XML.png') }}" alt="" width="140" height="140" role="img"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/>

        <h2 class="blue mt-2">IMPORT XML-SAE</h2>
        <p>SISTEMA PARA WINDOWS QUE TE PERMITE LEER TU XML DE LA COMPRA Y GUARDARLA DIRECTAMENTE EN ASPEL SAE</p>
        <p><a class="btn btn-success" href="#" role="button">CONOCE MÁS... &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img  class="bd-placeholder-img" src="{{ asset('resources/imgs/INVENTARIOS.png') }}" alt="" width="140" height="140" role="img"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/>

        <h2 class="blue mt-2">INVENTMOVIL</h2>
        <p>APP PARA DISPOSITIVOS ANDROID O WINDOWS QUE TE PERMITEN REALIZAR EL INVENTARIO MEDIANTE TERMINALES COLECTORAS DE INFORMACION Y GRABARLAS DIRECTO A ASPEL SAE O CAJA</p>
        <p><a class="btn btn-success" href="#" role="button">CONOCE MÁS... &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
    
  </div><!-- /.container -->

@endsection
  <!-- FOOTER -->
    