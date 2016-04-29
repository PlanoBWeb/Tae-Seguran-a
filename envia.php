<?php
  
    if ($_POST['newsletterEnvia'] == "newsletter") {
        if (empty($_POST['nome_news'])|| empty($_POST['email_news'])) {
            header("Location: home"); 
        } else {  
            $ip = $_SERVER['REMOTE_ADDR'];
            $data = date("d/m/y");
            $hora = date("H:i"); 
            
            $nome = $_POST['nome_news'];
            $email = $_POST['email_news'];

            $cont = "$ip\r\n";
            $cont .= "$data\r\n";
            $cont .= "$hora\r\n\r\n";
            $cont .= "Nome: \t$nome\r\n";
            $cont .= "E-mail: \t$email\r\n";

            $headers    = "MIME-Version: 1.1\r\n";
            $headers  .= "Content-type: text/plain; charset=UTF-8\n";
            $assunto  .= "Expressão brindes - Newsletter";
            $conteudo     .= "$cont\r\n";
            $headers  .= "From: comercial@expressaobrindes.com.br\n"; 
            $headers  .= "Return-Path: comercial@expressaobrindes.com.br\r\n"; 
            $headers    .= "Bcc: contato@planobweb.com.br\r\n"; // cópia
            $headers  .= "Reply-To: $email\n";
            $envio        = mail("comercial@expressaobrindes.com.br", $assunto,$conteudo,$headers);

            if ($envio) {
                echo "<script>location.href ='obrigado-newsletter'</script>";     
            }
        }
    }
    elseif ($_POST['orcamentohome'] == "orcamentohome") {
        if (empty($_POST['orc_nome'])|| empty($_POST['orc_email']) || empty($_POST['orc_msg'])) {
            header("Location: home"); 
        } else {  
            
            $ip = $_SERVER['REMOTE_ADDR'];
            $data = date("d/m/y");
            $hora = date("H:i"); 
            
            $nome = $_POST['orc_nome'];
            $email = $_POST['orc_email'];
            $msg = $_POST['orc_msg'];

            $cont = "$ip\r\n";
            $cont .= "$data\r\n";
            $cont .= "$hora\r\n\r\n";
            $cont .= "Nome: \t$nome\r\n";
            $cont .= "E-mail: \t$email\r\n";
            $cont .= "Mensagem: \t$msg\r\n";

            $headers    = "MIME-Version: 1.1\r\n";
            $headers  .= "Content-type: text/plain; charset=UTF-8\n";
            $assunto  .= "Expressão brindes - Orçamento";
            $conteudo     .= "$cont\r\n";
            $headers  .= "From: comercial@expressaobrindes.com.br\n"; 
            $headers  .= "Return-Path: comercial@expressaobrindes.com.br\r\n"; 
            $headers    .= "Bcc: contato@planobweb.com.br\r\n"; // cópia
            $headers  .= "Reply-To: $email\n";
            $envio        = mail("comercial@expressaobrindes.com.br", $assunto,$conteudo,$headers);

            if ($envio) {
                echo "<script>location.href ='obrigado-orcamento'</script>";     
            }
        }
    }
    else {
        if (empty($_POST['fale_nome'])|| empty($_POST['fale_email'])|| empty($_POST['fale_telefone'])|| empty($_POST['onde'])|| empty($_POST['fale_msg'])) {
           header("Location: index.php"); 
        } else { 

            $ip = $_SERVER['REMOTE_ADDR'];
            $data = date("d/m/y");
            $hora = date("H:i"); 

            $nome = $_POST['fale_nome'];
            $email = $_POST['fale_email'];
            $onde = $_POST['onde'];
            $telefone = $_POST['fale_telefone'];
            $msg = $_POST['fale_msg'];
            $codigo = $_POST['codigo'];

            $cont = "$ip\r\n";
            $cont .= "$data\r\n";
            $cont .= "$hora\r\n\r\n";
            $cont .= "Nome: \t$nome\r\n";
            $cont .= "E-mail: \t$email\r\n";
            $cont .= "Telefone: \t$telefone\r\n";
            $cont .= "Onde nos encontrou: \t$onde\r\n";
            if ($pagina == "produto") {
                    $cont .= "Código produto: \t$codigo\r\n";
            }
            $cont .= "\r\nMensagem: \n";
            $cont .= "$msg";
            

            $headers  = "MIME-Version: 1.1\r\n";
            $headers  .= "Content-type: text/plain; charset=UTF-8\n";
            $assunto  .= "Expressão brindes - Contato";
            $conteudo     .= "$cont\r\n";
            $headers  .= "From: comercial@expressaobrindes.com.br\n"; 
            $headers  .= "Return-Path: comercial@expressaobrindes.com.br\r\n"; 
            $headers    .= "Bcc: contato@planobweb.com.br\r\n"; // cópia
            $headers  .= "Reply-To: $email\n";
            $envio        = mail("comercial@expressaobrindes.com.br", $assunto,$conteudo,$headers);

         
            echo "<script>location.href ='obrigado-contato'</script>";  

        }
    }

?>