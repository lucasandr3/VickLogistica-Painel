<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="<?=url('frota')?>">Configurações</a></li>
        <li class="breadcrumb-item active" aria-current="page">Nova Permissão</li>
    </ol>
</nav> 

<div class="container" >

    <?php get_flash(); ?>
    
    <div class="btn-group">
      <a href="<?=url('Permissoes')?>" class="btn btn-outline-success btn-sm" style="margin-top:-25px;float:right;text-transform:uppercase;"><i class="fa fa-arrow-left"></i> Voltar</a>
      <button data-toggle="modal" data-target=".bs-example-modal-center" class="btn btn-outline-success btn-sm" style="margin-top:-25px;float:right;text-transform:uppercase;"><i class="fa fa-low-vision"></i> Adicionar Item de Permissão</button>
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
									<th>Nome da Permissão</th>
									<th>Slug</th>
									<th>Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($list as $item): ?>
							<tr>
								<td><?= $item['nome'] ?></td>
								<td class="text-muted"><?= $item['slug'] ?></td>
								<td>
									<div class="">
										<a data-toggle="modal" data-target=".me<?= $item['id_p_item']?>"
											class="btn btn-primary btn-sm" style="color:white;">
											Editar
										</a>
										
										<!-- <a href="<?= BASE_URL ?>Permissoes/items_del/<?= $item['id_p_item']?>"
											class="btn btn-danger btn-sm">
											<i class="fa fa-trash"></i>
											Excluir
										</a> -->
									</div>
								</td>
							</tr>
							<!-- Modal -->
							<div class="modal fade me<?= $item['id_p_item']?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title mt-0">Editar Permissão</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<form action="<?= BASE_URL ?>permissoes/items_edit/<?= $item['id_p_item']?>" method="POST">
															<div class="form-group">
																<label>Nome da Permissão</label>
																<input type="text" class="form-control" name="nome" required value="<?= $item['nome']?>" autofocus />
															</div>
															<input type="submit" value="Salvar Alterações" class="btn btn-success">
														</form>
													</div>
												</div><!-- /.modal-content -->
											</div><!-- /.modal-dialog -->
										</div><!-- /.modal -->
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


<!-- Modal -->
<div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title mt-0">Adicionar Nova Permissão</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= BASE_URL ?>permissoes/items_add" method="POST">
					<div class="form-group">
						<label>Nome da Permissão</label>
						<input type="text" class="form-control" name="nome" required placeholder="Digite um Nome para a permissão" autofocus />
					</div>
					<div class="form-group">
						<label>Nome do Slug</label>
						<input type="text" class="form-control" name="slug" required placeholder="Digite um Slug" autofocus />
					</div>
					<input type="submit" value="Criar Permissão" class="btn btn-success">
					<button type="button" class="btn btn-primary waves-effect mo-mb-2" data-container="body" data-toggle="popover" data-placement="top" data-content="Para criar o slug as palavras devem ser separadas por virgulo Ex: ver configurações
					Slug: ver_config">
					Ajuda para criar Slug
				</button>
			</form>
		</div>
	</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</div>    