<?php /* Smarty version 2.6.12, created on 2016-05-05 16:05:53
         compiled from admin_planobweb/rodape.html */ ?>
    <script>window.jQuery || document.write('<script src="commom/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="commom/dist/js/bootstrap.min.js"></script>
</body>
</html>
<?php echo '
    <script type="text/javascript">

        $(\'.ativa-select-acoes\').click(function(e) {
            e.preventDefault();
            var bloco_acoes = $(this).next( ".select-acoes" ).slideToggle(\'slow\')
            .siblings(\'.tgl:visible\').slideToggle(\'fast\');
        });
        
        $(document).mouseup(function (e){
            var bloco_acoes = $( ".select-acoes" );
            if( !bloco_acoes.is(e.target) && bloco_acoes.has(e.target).length === 0){
                $( bloco_acoes ).hide();
            }
        });


        //Valida Notícias
        function checa()
        {
            frm = document.frm_cadastro;
            msg = "Preencha o campo ";
            
            if(trim(frm.titulo.value)=="")
            {
                alert(msg + "Titulo!");
                frm.titulo.focus();
                return false;
            }

            if(trim(frm.data.value)=="")
            {
                alert(msg + "Data!");
                frm.data.focus();
                return false;
            }

            // if(trim(frm.texto.value)=="")
            // {
            //     alert(msg + "Texto!");
            //     frm.texto.focus();
            //     return false;
            // }

            if(trim(frm.categoria.value)=="" || trim(frm.categoria.value)=="Seleciona uma categoria")
            {
                alert(msg + "Categoria!");
                frm.categoria.focus();
                return false;
            }

            // if(!frm.id.value){
            //     if(trim(frm.arquivo.value)=="")
            //     {
            //         alert(msg + "Imagem!");
            //         frm.arquivo.focus();
            //         return false;
            //     }   

            //     if(trim(frm.arquivo2.value)=="")
            //     {
            //         alert(msg + "Imagem Thumb!");
            //         frm.arquivo2.focus();
            //         return false;
            //     }        
            // }
        
            frm.submit();
        }
        //Valida Notícias

        //Valida Publicações
        function checaPub()
        {
            frm = document.frm_cadastro;
            msg = "Preencha o campo ";

            if(trim(frm.tipo.value)=="" || trim(frm.tipo.value)=="Seleciona um tipo")
            {
                alert(msg + "Categoria!");
                frm.tipo.focus();
                return false;
            }
            
            if(trim(frm.titulo.value)=="")
            {
                alert(msg + "Titulo!");
                frm.titulo.focus();
                return false;
            }

            if(trim(frm.numPub.value)=="")
            {
                alert(msg + "Numero publicação!");
                frm.numPub.focus();
                return false;
            }

            if(trim(frm.data.value)=="")
            {
                alert(msg + "Data!");
                frm.data.focus();
                return false;
            }

            // if(trim(frm.texto.value)=="")
            // {
            //     alert(msg + "Texto!");
            //     frm.texto.focus();
            //     return false;
            // }

            if(trim(frm.categoria.value)=="" || trim(frm.categoria.value)=="Seleciona uma categoria")
            {
                alert(msg + "Categoria!");
                frm.categoria.focus();
                return false;
            }
            
        
            frm.submit();
        }
        //Valida Publicações


    </script>
'; ?>