<? 	header('Content-Type: text/html; charset=utf-8');
	session_start(); 
	include "constants.php"
	
	?>

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

		$data_string_res = '{"data":{
			"AcceptationDate": "2014-07-10",
			"AddInsSum": 3000,
			"AmountCurrencyCode": "",
			"AmountCurrencyName": "",
			"amSport": '.$_SESSION['amSportCalc'].',
			"BreakTravel": false,
			"CancelTravel": '.$_SESSION['CancelTravel'].',
			"CoursesOfCurrency": [],
			"CreatorName": "ТревелРСБ",
			"CreatorUser": "Travel_SRB",
			"currency": "'.$_SESSION['currency'].'",
			"currencyRaw": "'.$_SESSION['currencyRaw'].'",
			"daysCount": '.$_SESSION['daysCountCalc'].',
			"daysCountByStore": "'.$_SESSION['daysCountByStore'].'",
			"daysCountByStoreRaw": "",
			"DocumentDate": "2014-07-10",
			"DocumentStatusID": "0C9468DD-F53C-4962-8B0B-93BF28ABA6A9",
			"EffectiveDate": "'.$_SESSION['EffectiveDate'].'",
			"email": "'.$_POST['email'].'",
			"ExpirationDate": "'.$_SESSION['ExpirationDateCalc'].'",
			"FilialName": null,
			"GridInsuredPerson": ['.$GridInsuredPerson.'],
			"groupOfProgram": "'.$_SESSION['groupOfProgramCalc'].'",
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
			"Premium": "'.$_SESSION['Premium'].'",
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
		$ch = curl_init(VIRTU_URL.'/JPolicyFeature/Update.cmd?id='.$_SESSION['PolicyID']);                                                                      
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string_res); 	
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		curl_setopt($ch, CURLOPT_HEADER, 1);	
		curl_setopt($ch, CURLOPT_HTTPHEADER, array( 
			'Accept:*/*',
			//'Accept-Encoding:gzip,deflate,sdch',
			'Accept-Language:ru-RU,ru;q=0.8,en-US;q=0.6,en;q=0.4',
			'Cache-Control:no-cache, no-store, must-revalidate',
			'Connection:keep-alive',
			'Content-Length: ' . strlen($data_string_res),
			'Content-Type:application/json; charset=UTF-8',
			'Cookie:ASP.NET_SessionId=5q11gg45q0xgli45jhxbko45; .VFOS='.$_SESSION['AuthVfos'],
			'Host:vfos.virtusystems.ru',
			'Origin:'.VIRTU_URL,
			'Pragma:no-cache',
			'Referer:'.VIRTU_URL.'/Companies/RusSt/VZR_new_version/default.aspx?ProductID=c73d3867-9a5c-484a-8a6b-bf3e2db4dd99&PolicyID=&doc=d952f3ec-2388-45dc-a2ee-aab46a3faeb0',
			'User-Agent:Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.146 Safari/537.36'
			)                                                                       
		);
		$result3 = curl_exec($ch);
		//echo "<h2>Отправленый объект полиса</h2>";
		//echo "<div style='font-size:13px'>".$data_string_res."</div>";
		//echo "<h2>Возвращенный объект полиса</h2>";
		//echo "<div style='font-size:13px'>".$result3."</div><hr/>";
	
		preg_match('/"IsValid"\s*:\s*([^,]+)/mi', $result3, $m);
		$_SESSION['IsValid'] = $m[1];
		//echo 'valid='.$_SESSION['IsValid'];
		//var_dump($result3);
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
							<li class="b-breadcrumbs_item breadcrumbs-item-disabled">Оформление</li>
							<li class="b-breadcrumbs_item breadcrumbs-item-current"><a href="#">Оплата</a></li>
							<li class="b-breadcrumbs_item breadcrumbs-item-disabled"><a href="#">Результат</a></li>
					</ul>
				</div>

				<div class="b-clearfix"></div>
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
				
									<div class="b-page-frame" style='font-size:20px'>
										<b><?if ($_SESSION['IsValid']==true) echo'Полис успешно сохранен!!!'; else echo 'Сохранение полиса прошло с ошибками!';?></b>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
				


	
	
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