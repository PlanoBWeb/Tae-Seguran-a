<?php /* Smarty version 2.6.12, created on 2016-04-19 14:40:56
         compiled from admin/publicacoes/dados.html */ ?>
﻿<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/topo.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- Conteúdo -->
    <form name="frm_cadastro" method="POST" enctype="multipart/form-data">
	    <input type="hidden" name="acao" value="gravar" />
	    <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['dados'][0]['id']; ?>
" />
        <input type="hidden" name="extencoeValidas" value="jpg|jpeg|gif|png|pdf">

	    <h1 class="titulo-pag">Publicação</h1>

	    <label>*Tipo da Publicação:</label>
	    <select name="tipo">
	    	<option>Seleciona um tipo</option>
    		<option <?php if ($this->_tpl_vars['dados'][0]['idTipo'] == '1'): ?>selected<?php endif; ?> value="1">Informativo</option>
    		<option <?php if ($this->_tpl_vars['dados'][0]['idTipo'] == '2'): ?>selected<?php endif; ?> value="2">Artigos</option>
    		<option <?php if ($this->_tpl_vars['dados'][0]['idTipo'] == '3'): ?>selected<?php endif; ?> value="3">Instruções</option>
    		<option <?php if ($this->_tpl_vars['dados'][0]['idTipo'] == '4'): ?>selected<?php endif; ?> value="4">Palestras</option>
	    </select>

	    <label>*Titulo :</label>
	    <input type="text" name="titulo" value="<?php echo $this->_tpl_vars['dados'][0]['titulo']; ?>
" />

	    <!-- <label>*Titulo Inglês:</label>
	    <input type="text" name="titulo_I" value="<?php echo $this->_tpl_vars['dados'][0]['titulo_I']; ?>
" /> -->

	    <label>*Numero Publicação:</label>
	    <input type="text" name="numPub" value="<?php echo $this->_tpl_vars['dados'][0]['numPubclicacao']; ?>
" />

	    <!-- <label>*Numero Publicação Inglês:</label>
	    <input type="text" name="numPub_I" value="<?php echo $this->_tpl_vars['dados'][0]['numPubclicacao_I']; ?>
" /> -->
	    
	    <label>Por:</label>
	    <input type="text" name="por" size="50" value="<?php echo $this->_tpl_vars['dados'][0]['por']; ?>
" />

	    <label>*Data:</label>
	    <input type="date" name="data" value="<?php if ($this->_tpl_vars['dados'][0]['data']):  echo $this->_tpl_vars['dados'][0]['data_formatada'];  else:  echo $this->_tpl_vars['dataAtual'];  endif; ?>" />

	    <label>Texto:</label>
	    <textarea name="texto"><?php echo $this->_tpl_vars['dados'][0]['texto']; ?>
</textarea>

	    <!-- <label>*Texto Inglês:</label>
	    <textarea name="texto_I"><?php echo $this->_tpl_vars['dados'][0]['texto_I']; ?>
</textarea> -->
	 	
	 	<label>Tags (Separar por virgula):</label>
	    <input type="text" name="tag" value="<?php echo $this->_tpl_vars['dados'][0]['tag']; ?>
" />

	   <!--  <label>*Tags Inglês (Separar por virgula):</label>
	    <input type="text" name="tag_I" value="<?php echo $this->_tpl_vars['dados'][0]['tag_I']; ?>
" /> -->

	    <label>*Categoria:</label>
	    <select name="categoria">
	    	<option>Seleciona uma categoria</option>
	    	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dadosCategoria']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	    		<option value="<?php echo $this->_tpl_vars['dadosCategoria'][$this->_sections['i']['index']]['id']; ?>
" <?php if ($this->_tpl_vars['dados'][0]['idCategoria'] == $this->_tpl_vars['dadosCategoria'][$this->_sections['i']['index']]['id']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['dadosCategoria'][$this->_sections['i']['index']]['nomeCategoria']; ?>
</option>
	    	<?php endfor; endif; ?>
	    </select>

	 	<input name="submit" type="submit" class="btn-form top-btn" value="<?php echo $this->_tpl_vars['botao']; ?>
" onclick="return checaPub();" /><br>
	    <label class="no-top">* Campos obrigatórios.</label>
    </form>
<!-- FIM Conteúdo -->
<?php echo '
<script>
	tinymce.init({
	    selector: "textarea",
	    plugins: \'link\'
	 });
</script>
'; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/rodape.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>