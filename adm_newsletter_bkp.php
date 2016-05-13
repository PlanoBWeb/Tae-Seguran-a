<?php

include_once "adm_login.php";
include_once "classes/Newsletter.class.php";
$class = new Newsletter();

include_once "fckeditor/fckeditor_php5.php";
$editor = new FCKeditor("text");
$editor->Width = "600";
$editor->Height = "500";

$smarty->assign("titulo", utf8_encode(TITULO));
$smarty->assign("nome", $_SESSION['nome']);
$smarty->assign("perfil", $_SESSION['perfil']);

if( $_GET['acao'] == "visualiza" )
{
	$parametro["id"] = $_GET["varId"];
	$retorno = $class->Pesquisar($parametro);
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "adm_newsletter.php");
		$smarty->display("mensagem.html");
		exit();
	}
	
	/*
	 * Resgata e modifica o template do e-mail
	 */
	//Seta o caminho e o nome do arquivo
	$arquivo  = "email/newsletter.html";
	
	//Abre o arquivo html do email
	$abreHtml = fopen($arquivo,"r+");
	
	//Seta a variavel com o conteúdo do arquivo
	$corpoEmail = fread($abreHtml, filesize($arquivo));
	
	//Fecha o arquivo html do email
	fclose($abreHtml);
	
	//Trata as variáveis do arquivo html
	$corpoEmail = str_replace('{$mensagem}', $retorno[1][0][2], $corpoEmail);
	/*
	 * FIM - Resgata e modifica o template do e-mail
	 */
	
	die($corpoEmail);
	
	$smarty->assign("dados", $corpoEmail);
	$smarty->display('admin/newsletter/relacao.html');
	exit();
}
elseif( $_POST['acao'] == "gravar" )
{
	if( $_POST['id'] )
	{
		$retorno = $class->Altera($_POST, $_FILES["arquivo"]);
		$smarty->assign("mensagem", $retorno[1]);
	}
	else
	{
		$retorno = $class->Grava($_POST, $_FILES["arquivo"]);
		$smarty->assign("mensagem", utf8_encode($retorno[1]));
	}
	
	
	$smarty->assign("redir", "adm_newsletter.php");
	$smarty->display("mensagem.html");
	exit();
}
elseif( $_GET['acao'] == "pesquisar" )
{
	$retorno = $class->Pesquisar($_POST);
	
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "adm_newsletter.php");
		$smarty->display("mensagem.html");
		exit();
	}
	
	$smarty->assign("dados", $retorno[1]);
	$smarty->display('admin/newsletter/relacao.html');
	exit;
}
elseif( $_GET['acao'] == "editar" )
{
	$parametro['id'] = $_GET['id'];
	$retorno = $class->Pesquisar($parametro);
	
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "adm_newsletter.php");
		$smarty->display("mensagem.html");
		exit();
	}
	
	$editor->Value = $retorno[1][0]["texto"];
	$smarty->assign("FCKEditor", $editor);
	
	$smarty->assign("dados", $retorno[1]);
	$smarty->assign("botao", "Alterar");
	$smarty->display('admin/newsletter/dados.html');
	exit;
}
elseif( $_GET['acao'] == "exclui" )
{
	$retorno = $class->Exclui($_GET['id']);
	
	$smarty->assign("mensagem", $retorno[1]);
	$smarty->assign("redir", "adm_newsletter.php?acao=pesquisar");
	$smarty->display("mensagem.html");
	exit();
}

$smarty->assign("FCKEditor", $editor);

$smarty->assign("botao", "Gravar");
$smarty->display('admin/newsletter/dados.html');

?>