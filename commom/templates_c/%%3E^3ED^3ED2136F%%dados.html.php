<?php /* Smarty version 2.6.12, created on 2016-05-05 16:05:39
         compiled from admin/usuario/dados.html */ ?>
﻿<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/topo.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo '
<script>

	function checa()
	{
		frm = document.frm_cadastro;
		msg = "Preencha o campo ";
		
		if(trim(frm.nome.value) == "")
		{
			alert(msg + "Nome!");
			frm.nome.focus();
			return false;
		}
		
		if(trim(frm.email.value) == "")
		{
			alert(msg + "E-mail!");
			frm.email.focus();
			return false;
		}
		
		if(!email(frm.email, \'E-mail inválido!\'))
			return false;
		
		if(trim(frm.senha.value) == "")
		{
			alert(msg + "Senha!");
			frm.senha.focus();
			return false;
		}
		
		if(trim(frm.senha2.value) == "")
		{
			alert(msg + "Repetir Senha!");
			frm.senha2.focus();
			return false;
		}
		
		if(trim(frm.senha.value) != trim(frm.senha2.value))
		{
			alert("As senhas estão diferentes!");
			return false;
		}
		
		/*
		if( frm.perfil.selectedIndex == 0 )
		{
			alert("Selecione o perfil!");
			frm.perfil.focus();
			return false;
		}
		
		if( frm.status.selectedIndex == 0 )
		{
			alert("Selecione o status!");
			frm.status.focus();
			return false;
		}
		*/
		
		return true;
	}

</script>
'; ?>


<!-- Conteúdo -->
<table width="100%" height="350" border="0" cellpadding="10" cellspacing="0">
  <tr>
    <td width="5%">&nbsp;</td>
    <td width="90%" style="background-color:#FFFFFF" valign="top">
		<table width="100%" border="0">
      		<tr>
        	<td valign="top"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/usuario/menu.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
        	<td>
				<table cellspacing="2" cellpadding="2" border="0" width="100%">
            		<tr height="30">
              			<td align="right" width="20%">&nbsp;</td>
              			<td class="texto"><strong>CADASTRO DE USUÁRIOS DO SISTEMA</strong></td>
            		</tr>
          			<form name="frm_cadastro" onsubmit="return checa()" method="POST">
            		<input type="hidden" name="acao" value="gravar" />
                    <input type="hidden" name="status_anterior" value="<?php echo $this->_tpl_vars['dados'][0]['usu_status']; ?>
" />
            		<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['dados'][0]['usu_id']; ?>
" />
            		<tr>
              			<td align="right" width="20%" class="texto">*Nome:</td>
              			<td><input type="text" name="nome" size="50" value="<?php echo $this->_tpl_vars['dados'][0]['usu_nome']; ?>
" /></td>
            		</tr>
            		<tr>
              			<td align="right" class="texto">*E-mail:</td>
              			<td><input type="text" name="email" size="50" value="<?php echo $this->_tpl_vars['dados'][0]['usu_email']; ?>
" /></td>
            		</tr>
            		<tr>
              			<td align="right" class="texto">*Senha:</td>
              			<td><input type="password" name="senha" size="30" value="<?php echo $this->_tpl_vars['dados'][0]['usu_senha']; ?>
" /></td>
            		</tr>
            		<tr>
              			<td align="right" class="texto">*Repetir Senha:</td>
              			<td><input type="password" name="senha2" size="30" value="<?php echo $this->_tpl_vars['dados'][0]['usu_senha']; ?>
" /></td>
            		</tr>
                    <!--
            		<tr>
              			<td align="right" class="texto">*Perfil:</td>
              			<td><select name="perfil">
                  			<option>Selecione</option>
                  			<option value="M" <?php if ($this->_tpl_vars['dados'][0]['usu_perfil'] == 'M'): ?>selected="selected"<?php endif; ?>>Master</option>
                  			<option value="C" <?php if ($this->_tpl_vars['dados'][0]['usu_perfil'] === 'C'): ?>selected="selected"<?php endif; ?>>Comum</option>
                			</select>
						</td>
            		</tr>
            		<tr>
              			<td align="right" class="texto">*Status:</td>
              			<td><select name="status">
                  			<option>Selecione</option>
                  			<option value="1" <?php if ($this->_tpl_vars['dados'][0]['usu_status'] == '1'): ?>selected="selected"<?php endif; ?>>Ativo</option>
                  			<option value="0" <?php if ($this->_tpl_vars['dados'][0]['usu_status'] == '0'): ?>selected="selected"<?php endif; ?>>Inativo</option>
                			</select>
						</td>
            		</tr>
                    -->
            		<tr>
              			<td></td>
              			<td class="texto">
                        	<input name="submit" type="submit" class="botao" value="<?php echo $this->_tpl_vars['botao']; ?>
" /><br>
                            * Campos obrigatórios.
                        </td>
            		</tr>
          			</form>
        		</table>
			</td>
     	 </tr>
    </table>
	
	</td>
    <td width="5%">&nbsp;</td>
  </tr>
</table>
<!-- FIM Conteúdo -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/rodape.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>