<?php /* Smarty version 2.6.12, created on 2016-05-11 14:37:19
         compiled from ../inc/footer.html */ ?>
    <article class="blog-destaques-home">
        <div class="width-default">
            <div class="bloco-txt-assine">
                <p class="assine-news"><img class="pull-left" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-news.png" alt="">Assine nossa Newsletter</p>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-9 pd-none pull-right">
                <form class="form-newsletter" name="newsletter" action="<?php echo $this->_tpl_vars['URL']; ?>
envia" method="post" role="search">
                    <div>
                        <input type="hidden" name="acao" value="assine-news">
                        <div class="col-xs-12 col-sm-5 col-md-5">
                            <input type="text" name="nome_news" class="form-control pull-left">
                        </div>
                        <div class="col-xs-12 col-sm-5 col-md-5">
                            <input type="email" name="email_news" class="form-control pull-left">
                        </div>
                        <div class="col-xs-12 col-sm-2 col-md-2 bloco-envia-tablet">
                            <button type="submit" class="btn btn-default-site pull-right" onclick="return validaNewsletter();">
                                enviar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </article>
    <footer>
        <article class="rodape">
            <div class="width-default bloco-rodape">
                <div class="col-xs-12 col-sm-2 col-md-2 pd-none">
                    <a href="<?php echo $this->_tpl_vars['URL']; ?>
">
                        <img class="logo-footer" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/logo-footer.png" alt="Tae Segurança">
                    </a>
                </div>
                <div class="col-xs-12 col-sm-10 col-md-10 pd-none">
                    <div class="col-xs-12 col-sm-3 col-md-3 pd-none">
                        <div class="row">
                            <ul class="bloco-ul-footer">
                                <li class="linha-menu-footer linha-menu-footer-title">Quem somos</li>
                                <li class="linha-menu-footer"><a href="<?php echo $this->_tpl_vars['URL']; ?>
quem-somos/institucional" class="link-menu-footer">- Institucional</a></li>
                                <li class="linha-menu-footer"><a href="<?php echo $this->_tpl_vars['URL']; ?>
quem-somos/estrutura" class="link-menu-footer">- Estrutura</a></li>
                                <li class="linha-menu-footer"><a href="<?php echo $this->_tpl_vars['URL']; ?>
quem-somos/responsabilidade-social" class="link-menu-footer">- Responsabilidade Social </a></li>
                            </ul>
                        </div>
                        <div class="row">
                            <ul class="bloco-ul-footer">
                                <li class="linha-menu-footer linha-menu-footer-title">Serviços de Segurança</li>
                                <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dadosDestFooter']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                    <li class="linha-menu-footer"><a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/<?php echo $this->_tpl_vars['dadosDestFooter'][$this->_sections['i']['index']]['urlAmigavelCat']; ?>
/<?php echo $this->_tpl_vars['dadosDestFooter'][$this->_sections['i']['index']]['urlAmigavel']; ?>
" class="link-menu-footer">- <?php echo $this->_tpl_vars['dadosDestFooter'][$this->_sections['i']['index']]['nome']; ?>
</a></li>
                                <?php endfor; endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-5 pd-none">
                        <div class="col-xs-12 col-sm-8 col-md-8 pd-none">
                            <ul class="bloco-ul-footer">
                                <li class="linha-menu-footer linha-menu-footer-title">Serviços Terceirizados</li>
                                <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dadosDestFooter2']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                    <li class="linha-menu-footer"><a href="<?php echo $this->_tpl_vars['URL']; ?>
servicos/<?php echo $this->_tpl_vars['dadosDestFooter2'][$this->_sections['i']['index']]['urlAmigavelCat']; ?>
/<?php echo $this->_tpl_vars['dadosDestFooter2'][$this->_sections['i']['index']]['urlAmigavel']; ?>
" class="link-menu-footer">- <?php echo $this->_tpl_vars['dadosDestFooter2'][$this->_sections['i']['index']]['nome']; ?>
</a></li>
                                <?php endfor; endif; ?>
                            </ul>
                        </div>  
                        <div class="col-xs-12 col-sm-4 col-md-4 pd-none">
                            <ul class="bloco-ul-footer">
                                <!-- <li class="linha-menu-footer linha-menu-footer-title">Mídias</li>

                                <li class="linha-menu-footer"><a href="<?php echo $this->_tpl_vars['URL']; ?>
" class="link-menu-footer">- Notícias</a></li>
                                <li class="linha-menu-footer"><a href="<?php echo $this->_tpl_vars['URL']; ?>
" class="link-menu-footer">- Eventos</a></li>
                                <li class="linha-menu-footer pd-bt-20"><a href="<?php echo $this->_tpl_vars['URL']; ?>
" class="link-menu-footer">- Vídeos</a></li> -->
                                <li class="linha-menu-footer pd-bt-20"><a href="<?php echo $this->_tpl_vars['URL']; ?>
orcamentos" class="link-menu-footer linha-menu-footer-title">Orçamentos</a></li>
                                <li class="linha-menu-footer pd-bt-20"><span class="link-menu-footer linha-menu-footer-title">Chat on-line</span></li>
                                <li class="linha-menu-footer linha-menu-footer-title">Contato</li>
                                <li class="linha-menu-footer"><a href="<?php echo $this->_tpl_vars['URL']; ?>
fale-conosco" class="link-menu-footer">- Fale Conosco</a></li>
                                <li class="linha-menu-footer"><a href="<?php echo $this->_tpl_vars['URL']; ?>
trabalhe-conosco" class="link-menu-footer">- Trabalhe Conosco</a></li>
                                <li class="linha-menu-footer"><a href="<?php echo $this->_tpl_vars['URL']; ?>
localizacao" class="link-menu-footer">- Localização</a></li>
                            </ul>
                        </div>                
                        
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 pd-none">
                        <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.6935072986353!2d-46.72982638502324!3d-23.50754658470964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef8e096721233%3A0x6e30eb7d413cc1f8!2sR.+Dr.+Odon+Carlos+de+Figueiredo+Ferraz%2C+699+-+Parque+Sao+Domingos%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1461002788431" frameborder="0"  allowfullscreen></iframe>
                        <a href="https://goo.gl/maps/cAt66fQWpTG2" target="_blank" class="txt-end">Rua Dr. Odon Carlos de Figueiredo Ferraz, 699<br>Parque São Domingos - São Paulo – SP<br>CEP: 05121-000</a>
                    </div>
                </div>
       <!--  <ul class="bloco-ul-footer">
                        <li class="linha-menu-footer linha-menu-footer-title"></li>
                        <li class="linha-menu-footer"><a href="<?php echo $this->_tpl_vars['URL']; ?>
" class="link-menu-footer"></a></li>
                        <li class="linha-menu-footer"><a href="<?php echo $this->_tpl_vars['URL']; ?>
" class="link-menu-footer"></a></li>
                        <li class="linha-menu-footer"><a href="<?php echo $this->_tpl_vars['URL']; ?>
" class="link-menu-footer"></a></li>
                    </ul>            -->        
            </div>
        </article>
        <div class="bloco-direitos">
            <div class="encapsula-bloco-direitos">
                <div class="col-xs-12 col-sm-6 col-md-6 pd-none">
                    <p class="txt-direitos">TAE Segurança - Todos os direitos reservados  - 2016</p>
                </div>  
                <div class="col-xs-12 col-sm-6 col-md-6 pd-none">
                    <div class="bloco-dev">
                        <span class="link-rodape">Desenvolvimento: &nbsp;&nbsp;</span>
                        <a href="http://www.planobweb.com.br/" target="_blank"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/planob.jpg" alt="PlanoBWeb" title="PlanoBWeb"></a>
                    </div>
                </div>  
                <div class="col-xs-12 col-sm-2 col-md-2 pd-none"></div>
            </div>  
        </div>
    </footer>
    <!-- Form Fixex -->
    <div class="container-form-fixed">
        <!-- <p class="txt-talk">Fale conosco</p> -->
        <!-- <div class="row txt-bloco-fale">
            <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-fale.png" class="pull-left" alt="Fale Conosco" title="Fale Conosco">
            <p class="txt-fale txt-fale-fixed pull-left">Solicite um Orçamento</p>
            <div class="btn-open-box">
                <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-seta-open.png" alt="Fale Conosco" title="Fale Conosco">
            </div>
        </div> -->
        <!-- <div class="content-form-fixed">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/formFixed.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div> -->
    </div>

<!-- BEGIN JIVOSITE CODE <?php echo ' -->
<script type=\'text/javascript\'>
(function(){ var widget_id = \'lEqRY2DBDy\';var d=document;var w=window;function l(){
var s = document.createElement(\'script\'); s.type = \'text/javascript\'; s.async = true; s.src = \'//code.jivosite.com/script/widget/\'+widget_id; var ss = document.getElementsByTagName(\'script\')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState==\'complete\'){l();}else{if(w.attachEvent){w.attachEvent(\'onload\',l);}else{w.addEventListener(\'load\',l,false);}}})();</script>
<!-- '; ?>
 END JIVOSITE CODE -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo $this->_tpl_vars['URL']; ?>
commom/js/bootstrap.min.js"></script>
    <!-- vitrine -->
    <script src="<?php echo $this->_tpl_vars['URL']; ?>
commom/js/vitrine/owl.carousel.js"></script>
    <!-- vitrine -->
    <script src="<?php echo $this->_tpl_vars['URL']; ?>
commom/js/funcoes.js"></script>
    <script src="<?php echo $this->_tpl_vars['URL']; ?>
commom/js/geral.js"></script>
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"> </script>