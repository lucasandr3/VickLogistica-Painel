<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="<?=url('motoristas')?>">Pessoal</a></li>
        <li class="breadcrumb-item active" aria-current="page">Motoristas Inativos</li>
    </ol>
</nav>

<div class="container" >

    <?php get_flash(); ?>
    
    <div class="btn-group">
      <a href="<?=url('motoristas')?>" class="btn btn-outline-primary btn-sm" style="margin-top:-25px;float:right;text-transform:uppercase;"><i class="fa fa-arrow-left"></i> Voltar</a>
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
                                    <th>Matrícula</th>
                                    <th>Nome</th>
                                    <th>Função</th>
                                    <th>Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($drivers as $d): ?>  
                                        <tr>
                                            <td><?=$d['code_driver'];?></td>
                                            <td class="text-capitalize"><?=$d['name_driver'];?></td>
                                            <td class="text-capitalize"><?=$d['function']?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="<?=BASE_URL?>motoristas/religar/<?=$d['name_driver']?>" class="btn btn-success btn-xs">
                                                        <i class="fa fa-window-close-o"></i> Religar
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
