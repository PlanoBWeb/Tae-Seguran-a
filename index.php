<?php
	include_once "configs/config.php";
	include_once "configs/funcoes.php";
	$url = strtolower($_SERVER['REQUEST_URI']);
	$url = substr($url, 1);
	$url = str_replace(PASTAPROJETO, "", $url);
	$url = explode('/', $url);

	// ----- Valida se so veio parametro na url ----- //
	if($url[0][0] == "?"){
		$url[0] = "home".$url[0];
	}

	// ----- Tratar se existi parametro, por exemplo se vier do google (?0000) ----- //
	for ($i=0; $i <= count($url)-1; $i++) { 
		if($url[$i])
		{
			$posInicio		= strpos($url[$i], '?');
			$priimeiraEtapa	= substr($url[$i], ($posInicio+strlen('?')));
			if(strpos($url[$i], '?'))
				$url[$i]	= substr($url[$i], 0, $posInicio);
		}
	}

	$permissao = array(
		'home' => array(
			'urlPagina'     => "Home",
			'breadcrumb'    => "Home",
			'title'    		=> "Tae Segurança",
	    	'description'   => "",
		),
		'servicos' => array(
			'urlPagina'     => "servicos",
			'breadcrumb'    => "Serviços",
			'title'    		=> "Tae Segurança",
	    	'description'   => "",
		),
		'noticias' => array(
			'urlPagina'     => "noticias",
			'breadcrumb'    => "Noticias",
			'title'    		=> "Tae Segurança",
	    	'description'   => "",
		),
		'quem-somos' => array(
			'urlPagina'     => "quem-somos",
			'breadcrumb'    => "Quem somos",
			'title'    		=> "Tae Segurança",
	    	'description'   => "",
	    	'institucional' => array(
				'urlPagina'     => "institucional",
				'breadcrumb'    => "Institucional",
				'title'    		=> "Tae Segurança",
		    	'description'   => "",
			),
			'responsabilidade-social' => array(
				'urlPagina'     => "responsabilidade-social",
				'breadcrumb'    => "Responsabilidade social",
				'title'    		=> "Tae Segurança",
		    	'description'   => "",
			),
			'estrutura' => array(
				'urlPagina'     => "estrutura",
				'breadcrumb'    => "Estrutura",
				'title'    		=> "Tae Segurança",
		    	'description'   => "",
			),
		),
		'fale-conosco' => array(
			'urlPagina'     => "fale-conosco",
			'breadcrumb'    => "Fale conosco",
			'title'    		=> "Tae Segurança",
	    	'description'   => "",
		),
		'orcamentos' => array(
			'urlPagina'     => "orcamentos",
			'breadcrumb'    => "Orçamentos",
			'title'    		=> "Tae Segurança",
	    	'description'   => "",
		),
		'obrigado-newsletter' => array(
			'urlPagina'     => "obrigado-newsletter",
			'breadcrumb'    => "Obrigado newsletter",
			'title'    		=> "Tae Segurança",
	    	'description'   => "",
		),
		'obrigado-contato' => array(
			'urlPagina'     => "obrigado-contato",
			'breadcrumb'    => "Obrigado contato",
			'title'    		=> "Tae Segurança",
	    	'description'   => "",
		),
		'obrigado-orcamentos' => array(
			'urlPagina'     => "obrigado-orcamentos",
			'breadcrumb'    => "Obrigado orçamentos",
			'title'    		=> "Tae Segurança",
	    	'description'   => "",
		),
		'clientes' => array(
			'urlPagina'     => "clientes",
			'breadcrumb'    => "Clientes",
			'title'    		=> "Tae Segurança",
	    	'description'   => "",
		),
		'solicite-orcamento-agora' => array(
			'urlPagina'     => "solicite-orcamento-agora",
			'breadcrumb'    => "Solicite Agora um Orçamento",
			'title'    		=> "Tae Segurança",
	    	'description'   => "",
		),
		'trabalhe-conosco' => array(
			'urlPagina'     => "trabalhe-conosco",
			'breadcrumb'    => "Trabalhe conosco",
			'title'    		=> "Tae Segurança",
	    	'description'   => "",
		),
		'localizacao' => array(
			'urlPagina'     => "localizacao",
			'breadcrumb'    => "Localização",
			'title'    		=> "Tae Segurança",
	    	'description'   => "",
		),
		'obrigado-trabalhe-conosco' => array(
			'urlPagina'     => "obrigado-trabalhe-conosco",
			'breadcrumb'    => "Trabalhe conosco",
			'title'    		=> "Tae Segurança",
	    	'description'   => "",
		),
		// '' => array(
		// 	'urlPagina'     => "",
		// 	'breadcrumb'    => "",
		// 	'title'    		=> "Tae Segurança",
	 //    	'description'   => "",
		// ),
	);

	// if ($url[0] == "" || $url[0] == "servicos" || $url[0] == "noticia") {
		
	// }else{
	// 	$urlFriendly = urlFriendly($url[0], $url[1], $url[2], $url[3], $permissao);
	// 	if (isset($urlFriendly['pagina'])) {
	// 		$inicialUrl = $urlFriendly['pagina'];
	// 	}else{
	// 		$inicialUrl['urlPagina'] 	= $urlFriendly['urlPagina'];
	// 		$inicialUrl['breadcrumb'] 	= $urlFriendly['breadcrumb'];
	// 		$inicialUrl['description'] 	= $urlFriendly['description'];
	// 		$inicialUrl['title'] 		= $urlFriendly['title'];
	//         $primeiraUrl 				= $urlFriendly[$url[1]];
	//         $segundaUrl 				= $urlFriendly[$url[1]][$url[2]];
	//         $terceiraUrl 				= $urlFriendly[$url[1]][$url[2]][$url[3]];
	// 	}
	// }

	$urlFriendly = urlFriendly($url[0], $url[1], $url[2], $url[3], $permissao);
	if (isset($urlFriendly['pagina'])) {
		$inicialUrl = $urlFriendly['pagina'];
	}else{
		$inicialUrl['urlPagina'] 	= $urlFriendly['urlPagina'];
		$inicialUrl['breadcrumb'] 	= $urlFriendly['breadcrumb'];
		$inicialUrl['description'] 	= $urlFriendly['description'];
		$inicialUrl['title'] 		= $urlFriendly['title'];
        $primeiraUrl 				= $urlFriendly[$url[1]];
        $segundaUrl 				= $urlFriendly[$url[1]][$url[2]];
        $terceiraUrl 				= $urlFriendly[$url[1]][$url[2]][$url[3]];
	}
	
	
	if($url[0] == "servicos"){
		$url['paginaHtml']= $inicialUrl[0];
	}elseif ($url[3]) {
		$url['paginaHtml'] = $terceiraUrl['urlPagina'];
	}elseif ($url[2]) {
		$url['paginaHtml'] = $segundaUrl['urlPagina'];
	}elseif ($url[1]) {
		$url['paginaHtml'] = $primeiraUrl['urlPagina'];
	}else{
		$url['paginaHtml']= $inicialUrl[0];
	}

	// ----- Define a pagina ----- //
	$url['pagina'] = $url[0];


	// echo "<pre>";
	// print_r($urlFriendly);
	// die();

	// ----- Faz include da página ----- //
	if ( $url['pagina'] != "blog" ) {
		if ($url['pagina'] == "" || $url['pagina'] == "index") {
			include "home.php";
		}elseif ($url['pagina'] == "admin") {
			include "admin/index.php";
		}else{
			if (file_exists($url['pagina'].".php")) {
				include $url['pagina'].".php";
			}else{
				include "erro.php";
			}
		}
	}
