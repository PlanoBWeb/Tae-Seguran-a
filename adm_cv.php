<?php

include_once "adm_login.php";
include_once "classes/Curriculo.class.php";
$classCurriculo = new Curriculo();

include_once('classes/Cargo.class.php');
$classCargo = new Cargo();

$smarty->assign("titulo", utf8_encode(TITULO));
$smarty->assign("nome", $_SESSION['nome']);
$smarty->assign("perfil", $_SESSION['perfil']);


//Gera as opções da select Ano de nascimento
$anoAtual = date(Y);
$arAno = "";

for($i=2005; $i<$anoAtual+1; $i++)
{
	$arAnoPesquisa[]['ano'] = $i;
}

for($i=1910; $i<$anoAtual; $i++)
{
	$arAno[]['ano'] = $i;
}

$arMes = "";
for($i=1; $i<13; $i++)
{
	$arMes[]['mes'] = $i;
}

$arDia = "";
for($i=1; $i<32; $i++)
{
	$arDia[]['dia'] = $i;
}

$arSapato = "";
for($i=32; $i<57; $i++)
{
	$arSapato[]['numero'] = $i;
}

$smarty->assign("arSapato", $arSapato);
$smarty->assign("arDia", $arDia);
$smarty->assign("arMes", $arMes);
$smarty->assign("arAno", $arAno);
$smarty->assign("arAnoPesquisa", $arAnoPesquisa);

if( $_POST['acao'] == "gravar" )
{
	$_POST["alturaInicio"] 	= str_replace(",", ".", $_POST["alturaInicio"]);
	$_POST["alturaFim"]		= str_replace(",", ".", $_POST["alturaFim"]);
	
	$_POST["pesoInicio"]	= str_replace(",", ".", $_POST["pesoInicio"]);
	$_POST["pesoFim"]		= str_replace(",", ".", $_POST["pesoFim"]);
	
	if( $_POST['id'] )
		$retorno = $classCurriculo->Altera($_POST);
	else
		$retorno = $classCurriculo->Grava($_POST);
	
	$smarty->assign("mensagem", $retorno[1]);
	$smarty->assign("redir", "adm_cv.php?acao=pesquisar");
	$smarty->display("mensagem.html");
	exit();
}
elseif( $_REQUEST['acao'] == "pesquisar" )
{
	if( strlen($_POST["alturaInicio"]) == 1 )
	{
		$_POST["alturaInicio"] = $_POST["alturaInicio"].".00";
	}
	else if( strlen($_POST["alturaInicio"]) == 2 )
	{
		$_POST["alturaInicio"] = $_POST["alturaInicio"]."00";
	}
	else if( strlen($_POST["alturaInicio"]) == 3 )
	{
		$_POST["alturaInicio"] = $_POST["alturaInicio"]."0";
	}
	
	
	
	if( strlen($_POST["alturaFim"]) == 1 )
	{
		$_POST["alturaFim"] = $_POST["alturaFim"].".00";
	}
	else if( strlen($_POST["alturaFim"]) == 2 )
	{
		$_POST["alturaFim"] = $_POST["alturaFim"]."00";
	}
	else if( strlen($_POST["alturaFim"]) == 3 )
	{
		$_POST["alturaFim"] = $_POST["alturaFim"]."0";
	}
	
	$_POST["alturaInicio"] 	= str_replace(",", ".", $_POST["alturaInicio"]);
	$_POST["alturaFim"]		= str_replace(",", ".", $_POST["alturaFim"]);
	
	$_POST["pesoInicio"]	= str_replace(",", ".", $_POST["pesoInicio"]);
	$_POST["pesoFim"]		= str_replace(",", ".", $_POST["pesoFim"]);

	$dtInicio = "";
	$dtFim = "";
	if( $_POST['diaInicio'] > 0 && $_POST['mesInicio'] > 0 && $_POST['anoInicio'] > 0)
	{
		$dtInicio = $_POST['anoInicio'] . '-' . $_POST['mesInicio'] . '-' . $_POST['diaInicio'] . ' 00:00:00';
	}
	
	if( $_POST['diaFim'] > 0 && $_POST['mesFim'] > 0 && $_POST['anoFim'] > 0)
	{
		$dtFim = $_POST['anoFim'] . '-' . $_POST['mesFim'] . '-' . $_POST['diaFim'] . ' 23:59:00';
	}
	
	if($dtInicio && $dtFim)
	{
		$_POST['dtCadastro'] = '( dtCadastro >= "'.$dtInicio.'" AND dtCadastro <= "'.$dtFim.'" )';
	}
	else if($dtInicio)
	{
		$_POST['dtCadastro'] = '( dtCadastro >= "'.$dtInicio.'" )';
	}
	else if($dtFim)
	{
		$_POST['dtCadastro'] = '( dtCadastro <= "'.$dtFim.'" )';
	}
	
	
	/*
	 * Paginação
	 */
	$pagAtual = $_POST["pagina"];

	$pagTotal = 10;
	$pagAtual = ( $pagAtual == "" ? '1' : $pagAtual );
	$pagLimit = ( $pagAtual * $pagTotal ) - $pagTotal;
	
	$limit = "LIMIT ".$pagLimit.",".$pagTotal;
	
	$pagTotalRegistros = $classCurriculo->PesquisarPaginacao($_POST, null, true);
	
	/*
	echo "<pre>";
	print_r($pagTotalRegistros);
	echo "</pre>";
	*/
	$divisao = $pagTotalRegistros / $pagTotal;
	$var = strpos($divisao,".");
	
	if($var)
	{
		$pagQtdPaginas = substr($divisao,0,$var);
		$pagQtdPaginas ++;
	}
	else
	{
		$pagQtdPaginas = $divisao;
	}
	
	/*
	echo "TOTAL = " . $pagTotalRegistros . "<br>";
	echo "QTD PAGINA = " . $pagTotal . "<br>";
	echo "DIVISAO = " . $divisao . "<br><br>";
	
	echo "VAR = " . $var . "<br>";
	echo "pagQtdPaginas = " . $pagQtdPaginas . "<br>";
	*/
	
	//Monta paginação
	for( $i=1; $i<=$pagQtdPaginas; $i++ )
	{
		$pagArray[$i-1]["pagina"] 	= $i;
		$pagArray[$i-1]["atual"] 	= ( $i == $pagAtual ? "1" : "" );
	}

	/*
	 * Paginação - FIM
	 */

	$retorno = $classCurriculo->PesquisarPaginacao($_POST, $limit);
	
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "adm_cv.php");
		$smarty->display("mensagem.html");
		exit();
	}
	
	$dadosCargo = $classCargo->Pesquisar(true);
	if( $dadosCargo[0] == 1 )
	{
		$smarty->assign("mensagem", utf8_encode($dadosCargo[1]));
		$smarty->assign("redir", "adm_cv.php?acao=pesquisar");
		$smarty->display("mensagem.html");
		exit();
	}
	
	$smarty->assign("dadosCargo", $dadosCargo[1]);
	$smarty->assign("dados", $retorno[1]);
	$smarty->assign("curso", $_POST["curso"]);
	$smarty->assign("cargo", $_POST["cargo"]);
	$smarty->assign("status", $_POST["status"]);
	$smarty->assign("idadeInicio", $_POST["idadeInicio"]);
	$smarty->assign("idadeFim", $_POST["idadeFim"]);
	$smarty->assign("pesoInicio", $_POST["pesoInicio"]);
	$smarty->assign("pesoFim", $_POST["pesoFim"]);
	$smarty->assign("alturaInicio", $_POST["alturaInicio"]);
	$smarty->assign("alturaFim", $_POST["alturaFim"]);
	$smarty->assign("paginacao", $pagArray);
	$smarty->assign("paginacaoTotal", count($pagArray));
	
	$smarty->assign("diaInicio", $_POST["diaInicio"]);
	$smarty->assign("mesInicio", $_POST["mesInicio"]);
	$smarty->assign("anoInicio", $_POST["anoInicio"]);
	$smarty->assign("diaFim", $_POST["diaFim"]);
	$smarty->assign("mesFim", $_POST["mesFim"]);
	$smarty->assign("anoFim", $_POST["anoFim"]);
	
	$smarty->display('admin/cv/relacao.html');
	exit;
}
elseif( $_GET['acao'] == "editar" )
{
	$parametro['id'] = $_GET['id'];
	
	//Resgata as funções selecionada
	$parametroCargo['idCurriculum'] = $_GET['id'];
	$dadosCargo = $classCargo->PesquisarVinculo($parametroCargo);
	if( $dadosCargo[0] == 1 )
	{
		$smarty->assign("mensagem", utf8_encode($dadosCargo[1]));
		$smarty->assign("redir", "adm_cv.php?acao=pesquisar");
		$smarty->display("mensagem.html");
		exit();
	}
	
	$retorno = $classCurriculo->Pesquisar($parametro);
	
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "adm_cv.php");
		$smarty->display("mensagem.html");
		exit();
	}
	
	$smarty->assign("dadosCargo", $dadosCargo[1]);
	$smarty->assign("dados", $retorno[1]);
	$smarty->assign("botao", "Alterar");
	
	//Checa se vai imprimir
	if( $_GET['imprimir'] == "1" )
	{
		$smarty->display('admin/cv/impressao.html');
	}
	else
	{
		$smarty->display('admin/cv/dados.html');
	}
	exit;
}
elseif( $_GET['acao'] == "exclui" )
{
	$retorno = $classCurriculo->Exclui($_GET['id']);
	
	$smarty->assign("mensagem", $retorno[1]);
	$smarty->assign("redir", "adm_cv.php?acao=pesquisar");
	$smarty->display("mensagem.html");
	exit();
}
elseif( $_GET['acao'] == "consultar" )
{
	$smarty->display('admin/usuario/busca.html');
	exit;
}

$dadosCargo = $classCargo->Pesquisar(true);
if( $dadosCargo[0] == 1 )
{
	$smarty->assign("mensagem", utf8_encode($dadosCargo[1]));
	$smarty->assign("redir", "adm_cv.php?acao=pesquisar");
	$smarty->display("mensagem.html");
	exit();
}

$smarty->assign("dadosCargo", $dadosCargo[1]);
$smarty->assign("botao", "Gravar");
$smarty->display('admin/cv/dados.html');

?>