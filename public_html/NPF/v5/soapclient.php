<?php
$string = 'Content-Type: text/html;charset=utf-8';
header($string);
include '/SoapClass/BaseAutomaticGeneratePearClass.php';
	try {
		// Создание SOAP-клиента
		$client = new SoapClient("http://213.33.168.45:8082/txlife.wsdl");
		$ClientPing = new AcordLifeBasic_Service;
//		 Посылка SOAP-запроса c получением результат
//               print_r($client->__getFunctions());
//               print_r($client->__getTypes('</br>'));
//		 $result1 = $client->Ping("Ping_Type");
//               $result = $client->TXLife(serialize(AcordLifeBasic_Service::classmap));
//               $result3 = $client->TXLifeTransmittal("CL_FAMILY");
//               echo  AcordLifeBasic_Service::classmap;
                 $ping1 = $client->Ping($ClientPing->Ping($Ping_Part));
                
                 echo Ping_Type::Ping;
                
                
	} catch (SoapFault $exception) {
		echo $exception->getMessage();	
	}
        
        echo $client->Ping(AcordLifeBasic_Service::$classmap);