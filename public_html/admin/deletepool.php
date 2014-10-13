<?require("header.php");?>

<?
	$qCurrPool = "SELECT * FROM `pool` WHERE ID=".$_REQUEST["poolid"];   
	$CurrPool = mysql_fetch_array(mysql_query($qCurrPool));
?>

	<script type="text/javascript">
		$( document ).ready(function() {
			$(".left_menu a").removeClass("Active");
			$("#OpenPools").addClass("Active");
		});		
	</script>	
	
	<div class="page_title">
		Удаление опроса (экземпляра вопроса) для клиента
	</div>
	<div class="page_content">
		<form method="POST" enctype="multipart/form-data">
			Вы действительно хотите безвозвратно удалить данный опрос?<br/><br/>
			<table class="w100pers">
				<tr>
					<td><b>Дата создания</b></td>
					<td><b>Имя клиента</b></td>
					<td><b>Код заказ-наряда</b></td>
					<td><b>Марка</b></td>
					<td><b>Модель</b></td>
					<td><b>Цвет</b></td>
					<td><b>ВИН</b></td>	
				</tr>
				<tr>
					<td><?=$CurrPool["DateCreate"]?></td>
					<td><?=$CurrPool["ClientFullName"]?></td>  
					<td><?=$CurrPool["OrderCode"]?></td>
					<td><?=$CurrPool["Mark"]?></td>
					<td><?=$CurrPool["Model"]?></td>
					<td><?=$CurrPool["Color"]?></td>
					<td><?=$CurrPool["VIN"]?></td>	
				</tr>				
			</table><br/>		
			После удаления, данный опрос больше не будет доступен для ответа.
			<br/><br/>
			<input type="submit" name="delete_pool" class="abutton" value="Удалить опрос"/>
			<a class="abutton" href="openpools.php">Назад</a>
		</form>
	</div>	

<?require("footer.php");?>