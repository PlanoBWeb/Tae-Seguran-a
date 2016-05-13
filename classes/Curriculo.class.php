<?php

include_once "configs/funcoes.php";
include_once "Cargo.class.php";

class Curriculo
{
	function Curriculo()
    {
		$classCargo = new Cargo();
		$this->classCargo = $classCargo;
    }
	
	function Grava($post)
	{
		$retorno = array();
		
		//Checa duplicidade
		$parametroDuplicidade['docCpf'] = $post["docCpf"];
		$dadosDuplicidade = $this->Pesquisar($parametroDuplicidade);
		
		if(count($dadosDuplicidade[1]) > 0)
		{
			$retorno[0] = "1";
			$retorno[1] = "Já existe o CPF ".$post["docCpf"]." cadastrado em nosso banco de dados!";
			return $retorno;
		}
		
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
				
				status					= '".$post["status"]."',
				anotacoes				= '".utf8_decode($post["anotacoes"])."',
				
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
			//Resgata o id do curriculum que acabou de registrar
			$sqlUltimo = "SELECT MAX(id) AS ultimo FROM curriculum";
			$resultUltimo = mysql_query($sqlUltimo);
			$dadosUltimo = mysql_fetch_array($resultUltimo);
			$idCurriculum = $dadosUltimo['ultimo'];
			
			//Grava o vínculo do Curriculum com as funcões
			$retornoCargo = $this->classCargo->gravaVinculo($idCurriculum, $post['cargo']);
			if( $retornoCargo[0] == 1 )
			{
				$retorno[0] = "1";
				$retorno[1] = "Não foi possível gravar o vinculo";
				return $retorno;
			}
			
			$retorno[0] = 0;
			$retorno[1] = "Registro inserido com sucesso.";
			return $retorno;
		}
	}
	
	function Altera($post)
	{
		$retorno = array();
		
		//Grava o vínculo do Curriculum com as funcões
		$retornoCargo = $this->classCargo->gravaVinculo($post['id'], $post['cargo']);
		if( $retornoCargo[0] == 1 )
		{
			$retorno[0] = "1";
			$retorno[1] = "Não foi possível gravar o vinculo";
			return $retorno;
		}
		
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
				curso					= '".$post["curso"]."',
				
				status					= '".$post["status"]."',
				anotacoes				= '".utf8_decode($post["anotacoes"])."'
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
		
		if($post['docCpf'])
		{
			$query .= " AND documentosCpf = '".$post['docCpf']."' ";
		}
		
		if($post['status'] == '0' || $post['status'] == '1' )
		{
			$query .= " AND status = '".$post['status']."' ";
		}
		
		if($post['dtCadastro'])
		{
			$query .= " AND ".$post['dtCadastro']." ";
		}
		
		$retorno = array();
	
		$sql = "SELECT
					*
				FROM  
					curriculum 
				WHERE
					1 = 1 ".$query."
				ORDER BY
					pessoaisNome
		";
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Curriculo - Metodo = Pesquisar";
			return $retorno;
		}
		
		$i = 0;
		while( $rows = mysql_fetch_array($result) )
		{
			$dados[$i] = $rows;
			
			$dados[$i]["pessoaisNome"] 				= utf8_encode($rows["pessoaisNome"]);
			$dados[$i]["pessoaisNacionalidade"] 	= utf8_encode($rows["pessoaisNacionalidade"]);
			$dados[$i]["pessoaisNatural"] 			= utf8_encode($rows["pessoaisNatural"]);
			$dados[$i]["pessoaisEstadoCivil"] 		= utf8_encode($rows["pessoaisEstadoCivil"]);
			$dados[$i]["filiacaoPai"] 				= utf8_encode($rows["filiacaoPai"]);
			$dados[$i]["filiacaoMae"] 				= utf8_encode($rows["filiacaoMae"]);
			$dados[$i]["documentosTitulo"] 			= utf8_encode($rows["documentosTitulo"]);
			$dados[$i]["documentosTipoSanguineo"] 	= utf8_encode($rows["documentosTipoSanguineo"]);
			$dados[$i]["documentosSerie"] 			= utf8_encode($rows["documentosSerie"]);
			$dados[$i]["localizacaoEndereco"] 		= utf8_encode($rows["localizacaoEndereco"]);
			$dados[$i]["localizacaoBairro"] 		= utf8_encode($rows["localizacaoBairro"]);
			$dados[$i]["localizacaoComplemento"] 	= utf8_encode($rows["localizacaoComplemento"]);
			$dados[$i]["localizacaoCidade"] 		= utf8_encode($rows["localizacaoCidade"]);
			$dados[$i]["contatosEmail"] 			= utf8_encode($rows["contatosEmail"]);
			$dados[$i]["experiencia"] 				= utf8_encode($rows["experiencia"]);
			$dados[$i]["anotacoes"] 				= utf8_encode($rows["anotacoes"]);

			
			$dados[$i]["pesNascimentoAno"]			= substr($rows["pessoaisDtNascimento"], 0, 4);
			$dados[$i]["pesNascimentoMes"]			= substr($rows["pessoaisDtNascimento"], 5, 2);
			$dados[$i]["pesNascimentoDia"]			= substr($rows["pessoaisDtNascimento"], 8, 2);
			$dados[$i]["pesFilhos"]					= ( $rows["pessoaisDtNascimento"] > 0 ? 's' : 'n' );
			$dados[$i]["docExpedicaoAno"]			= substr($rows["documentosDtExpedicao"], 0, 4);
			$dados[$i]["docExpedicaoMes"]			= substr($rows["documentosDtExpedicao"], 5, 2);
			$dados[$i]["docExpedicaoDia"]			= substr($rows["documentosDtExpedicao"], 8, 2);
			$dados[$i]["docCnh"]					= ( $rows["documentosChn"] =! "" ? 's' : 'n' );
			
			$cep = explode("-",$rows["localizacaoCep"]);
			$dados[$i]["locCep1"]					= $cep[0];
			$dados[$i]["locCep2"]					= $cep[1];
			
			$dados[$i]["idade"]						= CalcularIdade(conv_data2($rows["pessoaisDtNascimento"], 1));//"15-2-1985"
			
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
		
		if($post['curso'])
		{
			$query .= " AND curso = '".$post['curso']."' ";
		}
		
		if($post['status'] == '0' || $post['status'] == '1' )
		{
			$query .= " AND status = '".$post['status']."' ";
		}
		
		if($post['dtCadastro'])
		{
			$query .= " AND ".$post['dtCadastro']." ";
		}
		
		/*
		 * Paginação
		 */
		if( $post["idadeInicio"] != "" || $post["idadeFim"] != "" )
		{
			$idade = ",(YEAR(CURDATE())-YEAR(pessoaisDtNascimento))-(RIGHT(CURDATE(),5)<RIGHT(pessoaisDtNascimento,5)) AS idade";
			if( $post["idadeInicio"] != "" && $post["idadeFim"] != "" )
			{
				$query .= " HAVING ( idade >= '".$post['idadeInicio']."' AND idade <= '".$post['idadeFim']."' ) ";
			}
			elseif( $post["idadeInicio"] != "" )
			{
				$query .= " HAVING idade >= '".$post['idadeInicio']."'";
			}
			else
			{
				$query .= " HAVING idade <= '".$post['idadeFim']."'";
			}
		} 
		 
		if( $post["pesoInicio"] != "" || $post["pesoFim"] != "" )
		{
			if( $post["pesoInicio"] != "" && $post["pesoFim"] != "" )
			{
				$query .= " AND ( fisicosPeso >= '".$post['pesoInicio']."' AND fisicosPeso <= '".$post['pesoFim']."' ) ";
			}
			elseif( $post["pesoInicio"] != "" )
			{
				$query .= " AND fisicosPeso >= '".$post['pesoInicio']."'";
			}
			else
			{
				$query .= " AND fisicosPeso <= '".$post['pesoFim']."'";
			}
		} 
		
		if( $post["alturaInicio"] != "" || $post["alturaFim"] != "" )
		{
			if( $post["alturaInicio"] != "" && $post["alturaFim"] != "" )
			{
				$query .= " AND ( fisicosAltura >= '".$post['alturaInicio']."' AND fisicosAltura <= '".$post['alturaFim']."' ) ";
			}
			elseif( $post["alturaInicio"] != "" )
			{
				$query .= " AND fisicosAltura >= '".$post['alturaInicio']."'";
			}
			else
			{
				$query .= " AND fisicosAltura <= '".$post['alturaFim']."'";
			}
		}
		/*
		 * Paginação - FIM
		 */
		 
		$retorno = array();
		
		//Case se foi selecionado a opção de cargo
		if( $post["cargo"] )
		{
			$sql = "SELECT
						* ".$idade."
					FROM  
						curriculum 
					INNER Join
						exerce ON idCurriculum = id AND idCargo = '".$post["cargo"]."'
					WHERE
						1 = 1 ".$query."
					ORDER BY
						pessoaisNome
					".$limit."
			";
		}
		else
		{
			$sql = "SELECT
						* ".$idade."
					FROM  
						curriculum 
					WHERE
						1 = 1 ".$query."
					ORDER BY
						pessoaisNome
					".$limit."
			";
		}
		/*
		echo "<pre>";
		print_r($sql);
		echo "</pre>";
		*/
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Curriculo - Metodo = Pesquisar";
			return $retorno;
		}
		
		if( $total == null )
		{
			$i = 0;
			while( $rows = mysql_fetch_array($result) )
			{
				$dados[$i] = $rows;
				
				$dados[$i]["pessoaisNome"] 				= utf8_encode($rows["pessoaisNome"]);
				$dados[$i]["pessoaisNacionalidade"] 	= utf8_encode($rows["pessoaisNacionalidade"]);
				$dados[$i]["pessoaisNatural"] 			= utf8_encode($rows["pessoaisNatural"]);
				$dados[$i]["pessoaisEstadoCivil"] 		= utf8_encode($rows["pessoaisEstadoCivil"]);
				$dados[$i]["filiacaoPai"] 				= utf8_encode($rows["filiacaoPai"]);
				$dados[$i]["filiacaoMae"] 				= utf8_encode($rows["filiacaoMae"]);
				$dados[$i]["documentosTitulo"] 			= utf8_encode($rows["documentosTitulo"]);
				$dados[$i]["documentosTipoSanguineo"] 	= utf8_encode($rows["documentosTipoSanguineo"]);
				$dados[$i]["documentosSerie"] 			= utf8_encode($rows["documentosSerie"]);
				$dados[$i]["localizacaoEndereco"] 		= utf8_encode($rows["localizacaoEndereco"]);
				$dados[$i]["localizacaoBairro"] 		= utf8_encode($rows["localizacaoBairro"]);
				$dados[$i]["localizacaoComplemento"] 	= utf8_encode($rows["localizacaoComplemento"]);
				$dados[$i]["localizacaoCidade"] 		= utf8_encode($rows["localizacaoCidade"]);
				$dados[$i]["contatosEmail"] 			= utf8_encode($rows["contatosEmail"]);
				$dados[$i]["experiencia"] 				= utf8_encode($rows["experiencia"]);
				
				$dados[$i]["pesNascimentoAno"]			= substr($rows["pessoaisDtNascimento"], 0, 4);
				$dados[$i]["pesNascimentoMes"]			= substr($rows["pessoaisDtNascimento"], 5, 2);
				$dados[$i]["pesNascimentoDia"]			= substr($rows["pessoaisDtNascimento"], 8, 2);
				$dados[$i]["pesFilhos"]					= ( $rows["pessoaisDtNascimento"] > 0 ? 's' : 'n' );
				$dados[$i]["docExpedicaoAno"]			= substr($rows["documentosDtExpedicao"], 0, 4);
				$dados[$i]["docExpedicaoMes"]			= substr($rows["documentosDtExpedicao"], 5, 2);
				$dados[$i]["docExpedicaoDia"]			= substr($rows["documentosDtExpedicao"], 8, 2);
				$dados[$i]["docCnh"]					= ( $rows["documentosChn"] =! "" ? 's' : 'n' );
				
				$cep = explode("-",$rows["localizacaoCep"]);
				$dados[$i]["locCep1"]					= $cep[0];
				$dados[$i]["locCep2"]					= $cep[1];
				
				$dados[$i]["idade"]						= CalcularIdade(conv_data2($rows["pessoaisDtNascimento"], 1));//"15-2-1985"
				$dados[$i]["dtCadastroFormat"]			= conv_data2($rows["dtCadastro"]);
				
				$dados[$i]["anotacoes"] 				= utf8_encode($rows["anotacoes"]);
				
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
				curriculum 
			WHERE
				id = '".$usu_id."'
		".$query;
		$result = mysql_query($sql);
		if (!($result))
		{
			$retorno[0] = "1";
			$retorno[1] = "Erro ao executar a query. Classe = Curriculum - Metodo = Exclui";
			return $retorno;
		}
		
		$retorno[0] = 0;
		$retorno[1] = "Exclusão feita com sucesso!";
		return $retorno;
	}
}

?>