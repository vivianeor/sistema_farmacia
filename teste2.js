function build_menu(tp,opc)
{
  var fg_f = new Image;
  fg_f.src = figuras[0];
  
  var bm_f = document.getElementById('build-menu');
  
  var dv_f = document.createElement('div');
  dv_f.style.position = "relative";
  dv_f.setAttribute('id','dv_princ');
  

  var tb_f = document.createElement('table');
  tb_f.setAttribute('id','tb_princ');
  tb_f.width = "100%";
  tb_f.style.height = fg_f.height;
  tb_f.border = "0";
  tb_f.cellSpacing = "0";
  tb_f.cellPadding = "0";

  var tr_f = tb_f.insertRow(0);
  var td_f = new Array(opc.length);
  for(i = 0; i < opc.length; i++)
  {
    td_f[i] = tr_f.insertCell(i);
	td_f[i].style.background = 'url('+figuras[0]+')';
	
	td_f[i].onmouseover = function()
	{
	  this.style.background = 'url('+figuras[1]+')';
	}
	
	td_f[i].onmouseout = function()
	{
	  this.style.background = 'url('+figuras[0]+')';
	}
	
	if (opc[i].href != null)
      td_f[i].innerHTML = '<a href="'+opc[i].href+'" class="A"><div align="center"><font face="verdana" size="2"><b>'+opc[i].descricao+'</b></font></div></a>';	
	else
      td_f[i].innerHTML = '<div align="center"><font face="verdana" size="2" color="#FFFFFF"><b>'+opc[i].descricao+'</b></font></div>';	
	
	if (opc[i].filhos != null)
	  build_subh(opc[i].filhos,td_f[i]);
  }
  dv_f.appendChild(tb_f);
  bm_f.appendChild(dv_f);
//  alert(bm_f.innerHTML);
}

function build_subh(sopc,obj)
{
  var sfg_f = new Image;
  sfg_f.src = figuras[0];

  var sdv_f = document.createElement('div');
  sdv_f.style.position = 'absolute';
//  sdv_f.style.visibility = "hidden";
  sdv_f.style.display = "none";
  sdv_f.style.top = sdv_f.style.top + sfg_f.height;
//  sdv_f.style.left = 

  var stb_f = document.createElement('table');
//  stb_f.setAttribute('id','tb_princ');
//  stb_f.width = "100%";
//  stb_f.height = sfg_f.height;
  stb_f.border = "0";
  stb_f.cellSpacing = "0";
  stb_f.cellPadding = "0";

  var str_f = new Array(sopc.length);
  var std_f = new Array(sopc.length);
  for(p = 0; p < sopc.length; p++)
  {
    str_f[p] = stb_f.insertRow(p);
	str_f[p].style.height = sfg_f.height;
	str_f[p].align = "right";
//	str_f[p].width = "100%";

	std_f[p] = str_f[p].insertCell(0);
	std_f[p].style.background = 'url('+figuras[0]+')';

//	std_f[p].style.align = "left";

	std_f[p].onmouseover = function()
	{
	  this.style.background = 'url('+figuras[1]+')';
	}
	
	std_f[p].onmouseout = function()
	{
	  this.style.background = 'url('+figuras[0]+')';
	}
	
	if (sopc[p].href != null)
	  std_f[p].innerHTML = '<a href="'+sopc[p].href+'" class="A"><div align="center"><font face="verdana" size="2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+sopc[p].descricao+'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></div></a>';
	else
	  std_f[p].innerHTML = '<div align="center"><font face="verdana" size="2" color="#FFFFFF"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+sopc[p].descricao+'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></div>';
	  
	if (sopc[p].filhos != null)
	  build_subh(sopc[p].filhos,std_f[p]);
  
	obj.onmouseover = function()
	{
	  sdv_f.style.display = "";
//	  sdv_f.style.left = event.x-event.y;
 	  obj.style.background = 'url('+figuras[1]+')';
	}
	
	obj.onmouseout = function()
	{
	  sdv_f.style.display = "none";
	  obj.style.background = 'url('+figuras[0]+')';
	}
  }
  sdv_f.appendChild(stb_f);
  obj.appendChild(sdv_f);
}
function CriaMenu(descricao,filhos,href) 
{ 
  this.descricao=descricao; 
  this.filhos=filhos; 
  this.href=href;
} 

var figuras = ['sub-button-tile.gif','sub-buttonOver-tile.gif','sub-button-left.gif','sub-buttonOver-left.gif','sub-button-right.gif','sub-buttonOver-right.gif'];

var op4 = new Array(10);
op4[0] = new CriaMenu("Cidade",null,"consulta_cidade.php");
op4[1] = new CriaMenu("Entrada",null,"consulta_entrada.php");
op4[2] = new CriaMenu("Categoria",null,"consulta_categoria.php");
op4[3] = new CriaMenu("Fornecedor",null,"consulta_fornecedor.php");
op4[4] = new CriaMenu("Item Entrada",null,"consulta_itementrada.php");
op4[5] = new CriaMenu("Item Saida",null,"consulta_itemsaida.php");
op4[6] = new CriaMenu("Loja",null,"consulta_loja.php");
op4[7] = new CriaMenu("Produto",null,"consulta_produto.php");
op4[8] = new CriaMenu("Saida",null,"consulta_saida.php");
op4[9] = new CriaMenu("Transportadora",null,"consulta_transportadora.php");


var op3 = new Array(10);
op3[0] = new CriaMenu("Cidade",null,"excluir_cidade_front.php");
op3[1] = new CriaMenu("Entrada",null,"excluir_entrada_front.php");
op3[2] = new CriaMenu("Categoria",null,"excluir_categoria_front.php");
op3[3] = new CriaMenu("Fornecedor",null,"excluir_fornecedor_front.php");
op3[4] = new CriaMenu("Item Entrada",null,"excluir_itementrada_front.php");
op3[5] = new CriaMenu("Item Saida",null,"excluir_itemsaida_front.php");
op3[6] = new CriaMenu("Loja",null,"excluir_loja_front.php");
op3[7] = new CriaMenu("Produto",null,"excluir_produto_front.php");
op3[8] = new CriaMenu("Saida",null,"excluir_saida_front.php");
op3[9] = new CriaMenu("Transportadora",null,"excluir_transportadora_front.php");


var op2 = new Array(10);
op2[0] = new CriaMenu("Cidade",null,"alterar_cidade_front.php");
op2[1] = new CriaMenu("Entrada",null,"alterar_entrada_front.php");
op2[2] = new CriaMenu("Categoria",null,"alterar_categoria_front.php");
op2[3] = new CriaMenu("Fornecedor",null,"alterar_fornecedor_front.php");
op2[4] = new CriaMenu("Item Entrada",null,"alterar_itementrada_front.php");
op2[5] = new CriaMenu("Item Saida",null,"alterar_itemsaida_front.php");
op2[6] = new CriaMenu("Loja",null,"alterar_loja_front.php");
op2[7] = new CriaMenu("Produto",null,"alterar_produto_front.php");
op2[8] = new CriaMenu("Saida",null,"alterar_saida_front.php");
op2[9] = new CriaMenu("Transportadora",null,"alterar_transportadora_front.php");

var op1 = new Array(10);
op1[0] = new CriaMenu("Cidade",null,"incluir_cidade_front.php");
op1[1] = new CriaMenu("Entrada",null,"incluir_entrada_front.php");
op1[2] = new CriaMenu("Categoria",null,"incluir_categoria_front.php");
op1[3] = new CriaMenu("Fornecedor",null,"incluir_fornecedor_front.php");
op1[4] = new CriaMenu("Item Entrada",null,"incluir_itementrada_front.php");
op1[5] = new CriaMenu("Item Saida",null,"incluir_itemsaida_front.php");
op1[6] = new CriaMenu("Loja",null,"incluir_loja_front.php");
op1[7] = new CriaMenu("Produto",null,"incluir_produto_front.php");
op1[8] = new CriaMenu("Saida",null,"incluir_saida_front.php");
op1[9] = new CriaMenu("Transportadora",null,"incluir_transportadora_front.php");

var op = new Array(4);
op[0] = new CriaMenu("Cadastrar",op1,null);
op[1] = new CriaMenu("Alterar",op2,null);
op[2] = new CriaMenu("Excluir",op3,null);
op[3] = new CriaMenu("Consultar",op4,null);

build_menu(1,op)