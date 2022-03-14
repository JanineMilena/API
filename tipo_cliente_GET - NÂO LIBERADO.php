<?php
//OK
//Menu Sistema → Cadastros → Pasta Clientes → Tipos de clientes

require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://SEU_DOMINIO/webservice/v1';
$token = 'SEU_TOKEN';
$selfSigned = true; 
$api = new IXCsoft\WebserviceClient($host, $token, $selfSigned);

$params = array(
    'qtype' => 'tipo_cliente.id',
    'query' => '',
    'oper' => '!=',
    'page' => '1',
    'rp' => '5',
    'sortname' => 'tipo_cliente.id',
    'sortorder' => 'asc'
);

$api->get('tipo_cliente', $params);
$retorno = $api->getRespostaConteudo(true);
echo '<pre>';
print_r($retorno);
?>
