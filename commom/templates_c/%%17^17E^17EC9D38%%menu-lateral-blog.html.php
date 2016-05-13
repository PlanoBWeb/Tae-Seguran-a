<?php /* Smarty version 2.6.12, created on 2016-05-05 16:07:15
         compiled from ../inc/menu-lateral-blog.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', '../inc/menu-lateral-blog.html', 19, false),)), $this); ?>
<div class="col-xs-12 col-sm-12 col-md-12 bloco-menu-lateral">
   <div class="encapsula-menu-lat-blog">
      <div class="bloco-links-blog">
         <div class="bloco-titulo-menu-lat"><p class="titulo-menu-lat-blog">notícias recentes</p><br></div>
         <?php if ($this->_tpl_vars['dadosMenuBlog']): ?>
            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dadosMenuBlog']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                  <div class="bloco-noticia-destaque">
                     <a class="txt-desc-noticias " href="<?php echo $this->_tpl_vars['URL']; ?>
noticia/<?php echo $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['urlAmigavel']; ?>
"><?php echo $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['titulo']; ?>
</a>
                  </div>
            <?php endfor; endif; ?>
         <?php else: ?>
            <p class="txt-desc-noticias ">Não existe destaques</p>
         <?php endif; ?>
      </div>
      <div class="bloco-links-blog">
         <div class="bloco-titulo-menu-lat"><p class="titulo-menu-lat-blog">Arquivos</p></div>
         <nav class="menu-lateral">
            <ul>
               <?php $this->assign('nmTipo', ((is_array($_tmp=@$this->_tpl_vars['nmTipo'])) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, ""))); ?>
               <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dadosMenuBlogAnoMes']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                     <?php if ($this->_tpl_vars['nmTipo'] <> $this->_tpl_vars['dadosMenuBlogAnoMes'][$this->_sections['i']['index']]['dataMes'][0]): ?>
                           </ul>
                        </li>
                        <li class="linha-menu-lateral"><a class="ano-menu-lateral link-menu-lateral " href=""><?php echo $this->_tpl_vars['dadosMenuBlogAnoMes'][$this->_sections['i']['index']]['dataMes'][0]; ?>
</a>
                        <ul class="submenu-ano">                     
                     <?php endif; ?>
                     <?php $this->assign('nmTipo', $this->_tpl_vars['dadosMenuBlogAnoMes'][$this->_sections['i']['index']]['dataMes'][0]); ?>

                     <?php $this->assign('nmTipoMes', ((is_array($_tmp=@$this->_tpl_vars['nmTipoMes'])) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, ""))); ?>
                     <?php $this->assign('nmTipoAno', ((is_array($_tmp=@$this->_tpl_vars['nmTipoAno'])) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, ""))); ?>
                        <?php if ($this->_tpl_vars['nmTipoMes'] <> $this->_tpl_vars['dadosMenuBlogAnoMes'][$this->_sections['i']['index']]['Mes'] || $this->_tpl_vars['nmTipoAno'] <> $this->_tpl_vars['dadosMenuBlogAnoMes'][$this->_sections['i']['index']]['dataMes'][0]): ?>
                           <li class="linha-menu-lateral">
                              <a class="link-menu-lateral " href="<?php echo $this->_tpl_vars['URL']; ?>
noticias/arquivos/<?php echo $this->_tpl_vars['dadosMenuBlogAnoMes'][$this->_sections['i']['index']]['dataMes'][0]; ?>
/<?php echo $this->_tpl_vars['dadosMenuBlogAnoMes'][$this->_sections['i']['index']]['dataMes'][1]; ?>
"> » <?php echo $this->_tpl_vars['dadosMenuBlogAnoMes'][$this->_sections['i']['index']]['Mes']; ?>
</a>
                           </li>
                        <?php endif; ?>
                     <?php $this->assign('nmTipoMes', $this->_tpl_vars['dadosMenuBlogAnoMes'][$this->_sections['i']['index']]['Mes']); ?>
                     <?php $this->assign('nmTipoAno', $this->_tpl_vars['dadosMenuBlogAnoMes'][$this->_sections['i']['index']]['dataMes'][0]); ?>
               <?php endfor; endif; ?>  
            </ul>
         </nav>
      </div>
      <!-- <div class="bloco-links-blog">
         <div class="bloco-titulo-menu-lat"><p class="titulo-menu-lat-blog">Categorias</p></div>
         <nav class="menu-lateral">
            <ul>
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
                  <li class="linha-menu-lateral"><a class="link-menu-lateral " href="<?php echo $this->_tpl_vars['URL']; ?>
noticias/categoria/<?php echo $this->_tpl_vars['dadosCategoria'][$this->_sections['i']['index']]['urlAmigavelCat']; ?>
"><?php echo $this->_tpl_vars['dadosCategoria'][$this->_sections['i']['index']]['nomeCategoria']; ?>
</a></li>
               <?php endfor; endif; ?>  
            </ul>
         </nav>
      </div> -->
      <div class="bloco-links-blog bloco-tags">
         <div class="bloco-titulo-menu-lat"><p class="titulo-menu-lat-blog">Tags</p></div>
         <div class="bloco-noticia-destaque">
            <?php $_from = $this->_tpl_vars['dadosTags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['dadosLinha']):
?>
               <a class="tags-lateral " href="<?php echo $this->_tpl_vars['URL']; ?>
noticias/tags/<?php echo $this->_tpl_vars['key']; ?>
"><?php echo $this->_tpl_vars['dadosLinha']; ?>
</a>
            <?php endforeach; endif; unset($_from); ?>
         </div>
      </div>
      <div class="bloco-links-blog bloco-tags">
         <form action="<?php echo $this->_tpl_vars['URL']; ?>
noticias" class="form-search form-busca-desk" method="post" name="form_search">
            <input type="hidden" name="acao" value="busca">
            <input type="hidden" class="urlAction" name="urlAction" value="<?php echo $this->_tpl_vars['URL']; ?>
noticias">
            <input class="input-busca" id="buscaValor" autocomplete="off" type="search" name="search" placeholder="PESQUISAR...">
            <input class="btn-ok cinza input-submit-busca font-normal fl-left" type="submit" value="ok">
            <div  id="carrega-busca" class="carrega-busca"></div>
         </form>
      </div> 
   </div>
</div>