<h3 class="text-center"><?=$titulo?> <b><?= date('d/m/y'); ?></b></h3><br>

<div class="row">
    <div class="col-md-12 text-center">
        <?php if($pedido): ?>
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
            <?php
                $t_frete  = 0;
                $t_pedido = 0;
            ?>
            <?php foreach($pedido as $p): ?>
                <tr>
                    <td>#<?=$p->id?></td>
                    <td><?=$p->nome?></td>
                    <td><?=($p->forma_envio == 1 ? 'Jad Log':'Outros')?></td>
                    <td>R$ <?=number_format($p->total_produto,2,',','.')?></td>
                    <td>R$ <?=number_format($p->total_frete,2,',','.')?></td>
                    <td>R$ <?=number_format($p->total_pedido,2,',','.')?></td>
                </tr>
                <?php
                    $t_frete  = $t_frete + $p->total_frete;
                    $t_pedido = $t_pedido + $p->total_pedido;
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
        <?php else :?>
            <h4 class="text-center">Não Existe Pedidos na Data de Hoje.</h4>
        <?php endif; ?>
    </div>
</div>


<style>
td {
    text-align: left;
}
</style>