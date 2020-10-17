<?php
error_reporting(0);
$db = mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_farmacia_matutino",$db);
$coditemsaida1=$_POST['coditemsaida'];

$excluir = mysql_query("DELETE FROM itemsaida
			 WHERE coditemsaida = '$coditemsaida1'")
			or die(mysql_error());
mysql_close ($db);
include "consulta_itemsaida.php"
?>