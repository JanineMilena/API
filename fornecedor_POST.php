<?php
//OK
//Menu Sistema → Cadastros → Fornecedor → Botão Novo

require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://SEU_DOMINIO/webservice/v1';
$token = 'SEU_TOKEN';
$selfSigned = true; 
$api = new IXCsoft\WebserviceClient($host, $token, $selfSigned);

$dados = array(
    'razao' => 'TESTE JANINE API',
    'fantasia' => '',
    'tipo' => '',
    'tipo_plano_id' => '3',
    'data' => '18/08/2021',
    'tipo_pessoa' => 'J',
    'cpf_cnpj' => '',
    'ie_identidade' => '',
    'rg_orgao_emissor' => '',
    'contribuinte_icms' => 'N',
    'ativo' => 'S',
    'obs' => '',
    'duplicata' => '',
    'lote' => '',
    'ultima_atualizacao' => 'CURRENT_TIMESTAMP',
    'telefone' => '',
    'id_operadora_celular' => '',
    'celular' => '',
    'email' => '',
    'site' => '',
    'cep' => '',
    'endereco' => '',
    'numero' => '',
    'bairro' => '',
    'cidade' => '4376',
    'referencia' => '',
    'id_conta' => '',
    'representante' => '',
    'telefone_representante' => ''
);

$api->post('fornecedor', $dados);
$retorno = $api->getRespostaConteudo(true);
echo '<pre>';
print_r($retorno);
?>
