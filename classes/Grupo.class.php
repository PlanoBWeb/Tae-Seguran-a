<?php

include_once "configs/funcoes.php";
include_once "Imagem.class.php";

class Grupo
{
	function Grupo()
    {
    }
	
	function Grava($post)
	{
		$retorno = array();
		
		//Checa duplicidade de nome
		$parametro["titulo"] = $post["titulo"];
		$result = $this->Pesquisar($parametro);
		if( count($result[1]) > 0 )
		{
			$retorno[0] = "1";
			$retorno[1] = "O grupo \'".$post["titulo"]."\' já existem em nosso banco de dados!";
			return $retorno;
		}
		
		$sql = "
			INSERT INTO
				grupo
			SET
				titulo 			= '".utf8_decode($post['titulo'])."',
				dtCadastro 		= NOW()
		";
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Grupo - Metodo = grava";
			return $retorno;
		}
		else
		{
			$retorno[0] = 0;
			$retorno[1] = "Registro inserido com sucesso.";
			return $retorno;
		}
	}
	
	function Altera($post)
	{
		$retorno = array();
		
		//Checa duplicidade de nome
		$parametro["titulo"] = $post["titulo"];
		$parametro["idNot"] = $post["id"];
		$result = $this->Pesquisar($parametro);
		if( count($result[1]) > 0 )
		{
			$retorno[0] = "1";
			$retorno[1] = "O grupo \'".$post["titulo"]."\' já existem em nosso banco de dados!";
			return $retorno;
		}
	
		$sql = "
			UPDATE	
				grupo
			SET
				titulo 			= '".utf8_decode($post['titulo'])."'
			WHERE
				id 				= '".$post['id']."'
		".$query;
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Grupo - Metodo = Alterar";
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
		
		if($post['idNot'])
		{
			$query .= " AND id != '".$post['idNot']."' ";
		}
		
		if($post['titulo'])
		{
			$query .= " AND titulo = '".trim($post['titulo'])."' ";
		}

		$retorno = array();
	
		$sql = "SELECT
					*
				FROM  
					grupo
				WHERE
					1 = 1 ".$query."
				ORDER BY
					titulo
		";
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Grupo - Metodo = Pesquisar";
			return $retorno;
		}
		
		$i = 0;
		while( $rows = mysql_fetch_array($result) )
		{
			$dados[$i] = $rows;
			
			$dados[$i]["titulo"]			= utf8_encode($rows["titulo"]);
			$dados[$i]["resumo"]			= utf8_encode($rows["resumo"]);
			
			$dados[$i]['dtCadastroFormat'] = conv_data2($rows['dtCadastro']);
			
			$i++;
		}
		
		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	}
	
	function PesquisarCompleta($post)
	{
		$retorno = array();
	
		$sql = "SELECT
					*
				FROM  
					grupo
				ORDER BY
					titulo
		";
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Grupo - Metodo = PesquisarCompleta";
			return $retorno;
		}
		
		$i = 0;
		while( $rows = mysql_fetch_array($result) )
		{
			$dados[$i]["id"]		= $rows["id"];
			$dados[$i]["titulo"]	= utf8_encode($rows["titulo"]);
			
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
				grupo 
			WHERE
				id = '".$usu_id."'
		".$query;
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Grupo - Metodo = Exclui";
			return $retorno;
		}
		
		$retorno[0] = 0;
		$retorno[1] = "Exclusão feita com sucesso!";
		return $retorno;
	}
}

?>