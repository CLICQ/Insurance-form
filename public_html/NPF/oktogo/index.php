<!DOCTYPE html>
<!-- saved from url=(0021)http://rsb.oktogo.ru/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Бронирование отелей со скидками только для держателей карт Банка Русский Стандарт</title>
         
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link href="http://rsb.oktogo.ru/Content/css/newAll/stylesNew?v=W4HR1mnSRlD1UH-vIVPpjCfAKGJ0DcXxIEl1gGfS3QY1" rel="stylesheet">

        <!--[if IE]><link href="/content/css/stylesnew/ie.css" type="text/css" rel="stylesheet" /><![endif]-->
        <!--[if lte IE 7]><link href="/content/css/stylesnew/ie7.css" type="text/css" rel="stylesheet" /><![endif]-->
        <!--[if IE 8]><link href="/content/css/stylesnew/ie8.css" type="text/css" rel="stylesheet" /><![endif]-->
    
        
        <script src="./Бронирование отелей со скидками только для держателей карт Банка Русский Стандарт_files/7750.js" async="" type="text/javascript"></script>
		<script async="" src="./Бронирование отелей со скидками только для держателей карт Банка Русский Стандарт_files/gtm.js"></script>
		<script async="" src="./Бронирование отелей со скидками только для держателей карт Банка Русский Стандарт_files/analytics.js"></script>
		<script type="text/javascript" async="" src="./Бронирование отелей со скидками только для держателей карт Банка Русский Стандарт_files/dc.js"></script>
		<script type="text/javascript" src="./Бронирование отелей со скидками только для держателей карт Банка Русский Стандарт_files/jquery-1.8.3.min.js"></script>

        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/cupertino/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="styles.css"/>
        

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
		
		//Валюта
		$CurrencyArrays = $stdClassObjectArray2["63665791-125E-46E7-878B-7E625EA62803"];
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
  "shengenCountry":["3C359A1A-F568-4AE5-A3DD-B8D226023040"],
  "shengenCountryRaw": "Hungary",
  "isOtherCountry": false,
  "otherCountry": "",
  "otherCountryRaw": "",
  "daysCount": 1,
  "daysCountByStore": "'.$daysCountByStore.'",
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
		//echo "<h2>Отправленый объект полиса</h2>";
		//echo "<div style='font-size:13px'>".$data_string_res."</div>";
		//echo "<h2>Возвращенный объект полиса</h2>";
		//echo "<div style='font-size:13px'>".$result3."</div><hr/>";
	
		preg_match('/"Premium"\s*:\s*([^,]+)/mi', $result3, $m);
		$Premium = $m[1];
		$Premium = str_replace('"', '', $Premium);
	}

	?>


    <div class="b-page">
        <div class="b-page-header">
            <div class="b-page-header-content b-wrapper">
                <!-- start custom header here -->
                <div class="b-line">    <a href="./Бронирование отелей со скидками только для держателей карт Банка Русский Стандарт_files/Бронирование отелей со скидками только для держателей карт Банка Русский Стандарт.htm"><div class="b-logo"></div></a>   <div class="b-logo-partner"></div></div><div class="b-line b-top-banner">    <a href="https://travel.rsb.ru/avia?utm_source=oktogo.ru&utm_medium=action&utm_campaign=Oktogo&pr=av" target="_blank">Перейти к покупке авиабилетов</a></div>
                <!-- end custom header here -->
                
            </div>
        </div>

        <div class="b-page-content" id="container">
            <div class="b-page-content-inner">
                





    <div class="b-breadcrumbs-wrapper b-breadcrumbs-index b-wrapper">
        <ul class="b-breadcrumbs">
                <li class="b-breadcrumbs_item breadcrumbs-item-current">Поиск</li>
                <li class="b-breadcrumbs_item breadcrumbs-item-disabled">Отели</li>
                <li class="b-breadcrumbs_item breadcrumbs-item-disabled">Бронирование</li>
                <li class="b-breadcrumbs_item breadcrumbs-item-disabled">Оплата</li>
                <li class="b-breadcrumbs_item breadcrumbs-item-disabled">Результат</li>
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
    <form class="b-form b-form-search-main -visor-no-click" method="post" id="frmSearch" name="frmSearch"  style="z-index: 100;">
        <input type="hidden" id="searchDestination" name="searchDestination">
        <input type="hidden" id="searchDestinationId" name="js-searchDestinationId">
        <input type="hidden" name="searchCheckInDate" id="searchCheckInDate">
        <input type="hidden" name="searchCheckOutDate" id="searchCheckOutDate">
        
     <div style="display:none;">   <div class="b-line">
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
		<label class="b-form-elem_label" style="font-size:14px;" for="dest">Какую страну планируете посетить?</label>
		<select name="CountryID" id="CountryID" class="b-form-elem_control" onchange="ShowUniqueOptions(this)" >
			<?foreach($CountriesArrays as $OneCountry){?>
				<option <?if($_POST["CountryID"]==$OneCountry[0]){echo "selected";}?> value="<?=$OneCountry[0]?>"><?=$OneCountry[2]?></option>
			<?}?>
		</select>
	</div>
	
	  
	  <div class="b-line">
			 <div class="b-inline b-form-elem elem-size-big elem-style-marked b-destination">
                <label class="b-form-elem_label" style="font-size:16px;" for="dest">Выберите тип полиса</label>
                <div class="b-form-elem_wrapper b-wrapper-autocomplete js-acContainer">
                    <!--<span class="watermark_container" style="display: inline-block; position: relative;">
						-->
						<!--<span class="watermark" style="position: absolute; display: block; font-family: Arial, Geneva, Helvetica, sans-serif; color: rgb(153, 153, 153); left: 14px; top: 0px; height: 40px; line-height: 40px; text-align: left; pointer-events: none;">Страну выберите из списка</span>
						
						<select name="groupOfProgram" id="PoliceType" class="b-form-elem_control">
							<option <?if($_POST["groupOfProgram"]=='odn'){echo "selected";}?> value="odn">Однократный</option>
							<option <?if($_POST["groupOfProgram"]=='mul'){echo "selected";}?> value="mul">Многократный</option>
						</select>-->
						
							<input <?if($_POST["groupOfProgram"]=='odn'){echo "checked";}?> type="radio" value="odn" name="groupOfProgram" id="groupOfProgram1" onclick="SelectTypeActions('odn');"><label for="groupOfProgram1" class="radio-item" style="font-size:14px;" >на одну поездку</label>
							<input <?if($_POST["groupOfProgram"]=='mul'){echo "checked";}?> type="radio" value="mul" name="groupOfProgram" id="groupOfProgram2" onclick="SelectTypeActions('mul');"><label for="groupOfProgram2" class="radio-item" style="font-size:14px;">многократный полис</label>
						
						<!--
						<input class="b-form-elem_control b-elem-destination inpIconInput js-dest ui-autocomplete-input" name="dest" maxlength="100" data-val="true" data-val-required="Введите пункт назначения" tabindex="1" type="text" title="Место или название отеля" autocomplete="off" data-jq-watermark="processed"></span><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
						-->
                   <!-- <a class="b-form-elem_validation-icon b-icon-close btnIconInput btnClose" href="http://rsb.oktogo.ru/#" style="display:none"></a>
                    <span class="b-form-elem_validation-icon b-icon-loading btnIconInput js-btnLoader" style="display:none"></span>
					
					<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-1" tabindex="0" style="z-index: 101; display: none;"></ul>
					-->
				</div>

			</div>
		</div>
	  
			<div class="b-inline b-dates for-one for-all">
				<label class="b-form-elem_label" style="font-size:16px;" for="CheckIn">Укажите срок действия полиса</label>
			</div>	 
				 
			<div class="b-inline for-one for-all"> 
				
				<div class="b-inline b-form-elem elem-size-big elem-style-marked">
                    <div class="b-form-elem_wrapper">
                       <!-- <input class="" tabindex="1" type="text" title="Дата заезда" readonly="">-->
					<div class="b-inline b-form-elem elem-size-big elem-style-marked">
					<label class="b-form-elem_label" style="font-size:14px; margin-top:15px; width:153px;" for="CheckIn">Дата начала</label>
				</div>	
				<input type="text" id="EffectiveDate" class="DatePicker b-form-elem_control b-elem-calendar js-checkOut" name="EffectiveDate" placeholder="гггг-мм-дд" readonly="readonly" value="<?=$_POST["EffectiveDate"]?>"  onclick="$('#EffectiveDate').datepicker('show');"/>
						
						<div class="pickadate__holder">
							<div class="pickadate__calendar--wrap">
							<div class="pickadate__calendar">
							<div class="pickadate__month--nav"><div class="pickadate__month--next" data-nav="1">→</div></div>
							<div class="pickadate__month--wrap"><div class="pickadate__month">Июль</div></div>
							<div class="pickadate__year--wrap"><div class="pickadate__year">2014</div></div>
							<table class="pickadate__calendar--table"><thead><tr><th class="pickadate__weekday">Пн</th><th class="pickadate__weekday">Вт</th><th class="pickadate__weekday">Ср</th><th class="pickadate__weekday">Чт</th><th class="pickadate__weekday">Пт</th><th class="pickadate__weekday">Сб</th><th class="pickadate__weekday">Вс</th></tr></thead>
							<tbody class="pickadate__calendar--body"><tr><td><div class="pickadate__day pickadate__day--outfocus pickadate__day--disabled" data-disabled="2014/5/30">30</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled" data-disabled="2014/6/1">1</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled" data-disabled="2014/6/2">2</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled" data-disabled="2014/6/3">3</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--today" data-date="2014/6/4">4</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--highlighted pickadate__day--selected" data-date="2014/6/5">5</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/6">6</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/7">7</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/8">8</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/9">9</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/10">10</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/11">11</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/12">12</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/13">13</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/14">14</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/15">15</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/16">16</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/17">17</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/18">18</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/19">19</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/20">20</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/21">21</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/22">22</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/23">23</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/24">24</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/25">25</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/26">26</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/27">27</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/28">28</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/29">29</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/30">30</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/31">31</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/1">1</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/2">2</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/3">3</div></td></tr><tr><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/4">4</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/5">5</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/6">6</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/7">7</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/8">8</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/9">9</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/10">10</div></td></tr></tbody></table></div></div></div>
							<input type="hidden" name="_submit" value="2014/07/05">
                    </div>
                </div>
			</div>
			
			
			<div class="b-inline b-dates">
               
			   <div class="for-one">
					   <div id="warning" style="color:red; display:none">
							Дата окончания должна быть больше даты начала
					</div>
					
					<div class="b-inline b-form-elem elem-size-big elem-style-marked">
						<div class="b-form-elem_wrapper">
						<div class="b-inline b-form-elem elem-size-big elem-style-marked">
							<label class="b-form-elem_label" style="font-size:14px;width:150px;margin-top:15px;" for="CheckOut">Дата окончания</label>
						</div>
							<!--<input class="b-form-elem_control b-elem-calendar js-checkOut" tabindex="1" type="text" title="Дата выезда" readonly=""><div class="pickadate__holder"><div class="pickadate__calendar--wrap"><div class="pickadate__calendar"><div class="pickadate__month--nav"><div class="pickadate__month--next" data-nav="1">→</div></div><div class="pickadate__month--wrap"><div class="pickadate__month">Июль</div></div><div class="pickadate__year--wrap"><div class="pickadate__year">2014</div></div><table class="pickadate__calendar--table"><thead><tr><th class="pickadate__weekday">Пн</th><th class="pickadate__weekday">Вт</th><th class="pickadate__weekday">Ср</th><th class="pickadate__weekday">Чт</th><th class="pickadate__weekday">Пт</th><th class="pickadate__weekday">Сб</th><th class="pickadate__weekday">Вс</th></tr></thead><tbody class="pickadate__calendar--body"><tr><td><div class="pickadate__day pickadate__day--outfocus pickadate__day--disabled" data-disabled="2014/5/30">30</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled" data-disabled="2014/6/1">1</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled" data-disabled="2014/6/2">2</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled" data-disabled="2014/6/3">3</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled pickadate__day--today" data-disabled="2014/6/4">4</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled" data-disabled="2014/6/5">5</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--highlighted pickadate__day--selected" data-date="2014/6/6">6</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/7">7</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/8">8</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/9">9</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/10">10</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/11">11</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/12">12</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/13">13</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/14">14</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/15">15</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/16">16</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/17">17</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/18">18</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/19">19</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/20">20</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/21">21</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/22">22</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/23">23</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/24">24</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/25">25</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/26">26</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/27">27</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/28">28</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/29">29</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/30">30</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/31">31</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/1">1</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/2">2</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/3">3</div></td></tr><tr><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/4">4</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/5">5</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/6">6</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/7">7</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/8">8</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/9">9</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/10">10</div></td></tr></tbody></table></div></div></div><input type="hidden" name="_submit" value="2014/07/06">
							-->
							<input type="text" name="ExpirationDate" id="ExpirationDate" class="DatePicker b-form-elem_control b-elem-calendar js-checkOut" readonly="readonly" placeholder="гггг-мм-дд" value="<?=$_POST["ExpirationDate"]?>" onclick="$('#ExpirationDate').datepicker('show');"/>
						</div>
					</div>
				</div>
				<div class="for-one for-all" style="padding-top:15px;">
					<div  class="b-inline b-form-elem b-adults elem-size-big elem-style-marked" >
								<div class="b-form-elem_label" style="font-size:14px;padding-top:15px;">Срок действия полиса:</div>
					</div>
					<div  class="b-inline b-form-elem b-adults elem-size-big elem-style-marked" >
								<div class="b-form-elem_wrapper" id="daysCountBlock">
									<?if($_POST["groupOfProgram"]=="odn"){?>
										<input style='background:#eaf2f3' name='daysCount' type='text' value='<?=$_POST["daysCount"]?>'/>
									<?}else{?>
										<select name="daysCount" id="daysCount" class="selector">
											<option <?if($_POST["daysCount"]=='15'){echo "selected";}?> value="15">15 дней</option>
											<option <?if($_POST["daysCount"]=='30'){echo "selected";}?> value="30">30 дней</option>
											<option <?if($_POST["daysCount"]=='60'){echo "selected";}?> value="60">60 дней</option>
											<option <?if($_POST["daysCount"]=='90'){echo "selected";}?> value="90">90 дней</option>
											<option <?if($_POST["daysCount"]=='180'){echo "selected";}?> value="180">180 дней</option>
											<option <?if($_POST["daysCount"]=='365'){echo "selected";}?> value="365">1 год</option>						
										</select>									
									<?}?>
									<!--<div class="selector" id="uniform-undefined"><span>2 взрослых</span><select class="b-form-elem_control js-uniform js-uniform-applied" data-bind="options: $root.Rooms.adultsOpt, optionsText: &#39;text&#39;, optionsValue: &#39;val&#39;, value: $data.adultsCount, event: { change: $root.Rooms.adultsChange }" style="opacity: 0;"><option value="1">1 взрослый</option><option value="2">2 взрослых</option><option value="3">3 взрослых</option><option value="4">4 взрослых</option><option value="5">5 взрослых</option><option value="6">6 взрослых</option></select></div>
									-->
								</div>
					</div>
				</div>
			</div>
			
			<div class="b-line for-one for-all">
			
				<label class="b-form-elem_label" style="font-size:16px;margin-top:30px;" for="dest">Выберите сумму страхового покрытия и валюту: </label>
				
				<div  class="b-inline b-form-elem b-adults elem-size-big elem-style-marked" title="Количество взрослых">
					<div class="b-form-elem_wrapper b-wrapper-autocomplete js-acContainer">
						<div id="radio" style="padding-top:15px;">
								<input <?if($_POST["InsuredSum"]=='15000'){echo "checked";}?> type="radio" id="InsuredSum1" name="InsuredSum" checked="checked" value="15000" /><label  for="InsuredSum1" class="radio-item" >15000</label>
								<input <?if($_POST["InsuredSum"]=='30000'){echo "checked";}?> type="radio" id="InsuredSum2" name="InsuredSum" value="30000"/><label for="InsuredSum2" class="radio-item" >30000</label>
								<input <?if($_POST["InsuredSum"]=='50000'){echo "checked";}?> type="radio" id="InsuredSum3" name="InsuredSum" value="50000"/><label for="InsuredSum3" class="radio-item" >50000</label>
								<input <?if($_POST["InsuredSum"]=='100000'){echo "checked";}?> type="radio" id="InsuredSum4" name="InsuredSum" value="100000"/><label for="InsuredSum4" class="radio-item" >100000</label>
							<span style="margin-right:10px">&nbsp;</span>
						</div>
					</div>
				</div>
				<div class="b-inline b-form-elem elem-size-big elem-style-marked b-destination">
					<select name="Currency" id="Currency" style="padding: 5px 0;" class="selector" >
							
								<?foreach($CurrencyArrays as $Key => $OneCurrency){?>
									<option <?if($_POST["Currency"]==$Key){echo "selected";}?> value="<?=$Key?>"><?=$OneCurrency[2]?></option>
								<?}?>
							
					</select>
				</div>
			</div>
		
		
		<div class="b-inline for-one for-all" >
                <div class="b-form-elem_label" style="font-size:16px;margin-top:30px; margin-bottom:10px;">Укажите количество путешественников и их возраст</div>            
                    
                   
                    
					<div class="b-inline b-form-elem b-children elem-size-big elem-style-marked" title="Количество детей">
                        <div class="b-form-elem_label" style="font-size:14px;margin-top:20px;width:250px;">Количество путешественников</div> 
					</div>
					<div class="b-inline b-form-elem b-children elem-size-big elem-style-marked" title="Количество детей">
						<div class="b-form-elem_wrapper">
                            <!--<div class="selector" id="uniform-undefined"><span> без детей</span><select class="b-form-elem_control js-uniform js-uniform-applied" data-bind="options: $root.Rooms.childsOpt, optionsText: &#39;text&#39;, optionsValue: &#39;val&#39;, value: $data.childrenAges().length, event: { change: $root.Rooms.childsChange }" style="opacity: 0;"><option value="0"> без детей</option><option value="1"> и 1 ребенок</option><option value="2"> и 2 детей</option><option value="3"> и 3 детей</option><option value="4"> и 4 детей</option></select></div>
							-->
							
							<select id="PeopleCount" name="PeopleCount" class="selector" style="padding: 5px 0;" >
								<option <?if($_POST["PeopleCount"]=='1'){echo "selected";}?> value="1">1</option>
								<option <?if($_POST["PeopleCount"]=='2'){echo "selected";}?> value="2">2</option>
								<option <?if($_POST["PeopleCount"]=='3'){echo "selected";}?> value="3">3</option>
								<option <?if($_POST["PeopleCount"]=='4'){echo "selected";}?> value="4">4</option>
								<option <?if($_POST["PeopleCount"]=='5'){echo "selected";}?> value="5">5</option>
							</select>
                        </div>
                    </div>
				</div>
		
		
		<div class="b-inline for-one for-all" style="margin-top:10px;">
					<div class="b-inline b-form-elem b-children elem-size-big elem-style-marked" title="Количество детей">
                        <div class="b-form-elem_label" style="font-size:14px;margin-top:20px;width:250px;">Возраст путешественников:</div>
					</div>	
					<div class="b-inline b-form-elem b-children elem-size-big elem-style-marked" title="Количество детей">
						<div class="b-form-elem_wrapper">
                            <!--<div class="selector" id="uniform-undefined"><span> без детей</span><select class="b-form-elem_control js-uniform js-uniform-applied" data-bind="options: $root.Rooms.childsOpt, optionsText: &#39;text&#39;, optionsValue: &#39;val&#39;, value: $data.childrenAges().length, event: { change: $root.Rooms.childsChange }" style="opacity: 0;"><option value="0"> без детей</option><option value="1"> и 1 ребенок</option><option value="2"> и 2 детей</option><option value="3"> и 3 детей</option><option value="4"> и 4 детей</option></select></div>
							-->
							
							<select id="AgeBetween" name="AgeBetween" class="selector">
								<option <?if($_POST["AgeBetween"]=='3'){echo "selected";}?> value="3">До 3х лет</option>
								<option <?if($_POST["AgeBetween"]=='9'){echo "selected";}?> value="9">3 – 16 лет</option>
								<option <?if($_POST["AgeBetween"]=='22'){echo "selected";}?> value="22">16 – 28 лет</option>
								<option <?if($_POST["AgeBetween"]=='49'){echo "selected";}?> value="49">28 – 70 лет</option>
								<option <?if($_POST["AgeBetween"]=='72'){echo "selected";}?> value="72">70 – 75 лет</option>
								<option <?if($_POST["AgeBetween"]=='77'){echo "selected";}?> value="77">75 – 80</option>
							</select>
                        </div>
                    </div>
					
                </div>
				
				<div id="AdvOptions" class="for-all for-one" style="color:white;margin: 20px 0; ">
					<?=$AdvancedParametersHtmlString?>
				</div>
				
				
				
		
		
		
    
	<div class="b-inline b-form-submit for-one for-all">
                <span class="b-button b-button-search button-size-big button-style-marked">
                    <input type="submit" name="CalculatePolice" value="Рассчитать полис" title="Найти" tabindex="4">
                </span>
	</div>
	<div class="CalculatorResult for-one for-all" style="color:white;margin: 20px 0; " >
					<?if($Premium){?>
					Стоимость полиса: <b><span style="font-size:30px"><?=$Premium?></span>&nbsp;<?=$currencyRaw?></b>
					<?}?>
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
		//$("#radio").buttonset();
		//$("input:submit").button();
		// $("#PoliceType").selectmenu();
		//  $("#Currency").selectmenu();
		// $("#PeopleCount").selectmenu();
		// $("#AgeBetween").selectmenu();
		 //$("#daysCount" ).selectmenu();
		/*$(".for-all").hide();
		$(".for-one").show();
		*/
		//alert($('#groupOfProgram1').attr('checked'));
		if ($('#groupOfProgram1').attr('checked')=="checked")
			{
				
				$(".for-all").hide();
				$(".for-one").show();
			}
		//alert($('#groupOfProgram2').attr('checked'));
		if ($('#groupOfProgram2').attr('checked')=="checked")
			{
				
				$(".for-one").hide();
				$(".for-all").show();
			}
		
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
	
	
    <div class="b-page-footer">
        <div class="b-wrapper b-page-footer_inner">
            <!-- start custom footer here -->
             <div class="b-two-columns b-columns-copyrights">
<div class="b-column-sidebar"><span class="b-inline b-copyright_title">© 2013</span><span class="b-inline"><span class="b-line b-copyright_title">Банк Русский Стандарт</span>      
 <span class="b-line b-copyright_notes">Генеральная лицензия Банка России № 2289<br>выдана бессрочно 19 июля 2001 года</span></span></div>    
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
	
		function ShowUniqueOptions(obj){
		//alert();
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
		
		function SelectTypeActions(type){
			
			var daysCountBlock = document.getElementById("daysCountBlock");
			daysCountBlock.innerHTML = '';
			
			if(type=="odn"){
				$('.for-all').hide();$('.for-one').show();
				daysCountBlock.innerHTML = "<input style='background:#eaf2f3' name='daysCount' type='text' value='1'/>";
			}else{
				$('.for-one').hide();$('.for-all').show();
				daysCountBlock.innerHTML = '<select name="daysCount" id="daysCount" class="selector"><option value="15">15 дней</option><option value="30">30 дней</option><option value="60">60 дней</option><option value="90">90 дней</option><option value="180">180 дней</option><option value="365">1 год</option></select>';
			}
			
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