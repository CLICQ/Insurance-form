<?php
$string = 'Content-Type: text/html;charset=utf-8';
header($string);
	try {
		// Создание SOAP-клиента
		$client = new SoapClient("http://213.33.168.45:8082/txlife.wsdl");
		
		// Посылка SOAP-запроса c получением результат
               print_r($client->__getFunctions());
               
		$result1 = $client->Ping("s-mule-test");
                $result2 = $client->TXLife("s-mule-test");
                $result3 = $client->TXLifeTransmittal("s-mule-test");
		echo  $result1;
                echo  $result2;
                echo  $result3;
	} catch (SoapFault $exception) {
		echo $exception->getMessage();	
	}