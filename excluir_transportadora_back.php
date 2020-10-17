<?php
error_reporting(0);
$db = mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_farmacia_matutino",$db);
$codtransportadora1=$_POST['codtransportadora'];

$excluir = mysql_query("DELETE FROM transportadora
			 WHERE codtransportadora = '$codtransportadora1'")
			or die(mysql_error());
mysql_close ($db);
include "consulta_transportadora.php"
?>