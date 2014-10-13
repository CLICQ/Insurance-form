<?php
$string = 'Content-Type: text/html;charset=utf-8';
header($string);
	try {
		// Создание SOAP-клиента
		$client = new SoapClient("http://213.33.168.45:8082/txlife.wsdl");
		
		// Посылка SOAP-запроса c получением результат
                print_r($client->__getFunctions());
                exit;
		$result = $client->getStock("TXLife_Type");
		echo "Текущий запас на складе: ", $result;
	} catch (SoapFault $exception) {
		echo $exception->getMessage();	
	}
?>