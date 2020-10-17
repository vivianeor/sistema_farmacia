<?php
error_reporting(0);
$db =mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_farmacia_matutino",$db);

$codloja1=$_POST['codloja'];
$cidade_codcidade1=$_POST['cidade_codcidade'];
$nome1=$_POST['nome'];
$endereco1=$_POST['endereco'];
$num1=$_POST['num'];
$bairro1=$_POST['bairro'];
$tel1=$_POST['tel'];
$insc1=$_POST['insc'];
$cnpj1=$_POST['cnpj'];


$alterar= mysql_query("UPDATE loja 
                      SET nome = '$nome1',
					  endereco = '$endereco1',
					  num = '$num1',
					  bairro = '$bairro1',
					  tel = '$tel1',
					  insc = '$insc1',
					  cnpj = '$cnpj1'
					  WHERE codloja='$codloja1'")
		  or die(mysql_error());
mysql_close($db);
include "consulta_loja.php"
?>