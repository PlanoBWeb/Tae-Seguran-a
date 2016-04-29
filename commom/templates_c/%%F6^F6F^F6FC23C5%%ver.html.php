<?php /* Smarty version 2.6.12, created on 2016-04-19 13:34:33
         compiled from admin/noticias/ver.html */ ?>
﻿<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/topo.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<!-- Conteúdo -->
	<div class="container">
		<form class="form-ver">

			<h1 class="titulo-pag">Noticia</h1>

			<label><strong>Titulo:</strong></label>
			<input type="text" disabled value="<?php echo $this->_tpl_vars['dados'][0]['titulo']; ?>
">	

			<!-- <label><strong>*Titulo Inglês:</strong></label>
			<input type="text" disabled value="<?php echo $this->_tpl_vars['dados'][0]['titulo_I']; ?>
">	 -->

			<label><strong>Por:</strong></label>
			<input type="text" disabled value="<?php echo $this->_tpl_vars['dados'][0]['por']; ?>
">	

			<label><strong>Data:</strong></label>
			<input type="text" disabled value="<?php echo $this->_tpl_vars['dados'][0]['data']; ?>
">	

			<label><strong>Texto:</strong></label>
			<textarea disabled><?php echo $this->_tpl_vars['dados'][0]['textoSemTag']; ?>
</textarea>
<!-- 
			<label><strong>*Texto Inglês:</strong></label>
			<textarea disabled><?php echo $this->_tpl_vars['dados'][0]['textoSemTag_I']; ?>
</textarea> -->

			<label><strong>Tags:</strong></label>
			<input type="text" disabled value="<?php echo $this->_tpl_vars['dados'][0]['tag']; ?>
">	

			<!-- <label><strong>*Tags Inglês:</strong></label>
			<input type="text" disabled value="<?php echo $this->_tpl_vars['dados'][0]['tag_I']; ?>
"> -->	

			<label>Categoria:</label>
			<input type="text" disabled value="<?php echo $this->_tpl_vars['dados'][0]['nomeCategoria']; ?>
">

			<label><strong>Imagem:</strong></label>
			<?php if ($this->_tpl_vars['dados'][0]['caminhoImagem']): ?>
				<img src="<?php echo $this->_tpl_vars['dados'][0]['caminhoImagem']; ?>
" width="250" border="0">
			<?php else: ?>
				<label><strong>Não existe imagem cadastrada</strong></label>
			<?php endif; ?>
			
			<label><strong>Imagem Thumb:</strong></label>
			<?php if ($this->_tpl_vars['dados'][0]['caminhoImagemThumb']): ?>
				<img src="<?php echo $this->_tpl_vars['dados'][0]['caminhoImagemThumb']; ?>
" style="max-width: 200px;" border="0">
			<?php else: ?>
				<label><strong>Não existe imagem cadastrada</strong></label>
			<?php endif; ?>

			<label><strong>Noticia em destaque:</strong></label>
			<?php if ($this->_tpl_vars['dados'][0]['destaque']): ?> <label><strong>Sim</strong></label> <?php else: ?> <label><strong>Não</strong></label> <?php endif; ?>
		
			<br>
			<br>
			<a href="adm_noticias.php?acao=pesquisar" class="btn-form" ><< voltar</a>
		</form>
	</div>
	<!-- FIM Conteúdo -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/rodape.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>