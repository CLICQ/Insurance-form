<?require("header.php");?>

<?
	if(isset($_POST["edit_answer"]) AND isset($_REQUEST["answerid"])){
		if(isset($_POST["answer_edit_active"])){$Active=1;}else{$Active=0;}
		$qUpdateAnswer = "UPDATE `answers` 
			SET AnswerText = '".$_POST["answer_edit_text"]."',
				Active = '".$Active."'
		WHERE ID=".$_REQUEST['answerid'];
		if(mysql_query($qUpdateAnswer)){
			$SaveOK = "<tr><td colspan='2' style='color:#159974;background:#fff'>Данные сохранены!</td></tr>";
		}		
	}
	
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
		Изменение ответа для вопроса<br/>
		<b>"<?=$CurrQuestion["QuestionText"]?>"</b>
	</div>
	<div class="page_content">
		<form method="POST" enctype="multipart/form-data">
			<table class="w100pers">
				<tr>
					<td style="width:250px"><b>Текст ответа</b></td>
					<td><input name="answer_edit_text" type="text" value="<?=$CurrAnswer["AnswerText"]?>" maxlength="50" style="width:500px"/></td>				
				</tr>
				<tr>
					<td><b>Активен</b></td>
					<td style="vertical-align:middle">
						<input name="answer_edit_active" type="checkbox"  <?if($CurrAnswer["Active"]==1){?>checked<?}?>/>   
					</td>				
				</tr>				
				<?
				if (count($err)>0) {
				?>
					<tr>
						<td colspan="2" style="color:#F84444;background:#fff">
						<?
						print "<b>При изменении данных ответа произошли следующие ошибки:</b><br>";
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
			<input type="submit" name="edit_answer" class="abutton" value="Сохранить"/>
			<a class="abutton" href="editquestionandanswers.php?questionid=<?=$CurrQuestion["ID"]?>">Назад</a>
		</form>
	</div>	

<?require("footer.php");?>