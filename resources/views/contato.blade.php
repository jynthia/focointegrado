@extends('layouts.app')

@section('head')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contato</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{asset('css/login/login.css')}}">
    <link rel="stylesheet" href="{{asset('css/contacts.css')}}">
</head>
@stop

@section('content')

<div class="container-contact100">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Fale Conosco
				</span>

            <div class="wrap-input100 validate-input" data-validate="Nome é necessário">
                <input class="input100" id="name" type="text" name="name" placeholder="Nome">
                <label class="label-input100" for="name">
                    <span class="lnr lnr-user"></span>
                </label>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Insira um e-mail válido">
                <input class="input100" id="email" type="text" name="email" placeholder="E-mail">
                <label class="label-input100" for="email">
                    <span class="lnr lnr-envelope"></span>
                </label>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Telefone é necessário">
                <input class="input100" id="phone" type="text" name="phone" placeholder="Telefone">
                <label class="label-input100" for="phone">
                    <span class="lnr lnr-phone-handset"></span>
                </label>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Mensagem é necessária">
                <textarea class="input100" name="message" placeholder="Sua mensagem"></textarea>
            </div>

            <div class="contact100-form-checkbox">
                <input class="input-checkbox100" id="ckb1" type="checkbox" name="copy-mail">
                <label class="label-checkbox100" for="ckb1">
                    Enviar cópia para meu e-mail
                </label>
            </div>

            <div class="container-contact100-form-btn">
                <div class="wrap-contact100-form-btn">
                    <button class="contact100-form-btn">
                        Enviar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>



<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

@stop
