<?php

	function validaUrl($url){
		$urlCerta = strpos($url, "http://");
		if($urlCerta === false){
			$url = "http://". $url;
		}
		return $url;
	}

	function Mes($mes){
		if ($mes[1] == "1") {
			$retorno = "Janeiro";
		}elseif ($mes[1] == "2") {
			$retorno = "Fevereiro";
		}elseif ($mes[1] == "3") {
			$retorno = "Marco";
		}elseif ($mes[1] == "4") {
			$retorno = "Abril";
		}elseif ($mes[1] == "5") {
			$retorno = "Maio";
		}elseif ($mes[1] == "6") {
			$retorno = "Junho";
		}elseif ($mes[1] == "7") {
			$retorno = "Julho";
		}elseif ($mes[1] == "8") {
			$retorno = "Agosto";
		}elseif ($mes[1] == "9") {
			$retorno = "Setembro";
		}elseif ($mes[1] == "10") {
			$retorno = "Outubro";
		}elseif ($mes[1] == "11") {
			$retorno = "Novembro";
		}elseif ($mes[1] == "12") {
			$retorno = "Dezembro";
		}
		return $retorno;
	}

	function MesInverte($mes){
		if ($mes == "Janeiro") {
			$retorno = "1";
		}elseif ($mes == "Fevereiro") {
			$retorno = "2";
		}elseif ($mes == "Marco") {
			$retorno = "3";
		}elseif ($mes == "Abril") {
			$retorno = "4";
		}elseif ($mes == "Maio") {
			$retorno = "5";
		}elseif ($mes == "Junho") {
			$retorno = "6";
		}elseif ($mes == "Julho") {
			$retorno = "7";
		}elseif ($mes == "Agosto") {
			$retorno = "8";
		}elseif ($mes == "Setembro") {
			$retorno = "9";
		}elseif ($mes == "Outubro") {
			$retorno = "10";
		}elseif ($mes == "Novembro") {
			$retorno = "11";
		}elseif ($mes == "Dezembro") {
			$retorno = "12";
		}

		return $retorno;
	}

	function limita_caracteres($texto, $limite, $quebra = true) {
		$tamanho = strlen($texto);
		 
		// Verifica se o tamanho do texto é menor ou igual ao limite
		if ($tamanho <= $limite) {
			$novo_texto = $texto;
		// Se o tamanho do texto for maior que o limite
		} else {
		// Verifica a opção de quebrar o texto
			if ($quebra == true) {
			$novo_texto = trim(substr($texto, 0, $limite)).' 123...';
			// Se não, corta $texto na última palavra antes do limite
			} else {
				// Localiza o útlimo espaço antes de $limite
				$ultimo_espaco = strrpos(substr($texto, 0, $limite), ' ');
				// Corta o $texto até a posição localizada
				$novo_texto = trim(substr($texto, 0, $ultimo_espaco)).' ...';
			}
		}
		// Retorna o valor formatado
		return $novo_texto;
	}

	function UrlAtual(){
		$dominio= $_SERVER['HTTP_HOST'];
		$urlCompleta = "http://" . $dominio. $_SERVER['REQUEST_URI'];
		return $urlCompleta;
	}

	function tipoPublicacao($idTipo){
		if ($idTipo == "1") {
			$retornoTipo = "Informativos";
		}elseif ($idTipo == "2") {
			$retornoTipo = "Artigos";
		}elseif ($idTipo == "3") {
			$retornoTipo = "Instruções";
		}elseif ($idTipo == "4") {
			$retornoTipo = "Palestras";
		}

		return $retornoTipo;
	}

	function geraUrlLimpa($texto){
	    /* função que gera uma texto limpo pra virar URL:
	       - limpa acentos e transforma em letra normal
	       - limpa cedilha e transforma em c normal, o mesmo com o ñ
	       - transforma espaços em hífen(-)
	       - tira caracteres invalidos
	      by Micox - elmicox.blogspot.com - www.ievolutionweb.com
	    */
	    //desconvertendo do padrão entitie (tipo á para á)
	    $texto = html_entity_decode($texto);
	    //tirando os acentos
	    $texto = eregi_replace('[aáàãâä]','a',$texto);
	    $texto = eregi_replace('[eéèêë]','e',$texto);
	    $texto = eregi_replace('[iíìîï]','i',$texto);
	    $texto = eregi_replace('[oóòõôö]','o',$texto);
	    $texto = eregi_replace('[uúùûü]','u',$texto);
	    //parte que tira o cedilha e o ñ
	    $texto = eregi_replace('[ç]','c',$texto);
	    $texto = eregi_replace('[ñ]','n',$texto);
	    //trocando espaço em branco por underline
	    $texto = eregi_replace('( )','-',$texto);
	    //tirando outros caracteres invalidos
	    $texto = eregi_replace('[^a-z0-9\-]','',$texto);
	    //trocando duplo espaço (underline) por 1 underline só
	    $texto = eregi_replace('--','-',$texto);
	    
	    return strtolower($texto);
	}

?>