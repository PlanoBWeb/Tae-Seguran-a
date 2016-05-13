<?php

include_once "adm_login.php";
include_once "classes/Mail.class.php";
$class = new Mail();

include_once "classes/Grupo.class.php";
$classGrupo = new Grupo();

$smarty->assign("titulo", utf8_encode(TITULO));
$smarty->assign("nome", $_SESSION['nome']);
$smarty->assign("perfil", $_SESSION['perfil']);

if( $_POST['acao'] == "gravar" )
{
	if( $_POST['id'] )
	{
		$retorno = $class->Altera($_POST);
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "adm_email.php?acao=editar&id=".$_POST['id']);
	}
	else
	{
		$retorno = $class->Grava($_POST);
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "adm_email.php");
	}

	$smarty->display("mensagem.html");
	exit();
}
elseif( $_GET['acao'] == "pesquisar" )
{
	$retorno = $class->Pesquisar($_POST);
	
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "adm_email.php");
		$smarty->display("mensagem.html");
		exit();
	}
	
	$smarty->assign("dados", $retorno[1]);
	$smarty->display('admin/newsletter/email_relacao.html');
	exit;
}
elseif( $_GET['acao'] == "editar" )
{
	$parametro['id'] = $_GET['id'];
	$retorno = $class->Pesquisar($parametro);
	
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "adm_email.php");
		$smarty->display("mensagem.html");
		exit();
	}
	
	$retornoGrupo = $classGrupo->Pesquisar(null);

	$smarty->assign("dadosGrupo", $retornoGrupo[1]);
	$smarty->assign("dados", $retorno[1]);
	$smarty->assign("botao", "Alterar");
	$smarty->display('admin/newsletter/email_dados.html');
	exit;
}
elseif( $_GET['acao'] == "exclui" )
{
	$retorno = $class->Exclui($_GET['id']);
	
	$smarty->assign("mensagem", $retorno[1]);
	$smarty->assign("redir", "adm_email.php?acao=pesquisar");
	$smarty->display("mensagem.html");
	exit();
}

$retornoGrupo = $classGrupo->Pesquisar(null);

$smarty->assign("dadosGrupo", $retornoGrupo[1]);
$smarty->assign("botao", "Gravar");
$smarty->display('admin/newsletter/email_dados.html');

?>