var processing_check_timerID;


function Vzr_calc () {
}

Vzr_calc.prototype.init = function(form_id, aCountries) {

	this.form_id = form_id;
	
	this.oFormWidget = ZForms.getFormById(form_id);
	
	if(!this.oFormWidget){
		return;
	}
	
	
	
	this.program = $('#' + form_id + ' input[name=program]');
	this.is_shengen = $('#' + form_id + ' input[name=is_shengen]');
	if(this.is_shengen.length){
		this.is_shengen_val = this.is_shengen.get(0).checked;
	} else  {
		this.is_shengen_val = false;
	}
	
	
	this.update_country_list();


	
	$('#show_apply_fields').live('click', function(){
		if(that.calc()){
			$('.person_birthday .zf-input-year').change();
			$('#' + form_id).addClass('step_application_show');
		}
		
	});
	
	$('.edit_fields').live('click', function(){
		$('#' + form_id).removeClass('step_application_show');
	});
	
	$('.country_container  dd.field').live('click', function(e){
		e.preventDefault();
		$(this).parent().addClass('zf-combolist-active')
	})

	
	$('.country').live('blur change',function(){
		check_min_sum ();
	})
	
	$('#is_shengen').click(function(){
		check_min_sum ();
	})
	
	function check_min_sum () {
		var entered = false;
		var Shengen_err = false;
		var min_val_rur  = 0;
		var val_entered_rur = 0;
		var is_country_shengen = false;
		
		if( $('#is_shengen input:checked').length && $('#is_shengen input:visible').length ){
			min_val_rur = 30000 * rate_euro ;
			val_entered_rur = $('#' + that.form_id + ' input[name=premium]:checked').val() * (($('#' + that.form_id + ' select[name=currency]').val() == 'euro') ? rate_euro : rate_usd);
			
			if(val_entered_rur < min_val_rur && $('#' + that.form_id + ' input[name=program]').val() != 'outbound_multy'){
				//console.log($('#' + that.form_id + ' input[name=program]').val())
				Shengen_err = true;
				$('#info_shengen').html('<br>Для стран Шенгенского союза минимальная сумма страховки 30000 EUR');
				
			}
			
		}
		
		
		$('.country').each(function(){
			
			if($(this).val() == 'Финляндия'){
				entered=true;
			}
			
			
			for (var j = 0; j < aCountries.length; j++) {
				if($(this).val() == aCountries[j].name){
					min_val_rur = aCountries[j].amount * ((aCountries[j].currency == 'EUR') ? rate_euro : rate_usd);
					val_entered_rur = $('#' + that.form_id + ' input[name=premium]:checked').val() * (($('#' + that.form_id + ' select[name=currency]').val() == 'euro') ? rate_euro : rate_usd);
					
					//console.log(aCountries[j], $('#is_shengen input:checked'))
					
					if(aCountries[j].is_europe && $('#is_shengen input:checked').length == 0){
						$('#is_shengen input').get(0).checked = true;
					}
					
					if(val_entered_rur < min_val_rur && $('#' + that.form_id + ' input[name=program]').val() != 'outbound_multy'){
						//console.log($('#' + that.form_id + ' input[name=program]').val())
						Shengen_err = true;
						$('#info_shengen').html('<br>Для указанной вами страны ' + aCountries[j].name + ' минимальная сумма страховки ' + aCountries[j].amount + ' ' + aCountries[j].currency);
						
					}
					
				}
			}
			


			
		});
		
		
		
		
		
		//console.log(min_val_rur, val_entered_rur, Shengen_err)
		if(Shengen_err){
			$('#info_shengen').show()
		} else {
			$('#info_shengen').hide().html('');
		}
		
		//console.log(entered)
		if(entered){
			$('#info_finland').show()
		} else {
			$('#info_finland').hide()
		}
		that.update_date();
	}
	
	

	$('.person_birthday .zf-input-day, .person_birthday .zf-input-month, .person_birthday .zf-input-year').live('blur change click focus',function(){
		var day = ( ($(this).parent().find('.zf-input-day').val() < 10) ? '0' : '') + $(this).parent().find('.zf-input-day').val();
		var month = ( ($(this).parent().find('.zf-input-month').val()< 10) ? '0' : '') + $(this).parent().find('.zf-input-month').val();
		var year = ( ($(this).parent().find('.zf-input-year').val() < 100) ? '19' : '')  + $(this).parent().find('.zf-input-year').val();
		var entered = day + '.' + month + '.' + year;
		
		$(this).parent().find('.show_2step').html(entered);
	})
	
	
	var that = this;
	
	ZForms.attachObserver(
		ZForms.EVENT_TYPE_ON_INIT,
		function (sEventType,oWidget) {
			form_on_update (sEventType,oWidget)
		},
		ZForms.getFormById(this.form_id)
	);
	
	$('#submit_btn').click(function(){
		if(that.oFormWidget.isReadyForSubmit()){
			$('#' + form_id).get(0).submit();
		} else {
			return false;
		}
	})
	

	
	

	
	ZForms.attachObserver(
		ZForms.EVENT_TYPE_ON_CHANGE,
		function(sEventType, oWidget) {
			that.update_program();
		},
		this.oFormWidget.getWidgetById('program_view')
	);
	
	ZForms.attachObserver(
		ZForms.EVENT_TYPE_ON_CHANGE,
		function(sEventType, oWidget) {
			that.update_program();
		},
		this.oFormWidget.getWidgetById('program_type')
	);
	
	
	$('.country').live('focus', function(){
		$(this).keyup();
	})
	
	
	that.update_date();

	$('input[name=program], input[name=trip_start], input[name=trip_length], select[name=trip_period], input[name=program_view], input[name=program_type]').change(function(){
		upd = setTimeout(function(){
			//console.log('update_date')
			that.update_date();
		},100)
		
	})
	
	$('#trip_start').parent().find('input, select').on('change blur', function(){
		that.update_date();
	})
	

	$('input, select').change(function(){
		if($('#calc_result:visible').length ){
			that.calc();
		}
	})



	
	
	$('#calc_btn').click(function(){
		that.calc();
	})

	
	
	ZForms.attachObserver(
		ZForms.EVENT_TYPE_ON_CHANGE,
		function(sEventType, oWidget) {
			$('.inline_radio_switcher_field.premium_field > dd > .selector').removeClass('first_child last_child');
			$('.inline_radio_switcher_field.premium_field > dd > .selector:visible').last().addClass('last_child');
			$('.inline_radio_switcher_field.premium_field > dd > .selector:visible').first().addClass('first_child');
			
			$('#program_type .selector').removeClass('first_child last_child');
			$('#program_type  .selector:visible').last().addClass('last_child');
			$('#program_type  .selector:visible').first().addClass('first_child');
			
			
		},
		this.oFormWidget.getWidgetById('program')
	);
	
	
	
	




}

Vzr_calc.prototype.update_program = function(){
	

	
	var sProgram_view = this.oFormWidget.getWidgetById('program_view').getValue().get();
	var sProgram_type = this.oFormWidget.getWidgetById('program_type').getValue().get();
	
	var programm = sProgram_view;
	
	
	if(sProgram_type == 'multy'){
		programm += '_multy'
	}
	
	var oProgramm = this.oFormWidget.getWidgetById('program');
	
	oProgramm.setValue(oProgramm.createValue(programm));
	
	this.update_country_list();
	
}

Vzr_calc.prototype.calc = function(){
	var that = this;
	
	that.update_date();
	
	/*checking fields*/
	var bError = false;
	
	

	
	
	var result_html, result_error = '';
	
	if( $('.valid_message:visible').length  ){
			bError = true;
			$('.valid_message:visible').each(function(){
				result_error +=  '<br>' + $(this).html();
			})
			
	}

	var is_sport = $('#' + this.form_id + ' input[name=sport]').get(0).checked;
	
	//var i = $('#' + this.form_id + ' input[name=program_type]:checked').val();
	
	var aCountries_entered  = [];
	$('.country').each( function(index, Element){
		if(Element.value){
			aCountries_entered[aCountries_entered.length] = Element.value;
		}
	})
	
	var aCountries_allowed = [];
	for (var i = 0; i < aCountries.length; i++) {
		if(
			( that.program.val() == 'russia' && aCountries[i].is_russia == 1 )
			||
			( (that.program.val() == 'outbound' || that.program.val() == 'outbound_multy') && aCountries[i].is_outbound == 1  )
			||
			( (that.program.val() == 'all_inclusive' || that.program.val() == 'all_inclusive_multy') )
		){
			aCountries_allowed[aCountries_allowed.length] = aCountries[i];
		}
	}
	
	
	var sProgram = $('#' + this.form_id + ' input[name=program]').val();
	

	var iDays = 0;
	
	
	if( (sProgram == 'russia' ||  sProgram == 'outbound' ||  sProgram == 'all_inclusive')){
		iDays = $('#' + this.form_id + ' input[name=trip_length]').val();
		if(this.is_europe && 0){
			iDays = iDays*1 + 15;
		}
	} else if( sProgram == 'all_inclusive_multy') {
		iDays = 365;
	} else if( sProgram == 'outbound_multy') {
		iDays = $('#' + this.form_id + ' select[name=trip_period]').val();
	}
	
	if(iDays == 0 || isNaN(iDays) ){
			bError = true;
			result_error +=  '<br>Укажите продолжительность поездки.';
	}
	
	var is_europe = false;
	
	var val_entered_rur = $('#' + that.form_id + ' input[name=premium]:checked').val() * (($('#' + that.form_id + ' select[name=currency]').val() == 'euro') ? rate_euro : rate_usd);
	
	
	for (var i = 0; i < aCountries_entered.length; i++) {
		var _found = false;
		for (var j = 0; j < aCountries_allowed.length; j++) {
			if(aCountries_entered[i] == aCountries_allowed[j].name){
				_found = true;
				var min_val_rur = aCountries_allowed[j].amount * ((aCountries_allowed[j].currency == 'EUR') ? rate_euro : rate_usd);

				
				if(val_entered_rur < min_val_rur && sProgram != 'outbound_multy'){
					bError = true;
					result_error +=  '<br>Для указанной вами страны ' + aCountries_entered[i] + ' минимальная сумма страховки ' + aCountries_allowed[j].amount + ' ' + aCountries_allowed[j].currency;
				}
			}
		}
		if(!_found){
			bError = true;
			result_error +=  '<br>Указанная вами страна ' + aCountries_entered[i] + ' не подходит под условия программы.';
		}
		for (var j = 0; j < aCountries.length; j++) {
			if(aCountries_entered[i] == aCountries[j].name){
				if(aCountries[j].is_europe == 1){
					is_europe = true;
				}
			}
		}
	}
	
	
	if( $('#is_shengen input:checked').length &&  sProgram == 'outbound' ||  sProgram == 'all_inclusive' ){
		is_europe = true;
	}
	
	//console.log(is_europe, val_entered_rur ,  30000 * rate_euro)
	
	if(is_europe  && val_entered_rur  <  30000 * rate_euro){
			bError = true;
			result_error +=  '<br>Для стран Шенгенского союза минимальная сумма страховки 30000 EUR';
			
	}
	
	if(aCountries_entered.length == 0 && !($('#is_shengen input:checked').length && (sProgram == 'outbound' ||  sProgram == 'all_inclusive' || sProgram == 'outbound_multy' ||  sProgram == 'all_inclusive_multy'))){
			bError = true;
			result_error +=  '<br>Вы не указали страну поездки.';
	}
	

	

	
	
	var aAge_rate = [
		[0, 3, 2],
		[3, 16, 0.75],
		[16, 28, 0.9],
		[28, 70, 1],
		[70, 75, 2],
		[75, 80, 2.5]
	]
	
	
	
	
	var iPre_sum = 0;
	var aInsured = [];
	$('.person_birthday input[name]').each( function(index, Element){
		if(Element.value){
			var x = Element.value.split('-');
			aInsured[aInsured.length] = {
				value: Element.value,
				dt: new Date(x[0], x[1], x[2]),
				age:0,
				is_rf_citizenship : $(this).parents('.fieldset').find('input[name=is_rf_citizenship]:checked'),
				everyday_rate:0,
				age_rate:0
			}
			aInsured[aInsured.length - 1].age = (dNow.getTime() - aInsured[aInsured.length - 1].dt.getTime())  / 1000 / 60 /60 /24 / 365.25;
			
			
			
			//console.log(Element.value,Element.value.split('-'), new Date(x[0], x[1], x[2]))
			
			
			var iEveryday_rate = 0;

			switch (that.program.val()){
				case 'russia' :
					
					switch ($('#' + that.form_id + ' input[name=premium]:checked').val()){
						case '15000' :
							iEveryday_rate = (aInsured[aInsured.length - 1].is_rf_citizenship.length) ? 0.36 : 0.6;
						break;
							
						case '30000' : 
							iEveryday_rate = (aInsured[aInsured.length - 1].is_rf_citizenship.length) ? 0.45 : 0.75;
						break;
					}
				break;
					
				case 'outbound' : 
					switch ($('#' + that.form_id + ' input[name=premium]:checked').val()){
						case '30000' :
							iEveryday_rate = 0.85;
						break;
							
						case '50000' : 
							iEveryday_rate = 1.1;
						break;
						
						case '100000' : 
							iEveryday_rate = 1.25;
						break;
					}
				break;
					
				case 'all_inclusive' : 
					switch ($('#' + that.form_id + ' input[name=premium]:checked').val()){
						case '50000' :
							iEveryday_rate = 2.79;
						break;
							
						case '100000' : 
							iEveryday_rate = 3.15;
						break;
					}
				break;
				case 'outbound_multy' : 
				
					switch (iDays){
						case '15' :
							iEveryday_rate = 12/iDays;
						break;
						
						case '30' :
							iEveryday_rate = 22/iDays;
						break;
							
						case '60' : 
							iEveryday_rate = 38/iDays;
						break;
							
						case '90' : 
							iEveryday_rate = 50/iDays;
						break
							
						case '180' : 
							iEveryday_rate = 72/iDays;
						break
					}
				break;
				
				case 'all_inclusive_multy' : 
				
					switch ($('#' + that.form_id + ' input[name=premium]:checked').val()){
						case '30000' :
							iEveryday_rate = 108/365;
						break;
						
						case '50000' :
							iEveryday_rate = 126/365;
						break;
							
						case '100000' : 
							iEveryday_rate = 144/365;
						break;
					}
				break;
			};
			
			var age_rate = 0;
			
			for(var i=0; i < aAge_rate.length; i++){
				//console.log('aAge_rate[i][2]=', aAge_rate[i][2], '  aInsured[aInsured.length - 1].age ', aInsured[aInsured.length - 1].age )
				
				if(aAge_rate[i][0] <= aInsured[aInsured.length - 1].age && aInsured[aInsured.length - 1].age < aAge_rate[i][1] ){
				
					var age_rate = aAge_rate[i][2]
				}
			}
			
			
			aInsured[aInsured.length - 1].everyday_rate = iEveryday_rate;
			
			iPre_sum += iEveryday_rate * age_rate
			
			//console.log('iEveryday_rate=', iEveryday_rate , '  age_rate=', age_rate, ' ',  aInsured)
		}

		
		
		
		
	})









	if(aInsured.length == 0){
			bError = true;
			result_error +=  '<br>Укажите хотя бы одного застрахованного.';
	}
	
	
	/* 
		Стоимость полиса = [(ежедн тариф 1)*(возврастной коэф 1)+(Т1)*(О2)+ ...... +(Т50)*(О50)]*K 
		
		
		K = L*S*M
		L – количество дней поездки.
		S – спортивный коэффициент (флаг «Любительский спорт»).
		M – коэффициент количества застрахованных.
	*/
	
	//console.log('iPre_sum=', iPre_sum, 'iDays=', iDays , 'is_sport=',( is_sport ? 2 : 1) , aInsured.length)
	
	var M = 1;
	if(aInsured.length >= 10 && aInsured.length <= 30){
		M = 0.9;
	} else if(aInsured.length >= 31 && aInsured.length <= 50){
		M = 0.8;
	}
	
	var cost = 0;
	if(sProgram == 'all_inclusive_multy'){
		cost = iPre_sum * iDays * ( is_sport ? 2 : 1) * M;
	} else {
		cost = iPre_sum * iDays * ( is_sport ? 2 : 1) * M;
	}
	
	//console.log('iPre_sum=', iPre_sum , 'iDays=', iDays ,  'is_sport=', is_sport , 'M=',M);
	
	cost = Math.round(cost * 100)/100;
	
	$('#sum').val(cost);
	
	//console.log($('select[name=currency]').val().toLowerCase(), eval('rate_' + $('select[name=currency]').val().toLowerCase()))
	
	var cost_rur =  Math.round(cost * eval('rate_' + $('select[name=currency]').val().toLowerCase()) * 100)/100;

	if(!cost_rur){
		var result_html = '<p>Стоимость полиса: <span class="price">' + cost + ' ' + $('select[name=currency]').val() + '</span></p>'
							
							+ '<p>К сожалению, в настоящий момент проведение операции не возможно по техническим причинам. Пожалуйста, обратитесь позднее. Приносим свои извинения за временные неудобства.</p>';
							
	} else {
		var result_html = '<p>Стоимость полиса: <span class="price">' + cost + ' ' + $('select[name=currency]').val() + '</span> (' + cost_rur +' руб. по курсу ЦБ)</p>'
							//+ '<div class="buttons"><input type="button" value="Приступить к оформлению заявки" class="" id="show_apply_fields"></div>';
							
							+ '<span class="button button1">'
							+ '<ins class="button_t_l"><ins></ins></ins><ins class="button_t_r"><ins></ins></ins>'
							+ '<ins class="button_c"><a href="#2step" id="show_apply_fields" class="go-on">Оформить полис</a></ins>'
							+ '<ins class="button_b_l"><ins></ins></ins><ins class="button_b_r"><ins></ins></ins></span>';
							

	}
						
						
	if(bError){
		$('#calc_result').html('<p class="error">' + result_error + '</p>').show();
	} else {
		$('#calc_result').html(result_html).show();
		
	}
	
	
	$('#result_program').html($('#program_view .zf-selected label h4').html());
	$('#result_program_type').html($('#program_type .zf-selected label').html());
	$('#result_premium').html($('#vzr input[name=premium]:checked').val() + ' ' +  $('select[name=currency]').val());
	
	var sCountry_list = '';
	for (var i = 0; i < aCountries_entered.length; i++) {
		sCountry_list += ((i!=0) ? ', ' : '') + aCountries_entered[i];
	}
	
	if($('#is_shengen input:checked').length && (sProgram == 'outbound' || sProgram == 'outbound_multy' || sProgram == 'all_inclusive' || sProgram == 'all_inclusive_multy')){
		sCountry_list +=  (sCountry_list ? ', ': '') + 'Шенгенский союз';
	}
	
	$('#result_country_list').html(sCountry_list);
	
	$('#result_days').html(iDays);
	$('#result_number_insured').html(aInsured.length);
	
	var cost_rur =  Math.round(cost * eval('rate_' + $('select[name=currency]').val().toLowerCase()) * 100)/100;

	$('#result_sum').html(cost + ' ' + $('select[name=currency]').val() + '  (' + cost_rur +' руб. по курсу ЦБ)');
	
	return !bError;
}

Vzr_calc.prototype.update_date = function(){
	
	var o_start = $('#' + this.form_id + ' input[name=trip_start]'),
	trip_length = this.oFormWidget.getWidgetById($('#' + this.form_id + ' input[name=trip_length]').attr('id')).getValue().get(),
	o_trip_period = $('#' + this.form_id + ' select[name=trip_period]'),
	//oEnd = this.oFormWidget.getWidgetById($('#' + this.form_id + ' input[name=trip_end]').attr('id')),
	oEnd_hidden = $('#' + this.form_id + ' input[name=trip_end_hidden]');
	
	//o_start.change();
	
	var program = $('#vzr input[name=program]').val();
	
	var dEnd,dStart;

	
	
	//указываем расчетную дату окончания + 15 дней для стран Шенгена
	//Дополнительные 15 дней в расчете не участвуют
	//Если речь о "сроке страхования дней по", то указываем + 15 дней
	//По многократным программам 15 дней к сроку действия не прибавляются и в расчете не участвуют.
	
	var aCountries_entered  = [];
	$('.country').each( function(index, Element){
		if(Element.value){
			aCountries_entered[aCountries_entered.length] = Element.value;
		}
	})
	
	this.is_europe = false;
	if(program != 'all_inclusive_multy' && program != 'outbound_multy'){
		for (var i = 0; i < aCountries_entered.length; i++) {
			var _found = false;
			for (var j = 0; j < aCountries.length; j++) {
				if(aCountries_entered[i] == aCountries[j].name){
					if(aCountries[j].is_europe == 1){
						this.is_europe = true;
					}
				}
			}
		}
	}
	
	if( $('#is_shengen input:checked').length &&  program == 'outbound' ||  program == 'all_inclusive' ){
		this.is_europe = true;
	}
	
	
	


	
	if( (program == 'all_inclusive_multy' || program == 'outbound_multy') && o_start.val().length ) {
			
			dStart = value2date(o_start.val());
			dEnd = new Date(dStart.getFullYear() + 1, dStart.getMonth(),  dStart.getDate() - 1 );
			
	} else {
		if(o_start.val().length && trip_length){
			dStart = value2date(o_start.val());
			dEnd = new Date(dStart.getFullYear(), dStart.getMonth(),  dStart.getDate() + trip_length * 1 + ( this.is_europe ? 15  : 0)  );
		}
		
	}
	
	
	
	if (dEnd){
		
		sDate_end = dEnd.getFullYear() + '-' + (dEnd.getMonth() + 1) + '-' +  dEnd.getDate();
		
		$('.trip_end').html('  до ' + dEnd.getDate() + '.' + (((dEnd.getMonth()+1)<10) ? '0':'') + (dEnd.getMonth()+1) + '.' + dEnd.getFullYear());
		
		//oEnd.setValue(oEnd.createValue(sDate_end));
		oEnd_hidden.val(sDate_end);
		
		//console.log(this.is_europe, dEnd)
	}
	
}

Vzr_calc.prototype.update_country_list = function(){
	
	var that = this;
	if(this.is_shengen.length){
		this.is_shengen_val = this.is_shengen.get(0).checked;
	}
	

	this.eCountry_list = $('#' + this.form_id + ' .country-list');
	
	if(typeof this.eCountry_list != 'undefined' &&  $('#' + this.form_id).hasClass('zf-inited')){
		this.eCountry_list.each( function(index, Element){
		
		
			for (var i = 0; i < Element.options.length ; i++) {
				Element.options[i] = null;
			}
			
			//console.log(that.program.val(), $(Element).parent())
			
			Element.options.length = 0;
			
			
			for (var i = 0; i < aCountries.length; i++) {
				if(
					( that.program.val() == 'russia' && aCountries[i].is_russia == 1 )
					||
					( (that.program.val() == 'outbound' || that.program.val() == 'outbound_multy') && aCountries[i].is_outbound == 1 )
					||
					( (that.program.val() == 'all_inclusive' || that.program.val() == 'all_inclusive_multy') )
				){
					
					
					eOption = new Option(aCountries[i].name, aCountries[i].name);
					Element.options[Element.options.length] = eOption;
				}
			}
		});
		
		
		
		$('#' + that.form_id + ' .country').each( function(index, Element){	
			
			var zCountry = that.oFormWidget.getWidgetById(Element.id); 
			if(typeof zCountry != 'undefined'){
				zCountry.initOptions();
				zCountry.updateOptions(true);
				zCountry.hideOptions();
			}
		});
		
		
		/*
		var zCountry = that.oFormWidget.getWidgetById('country'); 
		zCountry.initOptions();
		zCountry.updateOptions(true);
		zCountry.hideOptions();*/
	}
}



$(function() {
	var vzr_calc_ins = new Vzr_calc();
	
	vzr_calc_ins.init('vzr', aCountries);
	
	

		$('.fieldset').each(function(){
			$('.repeat_container.fieldset', this).first().addClass('last');
		});

	
	$(function(){
		$('.'+'trip_start_calendar').parent().click(function(e) {
			showCalendarForElement('date', e.originalEvent,'trip_start_calendar');
			e.stopPropagation();
		});
	})
	
	$('.country_container dd.field::before').click(function(){
		$(this).parent().find('.country').click();
	})
	


});







function form_on_update (sEventType,oWidget) {
	
	
	processing_check_timerID = false;
	
	$('.country').change();
	
	
	if( oWidget.isReadyForSubmit() ){
		$('#' + oWidget.sId + ' .info').addClass('hidden');
		$('#submit_btn', $('#' + oWidget.sId)).removeClass('disabled');
		sRequired_count = 0;
		sRequired_prev = '';
	} else {
		$('#submit_btn', $('#' + oWidget.sId)).addClass('disabled');
		//console.log(oWidget.isReadyForSubmit())
		var sRequired = '';
		var counter = 0;
		for (var i in oWidget.aWidgets){
			if(!oWidget.aWidgets.hasOwnProperty(i)){continue};
			
			if(oWidget.aWidgets[i].isEnabled() && (oWidget.aWidgets[i].bRequired || (!oWidget.aWidgets[i].bValid)) ){
				sRequired += ((counter != 0) ? ', ' : '');
				var ii = i;
				
				/* группа чекбоксов */
				if($('#' + oWidget.aWidgets[i].sId).parent().parent().find('.label label').html() == null){
					if(typeof oWidget.aWidgets[i].aChildren != 'undefined'){
						for(var j in oWidget.aWidgets[i].aChildren){
							if(j == '0'){
								ii = oWidget.aWidgets[i].aChildren[j].sId;
							}
						}
					}
				}
				
				
				/* Дата */
				if(typeof oWidget.aWidgets[i].oDayInput != 'undefined'){
					ii = 'day-' + i;
				}
				
				switch(ii){
					default:
						sRequired += '<span class="pseudo_link" onclick="gotoForm (\'' + oWidget.sId + '\',\'' + ii + '\')">';
						//sRequired += $('#' + ii).parent().parent().find('.label label').html();
						sRequired += $('#' + ii).parent().parent().find('label').html();
						break;
						
				}
				sRequired += '</span>';
				counter++;
			}
		}
		
		if(counter > 0){
			if( sRequired_prev != sRequired){
				$('#' + oWidget.sId + ' .info').removeClass('hidden').html('Осталось‌ заполнить поля: ' + sRequired);
				$('#submit_btn', $('#' + oWidget.sId)).addClass('disabled');
			}
		} else {
			$('#' + oWidget.sId + ' .info').addClass('hidden');
			$('#submit_btn', $('#' + oWidget.sId)).removeClass('disabled');
		}
		
		sRequired_prev = sRequired;
	}

	processing_check_timerID = setTimeout(function(){
		form_on_update (sEventType,oWidget)
	},2000)
	
}

function gotoForm (form_id, widget_id) {
	$('#policy_form').addClass('submitted');
	if($(window).scrollTop() < $('#' + form_id + ' #' + widget_id).offset().top){
		$('#' + form_id + ' #' + widget_id).get(0).focus();
	} else {
		$('html,body').animate({'scrollTop':Math.round($('#' + form_id + ' #' + widget_id).offset().top)}, 700, 'swing',function(){
			$('#' + form_id + ' #' + widget_id).get(0).focus();
		})
	}
}


function start_date_validator (oWidget){
	var sValue = oWidget.getValue().toStr();
	
	var aValue=sValue.match(/^(-?\d{1,4})-(\d{1,2})-(-?\d{1,2})( (-?\d{1,2}):(-?\d{1,2}):(-?\d{1,2}))?/);

	if(aValue){
		var dValue = new Date(parseInt(aValue[1],10),parseInt(aValue[2],10) - 1,parseInt(aValue[3],10));
		
		
		var dNow = new Date();
		var d1Year = new Date(parseInt(dNow.getFullYear() + 1), dNow.getMonth(),  dNow.getDate());
		
	
		
		if(dValue.getFullYear()){
			// это дата
			if(dValue > dNow &&  dValue <= d1Year){
				return true;
			} else {
				return false;
			}
		} else {
			return true;
		}
	} else {
		return true;
	}
}


function insurer_birthday_validator (oWidget){
	var sValue = oWidget.getValue().toStr();
	
	var aValue=sValue.match(/^(-?\d{1,4})-(\d{1,2})-(-?\d{1,2})( (-?\d{1,2}):(-?\d{1,2}):(-?\d{1,2}))?/);

	if(aValue){
		var dValue = new Date(parseInt(aValue[1],10),parseInt(aValue[2],10) - 1,parseInt(aValue[3],10));
		
		var dNow = new Date();
		
		var d18 = new Date(parseInt(dNow.getFullYear() - 18), dNow.getMonth(),  dNow.getDate());
	
		
		if(dValue.getFullYear()){
			if(dValue < d18 ){
				return true;
			} else {
				return false;
			}
		} else {
			return true;
		}
	} else {
		return true;
	}
}

function insured_birthday_validator (oWidget){
	var sValue = oWidget.getValue().toStr();
	
	var aValue=sValue.match(/^(-?\d{1,4})-(\d{1,2})-(-?\d{1,2})( (-?\d{1,2}):(-?\d{1,2}):(-?\d{1,2}))?/);

	
	if(aValue){
		var dValue = new Date(parseInt(aValue[1],10),parseInt(aValue[2],10) - 1,parseInt(aValue[3],10));
		
		var dNow = new Date();
		
		var d80 = new Date(parseInt(dNow.getFullYear() - 80), dNow.getMonth(),  dNow.getDate());
	
		
		if(dValue.getFullYear()){
			if(dValue >= d80  && dValue <= dNow){
				return true;
			} else {
				if (dValue > dNow) {
					$(oWidget.oElement).parent().find('.valid_message').html("Указанная дата рождения ещё не наступила");
				} else if (dValue < d80) {
					$(oWidget.oElement).parent().find('.valid_message').html("Полисы для граждан в возрасте старше 80 лет оформляются только в офисе страховой компании");
				} 
				return false;
			}
		} else {
			return true;
		}
	} else {
		return true;
	}
}

function length_365 (oWidget){

	var sValue = oWidget.getValue().toStr();
	
	if(sValue){
		if(sValue >= 1 && sValue <= 365){
			return true;
		} else {
			return false;
		}
	} else {
		return true;
	}
}