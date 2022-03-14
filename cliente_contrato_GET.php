<?php
//OK
//Menu Sistema → Cadastros → Contratos

require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://SEU_DOMINIO/webservice/v1';
$token = 'SEU_TOKEN';
$selfSigned = true; 
$api = new IXCsoft\WebserviceClient($host, $token, $selfSigned);

$params = array(
    'qtype' => 'cliente_contrato.id',
    'query' => '',
    'oper' => '!=',
    'page' => '1',
    'rp' => '20',
    'sortname' => 'cliente_contrato.id',
    'sortorder' => 'asc'
);

$api->get('cliente_contrato', $params);
$retorno = $api->getRespostaConteudo(true);
echo '<pre>';
print_r($retorno);
?>
