<?php /* Smarty version 2.6.12, created on 2016-04-29 17:43:11
         compiled from servico.html */ ?>
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
            <div class="col-xs-12 col-sm-3 col-md-3 pd-lf-none">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/menu-lateral.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 pd-lf-none">
                        <h1 class="titulo-destaque"><?php echo $this->_tpl_vars['dados'][0]['nome']; ?>
</h1>

                        
                        <?php if ($this->_tpl_vars['dados'][0]['urlAmigavelCat'] == "servicos-de-limpeza"): ?>
                            <div class="max-width-title"><span class="linha-titulo-cinza"></span><span class="linha-titulo-laranja linha-titulo-cinza-escuro"></span></div>
                        <?php elseif ($this->_tpl_vars['dados'][0]['urlAmigavelCat'] == "servicos-terceirizados"): ?>
                            <div class="max-width-title"><span class="linha-titulo-cinza"></span><span class="linha-titulo-laranja linha-titulo-azul"></span></div>
                        <?php else: ?>
                            <div class="max-width-title"><span class="linha-titulo-cinza"></span><span class="linha-titulo-laranja"></span></div>
                        <?php endif; ?>
                        
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="atend-on bloco-atributos mg-none pull-right">
                            <img class="pull-left" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/solicite-orcamento.png" alt="solicite orçamento">    
                            <p class="txt-atend-on pull-left">Solicite um Orçamento Agora!</p>
                        </div>
                        <div class="content-form-fixed content-form-fixed-tae">
                            <img class="img-bg-orcamento" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/background-orcamento.png" alt="orçamento">
                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/formFixed.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        </div>
                    </div>
                </div>
                <div class="row bloco-atributos bloco-servico">
                    <div class="row">
                        <div class="block-center">
                            <?php if ($this->_tpl_vars['dados'][0]['urlAmigavelCat'] == "servicos-de-seguranca"): ?>                                            
                                <div class="pull-left bd-tp-laranja">
                                    <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/bg-laranja.png" alt="<?php echo $this->_tpl_vars['dados'][0]['nome']; ?>
" title="<?php echo $this->_tpl_vars['dados'][0]['nome']; ?>
" class="bg-servicos">
                            <?php elseif ($this->_tpl_vars['dados'][0]['urlAmigavelCat'] == "servicos-terceirizados"): ?>
                                <div class="pull-left bd-tp-azul">
                                    <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/bg-azul.png" alt="<?php echo $this->_tpl_vars['dados'][0]['nome']; ?>
" title="<?php echo $this->_tpl_vars['dados'][0]['nome']; ?>
" class="bg-servicos">
                            <?php else: ?>
                                <div class="pull-left bd-tp-cinza">
                                    <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/bg-cinza.png" alt="<?php echo $this->_tpl_vars['dados'][0]['nome']; ?>
" title="<?php echo $this->_tpl_vars['dados'][0]['nome']; ?>
" class="bg-servicos">
                            <?php endif; ?>    
                                <?php if ($this->_tpl_vars['dados'][0]['caminhoImagem']): ?>
                                    <img class="pd-bt-20" src="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dados'][0]['caminhoImagem']; ?>
" alt="<?php echo $this->_tpl_vars['dados'][0]['nome']; ?>
" title="<?php echo $this->_tpl_vars['dados'][0]['nome']; ?>
">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <p class="txt-default">
                        <!-- <?php echo $this->_tpl_vars['dados'][0]['texto']; ?>
 -->
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['dados'][0]['texto'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </p>
                </div>
                <!-- <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dadosVejaTbm']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <div class="col-xs-12 col-sm-4 col-md-4 pd-none">
                        <div class="row">
                            <div class="img-veja-tbm pull-left">
                                <a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/<?php echo $this->_tpl_vars['dadosVejaTbm'][$this->_sections['i']['index']]['urlAmigavelCat']; ?>
/<?php echo $this->_tpl_vars['dadosVejaTbm'][$this->_sections['i']['index']]['urlAmigavel']; ?>
">
                                    <img class="" src="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dadosVejaTbm'][$this->_sections['i']['index']]['caminhoImagemThumbMini']; ?>
" alt="<?php echo $this->_tpl_vars['dadosVejaTbm'][$this->_sections['i']['index']]['nome']; ?>
" title="<?php echo $this->_tpl_vars['dadosVejaTbm'][$this->_sections['i']['index']]['nome']; ?>
">
                                </a>
                            </div>
                            <h2 class="titulo-veja-tbm pull-left"><a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/<?php echo $this->_tpl_vars['dadosVejaTbm'][$this->_sections['i']['index']]['urlAmigavelCat']; ?>
/<?php echo $this->_tpl_vars['dadosVejaTbm'][$this->_sections['i']['index']]['urlAmigavel']; ?>
"><?php echo $this->_tpl_vars['dadosVejaTbm'][$this->_sections['i']['index']]['nome']; ?>
</a></h2>
                        </div>
                    </div>
                <?php endfor; endif; ?> -->


                <!-- SERVIÇOS RELACIONADOS -->
                <?php $this->assign('nmCategoria', ""); ?>
                <?php $this->assign('cor', ""); ?>
                <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['retornoRelacionados']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

                    <?php if ($this->_tpl_vars['nmCategoria'] <> $this->_tpl_vars['retornoRelacionados'][$this->_sections['i']['index']]['urlAmigavelCat']): ?>
                        <?php $this->assign('nmCategoria', $this->_tpl_vars['retornoRelacionados'][$this->_sections['i']['index']]['urlAmigavelCat']); ?>

                        <!-- VERIFICA O O TIPO DE SERVIÇO -->
                        <?php if ($this->_tpl_vars['nmCategoria'] == "servicos-de-seguranca"): ?>
                            <?php $this->assign('cor', 'laranja'); ?>
                            <div class="bloco-atributos bloco-veja-tbm">
                                <div class="row">
                                    <p class="titulo-destaque">Serviços Relacionados - SEGURANÇA</p>
                                    <div class="max-width-title"><span class="linha-titulo-cinza"></span><span class="linha-titulo-laranja"></span></div>
                                </div>
                                <div class="row pd-tp-10">
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['nmCategoria'] == "servicos-terceirizados"): ?>
                            <?php $this->assign('cor', 'azul'); ?>
                            <div class="bloco-atributos bloco-veja-tbm mg-tp-10">
                                <div class="row">
                                    <p class="titulo-destaque">Serviços Relacionados - TERCEIRIZADOS</p>
                                    <div class="max-width-title"><span class="linha-titulo-cinza"></span><span class="linha-titulo-laranja linha-titulo-azul"></span></div>
                                </div>
                                <div class="row pd-tp-10">
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['nmCategoria'] == "servicos-de-limpeza"): ?>
                            <?php $this->assign('cor', 'cinza'); ?>
                            <div class="bloco-atributos bloco-veja-tbm mg-tp-10">
                                <div class="row">
                                    <p class="titulo-destaque">Serviços Relacionados - LIMPEZA</p>
                                    <div class="max-width-title"><span class="linha-titulo-cinza"></span><span class="linha-titulo-laranja linha-titulo-cinza-escuro"></span></div>
                                </div>
                                <div class="row pd-tp-10">
                        <?php endif; ?>
                        
                    <?php endif; ?>



                                <div class="col-xs-12 col-sm-6 col-md-6 mg-bt-50 largura-default-bloco">
                                    <div class="row">
                                        <div class="pull-left bd-tp-<?php echo $this->_tpl_vars['cor']; ?>
">
                                            <a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/<?php echo $this->_tpl_vars['retornoRelacionados'][$this->_sections['i']['index']]['urlAmigavelCat']; ?>
/<?php echo $this->_tpl_vars['retornoRelacionados'][$this->_sections['i']['index']]['urlAmigavel']; ?>
">
                                                <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/bg-<?php echo $this->_tpl_vars['cor']; ?>
.png" alt="" title="" class="bg-servicos">
                                                <img src="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['retornoRelacionados'][$this->_sections['i']['index']]['caminhoImagemThumb']; ?>
" alt="<?php echo $this->_tpl_vars['retornoRelacionados'][$this->_sections['i']['index']]['nome']; ?>
" title="<?php echo $this->_tpl_vars['retornoRelacionados'][$this->_sections['i']['index']]['nome']; ?>
">
                                            </a>
                                        </div>
                                    </div>
                                    <h2 class="titulo-servicos-home"><a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/<?php echo $this->_tpl_vars['retornoRelacionados'][$this->_sections['i']['index']]['urlAmigavelCat']; ?>
/<?php echo $this->_tpl_vars['retornoRelacionados'][$this->_sections['i']['index']]['urlAmigavel']; ?>
"><?php echo $this->_tpl_vars['retornoRelacionados'][$this->_sections['i']['index']]['nome']; ?>
</a></h2>
                                </div>
                    <?php $this->assign('nmCategoria', $this->_tpl_vars['retornoRelacionados'][$this->_sections['i']['index']]['urlAmigavelCat']); ?>
                <?php endfor; endif; ?>

                <?php if ($this->_tpl_vars['nmCategoria'] <> ""): ?>
                        </div>
                    </div>
                <?php endif; ?>
                <!-- FIM - SERVIÇOS RELACIONADOS -->


                <!-- Serviços Relacionados - SEGURANÇA -->
                <!-- <div class="bloco-atributos bloco-veja-tbm">
                    <div class="row">
                        <p class="titulo-destaque">Serviços Relacionados - SEGURANÇA <?php echo $this->_tpl_vars['testeBR']; ?>
</p>
                        <div class="max-width-title"><span class="linha-titulo-cinza"></span><span class="linha-titulo-laranja"></span></div>
                    </div>
                    <div class="row pd-tp-10">
                        <div class="col-xs-12 col-sm-6 col-md-6 mg-bt-50 largura-default-bloco">
                            <div class="row">
                                <div class="pull-left bd-tp-laranja">
                                    <a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos">
                                        <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/bg-laranja.png" alt="" title="" class="bg-servicos">
                                        <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/servicos/servicos-terceirizados/jardinagem-pq.jpg" alt="" title="">
                                    </a>
                                </div>
                            </div>
                            <h2 class="titulo-servicos-home"><a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/">Segurança patrimonial nono ononon ononon</a></h2>
                        </div>
                    </div>
                </div> -->
                <!-- FIM - Serviços Relacionados - SEGURANÇA -->

                <!-- Serviços Relacionados - TERCEIRIZAÇÃO -->
                <!-- <div class="bloco-atributos bloco-veja-tbm mg-tp-10">
                    <div class="row">
                        <p class="titulo-destaque">veja também</p>
                        <div class="max-width-title"><span class="linha-titulo-cinza"></span><span class="linha-titulo-laranja linha-titulo-azul"></span></div>
                    </div>
                    <div class="row pd-tp-10">
                        <div class="col-xs-12 col-sm-6 col-md-6 mg-bt-50 largura-default-bloco">
                            <div class="row">
                                <div class="pull-left bd-tp-azul">
                                    <a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos">
                                        <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/bg-azul.png" alt="" title="" class="bg-servicos">
                                        <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/servico1.jpg" alt="" title="">
                                    </a>
                                </div>
                            </div>
                            <h2 class="titulo-servicos-home titulo-servicos-home-azul"><a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/">Segurança patrimonial</a></h2>
                        </div> 
                    </div>
                </div> -->
                <!-- FIM - Serviços Relacionados - TERCEIRIZAÇÃO -->

                <!-- Serviços Relacionados - LIMPEZA -->
                <!-- <div class="bloco-atributos bloco-veja-tbm mg-tp-10">
                    <div class="row">
                        <p class="titulo-destaque">veja também</p>
                        <div class="max-width-title"><span class="linha-titulo-cinza"></span><span class="linha-titulo-laranja linha-titulo-cinza-escuro"></span></div>
                    </div>
                    <div class="row pd-tp-10">
                        <div class="col-xs-12 col-sm-6 col-md-6 mg-bt-50 largura-default-bloco">
                            <div class="row">
                                <div class="pull-left bd-tp-cinza">
                                    <a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos">
                                        <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/bg-cinza.png" alt="" title="" class="bg-servicos">
                                        <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/servico1.jpg" alt="" title="">
                                    </a>
                                </div>
                            </div>
                            <h2 class="titulo-servicos-home titulo-servicos-home-cinza"><a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/">Segurança patrimonial</a></h2>
                        </div> 
                    </div>
                </div> -->
                <!-- FIM - Serviços Relacionados - LIMPEZA -->
                    
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