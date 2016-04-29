<?php

include_once "configs/funcoes.php";
include_once "Imagem.class.php";
class Servicos
{
	function Servicos()
    {
		$this->entidade = "servicos";

		$this->pathProjeto = PATH_SERVIDOR;
		
		$classImagem = new Imagem();
		$this->classImagem = $classImagem;
    }
	
	function Grava($post, $file, $file2)
	{

		$retorno = array();

		//Checa se existe imagem
		if ($file['name'] != "")
		{
			//Grava a Imagem
			$retornoClassImagem = $this->classImagem->gravaImagem($file, $post['extencoeValidas'], "upload/noticias/", $copy);
			if( $retornoClassImagem[0] )
			{
				$retorno[0] = "1";
				$retorno[1] = $retornoClassImagem[1];
				return $retorno;
			}
		}

		//Checa se existe imagem
		if ($file2['name'] != "")
		{
			//Grava a Imagem
			$retornoClassImagem2 = $this->classImagem->gravaImagem($file2, $post['extencoeValidas'], "upload/noticias/", $copy);
			if( $retornoClassImagem2[0] )
			{
				$retorno[0] = "1";
				$retorno[1] = $retornoClassImagem2[1];
				return $retorno;
			}
		}

		if ($post['titulo']) {
			$urlLimpa = geraUrlLimpa($post['titulo']);
		}

		if ($post['destaque'] == "") {
			$post['destaque'] = 0;
		}

		$sql = "
			INSERT INTO
				".$this->entidade."
			SET
				titulo				= '". $post['titulo'] ."',
				titulo_I			= '". utf8_decode($post['titulo_I']) ."',
				por					= '". utf8_decode($post['por']) ."',
				data				= '". $post['data'] ."',
				texto				= '". addslashes(utf8_decode($post['texto'])) ."',
				texto_I				= '". addslashes(utf8_decode($post['texto_I'])) ."',
				tag					= '". utf8_decode(str_replace("'","''", $post['tag']))."',
				tag_I				= '". utf8_decode(str_replace("'","''", $post['tag_I']))."',
				tagAmiga			= '". utf8_decode(geraUrlLimpa($post['tag']))."',
				urlCatNot			= '". $post['categoria'] ."',
				destaque			= '". $post['destaque'] ."',
				caminhoImagem		= '". $retornoClassImagem[1]."',
				caminhoImagemThumb	= '". $retornoClassImagem2[1]."',
				urlAmigavel			= '".$urlLimpa."'
				
		";

		// echo "<pre>";
		// print_r($sql);
		// die();

		$result = mysql_query($sql);
		$ultimoId = mysql_insert_id();
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = ".$this->entidade." - Metodo = grava";
			return $retorno;
		}

		$retorno[0] = 0;
		$retorno[1] = "Registro inserido com sucesso.";
		$retorno[2] = $ultimoId;
		return $retorno;
	}
	
	function Altera($post, $file, $file2)
	{
		$retorno = array();

		//Checa se será autializado a imagem
		if ($file['name'] != "")
		{
	
			//Checa se existe a imagem
			if( file_exists($file["name"]) )
			{
				//Exclui a antiga
				if(!unlink( $this->pathProjeto.$file["name"] ))
				{
					$retorno[0] = "1";
					$retorno[1] = "Não foi possíel excluir a imagem antiga!";
					return $retorno;
				}
			}
			
			//Grava a Imagem
			$retornoClassImagem = $this->classImagem->gravaImagem($file, $post['extencoeValidas'], "upload/noticias/", $copy);
			if( $retornoClassImagem[0] )
			{
				$retorno[0] = "1";
				$retorno[1] = $retornoClassImagem[1];
				return $retorno;
			}
		}
		else
		{
			//Mantém a imagem antiga
			$retornoClassImagem[1] = $post["caminhoImagem"];
		}


		//Checa se será autializado a imagem
		if ($file2['name'] != "")
		{
			//Checa se existe a imagem
			if( file_exists($file2['name']) )
			{
				//Exclui a antiga
				if(!unlink( $this->pathProjeto.$file2['name'] ))
				{
					$retorno[0] = "1";
					$retorno[1] = "Não foi possíel excluir a imagem antiga 2!";
					return $retorno;
				}
			}
	
			
			//Grava a Imagem
			$retornoClassImagem2 = $this->classImagem->gravaImagem($file2, $post['extencoeValidas'], "upload/noticias/", $copy);
			if( $retornoClassImagem2[0] )
			{
				$retorno[0] = "1";
				$retorno[1] = $retornoClassImagem2[1];
				return $retorno;
			}
		}
		else
		{
			//Mantém a imagem antiga
			$retornoClassImagem2[1] = $post['caminhoImagemThumb'];
		}

		if ($post['titulo']) {
			$urlLimpa = geraUrlLimpa($post['titulo']);
		}

		if ($post['destaque'] == "") {
			$post['destaque'] = 0;
		}

		$sql = "
			UPDATE	
				".$this->entidade."
			SET
				titulo				= '". $post['titulo'] ."',
				titulo_I			= '". utf8_decode($post['titulo_I']) ."',
				por					= '". utf8_decode($post['por']) ."',
				data				= '". $post['data'] ."',
				texto				= '". addslashes(utf8_decode($post['texto'])) ."',
				texto_I				= '". addslashes(utf8_decode($post['texto_I'])) ."',
				tag					= '". utf8_decode(str_replace("'","''", $post['tag']))."',
				tag_I				= '". utf8_decode(str_replace("'","''", $post['tag_I']))."',
				tagAmiga			= '". utf8_decode(geraUrlLimpa($post['tag']))."',
				urlCatNot			= '". $post['categoria'] ."',
				destaque			= '". $post['destaque'] ."',
				caminhoImagem		= '". $retornoClassImagem[1]."',
				caminhoImagemThumb	= '". $retornoClassImagem2[1]."',
				urlAmigavel			= '".$urlLimpa."'				
			WHERE
				id 				= '".$post['id']."'
		".$query;

		// echo "<pre>";
		// print_r($sql);
		// die();

		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = ".$this->entidade." - Metodo = Alterar";
			return $retorno;
		}
		
		$retorno[0] = 0;
		$retorno[1] = "Alteração feita com sucesso!";
		return $retorno;
	}
	
	function Pesquisar($post)
	{
		$query = "";

		
		if($post['vejaLimit'])
		{
			$sqlLimit = "Limit 3";
		}
		
		if($post['id'])
		{
			$query .= " AND " . $this->entidade . ".urlAmigavel = '".$post['id']."' ";
		}

		if($post['categoria'])
		{
			$query .= " AND " . $this->entidade . ".urlAmigavelCat = '".$post['categoria']."' ";
		}

		if($post['menu'])
		{
			$query .= " AND " . $this->entidade . ".urlAmigavelCat = '".$post['menu']."' ";
		}

		if($post['vejaCat'])
		{
			$query .= " AND " . $this->entidade . ".urlAmigavelCat = '".$post['vejaCat']."' ";
		}

		if($post['vejaServ'])
		{
			$query .= " AND " . $this->entidade . ".urlAmigavel <> '".$post['vejaServ']."' ";
		}

		if($post['tipoCat'])
		{
			$query .= " AND " . $this->entidade . ".urlAmigavelCat = '".$post['tipoCat']."' ";
		}


		$retorno = array();
		$sql = "SELECT 
					*
				FROM
					" . $this->entidade . " 
				WHERE
					1 = 1 ".$query."
				ORDER BY
					id DESC
			".$sqlLimit." ";

		// 	echo "<pre>";
		// print_r($sql);
		// die();

		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = " . $this->entidade . " - Metodo = Pesquisar";
			return $retorno;
		}
		
		$i = 0;
		while( $rows = mysql_fetch_array($result) )
		{
			$dados[$i] 					= $rows;
			$dados[$i]['nome'] 			= utf8_encode($rows['nome']);
			$dados[$i]['texto'] 			= utf8_encode($rows['texto']);
			$dados[$i]['textoAbrev'] 			= utf8_encode(limita_caracteres($rows['texto'], 150, false));
			//$dados[$i]['tituloAbrev'] 	= utf8_encode(limita_caracteres($rows['titulo'], 55, false));	
			// $dados[$i]['data'] 				= date("d/m/Y", strtotime($rows['data']));
			// $dados[$i]['titulo_I'] 			= utf8_encode($rows['titulo_I']);
			// $dados[$i]['texto_I'] 			= utf8_encode($rows['texto_I']);
			// $dados[$i]['textoSemTag_I']		= strip_tags(utf8_encode($rows['texto_I']));
			// $dados[$i]['Mes']				= Mes(explode("-", ($rows['data'])));
			// $dados[$i]['nomeCategoria'] 	= utf8_encode($rows['nomeCategoria']);
			// $dados[$i]['por']			 	= utf8_encode($rows['por']);
			// $dados[$i]['dataMes'] 			= explode("-", ($rows['data']));
			// $dados[$i]['data_formatada']	= date('Y-m-d', strtotime($rows['data']));
			$i++;
		}
		
		// $retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	}

	function PesquisarRelacionados($post)
	{
		$query = "";
		
		if($post['id'])
		{
			$query .= " AND SR.idServico = '".$post['id']."' ";
		}

		$retorno = array();
		$sql = "SELECT 
					SR.idServico,
					SR.tipo,
					S.nome,
					S.id,
					S.urlAmigavel,
					S.urlAmigavelCat,
					S.caminhoImagemThumb
				FROM
					servicos_relacionados SR
				INNER JOIN
					servicos S ON S.id = SR.idServicoRelacionado
				WHERE
					1 = 1 ".$query."
				ORDER BY
					SR.idServicoRelacionado DESC, S.nome
			".$sqlLimit." ";

		// echo "<pre>";
		// print_r($sql);
		// die('<br>FUNÇAO');

		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = " . $this->entidade . " - Metodo = PesquisarRelacionados";
			return $retorno;
		}
		
		$i = 0;
		while( $rows = mysql_fetch_array($result) )
		{
			$dados[$i] 					= $rows;
			$dados[$i]['nome'] 			= utf8_encode($rows['nome']);

			$i++;
		}
		
		$retorno[1] = $dados;
		return $retorno;
	}

	function PesquisarAdm($post, $totalPorPagina, $pagina)
	{
		$query = "";
		$sqlLimit = "";
		if ($totalPorPagina) {

			$numero = $pagina-1;
			$_limit = $numero*$totalPorPagina;

			$sqlLimit = "LIMIT ".$_limit.",".$totalPorPagina."";
		}

		if($post['id'])
		{
			$query .= " AND noticias.id = '".$post['id']."' ";
		}

		$retorno = array();
		$sql = "SELECT 
					*, 
					C.id as idCat,
					noticias.id
				FROM
					" . $this->entidade . " 
				INNER JOIN
					categoria C
				ON	
					C.urlAmigavelCat = " . $this->entidade . ".urlCatNot
				WHERE
					1 = 1 ".$query."
				ORDER BY
					data DESC
			".$sqlLimit." ";

		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = " . $this->entidade . " - Metodo = Pesquisar";
			return $retorno;
		}
		
		$i = 0;
		while( $rows = mysql_fetch_array($result) )
		{
			$dados[$i] 					= $rows;
			if ($post['idioma'] == "I") {
				$dados[$i]['titulo'] 		= $rows['titulo_I'];
				$dados[$i]['tituloAbrev'] 	= utf8_encode(limita_caracteres($rows['titulo_I'], 55, false));	
				$dados[$i]['texto'] 		= utf8_encode($rows['texto_I']);
				$dados[$i]['textoSemTag']	= strip_tags(utf8_encode($rows['texto_I']));
				$dados[$i]['textoAbrev']	= strip_tags(utf8_encode(limita_caracteres($rows['texto_I'], 150, false)));
				$dados[$i]['tag']			= utf8_encode($rows['tag_I']);
			}else{
				$dados[$i]['titulo'] 		= $rows['titulo'];	
				$dados[$i]['tituloAbrev'] 	= utf8_encode(limita_caracteres($rows['titulo'], 55, false));	
				$dados[$i]['texto'] 		= utf8_encode($rows['texto']);
				$dados[$i]['textoSemTag']	= strip_tags(utf8_encode($rows['texto']));
				$dados[$i]['textoAbrev']	= strip_tags(utf8_encode(limita_caracteres($rows['texto'], 150, false)));
				$dados[$i]['tag']			= utf8_encode($rows['tag']);
			}
			$dados[$i]['data'] 				= date("d/m/Y", strtotime($rows['data']));
			$dados[$i]['titulo_I'] 			= utf8_encode($rows['titulo_I']);
			$dados[$i]['texto_I'] 			= utf8_encode($rows['texto_I']);
			$dados[$i]['textoSemTag_I']		= strip_tags(utf8_encode($rows['texto_I']));
			$dados[$i]['Mes']				= Mes(explode("-", ($rows['data'])));
			$dados[$i]['nomeCategoria'] 	= utf8_encode($rows['nomeCategoria']);
			$dados[$i]['por']			 	= utf8_encode($rows['por']);
			$dados[$i]['dataMes'] 			= explode("-", ($rows['data']));
			$dados[$i]['data_formatada']	= date('Y-m-d', strtotime($rows['data']));
			$i++;
		}
		
		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	}	

	function PesquisarTags($post)
	{
		$query = "";

		if ($_SESSION['idioma'] == "I") {
			$query = "N.tag_I IS NOT NULL AND N.tag_I <> ''";
		}else{
			$query = "N.tag IS NOT NULL AND N.tag <> ''";
		}

		if($post['id'])
		{
			$query .= " AND N.urlAmigavel = '".$post['id']."' ";
		}

		$retorno = array();
		$sql = "SELECT
					N.tag,
					N.tag_I
				FROM  
					" . $this->entidade . " N
				WHERE
					".$query."
				ORDER BY
					N.tag,N.tag_I ASC
		";

		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = " . $this->entidade . " - Metodo = PesquisarTags";
			return $retorno;
		}

		$tags = array();
		$tagsAmiga = array();
		$i = 0;
		while( $rows = mysql_fetch_array($result) )
		{
			//$dados[$i] 					= $rows;
			if ($_SESSION['idioma'] == "I") {
				$dados[$i]['tag'] 		= utf8_encode(nl2br(trim($rows['tag_I'])));
			}else{
				$dados[$i]['tag'] 		= utf8_encode(nl2br(trim($rows['tag'])));
			}
			$dados[$i]['tagAmiga'] 		= utf8_encode(nl2br(trim($rows['tagAmiga'])));

			

			$arTags = explode(",",$dados[$i]['tag']);

			//Varre todas as Tags da respectiva dica
			for ($j=0; $j < count($arTags) ; $j++) { 
				
				if(!in_array(trim($arTags[$j]), $tags))
					$tags[] = trim($arTags[$j]);
			}			

			$i++;


			$arTagsAmiga = explode("-",$dados[$i]['tagAmiga']);

			//Varre todas as Tags da respectiva dica
			for ($j=0; $j < count($arTagsAmiga) ; $j++) { 
				
				if(!in_array(trim($arTagsAmiga[$j]), $tagsAmiga))
					$tagsAmiga[] = trim($arTagsAmiga[$j]);
			}			

			$i++;
		}

		$retorno[0] = 0;
		$retorno[1] = $tags;
		$retorno[2] = $tagsAmiga;
		return $retorno;
	}


	function PesquisarMenuLateral($post)
	{

		$query = "";

		$retorno = array();

		$sql = "SELECT 
					data
				FROM
					" . $this->entidade . " 
				WHERE
					1 = 1 ".$query."
				GROUP BY
					MONTH(data), YEAR(data)
				ORDER BY
					YEAR(data) DESC, MONTH(data) DESC
			";

		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = " . $this->entidade . " - Metodo = Pesquisar";
			return $retorno;
		}
		
		$i = 0;
		while( $rows = mysql_fetch_array($result) )
		{
			$dados[$i]['data'] 			= date("d/m/Y", strtotime($rows['data']));
			$dados[$i]['Mes']			= Mes(explode("-", ($rows['data'])));
			$dados[$i]['dataMes'] 		= explode("-", ($rows['data']));
			$i++;
		}
		
		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	}


	function Exclui_Categoria_Noticia($id)
	{
		$retorno = array();
		
		$sql = "
			DELETE FROM	
				produtocategoria
			WHERE
				idProduto = '".$id."'
		".$query;
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = ".$this->entidade." - Metodo = Exclui_categoria_produto";
			return $retorno;
		}
		
		$retorno[0] = 0;
		$retorno[1] = "Exclusão feita com sucesso!";
		return $retorno;
	}
	
	function Exclui($id)
	{
		$retorno = array();

		// Localiza imagem para exclusão do registro
		$parametro['id'] = $id;
		$dados = $this->Pesquisar($parametro, null, null);
		if( $dados[0] )
		{
			$retorno[0] = "1";
			$retorno[1] = "Não foi possível localizar a imagem para excluir!";
			return $retorno;
		}
		$imgExclusao = $dados[1][0]["caminhoImagem"];

		// Localiza imagem para exclusão do registro
		$parametro2['id'] = $id;
		$dados2 = $this->Pesquisar($parametro2, null, null);
		if( $dados2[0] )
		{
			$retorno[0] = "1";
			$retorno[1] = "Não foi possível localizar a imagem para excluir 2!";
			return $retorno;
		}
		$imgExclusao2 = $dados[1][0]["caminhoImagemThumb"];
		
		$sql = "
			DELETE FROM	
				".$this->entidade." 
			WHERE
				id = '".$id."'
		".$query;

		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = ".$this->entidade." - Metodo = Exclui";
			return $retorno;
		}

		//Exclui imagem da pasta
		if($imgExclusao != "")
		{ 
			if(!unlink( $this->pathProjeto.$imgExclusao ))
			{
				$retorno[0] = "1";
				$retorno[1] = "Não foi possíel excluir a imagem do registro!";
				return $retorno;
			}
		}

		//Exclui imagem da pasta
		if($imgExclusao2 != "")
		{ 
			if(!unlink( $this->pathProjeto.$imgExclusao2 ))
			{
				$retorno[0] = "1";
				$retorno[1] = "Não foi possíel excluir manual!";
				return $retorno;
			}
		}

		$retorno[0] = 0;
		$retorno[1] = "Exclusão feita com sucesso!";
		return $retorno;
	}

}