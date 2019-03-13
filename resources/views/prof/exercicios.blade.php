@extends('layouts/prof.app')

@section('content')

    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">EXERCÍCIOS</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Início</a></li>
                    <li class="active">Exercícios</li>

                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">

                    <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-success pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light"><i class="fa fa-plus fa-fw" aria-hidden="true"></i>Adicionar</button>

                    <div id="myModal" class="modal fade" role="dialog">

                        <div class="modal-dialog">

                            <div class="modal-content">

                                <div class="modal-header">

                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Adicionar exercício</h4>

                                </div>

                                <div class="modal-body">

                                    <form id="adicionaAluno" method="post" action="">

                                        <div class="form-group">
                                            <label for="nome_id" class="control-label">Nome</label>
                                            <input type="text" class="form-control" id="nome_id" name="nome" placeholder="Nome do exercício">
                                        </div>

                                        <div class="form-group">
                                            <label for="video_id" class="control-label">Vídeo</label>
                                            <input type="text" class="form-control" id="video_id" name="video" placeholder="Link para vídeo">
                                        </div>

                                        <div class="form-group">
                                            <label for="descricao_id" class="control-label">Descrição</label>
                                            <input type="text" class="form-control" id="descricao_id" name="descricao" placeholder="Descreva o exercício">
                                        </div>

                                    </form>

                                </div>

                                <div class="modal-footer form-group">

                                    <button type="submit" class="btn btn-info" data-dismiss="modal">Adicionar</button>

                                </div>

                            </div>

                        </div>

                    </div>
                    <h3 class="box-title">Exercícios cadastrados</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>NOME</th>
                                <th>VÍDEO</th>
                                <th>DESCRIÇÃO</th>
                                <th>AÇÕES</th>
                            </tr>
                            </thead>
                            <tbody>

                            <!-- TODO: adicionar links e espaço entre ações -->
                            <tr>
                                <td>1</td>
                                <td class="txt-oflo">Elevação de quadril</td>
                                <td>http://www.youtube.com</td>
                                <td>Lorem ipsum dolore</td>
                                <td><i class="fa fa-edit"></i><i class="fa fa-trash"></i></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- table -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- chat-listing & recent comments -->
        <!-- ============================================================== -->

        <!-- /.col -->

    </div>


    @stop