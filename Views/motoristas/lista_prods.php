<div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Encartel</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="<?=BASE_URL?>">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="<?=BASE_URL?>pedido">Pedido</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#"><?=$titulo?></a>
                    </li>
                </ul>
            </div>

    <!-- end page-title -->

    <!-- Mensagem flash -->
    <?php if(isset($_SESSION['alert'])): ?>
    <?php echo $_SESSION['alert']; ?>
    <?php endif; ?>
    
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <div class="row">
                        <div class="col-10">
                            <h5 class="">Lista de Produtos<b> Pedido Nº #<?=$peds_prods['id_pedido']?></b></h5><br>
                        </div>

                        <div class="col">
                            <div style="margin-left:0px;margin-bottom:5px;">
                                <a href="<?= BASE_URL ?>pedido" class="btn btn-success btn-xs"
                                style="color:white"><i class="fa fa-arrow-left"></i> Voltar
                                </a>
                                <a href="<?= BASE_URL ?>pedido/imprimir/<?=$peds_prods['id_pedido']?>" class="btn btn-success btn-xs"
                                style="color:white" target="_blank"><i class="fa fa-barcode"></i> Imprimir
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                
                <div class="" style="border:1px solid #cacaca;padding:10px;">
                    <div class="row">
                    <div class="col-md-12" style="margin-top:0px;display: flex;justify-content: space-between;">
                        <span class="text-capitalize" style="font-size:13px;"><b style="font-weight:bold;">Cliente:</b> <?= $peds_prods['nome_cliente']?>&nbsp;&nbsp;&nbsp;</span>  
                        <span class="text-capitalize" style="font-size:13px"><b style="font-weight:bold;">CNPJ:</b> <?=$peds_prods['doc']?>&nbsp;&nbsp;&nbsp;</span>
                        <?php if($peds_prods['ie'] == ''): ?>
                            <span style="font-size:13px;"><b style="font-weight:bold;">IE:</b> 000.000.000/0000&nbsp;&nbsp;&nbsp;</span>
                        <?php else: ?>
                            <span style="font-size:13px;"><b style="font-weight:bold;">IE:</b> <?= $peds_prods['ie']?>&nbsp;&nbsp;&nbsp;</span>
                        <?php endif; ?>  
                        <span style="font-size:13px"><b style="font-weight:bold;">E-mail:</b> <?=$peds_prods['email']?></span>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12" style="margin-top:15px;display: flex;justify-content: space-between;">
                        <span class="text-capitalize" style="font-size:13px;"><b style="font-weight:bold;">Endereço:</b> <?= $peds_prods['endereco']?>&nbsp;&nbsp;&nbsp;</span>  
                        <span class="text-capitalize" style="font-size:13px"><b style="font-weight:bold;">Cidade:</b> <?=$peds_prods['cidade']?>&nbsp;&nbsp;&nbsp;</span>
                        <span class="text-capitalize" style="font-size:13px"><b style="font-weight:bold;">Cep:</b> <?=$peds_prods['cep']?>&nbsp;&nbsp;&nbsp;</span>
                        <span class="text-capitalize" style="font-size:13px"><b style="font-weight:bold;">Data pedido:</b> <?=date('d/m/y', strtotime($peds_prods['data_pedido']))?>&nbsp;&nbsp;&nbsp;</span>
                        <span style="font-size:13px"><b style="font-weight:bold;"></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                    </div>
                    </div>
                </div>

                <div class="" style="border:1px solid #cacaca;padding:10px;">
                    <div class="row">
                    <div class="col-md-12" style="margin-bottom:10px;display: flex;justify-content: space-between;">
                        <?php if($peds_prods['obs'] == null): ?>
                            <span class="text-capitalize" style="font-size:13px;"><b style="font-weight:bold;">Observação:</b> Nenhuma Observação</span>
                        <?php else: ?>
                            <span class="text-capitalize" style="font-size:13px;"><b style="font-weight:bold;">Observação:</b> <?=$peds_prods['obs']?></span> 
                        <?php endif; ?>          
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12" style="margin-top:0px;display: flex;justify-content: space-between;">
                        <?php if($peds_prods['pagamento'] == null): ?>
                            <span class="text-capitalize" style="font-size:13px;"><b style="font-weight:bold;">Forma de Pagamento:</b> Não Informado</span>
                        <?php else: ?>
                            <span class="text-capitalize" style="font-size:13px;"><b style="font-weight:bold;">Forma de Pagamento:</b> <?= $peds_prods['pagamento']?></span>
                        <?php endif; ?>            
                    </div>
                    </div>
                </div> 
                <br>

                    <div class="row">
                    <div class="col-md-12 text-center">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Produto</th>
                                    <th>Quantidade</th>
                                    <th>Preço</th>
                                    <th>SubTotal</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach(json_decode($peds_prods['prods_json']) as $pp): ?>  
                                   <tr>
                                       <td><?=$pp->codigo?></td>
                                       <td><?=$pp->nome?></td>
                                       <td>
                                           <?php if ($pp->qt > 1): ?>
                                               <?=$pp->qt?> Unidades
                                           <?php else: ?>   
                                               <?=$pp->qt?> Unidade 
                                           <?php endif; ?>
                                       </td>
                                       <?php
                                       $subTotal = ($pp->preco * $pp->qt);
                                       ?>
                                       <td>R$ <?=number_format($pp->preco,2,",",".")?></td>
                                       <td>R$ <?=number_format($subTotal,2,",",".")?></td>
                                   </tr>
                               <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4" class="text-left" style="font-size:15px;font-weight:bold;background-color:#797979;color:white;"><b>Total Produtos</b>
                                    </td>
                                    <td style="background-color:#797979;font-weight:bold;font-size:15px;color:white;">R$ <?= number_format($peds_prods['total'],2,",",".")?></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

</div>    