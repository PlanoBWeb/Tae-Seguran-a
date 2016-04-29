<?php /* Smarty version 2.6.12, created on 2016-04-19 13:29:16
         compiled from admin/login.html */ ?>
<html>
<head>	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="commom/js/funcoes.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="commom/js/bootstrap.min.js"></script>
	<link href="commom/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="commom/css/template.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="commom/css/estilo_admin.css">
	<title><?php echo $this->_tpl_vars['titulo']; ?>
 - ADMINISTRAÇÃO</title>
	<?php echo '
	<script>
		function checa(){
			a = document.formu_adm;
			
			if(a.login.value==\'\'){
				alert(\'Preencha o campo e-mail!\');
				a.login.focus();
				return false;
			}
			
			if(!email(a.login, \'E-mail inválido\'))
			{
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
	<div class="container-fluid">
		<form  class="form-login" name="formu_adm" method="POST" OnSubmit="return checa()">
			<div class="logo">
				<img src="commom/img/logo.png">
			</div>
			<input type="hidden" name="acao" value="logar">
			<label>E-mail:</label> 
			<input type="text" name="login" size="50"> <br>
			<label>Senha:</label> 
			<input type="password" name="senha" size="35"> <br>
			<input type="submit" value="Acessar" class="btn-form">
		 </form>
	</div>
</body>
</html>