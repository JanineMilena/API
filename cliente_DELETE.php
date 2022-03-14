<?php
//OK
//Menu Sistema → Cadastros → Clientes → Botão Deletar

require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://SEU_DOMINIO/webservice/v1';
$token = 'SEU_TOKEN';
$selfSigned = true; 
$api = new IXCsoft\WebserviceClient($host, $token, $selfSigned);

$registro = ''; //registro a ser deletado

$api->delete('cliente', $registro);
$retorno = $api->getRespostaConteudo(true);
echo '<pre>';
print_r($retorno);
?>
