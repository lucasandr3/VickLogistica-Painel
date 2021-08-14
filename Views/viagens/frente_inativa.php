        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Vick Logística</h4>
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

            <div class="btn-group" style="margin-top:20px;margin-bottom:15px;">
            <!-- <button data-toggle="modal" data-target="#modal-fleet" class="btn btn-success btn-sm" style="margin-top:-25px;float:right;text-transform:uppercase;">Cadastrar Frota <i class="fa fa-arrow-right"></i></button> -->
            <a href="<?=BASE_URL?>Frente" class="btn btn-primary btn-sm" style="margin-top:-25px;float:right;text-transform:uppercase;"><i class="fa fa-arrow-left"></i> Voltar</a>
            </div>

            <?php if(isset($_SESSION['alert'])): ?>
                <?php echo $_SESSION['alert']; ?>
                <?php $_SESSION['alert'] = ''; ?>
            <?php endif; ?>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><?=$titulo?></h4>
                        </div>
                        <div class="card-body">
                                <table id="table_res" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Frente</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($front as $f): ?>  
                                        <tr>
                                            <td><?=$f['front'];?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="<?=BASE_URL?>frente/ativar/<?=$f['front']?>" class="btn btn-success btn-xs">
                                                        <i class="fa fa-check-square-o"></i> Ativar
                                                    </a>
                                                </div>
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