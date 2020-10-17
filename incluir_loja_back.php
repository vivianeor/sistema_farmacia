<?php
error_reporting(0);
$db = mysql_connect ("localhost", "root", "vertrigo");
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

$inserir = mysql_query("INSERT INTO loja (codloja, 
				cidade_codcidade,
				nome, 
				endereco, 
				num, 
				bairro, 
				tel, 
				insc, 
				cnpj) 
		        VALUES('$codloja1',
				'$cidade_codcidade1',
				'$nome1',
				'$endereco1',
				'$num1',
				'$bairro1',
				'$tel1',
				'$insc1',
				'$cnpj1')") 
				or die (mysql_error());
mysql_close ($db);
include "consulta_loja.php";
?>