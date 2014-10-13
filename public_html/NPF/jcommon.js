/**
 * @author Vlad Yakovlev (red.scorpix@gmail.com)
 * @copyright Art.Lebedev Studio (http://www.artlebedev.ru)
 * @version 0.2.3.1
 * @date 2009-08-18
 * @requires jQuery 1.3.2
 *
 * @changelog
 * Version 0.2.3.1
 * Исправлен баг в <code>jCommon.measurer</code>.
 * Добавлена функция <code>jCommon.getXml</code>.
 *
 * @changelog
 * Version 0.2.3
 * <code>jCommon.popup</code> переименован в <code>jCommon.popupWindow</code>, исправлены ошибки, добавлены комментарии.
 * <code>jCommon.keyNavigation</code> переименован в <code>jCommon.shortcuts</code>, добавлены комментарии.
 * <code>jCommon.popupBlock</code> дорос до версии 2.1.5.
 * <code>jCommon.labelPlaceholder</code> дорос до версии 0.1.2.
 * Добавлен <code>jCommon.eventDispatcher</code> версии 1.0.
 *
 * @changelog
 * Version 0.2.2
 * Добавлен <code>jCommon.ns.ev</code>.
 *
 * @changelog
 * Version 0.2.1
 * Вместо переменной <code>jCommon.isCanvas</code> теперь <code>jCommon.support</code>, который имеет три свойства-флага: <code>canvas</code>, <code>svg</code>, <code>vml</code>.
 * Механизм фикса полупрозрачных png в IE6 перенесен в функцию <code>jCommon.fixIePng</code>.
 * Механизм создания плейсхолдеров, как в Webkit, перенесен в <code>jCommon.webkitPlaceholder</code>. Можно добавлять вручную текстовые элементы формы.
 * <code>jCommon.utils</code> перенесен в <code>jCommon.keyNavigation</code> и <code>jCommon.poup</code>.
 * Добавлен <code>jCommon.ns</code>, который содержит неймспейсы <code>svg</code> и <code>xlink</code>.
 * Добавлен <code>jCommon.labelPlaceholder</code>.
 * Добавлен <code>jCommon.browser</code>.
 * Добавлен <code>jCommon.popupBlock</code>.
 * Удален <code>jCommon.object</code>.
 * Исправление бага — теперь не добавляются новые html-элементы в <code>jCommon.measurer</code>.
 */

jCommon = {};


/**
 * @author John Resig (http://jquery.com/), Vlad Yakovlev (red.scorpix@gmail.com)
 * @version 1.0
 */
jCommon.browser = (function() {
	var userAgent = window.navigator.userAgent.toLowerCase();

	return {
		version: (userAgent.match( /.+(?:rv|it|ra|ie)[\/: ]([\d.]+)/ ) || [0,'0'])[1],
		webkit: /webkit/.test(userAgent),
		opera: /opera/.test(userAgent),
		msie: /msie/.test(userAgent) && !/opera/.test(userAgent),
		mozilla: /mozilla/.test(userAgent ) && !/(compatible|webkit)/.test(userAgent),
		safari: /safari/.test(userAgent) && !/chrome/.test(userAgent),
		chrome: /chrome/.test(userAgent)
	};
})();


/**
 * Создает куки или возвращает значение.
 *
 * @example $.cookie('the_cookie', 'the_value');
 * @desc Задает куки для сессии.
 * @example $.cookie('the_cookie', 'the_value', { expires: 7, path: '/', domain: 'site.com', secure: true });
 * @desc Создает куки с опциями.
 * @example $.cookie('the_cookie', null);
 * @desc Удаляет куки.
 * @example $.cookie('the_cookie');
 * @desc Возвращает значение куки.
 *
 * @param String name Имя куки.
 * @param String value Значение куки.
 * @param Object options Объект опций куки.
 * @option Number|Date expires Either an integer specifying the expiration date from now on in days or a Date object.
 *                             If a negative value is specified (e.g. a date in the past), the cookie will be deleted.
 *                             If set to null or omitted, the cookie will be a session cookie and will not be retained
 *                             when the the browser exits.
 * @option String path The value of the path atribute of the cookie (default: path of page that created the cookie).
 * @option String domain The value of the domain attribute of the cookie (default: domain of page that created the cookie).
 * @option Boolean secure If true, the secure attribute of the cookie will be set and the cookie transmission will
 *                        require a secure protocol (like HTTPS).
 * @return Значение куки или объект jCommon.
 * @author Klaus Hartl/klaus.hartl@stilbuero.de
 * @version 1.0
 */
jCommon.cookie = function(name, value, options) {

	if ('undefined' != typeof value) {
		options = options || {};

		if (null === value) {
			value = '';
			options.expires = -1;
		}

		var expires = '';

		if (options.expires && ('number' == typeof options.expires || options.expires.toUTCString)) {
			var date;

			if ('number' == typeof options.expires) {
				date = new Date();
				date.setTime(date.getTime() + (options.expires * 24 * 60 * 60 * 1000));
			} else {
				date = options.expires;
			}

			expires = '; expires=' + date.toUTCString(); // use expires attribute, max-age is not supported by IE
		}

		// CAUTION: Needed to parenthesize options.path and options.domain
		// in the following expressions, otherwise they evaluate to undefined
		// in the packed version for some reason...
		var path = options.path ? '; path=' + options.path : '';
		var domain = options.domain ? '; domain=' + options.domain : '';
		var secure = options.secure ? '; secure' : '';
		document.cookie = [name, '=', encodeURIComponent(value), expires, path, domain, secure].join('');

		return this;
	}

	var cookieValue = null;

	if (document.cookie && '' != document.cookie) {
		var cookies = document.cookie.split(';');

		for (var i = 0; i < cookies.length; i++) {
			var cookie = jQuery.trim(cookies[i]);

			// Does this cookie string begin with the name we want?
			if (cookie.substring(0, name.length + 1) == (name + '=')) {
				cookieValue = decodeURIComponent(cookie.substring(name.length + 1));

				break;
			}
		}
	}

	return cookieValue;
};


/**
 * Попапы с открытием нового окна браузера.
 *
 * После загрузки документа автоматически создаются хэндлеры на создание попапов у элементов с классом <code>popup</code>.
 * @param {String|Array[Element]|Element|jQuery} el Элемент(ы) jQuery.
 * @param {Object} options Свойства создаваемого окна.
 *
 * @example
 * jCommon.popupWindow.add('.popup_els', { menubar: 'yes' });
 *
 * @version 0.1.1
 * @date 2009-08-12
 */
jCommon.popupWindow = (function() {

	$(function() {
		$('.popup').each(function() {
			var popup = new Popup(this);
		});
	});

	/**
	 * Класс для создания попапов.
	 * @param {String|Array[Element]|Element|jQuery} el Элемент(ы) jQuery.
	 * @param {Object} options Свойства создаваемого окна.
	 */
	function Popup(el, options) {

		$(el).click(function() {
			bind($(this).attr('href'), '', undefined === options ? {} : options);

			return false;
		});

		/**
		 * Создает попап.
		 * @param {String} url Адрес, по которому откроется попап. Если указано изображение, то создается тело документа с изображением внутри.
		 * @param {String} name Тайтл окна.
		 * @param {Object} options Свойства окна.
		 */
		function bind(url, name, options) {
			var popupDefaults = {
				height: 600,
				menubar: 'no',
				resizeable: 'yes',
				scrollbars: 'yes',
				status: 'yes',
				toolbar: 'no',
				width: 540
			};
			var optionsPlane = [];
			var empty = {};

			options = $.extend(empty, popupDefaults, options);
			options.left = Math.round((screen.availWidth - options.width) / 2);
			options.top = Math.round((screen.availHeight - options.height) / 2);

			for (var id in options) {
				optionsPlane.push(id + '=' + options[id]);
			}

			/** @type {Window} */
			var newWindow = window.open(url, '', optionsPlane.join(','));

			if (url.match(/\.(gif|jpe?g|png)$/i)) {
				newWindow.document.open();
				newWindow.document.write('<html><head>' + ('' != name ? '<title>' + name + '</title>' : '') + '</head><body style="background: #fff; margin: 0; padding: 0;">' +
					'<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%"><tr><td align="center">' +
					'<img src="' + url + '" />' + '</td></tr></table></body></html>');
				newWindow.document.close();
			}

			newWindow.focus();
		}
	}

	return function(el, options) {
		$(el).each(function() {
			var popup = new Popup(this, options);
		});
	};
})();


/**
 * Объект для работы с клавиатурными сокращениями.
 *
 * @example
 * jCommon.shortcuts.unbind('next');
 * jCommon.shortcuts.bind('prev', 'http://ya.ru', 0x24, true);
 *
 * @version 1.0
 * @date 2009-08-11
 */
jCommon.shortcuts = (function() {
	var navigationLinks = {
		'start': { keyCode: 0x24, ctrlKey: true, altKey: false },
		'prev':  { keyCode: 0x25, ctrlKey: true, altKey: false },
		'up':    { keyCode: 0x26, ctrlKey: true, altKey: false },
		'next':  { keyCode: 0x27, ctrlKey: true, altKey: false },
		'down':  { keyCode: 0x28, ctrlKey: true, altKey: false }
	};

	$(function() {
		$('link').each(function() {

			var rel = $(this).attr('rel');

			if (navigationLinks[rel]) {
				navigationLinks[rel].href = $(this).attr('href');
			}
		});

		$(document).keydown(function(event) {
			var links = navigationLinks, inputs;

			for (var rel in links) {
				if (
					links[rel].keyCode == event.keyCode
					&& links[rel].ctrlKey == event.ctrlKey
					&& links[rel].altKey == event.altKey
				) {
					try{inputs = $('input:focus, textarea:focus')[0]}catch(e){inputs = null}
					if (!inputs) {
						if ('string' == typeof links[rel].href && '' != links[rel].href) {
							document.location = links[rel].href;
						} else if ($.isFunction(links[rel].href)) {
							return links[rel].href(event);
						}
					}
				}
			}
		});
	});

	return {
		/**
		 * Привязывает к шорткату клавиатуры действие.
		 * @param {String} name Тип действия.
		 * @param {String|Function} href Если строка, то осуществлять переход по адресу, если функция, то выполнить функцию (первый параметр — объект Event).
		 * @param {Number} keyCode Код нажатой клавиши.
		 * @param {Boolean} [ctrlKey] Нажат ли <code>Ctrl</code>.
		 * @param {Boolean} [altKey] Нажат ли <code>Alt</code>.
		 */
		bind: function(name, href, keyCode, ctrlKey, altKey) {
			ctrlKey = new Boolean(ctrlKey);
			altKey = new Boolean(altKey);

			navigationLinks[name] = {
				href: href,
				keyCode: keyCode,
				ctrlKey: ctrlKey,
				altKey: altKey
			};
		},

		/**
		 * Удаляет действие для шортката.
		 * @param {String} name Тип действия.
		 */
		unbind: function(name) {
			delete navigationLinks[name];
		},

		/**
		 * Удаляет все шорткаты.
		 */
		unbindAll: function() {
			navigationLinks = {};
		}
	};
})();


/**
 * Фикс полупрозрачных PNG в IE6.
 * @param {Element} element Элемент, у которого нужно сделать фикс.
 *
 * @version 1.0
 */
jCommon.fixIePng = (function() {
	var
		prefix = 'file:///',
		/** Путь к прозрачному гифу. */
		gifPath = prefix == location.href.substr(0, prefix.length) ? './i/e.gif' : '/f/1/global/e.gif';

	return jCommon.browser.msie && 6 >= parseInt(jCommon.browser.version) ? function(element) {
		/** @type {String} */
		var src;

		if ('IMG' == element.tagName || ('INPUT' == element.tagName && 'image' == element.type)) {
			if (/\.png$/.test(element.src)) {
				src = element.src;
				element.src = gifPath;
			}
		} else {
			src = element.currentStyle.backgroundImage.match(/url\("(.+\.png)"\)/i);

			if (src) {
				src = src[1];
				element.runtimeStyle.backgroundImage = 'none';
			}
		}

		var reScaleMode = /iesizing\-(\w+)/;
		var m = reScaleMode.exec(element.className);

		if (src) {
			var scaleMode = m ? m[1] : 'crop';
			element.runtimeStyle.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + src + "',sizingMethod='" + scaleMode + "')";
		}
	} : function() {};
})();


/**
 * Фикс кэширования картинок на странице в IE6.
 */
if (jCommon.browser.msie && 6 >= parseInt(jCommon.browser.version)) {
	try {
		document.execCommand('BackgroundImageCache', false, true);
	} catch(e) {}
}

if (jCommon.browser.msie && 6 >= parseInt(jCommon.browser.version)) {
	$(window).resize(function() {
		$('#layout')[0].style.width = ((document.documentElement.clientWidth || document.body.clientWidth) < 990) ? '990px' : '100%';
	});
}

String.prototype.stripTags || $.extend(String.prototype, {
	/**
	 * Удаляет тэги.
	 * @return {String}
	 */
	stripTags: function() {
		return this.replace(/<\/?[^>]+>/gi, '');
	}
});

String.prototype.formatNumber || $.extend(String.prototype, {
	/**
	 *
	 * @param {String} groupSeparator
	 * @param {String} fractionSeparator
	 * @return {String}
	 */
	formatNumber: function(groupSeparator, fractionSeparator) {
		var
			groupSeparator = groupSeparator || ' ',
			fractionSeparator = fractionSeparator || ',',
			/** @type {Number} */
			fractionIndex = this.indexOf('.'),
			/** @type {String} */
			fraction = fractionIndex > -1 ? this.substring(fractionIndex + 1) : '',
			/** @type {String} */
			number = fractionIndex > -1 ? this.substring(0, fractionIndex) : this;

		if (5 > number.length) {
			return number + (fractionIndex > -1 ? fractionSeparator + fraction : '');
		}

		var result = '';

		while (3 < number.length) {
			result = number.substring(number.length - 3) + (result.length > 0 ? groupSeparator : '') + result;
			number = number.substring(0, number.length - 3);
		}

		result = number + groupSeparator + result + (-1 < fractionIndex ? fractionSeparator + fraction : '');

		return result;
	}
});

Number.prototype.formatNumber || $.extend(Number.prototype, {

	/**
	 *
	 * @param {String} groupSeparator
	 * @param {String} fractionSeparator
	 * @return {String}
	 */
	formatNumber: function(groupSeparator, fractionSeparator) {
		return this.toString().formatNumber(groupSeparator, fractionSeparator);
	}
});


/**
 * JavaScript выполняется на странице.
 */
$(document.documentElement).addClass('js');




/**
 * Расширения
 */

/**
 * Проверка поддержки SVG, Canvas и VML.
 * Возвращает объект с тремя свойствами-флагами: <code>canvas</code>, <code>svg</code> и <code>vml</code>.
 *
 * @version 1.0
 */
jCommon.support = (function() {
	var result = {
		canvas: false,
		svg: document.createElementNS ? true : false,
		vml: false
	};

	if ('undefined' == typeof(HTMLCanvasElement)) {
		// В IE для VML надо добавить схему и стили.
		if (!document.namespaces['v']) {
			document.namespaces.add('v', 'urn:schemas-microsoft-com:vml');
			document.namespaces.add('o', 'urn:schemas-microsoft-com:office:office');

			var ss = document.createStyleSheet();
			ss.cssText = 'v\\:arc, v\\:curve, v\\:extrusion, v\\:fill, v\\:formulas, v\\:group, v\\:handles, v\\:image, v\\:imagedata, v\\:line, v\\:oval, v\\:path, v\\:polyline, v\\:rect, v\\:roundrect, v\\:shadow, v\\:shape, v\\:shapetype, v\\:stroke, v\\:textbox, v\\:textpath, v\\:vmlframe {behavior:url(#default#VML);display:block;} o\\:callout, o\\:locks, o\\:skew {behavior:url(#default#VML);}';
		}

		result.vml = true;
	} else {
		result.canvas = true;
	}

	return result;
})();


jCommon.ns = {
	/* SVG namespace. */
	svg: 'http://www.w3.org/2000/svg',
	/* XLink namespace. */
	xlink: 'http://www.w3.org/1999/xlink',
	/* XML Events namespace. */
	ev: 'http://www.w3.org/2001/xml-events'
};


/**
 * Отслеживает изменение размеров окна браузера и масштабирование текста.
 * Отслеживание запускается только при добавлении первого хэндлера.
 *
 * @example
 * function funcBind() { alert('yoop'); }
 * jCommon.measurer.bind(funcBind);
 * ... Теперь функция будет выполняться всякий раз, когда изменится размер окна браузера или размер текста.
 * jCommon.measurer.unbind(funcBind);
 * ... А теперь — нет.
 *
 * @version 1.0
 */
jCommon.measurer = (function() {

	var
		callbacks = [],
		interval = 500,
		curHeight,
		el,
		isInit = false,
		isDocReady = false;

	$(function() {
		isDocReady = true;
		isInit && initBlock();
	});

	function initBlock() {
		el = $('<div id="measurer"></div>').css({
			height: '1em',
			left: 0,
			lineHeight: '1em',
			margin: 0,
			position: 'absolute',
			padding: 0,
			top: '-1em',
			visibility: 'hidden',
			width: '100%'
		}).appendTo('body');

		/**
		 * В IE событие <code>onresize</code> срабатывает и на элементах.
		 */
		if (jCommon.browser.msie) {
			el.resize(callFuncs);
			return;
		}

		/**
		 * Для остальных браузеров периодически проверяем изменение размера текста.
		 */
		curHeight = el.height();
		setInterval(function() {
			var newHeight = el.height();

			if (newHeight != curHeight) {
				curHeight = newHeight;
				callFuncs();
			}
		}, interval);
		$(window).resize(callFuncs);
	}

	function callFuncs() {
		for(var i = 0; i < callbacks.length; i++) {
			callbacks[i]();
		}
	}

	return {
		/**
		 * Ручная инициализация события изменения размеров элементов на странице.
		 */
		resize: callFuncs,

		/**
		 * Добавляет обработчик события.
		 * @param {Function} func Ссылка на функцию, которую нужно выполнить.
		 */
		bind: function(func) {
			if (!el) {
				isInit = true;
				isDocReady && initBlock();
			}

			callbacks.push(func);
		},

		/**
		 * Удаляет обработчик события.
		 */
		unbind: function(func) {
			for(var i = 0; i < callbacks.length; i++) {
				callbacks[i] == func && callbacks.splice(i, 1);
			}
		}
	};
})();


/**
 * Эмулирует поведение <input type="search" />, как в Webkit.
 * @version 1.0
 */
jCommon.webkitPlaceholder = (function() {

	if (jCommon.browser.webkit) return { bind: function() {} };

	$(function() {
		$('input[placeholder]').each(function () {
			bind(this);
		});
	});

	/**
	 * Добавляет функцию плейсхолдера элементу.
	 * @param {String|Array[Element]|Element|jQuery} elem Поле ввода
	 * @param {String} [class_empty] Класс для пустого поля ввода
	 */
	function bind(elem, classEmpty) {
		elem = $(elem);
		classEmpty = ('string' === typeof classEmpty) ? classEmpty : 'empty';

		elem.focus(function () {
			if (this.value === $(this).attr('placeholder')) {
				this.value = '';
			}

			$(this).removeClass(classEmpty);
		});

		elem.blur(function () {
			if (!this.value.length) {
				this.value = $(this).attr('placeholder');
				$(this).addClass(classEmpty);
			}
		});

		elem.val().length || $(elem).blur();
	}

	return {
		/**
		 * Вручную добавляет функцию плейсхолдера элементу.
		 * @param {String|Array[Element]|Element|jQuery} elem Поле ввода.
		 * @param {String} [class_empty] Класс для пустого поля ввода.
		 */
		bind: bind
	};
})();


/**
 * Метки как плейсхолдеры.
 *
 * @author Sergey Chikuyonok (serge.che@gmail.com), Vlad Yakovlev (red.scorpix@gmail.com)
 * @version 0.1.2
 * @date 2009-08-12
 *
 * @changelog
 * Version 0.1.2
 * Переименованы функции в <code>bind</code> и <code>unbind</code>.
 *
 * @changelog
 * Version 0.1.1
 * Теперь можно добавлять и удалять плейсхолдеры, но только после загрузки документа.
 */
jCommon.labelPlaceholder = (function() {
	var dataKey = 'labelPlaceholder';
	var fieldsKey = 'bindedFields';

	/**
	 * Инициализирует поля формы, для которых есть заполнитель (placeholder).
	 */
	$(function() {
		$('label.placeholder').each(function(){
			linkPlaceholderWithField(this, '#' + $(this).attr('for'));
		});
	});

	/**
	 * Связывает вместе подпись-заполнитель и поле, к которому она относится.
	 * @param {String|Array[Element]|Element|jQuery} label Подпись-заполнитель
	 * @param {String|Array[Element]|Element|jQuery} input Поле
	 */
	function linkPlaceholderWithField(label, field) {
		label = $(label);
		field = $(field);

		/** @type {Array} */
		var bindedFields = label.data(fieldsKey);

		if (!bindedFields) {
			bindedFields = [];
			label
				.data(fieldsKey, bindedFields)
				.click(focusOnField);
		}

		bindedFields.push(field[0]);
		field.data(dataKey, label)
			.bind('focus blur', placeholderSwitcher)
			.blur();
	}

	/**
	 * Ставит фокус на поле, к которому привязан текущая подпись-заполнитель.
	 * Полезно использовать в случаях, когда один заполнитель привязан
	 * к нескольким полям.
	 * @param {Event} evt
	 */
	function focusOnField(evt) {
		var bindedFields = $(this).data(fieldsKey);

		if (bindedFields) {
			$(bindedFields).filter(':visible:first').focus();
			evt.preventDefault();
		}
	}

	/**
	 * Функция, отвечающая за переключение отображения заполнителя.
	 * Срабатывает автоматически при фокусе/блюре с элемента ввода.
	 * @param {Event} evt
	 */
	function placeholderSwitcher(evt) {
		var
			input = $(this),
			label = input.data(dataKey);

		!$.trim(input.val()) && 'blur' == evt.type ? label.show() : label.hide();
	}

	function bind(label) {
		linkPlaceholderWithField(label, '#' + $(label).attr('for'));
	}

	function unbind(label) {
		label = $(label);
		var field = $('#' + label.attr('for'));

		label
			.data(fieldsKey, '')
			.unbind('click', focusOnField);
		field
			.data(dataKey, '')
			.unbind('focus blur', placeholderSwitcher);
	}

	return {

		/**
		 * Добавляет обработчик.
		 * @param {String|Element|Array[Element]|jQuery} label Элемент метки.
		 */
		bind: bind,

		/**
		 * Удаляет обработчики у элементов.
		 * @param {String|Element|Array[Element]|jQuery} label Элемент метки, у которого нужно удалить обработчик.
		 */
		unbind: unbind
	};
})();


/**
 * Попапы-блоки внутри окна браузера.
 *
 * @param {String|Element|jQuery} Контейнер попапа.
 * @param {Object} options Настройки:
 * <ul>
 *   <li>{String|Element|jQuery} fader - блок тени,</li>
 *   <li>{String|Element|Array[Element]|jQuery} link - блоки для показа/скрытия попапа,</li>
 *   <li>{String|Element|Array[Element]|jQuery} close - блоки для закрытия попапа,</li>
 *   <li>beforeShow - функция, выполняемая перед открытием,</li>
 *   <li>afterShow - функция, выполняемая после открытия,</li>
 *   <li>beforeHide - функция, выполняемая перед закрытием,</li>
 *   <li>afterHide - функция, выполняемая после закрытия.</li>
 * </ul>
 * @return {Object} Функции:
 * <ul>
 *   <li>hide</li>
 *   <li>cancel</li>
 *   <li>show</li>
 *   <li>toggle</li>
 * </ul>
 *
 * @author Stepan Reznikov [stepan.reznikov@gmail.com], Vladislav Yakovlev [red.scorpix@gmail.com]
 * @version 2.1.5
 * @date 2009-08-12
 *
 * @changelog
 * Version 2.1.5
 * Исправлена ошибки, по которой были проблемы с множественным созданием попапов.
 * Оптимизирован код.
 * Обязательная опция блока вынесена в отдельный параметр <code>container</code>.
 *
 * @changelog
 * Version 2.1.4
 * Оптимизирован код.
 *
 * @changelog
 * Version 2.1.3
 * Добавлены комментарии.</li>
 * Параметр <code>showFunction</code> удален.</li>
 * Добавлены параметры <code>beforeShow</code>, <code>afterShow</code>, <code>beforeHide</code>, <code>afterHide</code>.</li>
 *
 * @changelog
 * Version 2.1
 * Флаг <code>keep</code> заменен на <code>event.stopPropagation().</code>
 * Форма появляется и исчезает плавно (под IE появляется/исчезает мгновенно в виду проблем с <code>filter</code>).
 * Добавлен параметр <code>showFunction</code> - функция, выполняемая после показа popup'а.
 */
jCommon.popupBlock = (function() {

	function PopupBlock(container, options) {
		var
			documentClickHandler,
			documentKeyDownHandler;

		container.click(function(event) {
			event.stopPropagation();
		});

		if (options.fader) {
			options.fader = $(options.fader);
		}

		if (options.link) {
			options.link = $(options.link);
			options.link.click(toggle);
		}

		if (options.close) {
			options.close = $(options.close);
			options.close.click(toggle);
		}

		function cancel(event) {
			var code = event.keyCode ? event.keyCode : event.which ? event.which : null;
			code === 27 && hide(event);
		}

		function hide(event) {
			if (container.hasClass('hidden')) return;

			options.beforeHide && options.beforeHide();
			options.fader && options.fader.addClass('hidden');
			container.addClass('hidden');
			$(document)
				.unbind('click', documentClickHandler)
				.unbind('keydown', documentKeyDownHandler);

			options.afterHide && options.afterHide();

			if (event) {
				event.preventDefault();
				event.stopPropagation();
			}
		}

		function show(event) {
			if (!container.hasClass('hidden')) return;

			options.beforeShow && options.beforeShow();
			options.fader && options.fader.removeClass('hidden');

			jCommon.browser.msie ? container.removeClass('hidden') : container.css('opacity', 0).removeClass('hidden').animate({ opacity: 1 }, 300, function() {
				container.css('opacity', '');
				options.afterShow && options.afterShow();
			});

			documentClickHandler = hide;
			documentKeyDownHandler = cancel;

			$(document)
				.click(documentClickHandler)
				.keydown(documentKeyDownHandler);

			jCommon.browser.msie && options.afterShow && options.afterShow();

			if (event) {
				event.preventDefault();
				event.stopPropagation();
			}
		}

		function toggle(event) {
			container.hasClass('hidden') ? show(event) : hide(event);
		}

		return {

			/**
			 * Вызывает событие скрытия попапа.
			 * @param {Event} [event]
			 */
			hide: hide,

			/**
			 * Вызывает событие показа попапа.
			 * @param {Event} [event]
			 */
			show: show,

			/**
			 * Вызывает событие переключения состояния попапа.
			 * @param {Event} [event]
			 */
			toggle: toggle
		};
	}

	return function(container, options) {
		return new PopupBlock($(container), options);
	};
})();


/**
 * Диспетчер любых событий.
 * @author Matthew Foster, Vlad Yakovlev (red.scorpix@gmail.com)
 * @version 1.0
 * @date 2009-08-12
 */
jCommon.eventDispatcher = (function() {

	var listenerChain = {};
	var onlyOnceChain = {};

	/**
	 * Добавляет слушателя события.
	 * @param {String|Array} type Название события или событий через пробел.
	 * @param {Function} listener Слушатель.
	 * @param {Boolean} onlyOnce Подписаться на событие только один раз.
	 */
	function bind(type, listener, onlyOnce) {
		if (!listener instanceof Function) {
			throw new Error("Listener isn't a function");
		}

		var chain = onlyOnce ? onlyOnceChain : listenerChain;

		type = 'string' == typeof(type) ? type.split(' ') : type;

		for (var i = 0; i < type.length; i++) {
			if(!chain[type[i]]) {
				chain[type[i]] = [listener];
			} else {
				chain[type[i]].push(listener);
			}
		}
	}

	/**
	 * Проверяет, есть ли у такого события слушатели.
	 * @param {String} type Название события.
	 * @return {Boolean}
	 */
	function hasBinds(type) {
		return ('undefined' != typeof listenerChain[type] || 'undefined' != typeof onlyOnceChain[type]);
	}

	/**
	 * Удаляет слушателя события.
	 * @param {String} type Название события.
	 * @param {Function} listener Слушатель, который нужно удалить.
	 */
	function unbind(type, listener) {
		if (!hasBinds(type)) return false;

		var chains = [listenerChain, onlyOnceChain];

		for (var i = 0; i < chains.length; i++) {
			/** @type {Array} */
			var lst = chains[i][type];

			for(var j = 0; j < lst.length; j++) {
				lst[j] == listener && lst.splice(j, 1);
			}
		}

		return true;
	}

	/**
	 * Инициирует событие.
	 * @param {String} type Название события.
	 * @param {Object} [args] Дополнительные данные, которые нужно передать слушателю.
	 * @return {Boolean}
	 */
	function dispatch(type, args) {

		if (!hasBinds(type)) return false;

		var
			chains = [listenerChain, onlyOnceChain],
			evt = new CustomEvent(type, args);

		for (var j = 0; j < chains.length; j++) {
			/** @type {Array} */
			var lst = chains[j][type];

			if (lst) {
				for(var i = 0, il = lst.length; i < il; i++) {
					lst[i](evt);
				}
			}
		}

		if (onlyOnceChain[type]) {
			delete onlyOnceChain[type];
		}

		return true;
	}

	/**
	 * Основа события.
	 * @param {String} type Тип события.
	 * @param {Object} [data] Дополнительные данные.
	 */
	function CustomEvent(type, data) {
		this.type = type;

		if (data) {
			this.data = data;
		}
	}

	return {
		/**
		 * Добавляет слушателя события.
		 * @param {String|Array} type Название события или событий через пробел.
		 * @param {Function} listener Слушатель.
		 * @param {Boolean} onlyOnce Подписаться на событие только один раз.
		 */
		bind: bind,

		/**
		 * Проверяет, есть ли у такого события слушатели.
		 * @param {String} type Название события.
		 * @return {Boolean}
		 */
		hasBinds: hasBinds,

		/**
		 * Удаляет слушателя события.
		 * @param {String} type Название события.
		 * @param {Function} listener Слушатель, который нужно удалить.
		 */
		unbind: unbind,

		/**
		 * Инициирует событие.
		 * @param {String} type Название события.
		 * @param {Object} [args] Дополнительные данные, которые нужно передать слушателю.
		 * @return {Boolean}
		 */
		dispatch: dispatch
	};
})();


/**
 * Возвращает XML из строки.
 * @param {String} text XML в строке.
 * @return {Element} XML в объекте.
 *
 * @version 1.0
 * @date 2009-08-18
 *
 * @example
 * $.ajax({
 *   dataType: 'text', // Обязательно, если хочешь получить XML
 *   success: function(data) {
 *     var xmlData = jCommon.getXml(data);
 *     xmlData = $('result', xmlData);
 *   }
 *   // Другие параметры
 * });
 */
jCommon.getXml = function(text) {
	var xmlData = null;

	try {
		if (window.ActiveXObject) { // IE
			xmlData = new ActiveXObject('Microsoft.XMLDOM');
			xmlData.async = false;
			xmlData.loadXML(text);
		} else if (window.DOMParser) { // Все остальные
			var xmlData = (new DOMParser()).parseFromString(text, 'text/xml');
		}

		if (!xmlData || !xmlData.documentElement || 'parsererror' == xmlData.documentElement.nodeName
			|| xmlData.getElementsByTagName('parsererror').length) {
			return false;
		}
	} catch (error) {
		return false;
	}

	return xmlData;
};