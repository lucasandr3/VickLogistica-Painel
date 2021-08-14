<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="<?=url('frota')?>">Gestão de Frota</a></li>
        <li class="breadcrumb-item active" aria-current="page">Ediçao de Conjunto</li>
    </ol>
</nav> 

<div class="container" >

    <?php get_flash(); ?>
    
    <div class="btn-group">
      <a href="<?=url('Frota/conjuntos')?>" class="btn btn-outline-primary btn-sm" style="margin-top:-25px;float:right;text-transform:uppercase;"><i class="fa fa-arrow-left"></i> Voltar</a>
    </div>
    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <div class="row">
                    <div class="col-sm">
                    <form method="POST" action="<?= BASE_URL ?>frota/edit_joint_action">
						<div class="form-group">
							<label>Frota <span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="numero" value="<?=$joint['numero'];?>" required placeholder="Digite um Nome para o cliente" autofocus />
						</div><br>

                        <div class="form-group">
							<label>Equipamento <span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="tipo" value="<?=$joint['tipo'];?>" required placeholder="" autofocus />
						</div><br>

                        <div class="form-group">
                            <label>Reboque (vinculo) <span class="text-danger">*</span></label>
                            <select name="vinculo" class="form-control select2" required>
                                <option value="<?=$joint['vinculo'];?>"><?=$joint['vinculo'];?></option>
                                    <?php foreach($joints as $j): ?>
                                        <?php if($j['tipo'] == "Reboque"): ?>
                                            <option value="<?=$j['numero']?>"><?=$j['numero']?></option>
                                        <?php elseif($j['tipo'] == "Semi Reboque"): ?>  
                                            <option value="<?=$j['numero']?>"><?=$j['numero']?></option>  
                                        <?php endif; ?>
                                    <?php endforeach; ?>        
                                </option>
                            </select>
						</div><br>

                        <div class="form-group">
                            <label>Status <span class="text-danger">*</span></label>
                            <select name="status" class="form-control" required>
                                <option value="<?=$joint['status'];?>">
                                    <?php if($joint['status'] === "0"): ?>
                                        Ativo
                                    <?php else: ?>
                                        Inativo
                                    <?php endif; ?>        
                                </option>
                                <?php if($joint['status'] === "1"): ?>
                                    <option value="0">Ativo</option>
                                <?php else: ?>
                                    <option value="1">Inativo</option>
                                <?php endif; ?>  
                            </select>
						</div><br>
                        
                        <input type="text" value="<?=$joint['id'];?>" name="id" class="sr-only"/> 

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