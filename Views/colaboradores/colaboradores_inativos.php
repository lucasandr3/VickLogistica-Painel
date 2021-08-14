<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="<?=url('frota')?>">Pessoal</a></li>
        <li class="breadcrumb-item active" aria-current="page">Colaboradores Inativos</li>
    </ol>
</nav>

<div class="container" >

    <?php get_flash(); ?>
    
    <div class="btn-group">
      <a href="<?=url('colaboradores')?>" class="btn btn-outline-primary btn-sm" style="margin-top:-25px;float:right;text-transform:uppercase;"><i class="fa fa-arrow-left"></i> Voltar</a>
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
									<th>Nome</th>
									<th>E-mail</th>
									<th>Nível de permissão</th>
									<th>Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($list as $item): ?>
								<tr>
									<td class="text-capitalize"><?=$item['nome_user']?></td>
									<td><?= $item['email_user'] ?></td>
									<td><?= $item['nome_group'] ?></td>
									<td>
										<div class="btn-group">
											<a href="<?= BASE_URL ?>colaboradores/religar/<?= $item['nome_user']?>"
												class="btn btn-success btn-xs">
												Resligar
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
