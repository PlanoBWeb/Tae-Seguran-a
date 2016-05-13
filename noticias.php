<?php
	
	include_once "configs/config.php";
	include_once "url.php";
	include_once "classes/Noticias.class.php";
	//include_once "classes/Categoria.class.php";
	$class 		= new Noticias();
	//$classCatego= new Categoria();

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

	// Dados da noticia
	$parametro['idioma']	= $_idioma;

	// Dados do blog menu lateral
	$parametroBlog['destaque']	= "1";
	$parametroBlog['limitVeja']	= "4";
	$retornoMenuBlog = $class->Pesquisar($parametroBlog, null, null);
	if( $retornoMenuBlog[0] )
	{
		$smarty->assign("mensagem", $retornoMenuBlog[1]);
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


	$retornoMenuBlogAnoMes = $class->Pesquisar(null, null, null);
	if( $retornoMenuBlogAnoMes[0] )
	{
		$smarty->assign("mensagem", $retornoMenuBlogAnoMes[1]);
		$smarty->assign("redir", "noticias.php");
		$smarty->display("mensagem.html");
		exit();
	}	

	// Dados do blog menu lateral categoria
	// $parametroDestaque['id']			= $_GET['id'];
	$parametroDestaque['limitVeja']		= "4";
	$parametroDestaque['tipoNoticia']	= "1";
	// $retornoCatego 		= $classCatego->Pesquisar($parametroDestaque, null, null);
	// if( $retornoCatego[0] )
	// {
	// 	$smarty->assign("mensagem", $retornoCatego[1]);
	// 	$smarty->assign("redir", "noticias.php");
	// 	$smarty->display("mensagem.html");
	// 	exit();
	// }

	$totalPorPagina = 10;
	if ($_POST['p']) {
		$_POST['p'] = (!$_POST['p'] ? 1 : $_POST['p']);
	}else{
		$_POST['p'] = (!$_POST['p'] ? 1 : $_POST['p']);	
	}
	
	//  Fim Paginação
	// $parametro['tag'] = $_GET['tag'];
	if ($_POST['acao'] == "busca") {
		// echo "<pre>";
		// print_r($_POST['search']);
		// die();
		$parametro['busca'] = $_POST['search'];
		// $retornoPag = $class->Pesquisar($parametro, null, null);
		$retorno = $class->Pesquisar($parametro, $totalPorPagina, $_POST['p']);

		// echo "<pre>";
		// print_r($retorno);
		// die();

		if( $retorno[0] )
		{
			$smarty->assign("mensagem", $retorno[1]);
			$smarty->assign("redir", "index.php");
			$smarty->display("mensagem.html");
			exit();
		}

		// Busca ajax	
		if ($retorno[1]) {
			echo '<ul class="carrega-busca-ajax">';
			foreach ($retorno[1] as $key) {
				echo '	    		
						<li class="selectProduto">'.$key["titulo"].'</li>
				';
			}	
			echo "</ul>";
		}
		// Busca ajax
	}else{

		if ($url[1] == "categoria" && isset($url[2])) {
			$parametro['idCat'] 	= $url[2];
		}elseif ($url[1] == "arquivos") {
			$parametro['anoAtual'] 	= $url[2];
			$parametro['mesAtual'] 	= $url[3];
		}elseif ($url[1] == "tags") {
			$parametro['tag'] = $url[2];
		}elseif( isset($url[1]) ){
			if (  ($url[0] != "categoria") OR ($url[0] != "arquivos") OR ($url[0] != "tags")  ) {
				$smarty->assign("mensagem", "Nada encontrado!");
				$smarty->assign("redir", URL . "noticias");
				$smarty->display("mensagem.html");
				exit();
			}
			
		}

		$retornoPag = $class->Pesquisar($parametro, null, null);
		$retorno = $class->Pesquisar($parametro,  $totalPorPagina, $_POST['p']);
		if( $retorno[0] )
		{
			$smarty->assign("mensagem", $retorno[1]);
			$smarty->assign("redir", "noticias.php");
			$smarty->display("mensagem.html");
			exit();
		}

	}

	$totalDeProdutos = count($retornoPag[1]);
	$conta = $totalDeProdutos / $totalPorPagina;
	if (!($url[1] != "categoria") OR ($url[1] != "arquivos") OR ($url[1] != "tags") ) {
		 // ($_GET['idCat'] || $_GET['ano'] || $_GET['mes'] || $_GET['tag'] || $_POST['acao'])
		if ($totalDeProdutos >= 30) {
			$totalPaginas = 3;	
		}else{
			$totalPaginas = ceil($conta);	
		}
	}else{
		$totalPaginas = ceil($conta);	
	}

	$Numpaginas 	= array();
	for($j=0; $j <= $totalPaginas; $j++) { 
		$Numpaginas[$j] = $j;
	}

	$ultimaPaginacao = end($Numpaginas);
	$totalNot = count($retorno[1]);

	// Tags
	$retornoTags = $class->PesquisarTags(null, null, null);
	if( $retornoTags[0] )
	{
		$smarty->assign("mensagem", $retornoTags[1]);
		$smarty->assign("redir", "noticias.php");
		$smarty->display("mensagem.html");
		exit();
	}

	// definindo parametros atras da url
	if ($url[1] == "categoria" && isset($url[2])) {
		$getIdCat 	= $url[2];
	}elseif ($url[1] == "arquivos" && isset($url[2])) {
		$getAno 	= $url[2];
		$getMes 	= $url[3];
	}elseif ($url[1] == "tags" && isset($url[2])) {
		$getTag = $url[2];
	}

	$smarty->assign("dadosDestFooter2", $retornoDestFooter2[1]);
	$smarty->assign("dadosDestFooter", $retornoDestFooter[1]);
	$smarty->assign("dadosMenuHeader", $retornoMenuHeader[1]);
	$smarty->assign("dadosCategoriaServico", $retornoCategoServico[1]);
	$smarty->assign("URL", URL);
	$smarty->assign("url", $url);
	$smarty->assign("menuAtivo", $menuAtivo);
	$smarty->assign("breadcrumb", "Notícias");
	$smarty->assign("dadosTags", $retornoTags[1]);
	$smarty->assign("totalPaginas", $totalPaginas);
	$smarty->assign("ultimaPaginacao", $ultimaPaginacao);
	$smarty->assign("Numpaginas", $Numpaginas);
	$smarty->assign("idCatPaginacao", $getIdCat);
	$smarty->assign("anoPaginacao", $getAno);
	$smarty->assign("mesPaginacao", $getMes);
	$smarty->assign("tagPaginacao", $getTag);
	$smarty->assign("postBusca", $_POST['search']);
	$smarty->assign("paginaMenuBlogInver", $paginaMenuBlogInver);
	$smarty->assign("paginaMenuBlog", $paginaMenuBlog);
	$smarty->assign("dadosCategoria", $retornoCatego[1]);
	$smarty->assign("dadosMenuBlog", $retornoMenuBlog[1]);
	$smarty->assign("dadosMenuBlogAnoMes", $retornoMenuBlogAnoMes[1]);
	$smarty->assign("totalNot", $totalNot);
	$smarty->assign("dados", $retorno[1]);
	$smarty->assign("arrayIdioma", $arrayIdioma);
	$smarty->assign("pagina", $pagina);
	$smarty->assign("urlFriendly", $urlFriendly);
	$smarty->assign("titulo", utf8_encode(TITULO));
	$smarty->assign("nome", $_SESSION['nome']);
	if (!$_POST['buscaAjax']) {
		$smarty->display('noticias.html');
	}
	exit;
