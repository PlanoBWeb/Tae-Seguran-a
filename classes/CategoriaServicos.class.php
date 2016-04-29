<?php

include_once "configs/funcoes.php";
include_once "Imagem.class.php";

class CategoriaServicos
{
	function CategoriaServicos()
    {
		$this->entidade = "categoria_servicos";

		$this->pathProjeto = PATH_SERVIDOR;
		
		$classImagem = new Imagem();
		$this->classImagem = $classImagem;
    }
	

	function Pesquisar($post)
	{
		$query = "";

		if($post['tipo'])
		{
			$query .= " AND publicacoes.idTipo = '".$post['tipo']."' ";
		}

		// if($post['group'])
		// {
		// 	$group .= " AND publicacoes.idTipo = '".."' ";
		// }

		

		// if($post['tipoNoticia'] == "1")
		// {
		// 	$inner = "INNER JOIN
		// 				noticias
		// 			ON	
		// 				noticias.urlCatNot = categoria.urlAmigavelCat";
		// }else{
		// 	$inner = "INNER JOIN
		// 				publicacoes
		// 			ON	
		// 				publicacoes.idCategoria = categoria.id";
		// }

		// if($post['tipoNoticia'] == "1")
		// {
			// $inner = "INNER JOIN
			// 			servicos
			// 		ON	
			// 			servicos.urlAmigavelCat = " . $this->entidade . ".urlAmigavelCategoria";
		// }

		$retorno = array();
		$sql = "SELECT 
					*
				FROM
					" . $this->entidade . " 
				" . $inner . " 
				WHERE
					1 = 1 ".$query."
				GROUP BY	
					" . $this->entidade . ".urlAmigavelCategoria
				ORDER BY
					" . $this->entidade . ".id DESC
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
			$dados[$i] 					= $rows;
			$dados[$i]['nome'] 		= utf8_encode($rows['nome']);
			$i++;
		}

		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	}

	function PesquisarMenuHeader($post)
	{

		$retorno = array();

		$sql = "SELECT 
					servicos.urlAmigavel,
					servicos.nome,
					servicos.urlAmigavelCat,
					C.urlAmigavelCategoria,
					C.nome AS nomeCat,
					C.caminhoImagem
				FROM
					servicos
				INNER JOIN
					categoria_servicos C
				WHERE
					1 = 1 AND C.urlAmigavelCategoria = servicos.urlAmigavelCat
				ORDER BY
					servicos.id DESC
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
			$dados[$i] 					= $rows;
			$dados[$i]['nome'] 			= utf8_encode($rows['nome']);
			$dados[$i]['nomeCat'] 			= utf8_encode($rows['nomeCat']);
			$i++;
		}
		
		// $retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	}

	function PesquisarCategorias($post)
	{
		$query = "";

		$retorno = array();
		$sql = "SELECT 
					*
				FROM
					" . $this->entidade . " 
				WHERE
					1 = 1 
				ORDER BY
					nomeCategoria DESC,
					nomeCategoria_I DESC
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
			$dados[$i] 					= $rows;
			$dados[$i]['nomeCategoria'] 		= utf8_encode($rows['nomeCategoria']);	
		
			$i++;
		}

		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	}

}