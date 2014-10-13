<?require("header.php");?>

<?
	$qCurrQuestion = "SELECT * FROM `questions` WHERE ID=".$_REQUEST["questionid"];   
	$CurrQuestion = mysql_fetch_array(mysql_query($qCurrQuestion));
?>

	<script type="text/javascript">
		$( document ).ready(function() {
			$(".left_menu a").removeClass("Active");
			$("#QuestionsAndAnswers").addClass("Active");
		});		
	</script>	
	
	<div class="page_title">
		Удаление вопроса <b>"<?=$CurrQuestion["QuestionText"]?>"</b>
	</div>
	<div class="page_content">
		<form method="POST" enctype="multipart/form-data">
			Вы действительно хотите удалить вопрос <b>"<?=$CurrQuestion["QuestionText"]?>"</b>, включая все варианты ответов на него? 
			<br/><br/>
			<input type="submit" name="delete_question" class="abutton" value="Удалить вопрос с ответами"/>
			<a class="abutton" href="questionsandanswers.php">Назад</a>
		</form>
	</div>	

<?require("footer.php");?>