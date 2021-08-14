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

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h4 class="card-title"><?=$titulo?></h4>
                            
                        </div>
                        <div class="col">
                        <div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon" aria-hidden="true"></i>
									</button>
								</div>
								<select name="" id="" class="form-control" onchange="userAccess(this.value)">
                                    <option>Escolha um Usuário</option>
                                    <?php foreach($users as $u) : ?>
                                        <option value="<?=$u['nome_user']?>"><?=$u['nome_user']?></option>
                                    <?php endforeach; ?>
                                </select>
							</div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="loading" style="display:none;text-align:center;">
                         <i class="fa fa-refresh fa-4x fa-spin"></i>              
                    </div> 
                    <div class="presel">
                         <p>Por Favor, Selecione um usuário.</p>               
                    </div>                    
                    <div class="sel" style="display:none;">
                        <table id="table_res" class="table table-striped table-hover">
                            <thead>
                                <tr>
									<th>Ação</th>
                                </tr>
                            </thead>
                            <tbody id="body-access">	


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>