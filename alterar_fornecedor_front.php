<html>
<head>
<title>Menu Sistema Farmacia</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
.A:link {
	TEXT-DECORATION: none;
	font-family:Verdana;
	color:#FFFFFF;
}
.A:visited { TEXT-DECORATION: none; font-family:Verdana; color:#333333}
.A:hover {
	TEXT-DECORATION: none;
	font-family:Verdana;
	color:#0088FF;
}
</style>
</head>

<body>
<table width="98%" border="0" cellspacing="0" cellpadding="0">
  <tr align="left" valign="top"> 
    <td colspan="3"><span> </span> </td>
  </tr>
  <tr align="left" valign="top"> 
    <td height="28"></td>
    <td height="28">&nbsp;</td>
    <td height="28" align="right"></td>
  </tr>
  <tr> 
    <td width="3%"></td>
    <td width="94%" align="left" valign="top"><div id="build-menu"></div></td>
    <td width="3%" align="right"></td>
  </tr>
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
<script src="teste2.js"></script>
</body>
</html>

<!-- Inicio Incluir -->
<link rel="stylesheet" type="text/css" href="formatarpadrao.css" />

<center><form method="post" action="alterar_fornecedor_back.php">

<br> Codigo: <select size="1" name="codfornecedor">
<?php
// gera lista de fornecedor // fazer a conexão
$db=mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_farmacia_matutino",$db);
$res = mysql_query ("select * from fornecedor");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
$nome=$registro[2];
echo "<option value=\"$cod\">$cod - $nome<option>\n";
}
?>
</select><br><br>

Codigo Cidade: <select size="1" name="codcidade">
<?php
// gera lista de cidade // fazer a conexão
$db=mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_farmacia_matutino",$db);
$res = mysql_query ("select * from fornecedor");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
$nome=$registro[1];
echo "<option value=\"$cod\">$cod<option>\n";
}
?>
</select><br><br>

<br> Fornecedor:<br>  
<input type="text" name="fornecedor">
<br> Endereço:<br>  
<input type="text" name="endereco">
<br> Numero:<br>  
<input type="text" name="num">
<br> Bairro:<br>  
<input type="text" name="bairro">
<br> CEP:<br>  
<input type="text" name="cep">
<br> Contato:<br>  
<input type="text" name="contato">
<br> CNPJ:<br>  
<input type="text" name="cnpj">
<br> Inscrição:<br>  
<input type="text" name="insc">
<br> Telefone:<br>  
<input type="text" name="tel">
<br><br>
<input type="submit" name="Submit" value="Alterar" class="botao">
</form>
</center>