<? 	header('Content-Type: text/html; charset=utf-8');
	session_start(); ?>

<!DOCTYPE html>
<html><head>
        <title>Калькулятор</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link href="index_files/stylesNew.css" rel="stylesheet">

        <!--[if IE]><link href="/content/css/stylesnew/ie.css" type="text/css" rel="stylesheet" /><![endif]-->
        <!--[if lte IE 7]><link href="/content/css/stylesnew/ie7.css" type="text/css" rel="stylesheet" /><![endif]-->
        <!--[if IE 8]><link href="/content/css/stylesnew/ie8.css" type="text/css" rel="stylesheet" /><![endif]-->
    
        
        <script type="text/javascript" async="" src="index_files/7750.js"></script>
		<script src="index_files/gtm.js" async=""></script>
		<script src="index_files/analytics.js" async=""></script>
		<script src="index_files/dc.js" async="" type="text/javascript"></script>
		<script type="text/javascript" src="index_files/jquery-1.js"></script>
		
		
<link rel="stylesheet" type="text/css" href="index_files/master.css">
<script src="index_files/WLPriceFilterSettings.js" type="text/javascript"></script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<script src="/resources/demos/external/jquery-mousewheel/jquery.mousewheel.js"></script>
<!--<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/cupertino/jquery-ui.css">-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="styles.css"/>
 <script type="text/javascript" src="jquery.mask.min.js"></script>       
<script type="text/javascript"  src="jquery.validate.min.js" ></script>
<!--<link rel="stylesheet" type="text/css" href="./Бронирование отелей со скидками только для держателей карт Банка Русский Стандарт_files/master.css">
<script src="./Бронирование отелей со скидками только для держателей карт Банка Русский Стандарт_files/WLPriceFilterSettings.js" type="text/javascript"></script>
-->
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
	


<?
//заполнить сессионные переменные значениями из

//изменить
//$_SESSION['GridInsuredPerson']
//$Bithday = GetBirthday($_POST["AgeBetween"]);
		//$ArrPeopleAge = array('3','9','22','49','72','77');
if(isset($_POST["SavePolice"]))
	{		
		$i = 0;
		$n = (int)$_SESSION['PeopleCount'];
		//цикл перебора всех возрастов
		while ( $i < $n)
		{
			if ($_POST['isRF'.$i])
				{
				$isRF = 'РФ';
				$Citizen = $_POST['inputCountry'.$i];
				//echo $Citizen;
				}
			//$Bithday = GetBirthday($value);
			$k = $i+1;
			$GridInsuredPerson .= '{"PersonID": '.$k.',"Bithday": "'.$_POST['BithDay'.$i].'","Surname": "'.$_POST['Surname'.$i].'","Name": "'.$_POST['Name'.$i].'","National": "'.$isRF.'","CountryNational": "'.$Citizen.'"},';
			$i++;
		}
$GridInsuredPerson = substr($GridInsuredPerson, 0, strlen($GridInsuredPerson)-1);

		$data_string_res = '{"Policy":{
			"AcceptationDate": "2014-07-10",
			"AddInsSum": 3000,
			"AmountCurrencyCode": "",
			"AmountCurrencyName": "",
			"amSport": '.$_SESSION['amSport'].',
			"BreakTravel": false,
			"CancelTravel": '.$_SESSION['CancelTravel'].',
			"CoursesOfCurrency": [],
			"CreatorName": "ТревелРСБ",
			"CreatorUser": "Travel_SRB",
			"currency": "'.$_SESSION['currency'].'",
			"currencyRaw": "'.$_SESSION['currencyRaw'].'",
			"daysCount": '.$_SESSION['daysCount'].',
			"daysCountByStore": "'.$_SESSION['daysCountByStore'].'",
			"daysCountByStoreRaw": "",
			"DocumentDate": "2014-07-10",
			"DocumentStatusID": "0C9468DD-F53C-4962-8B0B-93BF28ABA6A9",
			"EffectiveDate": "'.$_SESSION['EffectiveDate'].'",
			"email": "'.$_POST['email'].'",
			"ExpirationDate": "'.$_SESSION['ExpirationDate'].'",
			"FilialName": null,
			"GridInsuredPerson": ['.$GridInsuredPerson.'],
			"groupOfProgram": "'.$_SESSION['groupOfProgram'].'",
			"groupOfProgramRaw": "'.$_SESSION['groupOfProgramRaw'].'",
			"ID": "813F05F2-17FB-4FA2-9BDA-17446421A5EF",
			"InsRiskPrem": "",
			"insuranceProgram": "",
			"insuranceProgramRaw": "",
			"insuranceTerritory": "'.$_SESSION['insuranceTerritory'].'",
			"insuranceTerritoryRaw": "'.$_SESSION['insuranceTerritoryRaw'].'",
			"InsuredName": "'.$_POST['RSurname'].' '.$_POST['RName'].' '.$_POST['RLastname'].'",
			"InsuredSum": "'.$_SESSION['InsuredSum'].'",
			"InsurerRepresentId": "eb15575b-2deb-4c14-a043-2264a35ea1ae",
			"InsurerRepresentName": "ТревелРСБ",
			"isOtherCountry": '.$_SESSION['isOtherCountry'].',
			"isShengen": '.$_SESSION['isShengen'].',
			"NUMBAR": "100000208",
			"NUMBER": "100000208",
			"otherCountry": ["'.$_SESSION['otherCountry'].'"],
			"otherCountryRaw": "'.$_SESSION['otherCountryRaw'].'",
			"phone": "'.$_POST['phone'].'",
			"Premium": "",
			"ProductID": "C73D3867-9A5C-484A-8A6B-BF3E2DB4DD99",
			"ProductName": "ВЗР (Русский стандарт)",
			"RBithDay": "'.$_POST['RBithDay'].'",
			"RdaysCount": 0,
			"RdaysCountByStore": 0,
			"REffectiveDate": "",
			"ResInsPrem": "0",
			"RExpirationDate": "",
			"RGroupPr": "E3B922F1-9A2D-4397-9E34-21D14F946258",
			"RGroupPrRaw": "",
			"RInsuranceTerritory": "",
			"RInsuranceTerritoryRaw": "",
			"RLastname": "'.$_POST['RLastname'].'",
			"RName": "'.$_POST['RName'].'",
			"ROtherCountry": "",
			"ROtherCountryRaw": "",
			"RShengenCountry": "",
			"RSurname": "'.$_POST['RSurname'].'",
			"Rtest": "",
			"SallerDivision": "TravelRSB",
			"SallerDivisionID": "bc942cb0-7c25-4c64-ae8b-8211f3be6fcf",
			"SERIAL": "TRS",
			"shengenCountry":["'.$_SESSION['shengenCountry'].'"],
			"shengenCountryRaw": "'.$_SESSION['shengenCountryRaw'].'",
			"StatusID": "0C9468DD-F53C-4962-8B0B-93BF28ABA6A9",
			"StatusName": "Действующий",
			"StringPremium": "126.00 USD/4293.55 RUR",
			"SubProgInsur": "'.$_SESSION['SubProgInsur'].'",
			"SubProgInsurRaw": "'.$_SESSION['SubProgInsurRaw'].'",
			"SumInsuredCurrencyCode": "",
			"TelAssist": "+7 (495) 989-11-20",
			"url": "http://vfos.virtusystems.ru/Companies/RusSt/VZR_new_version/default.aspx?ProductID=C73D3867-9A5C-484A-8A6B-BF3E2DB4DD99&PolicyID=813F05F2-17FB-4FA2-9BDA-17446421A5EF"
		}}';

		//....................................................................................................................................................................................
		//изменить с параметрами сохранения полиса
		// $ch = curl_init(VIRTU_URL.'/RUSSTANDARTVZRFeature/RUSSTANDARTVZRCalculate.cmd?id=33e188ed-df03-2f13-91ca-e0a39f61f4ee');                                                                      
		// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
		// curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string_res); 	
		// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		// curl_setopt($ch, CURLOPT_HEADER, 1);	
		// curl_setopt($ch, CURLOPT_HTTPHEADER, array( 
			// 'Accept:*/*',
			// //'Accept-Encoding:gzip,deflate,sdch',
			// 'Accept-Language:ru-RU,ru;q=0.8,en-US;q=0.6,en;q=0.4',
			// 'Cache-Control:no-cache, no-store, must-revalidate',
			// 'Connection:keep-alive',
			// 'Content-Length: ' . strlen($data_string_res),
			// 'Content-Type:application/json; charset=UTF-8',
			// 'Cookie:ASP.NET_SessionId=5q11gg45q0xgli45jhxbko45; .VFOS='.$AuthVfos,
			// 'Host:vfos.virtusystems.ru',
			// 'Origin:'.VIRTU_URL,
			// 'Pragma:no-cache',
			// 'Referer:'.VIRTU_URL.'/Companies/RusSt/VZR_new_version/default.aspx?ProductID=c73d3867-9a5c-484a-8a6b-bf3e2db4dd99&PolicyID=&doc=d952f3ec-2388-45dc-a2ee-aab46a3faeb0',
			// 'User-Agent:Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.146 Safari/537.36'
			// )                                                                       
		// );
		// $result3 = curl_exec($ch);
		// //echo "<h2>Отправленый объект полиса</h2>";
		// //echo "<div style='font-size:13px'>".$data_string_res."</div>";
		// //echo "<h2>Возвращенный объект полиса</h2>";
		// //echo "<div style='font-size:13px'>".$result3."</div><hr/>";
	
		// preg_match('/"Premium"\s*:\s*([^,]+)/mi', $result3, $m);
		// $Premium = $m[1];
		// $Premium = str_replace('"', '', $Premium);
		
		var_dump($data_string_res);
		
	}
?>

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
							<li class="b-breadcrumbs_item breadcrumbs-item-disabled"><a href='index.php'>Расчет</a></li>
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
										<form action="" class="b-form b-form-search-main -visor-no-click" method="post" id="frmTraveler" name="frmTraveler"  style="z-index: 100;">
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
													<input type='text' id='RSurname' name='RSurname' class="RName b-form-elem_control  js-checkOut" title='Данные вводятся кириллицей'/>
												</div>
											</div>
											<div class="b-inline b-rooms b-form-elem elem-size-big elem-style-marked b-destination">
												<div class="b-form-elem_wrapper">
													<div class="b-inline " style="vertical-align:bottom; width:250px">
														<label for='RName' class="b-form-elem_label" style="font-weight:normal;">Имя покупателя</label>
													</div>
													<input type='text' id='RName' name='RName' class="RName b-form-elem_control  js-checkOut" title='Данные вводятся кириллицей'/>
												</div>
											</div>
											<div class="b-inline b-rooms b-form-elem elem-size-big elem-style-marked b-destination">
												<div class="b-form-elem_wrapper">
													<div class="b-inline " style="vertical-align:bottom; width:250px">
														<label for="RLastname" class="b-form-elem_label" style="font-weight:normal;">Отчество покупателя</label>
													</div>
													<input type='text' id="RLastname" name="RLastname" class="RName b-form-elem_control  js-checkOut" title='Данные вводятся кириллицей' />
												</div>
											</div>
											<div class="b-inline b-rooms b-form-elem elem-size-big elem-style-marked b-destination">
												<div class="b-form-elem_wrapper">
													<div class="b-inline " style="vertical-align:bottom; width:250px">
														<label for='RBithDay' class="b-form-elem_label" style="font-weight:normal;">Дата рождения покупателя</label>
													</div>
													
													<input type='text' id='RBithDay' name='RBithDay' class="date RBithDay b-form-elem_control  js-checkOut" onblur='javascript:isAdult();'/>
													<span id='adultMsg' style="display:none; color:red;">Страхователем может быть только совершеннолетний!</span>
												</div>
											</div>
											<div class="b-inline b-rooms b-form-elem elem-size-big elem-style-marked b-destination">
												<div class="b-form-elem_wrapper">
													<div class="b-inline " style="vertical-align:bottom; width:250px">
														<label for ='email' class="b-form-elem_label" style="font-weight:normal;">Электронная почта покупателя</label>
													</div>
													<input type='text' id='email' name='email' class="email b-form-elem_control  js-checkOut"/>
												</div>
											</div>
											<div class="b-inline b-rooms b-form-elem elem-size-big elem-style-marked b-destination">
												<div class="b-form-elem_wrapper">
													<div class="b-inline " style="vertical-align:bottom; width:250px">
														<label class="b-form-elem_label" style="font-weight:normal;">Мобильный телефон покупателя</label>
													</div>
													
													<input type='text' id='phone' name='phone' class="phone b-form-elem_control  js-checkOut" title='+7 9ХХ ХХХ ХХ ХХ'/>
													
												</div>
												
											</div><br/>
											<hr  style="border-top: 1px dashed rgb(204, 204, 204)"/>
											<input id='isTraveler' type='checkbox'/> страхователь является одним из путешественников
											<hr  style="border-top: 1px dashed rgb(204, 204, 204)"/>
											
											<div class="b-inline b-form-elem elem-size-big elem-style-marked b-destination b-rooms">
												<label class="b-form-elem_label"  for="dest" title='Данные вводятся латиницей, как в загранпаспорте'>Данные путешественников <span style="font-size:14px"></span></label>
											
												
												<div class="b-inline b-rooms ">
												
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
																	
																	<input type="text" id='Surname<?echo $i?>' name='Surname<?echo $i?>' class="b-form-elem_control  js-checkOut" title='Данные вводятся латиницей, как в загранпаспорте'/>
																	
																</td>
																<td>
																	<input type="text" id='Name<?echo $i?>' name='Name<?echo $i?>' class="b-form-elem_control  js-checkOut" title='Данные вводятся латиницей, как в загранпаспорте'/>
																</td>
																<td >
																	<input type="text"  id='BithDay<?echo $i?>' name='BithDay<?echo $i?>'  style="width:100px;" class="date b-form-elem_control  js-checkOut" onblur = 'is80year("BithDay<?echo $i?>")' />
																	<div id='is80year<?echo $i?>' style='color:red; display:none;'>Полисы для граждан в возрасте старше 80 лет оформляются только в офисе страховой компании!</div>
																</td>
																<td>
																	<input type="checkbox" checked id='isRF<?echo $i?>' name='isRF<?echo $i?>' onclick='clickRF(<?echo $i?>)'/>РФ
																</td>
																<td>
																	<input type="text" id='inputCountry<?echo $i?>' name='inputCountry<?echo $i?>' style="width:120px;display:none"/>
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
														<input type="checkbox" style="vertical-align:middle"/>
														<span style="vertical-align:middle">Я согласен с <a href="Oferta.pdf" target="_blank">правилами страхования</a></span>
													</div> <!--onclick='$("#dialog").dialog({modal:true, width:900, height:900 });'-->
												</div>
											</div>
											
											<hr  style="border-top: 1px dashed rgb(204, 204, 204)"/>
											
										
											
											<hr class="for-one for-all" style="border-top: 1px dashed rgb(204, 204, 204)"/>
											
											<div class="b-inline b-form-submit  b-rooms" style='position:relative; height:30px; width:100%'>	
													<div class="b-button b-button-search button-size-big button-style-marked"  >
														<input type="submit" name="SavePolice" value="Сохранить полис" title="Оформить полис" tabindex="4" />
													</div>
											</div>
											
											<div class="b-inline b-form-submit  b-rooms" style='position:relative; height:33px;  width:100%; <?if (!isset($POST_['RName'])) echo 'display:none;'?> '>
												<div class="CalculatorResult  b-rooms" style="font-size:16px; position:absolute; left:0; top:0; width:200px " >
														<?if($Premium){?>
														Стоимость полиса: <b><span style="font-size:30px"><?=$Premium?></span>&nbsp;<?=$currencyRaw?></b>
														<?}?>
												</div>
												<div class="b-button b-button-search button-size-big button-style-marked"  >
													<input type="button" name="CalculatePolice" value="Перейти на платежную систему" title="Оформить полис" tabindex="4" />
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
	
		//функция склонения
	function declination(a, b, c, s) { 
 
		var words = [a, b, c]; 
		var index = s % 100; 
		 
		if (index >=11 && index <= 14) { index = 0; } 
		else { index = (index %= 10) < 5 ? (index > 2 ? 2 : index): 0; } 
		 
		return(words[index]); 
 
	}
		
	function isAdult()
	{
		//var ind = value.substr(7);
		var txt = $('#RBithDay').val().replace(/(\d+).(\d+).(\d+)/, '$2/$1/$3');
		
		var newvalue = new Date( txt );
		var today = new Date();
		var todayYear = today.getFullYear();
		var valueYear = newvalue.getFullYear();
		
		if ( (todayYear - valueYear) < 18 ) $('#adultMsg').show();
				else $('#adultMsg').hide();
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
	
	$(document).ready()
	{ 
	
		$('.date').mask('00.00.0000', {placeholder: "__.__.____"});
		//$('.RName').mask('aaaaaaaaaaaaaaa', {placeholder: "Заполняется кириллицей"});
		$('.phone').mask('+7 900 000 00 00', {placeholder: "+7 9__ ___ __ __"});
		$("#frmTraveler").validate({

       rules:{

           			
			//RLastname
			RBithDay:{
				required: true,
                date: true
				}
			},
		
       messages:{

             RBithDay:{
                 required: "Это поле обязательно для заполнения",
              
				}
			 }
});
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
	} //end document.ready
	
	

 
/*Параметры функции:
 
a - множественное число (родительный падеж)
b - единственное число (именительный падеж)
c - множественное число (именительный падеж)
s - количество*/
	
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