<!-- <meta HTTP-EQUIV='refresh' CONTENT='20'> -->
<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
								<h5 class="text-white op-7 mb-2">Logística</h5>
							</div>

							<div class="ml-md-auto py-2 py-md-0" style="display:flex;">
								<!-- <a href="<?=BASE_URL?>produto" class="btn btn-white btn-border btn-round mr-2">Produtos</a> -->
								
									<input type="date" id="inpi-data-travel" placeholder="filtrar por data..." style="height: 44px;
										border-radius: 5px;border: none;outline: none;padding: 10px;border-top-right-radius: 0px;
										border-bottom-right-radius: 0px;" 
									/>
									<button onclick="travelsDateHome()" class="btn btn-success" style="border-top-left-radius:0px;border-bottom-left-radius:0px;background-color:#4CAF50!important;border:#4CAF50!important;color:white;">Filtrar por data</button>
								
							</div>
						</div>
					</div>
				</div>

				<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-title">Frentes - <span style="font-size:15px;">Para ver os detalhes da viagem clique no caminhão</span></div>
									<hr>
									<div class="card-category">
										<div style="display: flex;justify-content: space-between;">
											<div style="display: flex;align-items: center;">
												<i class="fas fa-truck-moving fa-2x text-primary" style="transform: scaleX(-1);"></i> <span style="margin-left:5px;">Saiu da Usina</span>
											</div>

											<div style="display: flex;align-items: center;">
												<i class="fas fa-truck-moving fa-2x text-warning" style="transform: scaleX(-1);"></i> <span style="margin-left:5px;">Chegou na Frente</span>
											</div>

											<div style="display: flex;align-items: center;">
												<i class="fas fa-truck-moving fa-2x" style="transform: scaleX(-1);"></i> <span style="margin-left:5px;">Saiu da Frente</span>
											</div>

											<div style="display: flex;align-items: center;">
												<i class="fas fa-truck-moving fa-2x text-danger" style="transform: scaleX(-1);"></i> <span style="margin-left:5px;">Chegou na balança</span>
											</div>

											<div style="display: flex;align-items: center;">
												<i class="fas fa-truck-moving fa-2x" style="transform: scaleX(-1);color: indigo;"></i> <span style="margin-left:5px;">Entrou na usina</span>
											</div>

											<div style="display: flex;align-items: center;">
												<i class="fas fa-truck-moving fa-2x" style="transform: scaleX(-1);color: green;"></i> <span style="margin-left:5px;">Viagem finalizada</span>
											</div>
										</div>
										<hr>
									</div>
									<div id="viagens-atuais">
									<div class="card-title">Viagens em Andamento</div>
									<?php if($travels == null): ?>
										<p style="margin-top:15px;">Não existe Viagens no Momento</p>
									<?php else : ?>	
									<div class="pb-2 pt-4">
										<div style="display: grid;grid-template-columns: 1fr 1fr 1fr 1fr 1fr;">

											<?php foreach($travels as $t) : ?>
												<?php if($t['init'] == "inicio"): ?>
													<div class="truck-travel" data-toggle="modal" data-target="#inicio<?=$t['id_travel_step']?>">
														<i class="fas fa-truck-moving fa-3x text-primary" style="transform: scaleX(-1);"
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
													<div class="truck-travel" data-toggle="modal" data-target="#arrival<?=$t['id_travel_step']?>">
														<i class="fas fa-truck-moving fa-3x text-warning" style="transform: scaleX(-1);" 
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
													<div class="truck-travel" data-toggle="modal" data-target="#exit<?=$t['id_travel_step']?>">
														<i class="fas fa-truck-moving fa-3x" style="transform: scaleX(-1);"
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
													<div class="truck-travel" data-toggle="modal" data-target="#bal<?=$t['id_travel_step']?>">
														<i class="fas fa-truck-moving fa-3x text-danger" style="transform: scaleX(-1);"
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
													<div class="truck-travel" data-toggle="modal" data-target="#dis<?=$t['id_travel_step']?>">
														<i class="fas fa-truck-moving fa-3x" style="transform: scaleX(-1);color:indigo;"
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
									<div class="card-title mb-5" style="display:none;" id="title-viagens-olds"></div>
									<div id="viagens-olds" style="display:none;grid-template-columns: 1fr 1fr 1fr 1fr;">
																		
									</div>
									<hr>
									<div class="card-title">Viagens Finalizadas</div>	
									<div class="pb-2 pt-4">
										<div style="display: grid;grid-template-columns: 1fr 1fr 1fr 1fr 1fr;">
											<?php foreach($travels as $tt) : ?>
												<?php if($tt['finalized'] == '0') : ?>
													<div class="truck-travel" data-toggle="modal" data-target="#<?=$tt['id_travel_step']?>">
														<i class="fas fa-truck-moving fa-3x" style="transform: scaleX(-1);color:green;"
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
													<div class="truck-travel" data-toggle="modal" data-target="">
														<i class="fas fa-truck-moving fa-3x" style="transform: scaleX(-1);color:#313131;"
															data-toggle="tooltip" data-placement="top" title="" data-original-title="<?=ucwords($w['driver'])?>"></i>
														<span style="margin-left:5px;font-size:13px;"><strong>Frota:</strong> <?=$w['fleet']?></span>
														<span style="margin-left:5px;font-size:13px;"><i class="fa fa-spinner fa-spin"></i> Tempo de Espera => <?=$diferenca?></span>
														<span style="margin-left:5px;font-size:13px;"><strong><?=$w['frente']?></strong></span>
													</div>
											<?php endforeach; ?>
										</div>		
									</div>

								</div>
							</div>
						</div>
						
					</div>

					<!-- <div class="row">
						<div class="col-md-8">
							<div class="card">
								<div class="card-header">
									<div class="card-head-row">
										<div class="card-title">User Statistics</div>
										<div class="card-tools">
											<a href="#" class="btn btn-info btn-border btn-round btn-sm mr-2">
												<span class="btn-label">
													<i class="fa fa-pencil"></i>
												</span>
												Export
											</a>
											<a href="#" class="btn btn-info btn-border btn-round btn-sm">
												<span class="btn-label">
													<i class="fa fa-print"></i>
												</span>
												Print
											</a>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="chart-container" style="min-height: 375px">
										<canvas id="statisticsChart"></canvas>
									</div>
									<div id="myChartLegend"></div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card card-primary">
								<div class="card-header">
									<div class="card-title">Daily Sales</div>
									<div class="card-category">March 25 - April 02</div>
								</div>
								<div class="card-body pb-0">
									<div class="mb-4 mt-2">
										<h1>$4,578.58</h1>
									</div>
									<div class="pull-in">
										<canvas id="dailySalesChart"></canvas>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-body pb-0">
									<div class="h1 fw-bold float-right text-warning">+7%</div>
									<h2 class="mb-2">213</h2>
									<p class="text-muted">Transactions</p>
									<div class="pull-in sparkline-fix">
										<div id="lineChart"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row row-card-no-pd">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-head-row card-tools-still-right">
										<h4 class="card-title">Users Geolocation</h4>
										<div class="card-tools">
											<button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-angle-down"></span></button>
											<button class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card"><span class="fa fa-sync-alt"></span></button>
											<button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-times"></span></button>
										</div>
									</div>
									<p class="card-category">
									Map of the distribution of users around the world</p>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-6">
											<div class="table-responsive table-hover table-sales">
												<table class="table">
													<tbody>
														<tr>
															<td>
																<div class="flag">
																	<img src="../assets/img/flags/id.png" alt="indonesia">
																</div>
															</td>
															<td>Indonesia</td>
															<td class="text-right">
																2.320
															</td>
															<td class="text-right">
																42.18%
															</td>
														</tr>
														<tr>
															<td>
																<div class="flag">
																	<img src="../assets/img/flags/us.png" alt="united states">
																</div>
															</td>
															<td>USA</td>
															<td class="text-right">
																240
															</td>
															<td class="text-right">
																4.36%
															</td>
														</tr>
														<tr>
															<td>
																<div class="flag">
																	<img src="../assets/img/flags/au.png" alt="australia">
																</div>
															</td>
															<td>Australia</td>
															<td class="text-right">
																119
															</td>
															<td class="text-right">
																2.16%
															</td>
														</tr>
														<tr>
															<td>
																<div class="flag">
																	<img src="../assets/img/flags/ru.png" alt="russia">
																</div>
															</td>
															<td>Russia</td>
															<td class="text-right">
																1.081
															</td>
															<td class="text-right">
																19.65%
															</td>
														</tr>
														<tr>
															<td>
																<div class="flag">
																	<img src="../assets/img/flags/cn.png" alt="china">
																</div>
															</td>
															<td>China</td>
															<td class="text-right">
																1.100
															</td>
															<td class="text-right">
																20%
															</td>
														</tr>
														<tr>
															<td>
																<div class="flag">
																	<img src="../assets/img/flags/br.png" alt="brazil">
																</div>
															</td>
															<td>Brasil</td>
															<td class="text-right">
																640
															</td>
															<td class="text-right">
																11.63%
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mapcontainer">
												<div id="map-example" class="vmap"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Top Products</div>
								</div>
								<div class="card-body pb-0">
									<div class="d-flex">
										<div class="avatar">
											<img src="../assets/img/logoproduct.svg" alt="..." class="avatar-img rounded-circle">
										</div>
										<div class="flex-1 pt-1 ml-2">
											<h6 class="fw-bold mb-1">CSS</h6>
											<small class="text-muted">Cascading Style Sheets</small>
										</div>
										<div class="d-flex ml-auto align-items-center">
											<h3 class="text-info fw-bold">+$17</h3>
										</div>
									</div>
									<div class="separator-dashed"></div>
									<div class="d-flex">
										<div class="avatar">
											<img src="../assets/img/logoproduct.svg" alt="..." class="avatar-img rounded-circle">
										</div>
										<div class="flex-1 pt-1 ml-2">
											<h6 class="fw-bold mb-1">J.CO Donuts</h6>
											<small class="text-muted">The Best Donuts</small>
										</div>
										<div class="d-flex ml-auto align-items-center">
											<h3 class="text-info fw-bold">+$300</h3>
										</div>
									</div>
									<div class="separator-dashed"></div>
									<div class="d-flex">
										<div class="avatar">
											<img src="../assets/img/logoproduct3.svg" alt="..." class="avatar-img rounded-circle">
										</div>
										<div class="flex-1 pt-1 ml-2">
											<h6 class="fw-bold mb-1">Ready Pro</h6>
											<small class="text-muted">Bootstrap 4 Admin Dashboard</small>
										</div>
										<div class="d-flex ml-auto align-items-center">
											<h3 class="text-info fw-bold">+$350</h3>
										</div>
									</div>
									<div class="separator-dashed"></div>
									<div class="pull-in">
										<canvas id="topProductsChart"></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<div class="card-body">
									<div class="card-title fw-mediumbold">Suggested People</div>
									<div class="card-list">
										<div class="item-list">
											<div class="avatar">
												<img src="../assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">Jimmy Denis</div>
												<div class="status">Graphic Designer</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="../assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">Chad</div>
												<div class="status">CEO Zeleaf</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="../assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">Talha</div>
												<div class="status">Front End Designer</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="../assets/img/mlane.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">John Doe</div>
												<div class="status">Back End Developer</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="../assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">Talha</div>
												<div class="status">Front End Designer</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="../assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">Jimmy Denis</div>
												<div class="status">Graphic Designer</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card card-primary bg-primary-gradient">
								<div class="card-body">
									<h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Active user right now</h4>
									<h1 class="mb-4 fw-bold">17</h1>
									<h4 class="mt-3 b-b1 pb-2 mb-5 fw-bold">Page view per minutes</h4>
									<div id="activeUsersChart"></div>
									<h4 class="mt-5 pb-3 mb-0 fw-bold">Top active pages</h4>
									<ul class="list-unstyled">
										<li class="d-flex justify-content-between pb-1 pt-1"><small>/product/readypro/index.html</small> <span>7</span></li>
										<li class="d-flex justify-content-between pb-1 pt-1"><small>/product/atlantis/demo.html</small> <span>10</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="card full-height">
								<div class="card-header">
									<div class="card-title">Feed Activity</div>
								</div>
								<div class="card-body">
									<ol class="activity-feed">
										<li class="feed-item feed-item-secondary">
											<time class="date" datetime="9-25">Sep 25</time>
											<span class="text">Responded to need <a href="#">"Volunteer opportunity"</a></span>
										</li>
										<li class="feed-item feed-item-success">
											<time class="date" datetime="9-24">Sep 24</time>
											<span class="text">Added an interest <a href="#">"Volunteer Activities"</a></span>
										</li>
										<li class="feed-item feed-item-info">
											<time class="date" datetime="9-23">Sep 23</time>
											<span class="text">Joined the group <a href="single-group.php">"Boardsmanship Forum"</a></span>
										</li>
										<li class="feed-item feed-item-warning">
											<time class="date" datetime="9-21">Sep 21</time>
											<span class="text">Responded to need <a href="#">"In-Kind Opportunity"</a></span>
										</li>
										<li class="feed-item feed-item-danger">
											<time class="date" datetime="9-18">Sep 18</time>
											<span class="text">Created need <a href="#">"Volunteer Opportunity"</a></span>
										</li>
										<li class="feed-item">
											<time class="date" datetime="9-17">Sep 17</time>
											<span class="text">Attending the event <a href="single-event.php">"Some New Event"</a></span>
										</li>
									</ol>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card full-height">
								<div class="card-header">
									<div class="card-head-row">
										<div class="card-title">Support Tickets</div>
										<div class="card-tools">
											<ul class="nav nav-pills nav-secondary nav-pills-no-bd nav-sm" id="pills-tab" role="tablist">
												<li class="nav-item">
													<a class="nav-link" id="pills-today" data-toggle="pill" href="#pills-today" role="tab" aria-selected="true">Today</a>
												</li>
												<li class="nav-item">
													<a class="nav-link active" id="pills-week" data-toggle="pill" href="#pills-week" role="tab" aria-selected="false">Week</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" id="pills-month" data-toggle="pill" href="#pills-month" role="tab" aria-selected="false">Month</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="d-flex">
										<div class="avatar avatar-online">
											<span class="avatar-title rounded-circle border border-white bg-info">J</span>
										</div>
										<div class="flex-1 ml-3 pt-1">
											<h6 class="text-uppercase fw-bold mb-1">Joko Subianto <span class="text-warning pl-3">pending</span></h6>
											<span class="text-muted">I am facing some trouble with my viewport. When i start my</span>
										</div>
										<div class="float-right pt-1">
											<small class="text-muted">8:40 PM</small>
										</div>
									</div>
									<div class="separator-dashed"></div>
									<div class="d-flex">
										<div class="avatar avatar-offline">
											<span class="avatar-title rounded-circle border border-white bg-secondary">P</span>
										</div>
										<div class="flex-1 ml-3 pt-1">
											<h6 class="text-uppercase fw-bold mb-1">Prabowo Widodo <span class="text-success pl-3">open</span></h6>
											<span class="text-muted">I have some query regarding the license issue.</span>
										</div>
										<div class="float-right pt-1">
											<small class="text-muted">1 Day Ago</small>
										</div>
									</div>
									<div class="separator-dashed"></div>
									<div class="d-flex">
										<div class="avatar avatar-away">
											<span class="avatar-title rounded-circle border border-white bg-danger">L</span>
										</div>
										<div class="flex-1 ml-3 pt-1">
											<h6 class="text-uppercase fw-bold mb-1">Lee Chong Wei <span class="text-muted pl-3">closed</span></h6>
											<span class="text-muted">Is there any update plan for RTL version near future?</span>
										</div>
										<div class="float-right pt-1">
											<small class="text-muted">2 Days Ago</small>
										</div>
									</div>
									<div class="separator-dashed"></div>
									<div class="d-flex">
										<div class="avatar avatar-offline">
											<span class="avatar-title rounded-circle border border-white bg-secondary">P</span>
										</div>
										<div class="flex-1 ml-3 pt-1">
											<h6 class="text-uppercase fw-bold mb-1">Peter Parker <span class="text-success pl-3">open</span></h6>
											<span class="text-muted">I have some query regarding the license issue.</span>
										</div>
										<div class="float-right pt-1">
											<small class="text-muted">2 Day Ago</small>
										</div>
									</div>
									<div class="separator-dashed"></div>
									<div class="d-flex">
										<div class="avatar avatar-away">
											<span class="avatar-title rounded-circle border border-white bg-danger">L</span>
										</div>
										<div class="flex-1 ml-3 pt-1">
											<h6 class="text-uppercase fw-bold mb-1">Logan Paul <span class="text-muted pl-3">closed</span></h6>
											<span class="text-muted">Is there any update plan for RTL version near future?</span>
										</div>
										<div class="float-right pt-1">
											<small class="text-muted">2 Days Ago</small>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>  -->