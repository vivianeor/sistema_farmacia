<?php
error_reporting(0);
$db = mysql_connect ("localhost", "root", "vertrigo");
mysql_select_db("sistema_farmacia_matutino",$db);

$codentrada1=$_POST['codentrada'];
$transportadora_codtransportadora1=$_POST['transportadora_codtransportadora'];
$dataped1=$_POST['dataped'];
$dataentr1=$_POST['dataentr'];
$total1=$_POST['total'];
$frete1=$_POST['frete'];
$numnf1=$_POST['numnf'];
$imposto1=$_POST['imposto'];

$inserir = mysql_query("INSERT INTO entrada (codentrada, transportadora_codtransportadora,dataped, dataentr,
				total, frete, numnf, imposto) 
		        VALUES('$codentrada1','$transportadora_codtransportadora1','$dataped1','$dataentr1','$total1', '$frete1',
				'$numnf1','$imposto1')") 
				or die (mysql_error());
mysql_close ($db);
include "consulta_entrada.php";
?>