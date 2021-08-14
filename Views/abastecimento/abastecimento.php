<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="<?=url('frota')?>">Dados de Viagens</a></li>
        <li class="breadcrumb-item active" aria-current="page">Abastecimento do dia -
            <strong><?=($dthf === '') ? date('d/m/Y'): ftrDate($dthf, '-');?></strong></li>
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
                                        <th>Tanque 01</th>
                                        <th>Tanque 02</th>
                                        <th>Total Abastecido</th>
                                        <th>Data</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($abastecimento as $ab): ?>
                                    <tr>
                                        <td><strong><?= $ab['fleet'] ?></strong></td>
                                        <td><?= $ab['tankone'] ?> Lts</td>
                                        <td><?= $ab['tanktwo'] ?> Lts</td>
                                        <td><?= $ab['total'] ?> Lts</td>
                                        <td>
                                            <?= $ab['date_diesel'] ?>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
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