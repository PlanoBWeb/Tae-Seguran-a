<?php
error_reporting(false);
// Data no passado
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

// Sempre modificado
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");

// HTTP/1.1
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);

// HTTP/1.0
header("Pragma: no-cache");

session_start();

require $path.'libs/Smarty.class.php';

$smarty = new Smarty;
/*
$smarty->compile_check = false;
$smarty->caching = false;
$smarty->debugging = false;
*/

/* MyADMIN - http://phpmyadmin.locaweb.com.br/ */
if( $_SERVER['SERVER_NAME'] == 'planobweb' || $_SERVER['SERVER_NAME'] == '192.168.0.105')
{
	define("db_host", 'localhost');
	define("db_user", 'root');
	define("db_pass", '');
	define("db_base", 'admin_tae');
	define("PATH_SERVIDOR","C:/wamp/www/clientes/TaeSeguranca/Web/");
	define("PASTAPROJETO", strtolower("clientes/TaeSeguranca/Web/"));
	if ($_SERVER['SERVER_NAME'] == '192.168.0.105') {
		define("URL","http://192.168.0.105/clientes/TaeSeguranca/Web/");
	}else{
		define("URL","http://planobweb/clientes/TaeSeguranca/Web/");
	}
}
else
{
	/* DADOS Online  */
	define("PATH_SERVIDOR","	E:/Home/planobweb2/Web/clientes/Bda");
	define("PASTAPROJETO", strtolower("homologacao/"));

	define("db_host", 'admin_tae.mysql.dbaas.com.br');
	define("db_user", 'admin_tae');
	define("db_pass", 'ta9023ca');
	define("db_base", 'admin_tae');

	$urlWWW = $_SERVER['SERVER_NAME'];
	$urlWWWFinal = explode('.', $urlWWW);
	if ($urlWWWFinal[0] == "www") {
		define("URL","http://www.taeseguranca.com.br/homologacao/");	
	}elseif ($urlWWWFinal[0] == "WWW") {
		define("URL","http://WWW.taeseguranca.com.br/homologacao/");	
	}
	else{
		define("URL","http://taeseguranca.com.br/homologacao/");
	}	

}

//Acesso ao MyAdmin
$resultado=mysql_connect(db_host, db_user, db_pass);
if (!($resultado)) {
	echo "Erro ao conectar-se ao MySQL<br>";
}

//Acesso ao Banco de Dados
$resultado = mysql_select_db(db_base);
if (!($resultado)) {
	echo "Erro ao conectar-se ao Banco de Dados";
}


define("TITULO","Tae");

?>