<?php

include_once "adm_login.php";

include_once "classes/Newsletter.class.php";
$classNewsletter = new Newsletter();

include_once "classes/Grupo.class.php";
$classGrupo = new Grupo();

include_once "classes/Mail.class.php";
$classMail = new Mail();

$idNewsletter = $_GET["id"];

$smarty->assign("titulo", utf8_encode(TITULO));
$smarty->assign("nome", $_SESSION['nome']);
$smarty->assign("perfil", $_SESSION['perfil']);

/*
echo "<pre>";
print_r($_POST);
die();
*/

if( $_POST['acao'] == "envia" )
{
	//Checa se é para ENVIAR ou CONFIRMAR
	if( $_POST["confirmado"] == "sim" )
	{
		session_start();
	
		$_POST["grupo"] = $_SESSION['grupo'];
	}
	else
	{
		session_start();
	
		$_SESSION['grupo'] = $_POST["grupo"];
	}

	$post = $_POST;
	$emails = array();
	
	if( $post["idNewsletter"] != "" && $post["idNewsletter"] > 0 )
	{
		$parametroNews["id"] = $post["idNewsletter"];
		$resultadoNews = $classNewsletter->Pesquisar($parametroNews);
		
		if( $resultadoNews[0] )
		{
			$smarty->assign("mensagem", $resultadoNews[1]);
			$smarty->assign("redir", "adm_newsletter.php?acao=pesquisar");
			$smarty->display("mensagem.html");
			exit();
		}
		
		//Checa se existe informação no corpo do email
		if( $resultadoNews[1][0][2] != "" )
		{
			/*
			 * Resgata e modifica o template do e-mail
			 */
			//Seta o caminho e o nome do arquivo
			$arquivo  = "email/newsletter.html";
			
			//Abre o arquivo html do email
			$abreHtml = fopen($arquivo,"r+");
			
			//Seta a variavel com o conteúdo do arquivo
			$corpoEmail = fread($abreHtml, filesize($arquivo));
			
			//Fecha o arquivo html do email
			fclose($abreHtml);
			
			//Trata as variáveis do arquivo html
			$_corpo = str_replace("/upload/image/", "http://www.taeseguranca.com.br/upload/image/", $resultadoNews[1][0][2]);
			
			$corpoEmail = str_replace('{$mensagem}', utf8_encode($_corpo), $corpoEmail);
			/*
			 * FIM - Resgata e modifica o template do e-mail
			 */



			 //Envia e-mails extras
			if( $post["emails"] != "" )
			{
				$email = explode(",",$post["emails"]);
				$j = 0;
				foreach( $email as $valor )
				{
					//Checa se o email ja nao esta na lista
					if( !in_array(trim($valor), $emails) )
					{
						//$emails[] = trim($valor);
						$emails[$j]['email'] = trim($valor);
						$emails[$j]['nome'] = "";
						//echo "--> ".$valor."<br>";
						
						$j++;
					}
					
				}
			}
			
			//Resgata e-mails do grupo
			if( count($post["grupo"]) > 0 )
			{
				foreach( $post["grupo"] as $idGrupo )
				{
					//echo "idGrupo -> ".$idGrupo."<br>";
					$parametros["idGrupo"] = $idGrupo;
					$result = $classMail->Pesquisar($parametros);
					
					//Checa se o grupo tem email
					if( count($result['1']) > 0 )
					{
						$j=0;
						foreach( $result['1'] AS $valor  )
						{
							//Checa se o email ja nao esta na lista
							if( !in_array(trim($valor["email"]), $emails) )
							{
								//echo "E -----> ".$valor["email"]."<br>";
								//echo "N -----> ".$valor["nome"]."<br>";
								
								$emails[$j]['email'] = trim($valor["email"]);
								$emails[$j]['nome'] = trim($valor["nome"]);
								
								$j ++;
							}
						}
					}
				}
			}
			$emailSucesso = 0;
			
			//Checa se é para ENVIAR ou CONFIRMAR
			if( $_POST["confirmado"] == "sim" )
			{
				//Envia os email
				//foreach( $emails As $_email )
				for( $i=0; $i<count($emails); $i++ )
				{
					$corpoEmailOriginal = $corpoEmail;
					
					/*
					echo "<->".$_email."<br>";
					$emailSucesso ++;
										
					echo "E --> ".$emails[$i]['email']."<br>";
					echo "N --> ".$emails[$i]['nome']."<br><br>";
					*/
					
					$headers = "MIME-Version: 1.0\r\n";
					$headers .= "Content-type: text/html\r\n";
					$headers .= "From: comercial@taeseguranca.com.br\r\n";
					
					//Localiza e substitui o nome
					$corpoEmailOriginal = str_replace('{$nome}', $emails[$i]['nome'], $corpoEmailOriginal);
					
					if( mail($emails[$i]['email'], utf8_decode($post["titulo"]), utf8_decode($corpoEmailOriginal), $headers) )
					{
						$emailSucesso ++;
					}
					
					$corpoEmailOriginal = "";

				}
				$_SESSION['grupo'] = "";
			}
			else
			{
				$smarty->assign("titulo", $post["titulo"]);
				$smarty->assign("emails", $post["emails"]);
				$smarty->assign("idNewsletter", $post["idNewsletter"]);
				$smarty->assign("qtd", count($emails));
				$smarty->display('admin/newsletter/enviaConfirma.html');
				exit;
			}
		}
	}
	
	$smarty->assign("mensagem", "Newsletter enviada para ".$emailSucesso." e-mails!");
	$smarty->assign("redir", "adm_newsletter.php?acao=pesquisar");
	$smarty->display("mensagem.html");
	exit();
}

$retornoGrupo = $classGrupo->PesquisarCompleta(null);

$smarty->assign("idNewsletter", $idNewsletter);
$smarty->assign("dadosGrupo", $retornoGrupo[1]);
$smarty->display('admin/newsletter/envia.html');

?>