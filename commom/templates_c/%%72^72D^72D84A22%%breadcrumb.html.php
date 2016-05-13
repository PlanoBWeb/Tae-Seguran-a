<?php /* Smarty version 2.6.12, created on 2016-05-06 11:29:56
         compiled from ../inc/breadcrumb.html */ ?>
<div class="width-default">
    <div class="bloco-breadcrumb">
        <div class="bg-bloco-breadcrumb"></div>
        <ul class="ul-breadcrumb" itemprop="breadcrumb"> 
            <li class="linha-breadcrumb">Você está em:</li>
            <li class="linha-breadcrumb"><a href="<?php echo $this->_tpl_vars['URL']; ?>
" class="link-breadcrumb">Home</a></li>
            
            <?php if ($this->_tpl_vars['url'][0] == 'servicos'): ?>
                <li class="linha-breadcrumb"><a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos" class="link-breadcrumb">• Serviços</a></li>
                <?php if ($this->_tpl_vars['url'][1] == "servicos-de-seguranca"): ?>
                    <li class="linha-breadcrumb"><a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/servicos-de-seguranca" class="link-breadcrumb">• Serviços de Segurança</a></li>
                <?php elseif ($this->_tpl_vars['url'][1] == "servicos-de-limpeza"): ?>
                    <li class="linha-breadcrumb"><a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/servicos-de-limpeza" class="link-breadcrumb">• Serviços de Limpeza</a></li>
                <?php elseif ($this->_tpl_vars['url'][1] == "servicos-terceirizados"): ?>
                    <li class="linha-breadcrumb"><a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/servicos-terceirizados" class="link-breadcrumb">• Serviços de Terceirizados</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['url'][2] <> ""): ?>
                    <li class="linha-breadcrumb linha-breadcrumb-ativo">• <?php echo $this->_tpl_vars['dados'][0]['nome']; ?>
</li>
                <?php endif; ?>
            <?php elseif ($this->_tpl_vars['url'][0] == "quem-somos"): ?>
                <li class="linha-breadcrumb">• Quem Somos</li>
                <?php if ($this->_tpl_vars['url'][1] == 'institucional'): ?>
                    <li class="linha-breadcrumb linha-breadcrumb-ativo">• Institucional</li>
                <?php elseif ($this->_tpl_vars['url'][1] == 'estrutura'): ?>
                    <li class="linha-breadcrumb linha-breadcrumb-ativo">• Estrutura</li>
                <?php elseif ($this->_tpl_vars['url'][1] == "responsabilidade-social"): ?>
                    <li class="linha-breadcrumb linha-breadcrumb-ativo">• Responsabilidade Social</li>
                <?php endif; ?>
            <?php elseif ($this->_tpl_vars['url'][0] == 'noticias'): ?>
                <li class="linha-breadcrumb linha-breadcrumb-ativo">• Noticias</li>
            <?php elseif ($this->_tpl_vars['url'][0] == 'noticia'): ?>
                <li class="linha-breadcrumb"><a href="<?php echo $this->_tpl_vars['URL']; ?>
noticias" class="link-breadcrumb">• Noticias</a></li>
                <li class="linha-breadcrumb linha-breadcrumb-ativo">• <?php echo $this->_tpl_vars['dados'][0]['titulo']; ?>
</li>
            <?php else: ?>
                <li class="linha-breadcrumb linha-breadcrumb-ativo">• <?php echo $this->_tpl_vars['urlFriendly']['breadcrumb']; ?>
</li>
            <?php endif; ?>            
            <!-- 
            <li class="linha-breadcrumb"><a href="<?php echo $this->_tpl_vars['URL']; ?>
" class="link-breadcrumb">• </a></li>
            <li class="linha-breadcrumb linha-breadcrumb-ativo">• </li>
            <li class="linha-breadcrumb"><a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos-de-seguranca" class="link-breadcrumb">• Serviços de Segurança</a></li>
            <li class="linha-breadcrumb linha-breadcrumb-ativo">• Escolta Armada</li> -->
        </ul>
    </div>
</div>