<?php /* Smarty version 2.6.12, created on 2016-04-28 14:02:34
         compiled from ../inc/menu-lateral.html */ ?>
<!-- Desktop -->
<ul class="bloco-menu-lat hidden-xs">
    <!-- <li class="linha-menu-lat-title">
        <a class="link-menu-lat link-menu-lat-ativo" href="<?php echo $this->_tpl_vars['URL']; ?>
escolta-armada">Escolta Armada</a>
        <ul class="block-sub-lat">
            <li class="linha-menu-lat">
                <a href="<?php echo $this->_tpl_vars['URL']; ?>
">servico1</a> 
            </li>
        </ul>
    </li> -->
    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dadosMenu']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        <li class="linha-menu-lat-title">
            <a class="link-menu-lat <?php if ($this->_tpl_vars['url'][2] == $this->_tpl_vars['dadosMenu'][$this->_sections['i']['index']]['urlAmigavel']): ?> link-menu-lat-ativo<?php endif; ?>" href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/<?php echo $this->_tpl_vars['dadosMenu'][$this->_sections['i']['index']]['urlAmigavelCat']; ?>
/<?php echo $this->_tpl_vars['dadosMenu'][$this->_sections['i']['index']]['urlAmigavel']; ?>
"><?php echo $this->_tpl_vars['dadosMenu'][$this->_sections['i']['index']]['nome']; ?>
</a>
            
            <?php if ($this->_tpl_vars['url'][2] == $this->_tpl_vars['dadosMenu'][$this->_sections['i']['index']]['urlAmigavel']): ?>
                <img class="seta-menuLat-ativo" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-menu-lat.png" alt="<?php echo $this->_tpl_vars['dadosMenu'][$this->_sections['i']['index']]['nome']; ?>
">
            <?php endif; ?>
        </li>
    <?php endfor; endif; ?>
</ul>


<!-- Mobile -->
<form class="visible-xs-block" action="<?php echo $this->_tpl_vars['URL']; ?>
">
    <select class="form-control select-menuLat-mob" name="menu-lateral">
        <option>Escolha um servico</option>
        <option value="<?php echo $this->_tpl_vars['URL']; ?>
escolta-armada">Escolta Armada</option>
        <option value="<?php echo $this->_tpl_vars['URL']; ?>
">Segurança Patrimonial</option>
        <option value="<?php echo $this->_tpl_vars['URL']; ?>
">Segurança Pessoal</option>
        <option value="<?php echo $this->_tpl_vars['URL']; ?>
">Segurança para Eventos</option>
        <option value="<?php echo $this->_tpl_vars['URL']; ?>
">Segurança Eletrônica / CFTV</option>
        <option value="<?php echo $this->_tpl_vars['URL']; ?>
">Monitoramento de Alarmes</option>
        <option value="<?php echo $this->_tpl_vars['URL']; ?>
">Portaria Digital</option>
    </select>
</form>