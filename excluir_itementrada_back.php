<?php
error_reporting(0);
$db = mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_farmacia_matutino",$db);
$coditementrada1=$_POST['coditementrada'];

$excluir = mysql_query("DELETE FROM itementrada
			 WHERE coditementrada = '$coditementrada1'")
			or die(mysql_error());
mysql_close ($db);
include "consulta_itementrada.php"
?>