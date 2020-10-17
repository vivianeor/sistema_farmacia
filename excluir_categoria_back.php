<?php
error_reporting(0);
$db = mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_farmacia_matutino",$db);
$codcategoria1=$_POST['codcategoria'];

$excluir = mysql_query("DELETE FROM categoria
			 WHERE codcategoria = '$codcategoria1'")
			or die(mysql_error());
mysql_close ($db);
include "consulta_categoria.php"
?>