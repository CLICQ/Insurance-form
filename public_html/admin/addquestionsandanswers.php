<?require("header.php");?>

	<script type="text/javascript">
		$( document ).ready(function() {
			$(".left_menu a").removeClass("Active");
			$("#AddQuestionsAndAnswers").addClass("Active");
		});		
	</script>
	
	<div class="page_title">
		Добавить вопрос с ответами
	</div>
	<div class="page_content">
		<form method="POST" enctype="multipart/form-data">
			<table class="w100pers">
				<tr>
					<td style="width:250px"><b>Текст вопроса</b></td>
					<td>
						<input name="add_question_text" type="text" value="<?=$_POST["add_question_text"]?>" style="width:700px"/>
					</td>				
				</tr>
				<tr>
					<td><b>Ответы</b></td>
					<td class="answers_add_td">
						<table>
							<tr><td>1</td><td><div class="answer"><input name="answer_add[]" type="text" value="<?=$_POST["answer_add"][0]?>"/></div></td></tr>
							<tr><td>2</td><td><div class="answer"><input name="answer_add[]" type="text" value="<?=$_POST["answer_add"][1]?>"/></div></td></tr>
							<tr><td>3</td><td><div class="answer"><input name="answer_add[]" type="text" value="<?=$_POST["answer_add"][2]?>"/></div></td></tr>
							<tr><td>4</td><td><div class="answer"><input name="answer_add[]" type="text" value="<?=$_POST["answer_add"][3]?>"/></div></td></tr>
							<tr><td>5</td><td><div class="answer"><input name="answer_add[]" type="text" value="<?=$_POST["answer_add"][4]?>"/></div></td></tr>
							<tr><td>6</td><td><div class="answer"><input name="answer_add[]" type="text" value="<?=$_POST["answer_add"][5]?>"/></div></td></tr>
							<tr><td>7</td><td><div class="answer"><input name="answer_add[]" type="text" value="<?=$_POST["answer_add"][6]?>"/></div></td></tr>
							<tr><td>8</td><td><div class="answer"><input name="answer_add[]" type="text" value="<?=$_POST["answer_add"][7]?>"/></div></td></tr>
							<tr><td>9</td><td><div class="answer"><input name="answer_add[]" type="text" value="<?=$_POST["answer_add"][8]?>"/></div></td></tr>
							<tr><td>10</td><td><div class="answer"><input name="answer_add[]" type="text" value="<?=$_POST["answer_add"][9]?>"/></div></td></tr>							
						</table>
						<!-- 
						<div class="answer">2.&nbsp;<input name="answer_add[]" type="text" value="<?//=$_POST["answer_add"][1]?>"/></div>
						<div class="answer">3.&nbsp;<input name="answer_add[]" type="text" value="<?//=$_POST["answer_add"][2]?>"/></div>
						<div class="answer">4.&nbsp;<input name="answer_add[]" type="text" value="<?//=$_POST["answer_add"][3]?>"/></div>
						<div class="answer">5.&nbsp;<input name="answer_add[]" type="text" value="<?//=$_POST["answer_add"][4]?>"/></div>
						<div class="answer">6.&nbsp;<input name="answer_add[]" type="text" value="<?//=$_POST["answer_add"][5]?>"/></div>
						<div class="answer">7.&nbsp;<input name="answer_add[]" type="text" value="<?//=$_POST["answer_add"][6]?>"/></div>
						<div class="answer">8.&nbsp;<input name="answer_add[]" type="text" value="<?//=$_POST["answer_add"][7]?>"/></div>
						<div class="answer">9.&nbsp;<input name="answer_add[]" type="text" value="<?//=$_POST["answer_add"][7]?>"/></div>
						<div class="answer">10.&nbsp;<input name="answer_add[]" type="text" value="<?//=$_POST["answer_add"][7]?>"/></div>
						<span>+ добавить ответ</span>-->
						<span>* вы можете добавить не менее 2-х вариантов ответа</span>
					</td>				
				</tr>				
				<tr>
					<td><b>Множественный выбор ответа</b></td>
					<td style="vertical-align:middle">
						<input name="add_question_multi" type="checkbox"  <?if($_POST["add_question_multi"]){?>checked<?}?>/>   
					</td>				
				</tr>
				<tr>
					<td><b>Активен</b></td>
					<td style="vertical-align:middle">
						<input name="add_question_active" type="checkbox"  checked="checked"/>   
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
			</table>
			<br/>
			<input type="submit" name="add_question" class="abutton" value="Сохранить"/>
		</form>
	</div>	

<?require("footer.php");?>