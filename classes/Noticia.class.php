<?php

include_once "configs/funcoes.php";
include_once "Imagem.class.php";

class Noticia
{
	function Noticia()
    {
		//$this->pathProjeto = "C:/BrunnoCardoso/Aplicativos/xampp-win32-1.6.4/xampp/htdocs/projetos/planob/Tae/www/";
		$this->pathProjeto = "E:/home/taeseguranca/Web/";
		
		$classImagem = new Imagem();
		$this->classImagem = $classImagem;
    }
	
	function Grava($post, $file, $copy = NULL)
	{
		$retorno = array();
		
		//Checa se existe imagem
		if ($file['name'] != "")
		{
			//Grava a Imagem
			$retornoClassImagem = $this->classImagem->gravaImagem($file, $post['extencoeValidas'], "upload/noticia/", $copy);
			if( $retornoClassImagem[0] )
			{
				$retorno[0] = "1";
				$retorno[1] = $retornoClassImagem[1];
				return $retorno;
			}
		}
		
		$sql = "
			INSERT INTO
				noticia
			SET
				idUsuario		= '".$post['idUsuario']."',
				titulo 			= '".utf8_decode($post['titulo'])."',
				resumo			= '".utf8_decode($post['resumo'])."',
				texto			= '".utf8_decode($post['text'])."',
				caminhoImagem	= '".$retornoClassImagem[1]."',
				status			= '".$post['status']."',
				dtCadastro = NOW()
		";
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Noticia - Metodo = grava";
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
			if( $post["caminhoImagem"] != "" )
			{
				//Exclui a antiga
				if(!unlink( $this->pathProjeto.$post["caminhoImagem"] ))
				{
					$retorno[0] = "1";
					$retorno[1] = "Não foi possíel excluir a imagem antiga!";
					return $retorno;
				}
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
				noticia 
			SET
				idUsuario		= '".$post['idUsuario']."',
				titulo 			= '".utf8_decode($post['titulo'])."',
				resumo			= '".utf8_decode($post['resumo'])."',
				texto			= '".utf8_decode($post['text'])."',
				caminhoImagem	= '".$retornoClassImagem[1]."',
				status			= '".$post['status']."'
			WHERE
				id 				= '".$post['id']."'
		".$query;
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Noticia - Metodo = Alterar";
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
		
		if($post['status'])
		{
			$query .= " AND status = '".$post['status']."' ";
		}

		$retorno = array();
	
		$sql = "SELECT
					*
				FROM  
					noticia
				WHERE
					1 = 1 ".$query."
				ORDER BY
					dtCadastro DESC, titulo
		";
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Noticia - Metodo = Pesquisar";
			return $retorno;
		}
		
		$i = 0;
		while( $rows = mysql_fetch_array($result) )
		{
			$dados[$i] = $rows;
			
			$dados[$i]["titulo"]			= utf8_encode($rows["titulo"]);
			$dados[$i]["resumo"]			= utf8_encode($rows["resumo"]);
			$dados[$i]["texto"]				= nl2br(utf8_encode($rows["texto"]));
			
			$dados[$i]["not_texto"]			=  htmlspecialchars($rows["texto"]);
			$dados[$i]["textoCompleto"]		=  $rows["texto"];
			
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
				noticia 
			WHERE
				id = '".$usu_id."'
		".$query;
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Noticia - Metodo = Exclui";
			return $retorno;
		}
		
		$retorno[0] = 0;
		$retorno[1] = "Exclusão feita com sucesso!";
		return $retorno;
	}
}

?>