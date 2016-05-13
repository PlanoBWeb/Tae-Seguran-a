<?php

include_once "adm_login.php";
include_once "classes/Noticia.class.php";
$class = new Noticia();

include_once "fckeditor/fckeditor_php5.php";
$editor = new FCKeditor("text");
$editor->Width = "600";
$editor->Height = "500";

$smarty->assign("titulo", utf8_encode(TITULO));
$smarty->assign("nome", $_SESSION['nome']);
$smarty->assign("perfil", $_SESSION['perfil']);

if( $_POST['acao'] == "gravar" )
{
	/*
	echo "<pre>";
	print_r( $_POST );
	die();
	*/
	
	$_POST["idUsuario"] = $_SESSION['id'];
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
	
	
	$smarty->assign("redir", "adm_noticia.php");
	$smarty->display("mensagem.html");
	exit();
}
elseif( $_GET['acao'] == "pesquisar" )
{
	$retorno = $class->Pesquisar($_POST);
	
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "adm_noticia.php");
		$smarty->display("mensagem.html");
		exit();
	}
	
	$smarty->assign("dados", $retorno[1]);
	$smarty->display('admin/noticia/relacao.html');
	exit;
}
elseif( $_GET['acao'] == "editar" )
{
	$parametro['id'] = $_GET['id'];
	$retorno = $class->Pesquisar($parametro);
	
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "adm_noticia.php");
		$smarty->display("mensagem.html");
		exit();
	}
	
	$editor->Value = $retorno[1][0]["textoCompleto"];
	$smarty->assign("FCKEditor", $editor);
	
	$smarty->assign("dados", $retorno[1]);
	$smarty->assign("botao", "Alterar");
	$smarty->display('admin/noticia/dados.html');
	exit;
}
elseif( $_GET['acao'] == "exclui" )
{
	$retorno = $class->Exclui($_GET['id']);
	
	$smarty->assign("mensagem", $retorno[1]);
	$smarty->assign("redir", "adm_noticia.php?acao=pesquisar");
	$smarty->display("mensagem.html");
	exit();
}
elseif( $_GET['acao'] == "consultar" )
{
	$smarty->display('admin/usuario/busca.html');
	exit;
}

$smarty->assign("FCKEditor", $editor);

$smarty->assign("botao", "Gravar");
$smarty->display('admin/noticia/dados.html');

?>