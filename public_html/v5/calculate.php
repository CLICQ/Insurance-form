<?	header('Content-Type: text/html; charset=utf-8');
	session_start();
	error_reporting( E_ERROR );
	
	define ("VIRTU_URL","http://vfos.virtusystems.ru");

	//получение курса валют
	
	// Базовый URL скрипта на cbr.ru
	$scripturl = 'http://www.cbr.ru/scripts/XML_daily.asp';

	// Начальная дата для запроса  (сегодня - 2 дня)
	//$date_1=date('d/m/Y', time()-172800);

	// Конечная дата (чтобы учитывать завтра добавьте параметр time()+86400)
	//$date_2=date('d/m/Y');

	// Таким образом, мы получим данные либо за 2, либо за 3 последних дня.
	// За 2 - если на "сегодня" курс еще не выставили, иначе - за 3

	// Код валюты в архиве данных cbr.ru
	//доллар
	$currency_code='R01235';
	//евро
	$currency_code='R01239';

	// URL для запроса данных
	//$requrl = "{$scripturl}?date_req1={$date_1}&date_req2={$date_2}&VAL_NM_RQ={$currency_code}";

	//$doc = file($requrl);
	$doc = file($scripturl);
	$doc = implode($doc, '');

	// инициализируем массив
	$r = array();

	// ищем <ValCurs>...</ValCurs>
/*	if(preg_match("/<ValCurs.*?>(.*?)<\/ValCurs>/is", $doc, $m))
		// а потом ищем все вхождения <Record>...</Record>
		preg_match_all("/<Record(.*?)>(.*?)<\/Record>/is", $m[1], $r, PREG_SET_ORDER);
*/
	$m = array();	// его уже использовали, реинициализируем
	$d = array();	// этот тоже проинициализируем

	// Сканируем на предмет самых нужных цифр
	for($i=0; $i<count($r); $i++) {
		/*if(preg_match("/Date=\"(\d{2})\.(\d{2})\.(\d{4})\"/is", $r[$i][1],$m)) {
			$dv = "{$m[1]}/{$m[2]}/{$m[3]}"; // Приводим дату в норм. вид
		*/	if(preg_match("/<Nominal>(.*?)<\/Nominal>.*?<Value>(.*?)<\/Value>/is", $r[$i][2], $m)) {
				$m[2] = preg_replace("/,/",".",$m[2]);
				$d[] = array($dv, $m[1], $m[2]);
				}
			}
		//}
	
	foreach($d as $n)
	{
	var_dump('valuta'.$n[0]);}
	/*$last = array_pop($d);				# последний известный день
	$prev = array_pop($d);				# предпосл. известный день
	$date = $last[0];				# отображаемая дата
	$rate = sprintf("%.2f",$last[2]);		# отображаемый курс
	# отображаемое изменение курса, например, "+0.02"
	$delta = (($last[2]>$prev[2])?"+":"").sprintf("%.2f",$last[2]-$prev[2]);

	#echo("$date: $rate ($delta)<BR>");

	header("Content-type: image/png"); # Отдаем HTTP-заголовок с типом данных
	# Создаем пустое изображение
	$im = @ImageCreate(88, 41) or die("Cannot do ImageCreate()");

	# Создаем всякие цвета
	$bg = ImageColorAllocate($im, 240, 255, 233);
	$fg = ImageColorAllocate($im, 0, 0, 0);
	$fg2 = ImageColorAllocate($im, 120, 0, 0);
	$bdr = ImageColorAllocate($im, 224,224,224);
	$bdr2 = ImageColorAllocate($im, 160,160,160);

	# Рисуем первую строку - дату
	$x = (88-ImageFontWidth(2)*strlen($date))/2;
	ImageString($im, 2, $x, 2, $date, $fg);

	# Рисуем вторую строку
	ImageString($im, 2, 25, 14, "USD/RUR", $fg2);

	# Рисуем третью строку - курс и изменение
	ImageString($im, 2, 6, 25, "$rate ($delta)", $fg2);

	# Рисуем рамки
	ImageRectangle($im, 0, 0, ImageSX($im)-2, ImageSY($im)-2, $bdr);
	ImageLine($im,ImageSX($im)-1,1,ImageSX($im)-1, ImageSY($im)-1,$bdr2);
	ImageLine($im,1,ImageSY($im)-1,ImageSX($im)-1, ImageSY($im)-1,$bdr2);

	# Отдаем изображение на выход
	ImagePNG($im);

	# Освобождаем память из-под
	ImageDestroy($im);
	//заменить дату на текущую
	/*$xml = 'http://www.cbr.ru/scripts/XML_daily.asp?date_req=02/03/2002';
	$dom = new DomDocument;
	$dom->preserveWhiteSpace = FALSE;
	$dom->loadXML($xml);
	
	$params = $dom->documentElement->firstChild->getElementsByTagName('param');
	foreach ($params as $param) {
       // Чтобы получать значения атрибутов тега - заменяем nodeValue на getAttribute('атрибут')
       echo $param -> nodeValue.'<br>';
	}*/

	
	function GetBirthday($Minus){
		$Today = "".date("m.d.y").""; 
		$TodayArray = explode('.', $Today);
		$YearPaste = date('Y') - $Minus; 
		$Bithday = $TodayArray[0]."-".$TodayArray[1]."-".$YearPaste;
		return $Bithday;
	}
	
	//определенные банком массивы стран
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