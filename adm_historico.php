<?php

include_once "adm_login.php";
include_once "classes/Historico.class.php";
$classHistorico = new Historico();

$smarty->assign("titulo", utf8_encode(TITULO));
$smarty->assign("nome", $_SESSION['nome']);
$smarty->assign("perfil", $_SESSION['perfil']);

if( $_POST['acao'] == "gravar" )
{
	$_POST["idUsuario"] = $_SESSION['id'];
	$retorno = $classHistorico->Grava($_POST);
	
	$smarty->assign("mensagem", $retorno[1]);
	$smarty->assign("redir", "adm_orcamento.php?acao=detalhe&id=".$_POST["idOrcamento"]);
	$smarty->display("mensagem.html");
	exit();
}

$smarty->assign("idOrcamento", $_GET["idOrcamento"]);
$smarty->display('admin/orcamento/dadosHistorico.html');

?>