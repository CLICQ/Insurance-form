<?require("header.php");?>

<?
	$qCurrAnswer = "SELECT * FROM `answers` WHERE ID=".$_REQUEST["answerid"];   
	$CurrAnswer = mysql_fetch_array(mysql_query($qCurrAnswer));
	
	$qCurrQuestion = "SELECT * FROM `questions` WHERE ID=".$CurrAnswer["QuestionID"];   
	$CurrQuestion = mysql_fetch_array(mysql_query($qCurrQuestion));
?>

	<script type="text/javascript">
		$( document ).ready(function() {
			$(".left_menu a").removeClass("Active");
			$("#QuestionsAndAnswers").addClass("Active");
		});		
	</script>	
	
	<div class="page_title">
		Удаление ответа <b>"<?=$CurrAnswer["AnswerText"]?>"</b><br/>
		для вопроса <b>"<?=$CurrQuestion["QuestionText"]?>"</b>
	</div>
	<div class="page_content">
		<form method="POST" enctype="multipart/form-data">
			<br/>
			Вы действительно хотите удалить вариант ответа <b>"<?=$CurrAnswer["AnswerText"]?>"</b>?<br/>
			<br/><br/>
			<input type="hidden" name="answer_of_question_id" value="<?=$CurrQuestion["ID"]?>"/>
			<input type="submit" name="delete_answer" class="abutton" value="Удалить"/>
			<a class="abutton" href="editquestionandanswers.php?questionid=<?=$CurrQuestion["ID"]?>">Назад</a>
		</form>
	</div>	

<?require("footer.php");?>