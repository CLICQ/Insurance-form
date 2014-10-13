var minYear, maxYear;

// имена месяцев и т.п.
var calendarNamesHash = new Array();

calendarNamesHash.ru = new Array();
calendarNamesHash.en = new Array();

calendarNamesHash.ru.month = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
calendarNamesHash.ru.monthShort = ['января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'];
calendarNamesHash.ru.weekday = ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'];
calendarNamesHash.ru.today= 'сегодня';
calendarNamesHash.en.month = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
calendarNamesHash.en.monthShort = ['jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec'];
calendarNamesHash.en.weekday = ['M', 'T', 'W', 'T', 'F', 'S', 'S'];
calendarNamesHash.en.today= 'today';

var tasksLanguage = 'ru';
var calendarNames = calendarNamesHash[ tasksLanguage == 'en' ? 'en':'ru'];

// функция инициализации

function calendar(name,minY,maxY,value,options,formFlag) {
	// если formFlag установлен в true - значит по выбору даты нужно отправлять POST-запрос на эту же страницу с выбранной датой
	// см. функции writeInFields и setDateFromCalendar
	minYear = minY;
	maxYear = maxY;
	if(!value){
		var dNow = new Date();
		value = date2value(dNow);
	}
	writeInFields(name,value,options,formFlag);
	updateCalendar(name);
}

// служебные функции

function zeroFill(value){
	return (value<10 ? '0':'')+value;
}

function date2string(date){
	return date.getDate() + ' ' + calendarNames.monthShort[date.getMonth()] + ' ' + date.getFullYear();
}

function date2num(date){
	return date.getDate() + '.' + zeroFill(date.getMonth() + 1) + '.' + date.getFullYear();
}

function date2value(date){
	if (date == null)
		return '';
	else
		return date.getFullYear()+'-'+zeroFill(date.getMonth()+1)+'-'+zeroFill(date.getDate())+' '+ 
					  zeroFill(date.getHours())+':'+zeroFill(date.getMinutes())+':00';
}

function value2date(value){
	if (value && value != '0000-00-00 00:00:00'){
			var re = /(\d+)-(\d+)-(\d+)\s+(\d+):(\d+):(\d+)/i;
		var date = re.exec(value);
		if (date) return(new Date(date[1],date[2]-1,date[3],date[4],date[5],date[6]));
	}
		return null;
}

// интерфейсные функции

function updateCalendar(name){
	var date = getCalendarDateUnchecked(name);

	var dateInput = document.getElementsByName(name + 'Input')[0];
	var hoursInput = document.getElementsByName(name + 'Hours')[0];
	var minutesInput = document.getElementsByName(name + 'Minutes')[0];
	
	if (dateInput) dateInput.value = date ? date2string(date) : '-';
	if (hoursInput) hoursInput.value = date ? date.getHours() : '-';
	if (minutesInput) minutesInput.value = date ? zeroFill(date.getMinutes()) : '-';
}

function getCalendarDateUnchecked(name) {
	var hiddenValue = document.getElementsByName(name)[0];
	return hiddenValue ? value2date(hiddenValue.value) : null;
}

function getCalendarDate(name) {
	var date=getCalendarDateUnchecked(name);
	return date ? date : new Date();
}

function putCalendarDate(name, date) {
	var hiddenValue = document.getElementsByName(name)[0];
	if (hiddenValue){ 
		hiddenValue.value = date2value(date);
		updateCalendar(name);
	}
}

function putCalendarValue(name,value){
	var hiddenValue = document.getElementsByName(name)[0];
	if (hiddenValue){
		hiddenValue.value = value;
		updateCalendar(name);
	}
}

function calendarCallback(name, date, mode){
	$('#trip_start').val(date2value(date));
	$('.date_start').html(date2string(date));
	$('#trip_start').keyup()
}

function changeCalendarDate(name, date, mode){
	var current=getCalendarDate(name);
	
	putCalendarDate(name,date);
	
	if (date2value(date) != date2value(current)){
		calendarCallback(name, date, mode);
	}
}

//
//  служебные функции, вычисления, HTML и т.д.
//

var closeCalendarTimeOut = 0;

// все-таки придется где-нибудь хранить какой именно календарик открыть (его имя)
var activeCalendarName = '';

// функция вызывается при клике на дату в календаре

function setDateFromCalendar(dayToSet, monthToSet, yearToSet) {
	var dateToSet = getCalendarDate(activeCalendarName);
	dateToSet.setFullYear(yearToSet);
	dateToSet.setDate(1);
	dateToSet.setMonth(monthToSet);
	dateToSet.setDate(dayToSet);
	changeCalendarDate(activeCalendarName, dateToSet, 'date');
	// закрываем календарь
	hideCalendar();
	// отправка формы по выбору даты (POST-запрос на эту же страницу с выбранной датой) 
	$("#form_"+activeCalendarName).submit();
}

function setTodayFromCalendar() {
	var date=new Date();
	setDateFromCalendar(date.getDate(),date.getMonth(),date.getFullYear());
}

function getCalendarTimeFromString(fieldName) {
	var hoursInput = document.getElementsByName(fieldName + 'Hours')[0];
	var minutesInput = document.getElementsByName(fieldName + 'Minutes')[0];

	if (hoursInput && minutesInput){
		var newDate = getCalendarDate(fieldName);
		var thisHour=parseInt(hoursInput.value);
		var thisMinutes=parseInt(minutesInput.value);
		if (!isNaN(thisHour)) newDate.setHours(thisHour);
		if (!isNaN(thisMinutes)) newDate.setMinutes(thisMinutes);
		changeCalendarDate(fieldName, newDate, 'time');
	}
}

function getCalendarDateFromString(fieldName) {
	var dateInput = document.getElementsByName(fieldName + 'Input')[0];
	var re = /^\s*(\d+)[\s|\/|.]+([^\s]+)[\s|\/|.]+(\d+)\s*$/i;
	var results = re.exec(dateInput.value);
	if (results){
		// если небыло ошибки регекспа
		
		var newDate = getCalendarDate(fieldName);
		// определяем год
		var newYear = parseInt(results[3]);
		if (newYear < 30) newYear += 2000;
			else if (newYear < 100) newYear += 1900;
				else if (newYear < 1930) newYear += 2000;
				// что при последнем может получиться - никто не знает
		newDate.setFullYear(newYear);
		newDate.setDate(1);

		if (isNaN(parseInt(results[2]))) {
			var monthStr = results[2].toLowerCase();
			// в качестве месяца - строка
			// 
			for (var i = 0; i < 12; i++) {
				if (
					calendarNamesHash.ru.month[i].toLowerCase().indexOf(monthStr) == 0 ||
					calendarNamesHash.ru.monthShort[i].toLowerCase().indexOf(monthStr) == 0 ||
					calendarNamesHash.en.month[i].toLowerCase().indexOf(monthStr) == 0 ||
					calendarNamesHash.en.monthShort[i].toLowerCase().indexOf(monthStr) == 0
				) {
					newDate.setMonth(i);
					break;
				}
			}
		} else {
			// пришло число в качестве месяца
			// если нужно проверять не на американский манер
			// ли была передана дата, то это здесь
			newDate.setMonth(parseInt(results[2]) - 1);
		}
		newDate.setDate(parseInt(results[1]));
		changeCalendarDate(fieldName, newDate, 'date');
	} else if(dateInput.value == '-' || dateInput.value == '') {
		// пустая дата
		changeCalendarDate(fieldName, null, 'date');
	} else {
		// если по какой-то причине регексп не сработал
		alert('Не понял, что это за дата такая, возвращаю старую...');
		updateCalendar(fieldName);
	}
}

// внешний вид и поведение

function writeInFields(name, value, options, formFlag) {
	
	// Вставляет HTML-код с необходимыми полями...
	// если formFlag установлен в true - значит по выбору даты нужно отправлять POST-запрос на эту же страницу с выбранной датой 
	// currency_tab хранит значение текущей вкладки - для отправки его на сервер (необходимо для того, чтобы остаться на вкладке после перезагрузки страницы)
	if (formFlag === true) {
		document.write('<form action="" method="post" id="form_'+name+'" name="form_'+name+'">'
			+'<input type="hidden" name="' + name + '" value="' + value + '" />'
			+'<input type="hidden" id="currency_tab" name="currency_tab" value="" /></form>')
	} else {
		document.write('<input type="hidden" name="' + name + '" value="' + value + '" />');
	} 
	document.write('<input type="text" name="' + name + 'Input" size="12" onBlur="getCalendarDateFromString(\'' + name + '\');" />');
	if (options == 1) {
		document.write('<td><input type="text" name="' + name + 'Hours" size="3" onBlur="getCalendarTimeFromString(\'' + name + '\');" style="text-align: right;" /><\/td>');
		document.write('<td valign="middle"><small>&nbsp;:&nbsp;<\/small><\/td>');
		document.write('<td><input type="text" name="' + name + 'Minutes" size="3" onBlur="getCalendarTimeFromString(\'' + name + '\');" /><\/td>');
	}
}

function showCalendarForElement(elemName, evt, elemSubName) {
	if (!elemSubName) {
		var calPtr = $('.' + elemName)[0];
	} else {
		var calPtr = $('.' + elemSubName)[0];
	}
	
	if (calPtr) {
		// показывает календарь в слое (создает слой, если необходимо)
		var
			calLeer = $('#candarLeer'),
			jContent = calLeer.find('.content');
			
		if (!calLeer[0]) {
			calLeer = $(document.createElement('div')).attr('id', 'candarLeer');
			$('body').append(calLeer);
			calLeer.append('<span class="b-icon b-icon__close"></span>');
			jContent = $(document.createElement('div')).attr('class', 'content');
			calLeer.append(jContent);
		}
		// проверяем показан ли слой, если да - скрываем
		if (calLeer[0].style.visibility == 'visible' && activeCalendarName == elemName) {
			calLeer[0].style.visibility = 'hidden';
		} else {
			activeCalendarName = elemName;
			// скрываем слой
			calLeer[0].style.visibility = 'hidden';
			// вычисляем где именно должен быть этот календарь.
			var calPosition = new getElementPosition(calPtr);
			// заполняем нужным кодом...
			// смотрим какая дата нас интересует
			var currDate = getCalendarDate(elemName);

			// собственно вызываем код
			var calendarCode = calendarTop(currDate.getMonth(), currDate.getFullYear(), currDate);
			calendarCode += calendarHTML(currDate.getMonth(), currDate.getFullYear(), currDate);
			calendarCode += calendarToday();
			
			jContent[0].innerHTML = calendarCode;
			
			// ставим слой на место
			calLeer.css({
				left: calPosition.x, 
				top: calPosition.y,
				visibility: 'visible'
			});
			
			getDateChanges(jContent);
			
//			addEvent(calLeer.find('.close')[0], 'click', hideCalendar);

			// наконец, прекращаем баблинг (может, кто-то открыл без event'а)
			if (evt) evt.cancelBubble = true;
			// и ставим свой обработчик на клик на календаре (чтобы не скрывался)
			addEvent(calLeer[0], 'click', calendarClick);
			// и на mouseout (чтобы скрывался, но через некоторое время ;-)
			addEvent(calLeer[0], 'mouseover', calendarMouseOver);
			addEvent(calLeer[0], 'mouseout', calendarMouseOut);
			addEvent(calLeer.find('.b-icon__close')[0], 'click', hideCalendar);
		}
	}
}

function calendarClick(e) {
	evt = (e)? e : window.event;
	evt.cancelBubble = true;
}

function calendarMouseOver(e) {
	if (closeCalendarTimeOut) {
		clearTimeout(closeCalendarTimeOut);
		closeCalendarTimeOut = 0;
	}
}

function calendarMouseOut(e) {
	if (closeCalendarTimeOut) {
		clearTimeout(closeCalendarTimeOut);
	}
//	closeCalendarTimeOut = setTimeout('hideCalendar()', 5000);
}

function hideCalendar() {
	var calLeer = $('#candarLeer')[0];
	if (calLeer) calLeer.style.visibility = 'hidden';
	closeCalendarTimeOut = 0;
}


function switchMonthTo(month, year) {
	var calLeer = $('#candarLeer .content');
	if (calLeer[0]) {
		// заполняем нужным кодом...
		// смотрим какая дата нас интересует
		var currDate = getCalendarDate(activeCalendarName);
		// собственно вызываем код
		calLeer.find('.grid')[0].innerHTML = calendarHTML(month, year, currDate);
	}
}

function calendarTop(month, year, currDate) {
	// смотрим этот ли месяц показываем
	var isThisMonth = (currDate)? (currDate.getMonth() == month && currDate.getFullYear() == year) : false;
	
	// генерирует html-код для указанного месяца
	
	// устанавливаем месяц, который будем рисовать
	var drawMonth = new Date(); drawMonth.setMonth(month, 1); drawMonth.setYear(year); drawMonth.setDate(1);
	var thisMonth = drawMonth.getMonth();
	var thisYear = drawMonth.getFullYear();
	
	// запихиваем в строку весь код - открываем таблицы...
	var calendarCode = '<div class="current">';
	calendarCode += '<p>';
	
	//выпадающий список годов
	calendarCode += '<select name="year">';
	for(var y=minYear; y<maxYear; y++) {
		calendarCode += '<option value="' + y + '"';
		// текущий (показываемый) год
		if(y === thisYear){
			calendarCode += ' selected="selected"';
		}
		calendarCode += '>' + y + '</option>';
	}
	calendarCode += '</select>';

	//выпадающий список месяцев
	calendarCode += '<select name="month">';
	for(var m=0; m<calendarNames.month.length; m++) {
		calendarCode += '<option value="' + m + '"';
		// текущий (показываемый) месяц
		if(m == thisMonth){
			calendarCode += ' selected="selected"';
		}
		calendarCode += '>' + calendarNames.month[m] + '</option>';
	}
	calendarCode += '</select>';
	
	calendarCode += '<\/p><\/div>';
	
	return calendarCode;
}

function calendarToday() {
	// ссылка на сегодня
	return '<p class="current current_date" onClick="setTodayFromCalendar();"><span class="pseudo-link">'+calendarNames.today+'<\/span><\/p>';
}

function calendarHTML(month, year, currDate) {
	// смотрим этот ли месяц показываем
	var isThisMonth = (currDate)? (currDate.getMonth() == month && currDate.getFullYear() == year) : false;

	// генерирует html-код для указанного месяца
	
	// устанавливаем месяц, который будем рисовать
	var drawMonth = new Date();
	drawMonth.setMonth(month, 1);
	drawMonth.setYear(year);
	drawMonth.setDate(1);
	
	// переменные для кнопок навигации по месяцам/годам
	var thisMonth = drawMonth.getMonth();
	var nextMonth = (thisMonth == 11)? 0 : thisMonth + 1;
	var prevMonth = (thisMonth == 0)? 11 : thisMonth - 1;
	var thisYear = drawMonth.getFullYear();
	var nextMonthYear = (thisMonth == 11)? thisYear + 1 : thisYear;
	var nextYear = thisYear + 1;
	var prevMonthYear = (thisMonth == 0)? thisYear - 1 : thisYear;
	var prevYear = thisYear - 1;
	
	// начинаем таблицу самого месяца
	var calendarCode = '<div class="grid"><table width="100%"><tr>';
	for (var i = 0; i < calendarNames.weekday.length; i++) {
		var styleClass = (i < calendarNames.weekday.length - 2)? 'whiteCell' : 'sundayCell';
		calendarCode += '<th class="' + styleClass + '">' + calendarNames.weekday[i] + '<\/th>';
	}
	calendarCode += '<\/tr>';
	
	// сам месяц
	calendarCode += '<tr>';

	// рисуем пустые ячейки если нужно...
	var daysToStart = (drawMonth.getDay() == 0)? 7 : drawMonth.getDay();
	for (var i = 0; i < daysToStart - 1; i++) calendarCode += '<td>&nbsp;<\/td>';
	
	// собственно циферки
	for (var i = 1; i < 33; i++) {
		drawMonth.setDate(i);
		// сегодняшнюю дату не выделяем никак
		//if (isThisMonth && i == currDate.getDate()) {
		//	calendarCode += '<td class="blackCell">' + i + '<\/td>'
		//} else {
			if (drawMonth.getMonth() == thisMonth) {
				var styleClass = (drawMonth.getDay() == 0 || drawMonth.getDay() == 6)? 'sundayCell' : 'whiteCell'
				calendarCode += '<td class="' + styleClass + '" onMouseOver="this.className = \'overCell\';" onMouseOut="this.className = \'' + styleClass + '\';" onClick="setDateFromCalendar(' + i + ', ' + month + ', ' + year + ');">' + i + '<\/td>';
			} else break;
		//}
			if (drawMonth.getDay() == 0) calendarCode += '<\/tr><tr>';
	}
	
	// опять рисуем пустые ячейки
	if (drawMonth.getDay() != 1) {
		var daysToEnd = 8 - ((drawMonth.getDay() == 0)? 7 : drawMonth.getDay());
		for (var i = 0; i < daysToEnd; i++) calendarCode += '<td>&nbsp;<\/td>';
	}
	calendarCode += '<\/tr><\/table></div>';

	return calendarCode;
}

function getDateChanges(calLeer) {
	var
		jYear = calLeer.find('select[name=year]'),
		jMonth = calLeer.find('select[name=month]');
	
	jYear.change(function() {
		switchMonthTo(jMonth.val(), jYear.val());
	});
	
	jMonth.change(function() {
		switchMonthTo(jMonth.val(), jYear.val());
	});
}

function getElementPosition(elemPtr) {
	var posX = elemPtr.offsetLeft;
	var posY = elemPtr.offsetTop;
	while (elemPtr.offsetParent != null) {
		elemPtr = elemPtr.offsetParent;
		posX += elemPtr.offsetLeft;
		posY += elemPtr.offsetTop;
	}
	this.x = posX;
	this.y = posY;
	return this;
}

function addEvent(elementPtr, eventType, eventFunc) {
	if (elementPtr.addEventListener) {
		elementPtr.addEventListener(eventType, eventFunc, false);
	} if (elementPtr.attachEvent) {
		elementPtr.attachEvent('on' + eventType, eventFunc);
	} else {
		// что делать если ни то ни другое не поддерживается
	}
}

addEvent(document, 'click', hideCalendar);
addEvent(window, 'resize', hideCalendar);
