<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="<?=url('frota')?>">Pessoal</a></li>
        <li class="breadcrumb-item active" aria-current="page">Motoristas</li>
    </ol>
</nav>

<div class="container" >

    <?php get_flash(); ?>
    
    <div class="btn-group">
      <button data-toggle="modal" data-target="#modal-driver" class="btn btn-outline-success btn-sm" style="margin-top:-25px;float:right;text-transform:uppercase;">Cadastrar Motorista <i class="fa fa-arrow-right"></i></button>
      <a href="<?=url('motoristas/inativos')?>" class="btn btn-outline-primary btn-sm" style="margin-top:-25px;float:right;text-transform:uppercase;">Motoristas Inativos <i class="fa fa-arrow-right"></i></a>
    </div>
    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <div class="row">
                    <div class="col-sm">
                        <div class="table-wrap">
                            <table id="datable_1" class="table w-100 display pb-30">
                                <thead>
                                <tr>
                                    <th>Matrícula</th>
                                    <th>Nome</th>
                                    <th>Função</th>
                                    <th>Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($drivers as $d): ?>  
                                        <tr>
                                            <td><?=$d['code_driver'];?></td>
                                            <td class="text-capitalize"><?=$d['name_driver'];?></td>
                                            <td class="text-capitalize"><?=$d['function']?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="<?=BASE_URL?>motoristas/edit/<?=$d['id']?>" class="btn btn-primary btn-xs">
                                                        <i class="fa fa-pencil"></i> Editar
                                                    </a>
                                                    <a href="<?=BASE_URL?>motoristas/desligar/<?=$d['name_driver']?>" class="btn btn-danger btn-xs">
                                                        <i class="fa fa-window-close-o"></i> Desligar
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                  <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- /Row -->

</div>
<!-- /Breadcrumb -->


        <!-- /.content -->
  <div class="modal fade" id="modal-driver">
          <div class="modal-dialog  modal-lg">
            <div class="modal-content">
              <div class="modal-header" style="border-radius:0px !important;">
                <h4 class="modal-title">Cadastro de Motorista</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">x</span>
                </button>
              </div>
              <div class="modal-body">
            <form action="<?= BASE_URL ?>motoristas/add_action" method="POST">
                <div class="row">
                <div class="form-group col">
                  <label>Matrícula:</label>
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-pencil"></i>
                      </div>
                      <input type="number" class="form-control pull-right" name="code_driver" placeholder="Digite a matrícula" autofocus>
                    </div>
                  </div>
                </div>

                <div class="row">
                 <div class="form-group col">
                  <label>Nome do motorista:</label>
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-user"></i>
                      </div>
                      <input type="text" class="form-control pull-right" name="name_driver" id="name_driver" placeholder="Digite o nome">
                    </div>
                  </div>
                </div>

                <div class="row">
                 <div class="form-group col">
                  <label>Função:</label>
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-sitemap"></i>
                      </div>
                      <input type="text" class="form-control pull-right" name="function" id="function" placeholder="Digite a função">
                    </div>
                  </div>

                  <div class="form-group col">
                  <label>Status:</label>
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-check-square-o"></i>
                      </div>
                      <select name="status" class="form-control">
                        <option value="">Escolha o Status</option>
                        <option value="0">Ativo</option>
                        <option value="1">Inativo</option>
                      </select>
                    </div>
                  </div>

                  <input class="sr-only" type="text" name="id_user" value="<?php echo $name['id_user'] ?>">

                </div>

                <div class="row">
                    <div class="form-group col-12">
                    <label>Senha:</label>
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-lock"></i>
                        </div>
                        <input type="password" class="form-control pull-right" name="password" id="name_driver" placeholder="Digite uma senha">
                        </div>
                    </div>
                  </div> 

              </div>
              <div class="modal-footer" style="justify-content: right;">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-success">Cadastrar Motorista <i class="fa fa-arrow-right"></i></button>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->  
<style>
  input, select {
    border-top-left-radius: 0px !important;
    border-bottom-left-radius: 0px !important;
  }
  .input-group-text {
    border-top-right-radius: 0px;
    border-bottom-right-radius: 0px;
  }
</style>        