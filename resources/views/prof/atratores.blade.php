@extends('layouts/prof.app')

@section('content')

    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Avaliacoes Biomecanicas</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Início</a></li>
                    <li class="active">Avaliacoes Biomecanicas</li>

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

                                    <form id="adicionaAluno" method="post" action="">

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

                                        <h5 class="modal-title">Atratores - Run</h5>

                                        <hr>

                                        <div class="form-group">
                                            <label for="hip_lock" class="control-label">Hip lock</label>
                                            <input type="text" class="form-control" id="hip_lock" name="hip_lock">
                                        </div>

                                        <div class="form-group">
                                            <label for="retracao_perna" class="control-label">Retracao perna de bal.</label>
                                            <input type="text" class="form-control" id="retracao_perna" name="retracao_perna">
                                        </div>

                                        <div class="form-group">
                                            <label for="fp_from_above" class="control-label">FP from above</label>
                                            <input type="text" class="form-control" id="fp_from_above" name="fp_from_above">
                                        </div>

                                        <div class="form-group">
                                            <label for="positive_running" class="control-label">Positive running</label>
                                            <input type="text" class="form-control" id="positive_running" name="positive_running">
                                        </div>

                                        <div class="form-group">
                                            <label for="vertical_head" class="control-label">Vertical head</label>
                                            <input type="text" class="form-control" id="vertical_head" name="vertical_head">
                                        </div>

                                        <h5 class="modal-title">Atratores - COD</h5>

                                        <hr>

                                        <div class="form-group">
                                            <label for="ub_first" class="control-label">Ub first</label>
                                            <input type="text" class="form-control" id="ub_first" name="ub_first">
                                        </div>

                                        <div class="form-group">
                                            <label for="rot_tronco_extensao" class="control-label">Rot tronco + extensao</label>
                                            <input type="text" class="form-control" id="rot_tronco_extensao" name="rot_tronco_extensao">
                                        </div>

                                        <div class="form-group">
                                            <label for="desaceleracao" class="control-label">Desaceleracao</label>
                                            <input type="text" class="form-control" id="desaceleracao" name="desaceleracao">
                                        </div>

                                        <h5 class="modal-title">Atratores - Aceleracao</h5>

                                        <hr>

                                        <div class="form-group">
                                            <label for="power_line" class="control-label">Power line</label>
                                            <input type="text" class="form-control" id="power_line" name="power_line">
                                        </div>

                                        <div class="form-group">
                                            <label for="tronco_inclin_frente" class="control-label">Tronco inclin a frente</label>
                                            <input type="text" class="form-control" id="tronco_inclin_frente"name="tronco_inclin_frente">
                                        </div>

                                        <div class="form-group">
                                            <label for="knee_drive" class="control-label">Knee drive</label>
                                            <input type="text" class="form-control" id="knee_drive" name="knee_drive">
                                        </div>

                                        <div class="form-group">
                                            <label for="estrategia_rot_ext" class="control-label">Estrategia rot./ext.</label>
                                            <input type="text" class="form-control" id="estrategia_rot_ext" name="estrategia_rot_ext">
                                        </div>

                                        <div class="form-group">
                                            <label for="aplicacao_for_hor" class="control-label">Aplicacao de forca hor.</label>
                                            <input type="text" class="form-control" id="aplicacao_for_hor" name="aplicacao_for_hor">
                                        </div>

                                        <h5 class="modal-title">Biomecanica Run</h5>

                                        <hr>

                                        <p>T. de contato (s)</p>
                                        <div class="form-group">
                                            <label for="t_contato_dir" class="control-label">Direito</label>
                                            <input type="text" class="form-control" id="t_contato_dir" name="t_contato_dir">
                                            <label for="t_contato_es" class="control-label">Esquerdo</label>
                                            <input type="text" class="form-control" id="t_contato_es" name="t_contato_es">
                                        </div>

                                        <p>T. de voo (s)</p>
                                        <div class="form-group">
                                            <label for="t_de_voo_dir" class="control-label">Direito</label>
                                            <input type="text" class="form-control" id="t_de_voo_dir" name="t_de_voo_dir">
                                            <label for="t_de_voo_es" class="control-label">Esquerdo</label>
                                            <input type="text" class="form-control" id="t_de_voo_es" name="t_de_voo_es">
                                        </div>

                                        <p>Frequencia (Hz)</p>
                                        <div class="form-group">
                                            <label for="frequencia_dir" class="control-label">Direito</label>
                                            <input type="text" class="form-control" id="frequencia_dir" name="frequencia_dir">
                                            <label for="frequencia_es" class="control-label">Esquerdo</label>
                                            <input type="text" class="form-control" id="frequencia_es" name="frequencia_es">
                                        </div>

                                        <p> Oscilacao vert. (m)</p>
                                        <div class="form-group">
                                            <label for="oscilacao_dir" class="control-label">Direito</label>
                                            <input type="text" class="form-control" id="oscilacao_dir" name="oscilacao_dir">
                                            <label for="oscilacao_es" class="control-label">Esquerdo</label>
                                            <input type="text" class="form-control" id="oscilacao_es" name="oscilacao_es">
                                        </div>

                                        <p>F. max. relativa (BW)</p>
                                        <div class="form-group">
                                            <label for="f_max_dir" class="control-label">Direito</label>
                                            <input type="text" class="form-control" id="f_max_dir" name="f_max_dir">
                                            <label for="f_max_es" class="control-label">Esquerdo</label>
                                            <input type="text" class="form-control" id="f_max_es" name="f_max_es">
                                        </div>

                                        <p>Leg stiff (KN/m)</p>
                                        <div class="form-group">
                                            <label for="leg_stiff_dir" class="control-label">Direito</label>
                                            <input type="text" class="form-control" id="leg_stiff_dir" name="leg_stiff_dir">
                                            <label for="leg_stiff_es" class="control-label">Esquerdo</label>
                                            <input type="text" class="form-control" id="leg_stiff_es" name="leg_stiff_es">
                                        </div>

                                        <p>Ang. de pronacao</p>
                                        <div class="form-group">
                                            <label for="pronacao_dir" class="control-label">Direito</label>
                                            <input type="text" class="form-control" id="pronacao_dir" name="pronacao_dir">
                                            <label for="pronacao_es" class="control-label">Esquerdo</label>
                                            <input type="text" class="form-control" id="pronacao_es" name="pronacao_es">
                                        </div>

                                        <p>Strike</p>
                                        <div class="form-group">
                                            <label for="strike_dir" class="control-label">Direito</label>
                                            <input type="text" class="form-control" id="strike_dir" name="strike_dir">
                                            <label for="strike_es" class="control-label">Esquerdo</label>
                                            <input type="text" class="form-control" id="strike_es" name="strike_es">
                                        </div>

                                        <p>Tibia</p>
                                        <div class="form-group">
                                            <label for="tibia_dir" class="control-label">Direito</label>
                                            <input type="text" class="form-control" id="tibia_dir" name="tibia_dir">
                                            <label for="tibia_es" class="control-label">Esquerdo</label>
                                            <input type="text" class="form-control" id="tibia_es" name="tibia_es">
                                        </div>

                                        <div class="form-group">
                                            <label for="ass_passada" class="control-label">% Ass. passada</label>
                                            <input type="text" class="form-control" id="ass_passada" name="ass_passada">
                                        </div>

                                        <h5 class="modal-title">Testes de performance geral</h5>

                                        <hr>

                                        <div class="form-group">
                                            <label for="romain_chair_bi" class="control-label">Romain chair bil.</label>
                                            <input type="text" class="form-control" id="romain_chair_bi" name="romain_chair_bi">
                                        </div>

                                        <p>Romain chair unil.</p>
                                        <div class="form-group">
                                            <label for="romain_chair_uni_dir" class="control-label">Direito</label>
                                            <input type="text" class="form-control" id="romain_chair_uni_dir" name="romain_chair_uni_dir">
                                            <label for="romain_chair_uni_es" class="control-label">Esquerdo</label>
                                            <input type="text" class="form-control" id="romain_chair_uni_es" name="romain_chair_uni_es">
                                        </div>

                                        <p>Iso reto femoral</p>
                                        <div class="form-group">
                                            <label for="iso_reto_dir" class="control-label">Direito</label>
                                            <input type="text" class="form-control" id="iso_reto_dir" name="iso_reto_dir">
                                            <label for="iso_reto_es" class="control-label">Esquerdo</label>
                                            <input type="text" class="form-control" id="iso_reto_es" name="iso_reto_es">
                                        </div>

                                        <div class="form-group">
                                            <label for="hip_thrust" class="control-label">Hip thrust</label>
                                            <input type="text" class="form-control" id="hip_thrust" name="hip_thrust">
                                        </div>

                                        <p>Split jump</p>
                                        <div class="form-group">
                                            <label for="split_jump_dir" class="control-label">Direito</label>
                                            <input type="text" class="form-control" id="split_jump_dir" name="split_jump_dir">
                                            <label for="split_jump_es" class="control-label">Esquerdo</label>
                                            <input type="text" class="form-control" id="split_jump_es" name="split_jump_es">
                                        </div>

                                        <div class="form-group">
                                            <label for="cmj" class="control-label">CMJ</label>
                                            <input type="text" class="form-control" id="cmj" name="cmj">
                                        </div>

                                        <div class="form-group">
                                            <label for="sj" class="control-label">SJ</label>
                                            <input type="text" class="form-control" id="sj" name="sj">
                                        </div>

                                        <div class="form-group">
                                            <label for="rsi_stifness" class="control-label">RSI stifness</label>
                                            <input type="text" class="form-control" id="rsi_stifness" name="rsi_stifness">
                                        </div>

                                        <div class="form-group">
                                            <label for="rsi_drop_jump" class="control-label">RSI drop jump</label>
                                            <input type="text" class="form-control" id="rsi_drop_jump" name="rsi_drop_jump">
                                        </div>

                                        <div class="form-group">
                                            <label for="indice_bosco" class="control-label">Indice de bosco</label>
                                            <input type="text" class="form-control" id="indice_bosco" name="indice_bosco">
                                        </div>

                                        <div class="form-group">
                                            <label for="horizontal_jump" class="control-label">Horizontal jump test</label>
                                            <input type="text" class="form-control" id="horizontal_jump" name="horizontal_jump">
                                        </div>

                                        <p>SL hop for distance test</p>
                                        <div class="form-group">
                                            <label for="sl_hop_test_dir" class="control-label">Direito</label>
                                            <input type="text" class="form-control" id="sl_hop_test_dir" name="sl_hop_test_dir">
                                            <label for="sl_hop_test_es" class="form-control">Esquerdo</label>
                                            <input type="text" class="form-control" id="sl_hop_test_es" name="sl_hop_test_es">
                                        </div>

                                        <p>Triple hop test</p>
                                        <div class="form-group">
                                            <label for="triple_hop_dir" class="control-label">Direito</label>
                                            <input type="text" class="form-control" id="triple_hop_dir" name="triple_hop_dir">
                                            <label for="triple_hop_es" class="control-label">Esquerdo</label>
                                            <input type="text" class="form-control" id="triple_hop_es" name="triple_hop_es">
                                        </div>

                                        <p>Cross over hop test</p>
                                        <div class="form-group">
                                            <label for="cross_over_dir" class="control-label">Direito</label>
                                            <input type="text" class="form-control" id="cross_over_dir" name="cross_over_dir">
                                            <label for="cross_over_es" class="control-label">Esquerdo</label>
                                            <input type="text" class="form-control" id="cross_over_es" name="cross_over_es">
                                        </div>

                                        <p>6m Timed hop test</p>
                                        <div class="form-group">
                                            <label for="6m_timed_dir" class="control-label">Direito</label>
                                            <input type="text" class="form-control" id="6m_timed_dir" name="6m_timed_dir">
                                            <label for="6m_timed_es" class="control-label">Esquerdo</label>
                                            <input type="text" class="form-control" id="6m_timed_es" name="6m_timed_es">
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
                    <h3 class="box-title">Avaliacoes Biomecanicas cadastradas</h3>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>NOME</th>
                                <th>ALUNO</th>
                                <th>DATA INSERIDA</th>
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
                                <td><i class="fa fa-edit"></i><i class="fa fa-trash"></i></td>
                            </tr>

                            <tr>
                                <td colspan="6">
                                    <div id="accordion" class="collapse">
                                        <h4>ATRATORES - RUN</h4>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="text-dark">Hip lock</th>
                                                <th class="text-dark">Retracao perna de bal.</th>
                                                <th class="text-dark">Fp from above</th>
                                                <th class="text-dark">Positive running</th>
                                                <th class="text-dark">Vertical head</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>30</td>
                                                <td>10</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <h4>ATRATORES - COD</h4>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="text-dark">Ub first</th>
                                                <th class="text-dark">Rot. tronco + extensao</th>
                                                <th class="text-dark">Desaceleracao</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>3</td>
                                                <td>3</td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        <h4>ATRATORES - ACELERACAO</h4>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="text-dark">Power line</th>
                                                <th class="text-dark">Tronco inclin. a frente</th>
                                                <th class="text-dark">Knee drive</th>
                                                <th class="text-dark">Estrategia de rot./ext.</th>
                                                <th class="text-dark">Aplicacao de forca hor.</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>3</td>
                                                <td>3</td>
                                                <td>4</td>
                                                <td>5</td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        <h4>BIOMECANICA - RUN</h4>

                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th> </th>
                                                <th class="text-dark">Direito</th>
                                                <th class="text-dark">Esquerdo</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="text-dark">T. de contato (s)</td>
                                                <td>2.0</td>
                                                <td>2.2</td>
                                            </tr>
                                            <tr>
                                                <td class="text-dark">T. de voo (s)</td>
                                                <td>3.0</td>
                                                <td>3.2</td>
                                            </tr>
                                            <tr>
                                                <td class="text-dark">Frequencia (Hz)</td>
                                                <td>2.0</td>
                                                <td>2.2</td>
                                            </tr>
                                            <tr>
                                                <td class="text-dark">Oscilacao vert. (m)</td>
                                                <td>2.0</td>
                                                <td>2.3</td>
                                            </tr>
                                            <tr>
                                                <td class="text-dark">F. max. relativa (bw)</td>
                                                <td>2.0</td>
                                                <td>2.4</td>
                                            </tr>
                                            <tr>
                                                <td class="text-dark">Lef stiff. (KN/m)</td>
                                                <td>2.0</td>
                                                <td>2.0</td>
                                            </tr>
                                            <tr>
                                                <td class="text-dark">Ang. de pronacao</td>
                                                <td>- Ideal 5'</td>
                                                <td>- Ideal 5'</td>
                                            </tr>
                                            <tr>
                                                <td class="text-dark">Strike</td>
                                                <td>- Ideal 5'</td>
                                                <td>- Ideal 5'</td>
                                            </tr>
                                            <tr>
                                                <td class="text-dark">Tibia</td>
                                                <td>- Ideal 10'</td>
                                                <td>- Ideal 10'</td>
                                            </tr>
                                            <tr>
                                                <th class="text-dark">% Ass. passada</th>
                                                <td colspan="2">% -Ideal 10%</td>
                                            </tr>
                                            </tbody>
                                        </table>

                            <h4> TESTES DE PERFORMANCE GERAL</h4>

                            <table class="table">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th class="text-dark">Direito</th>
                                    <th class="text-dark">Esquerdo</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-dark">Romain chair unil.</td>
                                    <td>2.0</td>
                                    <td>3.0</td>
                                </tr>
                                <tr>
                                    <td class="text-dark">Sl hop for distance test</td>
                                    <td>2.9</td>
                                    <td>3.1</td>
                                </tr>
                                <tr>
                                    <td class="text-dark">Triple hop test</td>
                                    <td>2.2</td>
                                    <td>3.2</td>
                                </tr>
                                <tr>
                                    <td class="text-dark">Cross over hop test</td>
                                    <td>2.1</td>
                                    <td>3.9</td>
                                </tr>
                                <tr>
                                    <td class="text-dark">6m Timed hop test</td>
                                    <td>2.9</td>
                                    <td>4.3</td>
                                </tr>
                                <tr>
                                    <td class="text-dark">Romain chair bil.</td>
                                    <td colspan="2">2.3</td>
                                </tr>
                                <tr>
                                    <td class="text-dark">Iso reto femoral</td>
                                    <td colspan="2">3.6</td>
                                </tr>
                                <tr>
                                    <td class="text-dark">Hip thrust</td>
                                    <td colspan="2">3.5</td>
                                </tr>
                                <tr>
                                    <td class="text-dark">Split jump</td>
                                    <td colspan="2">2.1</td>
                                </tr>
                                <tr>
                                    <td class="text-dark">CMJ</td>
                                    <td colspan="2">1.1</td>
                                </tr>
                                <tr>
                                    <td class="text-dark">SJ</td>
                                    <td colspan="2">6.7</td>
                                </tr>
                                <tr>
                                    <td class="text-dark">RSI stifness</td>
                                    <td colspan="2">4.4</td>
                                </tr>
                                <tr>
                                    <td class="text-dark">RSI drop jump</td>
                                    <td colspan="2">5.4</td>
                                </tr>
                                <tr>
                                    <td class="text-dark">Indice de bosco</td>
                                    <td colspan="2">3.2</td>
                                </tr>
                                <tr>
                                    <td class="text-dark">Horizontal jump test</td>
                                    <td colspan="2">3.1</td>
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
    </div>

    @stop