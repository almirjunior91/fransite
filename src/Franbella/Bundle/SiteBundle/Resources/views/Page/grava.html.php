<?php 

use Franbella\Bundle\SiteBundle\Entity\Conexao;
$conexao = new Conexao();

$itens = json_decode(str_replace('\\', '', $_POST['itens']));

//$conexao->conecta();

$query = "DELETE FROM vendas WHERE data_cadastro < DATE_ADD(NOW(), INTERVAL -2 WEEK)";
//mysql_query($query) or die("Erro ao limpar registros.");

foreach ($itens as $item) {
    $queryProduto = "INSERT vendas (razao_social, fantasia, tipo, cep, endereco, "
            . "numero, complemento, bairro, cidade, uf, data_cadastro) "
            . "VALUES ('".$item->razao_social."')";
    
    echo $queryProduto;
}