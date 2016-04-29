<?php

    include_once "configs/config.php";
    include_once "url.php";
    include_once "classes/Noticias.class.php";
	$class 		= new Noticias();

	include_once "classes/CategoriaServicos.class.php";
	$classCategoServico 		= new CategoriaServicos();

	include_once "classes/Servicos.class.php";
	$classServicos 		= new Servicos();

	$retornoCategoServico 		= $classCategoServico->Pesquisar(null);
	if( $retornoCategoServicoServico[0] )
	{
		$smarty->assign("mensagem", $retornoCategoServico[1]);
		$smarty->assign("redir", "noticias.php");
		$smarty->display("mensagem.html");
		exit();
	}

	// Menu e submenu
	$retornoMenuHeader 		= $classCategoServico->PesquisarMenuHeader(null);
	if( $retornoMenuHeader[0] )
	{
		$smarty->assign("mensagem", $retornoMenuHeader[1]);
		$smarty->assign("redir", "noticias.php");
		$smarty->display("mensagem.html");
		exit();
	}


    // Dados do blog menu lateral
	$retornoMenuBlog['destaque']	= "1";
	$retornoMenuBlog['limitVeja']	= "4";
	$retornoMenuBlog = $class->Pesquisar($parametroBlog, null, null);
	if( $retornoMenuBlog[0] )
	{
		$smarty->assign("mensagem", $retornoMenuBlog[1]);
		$smarty->assign("redir", "noticias.php");
		$smarty->display("mensagem.html");
		exit();
	}

	// Serviços em destaque e rodape
	$parametro['tipoCat'] = "servicos-de-seguranca";
	$retornoDestFooter 		= $classServicos->Pesquisar($parametro);
	if( $retornoDestFooter[0] )
	{
		$smarty->assign("mensagem", $retornoDestFooter[1]);
		$smarty->assign("redir", URL);
		$smarty->display("mensagem.html");
		exit();
	}

	$parametro2['tipoCat'] = "servicos-terceirizados";
	$retornoDestFooter2 		= $classServicos->Pesquisar($parametro2);
	if( $retornoDestFooter2[0] )
	{
		$smarty->assign("mensagem", $retornoDestFooter2[1]);
		$smarty->assign("redir", URL);
		$smarty->display("mensagem.html");
		exit();
	}

	$parametro3['tipoCat'] = "servicos-de-limpeza";
	$retornoDestFooter3 		= $classServicos->Pesquisar($parametro3);
	if( $retornoDestFooter3[0] )
	{
		$smarty->assign("mensagem", $retornoDestFooter2[1]);
		$smarty->assign("redir", URL);
		$smarty->display("mensagem.html");
		exit();
	}

	$smarty->assign("dadosMenuHeader", $retornoMenuHeader[1]);
	$smarty->assign("dadosDestFooter2", $retornoDestFooter2[1]);
	$smarty->assign("dadosDestFooter3", $retornoDestFooter3[1]);
	$smarty->assign("dadosDestFooter", $retornoDestFooter[1]);
	$smarty->assign("dadosCategoriaServico", $retornoCategoServico[1]);
	$smarty->assign("dadosMenuBlog", $retornoMenuBlog[1]);
    $smarty->assign("pagina", $pagina);
    $smarty->assign("URL", URL);
    $smarty->assign("breadcrumb", "Home");
    $smarty->display("index.html");

?>