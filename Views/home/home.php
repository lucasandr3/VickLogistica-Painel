<!-- <meta http-equiv="refresh" content="20"> -->
<!-- Container -->
<div class="container mt-xl-50 mt-sm-30 mt-15">
    <!-- Title -->
    <div class="hk-pg-header align-items-top">
        <div>
            <h2 class="hk-pg-title font-weight-600 mb-10">
                <?php $hr = date(" H ");
                if($hr >= 12 && $hr<18): ?>
                <span>Boa Tarde, <?=getUser()->nome_user?></span>
                <?php elseif ($hr >= 0 && $hr <12): ?>
                <span>Bom Dia, <?=getUser()->nome_user?></span>
                <?php else: ?>
                <span>Boa Noite, <?=getUser()->nome_user?></span>
                <?php endif;
            ?>
            </h2>
            <p>Aqui você acompanha todos os checklists do dia</p>
        </div>

        <div class="d-flex w-200p">
            <form method="get" class="d-flex">
                <input class="form-control" type="date" name="filter_date"
                    value="<?=($dthf === '') ? date('Y-m-d'): $dthf?>"
                    style="font-size: 0.875rem;height: calc(1.8125rem + 4px);">
                <button class="btn btn-success"
                    style="margin-left:5px;font-size: 0.875rem;height: calc(1.8125rem + 4px);">Filtrar</button>
            </form>
        </div>
    </div>

    <div class="card-category">
        <div style="display: flex;justify-content: space-between;">
            <div style="display: flex;align-items: center;">
                <i class="zmdi zmdi-truck" style="font-size: 40px;color:#1572e8;transform: scaleX(-1);"></i> <span
                    style="margin-left:5px;">Saiu da Usina</span>
            </div>

            <div style="display: flex;align-items: center;">
                <i class="zmdi zmdi-truck" style="font-size: 40px;color:#ffad46;transform: scaleX(-1);"></i> <span
                    style="margin-left:5px;">Chegou na Frente</span>
            </div>

            <div style="display: flex;align-items: center;">
                <i class="zmdi zmdi-truck" style="font-size: 40px;color:#8d9498;transform: scaleX(-1);"></i> <span
                    style="margin-left:5px;">Saiu da Frente</span>
            </div>

            <div style="display: flex;align-items: center;">
                <i class="zmdi zmdi-truck" style="font-size: 40px;color:#f25961;transform: scaleX(-1);"></i> <span
                    style="margin-left:5px;">Chegou na balança</span>
            </div>

            <div style="display: flex;align-items: center;">
                <i class="zmdi zmdi-truck" style="font-size: 40px;color:#4b0082;transform: scaleX(-1);"></i> <span
                    style="margin-left:5px;">Entrou na usina</span>
            </div>

            <div style="display: flex;align-items: center;">
                <i class="zmdi zmdi-truck" style="font-size: 40px;color:#008000;transform: scaleX(-1);"></i> <span
                    style="margin-left:5px;">Viagem finalizada</span>
            </div>
        </div>
        <hr>
    </div>

    <?php if($travels == null): ?>
    <p style="margin-top:15px;">Não existe Viagens no Momento</p>
    <?php else : ?>

    <div class="row">
        <div class="col-xl-2">
            <div class="card card-lg">
                <div class="card-body">
                    <?php foreach($travels as $t) : ?>
                    <?php if($t['init'] == "inicio"): ?>
                    <div class="truck-travel" data-toggle="modal" data-target="#inicio<?=$t['id_travel_step']?>"
                        style="cursor:pointer;display: flex;flex-direction: column;align-items: center;">
                        <i class="zmdi zmdi-truck zmdi-hc-3x" style="color:#1572e8;transform: scaleX(-1);"
                            data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="<?=ucwords($t['driver'])?>">
                        </i>
                        <span style="margin-left:5px;font-size:13px;"><strong>Frota:</strong> <?=$t['fleet']?></span>
                        <span style="margin-left:5px;font-size:13px;"><strong><?=$t['frente']?></strong></span>
                    </div>
                    <hr />

                    <div class="modal fade" id="inicio<?=$t['id_travel_step']?>">
                        <div class="modal-dialog  modal-lg">
                            <div class="modal-content">
                                <div class="modal-header" style="border-radius:0px !important;">
                                    <h4 class="modal-title"><strong>Detalhes da viagem Frota - <?=$t['fleet']?></strong>
                                    </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">x</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <?php foreach($stepini as $stini) : ?>
                                    <?php if($t['id_travel_step'] == $stini['id']) : ?>
                                    <i class="fa fa-truck"></i> Saiu da Usina <i class="fa fa-arrow-right"></i>
                                    Em Trânsito <i class="fa fa-arrow-right"></i> ás
                                    <strong><?=$stini['date_init']?></strong>
                                    <div class="TruckLoader">
                                        <div class="TruckLoader-cab"></div>
                                        <div class="TruckLoader-smoke"></div>
                                    </div>
                                    <hr />
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="col-xl-2">
            <div class="card card-lg">
                <div class="card-body">
                    <?php foreach($travels as $t) : ?>
                    <?php if($t['front_arrival'] == "arrival"): ?>
                    <div class="truck-travel" data-toggle="modal" data-target="#arrival<?=$t['id_travel_step']?>"
                        style="cursor:pointer;display: flex;flex-direction: column;align-items: center;">
                        <i class="zmdi zmdi-truck zmdi-hc-3x text-warning" style="color:#ffad46;transform: scaleX(-1);"
                            data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="<?=ucwords($t['driver'])?>">
                        </i>
                        <span style="margin-left:5px;font-size:13px;"><strong>Frota:</strong> <?=$t['fleet']?></span>
                        <span style="margin-left:5px;font-size:13px;"><strong><?=$t['frente']?></strong></span>
                    </div>
                    <hr />

                    <div class="modal fade" id="arrival<?=$t['id_travel_step']?>">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header" style="border-radius:0px !important;">
                                    <h4 class="modal-title">Detalhes da viagem Frota - <?=$t['fleet']?></h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">x</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <?php foreach($stepone as $stone) : ?>
                                    <?php if($t['id_travel_step'] == $stone['id_travel_ar']) : ?>

                                    <i class="fa fa-truck"></i> Saiu da Usina <i class="fa fa-arrow-right"></i>
                                    Em Trânsito <i class="fa fa-arrow-right"></i> ás
                                    <strong><?=$stone['date_init']?></strong>
                                    <div class="TruckLoader">
                                        <div class="TruckLoader-cab"></div>
                                        <div class="TruckLoader-smoke"></div>
                                    </div>
                                    <hr />

                                    <i class="fa fa-truck"></i> Saiu da Usina <i class="fa fa-arrow-right"></i>
                                    Chegou na Frente: <i class="fa fa-arrow-right"></i> ás <?=$stone['date_arrival']?>
                                    <i class="fa fa-arrow-right"></i> <i class="fa fa-clock"></i> Tempo Gasto:
                                    <strong>
                                        <?=calcDifTime(strToDate($stone['date_init']), strToDate($stone['date_arrival']), true)?>
                                    </strong>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="col-xl-2">
            <div class="card card-lg">
                <div class="card-body">
                    <?php foreach($travels as $t) : ?>
                    <?php if($t['front_exit'] == "exit"): ?>
                    <div class="truck-travel" data-toggle="modal" data-target="#exit<?=$t['id_travel_step']?>"
                        style="cursor:pointer;display: flex;flex-direction: column;align-items: center;">
                        <i class="zmdi zmdi-truck zmdi-hc-3x" style="color:#8d9498;transform: scaleX(-1);"
                            data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="<?=ucwords($t['driver'])?>">
                        </i>
                        <span style="margin-left:5px;font-size:13px;"><strong>Frota:</strong> <?=$t['fleet']?></span>
                        <span style="margin-left:5px;font-size:13px;"><strong><?=$t['frente']?></strong></span>
                    </div>
                    <hr />

                    <div class="modal fade" id="exit<?=$t['id_travel_step']?>">
                        <div class="modal-dialog  modal-xl">
                            <div class="modal-content">
                                <div class="modal-header" style="border-radius:0px !important;">
                                    <h4 class="modal-title">Detalhes da viagem Frota - <?=$t['fleet']?></h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">x</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <?php foreach($steptwo as $sttwo) : ?>
                                    <?php if($t['id_travel_step'] == $sttwo['id_travel_ar']) : ?>

                                    <i class="fa fa-truck"></i> Saiu da Usina <i class="fa fa-arrow-right"></i>
                                    Em Trânsito <i class="fa fa-arrow-right"></i> ás
                                    <strong><?=$sttwo['date_init']?></strong>
                                    <div class="TruckLoader">
                                        <div class="TruckLoader-cab"></div>
                                        <div class="TruckLoader-smoke"></div>
                                    </div>
                                    <hr />

                                    <i class="fa fa-truck"></i> Saiu da Usina <i class="fa fa-arrow-right"></i>
                                    Chegou na Frente: <i class="fa fa-arrow-right"></i> ás <?=$sttwo['date_arrival']?>
                                    <i class="fa fa-arrow-right"></i> <i class="fa fa-clock"></i> Tempo Gasto:
                                    <strong>
                                        <?=calcDifTime(strToDate($sttwo['date_init']), strToDate($sttwo['date_arrival']), true)?>
                                    </strong>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                    <hr>
                                    <i class="fa fa-truck"></i> Saiu da Frente <i class="fa fa-arrow-right"></i>
                                    Em Trânsito <i class="fa fa-arrow-right"></i> ás
                                    <strong><?=$sttwo['date_exit']?></strong>
                                    <div class="TruckLoader">
                                        <div class="TruckLoader-cab"></div>
                                        <div class="TruckLoader-smoke"></div>
                                    </div>
                                    <hr />
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="col-xl-2">
            <div class="card card-lg">
                <div class="card-body">
                    <?php foreach($travels as $t) : ?>
                    <?php if($t['balance_arrival'] == "bal"): ?>
                    <div class="truck-travel" data-toggle="modal" data-target="#bal<?=$t['id_travel_step']?>"
                        style="display: flex;flex-direction: column;align-items: center;">
                        <i class="zmdi zmdi-truck zmdi-hc-3x" style="color:#f25961;transform: scaleX(-1);"
                            data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="<?=ucwords($t['driver'])?>">
                        </i>
                        <span style="margin-left:5px;font-size:13px;"><strong>Frota:</strong> <?=$t['fleet']?></span>
                        <span style="margin-left:5px;font-size:13px;"><strong><?=$t['frente']?></strong></span>
                    </div>

                    <div class="modal fade" id="bal<?=$t['id_travel_step']?>">
                        <div class="modal-dialog  modal-xl">
                            <div class="modal-content">
                                <div class="modal-header" style="border-radius:0px !important;">
                                    <h4 class="modal-title">Detalhes da viagem Frota - <?=$t['fleet']?></h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">x</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <?php foreach($stepthree as $stthree) : ?>
                                    <?php if($t['id_travel_step'] == $stthree['id_travel_bal']) : ?>

                                    <i class="fa fa-truck"></i> Saiu da Usina <i class="fa fa-arrow-right"></i>
                                    Em Trânsito <i class="fa fa-arrow-right"></i> ás
                                    <strong><?=$stthree['date_init']?></strong>
                                    <div class="TruckLoader">
                                        <div class="TruckLoader-cab"></div>
                                        <div class="TruckLoader-smoke"></div>
                                    </div>
                                    <hr />

                                    <i class="fa fa-truck"></i> Saiu da Usina <i class="fa fa-arrow-right"></i>
                                    Chegou na Frente: <i class="fa fa-arrow-right"></i> ás <?=$stthree['date_arrival']?>
                                    <i class="fa fa-arrow-right"></i> <i class="fa fa-clock"></i> Tempo Gasto:
                                    <strong>
                                        <?=calcDifTime(strToDate($stthree['date_init']), strToDate($stthree['date_arrival']), true)?>
                                    </strong>
                                    <?php endif; ?>


                                    <?php endforeach; ?>
                                    <hr>

                                    <i class="fa fa-truck"></i> Saiu da Frente <i class="fa fa-arrow-right"></i>
                                    Chegou na Balança: <i class="fa fa-arrow-right"></i> ás
                                    <?=$stthree['date_bal_arrival']?> <i class="fa fa-arrow-right"></i> <i
                                        class="fa fa-clock"></i> Tempo Gasto:
                                    <strong>
                                        <?=calcDifTime(strToDate($stthree['date_exit']), strToDate($stthree['date_bal_arrival']), true)?>
                                    </strong>
                                    <hr>


                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="col-xl-2">
            <div class="card card-lg">
                <div class="card-body">
                    <?php foreach($travels as $t) : ?>
                    <?php if($t['discharge'] == "dis"): ?>
                    <div class="truck-travel" data-toggle="modal" data-target="#dis<?=$t['id_travel_step']?>"
                        style="display: flex;flex-direction: column;align-items: center;">
                        <i class="zmdi zmdi-truck zmdi-hc-3x" style="transform: scaleX(-1);color:#4b0082;"
                            data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="<?=ucwords($t['driver'])?>">
                        </i>
                        <span style="margin-left:5px;font-size:13px;"><strong>Frota:</strong> <?=$t['fleet']?></span>
                        <span style="margin-left:5px;font-size:13px;"><strong><?=$t['frente']?></strong></span>
                    </div>

                    <div class="modal fade" id="dis<?=$t['id_travel_step']?>">
                        <div class="modal-dialog  modal-xl">
                            <div class="modal-content">
                                <div class="modal-header" style="border-radius:0px !important;">
                                    <h4 class="modal-title">Detalhes da viagem Frota - <?=$t['fleet']?></h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">x</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <?php foreach($stepfour as $stfour) : ?>
                                    <?php if($t['id_travel_step'] == $stfour['id_travel_dis']) : ?>

                                    <i class="fa fa-truck"></i> Saiu da Usina <i class="fa fa-arrow-right"></i>
                                    Em Trânsito <i class="fa fa-arrow-right"></i> ás
                                    <strong><?=$stfour['date_init']?></strong>
                                    <div class="TruckLoader">
                                        <div class="TruckLoader-cab"></div>
                                        <div class="TruckLoader-smoke"></div>
                                    </div>
                                    <hr />

                                    <i class="fa fa-truck"></i> Saiu da Usina <i class="fa fa-arrow-right"></i>
                                    Chegou na Frente: <i class="fa fa-arrow-right"></i> ás <?=$stfour['date_arrival']?>
                                    <i class="fa fa-arrow-right"></i> <i class="fa fa-clock"></i> Tempo Gasto:
                                    <strong>
                                        <?=calcDifTime(strToDate($stfour['date_init']), strToDate($stfour['date_arrival']), true)?>
                                    </strong>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                    <hr>

                                    <i class="fa fa-truck"></i> Saiu da Frente <i class="fa fa-arrow-right"></i>
                                    Chegou na Balança: <i class="fa fa-arrow-right"></i> ás
                                    <?=$stfour['date_bal_arrival']?> <i class="fa fa-arrow-right"></i> <i
                                        class="fa fa-clock"></i> Tempo Gasto:
                                    <strong>
                                        <?=calcDifTime(strToDate($stfour['date_exit']), strToDate($stfour['date_bal_arrival']), true)?>
                                    </strong>
                                    <hr>

                                    <i class="fa fa-truck"></i> Saiu da Balança <i class="fa fa-arrow-right"></i>
                                    Chegou para Descarregar: <i class="fa fa-arrow-right"></i> ás
                                    <?=$stfour['date_discharge']?> <i class="fa fa-arrow-right"></i> <i
                                        class="fa fa-clock"></i> Tempo Gasto:
                                    <strong>
                                        <?=calcDifTime(strToDate($stfour['date_bal_arrival']), strToDate($stfour['date_discharge']), true)?>
                                    </strong>
                                    <hr>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="col-xl-2">
            <div class="card card-lg">
                <div class="card-body">
                    <?php foreach($travels as $t) : ?>
                    <?php if($t['finalized'] == '0'): ?>
                    <a href="https://vicklogistica.log.br/painel/viagens/timeline/<?=$t['id_travel_step']?>"
                        target="_blank" style="color: #6f7a7f;">
                        <div class="truck-travel" data-toggle="modal" data-target="#<?=$t['id_travel_step']?>"
                            style="cursor:pointer;display: flex;flex-direction: column;align-items: center;">
                            <i class="zmdi zmdi-truck zmdi-hc-3x" style="transform: scaleX(-1);color:#008000;"
                                data-toggle="tooltip" data-placement="top" title=""
                                data-original-title="<?=ucwords($t['driver'])?>"></i>
                            <span style="margin-left:5px;font-size:13px;"><strong>Frota:</strong>
                                <?=$t['fleet']?></span>
                            <span style="margin-left:5px;font-size:13px;"><strong><?=$t['frente']?></strong></span>
                        </div>
                    </a>
                    <hr />
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <hr />

    <?php if($waiting == null): ?>
    <h5 class="card-title">Caminhões no Pátio de Aguarde</h5>
    <p style="margin-top:15px;">Não existe Caminhões no pátio de espera</p>
    <?php else : ?>

    <div class="row">
        <div class="col-xl-12">
            <h5 class="card-title">Caminhões no Pátio de Aguarde</h5>
            <div class="pb-2 pt-4">
                <div style="display: grid;grid-template-columns: 1fr 1fr 1fr 1fr 1fr;">
                    <?php foreach($waiting as $w) : ?>
                    <?php if($w['final'] === null): ?>
                    <div class="truck-travel" data-toggle="modal" data-target=""
                        style="cursor:pointer;display: flex;flex-direction: column;align-items: center;">
                        <i class="zmdi zmdi-truck zmdi-hc-3x" style="transform: scaleX(-1);color:#313131;"
                            data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="<?=ucwords($w['driver'])?>"></i>
                        <span style="margin-left:5px;font-size:13px;"><strong>Frota:</strong> <?=$w['fleet']?></span>
                        <span style="margin-left:5px;font-size:13px;text-align:center;"><i
                                class="fa fa-spinner fa-spin"></i> Em Espera desde: <?=$w['start']?></span>
                    </div>
                    <?php else: ?>
                    <?php
                                    $hora_ini =  new DateTime(strToDate($w['start']));
                                    $hora_fim =  new DateTime(strToDate($w['final']));
                                    $tempo = $hora_ini->diff($hora_fim);  
                                    $diferenca = $tempo->format('%h:%i:%s');
                                ?>
                    <div class="truck-travel" data-toggle="modal" data-target=""
                        style="cursor:pointer;display: flex;flex-direction: column;align-items: center;">
                        <i class="zmdi zmdi-truck zmdi-hc-3x" style="transform: scaleX(-1);color:#313131;"
                            data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="<?=ucwords($w['driver'])?>"><i class="fa fa-clock-o fa-custom"
                                style="top:10px;left:8px;font-size:15px;"></i></i>
                        <span style="margin-left:5px;font-size:13px;"><strong>Frota:</strong> <?=$w['fleet']?></span>
                        <span style="margin-left:5px;font-size:13px;text-align:center;">Tempo de Espera:
                            <?=ftrTime($diferenca)?></span>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <hr />

    <div class="row mb-20">
        <div class="col-xl-12">
            <h5 class="card-title">Caminhões que estão em Manutenção</h5>
            <div class="pb-2 pt-4">
                <div style="display: grid;grid-template-columns: 1fr 1fr 1fr 1fr 1fr;">
                    <?php foreach($tr_man as $m) : ?>
                    <div class="truck-travel" data-toggle="modal" data-target=""
                        style="cursor:pointer;display: flex;flex-direction: column;align-items: center;">
                        <i class="zmdi zmdi-truck zmdi-hc-3x" style="transform: scaleX(-1);color:#f83f37;"
                            data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="<?=json_decode($m['manutencao_json'])->descricao?>"><i
                                class="fa fa-wrench fa-custom"></i></i>
                        <span style="margin-left:5px;font-size:13px;"><strong>Frota:</strong> <?=$w['fleet']?></span>
                        <span style="margin-left:5px;font-size:13px;text-align:center;">Data de Inicio:
                            <?=json_decode($m['manutencao_json'])->hora?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <style>
    .fa-custom {
        color: #fff;
        position: absolute;
        top: 8px;
        left: 6px;
        right: 0;
        bottom: 0;
        font-size: 17px;
    }
    </style>