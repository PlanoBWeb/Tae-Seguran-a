<?php

/**
* Classe de envio de e-mail
* @author   Dênis Andrade <denis.andrade@gmail.com>
* @category E-Mail
* @version  4.100
* @date     24/10/2008
*/
class Email{

	/**
	* Título do e-mail
	* @name   $subject
	* @var    String
	* @access public
	*/
	var $subject = null;
	
	
	/**
	* Conta que enviará o e-mail
	* @name   $from
	* @var    String
	* @access public
	*/
	var $from = null;
	
	
	/**
	* Conta que receberá resposta do e-mail enviado
	* @name   $replyTo
	* @var    String
	* @access public
	*/
	var $replyTo = null;
	
	
	/**
	* Lista de contas para onde serão enviados os e-mails
	* @name   $to
	* @var    Array String
	* @access public
	*/
	var $to = array();
	
	
	/**
	* Conta que receberá uma cópia do e-mail
	* @name   $cc
	* @var    String
	* @access public
	*/
	var $cc = null;
	
	
	/**
	* Conta que receberá uma cópia oculta do e-mail
	* @name   $bcc
	* @var    String
	* @access public
	*/
	var $bcc = null;
	
	
	/**
	* Conteúdo do e-mail 
	* @name   $message
	* @var    String
	* @access public
	*/
	var $message = null;
	
	
	/**
	* Tipo de formatação do e-mail, podendo ser HTML, somente texto ou mixto
	* @name   $msgType
	* @var    String
	* @access public
	*/
	var $msgType = null;
	
	
	/**
	* Nome do arquivo de template do e-mail
	* @name   $tplArquivo
	* @var    String
	* @access public
	*/
	var $tplArquivo = null;
	
	
	/**
	* Conteúdo do arquivo de template
	* @name   $tplConteudo
	* @var    String
	* @access public
	*/
	var $tplConteudo = null;
	
	
	/**
	* Array com variáveis do template
	* @name   $tplVars
	* @var    String
	* @access public
	*/
	var $tplVars = array();
	
	
	/**
	* Opção de desativar o cabeçalho do e-mail
	* @name   $enviarHeaders
	* @var    String
	* @access boolean
	*/
	var $enviarHeaders = true;
	
	
	/**
	* String para quebra de linha
	* @name   $ln
	* @var    String
	* @access public
	*/
	var $ln = null;
	
	
	/**
	* Método contrutor
	* @access public
	* @return Counter
	*/
	function Email(){
		$this->setLn();
	}
	
	
	/**
	 * Define o tipo de caracter de quebra de linha
	 * @access public
	 */
	function setLn(){
		$host = $_SERVER['SERVER_SOFTWARE'];

		if(eregi("Linux",$host))
			$this->ln = "\n";
		else
			$this->ln = "\r\n";
	}
	
	/**
	* Atribui um título ao e-mail.
	* @access public
	* @param  (String) Título do e-mail
	* @return  NULL
	*/
	function titulo($titulo){
		if($titulo)
			$this->subject = strip_tags($titulo);
		else
			$this->subject = "Sem titulo";

		return true;
	}

	
	/**
	* Atribui uma conta de remetente ao e-mail
	* @access public
	* @param  (String) Nome, (String) Email
	* @return boolean
	*/
	function de($nome, $email)
	{
		if($email)
		{
			$_from = $nome .'<'. $email .'>';
			
			$this->from = $_from;
		}
		else
		{
			return false;
		}
		return true;
	}
	
	
	/**
	* Atribui uma conta de resposta ao e-mail
	* @access public
	* @param  (String) Nome, (String) Email
	* @return boolean
	*/
	function resposta($nome, $email){
		if($email)
			$this->replyTo = "$nome<$email>";
		else if($this->de)
			$this->replyTo = $this->de;
		else
			return false;
		
		return true;
	}

	
	/**
	* Atribui contas de destino ao e-mail.
	* O envio dos e-mails será feita uma vez para cada 
	* indice, podendo ser separados por blocos ou individual.
	*
	* @access public
	* @param  (String) Nome, (String) Email, [(int)Indice]
	* @return NULL
	*/
	function para($nome, $email, $i = 0){
		if(strlen($this->to[$i]) > 0)
			$this->to[$i] .= ",";
		else
			$this->to[$i] .= "";
			
		$this->to[$i] .= "$nome<$email>";
		return true;
	}

	
	/**
	* Adiciona uma conta para receber uma cópia do e-mail
	* @access public
	* @param  (String) Nome, (String) Email
	* @return NULL
	*/
	function copia($nome, $email){
		if(strlen($this->cc) > 0)
			$this->cc .= ",";
		else
			$this->cc .= "";
			
		$this->cc .= "$nome<$email>";
	}

	
	/**
	* Adiciona uma conta para receber uma cópia oculta do e-mail
	* @access public
	* @param  (String) Nome, (String) Email
	* @return NULL
	*/
	function copiaOculta($nome, $email){
		if(strlen($this->bcc) > 0)
			$this->bcc .= ",";
		else
			$this->bcc .= "";
			
		$this->bcc .= "$nome<$email>";
	}

	
	/**
	* Atribui uma mensagem, podendo ser no formato HTML, texto ou mixto
	* @access public
	* @param  (String) Mensagem, [(String) Tipo de mensagem]
	* @return NULL
	*/
	function mensagem($mensagem, $tipo = "text/html"){
		if($tipo == "text/html" || $tipo == "html"){
			$this->msgType = "text/html";
			$this->message = $mensagem;
		}
		else if(($tipo == "text/plain") || ($tipo = "text") || ($tipo == "plain")){
			$this->msgType = "text/plain";
			$this->message = strip_tags($mensagem);
		}
		else{
			$this->msgType = "multipart/alternative";
			$this->message = $mensagem;
		}

		return true;
	}

	
	/**
	* Método que fará o envio dos e-mails. Verifica se algum template foi definido.
	* Caso tenho um template definido envia o template, caso contrário envia a mensagem de texto.
	* @access public
	* @param  NULL
	* @return boolean
	*/
	function enviar(){
		$headers = null;
		$mailOK  = null;
		
		if($this->tplArquivo != null){
			$this->lerArquivo($this->tplArquivo);
			$this->templateFetch();
			$this->mensagem($this->tplConteudo, "html");
		}
		foreach($this->to as $para)
		{
			$headers = $this->headers($para);
			
			echo "para = ".$para."<br><br>";
			echo "titulo = ".$this->subject."<br><br>";
			echo "html".$this->message."<br><br>";
			echo "header = ".$headers."<br><br>";
			die("Fim");
			
			$mailOK = mail($para, $this->subject, $this->message, $headers);
			if(!$mailOK){
				return false;
			}
		}
		die("Fim temp");
		return true;
	}
	
	
	/**
	* Atribui uma conta padrão para não receber respostas do e-mail enviado
	* @access public
	* @return (String) Email
	*/
	function noReply(){
		$noReply = null;
		
		$noReply .= "No-Reply";
		$noReply .= "<";
		$noReply .= "no-reply@";
		$noReply .= str_replace("www.", "", $_SERVER['SERVER_NAME']);
		$noReply .= ">";
		
		return $noReply;
	}
	
	
	/**
	 * Define se o cabeçalho do e-mail será enviado.
	 * <ul>
	 *   <li>true  - Envia o cabeçalho</li>
	 *   <li>false - Não envia o cabeçalho</li>
	 * </ul
	 * 
	 * @param boolean $enviarHeaders
	 */
	function enviarHeaders($enviarHeaders = true){
		if(is_bool($enviarHeaders))
			$this->enviarHeaders = $enviarHeaders;
		else
			$this->enviarHeaders = true;
	}
	
	
	/**
	* Formata o cabeçalho do e-mail
	* @access public
	* @param  (String) Contas de email
	* @return (String) Cabeçalho do e-mail
	*/
	function headers($para){
		$headers = null;
		$ln = $this->ln;
		
		if($this->from != null)
			$headers .= "From: " . $this->from . ";";
		else
			$headers .= "From: " . $this->noReply() . ";";
			
		if($this->replyTo != null)
			$headers .= "Reply-To: " . $this->replyTo . $ln;
		
		/*
		if($para)
			$headers .= "To: " . $para . $ln;
		*/
		
		if($this->cc != null)
			$headers .= "Cc: " . $this->cc . $ln;
		
		if($this->bcc != null)
			$headers .= "Bcc: " . $this->bcc . $ln;
		
		if($this->enviarHeaders){
			$headers .= "MIME-Version: 1.0;\n";
			$headers .= "Content-Type: text/html" . $ln;
			//$headers .= "X-Mailer: PHP/" . phpversion()  . $ln;
		}
		
		return $headers;
	}

	
	/* FUNÇÕES DE TEMPLATE */
	
	
    /**
	* Define um arquivo de template para o e-mail.
	* @access public
	* @param  string $arquivo
	* @return boolean
	*/
    function template($arquivo){
    	if(file_exists($arquivo)){
    		$this->tplArquivo = $arquivo;
    	}
    	else{
    		return false;
    	}
    	return true;
    }
   
    
    /**
	* Atribui valor a uma variavel do template
	* @access public
	* @param  string $variavel
	* @param  string $valor
	* @return boolean
	*/
    function assign($variavel, $valor){
    	if(isset($variavel) && isset($valor)){
    		$this->tplVars[$variavel] = $valor; 
    	}
    	else{
    		return false;
    	}
    	return true;
    }
    
    
    /**
     * Lê o conteúdo de um arquivo de template em HTML
     * @access public
     * @param  string $arquivo
     * @return string
     */
    function lerArquivo($arquivo){
    	$fd = null;
        if( file_exists($arquivo) && ($fd = @fopen($arquivo, 'rb')) ){
        	$this->tplConteudo = '';
            while (!feof($fd)) {
                $this->tplConteudo .= fread($fd, 8192);
            }
            fclose($fd);
            return true;
        } else {
            return false;
        }
    }
    
    
    /**
	* Substitui as variáveis pelos seus valores definidos em assign()
	* @access public
	* @return boolean
	*/
    function templateFetch(){
    	foreach($this->tplVars as $var => $val){
    		$var = '{$' . $var . '}';
    		$this->tplConteudo = str_replace($var, $val, $this->tplConteudo);
    	}
    	return true;
    }
    
}

?>