<?php

include_once "configs/funcoes.php";

class Mail
{
	function Mail()
    {
    }
	
	function Grava($post)
	{
		$retorno = array();
		
		//Checa duplicidade de nome
		$parametro["email"] = $post["email"];
		$parametro["idGrupo"] = $post["idGrupo"];
		$result = $this->Pesquisar($parametro);
		if( count($result[1]) > 0 )
		{
			$retorno[0] = "1";
			$retorno[1] = "O e-mail \'".$post["email"]."\' já existem nesse grupo!";
			return $retorno;
		}
		
		$sql = "
			INSERT INTO
				email
			SET
				idGrupo			= '".$post['idGrupo']."',
				email 			= '".utf8_decode($post['email'])."',
				nome 			= '".utf8_decode($post['nome'])."',
				dtCadastro 		= NOW()
		";
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Mail - Metodo = grava";
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
		$parametro["email"] = $post["email"];
		$parametro["idGrupo"] = $post["idGrupo"];
		$parametro["idNot"] = $post["id"];
		$result = $this->Pesquisar($parametro);
		if( count($result[1]) > 0 )
		{
			$retorno[0] = "1";
			$retorno[1] = "O e-mail \'".$post["email"]."\' já existem nesse grupo!";
			return $retorno;
		}
	
		$sql = "
			UPDATE	
				email
			SET
				idGrupo			= '".$post['idGrupo']."',
				nome 			= '".utf8_decode($post['nome'])."',
				email 			= '".utf8_decode($post['email'])."'
			WHERE
				id 				= '".$post['id']."'
		".$query;
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Mail - Metodo = Alterar";
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
			$query .= " AND E.id = '".$post['id']."' ";
		}
		
		if($post['idNot'])
		{
			$query .= " AND E.id != '".$post['idNot']."' ";
		}
		
		if($post['idGrupo'])
		{
			$query .= " AND E.idGrupo = '".$post['idGrupo']."' ";
		}
		
		if($post['email'])
		{
			$query .= " AND E.email = '".trim($post['email'])."' ";
		}

		$retorno = array();
	
		$sql = "SELECT
					E.id, 
					E.idGrupo,
					E.nome,
					E.email,
					E.dtCadastro,
					G.titulo
				FROM  
					email E
				INNER JOIN
					grupo G ON G.id = E.idGrupo
				WHERE
					1 = 1 ".$query."
				ORDER BY
					G.titulo, E.nome
		";
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Mail - Metodo = Pesquisar";
			return $retorno;
		}
		
		$i = 0;
		while( $rows = mysql_fetch_array($result) )
		{
			$dados[$i] = $rows;
			
			$dados[$i]["email"]				= utf8_encode($rows["email"]);
			$dados[$i]["nome"]				= utf8_encode($rows["nome"]);
			$dados[$i]["titulo"]			= utf8_encode($rows["titulo"]);
			
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
				email 
			WHERE
				id = '".$usu_id."'
		".$query;
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Mail - Metodo = Exclui";
			return $retorno;
		}
		
		$retorno[0] = 0;
		$retorno[1] = "Exclusão feita com sucesso!";
		return $retorno;
	}
}

?>