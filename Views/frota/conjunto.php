<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="<?=url('frota')?>">Gestão de Frota</a></li>
        <li class="breadcrumb-item active" aria-current="page">Conjuntos</li>
    </ol>
</nav> 

<div class="container" >

    <?php get_flash(); ?>
    
    <div class="btn-group">
      <button data-toggle="modal" data-target="#modal-fleet" class="btn btn-outline-success btn-sm" style="margin-top:-25px;float:right;text-transform:uppercase;">Cadastrar Frota <i class="fa fa-arrow-right"></i></button>
      <a href="<?=url('Frota/conjunto_inativo')?>" class="btn btn-outline-primary btn-sm" style="margin-top:-25px;float:right;text-transform:uppercase;">Frotas Inativas <i class="fa fa-arrow-right"></i></a>
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
                                  <th>Frota</th>
                                  <th>Tipo</th>
                                  <th>Reboque (Vinculo)</th>
                                  <th>Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($joints as $j): ?>  
                                        <?php if($j['tipo'] === "Semi Reboque"): ?>
                                          <tr>
                                            <td><?=$j['numero'];?></td>
                                            <td><?=$j['tipo']?></td>
                                            <td>Reboque (<?=$j['vinculo']?>)</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="<?=BASE_URL?>frota/edit_conjunto/<?=$j['id']?>" class="btn btn-primary btn-xs">
                                                       Editar Conjunto
                                                    </a>
                                                    <!-- <a href="<?=BASE_URL?>frota/inativar_conjunto/<?=$j['numero']?>" class="btn btn-danger btn-xs">
                                                       Inativar
                                                    </a> -->
                                                </div>
                                            </td>
                                        </tr>
                                        <?php endif; ?>  
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
        
        <!-- /.content -->
  <div class="modal fade" id="modal-fleet">
          <div class="modal-dialog  modal-lg">
            <div class="modal-content">
              <div class="modal-header" style="border-radius:0px !important;">
                <h4 class="modal-title">Cadastro de Frota</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">x</span>
                </button>
              </div>
              <div class="modal-body">
            <form action="<?= BASE_URL ?>frota/add_action" method="POST">
                <div class="row">
                <div class="form-group col">
                  <label>Frota</label>
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-truck"></i>
                      </div>
                      <input type="number" class="form-control pull-right" name="fleet" placeholder="Digite a frota" autofocus>
                    </div>
                  </div>

                  <div class="form-group col">
                  <label>Placa:</label>
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-truck"></i>
                      </div>
                      <input type="text" class="form-control pull-right" name="plaque" id="name_driver" placeholder="Digite a placa">
                    </div>
                  </div>
                </div>

                <div class="row">
                 <div class="form-group col">
                  <label>Modelo:</label>
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-truck"></i>
                      </div>
                      <input type="text" class="form-control pull-right" name="model" id="name_driver" placeholder="Digite o modelo">
                    </div>
                  </div>
                </div>

                <div class="row">
                 <div class="form-group col">
                  <label>Equipamento:</label>
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-sitemap"></i>
                      </div>
                      <input type="text" class="form-control pull-right" name="equipment" id="function" placeholder="Digite o equipamento">
                    </div>
                  </div>

                  <div class="form-group col">
                  <label>Marca:</label>
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-check-square-o"></i>
                      </div>
                      <select name="mark" class="form-control">
                        <option>Escolha o Marca</option>
                        <option value="SCANIA">Scania</option>
                        <option value="VOLVO">Volvo</option>
                        <option value="DAF">Daf</option>
                        <option value="MERCEDEZ">Mercedez</option>
                        <option value="MAN">Man</option>
                      </select>
                    </div>
                  </div>

                  <input class="sr-only" type="text" name="id_user" value="<?php echo $name['id_user'] ?>">

                </div>

                <div class="row">
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
                </div> 

              </div>
              <div class="modal-footer" style="justify-content: right;">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-success">Cadastrar Equipamento <i class="fa fa-arrow-right"></i></button>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->  