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
                
                <div class="row" style="border:1px solid #cacaca;margin-left:0px;margin-right:0px;">
                    <div class="col-5" style="margin-top:15px;">
                        <p class="text-capitalize" style="font-size:13px;margin-left:25%"><b>Data do Pedido:</b> <?= date('d-m-Y - H:i', strtotime($peds_prods['data_pedido']))?> hs</p>      
                    </div>

                    <div class="col-3" style="margin-top:15px;">
                        <p class="text-capitalize" style="font-size:13px"><b>Vendedor:</b> <?=$peds_prods['vendor']?></p>        
                    </div>

                    <div class="col" style="margin-top:15px;">
                        <p class="text-capitalize" style="font-size:13px"><b>Cliente:</b> <?=$peds_prods['cliente']?></p>  
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
                                       <td>R$ <?=number_format($pp->preco,2,",",".")?></td>
                                   </tr>
                               <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3" class="text-left" style="font-size:15px;font-weight:bold;background-color:#797979;color:white;"><b>Total Produtos</b>
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