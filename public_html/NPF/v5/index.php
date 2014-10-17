<? 	header('Content-Type: text/html; charset=utf-8');
	session_start();
	error_reporting( E_ERROR );
	include "calculate.php";
        ?>
 
<!DOCTYPE html> 
<html>
	<head>
		<title>Калькулятор</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link href="index_files/stylesNew.css" rel="stylesheet"> 

        <!--[if IE]><link href="/content/css/stylesnew/ie.css" type="text/css" rel="stylesheet" /><![endif]-->
        <!--[if lte IE 7]><link href="/content/css/stylesnew/ie7.css" type="text/css" rel="stylesheet" /><![endif]-->
        <!--[if IE 8]><link href="/content/css/stylesnew/ie8.css" type="text/css" rel="stylesheet" /><![endif]-->
    
		<!-- стили главного сайта -->
        <script type="text/javascript" async="" src="index_files/7750.js"></script>
		<script src="index_files/gtm.js" async=""></script>
		<script src="index_files/analytics.js" async=""></script>
		<script src="index_files/dc.js" async="" type="text/javascript"></script>
		<script type="text/javascript" src="index_files/jquery-1.js"></script>
		<link rel="stylesheet" type="text/css" href="index_files/master.css"> 
		<script src="index_files/WLPriceFilterSettings.js" type="text/javascript"></script>
		<!-- //////////////////// -->

		<!-- для работы компонент JQuery UI-->
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
		<script src="/resources/demos/external/jquery-mousewheel/jquery.mousewheel.js"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
		<!-- ///////////////////////////// -->

		<!-- Орлова М. -->
		<link rel="stylesheet" type="text/css" href="styles.css"/>
		<script type="text/javascript" src="calculate.js"></script>
		<!-- ///////// -->
        
		<!--[if lte IE 8]>
            <style type="text/css">
                .button-style-normal,
                .button-style-marked,
                .button-style-marked:hover,
                .button-style-marked:active,
                .button-style-normal:hover,
                .button-style-normal:active {
                    background: none;
                    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#45d500', endColorstr='#34a100',GradientType=0 );
                }
            </style>
        <![endif]-->

        <!-- TODO: Should be changed in the future to the actual values -->
        <script type="text/javascript">
            var oapid = "666";
            var oapText = "WhiteLabel";
        </script>

        <meta name="robots" content="noindex, nofollow">
    </head>

<body class="start-page">

	<div class="b-page">
		<div class="b-page-header">
			<div class="b-page-header-content b-wrapper">
				<!-- start custom header here -->
				<div class="b-line">    <a href="http://rsb.oktogo.ru/"><div class="b-logo"></div></a>   <div class="b-logo-partner"></div></div><div class="b-line b-top-banner">    <a href="https://travel.rsb.ru/avia?utm_source=oktogo.ru&amp;utm_medium=action&amp;utm_campaign=Oktogo&amp;pr=av" target="_blank">Перейти к покупке авиабилетов</a></div>
				<!-- end custom header here -->
			</div>
		</div>

		<div class="b-page-content" id="container">
			<div class="b-page-content-inner">
				<div class="b-breadcrumbs-wrapper b-breadcrumbs-index b-wrapper">
					<ul class="b-breadcrumbs">
							<li class="b-breadcrumbs_item breadcrumbs-item-current">Расчет</li>
							<li class="b-breadcrumbs_item breadcrumbs-item-disabled"><a href='#'>Оформление</a></li>
							<li class="b-breadcrumbs_item breadcrumbs-item-disabled"><a href="#">Оплата</a></li>
							<li class="b-breadcrumbs_item breadcrumbs-item-disabled"><a href="#">Результат</a></li>
					</ul>
				</div>

				<div class="b-clearfix"></div>

				<div class="b-page-frame">
					<div class="b-page-frame_inner">
						<div class="b-wrapper b-wrapper-main">
							<div class="b-top-search">
								<div class="b-form">
									<script type="text/javascript">
									/*	var cntrSearch;
										$(function() {
											ko.applyBindings(new OK.viewModels.HomeViewModel({
												destAutoComplUrl: '/api/LocationResolver'
											}));
										});*/
									</script>
									<noindex>
										<p class="b-page-title">Калькулятор</p>
										<form action="" class="b-form b-form-search-main -visor-no-click" method="post" id="frmSearch" name="frmSearch"  style="z-index: 100;">
											<input type="hidden" id="searchDestination" name="searchDestination">
											<input type="hidden" id="searchDestinationId" name="js-searchDestinationId">
											<input type="hidden" name="searchCheckInDate" id="searchCheckInDate">
											<input type="hidden" name="searchCheckOutDate" id="searchCheckOutDate">
											
											<div style="display:none;">
												<div class="b-line">
													<div class="b-inline b-form-elem elem-size-big elem-style-marked b-destination">
														<label class="b-form-elem_label" for="dest">Место или название отеля</label>
														<div class="b-form-elem_wrapper b-wrapper-autocomplete js-acContainer">
															<span class="watermark_container" style="display: inline-block; position: relative;">
															<span class="watermark" style="position: absolute; display: block; font-family: Arial, Geneva, Helvetica, sans-serif; color: rgb(153, 153, 153); left: 14px; top: 0px; height: 40px; line-height: 40px; text-align: left; pointer-events: none;">Место или название отеля</span>
															<input class="b-form-elem_control b-elem-destination inpIconInput js-dest ui-autocomplete-input" name="dest" maxlength="100" data-val="true" data-val-required="Введите пункт назначения" tabindex="1" type="text" title="Место или название отеля" autocomplete="off" data-jq-watermark="processed" value="dfs"/></span><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
															<a class="b-form-elem_validation-icon b-icon-close btnIconInput btnClose" href="http://rsb.oktogo.ru/#" style="display:none"></a>
															<span class="b-form-elem_validation-icon b-icon-loading btnIconInput js-btnLoader" style="display:none"></span>
														<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-1" tabindex="0" style="z-index: 101; display: none;"></ul></div>
													</div>
													<div class="b-inline b-dates">
														<div class="b-inline b-form-elem elem-size-big elem-style-marked">
															<label class="b-form-elem_label" for="CheckIn">Заезд</label>
															<div class="b-form-elem_wrapper">
																<input class="b-form-elem_control b-elem-calendar js-checkIn" tabindex="1" type="text" title="Дата заезда" readonly=""><div class="pickadate__holder"><div class="pickadate__calendar--wrap"><div class="pickadate__calendar"><div class="pickadate__month--nav"><div class="pickadate__month--next" data-nav="1">></div></div><div class="pickadate__month--wrap"><div class="pickadate__month">Июль</div></div><div class="pickadate__year--wrap"><div class="pickadate__year">2014</div></div><table class="pickadate__calendar--table"><thead><tr><th class="pickadate__weekday">Пн</th><th class="pickadate__weekday">Вт</th><th class="pickadate__weekday">Ср</th><th class="pickadate__weekday">Чт</th><th class="pickadate__weekday">Пт</th><th class="pickadate__weekday">Сб</th><th class="pickadate__weekday">Вс</th></tr></thead><tbody class="pickadate__calendar--body"><tr><td><div class="pickadate__day pickadate__day--outfocus pickadate__day--disabled" data-disabled="2014/5/30">30</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled" data-disabled="2014/6/1">1</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled" data-disabled="2014/6/2">2</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled" data-disabled="2014/6/3">3</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--today" data-date="2014/6/4">4</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--highlighted pickadate__day--selected" data-date="2014/6/5">5</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/6">6</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/7">7</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/8">8</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/9">9</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/10">10</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/11">11</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/12">12</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/13">13</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/14">14</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/15">15</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/16">16</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/17">17</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/18">18</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/19">19</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/20">20</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/21">21</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/22">22</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/23">23</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/24">24</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/25">25</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/26">26</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/27">27</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/28">28</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/29">29</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/30">30</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/31">31</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/1">1</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/2">2</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/3">3</div></td></tr><tr><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/4">4</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/5">5</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/6">6</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/7">7</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/8">8</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/9">9</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/10">10</div></td></tr></tbody></table></div></div></div><input type="hidden" name="_submit" value="2014/07/05">
															</div>
														</div>
														<div class="b-inline b-form-elem elem-size-big elem-style-marked">
															<label class="b-form-elem_label" for="CheckOut">Выезд</label>
															<div class="b-form-elem_wrapper">
																<input class="b-form-elem_control b-elem-calendar js-checkOut" tabindex="1" type="text" title="Дата выезда" readonly=""><div class="pickadate__holder"><div class="pickadate__calendar--wrap"><div class="pickadate__calendar"><div class="pickadate__month--nav"><div class="pickadate__month--next" data-nav="1">></div></div><div class="pickadate__month--wrap"><div class="pickadate__month">Июль</div></div><div class="pickadate__year--wrap"><div class="pickadate__year">2014</div></div><table class="pickadate__calendar--table"><thead><tr><th class="pickadate__weekday">Пн</th><th class="pickadate__weekday">Вт</th><th class="pickadate__weekday">Ср</th><th class="pickadate__weekday">Чт</th><th class="pickadate__weekday">Пт</th><th class="pickadate__weekday">Сб</th><th class="pickadate__weekday">Вс</th></tr></thead><tbody class="pickadate__calendar--body"><tr><td><div class="pickadate__day pickadate__day--outfocus pickadate__day--disabled" data-disabled="2014/5/30">30</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled" data-disabled="2014/6/1">1</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled" data-disabled="2014/6/2">2</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled" data-disabled="2014/6/3">3</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled pickadate__day--today" data-disabled="2014/6/4">4</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled" data-disabled="2014/6/5">5</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--highlighted pickadate__day--selected" data-date="2014/6/6">6</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/7">7</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/8">8</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/9">9</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/10">10</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/11">11</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/12">12</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/13">13</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/14">14</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/15">15</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/16">16</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/17">17</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/18">18</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/19">19</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/20">20</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/21">21</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/22">22</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/23">23</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/24">24</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/25">25</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/26">26</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/27">27</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/28">28</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/29">29</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/30">30</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/31">31</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/1">1</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/2">2</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/3">3</div></td></tr><tr><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/4">4</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/5">5</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/6">6</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/7">7</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/8">8</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/9">9</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/10">10</div></td></tr></tbody></table></div></div></div><input type="hidden" name="_submit" value="2014/07/06">
															</div>
														</div>
													</div>
												</div> 
											</div>  

											<div class="b-inline b-form-elem elem-size-big elem-style-marked b-destination">
												<label class="b-form-elem_label"  for="dest">Какую страну планируете посетить?</label>
												<select name="CountryID" id="CountryID" class="b-form-elem_control" onchange="clickCountry()" value=<?if($_SESSION["CountryID"]) echo $_SESSION["CountryID"];?> >
													<option selected >Выберите страну</option>
													<?	
														$arr = array();
														$i = 0;
														//сформируем массив
														foreach($_SESSION['CountriesArrays'] as $OneCountry)
															{
																$arr[$i][0] = $OneCountry[0];
																$arr[$i][2] = $OneCountry[2];
																if ( $OneCountry[3] != NULL ) $arr[$i][3] = "Шенген";
																$i++;
															}
														usort($arr, "compare"); // Вызываем пользовательскую сортировку
														/* Функция для нашей сортировки */
														function compare ($v1, $v2) {
															/* Сравниваем значение по ключу date_reg */
															if ($v1[2] == $v2[2]) return 0;
															return ($v1[2] < $v2[2])? -1: 1;
														  }
														
															
														//выведем в селект
														foreach($arr as $OneCountry){
														
														?>
														<option <?if($_SESSION["CountryID"]==$OneCountry[0]){echo "selected";}?> value="<?echo $OneCountry[0]?>" atr="<?=$OneCountry[3]?>"><?=$OneCountry[2].' '.$OneCountry[3];?></option>
													<?}?>
												</select>
											</div>
 
											<div class="b-line b-rooms">
												<div class="b-inline b-form-elem elem-size-big elem-style-marked b-destination">
													<label class="b-form-elem_label" style="font-size:16px;" for="dest">Выберите тип полиса</label>
													<div class="b-form-elem_wrapper b-wrapper-autocomplete js-acContainer">
														
																<input style="vertical-align:middle;" <?if($_SESSION["groupOfProgram"]=='odn'){echo "checked";}?> type="radio" class="input-radio" value="odn" name="groupOfProgram" id="groupOfProgram1" onclick="clickPolice();"/>
																<label style="vertical-align:middle;" for="groupOfProgram1" class="radio-item" >на одну поездку</label>

																<input style="vertical-align:middle;" <?if($_SESSION["groupOfProgram"]=='mul'){echo "checked";}?> type="radio" class="input-radio" value="mul" name="groupOfProgram" id="groupOfProgram2" onclick="clickPolice();"/>
																<label style="vertical-align:middle;" for="groupOfProgram2" class="radio-item" >многократный полис</label>
															
													</div>
													<div id='countryError' class='warning' style="display:none;">Вы забыли выбрать страну!</div>
													
												</div>
											</div>
											
											<hr class="for-one for-all" style="border-top: 1px dashed rgb(204, 204, 204)"/>
											
											<div class="b-inline b-rooms for-one for-all">
												<label class="b-form-elem_label"  for="CheckIn">Укажите срок действия полиса</label>
											</div>	 
				 
											<div class="b-inline for-one for-all"> 
												<div class="b-inline b-form-elem elem-size-big elem-style-marked">
													<div class="b-inline label-date" >
														<label class="b-form-elem_label label-date"  for="CheckIn">Дата начала</label>
													</div>	
													
													<input type="text" id="EffectiveDate" class="DatePicker b-form-elem_control b-elem-calendar js-checkOut" name="EffectiveDate" placeholder="гггг-мм-дд" readonly="readonly" onclick="$('#EffectiveDate').datepicker('show');" value="<?=$_SESSION["EffectiveDate"]?>"  >
														
													<div class="pickadate__holder">
														<div class="pickadate__calendar--wrap">
														<div class="pickadate__calendar">
														<div class="pickadate__month--nav"><div class="pickadate__month--next" data-nav="1">></div></div>
														<div class="pickadate__month--wrap"><div class="pickadate__month">Июль</div></div>
														<div class="pickadate__year--wrap"><div class="pickadate__year">2014</div></div>
														<table class="pickadate__calendar--table"><thead><tr><th class="pickadate__weekday">Пн</th><th class="pickadate__weekday">Вт</th><th class="pickadate__weekday">Ср</th><th class="pickadate__weekday">Чт</th><th class="pickadate__weekday">Пт</th><th class="pickadate__weekday">Сб</th><th class="pickadate__weekday">Вс</th></tr></thead>
														<tbody class="pickadate__calendar--body"><tr><td><div class="pickadate__day pickadate__day--outfocus pickadate__day--disabled" data-disabled="2014/5/30">30</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled" data-disabled="2014/6/1">1</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled" data-disabled="2014/6/2">2</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled" data-disabled="2014/6/3">3</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--today" data-date="2014/6/4">4</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--highlighted pickadate__day--selected" data-date="2014/6/5">5</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/6">6</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/7">7</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/8">8</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/9">9</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/10">10</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/11">11</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/12">12</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/13">13</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/14">14</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/15">15</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/16">16</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/17">17</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/18">18</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/19">19</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/20">20</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/21">21</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/22">22</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/23">23</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/24">24</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/25">25</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/26">26</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/27">27</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/28">28</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/29">29</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/30">30</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/31">31</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/1">1</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/2">2</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/3">3</div></td></tr><tr><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/4">4</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/5">5</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/6">6</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/7">7</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/8">8</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/9">9</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/10">10</div></td></tr></tbody></table></div></div>
													</div>
													<input type="hidden" name="_submit" value="2014/07/05">
															
												</div>
											</div>
											<div class="b-inline">
												<div class="for-one">
													<div id="warning" style="color:red; display:none">
															Дата окончания должна быть больше даты начала
													</div>
													<div class="b-inline b-rooms b-form-elem elem-size-big elem-style-marked">
														<div class="b-form-elem_wrapper">
															<div class="b-inline label-date label-date" >
																<label  class="b-form-elem_label label-date" for="CheckOut">Дата окончания</label>
															</div>
															
															<input type="text" name="ExpirationDate" id="ExpirationDate" class="DatePicker b-form-elem_control b-elem-calendar js-checkOut" readonly="readonly" placeholder="гггг-мм-дд" value="<?=$_SESSION["ExpirationDate"]?>" onclick="$('#ExpirationDate').datepicker('show');"/>
														</div>
													</div>
												</div>
												<div class="for-one for-all b-rooms" >
													<div class="b-inline " style="vertical-align:bottom;" >
														<div class="b-form-elem_label for-all" style="font-weight:normal;width:220px">Срок действия полиса: <span id='staticDaysCount'><?if($_SESSION["daysCount"] =='365'){echo "1 год";}?></span></div>
													</div>
													<div class="b-inline b-form-elem b-adults elem-size-big elem-style-marked" >
														<div class="b-form-elem_wrapper" id="daysCountBlock">
															<?if($_SESSION["groupOfProgram"]=="odn"){?>
																<input  name='daysCount' id='daysCount' type='text' style='display:none;' value='<?=$_SESSION["daysCount"]?>'/>
																<div id='div-daysCount' class="b-form-elem_label"  style="display:none;font-weight:normal;width:125px"><?=$_SESSION["daysCount"]?></div>
																
															<?}else{?>
																<select id="daysCount" name="daysCount"  class="selector" <?if($_SESSION["daysCount"] =='365'){echo "style='display:none'";}?> onchange="javascript:commentDaysCount();">
																	<option <?if($_SESSION["daysCount"]=='15'){echo "selected";}?> value="15">15 дней</option>
																	<option <?if($_SESSION["daysCount"]=='30'){echo "selected";}?> value="30">30 дней</option>
																	<option <?if($_SESSION["daysCount"]=='60'){echo "selected";}?> value="60">60 дней</option>
																	<option <?if($_SESSION["daysCount"]=='90'){echo "selected";}?> value="90">90 дней</option>
																	<option <?if($_SESSION["daysCount"]=='180'){echo "selected";}?> value="180">180 дней</option>
																	<option <?if($_SESSION["daysCount"]=='365'){echo "selected";}?> value="365">1 год</option>						
																</select>									
															<?}?>
															<!--<div class="selector" id="uniform-undefined"><span>2 взрослых</span><select class="b-form-elem_control js-uniform js-uniform-applied" data-bind="options: $root.Rooms.adultsOpt, optionsText: &#39;text&#39;, optionsValue: &#39;val&#39;, value: $data.adultsCount, event: { change: $root.Rooms.adultsChange }" style="opacity: 0;"><option value="1">1 взрослый</option><option value="2">2 взрослых</option><option value="3">3 взрослых</option><option value="4">4 взрослых</option><option value="5">5 взрослых</option><option value="6">6 взрослых</option></select></div>
																	-->
														</div>
														
													</div>
													<div id="commentDaysCount"><?if($_SESSION["daysCount"]=='365'){echo "Страховой полис будет действовать в течение всего года при условии, что продолжительность одной поездки не превысит 91 день.";} 
																					else echo "Страховой полис будет действовать в течение срока действия полиса, но в совокупности не более количества дней страхования, указанного в этом поле";?>
														</div>
												</div>
											</div>
											
											<hr class="for-one for-all" style="border-top: 1px dashed rgb(204, 204, 204)"/>
											
											<div class="b-inline for-one for-all b_rooms" >
												<div class="b-inline b-rooms for-one for-all">
													<label class="b-form-elem_label"  >Укажите возраст путешественников</label>
												</div>	 
											</div>
											
											<div class="b-inline for-one for-all" style="margin-top:10px;">
												<!--<div class="b-inline" style="vertical-align:bottom;">
													<div class="b-form-elem_label"style="font-weight:normal; width:250px;" >Возраст путешественников:</div>
												</div>	
												-->
												<div class="b-inline " title="Возраст путешественников">
													<div class="b-form-elem_wrapper">
															<span  style="margin-left:5px; margin-right:13px">
																<label style="font-weight:normal;font-size:12px">до 3х лет</label>
																<input type='text' id='AgeBetween3' name='AgeBetween3' class='years' style='width:15px;' value='<?if($_SESSION["AgeBetween3"]){echo $_SESSION["AgeBetween3"];} else {echo '0';}?>' onblur="changeCountTraveler()" <?//if($_POST["AgeBetween"]=='3'){echo "selected";}?> />
															</span>
															<span  style= "margin-right:13px">
																<label style="font-weight:normal;font-size:12px">от 3 до 16 лет</label>
																<input type='text' id='AgeBetween9' name='AgeBetween9' class='years' style='width:15px;' value='<?if($_SESSION["AgeBetween9"]){echo $_SESSION["AgeBetween9"];} else {echo '0';}?>' onblur="changeCountTraveler()"<?//if($_POST["AgeBetween"]=='9'){echo "selected";}?> />
															</span>
															<span style= "margin-right:13px">
																<label style="font-weight:normal;font-size:12px">от 16 до 28 лет</label>
																<input type='text' id='AgeBetween22' name='AgeBetween22' class='years' style='width:15px;' value='<?if($_SESSION["AgeBetween22"]){echo $_SESSION["AgeBetween22"];} else {echo '0';}?>' onblur="changeCountTraveler()"<?//if($_POST["AgeBetween"]=='22'){echo "selected";}?> />
															</span>
															<span style= "margin-right:13px">
																<label style="font-weight:normal;font-size:12px">от 28 до 70 лет</label>
																<input type='text' id='AgeBetween49' name='AgeBetween49' class='years' style='width:15px;' value='<?if($_SESSION["AgeBetween49"]){echo $_SESSION["AgeBetween49"];} else {echo '0';}?>' onblur="changeCountTraveler()"<?//if($_POST["AgeBetween"]=='49'){echo "selected";}?> />
															</span>
															<span style= "margin-right:13px">
																<label style="font-weight:normal;font-size:12px">от 70 до 75 лет</label>
																<input type='text' id='AgeBetween72' name='AgeBetween72' class='years' style='width:15px;' value='<?if($_SESSION["AgeBetween72"]){echo $_SESSION["AgeBetween72"];} else {echo '0';}?>' onblur="changeCountTraveler()"<?//if($_POST["AgeBetween"]=='72'){echo "selected";}?> />
															</span>
															<span >
																<label style="font-weight:normal;font-size:12px">от 75 до 80 лет</label>
																<input type='text' id='AgeBetween77' name='AgeBetween77' class='years' style='width:15px;' value='<?if($_SESSION["AgeBetween77"]){echo $_SESSION["AgeBetween77"];} else {echo '0';}?>' onblur="changeCountTraveler()"<?//if($_POST["AgeBetween"]=='77'){echo "selected";}?> />
															</span>
													</div>
													<div class="b-form-elem_label b-rooms" style="font-weight:normal;width:100%"> 
														<span style="width:100px">Количество путешественников: </span>
														<input type="text" name="PeopleCount" id="PeopleCount" <?if($_SESSION["PeopleCount"]){echo "value=".$_SESSION["PeopleCount"];} else {echo 'value="0" style="color:red"';}?> readonly  />
														<div id='count-error' style="font-size:12px">Количество путешественников должно быть не больше пяти!</div>
													</div>
													
												</div>
											</div>
											
											
											<hr class="for-one for-all" style="border-top: 1px dashed rgb(204, 204, 204)"/>
											
											<div class="b-line for-one for-all b-rooms">
												<label class="b-form-elem_label" style="font-size:16px;" for="dest">Выберите сумму страхового покрытия и валюту: </label>
												<div  class="b-inline b-form-elem b-adults elem-size-big elem-style-marked" >
													<div class="b-form-elem_wrapper b-wrapper-autocomplete js-acContainer">
														<div id="radio" >
															<div id='divInsuredSum1' class="b-inline" <?foreach($_SESSION['CountriesArrays'] as $OneCountry)
																						{	if($_SESSION["CountryID"] == $OneCountry[0]){$Country=$OneCountry[2];}} 
																							isVisibleSum($Country,'InsuredSum1');?> >
																<input type="radio"  id="InsuredSum1" name="InsuredSum" checked='checked' class="InsuredSum" value="15000" <?if($_SESSION["InsuredSum"]=='15000'){echo "checked ";} ?>  onclick="ShowUniqueOptions()"/>
																<label id="labelInsuredSum1" style="vertical-align:middle;" for="InsuredSum1" class="radio-item" >15000</label>
															</div>
															<div id='divInsuredSum2' class="b-inline" <?foreach($_SESSION['CountriesArrays'] as $OneCountry)
																						{	if($_SESSION["CountryID"] == $OneCountry[0]){$Country=$OneCountry[2];}} 
																							isVisibleSum($Country,'InsuredSum2');?>>
																<input type="radio" id="InsuredSum2" name="InsuredSum" class="InsuredSum" value="30000"  <?if($_SESSION["InsuredSum"]=='30000'){echo "checked ";}?>  onclick="ShowUniqueOptions()"/>
																<label id="labelInsuredSum2" style="vertical-align:middle;" for="InsuredSum2" class="radio-item" >30000</label>
															</div>
															<div id='divInsuredSum3' class="b-inline" <? foreach($_SESSION['CountriesArrays'] as $OneCountry)
																						{	if($_SESSION["CountryID"] == $OneCountry[0]){$Country=$OneCountry[2];}} 
																							isVisibleSum($Country,'InsuredSum3');?>>
																<input type="radio" id="InsuredSum3" name="InsuredSum" class="InsuredSum" value="50000" <?if($_SESSION["InsuredSum"]=='50000'){echo "checked ";}?>  onclick="ShowUniqueOptions()"/>
																<label id="labelInsuredSum3" style="vertical-align:middle;" for="InsuredSum3" class="radio-item" >50000</label>
															</div>
															<div id='divInsuredSum4' class="b-inline" <?foreach($_SESSION['CountriesArrays'] as $OneCountry)
																						{	if($_SESSION["CountryID"] == $OneCountry[0]){$Country=$OneCountry[2];}} 
																							isVisibleSum($Country,'InsuredSum3');?>>
																<input type="radio" id="InsuredSum4"  name="InsuredSum" class="InsuredSum" value="100000" <?if($_SESSION["InsuredSum"]=='100000'){echo "checked ";}?>	 onclick="ShowUniqueOptions()"/>
																<label id="labelInsuredSum4" style="vertical-align:middle;" for="InsuredSum4" class="radio-item" >100000</label>
															</div>
															<!--<span style="margin-right:10px">&nbsp;</span>-->
														</div>
													</div>
												</div>
												<div class="b-inline b-form-elem elem-size-big elem-style-marked b-destination">
													<select name="Currency" id="Currency"  class="selector" <?if ($isShengen == 'true' ) echo "disabled";?> onchange='isChange();' >
															
																<? $tmpCur = $_SESSION["Currency"];
																	if ($isShengen == 'true') $tmpCur = '1'; //euro 
																	foreach($CurrencyArrays as $Key => $OneCurrency){
																	?>
																	<option <?if( $tmpCur == $Key){echo "selected";}?> value="<?=$Key?>" <?if ($isShengen == 'true' && $Key == '0') echo "style='display:none'";  ?> ><?
                                                                                                                                           // $OneCurrency[2]
                                                                                                                                                if('ЕВРО' == $OneCurrency[2]){
                                                                                                                                                echo "EURO";
                                                                                                                                                }
                                                                                                                                            else if( 'ДОЛЛАР США' == $OneCurrency[2]){
                                                                                                                                            echo "USD";
                                                                                                                                            }                                                                                                             
                                                                                                                                            else{
                                                                                                                                            echo "<p style='color:red'>Ошибка валюты. Обновите пожалуйста страницу.</br> В случае повторения обратитесь к администратору.</p>";
                                                                                                                                            }
                                                                                                 
                                                                                                                        
                                                                                                                                                        ?></option>
																<?}?>
															
													</select>
												</div>
											<div>Предустановленный набор опций зависит от суммы страхового покрытия!</div>
											</div>
										
											
											<div id="AdvOptions" class="for-all for-one b-rooms b-inline" >
												
												<div name='basParams'>Полис с выбранным покрытием включает в себя:</div>
													<ul style='list-style-image: url(images/checkmark.png);'>
														<div id='basParamMed' style='margin-left:100px;'>
															<input id='inpBasParamMed' name='inpBasParamMed' style='display:none; margin-left:10px' type='checkbox' disabled checked />
															<li><label for='inpBasParamMed'><b>Медицинские расходы</b></label></li>
															<div id='divBasParamMed' >(Медицинские расходы, медицинская транспортировка, экстренная стоматология, посмертная репатриация, оплата срочных сообщений)</div>
														</div>
														<div id='basParamTrans' class='basParam' 
																<?foreach($_SESSION['CountriesArrays'] as $OneCountry)
																	{	if($_SESSION["CountryID"] == $OneCountry[0]){$Country=$OneCountry[2];}}
																	GetDisplay( $Country, $_SESSION["groupOfProgram"], 'basParamTrans','1' );?>
																	>
																
															<input id='inpBasParamTrans' name='inpBasParamTrans' style='display:none;margin-left:10px' disabled checked type='checkbox'/>
															<li><label for='inpBasParamTrans' ><b>Транспортные расходы</b></label></li>
															<div id='divBasParamTrans' >(Эвакуация детей, оставшихся без опеки, проживание и проезд сопровождающего, в случае долгой госпитализации, визит родственника, досрочное возвращение, юридическое сопровождение, помощь при утрате документов, задержка авиарейса)</div>
														</div>
														<div id='basParamBag' class='basParam'
																<?foreach($_SESSION['CountriesArrays'] as $OneCountry)
																	{	if($_SESSION["CountryID"] == $OneCountry[0]){$Country=$OneCountry[2];}}
																	GetDisplay( $Country, $_SESSION["groupOfProgram"], 'basParamBag', '1' );?>
																> 
															
															<input id='inpBasParamBag' name='inpBasParamBag' style='display:none;margin-left:10px' disabled checked type='checkbox'/>
															<li><label for='inpBasParamBag' ><b>Багаж</b></label></li>
															<div id='divBasParamBag'  >(Утрата багажа, покупка необходимых вещей при задержке багажа)</div>
														</div>
														<div id='basParamCivil' class='basParam' 
																<?foreach($_SESSION['CountriesArrays'] as $OneCountry)
																	{	if($_SESSION["CountryID"] == $OneCountry[0]){$Country=$OneCountry[2];}}
																	GetDisplay( $Country, $_SESSION["groupOfProgram"], 'basParamCivil','1' );?>
																	>
															<input id='inpBasParamCivil' name='inpBasParamCivil' style='display:none;margin-left:10px' disabled checked type='checkbox'/>
															<li><label for='inpBasParamCivil' ><b>Гражданская ответственность</b></label></li>
															<div id='divBasParamCivil' >(Расходы на оплату возмещения третьим лицам за причинение вреда их жизни, здоровью, имуществу)</div>
														</div>
													</ul>
												
												<div id='advParams' name='advParams'>Дополнительные опции:</div>
													<ul >
														<div id='advParamTrans' class='advParam'
																<?foreach($_SESSION['CountriesArrays'] as $OneCountry)
																	{	if($_SESSION["CountryID"] == $OneCountry[0]){$Country=$OneCountry[2];}}
																	GetDisplay( $Country, $_SESSION["groupOfProgram"], 'advParamTrans','1' );?>
																 >
																
															<div id = 'divInpAdvParamTrans' <?if ($_SESSION['divInpAdvParamTrans']) echo $_SESSION['divInpAdvParamTrans'];?> >
																<input type='checkbox' id='inpAdvParamTrans' name='inpAdvParamTrans' class='inpAdvParam' 
																					<? if($_SESSION["inpAdvParamTrans"]) {echo 'checked ';} 
																						foreach($_SESSION['CountriesArrays'] as $OneCountry)
																							{	if($_SESSION["CountryID"] == $OneCountry[0]){$Country=$OneCountry[2];}} 
																						GetDisplay( $Country, $_SESSION["groupOfProgram"], 'advParamTrans','0' ); ?> 	 onclick="clickParam(this)"/>
															</div>
															<li id='liAdvParamTrans' class='li-none'>
																<label id='lblAdvParamTrans' for='inpAdvParamTrans' ><b>Транспортные расходы</b></label>
																<div id='divAdvParamTrans' >(Эвакуация детей, оставшихся без опеки, проживание и проезд сопровождающего, в случае долгой госпитализации, визит родственника, досрочное возвращение, юридическое сопровождение, помощь при утрате документов, задержка авиарейса)</div>
															</li>
														</div>
													</ul>
													<ul>
														<div id='advParamCancel' class='advParam' 
																<?foreach($_SESSION['CountriesArrays'] as $OneCountry)
																	{	if($_SESSION["CountryID"] == $OneCountry[0]){$Country=$OneCountry[2];}}
																	GetDisplay( $Country, $_SESSION["groupOfProgram"], 'advParamCancel','1' );?>
																	>
																	
															<div id = 'divInpAdvParamCancel' <?if ($_SESSION['divInpAdvParamCancel']) echo $_SESSION['divInpAdvParamCancel'];?> >
																<input id='inpAdvParamCancel' name='inpAdvParamCancel' class='inpAdvParam' type='checkbox' <?if ($_SESSION['drawInpAdvParamCancel']) echo $_SESSION['drawInpAdvParamCancel'];?>  <?
                                                                                                                                         if($_SESSION["InsuredSum"] == 30000){echo 'checked';}
                                                                                                                                            else if ($_SESSION["InsuredSum"] == 50000){echo 'checked ';}
                                                                                                                                                else if ($_SESSION["InsuredSum"] == 100000){echo 'checked ';}
                                                                                                                                           else { echo ' ';}
                                                                                                                                        foreach($_SESSION['CountriesArrays'] as $OneCountry)
																	{	if($_SESSION["CountryID"] == $OneCountry[0]){$Country=$OneCountry[2];}} GetDisplay( $Country, $_SESSION["groupOfProgram"], 'advParamCancel','0' );?> style='margin-left:10px' onclick="clickParam(this)" />
															</div>
															<li class='li-none'>
																<label for='inpAdvParamCancel' ><b>Отмена поездки</b></label>
																<div id='divAdvParamCancel'  >(Возврат денег за путёвку при отмене поездки, без покрытия по риску «не выдача визы», возврат денег за не использованные дни, при вынужденном прерывании поездки)</div>
															</li>
														</div>
														<div id='advParamBag' class='advParam' 
																<?foreach($_SESSION['CountriesArrays'] as $OneCountry)
																	{	if($_SESSION["CountryID"] == $OneCountry[0]){$Country=$OneCountry[2];}}
																	GetDisplay( $Country, $_SESSION["groupOfProgram"], 'advParamBag' ,'1');?> 
																	>
															<div id = 'divInpAdvParamBag' <? if ($_SESSION['divInpAdvParamBag']) echo $_SESSION['divInpAdvParamBag'];?> >
																<input id='inpAdvParamBag' name="inpAdvParamBag" class='inpAdvParam' type='checkbox' value="bmw" <?if ($_SESSION['drawInpAdvParamBag']) echo $_SESSION['drawInpAdvParamBag'];?> 
                                                                                                                               <? if($_SESSION["InsuredSum"] == 30000){echo 'checked';}
                                                                                                                               else if ($_SESSION["InsuredSum"] == 50000){echo 'checked ';}
                                                                                                                                else if ($_SESSION["InsuredSum"] == 100000){echo 'checked ';}
                                                                                                                                else { echo ' ';}
                                                                                                                                    
                                                                                                                                    
                                                                                                                               
                                                                                                                               
                                                                                                                               foreach($_SESSION['CountriesArrays'] as $OneCountry)
																	{	if($_SESSION["CountryID"] == $OneCountry[0]){$Country=$OneCountry[2];}} GetDisplay( $Country, $_SESSION["groupOfProgram"], 'advParamBag' ,'0');?> style='margin-left:10px' onclick="clickParam(this)" />
															</div>
															<li class='li-none'>
																<label for='inpAdvParamBag' ><b>Багаж</b></label>
																<div id='divAdvParamBag'  >(Утрата багажа, покупка необходимых вещей при задержке багажа)</div>
															</li>
														</div>
														<div id='advParamCivil' class='advParam' 	
															<?foreach($_SESSION['CountriesArrays'] as $OneCountry)
																	{	if($_SESSION["CountryID"] == $OneCountry[0]){$Country=$OneCountry[2];}}
																	GetDisplay( $Country, $_SESSION["groupOfProgram"], 'advParamCivil','1' );?> 
																>
																	
															<input id='inpAdvParamCivil' name='inpAdvParamCivil' class='inpAdvParam' style='display:none;' type='checkbox' <? if($_SESSION["inpAdvParamCivil"]) {echo 'checked ';} foreach($_SESSION['CountriesArrays'] as $OneCountry)
																	{	if($_SESSION["CountryID"] == $OneCountry[0]){$Country=$OneCountry[2];}} GetDisplay( $Country, $_SESSION["groupOfProgram"], 'advParamCivil','0' );?> style='margin-left:10px' onclick="clickParam(this)" />
															<li class='li-none'>
																<label for='inpAdvParamCivil' ><b>Гражданская ответственность</b></label>
																<div id='divAdvParamCivil' >(Расходы на оплату возмещения третьим лицам за причинение вреда их жизни, здоровью, имуществу)</div>
															</li>
														</div>
													</ul>
													<br/>
													<input id='amSport' name='amSport' style='margin-left:80px' type='checkbox' <? if($_SESSION["amSport"]) {echo 'checked';} ?> onclick='isChange();' />
													<label for='amSport'><b>Любительский спорт</b></label>
											</div>
											
											<hr class="for-one for-all" style="border-top: 1px dashed rgb(204, 204, 204)"/>
											
											<div class="b-inline b-form-submit for-one for-all b-rooms" style='position:relative; height:33px'>
												<div id='messageAll' class='divError warning' style='<?if($Premium || $Errors || $_GET){echo 'display:none;';}?>' >Не все обязательные поля заполнены!</div>
												<div class="b-button b-button-search button-size-big button-style-marked"  >
													<!--<input type="submit" name="CalculatePolice" value="Рассчитать полис" title="Рассчитать полис" tabindex="4" >-->
													
													<input type="submit" id="CalculatePolice" name="CalculatePolice" value="Рассчитать полис"  title="Рассчитать полис" tabindex="4" >
												</div>
												
												<div id='CalculatorResult' class=" for-one for-all b-rooms" style="font-size:16px; " >
													<?if($Premium){?>
													Стоимость полиса: <b><span style="font-size:26px"><?=round($Premium,2)?></span>&nbsp;<?//=$currencyRaw 
                                                                                                            if('ЕВРО' == $currencyRaw){
                                                                                                                echo "EURO";
                                                                                                                }
                                                                                                            else if( 'ДОЛЛАР США' == $currencyRaw){
                                                                                                            echo "USD";
                                                                                                            }                                                                                                             
                                                                                                            else{
                                                                                                            echo "<p style='color:red'>Ошибка валюты. Обновите пожалуйста страницу.</br> В случае повторения обратитесь к администратору.</p>";
                                                                                                            }
                                                                                                 
                                                                                                            ?> = <span style="font-size:26px"><?=round($Premium_ru,2)?></span> руб. (курс ЦБ за <?=date("d.m.Y")?>)</b>
													<?}?>
													<?if ($Errors){?>
														<span class='warning'>Ошибка в Вирту! <?=$Errors?></span>
													<?}?>
												</div>
											</div>
											
											<hr class="for-one for-all" style="border-top: 1px dashed rgb(204, 204, 204)"/>
											
											<div id='issue-police' class="b-inline b-form-submit  b-rooms" style='position:relative; height:30px; width:100%; <?if (!isset($Premium)) echo 'display:none;'?>'>	
												<div class="b-inline b-form-submit for-one for-all b-rooms" style='height:35px'  >
													<div class="b-form-elem_label" style=" font-size:14px">
														Чтобы оформить полис вам осталось ввести данные страхователя и путешественников.
													</div>
													<div class="b-button b-button-search button-size-big button-style-marked"  >
														<!--<input type="submit" name="CalculatePolice" value="Рассчитать полис" title="Рассчитать полис" tabindex="4" >-->
														<input type="button" id="EnterDataTraveled" name="EnterDataTraveled" value="Оформить полис" title="Оформить полис" tabindex="4" onclick="clickEnterDataTraveled()" >
													</div>
												</div>
											</div>
										</form>
									</noindex>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>

<script>
	$(document).ready()
	{ 
		
		//стилями регулируем что отображать в зависимости от выбора типа полиса однократный/многократный
		if ($('#groupOfProgram1').attr('checked')=="checked")
			{
				$(".for-all").hide();
				$(".for-one").show();
			}

		if ($('#groupOfProgram2').attr('checked')=="checked")
			{
				$(".for-one").hide();
				$(".for-all").show();
			}
		
		//инициализация спиннеров с возрастом путешественников
		$( "#AgeBetween3, #AgeBetween9, #AgeBetween22, #AgeBetween49, #AgeBetween72, #AgeBetween77").spinner(
			{
				min: 0, 
				max: 5,
				stop: function( event, ui ) {
					var num = 	$("#AgeBetween3" ).spinner('value')+
								$('#AgeBetween9').spinner('value')+
								$('#AgeBetween22').spinner('value')+
								$('#AgeBetween49').spinner('value')+
								$('#AgeBetween72').spinner('value')+
								$('#AgeBetween77').spinner('value');
								
					if ( num < 6  )
						{
							$('#PeopleCount').val( num	);
							$('#count-error').css('color','black');
							$('#PeopleCount').css('color','black');
						}
					else {
							$('#count-error').css('color','red');
							$('#PeopleCount').val('');
						}
					isAllFill();
					isChange();
					if ( num == 0)  $('#PeopleCount').css('color','red');
					}
		  });
		
		//инициализация datepicker для дат
		$('#EffectiveDate,  #ExpirationDate').datepicker({ 	
				closeText: 'Закрыть',
				prevText: '<Пред',
				nextText: 'След>',
				currentText: 'Сегодня',
				monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
				monthNamesShort: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн',	'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'],
				dayNames: ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'],
				dayNamesShort: ['вск', 'пнд', 'втр', 'срд', 'чтв', 'птн', 'сбт'],
				dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
				weekHeader: 'Не',
				dateFormat: 'yy-mm-dd',
				firstDay: 1,
				isRTL: false,
				showMonthAfterYear: false,
				yearSuffix: '',
				minDate: 1,
				showOn: "button", 
				//dateFormat: "dd.mm.yy",
				buttonImage: "calendar1.png", //"/_layouts/images/calendar.gif",
				buttonText: "Выбрать дату",
				buttonImageOnly: true,
				showOtherMonths: true,
				selectOtherMonths: true,
				changeYear: false,
				changeMonth: false,
				onSelect: function() 
							{
								//преобразовать дату
								var endDate = new Date($('#ExpirationDate').val());//tempDate.substr()
								var begDate = new Date($('#EffectiveDate').val());//tempDate.substr()
								
								//проверку если конечная больше начальной
								if (endDate.getTime() < begDate.getTime())
								{
									$('#warning').show();
									$('#ExpirationDate').val('');
									$("#daysCount").text('');
								}
								else 
									{
									$('#warning').hide();
								
									//отображать количество дней действия полиса
									if ((begDate != 'Invalid Date')&&(endDate != 'Invalid Date'))
										{
										var nd = endDate.getTime()-begDate.getTime();
										nd = nd/(1000*60*60*24)+1;
										//$("#daysCount").text(nd+'дн.');
										
										var txt = declination('дней','день','дня', nd);
										$("#div-daysCount").text(nd+' '+txt);
										$("#daysCount").val(nd);
										}
									}
								isAllFill();
								isChange();
								//чтобы при открытии дейтпикера нельзя было выбрать дату раньше чем дата начала поездки +1 день (уточнить у Татьяны)
								if (begDate != 'Invalid Date')
								{
									//запретить даты раньше полученной +1 день
									begDate.setDate(begDate.getDate()+1);
									$("#ExpirationDate").datepicker( "option", "minDate", begDate );
								}
				}
		});
		
		
	
} //end document.ready
</script>


    <div class="b-page-footer">
		<div class="b-wrapper b-page-footer_inner">
		<!-- start custom footer here -->
			 <div class="b-two-columns b-columns-copyrights">
				<div class="b-column-sidebar"><span class="b-inline b-copyright_title">© 2013</span><span class="b-inline"><span class="b-line b-copyright_title">Банк Русский Стандарт</span>      
					<span class="b-line b-copyright_notes">Генеральная лицензия Банка России № 2289<br>выдана бессрочно 19 июля 2001 года</span></span>
				</div>    
				<div class="b-column-content">      
					  <span class="b-inline b-copyright_notes">        
					   <span class="b-line">Услуга по оформлению заказа и бронированию предоставляется ООО «Октого»<br>197342, Санкт-Петербург, набережная Черной речки, 41<br>  При возникновении вопросов по бронированию отелей воспользуйтесь разделом <a class="b-faq-link jFAQ" href="http://rsb.oktogo.ru/FAQ" target="_blank" rel="//rsb.oktogo.ru/FAQ">FAQ</a>,<br>
					 напишите нам на <a href="mailto:support@oktogo.ru">support@oktogo.ru</a> или позвоните по телефону +7 (495) 544-21-85</span>
					 </span>      
				</div>  
			</div>
		<!-- end custom footer here -->
		</div>
	</div>
    
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-10265495-16', 'oktogo.ru');
  ga('send', 'pageview');
</script>
<!-- Google Tag Manager -->
<noscript>&lt;iframe src="//www.googletagmanager.com/ns.html?id=GTM-NBJ9CK"
height="0" width="0" style="display:none;visibility:hidden"&gt;&lt;/iframe&gt;</noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NBJ9CK');</script>
<!-- End Google Tag Manager -->    <!-- Oktogo.0x00523422E8AB684FC8900D43C5F6C0F6-->

<div id="cluetip" style="position: absolute; display: none;"><div class="cluetip-outer" style="position: relative; z-index: 97;"><h3 class="cluetip-title ui-widget-header ui-cluetip-header"></h3><div class="cluetip-inner ui-widget-content ui-cluetip-content"></div></div><div class="cluetip-extra"></div></div><script type="text/javascript" id="">setTimeout(function(){var a=document.createElement("script"),b=document.getElementsByTagName("script")[0];a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0011/7750.js?"+Math.floor((new Date).getTime()/36E5);a.async=!0;a.type="text/javascript";b.parentNode.insertBefore(a,b)},1);</script></body></html>