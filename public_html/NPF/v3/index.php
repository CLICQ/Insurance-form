<? session_start(); ?>
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
		define ("VIRTU_URL","http://vfos.virtusystems.ru");

		function GetBirthday($Minus){
			$Today = "".date("m.d.y").""; 
			$TodayArray = explode('.', $Today);
			$YearPaste = date('Y') - $Minus; 
			$Bithday = $TodayArray[0]."-".$TodayArray[1]."-".$YearPaste;
			return $Bithday;
		}
		$CountryCaribWithoutRussia = array("США","Канада","Япония","Австралия",
											"Ангилья","Антигуа и Барбуда","Аруба","Архипелаг Тёркс и Кайкас",
											"Багамы","Барбадос","Британские Виргинские острова",
											"Виргинские острова", "Гаити", "Гренада", "Доминика", "Доминиканская Республика",
											"Каймановы острова","Куба","Мартиника","Монсеррат", "Нидерландские Антильские острова",
											"Пуэрто-Рико","Сен-Бартельми","Сен-Мартен","Сент-Китс и Невис","Сент-Люсия","Тринидад и Тобаго","Ямайка");
		$CountrySNG = array("Азербайджан","Армения","Белорусь","Казахстан","Таджикистан","Туркменистан","Узбекистан","Кыргызстан","Молдова","Украина"); //данные от Алены (скайп)
		
		

		
	

		$data = array("userName" => "RusStd", "password" => "3edc4RFV","createPersistentCookie"=>false);                                                                    
		$data_string = json_encode($data);                                                                                   	 
		$ch = curl_init(VIRTU_URL.'/Authentication_JSON_AppService.axd/Login');                                                                      
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
		$ch = curl_init(VIRTU_URL.'/Companies/RusSt/VZR_new_version/init.aspx?ProductID=c73d3867-9a5c-484a-8a6b-bf3e2db4dd99&PolicyID=&doc=d952f3ec-2388-45dc-a2ee-aab46a3faeb0&rnd=6402eb21-d7cf-48f3-aad3-63be7d548fa8');                                                                      
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
			'Referer:'.VIRTU_URL.'/Companies/RusSt/VZR_new_version/default.aspx?ProductID=c73d3867-9a5c-484a-8a6b-bf3e2db4dd99&PolicyID=&doc=d952f3ec-2388-45dc-a2ee-aab46a3faeb0',
			'User-Agent:Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.146 Safari/537.36'
			)                                                                       
		);
		$result2 = curl_exec($ch);
		preg_match('/initialData\s*=\s*([^;]+)/mi', $result2, $m);
		$Json1 = $m[1];
		$obj = json_decode($Json1);
		
		//'Cookie:ASP.NET_SessionId='.$_COOKIE["ASP.NET_SessionId"],
		//получить котировки
		// try 
		// {$ch = curl_init(VIRTU_URL.'/ClassifierFeature/GetCurrencyRates.cmd?id=5546496d-1c6f-8895-7915-c5b8670caeb5');                                                                      
		// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                                                                                       
		// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		// curl_setopt($ch, CURLOPT_HEADER, 1);	
		// curl_setopt($ch, CURLOPT_HTTPHEADER, array( 
			// 'Accept:*/*',
			// 'Accept-Encoding:gzip,deflate,sdch',
			// 'Accept-Language:ru-RU,ru;q=0.8,en-US;q=0.6,en;q=0.4',
			// 'Cache-Control:no-cache, no-store, must-revalidate',
			// 'Connection:keep-alive',
			// 'Content-Length:197',
			// 'Content-Type:application/json; charset=UTF-8',
			// 'Cookie:ASP.NET_SessionId=5q11gg45q0xgli45jhxbko45; .VFOS=39504676CE75CD6E375406AEA48F3DA95BB9B454C84D9E6A9F7655138AFBE9A51E44A377DE4E48428FAD530F9B2D233A59434065727B1C29BB420650D6F316D3467C44D22A16CD17A21511AC6EC89AE2E8AF4F5DA5967E33D3C6CD3501571209955C5552',
			// 'Host:vfos.virtusystems.ru',
			// 'Origin:http://vfos.virtusystems.ru',
			// 'Pragma:no-cache',
			// 'Referer:http://vfos.virtusystems.ru/Companies/RusSt/VZR_new_version/default.aspx?ProductID=c73d3867-9a5c-484a-8a6b-bf3e2db4dd99&PolicyID=&doc=d952f3ec-2388-45dc-a2ee-aab46a3faeb0',
			// 'User-Agent:Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.146 Safari/537.36'


			// )                                                                       
		// );
		// $result2 = curl_exec($ch);
		// preg_match('/initialData\s*=\s*([^;]+)/mi', $result2, $m);
		// $Json1 = $m[1];
		// $obj1 = json_decode($Json1);
		// }
		// catch (Exception e ){echo e->getMessage();}
		//echo "<pre>"; var_dump($result2); echo "</pre>";
		
		//............................................. Собираем массивы из полученного объекта
		//первый параметр ID как-то получить из вирту
		//Получается в ответ на сохранение полиса в системе вирту
		
		//Дата начала поездки
		$EffectiveDate = $_POST["EffectiveDate"];
		
		
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
//echo 'isshengen='.$isShengen;
				//функция должна определять отображать данную доп.опцию или нет
		//параметры: страна, тип полиса, айди элемента
		function GetDisplay($Country, $Police, $divID, $isParam )
		{
		global $CountrySNG;
		global $CountryCaribWithoutRussia;
		global $isShengen;
		
		if( $Police == "mul" ) // Если выбран многократный полис
				{
					//if ( $isShengen == 'true' ) //если шенген
					if ( $_POST['daysCount'] != '365' ) //если мультишенген
						{
						
							$Param = array('basParamTrans');
							$isVisibleRadio15 = 'style="display:none"';
							$isVisibleRadio50 = 'style="display:none"';
							$isVisibleRadio100 = 'style="display:none"';
						}
					else //годовые
						{
							if( in_array($Country, $CountryCaribWithoutRussia) || $Country == "Россия" ) 
							{
								$Param = array('basParamTrans', 'basParamBag', 'basParamCivil');
								$isVisibleRadio15 = 'style="display:none"';
								if ($Country != "Россия") $isVisibleRadio30 = 'style="display:none"';
								
							}
							else 
							{
								$Param = array('basParamTrans', 'advParamBag', 'advParamCivil');
								
								//добавим дополнительный атрибут, который будет содержать value для radio, чтобы при нажатии на чекбокс знать какой радио-сумму включать
								$Attr = "currency-value-on='50000' currency-value-off='30000' is-group='1'";
							}
						}
				}
			else
				{ // Значит выбран однократный
					if ( $Country == "Россия" )
						{
						//echo "<pre>"; echo 'odnRussia'; echo "</pre>";
							$Param = array('advParamTrans', 'advParamCancel', 'advParamBag', 'advParamCivil');
						
							//добавим дополнительный атрибут, который будет содержать value для radio, чтобы при нажатии на чекбокс знать какой радио-сумму включать
							$Attr = "currency-value-on='50000' currency-value-off='15000' is-group='1'";
						}
					else if ( in_array($Country, $CountrySNG) )
							{
							//echo "<pre>"; echo 'odnSNG'; echo "</pre>";
								//отобразить дополнительные параметры
								$Param = array('advParamTrans');
								$Param2 = array('advParamCancel', 'advParamBag', 'advParamCivil');

								//добавим дополнительный атрибут, который будет содержать value для radio, чтобы при нажатии на чекбокс знать какой радио-сумму включать
								$Attr = "currency-value-on='30000' currency-value-off='15000' is-group ='0'";
								//добавим дополнительный атрибут, который будет содержать value для radio, чтобы при нажатии на чекбокс знать какой радио-сумму включать
								$Attr2 = "currency-value-on='50000' currency-value-off='30000' is-group='1'";
								
							}
								else if( in_array($Country, $CountryCaribWithoutRussia))
									{
										//echo "<pre>"; echo 'odnCarib'; echo "</pre>";
										//отобразить базовые параметры (параметр медицинские расходы отображается всегда)
										$Param = array('basParamTrans', 'basParamCancel', 'basParamBag', 'basParamCivil');
										//$Attr = "at='890'";
										$isVisibleRadio15 = 'style="display:none"';
										$isVisibleRadio30 = 'style="display:none"';
									}
									else
										{
										//echo "<pre>"; echo 'odnOther'; echo "</pre>";
										//отобразить базовые параметры (параметр медицинские расходы отображается всегда)
										$Param = array('basParamTrans', 'advParamCancel', 'advParamBag', 'advParamCivil');
										//добавим дополнительный атрибут, который будет содержать value для radio, чтобы при нажатии на чекбокс знать какой радио-сумму включать
										$Attr = "currency-value-on='50000' currency-value-off='30000' is-group='1'";
										$isVisibleRadio15 = 'style="display:none"';
										}
				}
		/*	echo $Country.'<br/>';
			echo $Police.'<br/>';
		foreach ($Param as $value)
		{echo $value.'<br/>';}
		foreach ($Param2 as $value)
		{echo $value.'<br/>';}
		echo $Attr;
		*/
		
		if ( in_array($divID, $Param) ) 
			{
				//echo ($isParam == '1') ? "style='display:block' " : $Attr ;
				switch ($isParam)
					{ 
						case '0': //для input
								if (isset($Attr)) echo $Attr ;
								break;
						case '1': //для div
								echo " style='display:block' ";
								break;
					}
			}
			else if (in_array($divID, $Param2))
				{
					switch ($isParam)
					{
						case '0': 
							if (isset($Attr2)) echo $Attr2 ;
							break;
						case '1':
							echo " style='display:block' ";
							break;
					}
				}
				else 
					{ if ($isParam == '1') {echo "style='display:none'";}}
					
			
		}
		
		function isVisibleSum($Country, $inpSum )
		{
		global $CountrySNG;
		global $CountryCaribWithoutRussia;
		global $isShengen;
		
		if( $_POST["groupOfProgram"] == "mul" ) // Если выбран многократный полис
				{
					//if ( $isShengen == 'true' ) //если шенген
					if ( $_POST['daysCount'] != '365' ) //если мультишенген
						{
							$Param = array('InsuredSum1','InsuredSum3','InsuredSum4');
						}
					else
						{
							$Param = array('InsuredSum1');
							if( in_array($Country, $CountryCaribWithoutRussia) || $Country == "Россия" ) 
							{
								
								if ($Country != "Россия") $Param = array('InsuredSum1','InsuredSum2');
							}
							
						}
				}
			else
				{ // Значит выбран однократный
					if ( $Country == "Россия" )
						{
						}
					else if ( in_array($Country, $CountrySNG) )
							{
							}
								else if( in_array($Country, $CountryCaribWithoutRussia))
									{
										$Param = array('InsuredSum1','InsuredSum2');
									}
									else
										{
										$Param = array('InsuredSum1');
										}
				}

			if ( in_array($inpSum, $Param) ) 
			{
				echo " style='display:none;' ";
			}
		
			
		}
		
		
		// $ExpirationDate = $_POST["ExpirationDate"];
		//В зависимости от заполнения  поля groupOfProgram
		//Краткосрочные  - «Дата окончания» Рассчитывается как «дата начала» + «Кол-во дней поездки». 
		//Если массив  shengenCountry  не пустой поле рассчитывается как: «Дата начала» + «Кол-во дней поездки» + 15 дней.
		// Годовые «Дата окончания» =«дата начала» + 1 год – 1 день.  
		// «Мульти Шенген».  «Дата окончания» =«дата начала» + 1 год – 1 день.  
		if ($_POST["groupOfProgram"]=="odn") //Краткосрочные
			{	
				$date = date_create($_POST["EffectiveDate"]);
				date_add($date, date_interval_create_from_date_string($_POST["daysCount"].' day'));
				
				if ($isShengen == 'true')
					{date_add($date, date_interval_create_from_date_string('15 day'));}
						
				$ExpirationDate = date_format($date, 'Y-m-d');
			}
		else //годовые и мультишенген
			{  
				$date = date_create($_POST["EffectiveDate"]);
				date_add($date, date_interval_create_from_date_string('1 year'));
				date_add($date, date_interval_create_from_date_string('-1 day'));
				$ExpirationDate = date_format($date, 'Y-m-d');
			}

		// Массив с количеством человек и их параметрами
		
		//исправить ведь я переделалала возраст путешественников
		
		//$Bithday = GetBirthday($_POST["AgeBetween"]);
		$ArrPeopleAge = array('3','9','22','49','72','77');
		
		//цикл перебора всех возрастов
		foreach ($ArrPeopleAge as $value)
		{
			$i = 1;
			echo $_POST["AgeBetween".$value];
			
			$n = (int)$_POST["AgeBetween".$value];
			while ($i <= $n)
			{
				$Bithday = GetBirthday($value);
				$GridInsuredPerson.= '{"PersonID": '.$i.',"Bithday": "'.$Bithday.'","Surname": "GodMir","Name": "Vso","National": "РФ","CountryNational": ""},';
				$i++;
			}
			
		}
		
		/*$PeopleCount = (int)$_POST["PeopleCount"];
		$i = 1;
		while ($i <= $PeopleCount){
			$GridInsuredPerson.= '{"PersonID": '.$i.',"Bithday": "'.$Bithday.'","Surname": "GodMir","Name": "Vso","National": "РФ","CountryNational": ""},';
			$i++;  
		}*/
		
		//Массив данных по Застрахованным. Должен быть хотя бы один Застрахованный в списке. См. описание объекта Insured.
		$GridInsuredPerson = substr($GridInsuredPerson, 0, strlen($GridInsuredPerson)-1);
		
		//ФИО Страхователя  одной строкой
		$InsuredSum = $_POST["InsuredSum"];	
	
		// Группы программ
		$groupOfProgramArray = $stdClassObjectArray2["BF005771-6421-47D8-88C3-18E3F2B35DCB"];
		// $groupOfProgramArray[0][0] - Краткосрочные
		// $groupOfProgramArray[1][0] - Годовые
		// $groupOfProgramArray[2][0] - Мульти Шенген
		if($_POST["groupOfProgram"]=="odn"){
			$groupOfProgram = strtoupper($groupOfProgramArray[0][0]);
			$groupOfProgramRaw = $groupOfProgramArray[0][2];	
		}elseif($_POST["groupOfProgram"]=="mul" && $_POST["daysCount"] == '365') //годовые
			{
				$groupOfProgram = strtoupper($groupOfProgramArray[1][0]);
				$groupOfProgramRaw = $groupOfProgramArray[1][2];	
			}
			else	//мультишенген
				{
					$groupOfProgram = strtoupper($groupOfProgramArray[2][0]); 
					$groupOfProgramRaw = $groupOfProgramArray[2][2];
					
					/*$daysCountByStoreArrays = $stdClassObjectArray2["1BC3916D-FF09-4783-B7A6-20E18B02BF53"];
					$daysCountByStore = "";
					foreach($daysCountByStoreArrays as $OneDaysCountByStore)
					{
						if($OneDaysCountByStore[2]==$_POST["daysCount"]){
							$daysCountByStore = strtoupper($OneDaysCountByStore[0]);
						}
					}
*/					
				}
		
			// // Группы программ
		// $groupOfProgramArray = $stdClassObjectArray2["BF005771-6421-47D8-88C3-18E3F2B35DCB"];
		// // $groupOfProgramArray[0][0] - Краткосрочные
		// // $groupOfProgramArray[1][0] - Годовые
		// // $groupOfProgramArray[2][0] - Мульти Шенген
		// if($_POST["groupOfProgram"]=="odn"){
			// $groupOfProgram = strtoupper($groupOfProgramArray[0][0]);
			// $groupOfProgramRaw = $groupOfProgramArray[0][2];	
		// }elseif($_POST["groupOfProgram"]=="mul"){
			// $groupOfProgram = strtoupper($groupOfProgramArray[2][0]);
			// $groupOfProgramRaw = $groupOfProgramArray[2][2];	
		// }
		
		// //Заносится в  daysCountByStore если значение groupOfProgram = «Мульти шенген»
		// //Заносится в daysCount если значение groupOfProgram = краткосрочный

		 $daysCount = $_POST["daysCount"];
		 if($daysCount=="365")//годовые
		 {
			 $groupOfProgram = strtoupper($groupOfProgramArray[1][0]); 
			 $groupOfProgramRaw = $groupOfProgramArray[1][2];			
		 }
		 else //
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
		//if($groupOfProgram == strtoupper($groupOfProgramArray[2][0])){//если выбран Мульти-Шенген
		if($isShengen == 'true'){//если выбран Мульти-Шенген
			$currency = strtoupper("43B13C6D-EEAF-4F35-A990-4236DCDAB212"); // то вылюта EURO
			$currencyRaw = "ЕВРО";
		}else{
			$currency = strtoupper($CurrencyArrays[$_POST["Currency"]][0]);
			$currencyRaw = $CurrencyArrays[$_POST["Currency"]][2];		
		}		
		
		
		
		// Дополнительные параметры страхования
		if($_POST["amSport"]){$amSport='true';$amSportChecked='checked';}else{$amSport='false';$amSportChecked='';}
		//чекбокс отмені поездки
		if($_POST["inpAdvParamCancel"]){$CancelTravel='true';}
			else {$CancelTravel='false';}
		
		//Территория страхования + Подставляем "Дополнительные параметры страхования"
		$insuranceTerritoriesArrays = $stdClassObjectArray2["38AC4CB9-335F-443E-BB00-E99E10A423B9"];
		// $insuranceTerritoriesArrays[0][0] - T-1
		// $insuranceTerritoriesArrays[2][0] - T-2
		// $insuranceTerritoriesArrays[4][0] - T-3 
		// $insuranceTerritoriesArrays[6][0] - T-4
		// $insuranceTerritoriesArrays[8][0] - T-5
		// $insuranceTerritoriesArrays[9][0] - T-6 (США, Канада, Япония,Австралия, страны Карибского бассейна)
		
		//программы страхования
		//$stdClassObjectArray2["208E0BD1-EC3C-4BB6-9938-8412463D4EE7"]
		
		//4e0a11c6-4f62-4997-aade-d26080ba9ce0 [0][0] -  ТС-1
		//e557279e-bca8-418a-a517-109e959d0296 [1][0] -  ТС-2
		//da42e088-75fb-414f-afaa-83013511a2d6 [2][0] -  ТС-3
		//623c8793-2ac3-4b98-b8c8-3cbad017207b [3][0] -  ТС-4
		//ab5735b2-4642-4e66-b665-53980cc62e0b [4][0] -  ТС-5
		//bd7f8979-fbb4-48d0-9649-3ae136afc22c [5][0] -  АТС
		//c1d143c5-ec15-4d53-a534-a9a527d8d1ce [6][0] -  ВТС-3
		//cb8ae870-4f68-42af-8bc4-d4d5e19dbc16 [7][0] -  ВТС-5
		//f1d7c233-b22c-48ad-a4e6-0150ed3c04aa [8][0] -  МТС-1
		//69c47bc6-33cc-41a5-82ab-8f9183605542 [9][0] -  МТС-2
		//9ec0e893-33e0-475f-aba8-97dee18140b4 [10][0] -  МТС-3
		//6f99c8de-dc38-4e47-aa7b-6f9831e0a4b8 [11][0] -  МТС-4
		//60b75387-2e4a-4f72-97d5-b1e247fb7ad5 [12][0] -  MTC-5
		
		//проставляем территории страхования
		foreach($CountriesArrays as $OneCountry)
		{
			if(strtoupper($OneCountry[0]) == $CountryID)
			{
				//$SelectedCountryName = $OneCountry[4];
				$SelectedCountryName = $OneCountry[2];
				
				// Проверяем, если это одна из многократных программ (год, мультишенген)
				//if($groupOfProgram == strtoupper($groupOfProgramArray[1][0]) OR $groupOfProgram == strtoupper($groupOfProgramArray[2][0])) 
				if( $_POST["groupOfProgram"] == "mul" )  
				{ 
					if( in_array($SelectedCountryName, $CountryCaribWithoutRussia) OR $SelectedCountryName == "Россия"  )
							{
								$insuranceTerritory = strtoupper($insuranceTerritoriesArrays[9][0]);//Т6
								$insuranceTerritoryRaw = 'T6';//$insuranceTerritoriesArrays[9][1];
								$SubProgInsur = strtoupper("cb8ae870-4f68-42af-8bc4-d4d5e19dbc16");//ВТС-5
								$SubProgInsurRaw = 'VTS-5';
							}
					//другие страны
					else
						{ //
									$insuranceTerritory = strtoupper($insuranceTerritoriesArrays[0][0]); // Т1 // Во всех остальных случаях, если условия ниже не выполняются
									$insuranceTerritoryRaw = 'T1';//$insuranceTerritoriesArrays[0][1];
									if ($daysCount == '15' || $daysCount == '30' || $daysCount == '60' || $daysCount == '90' || $daysCount == '180')
										{
											$SubProgInsur = strtoupper("9ec0e893-33e0-475f-aba8-97dee18140b4");//MТС-3
											$SubProgInsurRaw = 'MTS-3';
										}
									else //365
										{
											$SubProgInsur = strtoupper("cb8ae870-4f68-42af-8bc4-d4d5e19dbc16");//ВТС-5
											$SubProgInsurRaw = 'VTS-5';
										}
									/*if ($_POST["basParamTrans"] && ($daysCount == '15' || $daysCount == '30' || $daysCount == '60' || $daysCount == '90' || $daysCount == '180'))
										{
											$SubProgInsur = strtoupper("60b75387-2e4a-4f72-97d5-b1e247fb7ad5");//MТС-5
											$SubProgInsurRaw = 'MTS-5';
										}*/
									
								
						}
				}
				else // Значит это однократная программа
				{ 
					if( $SelectedCountryName == "Россия" )
						{
							$insuranceTerritory = strtoupper($insuranceTerritoriesArrays[4][0]); //T3
							$insuranceTerritoryRaw = 'T3';//$insuranceTerritoriesArrays[4][1];
							if ( $_POST["InsuredSum"] == '15000' || $_POST["InsuredSum"] == '30000')
								{
									$SubProgInsur = strtoupper("4e0a11c6-4f62-4997-aade-d26080ba9ce0");//ТС-1
									$SubProgInsurRaw = 'TS-1';
								}	
							else 
								{
									$SubProgInsur = strtoupper("ab5735b2-4642-4e66-b665-53980cc62e0b");//ТС-5
									$SubProgInsurRaw = 'TS-5';
								}
						} 
					else if( in_array($SelectedCountryName, $CountrySNG) )
							{
								$insuranceTerritory = strtoupper($insuranceTerritoriesArrays[6][0]); //T4
								$insuranceTerritoryRaw = 'T4';//$insuranceTerritoriesArrays[6][1]; //T4
								if (	 ($_POST["InsuredSum"] == '15000' || $_POST["InsuredSum"] == '30000') 
									&&   ( !$_POST["inpAdvParamTrans"] && !$_POST['inpAdvParamCancel']) ) //не один чекбокс не включен (указан только cancel потому что остальные вкл вместе с ним)
									{
										$SubProgInsur = strtoupper("4e0a11c6-4f62-4997-aade-d26080ba9ce0");//ТС-1
										$SubProgInsurRaw = 'TS-1';
									}
								else if ( ($_POST["InsuredSum"] == '30000' || $_POST["InsuredSum"] == '50000' )//|| $_POST["InsuredSum"] == '100000'
										&& ( $_POST["inpAdvParamTrans"] && !$_POST['inpAdvParamCancel'] ))
										{
											$SubProgInsur = strtoupper("e557279e-bca8-418a-a517-109e959d0296");//ТС-2
											$SubProgInsurRaw = 'TS-2';
										}
									else if ( ( $_POST["InsuredSum"] == '50000' || $_POST["InsuredSum"] == '100000')
										&& ( $_POST["inpAdvParamTrans"] && $_POST['inpAdvParamCancel'] ))
										{
											$SubProgInsur = strtoupper("ab5735b2-4642-4e66-b665-53980cc62e0b");//ТС-5
											$SubProgInsurRaw = 'TS-5';
										}
							}
						else if( in_array($SelectedCountryName , $CountryCaribWithoutRussia) )
								{
									$insuranceTerritory = strtoupper($insuranceTerritoriesArrays[2][0]); //T2
									$insuranceTerritoryRaw = 'T2';//$insuranceTerritoriesArrays[2][1]; //T2
									$SubProgInsur = strtoupper("ab5735b2-4642-4e66-b665-53980cc62e0b");//ТС-5
									$SubProgInsurRaw = 'TS-5';
								}
							else
								{
									$insuranceTerritory = strtoupper($insuranceTerritoriesArrays[0][0]); //T1
									$insuranceTerritoryRaw = 'T1';//$insuranceTerritoriesArrays[0][1]
									if ( $_POST["InsuredSum"] == '30000' )
										{
											$SubProgInsur = strtoupper("e557279e-bca8-418a-a517-109e959d0296");//ТС-2
											$SubProgInsurRaw = 'TS-2';
										}
									else 
										{
											$SubProgInsur = strtoupper("ab5735b2-4642-4e66-b665-53980cc62e0b");//ТС-5
											$SubProgInsurRaw = 'TS-5';
										}
								}
				}
			}
		}
		
		//Программы страхования
		//$VirtuProgramArray = $stdClassObjectArray2["208E0BD1-EC3C-4BB6-9938-8412463D4EE7"];
		//echo "<pre>"; print_r($VirtuProgramArray); echo "</pre>";
		//.....................
		
		// ВРЕМЕННО
		/*if($groupOfProgram == strtoupper($groupOfProgramArray[1][0]) OR $groupOfProgram == strtoupper($groupOfProgramArray[2][0])) 
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
		*/
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
		
		//..................................................................................... 
		

	//сохраним все переменные в сессию
	$_SESSION['amSport']=$amSport;
	$_SESSION['CancelTravel']=$CancelTravel;
	$_SESSION['currency']=$currency;
	$_SESSION['currencyRaw']=$currencyRaw;
	$_SESSION['daysCount']=$daysCount;
	$_SESSION['daysCountByStore']=$daysCountByStore;
	$_SESSION['EffectiveDate']=$EffectiveDate;
	$_SESSION['ExpirationDate']=$ExpirationDate;
	$_SESSION['PeopleCount']=$_POST["PeopleCount"];
	$_SESSION['GridInsuredPerson']=$GridInsuredPerson;//Массив данных по Застрахованным. Должен быть хотя бы один Застрахованный в списке. См. описание объекта Insured.
	$_SESSION['groupOfProgram']=$groupOfProgram;
	$_SESSION['groupOfProgramRaw']=$groupOfProgramRaw;
	$_SESSION['insuranceTerritory']=$insuranceTerritory;
	$_SESSION['insuranceTerritoryRaw']=$insuranceTerritoryRaw;
	$_SESSION['InsuredSum']=$InsuredSum;
	$_SESSION['isOtherCountry']=$isOtherCountry;
	$_SESSION['isShengen']=$isShengen;
	$_SESSION['otherCountry']=$otherCountry;
	$_SESSION['otherCountryRaw']=$otherCountryRaw;
	$_SESSION['shengenCountry']=$shengenCountry;
	$_SESSION['shengenCountryRaw']=$shengenCountryRaw;
	$_SESSION['SubProgInsur']=$SubProgInsur;
	$_SESSION['SubProgInsurRaw']=$SubProgInsurRaw;
	
	//"BreakTravel" это риск "Прерывания поездки"  всегда  false
	//CancelTravel" это  риск "Отмена поезки" он false или true  в зависимости от чекбоксов , если отмечено "отмена поездки ",то  true
	
	if(isset($_POST["CalculatePolice"]))
	{
		$data_string_res = '{"Policy":{
			"AcceptationDate": "2014-07-10",
			"AddInsSum": 3000,
			"AmountCurrencyCode": "",
			"AmountCurrencyName": "",
			"amSport": '.$amSport.',
			"BreakTravel": false,
			"CancelTravel": '.$CancelTravel.',
			"CoursesOfCurrency": [],
			"CreatorName": "ТревелРСБ",
			"CreatorUser": "Travel_SRB",
			"currency": "'.$currency.'",
			"currencyRaw": "'.$currencyRaw.'",
			"daysCount": '.$daysCount.',
			"daysCountByStore": "'.$daysCountByStore.'",
			"daysCountByStoreRaw": "",
			"DocumentDate": "2014-07-10",
			"DocumentStatusID": "0C9468DD-F53C-4962-8B0B-93BF28ABA6A9",
			"EffectiveDate": "'.$EffectiveDate.'",
			"email": "ewq@fd.rt",
			"ExpirationDate": "'.$ExpirationDate.'",
			"FilialName": null,
			"GridInsuredPerson": ['.$GridInsuredPerson.'],
			"groupOfProgram": "'.$groupOfProgram.'",
			"groupOfProgramRaw": "'.$groupOfProgramRaw.'",
			"ID": "813F05F2-17FB-4FA2-9BDA-17446421A5EF",
			"InsRiskPrem": "",
			"insuranceProgram": "",
			"insuranceProgramRaw": "",
			"insuranceTerritory": "'.$insuranceTerritory.'",
			"insuranceTerritoryRaw": "'.$insuranceTerritoryRaw.'",
			"InsuredName": "ГодоваяМИР Все ",
			"InsuredSum": "'.$InsuredSum.'",
			"InsurerRepresentId": "eb15575b-2deb-4c14-a043-2264a35ea1ae",
			"InsurerRepresentName": "ТревелРСБ",
			"isOtherCountry": '.$isOtherCountry.',
			"isShengen": '.$isShengen.',
			"NUMBAR": "100000208",
			"NUMBER": "100000208",
			"otherCountry": ["'.$otherCountry.'"],
			"otherCountryRaw": "'.$otherCountryRaw.'",
			"phone": "31234321143",
			"Premium": "",
			"ProductID": "C73D3867-9A5C-484A-8A6B-BF3E2DB4DD99",
			"ProductName": "ВЗР (Русский стандарт)",
			"RBithDay": "1990-11-28",
			"RdaysCount": 0,
			"RdaysCountByStore": 0,
			"REffectiveDate": "",
			"ResInsPrem": "0",
			"RExpirationDate": "",
			"RGroupPr": "E3B922F1-9A2D-4397-9E34-21D14F946258",
			"RGroupPrRaw": "",
			"RInsuranceTerritory": "",
			"RInsuranceTerritoryRaw": "",
			"RLastname": "",
			"RName": "Все",
			"ROtherCountry": "",
			"ROtherCountryRaw": "",
			"RShengenCountry": "",
			"RSurname": "ГодоваяМИР",
			"Rtest": "",
			"SallerDivision": "TravelRSB",
			"SallerDivisionID": "bc942cb0-7c25-4c64-ae8b-8211f3be6fcf",
			"SERIAL": "TRS",
			"shengenCountry":["'.$shengenCountry.'"],
			"shengenCountryRaw": "'.$shengenCountryRaw.'",
			"StatusID": "0C9468DD-F53C-4962-8B0B-93BF28ABA6A9",
			"StatusName": "Действующий",
			"StringPremium": "126.00 USD/4293.55 RUR",
			"SubProgInsur": "'.$SubProgInsur.'",
			"SubProgInsurRaw": "'.$SubProgInsurRaw.'",
			"SumInsuredCurrencyCode": "",
			"TelAssist": "+7 (495) 989-11-20",
			"url": "http://vfos.virtusystems.ru/Companies/RusSt/VZR_new_version/default.aspx?ProductID=C73D3867-9A5C-484A-8A6B-BF3E2DB4DD99&PolicyID=813F05F2-17FB-4FA2-9BDA-17446421A5EF"
		}}';
		
		//расшифровка полей
		/*$data_string_res = '{"Policy":{
			"AcceptationDate": "2014-07-10", 	//Дата акцептации, не обязательное поле
			"AddInsSum": 3000, 					//Сумма по доп. рискам
			"AmountCurrencyCode": "", //
			"AmountCurrencyName": "",
			"amSport": '.$amSport.',			//Занятие любительским спортом	Если отмечен чекбокс «Любительский спорт»
			"BreakTravel": false, 				/обяз/Прерывания поездки"  всегда  false
			"CancelTravel": '.$CancelTravel.',	/обяз/риск "Отмена поезки" он false или true  в зависимости от чекбоксов , если отмечено "отмена поездки ",то  true
			"CoursesOfCurrency": [],			//Массив котировок
			"CreatorName": "Rus Std",			/обяз/Пользователь, создавший полис //обещала Алена
			"CreatorUser": "RusStd",			/обяз/Логин пользователя, создавшего полис //обещала Алена
			"currency": "'.$currency.'",		/обяз/Ид валюты
			"currencyRaw": "'.$currencyRaw.'",	//названия аналогичного поля
			"daysCount": '.$daysCount.',		//Кол-во дней по программа Краткосрочная, Годовая
			"daysCountByStore": "'.$daysCountByStore.'", //Кол-во дней по программе Мультишенген
			"daysCountByStoreRaw": "",			//
			"DocumentDate": "2014-07-10",		//Дата заключения договора в формате YYYY-MM-DD
			"DocumentStatusID": "0C9468DD-F53C-4962-8B0B-93BF28ABA6A9",//
			"EffectiveDate": "'.$EffectiveDate.'",	/обяз/Дата начала срока страхования в формате YYYY-MM-DD
			"email": "ewq@fd.rt",				//E-mail страхователя
			"ExpirationDate": "'.$ExpirationDate.'",/обяз/Дата окончания срока страхования в формате YYYY-MM-DD
			"FilialName": null,					//
			"GridInsuredPerson": ['.$GridInsuredPerson.'],	/обяз/Массив данных по Застрахованным. Должен быть хотя бы один Застрахованный в списке. См. описание объекта Insured.
			"groupOfProgram": "'.$groupOfProgram.'",	//Ид группы программ
			"groupOfProgramRaw": "'.$groupOfProgramRaw.'",
			"ID": "813F05F2-17FB-4FA2-9BDA-17446421A5EF", 	//ID полиса в системе Virtu FrontOffice
			"InsRiskPrem": "",					//Сумма страховой премии по доп. рискам
			"insuranceProgram": "",				//
			"insuranceProgramRaw": "",
			"insuranceTerritory": "'.$insuranceTerritory.'",	//Ид территории страхования
			"insuranceTerritoryRaw": "",	
			"InsuredName": "ГодоваяМИР Все ",	//ФИО Страхователя  одной строкой
			"InsuredSum": "'.$InsuredSum.'",	Сумма страховой премии
			"InsurerRepresentId": "85360167-1ac7-4f0f-be20-a86b36c166e0", //ИД страховщика
			"InsurerRepresentName": "Rus Std",	//Страховщик
			"isOtherCountry": '.$isOtherCountry.',	/обяз/Отражает, выбрана ли любая из стран, не входящих в Шенген
			"isShengen": '.$isShengen.',		/обяз/Отражает, выбрана ли любая из стран Шенгенского союза, либо просто территория Шенген
			"NUMBAR": "100000208",				//Номер полиса. Генерируется при акцептации полиса.
			"NUMBER": "100000208",				//Номер полиса. Генерируется при акцептации полиса.
			"otherCountry": ["'.$otherCountry.'"], //Массив ИД выбранных стран, не входящих в Шенген
			"otherCountryRaw": "'.$otherCountryRaw.'", //
			"phone": "31234321143",				//Телефон страхователя
			"Premium": "",						//Страховая премия
			"ProductID": "C73D3867-9A5C-484A-8A6B-BF3E2DB4DD99",	/обяз/Идентификатор продукта
			"ProductName": "ВЗР (Русский стандарт)",	//Название продукта
			"RBithDay": "1990-11-28",			/обяз/Дата рождения страхователя
			"RdaysCount": 0,					//
			"RdaysCountByStore": 0,				
			"REffectiveDate": "",				
			"ResInsPrem": "0",					//Сумма общей страховой премии (осн. + доп.)
			"RExpirationDate": "",
			"RGroupPr": "E3B922F1-9A2D-4397-9E34-21D14F946258",
			"RGroupPrRaw": "",
			"RInsuranceTerritory": "",
			"RInsuranceTerritoryRaw": "",
			"RLastname": "",					//Отчество страхователя кириллицей
			"RName": "Все",						//Имя  страхователя кириллицей
			"ROtherCountry": "",
			"ROtherCountryRaw": "",
			"RShengenCountry": "",
			"RSurname": "ГодоваяМИР",			//Фамилия страхователя кириллицей
			"Rtest": "",
			"SallerDivision": "ХХХ",
			"SallerDivisionID": "0c6c97db-ebe9-4230-8153-7f51a57358ed",
			"SERIAL": "TRS",					//Серия полиса
			"shengenCountry":["'.$shengenCountry.'"],	//Массив ИД выбранных стран, входящих в Шенген
			"shengenCountryRaw": "'.$shengenCountryRaw.'",
			"StatusID": "0C9468DD-F53C-4962-8B0B-93BF28ABA6A9",
			"StatusName": "Действующий",
			"StringPremium": "126.00 USD/4293.55 RUR",	//Строковое выражение премии в рублях\ в валюте
			"SubProgInsur": "'.$SubProgInsur.'",		//ИД программы страхования
			"SubProgInsurRaw": "",
			"SumInsuredCurrencyCode": "",				//
			"TelAssist": "+7 (495) 989-11-20",			//Тел. ассистанстской компании 
			"url": "http://vfos.virtusystems.ru/Companies/RusSt/VZR_new_version/default.aspx?ProductID=C73D3867-9A5C-484A-8A6B-BF3E2DB4DD99&PolicyID=813F05F2-17FB-4FA2-9BDA-17446421A5EF"
		}}';*/
		
		$data_string_res5 = '{"Policy":{
			"ProductID": "C73D3867-9A5C-484A-8A6B-BF3E2DB4DD99",
			"DocumentDate": "2014-07-10",
			"EffectiveDate": "'.$EffectiveDate.'",
			"ExpirationDate": "'.$ExpirationDate.'",
			"DocumentStatusID": "0C9468DD-F53C-4962-8B0B-93BF28ABA6A9",
			"InsuredName": "ГодоваяМИР Все ",
			"NUMBER": "100000208",
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
			"insuranceProgram": "",
			"insuranceProgramRaw": "",
			"SubProgInsur": "'.$SubProgInsur.'",
			"RGroupPr": "E3B922F1-9A2D-4397-9E34-21D14F946258",
			"RGroupPrRaw": "",
			"SubProgInsurRaw": "",
			"InsRiskPrem": "",
			"CancelTravel": false,
			"BreakTravel": false,
			"amSport": '.$amSport.',
			"ResInsPrem": "0",
			"AddInsSum": 3000,
			"GridInsuredPerson": ['.$GridInsuredPerson.'],
			"Premium": "",
			"RShengenCountry": "",
			"ROtherCountry": "",
			"ROtherCountryRaw": "",
			"RInsuranceTerritory": "",
			"RInsuranceTerritoryRaw": "",
			"REffectiveDate": "",
			"RExpirationDate": "",
			"RdaysCount": 0,
			"RdaysCountByStore": 0,
			"phone": "31234321143",
			"email": "ewq@fd.rt",
			"RSurname": "ГодоваяМИР",
			"RName": "Все",
			"RLastname": "",
			"RBithDay": "1990-11-28",
			"Rtest": "",
			"StringPremium": "126.00 USD/4293.55 RUR",
			"CoursesOfCurrency": [],
			"StatusID": "0C9468DD-F53C-4962-8B0B-93BF28ABA6A9",
			"url": "http://vfos.virtusystems.ru/Companies/RusSt/VZR_new_version/default.aspx?ProductID=C73D3867-9A5C-484A-8A6B-BF3E2DB4DD99&PolicyID=813F05F2-17FB-4FA2-9BDA-17446421A5EF",
			"ID": "813F05F2-17FB-4FA2-9BDA-17446421A5EF",
			"FilialName": null,
			"AcceptationDate": "2014-07-10",
			"StatusName": "Действующий",
			"NUMBAR": "100000208",
			"ProductName": "ВЗР (Русский стандарт)"		
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
			
		$ch = curl_init(VIRTU_URL.'/RUSSTANDARTVZRFeature/RUSSTANDARTVZRCalculate.cmd?id=33e188ed-df03-2f13-91ca-e0a39f61f4ee');                                                                      
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
	
		preg_match('/"Premium"\s*:\s*([^,]+)/mi', $result3, $m);
		$Premium = $m[1];
		$Premium = str_replace('"', '', $Premium);
		
		var_dump($result3);
		
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
							<li class="b-breadcrumbs_item breadcrumbs-item-current">Калькулятор</li>
							<li class="b-breadcrumbs_item breadcrumbs-item-disabled">Поиск</li>
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
												<label class="b-form-elem_label"  for="dest">Какую страну планируете посетить?</label>
												<select name="CountryID" id="CountryID" class="b-form-elem_control" onchange="clickCountry()" >
													<option selected disabled>Выберите страну</option>
													<?foreach($CountriesArrays as $OneCountry){?>
														<option <?if($_POST["CountryID"]==$OneCountry[0]){echo "selected";}?> value="<?=$OneCountry[0]?>" atr="<?=$OneCountry[3]?>"><?=$OneCountry[2].' '.$OneCountry[3]?></option>
													<?}?>
												</select>
											</div>
 
											<div class="b-line b-rooms">
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
															
																<input style="vertical-align:middle;" <?if($_POST["groupOfProgram"]=='odn'){echo "checked";}?> type="radio" class="input-radio" value="odn" name="groupOfProgram" id="groupOfProgram1" onclick="clickPolice();"/>
																<label style="vertical-align:middle;" for="groupOfProgram1" class="radio-item" >на одну поездку</label>

																<input style="vertical-align:middle;"<?if($_POST["groupOfProgram"]=='mul'){echo "checked";}?> type="radio" class="input-radio" value="mul" name="groupOfProgram" id="groupOfProgram2" onclick="clickPolice();"/>
																<label style="vertical-align:middle;" for="groupOfProgram2" class="radio-item" >многократный полис</label>
															
															<!--
															<input class="b-form-elem_control b-elem-destination inpIconInput js-dest ui-autocomplete-input" name="dest" maxlength="100" data-val="true" data-val-required="Введите пункт назначения" tabindex="1" type="text" title="Место или название отеля" autocomplete="off" data-jq-watermark="processed"></span><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
															-->
													   <!-- <a class="b-form-elem_validation-icon b-icon-close btnIconInput btnClose" href="http://rsb.oktogo.ru/#" style="display:none"></a>
														<span class="b-form-elem_validation-icon b-icon-loading btnIconInput js-btnLoader" style="display:none"></span>
														
														<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-1" tabindex="0" style="z-index: 101; display: none;"></ul>
														-->
													</div>
													<div id='countryError' style="color:red; display:none;">Вы забыли выбрать страну!</div>
													
												</div>
											</div>
											
											<hr class="for-one for-all" style="border-top: 1px dashed rgb(204, 204, 204)"/>
											
											<div class="b-inline b-rooms for-one for-all">
												<label class="b-form-elem_label"  for="CheckIn">Укажите срок действия полиса</label>
											</div>	 
				 
											<div class="b-inline for-one for-all"> 
												<div class="b-inline b-form-elem elem-size-big elem-style-marked">
													<div class="b-inline" style="vertical-align:bottom;">
														<label class="b-form-elem_label" style="width:135px;font-weight:normal" for="CheckIn">Дата начала</label>
													</div>	
													
													<input type="text" id="EffectiveDate" class="DatePicker b-form-elem_control b-elem-calendar js-checkOut" name="EffectiveDate" placeholder="гггг-мм-дд" readonly="readonly" onclick="$('#EffectiveDate').datepicker('show');" value="<?=$_POST["EffectiveDate"]?>"  >
														
													<div class="pickadate__holder">
														<div class="pickadate__calendar--wrap">
														<div class="pickadate__calendar">
														<div class="pickadate__month--nav"><div class="pickadate__month--next" data-nav="1">→</div></div>
														<div class="pickadate__month--wrap"><div class="pickadate__month">Июль</div></div>
														<div class="pickadate__year--wrap"><div class="pickadate__year">2014</div></div>
														<table class="pickadate__calendar--table"><thead><tr><th class="pickadate__weekday">Пн</th><th class="pickadate__weekday">Вт</th><th class="pickadate__weekday">Ср</th><th class="pickadate__weekday">Чт</th><th class="pickadate__weekday">Пт</th><th class="pickadate__weekday">Сб</th><th class="pickadate__weekday">Вс</th></tr></thead>
														<tbody class="pickadate__calendar--body"><tr><td><div class="pickadate__day pickadate__day--outfocus pickadate__day--disabled" data-disabled="2014/5/30">30</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled" data-disabled="2014/6/1">1</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled" data-disabled="2014/6/2">2</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled" data-disabled="2014/6/3">3</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--today" data-date="2014/6/4">4</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--highlighted pickadate__day--selected" data-date="2014/6/5">5</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/6">6</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/7">7</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/8">8</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/9">9</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/10">10</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/11">11</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/12">12</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/13">13</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/14">14</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/15">15</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/16">16</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/17">17</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/18">18</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/19">19</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/20">20</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/21">21</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/22">22</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/23">23</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/24">24</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/25">25</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/26">26</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/27">27</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/28">28</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/29">29</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/30">30</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/31">31</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/1">1</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/2">2</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/3">3</div></td></tr><tr><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/4">4</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/5">5</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/6">6</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/7">7</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/8">8</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/9">9</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/10">10</div></td></tr></tbody></table></div></div>
													</div>
													<input type="hidden" name="_submit" value="2014/07/05">
														<!--<div class="b-inline " style="vertical-align:bottom;">
																	<label class="b-form-elem_label b-form-elem_label_nobold" style="width:135px;font-weight:normal" for="CheckOut">Дата окончания</label>
																</div>
																
																<input type="text" name="ExpirationDate" id="ExpirationDate" class="DatePicker b-form-elem_control b-elem-calendar js-checkOut" readonly="readonly" placeholder="гггг-мм-дд" value="<?=$_POST["ExpirationDate"]?>" onclick="$('#ExpirationDate').datepicker('show');"/>
																-->
														
												</div>
											</div>
											<div class="b-inline">
												<div class="for-one">
													<div id="warning" style="color:red; display:none">
															Дата окончания должна быть больше даты начала
													</div>
													<div class="b-inline b-rooms b-form-elem elem-size-big elem-style-marked">
														<div class="b-form-elem_wrapper">
															<div class="b-inline " style="vertical-align:bottom;">
																<label class="b-form-elem_label b-form-elem_label_nobold" style="width:135px;font-weight:normal" for="CheckOut">Дата окончания</label>
															</div>
															<!--<input class="b-form-elem_control b-elem-calendar js-checkOut" tabindex="1" type="text" title="Дата выезда" readonly=""><div class="pickadate__holder"><div class="pickadate__calendar--wrap"><div class="pickadate__calendar"><div class="pickadate__month--nav"><div class="pickadate__month--next" data-nav="1">→</div></div><div class="pickadate__month--wrap"><div class="pickadate__month">Июль</div></div><div class="pickadate__year--wrap"><div class="pickadate__year">2014</div></div><table class="pickadate__calendar--table"><thead><tr><th class="pickadate__weekday">Пн</th><th class="pickadate__weekday">Вт</th><th class="pickadate__weekday">Ср</th><th class="pickadate__weekday">Чт</th><th class="pickadate__weekday">Пт</th><th class="pickadate__weekday">Сб</th><th class="pickadate__weekday">Вс</th></tr></thead><tbody class="pickadate__calendar--body"><tr><td><div class="pickadate__day pickadate__day--outfocus pickadate__day--disabled" data-disabled="2014/5/30">30</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled" data-disabled="2014/6/1">1</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled" data-disabled="2014/6/2">2</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled" data-disabled="2014/6/3">3</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled pickadate__day--today" data-disabled="2014/6/4">4</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--disabled" data-disabled="2014/6/5">5</div></td><td><div class="pickadate__day pickadate__day--infocus pickadate__day--highlighted pickadate__day--selected" data-date="2014/6/6">6</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/7">7</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/8">8</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/9">9</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/10">10</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/11">11</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/12">12</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/13">13</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/14">14</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/15">15</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/16">16</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/17">17</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/18">18</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/19">19</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/20">20</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/21">21</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/22">22</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/23">23</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/24">24</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/25">25</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/26">26</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/27">27</div></td></tr><tr><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/28">28</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/29">29</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/30">30</div></td><td><div class="pickadate__day pickadate__day--infocus" data-date="2014/6/31">31</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/1">1</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/2">2</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/3">3</div></td></tr><tr><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/4">4</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/5">5</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/6">6</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/7">7</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/8">8</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/9">9</div></td><td><div class="pickadate__day pickadate__day--outfocus" data-date="2014/7/10">10</div></td></tr></tbody></table></div></div></div><input type="hidden" name="_submit" value="2014/07/06">
															-->
															<input type="text" name="ExpirationDate" id="ExpirationDate" class="DatePicker b-form-elem_control b-elem-calendar js-checkOut" readonly="readonly" placeholder="гггг-мм-дд" value="<?=$_POST["ExpirationDate"]?>" onclick="$('#ExpirationDate').datepicker('show');"/>
														</div>
													</div>
												</div>
												<div class="for-one for-all b-rooms" >
													<div class="b-inline" style="vertical-align:bottom;" >
														<div class="b-form-elem_label" style="font-weight:normal;width:170px">Срок действия полиса</div>
													</div>
													<div class="b-inline b-form-elem b-adults elem-size-big elem-style-marked" >
														<div class="b-form-elem_wrapper" id="daysCountBlock">
															<?if($_POST["groupOfProgram"]=="odn"){?>
																<input  name='daysCount' id='daysCount' type='text' style='display:none;' value='<?=$_POST["daysCount"]?>'/>
																<div id='div-daysCount' class="b-form-elem_label" style="font-weight:normal;width:125px"><?=$_POST["daysCount"]?></div>
															<?}else{?>
																<select id="daysCount" name="daysCount"  class="selector" <?if($_POST["daysCount"] =='365'){echo "disabled";}?> onchange="javascript:commentDaysCount()">
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
													<div id="commentDaysCount"><?if($_POST["daysCount"]=='365'){echo "Страховой полис будет действовать в течение всего года при условии, что продолжительность одной поездки не превысит 91 день.";} 
																					else echo "Страховой полис будет действовать в течение срока действия полиса, но в совокупности не более количества дней страхования, указанного в этом поле";?>
														</div>
												</div>
											</div>
											
											<hr class="for-one for-all" style="border-top: 1px dashed rgb(204, 204, 204)"/>
											
											<div class="b-inline for-one for-all b_rooms" >
												<div class="b-inline b-rooms for-one for-all">
													<label class="b-form-elem_label"  >Укажите количество путешественников и их возраст</label>
												</div>	 
												
												
												<!--
												<div class="b-inline " style="vertical-align:bottom;" title="Количество путешественников">
													<div class="b-form-elem_label" style="font-weight:normal;width:250px;">Количество путешественников</div> 
												</div>
												<div class="b-inline b-form-elem b-children elem-size-big elem-style-marked" title="Количество детей">
													<div class="b-form-elem_wrapper">
													-->	<!--<div class="selector" id="uniform-undefined"><span> без детей</span><select class="b-form-elem_control js-uniform js-uniform-applied" data-bind="options: $root.Rooms.childsOpt, optionsText: &#39;text&#39;, optionsValue: &#39;val&#39;, value: $data.childrenAges().length, event: { change: $root.Rooms.childsChange }" style="opacity: 0;"><option value="0"> без детей</option><option value="1"> и 1 ребенок</option><option value="2"> и 2 детей</option><option value="3"> и 3 детей</option><option value="4"> и 4 детей</option></select></div>
														-->
														
												<!--		<select id="PeopleCount" name="PeopleCount" class="selector" style="padding: 5px 0;" >
															<option <?if($_POST["PeopleCount"]=='1'){echo "selected";}?> value="1">1</option>
															<option <?if($_POST["PeopleCount"]=='2'){echo "selected";}?> value="2">2</option>
															<option <?if($_POST["PeopleCount"]=='3'){echo "selected";}?> value="3">3</option>
															<option <?if($_POST["PeopleCount"]=='4'){echo "selected";}?> value="4">4</option>
															<option <?if($_POST["PeopleCount"]=='5'){echo "selected";}?> value="5">5</option>
														</select>
													</div>
												</div>
												-->
											</div>
											<!--<div class="b-inline for-one for-all" style="margin-top:10px;">
												<div class="b-inline" style="vertical-align:bottom;">
													<div class="b-form-elem_label"style="font-weight:normal; width:250px;" >Возраст путешественников:</div>
												</div>	
												
												<div class="b-inline b-form-elem b-children elem-size-big elem-style-marked" title="Возраст путешественников">
													<div class="b-form-elem_wrapper">
													-->	<!--<div class="selector" id="uniform-undefined"><span> без детей</span><select class="b-form-elem_control js-uniform js-uniform-applied" data-bind="options: $root.Rooms.childsOpt, optionsText: &#39;text&#39;, optionsValue: &#39;val&#39;, value: $data.childrenAges().length, event: { change: $root.Rooms.childsChange }" style="opacity: 0;"><option value="0"> без детей</option><option value="1"> и 1 ребенок</option><option value="2"> и 2 детей</option><option value="3"> и 3 детей</option><option value="4"> и 4 детей</option></select></div>
														-->
													<!--	
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
											-->
											<div class="b-inline for-one for-all" style="margin-top:10px;">
												<!--<div class="b-inline" style="vertical-align:bottom;">
													<div class="b-form-elem_label"style="font-weight:normal; width:250px;" >Возраст путешественников:</div>
												</div>	
												-->
												<div class="b-inline " title="Возраст путешественников">
													<div class="b-form-elem_wrapper">
															
															<span  style="margin-left:5px; margin-right:13px">
																<label style="font-weight:normal;font-size:12px">до 3х лет</label>
																<input type='text' id='AgeBetween3' name='AgeBetween3' class='years' style='width:15px;' value='<?if($_POST["AgeBetween3"]){echo $_POST["AgeBetween3"];} else {echo '0';}?>' onblur="changeCountTraveler()" <?//if($_POST["AgeBetween"]=='3'){echo "selected";}?> />
																<!--<input id="spinner" name="value" class='age-spin'>-->
															</span>
															<span  style= "margin-right:13px">
																<label style="font-weight:normal;font-size:12px">от 3 до 16 лет</label>
																<input type='text' id='AgeBetween9' name='AgeBetween9' class='years' style='width:15px;' value='<?if($_POST["AgeBetween9"]){echo $_POST["AgeBetween9"];} else {echo '0';}?>' onblur="changeCountTraveler()"<?//if($_POST["AgeBetween"]=='9'){echo "selected";}?> />
															</span>
															<span style= "margin-right:13px">
																<label style="font-weight:normal;font-size:12px">от 16 до 28 лет</label>
																<input type='text' id='AgeBetween22' name='AgeBetween22' class='years' style='width:15px;' value='<?if($_POST["AgeBetween22"]){echo $_POST["AgeBetween22"];} else {echo '0';}?>' onblur="changeCountTraveler()"<?//if($_POST["AgeBetween"]=='22'){echo "selected";}?> />
															</span>
															<span style= "margin-right:13px">
																<label style="font-weight:normal;font-size:12px">от 28 до 70 лет</label>
																<input type='text' id='AgeBetween49' name='AgeBetween49' class='years' style='width:15px;' value='<?if($_POST["AgeBetween49"]){echo $_POST["AgeBetween49"];} else {echo '0';}?>' onblur="changeCountTraveler()"<?//if($_POST["AgeBetween"]=='49'){echo "selected";}?> />
															</span>
															<span style= "margin-right:13px">
																<label style="font-weight:normal;font-size:12px">от 70 до 75 лет</label>
																<input type='text' id='AgeBetween72' name='AgeBetween72' class='years' style='width:15px;' value='<?if($_POST["AgeBetween72"]){echo $_POST["AgeBetween72"];} else {echo '0';}?>' onblur="changeCountTraveler()"<?//if($_POST["AgeBetween"]=='72'){echo "selected";}?> />
															</span>
															<span >
																<label style="font-weight:normal;font-size:12px">от 75 до 80 лет</label>
																<input type='text' id='AgeBetween77' name='AgeBetween77' class='years' style='width:15px;' value='<?if($_POST["AgeBetween77"]){echo $_POST["AgeBetween77"];} else {echo '0';}?>' onblur="changeCountTraveler()"<?//if($_POST["AgeBetween"]=='77'){echo "selected";}?> />
															</span>
															
													</div>
													<div class="b-form-elem_label b-rooms" style="font-weight:normal;width:100%"> 
														<span style="width:100px">Количество путешественников</span>
														<input type="text" name="PeopleCount" id="PeopleCount" value='<?if($_POST["PeopleCount"]){echo $_POST["PeopleCount"];} ?>' readonly style="width:20px" />
														<span id='count-error' style="display:none;color:red;font-size:12px">Количество путешественников не должно быть больше пяти!</span>
													</div>
													
												</div>
											</div>
											
											
											<hr class="for-one for-all" style="border-top: 1px dashed rgb(204, 204, 204)"/>
											
											<div class="b-line for-one for-all b-rooms">
												<label class="b-form-elem_label" style="font-size:16px;" for="dest">Выберите сумму страхового покрытия и валюту: </label>
												<div  class="b-inline b-form-elem b-adults elem-size-big elem-style-marked" >
													<div class="b-form-elem_wrapper b-wrapper-autocomplete js-acContainer">
														<div id="radio" >
															<div id='divInsuredSum1' class="b-inline" <?foreach($CountriesArrays as $OneCountry)
																						{	if($_POST["CountryID"] == $OneCountry[0]){$Country=$OneCountry[2];}} 
																							isVisibleSum($Country,'InsuredSum1');?> >
																<input type="radio"  id="InsuredSum1" name="InsuredSum" checked='checked' class="InsuredSum" value="15000" <?if($_POST["InsuredSum"]=='15000'){echo "checked ";} ?>  onclick="ShowUniqueOptions()"/>
																<label id="labelInsuredSum1" style="vertical-align:middle;" for="InsuredSum1" class="radio-item" >15000</label>
															</div>
															<div id='divInsuredSum2' class="b-inline" <?foreach($CountriesArrays as $OneCountry)
																						{	if($_POST["CountryID"] == $OneCountry[0]){$Country=$OneCountry[2];}} 
																							isVisibleSum($Country,'InsuredSum2');?>>
																<input type="radio" id="InsuredSum2" name="InsuredSum" class="InsuredSum" value="30000"  <?if($_POST["InsuredSum"]=='30000'){echo "checked ";}?>  onclick="ShowUniqueOptions()"/>
																<label id="labelInsuredSum2" style="vertical-align:middle;" for="InsuredSum2" class="radio-item" >30000</label>
															</div>
															<div id='divInsuredSum3' class="b-inline" <? foreach($CountriesArrays as $OneCountry)
																						{	if($_POST["CountryID"] == $OneCountry[0]){$Country=$OneCountry[2];}} 
																							isVisibleSum($Country,'InsuredSum3');?>>
																<input type="radio" id="InsuredSum3" name="InsuredSum" class="InsuredSum" value="50000" <?if($_POST["InsuredSum"]=='50000'){echo "checked ";}?>  onclick="ShowUniqueOptions()"/>
																<label id="labelInsuredSum3" style="vertical-align:middle;" for="InsuredSum3" class="radio-item" >50000</label>
															</div>
															<div id='divInsuredSum4' class="b-inline" <?foreach($CountriesArrays as $OneCountry)
																						{	if($_POST["CountryID"] == $OneCountry[0]){$Country=$OneCountry[2];}} 
																							isVisibleSum($Country,'InsuredSum3');?>>
																<input type="radio" id="InsuredSum4"  name="InsuredSum" class="InsuredSum" value="100000" <?if($_POST["InsuredSum"]=='100000'){echo "checked ";}?>	 onclick="ShowUniqueOptions()"/>
																<label id="labelInsuredSum4" style="vertical-align:middle;" for="InsuredSum4" class="radio-item" >100000</label>
															</div>
															<!--<span style="margin-right:10px">&nbsp;</span>-->
														</div>
													</div>
												</div>
												<div class="b-inline b-form-elem elem-size-big elem-style-marked b-destination">
													<select name="Currency" id="Currency"  class="selector" <?if ($isShengen == 'true' ) echo "disabled";?> >
															
																<? $tmpCur = $_POST["Currency"];
																	if ($isShengen == 'true') $tmpCur = '1'; //euro 
																	foreach($CurrencyArrays as $Key => $OneCurrency){
																	?>
																	<option <?if( $tmpCur == $Key){echo "selected";}?> value="<?=$Key?>" <?if ($isShengen == 'true' && $Key == '0') echo "style='display:none'";  ?> ><?=$OneCurrency[2]?></option>
																<?}?>
															
													</select>
												</div>
											</div>
										

											<div id="AdvOptions" class="for-all for-one b-rooms b-inline" >
												<?//=$AdvancedParametersHtmlString?>
												<div name='basParams'>Базовые параметры:</div>
													<div id='basParamMed' style='margin-left:100px;'>
														<input id='inpBasParamMed' name='inpBasParamMed' style='margin-left:10px' type='checkbox' disabled checked />
														<label for='inpBasParamMed'><b>Медицинские расходы</b></label>
														<div id='divBasParamMed' style='margin-left:30px;'>(Медицинские расходы, медицинская транспортировка, экстренная стоматология, посмертная репатриация, оплата срочных сообщений)</div>
													</div>
													<div id='basParamTrans' class='basParam' 
															<?foreach($CountriesArrays as $OneCountry)
																{	if($_POST["CountryID"] == $OneCountry[0]){$Country=$OneCountry[2];}}
																GetDisplay( $Country, $_POST["groupOfProgram"], 'basParamTrans','1' );?>
																>
															
														<input id='inpBasParamTrans' name='inpBasParamTrans' style='margin-left:10px' disabled checked type='checkbox'/>
														<label for='inpBasParamTrans' ><b>Транспортные расходы</b></label>
														<div id='divBasParamTrans' style='margin-left:30px;'>(Эвакуация детей, оставшихся без опеки, проживание и проезд сопровождающего, в случае долгой госпитализации, визит родственника, досрочное возвращение, юридическое сопровождение, помощь при утрате документов, задержка авиарейса)</div>
													</div>
													<!--<div id='basParamCancel' class='basParam' style='margin-left:100px;'>
														<input name='inpBasParamCancel' style='margin-left:10px' disabled checked type='checkbox'/>
														<label for='inpBasParamCancel' ><b>Отмена поездки</b></label>
														<div id='divBasParamCancel' style='margin-left:30px;' >(Возврат денег за путёвку при отмене поездки, без покрытия по риску «не выдача визы», возврат денег за не использованные дни, при вынужденном прерывании поездки)</div>
													</div>-->
													<div id='basParamBag' class='basParam'
															<?foreach($CountriesArrays as $OneCountry)
																{	if($_POST["CountryID"] == $OneCountry[0]){$Country=$OneCountry[2];}}
																GetDisplay( $Country, $_POST["groupOfProgram"], 'basParamBag', '1' );?>
															> 
														
														<input id='inpBasParamBag' name='inpBasParamBag' style='margin-left:10px' disabled checked type='checkbox'/>
														<label for='inpBasParamBag' ><b>Багаж</b></label>
														<div id='divBasParamBag' style='margin-left:30px;' >(Утрата багажа, покупка необходимых вещей при задержке багажа)</div>
													</div>
													<div id='basParamCivil' class='basParam' 
															<?foreach($CountriesArrays as $OneCountry)
																{	if($_POST["CountryID"] == $OneCountry[0]){$Country=$OneCountry[2];}}
																GetDisplay( $Country, $_POST["groupOfProgram"], 'basParamCivil','1' );?>
																>
														<input id='inpBasParamCivil' name='inpBasParamCivil' style='margin-left:10px' disabled checked type='checkbox'/>
														<label for='inpBasParamCivil' ><b>Гражданская ответственность</b></label>
														<div id='divBasParamCivil' style='margin-left:30px;'>(Расходы на оплату возмещения третьим лицам за причинение вреда их жизни, здоровью, имуществу)</div>
													</div>
												
												
												<div name='advParams'>Дополнительные опции:</div>	
													<div id='advParamTrans' class='advParam'
															<?foreach($CountriesArrays as $OneCountry)
																{	if($_POST["CountryID"] == $OneCountry[0]){$Country=$OneCountry[2];}}
																GetDisplay( $Country, $_POST["groupOfProgram"], 'advParamTrans','1' );?>
															 >
															
														<input id='inpAdvParamTrans' name='inpAdvParamTrans' class='inpAdvParam' type='checkbox' <? if($_POST["inpAdvParamTrans"]) {echo 'checked ';} 
															foreach($CountriesArrays as $OneCountry)
																{	if($_POST["CountryID"] == $OneCountry[0]){$Country=$OneCountry[2];}} GetDisplay( $Country, $_POST["groupOfProgram"], 'advParamTrans','0' ); ?> style='margin-left:10px' onclick="clickParam(this)"/>
														<label for='inpAdvParamTrans' ><b>Транспортные расходы</b></label>
														<div id='divAdvParamTrans' style='margin-left:30px;'>(Эвакуация детей, оставшихся без опеки, проживание и проезд сопровождающего, в случае долгой госпитализации, визит родственника, досрочное возвращение, юридическое сопровождение, помощь при утрате документов, задержка авиарейса)</div>
													</div>
													<div id='advParamCancel' class='advParam' 
															<?foreach($CountriesArrays as $OneCountry)
																{	if($_POST["CountryID"] == $OneCountry[0]){$Country=$OneCountry[2];}}
																GetDisplay( $Country, $_POST["groupOfProgram"], 'advParamCancel','1' );?>
																>
																
														<input id='inpAdvParamCancel' name='inpAdvParamCancel' class='inpAdvParam' type='checkbox' <? if($_POST["inpAdvParamCancel"]) {echo 'checked ';} foreach($CountriesArrays as $OneCountry)
																{	if($_POST["CountryID"] == $OneCountry[0]){$Country=$OneCountry[2];}} GetDisplay( $Country, $_POST["groupOfProgram"], 'advParamCancel','0' );?> style='margin-left:10px' onclick="clickParam(this)" />
														<label for='inpAdvParamCancel' ><b>Отмена поездки</b></label>
														<div id='divAdvParamCancel' style='margin-left:30px;' >(Возврат денег за путёвку при отмене поездки, без покрытия по риску «не выдача визы», возврат денег за не использованные дни, при вынужденном прерывании поездки)</div>
													</div>
													<div id='advParamBag' class='advParam' 
															<?foreach($CountriesArrays as $OneCountry)
																{	if($_POST["CountryID"] == $OneCountry[0]){$Country=$OneCountry[2];}}
																GetDisplay( $Country, $_POST["groupOfProgram"], 'advParamBag' ,'1');?> 
																>
															
														<input id='inpAdvParamBag' name='inpAdvParamBag' class='inpAdvParam' type='checkbox' <? if($_POST["inpAdvParamBag"]) {echo 'checked ';} foreach($CountriesArrays as $OneCountry)
																{	if($_POST["CountryID"] == $OneCountry[0]){$Country=$OneCountry[2];}} GetDisplay( $Country, $_POST["groupOfProgram"], 'advParamBag' ,'0');?> style='margin-left:10px' onclick="clickParam(this)" />
														<label for='inpAdvParamBag' ><b>Багаж</b></label>
														<div id='divAdvParamBag' style='margin-left:30px;' >(Утрата багажа, покупка необходимых вещей при задержке багажа)</div>
													</div>
													<div id='advParamCivil' class='advParam' 	
														<?foreach($CountriesArrays as $OneCountry)
																{	if($_POST["CountryID"] == $OneCountry[0]){$Country=$OneCountry[2];}}
																GetDisplay( $Country, $_POST["groupOfProgram"], 'advParamCivil','1' );?> 
															>
																
														<input id='inpAdvParamCivil' name='inpAdvParamCivil' class='inpAdvParam' type='checkbox' <? if($_POST["inpAdvParamCivil"]) {echo 'checked ';} foreach($CountriesArrays as $OneCountry)
																{	if($_POST["CountryID"] == $OneCountry[0]){$Country=$OneCountry[2];}} GetDisplay( $Country, $_POST["groupOfProgram"], 'advParamCivil','0' );?> style='margin-left:10px' onclick="clickParam(this)" />
														<label for='inpAdvParamCivil' ><b>Гражданская ответственность</b></label>
														<div id='divAdvParamCivil' style='margin-left:30px;'>(Расходы на оплату возмещения третьим лицам за причинение вреда их жизни, здоровью, имуществу)</div>
													</div>
													<br/>
													<input name='amSport' style='margin-left:110px' type='checkbox' <? if($_POST["amSport"]) {echo 'checked';} ?>  />
													<label for='amSport'><b>Любительский спорт</b></label>
											</div>
											
											<hr class="for-one for-all" style="border-top: 1px dashed rgb(204, 204, 204)"/>
											
											<div class="b-inline b-form-submit for-one for-all b-rooms" style='position:relative; height:33px'>
												<div id='messageAll' class='divError' style='color:red;<?if($Premium){echo 'display:none;';}?>' >Не все обязательные поля заполнены!</div>
												<div class="b-button b-button-search button-size-big button-style-marked"  >
													<!--<input type="submit" name="CalculatePolice" value="Рассчитать полис" title="Рассчитать полис" tabindex="4" >-->
													
													<input type="submit" id="CalculatePolice" name="CalculatePolice" value="Рассчитать полис"  title="Рассчитать полис" tabindex="4" >
												</div>
												
												<div class="CalculatorResult for-one for-all b-rooms" style="font-size:16px; " >
													<?if($Premium){?>
													Стоимость полиса: <b><span style="font-size:30px"><?=$Premium?></span>&nbsp;<?=$currencyRaw?></b>
													<?}?>
												</div>
											</div>	
											<hr class="for-one for-all" style="border-top: 1px dashed rgb(204, 204, 204)"/>
											
											<div class="b-inline b-form-submit  b-rooms" style='position:relative; height:30px; width:100%; <?if (!isset($Premium)) echo 'display:none;'?>'>	

												<div class="b-inline b-form-submit for-one for-all b-rooms" style='height:35px'  >
													<div class="b-form-elem_label" style=" font-size:14px">
														Чтобы оформить полис вам осталось ввести данные страхователя и путешественников.
													</div>
													<div class="b-button b-button-search button-size-big button-style-marked"  >
														<!--<input type="submit" name="CalculatePolice" value="Рассчитать полис" title="Рассчитать полис" tabindex="4" >-->
														<input type="button" name="EnterDataTraveled" value="Оформить полис" title="Оформить полис" tabindex="4" onclick="window.location='personal.php'" >
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


<script type="text/javascript">
	
		//функция склонения
	function declination(a, b, c, s) { 
 
		var words = [a, b, c]; 
		var index = s % 100; 
		 
		if (index >=11 && index <= 14) { index = 0; } 
		else { index = (index %= 10) < 5 ? (index > 2 ? 2 : index): 0; } 
		 
		return(words[index]); 
 	}
	
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
		
		 //var spinner = $( "#spinner" ).spinner();
		  $( "#AgeBetween3, #AgeBetween9, #AgeBetween22, #AgeBetween49, #AgeBetween72, #AgeBetween77").spinner({
		  min: 0, 
		  max: 5,
		  stop: function( event, ui ) {
			var num = $("#AgeBetween3" ).spinner('value')+//attr('aria-valuenow').toNumber+
								$('#AgeBetween9').spinner('value')+//attr('aria-valuenow').toNumber+
								$('#AgeBetween22').spinner('value')+//attr('aria-valuenow').toNumber+
								$('#AgeBetween49').spinner('value')+//attr('aria-valuenow').toNumber+
								$('#AgeBetween72').spinner('value')+//attr('aria-valuenow').toNumber+
								$('#AgeBetween77').spinner('value');//attr('aria-valuenow').toNumber
			if (num < 6)
				{
					$('#PeopleCount').val( num	);
					$('#count-error').hide();
				}
			else {
				$('#count-error').show();
				$('#PeopleCount').val( '');
				}
			isAllFill();
		  }
		  });
		  
		 

		
		
		
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
				}
	});
	
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
	
	function isAllFill()
	{
		//alert('days'+' pepl'+parseInt($('#PeopleCount').val()));
		//alert($('#daysCount').val());
		//для рассчета полиса должны быть заполнены
		if ($('#EffectiveDate').val() != "гггг-мм-дд" //дата начала
			 && parseInt($('#daysCount').val()) > 0 //дата конца или кол-во дней
			 &&	parseInt($('#PeopleCount').val()) > 0// количество путешественников
			 )
			{
				$("#CalculatePolice").prop('disabled', false);
				$('#messageAll').hide();
			}
		else 
			$('#messageAll').show();
	}
	
	function changeCountTraveler()
		{
		
		//alert($('#AgeBetween3').spinner('value'));
		//var spinner = $( "#AgeBetween3" ).spinner();
		//var text = $('#AgeBetween3').spinner('value');
		/*var num = $("#AgeBetween3" ).spinner('value')+//attr('aria-valuenow').toNumber+
								$('#AgeBetween9').spinner('value')+//attr('aria-valuenow').toNumber+
								$('#AgeBetween22').spinner('value')+//attr('aria-valuenow').toNumber+
								$('#AgeBetween49').spinner('value')+//attr('aria-valuenow').toNumber+
								$('#AgeBetween72').spinner('value')+//attr('aria-valuenow').toNumber+
								$('#AgeBetween77').spinner('value');//attr('aria-valuenow').toNumber
		if (num < 6)
			{
				$('#PeopleCount').val( num	);
				$('#count-error').hide();
			}
		else {
			$('#count-error').show();
			$('#PeopleCount').val( '');
			}*/
		}
	

 
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
			
		var CountryCaribWithoutRussia = [  "США","Канада","Япония","Австралия",
											"Ангилья","Антигуа и Барбуда","Аруба","Архипелаг Тёркс и Кайкас",
											"Багамы","Барбадос","Британские Виргинские острова",
											"Виргинские острова", "Гаити", "Гренада", "Доминика", "Доминиканская Республика",
											"Каймановы острова","Куба","Мартиника","Монсеррат", "Нидерландские Антильские острова",
											"Пуэрто-Рико","Сен-Бартельми","Сен-Мартен","Сент-Китс и Невис","Сент-Люсия","Тринидад и Тобаго","Ямайка"];
		var CountrySNG = ["Азербайджан","Армения","Белорусь","Казахстан","Таджикистан","Туркменистан","Узбекистан","Кыргызстан","Молдова","Украина"]; //данные от Алены (скайп)
		
		
		
		

		//отобразить дополнительные условия
		function ShowUniqueOptions()
		{
		
		
		
				if ($("#groupOfProgram1").prop("checked") ) 
						var SelectedPoliceType='odn';
				
				if ($("#groupOfProgram2").prop("checked") ) 
				var SelectedPoliceType = 'mul';
				
				//var SelectedPoliceType = document.getElementById("groupOfProgram").value;
						
				//alert('1='+$("#groupOfProgram1").prop("checked")+';2='+$("#groupOfProgram2").prop("checked"));
			//	alert(type);
				var obj = document.getElementById("CountryID");
				var CurrSelectedText = obj.options[obj.selectedIndex].text;
				var AdvOptions = document.getElementById("AdvOptions");
				
				//var SelectedPoliceType = document.getElementById("PoliceType").value;
				//AdvOptions.innerHTML = '';
				
				//скрыть все параметры
				$('.advParam, .basParam').hide();
				
				//нарисовать все суммы 
				$('#divInsuredSum1, #divInsuredSum2, #divInsuredSum3, #divInsuredSum4').show();
				
				
				
				//выключить все checkbox
				$('#inpAdvParamTrans, #inpAdvParamCancel, #inpAdvParamBag, #inpAdvParamCivil').prop('checked',false); //
								
				
				if( SelectedPoliceType == "mul" ) // Если выбран многократный полис
				{
					//if ($('#CountryID option:selected').attr('atr') == 'шенген' &&  $('#daysCount').val() !='365' ) //если шенген 
					if (  $('#daysCount').val() !='365' ) //если мультишенген 
						//тогда сумма 30000 и отображаются только базовые параметры и чекбокс «Любительский спорт»
						{
							//суммы не доступны
							$('#divInsuredSum1, #divInsuredSum3, #divInsuredSum4').hide();
							
							//выбранная сумма 30000
							$('#InsuredSum2').prop('checked', true);
							
							//отобразить базовые параметры
							$('#basParamTrans').show();
						}
					else //годовые программы
						{
							if( js_in_array(CurrSelectedText, CountryCaribWithoutRussia) || CurrSelectedText == "Россия" ) 
							{
								//AdvOptions.innerHTML = "<?=$MnoUSACanJapAusCaribRussia?>";
								//AdvOptions.innerHTML = "<input name='amSport' type='checkbox'/>&nbsp;Любительский спорт";
							   
								//для многократного полиса и этих стран срок полиса однозначно 1 год без права изменения
								$("#daysCount [value='365']").attr("selected", "selected");

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
							// AdvOptions.innerHTML = "<?=$OdnRussia?>";
																	
							//отобразить базовые параметры (параметр медицинские расходы отображается всегда)
												
							//отобразить дополнительные параметры
							$('#advParamTrans, #advParamCancel, #advParamBag, #advParamCivil').show();
						
							//определить какая сумма выбрана
							if ( ($('#InsuredSum3').prop("checked") ) || ($('#InsuredSum4').prop("checked") ) ) //50000 или 100000
								$('#inpAdvParamTrans, #inpAdvParamCancel, #inpAdvParamBag, #inpAdvParamCivil').prop('checked',true);
							else	$('#inpAdvParamTrans, #inpAdvParamCancel, #inpAdvParamBag, #inpAdvParamCivil').prop('checked', false);
							
							//добавим дополнительный атрибут, который будет содержать value для radio, чтобы при нажатии на чекбокс знать какой радио-сумму включать
							$('#inpAdvParamTrans, #inpAdvParamCancel, #inpAdvParamBag, #inpAdvParamCivil').attr('currency-value-on','50000').attr('currency-value-off','15000').attr('is-group','1');
						}
					else if ( js_in_array(CurrSelectedText, CountrySNG) )
							{
								// AdvOptions.innerHTML = "<?=$OdnSNG?>";	
								
								//отобразить базовые параметры (параметр медицинские расходы отображается всегда)
												
								//отобразить дополнительные параметры
								$('#advParamTrans, #advParamCancel, #advParamBag, #advParamCivil').show();
								
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
										// AdvOptions.innerHTML = "<?=$OdnUSACanJapAusCarib?>";	
										
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
									else
										{
										// AdvOptions.innerHTML = "<?=$OdnOtherCountries?>";
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
			
			
			
		//если уже выбирался тип полиса, то необходимо сабмит, чтобы опции перерисовались
		//if ($("#groupOfProgram1").prop("checked") || $("#groupOfProgram2").prop("checked"))
		//	$('#frmSearch').submit();
			
		//alert($("#groupOfProgram2").attr('checked'));
		
		//SelectTypeActions();
		}
		
		//установить параметры полиса
		function SelectTypeActions()
		{
			if ($("#groupOfProgram1").prop("checked") ) 
				var type = 'odn';
				
			if ($("#groupOfProgram2").prop("checked") ) 
				var type = 'mul';

			var daysCountBlock = document.getElementById("daysCountBlock");
			
			//сохраним выделенный индекс
			var selInd = daysCountBlock.selectedIndex;
			
			//daysCountBlock.innerHTML = '';
			//alert('type='+type);
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
						daysCountBlock.innerHTML = "<input  name='daysCount' id='daysCount' type='text' style='display:none;' value='"+nd+"'/><div id='div-daysCount'  class='b-form-elem_label' style='font-weight:normal;width:125px' >"+nd+" "+txt+"</div>";
						
						}
					else 
						daysCountBlock.innerHTML = "<input  name='daysCount' id='daysCount' type='text' style='display:none;' value=''/><div id='div-daysCount'  class='b-form-elem_label' style='font-weight:normal;width:125px' ></div>";					
				}
			else // type = "mul" 
				{
					$('.for-one').hide();$('.for-all').show();
					
					var obj = document.getElementById("CountryID");
					var CurrSelectedText = obj.options[obj.selectedIndex].text;
					if( js_in_array(CurrSelectedText, CountryCaribWithoutRussia) || CurrSelectedText == "Россия")
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
						}
				}
				//var per = document.getElementById('frmSearch');
				//	$('#frmSearch').submit();
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
				}
				
		//выбрали тип полиса
		function clickPolice()
				{
					//если страна не выбрана то ничего не делать
					var obj = document.getElementById("CountryID");
					var SelectedCountry = obj.selectedIndex;
					//$('#countryError').hide();
					//alert(SelectedCountry);
					if (SelectedCountry > 0)
						{
							$('#InsuredSum1').prop('checked', true);
							SelectTypeActions();
							ShowUniqueOptions();
							
						} 
						else //страна не выбрана
						{
								$('#countryError').show();
								//$("#groupOfProgram1").prop("checked",false);
								//$("#groupOfProgram2").prop("checked",false);
						}
					
					
				}
		
		function commentDaysCount()
		{
		//alert('comment');
			var selInd = document.getElementById("daysCount").selectedIndex;
			if (selInd == 5) //год
				$('#commentDaysCount').text('Страховой полис будет действовать в течение всего года при условии, что продолжительность одной поездки не превысит 91 день.');
			else
				$('#commentDaysCount').text('Страховой полис будет действовать в течение срока действия полиса, но в совокупности не более количества дней страхования, указанного в этом поле');
			ShowUniqueOptions();
			SelectTypeActions();
			
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