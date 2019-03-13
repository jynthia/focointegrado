@extends('layouts/prof.app')

@section('content')

    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">INÍCIO</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Início</a></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="white-box analytics-info">
                    <h3 class="box-title">Total de Alunos</h3>
                    <ul class="list-inline two-part">
                        <li>
                            <div id="sparklinedash"></div>
                        </li>
                        <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">7</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="white-box analytics-info">
                    <h3 class="box-title">Fichas Ativas</h3>
                    <ul class="list-inline two-part">
                        <li>
                            <div id="sparklinedash2"></div>
                        </li>
                        <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">20</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="white-box analytics-info">
                    <h3 class="box-title">Exercícios Salvos</h3>
                    <ul class="list-inline two-part">
                        <li>
                            <div id="sparklinedash3"></div>
                        </li>
                        <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">15</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/.row -->
        <!--row -->

        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">

                    <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-success pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light"><i class="fa fa-plus fa-fw" aria-hidden="true"></i>Adicionar</button>

                    <div id="myModal" class="modal fade" role="dialog">

                        <div class="modal-dialog">

                            <div class="modal-content">

                                <div class="modal-header">

                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Adicionar novo aluno</h4>

                                </div>

                                <div class="modal-body">

                                    <form id="adicionaAluno" method="post" action="">

                                        <div class="form-group">
                                            <label for="nome" class="control-label">Nome</label>
                                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do aluno">
                                        </div>

                                        <div class="form-group">
                                            <label for="nascimento" class="control-label">Data de Nascimento</label>
                                            <input type="date" class="form-control" id="nascimento" name="nascimento" placeholder="Data de nascimento">
                                        </div>

                                        <div class="form-group">
                                            <label for="matricula" class="control-label">Matrícula</label>
                                            <input type="number" class="form-control" id="matricula" name="matricula" placeholder="Matrícula">
                                        </div>

                                        <div class="form-group">
                                            <label for="matricula" class="control-label">CPF</label>
                                            <input type="number" class="form-control" id="cpf" name="cpf" placeholder="CPF">
                                        </div>

                                        <div class="form-group">
                                            <label for="contato" class="control-label">Contato</label>
                                            <input type="text" class="form-control" id="contato" name="contato" placeholder="Número para contato">
                                        </div>

                                        <div class="form-group">
                                            <label for="email" class="control-label">E-mail</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
                                        </div>

                                        <div class="form-group">
                                            <label for="endereco" class="control-label">Endereço</label>
                                            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço">
                                        </div>

                                        <div class="form-group">
                                            <label for="estado_civil" class="control-label">Estado Civil</label>
                                            <input type="text" class="form-control" id="estado_civil" name="estado_civil" placeholder="Estado Civil">
                                        </div>

                                        <div class="form-group">
                                            <label for="idade" class="control-label">Idade</label>
                                            <input type="number" class="form-control" id="idade" name="idade" placeholder="Idade">
                                        </div>

                                        <div class="form-group">

                                            <label for="local_treino_id" class="control-label">Local de treino</label>
                                            <select class="form-control" id="local_treino_id" name="local_treino_id">

                                                <option value="1">FOCO Integrado</option>

                                            </select>
                                        </div>

                                        <div class="form-group">

                                            <label for="genero_id" class="control-label">Gênero</label>
                                            <select class="form-control" id="genero_id" name="genero_id">

                                                <option value="1">Feminino</option>

                                            </select>
                                        </div>

                                        <div class="form-group">

                                            <label for="programa_id" class="control-label">Programa</label>
                                            <select class="form-control" id="programa_id" name="programa">

                                                <option value="kids">Kids</option>

                                            </select>
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
                            <option>Todos</option>
                            <option>Kids</option>
                        </select>
                    </div>
                    <h3 class="box-title">Carteira de Alunos</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>NOME</th>
                                <th>PROGRAMA</th>
                                <th>FREQUÊNCIA</th>
                                <th>MATRÍCULA</th>
                                <th>STATUS</th>
                                <th>AÇÕES</th>
                            </tr>
                            </thead>
                            <tbody>

                            <!-- TODO: adicionar links e espaço entre ações -->
                            <tr data-toggle="collapse" data-target="#accordionHistorico" class="clickable">
                                <td><div class='editable' onclick='makeElementEditable(this)'
                                         onblur='updateTaskName(this)'>1</div></td>
                                <td class="txt-oflo"><div class='editable' onclick='makeElementEditable(this)'
                                                          onblur='updateTaskName(this)'>Cinthia Campos</div></td>
                                <td><div class='editable' onclick='makeElementEditable(this)'
                                         onblur='updateTaskName(this)'>Fit</div></td>
                                <td class="text-success">95%</td>
                                <td>123456</td>
                                <td class="text-danger">Pendente</td>
                                <td><i class="fa fa-edit"></i><i class="fa fa-trash"></i></td>
                            </tr>

                            <tr>
                                <td colspan="7">
                                    <div id="accordionHistorico" class="collapse">
                                        <h4>Histórico</h4>
                                        <table class="table">
                                            <tr>
                                                <td><p>Local de treino: <span class="text-dark">Prevenção / Habilidade Motora</span></p></td>
                                                <td><p>Data de nascimento: <span class="text-dark">Lorem Ipsum</span></p></td>
                                            </tr>
                                            <tr>
                                                <td><p>Idade: <span class="text-dark">Lorem Ipsum</span></p></td>
                                                <td><p>Sexo: <span class="text-dark">Lorem Ipsum</span></p></td>
                                            </tr>
                                            <tr>
                                                <td><p>Estado Civil: <span class="text-dark">Lorem Ipsum</span></p></td>
                                                <td><p>Contato: <span class="text-dark">Lorem Ipsum</span></p></td>
                                            </tr>
                                            <tr>
                                                <td><p>E-mail: <span class="text-dark">Lorem Ipsum</span></p></td>
                                                <td><p>Profissão: <span class="text-dark">Lorem Ipsum</span></p></td>
                                            </tr>
                                            <tr>
                                                <td><p>CPF: <span class="text-dark">Lorem Ipsum</span></p></td>
                                                <td><p>Estado Civil: <span class="text-dark">Lorem Ipsum</span></p></td>
                                            </tr>
                                            <tr>
                                                <td><p>Endereço: <span class="text-dark">Lorem Ipsum</span></p></td>
                                                <td><p>Gênero: <span class="text-dark">Lorem Ipsum</span></p></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><p>Objetivo: <span class="text-dark">Lorem Ipsum</span></p></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><p>Atividades atuais: <span class="text-dark">Lorem Ipsum</span></p></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><p>Dores na coluna: <span class="text-dark">Lorem Ipsum</span></p></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><p>Limitações ou lesão passada: <span class="text-dark">Lorem Ipsum</span></p></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><p>Escala de dor 1 a 10: <span class="text-dark">Lorem Ipsum</span></p></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><p>Medicamento atual: <span class="text-dark">Lorem Ipsum</span></p></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><p>Alguma cirurgia recente: <span class="text-dark">Lorem Ipsum</span></p></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><p>Problema de saúde: <span class="text-dark">Lorem Ipsum</span></p></td>
                                            </tr>
                                        </table>
                                        <h4>Horário</h4>
                                        <table class="table">

                                            <thead>
                                            <tr>
                                                <th>Acordar:</th>
                                                <th>Trabalho:</th>
                                                <th>Estudo:</th>
                                                <th>Treino:</th>
                                                <th>Dormir:</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>12h</td>
                                                <td>12h</td>
                                                <td>12h</td>
                                                <td>12h</td>
                                                <td>12h</td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        <h4>Relatório de Movimento/Planejamento Base/IT Iluminator</h4>
                                        <p>ajhdisuhdiufhisshfi</p>


                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">

                    <button type="button" data-toggle="modal" data-target="#myModalGrupo" class="btn btn-success pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light"><i class="fa fa-plus fa-fw" aria-hidden="true"></i>Adicionar</button>

                    <div id="myModalGrupo" class="modal fade" role="dialog">

                        <div class="modal-dialog">

                            <div class="modal-content">

                                <div class="modal-header">

                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Adicionar novo grupo</h4>

                                </div>

                                <div class="modal-body">

                                    <form id="adicionaGrupo" method="post" action="">

                                        <div class="form-group">
                                            <label for="horario" class="control-label">Horário</label>
                                            <input type="text" class="form-control" id="horario" name="horario" placeholder="Horário da aula">
                                        </div>

                                        <div class="form-group">

                                            <label for="modalidade" class="control-label">Programa</label>
                                            <select class="form-control" id="modalidade" name="modalidade">

                                                <option value="kids">Kids</option>

                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="aluno" class="control-label"></label>
                                            <input type="checkbox" name="aluno" id="aluno" value="1">Cinthia

                                            <input type="checkbox" name="aluno" id="aluno2" value="2">Cinthia
                                        </div>
                                    </form>

                                </div>

                                <div class="modal-footer form-group">

                                    <button type="submit" class="btn btn-info" data-dismiss="modal">Adicionar</button>

                                </div>

                            </div>

                        </div>

                    </div>

                    <h3 class="box-title">Grupos</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>PROGRAMA</th>
                                <th>HORÁRIO</th>
                                <th>STATUS</th>
                                <th>AÇÕES</th>
                            </tr>
                            </thead>
                            <tbody>

                            <!-- TODO: adicionar links e espaço entre ações -->
                            <tr data-toggle="collapse" data-target="#accordion" class="clickable">
                                <td>1</td>
                                <td class="txt-oflo">FIT</td>
                                <td><div class='editable' onclick='makeElementEditable(this)'
                                         onblur='updateTaskName(this)'>19h30</div></td>
                                <td class="text-danger">Pendente</td>
                                <td><i class="fa fa-edit"></i><i class="fa fa-trash"></i></td>
                            </tr>

                            <tr>
                                <td colspan="5">
                                    <div id="accordion" class="collapse">
                                        <H5>ALUNOS:</H5>
                                        <p><span class="text-dark">Cinthia Campos</span> <i class="fa fa-trash-o"></i></p>
                                        <p><span class="text-dark">Cinthia Campos</span> <i class="fa fa-trash-o"></i></p>
                                        <p><span class="text-dark">Cinthia Campos</span> <i class="fa fa-trash-o"></i></p>

                                    </div>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>

    </div>

    @stop