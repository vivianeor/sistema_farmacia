<?php
error_reporting(0);
$db =mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_farmacia_matutino",$db);

$codentrada1=$_POST['codentrada'];
$transportadora_codtransportadora1=$_POST['transportadora_codtransportadora'];
$dataped1=$_POST['dataped'];
$dataentr1=$_POST['dataentr'];
$total1=$_POST['total'];
$frete1=$_POST['frete'];
$numnf1=$_POST['numnf'];
$imposto1=$_POST['imposto'];


$alterar= mysql_query("UPDATE entrada 
                      SET dataped = '$dataped1',
					  dataentr = '$dataentr1',
					  total = '$total1',
					  frete = '$frete1',
					  numnf = '$numnf1',
					  imposto = '$imposto1'
					  WHERE codentrada='$codentrada1'")
		  or die(mysql_error());
mysql_close($db);
include "consulta_entrada.php"
?>