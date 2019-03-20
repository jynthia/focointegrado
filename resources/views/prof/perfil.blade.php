@extends('layouts.prof.app')

@section('content')

    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Meu Perfil</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Início</a></li>
                    <li class="active">Meu Perfil</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <!-- .row -->
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="white-box">
                    <div class="user-bg"> <img width="100%" alt="user" src="{{asset('img/img1.jpg')}}">
                        <div class="overlay-box">
                            <div class="user-content">

                                <!-- TODO: add Modal para trocar de foto -->
                                <a href="javascript:void(0)"><img src="{{asset('img/profile.jpg')}}" class="thumb-lg img-circle" alt="img"></a>
                                <h4 class="text-white">{{ $dados['professor']->nome }}</h4>
                                <h5 class="text-white">{{ $dados['professor']->email }}</h5> </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-8 col-xs-12">
                <div class="white-box">
                    <form class="form-horizontal form-material">
                        <div class="form-group">
                            <label class="col-md-12">Nome Completo</label>
                            <div class="col-md-12">
                                <input type="text" value="{{ $dados['professor']->nome }}" class="form-control form-control-line"> </div>
                        </div>
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">E-mail</label>
                            <div class="col-md-12">
                                <input type="email" value="{{ $dados['professor']->email }}" class="form-control form-control-line" name="example-email" id="example-email"> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Senha</label>
                            <div class="col-md-12">
                                <input type="password" value="{{ $dados['usuario']->senha }}" class="form-control form-control-line"> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Login</label>
                            <div class="col-md-12">
                                <input type="text" value="{{ $dados['usuario']->login }}" class="form-control form-control-line"> </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-info">Atualizar perfil</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop


