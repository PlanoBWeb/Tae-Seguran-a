<?php
	include_once "configs/config.php";

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
	
	// ----- Define a pagina ----- //
	$url['pagina'] = $url[0];

	$permissao['home'] 										= "Home";
	$permissao['servicos-de-seguranca'] 					= "Serviços de segurança";
	$permissao['servicos-terceirizados'] 					= "Serviços terceirizados";
	$permissao['escolta-armada'] 							= "Escolta armada";
	$permissao['servicos'] 									= "Serviços";
	$permissao['noticias'] 									= "noticias";

	$permissao['quem-somos'] 								= "quem-somos";
	$permissao['institucional'] 							= "institucional";
	// $permissao[''] 										= "";

	$path = "commom/templates/";

	// ----- Valida se existe páginas internas ----- //
	if (array_key_exists($url[2], $permissao) || array_key_exists($url[1], $permissao)) {		
		if ($url[3]) {
			if (file_exists($path . $url[3] . '.html')) {
				$url['paginaHtml'] = $url[3];
			}else{
				$url['paginaHtml'] = "index";
			}
		}elseif ($url[2]) {
			if (file_exists($path . $url[2] . '.html')) {
				$url['paginaHtml'] = $url[2];
			}else{
				$url['paginaHtml'] = "index";
			}
		}elseif ($url[1]) {
			if (file_exists($path . $url[1] . '.html')) {
				$url['paginaHtml'] = $url[1];
			}else{
				$url['paginaHtml'] = "index";
			}
		}else{
			$url['paginaHtml'] = "index";
		}
	}

	// echo "<pre>";
	// print_r($url);
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
