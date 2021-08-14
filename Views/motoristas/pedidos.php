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
                        <a href="#"><?=$titulo?></a>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><?=$titulo?></h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table_res" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>Data do pedido</th>
                                            <th>Vendedor</th>
                                            <th>Cliente</th>
                                            <th>Produtos</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($peds as $p): ?>  
                                        <tr>
                                            <td>#<?=$p['id_pedido']?></td>
                                            <td><?=date('d-m-y - H:i', strtotime($p['data_pedido']))?> hs</td>
                                            <td><?=$p['vendor']?></td>
                                            <td><?=$p['cliente']?></td>>
                                            <td><a href="<?=BASE_URL?>pedido/lista/<?=$p['id_pedido']?>" class="btn btn-success btn-xs">
                                                <i class="fa fa-cubes"></i> Ver Produtos
                                                </a>
                                            </td>
                                            <td>
                                                <a href="<?= BASE_URL ?>pedido/imprimir/<?=$p['id_pedido']?>" target="_blank" class="btn btn-success btn-xs"
                                                        style="color:white"><i class="fa fa-barcode"></i> Imprimir
                                                    </a>
                                                    <a href="<?= BASE_URL ?>pedido/editorder/<?=$p['id_pedido']?>" class="btn btn-primary btn-xs"
                                                        style="color:white"><i class="fa fa-pencil"></i> Editar Pedido
                                                    </a>    
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>      