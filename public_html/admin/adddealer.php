<?require("header.php");?>

	<script type="text/javascript">
		$( document ).ready(function() {
			$(".left_menu a").removeClass("Active");
			$("#AddDealer").addClass("Active");
		});		
	</script>	
	
	<div class="page_title">
		Добавление нового дилера
	</div>
	<div class="page_content">
		<form method="POST" enctype="multipart/form-data">
			<table class="w100pers">
				<tr>
					<td style="width:250px"><b>Наименование дилера</b></td>
					<td><input name="dealer_name_reg" type="text" value="<?=$_POST["dealer_name_reg"]?>" maxlength="50" style="width:500px"/></td>				
				</tr>
				<tr>
					<td><b>Код дилера</b></td>
					<td><input name="dealer_code_reg" type="text" value="<?=$_POST["dealer_code_reg"]?>" maxlength="20" /></td>				
				</tr>
				<tr>
					<td><b>Логин</b></td>
					<td><input name="login_reg" type="text" value="<?=$_POST["login_reg"]?>" maxlength="10"/></td>				
				</tr>
				<tr>
					<td><b>Пароль</b></td>
					<td><input name="password_reg" type="text" value="<?=$_POST["password_reg"]?>" maxlength="10" /></td>				
				</tr>
				<tr>
					<td><b>Повторите пароль</b></td>
					<td><input name="passworddubl_reg" type="text" value="<?=$_POST["passworddubl_reg"]?>" maxlength="10"/></td>				
				</tr>
				<?
				if (count($err)>0) {
				?>
					<tr>
						<td colspan="2" style="color:#F84444;background:#fff">
						<?
						print "<b>При создании дилера произошли следующие ошибки:</b><br>";
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
			<input type="submit" name="add_dealer" class="abutton" value="Сохранить"/>
		</form>
	</div>	

<?require("footer.php");?>