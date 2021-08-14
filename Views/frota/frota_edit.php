<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="<?=url('frota')?>">Gestão de Frota</a></li>
        <li class="breadcrumb-item active" aria-current="page">Ediçã de Frota</li>
    </ol>
</nav>

<div class="container" >
    <div class="btn-group">
      <a href="<?=url('Frota')?>" class="btn btn-outline-primary btn-sm" style="margin-top:-25px;float:right;text-transform:uppercase;"><i class="fa fa-arrow-left"></i> Voltar</a>
    </div>
    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <div class="row">
                    <div class="col-sm">
                    <form method="POST" action="<?=url('frota/edit_action')?>">
						<div class="form-group">
							<label>Frota <span class="text-danger">*</span></label>
							<input type="number" class="form-control" name="fleet" value="<?=$fleet['fleet'];?>" required placeholder="Digite um Nome para o cliente" autofocus />
						</div><br>

                        <div class="form-group">
							<label>Placa <span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="plaque" value="<?=$fleet['plaque'];?>" required placeholder="Digite um CNPJ ou CPF" autofocus />
						</div><br>

                        <div class="form-group">
							<label>Modelo <span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="model" value="<?=$fleet['model'];?>" required placeholder="00000-000" autofocus />
						</div><br>

                        <div class="form-group">
							<label>Equipamento <span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="equipment" value="<?=$fleet['equipment'];?>" required placeholder="00000-000" autofocus />
						</div><br>

                        <div class="form-group">
							<label>Marca <span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="mark" value="<?=$fleet['mark'];?>" required placeholder="00000-000" autofocus />
						</div><br>

                        <div class="form-group">
                            <label>Status <span class="text-danger">*</span></label>
                            <select name="status" class="form-control" required>
                                <option value="<?=$fleet['status'];?>" >
                                    <?php if($fleet['status'] == "0"): ?>
                                        Ativo
                                    <?php else: ?>
                                        Inativo
                                    <?php endif; ?>        
                                </option>
                                <?php if($fleet['status'] == "1"): ?>
                                    <option value="0">Ativo</option>
                                <?php else: ?>
                                    <option value="1">Inativo</option>
                                <?php endif; ?>  
                            </select>
						</div><br>
                        
                        <input type="text" value="<?=$fleet['id'];?>" name="id" class="sr-only"/> 

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