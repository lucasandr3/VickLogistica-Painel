<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista de Produtos</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?=BASE_URL?>assets/pdf/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=BASE_URL?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Google Font -->
    <!-- Fonts and icons -->
	<script src="<?=BASE_URL?>assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['<?=BASE_URL?>assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
</head>

<body>  
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-header">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3><?=$peds_prods['cliente']?></h3>
                        <!-- <h3>Lista de Produtos<b> Pedido Nº #<?=$peds_prods['id_pedido']?></b></h3><br> -->
                    </div>
                </div>
                </div>
                <div class="card-body">
<?php
echo "<pre>";
print_r($peds_prods);
exit;?>
                <div class="" style="border:1px solid #cacaca;padding:10px;">
                    <div class="row">
                    <div class="col-md-12" style="margin-top:0px;display: flex;justify-content: space-between;">
                        <span class="text-capitalize" style="font-size:13px;"><b style="font-weight:bold;">Cliente:</b> <?= $peds_prods['nome_cliente']?>&nbsp;&nbsp;&nbsp;</span>  
                        <span class="text-capitalize" style="font-size:13px"><b style="font-weight:bold;">CNPJ:</b> <?=$peds_prods['doc']?>&nbsp;&nbsp;&nbsp;</span>
                        <?php if($peds_prods['ie'] == ''): ?>
                            <span style="font-size:13px;"><b style="font-weight:bold;">IE:</b> 000.000.000/0000&nbsp;&nbsp;&nbsp;</span>
                        <?php else: ?>
                            <span style="font-size:13px;"><b style="font-weight:bold;">IE:</b> <?= $peds_prods['ie']?>&nbsp;&nbsp;&nbsp;</span>
                        <?php endif; ?>  
                        <span style="font-size:13px"><b style="font-weight:bold;">E-mail:</b> <?=$peds_prods['email']?></span>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12" style="margin-top:15px;display: flex;justify-content: space-between;">
                        <span class="text-capitalize" style="font-size:13px;"><b style="font-weight:bold;">Endereço:</b> <?= $peds_prods['endereco']?>&nbsp;&nbsp;&nbsp;</span>  
                        <span class="text-capitalize" style="font-size:13px"><b style="font-weight:bold;">Cidade:</b> <?=$peds_prods['cidade']?>&nbsp;&nbsp;&nbsp;</span>
                        <span class="text-capitalize" style="font-size:13px"><b style="font-weight:bold;">Cep:</b> <?=$peds_prods['cep']?>&nbsp;&nbsp;&nbsp;</span>
                        <span style="font-size:13px"><b style="font-weight:bold;"></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                    </div>
                    </div>
                </div>

                <div class="" style="border:1px solid #cacaca;padding:10px;">
                    <div class="row">
                    <div class="col-md-12" style="margin-bottom:10px;display: flex;justify-content: space-between;">
                        <?php if($peds_prods['obs'] == null): ?>
                            <span class="text-capitalize" style="font-size:13px;"><b style="font-weight:bold;">Observação:</b> Nenhuma Observação</span>
                        <?php else: ?>
                            <span class="text-capitalize" style="font-size:13px;"><b style="font-weight:bold;">Observação:</b> <?=$peds_prods['obs']?></span> 
                        <?php endif; ?>          
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12" style="margin-top:0px;display: flex;justify-content: space-between;">
                        <?php if($peds_prods['pagamento'] == null): ?>
                            <span class="text-capitalize" style="font-size:13px;"><b style="font-weight:bold;">Forma de Pagamento:</b> Não Informado</span>
                        <?php else: ?>
                            <span class="text-capitalize" style="font-size:13px;"><b style="font-weight:bold;">Forma de Pagamento:</b> <?= $peds_prods['pagamento']?></span>
                        <?php endif; ?>            
                    </div>
                    </div>
                </div>               
                <br>

                    <div class="row">
                    <div class="col-md-12 text-center">
                        <table class="table table-striped table-bordered">
                            <thead style="padding:10px;">
                                <tr>
                                    <th>Código</th>
                                    <th>Produto</th>
                                    <th>Quantidade</th>
                                    <th>Preço</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach(json_decode($peds_prods['prods_json']) as $pp): ?>  
                                   <tr>
                                       <td><?=$pp->codigo?></td>
                                       <td><?=$pp->nome?></td>
                                       <td>
                                           <?php if ($pp->qt > 1): ?>
                                               <?=$pp->qt?> Unidades
                                           <?php else: ?>   
                                               <?=$pp->qt?> Unidade 
                                           <?php endif; ?>
                                       </td>
                                       <?php
                                       $subTotal = ($pp->preco * $pp->qt);
                                       ?>
                                       <td>R$ <?=number_format($pp->preco,2,",",".")?></td>
                                       <td>R$ <?=number_format($subTotal,2,",",".")?></td>
                                   </tr>
                               <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4" class="text-left" style="font-size:15px;font-weight:bold;background-color:#797979;color:white;"><b>Total Produtos</b>
                                    </td>
                                    <td style="background-color:#797979;font-weight:bold;font-size:13px;color:white;">R$ <?= number_format($peds_prods['total'],2,",",".")?></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

</div>
<style>
    td, th {
        padding:1px;
        
    }

</style>
</body>
</html>    