<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Encartel</h4>
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
                <a href="<?=BASE_URL?>colaboradores">Colaboradores</a>
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
        <div class="col-md-4">
            <div class="card card-profile card-secondary">
                <div class="card-header" style="background-color:#1269db">
                    <div class="profile-picture">
                        <div class="avatar avatar-xl">
                            <img src="<?=BASE_URL?>assets/img/colab/profile.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>
                    </div>
                </div>
                <div class="card-body" style="background-color: #1269db;">
                    <div class="user-profile text-center">
                        <div class="name text-capitalize" style="color:white;"><?=$colaborador['nome_colab']?></div>
                        <div class="job" style="color:white;"><?=$colaborador['nome_group']?></div>
                        <div class="desc" style="color:white;">
                          <?php if($colaborador['status'] == '1'): ?>
                            Demissão: <?=date('d/m/Y', strtotime($colaborador['data_demissao']))?>
                          <?php else: ?>
                            Admissão: <?=date('d/m/Y', strtotime($colaborador['data_admissao']))?>
                          <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="card-footer" style="background-color: #1269db;color:white;">
                    <div class="row user-stats text-center">
                        <div class="col">
                            <div class="number">125</div>
                            <div class="title" style="color:white;">Vendas</div>
                        </div>
                        <!-- <div class="col">
                            <div class="number">25K</div>
                            <div class="title">Followers</div>
                        </div>
                        <div class="col">
                            <div class="number">134</div>
                            <div class="title">Following</div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card card-with-nav">
                <div class="card-header">
                    <div class="row row-nav-line">
                        <ul class="nav nav-tabs nav-line nav-color-secondary" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link show" data-toggle="tab"
                                    role="tab" aria-selected="true" style="font-size:17px">Informações do Registro</a> 
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mt-3">
                        <div class="col">
                            <div class="form-group form-group-default">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Name"
                                    value="<?=$colaborador['email']?>">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <div class="form-group form-group-default">
                                <label>Registro</label>
                                <input type="text" class="form-control" id="datepicker" name="datepicker"
                                    value="<?=$colaborador['registro']?>" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-group-default">
                                <label>Salário</label>
                                <input type="text" class="form-control" id="datepicker" name="datepicker"
                                    value="R$ <?=number_format($colaborador['salario'],2,",",".")?>" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-group-default">
                                <label>Telefone</label>
                                <input type="text" class="form-control" value="<?=$colaborador['tel']?>" name=""
                                    placeholder="">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Address</label>
                                <input type="text" class="form-control" value="st Merdeka Putih, Jakarta Indonesia"
                                    name="address" placeholder="Address">
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="row mt-3 mb-1">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>About Me</label>
                                <textarea class="form-control" name="about" placeholder="About Me"
                                    rows="3">A man who hates loneliness</textarea>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>