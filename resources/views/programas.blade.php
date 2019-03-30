@extends('layouts.app')

@section('head')

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Programas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/programs.css')}}">
    <script src="{{asset('css/programs/js/start.js')}}"></script>
</head>

@stop
<body>

@section('content')
<div id="page">

    <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(img/programs1.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h1>É sobre melhorar a cada dia</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(img/programs2.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h1>NÓS APRENDEMOS SOBRE VOCÊ</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(img/programs3.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h1>CONHECIMENTO É PODER</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div id="colorlib-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-12 intro-wrap animate-box">
                    <div class="intro-flex">
                        <div class="one-third intro-img" style="background-image: url(img/fit.jpg)">
                            <div class="desc">
                                <h3>FOCO Fitness</h3>
                                <p>Atinja seus objetivos de forma responsável.</p>
                                <span class="price text-center">A partir de 2x<br><small>por semana</small></span>

                            </div>
                        </div>
                        <div class="one-third intro-img" style="background-image: url(img/sports.jpg)">
                            <div class="desc">
                                <h3>FOCO Sports</h3>
                                <p>O cenário pode mudar, mas o caminho de um jogador para um desempenho ideal nunca termina.</p>
                                <span class="price text-center">A partir de 2x<br><small>por semana</small></span>
                            </div>
                        </div>
                        <div class="one-third intro-img" style="background-image: url(img/health.jpg)">
                            <div class="desc">
                                <h3>FOCO Reabilitação</h3>
                                <p>Quando você constrói conexões entre o tratamento e o bem-estar geral, as pessoas se fortalecem.</p>
                                <span class="price text-center">A partir de 1x<br><small>por semana</small></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="colorlib-services">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                    <h2>descubra novas oportunidades de ser <div class="destaque">melhor</div></h2>
                    <p>Conectamos pessoas às soluções de que precisam, fornecendo planos individualizados com base nas melhores e mais atualizadas pesquisas que nos mostram o melhor e mais seguro caminha para lhe guiar aos melhores resultados.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-time"></i>
							</span>
                        <div class="desc">
                            <h3>Semi-personal</h3>
                            <p>Treine no seu tempo com acompanhamento especial</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-weightlifting"></i>
							</span>
                        <div class="desc">
                            <h3>Sports</h3>
                            <p>O cenário pode mudar, mas o caminho de um jogador para um desempenho ideal nunca termina.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-exercise-2"></i>
							</span>
                        <div class="desc">
                            <h3>Reabilitação</h3>
                            <p>Trabalhando de mãos dadas com o que há de mais atualizado em protocolos de avaliações e análises para produzir os mais eficientes sistemas de reabilitação</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-man"></i>
							</span>
                        <div class="desc">
                            <h3>Kids</h3>
                            <p>Programa de atendimento em grupo destinado a desenvolver habilidades atléticas de formação básica motora.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="colorlib-schedule" class="colorlib-light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                    <h2>Nossos horários</h2>
                </div>
            </div>
            <div class="row">
                <div class="schedule text-center animate-box">
                    <div class="schedule-flex">
                        <div class="entry-forth">
                            <p class="icon"><span><i class="flaticon-gym"></i></span></p>
                            <p class="time"><span>06h</span></p>
                            <h3>Semi-personal</h3>
                        </div>
                        <div class="entry-forth">
                            <p class="icon"><span><i class="flaticon-exercise-2"></i></span></p>
                            <p class="time"><span>06h</span></p>
                            <h3>Kids</h3>
                        </div>
                        <div class="entry-forth">
                            <p class="icon"><span><i class="flaticon-meditation"></i></span></p>
                            <p class="time"><span>06h</span></p>
                            <h3>Fit</h3>
                        </div>
                        <div class="entry-forth">
                            <p class="icon"><span><i class="flaticon-gloves"></i></span></p>
                            <p class="time"><span>06h</span></p>
                            <h3>Reabilitação</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="colorlib-classes colorlib-light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                    <h2>Empresas</h2>
                    <p>Direcionamos os funcionários para uma saúde e desempenho otimizados com uma abordagem melhor ao bem-estar corporativo.</p>
                    <p>Comparado aos tradicionais programas de bem-estar corporativo, a FOCO Integrado gera mais resultados de saúde, diminui mais fatores de risco de lesão e gera maior retorno sobre o investimento.</p>
                    <p> E os funcionários adoram compartilhar o quanto desfrutam de estilos de vida mais saudáveis e duradouros.</p>
                    <p><a href="/contato" class="btn-learn">Solicite uma visita <i class="icon-arrow-right3"></i></a></p>
                </div>
            </div>
        </div>

    </div>
</div>

@stop

<script src="{{asset('css/programs/js/programs.js')}}"></script>



