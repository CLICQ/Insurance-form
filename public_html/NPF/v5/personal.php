<? 	header('Content-Type: text/html; charset=utf-8');
	session_start(); 
	include "constants.php"
      //  include "index.php"
	
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
		<script type="text/javascript" src="jquery.mask.min.js"></script>       
		<script type="text/javascript"  src="jquery.validate.min.js" ></script>
		<!-- ///////////////////////////// -->

		<!-- Орлова М. -->
		<link rel="stylesheet" type="text/css" href="styles.css"/>
		<script type="text/javascript" src="calculate.js"></script>
		<script type="text/javascript" src="personal.js"></script>
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
							<li class="b-breadcrumbs_item breadcrumbs-item-disabled"><a href='index.php?a=1'>Расчет</a></li>
							<li class="b-breadcrumbs_item breadcrumbs-item-current">Оформление</li>
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
										var cntrSearch;
										$(function() {
											ko.applyBindings(new OK.viewModels.HomeViewModel({
												destAutoComplUrl: '/api/LocationResolver'
											}));
										});
									</script>
									<noindex>
										<p class="b-page-title">Калькулятор</p>
										<form action="oplata.php" class="b-form b-form-search-main -visor-no-click" method="post" id="frmTraveler" name="frmTraveler"  style="z-index: 100;">
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
																<input class="b-form-elem_control b-elem-calendar js-checkIn" tabindex="1" type="text" title="Дата заезда" readonly=""><div class="pickadate__holder"><div class="pickadate__calendar--wrap"><div class="pickadate__calendar"><div class="pickadate__month--nav"><div class="pickadate__month--next" data-nav="1">→</div></div><div class="pickadate__month--wrap"><div class="pickadate__month">Июль</div></div><div class="pickadate__year--wrap"><div class="pickadate__year">2014</div></div><table class="pickadate__calendar--table"><thead><tr><th class="pickadate__weekday">Пн</th><th class="pickadate__weekday">Вт</th><th class="pickadate__weekday">Ср</th><th class="pickadate__weekday">Чт</th><th class="pickadate__weekday">Пт</th><th class="pickadate__weekday">Сб</th><th class="pickadate__weekday">Вс</th></tr></thead><tbody class="pickadate__calendar--body"><tr><td><div class="pickadate__day pickadate__day--outfocus pickadate__day--disabled" data-disabled="2014/5/30">30</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled" data-disabled="2014/6/1">1</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled" data-disabled="2014/6/2">2</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled" data-disabled="2014/6/3">3</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--today" data-date="2014/6/4">4</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--highlighted pickadate__day--selected" data-date="2014/6/5">5</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/6">6</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/7">7</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/8">8</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/9">9</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/10">10</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/11">11</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/12">12</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/13">13</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/14">14</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/15">15</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/16">16</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/17">17</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/18">18</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/19">19</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/20">20</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/21">21</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/22">22</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/23">23</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/24">24</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/25">25</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/26">26</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/27">27</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/28">28</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/29">29</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/30">30</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/31">31</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/1">1</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/2">2</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/3">3</div></td></tr><tr><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/4">4</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/5">5</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/6">6</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/7">7</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/8">8</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/9">9</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/10">10</div></td></tr></tbody></table></div></div></div><input type="hidden" name="_submit" value="2014/07/05">
															</div>
														</div>
														<div class="b-inline b-form-elem elem-size-big elem-style-marked">
															<label class="b-form-elem_label" for="CheckOut">Выезд</label>
															<div class="b-form-elem_wrapper">
																<input class="b-form-elem_control b-elem-calendar js-checkOut" tabindex="1" type="text" title="Дата выезда" readonly=""><div class="pickadate__holder"><div class="pickadate__calendar--wrap"><div class="pickadate__calendar"><div class="pickadate__month--nav"><div class="pickadate__month--next" data-nav="1">→</div></div><div class="pickadate__month--wrap"><div class="pickadate__month">Июль</div></div><div class="pickadate__year--wrap"><div class="pickadate__year">2014</div></div><table class="pickadate__calendar--table"><thead><tr><th class="pickadate__weekday">Пн</th><th class="pickadate__weekday">Вт</th><th class="pickadate__weekday">Ср</th><th class="pickadate__weekday">Чт</th><th class="pickadate__weekday">Пт</th><th class="pickadate__weekday">Сб</th><th class="pickadate__weekday">Вс</th></tr></thead><tbody class="pickadate__calendar--body"><tr><td><div class="pickadate__day pickadate__day--outfocus pickadate__day--disabled" data-disabled="2014/5/30">30</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled" data-disabled="2014/6/1">1</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled" data-disabled="2014/6/2">2</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled" data-disabled="2014/6/3">3</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled pickadate__day--today" data-disabled="2014/6/4">4</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled" data-disabled="2014/6/5">5</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--highlighted pickadate__day--selected" data-date="2014/6/6">6</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/7">7</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/8">8</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/9">9</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/10">10</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/11">11</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/12">12</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/13">13</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/14">14</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/15">15</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/16">16</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/17">17</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/18">18</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/19">19</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/20">20</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/21">21</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/22">22</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/23">23</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/24">24</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/25">25</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/26">26</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/27">27</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/28">28</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/29">29</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/30">30</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/31">31</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/1">1</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/2">2</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/3">3</div></td></tr><tr><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/4">4</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/5">5</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/6">6</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/7">7</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/8">8</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/9">9</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/10">10</div></td></tr></tbody></table></div></div></div><input type="hidden" name="_submit" value="2014/07/06">
															</div>
														</div>
													</div>
												</div>
											</div>  

											<div class="b-inline b-form-elem elem-size-big elem-style-marked b-destination">
												<label class="b-form-elem_label"  for="dest">Данные страхователя</label>
												
												<div class="b-form-elem_wrapper">
													<div class="b-inline " style="vertical-align:bottom;width:250px">
														<label for='RSurname' class="b-form-elem_label" style="font-weight:normal;">Фамилия покупателя</label>
													</div>
													<input type='text' id='RSurname' name='RSurname' class="ru-name RName b-form-elem_control  js-checkOut" title='Данные вводятся кириллицей' tabindex=1/>
													<span id='RSurnameMsg' class='warning'></span>
												</div>
											</div>
											<div class="b-inline b-rooms b-form-elem elem-size-big elem-style-marked b-destination">
												<div class="b-form-elem_wrapper">
													<div class="b-inline " style="vertical-align:bottom; width:250px">
														<label for='RName' class="b-form-elem_label" style="font-weight:normal;">Имя покупателя</label>
													</div>
													<input type='text' id='RName' name='RName' class="ru-name RName b-form-elem_control  js-checkOut" title='Данные вводятся кириллицей'tabindex=2/>
													<span id='RNameMsg' class='warning'></span>
												</div>
											</div>
											<div class="b-inline b-rooms b-form-elem elem-size-big elem-style-marked b-destination">
												<div class="b-form-elem_wrapper">
													<div class="b-inline " style="vertical-align:bottom; width:250px">
														<label for="RLastname" class="b-form-elem_label" style="font-weight:normal;">Отчество покупателя</label>
													</div>
													<input type='text' id="RLastname" name="RLastname" class="ru-name RName b-form-elem_control  js-checkOut" title='Данные вводятся кириллицей' tabindex=3/>
													<span id='RLastnameMsg' class='warning'></span>
												</div>
											</div>
											<div class="b-inline b-rooms b-form-elem elem-size-big elem-style-marked b-destination">
												<div class="b-form-elem_wrapper">
													<div class="b-inline " style="vertical-align:bottom; width:250px">
														<label for='RBithDay' class="b-form-elem_label" style="font-weight:normal;">Дата рождения покупателя</label>
													</div>
													<input type='text' id='RBithDay' name='RBithDay' class="date RBithDay b-form-elem_control  js-checkOut" onblur='javascript:isValidDate("RBithDay");'tabindex=4/>
													<span id='RBithDayMsg' class="warning"></span>
												</div>
											</div>
											<div class="b-inline b-rooms b-form-elem elem-size-big elem-style-marked b-destination">
												<div class="b-form-elem_wrapper">
													<div class="b-inline " style="vertical-align:bottom; width:250px">
														<label for ='email' class="b-form-elem_label" style="font-weight:normal;">Электронная почта покупателя</label>
													</div>
													<input type='text' id='email' name='email' class="email b-form-elem_control  js-checkOut"tabindex=5/>
													<span id='emailMsg' class='warning'></span>
												</div>
											</div>
											<div class="b-inline b-rooms b-form-elem elem-size-big elem-style-marked b-destination">
												<div class="b-form-elem_wrapper">
													<div class="b-inline " style="vertical-align:bottom; width:250px">
														<label class="b-form-elem_label" style="font-weight:normal;">Мобильный телефон покупателя</label>
													</div>
													
													<input type='text' id='phone' name='phone' class="phone b-form-elem_control  js-checkOut" title='+7 9ХХ ХХХ ХХ ХХ' tabindex=6/>
													<span id='phoneMsg' class='warning'></span>
												</div>
												
											</div><br/>
											<hr  style="border-top: 1px dashed rgb(204, 204, 204)"/>
											<input id='isTraveler' type='checkbox' /> страхователь является одним из путешественников
											<hr  style="border-top: 1px dashed rgb(204, 204, 204)"/>
											
											<div class="b-inline b-form-elem elem-size-big elem-style-marked b-destination b-rooms">
												<label class="b-form-elem_label"  for="dest" title='Данные вводятся латиницей, как в загранпаспорте'>Данные путешественников <span style="font-size:14px"></span></label>
											
												
												<div class="b-inline b-rooms ">
												<?$ind = 7;?>
													<table style="width:100%" >
														<tr>
															<th>Фамилия</th>
															<th>Имя</th>
															<th>Дата рождения</th>
															<th>Гражданство</th>
															<th style="width:150px;">Страна гражданства</th>
														</tr>
														<?  for ( $i = 0; $i < $_SESSION['PeopleCount'] ; $i++){ ?>
															<tr>
																<td>
																	
																	<input type="text" id='Surname<?echo $i?>' name='Surname<?echo $i?>' class="en-name b-form-elem_control  js-checkOut" title='Данные вводятся латиницей, как в загранпаспорте' tabindex=<?echo $ind; $ind++;?>/>
																	<div id='Surname<?echo $i?>Msg' class='warning'></div>
																</td>
																<td>
																	<input type="text" id='Name<?echo $i?>' name='Name<?echo $i?>' class="en-name b-form-elem_control  js-checkOut" title='Данные вводятся латиницей, как в загранпаспорте' tabindex=<?echo $ind; $ind++;?>/>
																	<div id='Name<?echo $i?>Msg' class='warning'></div>
																</td>
																<td >
																	<input type="text"  id='BithDay<?echo $i?>' name='BithDay<?echo $i?>'  style="width:100px;" class="date b-form-elem_control  js-checkOut" onblur = 'isValidDate("BithDay<?echo $i?>")' tabindex=<?echo $ind; $ind++;?> />
																	<div id='BithDay<?echo $i?>Msg' class='warning'></div>
																</td>
																<td>
																	<input type="checkbox" checked id='isRF<?echo $i?>' name='isRF<?echo $i?>' onclick='clickRF(<?echo $i?>)' tabindex=<?echo $ind; $ind++;?>/>РФ
																</td>
																<td>
																	<input type="text" id='inputCountry<?echo $i?>' name='inputCountry<?echo $i?>' style="width:120px;display:none" tabindex=<?echo $ind; $ind++;?>/>
																</td>
															</tr>
															<?}?>
													</table>
												</div>
											</div>
											
											<hr  style="border-top: 1px dashed rgb(204, 204, 204)"/>
											
											<div class="b-inline b-rooms b-form-elem elem-size-big elem-style-marked b-destination">
												<div class="b-form-elem_wrapper">
													<div class="b-inline " style="vertical-align:bottom; width:250px">
														<input id='agree' type="checkbox" style="vertical-align:middle" onclick='isTravelerFill();'/>
														<span style="vertical-align:middle">Я согласен с <a href="Oferta.pdf" target="_blank">правилами страхования</a></span>
													</div> <!--onclick='$("#dialog").dialog({modal:true, width:900, height:900 });'-->
												</div>
											</div>
											
											<hr  style="border-top: 1px dashed rgb(204, 204, 204)"/>
											
										
											
											<hr class="for-one for-all" style="border-top: 1px dashed rgb(204, 204, 204)"/>
											
											<div id='divSavePolice' class="b-inline b-form-submit  b-rooms" style='position:relative; height:30px; width:100%;display:none;'>	
													<div class="b-button b-button-search button-size-big button-style-marked"  >
														<input type="submit" id="SavePolice" name="SavePolice" value="Сохранить полис" title="Сохранить полис" tabindex="4"  />
													</div>
											</div>
											
											<div class="b-inline b-form-submit  b-rooms" style='position:relative; height:33px;  width:100%; '>
												<div class="CalculatorResult  b-rooms" style="font-size:16px; position:absolute; left:0; top:0; " >
														<?if($_SESSION['Premium']){?>
														
														Стоимость полиса: <b><span style="font-size:26px"><?=round($_SESSION['Premium'],2)?></span>&nbsp;<? echo $_SESSION['currencyRaw']
                                                                                                                
                                                                                                                    ?> = <span style="font-size:26px"><?=round($_SESSION['Premium_ru'],2)?></span> руб. (курс ЦБ за <?=date("d.m.Y")?>)</b>
														<?}?>
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


<script type="text/javascript">
	

	
	
	$(document).ready()
	{ 
	
		$('.date').mask('00.00.0000', {placeholder: "__.__.____"});
		//$('.RName').mask('aaaaaaaaaaaaaaa', {placeholder: "Заполняется кириллицей"});
		$('.phone').mask('+7 900 000 00 00', {placeholder: "+7 9__ ___ __ __"});
		
		$("#frmTraveler").validate({

			   rules:{
						RSurname:{
						required: true
						},
							
					//RLastname
					RBithDay:{
						required: true,
						date: true
						}
					},
				
			  
		});
		
		$('#email').blur(function() {
		var str = $(this).attr('name');
        if($(this).val() != '') {
            var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
            if(pattern.test($(this).val())){
                $(this).css({'border' : '1px solid #569b44'});
                $('#'+str+'Msg').text('');
				$('#'+str).attr('isValid',true);
            } else {
                $(this).css({'border' : '1px solid #ff0000'});
                $('#'+str+'Msg').text('Не верно введен e-mail!');
				$('#'+str).attr('isValid',false);
            }
        } else {
            $(this).css({'border' : '1px solid #ff0000'});
            $('#'+str+'Msg').text('Поле e-mail не должно быть пустым');
			$('#'+str).attr('isValid',false);
        }
		
		isTravelerFill();
		});
		
	/*	$('#RBithDay').blur(function() {
        if($(this).val() != '') {
            var pattern = /([0-2]\d|3[01])\.(0\d|1[012])\.(\d{4})/;///^(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4};///^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d;///^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
            if(pattern.test($(this).val())){
                $(this).css({'border' : '1px solid #569b44'});
               // $('#valid').html('<img src="images/checkmark.png"/>');
            } else {
                $(this).css({'border' : '1px solid #ff0000'});
               // $('#valid').html('Не верно введен e-mail!');
            }
        } else {
            $(this).css({'border' : '1px solid #ff0000'});
            //$('#valid').html('Поле e-mail не должно быть пустым');
        }
    });		
	*/
	$('.ru-name').blur(function() {
		var str = $(this).attr('name');
        if($(this).val() != '') {
            var pattern = /^[А-ЯЁ]{1}[а-яё]+$/i;///[А-Яа-я]/;///^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
            if(pattern.test($(this).val())){
                $(this).css({'border' : '1px solid #569b44'});
				$('#'+str+'Msg').text('');
				$('#'+str).attr('isValid',true);
            } else {
                $(this).css({'border' : '1px solid #ff0000'});
				$('#'+str+'Msg').text('Данное поле должно быть заполнено кириллицей!');
				$('#'+str).attr('isValid',false);
            }
        } else {
            $(this).css({'border' : '1px solid #ff0000'});
			$('#'+str+'Msg').text('Данное поле не может быть пустым!');
			$('#'+str).attr('isValid',false);
        }
		isTravelerFill();
    });	
	$('.en-name').blur(function() {
       var str = $(this).attr('name');
	   if($(this).val() != '') {
            var pattern = /^[A-Z]{1}[a-z']+$/i;///[А-Яа-я]/;///^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
            if(pattern.test($(this).val())){
                 $(this).css({'border' : '1px solid #569b44'});
				$('#'+str+'Msg').text('');
				$('#'+str).attr('isValid',true);
            } else {
                $(this).css({'border' : '1px solid #ff0000'});
				$('#'+str+'Msg').text('Данные вводятся латиницей!');
				$('#'+str).attr('isValid',false);
            }
        } else {
            $(this).css({'border' : '1px solid #ff0000'});
			$('#'+str+'Msg').text('Данное поле не может быть пустым!');
			$('#'+str).attr('isValid',false);
        }
		isTravelerFill();
    });	
	
	$('#phone').blur(function() {
        if($(this).val() != '') {
            var str = $(this).attr('name');
			var pattern = /\+7\s9\d{2}\s\d{3}\s\d{2}\s\d{2}/;///^[\+]\7\9d{2}[\ ]\d{3}[\ ]\d{2}[\ ]\d{2};///^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
            if(pattern.test($(this).val())){
                 $(this).css({'border' : '1px solid #569b44'});
				$('#'+str+'Msg').text('');
				$('#'+str).attr('isValid',true);
            } else {
                $(this).css({'border' : '1px solid #ff0000'});
				$('#'+str+'Msg').text('Не верно введен номер телефона!');
				$('#'+str).attr('isValid',false);
            }
        } else {
            $(this).css({'border' : '1px solid #ff0000'});
			$('#'+str+'Msg').text('Данное поле не может быть пустым!');
			$('#'+str).attr('isValid',false);
        }
		isTravelerFill();
    });	
	
	} //end document.ready



            // RSurname:{
                // required: "Это поле обязательно для заполнения",
                // minlength: "Пароль должен быть минимум 6 символа",
                // maxlength: "Пароль должен быть максимум 16 символов"
            // }

			// }

		// });
//alert();

/*required — поле обязательное для заполнения (true или false)
remote — указывается файл для проверки поля (например: check.php)
email — проверяет корректность e-mail адреса (true или false)
url — проверяет корректность url адреса (true или false)
date — проверка корректности даты (true или false)
dateISO — проверка корректности даты ISO (true или false)
number — проверка на число (true или false)
digits — только цифры (true или false)
creditcard — корректность номера кредитной карты (true или false)
equalTo — равное чему-то (например другому полю equalTo:»#pswd»)
accept — проверка на правильное расширение (accept: «xls|csv»)
maxlength — максимальное кол-во символов (число)
minlength — минимальное кол-во символов (число)
rangelength — кол-во символов от скольки и до скольки (rangelength: [2, 6])
range — число должно быть в диапазоне от и до (range: [13, 23])
max — максимальное значение числа (22)
min — минимальное значение числа (11)*/
		
	/*	$('#EffectiveDate,  #ExpirationDate').datepicker({ 	
				
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
				minDate: 0,
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
								//alert('Дата окончания должна быть больше даты начала');
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
							
								
				}
	});
	*/
	/*if ($("#div-daysCount").text() != '')
									{
									var txt = declination('дней','день','дня', $("#div-daysCount").text());
									$("#div-daysCount").text($("#div-daysCount").text()+txt);
									}
	*/


	
	/*$('#AgeBetween3').spinner.change(function() {
		alert();
		//$('#PeopleCount').val( $('#AgeBetween3').spinner('value'));
		});
*/

	
	

 

	
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
    
   <!--
   <script src="./Бронирование отелей со скидками только для держателей карт Банка Русский Стандарт_files/jqueryPack"></script>
   <script src="./Бронирование отелей со скидками только для держателей карт Банка Русский Стандарт_files/searchFormPack"></script>
-->
<script>

		function js_in_array(value, array) 
			{
				for(var i = 0; i < array.length; i++) 
				{
					if(array[i] == value) return true;
				}
				return false;
			}
			
	
		
		

</script>
    
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