<?php
error_reporting(0);
$db = mysql_connect ("localhost", "root", "vertrigo");
mysql_select_db("sistema_farmacia_matutino",$db);

$codsaida1=$_POST['codsaida'];
$loja_codloja1=$_POST['loja_codloja'];
$transportadora_codtransportadora1=$_POST['transportadora_codtransportadora'];
$total1=$_POST['total'];
$frete1=$_POST['frete'];
$imposto1=$_POST['imposto'];

$inserir = mysql_query("INSERT INTO saida (codsaida, 
				loja_codloja,
				transportadora_codtransportadora,
				total,  
				frete, 
				imposto) 
		        VALUES('$codsaida1',
				'$loja_codloja1',
				'$transportadora_codtransportadora1',
				'$total1',
				'$frete1',
				'$imposto1')") or die (mysql_error());
mysql_close ($db);
include "consulta_saida.php";
?>