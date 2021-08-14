<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="<?=url('frota')?>">Dados de Viagem</a></li>
        <li class="breadcrumb-item active" aria-current="page">Frentes Inativas</li>
    </ol>
</nav> 

<div class="container" >

    <?php get_flash(); ?>
    
    <div class="btn-group">
      <a href="<?=url('Frente')?>" class="btn btn-outline-primary btn-sm" style="margin-top:-25px;float:right;text-transform:uppercase;"><i class="fa fa-arrow-left"></i> Voltar</a>
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
            </section>
        </div>
    </div>
    <!-- /Row -->

</div>
<!-- /Breadcrumb -->
