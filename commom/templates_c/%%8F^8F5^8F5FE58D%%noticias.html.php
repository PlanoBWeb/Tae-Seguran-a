<?php /* Smarty version 2.6.12, created on 2016-04-19 14:40:28
         compiled from noticias.html */ ?>
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
    <div class="breadcrumb-faixa">
         <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/breadcrumb.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
    <section class="container">
        <div class="width-default">
            <div class="col-xs-12 col-sm-8 col-md-8 pd-lf-none-desk">
               <div class="row bloco-atributos bloco-servico">
                  <?php if ($this->_tpl_vars['dados']): ?>
                     <div class="row">
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
                           <div class="col-xs-12 col-sm-6 col-md-6 mg-bt-50 pd-lf-none espacamento-blocos">
                              <div class="row">
                                 <?php if ($this->_tpl_vars['dados'][$this->_sections['i']['index']]['caminhoImagemThumb']): ?>
                                    <div class="pull-left">
                                       <a href="<?php echo $this->_tpl_vars['URL']; ?>
noticia/<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['urlAmigavel']; ?>
">
                                          <img src="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['caminhoImagemThumb']; ?>
" alt="<?php echo $this->_tpl_vars['dados'][0]['titulo']; ?>
" title="<?php echo $this->_tpl_vars['dados'][0]['titulo']; ?>
">
                                       </a>
                                    </div>
                                 <?php endif; ?>
                              </div>
                              <h2 class="titulo-noticias"><a href="<?php echo $this->_tpl_vars['URL']; ?>
noticia/<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['urlAmigavel']; ?>
"><?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['tituloAbrev']; ?>
</a></h2>
                              <a href="<?php echo $this->_tpl_vars['URL']; ?>
noticia/<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['urlAmigavel']; ?>
" class="txt-servicos-home txt-servicos-home-azul"><?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['textoAbrev']; ?>
</a>
                              <a href="<?php echo $this->_tpl_vars['URL']; ?>
noticia/<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['urlAmigavel']; ?>
" class="txt-servicos-home txt-servicos-home-azul"><strong>Continue lendo  »</strong></a>
                           </div>
                        <?php endfor; endif; ?>
                     </div>
                     <!-- <div class="col-xs-12 col-sm-6 col-md-6 mg-bt-50 pd-lf-none espacamento-blocos">
                        <div class="row">
                            <div class="pull-left">
                                <a href="<?php echo $this->_tpl_vars['URL']; ?>
">
                                    <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/servico1.jpg" alt="Congresso Internacional de Segurança">
                                </a>
                            </div>
                        </div>
                        <h2 class="titulo-noticias"><a href="<?php echo $this->_tpl_vars['URL']; ?>
">Congresso Internacional de Segurança</a></h2>
                        <a href="<?php echo $this->_tpl_vars['URL']; ?>
" class="txt-servicos-home txt-servicos-home-azul">“This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet...</a>
                        <a href="<?php echo $this->_tpl_vars['URL']; ?>
" class="txt-servicos-home txt-servicos-home-azul"><strong>Continue lendo  »</strong></a>
                     </div> -->
                     <?php if ($this->_tpl_vars['totalPaginas'] > 1): ?>
                        <div class="row">
                           <div class="bloco-paginacao">
                              <?php if ($this->_tpl_vars['postBusca'] == ""): ?>
                                 <?php if ($this->_tpl_vars['anoPaginacao']): ?>
                                    <form method="post" action="" class="pull-left">
                                       <input type="hidden" name="ano" value="<?php echo $this->_tpl_vars['anoPaginacao']; ?>
">
                                       <input type="hidden" name="mes" value="<?php echo $this->_tpl_vars['mesPaginacao']; ?>
">
                                       <input type="hidden" name="p" value="<?php echo $this->_tpl_vars['Numpaginas'][1]; ?>
">
                                       <input class="link-paginacao" type="submit" value="&lt;&lt;">
                                    </form>
                                 <?php elseif ($this->_tpl_vars['idCatPaginacao']): ?>
                                    <form method="post" action="" class="pull-left">
                                       <input type="hidden" name="idCat" value="<?php echo $this->_tpl_vars['idCatPaginacao']; ?>
">
                                       <input type="hidden" name="p" value="<?php echo $this->_tpl_vars['Numpaginas'][1]; ?>
">
                                       <input class="link-paginacao" type="submit" value="&lt;&lt;">
                                    </form>
                                 <?php elseif ($this->_tpl_vars['tagPaginacao']): ?>
                                    <form method="post" action="" class="pull-left">
                                       <input type="hidden" name="tag" value="<?php echo $this->_tpl_vars['tagPaginacao']; ?>
">
                                       <input type="hidden" name="p" value="<?php echo $this->_tpl_vars['Numpaginas'][1]; ?>
">
                                       <input class="link-paginacao" type="submit" value="&lt;&lt;">
                                    </form>
                                 <?php else: ?>
                                    <form method="post" action="" class="pull-left">
                                       <input type="hidden" name="p" value="<?php echo $this->_tpl_vars['Numpaginas'][1]; ?>
">
                                       <input class="link-paginacao" type="submit" value="&lt;&lt;">
                                    </form>
                                 <?php endif; ?>
                              <?php endif; ?>
                              <?php unset($this->_sections['i']);
$this->_sections['i']['start'] = (int)1;
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['Numpaginas']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
if ($this->_sections['i']['start'] < 0)
    $this->_sections['i']['start'] = max($this->_sections['i']['step'] > 0 ? 0 : -1, $this->_sections['i']['loop'] + $this->_sections['i']['start']);
else
    $this->_sections['i']['start'] = min($this->_sections['i']['start'], $this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] : $this->_sections['i']['loop']-1);
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
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
                                 <?php if ($this->_tpl_vars['anoPaginacao']): ?>
                                    <form method="post" action="" class="pull-left">
                                       <input type="hidden" name="ano" value="<?php echo $this->_tpl_vars['anoPaginacao']; ?>
">
                                       <input type="hidden" name="mes" value="<?php echo $this->_tpl_vars['mesPaginacao']; ?>
">
                                       <input type="hidden" name="p" value="<?php echo $this->_tpl_vars['Numpaginas'][$this->_sections['i']['index']]; ?>
">
                                       <input class="link-paginacao <?php if ($this->_tpl_vars['Numpaginas'][$this->_sections['i']['index']] == $_GET['p']): ?> link-paginacao-ativo <?php endif; ?>" type="submit" value="<?php echo $this->_tpl_vars['Numpaginas'][$this->_sections['i']['index']]; ?>
">
                                    </form>
                                 <?php elseif ($this->_tpl_vars['idCatPaginacao']): ?>
                                    <form method="post" action="" class="pull-left">
                                       <input type="hidden" name="idCat" value="<?php echo $this->_tpl_vars['idCatPaginacao']; ?>
">
                                       <input type="hidden" name="p" value="<?php echo $this->_tpl_vars['Numpaginas'][$this->_sections['i']['index']]; ?>
">
                                       <input class="link-paginacao <?php if ($this->_tpl_vars['Numpaginas'][$this->_sections['i']['index']] == $_GET['p']): ?> link-paginacao-ativo <?php endif; ?>" type="submit" value="<?php echo $this->_tpl_vars['Numpaginas'][$this->_sections['i']['index']]; ?>
">
                                    </form>
                                 <?php elseif ($this->_tpl_vars['tagPaginacao']): ?>
                                    <form method="post" action="" class="pull-left">
                                       <input type="hidden" name="tag" value="<?php echo $this->_tpl_vars['tagPaginacao']; ?>
">
                                       <input type="hidden" name="p" value="<?php echo $this->_tpl_vars['Numpaginas'][$this->_sections['i']['index']]; ?>
">
                                       <input class="link-paginacao <?php if ($this->_tpl_vars['Numpaginas'][$this->_sections['i']['index']] == $_GET['p']): ?> link-paginacao-ativo <?php endif; ?>" type="submit" value="<?php echo $this->_tpl_vars['Numpaginas'][$this->_sections['i']['index']]; ?>
">
                                    </form>
                                 <?php elseif ($this->_tpl_vars['postBusca']): ?>
                                    <form method="post" action="" class="pull-left">
                                       <input type="hidden" name="search" value="<?php echo $this->_tpl_vars['postBusca']; ?>
">
                                       <input type="hidden" name="acao" value="busca">
                                       <input type="hidden" name="p" value="<?php echo $this->_tpl_vars['Numpaginas'][$this->_sections['i']['index']]; ?>
">
                                       <input class="link-paginacao <?php if ($this->_tpl_vars['Numpaginas'][$this->_sections['i']['index']] == $_GET['p']): ?> link-paginacao-ativo <?php endif; ?>" type="submit" value="<?php echo $this->_tpl_vars['Numpaginas'][$this->_sections['i']['index']]; ?>
">
                                    </form>
                                 <?php else: ?>
                                    <form method="post" action="" class="pull-left">
                                       <input type="hidden" name="p" value="<?php echo $this->_tpl_vars['Numpaginas'][$this->_sections['i']['index']]; ?>
">
                                       <input class="link-paginacao <?php if ($this->_tpl_vars['Numpaginas'][$this->_sections['i']['index']] == $_GET['p']): ?> link-paginacao-ativo <?php endif; ?>" type="submit" value="<?php echo $this->_tpl_vars['Numpaginas'][$this->_sections['i']['index']]; ?>
">
                                    </form>
                                 <?php endif; ?>
                              <?php endfor; endif; ?>
                              <?php if ($this->_tpl_vars['postBusca'] == ""): ?>
                                 <?php if ($this->_tpl_vars['anoPaginacao']): ?>
                                    <form method="post" action="" class="pull-left">
                                       <input type="hidden" name="ano" value="<?php echo $this->_tpl_vars['anoPaginacao']; ?>
">
                                       <input type="hidden" name="mes" value="<?php echo $this->_tpl_vars['mesPaginacao']; ?>
">
                                       <input type="hidden" name="p" value="<?php echo $this->_tpl_vars['ultimaPaginacao']; ?>
">
                                       <input class="link-paginacao" type="submit" value="&gt;&gt;">
                                    </form>
                                 <?php elseif ($this->_tpl_vars['idCatPaginacao']): ?>
                                    <form method="post" action="" class="pull-left">
                                       <input type="hidden" name="idCat" value="<?php echo $this->_tpl_vars['idCatPaginacao']; ?>
">
                                       <input type="hidden" name="p" value="<?php echo $this->_tpl_vars['ultimaPaginacao']; ?>
">
                                       <input class="link-paginacao" type="submit" value="&gt;&gt;">
                                    </form>
                                 <?php elseif ($this->_tpl_vars['tagPaginacao']): ?>
                                    <form method="post" action="" class="pull-left">
                                       <input type="hidden" name="tag" value="<?php echo $this->_tpl_vars['tagPaginacao']; ?>
">
                                       <input type="hidden" name="p" value="<?php echo $this->_tpl_vars['ultimaPaginacao']; ?>
">
                                       <input class="link-paginacao" type="submit" value="&gt;&gt;">
                                    </form>
                                 <?php else: ?>
                                    <form method="post" action="" class="pull-left">
                                       <input type="hidden" name="p" value="<?php echo $this->_tpl_vars['ultimaPaginacao']; ?>
">
                                       <input class="link-paginacao" type="submit" value="&gt;&gt;">
                                    </form>
                                 <?php endif; ?>
                              <?php endif; ?>   
                           </div>
                        </div>
                     <?php endif; ?>
                  <?php else: ?>
                     <br><br>
                     <p class="sem-resultado">Nenhum resultado encontrado!</p>
                  <?php endif; ?>
               </div>
            </div>
            <!-- Inicio  -->
            <div class="col-xs-12 col-sm-4 col-md-4 pd-lf-none">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/menu-lateral-blog.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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