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
    $('.txt-atend-on').click(function(){
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
    $('.sub-submenu').mouseenter(function(){
        $(this).children('.bloco-sub-submenu').css('display', 'block');
    });
    $('.sub-submenu').mouseleave(function(){
        $(this).children('.bloco-sub-submenu').css('display', 'none');
    });

    $('.sub-submenu-mob').click(function(){
        if (window.innerWidth <= 768) {
            event.preventDefault();
            $(this).next('.bloco-sub-submenu').slideToggle();
        }
    });