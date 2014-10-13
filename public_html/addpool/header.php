<?	// Header для веб-сервиса добавления опроса
	session_start();
	header("Content-Type: text/html; charset=utf-8");	
	//... Подключаем SQL
	$host='localhost'; // имя хоста (уточняется у провайдера)
	$database='guriev_objavl'; // имя базы данных, которую вы должны создать
	$user='guriev_objavl'; // заданное вами имя пользователя, либо определенное провайдером
	$pswd='y0Euk4D5'; // заданный вами пароль
	 
	$dbh = mysql_connect($host, $user, $pswd) or die("Не могу соединиться с MySQL.");
	mysql_select_db($database) or die("Не могу подключиться к базе.");
	//mysql_query("SET NAMES 'cp1251'");
	
	//............................................................. Авторизируемся
	if(isset($_POST['subm_exit']))
	{
		# Ставим куки
		setcookie("id", "", time() - 60*60*24*30,"/"); 
		setcookie("hash", "", time() - 60*60*24*30,"/");	
		header("Location: /"); exit();
	}
	if (isset($_POST['subm_auth']))
	{
		# Функция для генерации случайной строки 
		function generateCode($length=6){ 
			$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRQSTUVWXYZ0123456789"; 
			$code = ""; 
			$clen = strlen($chars) - 1;   
			while (strlen($code) < $length) { 
				$code .= $chars[mt_rand(0,$clen)];   
			} 
			return $code; 
		}

		$errLogin = array();
		# Вытаскиваем из БД запись, у которой логин равняеться введенному 
		$data = mysql_fetch_assoc(mysql_query("SELECT users_id, users_password FROM `users` WHERE `users_login`='".mysql_real_escape_string($_POST['login'])."' LIMIT 1")); 
		# Сравниваем пароли 
		if($data['users_password'] === md5(md5($_POST['password']))) 
		{ 
			
			# Генерируем случайное число и шифруем его 
			$hash = md5(generateCode(10));    
			# Записываем в БД новый хеш авторизации и IP 
			mysql_query("UPDATE users SET 
							users_hash='".$hash."'
						WHERE users_id='".$data['users_id']."'") or die("MySQL Error: " . mysql_error()); 
			# Ставим куки 
			setcookie("id", $data['users_id'], time()+60*60*24*30,"/"); 
			setcookie("hash", $hash, time()+60*60*24*30,"/"); 
			# Переадресовываем браузер на страницу проверки нашего скрипта 
			header("Location: /"); exit(); 
		}
		else 
		{ 
			$errLogin[] = "Вы ввели неправильный логин/пароль";
		}		
	}
		
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link rel="stylesheet" href="/css/main.css" type="text/css" media="screen, projection"/>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />	
		<title>Irito</title>
	</head>
	<body>		
		<div class="center">
			<div class="h50px"></div>			
