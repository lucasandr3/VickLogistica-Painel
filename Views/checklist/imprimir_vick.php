<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <title>Vick Logística</title>
</head>
<body>
    
<div class="row">
        <div class="col-12">
            <div class="card m-b-30">

                <div class="card-body">
                
                <div class="" style="border:1px solid #545454;padding:10px;">
                    <div class="row">
                    <div class="col-md-12" style="margin-top:0px;display: flex;justify-content: center;">  
                        <span class="text-capitalize" style="font-size:23px;"><b style="font-weight:bold;">
                            <img src="<?=BASE_URL?>assets/painel/img/logo.jpeg" width="80" height="70">
                            <span>Inspeção Caminhão Canavieiro</span>
                        </span>
                    </div>
                    </div>
                    
                </div>

                <div class="" style="border:1px solid #545454;padding:10px;">      
                    <div class="row">
                        <div class="col-md-12" style="display: flex;justify-content: center;margin-left:20px;">
                            <span class="text-capitalize" style="font-size:13px;"><strong style="font-weight:bold;color: #0e0e0e;">Área:</strong> Transporte</span>  
                            <span class="text-capitalize" style="font-size:13px"><strong style="font-weight:bold;color: #0e0e0e;">Nº Frota:</strong> <?=json_decode($checklist['checklist_json'])->frota?>&nbsp;&nbsp;&nbsp;</span>
                            <span class="text-capitalize" style="font-size:13px"><strong style="font-weight:bold;color: #0e0e0e;">Placa:</strong> <?=json_decode($checklist['checklist_json'])->placa?>&nbsp;&nbsp;&nbsp;</span>
                            <span class="text-capitalize" style="font-size:13px"><strong style="font-weight:bold;color: #0e0e0e;">Data do checklist:</strong> <?=$checklist['date_final']?> hs</span>
                        </div>
                    </div>
                </div> 
                <!-- <br> -->

                    <div class="row">
                    <div class="col-md-12 text-center">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th style="background-color:#797979;font-weight:bold;font-size:15px;color:white;border:1px;padding:15px;">Itens Verificados</th>
                                    <th style="background-color:#797979;font-weight:bold;font-size:15px;color:white;border:1px;border-left: 1px solid #8c8c8c!important;padding:15px;">Resposta</th>
                                    <th style="background-color:#797979;font-weight:bold;font-size:15px;color:white;border:1px;">Problemas encontrados</th>
                                </tr>
                            </thead>

                            <tbody>
                            <tr>
                                        <td>Validade da Licença / CNH</td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta1->check_one?></td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta1->problem_one?></td>
                                   </tr>
                                   <tr>
                                        <td>Estado geral de Limpeza</td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta2->check_two?></td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta2->problem_two?></td>
                                   </tr>
                                   <tr>
                                        <td>Nível de Óleo do Motor</td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta3?>%</td>
                                        <td></td>
                                   </tr>
                                   <tr>
                                        <td>Nível liquído de Arrefecimento</td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta4?>%</td>
                                        <td></td>
                                   </tr>
                                   <tr>
                                        <td>Nível de Óleo da Transmissão</td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta5?>%</td>
                                        <td></td>
                                   </tr>
                                   <tr>
                                        <td>Vazamento de Óleo ?</td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta6->check_six?></td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta6->problem_six?></td>
                                   </tr>
                                   <tr>
                                        <td>Extintor de Incêndio, Manômetro e Lacre</td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta7->check_seven?></td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta7->problem_seven?></td>
                                   </tr>
                                   <tr>
                                        <td>Fárois, Luzes e Laternas de Sinalização</td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta8->check_eight?></td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta8->problem_eight?></td>
                                   </tr>
                                   <tr>
                                        <td>Mangueiras da caixa hidráulica e da linha de ar da carreta.</td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta9->check_nine?></td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta9->problem_nine?></td>
                                   </tr>
                                   <tr>
                                        <td>Pneus e rodas</td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta10->check_ten?></td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta10->problem_ten?></td>
                                   </tr>
                                   <tr>
                                        <td>Chassi</td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta11->check_eleven?></td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta11->problem_eleven?></td>
                                   </tr>
                                   <tr>
                                        <td>Escapamento / Emissão de fumaça</td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta12->check_twelve?></td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta12->problem_twelve?></td>
                                   </tr>
                                   <tr>
                                        <td>Cabina em geral</td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta13->check_thirteen?></td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta13->problem_thirteen?></td>
                                   </tr>
                                   <tr>
                                        <td>Cinto de segurança</td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta14->check_fourteen?></td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta14->problem_fourteen?></td>
                                   </tr>
                                   <tr>
                                        <td>Banco / Assento</td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta15->check_fifteen?></td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta15->problem_fifteen?></td>
                                   </tr>
                                   <tr>
                                        <td>Pára-brisas / Limpador</td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta16->check_sixteen?></td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta16->problem_sixteen?></td>
                                   </tr>
                                   <tr>
                                        <td>Direção / Articulações</td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta17->check_seventeen?></td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta17->problem_seventeen?></td>
                                   </tr>
                                   <tr>
                                        <td>Sistemas de Freios</td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta18->check_eighteen?></td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta18->problem_eighteen?></td>
                                   </tr>
                                   <tr>
                                        <td>Sinal sonoro de ré</td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta19->check_nineteen?></td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta19->problem_nineteen?></td>
                                   </tr>
                                   <tr>
                                        <td>Ar condicionado</td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta20->check_twenty?></td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta20->problem_twenty?></td>
                                   </tr>
                                   <tr>
                                        <td>Rádio de comunicação</td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta21->check_twentyOne?></td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta21->problem_twentyOne?></td>
                                   </tr>
                                   <tr>
                                        <td>Marcadores do painel</td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta22->check_twentyTwo?></td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta22->problem_twentyTwo?></td>
                                   </tr>
                                   <tr>
                                        <td>Tomada de força</td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta23->check_twentyThree?></td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta23->problem_twentyThree?></td>
                                   </tr>
                                   <tr>
                                        <td>Trava da cabine</td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta24->check_twentyFor?></td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta24->problem_twentyFor?></td>
                                   </tr>
                                   <tr>
                                        <td>Cones e triangulo de sinalização</td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta25->check_twentyFive?></td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta25->problem_twentyFive?></td>
                                   </tr>
                                   <tr>
                                        <td>Cordas de amarração</td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta26->check_twentySix?></td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta26->problem_twentySix?></td>
                                   </tr>
                                   <tr>
                                        <td>Cabos aço Tombamento</td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta27->check_twentySeven?></td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta27->problem_twentySeven?></td>
                                   </tr>
                                   <tr>
                                        <td>Cabo Aço Limitador Caixote</td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta28->check_twentyEight?></td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta28->problem_twentyEight?></td>
                                   </tr>
                                   <tr>
                                        <td>Corrente segurança julietas</td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta29->check_twentyNine?></td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta29->problem_twentyNine?></td>
                                   </tr>
                                   <tr>
                                        <td>Faixas refletivas</td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta30->check_thirty?></td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta30->problem_thirty?></td>
                                   </tr>
                                   <tr>
                                        <td>Quinta roda</td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta31->check_thirtyOne?></td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta31->problem_thirtyOne?></td>
                                   </tr>
                                   <tr>
                                        <td>Engate Boca de Lobo</td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta32->check_thirtyTwo?></td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta32->problem_thirtyTwo?></td>
                                   </tr>
                                   <tr>
                                        <td>Ponteira de Engate</td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta33->check_thirtyThree?></td>
                                        <td><?=json_decode($checklist['checklist_json'])->pergunta33->problem_thirtyThree?></td>
                                   </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-left" style="font-size:15px;font-weight:bold;background-color:#797979;color:white;height: 60px !important;"><b>Responsável Pelo Checklist</b>
                                    </td>
                                    <td style="background-color:#797979;font-weight:bold;font-size:15px;color:white;height: 60px !important;"><?=json_decode($checklist['checklist_json'])->motorista?></td>
                                </tr>
                            </tfoot>

                        </table>
                    </div>
                </div>
                <!-- <br> -->

                <div class="" style="border:1px solid #545454;padding:10px;">
                    <div class="row">
                         <div class="col-md-12" style="margin-top:0px;display: flex;justify-content: start;">  
                         <span class="text-capitalize" style="font-size:23px;color:#575962;"><b style="font-weight:bold;">
                              Irregulariedades Mecânicas Identificadas:	 	 	 	 	 	 	 
                         </span>
                         </div>
                    </div>
                </div>

                <div class="" style="border:1px solid #545454;padding:10px;">      
                    <div class="row">
                        <div class="col-md-12" style="margin-top:15px;display: flex;justify-content: start;flex-direction:column;">
                        <p style="text-transform:capitalize;"><?=json_decode($checklist['checklist_json'])->pergunta1->problem_one?></p>
                            <p style="text-transform:capitalize;"><?=json_decode($checklist['checklist_json'])->pergunta2->problem_two?></p>
                            <p style="text-transform:capitalize;"><?=json_decode($checklist['checklist_json'])->pergunta6->problem_six?></p>
                            <p style="text-transform:capitalize;"><?=json_decode($checklist['checklist_json'])->pergunta7->problem_seven?></p>
                            <p style="text-transform:capitalize;"><?=json_decode($checklist['checklist_json'])->pergunta8->problem_eight?></p>
                            <p style="text-transform:capitalize;"><?=json_decode($checklist['checklist_json'])->pergunta9->problem_nine?></p>
                            <p style="text-transform:capitalize;"><?=json_decode($checklist['checklist_json'])->pergunta10->problem_ten?></p>
                            <p style="text-transform:capitalize;"><?=json_decode($checklist['checklist_json'])->pergunta11->problem_eleven?></p>
                            <p style="text-transform:capitalize;"><?=json_decode($checklist['checklist_json'])->pergunta12->problem_twelve?></p>
                            <p style="text-transform:capitalize;"><?=json_decode($checklist['checklist_json'])->pergunta13->problem_thirteen?></p>
                            <p style="text-transform:capitalize;"><?=json_decode($checklist['checklist_json'])->pergunta14->problem_fourteen?></p>
                            <p style="text-transform:capitalize;"><?=json_decode($checklist['checklist_json'])->pergunta15->problem_fifteen?></p>
                            <p style="text-transform:capitalize;"><?=json_decode($checklist['checklist_json'])->pergunta16->problem_sixteen?></p>
                            <p style="text-transform:capitalize;"><?=json_decode($checklist['checklist_json'])->pergunta17->problem_seventeen?></p>
                            <p style="text-transform:capitalize;"><?=json_decode($checklist['checklist_json'])->pergunta18->problem_eighteen?></p>
                            <p style="text-transform:capitalize;"><?=json_decode($checklist['checklist_json'])->pergunta19->problem_nineteen?></p>
                            <p style="text-transform:capitalize;"><?=json_decode($checklist['checklist_json'])->pergunta20->problem_twenty?></p>
                            <p style="text-transform:capitalize;"><?=json_decode($checklist['checklist_json'])->pergunta21->problem_twentyOne?></p>
                            <p style="text-transform:capitalize;"><?=json_decode($checklist['checklist_json'])->pergunta22->problem_twentyTwo?></p>
                            <p style="text-transform:capitalize;"><?=json_decode($checklist['checklist_json'])->pergunta23->problem_twentyThree?></p>
                            <p style="text-transform:capitalize;"><?=json_decode($checklist['checklist_json'])->pergunta24->problem_twentyFor?></p>
                            <p style="text-transform:capitalize;"><?=json_decode($checklist['checklist_json'])->pergunta25->problem_twentyFive?></p>
                            <p style="text-transform:capitalize;"><?=json_decode($checklist['checklist_json'])->pergunta26->problem_twentySix?></p>
                            <p style="text-transform:capitalize;"><?=json_decode($checklist['checklist_json'])->pergunta27->problem_twentySeven?></p>
                            <p style="text-transform:capitalize;"><?=json_decode($checklist['checklist_json'])->pergunta28->problem_twentyEight?></p>
                            <p style="text-transform:capitalize;"><?=json_decode($checklist['checklist_json'])->pergunta29->problem_twentyNine?></p>
                            <p style="text-transform:capitalize;"><?=json_decode($checklist['checklist_json'])->pergunta30->problem_thirty?></p>
                            <p style="text-transform:capitalize;"><?=json_decode($checklist['checklist_json'])->pergunta31->problem_thirtyOne?></p>
                            <p style="text-transform:capitalize;"><?=json_decode($checklist['checklist_json'])->pergunta32->problem_thirtyTwo?></p>
                            <p style="text-transform:capitalize;"><?=json_decode($checklist['checklist_json'])->pergunta33->problem_thirtyThree?></p>
                            <p style="text-transform:capitalize;"><?=json_decode($checklist['checklist_json'])->pergunta34->problem_thirtyFor?></p>
                            <p style="text-transform:capitalize;"><?=json_decode($checklist['checklist_json'])->pergunta35->problem_thirtyFive?></p>
                            <p style="text-transform:capitalize;"><?=json_decode($checklist['checklist_json'])->pergunta36->problem_thirtySix?></p>
                        </div>
                    </div>
                </div> 

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

</div>    

<style>
    .table td {
        border-color: #8c8c8c!important;
    }
    tr {
        text-align:left;
        border: 1px solid #8c8c8c!important;
    }
    td {
        text-transform:capitalize;
        border: 1px;
        padding:10px;
    }
</style>
</body>
</html>