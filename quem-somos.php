<?php

    include_once "configs/config.php";
    include_once "url.php";
    include_once "classes/Servicos.class.php";
	$class 		= new Servicos();

	include_once "classes/CategoriaServicos.class.php";
	$classCategoServico 		= new CategoriaServicos();

	$retornoCategoServico 		= $classCategoServico->Pesquisar(null);
	if( $retornoCategoServicoServico[0] )
	{
		$smarty->assign("mensagem", $retornoCategoServico[1]);
		$smarty->assign("redir", URL . "servicos");
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

	// Serviços em destaque e rodape
	$parametroDestFooter['tipoCat'] = "servicos-de-seguranca";
	$retornoDestFooter 		= $class->Pesquisar($parametroDestFooter);
	if( $retornoDestFooter[0] )
	{
		$smarty->assign("mensagem", $retornoDestFooter[1]);
		$smarty->assign("redir", URL);
		$smarty->display("mensagem.html");
		exit();
	}

	$parametroDestFooter2['tipoCat'] = "servicos-terceirizados";
	$retornoDestFooter2 		= $class->Pesquisar($parametroDestFooter2);
	if( $retornoDestFooter2[0] )
	{
		$smarty->assign("mensagem", $retornoDestFooter2[1]);
		$smarty->assign("redir", URL);
		$smarty->display("mensagem.html");
		exit();
	}

	// echo "<pre>";
	// print_r($url);
	// die();
	$smarty->assign("retornoRelacionados", $retornoRelacionados[1]);
	$smarty->assign("dadosDestFooter2", $retornoDestFooter2[1]);
	$smarty->assign("dadosDestFooter", $retornoDestFooter[1]);
	$smarty->assign("dadosMenuHeader", $retornoMenuHeader[1]);
	$smarty->assign("dadosVejaTbm", $retornoVeja[1]);
	$smarty->assign("url", $url);
	$smarty->assign("dadosMenu", $retornoMenu[1]);
	$smarty->assign("dados", $retorno[1]);
	$smarty->assign("dadosCategoriaServico", $retornoMenuHeader[1]);
    $smarty->assign("pagina", $pagina);
    $smarty->assign("URL", URL);
    $smarty->assign("breadcrumb", "Serviços");
    if (isset($url[1])) {
    	$smarty->display($url['paginaHtml'].".html");	
    }else{
    	$smarty->display("quem-somos.html");
    }
    

?>