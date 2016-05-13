<?php /* Smarty version 2.6.12, created on 2016-05-05 16:06:57
         compiled from admin/login.html */ ?>
<html>
<head>
	<title><?php echo $this->_tpl_vars['titulo']; ?>
 - ADMINISTRAÇÃO</title>

<link rel="stylesheet" href="commom/css/admin.css" type="text/css">

<?php echo '
<script>

	function checa(){
		a = document.formu_adm;
		
		if(a.login.value==\'\'){
			alert(\'Preencha o campo login!\');
			a.login.focus();
			return false;
		}
		
		if(a.senha.value==\'\'){
			alert(\'Preencha o campo senha!\');
			a.senha.focus();
			return false;
		}
		
		return true;
		a.submit();
	}

</script>
'; ?>



</head>

<body topmargin="0" leftmargin="0" bgcolor="#D5DDE3">


<table cellspacing="0" cellpadding="0" border="0" height="100%" width="100%">
  <tr>
  	<td>
		
		<table cellspacing="4" cellpadding="4" bgcolor="#FFFFFF" align="center" width="330" border="0">
		  <tr>
            <td height="40" colspan="2">
            	<img src="commom/imgAdmin/logo.jpg"><img src="commom/imgAdmin/0.gif" width="100" height="1">
            </td>
	      </tr>
		 <tr>
		 	<td height="40" colspan="2"><br/></td>
		 </tr>
		 <tr>
		 	<td>
			<table cellspacing="4" cellpadding="4" bgcolor="#CCCCCC" align="center">
			<form name="formu_adm" method="POST" OnSubmit="return checa()">
			<input type="hidden" name="acao" value="logar">
			 <tr>
			 	<td nowrap class="texto"><b>E-mail:</b></td>
                <td colspan="2"><input type="text" name="login" size="50"></td>
			 </tr>
			 <tr>
			 	<td nowrap class="texto"><b>Senha:</b></td>
				<td><input type="password" name="senha" size="35"></td>
			 	<td  align="right"><input type="submit" value="Acessar" class="botao"></td>
			 </tr>
			 </form>
			</table>
            
            </td>
		 </tr>
         <tr>
		 	<td height="40" colspan="2"><br/></td>
		 </tr>
		</table>
		  
	</td>
  </tr>
</table>

</body>
</html>