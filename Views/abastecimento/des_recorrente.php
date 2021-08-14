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
                <a href="#"><?=$titulo?></a>
            </li>
        </ul>
    </div>

    <div class="row">
		<div class="col-12">

      <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong><i class="icon fa fa-info"></i> <?=$name['nome_user']?></strong>
         - Nesta Tela Você Pode Acompanhar Compras que você ira pagar em parcelas.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="line-height:0px;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div style="margin-left:0px;margin-bottom:5px;">
        <button class="btn btn-success" data-toggle="modal" data-target="#modal-default">
          <i class="fa fa-plus-square"></i> Nova Despesa
        </button>
      </div>

			<div class="card m-b-30">
				<div class="card-body">
					
					<table id="table_res" class="table table-striped table-hover">
						<thead>
							<tr>
                <th>Descrição</th>
                <th>Total</th>
                <th>Entrada</th>
                <th>V.Parcela</th>
                <th>Parcelas</th>
                <th>Datas de Recebimento</th>
							</tr>
						</thead>

						<tbody>
              <?php foreach($list_reco as $item): ?>
                  <tr>
                  <td><?php echo $item['descricao'] ?></td>
                  <td width="90">
                    <strong>
                      <?php $new_valor_total = (($item['juro']/100)*$item['valor']) ?>
                      <?php $total_juros = $new_valor_total + $item['valor'] ?>
                      <?php echo 'R$ '.number_format($total_juros,2,',','.') ?>
                    </strong>
                  </td>
                  <td><strong>R$ <?php echo number_format($item['ventrada'],2,',','.') ?></strong></td>
                  <td class="text-red">
                    <strong>
                    <?php if ($total_juros == $item['valor']): ?>
                      <?php $new_valor = $item['valor'] - $item['ventrada'] ?>
                      <?php $valor_parc = $new_valor/$item['qtd_parc'] ?>
                      <?php echo 'R$ '.number_format($valor_parc,2,',','.')." <small>Sem Juros</small>" ?>   
                    <?php else : ?>
                      <?php $new_valor = $total_juros - $item['ventrada'] ?>
                      <?php $valor_parc = $new_valor/$item['qtd_parc'] ?>
                      <?php echo 'R$ '.number_format($valor_parc,2,',','.')." <small>Com Juros</small>" ?> 
                    <?php endif ?>
                  </strong>
                  </td>
                  <td><?php echo $item['qtd_parc'] ?> Parcelas</td>
                  <td>
                    <button class="btn btn-danger fundor btn-xs" style="margin-right:-4px;margin-left:3px">
                      <?php echo date('d/m/Y', strtotime($item['data_parc'])) ?>
                    </button>
                    <?php $qtdp       = $item['qtd_parc'] ?>
                    <?php $vparc      = $item['valor'] ?>
                    <?php $data_atual = $item['data_parc'] ?>
                    <?php for ($i=1; $i < $qtdp; $i++) { 
                      $data = date('Y-m-d', strtotime('+ 1 month', strtotime($data_atual)));
                      $data_atual = $data;
                      echo "<button class='btn btn-danger fundor btn-xs' style='margin-left:3px'>".
                      date('d/m/Y', strtotime($data)).
                      "</button>";
                    } 
                    ?>
                  </td>
                  </tr>
              <?php endforeach ?>
						</tbody>
					</table>

				</div>
			</div>
		</div> <!-- end col -->
	</div> <!-- end row -->
</div>   

  <div class="modal fade" id="modal-default">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header" style="background-color:#605ca8;border-radius:0px;">
                <h4 class="modal-title text-center" style="color:white">Cadastro de Despesas</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" style="color:white">x</span>
                </button>
              </div>
              <div class="modal-body">
        <form action="<?php echo BASE_URL ?>despesas/addReco" method="POST">
                <div class="row">
                  <div class="form-group col">
                  <label>Descrição:</label>
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-pencil"></i>
                      </div>
                      <input type="text" class="form-control pull-right" name="descricao" autofocus>
                    </div>
                  </div>

                  <div class="form-group col">
                  <label>Valor:</label>
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-money"></i>
                      </div>
                      <input type="text" class="form-control pull-right" name="valor" id="valordes" placeholder="0.00">
                    </div>
                  </div>

                  <div class="form-group col">
                  <label>V.Entrada:</label>
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-money"></i>
                      </div>
                      <input type="text" class="form-control pull-right" name="ventrada" value="0.00"  id="valorendes" placeholder="0.00">
                    </div>
                  </div>

                  <div class="form-group col">
                  <label>Juros:</label>
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i>%</i>
                      </div>
                      <input type="text" class="form-control pull-right" name="juro" value="0.0" id="jurodes" placeholder="0.0">
                    </div>
                  </div>
                </div>

                <div class="row">
                <div class="form-group col">
                  <label>Data de Vencimento:</label>
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="date" class="form-control pull-right" id="datades" name="data_parc" placeholder="00/00/0000">
                    </div>
                  </div>

                  <div class="form-group col">
                  <label>Qtd Parcelas:</label>
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-file-text-o"></i>
                      </div>
                      <input type="text" class="form-control pull-right" name="qtd_parc">
                    </div>
                  </div>
                </div>

                <div class="row">
                <div class="form-group col">
                  <label>Conta:</label>
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-bank"></i>
                      </div>
                      <select name="conta" class="form-control">
                        <option value="Conta Inicial">Conta Inicial</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group col">
                  <label>Categoria:</label>
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-sitemap"></i>
                      </div>
                      <select name="id_cat" class="form-control">
                        <option value="">Categorias</option>
                        <?php foreach($cat_des as $cat):?>
                        <option value="<?php echo $cat['id'] ?>"><?php echo $cat['nome'] ?></option>
                        <?php endforeach ?>
                      </select>
                    </div>
                  </div>

                  <input class="sr-only" type="text" name="id_user" value="<?=$name['id_user'] ?>">
                </div>

              </div>
              <div class="modal-footer" style="justify-content:normal;">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-success"><i class="fa fa-database"></i> Salvar</button>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->