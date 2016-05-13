<?php /* Smarty version 2.6.12, created on 2016-05-05 16:05:30
         compiled from admin/orcamento/relacao.html */ ?>
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
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/orcamento/menu.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
        	<td>
				<table cellspacing="0" cellpadding="0" border="0" width="93%" align="right">
                <form name="frmFiltro" id="idFiltro" action="adm_orcamento.php" method="post">
                     <input type="hidden" name="acao" value="pesquisar" />
                     <input type="hidden" name="pagina" />
                </form>
     				<tr>
     					<td class="texto" height="30"><strong>OR&Ccedil;AMENTO - LISTAR</strong></td>
     				</tr>
                    
                    <tr>
     					<td>
        					<table cellspacing="2" cellpadding="5" border="0" width="100%">
         						<tr style="background-color:#D5DDE3" height="20">
         							<td class="texto" width="10%" nowrap="nowrap" align="center"><strong>Data / Hora</strong></td>
                                    <td class="texto"><strong>Inscrito</strong></td>
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
         							<td class="texto" nowrap="nowrap"><?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['dtCadastroFormat']; ?>
</td>
            						<td class="texto" nowrap="nowrap"><?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['nome']; ?>
</td>
            						<td class="texto" nowrap="nowrap">< <a href="?acao=detalhe&id=<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['id']; ?>
">detalhe</a> > <!--| < <a href="?acao=historico&id=<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['id']; ?>
">histórico</a> >--></td>
				         		</tr>
         						<?php endfor; endif; ?>
                                
                                <?php if ($this->_tpl_vars['paginacaoTotal'] > 1): ?>
                                <tr>
                                	<td colspan="4" bgcolor="#EAEAEA" align="center" class="texto" style="font-size: 7pt;">
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