<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Vick Logística</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="<?=BASE_URL?>">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#"><?=$titulo?></a>
            </li>
        </ul>
    </div>
	
	<!-- end page-title -->
	<div style="margin-left:0px;margin-bottom:5px;">
		<a href="<?= BASE_URL ?>permissoes" class="btn btn-success" style="color:white;">
			<i class="fa fa-arrow-left"></i> Voltar
		</a>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="card m-b-30">
				<div class="card-body">
					<form method="POST" action="<?= BASE_URL ?>permissoes/edit_action/<?= $permission_id ?>">
						<div class="form-group">
							<label>Nome do Grupo</label>
							<input type="text" class="form-control" name="nome_group" required placeholder="Digite um Nome para o grupo" autofocus value="<?= $permission_group_name; ?>" />
						</div><br>

						<h5>Permissões que o grupo irá ter</h5><br>
						<?php foreach ($permission_itens as $item): ?>
							<div class="form-group">
								<div>
									<div class="custom-control custom-checkbox">
										<input
										<?php 
										if (in_array($item['slug'], $permission_group_slugs)) {
											echo "checked='checked'";
										}
										 ?>
										 type="checkbox" class="custom-control-input" name="items[]" value="<?= $item['id_p_item'] ?>" id="item-<?= $item['id_p_item'] ?>" data-parsley-multiple="groups"
										data-parsley-mincheck="2">
										<label class="custom-control-label" for="item-<?= $item['id_p_item'] ?>"><?= $item['nome'] ?></label>
									</div>
								</div>
							</div><br>
						<?php endforeach; ?>
						<input type="submit" value="Salvar" class="btn btn-success">
					</form>	
				</div>
			</div>
		</div> <!-- end col -->
	</div> <!-- end row -->

</div>    