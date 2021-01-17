@extends('layouts.principal')
@section('content')
<section class="jumbotron">
    <div class="ml-2">
      <h1>Cursos Online</h1>
      <p class="lead text-muted">Tu aliado para automatizar tu empresa o negocio te brinda los siguientes cursos</p>
      @if(Auth::check())
      <p>
        <a href="{{ route('cursos.create',Auth::id()) }}" class="btn btn-primary my-2">Crear curso</a>
      </p>
      @endif
    </div>
  </section>
  @if($posts != null)
  <div class="album py-5 bg-light">
    <div class="container">
       <div class="row">
       @foreach($posts as $post)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="{{ config('app.url') }}{{ $post->image }}" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><rect width="100%" height="100%" fill="#55595c"/>
            <title>{{ $post->title }}</title>
            <div class="card-body">
              <div class="w-100 text-center display-4" style="font-size: 30px;font-weight: 400;">
              <text x="50%" y="50%" fill="#eceeef" dy=".3em">{{ $post->title }}</text>
              </div>
              <p class="card-text">{{ $post->description }}</p>
              <div class="d-flex justify-content-end align-items-center">
                <div class="btn-group">
                  <a href="#">
                  <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
                  </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
      </div>
    </div>
  </div>
  @endif
@endsection