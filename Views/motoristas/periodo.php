<?php if($periodo): ?>
<h3 class="text-center"><?=$titulo?> Entre <b><?= date('d/m/Y', strtotime($di)); ?></b> A
    <b><?= date('d/m/Y', strtotime($df)); ?></b></h3><br>
<div class="row col-md-12">
    <form action="<?= base_url('admin/pedidos/periodo') ?>" method="post" class="form-horizontal">

        <div class="row col-md-4">
            <div class="form-group">
                <label class="col-sm-5 control-label">Data Inicial: </label>
                <div class="col-sm-4">
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="date" name="data_inicial" class="form-control pull-right"
                            value="<?= set_value("data_inicial") ?>">
                    </div>
                </div>
            </div>
        </div>

        <div class="row col-md-4">
            <div class="form-group">
                <label class="col-sm-5 control-label">Data Final: </label>
                <div class="col-sm-4">
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="date" name="data_final" class="form-control pull-right"
                            value="<?= set_value("data_final") ?>">
                    </div>
                </div>
            </div>
        </div>

        <div class="row col-md-4">
            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-10">
                    <button type="submit" class="btn btn-success">Mostrar Relatório</button>
                </div>
            </div>
        </div>

    </form>

</div>
<div class="row">
    <div class="col-md-12 text-center">
        <hr />
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nº do Pedido</th>
                    <th>Cliente</th>
                    <th>Data do Pedido</th>
                    <th>Total Produto</th>
                    <th>Valor Frete</th>
                    <th>Total</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $t_frete  = 0;
                $t_pedido = 0;
            ?>
                <?php foreach($periodo as $periodo): ?>
                <tr>
                    <td>#<?=$periodo->id?></td>
                    <td class="text-capitalize"><?=$periodo->nome?></td>
                    <td>
                        <?php
                        setlocale (LC_ALL, 'pt_br');
                        echo strftime("%e %B %Y", strtotime($periodo->data_cadastro));
                        ?>
                    </td>
                    <td>R$ <?=number_format($periodo->total_produto,2,',','.')?></td>
                    <td>R$ <?=number_format($periodo->total_frete,2,',','.')?></td>
                    <td>R$ <?=number_format($periodo->total_pedido,2,',','.')?></td>
                </tr>
                <?php
                    $t_frete  = $t_frete + $periodo->total_frete;
                    $t_pedido = $t_pedido + $periodo->total_pedido;
                ?>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="text-right" style="font-size:17px;"><b>Total</b></td>
                    <td>R$ <?=number_format($t_frete,2,',','.')?></td>
                    <td>R$ <?=number_format($t_pedido,2,',','.')?></td>
                </tr>
            </tfoot>
        </table>

    </div>
</div>

<?php else : ?>

<h3 class="text-center"><?=$titulo?></h3><br>

<div class="row col-md-12">
    <form action="<?= base_url('admin/pedidos/periodo') ?>" method="post" class="form-horizontal">

        <div class="row col-md-4">
            <div class="form-group">
                <label class="col-sm-5 control-label">Data Inicial: </label>
                <div class="col-sm-4">
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="date" name="data_inicial" class="form-control pull-right">
                    </div>
                </div>
            </div>
        </div>

        <div class="row col-md-4">
            <div class="form-group">
                <label class="col-sm-5 control-label">Data Final: </label>
                <div class="col-sm-4">
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="date" name="data_final" class="form-control pull-right">
                    </div>
                </div>
            </div>
        </div>

        <div class="row col-md-4">
            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-10">
                    <button type="submit" class="btn btn-success">Mostrar Relatório</button>
                </div>
            </div>
        </div>

    </form>

</div>

<div class="row">
    <div class="col-md-12 text-center">
        <hr />
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nº do Pedido</th>
                    <th>Cliente</th>
                    <th>Tipo de Frete</th>
                    <th>Total Produto</th>
                    <th>Valor Frete</th>
                    <th>Total</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td colspan="6" class="text-center">Nenhum Periodo Selecionado</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="text-right" style="font-size:17px;"><b>Total</b></td>
                    <td></td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<?php endif; ?>
<style>
td {
    text-align: left;
}
</style>