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

    <div style="margin-left:0px;margin-bottom:5px;">
		<a href="<?= BASE_URL ?>clientes" class="btn btn-primary btn-xs"><i class="fa fa-arrow-left"></i> Voltar</a>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="card m-b-30">
				<div class="card-body">
					<form method="POST" action="<?= BASE_URL ?>motoristas/edit_action">
						<div class="form-group">
							<label>Matrícula <span class="text-danger">*</span></label>
							<input type="number" class="form-control" name="code_driver" value="<?=$driver['code_driver'];?>" required placeholder="Digite um Nome para o cliente" autofocus />
						</div><br>

                        <div class="form-group">
							<label>Nome do motorista <span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="name_driver" value="<?=$driver['name_driver'];?>" required placeholder="Digite um CNPJ ou CPF" autofocus />
						</div><br>

                        <div class="form-group">
							<label>Função <span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="function" value="<?=$driver['function'];?>" required placeholder="00000-000" autofocus />
						</div><br>

                        <div class="form-group">
                            <label>Status <span class="text-danger">*</span></label>
                            <select name="status" class="form-control" required>
                                <option value="<?=$driver['status'];?>" >
                                    <?php if($cliente['status'] == "0"): ?>
                                        Inativo
                                    <?php else: ?>
                                        Ativo
                                    <?php endif; ?>        
                                </option>
                                <?php if($driver['status'] == "0"): ?>
                                    <option value="1">Inativo</option>
                                <?php else: ?>
                                    <option value="0">Ativo</option>
                                <?php endif; ?>  
                            </select>
						</div><br>

						<div class="form-group">
							<label>Senha <span class="text-danger">*</span></label>
							<input type="password" class="form-control" name="password" value="" placeholder="Digite a senha" autofocus />
						</div><br>
                        
                        <input type="text" value="<?=$driver['id'];?>" name="id" class="sr-only"/> 

						<input class="sr-only" type="text" name="id_user" value="<?php echo $name['id_user'] ?>">  

						<input type="submit" value="Salvar Alterações" class="btn btn-success">
					</form>	
				</div>
			</div>
		</div> <!-- end col -->
	</div> <!-- end row -->

</div>    