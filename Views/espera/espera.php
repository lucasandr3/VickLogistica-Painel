<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="<?=url('frota')?>">Dados de Viagens</a></li>
        <li class="breadcrumb-item active" aria-current="page">Pátio de Espera do dia -
            <strong><?=($dthf === '') ? date('d/m/Y'): ftrDate($dthf, '-');?></strong>
        </li>
    </ol>
</nav>

<div class="container">

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
                                        <th>Frota</th>
                                        <th>Motorista</th>
                                        <th>Data hora inicio</th>
                                        <th>Data hora fim</th>
                                        <th>Tempo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($list as $l): ?>
                                    <tr>
                                        <td><?= $l['fleet'] ?></td>
                                        <td><?= $l['driver'] ?></td>
                                        <td>
                                            <?=$l['start']?>
                                            hs
                                        </td>

                                        <td>
                                            <?=$l['final']?>
                                            hs
                                        </td>
                                        <td>
                                            <?=calcDifTime(strToDate($l['start']), strToDate($l['final']), true)?>
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
<!-- /Breadcrumb -->