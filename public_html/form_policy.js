var mode;

$(document).ready(function(){
	/*
	 * Шаг 1
	 */
	$('.sum select').change(function(){
		var total = $('.sum select').val();
		$('#total').html(total);
	});
	$('.sum select').change();

	mode = $('input[name="actio"]').val();

	$('#policy_form .submit .button2 a').live('click', function(){
		
		if(!$(this).parent().parent().is('.disabled')) {
//		  _gaq.push(['_trackPageview', 'Pay1']);
		  
			$('#content .reducer').hide();
			var html = CollectDataFromForm();
			$(document).scrollTop(0);
		} else {
			//$(this).parents('form').submit();
			//return false;
		}
	});

	/*
	 * Шаг 2
	 * */
	$('#content .step_back').live('click', function(){
		$('#content .reducer').show();
		$('#second_step').remove();

		$(document).scrollTop(0);

		// Включаем обратно ссылки
		$('a').removeClass('disabled');

		return false;
	});

	$('a.disabled').live('click', function(e){
		e.preventDefault();
	});

	$('.away_button').live('click', function(e){
		e.preventDefault();
		if (!$(this).is('.disabled')) {
//		  _gaq.push(['_trackPageview', 'PayOk']); //для Google Analytics
		  
			// PO_PREMIUM_GROSS is field for PAY in VISA server!
			$('input[name=PO_PREMIUM_GROSS]:checked, select[name=PO_PREMIUM_GROSS] option:selected').val( $('input[name=PAYMENT]:checked').next().html() );
			//
			$('input[name=PAYMENT]:checked').val( $('input[name=PAYMENT]:checked').next().html() );
			// for /endowment/moneybox/pay/
			if (!$('[name=PO_PREMIUM_GROSS]').length){
				$('<input/>',{
					name:'PO_PREMIUM_GROSS'
					,type:'text'
					,value:$('input[name=PAYMENT]').val()
				}).appendTo($('input[name=PAYMENT]').parents('form'));
			}
			// end // for /endowment/moneybox/pay/

			$('#policy_form').submit();
		}
	});

	if($('#policy_form').length){
		ZForms.attachObserver(
			ZForms.EVENT_TYPE_ON_INIT,
			function (sEventType,oWidget) {
				form_on_update (sEventType,oWidget)
			},
			ZForms.getFormById('policy_form')
		);
	}
});

function CollectDataFromForm() {
	var premium;
	var insurancePayment;

	var h1;
	var highlighted;
	var description = $('#content .extra .incut').clone().removeClass('incut').attr('id', 'description');
	description.find('a').remove();

	
	if (mode == 'pay') {
//		premium = $('input[name="PAYMENT"]:checked').val();
		if($('input[name="PAYMENT"]:checked').length != 0){
			premium = $('input[name="PAYMENT"]:checked').next().html();
		} else {
			premium = $('input[name="PAYMENT"]').val();
		}
//		insurancePayment = $('select[name="PO_PREMIUM_GROSS"], .zf-selected input[name="PO_PREMIUM_GROSS"]').val();
		insurancePayment = '';

		if ( $('.zf-selected input[name="PO_PREMIUM_GROSS"]').length ){
			insurancePayment = $('.zf-selected input[name="PO_PREMIUM_GROSS"]').next().html();
		}else if ( $('select[name="PO_PREMIUM_GROSS"] option:selected').length ){
			insurancePayment = $('select[name="PO_PREMIUM_GROSS"] option:selected').html();
		}else if ( $('input[name="SUM"]:checked').length ){
			insurancePayment = $('input[name="SUM"]:checked').next().html();
		}
		
		


		// for http://www.rsins.ru/endowment/moneybox/pay/?mode=preview
		if ( premium==null){
			premium = $('input[name="PAYMENT"]').val();
			//insurancePayment = premium;
		}

		h1 = $('<h1 />').html('Шаг 2. Оплата полиса');

		highlighted = $('<div class="fieldset highlight pay-policy" />')
			.append($('<div class="reducer" />').html(''
				+ '<strong class="legend">Выбранная программа</strong>'
				+ '<h2>' + $('#content .extra .incut div h2').html() + '</h2>'
				+ '<p>Платеж ' + premium + '&nbsp;<span class="rur">руб.</span><br />'
				+ '<span class="payment-summ">Выплата при страховом случае до ' + insurancePayment + '&nbsp;<span class="rur">руб.</span></span></p>'
			));
	} else {
//		premium = $('.zf-selected input[name="PAYMENT"]').val();
		//premium = $('.zf-selected input[name="PAYMENT"]').next().html();
		if($('input[name="PAYMENT"]:checked').length != 0){
			premium = $('input[name="PAYMENT"]:checked').next().html();
		} else if ( $('#PO_PREMIUM_GROSS').length > 0 ){
			premium = $('#PO_PREMIUM_GROSS').val();
		} else {
			premium = $('input[name="PAYMENT"]').val();
		}
		
		
		if(!isNaN(premium)){
			premium = parseInt(premium).formatMoney(0, ',', ' ');
		}
		

		if ( $('.zf-selected input[name="PO_PREMIUM_GROSS"]').length ){
			insurancePayment = $('.zf-selected input[name="PO_PREMIUM_GROSS"]').next().html();
		}else if ( $('select[name="PO_PREMIUM_GROSS"] option:selected').length ){
			insurancePayment = $('select[name="PO_PREMIUM_GROSS"] option:selected').html();
		}else if ( $('.zf-selected input[name="SUMMA"]').length ){
			insurancePayment = $('.zf-selected input[name="SUMMA"]').next().html();
		} else if ( $('input[name="SUM"]:checked').length ){
			insurancePayment = $('input[name="SUM"]:checked').next().html();
		} else if ( $('input[name="PO_SUMM"]:checked').length ){
			insurancePayment = $('input[name="PO_SUMM"]:checked').next().html();
		}

		h1 = $('<h1 />').html('Шаг 2. Оформление полиса');


		if($('select[name=PO_DMS_PROGRAMM_W]')[0]){
		}else{
			/* Зеленый блок */
			highlighted = $('<div class="fieldset highlight" />');
			legend = $('<strong class="legend" />').html('Выбранные программы');
			var h2 ='';
			h2 = $('<h2 />').html($('select[name=PO_DMS_PROGRAMM]	option:selected').html());
			p = $('<p />').html('Единовременный платеж ' + premium + '&nbsp;<span class="rur">руб.</span><br />'
					+ '<span class="payment-summ">Выплата при страховом случае до ' + insurancePayment + '&nbsp;<span class="rur">руб.</span></span></p>');
			highlighted.append(legend).append(h2).append(p).append(description);
		}

	}



	step2 = $('<div id="step2" />');
	step2.append(h1).append(highlighted);



	var fieldset, reducer;

	$('#policy_form .fieldset').not('.agree').not('.submit').not('.payment').not('.hidden').not('#passport').each(function(){
		var html = '';

		var legend = $(this).find('.legend').html();
		if (legend != null) html += '<strong class="legend">' + legend + '</strong>';

		$(this).find('dl').not('.zf-disabled').each(function(){
			html += '<p>';

			var label = $(this).find('.label label').html();
			var value = '';
			var divider = ': ';

			if (typeof label == 'undefined'){
				label = '';
				divider = '';
			}

			if ($(this).is('.for_select')) {
				var opt_value = $(this).find('select').val();
				value = $(this).find('option[value="' + opt_value + '"]').text();
			} else if ($(this).is('.type_date')) {
				var day = $(this).find('.zf-input-day').val();

				var month_id = $(this).find('select').val();
				var month = $(this).find('option[value="' + month_id + '"]').text();

				var year = $(this).find('.zf-input-year').val();

				value = day + ' ' + month + ' ' + year + '&nbsp;г.';

			} else if ($(this).is('.type_checkbox')) {

				$('.zf-selected label', $(this)).each(function(){
					value += $(this).html() + '; ';
				})

			} else if ( $(this).is('.for_selector') ) {
				var radio = $('input:checked', $(this));
				var radio_label = radio.parent().find('label');
				value = radio_label.html();
			} else {
				value = $(this).find('input, textarea, select').val();
			}


			
			if($(this).find('input[name=ZASTR_PHONE_DOM]') && value == ''){
				html +=  '</p>';
			} else {
				html += label + divider + value + '</p>';
			}
		});

		reducer = $('<div class="reducer" />').html(html);
		fieldset = $('<div class="fieldset" />').append(reducer);
		step2.append(fieldset);
	});

	//premium = parseInt(premium).formatMoney(0, ',', ' ');
	
	if($('select[name=PO_DMS_PROGRAMM_W]')[0]){
		var html = '<hr />'
			+ '<h1>Сумма к оплате ' + $('.you_discount').html() + '&nbsp;<span class="rur">руб.</span></h1>'
			+ '<div class="controls">'
				+ '<span class="pseudo_link step_back">&larr; Исправить данные</span>'
				+ '<div class="away_button">'
					+ '<span class="button button2">' + $('#policy_form .submit .button2').clone().find('.button_c').html('<a href="#">Отправить&nbsp;&rarr;</a>').end().html() + '</span>'
					+ '<div></div>'
				+ '</div>'
			+ '</div>';
	}else if ( $('select[name=PO_DMS_PROGRAMM]') ){
		var html = '<hr />'
			+ '<h1>Сумма к оплате ' + premium + '&nbsp;<span class="rur">руб.</span></h1>'
			//+ '<p>Нажимая на&nbsp;кнопку отправить, я&nbsp;соглашаюсь на&nbsp;обработку и&nbsp;передачу его персональных данных в&nbsp;страховую компанию.</p>'
			+ '<div class="controls">'
				+ '<span class="pseudo_link step_back">&larr; Исправить данные</span>'
				+ '<div class="away_button">'
					+ '<span class="button button2">' + $('#policy_form .submit .button2').clone().find('.button_c').html('<a href="#">Отправить&nbsp;&rarr;</a>').end().html() + '</span>'
					+ '<div></div>'
				+ '</div>'
			+ '</div>';
	} else {

		var html = '<hr />'
			+ '<h1>Сумма к оплате ' + premium + '&nbsp;<span class="rur">руб.</span></h1>'
			//+ '<p>Нажимая на&nbsp;кнопку перехода к&nbsp;оплате, я&nbsp;соглашаюсь на&nbsp;обработку и&nbsp;передачу его персональных данных в&nbsp;страховую компанию. Оплата производится на&nbsp;сайте системы интернет-энквайринга Банка Русский Стандарт.</p>'
			+ '<div class="controls">'
				+ '<span class="pseudo_link step_back">&larr; Исправить данные</span>'
				+ '<div class="away_button">'
					+ '<span class="button button2">' + $('#policy_form .submit .button2').clone().find('.button_c').html('<a href="#">Перейти к&nbsp;оплате&nbsp;&rarr;</a>').end().html() + '</span>'
					+ '<div>на сайт банка, предоставляющего<br /> услугу эквайринга</div>'
				+ '</div>'
			+ '</div>';
	}
	reducer = $('<div class="reducer" />').html(html);
	fieldset = $('<div class="fieldset total" />').append(reducer);
	step2.append(fieldset);

	var card_system = $('<div></div>',{'class':'card-system'}).append( $('.card-system').html() );
	// style: 'display: none',
	step2.append( card_system );


	$('#content .reducer').hide();

	var reducer = $('<div />').addClass('reducer').attr('id', 'second_step').appendTo('#content');
	var main = $('<div />').addClass('main').appendTo(reducer).append(step2);
	var extra = $('<div />').addClass('extra').appendTo(reducer);

	/*
	 * Отключаем ссылки
	 */
	$('a').addClass('disabled');
}

function AgeValidator(oWidget){
	var today = new Date();

	// А это чтобы сразу не показывал ошибку, но напоминал, что поле не заполнено
	if (oWidget.getValue().mValue.year == '' &&
		oWidget.getValue().mValue.month == '' &&
		oWidget.getValue().mValue.day == '') return true;

	// Старше максимального возараста
	if (today.getFullYear() - oWidget.getValue().mValue.year > 70) return false;

	if (today.getFullYear() - oWidget.getValue().mValue.year == 70 &&
		(today.getMonth() + 1) > oWidget.getValue().mValue.month) return false;

	if (today.getFullYear() - oWidget.getValue().mValue.year == 70 &&
		(today.getMonth() + 1) == oWidget.getValue().mValue.month &&
		today.getDate() < oWidget.getValue().mValue.day) return false;

	// Младше минимального возраста
	if (today.getFullYear() - oWidget.getValue().mValue.year < 18) return false;

	if (today.getFullYear() - oWidget.getValue().mValue.year == 18 &&
		(today.getMonth() + 1) < oWidget.getValue().mValue.month) return false;

	if (today.getFullYear() - oWidget.getValue().mValue.year == 18 &&
		(today.getMonth() + 1) == oWidget.getValue().mValue.month &&
		today.getDate() < oWidget.getValue().mValue.day) return false;

	return true;
}


Number.prototype.formatMoney = function(c, d, t){
	var n = this, c = isNaN(c = Math.abs(c)) ? 2 : c, d = d == undefined ? "," : d, t = t == undefined ? "." : t, s = n < 0 ? "-" : "", i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;
	return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};