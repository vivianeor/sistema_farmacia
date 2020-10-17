<?php
error_reporting(0);
$db =mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_farmacia_matutino",$db);
$codcidade1=$_POST['codcidade'];
$cidade1=$_POST['cidade'];
$uf1=$_POST['uf'];


$alterar= mysql_query("UPDATE cidade 
                      SET cidade='$cidade1',uf='$uf1' 
					  WHERE codcidade='$codcidade1'")
		  or die(mysql_error());
mysql_close($db);
include "consulta_cidade.php"
?>