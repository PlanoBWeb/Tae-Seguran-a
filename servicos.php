<?php

    include_once "configs/config.php";
    include_once "url.php";
    include_once "classes/Servicos.class.php";
	$class 		= new Servicos();

	include_once "classes/CategoriaServicos.class.php";
	$classCategoServico 		= new CategoriaServicos();
	$pag = "servicos";


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

	if ($url[2]) {
		$parametro['id'] = $url[2];
		$retorno 		= $class->Pesquisar($parametro);
		if( $retorno[1] == "")
		{
			$smarty->assign("mensagem", $retorno[1]);
			$smarty->assign("redir", URL . "servicos/" . $url[1]);
			$smarty->display("mensagem.html");
			exit();
		}
		$pag = "servico";
	}
	elseif ($url[1]) {
		$parametro['categoria'] = $url[1];
		$retorno 		= $class->Pesquisar($parametro);
		if( $retorno[0] )
		{
			$smarty->assign("mensagem", $retorno[1]);
			$smarty->assign("redir", URL . "servicos");
			$smarty->display("mensagem.html");
			exit();
		}
	}

	// Menu lateral servico
	$parametroMenu['menu'] = $retorno[1][0]['urlAmigavelCat'];
	$retornoMenu 		= $class->Pesquisar($parametroMenu);

	// Veja também
	$parametroVeja['vejaLimit'] = 3;
	$parametroVeja['vejaCat'] = $retorno[1][0]['urlAmigavelCat'];
	$parametroVeja['vejaServ'] = $retorno[1][0]['urlAmigavel'];
	$retornoVeja 		= $class->Pesquisar($parametroVeja);

	//SERVIÇOS RELACIONADOS
	$retornoRelacionados = null;
	if($retorno[1][0]['id'] && $retorno[1][0]['urlAmigavel'])
	{
		$parametroRelacionados['id'] 			= $retorno[1][0]['id'];
		$parametroRelacionados['urlAmigavel'] 	= $retorno[1][0]['urlAmigavel'];
		$retornoRelacionados					= $class->PesquisarRelacionados($parametroRelacionados);
		
		// echo '<pre>';
		// print_r($retornoRelacionados);
		// die();
	}
	
	// print_r($retornoMenuHeader[1]);  //nomeCat

	// echo '<pre>';
	// print_r($retornoMenuHeader[1]);
	// //print_r($retorno[1]);
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
    if (isset($url[2])) {
    	$smarty->display($pag.".html");	
    }else{
    	$smarty->display($pag.".html");
    }
    

?>