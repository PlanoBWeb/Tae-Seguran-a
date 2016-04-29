<?php

include_once "configs/funcoes.php";
include_once "Imagem.class.php";

class Categoria
{
	function Categoria()
    {
		$this->entidade = "categoria";

		$this->pathProjeto = PATH_SERVIDOR;
		
		$classImagem = new Imagem();
		$this->classImagem = $classImagem;
    }
	

	function Pesquisar($post, $totalPorPagina, $pagina)
	{
		$query = "";

		if($post['tipo'])
		{
			$query .= " AND publicacoes.idTipo = '".$post['tipo']."' ";
		}

		if($post['tipoNoticia'] == "1")
		{
			$inner = "INNER JOIN
						noticias
					ON	
						noticias.urlCatNot = categoria.urlAmigavelCat";
		}else{
			$inner = "INNER JOIN
						publicacoes
					ON	
						publicacoes.idCategoria = categoria.id";
		}

		$retorno = array();
		$sql = "SELECT 
					*
				FROM
					" . $this->entidade . " 
				" . $inner . " 
				WHERE
					1 = 1 ".$query."
				GROUP BY	
					categoria.urlAmigavelCat
				ORDER BY
					categoria.id DESC
			";

			// echo "<pre>";
			// print_r($sql);
			// die('sql');
			
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
				$dados[$i]['nomeCategoria_I'] 		= utf8_encode($rows['nomeCategoria_I']);	
			}else{
				$dados[$i]['nomeCategoria'] 		= utf8_encode($rows['nomeCategoria']);	
			}
			$i++;
		}

		$retorno[0] = 0;
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