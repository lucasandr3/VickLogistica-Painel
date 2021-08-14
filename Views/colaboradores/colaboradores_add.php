<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="<?=url('frota')?>">Pessoal</a></li>
        <li class="breadcrumb-item active" aria-current="page">Novo Colaborador</li>
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
                    <form method="POST" action="<?=url('colaboradores/add_action')?>">
						<div class="form-group">
							<label>Nome do Colaborador <span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="nome_user" required placeholder="Digite um Nome para o colaborador" autofocus />
						</div><br>
   
                        <div class="form-group">
							<label>E-mail <span class="text-danger">*</span></label>
							<input type="email" class="form-control" name="email_user" required placeholder="Digite o e-mail do colaborador" autofocus />
						</div><br>

                        <div class="form-group">
                            <label>Nível de permissão <span class="text-danger">*</span></label>
                            <select name="id_permissao" class="form-control" required>
                                <option>Escolha o Cargo</option>
                                <?php foreach($group as $g): ?>
					                <option value="<?=$g['id_group'];?>"><?=$g['nome_group']?></option>
                                <?php endforeach; ?>
                            </select>
						</div><br>

                        <div class="form-group">
                            <label>Status <span class="text-danger">*</span></label>
                            <select name="status" class="form-control" required>
                                <option>Escolha o Status</option>
                                <option value="0">Ativo</option>
					            <option value="1">Inativo</option>
                            </select>
						</div><br>

                        <div class="form-group">
							<label>Senha <span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="senha" required placeholder="" autofocus />
						</div><br>
                        
						<input type="submit" value="Cadastrar Colaborador" class="btn btn-success">
					</form>	
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- /Row -->

</div>
<!-- /Breadcrumb -->
