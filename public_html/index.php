<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>НПФ "Русский Стандарт"</title>
    <link rel="stylesheet" href="../css/common.css"/>
    <link rel="stylesheet" type="text/css" href="../css/lk.css"/>
   
	
	
  
	
	<!--<link rel="stylesheet" type="text/css" href="jquery-ui.css"/>
	<link rel="stylesheet" type="text/css" href="jquery-ui.min.css"/>
	<link rel="stylesheet" type="text/css" href="theme.css"/>-->
	
	
	
	
	<!--<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="jquery-ui.js"></script>-->
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
	
	<link rel="stylesheet" type="text/css" href="styles.css"/>
	<script type="text/javascript" src="func.js"></script>	
	<!--<link rel="stylesheet" type="text/css" href="calendar.css"/>
	<link rel="stylesheet" type="text/css" href="vzr.css" media="all" />
	<link rel="stylesheet" type="text/css" href="main.css" media="all" />
	<link rel="stylesheet" type="text/css" href="forms.css" media="all" />
	<link rel="stylesheet" type="text/css" href="form_policy.css" media="all" />
	
	<script type="text/javascript" src="jcommon.js"></script>
	<script type="text/javascript" src="main.js"></script>
	<script type="text/javascript" src="form_policy.js"></script>
	<script type="text/javascript" src="calendar.js"></script>
	<script type="text/javascript" src="vzr.js"></script>
	
	
	
	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="jquery.formstyler.js"></script>
	<script type="text/javascript" src="jquery.formstyler.min.js"></script>
	<link rel="stylesheet" type="text/css" href="jquery.formstyler.css"/>

	-->
	
  
	
	
	
	<script type="text/javascript" src="../js/mootools-core-1.4.5-full-nocompat-yc.js"></script>
    <script type="text/javascript" src="../js/mootools-more-1.4.0.1-yui.js"></script>
    <script type="text/javascript" src="../js/common.js"></script>
	
</head>
<body>

    <div class="center1200" >
        <!--<img src="../img/decor-left.png" alt="" style="position: absolute; left:-10px;top: 555px"/>
        <img src="../img/decor-right.png" alt="" style="position: absolute; right:-10px;top: 380px"/>-->
        <div class="center980">
            <table class="mheader" style="" border="0" cellpadding='0' cellspacing='0'>
                <tr>
                    <td><a href="/"><img src="./images/logo.png" alt=""></a></td>
                    <td style="padding-top: 10px">
                        <img src="../img/icon-phone.png" alt="" style="vertical-align: top">
                        <span style="display: inline-block">
                            <span class="phone_big">8 800 700 78 60</span>&nbsp;<span class="phone_note">(звонок по России бесплатный)</span><br>
                            <span class="phone_big">8 495 775 52 56</span>&nbsp;<span class="phone_note">(телефон в Москве)</span>
                        </span>
                    </td>
                    <!--<td style="padding-top: 10px">
                        <input type="text" class="searchfield" value="Поиск по сайту..." style="width: 130px"/>
                        <button class="search"></button>
                        <div class="lk-login" style="">
                            <img src="../img/icon-lock.png"><a href="../lk/">Вход в личный кабинет</a>
                        </div>
                    </td>-->
                </tr>
            </table>
			<div id="img-banner">
				<img src="./images/banner.png" />
			</div>    
			
			<!--<div class="bread-crumbs">
					<a href="../home/index.html" class="std">
						<img src="../img/button-std-l.png"><img src="../img/bicon/site.png" style="background: url('../img/button-std-bg.png') repeat-x; padding: 0px 3px"><span>Весь сайт</span><img src="../img/button-std-r.png">
					</a>
					<span class="crumb">/</span>
					<a href="./index.html" class="crumb">Калькулятор</a>
            </div>-->
		<div class="breadcrumbs-wrapper">
			<ul class="breadcrumbs">
				<li class="breadcrumbs_item">
					Калькулятор
				</li>
			</ul>
        </div>

<!--        <div class="center980" style="overflow: visible; margin-bottom: 20px">
            <div class="white-shaded-r10" style="overflow: hidden">
                <div class="nav-block">
                    <h1>Калькулятор</h1>
                </div>
            </div>
        </div>
-->


        
	
	<?	
		function GetBirthday($Minus){
			$Today = "".date("m.d.y").""; 
			$TodayArray = explode('.', $Today);
			$YearPaste = date('Y') - $Minus; 
			$Bithday = $TodayArray[0]."-".$TodayArray[1]."-".$YearPaste;
			return $Bithday;
		}
	?>

	<?
	

		$data = array("userName" => "RusStd", "password" => "3edc4RFV","createPersistentCookie"=>false);                                                                    
		$data_string = json_encode($data);                                                                                   	 
		$ch = curl_init('http://vfos.virtusystems.ru/Authentication_JSON_AppService.axd/Login');                                                                      
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		curl_setopt($ch, CURLOPT_HEADER, 1);	
		curl_setopt($ch, CURLOPT_HTTPHEADER, array( 
			'Accept: /User-Agent: Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; MathPlayer 2.10d; MRA 5.4 (build 02647); .NET CLR 2.0.50727;',
			'Host: vfos.virtusystems.ru',	                                                                              
			'Content-Length: ' . strlen($data_string),
			'Expect: 100-continue',
			'Connection: Keep-Alive',
			'Content-Type: application/json'
			)                                                                       
		);
		$result1 = curl_exec($ch);
		//echo $result1;
		preg_match('/VFOS\s*=\s*([^;]+)/mi', $result1, $m);
		$AuthVfos = $m[1];	
		//echo $AuthVfos;
		
		
		
		//.................................................................................
		//echo "<h2>Вывод данных из справочника</h2>";
		$ch = curl_init('http://vfos.virtusystems.ru/Companies/RusSt/VZR_new_version/init.aspx?ProductID=c73d3867-9a5c-484a-8a6b-bf3e2db4dd99&PolicyID=&doc=d952f3ec-2388-45dc-a2ee-aab46a3faeb0&rnd=6402eb21-d7cf-48f3-aad3-63be7d548fa8');                                                                      
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                                                                                       
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		curl_setopt($ch, CURLOPT_HEADER, 1);	
		curl_setopt($ch, CURLOPT_HTTPHEADER, array( 
			'Content-Length: 0',
			'Accept:*/*',
			'Accept-Language:ru-RU,ru;q=0.8,en-US;q=0.6,en;q=0.4',
			'Cache-Control:max-age=0',
			'Connection:keep-alive',
			'Cookie:.VFOS='.$AuthVfos,
			'Host:vfos.virtusystems.ru',
			'Referer:http://vfos.virtusystems.ru/Companies/RusSt/VZR_new_version/default.aspx?ProductID=c73d3867-9a5c-484a-8a6b-bf3e2db4dd99&PolicyID=&doc=d952f3ec-2388-45dc-a2ee-aab46a3faeb0',
			'User-Agent:Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.146 Safari/537.36'
			)                                                                       
		);
		$result2 = curl_exec($ch);
		preg_match('/initialData\s*=\s*([^;]+)/mi', $result2, $m);
		$Json1 = $m[1];
		$obj = json_decode($Json1);
		
		//............................................. Собираем массивы из полученного объекта
		$CountryID = strtoupper($_POST["CountryID"]);
		$stdClassObjectArray = (array)$obj;
		$stdClassObjectArray2 = (array)$stdClassObjectArray["classifierList"];
		$stdClassObjectArray3 = (array)$stdClassObjectArray["tarifList"];
		
		$TarifShortProgArray = $stdClassObjectArray3["TarifShortProg"]; // Однократный		
		$TrifMultiProgArray = $stdClassObjectArray3["TrifMultiProg"]; // Многократный (Мультишенген)
		$TarifYearProgArray = $stdClassObjectArray3["TarifYearProg"]; // Многократный (Год)

		$CountriesArrays = $stdClassObjectArray2["2D816632-5329-4B1B-B1C6-B670316EA3DF"];
		foreach($CountriesArrays as $OneCountry)
		{
			$AllCountries[strtoupper($OneCountry[0])] = $OneCountry[4];
			if(strtoupper($OneCountry[0]) == $CountryID)
			{
				if($OneCountry[3])
				{
					$isShengen = "true";
					$shengenCountry = $CountryID;
					$isOtherCountry = "false";
					$otherCountry = "";
					$shengenCountryRaw = $AllCountries[$CountryID];
				}
				else
				{
					$isShengen="false";
					$shengenCountry="";
					$isOtherCountry = "true";
					$otherCountry = $CountryID;	
					$otherCountryRaw = $AllCountries[$CountryID];
				}
			}			
		}
		//echo "<pre>"; print_r($CountriesArrays); echo "</pre>";



		// Массив с количеством человек и их параметрами
		$Bithday = GetBirthday($_POST["AgeBetween"]);
		$PeopleCount = (int)$_POST["PeopleCount"];
		$i = 1;
		while ($i <= $PeopleCount){
			$GridInsuredPerson.= '{"PersonID": '.$i.',"Bithday": "'.$Bithday.'","Surname": "GodMir","Name": "Vso","National": "РФ","CountryNational": ""},';
			$i++;  
		}
		$GridInsuredPerson = substr($GridInsuredPerson, 0, strlen($GridInsuredPerson)-1);
		
		$InsuredSum = $_POST["InsuredSum"];	
	
		// Группы программ
		$groupOfProgramArray = $stdClassObjectArray2["BF005771-6421-47D8-88C3-18E3F2B35DCB"];
		// $groupOfProgramArray[0][0] - Краткосрочные
		// $groupOfProgramArray[1][0] - Годовые
		// $groupOfProgramArray[2][0] - Мульти Шенген
		if($_POST["groupOfProgram"]=="odn"){
			$groupOfProgram = strtoupper($groupOfProgramArray[0][0]);
			$groupOfProgramRaw = $groupOfProgramArray[0][2];	
		}elseif($_POST["groupOfProgram"]=="mul"){
			$groupOfProgram = strtoupper($groupOfProgramArray[2][0]);
			$groupOfProgramRaw = $groupOfProgramArray[2][2];	
		}
		

		$daysCount = $_POST["daysCount"];
		if($daysCount=="365"){
			$groupOfProgram = strtoupper($groupOfProgramArray[1][0]);
			$groupOfProgramRaw = $groupOfProgramArray[1][2];			
			//echo $groupOfProgram;
		}
		else
		{
			$daysCountByStoreArrays = $stdClassObjectArray2["1BC3916D-FF09-4783-B7A6-20E18B02BF53"];
			$daysCountByStore = "";
			foreach($daysCountByStoreArrays as $OneDaysCountByStore)
			{
				if($OneDaysCountByStore[2]==$daysCount){
					$daysCountByStore = strtoupper($OneDaysCountByStore[0]);
				}
			}		
		}
		
		
		$CurrencyArrays = $stdClassObjectArray2["63665791-125E-46E7-878B-7E625EA62803"];
		$currency = strtoupper($CurrencyArrays[$_POST["Currency"]][0]);
		$currencyRaw = $CurrencyArrays[$_POST["Currency"]][2];
		if($groupOfProgram == strtoupper($groupOfProgramArray[2][0])){//если выбран Мульти-Шенген
			$currency = strtoupper("43B13C6D-EEAF-4F35-A990-4236DCDAB212"); // то вылюта EURO
			$currencyRaw = "ЕВРО";
		}else{
			$currency = strtoupper($CurrencyArrays[$_POST["Currency"]][0]);
			$currencyRaw = $CurrencyArrays[$_POST["Currency"]][2];		
		}		
		

		$EffectiveDate = $_POST["EffectiveDate"];
		
		$ExpirationDate = $_POST["ExpirationDate"];
		
		// Дополнительные параметры страхавания
		if($_POST["amSport"]){$amSport='true';$amSportChecked='checked';}else{$amSport='false';$amSportChecked='';}
		
		$OdnRussia = "<input name='advpars1' type='radio'/>&nbsp;Транспортные расходы<br/>".
					 "<input name='advpars1' type='radio'/>&nbsp;Отмена поездки<br/>".
					 "<input name='advpars1' type='radio'/>&nbsp;Багаж<br/>".  
					 "<input name='advpars1' type='radio'/>&nbsp;Гражданская ответственность<br/>".
					 "<input name='amSport' ".$amSportChecked." type='checkbox'/>&nbsp;Любительский спорт";
					 
		$OdnSNG = "<input name='advpars1' type='checkbox'/>&nbsp;Транспортные расходы<br/>".
					 "<input name='advpars2' type='radio'/>&nbsp;Отмена поездки<br/>".
					 "<input name='advpars2' type='radio'/>&nbsp;Багаж<br/>".  
					 "<input name='advpars2' type='radio'/>&nbsp;Гражданская ответственность<br/>".
					 "<input name='amSport' ".$amSportChecked." type='checkbox'/>&nbsp;Любительский спорт";

		$OdnUSACanJapAusCarib = "<input name='amSport' ".$amSportChecked." type='checkbox'/>&nbsp;Любительский спорт";
								
		$OdnOtherCountries = "<input name='advpars2' type='radio'/>&nbsp;Отмена поездки<br/>".
					         "<input name='advpars2' type='radio'/>&nbsp;Багаж<br/>".  
						     "<input name='advpars2' type='radio'/>&nbsp;Гражданская ответственность<br/>".
					         "<input name='amSport' ".$amSportChecked." type='checkbox'/>&nbsp;Любительский спорт";
							 
		$MnoUSACanJapAusCaribRussia = "<input name='amSport' ".$amSportChecked." type='checkbox'/>&nbsp;Любительский спорт";
		$MnoOtherCountries = "<input name='advpars2' type='radio'/>&nbsp;Багаж<br/>".  
						     "<input name='advpars2' type='radio'/>&nbsp;Гражданская ответственность<br/>".
					         "<input name='amSport' ".$amSportChecked." type='checkbox'/>&nbsp;Любительский спорт";	
		
		
			
		
		
		//Территория страхования + Подставляем "Дополнительные параметры страхавания"
		$insuranceTerritoriesArrays = $stdClassObjectArray2["38AC4CB9-335F-443E-BB00-E99E10A423B9"];
		// $insuranceTerritoriesArrays[0][0] - T-1
		// $insuranceTerritoriesArrays[2][0] - T-2
		// $insuranceTerritoriesArrays[4][0] - T-3 (Россия и СНГ)
		// $insuranceTerritoriesArrays[6][0] - T-4
		// $insuranceTerritoriesArrays[8][0] - T-5
		// $insuranceTerritoriesArrays[9][0] - T-6 (США, Канада, Япония,Австралия, страны Карибского бассейна)
		foreach($CountriesArrays as $OneCountry)
		{
			if(strtoupper($OneCountry[0]) == $CountryID)
			{
				$SelectedCountryName = $OneCountry[4];
				
				if($groupOfProgram == strtoupper($groupOfProgramArray[1][0]) OR $groupOfProgram == strtoupper($groupOfProgramArray[2][0])) 
				{ // Проверяем, если это одна из многократных программ (год, мультишенген)
					$insuranceTerritory = strtoupper($insuranceTerritoriesArrays[0][0]); // Во всех остальных случаях, если условия ниже не выполняются
					$AdvancedParametersHtmlString = $MnoOtherCountries; // Дополнительные параметры страхавания
					
					if( $SelectedCountryName=="U.S.A." OR $SelectedCountryName=="Canada" OR $SelectedCountryName=="Japan" OR
						$SelectedCountryName=="Australia" OR $SelectedCountryName=="Russia"// Добавить страны карибского бассейна
					  )
					{
						$insuranceTerritory = strtoupper($insuranceTerritoriesArrays[9][0]);
						$AdvancedParametersHtmlString = $MnoUSACanJapAusCaribRussia; // Дополнительные параметры страхавания
					}	
				}
				else
				{ // Значит это однократная программа
					$insuranceTerritory = strtoupper($insuranceTerritoriesArrays[0][0]); // Во всех остальных случаях, если условия ниже не выполняются
					$AdvancedParametersHtmlString = $OdnOtherCountries;
					
					if( $SelectedCountryName=="Russia" OR $SelectedCountryName=="Azerbaijan" OR $SelectedCountryName=="Armenia" OR
						$SelectedCountryName=="Belorus" OR $SelectedCountryName=="Kazakstan" OR $SelectedCountryName=="Tajikistan" OR
						$SelectedCountryName=="Turkmenistan" OR $SelectedCountryName=="Uzbekistan"
					  )
					{
						$insuranceTerritory = strtoupper($insuranceTerritoriesArrays[4][0]);
						if($SelectedCountryName=="Russia"){
							$AdvancedParametersHtmlString = $OdnRussia;
						}else{
							$AdvancedParametersHtmlString = $OdnSNG;	
						}
						
					}
					if( $SelectedCountryName=="U.S.A." OR $SelectedCountryName=="Canada" OR $SelectedCountryName=="Japan" OR
						$SelectedCountryName=="Australia" // Добавить страны карибского бассейна
					  )
					{
						$insuranceTerritory = strtoupper($insuranceTerritoriesArrays[9][0]);
						$AdvancedParametersHtmlString = $OdnUSACanJapAusCarib;
					}
				}
			}
		}
		
		//Программы страхования
		//$VirtuProgramArray = $stdClassObjectArray2["208E0BD1-EC3C-4BB6-9938-8412463D4EE7"];
		//echo "<pre>"; print_r($VirtuProgramArray); echo "</pre>";
		//.....................
		
		// ВРЕМЕННО
		if($groupOfProgram == strtoupper($groupOfProgramArray[1][0]) OR $groupOfProgram == strtoupper($groupOfProgramArray[2][0])) 
		{
			if($daysCount==365){
				$SubProgInsur = strtoupper("CB8AE870-4F68-42AF-8BC4-D4D5E19DBC16");
			}else{
				$SubProgInsur = strtoupper("9ec0e893-33e0-475f-aba8-97dee18140b4"); //15-30-60-90-180дн
			}
		}
		else
		{
			if($InsuredSum==15000)
			{
				
				$SubProgInsur = "4E0A11C6-4F62-4997-AADE-D26080BA9CE0";	
			}
			else
			{
				$SubProgInsur = "E557279E-BCA8-418A-A517-109E959D0296";
			}
		}		
		
		// ВРЕМЕННО КОНЕЦ
		?>
		
		<!--
		<table>
			<tr>
				<td>
					<div><h2>Однократный</h2></div>
					<?
					//foreach($TarifShortProgArray as $OneTarif){
						//echo $OneTarif[0]."_".$OneTarif[1]."<br/>";
					//}
					?>				
				</td>
				<td>
					<div><h2>Многократный (Мультишенген)</h2></div>
					<?
					//foreach($TrifMultiProgArray as $OneTarif){
						//echo $OneTarif[0]."_".$OneTarif[1]."<br/>";
					//}
					?>				
				</td>
				<td>
					<div><h2>Многократный (Год)</h2></div>
					<?
					//foreach($TarifYearProgArray as $OneTarif){
						//echo $OneTarif[0]."_".$OneTarif[1]."<br/>";
					//}
					?>				
				</td>				
			</tr>
		</table>
		-->
		
		<?
		
		//echo "<pre>"; print_r($TarifShortProgArray); echo "</pre>";
		
		//..................................................................................... 
		


		//echo  $insuranceTerritoriesArrays[0][0]." - T-1<br/>";
		//echo  $insuranceTerritoriesArrays[2][0]." - T-2<br/>";
		//echo  $insuranceTerritoriesArrays[4][0]." - T-3 (Россия и СНГ)<br/>";
		//echo  $insuranceTerritoriesArrays[6][0]." - T-4<br/>";
		//echo  $insuranceTerritoriesArrays[8][0]." - T-5<br/>";
		//echo $insuranceTerritoriesArrays[9][0]." - T-6 (США, Канада, Япония,Австралия, страны Карибского бассейна)<br/>";

		
	if(isset($_POST["CalculatePolice"]))
	{
		
		$data_string_res = '{"Policy":{
			"ProductID": "C73D3867-9A5C-484A-8A6B-BF3E2DB4DD99","DocumentDate": "2014-07-10",
			"EffectiveDate": "'.$EffectiveDate.'",
			"ExpirationDate": "'.$ExpirationDate.'",
			"DocumentStatusID": "0C9468DD-F53C-4962-8B0B-93BF28ABA6A9","InsuredName": "ГодоваяМИР Все ","NUMBER": "100000208","SERIAL": "TRS",
			"AmountCurrencyName": "","AmountCurrencyCode": "","SumInsuredCurrencyCode": "","CreatorUser": "RusStd","CreatorName": "Rus Std",
			"InsurerRepresentId": "85360167-1ac7-4f0f-be20-a86b36c166e0","SallerDivisionID": "0c6c97db-ebe9-4230-8153-7f51a57358ed","SallerDivision": "ХХХ",
			"InsurerRepresentName": "Rus Std","TelAssist": "+7 (495) 989-11-20",
			"groupOfProgram": "'.$groupOfProgram.'",
			"groupOfProgramRaw": "'.$groupOfProgramRaw.'",
			"isShengen": '.$isShengen.',
			"shengenCountry":["'.$shengenCountry.'"],
			"shengenCountryRaw": "'.$shengenCountryRaw.'",
			"isOtherCountry": '.$isOtherCountry.',
			"otherCountry": ["'.$otherCountry.'"],
			"otherCountryRaw": "'.$otherCountryRaw.'",
			"daysCount": '.$daysCount.',
			"daysCountByStore": "'.$daysCountByStore.'",
			"daysCountByStoreRaw": "",
			"currency": "'.$currency.'",
			"currencyRaw": "'.$currencyRaw.'",
			"insuranceTerritory": "'.$insuranceTerritory.'",
			"insuranceTerritoryRaw": "",
			"InsuredSum": "'.$InsuredSum.'",
			"insuranceProgram": "","insuranceProgramRaw": "",
			"SubProgInsur": "'.$SubProgInsur.'",
			"RGroupPr": "E3B922F1-9A2D-4397-9E34-21D14F946258",
			"RGroupPrRaw": "",
			"SubProgInsurRaw": "","InsRiskPrem": "","CancelTravel": false,
			"BreakTravel": false,
			"amSport": '.$amSport.',
			"ResInsPrem": "0","AddInsSum": 3000,
			"GridInsuredPerson": ['.$GridInsuredPerson.'],
			"Premium": "","RShengenCountry": "","ROtherCountry": "","ROtherCountryRaw": "","RInsuranceTerritory": "",
			"RInsuranceTerritoryRaw": "","REffectiveDate": "","RExpirationDate": "","RdaysCount": 0,"RdaysCountByStore": 0,"phone": "31234321143","email": "ewq@fd.rt","RSurname": "ГодоваяМИР",
			"RName": "Все","RLastname": "","RBithDay": "1990-11-28","Rtest": "","StringPremium": "126.00 USD/4293.55 RUR","CoursesOfCurrency": [],"StatusID": "0C9468DD-F53C-4962-8B0B-93BF28ABA6A9",
			"url": "http://vfos.virtusystems.ru/Companies/RusSt/VZR_new_version/default.aspx?ProductID=C73D3867-9A5C-484A-8A6B-BF3E2DB4DD99&PolicyID=813F05F2-17FB-4FA2-9BDA-17446421A5EF",
			"ID": "813F05F2-17FB-4FA2-9BDA-17446421A5EF","FilialName": null,"AcceptationDate": "2014-07-10","StatusName": "Действующий","NUMBAR": "100000208","ProductName": "ВЗР (Русский стандарт)"		
		}}';
		
		$data_string_res1 = '{"Policy":{
  "ProductID": "C73D3867-9A5C-484A-8A6B-BF3E2DB4DD99",
  "DocumentDate": "2014-07-10",
  "EffectiveDate": "2014-07-18",
  "ExpirationDate": "2014-08-17",
  "DocumentStatusID": "0C9468DD-F53C-4962-8B0B-93BF28ABA6A9",
  "InsuredName": "МультиШ МедТранс ",
  "NUMBER": "100000209",
  "SERIAL": "TRS",
  "AmountCurrencyName": "",
  "AmountCurrencyCode": "",
  "SumInsuredCurrencyCode": "",
  "CreatorUser": "RusStd",
  "CreatorName": "Rus Std",
  "InsurerRepresentId": "85360167-1ac7-4f0f-be20-a86b36c166e0",
  "SallerDivisionID": "0c6c97db-ebe9-4230-8153-7f51a57358ed",
  "SallerDivision": "ХХХ",
  "InsurerRepresentName": "Rus Std",
  "TelAssist": "+7 (495) 989-11-20",
  "groupOfProgram": "F0F5DD0D-BD56-497F-A6AF-46E63FAB0E28",
  "groupOfProgramRaw": "Мульти Шенген",
  "isShengen": true,
  "shengenCountry": [
    "3C359A1A-F568-4AE5-A3DD-B8D226023040"
  ],
  "shengenCountryRaw": "Hungary",
  "isOtherCountry": false,
  "otherCountry": "",
  "otherCountryRaw": "",
  "daysCount": 1,
  "daysCountByStore": "215628C1-3381-4C18-9AA3-2113176716F2",
  "daysCountByStoreRaw": "",
  "currency": "43B13C6D-EEAF-4F35-A990-4236DCDAB212",
  "currencyRaw": "ЕВРО",
  "insuranceTerritory": "9DBCB4CC-D1E9-400B-9BB0-C446861A570C",
  "insuranceTerritoryRaw": "T-I - Worldwide, except USA, Canada, Japan, Australia, Caribbean and Russia",
  "InsuredSum": "30000",
  "insuranceProgram": "",
  "insuranceProgramRaw": "",
  "SubProgInsur": "9EC0E893-33E0-475F-ABA8-97DEE18140B4",
  "SubProgInsurRaw": "MTS-3",
  "InsRiskPrem": "12.00 EUR",
  "CancelTravel": false,
  "BreakTravel": false,
  "amSport": false,
  "ResInsPrem": "0",
  "AddInsSum": 3000,
  "GridInsuredPerson": [
    {
      "PersonID": 1,
      "Bithday": "02-07-1970",
      "Surname": "MultSh",
      "Name": "MedTrans",
      "National": "РФ",
      "CountryNational": ""
    }
  ],
  "Premium": "12.0",
  "RGroupPr": "E3B922F1-9A2D-4397-9E34-21D14F946258",
  "RGroupPrRaw": "",
  "RShengenCountry": "",
  "ROtherCountry": "",
  "ROtherCountryRaw": "",
  "RInsuranceTerritory": "",
  "RInsuranceTerritoryRaw": "",
  "REffectiveDate": "",
  "RExpirationDate": "",
  "RdaysCount": 0,
  "RdaysCountByStore": 0,
  "phone": "3213441",
  "email": "32421@hj.ru",
  "RSurname": "МультиШ",
  "RName": "МедТранс",
  "RLastname": "",
  "RBithDay": "1980-07-10",
  "Rtest": "",
  "StringPremium": "12.00 EUR/556.98 RUR",
  "CoursesOfCurrency": [],
  "StatusID": "0C9468DD-F53C-4962-8B0B-93BF28ABA6A9",
  "url": "http://vfos.virtusystems.ru/Companies/RusSt/VZR_new_version/default.aspx?ProductID=C73D3867-9A5C-484A-8A6B-BF3E2DB4DD99&PolicyID=544A3DBB-9CA9-4019-8B5E-4B909235FF56",
  "ID": "544A3DBB-9CA9-4019-8B5E-4B909235FF56",
  "FilialName": null,
  "AcceptationDate": "2014-07-10",
  "StatusName": "Действующий",
  "NUMBAR": "100000209",
  "ProductName": "ВЗР (Русский стандарт)"		
		}}';		
		

		//....................................................................................................................................................................................
			
		$ch = curl_init('http://vfos.virtusystems.ru/RUSSTANDARTVZRFeature/RUSSTANDARTVZRCalculate.cmd?id=33e188ed-df03-2f13-91ca-e0a39f61f4ee');                                                                      
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
			'Cookie:ASP.NET_SessionId=5q11gg45q0xgli45jhxbko45; .VFOS='.$AuthVfos,
			'Host:vfos.virtusystems.ru',
			'Origin:http://vfos.virtusystems.ru',
			'Pragma:no-cache',
			'Referer:http://vfos.virtusystems.ru/Companies/RusSt/VZR_new_version/default.aspx?ProductID=c73d3867-9a5c-484a-8a6b-bf3e2db4dd99&PolicyID=&doc=d952f3ec-2388-45dc-a2ee-aab46a3faeb0',
			'User-Agent:Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.146 Safari/537.36'
			)                                                                       
		);
		$result3 = curl_exec($ch);
		echo "<h2>Отправленый объект полиса</h2>";
		echo "<div style='font-size:13px'>".$data_string_res."</div>";
		echo "<h2>Возвращенный объект полиса</h2>";
		echo "<div style='font-size:13px'>".$result3."</div><hr/>";
	
		preg_match('/"Premium"\s*:\s*([^,]+)/mi', $result3, $m);
		$Premium = $m[1];
		$Premium = str_replace('"', '', $Premium);
	}

	?>
	<div class="center980" style="overflow: visible; margin-bottom: 20px" >
		
		
			<div class="white-shaded" >
				<!--<div class="reducer_h1">
					
				<div class="myh1">Расчет стоимости и оформление полиса</div>
					<p>Анкета и калькулятор для оформления полисов.</p>
				
				</div>
				<img class="img-shadow" width="639" height="25" src="form-highlight-shadow.png" alt="">
				-->
				<div style="padding:40px;">
	<form method="post">
		<table class="Calculator">
			<tr>
				<td class="field-name">Выберите тип полиса: </td>
				<td>
					<select name="groupOfProgram" id="PoliceType" class="field-data">
						<option <?if($_POST["groupOfProgram"]=='odn'){echo "selected";}?> value="odn">Однократный</option>
						<option <?if($_POST["groupOfProgram"]=='mul'){echo "selected";}?> value="mul">Многократный</option>
					</select>				
				</td>
			</tr>
			<tr>
				<td class="field-name">Страховая сумма и валюта: </td>
				<td>
					<div id="radio">
						<input <?if($_POST["InsuredSum"]=='15000'){echo "checked";}?> type="radio" id="InsuredSum1" name="InsuredSum" checked="checked" value="15000" /><label  for="InsuredSum1" class="radio-label" >15000</label>
						<input <?if($_POST["InsuredSum"]=='30000'){echo "checked";}?> type="radio" id="InsuredSum2" name="InsuredSum" value="30000"/><label for="InsuredSum2" class="radio-label">30000</label>
						<input <?if($_POST["InsuredSum"]=='50000'){echo "checked";}?> type="radio" id="InsuredSum3" name="InsuredSum" value="50000"/><label for="InsuredSum3" class="radio-label">50000</label>
						<input <?if($_POST["InsuredSum"]=='100000'){echo "checked";}?> type="radio" id="InsuredSum4" name="InsuredSum" value="100000"/><label for="InsuredSum4" class="radio-label">100000</label>
					<span style="margin-right:10px">&nbsp;</span>
					
					<select name="Currency" id="Currency" style="padding: 5px 0;">
						<?foreach($CurrencyArrays as $Key => $OneCurrency){?>
							<option <?if($_POST["Currency"]==$Key){echo "selected";}?> value="<?=$Key?>"><?=$OneCurrency[2]?></option>
						<?}?>
					</select>
					</div>
				</td>
			</tr>
			<tr>
				<td class="section"><u>Параметры поездки: </u></td>
			</tr>
			<!--<tr>
				<td>
					<dd class="field">
						<input name="trip_start" id="trip_start" class="text zf" onclick="return {oValid: {fFunction: start_date_validator}}" value="" maxlength="524288" style="position: absolute; left: -100000px;">
						<div class="valid_message">Дата начала поездки не может быть раньше даты, следующей за датой оформления полиса, и не может превышать текущую дату на 1 год</div> 
						<ins class="unit ">
							<b class="date_start_rounder">
							<span class="date_start">31 августа 2014</span>
							<ins class="calendar"></ins></b></ins>
					</dd>
					
				</td>
			</tr>-->
			<tr>
				<td class="field-name">Какую страну планируете посетить? </td>
				<td>
					<select name="CountryID" id="CountryID" class="field-data" onchange="ShowUniqueOptions(this)" >
						<?foreach($CountriesArrays as $OneCountry){?>
							<option <?if($_POST["CountryID"]==$OneCountry[0]){echo "selected";}?> value="<?=$OneCountry[0]?>"><?=$OneCountry[2]?></option>
						<?}?>
					</select>				
				</td>
			</tr>
			
			<tr>
				<td class="field-name">Дата начала поездки: </td>
				<td>
					<input type="text" id="EffectiveDate" class="DatePicker field-data" name="EffectiveDate" placeholder="гггг-мм-дд" value="<?=$_POST["EffectiveDate"]?>"  />
				</td>
			</tr>
			<tr>
				<td></td>
				<td id="warning" style="color:red; display:none">
					Дата окончания должна быть больше даты начала
				</td>
			</tr>
			<tr>
				<td class="field-name">Дата окончания поездки: </td>
				<td>
					<input type="text" name="ExpirationDate" id="ExpirationDate" class="DatePicker field-data" placeholder="гггг-мм-дд" value="<?=$_POST["ExpirationDate"]?>" />
				</td>
			</tr>
			
			<tr> </tr>
			<tr>
				<td class="field-name">Срок действия страхового полиса: </td>
				<td>
					<select name="daysCount" id="daysCount" class="field-data">
						<option <?if($_POST["daysCount"]=='15'){echo "selected";}?> value="15">15 дней</option>
						<option <?if($_POST["daysCount"]=='30'){echo "selected";}?> value="30">30 дней</option>
						<option <?if($_POST["daysCount"]=='60'){echo "selected";}?> value="60">60 дней</option>
						<option <?if($_POST["daysCount"]=='90'){echo "selected";}?> value="90">90 дней</option>
						<option <?if($_POST["daysCount"]=='180'){echo "selected";}?> value="180">180 дней</option>
						<option <?if($_POST["daysCount"]=='365'){echo "selected";}?> value="365">1 год</option>						
					</select>				
				</td>
			</tr>
			
			<!--
			<tr>
				<td><b>Базовые параметры страхования(необ.): </b></td>
				<td></td>
			</tr>
			-->
			<tr>
				<td class="section"><u>Дополнительные опции страхования: </u></td>
			</tr>
			
			<tr>
				<td class="field-name">Количество путешественников: </td>
				<td>
					<select id="PeopleCount" name="PeopleCount" style="padding: 5px 0;" >
						<option <?if($_POST["PeopleCount"]=='1'){echo "selected";}?> value="1">1</option>
						<option <?if($_POST["PeopleCount"]=='2'){echo "selected";}?> value="2">2</option>
						<option <?if($_POST["PeopleCount"]=='3'){echo "selected";}?> value="3">3</option>
						<option <?if($_POST["PeopleCount"]=='4'){echo "selected";}?> value="4">4</option>
						<option <?if($_POST["PeopleCount"]=='5'){echo "selected";}?> value="5">5</option>
					</select>
				</td>
			</tr>			
			<tr>
				<td class="field-name">Возраст путешественников: </td>
				<td>
					<select id="AgeBetween" name="AgeBetween" class='field-data'>
						<option <?if($_POST["AgeBetween"]=='3'){echo "selected";}?> value="3">До 3х лет</option>
						<option <?if($_POST["AgeBetween"]=='9'){echo "selected";}?> value="9">3 – 16 лет</option>
						<option <?if($_POST["AgeBetween"]=='22'){echo "selected";}?> value="22">16 – 28 лет</option>
						<option <?if($_POST["AgeBetween"]=='49'){echo "selected";}?> value="49">28 – 70 лет</option>
						<option <?if($_POST["AgeBetween"]=='72'){echo "selected";}?> value="72">70 – 75 лет</option>
						<option <?if($_POST["AgeBetween"]=='77'){echo "selected";}?> value="77">75 – 80</option>
					</select>
				</td>
			</tr>			
			<tr>
				<td>&nbsp;</td>
				<td id="AdvOptions" class="field-name">
					<?=$AdvancedParametersHtmlString?>
				</td>
			</tr>
			<tr>
				<br/>
			</tr>
			<tr>
				<td style="text-align:center;padding:10px 0">
					<input type="submit" name="CalculatePolice" value="Расcчитать полис"/>
				</td>
				<td class="CalculatorResult">
					<?if($Premium){?>
					Стоимость полиса: <b><span style="font-size:30px"><?=$Premium?></span>&nbsp;<?=$currencyRaw?></b>
					<?}?>
				</td>
			</tr>
		</table>
	</form>
	
<script type="text/javascript">
	
	
	$(document).ready()
	{ 
		 $("#radio").buttonset();
		$("input:submit").button();
		// $("#PoliceType").selectmenu();
		//  $("#Currency").selectmenu();
		// $("#PeopleCount").selectmenu();
		// $("#AgeBetween").selectmenu();
		 //$("#daysCount" ).selectmenu();
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
				
				showOn: "button", 
				//dateFormat: "dd.mm.yy",
				buttonImage: "calendar.png", //"/_layouts/images/calendar.gif",
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
								}
								else $('#warning').hide();
							}
	});
	
	//$('input, select').styler();
	function isValidDate()
{
	
}
	}
</script>	
		
	<script>
	
		function ShowUniqueOptions(obj){
			var CurrSelectedText = obj.options[obj.selectedIndex].text;
			var AdvOptions = document.getElementById("AdvOptions");
			var SelectedPoliceType = document.getElementById("PoliceType").value;
			
			//alert(SelectedPoliceType);
			
			AdvOptions.innerHTML = '';
			
			if(SelectedPoliceType=="mul"){ // Если выбран многократный полис
				if( CurrSelectedText=="США" || CurrSelectedText=="Канада"  || CurrSelectedText=="Япония" || 
					     CurrSelectedText=="Австралия" ||  CurrSelectedText=="Россия"// Добавить страны карибского бассейна 
				)
				{
				   AdvOptions.innerHTML = "<?=$MnoUSACanJapAusCaribRussia?>";
				}			
				else
				{
					AdvOptions.innerHTML = "<?=$MnoOtherCountries?>";
				}				
			}
			else
			{ // Значит выбран однократный
				if(CurrSelectedText=="Россия"){
					AdvOptions.innerHTML = "<?=$OdnRussia?>";	
				}
				else if( CurrSelectedText=="Азербайджан" || CurrSelectedText=="Армения"  || CurrSelectedText=="Белорусь" || 
					CurrSelectedText=="Казахстан" || CurrSelectedText=="Таджикистан"  || CurrSelectedText=="Туркменистан" ||
					CurrSelectedText=="Узбекистан"
				  )
				{
					AdvOptions.innerHTML = "<?=$OdnSNG?>";	
				}
				else if( CurrSelectedText=="США" || CurrSelectedText=="Канада"  || CurrSelectedText=="Япония" || 
					CurrSelectedText=="Австралия" // Добавить страны карибского бассейна
				  )
				{
					AdvOptions.innerHTML = "<?=$OdnUSACanJapAusCarib?>";	
				}
				else{
					AdvOptions.innerHTML = "<?=$OdnOtherCountries?>";
					//alert();
				}	
						
			}
			
			
		
			
		}
	</script>	
				

	
	
					
					
					
					
					
				
			</div>
			
			</div>
        </div>

        <div id="banner" class="center980 banner" style="font-size: 0px">
            <a href="#"><img src="/files/banners/Q3BSCP.png"></a>
        </div>
        <div class="center980 shade980" style="height:0px"></div>

        <div class="center980">
            <div class="section_container footer">
                &copy;&nbsp;2013
                <span class="copy-text">
                    <span>НПФ «Русский Стандарт»</span><br>
                    <span style="font-size: 9px">Лицензия № 300/2 выдана Федеральной службой по финансовым рынкам.</span>
                </span>
            </div>
        </div>

    </div>

    <!-- analytics -->
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-32096729-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter14729479 = new Ya.Metrika({id:14729479,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true});
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="//mc.yandex.ru/watch/14729479" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

	
	
	<!--<div id="candarLeer" style="visibility: visible; left: 236px; top: 1046px;"><span class="b-icon b-icon__close"></span><div class="content"><div class="current"><p><select name="year"><option value="2014" selected="selected">2014</option><option value="2015">2015</option></select><select name="month"><option value="0">Январь</option><option value="1">Февраль</option><option value="2">Март</option><option value="3">Апрель</option><option value="4">Май</option><option value="5">Июнь</option><option value="6">Июль</option><option value="7" selected="selected">Август</option><option value="8">Сентябрь</option><option value="9">Октябрь</option><option value="10">Ноябрь</option><option value="11">Декабрь</option></select></p></div><div class="grid"><table width="100%"><tbody><tr><th class="whiteCell">Пн</th><th class="whiteCell">Вт</th><th class="whiteCell">Ср</th><th class="whiteCell">Чт</th><th class="whiteCell">Пт</th><th class="sundayCell">Сб</th><th class="sundayCell">Вс</th></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td class="whiteCell" onmouseover="this.className = 'overCell';" onmouseout="this.className = 'whiteCell';" onclick="setDateFromCalendar(1, 7, 2014);">1</td><td class="sundayCell" onmouseover="this.className = 'overCell';" onmouseout="this.className = 'sundayCell';" onclick="setDateFromCalendar(2, 7, 2014);">2</td><td class="sundayCell" onmouseover="this.className = 'overCell';" onmouseout="this.className = 'sundayCell';" onclick="setDateFromCalendar(3, 7, 2014);">3</td></tr><tr><td class="whiteCell" onmouseover="this.className = 'overCell';" onmouseout="this.className = 'whiteCell';" onclick="setDateFromCalendar(4, 7, 2014);">4</td><td class="whiteCell" onmouseover="this.className = 'overCell';" onmouseout="this.className = 'whiteCell';" onclick="setDateFromCalendar(5, 7, 2014);">5</td><td class="whiteCell" onmouseover="this.className = 'overCell';" onmouseout="this.className = 'whiteCell';" onclick="setDateFromCalendar(6, 7, 2014);">6</td><td class="whiteCell" onmouseover="this.className = 'overCell';" onmouseout="this.className = 'whiteCell';" onclick="setDateFromCalendar(7, 7, 2014);">7</td><td class="whiteCell" onmouseover="this.className = 'overCell';" onmouseout="this.className = 'whiteCell';" onclick="setDateFromCalendar(8, 7, 2014);">8</td><td class="sundayCell" onmouseover="this.className = 'overCell';" onmouseout="this.className = 'sundayCell';" onclick="setDateFromCalendar(9, 7, 2014);">9</td><td class="sundayCell" onmouseover="this.className = 'overCell';" onmouseout="this.className = 'sundayCell';" onclick="setDateFromCalendar(10, 7, 2014);">10</td></tr><tr><td class="whiteCell" onmouseover="this.className = 'overCell';" onmouseout="this.className = 'whiteCell';" onclick="setDateFromCalendar(11, 7, 2014);">11</td><td class="whiteCell" onmouseover="this.className = 'overCell';" onmouseout="this.className = 'whiteCell';" onclick="setDateFromCalendar(12, 7, 2014);">12</td><td class="whiteCell" onmouseover="this.className = 'overCell';" onmouseout="this.className = 'whiteCell';" onclick="setDateFromCalendar(13, 7, 2014);">13</td><td class="whiteCell" onmouseover="this.className = 'overCell';" onmouseout="this.className = 'whiteCell';" onclick="setDateFromCalendar(14, 7, 2014);">14</td><td class="whiteCell" onmouseover="this.className = 'overCell';" onmouseout="this.className = 'whiteCell';" onclick="setDateFromCalendar(15, 7, 2014);">15</td><td class="sundayCell" onmouseover="this.className = 'overCell';" onmouseout="this.className = 'sundayCell';" onclick="setDateFromCalendar(16, 7, 2014);">16</td><td class="sundayCell" onmouseover="this.className = 'overCell';" onmouseout="this.className = 'sundayCell';" onclick="setDateFromCalendar(17, 7, 2014);">17</td></tr><tr><td class="whiteCell" onmouseover="this.className = 'overCell';" onmouseout="this.className = 'whiteCell';" onclick="setDateFromCalendar(18, 7, 2014);">18</td><td class="whiteCell" onmouseover="this.className = 'overCell';" onmouseout="this.className = 'whiteCell';" onclick="setDateFromCalendar(19, 7, 2014);">19</td><td class="whiteCell" onmouseover="this.className = 'overCell';" onmouseout="this.className = 'whiteCell';" onclick="setDateFromCalendar(20, 7, 2014);">20</td><td class="whiteCell" onmouseover="this.className = 'overCell';" onmouseout="this.className = 'whiteCell';" onclick="setDateFromCalendar(21, 7, 2014);">21</td><td class="whiteCell" onmouseover="this.className = 'overCell';" onmouseout="this.className = 'whiteCell';" onclick="setDateFromCalendar(22, 7, 2014);">22</td><td class="sundayCell" onmouseover="this.className = 'overCell';" onmouseout="this.className = 'sundayCell';" onclick="setDateFromCalendar(23, 7, 2014);">23</td><td class="sundayCell" onmouseover="this.className = 'overCell';" onmouseout="this.className = 'sundayCell';" onclick="setDateFromCalendar(24, 7, 2014);">24</td></tr><tr><td class="whiteCell" onmouseover="this.className = 'overCell';" onmouseout="this.className = 'whiteCell';" onclick="setDateFromCalendar(25, 7, 2014);">25</td><td class="whiteCell" onmouseover="this.className = 'overCell';" onmouseout="this.className = 'whiteCell';" onclick="setDateFromCalendar(26, 7, 2014);">26</td><td class="whiteCell" onmouseover="this.className = 'overCell';" onmouseout="this.className = 'whiteCell';" onclick="setDateFromCalendar(27, 7, 2014);">27</td><td class="whiteCell" onmouseover="this.className = 'overCell';" onmouseout="this.className = 'whiteCell';" onclick="setDateFromCalendar(28, 7, 2014);">28</td><td class="whiteCell" onmouseover="this.className = 'overCell';" onmouseout="this.className = 'whiteCell';" onclick="setDateFromCalendar(29, 7, 2014);">29</td><td class="sundayCell" onmouseover="this.className = 'overCell';" onmouseout="this.className = 'sundayCell';" onclick="setDateFromCalendar(30, 7, 2014);">30</td><td class="sundayCell" onmouseover="this.className = 'overCell';" onmouseout="this.className = 'sundayCell';" onclick="setDateFromCalendar(31, 7, 2014);">31</td></tr><tr></tr></tbody></table></div><p class="current current_date" onclick="setTodayFromCalendar();"><span class="pseudo-link">сегодня</span></p></div></div>
	-->
	
	</body>
</html>