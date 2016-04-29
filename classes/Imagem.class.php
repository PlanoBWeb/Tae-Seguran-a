<?php

include_once "configs/config.php";
include_once "configs/funcoes.php";

class Imagem
{
	function Imagem()
    {
		$this->pathProjeto = PATH_SERVIDOR;
    }
	
	function excluiImagem($pathImagem)
	{
		if(unlink($pathImagem))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	function gravaImagem($file, $extencoesValidas, $pathDestino, $copy = NULL)
	{
		//Troca as barras do caminho
		$pathDestinoBD = $pathDestino;
		//$pathDestino = str_replace("/","\\",$pathDestino);
		
		//Checa se existe a foto
		if (!isset($file['name']))
		{
			$retorno[0] = "1";
			$retorno[1] = "Selecione o arquivo!";
			return $retorno;
		}
		else
		{
			//Checa se a extenção é válida
			if(!$this->validaExtencao($file['name'], $extencoesValidas))
			{
				$retorno[0] = "1";
				$retorno[1] = "Extenção inválida. São aceitas apenas extenções ".$extencoesValidas."!";
				return $retorno;
			}
			else
			{
				$nomeArquivo 	= $file['name'];
				$nomeArquivoTmp = $file['tmp_name'];
				$extencao 		= substr($nomeArquivo, strrpos($nomeArquivo, ".") + 1);
				
				$nomeNovo = str_replace("/", "", date("Ymd_His") ) . "_" . rand(5, 15) . "." . $extencao;
				$caminhoFinal = $pathDestino . $nomeNovo;
				$caminhoFinalCompleto = $this->pathProjeto . $pathDestino . $nomeNovo;
				
				//Grava o aquivo no destino
				if(!file_exists($nomeArquivoTmp))
					die("Não existe o arquivo -> ".$nomeArquivoTmp);
					
				//Checa se ira COPIAR ou MOVER
				if( $copy )
				{
					if(!copy($nomeArquivoTmp, $caminhoFinalCompleto))
					{
						$retorno[0] = "1";
						$retorno[1] = "Não foi possível gravar a foto!";
					}
					else
					{
						$retorno[0] = "0";
						$retorno[1] = $pathDestinoBD.$nomeNovo;
					}
				}
				else
				{
					if( !move_uploaded_file ($nomeArquivoTmp, $caminhoFinalCompleto))
					{
						$retorno[0] = "1";
						$retorno[1] = "Não foi possível gravar a foto!";
					}
					else
					{
						$retorno[0] = "0";
						$retorno[1] = $pathDestinoBD.$nomeNovo;
					}
				}
				
				return $retorno;
			}
		}
	}
	
	function gera_thumb($image,$largura,$altura,$destino)
	{
		$image = $this->pathProjeto.$image;
		$destino = $this->pathProjeto.$destino;
		
		//Descobre a proporção da imagem
	   $arDadosImg = $this->geraProporcao( $image, $largura, $altura );
	   
	   $max_width =  $arDadosImg['largura'];
	   $max_height = $arDadosImg['altura'];

	   $size = getimagesize($image);
	   $width = $size[0];
	   $height = $size[1];
	
	   $src = imagecreatefromjpeg($image);
	   $dst = @imagecreatetruecolor($max_width,$max_height) or die("Cannot Initialize new GD image stream");
	   $test = imagecopyresampled($dst,$src,0,0,0,0,$max_width,$max_height,$width,$height);
	   
	   if ( imagejpeg($dst,$destino,85) ) {
		  $retorno = true;
	   }else{
		  $retorno = false;
	   }
	   
	   imagedestroy($src);
	   imagedestroy($dst);
	   
	   return $retorno;
	}
	
	function geraProporcao( $original, $largura, $altura )
   {
       // Pega o tamanho da imagem
       $imginfo = @getimagesize($original);
       if ($imginfo == NULL) {
           return false;
       }

       // I = imagem
       // L = largura
       // A = Altura
       
       // largura/altura
       $originalL = $imginfo[0];
       $originalA = $imginfo[1];

       if( $originalL < $largura && $originalA < $altura )
	   {
           $miniaturaL = $originalL;
		   $miniaturaA = $originalA;
       }
	   elseif($originalL == $originalA)
	   {
           $miniaturaL = $miniaturaA = $altura;
       }
	   elseif($originalL > $originalA)
	   {
           $miniaturaL = $largura;
           $proporcao  = $originalA*$largura;
           $miniaturaA = $proporcao/$originalL;
           if($miniaturaA > $altura) {
               $miniaturaA = $altura;
               $proporcao  = $originalL*$altura;
               $miniaturaL = $proporcao/$originalA;
           }
       }
	   elseif($originalL < $originalA)
	   {
           $miniaturaA = $altura;
           $proporcao  = $originalL*$altura;
           $miniaturaL = $proporcao/$originalA;
       }
	   
	   $retorno = array(
	   		'largura'	=> $this->arredondaValor($miniaturaL),
			'altura'	=> $this->arredondaValor($miniaturaA)
	   );

	   return $retorno;
	}
	
	function arredondaValor( $valor )
	{
		//Localiza a posição do ponto
		$posPonto = strpos( $valor, "." );
		
		//Verifica se existe o "." no valor, caso não exista é o próprio valor
		if( !$posPonto )
			return $valor;

		//Resgata o valor sem o ponto e tudo depois dele
		$valor = substr( $valor, 0, $posPonto );

		//Acrescenta 1 ao valor total
		$valor ++;

		return $valor;
	}
	
	/*
	 * Descrição = Método que valida as extenções que será permitida.
	 *
	 * Parametro(s) = 	
	 *		String 			$nomeArquivo 		Nome do arquivo com a axtenção. Ex: minhaFoto.jpg
	 *		String			$permitedExtension	Extenções permitidas, separadas por |. Ex: jpg|jpeg|gif|tif
	 * 
	 * Retorno
	 *		Bool			True ou False
	 */
	function validaExtencao($nomeArquivo, $extencoesValidas)
	{
		//Transforma em array as extenções válidas
		$permitedExtension = explode('|',$extencoesValidas);
		
		$v = 0;
		$extension = substr($nomeArquivo, strrpos($nomeArquivo, ".") + 1);
		
		foreach($permitedExtension as $validExtension)
		{
			if (strtolower($extension) == $validExtension) $v++;
		}
		
		if ($v) return true;
		else return false; 
	}
}

?>