<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('resources/js/jquery-3.5.1.slim.min.js') }}" defer></script>
    <script src="{{ asset('resources/js/bootstrap.bundle.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/css/login.css') }}">
</head>

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
    </style>
    
<body>

                    <form class="form-signin" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="text-center mb-2">
                            <img src="{{ asset('resources/imgs/LOGOAIC.png') }}" alt="" width="200" height="150" class="mb-4">
                        </div>

                            <div class="form-label-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email address" autofocus>
                                <label for="inputEmail">Email address</label>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                             <div class="form-label-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                <label for="inputEmail">Password</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                              <div class="checkbox mb-3 ml-1">
                                <label>
                                  <input type="checkbox"  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> 
                                    {{ __('Remember Me') }}
                                </label>
                              </div>
                                <div class="text-center">
                                    <div class="text-center">
                                        <button class="btn btn-md btn-primary" type="submit">{{ __('Login') }}</button>
                                        <a class="btn btn-md btn-secondary" href="{{ url('/') }}">{{ __('Volver') }}</a>
                                      </div>
                                       @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                               
                                <p class="mt-5 mb-3 text-muted text-center">&copy;Copyright 2020</p>
                          
                    </form>
</body>
</html>
