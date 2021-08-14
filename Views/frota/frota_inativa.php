<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="<?=url('frota')?>">Gestão de Frota</a></li>
        <li class="breadcrumb-item active" aria-current="page">Frotas Inativas</li>
    </ol>
</nav>

<div class="container" >
    <div class="btn-group">
        <a href="<?=url('Frota')?>" class="btn btn-outline-primary btn-sm" style="margin-top:-25px;float:right;text-transform:uppercase;"><i class="fa fa-arrow-left"></i> Voltar</a>
    </div>
    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <div class="row">
                    <div class="col-sm">
                        <div class="table-wrap">
                            <table id="datable_1" class="table w-100 display pb-30">
                                <thead>
                                <tr>
                                  <th>Frota</th>
                                  <th>Placa</th>
                                  <th>Modelo</th>
                                  <th>Equipamento</th>
                                  <th>Marca</th>
                                  <th>Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($fleet as $f): ?>  
                                        <tr>
                                            <td><?=$f['fleet'];?></td>
                                            <td><?=$f['plaque'];?></td>
                                            <td><?=$f['model']?></td>
                                            <td><?=$f['equipment']?></td>
                                            <td><?=$f['mark']?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="<?=BASE_URL?>frota/ativar/<?=$f['fleet']?>" class="btn btn-success btn-xs">
                                                        <i class="fa fa-window-close-o"></i> Ativar
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
            </section>
        </div>
    </div>
    <!-- /Row -->

</div>