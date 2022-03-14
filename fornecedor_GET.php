<?php
//OK
//Menu Sistema → Cadastros → Fornecedor

require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://SEU_DOMINIO/webservice/v1';
$token = 'SEU_TOKEN';
$selfSigned = true; 
$api = new IXCsoft\WebserviceClient($host, $token, $selfSigned);

$params = array(
    'qtype' => 'fornecedor.id',
    'query' => '',
    'oper' => '!=',
    'page' => '1',
    'rp' => '5',
    'sortname' => 'fornecedor.id',
    'sortorder' => 'asc'
);

$api->get('fornecedor', $params);
$retorno = $api->getRespostaConteudo(true);
echo '<pre>';
print_r($retorno);
?>
