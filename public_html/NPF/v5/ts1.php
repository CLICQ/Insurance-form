<?php
$string = 'Content-Type: text/html;charset=utf-8';
header($string);
	try {
		// Создание SOAP-клиента
		$client = new SoapClient("http://213.33.168.45:8082/txlife.wsdl");
		
		// Посылка SOAP-запроса c получением результат
                print_r($client->__getFunctions());
                
		$result1 = $client->TXLife("http://213.33.168.45:8082/txlife");
                $result2 = $client->TXLifeTransmittal("http://213.33.168.45:8082/txlife");
                $result3 = $client->Ping("http://213.33.168.45:8082/txlife");

                
		echo "Текущий запас на складе: ", $result1;
                echo "Текущий запас на складе: ", $result2;
                echo "Текущий запас на складе: ", $result3;
	} catch (SoapFault $exception) {
		echo $exception->getMessage();	
	}
?>