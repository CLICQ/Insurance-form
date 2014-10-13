<?	
	session_start();
	header("Content-Type: text/html; charset=utf-8");	
	//... Подключаем SQL
	$host='localhost'; // имя хоста (уточняется у провайдера)
	$database='guriev_objavl'; // имя базы данных, которую вы должны создать
	$user='guriev_objavl'; // заданное вами имя пользователя, либо определенное провайдером
	$pswd='y0Euk4D5'; // заданный вами пароль
	$dbh = mysql_connect($host, $user, $pswd) or die("Не могу соединиться с MySQL.");
	mysql_select_db($database) or die("Не могу подключиться к базе.");
	
	if(isset($_POST['subm_exit']))
	{
		# Ставим куки
		setcookie("id", "", time() - 60*60*24*30,"/"); 
		setcookie("hash", "", time() - 60*60*24*30,"/");	
		header("Location: /dealer/"); exit();
	}	
	
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
			header("Location: /dealer/"); exit(); 
		}
		else 
		{ 
			$errLogin[] = "Вы ввели неправильный логин/пароль";
		}		
	}	
	//............................................................. Проверка, авторизован ли пользователь
	$UserAuthorized = false;
	if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])) 
	{    
		$userdata = mysql_fetch_assoc(mysql_query("SELECT * FROM users WHERE users_id = '".intval($_COOKIE['id'])."' LIMIT 1"));
		if(($userdata['users_hash'] !== $_COOKIE['hash']) or ($userdata['users_id'] !== $_COOKIE['id'])) 
		{ 
			setcookie('id', '', time() - 60*24*30*12, '/'); 
			setcookie('hash', '', time() - 60*24*30*12, '/');
			setcookie('errors', '1', time() + 60*24*30*12, '/');
			//header('Location: login.php'); exit();
		}
		else
		{
			$UserAuthorized = true;
		}	
	} 
	else 
	{ 
		setcookie('errors', '2', time() + 60*24*30*12, '/');
		//header('Location: login.php'); exit();
	}	
	//echo $UserAuthorized;
	//....................................................................................................	

	if(isset($_POST["add_dealer"])){  
			$err = array();
			if(strlen($_POST['dealer_name_reg']) <= 3){$err[] = "Название дилера не может быть пустым или состоять из трех и менее симвлов"; }
			if(strlen($_POST['dealer_code_reg']) <= 3){$err[] = "Код дилера не может быть пустым или состоять из трех и менее симвлов";}			
			if(strlen($_POST['password_reg']) < 6){$err[] = "Пароль не быть меньше шести символов";}
			if($_POST['password_reg']!=$_POST['passworddubl_reg']){$err[] = "Пароли не совпадают";}	
			# проверям логин 
			if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login_reg'])){$err[] = "Логин может состоять только из букв английского алфавита и цифр";} 
			if(strlen($_POST['login_reg']) < 3 or strlen($_POST['login_reg']) > 30){$err[] = "Логин должен быть не меньше 3-х символов и не больше 30";} 
			/*
			if($_SESSION['secpic'] AND $_SESSION['secpic'] != strtolower($_POST['captcha_reg'])) 
			{ 
				$err[] = "Не правильный код проверки(Capcha)"; 
			}		
			*/	
			# проверяем, не сущестует ли пользователя с таким именем 
			$query = mysql_query("SELECT COUNT(users_id) FROM users WHERE users_login='".mysql_real_escape_string($_POST['login_reg'])."'")or die ("<br>Invalid query: " . mysql_error()); 
			if(mysql_result($query, 0) > 0) 
			{ 
				$err[] = "Пользователь с таким логином уже существует в базе данных"; 
			} 
			# Если нет ошибок, то добавляем в БД нового пользователя 
			if(count($err) == 0) 
			{ 
				$login = $_POST['login_reg']; 
				# Убераем лишние пробелы и делаем двойное шифрование 
				$password = md5(md5(trim($_POST['password_reg']))); 
				mysql_query("INSERT INTO users 
					SET users_login='".$login."', 
						users_password='".$password."',
						DealerName='".$_POST["dealer_name_reg"]."',
						DealerCode='".$_POST["dealer_code_reg"]."'
						");		
				header("Location: /admin/"); exit();
			}		
	}
	
	if(isset($_POST["delete_dealer"]) AND isset($_REQUEST["dealerid"])){
		$qDeleteDealer = "DELETE FROM `users` WHERE users_id=".$_REQUEST['dealerid'];
		if(mysql_query($qDeleteDealer)){
			header("Location: /admin/"); exit();	
		}			
	}
	
	
	if(isset($_POST["add_question"])){
		$err = array();
		if(strlen($_POST["add_question_text"]) <= 3){$err[] = "Текст вопроса не может быть пустым или состоять из трех и менее симвлов"; }
		$ArrAddingAnswers = Array();
		foreach($_POST["answer_add"] as $OneAddingAnswer){
			if(str_replace(' ', '', $OneAddingAnswer)!=""){
				$ArrAddingAnswers[] = $OneAddingAnswer;
			}
		}
		if(isset($_POST["add_question_multi"])){$Multi=1;}else{$Multi=0;}
		if(isset($_POST["add_question_active"])){$Active=1;}else{$Active=0;}
		if(count($ArrAddingAnswers) < 2){$err[] = "Добавьте хотя-бы два ответа на вопрос"; }
		if(count($err) == 0) 
		{
			$AddQuestion = "INSERT INTO questions SET QuestionText='".$_POST["add_question_text"]."',Multi='".$Multi."',Active='".$Active."'";
			if(mysql_query($AddQuestion)){
				if(mysql_insert_id()){
					$AddedQuestionID = mysql_insert_id();
					foreach($ArrAddingAnswers as $OneAddingAnswer){
						mysql_query("INSERT INTO answers SET AnswerText='".$OneAddingAnswer."', QuestionID=".$AddedQuestionID);				
					}
					header("Location: questionsandanswers.php"); exit();
				}	
			}
		}		
	}
		
	if(isset($_POST["delete_question"]) AND isset($_REQUEST["questionid"])){
		$qDeleteQuestion = "DELETE FROM `questions` WHERE ID=".$_REQUEST['questionid'];
		if(mysql_query($qDeleteQuestion)){
			$qDeleteAnswers = "DELETE FROM `answers` WHERE QuestionID=".$_REQUEST['questionid'];
			if(mysql_query($qDeleteAnswers)){
				header("Location: questionsandanswers.php"); exit();
			}	
		}
	}
	
	if(isset($_POST["delete_pool"]) AND isset($_REQUEST["poolid"])){
		$qDeletePool = "DELETE FROM `pool` WHERE ID=".$_REQUEST['poolid']." AND DealerCode=".$userdata['DealerCode'];
		if(mysql_query($qDeletePool)){
			header("Location: /dealer/"); exit();	
		}			
	}
	
	if(isset($_POST["add_answer"]) AND isset($_REQUEST["questionid"])){
		if(strlen($_POST['add_answer_text']) <= 3){$err[] = "Текст не может быть пустым или состоять из трех и менее симвлов"; }
		if(isset($_POST["add_answer_active"])){$Active=1;}else{$Active=0;}
		$AddAnswer = "INSERT INTO answers SET AnswerText='".$_POST['add_answer_text']."',QuestionID='".$_REQUEST["questionid"]."',Active='".$Active."'";
		if(mysql_query($AddAnswer)){
			header("Location: editquestionandanswers.php?questionid=".$_REQUEST["questionid"]); exit();
		}
	}
	
	if(isset($_POST["delete_answer"]) AND isset($_REQUEST["answerid"]) AND isset($_POST["answer_of_question_id"])){  
		$qDeleteAnswer = "DELETE FROM `answers` WHERE ID=".$_REQUEST['answerid'];
		if(mysql_query($qDeleteAnswer)){
			header("Location: editquestionandanswers.php?questionid=".$_POST["answer_of_question_id"]); exit();	
		}			
	}	
	
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link rel="stylesheet" href="/css/main.css" type="text/css" media="screen, projection"/>
		<script type="text/javascript" src="/js/jquery-1.7.2.js"></script>
		<!--
		<script type="text/javascript">
			$( document ).ready(function() {
			});		
		</script>
		-->
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />	
		<title>Irito</title>
	</head>
	<body>
	
		<?if($UserAuthorized){?>
		<table class='admin_table'>
			<tr class="admin_head">
				<td>
					<img src="/images/logo_irito.png">
				</td>
				<td>
					<h2>Панель дилера - <?=$userdata['DealerName']?></h2> 
					<?if($UserAuthorized){?>
						<form method="POST" enctype="multipart/form-data">
							<input class="abutton" type="submit" name="subm_exit" style="position:absolute;right:10px;top:10px" value="Выйти из системы"/>
						</form>		
					<?}?>
				</td>				
			</tr>			
			<tr>
				<td class="left_menu">
					<div><a href="/">К опросам</a></div>
					<div><a href="/dealer/" id="OpenPools">Открытые опросы</a></div>
					<div><a href="reports.php" id="Reports">Отчеты</a></div>					
				</td>
				<td class="admin_content">		

		<?}?>				
