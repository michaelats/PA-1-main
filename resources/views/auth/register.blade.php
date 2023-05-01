@extends('layout.pagelogin')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
@section('container')
<style>   
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
        color: black;
        font-family: 'Playfair Display', serif;
    }

</style>
<div class="container" style="margin: 180px auto;" >
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="bg-transparent">
                <div class="card-body"  style="background: rgba(255, 255, 255, 0.5);border-radius: 25px;">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <center><img src="img/logo.png" alt="" id="logologin" style="width: 120px;"></center>
                        <div class="form-group row">
                            <div class="col-md-12 input-group-prepend">
                                <span class="input-group-text border-md border-right-0"><i class="fas fa-user-circle"></i></span>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="{{ __('Nama') }}">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12 input-group-prepend">
                                <span class="input-group-text border-right-0"><i class="fas fa-envelope"></i></span>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('Alamat E-Mail') }}">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('Password') }}">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12 input-group-prepend">
                                <span class="input-group-text border-right-0"><i class="fas fa-lock"></i></span>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Konfirmasi Password') }}">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <center>
                                    <button type="submit" class="btn btn-primary my-4">
                                    {{ __('Register') }}
                                </button>
                            </center>
                            <p class="text-center">Sudah memiliki akun?
                                    <a href="{{ route('login') }}">
                                        {{ __(' Login.') }}
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
