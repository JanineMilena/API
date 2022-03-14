<?php
//OK
//Menu Sistema → Cadastros → Produtos → Botão Editar

require(__DIR__ . DIRECTORY_SEPARATOR . 'WebserviceClient.php');
$host = 'https://SEU_DOMINIO/webservice/v1';
$token = 'SEU_TOKEN';
$selfSigned = true; 
$api = new IXCsoft\WebserviceClient($host, $token, $selfSigned);

$dados = array(
    'ativo' => 'S',
    'subgrupo_tipo' => '',
    'id_sub_grupo' => '3',
    'id_tabela_fipe' => '',
    'descricao' => 'TESTE API JANINE EDIÇÃO',
    'descricao_alt' => '',
    'codigo_barras' => '',
    'codigo_tecido' => '',
    'qtde_min' => '',
    'qtde_max' => '',
    'tipo' => 'C',
    'controla_estoque' => 'N',
    'movimentacao' => 'V',
    'unidade' => '13',
    'vencimento_garantia' => '',
    'id_categoria_patrimonio' => '',
    'preco_base' => '100,00',
    'margem_lucro' => '',
    'aceita_valor' => 'P',
    'pcomissao' => '',
    'codigo' => '',
    'ultima_atualizacao' => 'CURRENT_TIMESTAMP',
    'icms_issqn' => 'ICMS',
    'id_class_fiscal' => '2',
    'id_class_fiscal_entrada' => '',
    'ncm' => '',
    'id_produtos_ncm_cest' => '',
    'cod_servico' => '',
    'id_conta_estoque' => '',
    'id_conta_despesa' => '',
    'id_conta_receita' => '',
    'id_conta_comodato' => '',
    'id_classe_financeira' => '',
    'vICMSSTRet' => '',
    'iss_natureza_operacao' => '1',
    'controle_impressao_etiqueta' => '5',
    'ecommerce' => 'P',
    'ecommerce_pg_inicial' => 'S',
    'mostra_valor_ecommerce' => '0',
    'tipo_ecommerce' => 'X',
    'ecommerce_prioridade' => '1',
    'valor_prefixo' => 'por',
    'valor_sufixo' => '',
    'descricao_completa' => '',
    'checkbox1' => 'S',
    'checkbox2' => 'S',
    'checkbox3' => 'S',
    'checkbox4' => 'S',
    'checkbox5' => 'S',
    'checkbox6' => 'S',
    'checkbox7' => 'S',
    'checkbox8' => 'S',
    'checkbox9' => 'S',
    'checkbox10' => 'S',
    'checkbox11' => 'S',
    'checkbox12' => 'S',
    'checkbox13' => 'S',
    'checkbox14' => 'S',
    'checkbox15' => 'S',
    'checkbox16' => 'S',
    'checkbox17' => 'S',
    'checkbox18' => 'S',
    'checkbox19' => 'S',
    'checkbox20' => 'S',
    'checkbox21' => 'S',
    'checkbox22' => 'S',
    'checkbox23' => 'S',
    'checkbox24' => 'S',
    'checkbox25' => 'S',
    'checkbox26' => 'S',
    'checkbox27' => 'S',
    'checkbox28' => 'S',
    'checkbox29' => 'S',
    'checkbox30' => 'S',
    'checkbox31' => 'S',
    'checkbox32' => 'S',
    'checkbox33' => 'S',
    'checkbox34' => 'S',
    'checkbox35' => 'S',
    'checkbox36' => 'S',
    'checkbox37' => 'S',
    'checkbox38' => 'S',
    'checkbox39' => 'S',
    'checkbox40' => 'S',
    'imagem' => '',
    'saldo' => '',
    'valor' => '',
    'valor_custo' => '',
    'custo_medio' => '',
    'custo_medio_total' => '0.00',
    'qtde_tecido_base' => '',
    'qtde_tecido_almofadas' => '',
    'pesob' => '',
    'pesol' => '',
    'altura' => '',
    'largura' => '',
    'profundidade' => '',
    'plataforma' => '',
    'tv_id_plataforma' => '',
    'tv_LineUp' => '',
    'tv_data_inicial' => '',
    'tv_data_final' => '',
    'tv_id_pacote_servicos' => '',
    'tv_id_pacote_servicos_watch' => '',
    'descricao_pacote_watch' => '',
    'total_tickets_watch' => '',
    'id_integracao_tv' => '',
    'tv_id_pacotes' => '',
    'tv_id_pacote_temporario' => '',
    'tv_dias_expiracao_pacote_temporario' => '',
    'tv_mus_produtos_disponiveis' => '',
    'produto_playhub' => 'NULL',
    'chassi' => '',
    'renavan' => '',
    'km' => '',
    'veiculo_cor' => '',
    'cambio' => '',
    'qtdportas' => '',
    'veiculo_combustivel' => '',
    'id_sva_integracao' => '',
    'id_sva_pacote' => '',
    'id_sva_pacote_adicional' => ''
);

$registro = '';//registro a ser editado
$api->put('produtos', $dados, $registro);
$retorno = $api->getRespostaConteudo(true);
echo '<pre>';
print_r($retorno);
?>
