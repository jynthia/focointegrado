@extends('layouts.app')

@section('head')

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/login/login.css')}}">


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <title>Foco Integrado</title>

</head>

@stop

<body>

@section('content')

<div id="wrapper">
    <div id="principal">

        <img class="img-fluid" id="main-image" src="img/igor_capa.png">

    </div>

    <!-- TODO: INSERIR IMAGENS -->

    <div id="segundo" class="container">

        <img class="img-fluid" id="grupo" src="img/grupo.png" onclick="changeImage(this.id)">
        <img class="img-fluid" id="reab" src="img/reab.png" onclick="changeImage(this.id)">
        <img class="img-fluid" id="formacao" src="img/formacao.png" onclick="changeImage(this.id)">

    </div>

</div>

<div id="wrapper2">

    <h1>Porque performance</h1>

    <div id="text-wrapper">
        <h2>Desenvolvemos um sistema de treinamento e organização que coloca as pessoas na melhor posição para assumir o controle de sua saúde, para que possam ter sucesso em qualquer área de suas vidas.
            Criamos uma plataforma programada para conquistas, que pode ser usada para ajudar todas as pessoas a alcançarem seus potenciais.
        </h2>
    </div>


</div>

<div id="wrapper3">

    <h1>Nossos alunos</h1>
    <hr/>
    <div id="main-quote">
        <div class="quote">"</div>
        <blockquote>I don’t believe I would be able to achieve my results without the help from the EXOS Staff."</blockquote>
        <p>Cinthia Campos, Atleta</p>
    </div>

    <div class="container" id="s-quote">
        <div class="quote">"</div>
        <blockquote>I don’t believe I would be able to achieve my results without the help from the EXOS Staff."</blockquote>
        <p>Cinthia Campos, Atleta</p>
        <div id="quote">"</div>
        <blockquote>I don’t believe I would be able to achieve my results without the help from the EXOS Staff."</blockquote>
        <p>Cinthia Campos, Atleta</p>
    </div>

</div>

    @stop