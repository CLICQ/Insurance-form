//Создан 02.10.2014
//Орлова М, spellabs

//проверяет все ли поля заполнены на странице страхователя	
function isTravelerFill()
	{
		/*var isTrue = true ;
		$('.ru-name, .en-name, .date').each(
			if  (!$(this).attr('isValid'))
				isTrue = false;
			);*/
		//alert($('[isValid = true]').length);
		//для оформления полиса должны быть заполнены
		if (
			//$('.ru-name').attr('isValid') && //дата начала
			//$('.en-name').attr('isValid') && 
			//$('.date').attr('isValid') &&
			$('[isValid = false]').length == 0 &&
			$('#email').attr('isValid') &&
			$('#phone').attr('isValid') &&
			$('#agree').prop('checked')
			
			 )
			{
				// показать кнопку "Сохранить полис"
				$("#divSavePolice").show();
				
			}
		else 
			{	
				// спрятать кнопку "Сохранить полис"
				$("#divSavePolice").hide();
				
			}
	}
	
//проверка на существование Даты
function isValidDate(str)
	{
		var txt = $('#'+str).val().replace(/(\d+).(\d+).(\d+)/, '$2/$1/$3');
		
		var newvalue = new Date( txt );
		
		if ( newvalue == 'Invalid Date')
			{
			$('#'+str+'Msg').text('Ошибочная дата');
			$('#'+str).css({'border' : '1px solid #ff0000'});
			$('#'+str).attr('isValid',false);
			}
		else
			{
			$('#'+str+'Msg').text('');
			$('#'+str).css({'border' : '1px solid #569b44'});
			$('#'+str).attr('isValid',true);
			}
			
		var today = new Date();
		var todayYear = today.getFullYear();
		var valueYear = newvalue.getFullYear();
		
		if ( (todayYear - valueYear) < 18 && str == "RBithDay") 
					{
					$('#RBithDaytMsg').text('Страхователем может быть только совершеннолетний!');
					$('#'+str).css({'border' : '1px solid #ff0000'});
					$('#'+str).attr('isValid',false);
					}
		
		if ( (todayYear - valueYear) > 80 ) 
				$('#'+str+'Msg').text('Полисы для граждан в возрасте старше 80 лет оформляются только в офисе страховой компании!');
		
		isTravelerFill();		
	}
	
	function is80year(value)
		{
			var ind = value.substr(7);
			var txt = $('#'+value).val().replace(/(\d+).(\d+).(\d+)/, '$2/$1/$3');
			//alert('value='+value+';txt='+txt);
			
			var newvalue = new Date( txt );
			
			//alert(newvalue);
			var today = new Date();
			var todayYear = today.getFullYear();
			var valueYear = newvalue.getFullYear();
			//alert('#is80year'+ind);
			if ((todayYear - valueYear) >= 80) $('#is80year'+ind).show();
				else $('#is80year'+ind).hide();
		}
	
	function clickRF(ind){
			if ($('#isRF'+ind).prop('checked'))
				$('#inputCountry'+ind).hide();
			else $('#inputCountry'+ind).show(); 
				
			}
	
	function TstDate(str)
	{
		var str2 = str.split(".");
		
		if(str2.length!=3){return false;}
		//Границы разрешенного периода. Нельзя ввести дату до 1990-го года и позднее 2020-го.
		if((parseInt(str2[2], 10)<=1900)||(parseInt(str2[2], 10)>=2014)) {return false;}
		str2=str2[2] +'-'+ str2[1]+'-'+ str2[0];
		if(new Date(str2)=='Invalid Date'){return false;}
		return str;
	}

	
function ValidateDate(date_fl){
	var str = $('#'+date_fl).val();
	
	var S=TstDate(str);
	if(S)
	{
		//Дата валидна
		$('#adultMsg').text('date_ok');
		//document.getElementById("submit").disabled = false;
	}
	else
	{
		//Дата не валидна
		$('#adultMsg').text('date_err');
		//document.getElementById("submit").disabled = true;
	}
}