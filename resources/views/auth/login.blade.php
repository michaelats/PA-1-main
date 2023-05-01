@extends('layout.pagelogin')

@section('title','Harian - login')
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&family=Kiwi+Maru:wght@300&family=Noto+Sans+JP&family=Playfair+Display&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
@section('container')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap');

    body{
        background-image: url('img/login.jpg');
        background-size: cover;
    }
    #logologin{
        margin: auto;
        padding-top: 30px;
        padding-bottom: 30px;
        width: 100%
    }
    h3{
        font-family: 'Kiwi Maru', serif;
    }
    label{
        font-family: 'Source Sans Pro', sans-serif;
    }


</style>
    <div class="container" style="margin: 180px auto;">
        <div class="d-flex justify-content-center">
            <div class="col-md-6">
                <div class="bg-transparent">
                    <div class="card-body" style="background: rgba(255, 255, 255, 0.5);border-radius: 25px;" >
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                                <center><img src="img/logo.png" alt="" id="logologin" style="width: 120px;"></center>
                                <h3 class="text-center">LOGIN</h3>
                            <div class="form-group row">
                                <div class="col-md-12 input-group-prepend">
                                    <span class="input-group-text border-right-0"><i class="fas fa-envelope"></i></span>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('E-Mail') }}">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <div class="col-md-12 input-group-prepend">
                                    <span class="input-group-text border-right-0"><i class="fas fa-lock"></i></span>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Ingat Saya') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-12">
                                    <center>
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
                                    </center>
                                </div>
                                <div class="col-md-12">
                                    <br>
                                    <p class="text-center">
                                        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="text-decoration: none;">
                                        {{ __('Lupa Password?') }}
                                    </a>
                                        @endif
                                    
                                        <a class="btn btn-link" href="{{ route('register') }}" style="text-decoration: none;">
                                            {{ __('Belum memiliki akun?') }}
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection