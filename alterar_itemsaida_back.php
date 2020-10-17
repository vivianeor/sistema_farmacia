<?php
error_reporting(0);
$db =mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_farmacia_matutino",$db);

$coditemsaida1=$_POST['coditemsaida'];
$saida_codsaida1=$_POST['saida_codsaida'];
$produto_codproduto1=$_POST['produto_codproduto'];
$lote1=$_POST['lote'];
$qtde1=$_POST['qtde'];
$valor1=$_POST['valor'];


$alterar= mysql_query("UPDATE itemsaida 
                      SET lote = '$lote1',
					  qtde = '$qtde1',
					  valor = '$valor1'
					  WHERE coditemsaida='$coditemsaida1'")
		  or die(mysql_error());
mysql_close($db);
include "consulta_itemsaida.php"
?>