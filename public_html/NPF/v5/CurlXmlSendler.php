<?php
/* -------------------------------------------------------------------------
(c) spellabs 2014
Vasiluk Dmitrij 10.20.2014
-------------------------------------------------------------------------- */
header('Content-Type: text/html; charset=utf-8');
	session_start();
	error_reporting( E_ERROR );
	include "calculate.php";
       

$request  .= '<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/"><soap:Body><TXLife xmlns="http://ACORD.org/Standards/Life/2" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ACORD.org/Standards/Life/2 schemas/TXLife2.28.00.xsd">
	 <TXLifeRequest>
		<TransRefGUID>A1DCF553-ECEC-4A84-A630-9196AA5FC18F</TransRefGUID>
		<TransType tc="508">Payment Transaction</TransType>
		<TransExeDate>2014-10-13</TransExeDate>
		<TransExeTime>11:16:49</TransExeTime>
		<OLifE>
		<SourceInfo>
			<SourceInfoName>http://www.cbins.ru/ex/form/?key=</SourceInfoName>
		</SourceInfo>
		<Holding id="Policy_1">
			<HoldingTypeCode tc="2">Policy</HoldingTypeCode>
			<Policy>
			 <!-- Номер договора (поле строкового типа, необязательное), -->
			 <PolNumber>100000592</PolNumber>
			 <FinancialActivity id="FinancialActivity_1">
				<Payment>
					 <!-- Сумма платежа (необязательное). -->

					<PaymentAmt>75917</PaymentAmt>
				</Payment>
			 </FinancialActivity>
			 <OLifEExtension VendorCode="470">
				<PDest>kbs</PDest>
				 <!-- Дата первой операции -->
				 <StartPayDate>2014-10-13T11:16:49</StartPayDate>
				 <!--Дата последней операции-->
				 <LastPayDate>2014-10-14T11:16:49</LastPayDate>
				 <!-- Количество списаний -->
				 <PaymentCount/>
				 <!--Рассрочка, т.е. кол-во месяцев между платежами. Платеж осуществляется в один и тот же день каждого месяца. Если в месяце нет нужного дня - платеж осуществляется в предыдущий день-->
				 <Installment>0</Installment>
					 <!-- Информация о теле запроса, если таковая присутствует -->
				 <MessageBody><![CDATA[<?xml version="1.0" encoding="UTF-8"?>
<TXLife xmlns="http://ACORD.org/Standards/Life/2" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ACORD.org/Standards/Life/2 TXLife2.28.00.xsd">
	<TXLifeRequest>
		<TransRefGUID>A1DCF553-ECEC-4A84-A630-9196AA5FC18F</TransRefGUID>
		<!-- GUID транзакции -->
		<TransType tc="103">Новый полис ДМС</TransType>
		<!-- tc 103 - запрос типа - новый полис дмс -->
		<TransExeDate>2014-10-13</TransExeDate>
		<!-- Дата начала транзакции -->
		<TransExeTime>11:16:49</TransExeTime>
		<!-- время начала транзакции -->
		<TestIndicator tc="1">True</TestIndicator>
		<!-- Является ли тестовым запросом -->
		<OLifE>
				<SourceInfo>
					<SourceInfoName>AISDMS</SourceInfoName>
					<!-- Идентификатор внешней системы-->
				</SourceInfo>				
			<Holding id="Policy_1">
				<HoldingKey>996e3552-3d4c-11e2-86f1-005056a307e3</HoldingKey>
				<!-- Ключ объекта во внешней системе-->
				<HoldingTypeCode tc="2">Policy</HoldingTypeCode>
				<!-- tc =2 - Страховой полис -->
				<CurrencyTypeCode tc="810">RUR</CurrencyTypeCode>
				<Policy>
					<PolNumber>100000592</PolNumber>
					<ProductType tc="22">Travel Accident</ProductType>
					<!-- код 13 - DisabilityHealth: Major Medical ACORD-->
					<ProductCode>outbound</ProductCode>
					<!-- Код продукта -->
					<PlanName>Дальние края</PlanName>
					<!-- Наименование продукта -->
					<Duration>0.0273973</Duration>
					<!--срок действия договора страхования в годах, если месяцы - в дробной части-->
					<EffDate>2014-10-14</EffDate>
					<!-- дата вступления полиса в силу -->
					<IssueDate>2014-10-13</IssueDate>
					<!-- дата выдачи полиса/дата заключения догово]]><![CDATA[ра -->
					<TermDate>2014-11-7</TermDate>
					<!-- дата дата окончания действия договора-->]]><![CDATA[
					<PaymentAmt>75917</PaymentAmt>
					<!-- страховя премия -->
					<Territory>77</Territory>
					<!--территория-->

					<Sport></Sport>
					
					
					<!--страхователь-->
					
					<CL_GENDER></CL_GENDER>
					<CL_FAMILY>Макарова</CL_FAMILY>
					<CL_NAME>Ирина</CL_NAME>
					<CL_LAST_NAME>Александровна</CL_LAST_NAME>
					<CL_DATA>1985-10-11</CL_DATA>
					
					<CL_PHONE_MOB>+79220228161</CL_PHONE_MOB>
					<CL_MAIL>sea-surf@yandex.ru</CL_MAIL>
					

					
					
					<ApplicationInfo>
							<!-- дата заполнения полиса -->
						<SubmissionDate>2014-10-13</SubmissionDate>
						<SubmissionTime>11:16:49</SubmissionTime>
						</ApplicationInfo>
					
					<OLifEExtension VendorCode="470">
							<AutoRenewal>0</AutoRenewal> <!--автоматическая пролонгация договора страхования по истечении его действия-->
							<PayoutPeriod/> <!--период выплат по договору страхования (периодические платежи, аннуитет). выражается в годах-->
							<SalesPersonName>Сайт РСС</SalesPersonName> <!-- Продавец -->
							<SalesPersonCode>410157</SalesPersonCode>
							<SalesChannel>Прямые продажи</SalesChannel> <!-- Канал продаж -->
							<SalesType>Прямая</SalesType> <!-- Тип продажи -->
					</OLifEExtension>
				</Policy>
				<OLifEExtension VendorCode="470">
					<CurrencyPayTypeCode tc="">euro</CurrencyPayTypeCode>
					<!-- валюта оплаты-->
					< >30000</SumInsured>
					<!-- страховая сумма по договору -->
					
					<Sum>14.87</Sum>
					<!-- страховая премия по договору -->
					
				</OLifEExtension>
				
			</Holding>
			
			
			
				<Party id="Party_1">
					<PartyTypeCode tc="1">Individual</PartyTypeCode>
					<!-- 1 - Физ Лицо, 2 - Юр Лицо -->
					<PartyKey></PartyKey>
					<FullName>Makarova  Irina</FullName>
					<Person>
						<FirstName>Irina</FirstName>
						<MiddleName></MiddleName>
						<LastName>Makarova</LastName>
						<Prefix/>
						<Suffix/>
						<Gender tc="1">Male</Gender>
						<!-- 1 муж, 0 -жен -->
						<BirthDate>1985-10-11</BirthDate>
						<Citizenship tc="7">Russian Federation</Citizenship>
						<!--Гражданство, 7 - Россия -->
						<OLifEExtension VendorCode="470">
							<EngLastName></EngLastName>
							<EngFirstName></EngFirstName>
						</OLifEExtension>
					</Person>
					<Risk>
						<LifeStyleActivity>	
							
								
									<ForeignTravel>
										<TravelCountry tc="999" t="1">Финляндия</TravelCountry> <!-- страна пребывания-->
										<TravelEvent>
											<TravelEventDuration>10</TravelEventDuration> <!-- к]]><![CDATA[оличество дней пребывания за рубежом -->
											<DurationUnitMeasure tc="67">Days</DurationUnitMeasure>
										</TravelEvent>
									</ForeignTravel>
								
							
							
								<ForeignTravel>
									<TravelCountry tc="999" t="2">Schengen</TravelCountry> <!-- страна пребывания-->
									<TravelEvent>
										<TravelEventDuration>10</TravelEventDuration> <!-- количество дней пребывания за рубежом -->
										<DurationUnitMeasure tc="67">Days</DurationUnitMeasure>
									</TravelEvent>
								</ForeignTravel>
								
						</LifeStyleActivity>
					</Risk>
					
				</Party>
				
				
				
			
				<Party id="Party_2">
					<PartyTypeCode tc="1">Individual</PartyTypeCode>
					<!-- 1 - Физ Лицо, 2 - Юр Лицо -->
					<PartyKey></PartyKey>
					<FullName>Zhukova  Arina</FullName>
					<Person>
						<FirstName>Arina</FirstName>
						<MiddleName></MiddleName>
						<LastName>Zhukova</LastName>
						<Prefix/>
						<Suffix/>
						<Gender tc="1">Male</Gender>
						<!-- 1 муж, 0 -жен -->
						<BirthDate>2008-12-26</BirthDate>
						<Citizenship tc="7">Russian Federation</Citizenship>
						<!--Гражданство, 7 - Россия -->
						<OLifEExtension VendorCode="470">
							<EngLastName></EngLastName>
							<EngFirstName></EngFirstName>
						</OLifEExtension>
					</Per]]><![CDATA[son>
					<Risk>
						<LifeStyleActivity>	
							
								
									<ForeignTravel>
										<TravelCountry tc="999" t="1">Финляндия</TravelCountry> <!-- страна пребывания-->
										<TravelEvent>
											<TravelEventDuration>10</TravelEventDuration> <!-- количество дней пребывания за рубежом -->
											<DurationUnitMeasure tc="67">Days</DurationUnitMeasure>
										</TravelEvent>
									</ForeignTravel>
								
							
							
								<ForeignTravel>
									<TravelCountry tc="999" t="2">Schengen</TravelCountry> <!-- страна пребывания-->
									<TravelEvent>
										<TravelEventDuration>10</TravelEventDuration> <!-- количество дней пребывания за рубежом -->
										<DurationUnitMeasure tc="67">Days</DurationUnitMeasure>
									</TravelEvent>
								</ForeignTravel>
								
						</LifeStyleActivity>
					</Risk>
					
				</Party>
				
				
				
			
			
			<Holding id="Banking_1">
				<Banking>
					<BankAcctType tc="2"></BankAcctType>
					<AccountNumber></AccountNumber>
					<AcctHolderName></AcctHolderName>
					<BankName></BankName>
					<OLifEExtension VendorCode="">
						<CorrAccountNumber></CorrAccountNumber>
						<BIC></BIC>
						<INN></INN>
						<KPP></KPP>
					</OLifEExtension>
				</Banking>
			</Holding>
			<Holding id="asd">
			</Holding>
			<!-- Связ физ лица с ID - Party_1 и полиса - Policy_1. Роль связи 32 - Застрахованный, т.е. Party_1 является застрахованным лицом в полисе Policy_1 -->
			<Relation id="Relation_1" OriginatingObjectID="Policy_1" RelatedObjectID="Party_1">
				<OriginatingObjectType tc="4">Holding</OriginatingObjectType>
				<RelatedObjectType tc="6">Party</RelatedObjectType>
				<RelationRoleCode tc="32">Insured</RelationRoleCode>
			</Relation>
			<!-- Связ физ лица с ID - Party_2. и полиса - Policy_1. Роль связи 95 - Контрагент, т.е. Party_2 является контранетом для лица Policy_1 -->
			<Relation id="Relation_2" OriginatingObjectID="Policy_1" RelatedObjectID="Party_2">
					<OriginatingObjectType tc="4">Holding</OriginatingObjectType>
				<RelatedObjectType tc="6">Party</RelatedObjectType>
				<RelationRoleCode tc="95">Counter signing Agent</RelationRoleCode>
			</Relation>
			<!-- Связ физ лица с ID - Party_1 и юрлица - Party_2. Роль связи 80 - Страхователь, т.е. Party_2 является страхователем	для лица Party_1 -->
			<Relation id="Relation_3" OriginatingObjectID="Policy_1" RelatedObjectID="Party_2">
					<OriginatingObjectType tc="6">Party</OriginatingObjectType>
				<RelatedObjectType tc="6">Party</RelatedObjectType>
				<RelationRoleCode tc="80">Health Insurer</RelationRoleCode>
		]]><![CDATA[	</Relation>
		</OLifE>
	</TXLifeRequest>
</TXLife>
				 ]]></MessageBody>
			 </OLifEExtension>
			</Policy>
		 </Holding>
		 <Party id="Party_1">
			<PartyTypeCode tc="1">Individual</PartyTypeCode>
			<!-- Контактный номер телефона (необязательное) -->
			<Phone>
			 <PhoneTypeCode tc="12">Cell</PhoneTypeCode>
			 <!-- 1 - Домашний, 12 - мобильный, 2- рабочий -->
			 <CountryCode/>
			 <AreaCode/>
			 <DialNumber>+79220228161</DialNumber>
			</Phone>
			<!-- Электронная почта (необязательное) -->
			<EMailAddress>
			 <AddrLine>sea-surf@yandex.ru</AddrLine>
			</EMailAddress>
		 </Party>
		 <Relation id="Relation_1" OriginatingObjectID="Policy_1" RelatedObjectID="Party_1">
			 <OriginatingObjectType tc="4">Holding</OriginatingObjectType>
			 <RelatedObjectType tc="6">Party</RelatedObjectType>
			 <RelationRoleCode tc="31">Payer</RelationRoleCode>
		 </Relation>
		</OLifE>
	 </TXLifeRequest>
	</TXLife></soap:Body></soap:Envelope>';

$curl_options = array (
  CURLOPT_URL => 'http://213.33.168.45:8082/txlife.wsdl',
  CURLOPT_POST => TRUE,
  CURLOPT_RETURNTRANSFER => FALSE,
  CURLOPT_HEADER => array(
        'POST /Remote/Remote.asmx HTTP/1.1', 
        'Host: site.com', 
        'Content-Type: text/xml; charset=utf-8', 
        'Content-Length: '.strlen(($request)).'',
        'SOAPAction: "http://213.33.168.45:8082/txlife"'
    ),
  CURLOPT_POSTFIELDS => ($request)
  
);
$curl = curl_init() or die("cURL init error");
curl_setopt_array($curl, $curl_options) or die("cURL set options error" . curl_error($curl));
$response = curl_exec($curl) or die ("cURL execute eroor" . curl_error($curl));
//print_r('<p class="font-size:14px;">'.$request.'</p>');
print_r($response);
curl_close($curl);
?>


