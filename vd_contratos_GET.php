<?php
//OK
//Menu Sistema → Cadastros → Pasta Contratos → Planos de venda

require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://SEU_DOMINIO/webservice/v1';
$token = 'SEU_TOKEN';
$selfSigned = true; 
$api = new IXCsoft\WebserviceClient($host, $token, $selfSigned);

$params = array(
    'qtype' => 'vd_contratos.id',
    'query' => '',
    'oper' => '!=',
    'page' => '1',
    'rp' => '5',
    'sortname' => 'vd_contratos.id',
    'sortorder' => 'asc'
);

$api->get('vd_contratos', $params);
$retorno = $api->getRespostaConteudo(true);
echo '<pre>';
print_r($retorno);
?>
