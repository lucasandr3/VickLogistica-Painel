<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="<?=url('frota')?>">Gestão de Frota</a></li>
        <li class="breadcrumb-item active" aria-current="page">Ediçã de Frota</li>
    </ol>
</nav>

<div class="container">
    <div class="btn-group">
        <a href="<?=url('viagens')?>" class="btn btn-outline-primary btn-sm"
            style="margin-top:-25px;float:right;text-transform:uppercase;"><i class="fa fa-arrow-left"></i> Voltar</a>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card card-lg">
                <div class="card-header">
                    <div style="border: 1px solid #ccc;border-radius: 3px;padding: 10px;">
                        <div style="display:flex;justify-content:space-between;margin-bottom: 10px;">
                            <p><strong>ID: </strong><?=$travel['id_travel_step']?></p>
                            <p><strong>Frente: </strong><?=$travel['frente']?></p>
                        </div>
                        <div style="display:flex;justify-content:space-between;">
                            <p class="text-capitalize"><strong>Motorista: </strong><?=$travel['driver']?></p>
                            <p><strong>Frota: </strong><?=$travel['fleet']?></p>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="user-activity">
                        <div class="media">
                            <div class="media-img-wrap"
                                style="background: #22af47;border-radius: 50%;padding:15px;color:white;">
                                <span>01</span>
                            </div>
                            <div class="media-body" style="margin-top: 15px;">
                                <div class="timeline-body">
                                    <i class="fa fa-truck"></i> Saiu da Usina <i class="fa fa-arrow-right"></i>
                                    Em Trânsito <i class="fa fa-arrow-right"></i>
                                    <strong><?=$stepini['date_init']?> hs</strong>
                                </div>
                            </div>
                        </div>

                        <div class="media">
                            <div class="media-img-wrap"
                                style="background: #22af47;border-radius: 50%;padding:15px;color:white;">
                                <span>02</span>
                            </div>
                            <div class="media-body" style="margin-top:15px;">
                                <div class="timeline-panel">


                                    <div class="timeline-body">

                                        <i class="fa fa-truck"></i>
                                        Chegou na Frente: <i class="fa fa-arrow-right"></i> ás
                                        <?=$stepone['date_arrival']?> <i class="fa fa-arrow-right"></i> <i
                                            class="fa fa-clock"></i> Tempo Gasto:
                                        <strong>
                                            <?=calcDifTime(strToDate($stepone['date_init']), strToDate($stepone['date_arrival']), true)?>
                                        </strong>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="media">
                            <div class="media-img-wrap"
                                style="background: #22af47;border-radius: 50%;padding:15px;color:white;">
                                <span>03</span>
                            </div>
                            <div class="media-body" style="margin-top:15px;">
                                <div class="timeline-panel">
                                    <div class="timeline-body">
                                        <i class="fa fa-truck"></i> Saiu da Frente <i class="fa fa-arrow-right"></i>
                                        Em Trânsito <i class="fa fa-arrow-right"></i> ás
                                        <strong><?=$steptwo['date_exit']?> hs</strong>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="media">
                            <div class="media-img-wrap"
                                style="background: #22af47;border-radius: 50%;padding:15px;color:white;">
                                <span>04</span>
                            </div>
                            <div class="media-body" style="margin-top:15px;">
                                <div class="timeline-body">
                                    <i class="fa fa-truck"></i>
                                    Chegou na Balança: <i class="fa fa-arrow-right"></i> ás
                                    <?=$stepthree['date_bal_arrival']?> <i class="fa fa-arrow-right"></i> <i
                                        class="fa fa-clock"></i> Tempo Gasto:
                                    <strong>
                                        <?=calcDifTime(strToDate($stepthree['date_exit']), strToDate($stepthree['date_bal_arrival']), true)?>
                                    </strong>
                                </div>
                            </div>
                        </div>

                        <div class="media">
                            <div class="media-img-wrap"
                                style="background: #22af47;border-radius: 50%;padding:15px;color:white;">
                                <span>05</span>
                            </div>
                            <div class="media-body" style="margin-top:15px;">
                                <div class="timeline-panel">
                                    <div class="timeline-body">
                                        <i class="fa fa-truck"></i> Saiu da Balança <i class="fa fa-arrow-right"></i>
                                        Chegou para Descarregar: <i class="fa fa-arrow-right"></i> ás
                                        <?=$stepfour['date_discharge']?> <i class="fa fa-arrow-right"></i> <i
                                            class="fa fa-clock"></i> Tempo Gasto:
                                        <strong>
                                            <?=calcDifTime(strToDate($stepfour['date_bal_arrival']), strToDate($stepfour['date_discharge']), true)?>
                                        </strong>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="media">
                            <div class="media-img-wrap"
                                style="background: #22af47;border-radius: 50%;padding:15px;color:white;">
                                <span>06</span>
                            </div>
                            <div class="media-body" style="margin-top:15px;">
                                <div class="timeline-body">
                                    <i class="fa fa-truck"></i> Finalizou Descarga <i class="fa fa-arrow-right"></i> ás
                                    <?=$stepfive['date_final']?> <i class="fa fa-arrow-right"></i>
                                    Tempo de Descarga <i class="fa fa-arrow-right"></i>
                                    <strong>
                                        <?=calcDifTime(strToDate($stepfive['date_discharge']), strToDate($stepfive['date_final']), true)?>
                                    </strong>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


</div>