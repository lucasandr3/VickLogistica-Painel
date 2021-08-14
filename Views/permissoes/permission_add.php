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
    </div>
    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <div class="row">
                    <div class="col-sm">
						<form method="POST" action="<?= BASE_URL ?>permissoes/add_action">
							<div class="form-group">
								<label>Nome do Grupo</label>
								<input type="text" class="form-control" name="nome_group" required placeholder="Digite um Nome para o grupo" autofocus />
							</div><br>

							<h5>Permissões que o grupo irá ter</h5><br>
							<?php foreach ($permission_itens as $item): ?>
								<div class="form-group">
									<div>
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" name="items[]" value="<?= $item['id_p_item'] ?>" id="item-<?= $item['id_p_item'] ?>" data-parsley-multiple="groups"
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
            </section>
        </div>
    </div>
    <!-- /Row -->

</div>
<!-- /Breadcrumb -->
 