<?php
$string = 'Content-Type: text/html;charset=utf-8';
header($string);
	try {
		// Создание SOAP-клиента
		$client = new SoapClient("http://213.33.168.45:8082/txlife.wsdl");
		
		// Посылка SOAP-запроса c получением результат
               print_r($client->__getFunctions());
               
		$result1 = $client->Ping("CL_FAMILY");
                $result2 = $client->TXLife("Request1");
                $result3 = $client->TXLifeTransmittal("CL_FAMILY");

                echo  $result3;
	} catch (SoapFault $exception) {
		echo $exception->getMessage();	
	}