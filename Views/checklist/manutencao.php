<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="<?=url('frota')?>">Dados de Viagens</a></li>
        <li class="breadcrumb-item active" aria-current="page">Checklist</li>
        <li class="breadcrumb-item active" aria-current="page">Manutenção</li>
    </ol>
</nav>

<div class="container">

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title mb-30">Manutenção em Andamento</h5>
                <div class="row">
                    <div class="col-sm">
                        <div class="table-wrap">
                            <table id="datable_1" class="table w-100 display pb-30">
                                <thead>
                                    <tr>
                                        <th>Frota</th>
                                        <th>Tipo</th>
                                        <th>Equipamento</th>
                                        <th>Status</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($manutencao as $m): ?>
                                    <?php if($m['status'] === '0'): ?>
                                    <tr>
                                        <td><?=json_decode($m['manutencao_json'])->frota?></td>
                                        <td><?=json_decode($m['manutencao_json'])->tipo?></td>
                                        <td><?=json_decode($m['manutencao_json'])->equipamento?></td>
                                        <td><span class="btn btn-primary btn-xs">Em Andamento...</span></td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="<?= BASE_URL ?>checklist/manu_detalhes/<?=$m['id']?>"
                                                    class="btn btn-primary btn-xs">
                                                    Detalhes
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
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

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title mb-30">Manutenção Finalizada</h5>
                <div class="row">
                    <div class="col-sm">
                        <div class="table-wrap">
                            <table id="datable_2" class="table w-100 display pb-30">
                                <thead>
                                    <tr>
                                        <th>Frota</th>
                                        <th>Tipo</th>
                                        <th>Equipamento</th>
                                        <th>Inicio</th>
                                        <th>Fim</th>
                                        <th>Tempo</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($manutencao as $m): ?>
                                    <?php if($m['status'] === '1'): ?>
                                    <tr>
                                        <td><?=json_decode($m['manutencao_json'])->frota?></td>
                                        <td><?=json_decode($m['manutencao_json'])->tipo?></td>
                                        <td><?=json_decode($m['manutencao_json'])->equipamento?></td>
                                        <td><?=json_decode($m['manutencao_json'])->hora?></td>
                                        <td><?=$m['finalized']?></td>
                                        <td><?=calcDifTime(strToDate(json_decode($m['manutencao_json'])->hora), strToDate($m['finalized']))?>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="<?= BASE_URL ?>checklist/manu_detalhes/<?=$m['id']?>"
                                                    class="btn btn-primary btn-xs">
                                                    Detalhes
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
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