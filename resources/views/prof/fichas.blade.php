@extends('layouts/prof.app')

@section('content')

    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">FICHAS DE ALUNOS</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Início</a></li>
                    <li class="active">Fichas de Alunos</li>

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
                                    <h4 class="modal-title">Adicionar ficha</h4>

                                </div>

                                <div class="modal-body">

                                    <form id="adicionaFicha" method="post" action="">

                                        <div class="form-group">
                                            <label for="nome_id" class="control-label">Nome</label>
                                            <input type="text" class="form-control" id="nome_id" name="nome" placeholder="Nome para essa ficha">
                                        </div>

                                        <div class="form-group">
                                            <label for="aluno_id" class="control-label">Aluno</label>
                                            <select class="form-control" id="aluno_id" name="aluno">

                                                <option value="1">Cinthia Campos</option>

                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="validade_id" class="control-label">Data de validade</label>
                                            <input type="text" class="form-control" id="validade_id" name="validade" placeholder="dd/mm/aaaa">
                                        </div>

                                        <div class="form-group">

                                        </div>

                                    </form>

                                </div>

                                <div class="modal-footer form-group">

                                    <button type="submit" class="btn btn-info" data-dismiss="modal">Adicionar</button>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                        <select class="form-control pull-right row b-none">
                            <option>Todos os alunos</option>
                            <option>Cinthia Campos</option>
                        </select>
                    </div>
                    <h3 class="box-title">Fichas cadastradas</h3>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>NOME</th>
                                <th>ALUNO</th>
                                <th>DATA INSERIDA</th>
                                <th>DATA DE VALIDADE</th>
                                <th>AÇÕES</th>
                            </tr>
                            </thead>
                            <tbody>

                            <!-- TODO: adicionar links e espaço entre ações -->

                            <tr data-toggle="collapse" data-target="#accordion" class="clickable">
                                <td>1</td>
                                <td class="txt-oflo">Março 2019</td>
                                <td>Cinthia Campos</td>
                                <td>12/01/2019</td>
                                <td class="text-danger">12/01/2019</td>
                                <td><i class="fa fa-edit"></i><i class="fa fa-trash"></i></td>
                            </tr>

                            <tr>
                                <td colspan="6">
                                    <div id="accordion" class="collapse">
                                        <button type="button" data-toggle="modal" data-target="#myModalTreino" class="btn btn-success pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light"><i class="fa fa-plus fa-fw" aria-hidden="true"></i>Adicionar treino</button>

                                        <div id="myModalTreino" class="modal fade" role="dialog">

                                            <div class="modal-dialog">

                                                <div class="modal-content">

                                                    <div class="modal-header">

                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Adicionar treino</h4>

                                                    </div>

                                                    <div class="modal-body">

                                                        <form id="adicionaTreino" method="post" action="">

                                                            <div class="form-group">
                                                                <label for="nome_treino" class="control-label">Nome</label>
                                                                <input type="text" class="form-control" id="nome_treino" name="nome_treino" placeholder="Ex.: Treino A">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="warmup" class="control-label">Warm-up</label>
                                                                <input type="text" class="form-control" id="warmup" name="warmup" placeholder="">
                                                            </div>

                                                            <div class="form-group">

                                                                <label for="exercicio" class="control-label">Selecione exercício</label>
                                                                <select class="form-control" id="exercicio" name="exercicio">

                                                                    <option value="1">Lorem ipsum</option>

                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="sets" class="control-label">Sets</label>
                                                                <input type="text" class="form-control" id="sets" name="sets" placeholder="">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="reps" class="control-label">Reps</label>
                                                                <input type="text" class="form-control" id="reps" name="reps" placeholder="">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="rest" class="control-label">Rest</label>
                                                                <input type="text" class="form-control" id="rest" name="rest" placeholder="">
                                                            </div>


                                                        </form>

                                                    </div>

                                                    <div class="modal-footer form-group">

                                                        <button type="submit" class="btn btn-info" data-dismiss="modal">Adicionar</button>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                        <h4>TREINO A</h4>
                                        <p>Titulo: <span class="text-dark">Prevenção / Habilidade Motora</span></p>
                                        <p>Warm-up: <span class="text-dark">Lorem Ipsum</span></p>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="text-dark">Exercício</th>
                                                <th class="text-dark">Sets</th>
                                                <th class="text-dark">Reps</th>
                                                <th class="text-dark">Rest</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Elevação de quadril</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>30</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <h4>TREINO B</h4>
                                        <p>Titulo: <span class="text-dark">Prevenção / Habilidade Motora</span></p>
                                        <p>Warm-up: <span class="text-dark">Lorem Ipsum</span></p>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="text-dark">Exercício</th>
                                                <th class="text-dark">Sets</th>
                                                <th class="text-dark">Reps</th>
                                                <th class="text-dark">Rest</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Elevação de quadril</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>30</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>
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