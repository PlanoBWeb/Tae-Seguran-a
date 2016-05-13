	// Vitrine Banner
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true
        });
    });

	// Noticias home
    $(document).ready(function() {
        $("#owl-demo-noticias").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true
        });
    });

	// Noticias eventos
    $(document).ready(function() {
        $("#owl-demo-eventos").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true
        });
    });

    // Noticias depoimentos
    $(document).ready(function() {
        $("#owl-demo-depoimentos").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true
        });
    });

    
    // Drop menu mobile
    $(document).ready(function(){
        var altura_tela = $(window).width();
        $(".linha-menu-header .dropdown-toggle").click(function(){
            if (altura_tela <= 768) {
                event.preventDefault();
                $(this).parent().find(".dropdown-menu").slideToggle();
            }
        });
    });

    window.onresize = function() {
        $(".linha-menu-header .dropdown-toggle").click(function(){
            if (window.innerWidth <= 768) {
                event.preventDefault();
                $(this).parent().find(".dropdown-menu").slideToggle();
            }
        });
    }

    // Form Fixed 
    $('.txt-atend-on-open').click(function(){
        // alert('f');
    // $('.btn-open-box, .txt-fale-fixed').click(function(){
        if($('.content-form-fixed').is(":visible")){
            $('.btn-open-box').animate({  borderSpacing: +360 }, {
                step: function(now,fx) {
                  $(this).css('-webkit-transform','rotate('+now+'deg)'); 
                  $(this).css('-moz-transform','rotate('+now+'deg)');
                  $(this).css('transform','rotate('+now+'deg)');
                },
                duration:'slow'
            },'linear');
            $( ".content-form-fixed" ).slideToggle();
        }else{
            $('.btn-open-box').animate({  borderSpacing: 180 }, {
                step: function(now,fx) {
                  $(this).css('-webkit-transform','rotate('+now+'deg)'); 
                  $(this).css('-moz-transform','rotate('+now+'deg)');
                  $(this).css('transform','rotate('+now+'deg)');
                },
                duration:'slow'
            },'linear');
            $( ".content-form-fixed" ).slideToggle();
        }   
    });

    // Redirect mobile menu lateral
    $('.select-menuLat-mob').change(function(){
        var url = $(this).val();
        if (url == "") {
            alert("Valor inválido, selecione um valor válido");
        }else{
            window.location.href = url;        
        }
    });

    $('.ano-menu-lateral').click(function(event){
        event.preventDefault();
        menu = $(this).next('.submenu-ano');
        if($('.submenu-ano').is(':visible')){
            $('.submenu-ano').hide();   
        }else{
            $(menu).toggle();       
        }
    });

    // Ajax Busca Desktop
    $(document).ready(function(){
        $("#buscaValor").keyup(function(){
            var valorBusca = $('#buscaValor').val();
            var urlAction = $('.urlAction').val();
            var min_length = 0;
            var contaValor = $('#buscaValor').val().length;

            if (contaValor != min_length) {

                $.ajax({
                type: "POST",
                url: urlAction,
                // data:'busca='+$(this).val(),
                data: {search: valorBusca, buscaAjax: "buscaAjax", acao: "busca"},
          
                    success: function(data){
                        $("#carrega-busca").show();
                        $("#carrega-busca").html(data);
                        $("#buscaValor").css("background","#FFF");
                    }
                });
            }else{
                  $('#carrega-busca').hide();
            }
        });
    });

    $('#carrega-busca').on('click','.selectProduto', function(){
        var valorTxtBusca = $(this).text();

        $("#buscaValor").val(valorTxtBusca);
        $('.form-busca-desk').submit();
        $("#carrega-busca").hide();
        
    });

    // Sub Submenu Topo
    window.onresize = function() {
        if (window.innerWidth >= 768) {
            $('.sub-submenu').mouseenter(function(){
                $(this).children('.bloco-sub-submenu').css('display', 'block');
            });
            $('.sub-submenu').mouseleave(function(){
                $(this).children('.bloco-sub-submenu').css('display', 'none');
            });
        }
    }

    $(document).ready(function(){
        var altura_tela2 = $(window).width();
        if (altura_tela2 >= 768) {
                $('.sub-submenu').mouseenter(function(){
                    $(this).children('.bloco-sub-submenu').css('display', 'block');
                });
                $('.sub-submenu').mouseleave(function(){
                    $(this).children('.bloco-sub-submenu').css('display', 'none');
                });
        }
    });

    $('.sub-submenu-open').click(function(){
        if (window.innerWidth <= 768) {
            event.preventDefault();
            $(this).parent().children('.bloco-sub-submenu').slideToggle();
        }
    });

    // Valida Newslleter
    function validaNewsletter()
    {
        d = document.newsletter;

        if(trim(d.nome_news.value)=="")
        {
            alert("O campo NOME deve ser preenchido!");
            d.nome_news.focus();
            return false;
        }
        
        if(trim(d.email_news.value)=="")
        {
            alert("O campo E-MAIL deve ser preenchido!");
            d.email_news.focus();
            return false;
        }
        
        if(!email_news(d.email_news,'')) return false;
        
        d.submit();
    }

    //Valida Formulário
    function enviardados()
    {
        d = document.contato;

        if(trim(d.nome.value)=="")
        {
            alert("O campo NOME deve ser preenchido!");
            d.nome.focus();

            return false;
        }
        
        if(trim(d.email.value)=="")
        {
            alert("O campo E-MAIL deve ser preenchido!");
            d.email.focus();
            return false;
        }
        
        if(!email(d.email,'')) return false;

        if(trim(d.telefone.value)=="")
        {
            alert("O campo TELEFONE deve ser preenchido!");
            d.telefone.focus();
            return false;
        }

        if(trim(d.onde.value)=="" || trim(d.onde.value)== "")
        {
            alert("O campo ONDE NOS ENCONTROU deve ser preenchido!");
            d.onde.focus();
            return false;
        }

        if(trim(d.msg.value)=="")
        {
            alert("O campo MENSAGEM deve ser preenchido!");
            d.msg.focus();
            return false;
        }

    }

    $(document).ready(function() {
        var current = '.mtlsr-images-for-lightbox ul li.current';

        function check_image_position(){                
            if ($(current).is(':last-child')) {
                $('.next').hide();
                $('.prev').show();
            }else if ($(current).is(':first-child')) {
                $('.next').show();
                $('.prev').hide();
            }else{
                $('.next, .prev').show();
            }
        }           

        $('.mtlsr-images-for-lightbox ul li').on('click', 'a', function(event) {
            event.preventDefault();
            var big_image_href = $(this).attr('href');
            
            $(this).parents('li').addClass('current');
            $('.bg-fundo-lightbox').fadeIn();
            $('.mtlsr-lightbox').fadeIn();
            $('.txt-lightbox').append('<img class="image-in-lightbox" src="'+big_image_href+'" alt="">');

            check_image_position();
        });
        
        // //Fechar Clique
        $(document).ready(function() {
            $('.mtlsr-lightbox').on('click', '.close', function(event) {
                $('.mtlsr-lightbox').fadeOut();
                $('.bg-fundo-lightbox').fadeOut();
                $('.image-in-lightbox, .descricao-produ1').remove();
                $(current).removeClass('current');
                return false;
            });
        });

        // //Fechar Clique
        $(document).ready(function() {
            $('body').on('click', '.bg-fundo-lightbox', function(event) {
                $('.mtlsr-lightbox').fadeOut();
                $('.bg-fundo-lightbox').fadeOut();
                $('.image-in-lightbox, .descricao-produ1').remove();
                $(current).removeClass('current');
                return false;
            });
        });

        // //Fechar ESC
        $(document).keydown(function (e) {
            if(e.which == 27)
            {
                $('.mtlsr-lightbox').fadeOut();
                $('.bg-fundo-lightbox').fadeOut();
                $('.image-in-lightbox, .descricao-produ1').remove();
                $(current).removeClass('current');
                return false;
            }
        });

        $('.mtlsr-lightbox a').on('click', function(e){                
            if($(this).attr('class')=='next'){
                var big_image_href = $(current).next().find('a').attr('href');  
                var texto          = $(current).next().find('a').text();
            
                $(current).next().addClass('current');
                $(current).prev().removeClass('current');
                
            }else if($(this).attr('class')=='prev'){
                var big_image_href = $(current).prev().find('a').attr('href');
                var texto = $(current).prev().find('a').text();

                $(current).prev().addClass('current');
                $(current).next().removeClass('current');
            }
            check_image_position();
                
            $('.image-in-lightbox, .descricao-produ1').remove();
            $('.txt-lightbox').append('<img class="image-in-lightbox" src="'+big_image_href+'" alt=""> <div class="descricao-produ1"> '+texto+' </div> ');
        });
    });

    // Trabalhe conosco
    /* Máscaras ER */
    function mascara(o,f){
        v_obj=o
        v_fun=f
        setTimeout("execmascara()",1)
    }
    function execmascara(){
        v_obj.value=v_fun(v_obj.value)
    }

    function mascaraMutuario(o,f){
        v_obj=o
        v_fun=f
        setTimeout('execmascara()',1)
    }
     
    function cpfCnpj(v){
        //Remove tudo o que não é dígito
        v=v.replace(/\D/g,"")
        if (v.length <= 14) { //CPF
            //Coloca um ponto entre o terceiro e o quarto dígitos
            v=v.replace(/(\d{3})(\d)/,"$1.$2")
            //Coloca um ponto entre o terceiro e o quarto dígitos
            //de novo (para o segundo bloco de números)
            v=v.replace(/(\d{3})(\d)/,"$1.$2")
            //Coloca um hífen entre o terceiro e o quarto dígitos
            v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
        } else { //CNPJ
            //Coloca ponto entre o segundo e o terceiro dígitos
            v=v.replace(/^(\d{2})(\d)/,"$1.$2")
            //Coloca ponto entre o quinto e o sexto dígitos
            v=v.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3")
            //Coloca uma barra entre o oitavo e o nono dígitos
            v=v.replace(/\.(\d{3})(\d)/,".$1/$2")
            //Coloca um hífen depois do bloco de quatro dígitos
            v=v.replace(/(\d{4})(\d)/,"$1-$2")
        }
        return v
    }
    function id( el ){
      return document.getElementById( el );
    }

    function enviardadosTrabalhe(){
      if(document.dados.pesNome.value=="" || document.dados.pesNome.value.length < 8){
        alert( "Preencha campo NOME corretamente!" );
        document.dados.pesNome.focus();
        return false;
      }
      if( document.dados.conEmail.value=="" || document.dados.conEmail.value.indexOf('@')==-1 || document.dados.conEmail.value.indexOf('.')==-1 ){
        alert( "Preencha campo E-MAIL corretamente!" );
        document.dados.conEmail.focus();
        return false;
      }
       if(document.dados.declaro.checked == false){
        alert( "Selecione o campo DECLARO!" );
        return false;
      }
      return true;
    }