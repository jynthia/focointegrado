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
    <script src="{{asset('js/mains.js')}}"></script>
    <title>Foco Integrado</title>

</head>

@stop

<body>

@section('content')


    <div class="cabecalho-imagens">

        <div class="coluna-esq">

            <img src="img/imagem0.png">
            <div class="texto-esquerda">
                <span class="highlight">Performance é</span>
                <span class="highlight">para <span class="blue-t">todos</span>.</span>
            </div>

        </div>

        <div class="coluna-dir">

            <div class="overlay-image">
                <a href="LINK_URL">
                <div class="overlay-for-image"></div>
                <img  src="img/test.jpg"  class="areas-img">
                <div class="texto-central">HEALTH</div>

                    <div id="health" class="overlay-text">
                        <div class="text">Trabalhando de mãos dadas com o que há de mais atualizado em protocolos de avaliações e
                            análises para produzir os mais eficientes sistemas de reabilitação e retorno ao esporte e vida ativa saudável
                        </div>
                    </div>
                </a>
            </div>
            <div class="overlay-image"><a href="LINK_URL">
                    <div class="overlay-for-image"></div>
                <img  src="img/index_atletic.jpg"  class="areas-img">
                <div class="texto-central">ATLETIC</div>

                    <div id="atletic" class="overlay-text">
                        <div class="text">No sistema de formação atlética, passamos por um direcionamento além do bem estar,
                            construindo um patamar dentro da força, potência, velocidade e condionamento muito além das condições atuais que nossos clientes apresentam.
                        </div>
                    </div>
            </a></div>
            <div class="overlay-image"><a href="LINK_URL">
                    <div class="overlay-for-image"></div>
                <img  src="img/index_sports.jpg"  class="areas-img">

                    <div class="texto-central">SPORTS</div>
                    <div id="sports" class="overlay-text">
                        <div class="text">Nosso treinamento em desempenho esportivo é desenvolvido por meio de uma combinação de planejamento baseado nas avaliações e
                            testes e o planejamento e treino presencial, além de ferramentas móveis e conteúdo on-line útil.
                        </div>
                    </div>
            </a></div>
            <div class="overlay-image"><a href="LINK_URL">
                    <div class="overlay-for-image"></div>
                <img  src="img/test.jpg"  class="areas-img">
                    <div class="texto-central">KIDS</div>
                    <div id="kids" class="overlay-text">
                        <div class="text">Atendimento em grupo destinado a desenvolver habilidades atléticas de formação básica motora. A
                            criança se desenvolve de forma mais saudável sem comprometer o crescimento e potencial para vida saudável.
                        </div>
                    </div>
                </a></div>

        </div>
        <div id="spacer"></div>
    </div>
<div class="text-performance">

    <h1>Porque performance</h1>

        <h2>Desenvolvemos um sistema de treinamento e organização que coloca as pessoas na melhor posição para assumir o controle de sua saúde, para que possam ter sucesso em qualquer área de suas vidas.
            Criamos uma plataforma programada para conquistas, que pode ser usada para ajudar todas as pessoas a alcançarem seus potenciais.
        </h2>
        <h2 class="text-animation">Acreditamos que assumir o controle da saúde e do desempenho pessoal é um desafio universal.</h2>


</div>

<div class="depoimentos">

    <h1>Nossos alunos</h1>
    <hr/>
    <div id="main-quote">
        <div class="quote">"</div>
        <blockquote>Não me vejo saindo da Foco, a evolução que tive em 4 meses aqui não tive em lugar nenhum."</blockquote>
        <p>Matheus Martins, Atleta</p>
    </div>

    <div class="container" id="s-quote">
        <div class="quote">"</div>
        <blockquote>Eu tinha lesões e depois que comecei o treinamento aqui de forma específica elas acabaram. Eu faço uma corrida perfeita sem sentir dor!"</blockquote>
        <p>Juliana Araújo, Advogada e corredora</p>
        <div id="quote">"</div>
        <blockquote>Eu só tenho a agradecer, apesar de ser um investimento, o investimento quando é feito da maneira que é feito aqui, você se sente bem tratado."</blockquote>
        <p>Samuel Resende, Arquiteto e professor</p>
    </div>

</div>

    @stop