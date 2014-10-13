<?require("header.php");?>

<?

	if(isset($_POST["edit_dealer"]) AND isset($_REQUEST["dealerid"])){
		$SaveOK="";
		$err = array();
		if(strlen($_POST['dealer_name_edit']) <= 3){$err[] = "Название дилера не может быть пустым или состоять из трех и менее симвлов";}
		if(strlen($_POST['dealer_code_edit']) <= 3){$err[] = "Код дилера не может быть пустым или состоять из трех и менее симвлов";}				 
		if(count($err) == 0) 
		{
			$qUpdateDealer = "UPDATE `users` SET 
				DealerName = '".$_POST['dealer_name_edit']."',
				DealerCode = '".$_POST['dealer_code_edit']."' 
				WHERE users_id=".$_REQUEST['dealerid'];
			if(mysql_query($qUpdateDealer)){
				$SaveOK = "<tr><td colspan='2' style='color:#159974;background:#fff'>Данные сохранены!</td></tr>";
				
			}
		}
	}
	
	$qCurrDealer = "SELECT * FROM `users` WHERE users_id=".$_REQUEST["dealerid"];   
	$CurrDealer = mysql_fetch_array(mysql_query($qCurrDealer));
?>

	<script type="text/javascript">
		$( document ).ready(function() {
			$(".left_menu a").removeClass("Active");
			$("#DealersList").addClass("Active");
		});		
	</script>	
	
	<div class="page_title">
		Изменение данных дилера
	</div>
	<div class="page_content">
		<form method="POST" enctype="multipart/form-data">
			<table class="w100pers">
				<tr>
					<td style="width:250px"><b>Наименование дилера</b></td>
					<td><input name="dealer_name_edit" type="text" value="<?=$CurrDealer["DealerName"]?>" maxlength="50" style="width:500px"/></td>				
				</tr>
				<tr>
					<td><b>Код дилера</b></td>
					<td><input name="dealer_code_edit" type="text" value="<?=$CurrDealer["DealerCode"]?>" maxlength="20" /></td>				
				</tr>
				<?
				if (count($err)>0) {
				?>
					<tr>
						<td colspan="2" style="color:#F84444;background:#fff">
						<?
						print "<b>При изменении данных дилера произошли следующие ошибки:</b><br>";
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
			<input type="submit" name="edit_dealer" class="abutton" value="Сохранить"/>
			<a class="abutton" href="/admin/">Назад к списку дилеров</a>
		</form>
	</div>	

<?require("footer.php");?>