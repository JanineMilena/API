<?php
//OK
//Menu Sistema → Cadastros → Pasta Contratos → Tipo de cobrança → Botão Editar

require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://SEU_DOMINIO/webservice/v1';
$token = 'SEU_TOKEN';
$selfSigned = true; 
$api = new IXCsoft\WebserviceClient($host, $token, $selfSigned);

$dados = array(
    'ativo' => 'S',
    'tipo_contrato' => 'TESTE API JANINE EDIÇÃO',
    'tipo_pagamento' => 'Pos',
    'base_periodo_prestacao' => 'V',
    'id_condicoes_pagamento' => '14',
    'avisar_dias' => '15',
    'bloquear_dias' => '30',
    'bloqueio_renegociado_n_dias' => '3',
    'periodo' => 'M',
    'qtd_periodos' => '12',
    'ordem' => '',
    'ultima_atualizacao' => '',
    'parcela_cobrar_proporcional' => '1',
    'dias_proporcional_cob_mes' => '0',
    'parcelas_cob_adicional' => '1',
    'max_titulos_abertos_gerar_contrato' => '0',
    'dias_carencia_pre' => '1'
);

$registro = '5'; //Registro a ser editado
$api->put('cliente_contrato_tipo', $dados, $registro);
$retorno = $api->getRespostaConteudo(true);
echo '<pre>';
print_r($retorno);
?>
