$(document).ready(function(){


	
	// ||||||||||||||||||||||||||||||||||||||||| GERAL ||||||||||||||||||||||||||||||||||||||||| // 
	$(".prateleira_padrao li .add_lista").click(function(){
		$(".esc").fadeIn(500);
		$(".cont_adicionado_lista").fadeIn(500);
		return false;
	});

	$(".esc, .cont_adicionado_lista a.fechar").click(function(){
		$(".esc").fadeOut(500);
		$(".cont_adicionado_lista").fadeOut(500);
		return false;
	});

	$(".menu_user li.entrar").mouseenter(function(){
	    $(this).find("div.login").stop(true, true).slideDown(500);
	});

	$(".menu_user li.entrar").mouseleave(function(){
	    $(this).find("div.login").stop(true, true).slideUp(500);
	});

	$(".menu_user li.entrar div.login").mouseenter(function(){
	    $(this).parent("li.entrar").stop(true, true).addClass("ativo");
	});

	$(".menu_user li.entrar div.login").mouseleave(function(){
	    $(this).parent("li.entrar").stop(true, true).removeClass("ativo")
	});


// ||||||||||||||||||||||||||||||||||||||||| HOME ||||||||||||||||||||||||||||||||||||||||| // 
	
	$(".cont_tabs ul li").click(function(){
		var tabClick = $(this).attr("id");

		$(".cont_tabs ul li").removeClass("ativo");
		$(this).addClass("ativo");


		$(".conteudo_aba").fadeOut(0);
		$(".conteudo_aba." + tabClick).fadeIn(0);

		return false

	});

    $('.jcarousel').jcarousel();

    $('.jcarousel-control-prev')
        .on('jcarouselcontrol:active', function() {
            $(this).removeClass('inactive');
        })
        .on('jcarouselcontrol:inactive', function() {
            $(this).addClass('inactive');
        })
        .jcarouselControl({
            target: '-=1'
        });

    $('.jcarousel-control-next')
        .on('jcarouselcontrol:active', function() {
            $(this).removeClass('inactive');
        })
        .on('jcarouselcontrol:inactive', function() {
            $(this).addClass('inactive');
        })
        .jcarouselControl({
            target: '+=1'
        });

    $('.jcarousel-pagination')
        .on('jcarouselpagination:active', 'a', function() {
            $(this).addClass('active');
        })
        .on('jcarouselpagination:inactive', 'a', function() {
            $(this).removeClass('active');
        })
        .jcarouselPagination();
	

	// TABS COMBOBOX
	$(".combobox ul.tabs li").click(function(){
	    $(".combobox ul.tabs li").removeClass("ativo");
	    $(this).addClass("ativo");
	});

	$(".combobox ul.tabs li.pesquisar").click(function(){
	    $(".combobox_destaque_newsletter .combobox .cont_tabs .anunciar").hide();
	    $(".combobox_destaque_newsletter .combobox .cont_tabs .pesquisar").show();
	});

	$(".combobox ul.tabs li.anunciar").click(function(){
	    $(".combobox_destaque_newsletter .combobox .cont_tabs .pesquisar").hide();
	    $(".combobox_destaque_newsletter .combobox .cont_tabs .anunciar").show();
	});


// ||||||||||||||||||||||||||||||||||||||||| CADASTRE-SE ||||||||||||||||||||||||||||||||||||||||| // 
	
	$(".cadastrese .esc, .cadastrese .box_info").delay(300).fadeIn(700);
	
	$("input[name='tipo_pessoa']").click(function() {
		var qual = $(this).val();
		
		$('.pf, .pj').addClass('none');
		$('.pf input').attr('title', ($('.pf input').attr('title')).replace(/\*/g, '')).val('');
		$('.pj input').attr('title', ($('.pj input').attr('title')).replace(/\*/g, '')).val('');
		
		
		$('.'+qual).removeClass('none');
		$('.' + qual + ' input').attr('title', ($('.' + qual + ' input').attr('title')) + '*');
	}).trigger('change');
	
	// QUERO VENDER
	/*$("a#cadastro_vender").click(function(){
		$(".cadastrese .esc, .cadastrese .box_info").fadeOut(500);
		return false
	});


	// QUERO COMPRAR
	$("a#cadastro_comprar").click(function(){
		$(".cadastrese .esc, .cadastrese .box_info").fadeOut(500);
		return false
	});*/


	$(".cadastro_produto #file_upload-queue").sortable().disableSelection();

	// TUTORIAL FOTO
	$(".cadastro_produto .conteudo fieldset.foto .cont_foto .tut").click(function(){
	    $(".cadastro_produto .esc, .cadastro_produto .box_info").fadeIn(500);
	    return false
	});
	$(".cadastro_produto .box_info a.ok").click(function(){
	    $(".cadastro_produto .esc, .cadastro_produto .box_info, .cadastro_produto .conteudo fieldset.foto .cont_foto .tut").fadeOut(500);
	    return false
	});
	
	if($("body").hasClass("cadastrese")){
		
		//Upload de Imagens
		$("#file_upload").uploadify({
	    	'formData' : {'destino' : $('input[type="hidden"].destino').val()},
	    	'swf'      : root + 'js/uploadify/uploadify.swf',
	        'uploader' : root + 'envios/uploadify_' + $('input[type="hidden"].destino').val() + '.php',
	        'width'    : 142,
	        'height'   : 142,
	        'buttonText': '',
	        'removeCompleted' : false,
			'onUploadSuccess' : function(file, data, response) {
				//alert (data);
				jQuery('#file_upload-queue .uploadify-queue-item').not(':first()').find('.principal').remove();
				
				jQuery('#file_upload-queue .uploadify-queue-item').not('.img').first().html(data).addClass('img');
				
				jQuery('#file_upload-queue .uploadify-queue-item:first').append('<span class="principal">Foto Principal</span>');
				
				jQuery('#file_upload-queue .uploadify-queue-item a.remove').click(function() {
					jQuery(this).parents('li').remove();
				});
				
				$(".cadastro_produto #file_upload-queue").sortable({
					  stop: function( event, ui ) {
						  jQuery('#file_upload-queue .uploadify-queue-item').not(':first()').find('.principal').remove();
						  jQuery('#file_upload-queue .uploadify-queue-item:first').append('<span class="principal">Foto Principal</span>');
					  }
				}).disableSelection();
			}
	    });

	}


// ||||||||||||||||||||||||||||||||||||||||| MINHA CONTA ||||||||||||||||||||||||||||||||||||||||| // 
	if($("body.minha_conta").length > 0){
		
		// VOTOS POSITIVOS
		var opicoes = {

			segmentStrokeColor : "#fff",
			segmentStrokeWidth : 0,
			percentageInnerCutout : 82
		}

		var positivo = [
			{
				value: 96,
				color:"#b8d932"
			},
			{
				value : 4,
				color : "#f2f0e9"
			}

		]

		var positivo = new Chart(document.getElementById("avaliaPositivo").getContext("2d")).Doughnut(positivo,opicoes);


		var negativo = [
			{
				value: 4,
				color:"#df3535"
			},
			{
				value : 96,
				color : "#f2f0e9"
			}

		]

		var negativo = new Chart(document.getElementById("avaliaNegativa").getContext("2d")).Doughnut(negativo,opicoes);

	}




// ||||||||||||||||||||||||||||||||||||||||| CADASTRO PRODUTO ||||||||||||||||||||||||||||||||||||||||| // 
	
	// SELECT
		$('select').customSelect();

// ||||||||||||||||||||||||||||||||||||||||| TIPO DE ANUNCIO ||||||||||||||||||||||||||||||||||||||||| // 
	
	// MARCA A OPCAO ESCOLHIDA
	function verificaMarcado(){
		$("label").removeClass("ativo");
		$("label").find("input").each(function (){	        
	        if($(this).is(":checked")){	            
	            $(this).parent("label").addClass("ativo");
	        }
	    });
    }

    verificaMarcado();

	$("label").click(function(){
		verificaMarcado();    
	});


	// OQUE É
	$(".tipo_anuncio .esc, .tipo_anuncio .box_info a.fechar").click(function(){
		$(".tipo_anuncio .esc, .tipo_anuncio .box_info, .tipo_anuncio .box_info .info_super, .tipo_anuncio .box_info .info_catg").fadeOut(500);
		return false
	});

	$(".tipo_anuncio fieldset#super_destaque a.oque").click(function(){
		$(".tipo_anuncio .esc, .tipo_anuncio .box_info, .tipo_anuncio .box_info .info_super").fadeIn(500);
		return false
	});

	$(".tipo_anuncio fieldset#categorizado_destaque a.oque").click(function(){
		$(".tipo_anuncio .esc, .tipo_anuncio .box_info, .tipo_anuncio .box_info .info_catg").fadeIn(500);
		return false
	});


// ||||||||||||||||||||||||||||||||||||||||| ANUNCIO ||||||||||||||||||||||||||||||||||||||||| // 
	$("body.anuncio .informa_venda").click(function(){
		$("body.anuncio .box_info, body.anuncio .esc").fadeIn(500);
		return false
	});

	$("body.anuncio .esc").click(function(){
		$("body.anuncio .box_info, body.anuncio .esc").fadeOut(500);
	});

// ||||||||||||||||||||||||||||||||||||||||| AVALIACAO ||||||||||||||||||||||||||||||||||||||||| // 
	$("body.avaliacoes .avaliacoes_cont a.responder").click(function(){
		$("body.avaliacoes .box_info, body.avaliacoes .esc").fadeIn(500);
		return false
	});

	$("body.avaliacoes .esc").click(function(){
		$("body.avaliacoes .box_info, body.avaliacoes .esc").fadeOut(500);
	});

// ||||||||||||||||||||||||||||||||||||||||| MASCÁRAS ||||||||||||||||||||||||||||||||||||||||| // 
	
	$(".data").inputmask("99/99/9999");
	$(".cpf").inputmask("999.999.999-99");
	$(".cnpj").inputmask("99.999.999/9999-99");
	$(".cep").inputmask("99999-999");
	$(".telefone").inputmask("(99) 9999-9999");
	$(".celular").inputmask("(99) 99999-9999");

}); /*document ready*/