//Изменен 29.09.2014
//Орлова М, spellabs

//заданные банком массивы стран
var CountryCaribWithoutRussia = [  	"США","Канада","Япония","Австралия",
									"Ангилья","Антигуа и Барбуда","Аруба","Архипелаг Тёркс и Кайкас",
									"Багамы","Барбадос","Британские Виргинские острова",
									"Виргинские острова", "Гаити", "Гренада", "Доминика", "Доминиканская Республика",
									"Каймановы острова","Куба","Мартиника","Монсеррат", "Нидерландские Антильские острова",
									"Пуэрто-Рико","Сен-Бартельми","Сен-Мартен","Сент-Китс и Невис","Сент-Люсия","Тринидад и Тобаго","Ямайка"];

var CountrySNG = ["Азербайджан","Армения","Белорусь","Казахстан","Таджикистан","Туркменистан","Узбекистан","Кыргызстан","Молдова","Украина"]; //данные от Алены (скайп)

//функция склонения
/*Параметры функции:
			a - множественное число (родительный падеж)
			b - единственное число (именительный падеж)
			c - множественное число (именительный падеж)
			s - количество*/
function declination(a, b, c, s) 
	{ 
		var words = [a, b, c]; 
		var index = s % 100; 
		 
		if (index >=11 && index <= 14) { index = 0; } 
		else { index = (index %= 10) < 5 ? (index > 2 ? 2 : index): 0; } 
		 
		return(words[index]); 
 	}

//функция убирает сумму полиса если были сделаны изменения
function isChange()
	{
		//убрать поле стоимости полиса
		$("#CalculatorResult").hide();
		
		//убрать кнопку оформить полис
		$('#issue-police').hide();
	}


	
//функция проверки все ли необходимые поля заполнены
function isAllFill()
	{
		
		//для рассчета полиса должны быть заполнены
		if ($('#EffectiveDate').val() != "гггг-мм-дд" //дата начала
			 && parseInt($('#daysCount').val()) > 0 //дата конца или кол-во дней
			 &&	parseInt($('#PeopleCount').val()) > 0// количество путешественников
			 )
			{
				// $("#CalculatePolice").prop('disabled', false);
				$("#CalculatePolice").removeAttr('disabled');
				$('#messageAll').hide();
			}
		else 
			{	
				
				//$("#CalculatePolice").prop('disabled', true);
				$("#CalculatePolice").attr('disabled', 'disabled');
				
				$('#messageAll').show();
				$('#CalculatorResult').hide();
				
			}
	}

//функция проверяет содержится ли value в массиве array
function js_in_array(value, array) 
	{
				for(var i = 0; i < array.length; i++) 
				{
					if(array[i] == value) return true;
				}
				return false;
	}
			
//отобразить дополнительные параметры страхования
function ShowUniqueOptions()
	{
		
		
		if ($("#groupOfProgram1").prop("checked") ) 
			var SelectedPoliceType='odn';
				
		if ($("#groupOfProgram2").prop("checked") ) 
			var SelectedPoliceType = 'mul';
				

		var obj = document.getElementById("CountryID");
		var CurrSelectedText = obj.options[obj.selectedIndex].text;
		var AdvOptions = document.getElementById("AdvOptions");
				
		//скрыть все параметры
		$('.advParam, .basParam').hide();
		
		//обнулить срок действия полиса
		$('#staticDaysCount').text('');
		
		//$('#InsuredSum2').show();
		
		//стили списка для параметра транспорт в доп.параметрах
		$('#divInpAdvParamCancel').hide();
		$('#divInpAdvParamBag').hide();
		
		//нарисовать все суммы 
		$('#divInsuredSum1, #divInsuredSum2, #divInsuredSum3, #divInsuredSum4').show();
		
		//выключить все checkbox
		$('#inpAdvParamTrans, #inpAdvParamCancel, #inpAdvParamBag, #inpAdvParamCivil').prop('checked',false); 
						
		
		if( SelectedPoliceType == "mul" ) // Если выбран многократный полис
		{
			//if ($('#CountryID option:selected').attr('atr') == 'шенген' &&  $('#daysCount').val() !='365' ) //если шенген 
			if (  $('#daysCount').val() !='365' && $('#CountryID option:selected').attr('atr') == 'Шенген' ) //если мультишенген 
				//тогда сумма 30000 и отображаются только базовые параметры и чекбокс «Любительский спорт»
				{
					//суммы не доступны
					$('#divInsuredSum1, #divInsuredSum3, #divInsuredSum4').hide();
					
					//выбранная сумма 30000
					$('#InsuredSum2').prop('checked', true);
					//$('#InsuredSum2').hide();
					
					//отобразить базовые параметры
					$('#basParamTrans').show();
				}
			else //годовые программы
				{
					if ($('#CountryID option:selected').attr('atr') != 'Шенген')
					{
					$("#daysCount").hide();
					$('#staticDaysCount').text('1 год');
					}
					
					if( js_in_array(CurrSelectedText, CountryCaribWithoutRussia) || CurrSelectedText == "Россия" || $('#CountryID option:selected').attr('atr') != 'Шенген') 
					{
						//AdvOptions.innerHTML = "<?=$MnoUSACanJapAusCaribRussia?>";
						//AdvOptions.innerHTML = "<input name='amSport' type='checkbox'/>&nbsp;Любительский спорт";
					   
						//для многократного полиса и этих стран срок полиса однозначно 1 год без права изменения
						//$("#daysCount [value='365']").attr("selected", "selected");
						
						
						//15000 не доступна
						$('#divInsuredSum1').hide();
						//снять галочку с 15000 и поставить на след.значение = 30000
						if ($('#InsuredSum1').prop('checked'))
						{
							$('#InsuredSum1').prop('checked', false);
							$('#InsuredSum2').prop('checked', true);
						}
						
						/*if (CurrSelectedText != 'Россия') $('#InsuredSum2, #labelInsuredSum2').hide();*/
						if (CurrSelectedText != 'Россия') 
							{
								$('#divInsuredSum2').hide();
								//снять галочку с 30000 и поставить на след.значение = 50000
								if($('#InsuredSum2').prop('checked'))
								{
									$('#InsuredSum2').prop('checked', false);
									$('#InsuredSum3').prop('checked', true);
								}
							}
							
						//отобразить базовые параметры
						$('#basParamTrans, #basParamBag, #basParamCivil').show();
					}
					else //остальные страны
					{
						
						
						//15000 не доступна
					   $('#divInsuredSum1').hide();
					   
					   //третий чекбокс
						$('#divInpAdvParamBag, #inpAdvParamBag').show();
						$('#divInpAdvParamBag').attr('style','margin-left:-24px; float:left; height:60px; border-right:1px solid gray');
					   
					   //снять галочку с 15000 и поставить на след.значение = 30000
						if($('#InsuredSum1').prop('checked'))
						{
							$('#InsuredSum1').prop('checked', false);
							$('#InsuredSum2').prop('checked', true);
						}
						
						//отобразить базовые параметры (параметр медицинские расходы отображается всегда)
						$('#basParamTrans').show();
						
						//отобразить дополнительные параметры
						$('#advParamBag, #advParamCivil').show();
						
						if ( ($('#InsuredSum3').prop("checked") ) || ($('#InsuredSum4').prop("checked") ) ) //50000 или 100000
								$('#inpAdvParamBag, #inpAdvParamCivil').prop('checked',true);
							else	$('#inpAdvParamBag, #inpAdvParamCivil').prop('checked', false);
								
						//добавим дополнительный атрибут, который будет содержать value для radio, чтобы при нажатии на чекбокс знать какой радио-сумму включать
						$('#inpAdvParamBag, #inpAdvParamCivil').attr('currency-value-on','50000').attr('currency-value-off','30000').attr('is-group','1');
							
					}
				}	
		}
	else
		{ // Значит выбран однократный
		
			if ( CurrSelectedText == "Россия" )
				{
					//отобразить базовые параметры (параметр медицинские расходы отображается всегда)
										
					//отобразить дополнительные параметры
					$('#advParamTrans, #advParamCancel, #advParamBag, #advParamCivil').show();
					
					//отобразить чекбокс который будет это включать, по умолчанию трасп. всегда отображается
					//но нужно применить стили 
					//$('').css('list-style-type','none');
					$('#inpAdvParamTrans').show();
					$('#divInpAdvParamTrans').attr('style','margin-left:-23px; float:left; height:160px; border-right:1px solid gray;');
					
					//$('#inpAdvParamTrans').css('margin-right','20px');
					//$('#liAdvParamTrans').css('margin-left','30px !important');
					
					//определить какая сумма выбрана
					if ( ($('#InsuredSum3').prop("checked") ) || ($('#InsuredSum4').prop("checked") ) ) //50000 или 100000
						$('#inpAdvParamTrans, #inpAdvParamCancel, #inpAdvParamBag, #inpAdvParamCivil').prop('checked',true);
					else	$('#inpAdvParamTrans, #inpAdvParamCancel, #inpAdvParamBag, #inpAdvParamCivil').prop('checked', false);
					
					//добавим дополнительный атрибут, который будет содержать value для radio, чтобы при нажатии на чекбокс знать какой радио-сумму включать
					$('#inpAdvParamTrans, #inpAdvParamCancel, #inpAdvParamBag, #inpAdvParamCivil').attr('currency-value-on','50000').attr('currency-value-off','15000').attr('is-group','1');
				}
			else if ( js_in_array(CurrSelectedText, CountrySNG) )
					{
						//отобразить базовые параметры (параметр медицинские расходы отображается всегда)
										
						//отобразить дополнительные параметры
						$('#advParamTrans, #advParamCancel, #advParamBag, #advParamCivil').show();
						
						//нужно отобразить два чекбокса, потому что две группы параметров
						$('#inpAdvParamTrans').show();
						$('#divInpAdvParamTrans').attr('style','margin-left:-23px; float:left; height:45px; ');
						
						//второй чекбокс
						$('#inpAdvParamCancel, #divInpAdvParamCancel').show();
						$('#divInpAdvParamCancel').attr('style','margin-left:-23px; float:left; height:120px; border-right:1px solid gray; ');
						
						//определить какая сумма выбрана
						if ( $('#InsuredSum2').prop("checked") || $('#InsuredSum3').prop("checked") || $('#InsuredSum4').prop("checked")) //30000 50000 100000
								$('#inpAdvParamTrans').prop('checked',true);
						else	$('#inpAdvParamTrans').prop('checked', false);
						
						//добавим дополнительный атрибут, который будет содержать value для radio, чтобы при нажатии на чекбокс знать какой радио-сумму включать
						$('#inpAdvParamTrans').attr('currency-value-on','30000').attr('currency-value-off','15000').attr('is-group','0');
						
						if ( $('#InsuredSum3').prop("checked") || $('#InsuredSum4').prop("checked") ) //50000 или 100000
								$('#inpAdvParamCancel, #inpAdvParamBag, #inpAdvParamCivil').prop('checked',true);
						else	$('#inpAdvParamCancel, #inpAdvParamBag, #inpAdvParamCivil').prop('checked', false);
						
						//добавим дополнительный атрибут, который будет содержать value для radio, чтобы при нажатии на чекбокс знать какой радио-сумму включать
						$('#inpAdvParamCancel, #inpAdvParamBag, #inpAdvParamCivil').attr('currency-value-on','50000').attr('currency-value-off','30000').attr('is-group','1');
						
					}
						else if( js_in_array(CurrSelectedText, CountryCaribWithoutRussia)	)
							{
								//убрать 15000, 30000
								$('#divInsuredSum1, #divInsuredSum2').hide();
								//снять галочку с 15000 и поставить на след.значение = 30000
								if ($('#InsuredSum1').prop('checked') || $('#InsuredSum2').prop('checked'))
								{	
									$('#InsuredSum2').prop('checked', false);
									$('#InsuredSum3').prop('checked', true);
								}
								
								//отобразить базовые параметры (параметр медицинские расходы отображается всегда)
								$('#basParamTrans, #basParamCancel, #basParamBag, #basParamCivil').show();
								
							}
							else //другие страны
								{
								
								//второй чекбокс
								$('#divInpAdvParamCancel, #inpAdvParamCancel').show();
								$('#divInpAdvParamCancel').attr('style','margin-left:-23px; float:left; height:120px; border-right:1px solid gray;');
								
								
								//убрать 15000
								$('#divInsuredSum1').hide();
								//снять галочку с 15000 и поставить на след.значение = 30000
								if($('#InsuredSum1').prop('checked'))
									{
										$('#InsuredSum1').prop('checked', false);
										$('#InsuredSum2').prop('checked', true);
									}
								
								//отобразить базовые параметры (параметр медицинские расходы отображается всегда)
								$('#basParamTrans').show();
										
								//отобразить дополнительные параметры
								$('#advParamCancel, #advParamBag, #advParamCivil').show();

								if ( $('#InsuredSum3').prop("checked") || $('#InsuredSum4').prop("checked") ) //50000 или 100000
										$('#inpAdvParamCancel, #inpAdvParamBag, #inpAdvParamCivil').prop('checked',true);
								else	$('#inpAdvParamCancel, #inpAdvParamBag, #inpAdvParamCivil').prop('checked', false);
								
								//добавим дополнительный атрибут, который будет содержать value для radio, чтобы при нажатии на чекбокс знать какой радио-сумму включать
								$('#inpAdvParamCancel, #inpAdvParamBag, #inpAdvParamCivil').attr('currency-value-on','50000').attr('currency-value-off','30000').attr('is-group','1');
								
								}	
					
		}
	isChange();
}

//в зависимости от выбранного типа полиса (однократный/многократный) включаются доп.элементы
function SelectTypeActions()
{
	if ($("#groupOfProgram1").prop("checked") ) 
		var type = 'odn';
		
	if ($("#groupOfProgram2").prop("checked") ) 
		var type = 'mul';

	var daysCountBlock = document.getElementById("daysCountBlock");
	
	//сохраним выделенный индекс
	var selInd = daysCountBlock.selectedIndex;
	
	if( type == "odn" )
		{
			$('.for-all').hide();$('.for-one').show();
			//daysCountBlock.innerHTML = "<input id='daysCount' name='daysCount' style='width:125px' type='text' value=''/>";
			
			//если даты заполнены то нужно и срок полиса заполнить
			var endDate = new Date($('#ExpirationDate').val());
			var begDate = new Date($('#EffectiveDate').val());
							
			if (( begDate != 'Invalid Date') && ( endDate != 'Invalid Date'))
				{
				var nd = endDate.getTime()-begDate.getTime();
				nd = nd/(1000*60*60*24)+1;
												
				var txt = declination('дней','день','дня', nd);
				daysCountBlock.innerHTML = "<input  name='daysCount' id='daysCount' type='text' style='display:none;' value='"+nd+"'/><div id='div-daysCount'  class='b-form-elem_label' style='display:none;font-weight:normal;width:125px' >"+nd+" "+txt+"</div>";
				
				}
			else 
				daysCountBlock.innerHTML = "<input  name='daysCount' id='daysCount' type='text' style='display:none;' value=''/><div id='div-daysCount'  class='b-form-elem_label' style='display:none;font-weight:normal;width:125px' ></div>";					
		}
	else // type = "mul" 
		{
			$('.for-one').hide();$('.for-all').show();
			
			var obj = document.getElementById("CountryID");
			var CurrSelectedText = obj.options[obj.selectedIndex].text;
			/*if( js_in_array(CurrSelectedText, CountryCaribWithoutRussia) || CurrSelectedText == "Россия")
				{
			//	$("#daysCount").val('365');
				//$("#daysCount [value='365']").attr("selected", "selected");
			//	$("#daysCount").attr("disabled", "disabled");
					//var selectVal = $("#daysCount").val();
					daysCountBlock.innerHTML = '<select name="daysCount" id="daysCount"  class="selector" onchange="javascript:commentDaysCount()"><option value="15">15 дней</option><option value="30">30 дней</option><option value="60">60 дней</option><option value="90">90 дней</option><option value="180">180 дней</option><option  value="365">1 год</option></select>';
					
						$("#daysCount").val('365');
				}
			else 
				{
					var selectVal = $("#daysCount").val();
					daysCountBlock.innerHTML = '<select name="daysCount" id="daysCount" class="selector" onchange="javascript:commentDaysCount()"><option  value="15">15 дней</option><option value="30">30 дней</option><option value="60">60 дней</option><option value="90">90 дней</option><option value="180">180 дней</option><option value="365">1 год</option></select>';
					//daysCountBlock.options[selInd].selected;
					if ( selectVal != '15' && selectVal != '30' && selectVal != '60' && selectVal != '90' && selectVal != '180' && selectVal != '365')
						$("#daysCount").val('15');
					else
						$("#daysCount").val(selectVal);
				}*/
			if(  $('#CountryID option:selected').attr('atr') == 'Шенген'  )
				{
					var selectVal = $("#daysCount").val();
					daysCountBlock.innerHTML = '<select name="daysCount" id="daysCount" class="selector" onchange="javascript:commentDaysCount()"><option  value="15">15 дней</option><option value="30">30 дней</option><option value="60">60 дней</option><option value="90">90 дней</option><option value="180">180 дней</option><option value="365">1 год</option></select>';
					//daysCountBlock.options[selInd].selected;
					if ( selectVal != '15' && selectVal != '30' && selectVal != '60' && selectVal != '90' && selectVal != '180' && selectVal != '365')
						$("#daysCount").val('15');
					else
						$("#daysCount").val(selectVal);
			//	$("#daysCount").val('365');
				//$("#daysCount [value='365']").attr("selected", "selected");
			//	$("#daysCount").attr("disabled", "disabled");
					//var selectVal = $("#daysCount").val();
					
				}
			else 
				{
					daysCountBlock.innerHTML = '<select name="daysCount" id="daysCount"  class="selector" onchange="javascript:commentDaysCount()"><option value="15">15 дней</option><option value="30">30 дней</option><option value="60">60 дней</option><option value="90">90 дней</option><option value="180">180 дней</option><option  value="365">1 год</option></select>';
					if ( $('#CountryID option:selected').attr('atr') != 'Шенген'  )
						$("#daysCount").hide();
					$("#daysCount").val('365');
				}	
				
				
		}
	isChange();	
}

//щелкнули по дополнительной опции страхования 
function clickParam(obj)
	{	
		
		
		//аттрибут групповой обработки, т.е. если атриб=1 значит обрабатываем сразу группу флажков с таким атрибутом
		var isGroup = $(obj).attr('is-group');
		
		//если включены выключить если выключены включить все
		if ($(obj).prop('checked'))
			{
				$('.inpAdvParam[is-group='+isGroup+']').prop('checked',true);
				var cur = $(obj).attr('currency-value-on');
				//нужно включить транспортный сбор если включаем расположенные ниже опции
				if ($('#inpAdvParamTrans').attr('is-group') == '0') //если транспортный сбор 0 значит это случай СНГ когда доп.опции делятся на части
					$('#inpAdvParamTrans').prop('checked',true);
			}
		else 
			{
				$('.inpAdvParam[is-group='+isGroup+']').prop('checked', false);
				var cur = $(obj).attr('currency-value-off');
				//если выключаем транспортные расходы, то нужно и опции ниже выключить
				if ( $('#inpAdvParamTrans').attr('is-group') == '0') 
					$('.inpAdvParam[is-group="1"]').prop('checked', false);
				
			}
		
		//выключить все радиобаттоны суммы страхования
		$('.InsuredSum').prop('checked',false);
		
		//отметить нужную сумму полиса
		var str = '.InsuredSum[value='+cur+']';
		$(str).prop('checked', true);
		
		isChange();
	}
				
//выбрали страну  
function clickCountry()
	{
		if ($("#groupOfProgram1").prop("checked") ) 
			var SelectedPoliceType='odn';
	
		if ($("#groupOfProgram2").prop("checked") ) 
			var SelectedPoliceType='mul';

		//если выбрана страна шенгенской зоны то валюта расчета только евро
		//var obj = document.getElementById("CountryID");
		//var SelectedCountry = obj.selectedIndex;
		if ($('#CountryID option:selected').attr('atr') == 'шенген' )
			{
				$('#Currency').val('1');
				$('#Currency').attr('disabled','disabled');
			}
		else 
			{
				$('#Currency').val('0');
				$('#Currency').removeAttr('disabled');
			}
		
		//alert(SelectedPoliceType);
		if (SelectedPoliceType == 'mul' || SelectedPoliceType == 'odn')
		{
			//выбрать 1ю сумму по умолчанию
			$('#InsuredSum1').prop('checked', true);
	
			ShowUniqueOptions();
			SelectTypeActions();
		}
		$('#countryError').hide();
		isChange();
	}
				
//выбрали тип полиса
function clickPolice()
	{
		//если страна не выбрана то ничего не делать
		var obj = document.getElementById("CountryID");
		var SelectedCountry = obj.selectedIndex;
		if (SelectedCountry > 0)
			{
				$('#InsuredSum1').prop('checked', true);
				SelectTypeActions();
				ShowUniqueOptions();
				
			} 
			else //страна не выбрана
			{
					$('#countryError').show();
			}
		isChange();	
	}
		
//выводит сообщение о сроке действия полиса (требования банка)
function commentDaysCount()
	{
		var selInd = document.getElementById("daysCount").selectedIndex;
		if (selInd == 5) //год
			$('#commentDaysCount').text('Страховой полис будет действовать в течение всего года при условии, что продолжительность одной поездки не превысит 91 день.');
		else
			$('#commentDaysCount').text('Страховой полис будет действовать в течение срока действия полиса, но в совокупности не более количества дней страхования, указанного в этом поле');
		ShowUniqueOptions();
		SelectTypeActions();
		
	}
		
//нажали "Оформить полис"
function clickEnterDataTraveled()
	{
		//сделаем активным в меню пункт "Оформление"
		window.location='personal.php';
	}


