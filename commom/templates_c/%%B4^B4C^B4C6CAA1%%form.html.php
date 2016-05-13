<?php /* Smarty version 2.6.12, created on 2016-05-05 16:52:13
         compiled from ../inc/form.html */ ?>
<form class="form-default" action="<?php echo $this->_tpl_vars['URL']; ?>
envia" name="contato" method="post">
    <input type="hidden" name="acao" value="fale-conosco">
    <input type="hidden" name="pagina" value="<?php echo $this->_tpl_vars['breadcrumb']; ?>
">
    <?php if ($this->_tpl_vars['urlFriendly']['urlPagina'] == 'orcamentos'): ?>
        <div class="row mg-none">
            <input class="field-default nome" type="text" name="empresa" placeholder="EMPRESA">
        </div>
    <?php endif; ?>
    
    <div class="row mg-none">
        <input class="field-default nome" type="text" name="nome" placeholder="NOME">
    </div>
    <div class="row mg-none">
        <div class="col-xs-12 col-sm-12 col-md-12 pd-none">
            <input class="field-default field-default-half" type="text" name="email" placeholder="E-MAIL">
        </div>      
    </div>
    <div class="row mg-none">
        <div class="col-xs-12 col-sm-12 col-md-12 pd-none">
                <input class="field-default field-default-half right-so-dek" type="text" name="telefone" placeholder="TELEFONE">
        </div>      
    </div>      
    <div class="row mg-none">
        <div class="col-xs-12 col-sm-12 col-md-12 pd-none">
            <select class="field-default field-default-half field-default-select form-home form-control" name="onde" id="onde">
                <option value="">ONDE NOS ENCONTROU?</option>
                <option value="Google">Google</option>
                <option value="Indicação">Indicação</option>
                <option value="E-mail MKT">E-mail MKT</option>
                <option value="Outros">Outros</option>
            </select>
        </div>
    </div>
    <div class="row mg-none">
        <textarea class="field-default field-default-area" name="msg" placeholder="MENSAGEM"></textarea>
    </div>
    <div class="row mg-none">
        <input class="pull-right field-default-submit" type="submit" value="enviar" onclick="return enviardados();">
    </div>
</form>