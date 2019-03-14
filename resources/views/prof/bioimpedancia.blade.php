@extends('layouts/prof.app')

@section('content')

    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">BIOIMPEDÂNCIA</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Início</a></li>
                    <li class="active">Bioimpedância</li>

                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">

                    <button type="button" data-toggle="modal" data-target="#myModalBio" class="btn btn-success pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light"><i class="fa fa-plus fa-fw" aria-hidden="true"></i>Adicionar</button>

                    <div id="myModalBio" class="modal fade" role="dialog">

                        <div class="modal-dialog">

                            <div class="modal-content">

                                <div class="modal-header">

                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Adicionar Avaliação</h4>

                                </div>

                                <div class="modal-body">

                                    <form id="adicionaBio" method="post" action="">

                                        <div class="form-group">
                                            <label for="data" class="control-label">Data de realização</label>
                                            <input type="text" class="form-control" id="data" name="data" placeholder="dd/mm/aaaa">
                                        </div>

                                        <div class="form-group">
                                            <label for="aluno_id" class="control-label">Aluno</label>
                                            <select class="form-control" id="aluno_id" name="aluno">

                                                @foreach($dados['alunos'] as $aluno)

                                                    <option value="{{$aluno->id}}">{{$aluno->nome}}</option>

                                                @endforeach

                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="peso" class="control-label">Peso</label>
                                            <input type="number" class="form-control" id="peso" name="peso" placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <label for="altura" class="control-label">Altura</label>
                                            <input type="number" class="form-control" id="altura" name="altura" placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <label for="gordura_atual" class="control-label">Gordura Atual</label>
                                            <input type="number" class="form-control" id="gordura_atual" name="gordura_atual" placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <label for="massa_magra" class="control-label">Massa Magra</label>
                                            <input type="number" class="form-control" id="massa_magra" name="massa_magra" placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <label for="metabolismo_basal" class="control-label">Metabolismo Basal</label>
                                            <input type="number" class="form-control" id="metabolismo_basal" name="metabolismo_basal" placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <label for="agua_gordura_visceral" class="control-label">% Água/ Gordura Visceral</label>
                                            <input type="number" class="form-control" id="agua_gordura_visceral" name="agua_gordura_visceral" placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <label for="massa_ossea" class="control-label">Massa Óssea</label>
                                            <input type="number" class="form-control" id="massa_ossea" name="massa_ossea" placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <label for="freq_repouso" class="control-label">Freq. Repouso</label>
                                            <input type="number" class="form-control" id="freq_repouso" name="freq_repouso" placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <label for="pa_sistolica" class="control-label">P.A. Sistólica</label>
                                            <input type="number" class="form-control" id="pa_sistolica" name="pa_sistolica" placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <label for="hrvariability" class="control-label">HRVariability Recovery Points</label>
                                            <input type="number" class="form-control" id="hrvariability" name="hrvariability" placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <label for="rmssd" class="control-label">rMSSD</label>
                                            <input type="number" class="form-control" id="rmssd" name="rmssd" placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <label for="romain_chair_bi" class="control-label">Romain Chair Bilateral</label>
                                            <input type="number" class="form-control" id="romain_chair_bi" name="romain_chair_bi" placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <label for="romain_chair_uni" class="control-label">Romain Chair Unilateral</label>
                                            <input type="number" class="form-control" id="romain_chair_uni" name="romain_chair_uni" placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <label for="cmj" class="control-label">CMJ</label>
                                            <input type="number" class="form-control" id="cmj" name="cmj" placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <label for="sj" class="control-label">SJ</label>
                                            <input type="number" class="form-control" id="sj" name="sj" placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <label for="rsi_stifness" class="control-label">RSI Stifness</label>
                                            <input type="number" class="form-control" id="rsi_stifness" name="rsi_stifness" placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <label for="rsi_dropjump" class="control-label">RSI Drop Jump</label>
                                            <input type="number" class="form-control" id="rsi_dropjump" name="rsi_dropjump" placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <label for="indice_bosco" class="control-label">Índice de Bosco</label>
                                            <input type="number" class="form-control" id="indice_bosco" name="indice_bosco" placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <label for="horizontal_jump" class="control-label">Horizontal Jump Test</label>
                                            <input type="number" class="form-control" id="horizontal_jump" name="horizontal_jump" placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <label for="sl_hop" class="control-label">SL Hop For Distance Test</label>
                                            <input type="number" class="form-control" id="sl_hop" name="sl_hop" placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <label for="triple_hop" class="control-label">Triple Hop Test</label>
                                            <input type="number" class="form-control" id="triple_hop" name="triple_hop" placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <label for="crossover_hop" class="control-label">Cross Over Hop Test</label>
                                            <input type="number" class="form-control" id="crossover_hop" name="crossover_hop" placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <label for="6m_hop" class="control-label">6m Timed Hop Test</label>
                                            <input type="number" class="form-control" id="6m_hop" name="6m_hop" placeholder="">
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
                            <option value="0">Todos os alunos</option>

                            @foreach($dados['alunos'] as $aluno)
                                <option value="{{$aluno->id}}">{{$aluno->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                    <h3 class="box-title">Avaliações</h3>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>ALUNO</th>
                                <th>DATA INSERIDA</th>
                                <th>AÇÕES</th>
                            </tr>
                            </thead>
                            <tbody>

                            <!-- TODO: adicionar links e espaço entre ações -->

                            @foreach($dados['bioimpedancias'] as $bioimpedancia)

                                <tr data-toggle="collapse" data-target="#accordion" class="clickable">
                                    <td>{{$bioimpedancia->id}}</td>
                                    <td>{{$bioimpedancia->nome}}</td>
                                    <td>{{$bioimpedancia->data}}</td>
                                    <td><i class="fa fa-edit"></i><i class="fa fa-trash"></i></td>
                                </tr>

                                <tr>
                                    <td colspan="4">
                                        <div id="accordion" class="collapse">

                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <td><p>Peso: <span class="text-dark">{{$bioimpedancia->peso}}</span></p></td>
                                                    <td><p>Altura: <span class="text-dark">{{$bioimpedancia->altura}}</span></p></td>
                                                </tr>
                                                <tr>
                                                    <td><p>%Gordura Atual: <span class="text-dark">{{$bioimpedancia->gordura_atual}}</span></p></td>
                                                    <td><p>Metabolismo Basal: <span class="text-dark">{{$bioimpedancia->metabolismo_basal}}</span></p></td>
                                                </tr>
                                                <tr>
                                                    <td><p>% Água/ G. Visceral: <span class="text-dark">{{$bioimpedancia->agua_gordura_visceral}}</span></p></td>
                                                    <td><p>Massa Magra: <span class="text-dark">{{$bioimpedancia->massa_magra}}</span></p></td>
                                                </tr>
                                                <tr>
                                                    <td><p>Massa Óssea: <span class="text-dark">{{$bioimpedancia->massa_ossea}}</span></p></td>
                                                    <td><p>Freq. Repouso: <span class="text-dark">{{$bioimpedancia->freq_repouso}}</span></p></td>
                                                </tr>
                                                <tr>
                                                    <td><p>PA Sistólica: <span class="text-dark">{{$bioimpedancia->pa_sistolica}}</span></p></td>
                                                    <td><p>PA Diastólica: <span class="text-dark">{{$bioimpedancia->pa_diastolica}}</span></p></td>
                                                </tr>
                                                <tr>
                                                    <td><p>Hrvariability Recovery Points: <span class="text-dark">{{$bioimpedancia->hrvariability_recovery}}</span></p></td>
                                                    <td><p>rMSSD: <span class="text-dark">{{$bioimpedancia->rmssd}}</span></p></td>
                                                </tr>
                                                <tr>
                                                    <td><p>Romain Chair Bilateral: <span class="text-dark">{{$bioimpedancia->romain_chair_bi}}</span></p></td>
                                                    <td><p>Romain Chair Unilateral: <span class="text-dark">{{$bioimpedancia->romain_chair_uni}}</span></p></td>
                                                </tr>
                                                <tr>
                                                    <td><p>CMJ: <span class="text-dark">{{$bioimpedancia->cmj}}</span></p></td>
                                                    <td><p>SJ: <span class="text-dark">{{$bioimpedancia->sj}}</span></p></td>
                                                </tr>
                                                <tr>
                                                    <td><p>RSI Stifness: <span class="text-dark">{{$bioimpedancia->rsi_stifness}}</span></p></td>
                                                    <td><p>RSI Drop Jump: <span class="text-dark">{{$bioimpedancia->rsi_drop_jump}}</span></p></td>
                                                </tr>

                                                <tr>
                                                    <td><p>Índice de Bosco: <span class="text-dark">{{$bioimpedancia->indice_bosco}}</span></p></td>
                                                    <td><p>Horizontal Jump Test: <span class="text-dark">{{$bioimpedancia->horizontal_jump}}</span></p></td>
                                                </tr>
                                                <tr>
                                                    <td><p>SL Hop for Distance Test: <span class="text-dark">{{$bioimpedancia->sl_hop}}</span></p></td>
                                                    <td><p>Triple Hop Test: <span class="text-dark">{{$bioimpedancia->triple_hop}}</span></p></td>
                                                </tr>

                                                <tr>
                                                    <td><p>Cross Over Hop Test: <span class="text-dark">{{$bioimpedancia->cross_over}}</span></p></td>
                                                    <td><p>6m Timed Hop Test: <span class="text-dark">{{$bioimpedancia->m_timed}}</span></p></td>
                                                </tr>

                                                </tbody>
                                            </table>

                                        </div>
                                    </td>
                                </tr>

                                @endforeach

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