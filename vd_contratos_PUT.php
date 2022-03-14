<?php
//OK
//Menu Sistema → Cadastros → Pasta Contratos → Planos de venda → Botão Editar

require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://SEU_DOMINIO/webservice/v1';
$token = 'SEU_TOKEN';
$selfSigned = true; 
$api = new IXCsoft\WebserviceClient($host, $token, $selfSigned);

$dados = array(
    'tipo' => 'I',
    'nome' => '',
    'descricao' => '',
    'moeda' => 'R$',
    'id_tipo_documento' => '',
    'id_modelo' => '',
    'id_carteira_cobranca' => '',
    'id_vendedor' => '',
    'id_filial' => '',
    'comissao' => '',
    'valor_contrato' => '',
    'limitar_n_logins' => 'S',
    'logins_simultaneos' => '1',
    'Ativo' => 'S',
    'tipo_doc_opc' => '',
    'tipo_doc_opc2' => '',
    'tipo_doc_opc3' => '',
    'tipo_doc_opc4' => '',
    'mostrar_na_viabilidade' => 'N',
    'ultima_atualizacao' => 'CURRENT_TIMESTAMP',
    'tel_franquia_segundos' => '',
    'tel_franquia_prefix' => '',
    'id_cidade' => '',
    'id_tipo_doc_ativ' => '',
    'id_produto_ativ' => '',
    'id_cond_pag_ativ' => '',
    'id_vendedor_ativ' => '',
    'utilizar_desconto_ate_vencimento' => 'N',
    'utilizar_desconto_por_repeticao' => 'N',
    'utilizar_desconto_no_produto_plano' => 'N',
    'qtde_repeticoes_desconto' => '',
    'id_produto_ate_vencimento' => '',
    'id_produto_contrato_vinc' => '',
    'valor_desconto' => ''
);

$registro = ''; //Registro a ser editado
$api->put('vd_contratos', $dados, $registro);
$retorno = $api->getRespostaConteudo(true);
echo '<pre>';
print_r($retorno);
?>
