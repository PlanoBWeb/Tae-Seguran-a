<?php /* Smarty version 2.6.12, created on 2016-05-05 16:06:30
         compiled from admin/topo.html */ ?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $this->_tpl_vars['titulo']; ?>
 - ADMINISTRA��O</title>

<link rel="stylesheet" href="commom/css/admin.css" type="text/css">

<script src="commom/js/geral.js"></script>

<?php echo '
<script>
	function gerar()
	{
		document.getElementById("idIframeDownload").src=\'?acao=gerarExcel\'
	} 
</script>
'; ?>


</head>

<body topmargin="0" leftmargin="0" style="background-color:#D5DDE3">

<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr>
    <td width="5%">&nbsp;</td>
    <td width="90%" style="background-color:#FFFFFF">
		<table width="100%" cellpadding="0" cellspacing="0" border="0">
      		<tr>
        	<td width="168" ><img src="commom/imgAdmin/logo.jpg"></td>
        	<td width="100%" align="right" valign="bottom" class="titulo_p">Ol&aacute; <?php echo $this->_tpl_vars['nome']; ?>
 &nbsp;&nbsp;&nbsp; </td>
      		</tr>
    	</table>
	</td>
    <td width="5%">&nbsp;</td>
  </tr>
  
  <tr height="20">
    <td width="5%">&nbsp;</td>
    <td width="90%" style="background-color:#696d70">
    
    <table width="100%" cellspacing="0" cellpadding="0" border="0">
     <tr>
     	<td align="left" class="menu">
            <?php if ($this->_tpl_vars['perfil'] == 'M'): ?>&nbsp;&nbsp;
            <a href="adm_usuario.php" style="text-decoration:none">&nbsp;&nbsp;USU&Aacute;RIOS</a> &nbsp;&nbsp; | &nbsp;&nbsp;
            <?php endif; ?>
            <!-- <a href="adm_noticia.php?acao=pesquisar" style="text-decoration:none">&nbsp;&nbsp;NOT&Iacute;CIAS</a> &nbsp;&nbsp; | &nbsp;&nbsp;  -->
            <a href="adm_orcamento.php?acao=pesquisar" style="text-decoration:none">&nbsp;&nbsp;OR&Ccedil;AMENTOS</a> &nbsp;&nbsp; | &nbsp;&nbsp; 
            <a href="adm_cv.php?acao=pesquisar" style="text-decoration:none">&nbsp;&nbsp;CURR&Iacute;CULOS</a> &nbsp;&nbsp; | &nbsp;&nbsp; 
            <!-- <a href="adm_newsletter.php?acao=pesquisar" style="text-decoration:none">&nbsp;&nbsp;NEWSLETTER</a> &nbsp;&nbsp; | &nbsp;&nbsp;  -->
        </td>
        
        <td align="right" class="menu">
        	<a href="adm_usuario.php?acao=alterar_senha" style="text-decoration:none">&nbsp;&nbsp;ALTERAR SENHA</a> &nbsp;&nbsp; | &nbsp;&nbsp; 
        	<a href="adm_login.php?acao=logout" style="text-decoration:none">&nbsp;&nbsp;SAIR</a> &nbsp;&nbsp; 
        </td>
     </tr>
    </table>
    
    
    </td>
    <td width="5%">&nbsp;</td>
  </tr>
</table>