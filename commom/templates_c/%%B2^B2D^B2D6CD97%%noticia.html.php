<?php /* Smarty version 2.6.12, created on 2016-04-19 17:50:13
         compiled from noticia.html */ ?>
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
                        <img class="pull-left" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icone-treinamentos.png" alt="<?php echo $this->_tpl_vars['dados'][0]['nomeCategoria']; ?>
">
                        <p class="txt-por-not pull-left"><?php echo $this->_tpl_vars['dados'][0]['nomeCategoria']; ?>
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
                     </div>
                  </div>
                  <div class="row">
                     <br><br>
                     <p class="txt-default"><strong>Compartilhe!</strong></p>
                     <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/compartilhe.png" alt="Compartilhe!" title="Compartilhe!">
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