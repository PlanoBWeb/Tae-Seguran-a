<?php /* Smarty version 2.6.12, created on 2016-04-29 17:50:08
         compiled from ../inc/menu-lateral-quemsomos.html */ ?>
<!-- Desktop -->
<ul class="bloco-menu-lat hidden-xs">
    <li class="linha-menu-lat-title">
        <a class="link-menu-lat <?php if ($this->_tpl_vars['url'][1] == 'institucional'): ?> link-menu-lat-ativo<?php endif; ?>" href="<?php echo $this->_tpl_vars['URL']; ?>
quem-somos/institucional">Institucional</a>
        <?php if ($this->_tpl_vars['url'][1] == 'institucional'): ?>
            <img class="seta-menuLat-ativo" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-menu-lat.png" alt="Institucional" title="Institucional">
        <?php endif; ?>
        <a class="link-menu-lat <?php if ($this->_tpl_vars['url'][1] == 'estrutura'): ?> link-menu-lat-ativo<?php endif; ?>" href="<?php echo $this->_tpl_vars['URL']; ?>
quem-somos/estrutura">Estrutura</a>
        <?php if ($this->_tpl_vars['url'][1] == 'estrutura'): ?>
            <img class="seta-menuLat-ativo" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-menu-lat.png" alt="Estrutura" title="Estrutura">
        <?php endif; ?>
        <a class="link-menu-lat <?php if ($this->_tpl_vars['url'][1] == "responsabilidade-social"): ?> link-menu-lat-ativo<?php endif; ?>" href="<?php echo $this->_tpl_vars['URL']; ?>
quem-somos/responsabilidade-social">Responsabilidade Social</a>
        <?php if ($this->_tpl_vars['url'][1] == "responsabilidade-social"): ?>
            <img class="seta-menuLat-ativo" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta-menu-lat.png" alt="Responsabilidade Social" title="Responsabilidade Social">
        <?php endif; ?>
    </li>
</ul>
<!-- Mobile -->
<form class="visible-xs-block" action="<?php echo $this->_tpl_vars['URL']; ?>
">
    <select class="form-control select-menuLat-mob" name="menu-lateral">
        <option>Escolha um servico</option>
        <option value="<?php echo $this->_tpl_vars['URL']; ?>
quem-somos/institucional">Institucional</option>
        <option value="<?php echo $this->_tpl_vars['URL']; ?>
quem-somos/estrutura">Estrutura</option>
        <option value="<?php echo $this->_tpl_vars['URL']; ?>
quem-somos/responsabilidade-social">Responsabilidade Social</option>
    </select>
</form>