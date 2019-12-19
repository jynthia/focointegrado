@extends('layouts.app')

@section('head')
        <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/login/login.css')}}">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Entrar</title>
</head>

@stop

@section('content')


    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf
					<span class="login100-form-title p-b-43">
						Bem-vindo de volta!
					</span>
                <div class="wrap-input100 validate-input">
                    <input id="email" type="text" class="input100 has-val {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Insira seu e-mail" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                    <span class="focus-input100"></span>
                    <span class="label-input100">E-mail</span>
                </div>


                <div class="wrap-input100 validate-input">

                        <input id="password" type="password" class="input100 has-val {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Insira sua senha" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        <span class="focus-input100"></span>
                        <span class="label-input100">Senha</span>

                </div>

                <div class="flex-sb-m w-full p-t-3 p-b-32">

                    <div>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="txt1">
                                Esqueceu a senha?
                            </a>
                        @endif
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label txt1" for="remember">
                            {{ __('Lembrar de mim') }}
                        </label>
                    </div>
                </div>


                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        Entrar
                    </button>
                </div>
                    </form>
            <div class="login100-more">
            </div>
        </div>
    </div>
@stop
