<?php

include_once "configs/funcoes.php";
include_once "Imagem.class.php";

class Newsletter
{
	function Newsletter()
    {
    }
	
	function Grava($post, $file, $copy = NULL)
	{
		$retorno = array();
		
		$sql = "
			INSERT INTO
				newsletter
			SET
				titulo 			= '".utf8_decode($post['titulo'])."',
				texto			= '".utf8_decode($post['text'])."',
				dtCadastro = NOW()
		";
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Newsletter - Metodo = grava";
			return $retorno;
		}
		else
		{
			$retorno[0] = 0;
			$retorno[1] = "Registro inserido com sucesso.";
			return $retorno;
		}
	}
	
	function Altera($post, $file, $copy = NULL)
	{
		//Checa se será autializado a imagem
		if ($file['name'] != "")
		{
			//Exclui a antiga
			if(!unlink( $this->pathProjeto.$post["caminhoImagem"] ))
			{
				$retorno[0] = "1";
				$retorno[1] = "Não foi possíel excluir a imagem antiga!";
				return $retorno;
			}
			
			//Grava a Imagem
			$retornoClassImagem = $this->classImagem->gravaImagem($file, $post['extencoeValidas'], "upload/noticia/", $copy);
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
		
		$retorno = array();
	
		$sql = "
			UPDATE	
				newsletter 
			SET
				titulo 			= '".utf8_decode($post['titulo'])."',
				texto			= '".utf8_decode($post['text'])."'
			WHERE
				id 				= '".$post['id']."'
		".$query;
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Newsletter - Metodo = Alterar";
			return $retorno;
		}
		else
		{
			$retorno[0] = 0;
			$retorno[1] = "Alteração feita com sucesso!";
			return $retorno;
		}
	}
	
	function Pesquisar($post)
	{
		$query = "";
		
		if($post['id'])
		{
			$query .= " AND id = '".$post['id']."' ";
		}

		$retorno = array();
	
		$sql = "SELECT
					*
				FROM  
					newsletter
				WHERE
					1 = 1 ".$query."
				ORDER BY
					dtCadastro DESC, titulo
		";
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Newsleter - Metodo = Pesquisar";
			return $retorno;
		}
		
		$i = 0;
		while( $rows = mysql_fetch_array($result) )
		{
			$dados[$i] = $rows;
			
			$dados[$i]["titulo"]			= utf8_encode($rows["titulo"]);
			$dados[$i]["resumo"]			= utf8_encode($rows["resumo"]);
			$dados[$i]["texto"]				= utf8_encode($rows["texto"]);
			
			$dados[$i]['dtCadastroFormat'] = conv_data2($rows['dtCadastro']);
			
			$i++;
		}
		
		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	}
	
	function Exclui($usu_id)
	{
		$retorno = array();
	
		$sql = "
			DELETE FROM	
				newsletter 
			WHERE
				id = '".$usu_id."'
		".$query;
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Newsletter - Metodo = Exclui";
			return $retorno;
		}
		
		$retorno[0] = 0;
		$retorno[1] = "Exclusão feita com sucesso!";
		return $retorno;
	}
}

?>