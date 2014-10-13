<?require("header.php");?>

<?

	if(isset($_POST["edit_question"]) AND isset($_REQUEST["questionid"])){
		if(isset($_POST["edit_question_multi"])){$Multi=1;}else{$Multi=0;} 
		if(isset($_POST["edit_question_active"])){$Active=1;}else{$Active=0;}

		
		$qUpdateQuestion = "UPDATE `questions` 
			SET QuestionText = '".$_POST["edit_question_text"]."',
				Multi = '".$Multi."',
				Active = '".$Active."'
		WHERE ID=".$_REQUEST['questionid'];
		if(mysql_query($qUpdateQuestion)){
			$SaveOK = "<tr><td colspan='2' style='color:#159974;background:#fff'>Данные сохранены!</td></tr>";
		}
	}

	$qCurrQuestion = "SELECT * FROM `questions` WHERE ID=".$_REQUEST["questionid"];   
	$CurrQuestion = mysql_fetch_array(mysql_query($qCurrQuestion));
	
	$qCurrQuestionAnswers = "SELECT * FROM `answers` WHERE QuestionID=".$_REQUEST["questionid"];   
	$CurrQuestionAnswers = mysql_query($qCurrQuestionAnswers);
	/*
	$ArrCurrQuestionAnswer = Array();
	while($oneCurrQuestionAnswer = mysql_fetch_array($CurrQuestionAnswers)){
		$ArrCurrQuestionAnswer[$oneCurrQuestionAnswer["ID"]] = $oneCurrQuestionAnswer["AnswerText"];
	}
	*/
	//echo "<pre>"; print_r($ArrCurrQuestionAnswer); echo "</pre>";	

?>

	<script type="text/javascript">
		$( document ).ready(function() {
			$(".left_menu a").removeClass("Active");
			$("#QuestionsAndAnswers").addClass("Active");
		});		
	</script>
	
	<div class="page_title">
		Изменить вопрос с ответами
	</div>
	<div class="page_content">
		<form method="POST" enctype="multipart/form-data">
			<table class="w100pers">
				<tr>
					<td style="width:250px"><b>Текст вопроса</b></td>
					<td>
						<input name="edit_question_text" type="text" value="<?=$CurrQuestion["QuestionText"]?>" style="width:700px"/>
					</td>				
				</tr>
				<tr>
					<td><b>Ответы</b></td>
					<td class="answers_add_td">
						<table>
							<?$i=1?>
							<?while($oneCurrQuestionAnswer = mysql_fetch_array($CurrQuestionAnswers)){?>
								<tr>
									<td>
										<?=$i?>
									</td>								
									<td>
										<div class="answer"><?=$oneCurrQuestionAnswer["AnswerText"]?></div>
									</td>
									<td>
										<a href="editanswer.php?answerid=<?=$oneCurrQuestionAnswer["ID"]?>">Изменить</a>
									</td>
									<td>
										<a href="deleteanswer.php?answerid=<?=$oneCurrQuestionAnswer["ID"]?>">Удалить</a>
									</td>								
								</tr>								
							<?
							$i++;	
							}
							?>							
						</table>
						<!--
						<div class="answer">1.&nbsp;<input name="answer_add[]" type="text" value="<?//=$ArrCurrQuestionAnswer[0]?>"/></div> 
						<div class="answer">2.&nbsp;<input name="answer_add[]" type="text" value="<?//=$ArrCurrQuestionAnswer[1]?>"/></div>
						<div class="answer">3.&nbsp;<input name="answer_add[]" type="text" value="<?//=$ArrCurrQuestionAnswer[2]?>"/></div>
						<div class="answer">4.&nbsp;<input name="answer_add[]" type="text" value="<?//=$ArrCurrQuestionAnswer[3]?>"/></div>
						<div class="answer">5.&nbsp;<input name="answer_add[]" type="text" value="<?//=$ArrCurrQuestionAnswer[4]?>"/></div>
						<div class="answer">6.&nbsp;<input name="answer_add[]" type="text" value="<?//=$ArrCurrQuestionAnswer[5]?>"/></div>
						<div class="answer">7.&nbsp;<input name="answer_add[]" type="text" value="<?//=$ArrCurrQuestionAnswer[6]?>"/></div>
						<div class="answer">8.&nbsp;<input name="answer_add[]" type="text" value="<?//=$ArrCurrQuestionAnswer[7]?>"/></div>
						-->
						<br/>
						<a class="abutton" href="addanswer.php?questionid=<?=$CurrQuestion["ID"]?>">+ добавить ответ</a>
						<br/><br/>
						<!--
						<span>* вы можете добавить не менее 2-х вариантов ответа</span>
						-->
					</td>				
				</tr>				
				<tr>
					<td><b>Множественный выбор ответа</b></td>
					<td style="vertical-align:middle">
						<input name="edit_question_multi" type="checkbox"  <?if($CurrQuestion["Multi"]==1){?>checked<?}?>/>   
					</td>				
				</tr>
				<tr>
					<td><b>Активен</b></td>
					<td style="vertical-align:middle">
						<input name="edit_question_active" type="checkbox"  <?if($CurrQuestion["Active"]==1){?>checked<?}?>/>   
					</td>				
				</tr>				
				<?
				if (isset($err)) {
				?>
					<tr>
						<td colspan="2" style="color:#F84444;background:#fff">
						<?
						print "<b>При создании вопроса произошли следующие ошибки:</b><br>";
						foreach($err AS $error) 
						{	 
							print $error."<br>"; 
						}							
						?>
						</td>
					</tr>
				<?}?>
				<?=$SaveOK;?>				
			</table>
			<br/>
			<input type="submit" name="edit_question" class="abutton" value="Сохранить изменения"/>
			<a class="abutton" href="questionsandanswers.php">Назад</a>
		</form>
	</div>	

<?require("footer.php");?>