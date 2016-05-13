<?php /* Smarty version 2.6.12, created on 2016-05-10 10:33:59
         compiled from noticia.html */ ?>
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
        <link href="<?php echo $this->_tpl_vars['URL']; ?>
commom/css/bootstrap.min.css" rel="stylesheet">
        <meta property="og:url"           content="<?php echo $this->_tpl_vars['urlCompleta']; ?>
" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="<?php echo $this->_tpl_vars['dados'][0]['titulo']; ?>
" />
        <meta property="og:description"   content="<?php echo $this->_tpl_vars['dados'][0]['not_texto']; ?>
" />
        <meta property="og:image"         content="http://www.taeseguranca.com.br/homologacao/<?php echo $this->_tpl_vars['dados'][0]['caminhoImagem']; ?>
" />
        <!-- Bootstrap -->
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
        <link rel="canonical" href="http://www.taeseguranca.com.br/homologacao/" />
        <script src="https://apis.google.com/js/platform.js" async defer></script>
    </head>
    <body itemscopeitemtype="http://schema.org/WebPage">
        <div id="fb-root"></div>
        <?php echo '
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.6";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, \'script\', \'facebook-jssdk\'));</script>
        '; ?>

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
    <section class="container pd-mob">
        <div class="width-default mg-bt-50">
            <div class="col-xs-12 col-sm-8 col-md-8 pd-lf-none-desk">
               <?php if ($this->_tpl_vars['dados']): ?>
                  <div class="row bloco-atributos bloco-servico">
                     <div class="row">
                        <?php if ($this->_tpl_vars['dados'][0]['caminhoImagem']): ?><img class="img-not-ind" src="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dados'][0]['caminhoImagem']; ?>
" title="<?php echo $this->_tpl_vars['dados'][0]['titulo']; ?>
" alt="<?php echo $this->_tpl_vars['dados'][0]['titulo']; ?>
"><?php endif; ?>
                     </div>
                     <div class="row detalhes-not">
                        <img class="pull-left" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icone-data.png" alt="<?php echo $this->_tpl_vars['dados'][0]['dataMes'][2]; ?>
 <?php echo $this->_tpl_vars['dados'][0]['Mes']; ?>
 <?php echo $this->_tpl_vars['dados'][0]['dataMes'][0]; ?>
">
                        <p class="txt-por-not pull-left"><?php echo $this->_tpl_vars['dados'][0]['dataMes'][2]; ?>
 <?php echo $this->_tpl_vars['dados'][0]['Mes']; ?>
 <?php echo $this->_tpl_vars['dados'][0]['dataMes'][0]; ?>
</p>
                        <?php if ($this->_tpl_vars['dados'][0]['por']): ?>
                           <img class="pull-left" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icone-treinamentos.png" alt="<?php echo $this->_tpl_vars['dados'][0]['por']; ?>
">
                           <p class="txt-por-not pull-left"><?php echo $this->_tpl_vars['dados'][0]['por']; ?>
</p>
                        <?php endif; ?>
                     </div>
                     <div class="row">
                        <h1 class="titulo-not"><?php echo $this->_tpl_vars['dados'][0]['titulo']; ?>
</h1>
                        <p class="txt-default"><?php echo $this->_tpl_vars['dados'][0]['texto']; ?>
</p>
                        <br><br>
                        <a class="saiba-mais-vitrine pull-right" href="javascript:history.back()">Voltar</a>
                     </div>
                  </div>
                  <div class="row">
                     <br><br>
                     <p class="txt-default"><strong>Compartilhe!</strong></p>
                     <!-- <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/compartilhe.png" alt="Compartilhe!" title="Compartilhe!"> -->
                     <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4" style="max-width: 120px !important; overflow:hidden !important; padding-left: 0px;">
                            <!-- <div class="fb-like" style="width: 60px"></div>  -->
                            <div class="fb-share-button" data-href="<?php echo $this->_tpl_vars['urlCompleta']; ?>
" data-layout="button"></div>
                        </div>
                        <div class="col-xs-12 col-sm-2 col-md-2 btn-twitter" style="padding-left: 0px; padding-right: 0px;">
                            <a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo $this->_tpl_vars['urlCompleta']; ?>
"  data-count="horizontal" data-lang="pt">Tweetar</a> 
                        </div>
                        <div class="col-xs-12 col-sm-2 col-md-2" style="padding-left: 0px;width: 60px;">
                            <g:plusone href="<?php echo $this->_tpl_vars['urlCompleta']; ?>
"></g:plusone>
                        </div>
                     </div>
                  </div>               
               <?php else: ?>
                  <br><br>
                  <p class="sem-resultado">Nenhum resultado encontrado!</p>
               <?php endif; ?>
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