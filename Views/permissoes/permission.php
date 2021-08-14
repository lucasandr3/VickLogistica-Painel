<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="<?=url('frota')?>">Gestão de Frota</a></li>
        <li class="breadcrumb-item active" aria-current="page">Frota</li>
    </ol>
</nav> 

<div class="container" >

    <?php get_flash(); ?>
    
    <div class="btn-group">
      <a href="<?=url('Permissoes/add')?>" class="btn btn-outline-success btn-sm" style="margin-top:-25px;float:right;text-transform:uppercase;">Novo Grupo <i class="fa fa-arrow-right"></i></a>
      <a href="<?=url('Permissoes/items')?>" class="btn btn-outline-success btn-sm" style="margin-top:-25px;float:right;text-transform:uppercase;">Adicionar Permissão <i class="fa fa-arrow-right"></i></a>
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
									<th>Nome do Grupo</th>
									<th>Qtd. de Colaboradores ativos</th>
									<th>Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($list as $item): ?>
									<tr>
										<td><?= $item['nome_group'] ?></td>
										<td><?= $item['total_users'] ?></td>
										<td>
											<div class="btn-group">
												<a href="<?= BASE_URL ?>Permissoes/edit/<?= $item['id_group']?>"
													class="btn btn-primary btn-sm">
													Editar
												</a>
												<a href="<?= BASE_URL ?>Permissoes/del/<?= $item['id_group']?>"
													class="btn btn-danger btn-sm
													<?= ($item['total_users'] != 0)?'disabled':''; ?>">
													Excluir
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
 