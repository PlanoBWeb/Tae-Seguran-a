<?php /* Smarty version 2.6.12, created on 2016-05-10 11:10:40
         compiled from index.html */ ?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index, follow">
        <meta name="description" content="<?php echo $this->_tpl_vars['urlFriendly']['description']; ?>
" />
        <link href="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-tab.png" rel="icon">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/cssUrlAmigavel.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['URL']; ?>
commom/css/estilo.css">
        <title><?php echo $this->_tpl_vars['urlFriendly']['title']; ?>
</title>
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
    <body>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <!-- Inicio Banner -->
    <article class="hidden-xs col-sm-12 col-md-12">
        <div id="demo" class="vitrine-index">
            <div class="row">
                <div class="span12">
                    <div id="owl-demo" class="owl-carousel">
                        <div class="item">
                            <div class="width-default">
                                <div class="bloco-bg-banner"></div>
                                <div class="bloco-desc-banner">
                                    <p class="titulo-banner-home">Portaria Digital</p>
                                    <p class="subtitulo-banner-home">A sua portaria informatizada<br>Segurança e agilidade no dia a dia</p>
                                    <a class="saiba-mais-vitrine" href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/servicos-terceirizados/porteiro">Saiba mais</a>
                                </div>
                            </div>
                            <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/banner.jpg" alt="Portaria Digital - A sua portaria informatizada Segurança e agilidade no dia a dia" title="Portaria Digital - A sua portaria informatizada Segurança e agilidade no dia a dia">
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </article> 
    <!-- Fim Banner -->
    <!-- Inicio Destaque Baixo banner -->
    <div class="destaque-baixo-banner bloco-atributos">
        <div class="width-default">
            <h1 class="titulo-dest-home">TAE Segurança Privada e Pessoal • Escolta Armada •  Serviços Terceirizados</h1>
            <a class="saiba-mais-vitrine" href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/servicos-de-seguranca">Saiba mais</a>
        </div>
    </div>
    <!-- Fim Destaque Baixo banner -->
    <section class="container">
        <div class="width-default mg-bt-50">
            <!-- Inicio Servicos destaques -->
            <div class="row">
                <div class="row">
                    <?php if ($this->_tpl_vars['dadosDestFooter'][0]): ?>
                        <div class="width-mob-default col-xs-12 col-sm-4 col-md-4 mg-bt-50">
                            <div class="row">
                                <?php if ($this->_tpl_vars['dadosDestFooter'][0]['caminhoImagemThumb']): ?>
                                    <div class="pull-left bd-tp-laranja">
                                        <a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/<?php echo $this->_tpl_vars['dadosDestFooter'][0]['urlAmigavelCat']; ?>
/<?php echo $this->_tpl_vars['dadosDestFooter'][0]['urlAmigavel']; ?>
">
                                            <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/bg-laranja.png" alt="<?php echo $this->_tpl_vars['dadosDestFooter'][0]['nome']; ?>
" title="<?php echo $this->_tpl_vars['dadosDestFooter'][0]['nome']; ?>
" class="bg-servicos">
                                            <img src="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dadosDestFooter'][0]['caminhoImagemThumb']; ?>
" alt="<?php echo $this->_tpl_vars['dadosDestFooter'][0]['nome']; ?>
" title="<?php echo $this->_tpl_vars['dadosDestFooter'][0]['nome']; ?>
">
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <h2 class="titulo-servicos-home"><a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/<?php echo $this->_tpl_vars['dadosDestFooter'][0]['urlAmigavelCat']; ?>
/<?php echo $this->_tpl_vars['dadosDestFooter'][0]['urlAmigavel']; ?>
"><?php echo $this->_tpl_vars['dadosDestFooter'][0]['nome']; ?>
</a></h2>
                        </div>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['dadosDestFooter2'][0]): ?>
                        <div class="width-mob-default col-xs-12 col-sm-4 col-md-4 mg-bt-50">
                            <div class="row">
                                <?php if ($this->_tpl_vars['dadosDestFooter2'][0]['caminhoImagemThumb']): ?>
                                    <div class="pull-left bd-tp-azul">
                                        <a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/<?php echo $this->_tpl_vars['dadosDestFooter2'][0]['urlAmigavelCat']; ?>
/<?php echo $this->_tpl_vars['dadosDestFooter2'][0]['urlAmigavel']; ?>
">
                                            <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/bg-azul.png" alt="<?php echo $this->_tpl_vars['dadosDestFooter2'][0]['nome']; ?>
" title="<?php echo $this->_tpl_vars['dadosDestFooter2'][0]['nome']; ?>
" class="bg-servicos">    
                                            <img src="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dadosDestFooter2'][0]['caminhoImagemThumb']; ?>
" alt="<?php echo $this->_tpl_vars['dadosDestFooter2'][0]['nome']; ?>
" title="<?php echo $this->_tpl_vars['dadosDestFooter2'][0]['nome']; ?>
">
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <h2 class="titulo-servicos-home titulo-servicos-home-azul"><a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/<?php echo $this->_tpl_vars['dadosDestFooter2'][0]['urlAmigavelCat']; ?>
/<?php echo $this->_tpl_vars['dadosDestFooter2'][0]['urlAmigavel']; ?>
"><?php echo $this->_tpl_vars['dadosDestFooter2'][0]['nome']; ?>
</a></h2>
                        </div>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['dadosDestFooter3'][0]): ?>
                        <div class="width-mob-default col-xs-12 col-sm-4 col-md-4 mg-bt-50">
                            <div class="row">
                                <?php if ($this->_tpl_vars['dadosDestFooter3'][0]['caminhoImagemThumb']): ?>
                                    <div class="pull-left bd-tp-cinza">
                                        <a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/<?php echo $this->_tpl_vars['dadosDestFooter3'][0]['urlAmigavelCat']; ?>
/<?php echo $this->_tpl_vars['dadosDestFooter3'][0]['urlAmigavel']; ?>
">
                                            <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/bg-cinza.png" alt="<?php echo $this->_tpl_vars['dadosDestFooter3'][0]['nome']; ?>
" title="<?php echo $this->_tpl_vars['dadosDestFooter3'][0]['nome']; ?>
" class="bg-servicos">    
                                            <img src="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dadosDestFooter3'][0]['caminhoImagemThumb']; ?>
" alt="<?php echo $this->_tpl_vars['dadosDestFooter3'][0]['nome']; ?>
" title="<?php echo $this->_tpl_vars['dadosDestFooter3'][0]['nome']; ?>
">
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <h2 class="titulo-servicos-home titulo-servicos-home-cinza"><a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/<?php echo $this->_tpl_vars['dadosDestFooter3'][0]['urlAmigavelCat']; ?>
/<?php echo $this->_tpl_vars['dadosDestFooter3'][0]['urlAmigavel']; ?>
"><?php echo $this->_tpl_vars['dadosDestFooter3'][0]['nome']; ?>
</a></h2>
                        </div>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['dadosDestFooter'][1]): ?>
                        <div class="width-mob-default col-xs-12 col-sm-4 col-md-4 mg-bt-50">
                            <div class="row">
                                <?php if ($this->_tpl_vars['dadosDestFooter'][1]['caminhoImagemThumb']): ?>
                                    <div class="pull-left bd-tp-laranja">
                                        <a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/<?php echo $this->_tpl_vars['dadosDestFooter'][1]['urlAmigavelCat']; ?>
/<?php echo $this->_tpl_vars['dadosDestFooter'][1]['urlAmigavel']; ?>
">
                                            <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/bg-laranja.png" alt="<?php echo $this->_tpl_vars['dadosDestFooter'][1]['nome']; ?>
" title="<?php echo $this->_tpl_vars['dadosDestFooter'][1]['nome']; ?>
" class="bg-servicos">
                                            <img src="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dadosDestFooter'][1]['caminhoImagemThumb']; ?>
" alt="<?php echo $this->_tpl_vars['dadosDestFooter'][1]['nome']; ?>
" title="<?php echo $this->_tpl_vars['dadosDestFooter'][1]['nome']; ?>
">
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <h2 class="titulo-servicos-home"><a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/<?php echo $this->_tpl_vars['dadosDestFooter'][1]['urlAmigavelCat']; ?>
/<?php echo $this->_tpl_vars['dadosDestFooter'][1]['urlAmigavel']; ?>
"><?php echo $this->_tpl_vars['dadosDestFooter'][1]['nome']; ?>
</a></h2>
                        </div>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['dadosDestFooter2'][1]): ?>
                        <div class="width-mob-default col-xs-12 col-sm-4 col-md-4 mg-bt-50">
                            <div class="row">
                                <?php if ($this->_tpl_vars['dadosDestFooter2'][1]['caminhoImagemThumb']): ?>
                                    <div class="pull-left bd-tp-azul">
                                        <a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/<?php echo $this->_tpl_vars['dadosDestFooter2'][1]['urlAmigavelCat']; ?>
/<?php echo $this->_tpl_vars['dadosDestFooter2'][1]['urlAmigavel']; ?>
">
                                            <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/bg-azul.png" alt="<?php echo $this->_tpl_vars['dadosDestFooter2'][1]['nome']; ?>
" title="<?php echo $this->_tpl_vars['dadosDestFooter2'][1]['nome']; ?>
" class="bg-servicos">    
                                            <img src="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dadosDestFooter2'][1]['caminhoImagemThumb']; ?>
" alt="<?php echo $this->_tpl_vars['dadosDestFooter2'][1]['nome']; ?>
" title="<?php echo $this->_tpl_vars['dadosDestFooter2'][1]['nome']; ?>
">
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <h2 class="titulo-servicos-home titulo-servicos-home-azul"><a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/<?php echo $this->_tpl_vars['dadosDestFooter2'][1]['urlAmigavelCat']; ?>
/<?php echo $this->_tpl_vars['dadosDestFooter2'][1]['urlAmigavel']; ?>
"><?php echo $this->_tpl_vars['dadosDestFooter2'][1]['nome']; ?>
</a></h2>
                        </div>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['dadosDestFooter3'][1]): ?>
                        <div class="width-mob-default col-xs-12 col-sm-4 col-md-4 mg-bt-50">
                            <div class="row">
                                <?php if ($this->_tpl_vars['dadosDestFooter3'][1]['caminhoImagemThumb']): ?>
                                    <div class="pull-left bd-tp-cinza">
                                        <a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/<?php echo $this->_tpl_vars['dadosDestFooter3'][1]['urlAmigavelCat']; ?>
/<?php echo $this->_tpl_vars['dadosDestFooter3'][1]['urlAmigavel']; ?>
">
                                            <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/bg-cinza.png" alt="<?php echo $this->_tpl_vars['dadosDestFooter3'][1]['nome']; ?>
" title="<?php echo $this->_tpl_vars['dadosDestFooter3'][1]['nome']; ?>
" class="bg-servicos">    
                                            <img src="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dadosDestFooter3'][1]['caminhoImagemThumb']; ?>
" alt="<?php echo $this->_tpl_vars['dadosDestFooter3'][1]['nome']; ?>
" title="<?php echo $this->_tpl_vars['dadosDestFooter3'][1]['nome']; ?>
">
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <h2 class="titulo-servicos-home titulo-servicos-home-cinza"><a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/<?php echo $this->_tpl_vars['dadosDestFooter3'][1]['urlAmigavelCat']; ?>
/<?php echo $this->_tpl_vars['dadosDestFooter3'][1]['urlAmigavel']; ?>
"><?php echo $this->_tpl_vars['dadosDestFooter3'][1]['nome']; ?>
</a></h2>
                            <!-- <a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/<?php echo $this->_tpl_vars['dadosDestFooter3'][1]['urlAmigavelCat']; ?>
/<?php echo $this->_tpl_vars['dados2'][0]['urlAmigavel']; ?>
" class="txt-servicos-home"><?php echo $this->_tpl_vars['dadosDestFooter3'][1]['textoAbrev']; ?>
</a> -->
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <!-- Fim Servicos destaques -->
            <!-- Inicio Midias -->
            <div class="row bloco-encapsula-midias">
                <!-- Inicio Noticias -->
                <div class="col-xs-12 col-sm-8 col-md-8 bloco-midias bloco-midias-amarelo">
                    <div class="encapsula-titulo-midia">
                        <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/titulo-midias-noticias.png" alt="Notícias">
                        <p class="titulo-midias titulo-midias-not">Notícias</p>
                    </div>
                    <div id="owl-demo-noticias" class="owl-carousel">
                        <?php if ($this->_tpl_vars['dadosMenuBlog']): ?>
                            <div class="item">
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
                                    <div class="col-xs-12 col-sm-6 col-md-6 bd-rg-noticias">
                                        <div class="row noticia-img-destaque">
                                            <?php if ($this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['caminhoImagemThumb']): ?>
                                                <a href="<?php echo $this->_tpl_vars['URL']; ?>
noticia/<?php echo $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['urlAmigavel']; ?>
">
                                                    <img src="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['caminhoImagemThumb']; ?>
" alt="<?php echo $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['tituloAbrev']; ?>
">
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                        <a href="<?php echo $this->_tpl_vars['URL']; ?>
noticia/<?php echo $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['urlAmigavel']; ?>
" class="titulo-midia-destaque titulo-midia-destaque-tam"><?php echo $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['tituloAbrev']; ?>
</a>
                                        <a href="<?php echo $this->_tpl_vars['URL']; ?>
noticia/<?php echo $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['urlAmigavel']; ?>
" class="titulo-midia-destaque txt-midia-destaque"><?php echo $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['textoAbrev']; ?>
</a>
                                        <a href="<?php echo $this->_tpl_vars['URL']; ?>
noticia/<?php echo $this->_tpl_vars['dadosMenuBlog'][$this->_sections['i']['index']]['urlAmigavel']; ?>
" class="titulo-midia-destaque continue-lendo">Continue lendo  »</a>
                                    </div> 
                                
                                <?php if ($this->_sections['i']['index'] == 1): ?> 
                                    </div>
                                    <div class="item">
                                <?php endif; ?>     

                                <?php if ($this->_sections['i']['index'] == 3): ?> 
                                    <?php if ($this->_sections['i']['index'] == $this->_tpl_vars['totalNoticias']): ?>
                                        
                                    <?php else: ?>
                                        </div>
                                        <div class="item">
                                    <?php endif; ?>
                                <?php endif; ?>   
                                <?php if ($this->_sections['i']['index'] == 5): ?> 
                                    <?php if ($this->_sections['i']['index'] == $this->_tpl_vars['totalNoticias']): ?>
                                        
                                    <?php else: ?>
                                        </div>
                                        <div class="item">
                                    <?php endif; ?>
                                <?php endif; ?>      
                            <?php endfor; endif; ?>
                            </div>
                        <?php else: ?>
                            <p class="txt-default">Não existe destaques</p>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- Fim Noticias -->                
                <!-- Inicio depoimentos -->
                <div class="col-xs-12 col-sm-4 col-md-4 bloco-midias bloco-midias-azul">
                    <div class="encapsula-titulo-midia">
                        <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/titulo-midias.png" alt="depoimentos">
                        <p class="titulo-midias">depoimentos</p>
                    </div>
                    <div id="owl-demo-depoimentos" class="owl-carousel">
                        <div class="item">
                            <p class="titulo-midia-destaque txt-midia-destaque">
                                A equipe da TAE cuidou da segurança de nosso evento e foi um sucesso. Desde o planejamento até a execução tudo perfeito. Muito eficientes e discretos, tudo correu da melhor forma possível.
                            </p>
                            <!-- <div class="row">
                                <p class="titulo-midia-destaque pull-right mg-none">
                                    Muhtar Kent
                                </p>
                            </div>
                            <div class="row">
                                <p class="titulo-midia-destaque txt-midia-destaque pull-right pd-none">
                                    Coca Cola
                                </p>
                            </div> -->
                            <div class="row">
                                <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/presidente-coca-cola.jpg" alt="presidente coca cola" title="presidente coca cola" class="img-depoimento pull-left">
                                <p class="titulo-midia-destaque pull-left mg-none">
                                    Muhtar Kent<br>
                                    Coca Cola
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fim Noticias -->
            </div>
            <!-- Fim Midias -->            
            <!-- Inicio Institucional -->
            <div class="row institucional-home">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="row">
                        <p class="titulo-destaque">Institucional</p>
                        <div class="max-width-title"><span class="linha-titulo-cinza"></span><span class="linha-titulo-laranja"></span></div>
                    </div>
                    <a target="_blank" href="https://www.youtube.com/watch?v=8AXshLasJB8"><img class="bg-notebook" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/notebook.png" alt="Assinata ao video"></a>
                    <!-- <iframe class="video-home" src="https://www.youtube.com/embed/8AXshLasJB8" frameborder="0" allowfullscreen></iframe> -->
                    <!-- <p class="txt-default">This is Photoshop’s version of Lorem Ipsum</p> -->
                </div>
                <div class="col-xs-12 bloco-responsa-social">
                    <div class="row">
                        <p class="titulo-destaque">responsabilidade social</p>
                        <div class="max-width-title"><span class="linha-titulo-cinza"></span><span class="linha-titulo-laranja"></span></div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 pd-none">
                            <img class="img-resp-social" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/social1.jpg" alt="responsabilidade social">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 pd-none">
                            <img class="img-resp-social" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/social2.jpg" alt="responsabilidade social">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 pd-none">
                            <img class="img-resp-social" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/social3.jpg" alt="responsabilidade social">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 pd-none">
                            <img class="img-resp-social" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/social4.jpg" alt="responsabilidade social">
                        </div>
                    </div>
                    <p class="txt-default pull-left">Projeto Social Arcanjos da Noite</p><a class="saiba-mais-vitrine pull-right" href="<?php echo $this->_tpl_vars['URL']; ?>
quem-somos/responsabilidade-social">Saiba mais</a>
                </div>
            </div>
            <!-- Fim Institucional -->
        </div>
    </section>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>    
</html>