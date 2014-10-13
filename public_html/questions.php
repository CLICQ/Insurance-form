<?require($_SERVER["DOCUMENT_ROOT"]."/header.php");?>

<?if($UserAuthorized){?>

<?
	if(!isset($_POST["subm_answer"])){
		unset($_SESSION['questions']);
		$qQuestions = "SELECT ID as SelQuestionID,(SELECT COUNT(ID) FROM `answers` WHERE QuestionID=SelQuestionID AND Active=1) as AnswCount FROM `questions` WHERE Active=1";   
		$Questions = mysql_query($qQuestions);		
		while($oneQuestion = mysql_fetch_array($Questions))
		{
			if($oneQuestion["AnswCount"]>1){
				$_SESSION['questions'][$oneQuestion["SelQuestionID"]]='';
			}	
		}
	}
	reset($_SESSION['questions']);
	//$_SESSION['question_curr'] = key($_SESSION['questions']);
	$_SESSION['question_curr'] = array_search('', $_SESSION['questions']);
		//echo "<div style='border:1px solid red'>Текущий заказ наряд <pre>"; print_r($_SESSION['order_code']); echo "</pre></div>";
		//echo "Массив вопросов <pre>"; print_r($_SESSION['questions']); echo "</pre>";
	$qCurrQuestion = "SELECT * FROM `questions` WHERE ID=".$_SESSION['question_curr']." AND Active=1";   
	$CurrQuestion = mysql_fetch_array(mysql_query($qCurrQuestion));
	$qCurrQuestionAnswers = "SELECT * FROM `answers` WHERE QuestionID=".$_SESSION['question_curr']." AND Active=1";   
	$CurrQuestionAnswers = mysql_query($qCurrQuestionAnswers);	
		//echo "<div style='border:1px solid red'>Текущий вопрос <pre>"; print_r($_SESSION['question_curr']); echo "</pre></div>";
	
	if(array_search('', $_SESSION['questions'])){
?>	
		<div class="content_shadow_top"></div>
		<div class="content_text">
			<?=$CurrQuestion["QuestionText"]?>
		</div>
		<div class="content_shadow_bottom"></div>
		<div class="h50px"></div>
		<form method="POST" enctype="multipart/form-data">
			<table class="questions">
				
					<?if($CurrQuestion["Multi"]==1){
					?>
						<?while($oneCurrQuestionAnswer = mysql_fetch_array($CurrQuestionAnswers))
						{
						?>
							<tr>
								<td>
									<div class="checkbox_div">
										<input type="checkbox" name="select_answer[]" value="<?=$oneCurrQuestionAnswer["ID"]?>">
									</div>
									<div class="answ_text"><?=$oneCurrQuestionAnswer["AnswerText"]?></div>
								</td>
							</tr>
						<?
						}
						?>
					<?
					}else{
					?>
						<?while($oneCurrQuestionAnswer = mysql_fetch_array($CurrQuestionAnswers))
						{
						?>
							<tr>
								<td>
									<div class="radio_div">
										<input type="radio" name="select_answer" value="<?=$oneCurrQuestionAnswer["ID"]?>">
									</div>
									<div class="answ_text"><?=$oneCurrQuestionAnswer["AnswerText"]?></div>
								</td>
							</tr>							
						<?
						}
					}
					?>					
			</table>
			<div class="h50px"></div>
			<div class="button_block">
				<input class="button" type="submit" name="subm_answer" value="Следующий"/>
				<!--<a href="thanks.php" class="button">Следующий</a>-->
			</div>
			<?=$Message?>
		</form>
	<?
	}else{
	// Записываем результаты голосования
		$AnsAndQuest="";
		foreach($_SESSION['questions'] as $key => $value)
		{
		  $AnsAndQuest.= $key."_".$value."|_|";
		}	
		$AnsAndQuest = substr($AnsAndQuest, 0, strlen($AnsAndQuest)-3);
		$qUpdateCurrPool = "UPDATE `pool`	
		SET AnsAndQuest = '".$AnsAndQuest."',
			Close=1
		WHERE ID=".$_SESSION['order_code'];		
		if(mysql_query($qUpdateCurrPool))
		{
			//Удаляем все переменные в сессии
			unset($_SESSION['questions']);
			unset($_SESSION['question_curr']);
			unset($_SESSION['order_code']);
	?>
			<div class="content_shadow_top"></div>
			<div class="content_text">
				Спасибо за обращение в наш автосервис.<br/><br/>
				<b>Приезжайте к нам еще!</b>
			</div>
			<div class="content_shadow_bottom"></div>
			<div class="h50px"></div>
			<div class="button_block">
				<a href="/" class="button">
					До свидания!
				</a>
			</div>	
	<?
		}
	}
	?>
	
<?}?>	

<!-- Footer -->
<?require($_SERVER["DOCUMENT_ROOT"]."/footer.php");?>