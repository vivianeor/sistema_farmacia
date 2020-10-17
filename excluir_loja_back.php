<?php
error_reporting(0);
$db = mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_farmacia_matutino",$db);
$codloja1=$_POST['codloja'];

$excluir = mysql_query("DELETE FROM loja
			 WHERE codloja = '$codloja1'")
			or die(mysql_error());
mysql_close ($db);
include "consulta_loja.php"
?>