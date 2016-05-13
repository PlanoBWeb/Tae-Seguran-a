<?php

include_once "configs/funcoes.php";

class Cargo
{
	function Cargo()
    {
    }
	
	function Pesquisar($post)
	{
		$query = "";
		
		$retorno = array();
	
		$sql = "SELECT
					*
				FROM  
					cargo 
				WHERE
					1 = 1 ".$query."
				ORDER BY
					cargo
		";
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Cargo - Metodo = Pesquisar";
			return $retorno;
		}
		
		$i = 0;
		while( $rows = mysql_fetch_array($result) )
		{
			$dados[$i] = $rows;
			
			$dados[$i]["cargo"] 				= utf8_encode($rows["cargo"]);
			
			$i++;
		}
		
		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	}
	
	function PesquisarVinculo($post)
	{
		$query = "";
		
		$retorno = array();
		
		if($post['idCurriculum'])
		{
			$query .= " AND idCurriculum = '".$post['idCurriculum']."' ";
		}
	
		$sql = "SELECT
					*
				FROM  
					exerce 
				WHERE
					1 = 1 ".$query."
				ORDER BY
					idCargo
		";
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Cargo - Metodo = PesquisarVinculo";
			return $retorno;
		}
		
		$i = 0;
		while( $rows = mysql_fetch_array($result) )
		{
			$exerce[$i]	= $rows["idCargo"];
			
			$i++;
		}
		
		
		
		//Resgata TODOS os cargos
		$sql = "SELECT
					*
				FROM  
					cargo 
				ORDER BY
					cargo
		";
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Cargo - Metodo = Pesquisar";
			return $retorno;
		}
		
		$i = 0;
		while( $rows = mysql_fetch_array($result) )
		{
			$dados[$i] = $rows;
			
			$dados[$i]["cargo"] 				= utf8_encode($rows["cargo"]);
			if( count($exerce) > 0  )
			{
				if( in_array($rows["id"], $exerce) )
				{
					$dados[$i]["exerce"]			= 1;
				}
				else
				{
					$dados[$i]["exerce"]			= 0;
				}
			}
			else
			{
				$dados[$i]["exerce"]			= 0;
			}
			
			$i++;
		}
		
		/*
		echo "idCurriculum -> ".$post["idCurriculum"] . "<br>";
		echo "<pre>";
		print_r($exerce);
		print_r($dados);
		die("FIM TEMP");
		*/
		
		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	}
	
	function gravaVinculo($idCurriculum, $cargos)
	{
		$retorno = array();
		
		$retornoExclusao = $this->excluiVinculo($idCurriculum);
		if ( $retornoExclusao[0] == 1 )
		{
			$retorno[0] = "1";
			$retorno[1] = $retornoExclusao[1];
			return $retorno;
		}
		
		for($i=0; $i<count($cargos); $i++)
		{
			$sql = "
				INSERT INTO
					exerce
				SET
					idCurriculum	= '".$idCurriculum."',
					idCargo			= '".$cargos[$i]."'
			";
			$result = mysql_query($sql);
			if (!($result))
			{
				$retorno[0] = "1";
				$retorno[1] = "Erro ao executar a query. Classe = Cargo - Metodo = gravaVinculo";
				return $retorno;
			}
		}
		
		$retorno[0] = 0;
		$retorno[1] = "Vinculo inserido com sucesso.";
		return $retorno;
	}
	
	function excluiVinculo($idCurriculum)
	{
		$retorno = array();
	
		$sql = "
			DELETE FROM	
				exerce 
			WHERE
				idCurriculum = '".$idCurriculum."'
		".$query;
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Cargo - Metodo = excluiVinculo";
			return $retorno;
		}
		
		$retorno[0] = 0;
		$retorno[1] = "Exclusão de vinculo feita com sucesso!";
		return $retorno;
	}
}

?>