<?require("header.php");?>

<?
	$qQuestionsList = "SELECT * FROM `questions`";   
	$QuestionsList = mysql_query($qQuestionsList);	
?>
	<script type="text/javascript">
		$( document ).ready(function() {
			$(".left_menu a").removeClass("Active");
			$("#QuestionsAndAnswers").addClass("Active");
		});		
	</script>	
	
	<div class="page_title">
		Вопросы и ответы
	</div>
	<div class="page_content">
		<table class="w100pers">
			<tr>
				<td><b>Текст вопроса</b></td>
				<td><b>Множ.</b></td>
				<td><b>Активен</b></td>	
				<td></td>
				<td></td>				
			</tr>		
		<?
		while($oneQuestion = mysql_fetch_array($QuestionsList))
		{
			$qAnswersList = "SELECT * FROM `answers` where QuestionID=".$oneQuestion["ID"];   
			$AnswersList = mysql_query($qAnswersList);			
		?>
			<tr>
				<td style="width:50%">
					<?=$oneQuestion["QuestionText"]?>
					<div class="CurrQuestAnswers">
						<?
						while($oneAnswer = mysql_fetch_array($AnswersList))
						{
						?>
							<div><?=$oneAnswer["AnswerText"]?></div>
						<?
						}
						?>
					</div>	
				</td>
				<td><?if($oneQuestion["Multi"]==1){echo "Да";}?></td>	 			
				<td><?if($oneQuestion["Active"]==1){echo "Да";}?></td>
				<td><a href="editquestionandanswers.php?questionid=<?=$oneQuestion["ID"]?>">Изменить</a></td>
				<td><a href="deletequestionandanswers.php?questionid=<?=$oneQuestion["ID"]?>">Удалить</a></td>				
			</tr>
		<?
		}
		?>
		</table>
		<br/>
		<a class="abutton" href="addquestionsandanswers.php" style="float:right">+&nbsp;Добавить вопрос с ответами</a>
	</div>	

<?require("footer.php");?>