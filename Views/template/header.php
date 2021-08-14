<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title><?=$viewData['title']?></title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=url('assets/painel/img/logo.jpeg')?>">
    <link rel="icon" href="<?=url('assets/painel/img/logo.jpeg')?>" type="image/x-icon">

    <!-- Morris Charts CSS -->
    <link href="<?=url('assets/painel/vendors/morris.js/morris.css')?>" rel="stylesheet" type="text/css" />

    <!-- Toastr CSS -->
    <link href="<?=url('assets/painel/vendors/jquery-toast-plugin/dist/jquery.toast.min.css')?>" rel="stylesheet" type="text/css">

    <?php if($viewData['title'] === 'Frota'): ?>
        <link href="<?=url('assets/painel/vendors/datatables.net-dt/css/jquery.dataTables.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?=url('assets/painel/vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css')?>" rel="stylesheet" type="text/css" />
    <?php endif; ?>

    <?php if($viewData['title'] === 'Motoristas'): ?>
        <link href="<?=url('assets/painel/vendors/datatables.net-dt/css/jquery.dataTables.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?=url('assets/painel/vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css')?>" rel="stylesheet" type="text/css" />
    <?php endif; ?>

    <?php if($viewData['title'] === 'Colaboradores'): ?>
        <link href="<?=url('assets/painel/vendors/datatables.net-dt/css/jquery.dataTables.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?=url('assets/painel/vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css')?>" rel="stylesheet" type="text/css" />
    <?php endif; ?>

    <?php if($viewData['title'] === 'Abastecimento'): ?>
        <link href="<?=url('assets/painel/vendors/datatables.net-dt/css/jquery.dataTables.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?=url('assets/painel/vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css')?>" rel="stylesheet" type="text/css" />
    <?php endif; ?>

    <?php if($viewData['title'] === 'Pátio de Espera'): ?>
        <link href="<?=url('assets/painel/vendors/datatables.net-dt/css/jquery.dataTables.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?=url('assets/painel/vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css')?>" rel="stylesheet" type="text/css" />
    <?php endif; ?>

    <?php if($viewData['title'] === 'Checklist'): ?>
        <link href="<?=url('assets/painel/vendors/datatables.net-dt/css/jquery.dataTables.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?=url('assets/painel/vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css')?>" rel="stylesheet" type="text/css" />
    <?php endif; ?>

    <?php if($viewData['title'] === 'Frente'): ?>
        <link href="<?=url('assets/painel/vendors/datatables.net-dt/css/jquery.dataTables.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?=url('assets/painel/vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css')?>" rel="stylesheet" type="text/css" />
    <?php endif; ?>

    <?php if($viewData['title'] === 'Viagens'): ?>
        <link href="<?=url('assets/painel/vendors/datatables.net-dt/css/jquery.dataTables.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?=url('assets/painel/vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css')?>" rel="stylesheet" type="text/css" />
    <?php endif; ?>

    <?php if($viewData['title'] === 'Permissões'): ?>
        <link href="<?=url('assets/painel/vendors/datatables.net-dt/css/jquery.dataTables.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?=url('assets/painel/vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css')?>" rel="stylesheet" type="text/css" />
    <?php endif; ?>

    <!-- select2 CSS -->
    <link href="<?=url('assets/painel/vendors/select2/dist/css/select2.min.css')?>" rel="stylesheet" type="text/css" />

    <!-- Toggles CSS -->
    <link href="<?=url('assets/painel/vendors/jquery-toggles/css/toggles.css')?>" rel="stylesheet" type="text/css">
    <link href="<?=url('assets/painel/vendors/jquery-toggles/css/themes/toggles-light.css')?>" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="<?=url('assets/painel/dist/css/style.css')?>" rel="stylesheet" type="text/css">
</head>

<body>
<!-- HK Wrapper -->
<div class="hk-wrapper hk-alt-nav hk-icon-nav">

    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar hk-navbar-alt">
        <a class="navbar-toggle-btn nav-link-hover navbar-toggler" href="javascript:void(0);" data-toggle="collapse" data-target="#navbarCollapseAlt" aria-controls="navbarCollapseAlt" aria-expanded="false" aria-label="Toggle navigation"><span class="feather-icon"><i data-feather="menu"></i></span></a>
        <a class="navbar-brand" href="<?=url('')?>">
            <img src="<?=url('assets/painel/img/logo.jpeg')?>" style="width: 50px;height: auto;">
            Logística
        </a>
        <div class="collapse navbar-collapse" id="navbarCollapseAlt">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?=($viewData['menu'] == 'painel')?'active':''?>" href="<?=url('')?>" role="button" aria-haspopup="true" aria-expanded="false">
                        Painel
                    </a>
                </li>
                <li class="nav-item dropdown show-on-hover">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Gestão de Frota
                    </a>
                    <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <a class="dropdown-item <?=($viewData['menu'] == 'frota')?'active':''?>" href="<?=url('frota')?>"><i class="fa fa-arrow-circle-right"></i> Frota</a>
                        <a class="dropdown-item <?=($viewData['menu'] == 'conjuntos')?'active':''?>" href="<?=url('frota/conjuntos')?>"><i class="fa fa-arrow-circle-right"></i> Conjuntos</a>
                        <a class="dropdown-item <?=($viewData['menu'] == 'manutencao')?'active':''?>" href="<?=url('checklist/manutencao')?>"><i class="fa fa-arrow-circle-right"></i> Manutenção</a>
                    </div>
                </li>

                <li class="nav-item dropdown show-on-hover">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dados de Viagens
                    </a>
                    <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <a class="dropdown-item <?=($viewData['menu'] == 'viagem')?'active':''?>" href="<?=url('viagens')?>"><i class="fa fa-arrow-circle-right"></i> Viagens</a>
                        <a class="dropdown-item <?=($viewData['menu'] == 'diesel')?'active':''?>" href="<?=url('abastecimento')?>"><i class="fa fa-arrow-circle-right"></i> Abastecimento</a>
                        <a class="dropdown-item <?=($viewData['menu'] == 'espera')?'active':''?>" href="<?=url('espera')?>"><i class="fa fa-arrow-circle-right"></i> Pátio de Espera</a>
                        <a class="dropdown-item <?=($viewData['menu'] == 'check')?'active':''?>" href="<?=url('checklist')?>"><i class="fa fa-arrow-circle-right"></i> Checklist</a>
                        <a class="dropdown-item <?=($viewData['menu'] == 'checkU')?'active':''?>" href="<?=url('checklist/checklist_usina')?>"><i class="fa fa-arrow-circle-right"></i> Checklist Usina</a>
                        <a class="dropdown-item <?=($viewData['menu'] == 'frente')?'active':''?>" href="<?=url('frente')?>"><i class="fa fa-arrow-circle-right"></i> Frentes</a>
                    </div> 
                </li>
                <li class="nav-item dropdown show-on-hover">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pessoal
                    </a>
                    <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <a class="dropdown-item <?=($viewData['menu'] == 'driver')?'active':''?>" href="<?=url('motoristas')?>"><i class="fa fa-arrow-circle-right"></i> Motoristas</a>
                        <a class="dropdown-item <?=($viewData['menu'] == 'colab')?'active':''?>" href="<?=url('colaboradores')?>"><i class="fa fa-arrow-circle-right"></i> Usuários</a>
                    </div>
                </li>

                <li class="nav-item dropdown show-on-hover">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Relatórios
                    </a>
                    <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <a class="dropdown-item <?=($viewData['menu'] == 'driver')?'active':''?>" href="<?=url('motoristas')?>"><i class="fa fa-arrow-circle-right"></i> Motoristas</a>
                        <a class="dropdown-item <?=($viewData['menu'] == 'colab')?'active':''?>" href="<?=url('colaboradores')?>"><i class="fa fa-arrow-circle-right"></i> Abastecimento</a>
                        <a class="dropdown-item <?=($viewData['menu'] == 'colab')?'active':''?>" href="<?=url('colaboradores')?>"><i class="fa fa-arrow-circle-right"></i> Manutenção</a>
                        <a class="dropdown-item <?=($viewData['menu'] == 'colab')?'active':''?>" href="<?=url('colaboradores')?>"><i class="fa fa-arrow-circle-right"></i> Pátio de Espera</a>
                    </div>
                </li>

                <li class="nav-item dropdown show-on-hover <?=($viewData['title'] == 'Permissoes')?'active':''?>">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Configurações
                    </a>
                    <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <a class="dropdown-item <?=($viewData['menu'] == 'permissao')?'active':''?>" href="<?=url('permissoes')?>"><i class="fa fa-arrow-circle-right"></i> Permissões</a>
                    </div>
                </li>
            </ul>
        </div>
        <ul class="navbar-nav hk-navbar-content">
            <a class="nav-link" href="<?=url('login/logout')?>" style="display: flex;align-items: center;">
                <i class="dropdown-icon zmdi zmdi-power" style="margin-right: 5px;font-size: 20px;"></i>
                <span>Sair do sistema</span>
            </a>
        </ul>
    </nav>
    <!-- /Top Navbar -->

    <!-- Main Content -->
    <div class="hk-pg-wrapper">
        <?php $this->loadViewInTemplate($viewName, $viewData); ?>
        <!-- Footer -->
        <div class="hk-footer-wrap container">
            <footer class="footer">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <p><a href="#" class="text-dark" target="_blank">Vick Logística</a> © <?=date('Y')?></p>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <p class="d-inline-block">Versão 1.0.0</p>
                    </div>
                </div>
            </footer>
        </div>
        <!-- /Footer -->
    </div>
    <!-- /Main Content -->

</div>
<!-- /HK Wrapper -->
