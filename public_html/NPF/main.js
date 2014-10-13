/*
 Copyright Art. Lebedev | http://www.artlebedev.ru/
 Updated 2010-12-24 by vlalek
*/
jQuery.preventDefaultEvent = function(e, options) {
	options = options || {shift:1, ctrl:1, alt:1, meta:1};
	href = e.currentTarget.href;
	if(((options.shift && e.shiftKey)
		|| (options.alt && e.altKey)
		|| (options.ctrl && e.ctrlKey)
		|| (options.meta && e.metaKey))
		&& href && href.indexOf('#') != 0
		&& href.indexOf('javascript:') != 0
	) return true;
	e.preventDefault();
	return false;
};

Main = function() {
	this.init_DOM();
}

Main.prototype = {
	init_DOM: function() {
		this.jPage = $('#layout');
		this.jLink = $('#popup_link, .popup_link');
		this.jLinkBank = $('#popup_link_2');
		this.jFade = $('#fade');
		this.jPopup = $('#popup');
		this.jPhone = this.jPopup.find('.content .phone');
		this.jClose = $('#popup .close, .submit input, #fade');


		this.phoneCont = $('#phone_container');

		this.bOpened = false;

		this.init();
	},

	init: function() {
		if($.browser.msie && $.browser.version == 6) {
			this.jFade.prepend('<iframe></iframe>');
		}

		this.popup();
		this.ruble_fix();

		var oThis = this;

		$(window).resize(
			function(){
				if(oThis.bOpened){
					oThis.updateFontSize();
				}
			}
		);
	},

	popup: function() {
		var oThis = this;
		this.step = 50/20/100;

		this.jLink.click(function() {
			oThis.jFade.removeClass('not_display');
			oThis.jPopup.removeClass('not_display');

			oThis.bOpened = true;
			oThis.updateFontSize();

			if(!$.browser.msie) {
				oThis.jPopup.animate({opacity: 1}, function() {
					if(oThis.jFade[0].offsetHeight < oThis.jPopup[0].offsetHeight + oThis.jPopup[0].offsetTop) {
						oThis.jFade[0].style.height = oThis.jPopup[0].offsetHeight + oThis.jPopup[0].offsetTop + 'px';
					}
				});
				oThis.jFade.stop().animate({opacity: 0.5});
			}

			oThis.close();
		});
	},

	close: function() {
		var oThis = this;

		this.jClose.click(function() {
			oThis.doClose();
		});

		$(document).keydown(function(e) {
			if (e.keyCode == 27) oThis.doClose();
		});
	},

	doClose: function(that) {
		if($.browser.msie) {
			this.jPopup.addClass('not_display');
			this.jFade.addClass('not_display');
		}
		else {
			this.jPopup.stop().animate({opacity: 0}, function() {
				$(this).addClass('not_display');
			});
			this.jFade.stop().animate({opacity: 0}, function() {
				$(this).addClass('not_display');
			});
		}
	},

	updateFontSize : function(){
		var iFontSize = Math.round(this.jPage.width() / 35) + "px";
		this.jPhone.css("fontSize", iFontSize);

		if($.browser.mozilla){
			this.mozillaFix();
		}
	},

	mozillaFix : function(){
		var that = this;
		this.jPhone.hide();
		setTimeout(
			function(){
				that.jPhone.show();
			},
			1
		);
	},

	ruble_fix: function() {
		var jBody = $('body');

		if($.browser.safari) {
			jBody.addClass('safari');
		}
		if($.browser.mozilla){
			jBody.addClass('ff');
		}
		if($.browser.opera){
			jBody.addClass('opera');
		}
	},

	phoneChanger : function(){
		var oThat = this;

		this.phoneLinks.click(
			function(){
				var currentLink = $(this);
				if (currentLink.hasClass("pseudo_link")){
					oThat.phoneLinks.filter(".selected").removeClass("selected").addClass("pseudo_link");
					currentLink.addClass("selected").removeClass("pseudo_link")
					oThat.jLinkBank.text(currentLink.text()).append("<span class='icon'/>");
					oThat.phoneCont.text(currentLink.next("span").text());
					oThat.jClose.click();
				}
			}
		);
	}
};

function fixIeBug() {
	$(".pseudo_link, .with_hover, .close").hover(
		function(){
			$(this).addClass("hover");
		},
		function(){
			$(this).removeClass("hover");
		}
	);
}


Main.popup_box = {
	append: function(params){
		return new this.item(params);
	},

	item: function(params){
		this.init(params);
	}
};

Main.popup_box.item.prototype = {
	init: function(params){
		this.element = params && params.element ? params.element : this.create(params);
		this.element.addClass('moved');
		var t = this;
		this.element.find('.close').click(function(){t.close();});
	},

	create: function(params){
		return $('<div class="popup_box"><div class="corner lt"></div><div class="corner rt"></div><div class="shadow right iesizing-scale"></div><div class="icon close"></div><div class="content"></div><div class="shadow left iesizing-scale"></div><div class="corner lb"></div><div class="corner rb"></div></div>').appendTo('#header');
	},

	open: function(){
		this.element.removeClass('moved');
		if(!$.browser.msie) {
			this.element.css({opacity: 0});
			this.element.animate({opacity: 1}, 300);
		}
	},

	close: function(){
		var t = this;
		if(!$.browser.msie) {
			t.element.animate({opacity: 0}, 200, function(){
				t.element.addClass('moved');
			});
		}
	}
};

$(function() {
	$('form').append('<input name="hidden" type="hidden" value="hidden"/>');
	new Main();
	if (jCommon.browser.msie && 6 >= parseInt(jCommon.browser.version)) {
		fixIeBug();
	}
});

/*
 * Dropdown menu jquery plugin
 */
(function($){
  $.fn.dropdown = function(options) {

    var settings = {
		dropdown: '.dropdown',
		close: '.close'
    };

    return this.each(function() {
		if (options) $.extend(settings, options);

		// elements
		var self = $(this);
		var dropdown = $(settings.dropdown);

		// init
		dropdown.hide();

		// events
		self.add(dropdown.find(settings.close)).click(function(){
			if (dropdown.is(':visible')) {
				close();
			} else {
				if ($.browser.msie && $.browser.version <= 8) {
					dropdown.show();
					self.addClass('opened');
				}
				else {
					dropdown.fadeIn();
					self.addClass('opened');
				}
			}

			return false;
		});

		dropdown.click(function(e){
			e.stopPropagation();
		});

		$(document).click(function(e){
			close();
		}).keydown(function(e){
			if (e.keyCode == 27) close();
		});

		function close() {
			if (dropdown.is(':visible')) dropdown.hide();
			self.removeClass('opened');
		}
    });

  };
})(jQuery);


/* ----------------------------------------- */
/*                 rounded                   */
/* ----------------------------------------- */
// Скругленные углы
(function($){
  $.fn.rounded = function(options) {

	// сеттингс
    var s = {
		className: 'backgrounded',
		allBrowsers: false
    };

    return this.each(function() {
		if (options) {
			$.extend( s, options );
		}

		var self = $(this).addClass(s.className);

		var lt = $('<ins class="lt" />');
		var rt = $('<ins class="rt" />');
		var lb = $('<ins class="lb" />');
		var rb = $('<ins class="rb" />');
		var lm = $('<ins class="lm" />');
		var rm = $('<ins class="rm" />');

		if (!self.is('table') && (($.browser.msie && $.browser.version < 9) || s.allBrowsers)) {
	//	if (!self.is('table')) {
			self.wrapInner('<div class="inner" />').prepend(lt).prepend(rt).prepend(lb).prepend(rb).prepend(lm).prepend(rm);
		}
    });

  };
})(jQuery);

/* ----------------------------------------- */
/*               text-shadow                 */
/* ----------------------------------------- */
(function($){
  $.fn.textShadow = function(options) {

	// сеттингс
    var s = {
		className: 'shadowed'
    };

    return this.each(function() {
		if ($.browser.msie && $.browser.version < 9) {
			if (options) {
				$.extend( s, options );
			}

			var self = $(this).addClass(s.className);
			var shadow = $('<ins class="text-shadow" />').html(self.text());
			self.append(shadow);
		}
    });

  };
})(jQuery);


$(function(){
	// Все сайты
	$('#navigation .extra p span').addClass('pseudo_link').wrapInner('<span />');
	$('<span class="pipka" />').html('&nbsp;&#9660;').appendTo('#navigation .extra p');
	$('#navigation .extra ul').addClass('navigation');
	$('#navigation .extra p').dropdown({
		dropdown: '#navigation .extra div'
	}).click(function(){
		if($(this).is('.opened')) {
			$(this).find('.pipka').html('&nbsp;&#9650;');
		} else $(this).find('.pipka').html('&nbsp;&#9660;');

	});

	//Кнопка «весь сайт» и появляющееся меню
	$('#path .button2 a, #path .button2 b').wrapInner('<span class="pseudo_link" />');
	$('#path .button2').dropdown({
		dropdown: '#navigation .main .sitemap',
		close: '.close'
	});

	$('#navigation .main .sitemap .close').addClass('pseudo_link').find('.text').html('Закрыть');
	var help_page_link = $('#help_page_link');
	var help_page_sitemap = $('<li class="help" />').html(help_page_link.html());
	help_page_sitemap.insertAfter('#navigation .main .sitemap li:first');


	$('#navigation .sitemap').rounded({
		allBrowsers: true
	});
});

function redraw() {
	if ($.browser.ie && $.browser.version < 7) dociment.body.addClass += '';
}

// Запоминаем айди раскрывашки для страницы «Страховой случай»
/*$(document).ready(function() {
	var className = jCommon.cookie('page_path');
	var block = $('.main .' + className);
	console.log(className, block);

	// пытаемся открыть раскрывашку
	if (block.size()) {
		setTimeout(IfTransformReady, 100, block);
	}

	var thisId = $('link.help_page_documents_list_id').attr('id');
	jCommon.cookie('page_path', thisId ? thisId : null, { path: '/' });
});

function IfTransformReady(block) {
	var lnk = block.find('.pseudo_link');
	if (lnk.size()) {
		lnk.click();
		$(window).scrollTop(lnk.offset().top - 100);
	} else {
		setTimeout(IfTransformReady, 100, block);
	}
}*/
