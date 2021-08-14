<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="<?=url('frota')?>">Dados de Viagem</a></li>
        <li class="breadcrumb-item active" aria-current="page">Viagens do dia:
            <strong><?=($dthf === '') ? date('d/m/Y'): ftrDate($dthf, '-');?></strong>
        </li>
    </ol>
</nav>

<div class="container">

    <?php get_flash(); ?>

    <div class="btn-group" style="margin-bottom: 30px;">
        <div class="d-flex w-200p">
            <form method="get" class="d-flex">
                <input class="form-control" id="inpi-data-travel" type="date" name="filter_date"
                    value="<?=($dthf === '') ? date('Y-m-d'): $dthf?>"
                    style="font-size: 0.875rem;height: calc(1.8125rem + 4px);">
                <button onclick="travelsDate()" class="btn btn-success"
                    style="margin-left:5px;font-size: 0.875rem;height: calc(1.8125rem + 4px);">Filtrar</button>
            </form>
        </div>
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
                                        <th>Viagen</th>
                                        <th>Motorista</th>
                                        <th>Data</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($travels as $t): ?>
                                    <tr>
                                        <td><?=$t['id_travel_step'];?></td>
                                        <td class="text-capitalize"><?=$t['driver'];?></td>
                                        <td><?=date('d/m/Y', strtotime($t['date_travel']));?></td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="<?=BASE_URL?>viagens/timeline/<?=$t['id_travel_step']?>"
                                                    class="btn btn-primary btn-xs" target="_blank">
                                                    <i class="fa fa-pencil"></i> Ver detalhes
                                                </a>
                                                <!-- <a href="<?=BASE_URL?>viagens/imprimir/<?=$t['id_travel_step']?>" class="btn btn-primary btn-xs">
                                                        <i class="fa fa-print"></i> Imprimir
                                                    </a> -->
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div id="notravel" style="display:none;">

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- /Row -->

</div>
<!-- /Breadcrumb -->