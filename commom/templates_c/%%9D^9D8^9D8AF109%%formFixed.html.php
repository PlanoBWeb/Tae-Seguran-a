<?php /* Smarty version 2.6.12, created on 2016-05-05 16:07:10
         compiled from ../inc/formFixed.html */ ?>
<form class="form-horizontal form-fale" name="contato" method="post" action="<?php echo $this->_tpl_vars['URL']; ?>
envia">
    <input type="hidden" name="acao" value="fale-conosco">
    <input type="hidden" name="pagina" value="<?php echo $this->_tpl_vars['breadcrumb']; ?>
">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 pd-mobile-form-home">
            <input type="text" name="nome" class="form-home form-control" placeholder="Nome">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 pd-mobile-form-home">
            <input type="email" name="email" class="form-home form-control" placeholder="Email">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 pd-mobile-form-home">
            <input id="telefone" type="text" name="telefone" class="form-home form-control" placeholder="Telefone">
        </div>
    </div>    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 pd-mobile-form-home">
            <select class="form-home form-control" name="onde" id="onde">
                <option value="">Onde nos encontrou</option>
                <option value="Google">Google</option>
                <option value="Indicação">Indicação</option>
                <option value="E-mail MKT">E-mail MKT</option>
                <option value="Outros">Outros</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 pd-mobile-form-home">
            <textarea name="msg" class="form-home text-area-home form-control" placeholder="Mensagem"></textarea>
        </div>
    </div>
    <div class="col-xs-12 col-sm-2 col-md-2 pull-right pd-mobile-form-home">
        <button type="submit" class="btn btn-default-site btn-formfixed pull-right" onclick="return enviardados();">enviar</button>
    </div>  
</form> 