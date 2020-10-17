<?php
error_reporting(0);
$db = mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_farmacia_matutino",$db);
$codentrada1=$_POST['codentrada'];

$excluir = mysql_query("DELETE FROM entrada
			 WHERE codentrada = '$codentrada1'")
			or die(mysql_error());
mysql_close ($db);
include "consulta_entrada.php"
?>