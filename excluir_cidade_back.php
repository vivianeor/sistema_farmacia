<?php
error_reporting(0);
$db = mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_farmacia_matutino",$db);
$codcidade1=$_POST['codcidade'];

$excluir = mysql_query("DELETE FROM cidade
			 WHERE codcidade = '$codcidade1'")
			or die(mysql_error());
mysql_close ($db);
include "consulta_cidade.php"
?>