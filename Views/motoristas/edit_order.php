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
    <!-- -->
    <div class="alert alert-danger" role="alert" style="
    color: white;
    font-weight: bold;
    background-color: #ef5860;">
        <i class="fa fa-info"></i> Atenção tela esta em construção. processo não esta finalizado, Aguarde.
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30" id="card-json">
                <div class="card-header">
                    <div class="row">
                        <div class="col-10">
                            <h5 class="">Lista de Produtos<b> Pedido Nº #<?=$id_order?></b></h5><br>
                        </div>

                        <div class="col">
                            <div style="margin-left:0px;margin-bottom:5px;">
                                <a href="<?= BASE_URL ?>pedido" class="btn btn-success btn-xs"
                                style="color:white"><i class="fa fa-arrow-left"></i> Voltar
                                </a>
                                <a href="<?= BASE_URL ?>pedido/imprimir/<?=$id_order?>" class="btn btn-success btn-xs"
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

                            <tbody id="table-prods">
                                
                            </tbody>
                            <tfoot id="table-footer">
                                
                            </tfoot>
                        </table>
                    </div>
                </div>

                <div class="" style="border:1px solid #cacaca;padding:10px;" id="edit-notes">
                   
                </div>

                <br>
                <button class="btn btn-success" id="btn-edit">Salvar alterações</button>

                </div>

            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    

</div> 
<script>
    var id_pedido = '<?php echo json_encode($id_order)?>';
</script>
<script src="<?=BASE_URL?>assets/js/functions.js"></script>   
<script src="<?=BASE_URL?>assets/js/edit_order.js"></script>   