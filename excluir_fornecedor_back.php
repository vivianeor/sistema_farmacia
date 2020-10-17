<?php
error_reporting(0);
$db = mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_farmacia_matutino",$db);
$codfornecedor1=$_POST['codfornecedor'];

$excluir = mysql_query("DELETE FROM fornecedor
			 WHERE codfornecedor = '$codfornecedor1'")
			or die(mysql_error());
mysql_close ($db);
include "consulta_fornecedor.php"
?>