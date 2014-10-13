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
		Добавление варианта ответа для вопроса<br/>
		<b>"<?=$CurrQuestion["QuestionText"]?>"</b>
	</div>
	<div class="page_content">
		<form method="POST" enctype="multipart/form-data">
			<table class="w100pers">
				<tr>
					<td style="width:250px"><b>Текст ответа</b></td>
					<td><input name="add_answer_text" type="text" value="<?=$_POST["add_answer_text"]?>" maxlength="50" style="width:500px"/></td>				
				</tr>
				<tr>
					<td><b>Активен</b></td>
					<td style="vertical-align:middle">
						<input name="add_answer_active" type="checkbox"  <?if(isset($_POST["add_answer_active"])){?>checked<?}?>/>   
					</td>				
				</tr>				
				<?
				if (count($err)>0) {
				?>
					<tr>
						<td colspan="2" style="color:#F84444;background:#fff">
						<?
						print "<b>При создании ответа произошли следующие ошибки:</b><br>";
						foreach($err AS $error) 
						{	 
							print $error."<br>"; 
						}							
						?>
						</td>
					</tr>
				<?}?>					
			</table>
			<br/>
			<input type="submit" name="add_answer" class="abutton" value="Сохранить"/>
			<a class="abutton" href="editquestionandanswers.php?questionid=<?=$CurrQuestion["ID"]?>">Назад</a>
		</form>
	</div>	

<?require("footer.php");?>