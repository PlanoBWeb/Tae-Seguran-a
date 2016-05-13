<?php
    function caracterCerto($string){
        $trans = get_html_translation_table(HTML_ENTITIES);
        $str = $string;
        $valor = strtr($str, $trans);
        return $valor;
    }

    if ($_POST['acao'] == "assine-news") {
        if (empty($_POST['nome_news'])|| empty($_POST['email_news'])) {
            header("Location: home"); 
        } else {  

            $emailsender = "contato@taeseguranca.com.br";
            $emaildestinatario = "contato@taeseguranca.com.br";
            $pagina = "Tae Segurança - Contato do site | Newsletter";

            $nome = $_POST['nome_news'];
            $email = $_POST['email_news'];

            if(PATH_SEPARATOR == ";") $quebra_linha = "\r\n"; //Se for Windows
            else $quebra_linha = "\n"; //Se "nÃ£o for Windows"

            $mensagemHTML = 
            'Nome: ' . $nome . $quebra_linha 
           .'E-mail: ' . $email . $quebra_linha; 

            $emailEnvia  = "contato@taeseguranca.com.br";
            $comcopia = "contato@planobweb.com.br";

            $headers = "MIME-Version: 1.1" .$quebra_linha;
            $headers .= "Content-type: text/plain; charset=UTF-8" .$quebra_linha;
            $headers .= "From: " . $email.$quebra_linha;
            $headers .= "Bcc: " . $comcopia . $quebra_linha;
            $headers .= "Reply-To: " . $emailEnvia . $quebra_linha;

            if(!mail($emaildestinatario,$pagina, $mensagemHTML, $headers ,"-r".$emailsender)){ // Se for Postfix
                $headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
                mail($emaildestinatario,$pagina, $mensagemHTML, $headers );
            }

            echo utf8_decode("<script>location.href ='obrigado-newsletter'</script>");
            // echo utf8_decode("<script>location.href ='home'</script>");
        }
    }elseif ($_POST['pagina'] == "Orçamentos") {


        $empresa = utf8_decode($_POST['empresa']);
        $razao = utf8_decode($_POST['nome']);
        $email = $_POST['email'];
        //$telefoneDdd = $_POST['telefoneDdd'];
        $telefone = $_POST['telefone'];
        $pergunta = $_POST['onde'];
        $servicos = utf8_decode($_POST['msg']);    
        $dtCadastro = date('Y-m-d h:i:s');
        
        $sql = "INSERT INTO orcamento (razao,servicos,empresa,email,telefoneDdd,telefone,dtCadastro) VALUES ('$razao','$servicos','$empresa','$email','$telefoneDdd','$telefone', now())";  
        mysql_query($sql) or die("<script type='text/javascript'> alert('Erro no cadastro. Tente Novamente'); </script><meta http-equiv='refresh' content='0;url=index.html'>");
        $id = mysql_insert_id();
        
        if($sql){

            $empresa = caracterCerto(utf8_decode($_POST['empresa']));
            $razao = caracterCerto(utf8_decode($_POST['nome']));
            $email = caracterCerto(utf8_decode($_POST['email']));
            $telefone = caracterCerto($_POST['telefone']);
            $pergunta = caracterCerto($_POST['onde']);
            $servicos = caracterCerto(utf8_decode($_POST['msg']));
            $dtCadastro = date('Y-m-d h:i:s');
        
            $emailsender = "contato@taeseguranca.com.br";
            $para        = "contato@taeseguranca.com.br";
            $assunto     =  caracterCerto(utf8_decode("Orçamento enviado pelo site"));
            $txt_servico = caracterCerto(utf8_decode("Serviços"));
            
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
                        <td align='right'><font face='verdana' size='1' style='font-size: 10px' color='#333333'>Rua Chico de Paula, 350  -  02926-000  -  ".caracterCerto("São")." Paulo  -  SP<br/>Telefones: (11) 3931-0884 / 2539-1221</font></td>
                        <td><img src='http://www.taeseguranca.com.br/email/img/0.gif' width='15' height='1'></td>
                     </tr>
                    </table>
                    </td>
                 </tr>
                </table>
                </td>
             </tr>
            </table>";

            $corpo = utf8_decode($corpo);

            $headers  = 'MIME-Version: 1.1' . "\r\n";
            $headers .= "Content-type: text/html; charset=UTF-8\n";
            $headers .= "From: TAE <" . $emailsender.">".$quebra_linha;
            $headers .= "Bcc: PlanoBWeb<contato@planobweb.com.br>".$quebra_linha;
                if(!mail($para, $assunto, $corpo, $headers ,"-r".$emailsender)){ // Se for Postfix
                    $headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
                    mail($para, $assunto, $corpo, $headers);
                }
        }

        if(mail){
            echo "<script>location.href ='obrigado-orcamentos'</script>";  
        }else{
            echo "<script>location.href ='orcamentos'</script>";  
        }
       
    }elseif ($_POST['acao'] == "fale-conosco") {
        if (empty($_POST['nome'])|| empty($_POST['email'])|| empty($_POST['telefone'])|| empty($_POST['onde'])|| empty($_POST['msg'])) {
           header("Location: home"); 
        } else { 

            $data = date("d/m/y");

            $nome = caracterCerto(utf8_decode($_POST['nome']));
            $email = $_POST['email'];
            $onde = caracterCerto(utf8_decode($_POST['onde']));
            $telefone = $_POST['telefone'];
            $msg = caracterCerto(utf8_decode($_POST['msg']));

            $cont = "$ip" ."<br>". " \r\n";
            $cont .= "$data" ."<br>". "\r\n";
            $cont .= "$hora" ."<br>". "\r\n\r\n";
            $cont .= "Nome: \t$nome" ."<br>". "\r\n";
            $cont .= "E-mail: \t$email" ."<br>". "\r\n";
            $cont .= "Telefone: \t$telefone" ."<br>". "\r\n";
            $cont .= "Onde nos encontrou: \t$onde" ."<br>". "\r\n";

            $cont .= "\r\nMensagem: \n";
            $cont .= "$msg";

            $headers  = "MIME-Version: 1.1\r\n";
            $headers  .= "Content-type: text/html; charset=UTF-8\n";
            $assunto  .= "Tae Segurança - Contato do ".$_POST['pagina']." site";
            $conteudo     .= "$cont\r\n";
            $headers  .= "From: contato@taeseguranca.com.br\n"; 
            $headers  .= "Return-Path: contato@taeseguranca.com.br\r\n"; 
            $headers    .= "Bcc: contato@planobweb.com.br\r\n"; // cópia
            $headers  .= "Reply-To: $email\n";
            $envio        = mail("contato@taeseguranca.com.br", $assunto,$conteudo,$headers);

            if (mail) {
                if ($_POST['pagina'] == "Orçamentos") {
                    echo "<script>location.href ='obrigado-orcamentos'</script>";  
                }else{
                    echo "<script>location.href ='obrigado-contato'</script>";  
                }
            }else{
                echo "<script>location.href ='fale-conosco'</script>";  
            }
            
        }
    }

?>