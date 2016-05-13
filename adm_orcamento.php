<?php

include_once "adm_login.php";
include_once "classes/Orcamento.class.php";
$classOrcamento = new Orcamento();

include_once "classes/Historico.class.php";
$classHistorico = new Historico();

$smarty->assign("titulo", utf8_encode(TITULO));
$smarty->assign("nome", $_SESSION['nome']);
$smarty->assign("perfil", $_SESSION['perfil']);

if( $_POST['acao'] == "gravar" )
{
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
	/*
	 * Paginação
	 */
	$pagAtual = $_POST["pagina"];

	$pagTotal = 10;
	$pagAtual = ( $pagAtual == "" ? '1' : $pagAtual );
	$pagLimit = ( $pagAtual * $pagTotal ) - $pagTotal;
	
	$limit = "LIMIT ".$pagLimit.",".$pagTotal;
	
	$pagTotalRegistros = $classOrcamento->PesquisarPaginacao($_POST, null, true);
	$divisao = $pagTotalRegistros / $pagTotal;
	
	$var = strpos($divisao,".");
	$pagQtdPaginas = substr($divisao,0,1);
	if($var)
	{
		$pagQtdPaginas ++;
	}
	
	//Monta paginação
	for( $i=1; $i<=$pagQtdPaginas; $i++ )
	{
		$pagArray[$i-1]["pagina"] 	= $i;
		$pagArray[$i-1]["atual"] 	= ( $i == $pagAtual ? "1" : "" );
	}

	/*
	 * Paginação - FIM
	 */
	
	$retorno = $classOrcamento->PesquisarPaginacao($_POST, $limit);
	
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "adm_orcamento.php");
		$smarty->display("mensagem.html");
		exit();
	}
	
	$smarty->assign("dados", $retorno[1]);
	$smarty->assign("curso", $_POST["curso"]);
	$smarty->assign("pesoInicio", $_POST["pesoInicio"]);
	$smarty->assign("pesoFim", $_POST["pesoFim"]);
	$smarty->assign("alturaInicio", $_POST["alturaInicio"]);
	$smarty->assign("alturaFim", $_POST["alturaFim"]);
	$smarty->assign("paginacao", $pagArray);
	$smarty->assign("paginacaoTotal", count($pagArray));
	$smarty->display('admin/orcamento/relacao.html');
	exit;
}
elseif( $_GET['acao'] == "detalhe" )
{
	$parametro['id'] = $_GET['id'];
	$retorno = $classOrcamento->Pesquisar($parametro);
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "adm_orcamento.php");
		$smarty->display("mensagem.html");
		exit();
	}
	
	
	//$parametroHistorico['idUsuario'] = $_SESSION['id'];
	$parametroHistorico['idOrcamento'] = $_GET['id'];
	$retornoHistorico = $classHistorico->Pesquisar($parametroHistorico);
	if( $retornoHistorico[0] )
	{
		$smarty->assign("mensagem", $retornoHistorico[1]);
		$smarty->assign("redir", "adm_orcamento.php");
		$smarty->display("mensagem.html");
		exit();
	}
	
	/*
	echo "<pre>";
	print_r( $retornoHistorico );
	echo "</pre>";
	*/
	
	$smarty->assign("dados", $retorno[1]);
	$smarty->assign("dadosHistoricos", $retornoHistorico[1]);
	
	//Verifica se é impressão
	if( $_GET["imprimir"] == 1 )
	{
		$smarty->display('admin/orcamento/impressao.html');
	}
	else
	{
		$smarty->display('admin/orcamento/dados.html');
	}
	exit;
}
/*
elseif( $_GET['acao'] == "exclui" )
{
	$retorno = $classUsuario->Exclui($_GET['id']);
	
	$smarty->assign("mensagem", utf8_encode($retorno[1]));
	$smarty->assign("redir", "adm_usuario.php");
	$smarty->display("mensagem.html");
	exit();
}
*/
elseif( $_GET['acao'] == "consultar" )
{
	$smarty->display('admin/usuario/busca.html');
	exit;
}

$smarty->assign("botao", "Gravar");
$smarty->display('admin/orcamento/dados.html');

?>