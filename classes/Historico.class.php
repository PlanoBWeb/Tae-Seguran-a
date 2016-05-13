<?php

include_once "configs/funcoes.php";

class Historico
{
	function Historico()
    {
    }
	
	function Grava($post)
	{
		$retorno = array();
	
		$sql = "
			INSERT	
				historico 
			SET
				idOrcamento		= '".$post["idOrcamento"]."',
				idUsuario		= '".$post["idUsuario"]."',
				descricao		= '".utf8_decode($post["descricao"])."',
				dtCadastro		= now()
		";
		//die("<pre>".$sql."<pre>");
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Historico - Metodo = grava";
			return $retorno;
		}
		else
		{
			$retorno[0] = 0;
			$retorno[1] = "Registro inserido com sucesso.";
			return $retorno;
		}
	}
	
	function Pesquisar($post)
	{
		$query = "";
		
		if($post['id'])
		{
			$query .= " AND H.id = '".$post['id']."' ";
		}
		
		if($post['idUsuario'])
		{
			$query .= " AND H.idUsuario = '".$post['idUsuario']."' ";
		}
		
		if($post['idOrcamento'])
		{
			$query .= " AND H.idOrcamento = '".$post['idOrcamento']."' ";
		}
		
		$retorno = array();
	
		$sql = "SELECT
					H.descricao,
					H.dtCadastro,
					U.usu_nome
				FROM  
					historico H
				INNER JOIN
					usuario U ON U.usu_id = H.idUsuario
				WHERE
					1 = 1 ".$query."
				ORDER BY
					H.dtCadastro DESC
		";
		//echo "<pre>".$sql."</pre>";
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Historico - Metodo = Pesquisar";
			return $retorno;
		}
		
		$i = 0;
		while( $rows = mysql_fetch_array($result) )
		{
			$dados[$i] = $rows;
			
			$dados[$i]["usu_nome"]	 				= utf8_encode($rows["usu_nome"]);
			$dados[$i]["descricao"] 				= nl2br(utf8_encode($rows["descricao"]));
			$dados[$i]["dtCadastro"]				= conv_data2($rows["dtCadastro"], 1);
			
			$dataHora = explode(" ",$dados[$i]["dtCadastro"]);
			$dados[$i]["dtCadastroData"]			= $dataHora[0];
			$dados[$i]["dtCadastroHora"]			= $dataHora[1];
			
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
				historico 
			WHERE
				id = '".$usu_id."'
		".$query;
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Historico - Metodo = Exclui";
			return $retorno;
		}
		
		$retorno[0] = 0;
		$retorno[1] = "Exclusão feita com sucesso!";
		return $retorno;
	}
}

?>