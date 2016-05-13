<?php /* Smarty version 2.6.12, created on 2016-05-05 17:46:37
         compiled from trabalhe-conosco.html */ ?>
﻿<!DOCTYPE HTML>
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
    <div class="vitrine-index bg-servico-fale bg-interna">
        <div class="width-default">
            <p class="titulo-banner-interna">
                Trabalhe conosco
            </p>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/breadcrumb.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>
    </div>
    <section class="container">
        <div class="width-default mg-bt-50">
            <div class="col-xs-12 col-sm-3 col-md-3">
                <p class="txt-default">Quer trabalhar conosco? Preencha todos os campos obrigatórios do formulário ao lado, seus dados serão encaminhados para o departamento de recursos humanos da TAE e, se necessários, você será contatado, obrigado.</p>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-9 mg-tp-30-mob">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 pd-lf-none">
                        <h1 class="titulo-destaque">Trabalhe conosco</h1>
                        <div class="max-width-title"><span class="linha-titulo-cinza"></span><span class="linha-titulo-laranja"></span></div>
                    </div>
                </div>
                <div class="row bloco-atributos bloco-servico bd-none">
                    <!-- <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/trabalhe-conosco.jpg" alt="Trabalhe conosco" title="Trabalhe conosco"> -->
                    <form class="form-default form-default-trabalhe" enctype="multipart/form-data"  action="<?php echo $this->_tpl_vars['URL']; ?>
trabalhe-conosco-envia" name="dados" method="post" onSubmit="return enviardadosTrabalhe();">
                        <input type="hidden" name="acao" value="trabalhe-conosco">
                        <input type="hidden" name="pagina" value="<?php echo $this->_tpl_vars['breadcrumb']; ?>
">
                        <fieldset>
                            <legend>dados gerais</legend>
                            <div class="row mg-none">
                                <input class="field-default nome" type="text" name="pesNome" placeholder="Nome Completo">
                            </div>
                            <div class="row mg-none">
                                <div class="col-xs-12 col-sm-4 col-md-6 pd-lf-none-desk">     
                                    <div class="row mg-none">
                                        <p class="txt-form-trabalhe">*Cargo Pretendido</p>
                                    </div>
                                    <div class="row mg-none">                        
                                        <select multiple class="field-default field-default-half field-default-select form-home form-control" name="cargo[]" style="height: 89px !important;">
                                            <option value="1"  selected="selected" >Auxiliar de limpeza </option>
                                            <option value="4" >Auxiliar de Menutenção </option>
                                            <option value="5" >Auxiliar de Serviços Gerais </option>
                                            <option value="2" >Porteiro </option>
                                            <option value="9" >Recepcionista </option>
                                            <option value="6" >Representante Comercial </option>
                                            <option value="3" >Segurança  </option>
                                            <option value="7" >Supervisor Operacional </option>
                                            <option value="10" >Técnico de Instalação CFTV / Alarme </option>
                                            <option value="8" >Zelador </option>
                                        </select>
                                    </div>
                                    <div class="row mg-none"><input class="field-default nome" type="text" name="pesNacionalidade" placeholder="Nacionalidade"></div>
                                    <div class="row mg-none">
                                        <select class="field-default field-default-half field-default-select form-home form-control" name="pesEstadoCivil">
                                            <option value="">Estado Civil</option>
                                            <option value="Solteiro(a)">Solteiro(a)</option>
                                            <option value="Casado(a)">Casado(a)</option>
                                            <option value="Divorciado(a)">Divorciado(a)</option>
                                            <option value="Viúvo(a)">Viúvo(a)</option>
                                            <option value="Desquitado(a)">Desquitado(a)</option>
                                            <option value="Separado(a)">Separado(a)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 pd-rgt-none-desk">     
                                    <div class="row mg-none">
                                        <p class="txt-form-trabalhe">Data Nascimento</p>
                                    </div>
                                    <div class="row mg-none">
                                        <div class="col-xs-12 col-sm-4 col-md-4 pd-lf-none-desk">
                                            <select class="field-default field-default-half field-default-select form-home form-control" name="pesNascimentoDia">
                                                <option value="">Dia</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-12 col-sm-4 col-md-4 pd-none">
                                            <select class="field-default field-default-half field-default-select form-home form-control" name="pesNascimentoMes">
                                                <option value="">Mês</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                        </div>

                                        <div class="col-xs-12 col-sm-4 col-md-4 pd-rgt-none-desk">
                                            <select class="field-default field-default-half field-default-select form-home form-control" name="pesNascimentoAno">
                                                <option value="">Ano</option>
                                                <option value="1910">1910</option>
                                                <option value="1911">1911</option>
                                                <option value="1912">1912</option>
                                                <option value="1913">1913</option>
                                                <option value="1914">1914</option>
                                                <option value="1915">1915</option>
                                                <option value="1916">1916</option>
                                                <option value="1917">1917</option>
                                                <option value="1918">1918</option>
                                                <option value="1919">1919</option>
                                                <option value="1920">1920</option>
                                                <option value="1921">1921</option>
                                                <option value="1922">1922</option>
                                                <option value="1923">1923</option>
                                                <option value="1924">1924</option>
                                                <option value="1925">1925</option>
                                                <option value="1926">1926</option>
                                                <option value="1927">1927</option>
                                                <option value="1928">1928</option>
                                                <option value="1929">1929</option>
                                                <option value="1930">1930</option>
                                                <option value="1931">1931</option>
                                                <option value="1932">1932</option>
                                                <option value="1933">1933</option>
                                                <option value="1934">1934</option>
                                                <option value="1935">1935</option>
                                                <option value="1936">1936</option>
                                                <option value="1937">1937</option>
                                                <option value="1938">1938</option>
                                                <option value="1939">1939</option>
                                                <option value="1940">1940</option>
                                                <option value="1941">1941</option>
                                                <option value="1942">1942</option>
                                                <option value="1943">1943</option>
                                                <option value="1944">1944</option>
                                                <option value="1945">1945</option>
                                                <option value="1946">1946</option>
                                                <option value="1947">1947</option>
                                                <option value="1948">1948</option>
                                                <option value="1949">1949</option>
                                                <option value="1950">1950</option>
                                                <option value="1951">1951</option>
                                                <option value="1952">1952</option>
                                                <option value="1953">1953</option>
                                                <option value="1954">1954</option>
                                                <option value="1955">1955</option>
                                                <option value="1956">1956</option>
                                                <option value="1957">1957</option>
                                                <option value="1958">1958</option>
                                                <option value="1959">1959</option>
                                                <option value="1960">1960</option>
                                                <option value="1961">1961</option>
                                                <option value="1962">1962</option>
                                                <option value="1963">1963</option>
                                                <option value="1964">1964</option>
                                                <option value="1965">1965</option>
                                                <option value="1966">1966</option>
                                                <option value="1967">1967</option>
                                                <option value="1968">1968</option>
                                                <option value="1969">1969</option>
                                                <option value="1970">1970</option>
                                                <option value="1971">1971</option>
                                                <option value="1972">1972</option>
                                                <option value="1973">1973</option>
                                                <option value="1974">1974</option>
                                                <option value="1975">1975</option>
                                                <option value="1976">1976</option>
                                                <option value="1977">1977</option>
                                                <option value="1978">1978</option>
                                                <option value="1979">1979</option>
                                                <option value="1980">1980</option>
                                                <option value="1981">1981</option>
                                                <option value="1982">1982</option>
                                                <option value="1983">1983</option>
                                                <option value="1984">1984</option>
                                                <option value="1985">1985</option>
                                                <option value="1986">1986</option>
                                                <option value="1987">1987</option>
                                                <option value="1988">1988</option>
                                                <option value="1989">1989</option>
                                                <option value="1990">1990</option>
                                                <option value="1991">1991</option>
                                                <option value="1992">1992</option>
                                                <option value="1993">1993</option>
                                                <option value="1994">1994</option>
                                                <option value="1995">1995</option>
                                                <option value="1996">1996</option>
                                                <option value="1997">1997</option>
                                                <option value="1998">1998</option>
                                                <option value="1999">1999</option>
                                                <option value="2000">2000</option>
                                                <option value="2001">2001</option>
                                                <option value="2002">2002</option>
                                                <option value="2003">2003</option>
                                                <option value="2004">2004</option>
                                                <option value="2005">2005</option>
                                                <option value="2006">2006</option>
                                                <option value="2007">2007</option>
                                                <option value="2008">2008</option>
                                                <option value="2009">2009</option>
                                                <option value="2010">2010</option>
                                                <option value="2011">2011</option>
                                                <option value="2012">2012</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mg-none">
                                        <div class="col-xs-12 col-sm-12 col-md-12 pd-none">
                                            <select class="field-default field-default-half field-default-select form-home form-control" name="pesSexo" >
                                                <option value="">Sexo</option>
                                                <option value="m">Masculino</option>
                                                <option value="f">Feminino</option>                                                
                                            </select>
                                        </div>      
                                    </div>
                                    <div class="row mg-none">
                                        <div class="col-xs-12 col-sm-12 col-md-12 pd-none">
                                            <input class="field-default field-default-half" type="text" name="pesNatural" placeholder="Natural de">
                                        </div>      
                                    </div>
                                    <div class="row mg-none">
                                        <div class="col-xs-12 col-sm-6 col-md-6 pd-lf-none-desk">
                                            <select class="field-default field-default-half field-default-select form-home form-control" name="pesFilhos">
                                                <option value="">Filhos Dependentes</option>
                                                <option value="">Sim</option>
                                                <option value="">Não</option>
                                            </select>
                                        </div>  
                                        <div class="col-xs-12 col-sm-6 col-md-6 pd-rgt-none-desk">
                                            <select class="field-default field-default-half field-default-select form-home form-control" name="pesQuantos">
                                                <option value="">Quantos?</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>      
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Filiação</legend>
                            <div class="row mg-none">
                                <div class="col-xs-12 col-sm-12 col-md-12 pd-none">
                                    <input class="field-default field-default-half" type="text" name="filPai" placeholder="Nome do Pai">
                                </div>    
                            </div>
                            <div class="row mg-none">
                                <div class="col-xs-12 col-sm-12 col-md-12 pd-none">
                                    <input class="field-default field-default-half" type="text" name="filMae" placeholder="Nome da Mãe">
                                </div>    
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Dados Físicos</legend>
                            <div class="row mg-none">
                                <div class="col-xs-12 col-sm-6 col-md-6 pd-lf-none-desk">
                                    <input class="field-default field-default-half" type="text" name="fisPeso" placeholder="Peso">
                                </div>    
                                <div class="col-xs-12 col-sm-6 col-md-6 pd-rgt-none-desk">
                                    <input class="field-default field-default-half" type="text" name="fisAltura" placeholder="Altura">
                                </div>    
                            </div>
                            <div class="row mg-none">
                                <div class="col-xs-12 col-sm-4 col-md-4 pd-lf-none-desk">
                                    <select class="field-default field-default-half field-default-select form-home form-control" name="fisSapatos">
                                        <option value="">Sapato</option>
                                        <option value="32">32</option>
                                        <option value="33">33</option>
                                        <option value="34">34</option>
                                        <option value="35">35</option>
                                        <option value="36">36</option>
                                        <option value="37">37</option>
                                        <option value="38">38</option>
                                        <option value="39">39</option>
                                        <option value="40">40</option>
                                        <option value="41">41</option>
                                        <option value="42">42</option>
                                        <option value="43">43</option>
                                        <option value="44">44</option>
                                        <option value="45">45</option>
                                        <option value="46">46</option>
                                        <option value="47">47</option>
                                        <option value="48">48</option>
                                        <option value="49">49</option>
                                        <option value="50">50</option>
                                        <option value="51">51</option>
                                        <option value="52">52</option>
                                        <option value="53">53</option>
                                        <option value="54">54</option>
                                        <option value="55">55</option>
                                        <option value="56">56</option>
                                    </select>
                                </div>  
                                <div class="col-xs-12 col-sm-4 col-md-4 pd-none">
                                    <select class="field-default field-default-half field-default-select form-home form-control" name="fisCamisa">
                                        <option value="">Camisa</option>
                                        <option value="PP">PP</option>
                                        <option value="P">P</option>
                                        <option value="M">M</option>
                                        <option value="G">G</option>
                                        <option value="GG">GG</option>
                                    </select>
                                </div>  
                                <div class="col-xs-12 col-sm-4 col-md-4 pd-rgt-none-desk">
                                    <select class="field-default field-default-half field-default-select form-home form-control" name="fisCalca">
                                        <option value="">Calça</option>
                                        <option value="PP">PP</option>
                                        <option value="P">P</option>
                                        <option value="M">M</option>
                                        <option value="G">G</option>
                                        <option value="GG">GG</option>
                                    </select>
                                </div>     
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Escolaridade</legend>
                            <div class="row mg-none">
                                <select class="field-default field-default-half field-default-select form-home form-control" name="escEnsino">
                                    <option value="">Grau de Ensino</option>
                                      <option value="Superior completo">Superior completo</option>
                                      <option value="Superior incompleto">Superior incompleto</option>
                                      <option value="Ensino médio técnico (2º grau) completo">Ensino médio técnico (2º grau) completo</option>
                                      <option value="Ensino médio técnico (2º grau) incompleto">Ensino médio técnico (2º grau) incompleto</option>
                                      <option value="Ensino médio (2º grau) completo">Ensino médio (2º grau) completo</option>
                                      <option value="Ensino médio (2º grau) incompleto">Ensino médio (2º grau) incompleto</option>
                                      <option value="Ensino fundamental (1º grau) completo">Ensino fundamental (1º grau) completo</option>
                                      <option value="Ensino fundamental (1º grau) incompleto">Ensino fundamental (1º grau) incompleto</option>
                                      <option value="Não-alfabetizado">Não-alfabetizado</option>
                                </select>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Documentos</legend>
                            <div class="row mg-none">
                                <div class="col-xs-12 col-sm-4 col-md-6 pd-lf-none-desk">
                                    <div class="row mg-none">
                                        <p class="txt-form-trabalhe">&nbsp;</p>
                                    </div>
                                    <div class="row mg-none">
                                        <input class="field-default field-default-half" type="text" name="docRg" placeholder="RG">
                                    </div>
                                    <div class="row mg-none">
                                        <input class="field-default field-default-half" type="text" name="docCpf" placeholder="CPF" id="cpfcnpj" onkeypress='mascaraMutuario(this,cpfCnpj)' maxlength="15">
                                    </div>
                                </div>  
                                <div class="col-xs-12 col-sm-6 col-md-6 pd-rgt-none-desk">
                                    <div class="row mg-none">
                                        <p class="txt-form-trabalhe">Data de Expedição</p>
                                    </div>
                                    <div class="row mg-none">
                                        <div class="col-xs-12 col-sm-4 col-md-4 pd-lf-none-desk">
                                            <select class="field-default field-default-half field-default-select form-home form-control" name="docExpDia">
                                                <option value="">Dia</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-12 col-sm-4 col-md-4 pd-none">
                                            <select class="field-default field-default-half field-default-select form-home form-control" name="docExpMes">
                                                <option value="">Mês</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-12 col-sm-4 col-md-4 pd-rgt-none-desk">
                                            <select class="field-default field-default-half field-default-select form-home form-control" name="docExpAno">
                                                <option value="">Ano</option>
                                                <option value="1910">1910</option>
                                                <option value="1911">1911</option>
                                                <option value="1912">1912</option>
                                                <option value="1913">1913</option>
                                                <option value="1914">1914</option>
                                                <option value="1915">1915</option>
                                                <option value="1916">1916</option>
                                                <option value="1917">1917</option>
                                                <option value="1918">1918</option>
                                                <option value="1919">1919</option>
                                                <option value="1920">1920</option>
                                                <option value="1921">1921</option>
                                                <option value="1922">1922</option>
                                                <option value="1923">1923</option>
                                                <option value="1924">1924</option>
                                                <option value="1925">1925</option>
                                                <option value="1926">1926</option>
                                                <option value="1927">1927</option>
                                                <option value="1928">1928</option>
                                                <option value="1929">1929</option>
                                                <option value="1930">1930</option>
                                                <option value="1931">1931</option>
                                                <option value="1932">1932</option>
                                                <option value="1933">1933</option>
                                                <option value="1934">1934</option>
                                                <option value="1935">1935</option>
                                                <option value="1936">1936</option>
                                                <option value="1937">1937</option>
                                                <option value="1938">1938</option>
                                                <option value="1939">1939</option>
                                                <option value="1940">1940</option>
                                                <option value="1941">1941</option>
                                                <option value="1942">1942</option>
                                                <option value="1943">1943</option>
                                                <option value="1944">1944</option>
                                                <option value="1945">1945</option>
                                                <option value="1946">1946</option>
                                                <option value="1947">1947</option>
                                                <option value="1948">1948</option>
                                                <option value="1949">1949</option>
                                                <option value="1950">1950</option>
                                                <option value="1951">1951</option>
                                                <option value="1952">1952</option>
                                                <option value="1953">1953</option>
                                                <option value="1954">1954</option>
                                                <option value="1955">1955</option>
                                                <option value="1956">1956</option>
                                                <option value="1957">1957</option>
                                                <option value="1958">1958</option>
                                                <option value="1959">1959</option>
                                                <option value="1960">1960</option>
                                                <option value="1961">1961</option>
                                                <option value="1962">1962</option>
                                                <option value="1963">1963</option>
                                                <option value="1964">1964</option>
                                                <option value="1965">1965</option>
                                                <option value="1966">1966</option>
                                                <option value="1967">1967</option>
                                                <option value="1968">1968</option>
                                                <option value="1969">1969</option>
                                                <option value="1970">1970</option>
                                                <option value="1971">1971</option>
                                                <option value="1972">1972</option>
                                                <option value="1973">1973</option>
                                                <option value="1974">1974</option>
                                                <option value="1975">1975</option>
                                                <option value="1976">1976</option>
                                                <option value="1977">1977</option>
                                                <option value="1978">1978</option>
                                                <option value="1979">1979</option>
                                                <option value="1980">1980</option>
                                                <option value="1981">1981</option>
                                                <option value="1982">1982</option>
                                                <option value="1983">1983</option>
                                                <option value="1984">1984</option>
                                                <option value="1985">1985</option>
                                                <option value="1986">1986</option>
                                                <option value="1987">1987</option>
                                                <option value="1988">1988</option>
                                                <option value="1989">1989</option>
                                                <option value="1990">1990</option>
                                                <option value="1991">1991</option>
                                                <option value="1992">1992</option>
                                                <option value="1993">1993</option>
                                                <option value="1994">1994</option>
                                                <option value="1995">1995</option>
                                                <option value="1996">1996</option>
                                                <option value="1997">1997</option>
                                                <option value="1998">1998</option>
                                                <option value="1999">1999</option>
                                                <option value="2000">2000</option>
                                                <option value="2001">2001</option>
                                                <option value="2002">2002</option>
                                                <option value="2003">2003</option>
                                                <option value="2004">2004</option>
                                                <option value="2005">2005</option>
                                                <option value="2006">2006</option>
                                                <option value="2007">2007</option>
                                                <option value="2008">2008</option>
                                                <option value="2009">2009</option>
                                                <option value="2010">2010</option>
                                                <option value="2011">2011</option>
                                                <option value="2012">2012</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mg-none">
                                        <div class="col-xs-12 col-sm-12 col-md-12 pd-none">
                                            <input class="field-default field-default-half" type="text" name="docTitulo" placeholder="Título Eleitoral">
                                        </div>      
                                    </div>    
                                </div>   
                            </div>
                            <div class="row mg-none">
                                <div class="col-xs-12 col-sm-4 col-md-4 pd-lf-none-desk">
                                    <input class="field-default field-default-half" type="text" name="docPis" placeholder="PIS">
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 pd-none">
                                    <input class="field-default field-default-half" type="text" name="docCtps" placeholder="CTPS">
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 pd-rgt-none-desk">
                                    <input class="field-default field-default-half" type="text" name="docSerie" placeholder="Série">
                                </div>
                            </div> 
                            <div class="row mg-none">
                                <div class="col-xs-12 col-sm-4 col-md-4 pd-lf-none-desk">
                                    <select class="field-default field-default-half field-default-select form-home form-control" name="docCnh">
                                        <option value="">Carteira de Motorista</option>
                                        <option value="s">Sim</option>
                                        <option value="n">Não</option>
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 pd-none">
                                    <select class="field-default field-default-half field-default-select form-home form-control" name="docCategoria">
                                        <option value="">Categoria</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 pd-rgt-none-desk">
                                    <select class="field-default field-default-half field-default-select form-home form-control" name="docTipoSanguineo">
                                        <option value="">Tipo Sanguíneo</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                    </select>
                                </div>
                            </div>  
                        </fieldset>
                        <fieldset>
                            <legend>Localização</legend>
                            <div class="row mg-none">
                                <div class="col-xs-12 col-sm-6 col-md-6 pd-lf-none-desk">
                                    <input class="field-default field-default-half" type="text" name="locEndereco" placeholder="Endereço">
                                </div>  
                                <div class="col-xs-12 col-sm-6 col-md-6 pd-rgt-none-desk">
                                    <input class="field-default field-default-half" type="text" name="locBairro" placeholder="Bairro">
                                </div>    
                            </div>
                            <div class="row mg-none">
                                <div class="col-xs-12 col-sm-4 col-md-4 pd-lf-none-desk">
                                    <input class="field-default field-default-half" type="text" name="locNumero" placeholder="Número">
                                </div>  
                                <div class="col-xs-12 col-sm-4 col-md-4 pd-none">
                                    <input class="field-default field-default-half" type="text" name="locComplemento" placeholder="Complemento">
                                </div>  
                                <div class="col-xs-12 col-sm-4 col-md-4 pd-rgt-none-desk">
                                    <input class="field-default field-default-half" type="text" name="locCep1" placeholder="CEP">
                                </div>    
                            </div>
                            <div class="row mg-none">
                                <div class="col-xs-12 col-sm-6 col-md-6 pd-lf-none-desk">
                                    <select class="field-default field-default-half field-default-select form-home form-control" name="locEstado">
                                        <option value="">Estado</option>
                                        <option value="ac">Acre</option> 
                                        <option value="al">Alagoas</option> 
                                        <option value="am">Amazonas</option> 
                                        <option value="ap">Amapá</option> 
                                        <option value="ba">Bahia</option> 
                                        <option value="ce">Ceará</option> 
                                        <option value="df">Distrito Federal</option> 
                                        <option value="es">Espírito Santo</option> 
                                        <option value="go">Goiás</option> 
                                        <option value="ma">Maranhão</option> 
                                        <option value="mt">Mato Grosso</option> 
                                        <option value="ms">Mato Grosso do Sul</option> 
                                        <option value="mg">Minas Gerais</option> 
                                        <option value="pa">Pará</option> 
                                        <option value="pb">Paraíba</option> 
                                        <option value="pr">Paraná</option> 
                                        <option value="pe">Pernambuco</option> 
                                        <option value="pi">Piauí</option> 
                                        <option value="rj">Rio de Janeiro</option> 
                                        <option value="rn">Rio Grande do Norte</option> 
                                        <option value="ro">Rondônia</option> 
                                        <option value="rs">Rio Grande do Sul</option> 
                                        <option value="rr">Roraima</option> 
                                        <option value="sc">Santa Catarina</option> 
                                        <option value="se">Sergipe</option> 
                                        <option value="sp">São Paulo</option> 
                                        <option value="to">Tocantins</option> 
                                    </select>
                                </div>  
                                <div class="col-xs-12 col-sm-6 col-md-6 pd-rgt-none-desk">
                                    <input class="field-default field-default-half" type="text" name="locCidade" placeholder="Cidade">
                                </div>    
                            </div>
                        </fieldset> 
                        <fieldset>
                            <legend>Contatos</legend>
                            <div class="row mg-none">
                                <div class="col-xs-12 col-sm-6 col-md-6 pd-lf-none-desk">
                                    <input class="field-default field-default-half" type="text" name="conFone" placeholder="Telefone Fixo">
                                </div> 
                                <div class="col-xs-12 col-sm-6 col-md-6 pd-rgt-none-desk">
                                    <input class="field-default field-default-half" type="text" name="conCel" placeholder="Celular">
                                </div> 
                            </div>
                            <div class="row mg-none">
                                <div class="col-xs-12 col-sm-12 col-md-12 pd-none">
                                    <input class="field-default field-default-half" type="text" name="conEmail" placeholder="E-mail">
                                </div> 
                            </div>
                        </fieldset> 
                        <fieldset>
                            <legend>cursos</legend>
                            <div class="row mg-none">
                                <div class="col-xs-12 col-sm-7 col-md-7 pd-none">
                                    <p class="txt-form-trabalhe">Possui algum curso na área de segurança armada ou desarmada?</p>
                                </div>                                        
                                <div class="col-xs-12 col-sm-5 col-md-5 pd-none">
                                    <select class="field-default field-default-half field-default-select form-home form-control" name="curso">
                                        <option value="s">Sim</option>
                                        <option value="n">Não</option>
                                    </select>
                                </div>    
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Experiência</legend>
                            <div class="row mg-none">
                                <p class="txt-form-trabalhe">Descreva de forma resumida a sua experiência profissional</p>
                            </div>    
                            <div class="row mg-none">
                                <div class="col-xs-12 col-sm-12 col-md-12 pd-none">
                                    <textarea class="field-default field-default-half" name="experiencia" rows="3" style="height: 150px;"></textarea>
                                </div>    
                            </div>
                        </fieldset> 
                        <div class="row mg-none" style="margin-top: -30px !Important; margin-bottom: 30px !important;">
                            <input type="checkbox" name="declaro" value="s" style="float: left; margin-top: 10px;margin-right: 5px;"><p class="txt-form-trabalhe">Declaração de veracidade - Declaro que os dados acima são verdadeiros e são de minha inteira responsabilidade.</p>
                        </div>
                        <div class="row mg-none">
                            <input class="pull-right field-default-submit" type="submit" value="enviar" style="margin:0px;">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>    
</html>

<!-- <div class="row mg-none">

    <div class="col-xs-12 col-sm-4 col-md-6 pd-lf-none-desk">
        <input class="field-default field-default-half right-so-dek" type="text" name="telefone" placeholder="TELEFONE">
    </div>   
    <div class="col-xs-12 col-sm-4 col-md-6 pd-rgt-none-desk">
        <input class="field-default field-default-half right-so-dek" type="text" name="telefone" placeholder="TELEFONE">
    </div>   

</div>   -->