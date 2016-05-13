<?php /* Smarty version 2.6.12, created on 2016-05-05 16:05:35
         compiled from admin/cv/relacao.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/topo.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo '
<script type="text/javascript">


function paginacao(pag)
{
	frm = document.frmFiltro;
	
	frm.pagina.value = pag;
	frm.submit();
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
        	<td valign="top" width="10%"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/cv/menu.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
        	<td>
				<table cellspacing="0" cellpadding="0" border="0" width="93%" align="right">
     				<tr>
     					<td class="texto" height="30"><strong>CURR&Iacute;CULO - LISTAR</strong></td>
     				</tr>
                    <tr>
     					<td>
                        
                        <table cellspacing="2" cellpadding="5" border="0" width="100%">
                         <form name="frmFiltro" id="idFiltro" action="adm_cv.php" method="post">
                         <input type="hidden" name="acao" value="pesquisar" />
                         <input type="hidden" name="pagina" />
                            <tr style="background-color:#D5DDE3" height="20">
                                <td class="texto" colspan="7"><strong>Filtro de pesquisa</strong></td>
                            </tr>
                            <tr>
                            	<td class="texto"><strong>Idade</strong></td>
                                <td class="texto"><strong>Peso</strong></td>
                                <td class="texto"><strong>Altura</strong></td>
                                <td class="texto"><strong>Curso</strong></td>
                                <td class="texto"><strong>Status</strong></td>
                                <td class="texto"><strong>Cargo ou Função</strong></td>
                                <td class="texto"><strong>Data do Cadastro</strong></td>
                            </tr>
                            <tr>
                            	<td class="texto" nowrap="nowrap" valign="top">
                                De <input name="idadeInicio" type="text" class="formu" size="2" maxlength="2" value="<?php echo $this->_tpl_vars['idadeInicio']; ?>
" />
                                Até <input name="idadeFim" type="text" class="formu" size="2" maxlength="2" value="<?php echo $this->_tpl_vars['idadeFim']; ?>
" />
                                </td>
                                
                                <td class="texto" nowrap="nowrap" valign="top">
                                De <input name="pesoInicio" type="text" class="formu" size="2" maxlength="3" value="<?php echo $this->_tpl_vars['pesoInicio']; ?>
" />
                                Até <input name="pesoFim" type="text" class="formu" size="2" maxlength="3" value="<?php echo $this->_tpl_vars['pesoFim']; ?>
" />
                                </td>
                                
                                <td class="texto" nowrap="nowrap" valign="top">
                                De <input name="alturaInicio" type="text" class="formu" size="2" maxlength="4" value="<?php echo $this->_tpl_vars['alturaInicio']; ?>
" />
                                Até <input name="alturaFim" type="text" class="formu" size="2" maxlength="4" value="<?php echo $this->_tpl_vars['alturaFim']; ?>
" />
                                </td>
                                
                                <td class="texto" valign="top">
                                <select name="curso" class="formu">
                                  <option value="">Selecione</option>
                                  <option value="s" <?php if ($this->_tpl_vars['curso'] == 's'): ?> selected="selected" <?php endif; ?>>Sim</option>
                                  <option value="n" <?php if ($this->_tpl_vars['curso'] == 'n'): ?> selected="selected" <?php endif; ?>>Não</option>
                                </select>
                                </td>
                                
                                <td class="texto" valign="top">
                                <select name="status" class="formu">
                                  <option value="">Selecione</option>
                                  <option value="0" <?php if ($this->_tpl_vars['status'] == '0'): ?> selected="selected" <?php endif; ?>>Não apto</option>
                                  <option value="1" <?php if ($this->_tpl_vars['status'] == '1'): ?> selected="selected" <?php endif; ?>>Apto</option>
                                </select>
                                </td>
                                
                                <td class="texto" nowrap="nowrap" valign="top">
                                <select name="cargo" class="formu">
                                  <option value="">Selecione</option>
                                  	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dadosCargo']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                                        <option value="<?php echo $this->_tpl_vars['dadosCargo'][$this->_sections['i']['index']]['id']; ?>
" <?php if ($this->_tpl_vars['dadosCargo'][$this->_sections['i']['index']]['id'] == $this->_tpl_vars['cargo']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['dadosCargo'][$this->_sections['i']['index']]['cargo']; ?>
</option>
                                    <?php endfor; endif; ?>
                                </select>
                                </td>
                                
                                <td class="texto" nowrap="nowrap" valign="top" align="center">
                                <select name="diaInicio" class="formu">
                                    <option value="">-</option>
                                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['arDia']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                                        <option value="<?php echo $this->_tpl_vars['arDia'][$this->_sections['i']['index']]['dia']; ?>
" <?php if ($this->_tpl_vars['arDia'][$this->_sections['i']['index']]['dia'] == $this->_tpl_vars['diaInicio']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['arDia'][$this->_sections['i']['index']]['dia']; ?>
</option>
                                    <?php endfor; endif; ?>
                                </select>
                                / 
                                <select name="mesInicio" class="formu">
                                    <option value="">-</option>
                                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['arMes']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                                        <option value="<?php echo $this->_tpl_vars['arMes'][$this->_sections['i']['index']]['mes']; ?>
" <?php if ($this->_tpl_vars['arMes'][$this->_sections['i']['index']]['mes'] == $this->_tpl_vars['mesInicio']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['arMes'][$this->_sections['i']['index']]['mes']; ?>
</option>
                                    <?php endfor; endif; ?>
                                </select>
                                /
                                <select name="anoInicio" class="formu">
                                    <option value="">-</option>
                                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['arAnoPesquisa']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                                        <option value="<?php echo $this->_tpl_vars['arAnoPesquisa'][$this->_sections['i']['index']]['ano']; ?>
" <?php if ($this->_tpl_vars['arAnoPesquisa'][$this->_sections['i']['index']]['ano'] == $this->_tpl_vars['anoInicio']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['arAnoPesquisa'][$this->_sections['i']['index']]['ano']; ?>
</option>
                                    <?php endfor; endif; ?>
                                </select>
                                <br/>
                                até
                                <br/>
                                <select name="diaFim" class="formu">
                                    <option value="">-</option>
                                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['arDia']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                                        <option value="<?php echo $this->_tpl_vars['arDia'][$this->_sections['i']['index']]['dia']; ?>
" <?php if ($this->_tpl_vars['arDia'][$this->_sections['i']['index']]['dia'] == $this->_tpl_vars['diaFim']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['arDia'][$this->_sections['i']['index']]['dia']; ?>
</option>
                                    <?php endfor; endif; ?>
                                </select>
                                / 
                                <select name="mesFim" class="formu">
                                    <option value="">-</option>
                                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['arMes']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                                        <option value="<?php echo $this->_tpl_vars['arMes'][$this->_sections['i']['index']]['mes']; ?>
" <?php if ($this->_tpl_vars['arMes'][$this->_sections['i']['index']]['mes'] == $this->_tpl_vars['mesFim']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['arMes'][$this->_sections['i']['index']]['mes']; ?>
</option>
                                    <?php endfor; endif; ?>
                                </select>
                                /
                                <select name="anoFim" class="formu">
                                    <option value="">-</option>
                                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['arAnoPesquisa']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                                        <option value="<?php echo $this->_tpl_vars['arAnoPesquisa'][$this->_sections['i']['index']]['ano']; ?>
" <?php if ($this->_tpl_vars['arAnoPesquisa'][$this->_sections['i']['index']]['ano'] == $this->_tpl_vars['anoFim']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['arAnoPesquisa'][$this->_sections['i']['index']]['ano']; ?>
</option>
                                    <?php endfor; endif; ?>
                                </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="7" align="center"><input type="submit" class="botao" value="Filtrar" /></td>
                            </tr>
                            </form>
                        </table>
                        
                        </td>
     				</tr>
                    
                    <tr>
     					<td class="texto"><br/><br/></td>
     				</tr>
                    <tr>
     					<td>
        					<table cellspacing="2" cellpadding="5" border="0" width="100%">
         						<tr style="background-color:#D5DDE3" height="20">
         							<td class="texto"><strong>Nome</strong></td>
       					     		<td class="texto" width="10%" nowrap="nowrap" align="center"><strong>Idade</strong></td>
                                    <td class="texto" width="10%" nowrap="nowrap" align="center"><strong>Cadastro</strong></td>
                                    <td class="texto" width="10%" nowrap="nowrap" align="center"><strong>Curso</strong></td>
            						<td class="texto" width="10%" align="center"><strong>Op&ccedil;&otilde;es</strong></td>
        						</tr>
         						<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dados']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
         						<tr>
         							<td class="texto"><?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['pessoaisNome']; ?>
</td>
            						<td class="texto" nowrap="nowrap" align="center"><?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['idade']; ?>
</td>
                                    <td class="texto" nowrap="nowrap" align="center"><?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['dtCadastroFormat']; ?>
</td>
                                    <td class="texto" nowrap="nowrap" align="center"><?php if ($this->_tpl_vars['dados'][$this->_sections['i']['index']]['curso'] == 's'): ?> Sim <?php else: ?> Não <?php endif; ?></td>
            						<td class="texto" nowrap="nowrap">< <a href="?acao=editar&id=<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['id']; ?>
">editar</a> > | < <a href="#" onclick="exclui(<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['id']; ?>
)">excluir</a> ></td>
				         		</tr>
         						<?php endfor; endif; ?>
                                
                                <?php if ($this->_tpl_vars['paginacaoTotal'] > 1): ?>
                                <tr>
                                	<td colspan="5" bgcolor="#EAEAEA" align="center" class="texto" style="font-size: 7pt;">
                                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['paginacao']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                                    	<?php if ($this->_sections['i']['index'] != 0): ?> | <?php endif; ?>
                                        <?php if ($this->_tpl_vars['paginacao'][$this->_sections['i']['index']]['atual'] == 1): ?><span style="font-size: 9pt; font-weight: bold"><?php else: ?><a href="#" onclick="paginacao(<?php echo $this->_tpl_vars['paginacao'][$this->_sections['i']['index']]['pagina']; ?>
);"><?php endif; ?> <?php echo $this->_tpl_vars['paginacao'][$this->_sections['i']['index']]['pagina']; ?>
 <?php if ($this->_tpl_vars['paginacao'][$this->_sections['i']['index']]['atual'] == 1): ?></span><?php else: ?></a><?php endif; ?>
                                    <?php endfor; endif; ?>
                                    </td>
                                </tr>
                                <?php endif; ?>
        					</table>
        				</td>
     				</tr>
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