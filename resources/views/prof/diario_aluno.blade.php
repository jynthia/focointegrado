@extends('layouts/prof.app')

@section('content')

    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">DIÁRIOS</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Início</a></li>
                    <li><a href="/diarios">Diários</a></li>
                    <li class="active">Cinthia Campos</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">
                    <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-success pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light"><i class="fa fa-plus fa-fw" aria-hidden="true"></i>Adicionar atividade</button>


                    <h3 class="box-title">Cinthia Campos</h3>

                    <div id="myModal" class="modal fade" role="dialog">

                        <div class="modal-dialog">

                            <div class="modal-content">

                                <div class="modal-header">

                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Adicionar atividade</h4>

                                </div>

                                <div class="modal-body">

                                    <form id="adicionaDiarioAluno" method="post" action="">

                                        <div class="form-group">
                                            <label for="data" class="control-label">Data</label>
                                            <input type="text" class="form-control" id="data" name="data" placeholder="Data da atividade">
                                        </div>

                                        <div class="form-group">
                                            <label for="tt" class="control-label">TT</label>
                                            <input type="text" class="form-control" id="tt" name="tt" placeholder="TT">
                                        </div>

                                        <div class="form-group">
                                            <label for="read" class="control-label">Read</label>
                                            <input type="text" class="form-control" id="read" name="read" placeholder="Read">
                                        </div>

                                        <div class="form-group">
                                            <label for="trm" class="control-label">TRM</label>
                                            <input type="text" class="form-control" id="trm" name="trm" placeholder="TRM">
                                        </div>

                                        <div class="form-group">
                                            <label for="rsi" class="control-label">RSI</label>
                                            <input type="text" class="form-control" id="rsi" name="rsi" placeholder="RSI">
                                        </div>

                                        <div class="form-group">
                                            <label for="pse" class="control-label">PSE</label>
                                            <input type="text" class="form-control" id="pse" name="pse" placeholder="PSE">
                                        </div>

                                        <div class="form-group">
                                            <label for="treino_base" class="control-label">Treino Realizado</label>
                                            <select class="form-control" id="treino_base" name="treino_base">

                                                <option value="a">Treino A</option>

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
                    <div class="horizontal-timeline">
                        <ol>
                            <li>
                                <p class="diplome">12/03/2019</p>
                                <span class="point"></span>
                                <p class="description">
                                    Ceci est la description du bac S
                                </p>
                            </li>
                            <li>
                                <p class="diplome">11/03/2019</p>
                                <span class="point"></span>
                                <p class="description">En lien avec la biologie et/ou la zoologie</p>
                            </li>
                            <li>
                                <p class="diplome">10/03/2019</p>
                                <span class="point"></span>
                                <p class="description">En lien avec la biologie et/ou la zoologie</p>
                            </li>
                            <li>
                                <p class="diplome">09/03/2019</p>
                                <span class="point"></span>
                                <p class="description">TEST</p></li>
                            <li>
                                <p class="diplome">01/03/2019</p>
                                <span class="point"></span>
                                <p class="description">Souvent nécessaire pour</p>
                            </li>
                        </ol>
                    </div>

                    <h4>Histórico</h4>

                    <div class="table-responsive diario-aluno">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>DATA</th>
                                <th>TT</th>
                                <th>READ</th>
                                <th>TRM</th>
                                <th>RSI</th>
                                <th>PSE</th>
                                <th>RMSSD</th>
                                <th>MODALIDADE</th>
                                <th>TREINO BASE</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>12/03/2019</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>Semi-Personal</td>
                                    <td>Treino A</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="white-box">
                    <h3 class="box-title">CMS/treino</h3>
                    <div id="cms-treino" style="height: 405px;"></div>
                </div>
            </div>
        </div>
    </div>

@stop
