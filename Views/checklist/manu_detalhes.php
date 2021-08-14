<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="<?=url('checklist/manutencao')?>">Dados de Viagens</a></li>
        <li class="breadcrumb-item active" aria-current="page">Checklist</li>
        <li class="breadcrumb-item active" aria-current="page">Detalhes de Manutenção #<?=$manutencao['id']?></li>
    </ol>
</nav>

<div class="container" >

    <div class="btn-group">
        <a href="<?=url('checklist/manutencao')?>" class="btn btn-outline-success btn-sm" style="margin-top:-25px;float:right;text-transform:uppercase;"><i class="fa fa-arrow-left"></i> Voltar</a>
        <a href="<?=url('checklist/imprimir/'.$checklist['id'])?>" target="_blank" class="btn btn-outline-primary btn-sm" style="margin-top:-25px;float:right;text-transform:uppercase;"><i class="fa fa-print"></i> Imprimir</a>
        <a href="<?=url('checklist/pdf/'.$checklist['id'])?>" class="btn btn-outline-primary btn-sm" style="margin-top:-25px;float:right;text-transform:uppercase;"><i class="fa fa-file"></i> PDF</a>
    </div>

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
            <div class="" style="border:1px solid #cacaca;padding:10px;">
                    <div class="row">
                    <div class="col-md-12" style="margin-top:0px;display: flex;justify-content: start;align-items:center;">  
                        <span class="text-capitalize" style="font-size:23px;"><b style="font-weight:bold;">
                            <img src="<?=BASE_URL?>assets/painel/img/logo.jpeg" width="80" height="70">
                        </span>
                        <span style="font-size:22px;">Manutenção - <?=json_decode($manutencao['manutencao_json'])->equipamento?> </span>
                    </div>
                    </div>
                    
                </div>

                <div class="" style="border:1px solid #cacaca;padding:20px;">      
                    <div class="row">
                        <div class="col-md-12" style="display: flex;justify-content: space-between;">
                            <span class="text-capitalize" style="font-size:13px;"><strong style="font-weight:bold;color: #0e0e0e;">Tipo:</strong> <?=json_decode($manutencao['manutencao_json'])->tipo?></span>  
                            <span class="text-capitalize" style="font-size:13px"><strong style="font-weight:bold;color: #0e0e0e;">Nº Frota:</strong> <?=json_decode($manutencao['manutencao_json'])->frota?>&nbsp;&nbsp;&nbsp;</span>
                            <span class="text-capitalize" style="font-size:13px"><strong style="font-weight:bold;color: #0e0e0e;">Equipamento:</strong> <?=json_decode($manutencao['manutencao_json'])->equipamento?>&nbsp;&nbsp;&nbsp;</span>
                            <span class="text-capitalize" style="font-size:13px"><strong style="font-weight:bold;color: #0e0e0e;">Data:</strong> <?=json_decode($manutencao['manutencao_json'])->hora?> hs</span>
                        </div>
                    </div>
                </div> 
                <!-- <br> -->

                    <div class="row">
                    <div class="col-md-12 text-center">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th style="background-color:#797979;font-weight:bold;font-size:15px;color:white;border:1px;">Problema</th>
                                    <th style="background-color:#797979;font-weight:bold;font-size:15px;color:white;border:1px;border-left: 1px solid #8c8c8c!important;">Descrição</th>
                                </tr>
                            </thead>

                            <tbody>
                                   <tr>
                                        <td><?=json_decode($manutencao['manutencao_json'])->titulo?></td>
                                        <td><?=json_decode($manutencao['manutencao_json'])->descricao?></td>
                                   </tr>
                            </tbody>
                        </table>
            </section>
        </div>
    </div>
    <!-- /Row -->

</div>
<!-- /Breadcrumb -->