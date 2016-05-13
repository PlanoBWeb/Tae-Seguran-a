<?php

include_once "configs/funcoes.php";

class Usuario
{
	function Usuario()
    {
    }
	
	function Grava($post)
	{
		$retorno = array();

		//Valida duplicidade
		$parametroValidacao['email'] = $post['email'];
		$retornoValidacao = $this->Pesquisar($parametroValidacao);
		if($retornoValidacao[1][0]['usu_id'] != 0)
		{
			$retorno[0] = "1";
			$retorno[1] = "O email ".$post['email']." jб existe em nosso banco de dados!";
			return $retorno;
		}
		
		$sql = "
			INSERT INTO
				usuario
			SET
				usu_nome = '".utf8_decode($post['nome'])."',
				usu_email = '".$post['email']."',
				usu_senha = '".$post['senha']."',
				usu_dt_cadastro = NOW()
		";
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Usuario - Metodo = grava";
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
	
		$sql = "
			UPDATE	
				usuario 
			SET
				usu_nome = '".utf8_decode($post['nome'])."',
				usu_email = '".$post['email']."',
				usu_senha = '".$post['senha']."'
			WHERE
				usu_id = '".$post['id']."'
		".$query;
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Usuario - Metodo = Alterar";
			return $retorno;
		}
		else
		{
			$retorno[0] = 0;
			$retorno[1] = "Alteraзгo feita com sucesso!";
			return $retorno;
		}
	}
	
	function AlteraSenha($post)
	{
		$retorno = array();
	
		$sql = "
			UPDATE	
				usuario 
			SET
				usu_senha = '".$post['senha']."'
			WHERE
				usu_id = '".$post['id']."'
		";
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Usuario - Metodo = AlteraSenha";
			return $retorno;
		}
		
		$retorno[0] = 0;
		$retorno[1] = "Alteraзгo feita com sucesso. A prуxima autenticaзгo deverб ser feita com a nova senha!";
		return $retorno;
	}
	
	function Pesquisar($post)
	{
		$query = "";
		
		if($post['id'])
		{
			$query .= " AND usu_id = '".$post['id']."' ";
		}
		
		if($post['nome'])
		{
			$query .= " AND usu_nome like '%".$post['nome']."%' ";
		}
		
		if($post['email'])
		{
			$query .= " AND usu_email like '%".$post['email']."%' ";
		}
		
		$retorno = array();
	
		$sql = "SELECT
					*
				FROM  
					usuario 
				WHERE
					1 = 1 ".$query."
				ORDER BY
					usu_nome
		";
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Usuario - Metodo = Pesquisar";
			return $retorno;
		}
		
		$i = 0;
		while( $rows = mysql_fetch_array($result) )
		{
			$dados[$i] = $rows;
			$dados[$i]['usu_nome'] = utf8_encode($rows['usu_nome']);
			$dados[$i]['dtFormat'] = conv_data2($rows['usu_dt_cadastro']);
			
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
				usuario 
			WHERE
				usu_id = '".$usu_id."'
		".$query;
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Usuario - Metodo = Exclui";
			return $retorno;
		}
		
		$retorno[0] = 0;
		$retorno[1] = "Exclusгo feita com sucesso!";
		return $retorno;
	}
	
	function checa($login, $senha)
	{
		$retorno = array();
	
		$sql = "SELECT
					usu_id,
					usu_email,
					usu_senha,
					usu_nome,
					usu_perfil,
					usu_status
				FROM  
					usuario 
				WHERE
					usu_email = '".$login."' AND 
					usu_senha = '".$senha."'
		";
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Usuario - Metodo = checa";
			return $retorno;
		}
		$total = mysql_num_rows($result);
		
		if( $total != 1 )
		{
			$retorno[0] = "1";
			$retorno[1] = "Login ou senha incorreta!";
			return $retorno;
		}
		
		$rows = mysql_fetch_array($result);
		
		$dadosUsuario['usu_id']		= $rows['usu_id'];
		$dadosUsuario['usu_email']	= $rows['usu_email'];
		$dadosUsuario['usu_senha']	= $rows['usu_senha'];
		$dadosUsuario['usu_nome']	= $rows['usu_nome'];
		$dadosUsuario['usu_perfil']	= $rows['usu_perfil'];
		$dadosUsuario['usu_status']	= $rows['usu_status'];
		
		$retorno[0] = 0;
		$retorno[1] = $dadosUsuario;
		return $retorno;
	}
}

?>