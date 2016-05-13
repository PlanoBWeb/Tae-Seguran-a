<?php


$nome = utf8_decode($_POST['pesNome']);


$sexo = $_POST['pesSexo'];
$nascimento = $_POST['pesNascimentoAno']."-".$_POST['pesNascimentoMes']."-".$_POST['pesNascimentoDia'];
$nacionalidade = $_POST['pesNacionalidade'];
$natural = $_POST['pesNatural'];
$estadocivil = $_POST['pesEstadoCivil'];
$filhos = $_POST['pesFilho'];
$quantidade = $_POST['pesQuantos'];
$pai = $_POST['filPai'];
$mae = $_POST['filMae'];
$peso = $_POST['fisPeso'];
$altura = $_POST['fisAltura'];
$sapatos = $_POST['fisSapatos'];
$camisa = $_POST['fisCamisa'];
$calca = $_POST['fisCalca'];
$escEnsino = $_POST['escEnsino'];
$rg = $_POST['docRg'];
$expData = $_POST['docExpAno']."-".$_POST['docExpMes']."-".$_POST['docExpDia'];
$cpf = $_POST['docCpf'];
$eleitoral = $_POST['docTitulo'];
$pis = $_POST['docPis'];
$serie = $_POST['docSerie'];
$ctps = $_POST['docCtps'];
$cnh = $_POST['docCategoria'];
$sanguineo = $_POST['docTipoSanguineo'];
$endereco = utf8_decode($_POST['locEndereco']);
$numero = $_POST['locNumero'];
$complemento = $_POST['locComplemento'];
$bairro = $_POST['locBairro'];
$cep = $_POST['locCep1']."-".$_POST['locCep2'];
$estado = $_POST['locEstado'];
$cidade = $_POST['locCidade'];
$foneDdd = $_POST['conFoneDdd'];
$fone = $_POST['conFone'];
$celddd = $_POST['conCelDdd'];
$cel = $_POST['conCel'];
$email = $_POST['conEmail'];
$curso = $_POST['curso'];
$experiencia = utf8_decode($_POST['experiencia']);
$dtCadastro	= date('Y-m-d h:i:s');

// $sqlDuplicidade = "SELECT * FROM curriculum WHERE documentosCpf = '$cpf'";
// $resultDuplicidade = mysql_query($sqlDuplicidade);
// $qtdDuplicidade = mysql_num_rows($resultDuplicidade);

if( $qtdDuplicidade > 0 ){
    echo "<script type='text/javascript'> alert('Currículo já cadastrado.'); </script><meta http-equiv='refresh' content='0;url=trabalhe-conosco.html'>";
}else{

$sql = "INSERT INTO curriculum (pessoaisNome,pessoaisSexo,pessoaisDtNascimento,pessoaisNacionalidade,pessoaisNatural,pessoaisEstadoCivil,pessoaisFilhos,filiacaoPai,filiacaoMae,fisicosPeso,fisicosAltura,fisicosSapatos,fisicosCamisa,fisicosCalca,escolaridadeEnsino,documentosRg,documentosDtExpedicao,documentosCpf,documentosTitulo,documentosPis,documentosTipoSanguineo,documentosCtps,documentosSerie,documentosChn,localizacaoEndereco,localizacaoNumero,localizacaoBairro,localizacaoComplemento,localizacaoCep,localizacaoEstado,localizacaoCidade,contatosTelefoneDdd,contatosTelefone,contatosCelularDdd,experiencia,dtCadastro,contatosCelular,contatosEmail,curso) VALUES ('$nome','$sexo','$nascimento','$nacionalidade','$natural','$estadocivil','$quantidade','$pai','$mae','$peso','$altura','$sapatos','$camisa','$calca','$escEnsino','$rg','$expData','$cpf','$eleitoral','$pis','$sanguineo','$ctps','$serie','$cnh','$endereco','$numero','$bairro','$complemento','$cep','$estado','$cidade','$foneDdd','$fone','$celddd','$experiencia','$dtCadastro','$cel','$email','$curso')";
mysql_query($sql) or die("<script type='text/javascript'> alert('Erro no cadastro. Tente Novamente'); </script><meta http-equiv='refresh' content='0;url=trabalhe-conosco.html'>");
$id = mysql_insert_id();

foreach ($_POST['cargo'] as $cargo){
    $sqlcargo = "INSERT INTO exerce (idCurriculum,idCargo) VALUES ('$id','$cargo')";
    mysql_query($sqlcargo) or die("<script type='text/javascript'> alert('Erro no cadastro. Tente Novamente'); </script><meta http-equiv='refresh' content='0;url=trabalhe-conosco.html'>");
}

if( $sexo == "m" ){
    $sexo = "Masculino";
}else{
    $sexo = "Feminino";
}


if( $curso == "s" ){
    $curso = "Sim";
}else{
    $curso = "Não";
}




$emailsender = "joseygor@planobweb.com.br";
$para        = "joseygor@planobweb.com.br";
$assunto     = "Curriculo Enviado";

if(PATH_SEPARATOR == ";"){
 	$quebra_linha = "\r\n"; //Se for Windows
 }else{
 	$quebra_linha = "\n"; //Se "não for Windows"
}

$corpo="<table cellpadding='0' cellspacing='0' width='100%' bgcolor='#FFFFFF'>
 <tr>
    <td align='center'>
    
  
  
             <tr>
                <td align='right' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>Nome completo:</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'> ".$nome."</font></td>
             </tr>
            
    
    </td>
 </tr>
</table>";

// echo "<pre>";
// print_r($corpo);
// die("AQ");

// $headers = "MIME-Version: 1.1" .$quebra_linha;
// $headers .= "Content-type: text/html; charset=UTF-8" .$quebra_linha;
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: TAE - Segurança Armada e Desarmada<" . $emailsender.">".$quebra_linha;
	if(!mail($para, $assunto, $corpo, $headers ,"-r".$emailsender)){ // Se for Postfix
		$headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
		mail($para, $assunto, $corpo, $headers);
	}
}

    if($sql)
    {
    ?>
        <!-- Google Code for Trabalhe Conosco Conversion Page --> <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 1001011754;
        var google_conversion_language = "en";
        var google_conversion_format = "3";
        var google_conversion_color = "ffffff";
        var google_conversion_label = "QH-9CJeBjV8QqvSo3QM"; var google_remarketing_only = false;
        /* ]]> */
        </script>
        <script type="text/javascript"  
        src="//www.googleadservices.com/pagead/conversion.js">
        </script>
        <noscript>
        <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt=""  
        src="//www.googleadservices.com/pagead/conversion/1001011754/?label=QH-9CJeBjV8QqvSo3QM&amp;guid=ON&amp;script=0"/>
        </div>
        </noscript>
    <?php
    	echo "<script type='text/javascript'> alert('Contato Enviado.');</script><meta http-equiv='refresh' content='0;url=obrigado-trabalhe-conosco'>";
    } else {
    	// Caso seja falso, retornará o erro
    	echo "<script type='text/javascript'> alert('Erro no envio.');</script><meta http-equiv='refresh' content='0;url=trabalhe-conosco.html'>"; 
    }

?>