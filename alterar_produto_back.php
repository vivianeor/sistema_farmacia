<?php
error_reporting(0);
$db =mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_farmacia_matutino",$db);

$codproduto1=$_POST['codproduto'];
$fornecedor_codfornecedor1=$_POST['fornecedor_codfornecedor'];
$categoria_codcategoria1=$_POST['categoria_codcategoria'];
$descricao1=$_POST['descricao'];
$peso1=$_POST['peso'];
$controlado1=$_POST['controlado'];
$qtdemin1=$_POST['qtdemin'];


$alterar= mysql_query("UPDATE produto 
                      SET  descricao = '$descricao1',
					  peso = '$peso1',
					  controlado = '$controlado1',
					  qtdemin = '$qtdemin1'
					  WHERE codproduto='$codproduto1'")
		  or die(mysql_error());
mysql_close($db);
include "consulta_produto.php"
?>