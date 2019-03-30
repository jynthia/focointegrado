@extends('layouts/prof.app')

@section('content')

    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">PLANEJAMENTO</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Início</a></li>
                    <li class="active">Planejamento</li>

                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">

                    <button type="button" data-toggle="modal" data-target="#myModalPlan" class="btn btn-success pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light"><i class="fa fa-plus fa-fw" aria-hidden="true"></i>Adicionar</button>

                    <div id="myModalPlan" class="modal fade" role="dialog">

                        <div class="modal-dialog">

                            <div class="modal-content">

                                <div class="modal-header">

                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Adicionar Planejamento</h4>

                                </div>

                                <div class="modal-body">

                                    <form id="adicionaPlan" method="post" action="">

                                        <div class="form-group">
                                            <label for="destinatario_id" class="control-label">Destinatário</label>
                                            <select class="form-control" id="destinatario_id" name="destinatario">

                                                {{--@foreach($dados['alunos'] as $aluno)--}}

                                                {{--<option value="{{$aluno->id}}">{{$aluno->nome}}</option>--}}

                                                {{--@endforeach--}}

                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="riscos" class="control-label">Riscos</label>
                                            <input type="text" class="form-control" id="riscos" name="riscos" placeholder="Riscos">
                                        </div>

                                        <div class="form-group">
                                            <label for="metas" class="control-label">Metas</label>
                                            <input type="text" class="form-control" id="metas" name="metas" placeholder="Metas">
                                        </div>
                                        <div class="semana">
                                            <label for="data[semana][0]">Semana 1</label>
                                            <input type="text" name="data[semana][0]" id="data[semana][0]" />
                                        </div>
                                        <a id="add-semana">Adicionar Semana</a>


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
                            {{--<option value="0">Todos os alunos</option>--}}

                            {{--@foreach($dados['alunos'] as $aluno)--}}
                                {{--<option value="{{$aluno->id}}">{{$aluno->nome}}</option>--}}
                            {{--@endforeach--}}
                        </select>
                    </div>
                    <h3 class="box-title">Planejamentos</h3>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>ALUNO/GRUPO</th>
                                <th>DATA INSERIDA</th>
                                <th>RISCOS</th>
                                <th>METAS</th>
                                <th>S1</th>
                                <th>S2</th>
                                <th>S3</th>
                                <th>S4</th>
                                <th>S5</th>
                                <th>S6</th>
                                <th>S7</th>
                                <th>S8</th>
                                <th>S9</th>
                                <th>S10</th>
                                <th>S11</th>
                                <th>S12</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

@stop