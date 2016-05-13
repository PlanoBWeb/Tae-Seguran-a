<?php

function caracterCerto($string){
    $trans = get_html_translation_table(HTML_ENTITIES);
    $str = $string;
    $valor = strtr($str, $trans);
    return $valor;
}


$nome = utf8_decode($_POST['pesNome']);
$sexo = utf8_decode($_POST['pesSexo']);
$nascimento = utf8_decode($_POST['pesNascimentoAno']."-".$_POST['pesNascimentoMes']."-".$_POST['pesNascimentoDia']);
$nacionalidade = utf8_decode($_POST['pesNacionalidade']);
$natural = utf8_decode($_POST['pesNatural']);
$estadocivil = utf8_decode($_POST['pesEstadoCivil']);
$filhos = utf8_decode($_POST['pesFilho']);
$quantidade = utf8_decode($_POST['pesQuantos']);
$pai =utf8_decode($_POST['filPai']);
$mae = utf8_decode($_POST['filMae']);
$peso = utf8_decode($_POST['fisPeso']);
$altura = utf8_decode($_POST['fisAltura']);
$sapatos = utf8_decode($_POST['fisSapatos']);
$camisa = utf8_decode($_POST['fisCamisa']);
$calca = utf8_decode($_POST['fisCalca']);
$escEnsino = utf8_decode($_POST['escEnsino']);
$rg = utf8_decode($_POST['docRg']);
$expData = utf8_decode($_POST['docExpAno']."-".$_POST['docExpMes']."-".$_POST['docExpDia']);
$cpf = utf8_decode($_POST['docCpf']);
$eleitoral = utf8_decode($_POST['docTitulo']);
$pis = utf8_decode($_POST['docPis']);
$serie = utf8_decode($_POST['docSerie']);
$ctps = utf8_decode($_POST['docCtps']);
$cnh = utf8_decode($_POST['docCategoria']);
$sanguineo = utf8_decode($_POST['docTipoSanguineo']);
$endereco = utf8_decode($_POST['locEndereco']);
$numero = utf8_decode($_POST['locNumero']);
$complemento = utf8_decode($_POST['locComplemento']);
$bairro = utf8_decode($_POST['locBairro']);
$cep = utf8_decode($_POST['locCep1']."-".$_POST['locCep2']);
$estado = utf8_decode($_POST['locEstado']);
$cidade = utf8_decode($_POST['locCidade']);
$foneDdd = utf8_decode($_POST['conFoneDdd']);
$fone = utf8_decode($_POST['conFone']);
$celddd = utf8_decode($_POST['conCelDdd']);
$cel = utf8_decode($_POST['conCel']);
$email = utf8_decode($_POST['conEmail']);
$curso = utf8_decode($_POST['curso']);
$experiencia = utf8_decode($_POST['experiencia']);
$dtCadastro = date('Y-m-d h:i:s');

$sqlDuplicidade = "SELECT * FROM curriculum WHERE documentosCpf = '$cpf'";
$resultDuplicidade = mysql_query($sqlDuplicidade);
$qtdDuplicidade = mysql_num_rows($resultDuplicidade);

if( $qtdDuplicidade > 0 ){
    echo "<script type='text/javascript'> alert('Curriculo já cadastrado.'); </script><meta http-equiv='refresh' content='0;url=trabalhe-conosco.html'>";
}else{

$sql = "INSERT INTO curriculum (pessoaisNome,pessoaisSexo,pessoaisDtNascimento,pessoaisNacionalidade,pessoaisNatural,pessoaisEstadoCivil,pessoaisFilhos,filiacaoPai,filiacaoMae,fisicosPeso,fisicosAltura,fisicosSapatos,fisicosCamisa,fisicosCalca,escolaridadeEnsino,documentosRg,documentosDtExpedicao,documentosCpf,documentosTitulo,documentosPis,documentosTipoSanguineo,documentosCtps,documentosSerie,documentosChn,localizacaoEndereco,localizacaoNumero,localizacaoBairro,localizacaoComplemento,localizacaoCep,localizacaoEstado,localizacaoCidade,contatosTelefoneDdd,contatosTelefone,contatosCelularDdd,experiencia,dtCadastro,contatosCelular,contatosEmail,curso) VALUES ('$nome','$sexo','$nascimento','$nacionalidade','$natural','$estadocivil','$quantidade','$pai','$mae','$peso','$altura','$sapatos','$camisa','$calca','$escEnsino','$rg','$expData','$cpf','$eleitoral','$pis','$sanguineo','$ctps','$serie','$cnh','$endereco','$numero','$bairro','$complemento','$cep','$estado','$cidade','$foneDdd','$fone','$celddd','$experiencia','$dtCadastro','$cel','$email','$curso')";
mysql_query($sql) or die("<script type='text/javascript'> alert('Erro no cadastro. Tente Novamente'); </script><meta http-equiv='refresh' content='0;url=trabalhe-conosco.html'>");
$id = mysql_insert_id();

foreach ($_POST['cargo'] as $cargo){
    $sqlcargo = "INSERT INTO exerce (idCurriculum,idCargo) VALUES ('$id','$cargo')";
    mysql_query($sqlcargo) or die("<script type='text/javascript'> alert('Erro no cadastro. Tente Novamente'); </script><meta http-equiv='refresh' content='0;url=trabalhe-conosco.html'>");
}


$nome = caracterCerto(utf8_decode($_POST['pesNome']));
$sexo = caracterCerto($_POST['pesSexo']);
$nascimento = $_POST['pesNascimentoAno']."-".$_POST['pesNascimentoMes']."-".$_POST['pesNascimentoDia'];
$nacionalidade = caracterCerto(utf8_decode($_POST['pesNacionalidade']));
$natural = caracterCerto(utf8_decode($_POST['pesNatural']));
$estadocivil = caracterCerto($_POST['pesEstadoCivil']);
$filhos = $_POST['pesFilho'];
$quantidade = $_POST['pesQuantos'];
$pai = caracterCerto(utf8_decode($_POST['filPai']));
$mae = caracterCerto(utf8_decode($_POST['filMae']));
$peso = $_POST['fisPeso'];
$altura = $_POST['fisAltura'];
$sapatos = caracterCerto($_POST['fisSapatos']);
$camisa = $_POST['fisCamisa'];
$calca = $_POST['fisCalca'];
$escEnsino = caracterCerto(utf8_decode($_POST['escEnsino']));
$rg = $_POST['docRg'];
$expData = $_POST['docExpAno']."-".$_POST['docExpMes']."-".$_POST['docExpDia'];
$cpf = $_POST['docCpf'];
$eleitoral = caracterCerto(utf8_decode($_POST['docTitulo']));
$pis = $_POST['docPis'];
$serie = $_POST['docSerie'];
$ctps = $_POST['docCtps'];
$cnh = $_POST['docCategoria'];
$sanguineo = caracterCerto($_POST['docTipoSanguineo']);
$endereco = caracterCerto(utf8_decode($_POST['locEndereco']));
$numero = $_POST['locNumero'];
$complemento = caracterCerto(utf8_decode($_POST['locComplemento']));
$bairro = caracterCerto(utf8_decode($_POST['locBairro']));
$cep = $_POST['locCep1']."-".$_POST['locCep2'];
$estado = caracterCerto(utf8_decode($_POST['locEstado']));
$cidade = caracterCerto(utf8_decode($_POST['locCidade']));
$foneDdd = $_POST['conFoneDdd'];
$fone = $_POST['conFone'];
$celddd = $_POST['conCelDdd'];
$cel = $_POST['conCel'];
$email = $_POST['conEmail'];
$curso = caracterCerto(utf8_decode($_POST['curso']));
$experiencia = caracterCerto(utf8_decode($_POST['experiencia']));
$dtCadastro = date('Y-m-d h:i:s');

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

$curso = caracterCerto($curso);



$emailsender = "contato@taeseguranca.com.br";
$para        = "contato@taeseguranca.com.br";
$assunto     = "Curriculo Enviado";

if(PATH_SEPARATOR == ";"){
 	$quebra_linha = "\r\n"; //Se for Windows
 }else{
 	$quebra_linha = "\n"; //Se "nÃ£o for Windows"
}

$corpo="<table cellpadding='0' cellspacing='0' width='100%' bgcolor='#FFFFFF'>
 <tr>
    <td align='center'>
    
    <table cellpadding='0' cellspacing='0'>
     <tr>
        <td colspan='2'><img src='http://www.taesecurity.com.br/email/img/0.gif' width='1' height='4'></td>
     </tr>
     <tr>
        <td colspan='2'>
        
        <table cellpadding='0' cellspacing='0'>
         <tr>
            <td><img src='http://www.taesecurity.com.br/email/img/01.gif'></td>
            <td><img src='http://www.taesecurity.com.br/email/img/topo.jpg'></td>
            <td><img src='http://www.taesecurity.com.br/email/img/03.gif' border='0' usemap='#Map' border='0'></td>
         </tr>
        </table>
        
        </td>
     </tr>
     <tr>
        <td colspan='2'><img src='http://www.taesecurity.com.br/email/img/0.gif' width='1' height='20'></td>
     </tr>
     <tr>
        <td colspan='2'>
        
        <table cellpadding='0' cellspacing='0' align='center' width='90%'>
         <tr>
            <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>
            <strong>Dados Pessoais</strong><br/><br/>
            
            <table cellpadding='4' cellspacing='0' align='center' width='555'>
             <tr>
                <td align='right' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>Nome completo:</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$nome."</font></td>
             </tr>
             <tr>
                <td align='right' width='10%' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>Sexo:</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$sexo."</font></td>
             </tr>
             <tr>
                <td align='right' width='10%' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>Data de Nasc.:</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$_POST['pesNascimentoDia']."/".$_POST['pesNascimentoMes']."/".$_POST['pesNascimentoAno']." </font></td>
             </tr>
             <tr>
                <td align='right' width='10%' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>Nacionalidade:</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$nacionalidade."</font></td>
             </tr>
             <tr>
                <td align='right' width='10%' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>Natural de:</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$natural."</font></td>
             </tr>
             <tr>
                <td align='right' width='10%' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>Estado Civil:</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$estadocivil."</font></td>
             </tr>
             <tr>
                <td align='right' width='10%' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>Filhos? Quantos:</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$quantidade."</font></td>
             </tr>
            </table><br/><br/>
            
            
            
            <strong>".caracterCerto("Filiação")."</strong><br/><br/>
            
            <table cellpadding='4' cellspacing='0' align='center' width='555'>
             <tr>
                <td align='right' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>Nome do pai:</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$pai."</font></td>
             </tr>
             <tr>
                <td align='right' width='10%' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".caracterCerto("Nome da mãe").":</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$mae."</font></td>
             </tr>
            </table><br/><br/>
            
            
            
            <strong>Dados ".caracterCerto("Físicos")."</strong><br/><br/>
            
            <table cellpadding='4' cellspacing='0' align='center' width='555'>
             <tr>
                <td align='right' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>Peso:</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$peso."</font></td>
             </tr>
             <tr>
                <td align='right' width='10%' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>Altura:</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$altura."</font></td>
             </tr>
             <tr>
                <td align='right' width='10%' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>Sapatos:</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$sapatos."</font></td>
             </tr>
             <tr>
                <td align='right' width='10%' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>Camisa:</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$camisa."</font></td>
             </tr>
             <tr>
                <td align='right' width='10%' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".caracterCerto("Calça").":</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$calca."</font></td>
             </tr>
            </table><br/><br/>
            
            
            
            
            <strong>Escolaridade</strong><br/><br/>
            
            <table cellpadding='4' cellspacing='0' align='center' width='555'>
             <tr>
                <td align='right' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>Ensino:</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$escEnsino."</font></td>
             </tr>
            </table><br/><br/>
            
            
            
            
            <strong>Documentos</strong><br/><br/>
            
            <table cellpadding='4' cellspacing='0' align='center' width='555'>
             <tr>
                <td align='right' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>RG:</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$rg."</font></td>
             </tr>
             <tr>
                <td align='right' width='10%' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>Dt. ".caracterCerto("Expedição").":</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$_POST['docExpDia']."/".$_POST['docExpMes']."/".$_POST['docExpAno']."</font></td>
             </tr>
             <tr>
                <td align='right' width='10%' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>CPF:</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$cpf."</font></td>
             </tr>
             <tr>
                <td align='right' width='10%' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".caracterCerto("Título")." Eleitor:</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$eleitoral."</font></td>
             </tr>
             <tr>
                <td align='right' width='10%' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>PIS:</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$pis."</font></td>
             </tr>
             <tr>
                <td align='right' width='10%' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>Tipo Sanguineo:</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$sanguineo."</font></td>
             </tr>
             <tr>
                <td align='right' width='10%' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>CTPS:</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$ctps."</font></td>
             </tr>
             <tr>
                <td align='right' width='10%' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".caracterCerto("Série").":</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$serie."</font></td>
             </tr>
             <tr>
                <td align='right' width='10%' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>Categoria:</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$cnh."</font></td>
             </tr>
            </table><br/><br/>
            
            
            
            
            <strong>".caracterCerto("Localização")."</strong><br/><br/>
            
            <table cellpadding='4' cellspacing='0' align='center' width='555'>
             <tr>
                <td align='right' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".caracterCerto("Endereço").":</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$endereco."</font></td>
             </tr>
             <tr>
                <td align='right' width='10%' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".caracterCerto("Número").":</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$numero."</font></td>
             </tr>
             <tr>
                <td align='right' width='10%' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>Bairro:</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$bairro."</font></td>
             </tr>
             <tr>
                <td align='right' width='10%' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>Complemento:</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$complemento."</font></td>
             </tr>
             <tr>
                <td align='right' width='10%' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>CEP:</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$cep."</font></td>
             </tr>
             <tr>
                <td align='right' width='10%' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>Estado:</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$estado."</font></td>
             </tr>
             <tr>
                <td align='right' width='10%' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>Cidade:</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$cidade."</font></td>
             </tr>
            </table><br/><br/>
            
            
            
            <strong>Contatos</strong><br/><br/>
            
            <table cellpadding='4' cellspacing='0' align='center' width='555'>
             <tr>
                <td align='right' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>Telefone Fixo:</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$foneDdd." ".$fone."</font></td>
             </tr>
             <tr>
                <td align='right' width='10%' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>Celular:</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$celddd." ".$cel."</font></td>
             </tr>
             <tr>
                <td align='right' width='10%' nowrap='nowrap'><font face='verdana' size='2' style='font-size: 12px' color='#333333'>E-mail:</font></td>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$email."</font></td>
             </tr>
            </table><br/><br/>
            
            <strong>Curso</strong><br/><br/>
            
            <table cellpadding='4' cellspacing='0' align='center' width='555'>
             <tr>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>
                <strong>".$curso."</strong>. ".caracterCerto("Possuo algum curso na área de segurança armada ou desarmada.")."
                </font></td>
             </tr>
            </table><br/><br/>
            
            
            <strong>".caracterCerto("Experiência")." Profissional</strong><br/><br/>
            
            <table cellpadding='4' cellspacing='0' align='center' width='555'>
             <tr>
                <td><font face='verdana' size='2' style='font-size: 12px' color='#333333'>".$experiencia."</font></td>
             </tr>
            </table><br/><br/>
            
            </font></td>
         </tr>
        </table>
        
        </td>
     </tr>
     <tr>
        <td colspan='2'><img src='http://www.taesecurity.com.br/email/img/0.gif' width='1' height='40'></td>
     </tr>
     <tr>
        <td align='right' colspan='2'><font face='verdana' size='1' style='font-size: 10px' color='#999999'>Desenvolvido por: <a href='http://www.planobweb.com.br/' target='_blank' style='text-decoration: none'><font color='#999999'><strong>PlanoBWeb</strong></a></font><img src='http://www.taesecurity.com.br/email/img/0.gif' width='15' height='1'></td>
     </tr>
     <tr>
        <td colspan='2'><img src='http://www.taesecurity.com.br/email/img/rodape.gif'></td>
     </tr>
     <tr>
        <td align='left' valign='top'><img src='http://www.taesecurity.com.br/email/img/0.gif' width='15' height='1'><font face='verdana' style='font-size: 10px' color='#333333'> TAE - Todos os direitos reservados.</font></td>
        <td align='right'>
        
        <table cellpadding='0' cellspacing='0'>
         <tr>
            <td align='right'><font face='verdana' size='1' style='font-size: 10px' color='#333333'>Rua Chico de Paula, 350  -  02926-000  -  ".caracterCerto("São")." Paulo  -  SP<br/>Telefones: (11)  3931-0884 / 2539-1221</font></td>
            <td><img src='http://www.taesecurity.com.br/email/img/0.gif' width='15' height='1'></td>
         </tr>
        </table>
        
        </td>
     </tr>
    </table>
    
    </td>
 </tr>
</table>";

$from2 = utf8_encode("TAE - Segurança Armada e Desarmada");
$corpo = utf8_decode($corpo);

$headers  = 'MIME-Version: 1.1' . "\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\n";
$headers .= "From: ".$from2."<" . $emailsender.">".$quebra_linha;
	if(!mail($para, $assunto, $corpo, $headers ,"-r".$emailsender)){ // Se for Postfix
		$headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "nÃ£o for Postfix"
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
    	// Caso seja falso, retornarÃ¡ o erro
    	echo "<script type='text/javascript'> alert('Erro no envio.');</script><meta http-equiv='refresh' content='0;url=trabalhe-conosco'>"; 
    }

?>