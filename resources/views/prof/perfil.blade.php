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
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{{session('success')}}</li>
                </ul>
            </div>
        @endif
        <div class="row">
            {{--<div class="col-md-4">--}}
                {{--<div class="white-box">--}}
                    {{--<div class="user-bg"><img width="100%" alt="user" src={{ asset('storage/app/avatars/'.$dados['usuario']->avatar) }}>--}}
                        {{--<div class="overlay-box">--}}
                            {{--<div class="user-content">--}}

                                {{--TODO: organizar botoes--}}
                                {{--TODO: corrigir exibição da imagem --}}
                                {{--<a href="#updateAvatar" data-toggle="collapse"><img src="{{ asset('storage/app/avatars/'.$dados['usuario']->avatar) }}" class="thumb-lg img-circle" alt="img"></a>--}}
                                    {{--<div id="updateAvatar" class="collapse">--}}
                                            {{--<form action="/avatar" method="post" enctype="multipart/form-data">--}}
                                                {{--@csrf--}}
                                                {{--<div class="form-group">--}}
                                                    {{--<input type="file" class="form-control-file" name="avatar" id="avatarFile" aria-describedby="fileHelp">--}}
                                                {{--</div>--}}
                                                {{--<button type="submit" class="btn btn-info">Submit</button>--}}
                                            {{--</form>--}}
                                    {{--</div>--}}
                                {{--<h4 class="text-white">{{ $dados['usuario']->name }}</h4>--}}
                                {{--<h5 class="text-white">{{ $dados['usuario']->email }}</h5>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="col-md-8 col-xs-12">
                {{-- TODO: criar validações JS e mensagens de erro --}}
                <div class="white-box">
                    <form id="perfilUpdate" class="form-horizontal form-material" method="POST" action="{{route('users.update', $dados['usuario'])}}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="name" class="col-md-12">Nome Completo</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Insira novo nome para atualizar" value="{{ $dados['usuario']->name }}" class="form-control form-control-line" name="name" id="name" required> </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-12">E-mail</label>
                            <div class="col-md-12">
                                <input type="email" placeholder="Insira novo e-mail para atualizar" value="{{ $dados['usuario']->email }}" class="form-control form-control-line" name="email" id="email" required> </div>

                        </div>
                        <div class="form-group">
                            <label for="password" class="col-md-12">Senha</label>
                            <div class="col-md-12">
                                <input type="password" value="" placeholder="Insira nova senha para atualizar" class="form-control form-control-line" name="password" id="password"> </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-info">Atualizar perfil</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop


