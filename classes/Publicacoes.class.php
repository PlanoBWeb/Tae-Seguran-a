<?php

include_once "configs/funcoes.php";
include_once "Imagem.class.php";

class Publicacoes
{
	function Publicacoes()
    {
		$this->entidade = "publicacoes";

		$this->pathProjeto = PATH_SERVIDOR;
		
		$classImagem = new Imagem();
		$this->classImagem = $classImagem;
    }
	

	function Pesquisar($post, $totalPorPagina, $pagina)
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
			$query .= " AND publicacoes.id = '".$post['id']."' ";
		}

		if($post['id'])
		{
			$query .= " AND publicacoes.id = '".$post['id']."' ";
		}

		if($post['tag'])
		{
			$query .= " AND publicacoes.tag like '%".utf8_decode($post['tag'])."%' ";
		}

		if($post['limitVeja'])
		{
			$sqlLimit = "LIMIT " . $post['limitVeja'];
		}

		if($post['tipo'])
		{
			$query .= " AND publicacoes.idTipo = '".$post['tipo']."' ";
		}

		if($post['anoAtual'])
		{
			$query .= " AND YEAR(data) = '".$post['anoAtual']."' ";
		}

		if($post['mesAtual'])
		{
			$query .= " AND MONTH(data) = '".$post['mesAtual']."' ";
		}

		if($post['idCat'])
		{
			$query .= " AND publicacoes.idCategoria = '".$post['idCat']."' ";
		}

		$retorno = array();
		$sql = "SELECT 
					*,
					C.id as idCategoria,
					publicacoes.id as id
				FROM
					" . $this->entidade . " 
				INNER JOIN
					categoria C
				ON	
					C.id = " . $this->entidade . ".Idcategoria
				WHERE
					1 = 1 ".$query . "
				ORDER BY
					publicacoes.numPubclicacao DESC
			".$sqlLimit." ";
// echo "<pre>";
// 			print_r($numPubclicacaoAbrev);
// 			die();

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
				$dados[$i]['titulo'] 			= utf8_encode($rows['titulo_I']);
				$dados[$i]['tituloAbrev'] 		= utf8_encode(limita_caracteres($rows['titulo_I'], 45, false));	
				$dados[$i]['texto'] 			= utf8_encode($rows['texto_I']);
				$dados[$i]['textoSemTag']		= strip_tags(utf8_encode($rows['texto_I']));
				$dados[$i]['textoAbrev']		= strip_tags(utf8_encode(limita_caracteres($rows['texto_I'], 150, false)));
				$dados[$i]['tag'] 				= utf8_encode(nl2br(trim($rows['tag_I'])));
				$dados[$i]['numPubclicacaoAbrev']=utf8_encode(limita_caracteres($rows['numPubclicacao_I'], 45, false));
				$dados[$i]['numPubclicacao'] 	= utf8_encode($rows['numPubclicacao_I']);
			}else{
				$dados[$i]['titulo'] 			= utf8_encode($rows['titulo']);	
				$dados[$i]['tituloAbrev'] 		= utf8_encode(limita_caracteres($rows['titulo'], 45, false));	
				$dados[$i]['texto'] 			= utf8_encode($rows['texto']);
				$dados[$i]['textoSemTag']		= strip_tags(utf8_encode($rows['texto']));
				$dados[$i]['textoAbrev']		= strip_tags(utf8_encode(limita_caracteres($rows['texto'], 150, false)));
				$dados[$i]['numPubclicacao_I'] 	= utf8_encode($rows['numPubclicacao_I']);
				$dados[$i]['numPubclicacao'] 	= utf8_encode($rows['numPubclicacao']);
				$dados[$i]['numPubclicacaoAbrev']= utf8_encode(limita_caracteres($rows['numPubclicacao'], 45, false));
				$dados[$i]['tag'] 				= utf8_encode(nl2br(trim($rows['tag'])));
			}

			$dados[$i]['data'] 				= date("d/m/Y", strtotime($rows['data']));
			$dados[$i]['Mes']				= Mes(explode("-", ($rows['data'])));
			$dados[$i]['dataMes'] 			= explode("-", ($rows['data']));
			$dados[$i]['nomeCategoria'] 	= utf8_encode($rows['nomeCategoria']);
			$dados[$i]['titulo_I'] 			= utf8_encode($rows['titulo_I']);
			$dados[$i]['por']			 	= utf8_encode($rows['por']);
			$dados[$i]['texto_I'] 			= utf8_encode($rows['texto_I']);
			$dados[$i]['textoSemTag_I']		= strip_tags(utf8_encode($rows['texto_I']));
			$dados[$i]['tipo'] 				= tipoPublicacao($rows['idTipo']);
			$dados[$i]['data_formatada']	= date('Y-m-d', strtotime($rows['data']));
			$i++;
		}

		// echo "<pre>";
		// print_r($dados);
		// die();
		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	}

	function PesquisarTags($post)
	{
		$query = "";

		if($post['tipo'])
		{
			$query .= " AND P.idTipo = '".$post['tipo']."' ";
		}

		if($post['id'])
		{
			$query .= " AND P.id = '".$post['id']."' ";
		}

		$retorno = array();
	
		$sql = "SELECT
					P.tag,
					P.tag_I,
					P.idTipo
				FROM  
					" . $this->entidade . " P
				WHERE
					P.tag IS NOT NULL AND P.tag <> '' ".$query."
				ORDER BY
					P.tag,P.tag_I ASC
		";

		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = " . $this->entidade . " - Metodo = PesquisarTags";
			return $retorno;
		}

		$tags = array();
		$i = 0;
		while( $rows = mysql_fetch_array($result) )
		{
			//$dados[$i] 					= $rows;
			if ($_SESSION['idioma'] == "I") {
				$dados[$i]['tag'] 		= utf8_encode(nl2br(trim($rows['tag_I'])));
			}else{
				$dados[$i]['tag'] 		= utf8_encode(nl2br(trim($rows['tag'])));
			}
			

			$arTags = explode(",",$dados[$i]['tag']);

			//Varre todas as Tags da respectiva dica
			for ($j=0; $j < count($arTags) ; $j++) { 
				
				if(!in_array(trim($arTags[$j]), $tags))
					$tags[] = trim($arTags[$j]);
			}			

			$i++;
		}

		$retorno[0] = 0;
		$retorno[1] = $tags;
		return $retorno;
	}

	function Grava($post, $file, $file2)
	{

		$retorno = array();
	
		$sql = "
			INSERT INTO
				".$this->entidade."
			SET
				titulo				= '". utf8_decode($post['titulo']) ."',
				titulo_I			= '". utf8_decode($post['titulo_I']) ."',
				numPubclicacao		= '". utf8_decode($post['numPub']) ."',
				numPubclicacao_I	= '". utf8_decode($post['numPub_I']) ."',
				por					= '". utf8_decode($post['por']) ."',
				data				= '". $post['data'] ."',
				texto				= '". addslashes(utf8_decode($post['texto'])) ."',
				texto_I				= '". addslashes(utf8_decode($post['texto_I'])) ."',
				tag					= '". utf8_decode(str_replace("'","''", $post['tag']))."',
				tag_I				= '". utf8_decode(str_replace("'","''", $post['tag_I']))."',
				Idcategoria			= '". $post['categoria'] ."',
				idTipo				= '". $post['tipo'] ."'
		";

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
	
		$sql = "
			UPDATE
				".$this->entidade."
			SET
				titulo				= '". utf8_decode($post['titulo']) ."',
				titulo_I			= '". utf8_decode($post['titulo_I']) ."',
				numPubclicacao		= '". utf8_decode($post['numPub']) ."',
				numPubclicacao_I	= '". utf8_decode($post['numPub_I']) ."',
				por					= '". utf8_decode($post['por']) ."',
				data				= '". $post['data'] ."',
				texto				= '". addslashes(utf8_decode($post['texto'])) ."',
				texto_I				= '". addslashes(utf8_decode($post['texto_I'])) ."',
				tag					= '". utf8_decode(str_replace("'","''", $post['tag']))."',
				tag_I				= '". utf8_decode(str_replace("'","''", $post['tag_I']))."',
				Idcategoria			= '". $post['categoria'] ."',
				idTipo				= '". $post['tipo'] ."'
			WHERE
				id 					= '".$post['id']."'
		";

		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = ".$this->entidade." - Metodo = grava";
			return $retorno;
		}

		$retorno[0] = 0;
		$retorno[1] = "Registro inserido com sucesso.";
		$retorno[2] = $post['id'];
		return $retorno;
	}

	function Exclui($id)
	{
		$retorno = array();

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

		$retorno[0] = 0;
		$retorno[1] = "Exclusão feita com sucesso!";
		return $retorno;
	}

}