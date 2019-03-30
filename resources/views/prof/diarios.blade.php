@extends('layouts/prof.app')

@section('content')

    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">DIÁRIOS</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Início</a></li>
                    <li class="active">Diários</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">

                    <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                        <select class="form-control pull-right row b-none">
                            <option value="0">Todos os alunos</option>
                            {{--TODO: ADICIONAR MODALIDADES--}}
                        </select>
                    </div>

                    <h3 class="box-title">Alunos</h3>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ALUNO</th>
                                    <th>MODALIDADE</th>
                                    <th>ÚLTIMO TREINO</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr onclick="document.location = 'diarios/1';" class="clickable">
                                    <td>aaa</td>
                                    <td>aaaaa</td>
                                    <td>aaaaaaaaaa</td>
                                    <td>aiojoijfosdijfosidjfois</td>
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
                    <h3 class="box-title">Últimas atividades</h3>
                                <ul class="timeline">
                                    <li>
                                        <div class="timeline-badge"><i class="fa fa-clock-o"></i></div>
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <h4 class="timeline-title" data-toggle="collapse" data-target="#accordion" class="clickable">Fit - Cinthia Campos</h4>
                                                <p><small class="text-muted">23/10/2019</small></p>
                                            </div>
                                            <div id="accordion" class="collapse timeline-body">
                                                <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-inverted">
                                        <div class="timeline-badge"><i class="fa fa-clock-o"></i></div>
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <h4 class="timeline-title" data-toggle="collapse" data-target="#accordion" class="clickable">Fit - Cinthia Campos</h4>
                                                <p><small class="text-muted">23/10/2019</small></p>
                                            </div>
                                            <div id="accordion" class="collapse timeline-body">
                                                <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-badge"><i class="fa fa-clock-o"></i></div>
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <h4 class="timeline-title" data-toggle="collapse" data-target="#accordion" class="clickable">Fit - Cinthia Campos</h4>
                                                <p><small class="text-muted">23/10/2019</small></p>
                                            </div>
                                            <div id="accordion" class="collapse timeline-body">
                                                <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                </div>
            </div>
        </div>
    </div>

    @stop