<?php
include "config.php";

if (empty($_POST['razao'])|| empty($_POST['email']) || empty($_POST['servicos'])) {
   header("Location: index.html"); 
}
else
{
	$empresa = utf8_decode($_POST['empresa']);
	$razao = utf8_decode($_POST['razao']);
	$email = $_POST['email'];
	$telefoneDdd = $_POST['telefoneDdd'];
	$telefone = $_POST['telefone'];
	$pergunta = $_POST['pergunta'];
	$servicos = utf8_decode($_POST['servicos']);	
	$dtCadastro	= date('Y-m-d h:i:s');
	
	$sql = "INSERT INTO orcamento (razao,servicos,empresa,email,telefoneDdd,telefone,dtCadastro) VALUES ('$razao','$servicos','$empresa','$email','$telefoneDdd','$telefone', now())";	
	mysql_query($sql) or die("<script type='text/javascript'> alert('Erro no cadastro. Tente Novamente'); </script><meta http-equiv='refresh' content='0;url=index.html'>");
	$id = mysql_insert_id();
	
	if($sql){
	
		$emailsender = "taeseguranca@taeseguranca.com.br";
		$para        = "comercial01@taeseguranca.com.br, gerenciacomercial@taeseguranca.com.br, comercial03@taeseguranca.com.br, comercial04@taeseguranca.com.br";
		$assunto     =  utf8_decode("Orçamento enviado pelo site");
		$txt_servico = utf8_decode("Serviços");
		
		if(PATH_SEPARATOR == ";"){
			$quebra_linha = "\r\n"; //Se for Windows
		 }else{
			$quebra_linha = "\n"; //Se "não for Windows"
		}
	
		$corpo="<table cellpadding='0' cellspacing='0' width='100%' bgcolor='#FFFFFF'>
		 <tr>
			<td align='center'>
			<table cellpadding='0' cellspacing='0'>
			 <tr>
				<td colspan='2'><img src='http://www.taeseguranca.com.br/email/img/0.gif' width='1' height='4'></td>
			 </tr>
			 <tr>
				<td colspan='2'>
				<table cellpadding='0' cellspacing='0'>
				 <tr>
					<td><img src='http://www.taeseguranca.com.br/email/img/01.gif'></td>
					<td><img src='http://www.taeseguranca.com.br/email/img/topo.jpg'></td>
					<td><img src='http://www.taeseguranca.com.br/email/img/03.gif' border='0' usemap='#Map' border='0'></td>
				 </tr>
				</table>
				</td>
			 </tr>
			 <tr>
				<td colspan='2'><img src='http://www.taeseguranca.com.br/email/img/0.gif' width='1' height='20'></td>
			 </tr>
			 <tr>
				<td colspan='2'>
				<!-- Conteúdo -->
				<table cellpadding='0' cellspacing='0' align='center' width='90%'>
				 <tr>
					<td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>
					<strong>Contratante</strong><br/><br/>
					<table cellpadding='4' cellspacing='0' align='center' width='555'>
					 <tr>
						<td align='right' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>Pedido:</font></td>
						<td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$id."</font></td>
					 </tr>
					 <tr>
						<td align='right' width='10%' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>Empresa:</font></td>
						<td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$empresa."</font></td>
					 </tr>
					 <tr>
						<td align='right' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>Nome:</font></td>
						<td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$razao."</font></td>
					 </tr>
					<tr>
	             	<td align='right' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>Onde nos achou?</font></td>
	                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$pergunta."</font></td>
	            	</tr>
					</table><br/><br/>
					
					<strong>Solicitante</strong><br/><br/>
					<table cellpadding='4' cellspacing='0' align='center' width='555'>
	
					 <tr>
						<td align='right' width='10%' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>Telefone Fixo:</font></td>
						<td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$telefoneDdd." - ".$telefone."</font></td>
					 </tr>
					 <tr>
						<td align='right' width='10%' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>E-mail:</font></td>
						<td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$email."</font></td>
					 </tr>
					</table><br/><br/>
					<strong>".$txt_servico." Desejados</strong><br/><br/>
					<table cellpadding='4' cellspacing='0' align='center' width='555'>
					 <tr>
						<td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".($servicos)."</font></td>
					 </tr>
					</table><br/><br/>
					</font></td>
				 </tr>
				</table>
				<!-- FIM - Conteúdo -->
				</td>
			 </tr>
			 <tr>
				<td colspan='2'><img src='http://www.taeseguranca.com.br/email/img/0.gif' width='1' height='40'></td>
			 </tr>
			 <tr>
				<td align='right' colspan='2'><font face='verdana' size='1' style='font-size: 10px' color='#999999'>Desenvolvido por: <a href='http://www.planobweb.com.br/' target='_blank' style='text-decoration: none'><font color='#999999'><strong>PlanoBWeb</strong></a></font><img src='http://www.taeseguranca.com.br/email/img/0.gif' width='15' height='1'></td>
			 </tr>
			 <tr>
				<td colspan='2'><img src='http://www.taeseguranca.com.br/email/img/rodape.gif'></td>
			 </tr>
			 <tr>
				<td align='left' valign='top'><img src='http://www.taeseguranca.com.br/email/img/0.gif' width='15' height='1'><font face='verdana' style='font-size: 10px' color='#333333'> TAE - Todos os direitos reservados.</font></td>
				<td align='right'>
				
				<table cellpadding='0' cellspacing='0'>
				 <tr>
					<td align='right'><font face='verdana' size='1' style='font-size: 10px' color='#333333'>Rua Chico de Paula, 350  -  02926-000  -  São Paulo  -  SP<br/>Telefones: (11) 3931-0884 / 2539-1221</font></td>
					<td><img src='http://www.taeseguranca.com.br/email/img/0.gif' width='15' height='1'></td>
				 </tr>
				</table>
				</td>
			 </tr>
			</table>
			</td>
		 </tr>
		</table>";
		
		$headers = "MIME-Version: 1.1" .$quebra_linha;
		$headers .= "Content-type: text/html;" .$quebra_linha;
		$headers .= "From: TAE <" . $emailsender.">".$quebra_linha;
		$headers .= "Bcc: PlanoBWeb<contato@planobweb.com.br>".$quebra_linha;
			if(!mail($para, $assunto, $corpo, $headers ,"-r".$emailsender)){ // Se for Postfix
				$headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
				mail($para, $assunto, $corpo, $headers);
			}
	}
	
	if(mail){

?>
	<body>
	<!-- Google Code for Or&ccedil;amento Conversion Page -->
	<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 1001011754;
	var google_conversion_language = "en";
	var google_conversion_format = "2";
	var google_conversion_color = "ffffff";
	var google_conversion_label = "WY1sCOu_x1cQqvSo3QM";
	var google_remarketing_only = false;
	/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
	<div style="display:inline;">
	<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1001011754/?label=WY1sCOu_x1cQqvSo3QM&amp;guid=ON&amp;script=0"/>
	</div>
	</noscript>

	</body>
<?php
		echo "<script type='text/javascript'> alert('Registro cadastrado.');</script><meta http-equiv='refresh' content='0;url=index.html'>";
	} else {
		// Caso seja falso, retornará o erro
		echo "<script type='text/javascript'> alert('Erro no envio.');</script><meta http-equiv='refresh' content='0;url=index.html'>"; 
	}	
}


?>