<?php

include_once "novo_adm_login.php";
include_once "classes/Noticias.class.php";
$class = new Noticias();
// include_once "classes/Categoria.class.php";
// $classCategoria = new Categoria();

$pagina = "noticias";

$smarty->assign("titulo", utf8_encode(TITULO));
$smarty->assign("nome", $_SESSION['nome']);

if( $_POST['acao'] == "gravar" )
{
	if( $_POST['id'] )
	{
		$idNot = $_GET['id'];
		$retorno = $class->Altera($_POST, $_FILES["arquivo"], $_FILES["arquivo2"]);
		$smarty->assign("mensagem", utf8_encode($retorno[1]));
	}
	else
	{
		$retorno = $class->Grava($_POST, $_FILES["arquivo"], $_FILES["arquivo2"]);
		$smarty->assign("mensagem", $retorno[1]);
		$idNot = $retorno[2];
	}

	$smarty->assign("mensagem", utf8_encode($retorno[1]));
	$smarty->assign("redir", "adm_" . $pagina . ".php?acao=visualizar&id=".$idNot);
	$smarty->display("mensagem.html");
	exit();
}
elseif( $_GET['acao'] == "pesquisar" )
{
	$totalPorPagina = 10;
	$_GET['p'] = (!$_GET['p'] ? 1 : $_GET['p']);
	//  Fim Paginação

	$retornoPag = $class->PesquisarAdm(null, null, null);
	$retorno = $class->PesquisarAdm($_POST, $totalPorPagina, $_GET['p']);
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "adm_" . $pagina . ".php");
		$smarty->display("mensagem.html");
		exit();
	}
	$totalDeProdutos = count($retornoPag[1]);
	$conta = $totalDeProdutos / $totalPorPagina;
	$totalPaginas = ceil($conta);
	$Numpaginas = array();
	for($j=0; $j <= $totalPaginas; $j++) { 
		$Numpaginas[$j] = $j;
	}
	$smarty->assign("totalPaginas", $totalPaginas);
	$smarty->assign("Numpaginas", $Numpaginas);
	$smarty->assign("dados", $retorno[1]);
	$smarty->display('admin_planobweb/' . $pagina . '/relacao.html');
	exit;
}
elseif( $_GET['acao'] == "visualizar" )
{
	$parametro['id'] = $_GET['id'];
	$retorno = $class->PesquisarAdm($parametro, null, null);
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "adm_" . $pagina . ".php");
		$smarty->display("mensagem.html");
		exit();
	}

	$smarty->assign("dados", $retorno[1]);
	$smarty->assign("dadosCategoria", $retornoCategoria[1]);
	$smarty->display("admin_planobweb/" . $pagina . "/ver.html");
	exit;
}
elseif( $_GET['acao'] == "editar" )
{
	$dataAtual = date("Y-m-d");
	$parametro['id'] 		= $_GET['id'];
	$parametro['categoria'] = "1";
	$retorno = $class->PesquisarAdm($parametro, null, null);
	
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "adm_" . $pagina . ".php");
		$smarty->display("mensagem.html");
		exit();
	}

	// $retornoCategoria = $classCategoria->PesquisarCategorias(null, null, null);
	// if( $retornoCategoria[0] )
	// {
	// 	$smarty->assign("mensagem", $retornoCategoria[1]);
	// 	$smarty->assign("redir", "adm_" . $pagina . ".php");
	// 	$smarty->display("mensagem.html");
	// 	exit();
	// }

	$smarty->assign("dataAtual", $dataAtual);
	$smarty->assign("dadosCategoria", $retornoCategoria[1]);
	$smarty->assign("dados", $retorno[1]);
	$smarty->assign("botao", "Alterar");
	$smarty->display("admin_planobweb/" . $pagina . "/dados.html");
	exit;
}
elseif( $_GET['acao'] == "exclui" )
{
	$retorno = $class->Exclui($_GET['id']);
	
	$smarty->assign("mensagem", utf8_encode($retorno[1]));
	$smarty->assign("redir", "adm_" . $pagina . ".php?acao=pesquisar");
	$smarty->display("mensagem.html");
	exit();
}

//$retornoCategoria 	= $classCategoria->PesquisarCategorias(null);
$smarty->assign("dataAtual", $dataAtual);
//$smarty->assign("dadosCategoria", $retornoCategoria[1]);
$smarty->assign("botao", "Gravar");
$smarty->display("admin_planobweb/" . $pagina . "/dados.html");
exit();

?>