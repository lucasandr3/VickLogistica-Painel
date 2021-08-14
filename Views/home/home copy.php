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
            <!-- <select class="form-control custom-select custom-select-sm mr-15">
                <option selected="">Filtrar por Data</option>
                <option value="1">CRM</option>
                <option value="2">Projects</option>
                <option value="3">Statistics</option>
            </select>
            <select class="form-control custom-select custom-select-sm mr-15">
                <option selected="">USA</option>
                <option value="1">USA</option>
                <option value="2">India</option>
                <option value="3">Australia</option>
            </select> -->

            <input class="form-control" type="date" name="birthday" value="10/24/1984"
                style="font-size: 0.875rem;height: calc(1.8125rem + 4px);">
            <button class="btn btn-success"
                style="margin-left:5px;font-size: 0.875rem;height: calc(1.8125rem + 4px);">Filtrar</button>

        </div>

        <!--        <div class="d-flex">-->
        <!--            <button class="btn btn-sm btn-outline-light btn-wth-icon icon-wthot-bg mr-15 mb-15"><span class="icon-label"><i class="fa fa-envelope-o"></i> </span><span class="btn-text">Email </span></button>-->
        <!--            <button class="btn btn-sm btn-outline-light btn-wth-icon icon-wthot-bg mr-15 mb-15"><span class="icon-label"><i class="fa fa-print"></i> </span><span class="btn-text">Print </span></button>-->
        <!--            <button class="btn btn-sm btn-danger btn-wth-icon icon-wthot-bg mb-15"><span class="icon-label"><i class="fa fa-download"></i> </span><span class="btn-text">Export </span></button>-->
        <!--        </div>-->
    </div>
    <!-- /Title -->
    <!-- <h4 class="mb-10">Pesquisar por data</h4>
    <div class="row mb-30">
        <div class="col-md-3">
            <input class="form-control" type="date" name="birthday" value="10/24/1984">
        </div>
        <div class="col-md-2">
            <button class="btn btn-success">Filtrar Data</button>
        </div>
    </div> -->

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

    <div class="row mb-20">
        <div class="col-xl-12">
            <div class="hk-row">
                <div class="col-lg-12">
                <div id="viagens-atuais">
									<div class="card-title">Viagens em Andamento</div>
									<?php if($travels == null): ?>
										<p style="margin-top:15px;">Não existe Viagens no Momento</p>
									<?php else : ?>	
									<div class="pb-2 pt-4">
										<div style="display: grid;grid-template-columns: 1fr 1fr 1fr 1fr 1fr;">

											<?php foreach($travels as $t) : ?>
                                                
												<?php if($t['init'] == "inicio"): ?>
													<div class="truck-travel" data-toggle="modal" data-target="#inicio<?=$t['id_travel_step']?>" style="display: flex;flex-direction: column;align-items: center;">
														<i class="zmdi zmdi-truck zmdi-hc-3x" style="color:#1572e8;transform: scaleX(-1);"
														 data-toggle="tooltip" data-placement="top" title="" data-original-title="<?=ucwords($t['driver'])?>">
														</i>
														<span style="margin-left:5px;font-size:13px;"><strong>Frota:</strong> <?=$t['fleet']?></span>
														<span style="margin-left:5px;font-size:13px;">Saiu da Usina</span>
														<span style="margin-left:5px;font-size:13px;"><strong><?=$t['frente']?></strong></span>
													</div>

													<div class="modal fade" id="inicio<?=$t['id_travel_step']?>">
													<div class="modal-dialog  modal-lg">
														<div class="modal-content">
														<div class="modal-header" style="border-radius:0px !important;">
															<h4 class="modal-title"><strong>Detalhes da viagem Frota - <?=$t['fleet']?></strong></h4>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">x</span>
															</button>
														</div>
														<div class="modal-body">
														<?php foreach($stepini as $stini) : ?>
															<?php if($t['id_travel_step'] == $stini['id']) : ?>
																<i class="fa fa-truck"></i> Saiu da Usina <i class="fa fa-arrow-right"></i>
																Em Trânsito <i class="fa fa-arrow-right"></i> ás <strong><?=date('H:i:s', strtotime($stini['date_init']))?></strong>
																<div class="TruckLoader"><div class="TruckLoader-cab"></div><div class="TruckLoader-smoke"></div></div><hr />														
															<?php endif; ?>
														<?php endforeach; ?>
														</div>
														<!-- /.modal-content -->
													</div>
													<!-- /.modal-dialog -->
												</div>
												<!-- /.modal -->
												</div> 
												
												<?php elseif($t['front_arrival'] == "arrival"): ?>
													<div class="truck-travel" data-toggle="modal" data-target="#arrival<?=$t['id_travel_step']?>" style="display: flex;flex-direction: column;align-items: center;">
														<i class="zmdi zmdi-truck zmdi-hc-3x text-warning" style="transform: scaleX(-1);" 
															data-toggle="tooltip" data-placement="top" title="" data-original-title="<?=ucwords($t['driver'])?>">
														</i>
														<span style="margin-left:5px;font-size:13px;"><strong>Frota:</strong> <?=$t['fleet']?></span>
														<span style="margin-left:5px;font-size:13px;">Chegou na Frente </span>
														<span style="margin-left:5px;font-size:13px;"><strong><?=$t['frente']?></strong></span>
													</div>

													<div class="modal fade" id="arrival<?=$t['id_travel_step']?>">
													<div class="modal-dialog  modal-lg">
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
																	<?php
																	$hora_inione =  new DateTime($stone['date_init']);
																	$hora_fimone =  new DateTime($stone['date_arrival']);
																	$tempoone = $hora_inione->diff($hora_fimone);  
																	$diferencaone = $tempoone->format('%h:%i:%s');
																	?>

																	<i class="fa fa-truck"></i> Saiu da Usina <i class="fa fa-arrow-right"></i>
																	Em Trânsito <i class="fa fa-arrow-right"></i> ás <strong><?=date('H:i:s', strtotime($stone['date_init']))?></strong>
																	<div class="TruckLoader"><div class="TruckLoader-cab"></div><div class="TruckLoader-smoke"></div></div><hr />

																	<i class="fa fa-truck"></i> Saiu da Usina <i class="fa fa-arrow-right"></i>
																	Chegou na Frente: <i class="fa fa-arrow-right"></i> ás <?=date('H:i:s', strtotime($stone['date_arrival']))?> <i class="fa fa-arrow-right"></i> <i class="fa fa-clock"></i> Tempo Gasto: 
																	<strong>
																	<?php if($diferencaone < '0:0:60') : ?>
																		<?=$diferencaone?> Seg
																	<?php elseif($diferencaone < '0:60:00') : ?>
																		<?=$diferencaone?> Min
																	<?php else : ?>
																		<?=$diferencaone?> Hs    
																	<?php endif; ?>
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

												<?php elseif($t['front_exit'] == "exit"): ?>
													<div class="truck-travel" data-toggle="modal" data-target="#exit<?=$t['id_travel_step']?>" style="display: flex;flex-direction: column;align-items: center;">
														<i class="zmdi zmdi-truck zmdi-hc-3x" style="transform: scaleX(-1);"
															data-toggle="tooltip" data-placement="top" title="" data-original-title="<?=ucwords($t['driver'])?>">
														</i>
														<span style="margin-left:5px;font-size:13px;"><strong>Frota:</strong> <?=$t['fleet']?></span>
														<span style="margin-left:5px;font-size:13px;">Saiu da Frente </span>
														<span style="margin-left:5px;font-size:13px;"><strong><?=$t['frente']?></strong></span>
													</div>

													<div class="modal fade" id="exit<?=$t['id_travel_step']?>">
													<div class="modal-dialog  modal-lg">
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
																	<?php
																	$hora_initwo =  new DateTime($sttwo['date_init']);
																	$hora_fimtwo =  new DateTime($sttwo['date_arrival']);
																	$tempotwo = $hora_initwo->diff($hora_fimtwo);  
																	$diferencatwo = $tempotwo->format('%h:%i:%s');
																	?>

																	<i class="fa fa-truck"></i> Saiu da Usina <i class="fa fa-arrow-right"></i>
																	Em Trânsito <i class="fa fa-arrow-right"></i> ás <strong><?=date('H:i:s', strtotime($sttwo['date_init']))?></strong>
																	<div class="TruckLoader"><div class="TruckLoader-cab"></div><div class="TruckLoader-smoke"></div></div><hr />

																	<i class="fa fa-truck"></i> Saiu da Usina <i class="fa fa-arrow-right"></i>
																	Chegou na Frente: <i class="fa fa-arrow-right"></i> ás <?=date('H:i:s', strtotime($sttwo['date_arrival']))?> <i class="fa fa-arrow-right"></i> <i class="fa fa-clock"></i> Tempo Gasto: 
																	<strong>
																	<?php if($diferencatwo < '0:0:60') : ?>
																		<?=$diferencatwo?> Seg
																	<?php elseif($diferencatwo < '0:60:00') : ?>
																		<?=$diferencatwo?> Min
																	<?php else : ?>
																		<?=$diferencatwo?> Hs    
																	<?php endif; ?>
																	</strong>
																<?php endif; ?>
															<?php endforeach; ?>
															<hr>
															<i class="fa fa-truck"></i> Saiu da Frente <i class="fa fa-arrow-right"></i>
																Em Trânsito <i class="fa fa-arrow-right"></i> ás <strong><?=date('H:i:s', strtotime($sttwo['date_exit']))?></strong>
																<div class="TruckLoader"><div class="TruckLoader-cab"></div><div class="TruckLoader-smoke"></div></div><hr />	
														</div>
														<!-- /.modal-content -->
													</div>
													<!-- /.modal-dialog -->
												</div>
												<!-- /.modal -->
												</div> 

												<?php elseif($t['balance_arrival'] == "bal"): ?>
													<div class="truck-travel" data-toggle="modal" data-target="#bal<?=$t['id_travel_step']?>" style="display: flex;flex-direction: column;align-items: center;">
														<i class="zmdi zmdi-truck zmdi-hc-3x text-danger" style="transform: scaleX(-1);"
															data-toggle="tooltip" data-placement="top" title="" data-original-title="<?=ucwords($t['driver'])?>">
														</i>
														<span style="margin-left:5px;font-size:13px;"><strong>Frota:</strong> <?=$t['fleet']?></span>
														<span style="margin-left:5px;font-size:13px;">Chegou na Balança </span>
														<span style="margin-left:5px;font-size:13px;"><strong><?=$t['frente']?></strong></span>
													</div>

													<div class="modal fade" id="bal<?=$t['id_travel_step']?>">
													<div class="modal-dialog  modal-lg">
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
																	<?php
																	$hora_inithree =  new DateTime($stthree['date_init']);
																	$hora_fimthree =  new DateTime($stthree['date_arrival']);
																	$tempothree = $hora_inithree->diff($hora_fimthree);  
																	$diferencathree = $tempothree->format('%h:%i:%s');
																	?>

																	<i class="fa fa-truck"></i> Saiu da Usina <i class="fa fa-arrow-right"></i>
																	Em Trânsito <i class="fa fa-arrow-right"></i> ás <strong><?=date('H:i:s', strtotime($stthree['date_init']))?></strong>
																	<div class="TruckLoader"><div class="TruckLoader-cab"></div><div class="TruckLoader-smoke"></div></div><hr />

																	<i class="fa fa-truck"></i> Saiu da Usina <i class="fa fa-arrow-right"></i>
																	Chegou na Frente: <i class="fa fa-arrow-right"></i> ás <?=date('H:i:s', strtotime($stthree['date_arrival']))?> <i class="fa fa-arrow-right"></i> <i class="fa fa-clock"></i> Tempo Gasto: 
																	<strong>
																	<?php if($diferencathree < '0:0:60') : ?>
																		<?=$diferencathree?> Seg
																	<?php elseif($diferencathree < '0:60:00') : ?>
																		<?=$diferencathree?> Min
																	<?php else : ?>
																		<?=$diferencathree?> Hs    
																	<?php endif; ?>
																	</strong>
																<?php endif; ?>

																
															<?php endforeach; ?>
															<hr>

															<?php
																	$hora_exit_three =  new DateTime($stthree['date_exit']);
																	$hora_arr_bal =  new DateTime($stthree['date_bal_arrival']);
																	$tempobal = $hora_exit_three->diff($hora_arr_bal);  
																	$diferencabal = $tempobal->format('%h:%i:%s');
																?>

																	<i class="fa fa-truck"></i> Saiu da Frente <i class="fa fa-arrow-right"></i>
																	Chegou na Balança: <i class="fa fa-arrow-right"></i> ás <?=date('H:i:s', strtotime($stthree['date_bal_arrival']))?> <i class="fa fa-arrow-right"></i> <i class="fa fa-clock"></i> Tempo Gasto: 
																	<strong>
																	<?php if($diferencabal < '0:0:60') : ?>
																		<?=$diferencabal?> Seg
																	<?php elseif($diferencabal < '0:60:00') : ?>
																		<?=$diferencabal?> Min
																	<?php else : ?>
																		<?=$diferencabal?> Hs    
																	<?php endif; ?>
																	</strong>
																	<hr>
															
													
														</div>
														<!-- /.modal-content -->
													</div>
													<!-- /.modal-dialog -->
												</div>
												<!-- /.modal -->
												</div> 

												<?php elseif($t['discharge'] == "dis"): ?>
													<div class="truck-travel" data-toggle="modal" data-target="#dis<?=$t['id_travel_step']?>" style="display: flex;flex-direction: column;align-items: center;">
														<i class="zmdi zmdi-truck zmdi-hc-3x" style="transform: scaleX(-1);color:indigo;"
															data-toggle="tooltip" data-placement="top" title="" data-original-title="<?=ucwords($t['driver'])?>">
														</i>
														<span style="margin-left:5px;font-size:13px;"><strong>Frota:</strong> <?=$t['fleet']?></span>
														<span style="margin-left:5px;font-size:13px;">Entrou na Usina </span>
														<span style="margin-left:5px;font-size:13px;"><strong><?=$t['frente']?></strong></span>
													</div>

													<div class="modal fade" id="dis<?=$t['id_travel_step']?>">
													<div class="modal-dialog  modal-lg">
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
																	<?php
																	$hora_inifour =  new DateTime($stfour['date_init']);
																	$hora_fimfour =  new DateTime($stfour['date_arrival']);
																	$tempofour = $hora_inifour->diff($hora_fimfour);  
																	$diferencafour = $tempofour->format('%h:%i:%s');
																	?>

																	<i class="fa fa-truck"></i> Saiu da Usina <i class="fa fa-arrow-right"></i>
																	Em Trânsito <i class="fa fa-arrow-right"></i> ás <strong><?=date('H:i:s', strtotime($stfour['date_init']))?></strong>
																	<div class="TruckLoader"><div class="TruckLoader-cab"></div><div class="TruckLoader-smoke"></div></div><hr />

																	<i class="fa fa-truck"></i> Saiu da Usina <i class="fa fa-arrow-right"></i>
																	Chegou na Frente: <i class="fa fa-arrow-right"></i> ás <?=date('H:i:s', strtotime($stfour['date_arrival']))?> <i class="fa fa-arrow-right"></i> <i class="fa fa-clock"></i> Tempo Gasto: 
																	<strong>
																	<?php if($diferencafour < '0:0:60') : ?>
																		<?=$diferencafour?> Seg
																	<?php elseif($diferencafour < '0:60:00') : ?>
																		<?=$diferencafour?> Min
																	<?php else : ?>
																		<?=$diferencafour?> Hs    
																	<?php endif; ?>
																	</strong>
																<?php endif; ?>		
															<?php endforeach; ?>
															<hr>

															<?php
																	$hora_exit_four =  new DateTime($stfour['date_exit']);
																	$hora_arr_dis =  new DateTime($stfour['date_bal_arrival']);
																	$tempodis = $hora_exit_four->diff($hora_arr_dis);  
																	$diferencadis = $tempodis->format('%h:%i:%s');
																?>

																	<i class="fa fa-truck"></i> Saiu da Frente <i class="fa fa-arrow-right"></i>
																	Chegou na Balança: <i class="fa fa-arrow-right"></i> ás <?=date('H:i:s', strtotime($stfour['date_bal_arrival']))?> <i class="fa fa-arrow-right"></i> <i class="fa fa-clock"></i> Tempo Gasto: 
																	<strong>
																	<?php if($diferencadis < '0:0:60') : ?>
																		<?=$diferencadis?> Seg
																	<?php elseif($diferencadis < '0:60:00') : ?>
																		<?=$diferencadis?> Min
																	<?php else : ?>
																		<?=$diferencadis?> Hs    
																	<?php endif; ?>
																	</strong>
																	<hr>

															<?php
																	$hora_dis_f =  new DateTime($stfour['date_bal_arrival']);
																	$hora_arr_dis =  new DateTime($stfour['date_discharge']);
																	$tempo_dis = $hora_dis_f->diff($hora_arr_dis);  
																	$diferenca_d = $tempo_dis->format('%h:%i:%s');
																?>

																	<i class="fa fa-truck"></i> Saiu da Balança <i class="fa fa-arrow-right"></i>
																	Chegou para Descarregar: <i class="fa fa-arrow-right"></i> ás <?=date('H:i:s', strtotime($stfour['date_discharge']))?> <i class="fa fa-arrow-right"></i> <i class="fa fa-clock"></i> Tempo Gasto: 
																	<strong>
																	<?php if($diferenca_d < '0:0:60') : ?>
																		<?=$diferenca_d?> Seg
																	<?php elseif($diferenca_d < '0:60:00') : ?>
																		<?=$diferenca_d?> Min
																	<?php else : ?>
																		<?=$diferenca_d?> Hs    
																	<?php endif; ?>
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
									<?php endif; ?>
									</div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-title mb-5" style="display:none;" id="title-viagens-olds"></div>
									<div id="viagens-olds" style="display:none;grid-template-columns: 1fr 1fr 1fr 1fr;">
																		
									</div>
									<hr>

                                    <div class="card-title">Viagens Finalizadas</div>	
									<div class="pb-2 pt-4">
										<div style="display: grid;grid-template-columns: 1fr 1fr 1fr 1fr 1fr;">
											<?php foreach($travels as $tt) : ?>
												<?php if($tt['finalized'] == '0') : ?>
													<div class="truck-travel" data-toggle="modal" data-target="#<?=$tt['id_travel_step']?>" style="display: flex;flex-direction: column;align-items: center;">
														<i class="zmdi zmdi-truck zmdi-hc-3x" style="transform: scaleX(-1);color:green;"
															data-toggle="tooltip" data-placement="top" title="" data-original-title="<?=ucwords($tt['driver'])?>"></i>
														<span style="margin-left:5px;font-size:13px;"><strong>Frota:</strong> <?=$tt['fleet']?></span>
														<span style="margin-left:5px;font-size:13px;">Finalizou a Viagem </span>
														<span style="margin-left:5px;font-size:13px;"><strong><?=$tt['frente']?></strong></span>
													</div>
												<?php endif; ?>	

												<div class="modal fade" id="<?=$tt['id_travel_step']?>">
													<div class="modal-dialog  modal-lg">
														<div class="modal-content">
														<div class="modal-header" style="border-radius:0px !important;">
															<h4 class="modal-title">Detalhes da viagem Frota - <?=$tt['fleet']?></h4>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">x</span>
															</button>
														</div>
														<div class="modal-body">
														<?php foreach($stepfive as $stfive) : ?>
																<?php if($tt['id_travel_step'] == $stfive['id_travel_fi']) : ?>
																	<?php
																	$hora_inifive =  new DateTime($stfive['date_init']);
																	$hora_fimfive =  new DateTime($stfive['date_arrival']);
																	$tempofive = $hora_inifive->diff($hora_fimfive);  
																	$diferencafive = $tempofive->format('%h:%i:%s');
																	?>

																	<i class="fa fa-truck"></i> Saiu da Usina <i class="fa fa-arrow-right"></i>
																	Em Trânsito <i class="fa fa-arrow-right"></i> ás <strong><?=date('H:i:s', strtotime($stfive['date_init']))?></strong>
																	<div class="TruckLoader"><div class="TruckLoader-cab"></div><div class="TruckLoader-smoke"></div></div><hr />

																	<i class="fa fa-truck"></i> Saiu da Usina <i class="fa fa-arrow-right"></i>
																	Chegou na Frente: <i class="fa fa-arrow-right"></i> ás <?=date('H:i:s', strtotime($stfive['date_arrival']))?> <i class="fa fa-arrow-right"></i> <i class="fa fa-clock"></i> Tempo Gasto: 
																	<strong>
																	<?php if($diferencafive < '0:0:60') : ?>
																		<?=$diferencafive?> Seg
																	<?php elseif($diferencafive < '0:60:00') : ?>
																		<?=$diferencafive?> Min
																	<?php else : ?>
																		<?=$diferencafive?> Hs    
																	<?php endif; ?>
																	</strong>
																
															<hr>

																<?php
																	$hora_exit_five =  new DateTime($stfive['date_exit']);
																	$hora_arr_bal_five =  new DateTime($stfive['date_bal_arrival']);
																	$tempobalfive = $hora_exit_five->diff($hora_arr_bal_five);  
																	$diferencabalfive = $tempobalfive->format('%h:%i:%s');
																?>

																	<i class="fa fa-truck"></i> Saiu da Frente <i class="fa fa-arrow-right"></i>
																	Chegou na Balança: <i class="fa fa-arrow-right"></i> ás <?=date('H:i:s', strtotime($stfive['date_bal_arrival']))?> <i class="fa fa-arrow-right"></i> <i class="fa fa-clock"></i> Tempo Gasto: 
																	<strong>
																	<?php if($diferencabalfive < '0:0:60') : ?>
																		<?=$diferencabalfive?> Seg
																	<?php elseif($diferencabalfive < '0:60:00') : ?>
																		<?=$diferencabalfive?> Min
																	<?php else : ?>
																		<?=$diferencabalfive?> Hs    
																	<?php endif; ?>
																	</strong>
																	<hr>
															
																<?php
																	$hora_bal_frente_fiv =  new DateTime($stfive['date_bal_arrival']);
																	$hora_arr_fiv =  new DateTime($stfive['date_discharge']);
																	$tempofiv = $hora_bal_frente_fiv->diff($hora_arr_fiv);  
																	$diferencafiv = $tempofiv->format('%h:%i:%s');
																?>

																	<i class="fa fa-truck"></i> Saiu da Balança <i class="fa fa-arrow-right"></i>
																	Chegou para Descarregar: <i class="fa fa-arrow-right"></i> ás <?=date('H:i:s', strtotime($stfive['date_discharge']))?> <i class="fa fa-arrow-right"></i> <i class="fa fa-clock"></i> Tempo Gasto: 
																	<strong>
																	<?php if($diferencafiv < '0:0:60') : ?>
																		<?=$diferencafiv?> Seg
																	<?php elseif($diferencafiv < '0:60:00') : ?>
																		<?=$diferencafiv?> Min
																	<?php else : ?>
																		<?=$diferencafiv?> Hs    
																	<?php endif; ?>
																	</strong>
																	<hr>
																	
																	<?php
																	$hora_in_des =  new DateTime($stfive['date_discharge']);
																	$hora_fim_des =  new DateTime($stfive['date_final']);
																	$tempo_des = $hora_in_des->diff($hora_fim_des);  
																	$diferencades = $tempo_des->format('%h:%i:%s');
																	?>

																	<i class="fa fa-truck"></i> Finalizou Descarga <i class="fa fa-arrow-right"></i> ás <?=date('H:i:s', strtotime($stfive['date_final']))?> <i class="fa fa-arrow-right"></i>
																	Tempo de Descarga <i class="fa fa-arrow-right"></i> 
																	<strong>
																	<?php if($diferencades < '0:0:60') : ?>
																		<?=$diferencades?> Seg
																	<?php elseif($diferencades < '0:60:00') : ?>
																		<?=$diferencades?> Min
																	<?php else : ?>
																		<?=$diferencades?> Hs    
																	<?php endif; ?>
																	</strong>
																	<hr>
																	<?php endif; ?>
																
																<?php endforeach; ?>
																	<!-- calcula media -->
																	<?php
																	$tempos = Array($diferencafive, $diferencabalfive, $diferencafiv, $diferencades);
																	$segundos = 0;
																	foreach ( $tempos as $tempo ){ //percorre o array $tempo
																		list( $h, $m, $s ) = explode( ':', $tempo ); //explode a variavel tempo e coloca as horas em $h, minutos em $m, e os segundos em $s
																		
																		//transforma todas os valores em segundos e add na variavel segundos
																		
																		$segundos += $h * 3600;
																		$segundos += $m * 60;
																		$segundos += $s;
																		
																		}
																		
																		$horas = floor( $segundos / 3600 ); //converte os segundos em horas e arredonda caso nescessario
																		$segundos %= 3600; // pega o restante dos segundos subtraidos das horas
																		$minutos = floor( $segundos / 60 );//converte os segundos em minutos e arredonda caso nescessario
																		$segundos %= 60;// pega o restante dos segundos subtraidos dos minutos
																		
																		$media = "{$horas}:{$minutos}:{$segundos}";
																		
																	?>
																	
																	<h3><i class="fa fa-clock"></i> Tempo Total de Viagem</h3>
																	 <p><i class="fa fa-arrow-right"></i> <?=$media?></p>

																	<a href="<?=BASE_URL?>viagens/timeline/<?=$tt['id_travel_step']?>" class="btn btn-success btn-block" target="_blank"><i class="fa fa-truck"></i> Ir para Viagens</a>
																	
														</div>
														<!-- /.modal-content -->
													</div>
													<!-- /.modal-dialog -->
												</div>
												<!-- /.modal -->
												</div> 

											<?php endforeach; ?>
										</div>		
									</div>
                                    <hr/>  

									<div class="card-title">Caminhões no Pátio de Aguarde</div>	
									<div class="pb-2 pt-4">
										<div style="display: grid;grid-template-columns: 1fr 1fr 1fr 1fr 1fr;">
											<?php foreach($waiting as $w) : ?>
													<?php
														$hora_ini =  new DateTime($w['start']);
														$hora_fim =  new DateTime($w['final']);
														$tempo = $hora_ini->diff($hora_fim);  
														$diferenca = $tempo->format('%h:%i:%s');
													?>
													<div class="truck-travel" data-toggle="modal" data-target="" style="cursor:pointer;display: flex;flex-direction: column;align-items: center;">
														<i class="zmdi zmdi-truck zmdi-hc-3x" style="transform: scaleX(-1);color:#313131;"
															data-toggle="tooltip" data-placement="top" title="" data-original-title="<?=ucwords($w['driver'])?>"></i>
														<span style="margin-left:5px;font-size:13px;"><strong>Frota:</strong> <?=$w['fleet']?></span>
														<span style="margin-left:5px;font-size:13px;"><i class="fa fa-spinner fa-spin"></i> Tempo de Espera => <?=$diferenca?></span>
														<span style="margin-left:5px;font-size:13px;"><strong><?=$w['frente']?></strong></span>
													</div>
											<?php endforeach; ?>
										</div>		
									</div>

  