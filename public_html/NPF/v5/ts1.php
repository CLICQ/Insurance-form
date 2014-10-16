<?php
$string = 'Content-Type: text/html;charset=utf-8';
header($string);
	try {
		// Создание SOAP-клиента
		$client = new SoapClient("http://213.33.168.45:8082/txlife.wsdl");
		
		// Посылка SOAP-запроса c получением результат
               print_r($client->__getFunctions());
                exit;
		$result1 = $client->Ping("ConfirmationID");
                $result2 = $client->TXLife();
                $result3 = $client->TXLifeTransmittal();
		echo  $result1;
                echo  $result2;
                echo  $result3;
	} catch (SoapFault $exception) {
		echo $exception->getMessage();	
	}
?>