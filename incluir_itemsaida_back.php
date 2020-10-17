<?php
error_reporting(0);
$db = mysql_connect ("localhost", "root", "vertrigo");
mysql_select_db("sistema_farmacia_matutino",$db);

$coditemsaida1=$_POST['coditemsaida'];
$produto_codproduto1=$_POST['produto_codproduto'];
$saida_codsaida1=$_POST['saida_codsaida'];
$lote1=$_POST['lote'];
$qtde1=$_POST['qtde'];
$valor1=$_POST['valor'];

$inserir = mysql_query("INSERT INTO itemsaida (coditemsaida, 
				produto_codproduto, 
				saida_codsaida, 
				lote,
				qtde, 
				valor) 
		        VALUES('$coditemsaida1',
				'$produto_codproduto1',
				'$saida_codsaida1',
				'$lote1',
				'$qtde1',
				'$valor1')") 
				or die (mysql_error());
mysql_close ($db);
include "consulta_itemsaida.php";
?>