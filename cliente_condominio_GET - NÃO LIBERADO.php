<?php
//OK
//Menu Sistema → Cadastros → Pasta Clientes → Condomínios

require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://SEU_DOMINIO/webservice/v1';
$token = 'SEU_TOKEN';
$selfSigned = true; 
$api = new IXCsoft\WebserviceClient($host, $token, $selfSigned);

$params = array(
    'qtype' => 'cliente_condominio.id',
    'query' => '',
    'oper' => '!=',
    'page' => '1',
    'rp' => '5',
    'sortname' => 'cliente_condominio.id',
    'sortorder' => 'asc'
);

$api->get('cliente_condominio', $params);
$retorno = $api->getRespostaConteudo(true);
echo '<pre>';
print_r($retorno);
?>
