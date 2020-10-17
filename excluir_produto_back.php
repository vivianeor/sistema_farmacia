<?php
error_reporting(0);
$db = mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_farmacia_matutino",$db);
$codproduto1=$_POST['codproduto'];

$excluir = mysql_query("DELETE FROM produto
			 WHERE codproduto = '$codproduto1'")
			or die(mysql_error());
mysql_close ($db);
include "consulta_produto.php"
?>