<?php

/**
* Classe de bando de dados
* @author   Dênis Andrade
* @category Bando de dados
* @version  4.102
* @date     30/09/2008
*/

class Database{
	
	/**
	* Usuário do banco de dados
	* @name   $user
	* @var    String
	* @access public
	*/
	var $user = DB_USER;
	
	/**
	* Senha do usuário
	* @name   $pass
	* @var    String
	* @access public
	*/
	var $pass = DB_PASS;
	
	/**
	* Endereço do host MySQL
	* @name   $host
	* @var    String
	* @access public
	*/
	var $host = DB_HOST;
	
	/**
	* Nome do banco de dados
	* @name   $data
	* @var    String
	* @access public
	*/
	var $data = DB_BASE;
	
	/**
	* Conexão com o banco de dados
	* @name   $conn
	* @var    Resource
	* @access public
	*/
	var $conn;
	
	/**
	* Banco de dados selecionado
	* @name   $db
	* @var    Resource
	* @access public
	*/
	var $db;
	
	/**
	* Resultado da query
	* @name   $res
	* @var    Resource
	* @access public
	*/
	var $res;
	
	/**
	* Método contrutor
	* @access public
	* @return Counter
	*/
	function Database(){
		$this->conn = mysql_connect( $this->host , $this->user , $this->pass);
		$this->db   = mysql_select_db( $this->data , $this->conn );
	}
	
	/**
	* Realisar consulta no banco de dados
	* @access public
	* @param  String $sql [, bool $save]
	* @return Resource [, null] 
	*/
	function query($sql, $save = false){
		$r =  mysql_query($sql, $this->conn);
		if($save){ $this->res = $r; }
		else     { return $r;       }
		return true;
	}
	
	/**
	* Busca resultado ou armazenado em $res
	* @access public
	* @param  [String $campo]
	* @return Array String
	*/
	function get($campo = ""){
		if($this->res){
			$row = mysql_fetch_array($this->res);
			if($row){ 
				if($campo == ""){ 
					$ret = $row; 
				}
				else{
					if( isset($row[$campo]) ){ $ret = $row[$campo]; }
					else{ $ret = "Campo n&atilde;o existe"; }
				}
			} // if($row)
			else{
				$ret = false;
			}
		} // if($this->res)
		else{
			$ret = false;
		}
		return $ret;
	}
	
	/**
	* Busca o número total de elementos que o select retornou
	* @access public
	* @return Int
	*/
	function getTotal(){
		if($this->res){
			$ret = mysql_num_rows($this->res);
		} // if($this->res)
		else{
			$ret = false;
		}
		return $ret;
	}
	
	/**
	* Obtém o ID gerado pela operação INSERT anterior
	* @access public
	* @param  
	* @return int 
	*/
	function getInsertId(){
		$r =  mysql_insert_id();
		return $r;
	}

}

?>