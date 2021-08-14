<h3 class="text-center"><?=$titulo?></h3><br>

<div class="row">
    <div class="col-md-12 text-center">
        <?php if($produtos): ?>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Cód. do Produto</th>
                    <th>Nome do Produto</th>
                    <th>Quantidade Vendida</th>
                </tr>
            </thead>

            <tbody>
        
            <?php foreach($produtos as $p): ?>
                <tr>
                    <td>#<?=$p->cod_produto?></td>
                    <td><?=$p->nome_produto?></td>
                    <td><?=$p->quant_vendida?></td>
                </tr>
            <?php endforeach; ?>    
            </tbody>
        </table>
        <?php else :?>
            <h4 class="text-center">Não Existe Dados Para Exibir na Data de Hoje.</h4>
        <?php endif; ?>
    </div>
</div>


<style>
td {
    text-align: left;
}
</style>