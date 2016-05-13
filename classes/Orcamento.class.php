<?php

include_once "configs/funcoes.php";

class Orcamento
{
	function Orcamento()
    {
    }
	
	function Grava($post)
	{
		$retorno = array();

		//trata valores
		$pessoaisDtNascimento = $post["pesNascimentoAno"]."-".$post["pesNascimentoMes"]."-".$post["pesNascimentoDia"];
		$documentosDtExpedicao = $post["docExpedicaoAno"]."-".$post["docExpedicaoMes"]."-".$post["docExpedicaoDia"];
		$localizacaoCep 	= $post["locCep1"]."-".$post["locCep2"];
		
		$documentosChn = "";
		if( $post["docCnh"] == "s" )
		{
			$documentosChn = $post["docCategoria"];
		}
		
		$pessoaisFilhos = 0;
		if( $post["pesFilhos"] == "s" )
		{
			$pessoaisFilhos = $post["pesQuantos"];
		}
	
		$sql = "
			INSERT	
				curriculum 
			SET
				pessoaisNome			= '".utf8_decode($post["pesNome"])."',
				pessoaisSexo			= '".$post["pesSexo"]."',
				pessoaisDtNascimento	= '".$pessoaisDtNascimento."',
				pessoaisNacionalidade	= '".utf8_decode($post["pesNacionalidade"])."',
				pessoaisNatural			= '".utf8_decode($post["pesNatural"])."',
				pessoaisEstado			= '".$post["pesEstado"]."',
				pessoaisEstadoCivil		= '".utf8_decode($post["pesEstadoCivil"])."',
				pessoaisFilhos			= '".$pessoaisFilhos."',
				
				filiacaoPai				= '".utf8_decode($post["filPai"])."',
				filiacaoMae				= '".utf8_decode($post["filMae"])."',
				
				fisicosPeso				= '".$post["fisPeso"]."',
				fisicosAltura			= '".$post["fisAltura"]."',
				fisicosSapatos			= '".$post["fisSapatos"]."',
				fisicosCamisa			= '".$post["fisCamisa"]."',
				fisicosCalca			= '".$post["fisCalca"]."',
				
				escolaridadeEnsino		= '".$post["escEnsino"]."',
				escolaridadeCompleto	= '".$post["escCompleto"]."',
				
				documentosRg			= '".$post["docRg"]."',
				documentosDtExpedicao	= '".$documentosDtExpedicao."',
				documentosCpf			= '".$post["docCpf"]."',
				documentosTitulo		= '".utf8_decode($post["docTitulo"])."',
				documentosPis			= '".$post["docPis"]."',
				documentosTipoSanguineo	= '".utf8_decode($post["docTipoSanguineo"])."',
				documentosCtps			= '".$post["docCtps"]."',
				documentosSerie			= '".utf8_decode($post["docSerie"])."',
				documentosChn			= '".$documentosChn."',
	
				localizacaoEndereco		= '".utf8_decode($post["locEndereco"])."',
				localizacaoNumero		= '".$post["locNumero"]."',
				localizacaoBairro		= '".utf8_decode($post["locBairro"])."',
				localizacaoComplemento	= '".utf8_decode($post["locComplemento"])."',
				localizacaoCep			= '".$localizacaoCep."',
				localizacaoEstado		= '".$post["locEstado"]."',
				localizacaoCidade		= '".utf8_decode($post["locCidade"])."',
				
				contatosTelefoneDdd		= '".$post["conFoneDdd"]."',
				contatosTelefone		= '".$post["conFone"]."',
				contatosCelularDdd		= '".$post["conCelDdd"]."',
				contatosCelular			= '".$post["conCel"]."',
				contatosEmail			= '".utf8_decode($post["conEmail"])."',
				
				experiencia				= '".utf8_decode($post["experiencia"])."',
				curso					= '".$post["curso"]."',
				dtCadastro 				= now()
		";
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Curriculum - Metodo = grava";
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
		
		//trata valores
		$pessoaisDtNascimento = $post["pesNascimentoAno"]."-".$post["pesNascimentoMes"]."-".$post["pesNascimentoDia"];
		$documentosDtExpedicao = $post["docExpedicaoAno"]."-".$post["docExpedicaoMes"]."-".$post["docExpedicaoDia"];
		$localizacaoCep 	= $post["locCep1"]."-".$post["locCep2"];
		
		$documentosChn = "";
		if( $post["docCnh"] == "s" )
		{
			$documentosChn = $post["docCategoria"];
		}
		
		$pessoaisFilhos = 0;
		if( $post["pesFilhos"] == "s" )
		{
			$pessoaisFilhos = $post["pesQuantos"];
		}
	
		$sql = "
			UPDATE	
				curriculum 
			SET
				pessoaisNome			= '".utf8_decode($post["pesNome"])."',
				pessoaisSexo			= '".$post["pesSexo"]."',
				pessoaisDtNascimento	= '".$pessoaisDtNascimento."',
				pessoaisNacionalidade	= '".utf8_decode($post["pesNacionalidade"])."',
				pessoaisNatural			= '".utf8_decode($post["pesNatural"])."',
				pessoaisEstado			= '".$post["pesEstado"]."',
				pessoaisEstadoCivil		= '".utf8_decode($post["pesEstadoCivil"])."',
				pessoaisFilhos			= '".$pessoaisFilhos."',
				
				filiacaoPai				= '".utf8_decode($post["filPai"])."',
				filiacaoMae				= '".utf8_decode($post["filMae"])."',
				
				fisicosPeso				= '".$post["fisPeso"]."',
				fisicosAltura			= '".$post["fisAltura"]."',
				fisicosSapatos			= '".$post["fisSapatos"]."',
				fisicosCamisa			= '".$post["fisCamisa"]."',
				fisicosCalca			= '".$post["fisCalca"]."',
				
				escolaridadeEnsino		= '".$post["escEnsino"]."',
				escolaridadeCompleto	= '".$post["escCompleto"]."',
				
				documentosRg			= '".$post["docRg"]."',
				documentosDtExpedicao	= '".$documentosDtExpedicao."',
				documentosCpf			= '".$post["docCpf"]."',
				documentosTitulo		= '".utf8_decode($post["docTitulo"])."',
				documentosPis			= '".$post["docPis"]."',
				documentosTipoSanguineo	= '".utf8_decode($post["docTipoSanguineo"])."',
				documentosCtps			= '".$post["docCtps"]."',
				documentosSerie			= '".utf8_decode($post["docSerie"])."',
				documentosChn			= '".$documentosChn."',
	
				localizacaoEndereco		= '".utf8_decode($post["locEndereco"])."',
				localizacaoNumero		= '".$post["locNumero"]."',
				localizacaoBairro		= '".utf8_decode($post["locBairro"])."',
				localizacaoComplemento	= '".utf8_decode($post["locComplemento"])."',
				localizacaoCep			= '".$localizacaoCep."',
				localizacaoEstado		= '".$post["locEstado"]."',
				localizacaoCidade		= '".utf8_decode($post["locCidade"])."',
				
				contatosTelefoneDdd		= '".$post["conFoneDdd"]."',
				contatosTelefone		= '".$post["conFone"]."',
				contatosCelularDdd		= '".$post["conCelDdd"]."',
				contatosCelular			= '".$post["conCel"]."',
				contatosEmail			= '".utf8_decode($post["conEmail"])."',
				
				experiencia				= '".utf8_decode($post["experiencia"])."',
				curso					= '".$post["curso"]."'
			WHERE
				id 						= '".$post['id']."'
		";
		
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Curriculo - Metodo = Alterar";
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
					orcamento 
				WHERE
					1 = 1 ".$query."
				ORDER BY
					dtCadastro DESC, nome
		";
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Orcamento - Metodo = Pesquisar";
			return $retorno;
		}
		
		$i = 0;
		while( $rows = mysql_fetch_array($result) )
		{
			$dados[$i] = $rows;
			
			$dados[$i]["razao"] 			= utf8_encode($rows["razao"]);
			$dados[$i]["endereco"] 			= utf8_encode($rows["endereco"]);
			$dados[$i]["bairro"] 			= utf8_encode($rows["bairro"]);
			$dados[$i]["complemento"] 		= utf8_encode($rows["complemento"]);
			$dados[$i]["cidade"] 			= utf8_encode($rows["cidade"]);
			$dados[$i]["nome"] 				= utf8_encode($rows["nome"]);
			$dados[$i]["email"] 			= utf8_encode($rows["email"]);
			$dados[$i]["servicos"] 			= utf8_encode($rows["servicos"]);
			$dados[$i]["dtCadastroFormat"]	= conv_data2($rows["dtCadastro"], 1);
			
			$cep = explode("-",$rows["cep"]);
			$dados[$i]["lcep1"]			= $cep[0];
			$dados[$i]["cep2"]			= $cep[1];
			
			$i++;
		}
		
		$retorno[0] = 0;
		$retorno[1] = $dados;
		return $retorno;
	}
	
	function PesquisarPaginacao($post, $limit = null, $total = null)
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
					orcamento 
				WHERE
					1 = 1 ".$query."
				ORDER BY
					dtCadastro DESC, nome
				".$limit."
		";
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Orcamento - Metodo = PesquisarPaginacao";
			return $retorno;
		}
		
		if( $total == null )
		{
			$i = 0;
			while( $rows = mysql_fetch_array($result) )
			{
				$dados[$i] = $rows;
				
				$dados[$i]["razao"] 			= utf8_encode($rows["razao"]);
				$dados[$i]["endereco"] 			= utf8_encode($rows["endereco"]);
				$dados[$i]["bairro"] 			= utf8_encode($rows["bairro"]);
				$dados[$i]["complemento"] 		= utf8_encode($rows["complemento"]);
				$dados[$i]["cidade"] 			= utf8_encode($rows["cidade"]);
				$dados[$i]["nome"] 				= utf8_encode($rows["nome"]);
				$dados[$i]["email"] 			= utf8_encode($rows["email"]);
				$dados[$i]["servicos"] 			= nl2br(utf8_encode($rows["servicos"]));
				$dados[$i]["dtCadastroFormat"]	= conv_data2($rows["dtCadastro"], 1);
				
				$cep = explode("-",$rows["cep"]);
				$dados[$i]["lcep1"]			= $cep[0];
				$dados[$i]["cep2"]			= $cep[1];
				
				$i++;
			}
			
			$retorno[0] = 0;
			$retorno[1] = $dados;
		}
		else
		{
			$retorno = mysql_num_rows($result);
		}
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
		$retorno[1] = "Exclusão feita com sucesso!";
		return $retorno;
	}
}

?>