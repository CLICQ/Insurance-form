<?require("header.php");?>

<?
	//echo "<pre>"; print_r($arrQuestions); echo "</pre>";
	$qQuestionsList = "SELECT * FROM `questions`";   
	$QuestionsList = mysql_query($qQuestionsList);	
	
	if(isset($_POST["create_report"])){
		$Message = "";
		$qClosedPools = "SELECT * FROM `pool` WHERE Close=1";   
		$ClosedPools = mysql_query($qClosedPools);	
		$ClosedPoolsCount = mysql_num_rows($ClosedPools);
		
		if($ClosedPoolsCount>0){
			$TableLinesHtml = "";
			// Собираем вопросы
			$arrQuestions = Array();
			$qQuestions = "SELECT * FROM `questions`";   
			$Questions = mysql_query($qQuestions);
			while($oneQuestion = mysql_fetch_array($Questions)){
				$arrQuestions[$oneQuestion["ID"]] =  $oneQuestion["QuestionText"];
			}	
			// Собираем ответы
			$arrAnswers = Array();
			$qAnswers = "SELECT * FROM `answers`";   
			$Answers = mysql_query($qAnswers);
			while($oneAnswer = mysql_fetch_array($Answers)){
				$arrAnswers[$oneAnswer["ID"]] =  $oneAnswer["AnswerText"];
			}	
			//...................................................

			while($oneClosedPool = mysql_fetch_array($ClosedPools)){
				$ClienFullName = $oneClosedPool["ClientFullName"];
				$Mark = $oneClosedPool["Mark"];
				$Model = $oneClosedPool["Model"];
				$Color = $oneClosedPool["Color"];
				$QuestionsAndAnswers = explode("|_|",$oneClosedPool["AnsAndQuest"]);
				foreach($QuestionsAndAnswers as $oneQuestionAndAnswers){
					$Question_Answers = explode("_",$oneQuestionAndAnswers);
					$QuestionID = $Question_Answers[0];
					$arrAnswersID = explode("|",$Question_Answers[1]);		
					foreach($arrAnswersID as $oneAnswerID){
						$TableLinesHtml.="<tr>
										<td>".$arrQuestions[$QuestionID]."</td>
										<td>".$arrAnswers[$oneAnswerID]."</td>
										<td>".$oneClosedPool["DealerName"]."</td>
										<td>".$ClienFullName."</td>
										<td>".$Mark."</td>
										<td>".$Model."</td>
										<td>".$Color."</td>
									</tr>";
					}	
				}
			}
		}else{
			$Message = "- нет закрытых опросов для отчета -";
		}
	}

	//$qDealersList = "SELECT * FROM `users`";   
	//$DealersList = mysql_query($qDealersList);	
?>
	<script type="text/javascript">
		$( document ).ready(function() {
			$(".left_menu a").removeClass("Active");
			$("#Reports").addClass("Active");
		});		
	</script>	
	
	<div class="page_title">
		Отчеты
	</div>
	<div class="page_content">
		<form method="POST" enctype="multipart/form-data">
			<!--
			Выберите дилера:
			<select style="padding:6px">
			<?
			//while($oneDealer = mysql_fetch_array($DealersList))
			//{
			?>
				<option value="<?//=$oneDealer["ID"]?>"><?//=$oneDealer["DealerName"]?> (<?//=$oneDealer["DealerCode"]?>)</option>
			<?
			//}
			?>
			</select>
			<br/><br/>
			-->
			<table>
				<tr>
					<td>Вопрос</td>
					<td>
						<select name="report_filter_question" style="width:100%">
							<option value="0">Все</option>
							<?while($oneQuestion = mysql_fetch_array($QuestionsList)){?>
								<option value="<?=$oneQuestion["ID"]?>"><?=$oneQuestion["QuestionText"]?></option>
							<?}?>
						</select>					
					</td>					
				</tr>
			</table>
			<br/><br/>
			<input type="submit" name="create_report" style="padding:10px" value="Сформировать отчет"/>
		</form> 
		<br/>  
		<?if($TableLinesHtml){
			echo "<form method='POST' action='excel.php' enctype='multipart/form-data'>
					<div style='overflow:auto;max-height:500px'>
					<table class='report_table'>
						<td><b>Текст вопроcа</b></td>
						<td><b>Вариант ответа</b></td>
						<td><b>Наименование дилера</b></td>
						<td><b>ФИО клиента</b></td>
						<td><b>Марка</b></td>
						<td><b>Модель</b></td>	
						<td><b>Цвет</b></td>".$TableLinesHtml."</table></div><br/>
						<input type='hidden' name='table_lines_html' value='".$TableLinesHtml."'/>
						<input type='submit' name='create_report_excel' style='padding:10px' value='Загрузить в Excel'/>
				</form><br/><br/>";
		}?>
		<?=$Message?>
	</div>	

<?require("footer.php");?>