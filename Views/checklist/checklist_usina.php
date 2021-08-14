<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="<?=url('frota')?>">Dados de Viagens</a></li>
        <li class="breadcrumb-item active" aria-current="page">Checklists Usina do dia -
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
                                        <th>Número</th>
                                        <th>Frota</th>
                                        <th>Inicio</th>
                                        <th>Fim</th>
                                        <th>Tempo do Checklist</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($checklist as $c): ?>
                                    <tr>
                                        <td><?= $c['id'] ?></td>

                                        <td><?=json_decode($c['checklist_json'])->frota?></td>
                                        <td><?=$c['date_init']?> hs</td>
                                        <td><?=$c['date_final']?> hs</td>
                                        <td><?=calcDifTime(strToDate($c['date_init']), strToDate($c['date_final']), true)?>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="<?=url('checklist/detalhes_usina/'.$c['id'])?>"
                                                    class="btn btn-primary btn-xs">
                                                    Detalhes
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
<!-- /Breadcrumb -->