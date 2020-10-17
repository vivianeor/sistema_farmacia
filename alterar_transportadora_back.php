<?php
error_reporting(0);
$db =mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_farmacia_matutino",$db);

$codtransportadora1=$_POST['codtransportadora'];
$cidade_codcidade1=$_POST['cidade_codcidade'];
$transportadora1=$_POST['transportadora'];
$endereco1=$_POST['endereco'];
$num1=$_POST['num'];
$bairro1=$_POST['bairro'];
$cep1=$_POST['cep'];
$contato1=$_POST['contato'];
$cnpj1=$_POST['cnpj'];
$insc1=$_POST['insc'];
$tel1=$_POST['tel'];


$alterar= mysql_query("UPDATE transportadora 
                      SET transportadora = '$transportadora1',
					  endereco = '$endereco1',
					  num = '$num1',
					  bairro = '$bairro1',
					  cep = '$cep1',
					  contato = '$contato1',
					  cnpj = '$cnpj1',
					  insc = '$insc1',
					  tel = '$tel1'
					  WHERE codtransportadora='$codtransportadora1'")
		  or die(mysql_error());
mysql_close($db);
include "consulta_transportadora.php"
?>