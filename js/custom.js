$(document).ready(function(){
	var windowWidth = $(window).width();
	var windowSp = 750;
	if (windowWidth <= windowSp) {
		$("meta[name='viewport']").attr('content','width=device-width, initial-scale=1');
    } else {
		$("meta[name='viewport']").attr('content','width=1200');
    } 
})




$(function() {

/*-----------------------------------------------------------------------------------*/

/* 繝壹�繧ｸ繝医ャ繝励∈謌ｻ繧�

/*-----------------------------------------------------------------------------------*/

	var showFlag = false;
	var topBtn = $('#page_top');
	topBtn.css('bottom', '-60px');
	var showFlag = false;
	$(window).scroll(function () {
		if ($(this).scrollTop() > 300) {
			if (showFlag == false) {
				showFlag = true;
				topBtn.stop().animate({'bottom' : '20px'}, 700);
			}
		} else {
			if (showFlag) {
				showFlag = false;
				topBtn.stop().animate({'bottom' : '-60px'}, 300);
			}
		}
	});


/*-----------------------------------------------------------------------------------*/

/* 繧ｹ繝�繝ｼ繧ｹ繧ｹ繧ｯ繝ｭ繝ｼ繝ｫ

/*-----------------------------------------------------------------------------------*/
    $('a[href^="#"]' + 'a:not(.non-scroll)').click(function () {
		var speed = 500;
		var href = $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var windowWidth = $(window).width();
		var windowSp = 768;
		if (windowWidth <= windowSp) {
			var position = target.offset().top - 126;
		} else {
			var position = target.offset().top - 126;
		}
		$('body,html').animate({scrollTop:position}, speed, 'swing');
		return false;
    });


/*-----------------------------------------------------------------------------------*/

/* 繧ｯ繝ｪ繝�け繧､繝吶Φ繝�

/*-----------------------------------------------------------------------------------*/
	//繧｢繧ｳ繝ｼ繝�ぅ繧ｪ繝ｳ
	$('body').on('click', 'header hgroup nav ul.list03 li', function() {
		var windowWidth = $(window).width();
		var windowSp = 768;
		if (windowWidth <= windowSp) {
			$(this).children('ul').slideToggle().toggleClass("active");
			if($(this).children('ul').hasClass('active')){
				$(this).children('img').attr('src' ,'../img/index/sp_icon_img_02_2.gif')
			}else{
				$(this).children('img').attr('src' ,'../img/index/sp_icon_img_02.gif')
			}
		}
	});
	$('body').on('click', 'header hgroup nav form .onlyTB', function() {
		$('header hgroup nav form').toggleClass('active');
	});

	//繝九Η繝ｼ繧ｹ荳隕ｧ繝壹�繧ｸ
	$('body').on('click', '.news_block ul.cf li a', function() {
		$('.news_block ul.cf li').removeClass("active");
		$(this).parent().addClass("active");
		var href = $(this).attr("href");
		$('.tab').fadeOut().removeClass("active");
		$(href).fadeIn().addClass("active");
		return false;
	});

	//IR縺雁撫縺�粋繧上○繝壹�繧ｸ
	$('body').on('click', '.contacts_block_client ul li a', function() {
		$('.contacts_block_client ul.cf li').removeClass("active");
		$(this).parent().addClass("active");
		var href = $(this).attr("href");
		$('.tab').fadeOut().removeClass("active");
		$(href).fadeIn().addClass("active");
		return false;
	});
	$('body').on('click', '.ir_faq_block dl dt', function() {
		$(this).next().slideToggle();
		$(this).parent().toggleClass("active");
	});

	//繧医￥縺ゅｋ縺碑ｳｪ蝠洲AQ繝壹�繧ｸ
	$('body').on('click', '.faq_block_faq dl dt', function() {
		$(this).next().slideToggle();
		$(this).parent().toggleClass("active");
	});


/*-----------------------------------------------------------------------------------*/

/* 繝倥ャ繝繝｡繝九Η繝ｼ

/*-----------------------------------------------------------------------------------*/
	$('#head_hmb_open').click(function(){
		if($("#home_pre_nav").hasClass('active')){
			$("#home_pre_nav").slideUp();
			$("#home_pre_nav").removeClass("active");
		}else{
			$("#home_pre_nav").slideDown();
			$("#home_pre_nav").addClass("active");
		}
	});
	var menuFlag = 0;
	$('.btnMenu').click(function() {
		if (menuFlag == 0) {
			$('.btnMenu').addClass('menuOpen');
			menuFlag = 1;
		} else {
			$('.btnMenu').removeClass('menuOpen');
			menuFlag = 0;
		}
	});
	var windowWidth = $(window).width();
	var windowSp = 768;
	var headerH = $('header hgroup').innerHeight();
	var headerimgW = $('header hgroup .nav_static .right .sp_nav a .contact_img').width();
	var headerimgH = $('header hgroup .nav_static .right .sp_nav a .contact_img').height();
	
	if (windowWidth <= windowSp) {
		$('.mv').css({marginTop: headerH});
		$('#home_pre_nav').css({marginTop: headerH});
		$('#head_hmb_open').css({width: headerimgW});
		$('#head_hmb_open').css({height: headerimgH});
	}
});


/*-----------------------------------------------------------------------------------*/

/* TEL逡ｪ蜿ｷ蛻�ｊ譖ｿ縺�

/*-----------------------------------------------------------------------------------*/
$(function(){
    var ua = navigator.userAgent;
    if(ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0){
        $('.tel-link').each(function(){
            var str = $(this).text();
            $(this).html($('<a>').attr('href', 'tel:' + str.replace(/-/g, '')).append(str + '</a>'));
        });
    }
});


/*-----------------------------------------------------------------------------------*/

/* fade-up

/*-----------------------------------------------------------------------------------*/
$(window).on('load',function(){

	// fade-up
    $(window).scroll(function (){
        $('.fade-up').each(function(){
            var POS = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();

            if (scroll > POS - windowHeight){
                $(this).css({
                        'opacity':'1',
                        'transform':'translateY(0)',
                        '-webkit-transform':'translateY(0)',
                        '-moz-transform':'translateY(0)',
                        '-ms-transform':'translateY(0)'
                });
            } else {
                $(this).css({
                        'opacity':'0',
                        'transform':'translateY(20px)',
                        '-webkit-transform':'translateY(20px)',
                        '-moz-transform':'translateY(20px)',
                        '-ms-transform':'translateY(20px)'
                });
            }
        });
    });
});


$(function() {
	$(document).ready(function(){
		var windowWidth = $(window).width();
		var windowSp = 768;
		if (windowWidth <= windowSp) {
			var browser = $(window).innerHeight();
			var headerHeight = $('hgroup').innerHeight();
			var mv = browser-headerHeight;
			$('.mv').height(mv);
			$('#slider').height(mv);
			$('#slider li').height(mv);
			$('.bx-viewport').height(mv);
		}
	});
	var widthFlag = '';
	$(function() {
		$(window).on('load resize', function() {
			widthCheck();
		});
	});

	function widthCheck() {
		var winWidth = $(window).width();
		if(winWidth <= 768 && widthFlag != 'sp') {
			var browser = $(window).innerHeight();
			var headerHeight = $('hgroup').innerHeight();
			var mv = browser-headerHeight;
			$('.mv').height(mv);
			$('#slider').height(mv);
			$('#slider li').height(mv);
			$('.bx-viewport').height(mv);
		} else {
			$('.mv').height('');
			$('#slider').height('');
			$('#slider li').height('');
		}
	}
});


/*-----------------------------------------------------------------------------------*/

/* 繝九Η繝ｼ繧ｹ荳隕ｧ繝壹�繧ｸSP

/*-----------------------------------------------------------------------------------*/
$(document).ready(function(){
	if($(window).width() > 769){
	} else {
		//繧｢繧ｳ繝ｼ繝�ぅ繧ｪ繝ｳ蜍輔″
		$("ul.sptab li").removeClass("active");
		$(function(){
			$("p.cate_title").click(function() {
				$(this).next("ul").slideToggle();
				$(this).toggleClass("open");
			});
			$("ul.sptab li").click(function() {
				$(this).parent("ul").slideToggle();
			});
		});

		//荳翫�繝｡繝九Η繝ｼ縺ｮ險倅ｺ玖｡ｨ遉ｺ蛻�ｲ�
		$(".news_block ul li").on("click", function() {
			$(this).toggleClass("active");
			var href = $(this).children("a").attr("href");
			//alert(href);
			if (href == "#tab01"){
				$(".news_block p.cate_title").text("蜈ｨ縺ｦ")
			} else if(href == "#tab02") {
				$(".news_block p.cate_title").text("謗｡逕ｨ諠��ｱ")
			} else if(href == "#tab03") {
				$(".news_block p.cate_title").text("IR")
			} else if(href == "#tab04") {
				$(".news_block p.cate_title").text("繝九Η繝ｼ繧ｹ")
			} else {
				$(".news_block p.cate_title").text("縺昴�莉�")
			}
			$('.tab').fadeOut().removeClass("active");
			$(href).fadeIn().addClass("active");
			return false;
		});
	}
});


/*-----------------------------------------------------------------------------------*/

/* 繝槭ロ繧ｸ繝｡繝ｳ繝井ｽ灘宛繧ｿ繝�

/*-----------------------------------------------------------------------------------*/
$(document).ready(function(){
	//繧ｿ繝悶�荳逡ｪ譛蛻昴ｒ髢九￥縲�
	$("ul.management_nav li:nth-child(1)").addClass("active");
	$("#management_section01").addClass("active");

	//繧ｿ繝夜∈謚�
	$('body').on('click', 'ul.management_nav li a', function() {
		$("ul.management_nav li").removeClass("active");
		$(this).addClass("active");
		$('#management_section01').hide();
		$('#management_section02').hide();
		$('#management_section03').hide();
		$('#management_section04').hide();
		var href = $(this).attr('href')
		$(href).fadeIn();
		return false;
	});
});
$(document).ready(function(){
	if(location.href.match(/\#management_section04/)) {
		var $to_link = location.href.split('#');
		$("ul.management_nav li").removeClass("active");
		$('#' + $to_link[1] + '_tab').addClass("active");
		$('#management_section01').hide();
		$('#management_section02').hide();
		$('#management_section03').hide();
		$('#management_section04').hide();
		$('#' + $to_link[1]).fadeIn();
		
		var speed = 500;
		var href = '#management_section04';
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top - 126;
		$('body,html').animate({scrollTop:position}, speed, 'swing');
		return false;
	}
});


/*-----------------------------------------------------------------------------------*/

/* 諡�轤ｹ繝壹�繧ｸ

/*-----------------------------------------------------------------------------------*/
$(document).ready(function(){
	var windowWidth = $(window).width();
	var windowSp = 768;
	if (windowWidth <= windowSp) {
		$('body').on('click', '.company_block_office .company_block_office_block01 .block01_right dl dt', function() {
			$(this).next().stop().slideToggle();
			$(this).parent().toggleClass("active");
		});
	}
});


/*-----------------------------------------------------------------------------------*/

/* 繧ゅ�縺･縺上ｊ逕ｨ隱樣寔繝壹�繧ｸ

/*-----------------------------------------------------------------------------------*/
$(document).ready(function(){
	//繧ｿ繝悶�荳逡ｪ譛蛻昴ｒ髢九￥縲�
	$(".column_block_glossary .tab_box .tab_one li:nth-child(1)").addClass("open");
	$(".column_block_glossary .tab_box .tab_two #two_01").addClass("open");
	$(".column_block_glossary .tab_box .tab_two #two_01 ul li:nth-child(1)").addClass("active");
	$(".column_block_glossary .tab_box #textArea01.textArea01 .box:nth-child(1)").addClass("open");

	//莠泌香髻ｳ鬆�√い繝ｫ繝輔ぃ繝吶ャ繝医�驕ｸ謚�
	$("body").on("click", ".column_block_glossary .tab_box .tab_one li", function() {
		$(this).parent().children().removeClass("open");
		$(this).addClass("open");
		$(".column_block_glossary .tab_box .tab_two li").removeClass("open");
		$(".column_block_glossary .tab_box .tab_two li ul li").removeClass("active");
		$(".column_block_glossary .tab_box #textArea01 .box").removeClass("open");
		$(".column_block_glossary .tab_box #textArea02 .box").removeClass("open");
		//莠泌香髻ｳ鬆�√い繝ｫ繝輔ぃ繝吶ャ繝医�驕ｸ謚槭〒荳九�繝懊ャ繧ｯ繧ｹ陦ｨ遉ｺ
		if($(".column_block_glossary .tab_box .tab_one #one_01").hasClass("open")){
			$(".column_block_glossary .tab_box .tab_two #two_01").addClass("open");
			$(".column_block_glossary .tab_box .tab_two #two_01 ul li:nth-child(1)").addClass("active");
			$(".column_block_glossary .tab_box #textArea01.textArea01 .box:nth-child(1)").addClass("open");
		} else {
			$(".column_block_glossary .tab_box .tab_two #two_02").addClass("open");
			$(".column_block_glossary .tab_box .tab_two #two_02 ul li:nth-child(1)").addClass("active");
			$(".column_block_glossary .tab_box #textArea02.textArea02 .box:nth-child(1)").addClass("open");
		}
	}).first().click();

	//譁�ｭ鈴∈謚�
	$("body").on("click", ".column_block_glossary .tab_box .tab_two li ul li", function() {
		$(".column_block_glossary .tab_box .tab_two li ul li").removeClass("active");
		var num = $(this).parent().children("li").index(this);
		$(this).parent(".column_block_glossary .tab_box .tab_two li ul").each(function(){
			$(">li",this).removeClass("active").eq(num).addClass("active");
		});
		//繝�く繧ｹ繝医�繝�け繧ｹ陦ｨ遉ｺ
		if($(".column_block_glossary .tab_box #textArea01.textArea01 .box").hasClass('open')){
			$(".column_block_glossary .tab_box #textArea01.textArea01 .box").removeClass('open').eq(num).addClass('open');
		} else {
			$(".column_block_glossary .tab_box #textArea02.textArea02 .box").removeClass('open').eq(num).addClass('open');
		}
	}).first().click();
});
$(document).ready(function(){
	var tmp_url = location.href;
	if ( (tmp_url.indexOf('contacts/ir/#tab02') != -1) ) {
		var speed = 1;
		var target = $('#area');
		var position = 0;
		$('body,html').animate({scrollTop:position}, speed, 'swing');
		return false;
	}
});

/*-----------------------------------------------------------------------------------*/

/* 莠区･ｭ邏ｹ莉� 鬮倥＆險ｭ螳�

/*-----------------------------------------------------------------------------------*/
$(window).on('load resize', function(){
	var w = $(window).width();
	var x = 768;
	if (w < x) {
		//逕ｻ髱｢繧ｵ繧､繧ｺ縺�768px譛ｪ貅縺ｮ縺ｨ縺阪�蜃ｦ逅�
	} else {
		var photo_h = $(".photo_box .box .photo img").height();
		//alert(photo_h);
		$(".photo_box .box .text .div_in").css('height', photo_h);

		var text_h = $(".photo_box .box .text .div_in").height();
		//alert(text_h);
		$(".photo_box .box .photo .div_in").css('height', text_h);
	}
});


/*-----------------------------------------------------------------------------------*/

/* 豐ｿ髱ｩ繝壹�繧ｸ

/*-----------------------------------------------------------------------------------*/
$(document).ready(function(){
	if($(window).width() > 769){
	} else {
		$('#history01').hide();
		$('#history02').show();
		$(".box_history p.cate_title").text($($('ul.sptab li:first-child a')).text())
		$('body').on('click', 'ul.sptab li a', function() {
			$(".box_history p.cate_title").text($(this).text())
			$('#history01').hide();
			$('#history02').hide();
			$('#right_history').hide();
			var href = $(this).attr('href')
			$(href).fadeIn();
			return false;
		});
		$('body').on('click', 'ul.sptab li a.selected', function() {
			$(".box_history p.cate_title").text($(this).text())
			$('#history01').fadeIn();
			$('#history02').fadeIn();
			$('#right_history').fadeIn();
			return false;
		});

	}
});


/*-----------------------------------------------------------------------------------*/

/* 諡�轤ｹ荳隕ｧ繝壹�繧ｸ

/*-----------------------------------------------------------------------------------*/
$(document).ready(function(){
	var tmp_url = location.href ;
	if ( (tmp_url.indexOf('office/?area') != -1) || (tmp_url.indexOf('office/?kind') != -1) || (tmp_url.indexOf('office/?pref') != -1) ) {
		$target = '#area';
		if (tmp_url.indexOf('#') != -1){
			$to_link = tmp_url.split('#');
			$target = '#' + $to_link[1];
		}
		var speed = 500;
		var target = $($target);
		var position = target.offset().top-100;
		$('body,html').animate({scrollTop:position}, speed, 'swing');
		return false;
	}
});

/*-----------------------------------------------------------------------------------*/

/* 諡�轤ｹ荳隕ｧ繝壹�繧ｸ

/*-----------------------------------------------------------------------------------*/
$(function() {
	if(typeof lightbox == "function"){
	    lightbox.option({
	    });
    }
});

/*-----------------------------------------------------------------------------------*/

/* 繧医￥縺ゅｋ縺碑ｳｪ蝠上�繝ｼ繧ｸ

/*-----------------------------------------------------------------------------------*/
$(document).ready(function(){
	var tmp_url = location.href ;
	if ( (tmp_url.indexOf('faq/client/#') != -1) || (tmp_url.indexOf('faq/personal/#') != -1) ) {
		$to_link = tmp_url.split('#');
		$target = '#' + $to_link[1];
		var speed = 500;
		var target = $($target);
		var position = target.offset().top-100;
		$('body,html').animate({scrollTop:position}, speed, 'swing');
		$($target).children('dd').css('display', 'block');
		return false;
	}
});

/*-----------------------------------------------------------------------------------*/

/* 繧ゅ�縺･縺上ｊ逕ｨ隱樣寔繝壹�繧ｸ

/*-----------------------------------------------------------------------------------*/
$(document).ready(function(){
	var tmp_url = location.href ;
	if ( tmp_url.indexOf('glossary/#all_') != -1) {
		$to_link = tmp_url.split('#');
		$target = '#' + $to_link[1];
		
		//蜈ｨ縺ｦ陦ｨ遉ｺ
		$(".column_block_glossary .tab_box .tab_one li").removeClass("open");
		$(".column_block_glossary .tab_box .tab_two li").removeClass("open");
		$(".column_block_glossary .tab_box .tab_two li ul li").removeClass("active");
		$(".column_block_glossary .tab_box #textArea01 .box").removeClass("open");
		$(".column_block_glossary .tab_box #textArea02 .box").removeClass("open");
		if($to_link[2] == '0'){
			//莠泌香髻ｳ
			$(".column_block_glossary .tab_box .tab_one li#one_01").addClass("open");
			$(".column_block_glossary .tab_box .tab_two li#two_01").addClass("open");
			$(".column_block_glossary .tab_box .tab_two li#two_01 ul li").eq(30).addClass("active");
			$(".column_block_glossary .tab_box #textArea01.textArea01 .box").removeClass('open').eq(30).addClass('open');
		} else {
			//繧｢繝ｫ繝輔ぃ繝吶ャ繝�
			$(".column_block_glossary .tab_box .tab_one li#one_02").addClass("open");
			$(".column_block_glossary .tab_box .tab_two li#two_02").addClass("open");
			$(".column_block_glossary .tab_box .tab_two li#two_02 ul li").eq(22).addClass("active");
			$(".column_block_glossary .tab_box #textArea02.textArea02 .box").removeClass('open').eq(22).addClass('open');
		}
		var speed = 500;
		var target = $($target);
		var position = target.offset().top-100;
		$('body,html').animate({scrollTop:position}, speed, 'swing');
		return false;
	}
});

/*-----------------------------------------------------------------------------------*/

/* 繝槭ロ繧ｸ繝｡繝ｳ繝井ｽ灘宛

/*-----------------------------------------------------------------------------------*/
$(document).ready(function(){
	if(location.href.match(/\#privacy/)) {
		$("ul.management_nav li").removeClass("active");
		$('#management_section03_tab').addClass("active");
		$('#management_section01').hide();
		$('#management_section02').hide();
		$('#management_section03').hide();
		$('#management_section04').hide();
		$('#management_section03').fadeIn();


		var speed = 500;
		var href = '#privacy';
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top - 126;
		$('body,html').animate({scrollTop:position}, speed, 'swing');
		return false;
	}
});
