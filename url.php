<?php 

	$pastaProjeto	= PASTAPROJETO;
	$urlCompleta 	= $_SERVER['REQUEST_URI'];
	$posInicio		= strpos($urlCompleta, $pastaProjeto);
	$priimeiraEtapa	= substr($urlCompleta, ($posInicio+strlen($pastaProjeto)));
	if(strpos($priimeiraEtapa, "?"))
	{
		$posFinal		= strpos($priimeiraEtapa, "?");
		$pagina			= substr($priimeiraEtapa,0,$posFinal);
	}
	else
	{
		$pagina			= $priimeiraEtapa;
	}
?>