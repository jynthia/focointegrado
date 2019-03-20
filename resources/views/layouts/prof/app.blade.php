<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{ $dados['titulo'] }}</title>

    <link href="{{asset('css/prof/prof-assets.css')}}" rel="stylesheet">
    <link href="{{asset('css/prof/prof-styles.css')}}" rel="stylesheet">

    {{--<!--[if lt IE 9]>--}}
    {{--<script type="text/javascript" src="{{ asset('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}"></script>--}}
    {{--<script type="text/javascript" src="{{ asset('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}"></script>--}}
    {{--<![endif]-->--}}
</head>

<body class="fix-header">

<div id="wrapper">

    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header">
            <div class="top-left-part">
                <!-- Logo -->
                <a class="logo" href="">
                    <!-- Logo icon image, you can use font-icon also -->
                    {{--<b>--}}
                        {{--<img src="{{ asset('img/admin-logo.png') }}" alt="home" class="light-logo" />--}}
                    {{--</b>--}}

                    <span class="hidden-xs">
                            <img src="{{ asset('img/admin-logo.png') }}" alt="home" class="light-logo" />
                    </span>
                </a>
            </div>
            <!-- /Logo -->
            <ul class="nav navbar-top-links navbar-right pull-right">
                <li>
                    <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                        <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                </li>
                <li>

                    <!--TODO: adicionar botão para sair-->
                    <a class="profile-pic" href="#"> <img src="{{asset('img/profile.jpg')}}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Cinthia</b></a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Top Navigation -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav slimscrollsidebar">
            <div class="sidebar-head">
                <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Menu</span></h3>
            </div>
            <ul class="nav" id="side-menu">
                <li style="padding: 70px 0 0;">
                    <a href="/prof" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Início</a>
                </li>
                <li>
                    <a href="/prof/perfil" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Perfil</a>
                </li>
                <li>
                    <a href="/prof/exercicios" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Exercícios</a>
                </li>

                <li>
                    <a data-toggle="collapse" data-target="#accordion_fichas" class="waves-effect clickable"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Fichas</a>
                    <div id="accordion_fichas" class="collapse">
                        <ul class="nav">
                            <li><a href="/prof/fichas" class="waves-effect">Alunos</a></li>
                            <li><a href="/prof/fichas_grupo" class="waves-effect">Grupos</a></li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a data-toggle="collapse" data-target="#accordion_avaliacoes"  class="waves-effect clickable"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Avaliações</a>
                    <div id="accordion_avaliacoes" class="collapse">
                        <ul class="nav">
                            <li><a href="/prof/bioimpedancia" class="waves-effect">Avaliação (Bioimpedância)</a></li>
                            <li><a href="/prof/atratores" class="waves-effect">Atratores e Biomecânica</a></li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>

    </div>
    <div id="page-wrapper">

        @yield('content')

    </div>

</div>

<script src="{{asset('js/prof/prof-assets.js')}}"></script>
<script src="{{asset('js/prof/prof-custom.js')}}"></script>


</body>

</html>