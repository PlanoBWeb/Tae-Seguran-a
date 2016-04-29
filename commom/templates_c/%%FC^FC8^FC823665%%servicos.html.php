<?php /* Smarty version 2.6.12, created on 2016-04-29 16:50:46
         compiled from servicos.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'servicos.html', 92, false),)), $this); ?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index, follow">
        <meta name="description" content="" />
        <link href="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-tab.png" rel="icon">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/cssUrlAmigavel.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['URL']; ?>
commom/css/estilo.css">
        <title>Tae Segurança</title>
        <!-- Bootstrap -->
        <link href="<?php echo $this->_tpl_vars['URL']; ?>
commom/css/bootstrap.min.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
         <!-- vitrine -->
            <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['URL']; ?>
commom/css/vitrine/owl.carousel.css">
            <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['URL']; ?>
commom/css/vitrine/owl.theme.css">
            <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['URL']; ?>
commom/css/vitrine/owl.transitions.css">
        <!-- vitrine -->
    </head>
    <body itemscopeitemtype="http://schema.org/WebPage">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <!-- Inicio Banner -->
    <article class="col-xs-12 col-sm-12 col-md-12">
        
    </article> 
    <!-- Fim Banner -->
    <div class="vitrine-index bg-servico-interna">
        <div class="width-default">
            <p class="titulo-banner-interna">
                <?php if ($this->_tpl_vars['dados'][0]['urlAmigavelCat'] == "servicos-de-limpeza"): ?>
                    Serviços de limpeza
                <?php elseif ($this->_tpl_vars['dados'][0]['urlAmigavelCat'] == "servicos-de-seguranca"): ?>
                    Serviços de segurança
                <?php elseif ($this->_tpl_vars['dados'][0]['urlAmigavelCat'] == "servicos-terceirizados"): ?>
                    Serviços terceirizados
                <?php else: ?>
                    serviços
                <?php endif; ?>
            </p>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/breadcrumb.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>
    </div>
    <section class="container">
        <div class="width-default">
            <div class="row">
                <h1 class="titulo-destaque">Serviços</h1>
                <div class="max-width-title"><span class="linha-titulo-cinza"></span><span class="linha-titulo-laranja"></span></div>
            </div>
            <div class="row">
                <!-- <div class="col-xs-12 col-sm-3 col-md-3 pd-lf-none"></div> -->
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="bloco-atributos">
                        <div class="row pd-tp-30 bloco-servicos-seguranca">
                            <?php if ($this->_tpl_vars['dados']): ?>
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
                                    <div class="col-xs-12 col-sm-4 col-md-4 mg-bt-50">
                                        <div class="row">
                                            <?php if ($this->_tpl_vars['dados'][$this->_sections['i']['index']]['caminhoImagemThumb']): ?>                                            
                                                <?php if ($this->_tpl_vars['dados'][$this->_sections['i']['index']]['urlAmigavelCat'] == "servicos-de-seguranca"): ?>                                            
                                                    <div class="pull-left bd-tp-laranja">
                                                <?php elseif ($this->_tpl_vars['dados'][$this->_sections['i']['index']]['urlAmigavelCat'] == "servicos-terceirizados"): ?>
                                                    <div class="pull-left bd-tp-azul">
                                                <?php else: ?>
                                                    <div class="pull-left bd-tp-cinza">
                                                <?php endif; ?>                                                    
                                                    <a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['urlAmigavelCat']; ?>
/<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['urlAmigavel']; ?>
">
                                                        <?php if ($this->_tpl_vars['dados'][$this->_sections['i']['index']]['urlAmigavelCat'] == "servicos-de-seguranca"): ?>                                            
                                                            <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/bg-laranja.png" alt="<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['nome']; ?>
" title="<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['nome']; ?>
" class="bg-servicos">
                                                        <?php elseif ($this->_tpl_vars['dados'][$this->_sections['i']['index']]['urlAmigavelCat'] == "servicos-terceirizados"): ?>
                                                            <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/bg-azul.png" alt="<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['nome']; ?>
" title="<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['nome']; ?>
" class="bg-servicos">
                                                        <?php else: ?>
                                                            <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/bg-cinza.png" alt="<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['nome']; ?>
" title="<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['nome']; ?>
" class="bg-servicos">
                                                        <?php endif; ?>
                                                        <img src="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['caminhoImagemThumb']; ?>
" alt="<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['nome']; ?>
" title="<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['nome']; ?>
">
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <h2 class="titulo-servicos-home <?php if ($this->_tpl_vars['dados'][$this->_sections['i']['index']]['urlAmigavelCat'] == "servicos-terceirizados"): ?>titulo-servicos-home-azul<?php elseif ($this->_tpl_vars['dados'][$this->_sections['i']['index']]['urlAmigavelCat'] == "servicos-de-limpeza"): ?>titulo-servicos-home-cinza<?php endif; ?>"><a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['urlAmigavelCat']; ?>
/<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['urlAmigavel']; ?>
"><?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['nome']; ?>
</a></h2>
                                        <a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['urlAmigavelCat']; ?>
/<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['urlAmigavel']; ?>
" class="txt-servicos-home <?php if ($this->_tpl_vars['dados'][$this->_sections['i']['index']]['urlAmigavelCat'] == "servicos-terceirizados"): ?>txt-servicos-home-azul<?php elseif ($this->_tpl_vars['dados'][$this->_sections['i']['index']]['urlAmigavelCat'] == "servicos-de-limpeza"): ?>txt-servicos-home-cinza<?php endif; ?>"><?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['textoAbrev']; ?>
</a>
                                    </div>
                                <?php endfor; endif; ?>
                            <?php else: ?>
                                <div><div><ul>
                                <?php $this->assign('nmTipoServicos', ((is_array($_tmp=@$this->_tpl_vars['nmTipoServicos'])) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, ""))); ?>
                                <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dadosCategoriaServico']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                    <?php if ($this->_tpl_vars['nmTipoServicos'] <> $this->_tpl_vars['dadosMenuHeader'][$this->_sections['i']['index']]['urlAmigavelCat']): ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4 col-md-4 pd-none">
                                            <div class="row config-bloco-servico">
                                                <div class="img-veja-tbm pull-left">
                                                    <a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/<?php echo $this->_tpl_vars['dadosCategoriaServico'][$this->_sections['i']['index']]['urlAmigavelCategoria']; ?>
">
                                                        <img class="" src="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dadosCategoriaServico'][$this->_sections['i']['index']]['caminhoImagem']; ?>
" alt="<?php echo $this->_tpl_vars['dadosCategoriaServico'][$this->_sections['i']['index']]['nomeCat']; ?>
">
                                                    </a>
                                                </div>
                                                <h2 class="titulo-veja-tbm pull-left"><a class="pd-tp-30" href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/<?php echo $this->_tpl_vars['dadosCategoriaServico'][$this->_sections['i']['index']]['urlAmigavelCategoria']; ?>
"><?php echo $this->_tpl_vars['dadosCategoriaServico'][$this->_sections['i']['index']]['nomeCat']; ?>
</a></h2>
                                                <ul class="menu-servicos">
                                    <?php endif; ?>
                                                
                                                    <li class="linha-menu-servicos"><a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/<?php echo $this->_tpl_vars['dadosCategoriaServico'][$this->_sections['i']['index']]['urlAmigavelCategoria']; ?>
/<?php echo $this->_tpl_vars['dadosCategoriaServico'][$this->_sections['i']['index']]['urlAmigavel']; ?>
">  »  <?php echo $this->_tpl_vars['dadosCategoriaServico'][$this->_sections['i']['index']]['nome']; ?>
</a></li>
                                    <!-- <div class="col-xs-12 col-sm-5 col-md-5 pd-none">
                                        <div class="row config-bloco-servico">
                                            <div class="img-veja-tbm pull-left">
                                                <a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos-terceirizados">
                                                    <img class="" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/veja-tambem.jpg" alt="Serviços terceirizados">
                                                </a>
                                            </div>
                                            <h2 class="titulo-veja-tbm pull-left"><a class="pd-tp-30" href="<?php echo $this->_tpl_vars['URL']; ?>
servicos-terceirizados">Serviços terceirizados</a></h2>
                                        </div>
                                    </div> -->
                                    <?php $this->assign('nmTipoServicos', $this->_tpl_vars['dadosCategoriaServico'][$this->_sections['i']['index']]['urlAmigavelCat']); ?>
                                <?php endfor; endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Inicio  -->
            <div class="row">
               
            </div>
            <!-- Fim  -->
        </div>
    </section>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>    
</html>