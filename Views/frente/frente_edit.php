<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="<?=url('frota')?>">Dados de Viagem</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edição de Frente</li>
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
                    <form method="POST" action="<?= BASE_URL ?>frente/edit_action">
						<div class="form-group">
							<label>Nome da Frente <span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="front" value="<?=$front['front'];?>" required placeholder="Digite um Nome para o cliente" autofocus />
						</div><br>

                        <div class="form-group">
                            <label>Status <span class="text-danger">*</span></label>
                            <select name="status" class="form-control" required>
                                <option value="<?=$front['status'];?>" >
                                    <?php if($front['status'] == "0"): ?>
                                        Ativo
                                    <?php else: ?>
                                        Inativo
                                    <?php endif; ?>        
                                </option>
                                <?php if($front['status'] == "1"): ?>
                                    <option value="0">Ativo</option>
                                <?php else: ?>
                                    <option value="1">Inativo</option>
                                <?php endif; ?>  
                            </select>
						</div><br>
                        
                        <input type="text" value="<?=$front['id'];?>" name="id" class="sr-only"/> 

						<input class="sr-only" type="text" name="id_user" value="<?php echo $name['id_user'] ?>">  

						<input type="submit" value="Salvar Alterações" class="btn btn-success">
					</form>	
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- /Row -->

</div>
<!-- /Breadcrumb -->

