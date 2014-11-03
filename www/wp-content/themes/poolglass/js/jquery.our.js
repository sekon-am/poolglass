/* © 2013 Планета Нептуна. Все права защищены. 
 * Запрещено использование материалов сайта без 
 * согласия его авторов и обратной ссылки. */

jQuery(document).ready(function($) {
	
	if ( $('#content').length  ){
		$('#content').animate({opacity: 1}, 500);
		$('#pool_animation').animate({opacity: 1}, 400);
	}

	// SCROLL FIXED MENU
	menu_start_pos = parseInt($('#fixed_menu').css('top'));
	$(window).scroll(function(){
		cur_scroll_pos = $(window).scrollTop();
		if (cur_scroll_pos > menu_start_pos){
			$('#fixed_menu').stop().animate({"top": cur_scroll_pos+"px"}, 300);
		} else {
			$('#fixed_menu').stop().animate({"top": menu_start_pos+"px"}, 300);
		}
	});
	
	// ANIMATE BACKGROUNDS
	if ( $('#main_bg_full').length ){

		delayChange = 6000;
		fadeSpeed = 1000;
		fp_img_count = $('.fp_bgimg').length;
		
		function randomNumber(m,n){m=parseInt(m); n=parseInt(n); return Math.floor(Math.random()*(n-m+1))+m;}

		random_arr_id = randomNumber(1,(fp_img_count));

		$('#mbgf-'+random_arr_id).animate({opacity: 1}, fadeSpeed);
		$('#pa_img-'+random_arr_id).animate({opacity: 1}, fadeSpeed);

		setInterval(function(){
			random_arr_id_next = randomNumber(1,(fp_img_count));
			
			$('#mbgf-'+random_arr_id_next).animate({opacity: 1}, fadeSpeed).delay(delayChange);
			$('#pa_img-'+random_arr_id_next).animate({opacity: 1}, fadeSpeed).delay(delayChange);
			
			$(".fp_bgimg:not(#mbgf-"+random_arr_id_next+")").animate({opacity: 0}, fadeSpeed).delay(delayChange);
			$(".pa_img:not(#pa_img-"+random_arr_id_next+")").animate({opacity: 0}, fadeSpeed).delay(delayChange);
			
		}, delayChange);

	}

    // OUR HOVER
    $(".hover").hover(function(){
        $(this).stop().animate({opacity:1}, 200);
    },function(){
        $(this).stop().animate({opacity:0}, 200);
    });
    
    // HOVER STATIC MENU
    $(".fm_title").hover(function(){
        $(this).parent().find(".hover").stop().animate({opacity:1}, 200);
    },function(){
        $(this).parent().find(".hover").stop().animate({opacity:0}, 200);
    });

    // HOVER FPS MENU
    $(".fpc_content").hover(function(){
        $(this).parent().find(".hover").stop().animate({opacity:1}, 200);
    },function(){
        $(this).parent().find(".hover").stop().animate({opacity:0}, 200);
    });
    
    // HOVER FPS MENU
    $(".pbi_inner_container").hover(function(){
        $(this).find(".hover").stop().animate({opacity:1}, 200);
    },function(){
        $(this).find(".hover").stop().animate({opacity:0}, 200);
    });


	// FP CALC MARCKUP
	if ($("#frontpage").length){
		HCol1 = parseInt($("#column1").height())+35;
		HCol2 = parseInt($("#column2").height())+35;
		MCol = parseInt($(".fp_column").css("margin-top"))+396;
		if (HCol1 > HCol2){
			$("#column2").height(HCol1+"px");
			$("#fp_vline_center").height((HCol1-MCol)+"px");
		} else if (HCol1 < HCol2) {
			$("#column1").height(HCol2+"px");
			$("#fp_vline_center").height((HCol2-MCol)+"px");
		}
	}

	// FIXED MANU ANIMATE
	$("#fixed_menu li").hover(function(){
		$(this).find('.fm_title_content').stop().show().animate({"margin-left": "-380px", opacity: 1}, 150);

		if ($('#pool_animation').length){
			switch ($(this).attr('id')){
				case 'fm_item_1': $('#pd_item-1').stop().show().animate({"margin": "116px 0 0 121px", opacity: 1}, 150); break;
				case 'fm_item_2': $('#pd_item-2').stop().show().animate({"margin": "70px 0 0 12px", opacity: 1}, 150);	break;
				case 'fm_item_3': $('#pd_item-3').stop().show().animate({"margin": "93px 0 0 116px", opacity: 1}, 150);	break;
			}
		}
		
	},function(){
		$(this).find('.fm_title_content').stop().fadeOut(150).animate({"margin-left": "-450px", opacity: 0}, {queue:false, duration: 150});
		
		if ($('#pool_animation').length){
			switch ($(this).attr('id')){
				case 'fm_item_1': $('#pd_item-1').stop().fadeOut(150).animate({"margin": "-100px 0 0 -100px", opacity: 1}, {queue:false, duration: 150});
				case 'fm_item_2': $('#pd_item-2').stop().fadeOut(150).animate({"margin": "-100px 0 0 -100px", opacity: 1}, {queue:false, duration: 150});
				case 'fm_item_3': $('#pd_item-3').stop().fadeOut(150).animate({"margin": "-100px 0 0 -100px", opacity: 1}, {queue:false, duration: 150});
			}
		}
		
	});
	
	// HOVER CAT ITEM
	$(".cat_item_container").hover(function(){
		cur_color = $(this).find(".post-in-cat_title").css("color");
		$(this).find(".cat_shadow_hover").stop().animate({opacity:1}, 10);
		$(this).find(".post-in-cat_title").stop().animate({color: '#637281'});
	},function(){
	    $(this).find(".cat_shadow_hover").stop().animate({opacity:0}, 400);
	    $(this).find(".post-in-cat_title").stop().animate({color: cur_color});
	});

	// POST IN CAT ANCHOR
	if ( $('.trucat_selector').size() > 0 ){ 
		offset_bottom = parseInt($('.trucat_selector').offset().top);
		$("html, body").animate({ scrollTop: (offset_bottom+60) }, 400)
						   .animate({ scrollTop: (offset_bottom-15) }, 150)
						   .animate({ scrollTop: offset_bottom }, 150);
	}

	// POST IN PAGE ANCHOR 
	//$("#cat-bottom-info").fadeIn(200);
	/*
	$(".goto-full-post").click(function(){

		$(".cat-post-full_container:not(#cat-bottom-info)").hide();
		$($(this).attr("href")).fadeIn(300);
		offset_bottom = ($($(this).attr("href")).offset().top)-25;

		$("html, body").animate({ scrollTop: (offset_bottom+60) }, 300)
					   .animate({ scrollTop: (offset_bottom-15) }, 100)
					   .animate({ scrollTop: offset_bottom }, 100);

	});
	*/

	/***************************************   CALCULATOR   *****************************************************/

	// LBTN HOVER
	$(".lbtn").hover(function(){
		cur_color = $(this).find(".lbtn_text").css("color");
		cur_text_shadow = $(this).find(".lbtn_text").css("text-shadow");
		$(this).find('.lbtn_left').css('background-position', '0 -90px');
		$(this).find('.lbtn_middle').css('background-position', '0 -135px');
		$(this).find('.lbtn_right').css('background-position', '5px -90px');
		$(this).find('.lbtn_text').css({'color': 'white', 'text-shadow': '-1px -1px 0 #057caf'});
	},function(){
		$(this).find('.lbtn_left').css('background-position', '0 0');
		$(this).find('.lbtn_middle').css('background-position', '0 -45px');
		$(this).find('.lbtn_right').css('background-position', '5px 0');
		$(this).find('.lbtn_text').css({'color': cur_color, 'text-shadow': cur_text_shadow});
	});


	// CALC ANIMATE ICONS
	$(".aq_type_item").hover(function(){
		$(this).find('.calc_icon_hover').stop().show().animate({opacity: 1}, 150);
	},function(){
		$(this).find('.calc_icon_hover').stop().show().animate({opacity: 0}, 150);
	});

	// YES-NO BTN
	function BTN_CLICK(sel, param){
		if ( param == 'NO' ){
			$(sel).removeClass('btn_state_true').find('.ynb-no').animate({opacity:1}, 200);
			$(sel).find('.ynb-slide').animate({"margin-left": "36px"}, 150);
		} else if ( param == 'YES' ){
			$(sel).addClass('btn_state_true').find('.ynb-no').animate({opacity:0}, 200);
			$(sel).find('.ynb-slide').animate({"margin-left": "0px"}, 150);
		}
	}
	
	// AQ TYPES ARRAY
	aq_type = new Array(
		
		/* 0 */ {"BTN_ID":"aq_type_1", "BLOCK":"calc-forms-set-1",},
		/* 1`*/ {"BTN_ID":"aq_type_2", "BLOCK":"calc-forms-set-2",},
		/* 2 */ {"BTN_ID":"aq_type_3", "BLOCK":"calc-forms-set-3",},
		
		/* 3 */ {"BTN_ID":"aq_type_1-1", "BLOCK":"calc_params_set-1",},
		/* 4 */ {"BTN_ID":"aq_type_1-2", "BLOCK":"calc_params_set-2",},
		/* 5 */ {"BTN_ID":"aq_type_1-3", "BLOCK":"calc_params_set-3",},
		/* 6 */ {"BTN_ID":"aq_type_1-4", "BLOCK":"calc_params_set-4",},
		
		/* 7 */ {"BTN_ID":"aq_type_2-1", "BLOCK":"calc_params_set-5",},
		/* 8 */ {"BTN_ID":"aq_type_2-2", "BLOCK":"calc_params_set-6",},
		
		/* 9 */ {"BTN_ID":"aq_type_3-1", "BLOCK":"calc_params_set-7",},
		/* 10 */{"BTN_ID":"aq_type_3-2", "BLOCK":"calc_params_set-8",},
		
		/* 11 */ {"BTN_ID":"aq_type_1-2-1", "BLOCK":"aq_shcheme_large-1-2",},
		/* 12 */ {"BTN_ID":"aq_type_1-2-2",},
		/* 13 */ {"BTN_ID":"aq_type_1-2-3",},
		
		/* 14 */ {"BTN_ID":"aq_type_1-3-1", "BLOCK":"aq_shcheme_large-1-3",},
		/* 15 */ {"BTN_ID":"aq_type_1-3-2",},
		/* 16 */ {"BTN_ID":"aq_type_1-3-3",},
		
		/* 17 */ {"BTN_ID":"aq_type_1-4-1", "BLOCK":"aq_shcheme_large-1-4",},
		/* 18 */ {"BTN_ID":"aq_type_1-4-2",},
		/* 19 */ {"BTN_ID":"aq_type_1-4-3",}

	);
	
	// HIDE LEVEL 1, DISABLE BUTTONS
	function HIDE_LEVE_1(){
		//CALC AQ #1
		$('#'+aq_type[0].BLOCK).hide(); BTN_CLICK('#'+aq_type[0].BTN_ID, 'NO');
		$('#'+aq_type[1].BLOCK).hide(); BTN_CLICK('#'+aq_type[1].BTN_ID, 'NO');
		$('#'+aq_type[2].BLOCK).hide(); BTN_CLICK('#'+aq_type[2].BTN_ID, 'NO');
		$('#calc_form-ost').hide().animate({"margin-top": "-138px", opacity: 0}, 400);
	}
	
	// HIDE LEVEL 2, DISABLE BUTTONS
	function HIDE_LEVE_2(){
		//CALC AQ #1
		$('#'+aq_type[3].BLOCK).hide(); BTN_CLICK('#'+aq_type[3].BTN_ID, 'NO');
		$('#'+aq_type[4].BLOCK).hide(); BTN_CLICK('#'+aq_type[4].BTN_ID, 'NO');
		$('#'+aq_type[5].BLOCK).hide(); BTN_CLICK('#'+aq_type[5].BTN_ID, 'NO');
		$('#'+aq_type[6].BLOCK).hide(); BTN_CLICK('#'+aq_type[6].BTN_ID, 'NO');
		
		//CALC AQ #2
		$('#'+aq_type[7].BLOCK).hide(); BTN_CLICK('#'+aq_type[7].BTN_ID, 'NO');
		$('#'+aq_type[8].BLOCK).hide(); BTN_CLICK('#'+aq_type[8].BTN_ID, 'NO');
		
		//CALC AQ #3
		$('#'+aq_type[9].BLOCK).hide(); BTN_CLICK('#'+aq_type[9].BTN_ID, 'NO');
		$('#'+aq_type[10].BLOCK).hide(); BTN_CLICK('#'+aq_type[10].BTN_ID, 'NO');
	}
	
	// HIDE LEVEL 3, DISABLE BUTTONS
	function HIDE_LEVE_3(){
		BTN_CLICK('#'+aq_type[11].BTN_ID, 'NO');
		BTN_CLICK('#'+aq_type[12].BTN_ID, 'NO');
		BTN_CLICK('#'+aq_type[13].BTN_ID, 'NO');
		
		BTN_CLICK('#'+aq_type[14].BTN_ID, 'NO');
		BTN_CLICK('#'+aq_type[15].BTN_ID, 'NO');
		BTN_CLICK('#'+aq_type[16].BTN_ID, 'NO');
		
		BTN_CLICK('#'+aq_type[17].BTN_ID, 'NO');
		BTN_CLICK('#'+aq_type[18].BTN_ID, 'NO');
		BTN_CLICK('#'+aq_type[19].BTN_ID, 'NO');
	}
	
	// HIDE PARAMS
	function HIDE_PARAMS(){
		$('#calc_params').animate({"margin-top": "-340px", opacity: 0}, {queue:false, duration: 400}).fadeOut();
	}
	
	// HIDE PARAMS
	function SHOW_PARAMS(){
		$('#calc_params').show().animate({"margin-top": "0", opacity: 1}, 400);
	}

	// SHOW MAILFORM
	function SHOW_MAILFORM(){
		$('#calc_send_msg').delay(500).show().animate({"margin-top": "0", opacity: 1}, 400);
	}

	// HIDE MAILFORM
	function HIDE_MAILFORM(){
		$('#calc_send_msg').animate({"margin-top": "-138px", opacity: 0}, {queue:false, duration: 400}).fadeOut();
	}
	
	// SCROLL TO CALCULATOR
	function SCROLL_TO_CALC(){
		$("html, body").animate({ scrollTop: $("#calculator").offset().top }, 800);
	}
	
	$(".yes-no-btn").click(function (){
	
		SCROLL_TO_CALC();
	
		if ( $(this).hasClass('btn_state_true') ){
			
			//BTN_CLICK(this, 'NO');
		
		} else {

			BTN_CLICK(this, 'YES');
				  
			switch ( $(this).attr('id') ){

				case 'aq_type_1': 	
									//CALC AQ LINE #0
									$('#'+aq_type[1].BLOCK).hide();	BTN_CLICK('#'+aq_type[1].BTN_ID, 'NO');
									$('#'+aq_type[2].BLOCK).hide(); BTN_CLICK('#'+aq_type[2].BTN_ID, 'NO');
									
									HIDE_LEVE_2();
									HIDE_LEVE_3();
									
									$('#calc_form-ost').show().animate({"margin-top": "0", opacity: 1}, 400);

									HIDE_PARAMS();
									HIDE_MAILFORM();

									$('#'+aq_type[0].BLOCK).fadeIn();
									break;
									
									
				case 'aq_type_2': 	
									//CALC AQ LINE #0
									$('#'+aq_type[0].BLOCK).hide(); BTN_CLICK('#'+aq_type[0].BTN_ID, 'NO');
									$('#'+aq_type[2].BLOCK).hide(); BTN_CLICK('#'+aq_type[2].BTN_ID, 'NO');
									
									HIDE_LEVE_2();
									HIDE_LEVE_3();
									
									$('#calc_form-ost').show().animate({"margin-top": "0", opacity: 1}, 400);
									
									HIDE_PARAMS();
									HIDE_MAILFORM();
									
									$('#'+aq_type[1].BLOCK).fadeIn();
									break;
									
									
				case 'aq_type_3': 	
									//CALC AQ LINE #0
									$('#'+aq_type[0].BLOCK).hide(); BTN_CLICK('#'+aq_type[0].BTN_ID, 'NO');
									$('#'+aq_type[1].BLOCK).hide(); BTN_CLICK('#'+aq_type[1].BTN_ID, 'NO');
									
									HIDE_LEVE_2();
									HIDE_LEVE_3();
									
									$('#calc_form-ost').show().animate({"margin-top": "0", opacity: 1}, 400);
									
									HIDE_PARAMS();
									HIDE_MAILFORM();
									
									$('#'+aq_type[2].BLOCK).fadeIn();
									break;
									
				
				// CALC SET 1
				case 'aq_type_1-1':	
									//CALC AQ #1
									$('#'+aq_type[6].BLOCK).hide(); BTN_CLICK('#'+aq_type[6].BTN_ID, 'NO');
									$('#'+aq_type[5].BLOCK).hide(); BTN_CLICK('#'+aq_type[5].BTN_ID, 'NO');
									$('#'+aq_type[4].BLOCK).hide(); BTN_CLICK('#'+aq_type[4].BTN_ID, 'NO');
									
									//CALC AQ #2
									$('#'+aq_type[7].BLOCK).hide(); BTN_CLICK('#'+aq_type[7].BTN_ID, 'NO');
									$('#'+aq_type[8].BLOCK).hide(); BTN_CLICK('#'+aq_type[8].BTN_ID, 'NO');
									
									//CALC AQ #3
									$('#'+aq_type[9].BLOCK).hide(); BTN_CLICK('#'+aq_type[9].BTN_ID, 'NO');
									$('#'+aq_type[10].BLOCK).hide(); BTN_CLICK('#'+aq_type[10].BTN_ID, 'NO');
									
									HIDE_LEVE_3();
									SHOW_PARAMS();
									SHOW_MAILFORM();
									
									$('#'+aq_type[3].BLOCK).fadeIn();
									
									break;
									
				case 'aq_type_1-2':	
									//CALC AQ #1
									$('#'+aq_type[6].BLOCK).hide(); BTN_CLICK('#'+aq_type[6].BTN_ID, 'NO');
									$('#'+aq_type[5].BLOCK).hide(); BTN_CLICK('#'+aq_type[5].BTN_ID, 'NO');
									$('#'+aq_type[3].BLOCK).hide(); BTN_CLICK('#'+aq_type[3].BTN_ID, 'NO');
									
									//CALC AQ #2
									$('#'+aq_type[7].BLOCK).hide(); BTN_CLICK('#'+aq_type[7].BTN_ID, 'NO');
									$('#'+aq_type[8].BLOCK).hide(); BTN_CLICK('#'+aq_type[8].BTN_ID, 'NO');
									
									//CALC AQ #3
									$('#'+aq_type[9].BLOCK).hide(); BTN_CLICK('#'+aq_type[9].BTN_ID, 'NO');
									$('#'+aq_type[10].BLOCK).hide(); BTN_CLICK('#'+aq_type[10].BTN_ID, 'NO');
									
									HIDE_LEVE_3();
									SHOW_PARAMS();
									SHOW_MAILFORM();
									
									$('#'+aq_type[11].BLOCK).css({"background-position": "0 0"});
									$('#'+aq_type[4].BLOCK).fadeIn();
									
									BTN_CLICK('#'+aq_type[11].BTN_ID, 'YES');
									
									break;
									
				case 'aq_type_1-3':	
									//CALC AQ #1
									$('#'+aq_type[6].BLOCK).hide(); BTN_CLICK('#'+aq_type[6].BTN_ID, 'NO');
									$('#'+aq_type[3].BLOCK).hide(); BTN_CLICK('#'+aq_type[3].BTN_ID, 'NO');
									$('#'+aq_type[4].BLOCK).hide(); BTN_CLICK('#'+aq_type[4].BTN_ID, 'NO');
									
									//CALC AQ #2
									$('#'+aq_type[7].BLOCK).hide(); BTN_CLICK('#'+aq_type[7].BTN_ID, 'NO');
									$('#'+aq_type[8].BLOCK).hide(); BTN_CLICK('#'+aq_type[8].BTN_ID, 'NO');
									
									//CALC AQ #3
									$('#'+aq_type[9].BLOCK).hide(); BTN_CLICK('#'+aq_type[9].BTN_ID, 'NO');
									$('#'+aq_type[10].BLOCK).hide(); BTN_CLICK('#'+aq_type[10].BTN_ID, 'NO');
									
									HIDE_LEVE_3();
									SHOW_PARAMS();
									SHOW_MAILFORM();
									
									$('#'+aq_type[14].BLOCK).css({"background-position": "-360px 0"});
									$('#'+aq_type[5].BLOCK).fadeIn();
									
									BTN_CLICK('#'+aq_type[14].BTN_ID, 'YES');
									
									break;
									
				case 'aq_type_1-4':	
									//CALC AQ #1
									$('#'+aq_type[3].BLOCK).hide(); BTN_CLICK('#'+aq_type[3].BTN_ID, 'NO');
									$('#'+aq_type[5].BLOCK).hide(); BTN_CLICK('#'+aq_type[5].BTN_ID, 'NO');
									$('#'+aq_type[4].BLOCK).hide(); BTN_CLICK('#'+aq_type[4].BTN_ID, 'NO');
									
									//CALC AQ #2
									$('#'+aq_type[7].BLOCK).hide(); BTN_CLICK('#'+aq_type[7].BTN_ID, 'NO');
									$('#'+aq_type[8].BLOCK).hide(); BTN_CLICK('#'+aq_type[8].BTN_ID, 'NO');
									
									//CALC AQ #3
									$('#'+aq_type[9].BLOCK).hide(); BTN_CLICK('#'+aq_type[9].BTN_ID, 'NO');
									$('#'+aq_type[10].BLOCK).hide(); BTN_CLICK('#'+aq_type[10].BTN_ID, 'NO');
									
									HIDE_LEVE_3();
									SHOW_PARAMS();
									SHOW_MAILFORM();
									
									$('#'+aq_type[17].BLOCK).css({"background-position": "-720px 0"});
									$('#'+aq_type[6].BLOCK).fadeIn();
									
									BTN_CLICK('#'+aq_type[17].BTN_ID, 'YES');
									
									break;
									
									
				// CALC SET 2				
				case 'aq_type_2-1':	
									//CALC AQ #1
									$('#'+aq_type[3].BLOCK).hide(); BTN_CLICK('#'+aq_type[3].BTN_ID, 'NO');
									$('#'+aq_type[5].BLOCK).hide(); BTN_CLICK('#'+aq_type[5].BTN_ID, 'NO');
									$('#'+aq_type[4].BLOCK).hide(); BTN_CLICK('#'+aq_type[4].BTN_ID, 'NO');
									
									//CALC AQ #2
									//$('#'+aq_type[7].BLOCK).hide(); BTN_CLICK('#'+aq_type[7].BTN_ID, 'NO');
									$('#'+aq_type[8].BLOCK).hide(); BTN_CLICK('#'+aq_type[8].BTN_ID, 'NO');
									
									//CALC AQ #3
									$('#'+aq_type[9].BLOCK).hide(); BTN_CLICK('#'+aq_type[9].BTN_ID, 'NO');
									$('#'+aq_type[10].BLOCK).hide(); BTN_CLICK('#'+aq_type[10].BTN_ID, 'NO');
									
									SHOW_PARAMS();
									SHOW_MAILFORM();
									
									$('#'+aq_type[7].BLOCK).show();
									break;
									
				case 'aq_type_2-2':	
									//CALC AQ #1
									$('#'+aq_type[3].BLOCK).hide(); BTN_CLICK('#'+aq_type[3].BTN_ID, 'NO');
									$('#'+aq_type[5].BLOCK).hide(); BTN_CLICK('#'+aq_type[5].BTN_ID, 'NO');
									$('#'+aq_type[4].BLOCK).hide(); BTN_CLICK('#'+aq_type[4].BTN_ID, 'NO');
									
									//CALC AQ #2
									$('#'+aq_type[7].BLOCK).hide(); BTN_CLICK('#'+aq_type[7].BTN_ID, 'NO');
									//$('#'+aq_type[8].BLOCK).hide(); BTN_CLICK('#'+aq_type[8].BTN_ID, 'NO');
									
									//CALC AQ #3
									$('#'+aq_type[9].BLOCK).hide(); BTN_CLICK('#'+aq_type[9].BTN_ID, 'NO');
									$('#'+aq_type[10].BLOCK).hide(); BTN_CLICK('#'+aq_type[10].BTN_ID, 'NO');
									
									SHOW_PARAMS();
									SHOW_MAILFORM();
									
									$('#'+aq_type[8].BLOCK).show();
									break;

				// CALC SET 3					
				case 'aq_type_3-1':	
									//CALC AQ #1
									$('#'+aq_type[3].BLOCK).hide(); BTN_CLICK('#'+aq_type[3].BTN_ID, 'NO');
									$('#'+aq_type[5].BLOCK).hide(); BTN_CLICK('#'+aq_type[5].BTN_ID, 'NO');
									$('#'+aq_type[4].BLOCK).hide(); BTN_CLICK('#'+aq_type[4].BTN_ID, 'NO');
									
									//CALC AQ #2
									$('#'+aq_type[7].BLOCK).hide(); BTN_CLICK('#'+aq_type[7].BTN_ID, 'NO');
									$('#'+aq_type[8].BLOCK).hide(); BTN_CLICK('#'+aq_type[8].BTN_ID, 'NO');
									
									//CALC AQ #3
									//$('#'+aq_type[9].BLOCK).hide(); BTN_CLICK('#'+aq_type[9].BTN_ID, 'NO');
									$('#'+aq_type[10].BLOCK).hide(); BTN_CLICK('#'+aq_type[10].BTN_ID, 'NO');
									
									SHOW_PARAMS();
									SHOW_MAILFORM();
									
									$('#'+aq_type[9].BLOCK).show();
									break;
									
				case 'aq_type_3-2':	
									//CALC AQ #1
									$('#'+aq_type[3].BLOCK).hide(); BTN_CLICK('#'+aq_type[3].BTN_ID, 'NO');
									$('#'+aq_type[5].BLOCK).hide(); BTN_CLICK('#'+aq_type[5].BTN_ID, 'NO');
									$('#'+aq_type[4].BLOCK).hide(); BTN_CLICK('#'+aq_type[4].BTN_ID, 'NO');
									
									//CALC AQ #2
									$('#'+aq_type[7].BLOCK).hide(); BTN_CLICK('#'+aq_type[7].BTN_ID, 'NO');
									$('#'+aq_type[8].BLOCK).hide(); BTN_CLICK('#'+aq_type[8].BTN_ID, 'NO');
									
									//CALC AQ #3
									$('#'+aq_type[9].BLOCK).hide(); BTN_CLICK('#'+aq_type[9].BTN_ID, 'NO');
									//$('#'+aq_type[10].BLOCK).hide(); BTN_CLICK('#'+aq_type[10].BTN_ID, 'NO');
									
									SHOW_PARAMS();
									SHOW_MAILFORM();
									
									$('#'+aq_type[10].BLOCK).show();
									break;
				// CALC SET 1-2			
				case 'aq_type_1-2-1':	
									BTN_CLICK('#'+aq_type[12].BTN_ID, 'NO');
									BTN_CLICK('#'+aq_type[13].BTN_ID, 'NO');
									$('#'+aq_type[11].BLOCK).css({"background-position": "0 0"});
									break;

				case 'aq_type_1-2-2':	
									BTN_CLICK('#'+aq_type[11].BTN_ID, 'NO');
									BTN_CLICK('#'+aq_type[13].BTN_ID, 'NO');
									$('#'+aq_type[11].BLOCK).css({"background-position": "0 -248px"});
									break;
									
				case 'aq_type_1-2-3':	
									BTN_CLICK('#'+aq_type[11].BTN_ID, 'NO');
									BTN_CLICK('#'+aq_type[12].BTN_ID, 'NO');
									$('#'+aq_type[11].BLOCK).css({"background-position": "0 -496px"});
									break;
									
				// CALC SET 1-3					
				case 'aq_type_1-3-1':	
									BTN_CLICK('#'+aq_type[15].BTN_ID, 'NO');
									BTN_CLICK('#'+aq_type[16].BTN_ID, 'NO');
									$('#'+aq_type[14].BLOCK).css({"background-position": "-360px 0"});
									break;
									
				case 'aq_type_1-3-2':	
									BTN_CLICK('#'+aq_type[14].BTN_ID, 'NO');
									BTN_CLICK('#'+aq_type[16].BTN_ID, 'NO');
									$('#'+aq_type[14].BLOCK).css({"background-position": "-360px -248px"});
									break;
									
				case 'aq_type_1-3-3':	
									BTN_CLICK('#'+aq_type[14].BTN_ID, 'NO');
									BTN_CLICK('#'+aq_type[15].BTN_ID, 'NO');
									$('#'+aq_type[14].BLOCK).css({"background-position": "-360px -496px"});
									break;
									
				// CALC SET 1-4					
				case 'aq_type_1-4-1':	
									BTN_CLICK('#'+aq_type[18].BTN_ID, 'NO');
									BTN_CLICK('#'+aq_type[19].BTN_ID, 'NO');
									$('#'+aq_type[17].BLOCK).css({"background-position": "-720px 0"});
									break;
									
				case 'aq_type_1-4-2':	
									BTN_CLICK('#'+aq_type[17].BTN_ID, 'NO');
									BTN_CLICK('#'+aq_type[19].BTN_ID, 'NO');
									$('#'+aq_type[17].BLOCK).css({"background-position": "-720px -248px"});
									break;
									
				case 'aq_type_1-4-3':	
									BTN_CLICK('#'+aq_type[17].BTN_ID, 'NO');
									BTN_CLICK('#'+aq_type[18].BTN_ID, 'NO');
									$('#'+aq_type[17].BLOCK).css({"background-position": "-720px -496px"});
									break;

			}
		}
	});

	// OPEN CALC
	$("#open-calculator").click(function (){
		$("#calculator").show(450);
		$("html, body").animate({ scrollTop: $("#calculator").offset().top }, 500);
	});
	
	
	// GO TO CALC
	cur_url = document.URL;
	if (cur_url.indexOf('#calculator') != -1) {
		$("#calculator").show(450);
		$("html, body").animate({ scrollTop: $("#calculator").offset().top }, 500);
	} 
	
	// GO TO POST IN CATEGORY
	/*
	cur_location = window.location.hash;
	if (cur_location != '') {
		$("#cat-bottom-info").fadeIn(200);
		$(".cat-post-full_container:not(#cat-bottom-info)").hide();
		$(cur_location).fadeIn(300);
		offset_bottom = ($(cur_location).offset().top)-25;
		$("html, body").animate({ scrollTop: (offset_bottom+60) }, 300)
					   .animate({ scrollTop: (offset_bottom-15) }, 100)
					   .animate({ scrollTop: offset_bottom }, 100);
	}
	*/

	// CLOSE CALC
	$("#close_calc").click(function (){
		$("#calculator").fadeOut(300);
		$("html, body").animate({ scrollTop: 0 }, 600);
	});
	
	// CLOSE CALC MSG ALERT
	$("#confirm_mail_msg").click(function(){
		if ( $('#msg_type').hasClass('calc_error') ){
			//$("#calculator").fadeOut(300);
			//$("html, body").animate({ scrollTop: 0 }, 600);
			$("#mail-msg-container").animate({"margin-top": "-250px", opacity: 0}, {queue:false, duration: 300}).fadeOut();
			$("#msg_fadescreen").fadeOut(250);
		} else {
			$("#calculator").fadeOut(300);
			$("html, body").animate({ scrollTop: 0 }, 600);
			$("#mail-msg-container").animate({"margin-top": "-250px", opacity: 0}, {queue:false, duration: 300}).fadeOut();
			$("#msg_fadescreen").fadeOut(250);
		}
	});
	
	//FIX HEIGHT IN PARTNERS
	if ( $('#contacts').length ){
		$('.partner_container').each(function(){
			pbs_height = (parseInt($(this).height())-60)+'px';
			$(this).find('.partner_logo').css('height', pbs_height);
		});
	}

	//SHOW MSG
	function ShowCalcMsg(msg_html){
		if ( $('#msg_type').hasClass('calc_error') ){
			$("#msg_info p").text('Ошибка!');
			$("#msg_state").html(msg_html);
			$("#mail-msg-container").fadeIn().animate({"margin-top": "-80px", opacity: 1}, 200)
											 .animate({"margin-top": "-230px"}, 200)
											 .animate({"margin-top": "-147px"}, 200);
			$("#msg_fadescreen").fadeIn(250);
		}
	}
	
	CalcSendMail = function(el){
	var GET_AQ_LENGTH		= '',
		GET_AQ_HEIGHT		= '',
		GET_AQ_WIDTH		= '',
		GET_AQ_WATER_LV		= '',
		GET_AQ_FORM_JOINT	= '',
		GET_AQ_DIAM			= '';

	// GET PARAMS
	// LV 1-1
	if ( $('#aq_type_1').hasClass('btn_state_true') ){
		
		GET_AQ_TYPE = $('#aq_type_1').parent().find('.calc_wd_title').text();
		
		if ( $('#aq_type_1-1').hasClass('btn_state_true') ){
			GET_AQ_FORM = $('#aq_type_1-1').parent().find('.calc_forms_title').text();
			GET_AQ_LENGTH = 	$('#calc_params_set-1').find('.aq_length').val();
			GET_AQ_HEIGHT = 	$('#calc_params_set-1').find('.aq_height').val();
			GET_AQ_WIDTH = 		$('#calc_params_set-1').find('.aq_width').val();
			GET_AQ_WATER_LV = 	$('#calc_params_set-1').find('.aq_water_lv').val();
			GET_AQ_FORM_JOINT = '';
		}
		else if ( $('#aq_type_1-2').hasClass('btn_state_true') ){
			GET_AQ_FORM = $('#aq_type_1-2').parent().find('.calc_forms_title').text();
			GET_AQ_LENGTH = 	$('#calc_params_set-2').find('.aq_length').val();
			GET_AQ_HEIGHT = 	$('#calc_params_set-2').find('.aq_height').val();
			GET_AQ_WIDTH = 		$('#calc_params_set-2').find('.aq_width').val();
			GET_AQ_WATER_LV = 	$('#calc_params_set-2').find('.aq_water_lv').val();
			GET_AQ_FORM_JOINT = $('#calc_params_set-2').find('.aq_form_joint').find('.btn_state_true').parent().find('.aqvi-title').text();
		}
		else if ( $('#aq_type_1-3').hasClass('btn_state_true') ){
			GET_AQ_FORM = $('#aq_type_1-3').parent().find('.calc_forms_title').text();
			GET_AQ_LENGTH = 	$('#calc_params_set-3').find('.aq_length').val();
			GET_AQ_HEIGHT = 	$('#calc_params_set-3').find('.aq_height').val();
			GET_AQ_WIDTH = 		$('#calc_params_set-3').find('.aq_width').val();
			GET_AQ_WATER_LV = 	$('#calc_params_set-3').find('.aq_water_lv').val();
			GET_AQ_FORM_JOINT = $('#calc_params_set-3').find('.aq_form_joint').find('.btn_state_true').parent().find('.aqvi-title').text();
		}
		else if ( $('#aq_type_1-4').hasClass('btn_state_true') ){
			GET_AQ_FORM = $('#aq_type_1-4').parent().find('.aq_form_joint').text();
			GET_AQ_LENGTH = 	$('#calc_params_set-4').find('.aq_length').val();
			GET_AQ_HEIGHT = 	$('#calc_params_set-4').find('.aq_height').val();
			GET_AQ_WIDTH = 		$('#calc_params_set-4').find('.aq_width').val();
			GET_AQ_WATER_LV = 	$('#calc_params_set-4').find('.aq_water_lv').val();
			GET_AQ_FORM_JOINT = $('#calc_params_set-4').find('.aq_form_joint').find('.btn_state_true').parent().find('.aqvi-title').text();
		}
		
	} 
	// LV 1-2
	else if ( $('#aq_type_2').hasClass('btn_state_true') ){
		
		GET_AQ_TYPE = $('#aq_type_2').parent().find('.calc_wd_title').text();

		if ( $('#aq_type_2-1').hasClass('btn_state_true') ){
			GET_AQ_FORM = $('#aq_type_1-1').parent().find('.calc_forms_title').text();
			GET_AQ_LENGTH = 	$('#calc_params_set-5').find('.aq_length').val();
			GET_AQ_HEIGHT = 	$('#calc_params_set-5').find('.aq_height').val();
			GET_AQ_WIDTH = 		$('#calc_params_set-5').find('.aq_width').val();
			GET_AQ_WATER_LV = 	$('#calc_params_set-5').find('.aq_water_lv').val();
			GET_AQ_FORM_JOINT = '';
		}
		else if ( $('#aq_type_2-2').hasClass('btn_state_true') ){
			GET_AQ_FORM = 		$('#aq_type_1-2').parent().find('.calc_forms_title').text();
			GET_AQ_DIAM =	 	$('#calc_params_set-6').find('.aq_diam').val();
			GET_AQ_WATER_LV = 	$('#calc_params_set-6').find('.aq_water_lv').val();
			GET_AQ_FORM_JOINT = '';
		}

	} 
	// LV 1-3
	else if ( $('#aq_type_3').hasClass('btn_state_true') ){
		GET_AQ_TYPE = $('#aq_type_3').parent().find('.calc_wd_title').text();
	
		if ( $('#aq_type_3-1').hasClass('btn_state_true') ){
			GET_AQ_FORM = $('#aq_type_3-1').parent().find('.calc_forms_title').text();
			GET_AQ_LENGTH = 	$('#calc_params_set-7').find('.aq_length').val();
			GET_AQ_WATER_LV = 	$('#calc_params_set-7').find('.aq_water_lv').val();
			GET_AQ_WIDTH = 		$('#calc_params_set-7').find('.aq_width').val();
			GET_AQ_FORM_JOINT = '';
		}
		else if ( $('#aq_type_3-2').hasClass('btn_state_true') ){
			GET_AQ_FORM = $('#aq_type_3-2').parent().find('.calc_forms_title').text();
			GET_AQ_DIAM = 		$('#calc_params_set-8').find('.aq_diam').val();
			GET_AQ_WATER_LV =	$('#calc_params_set-8').find('.aq_water_lv').val();
			GET_AQ_FORM_JOINT = '';
		}

	}

	//CHECK FORM
	GET_MAIL = $('#calc_mail').val(); STATE_MAIL = false;
	GET_NAME = $('#calc_name').val(); STATE_NAME = false;
	GET_TELL = $('#calc_tell').val(); STATE_TELL = false;

	MailPattern = /^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$/;
	MailPatternState = MailPattern.test(GET_MAIL);

	//TellPattern = /[0-9]/;
	//TellPatternState = TellPattern.test(GET_TELL);

	if ( (GET_MAIL != '') && (GET_MAIL != null) && (GET_MAIL.length > 4) && (MailPatternState != false) ){ STATE_MAIL = true; }
	if ( (GET_NAME != '') && (GET_NAME != null) && (GET_NAME.length > 3) ){ STATE_NAME = true; }
	if ( (GET_TELL != '') && (GET_TELL != null) && (GET_TELL.length > 6) ){ STATE_TELL = true; }
		
	if ( (STATE_MAIL == true) && (STATE_NAME == true) && (STATE_TELL == true) ){
		// CALC SEND MAIL
		$.ajax({
		        url: "http://poolglass/wp-content/themes/poolglass/calc_mail.php",
		        global: false,
		        type: "POST",
		        data: ({
		        	toMail: GET_MAIL,
		        	ClientName: GET_NAME,
		        	ClientTell: GET_TELL,
		        	AQ_TYPE: GET_AQ_TYPE,
		        	AQ_FORM: GET_AQ_FORM,
					AQ_LENGTH: GET_AQ_LENGTH,
					AQ_HEIGHT: GET_AQ_HEIGHT,
					AQ_WIDTH: GET_AQ_WIDTH,
					AQ_WATER_LV: GET_AQ_WATER_LV,
					AQ_FORM_JOINT: GET_AQ_FORM_JOINT,
					AQ_DIAM: GET_AQ_DIAM
		           }),
		        dataType: "json",
				success: function(calc_results){
					HIDE_MAILFORM();
					HIDE_LEVE_3();
					HIDE_LEVE_2();
					HIDE_PARAMS();
					HIDE_LEVE_1();
					$("#calculator").fadeOut(300);
					$("html, body").animate({ scrollTop: 0 }, 600);
					
					$("#msg_fadescreen").fadeIn(250);
					
					$('#msg_type').removeAttr('class');
					$("#mail-msg-container").fadeIn().animate({"margin-top": "-80px", opacity: 1}, 200)
													 .animate({"margin-top": "-230px"}, 200)
													 .animate({"margin-top": "-147px"}, 200);
					$("#msg_info p").text('Ваша заявка принята!');
					$("#msg_state").html(calc_results.msgSendState);
		       }
		     }
		);

	} else if ( (STATE_MAIL == false) && (STATE_NAME == false) && (STATE_TELL == false) ){
		$('#msg_type').addClass('calc_error');
		ShowCalcMsg('Проверьте верность введенной информации: <b>почтовый адрес</b>, <b>имя</b>, <b>номер телефон</b>.');
	} else if ( (STATE_MAIL == false) && (STATE_NAME == false) && (STATE_TELL == true) ){
		$('#msg_type').addClass('calc_error');
		ShowCalcMsg('Проверьте верность введенной информации: <b>почтовый адрес</b>, <b>имя</b>.');
	} else if ( (STATE_MAIL == false) && (STATE_NAME == true) && (STATE_TELL == true) ){
		$('#msg_type').addClass('calc_error');
		ShowCalcMsg('Проверьте верность введенной информации: <b>почтовый адрес</b>.');
	} else if ( (STATE_MAIL == true) && (STATE_NAME == false) && (STATE_TELL == false) ){
		$('#msg_type').addClass('calc_error');
		ShowCalcMsg('Проверьте верность введенной информации: <b>имя</b>, <b>телефон</b>.');
	} else if ( (STATE_MAIL == true) && (STATE_NAME == true) && (STATE_TELL == false) ){
		$('#msg_type').addClass('calc_error');
		ShowCalcMsg('Проверьте верность введенной информации: <b>номер телефона</b>.');
	} else if ( (STATE_MAIL == false) && (STATE_NAME == true) && (STATE_TELL == false) ){
		$('#msg_type').addClass('calc_error');
		ShowCalcMsg('Проверьте верность введенной информации: <b>почтовый адрес</b>, <b>телефон</b>.');
	} else if ( (STATE_MAIL == true) && (STATE_NAME == false) && (STATE_TELL == true) ){
		$('#msg_type').addClass('calc_error');
		ShowCalcMsg('Проверьте верность введенной информации: <b>имя</b>.');
	}
	// END CHECK FORM
	
	// END FUNCTION CalcSendMail 
	};
	
});