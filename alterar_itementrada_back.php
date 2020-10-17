<?php
error_reporting(0);
$db =mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_farmacia_matutino",$db);

$coditementrada1=$_POST['coditementrada'];
$produto_codproduto1=$_POST['produto_codproduto'];
$entrada_codentrada1=$_POST['entrada_codentrada'];
$lote1=$_POST['lote'];
$qtde1=$_POST['qtde'];
$valor1=$_POST['valor'];


$alterar= mysql_query("UPDATE itementrada 
                      SET lote = '$lote1',
					  qtde = '$qtde1',
					  valor = '$valor1'
					  WHERE coditementrada='$coditementrada1'")
		  or die(mysql_error());
mysql_close($db);
include "consulta_itementrada.php"
?>