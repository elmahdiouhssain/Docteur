@extends('layouts.custom')
@section('content')
<style>html,
  body {
    height: 100%;
  }
  
  body {
    display: -ms-flexbox;
    display: -webkit-box;
    display: flex;
    -ms-flex-align: center;
    -ms-flex-pack: center;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #f5f5f5;
  }
  
  .form-signin {
    width: 100%;
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
  }
  .form-signin .checkbox {
    font-weight: 400;
  }
  .form-signin .form-control {
    position: relative;
    box-sizing: border-box;
    height: auto;
    padding: 10px;
    font-size: 16px;
  }
  .form-signin .form-control:focus {
    z-index: 2;
  }
  .form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }</style>
<body class="text-center">

      <form method="POST" class="form-signin" id="login-form" action="{{ route('signin.custom') }}">
        @csrf
      <img class="mb-4 img-fluid" src="{{ asset('static/img/login.png') }}" alt="" width="200px" height="200px">
      <br>@include('flash-message')
      <label>
        <h6 class="text-sm">Email Address</h6>
    </label> <br>
      
      
      <input id="email" type="email" placeholder="Enter email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
      @if ($errors->has('email'))
                            <span style="color: red;">{{ $errors->first('email') }}</span>
                            @endif
      
                           <br> <label>
                              <h6 class="text-sm">Mot de passe</h6>
                          </label> 
      
      <input type="password" placeholder="Enter le mot de passe" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> 
                        @if ($errors->has('password'))
                            <span style="color: red;">{{ $errors->first('password') }}</span>
                            @endif

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2021-2022</p>
    </form>
  </body>
@endsection