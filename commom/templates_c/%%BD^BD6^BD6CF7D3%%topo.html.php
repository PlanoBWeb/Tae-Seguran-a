<?php /* Smarty version 2.6.12, created on 2016-05-05 16:05:53
         compiled from admin_planobweb/topo.html */ ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="favicon.ico">
    <meta name="robots" content="noindex,follow"/>
    <link href="commom/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="commom/css/template.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="commom/css/estilo_admin.css">
    <script src="commom/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="commom/js/funcoes.js"></script>
    <script type="text/javascript" src="commom/js/tinymce/tinymce.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <title><?php echo $this->_tpl_vars['titulo']; ?>
 - ADM</title>
</head>
<body>
    <header>
        <div class="container-fluid bloco-topo-fixo">
            <div class="encapsula-topo-logo">
                <div class="topo-logo col-sm-12 col-md-6 col-lg-6">
                    <a class="navbar-brand" href="novo_adm_index.php"><img src="commom/img/logo.png" alt="logo PlanoBWeb" title="logo PlanoBWeb"></a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 hidden-xs">
                    <p class="hello-user">Olá <?php echo $this->_tpl_vars['nome']; ?>
</p>
                </div>
            </div>
            <nav class="navbar navbar-light bg-faded navbar-fixed-top">
                <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">&#9776;</button>
                <div class="encapsula-navbar">
                    <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
                        <ul class="nav navbar-nav">
                        
                            <li class="nav-item active dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Usuários</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="novo_adm_usuario.php?acao=pesquisar">Consultar</a>
                                    <a class="dropdown-item" href="novo_adm_usuario.php">Cadastrar</a>
                                </div>
                            </li>

                            <!-- <li class="nav-item">
                                <a class="nav-link" href="novo_adm_usuario.php?acao=senha">Alterar Senha</a>
                            </li> -->

                            <li class="nav-item active dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Minha Conta</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="novo_adm_usuario.php?acao=editar">Editar</a>    
                                    <a class="dropdown-item" href="novo_adm_usuario.php?acao=senha">Alterar Senha</a>
                                </div>
                            </li>

                            <li class="nav-item active dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Notícias</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="novo_adm_noticias.php?acao=pesquisar">Consultar</a>
                                    <a class="dropdown-item" href="novo_adm_noticias.php">Cadastrar</a>
                                </div>
                            </li>

                            <li class="nav-item active dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Publicações</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="novo_adm_publicacoes.php?acao=pesquisar">Consultar</a>
                                    <a class="dropdown-item" href="novo_adm_publicacoes.php">Cadastrar</a>
                                </div>
                            </li>


                            <!-- <li class="nav-item active dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Destaques</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="adm_destaque.php?acao=pesquisar">Consultar</a>
                                    <a class="dropdown-item" href="adm_destaque.php">Cadastrar</a>
                                </div>
                            </li> -->

                            <li class="nav-item">
                                <a class="nav-link" href="novo_adm_login.php?acao=logout">Sair</a>
                            </li>
                    
                          <!-- 
                          <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                          </li> -->
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>