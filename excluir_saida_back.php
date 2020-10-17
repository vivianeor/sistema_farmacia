<?php
error_reporting(0);
$db = mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_farmacia_matutino",$db);
$codsaida1=$_POST['codsaida'];

$excluir = mysql_query("DELETE FROM saida
			 WHERE codsaida = '$codsaida1'")
			or die(mysql_error());
mysql_close ($db);
include "consulta_saida.php"
?>