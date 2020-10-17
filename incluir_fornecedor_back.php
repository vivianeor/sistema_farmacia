<?php
error_reporting(0);
$db = mysql_connect ("localhost", "root", "vertrigo");
mysql_select_db("sistema_farmacia_matutino",$db);
$codfornecedor1=$_POST['codfornecedor'];
$cidade_codcidade1=$_POST['cidade_codcidade'];
$fornecedor1=$_POST['fornecedor'];
$endereco1=$_POST['endereco'];
$num1=$_POST['num'];
$bairro1=$_POST['bairro'];
$cep1=$_POST['cep'];
$contato1=$_POST['contato'];
$cnpj1=$_POST['cnpj'];
$insc1=$_POST['insc'];
$tel1=$_POST['tel'];
$inserir = mysql_query("INSERT INTO fornecedor (codfornecedor, cidade_codcidade,
				fornecedor,endereco,num,bairro,cep,contato,cnpj,insc,tel) 
		        VALUES('$codfornecedor1','$cidade_codcidade1',
				'$fornecedor1','$endereco1','$num1',
				'$bairro1','$cep1','$contato1','$cnpj1','$insc1','$tel1')") or die (mysql_error());
mysql_close ($db);
include "consulta_cidade.php";
?>