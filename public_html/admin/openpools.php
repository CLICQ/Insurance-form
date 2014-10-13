<?require("header.php");?>

<?
	$qOpenPoolsList = "SELECT * FROM `pool` WHERE Close=0";   
	$OpenPoolsList = mysql_query($qOpenPoolsList);	
?>
	<script type="text/javascript">
		$( document ).ready(function() {
			$(".left_menu a").removeClass("Active");
			$("#OpenPools").addClass("Active");
		});		
	</script>	
	
	<div class="page_title">
		Открытые опросы
	</div>
	<div class="page_content">
		<table class="w100pers">
			<tr>
				<td><b>Дата создания</b></td>
				<td><b>Код дилера</b></td>
				<td><b>Имя клиента</b></td>
				<td><b>Код заказ-наряда</b></td>
				<td><b>Марка</b></td>
				<td><b>Модель</b></td>
				<td><b>Цвет</b></td>
				<td><b>ВИН</b></td>
				<!--<td></td>-->	
				<td></td>	
			</tr>		
		<?
		while($oneOpenPool = mysql_fetch_array($OpenPoolsList))
		{
		?>
			<tr>
				<td><?=$oneOpenPool["DateCreate"]?></td>
				<td><?=$oneOpenPool["DealerCode"]?></td>
				<td><?=$oneOpenPool["ClientFullName"]?></td>
				<td><?=$oneOpenPool["OrderCode"]?></td>
				<td><?=$oneOpenPool["Mark"]?></td>
				<td><?=$oneOpenPool["Model"]?></td>
				<td><?=$oneOpenPool["Color"]?></td>
				<td><?=$oneOpenPool["VIN"]?></td>				
				<!--<td><a href="editpool.php?poolid=<?//=$oneOpenPool["ID"]?>">Изменить</a></td>-->
				<td><a href="deletepool.php?poolid=<?=$oneOpenPool["ID"]?>">Удалить</a></td>				
			</tr>
		<?
		}
		?>
		</table>
	</div>	

<?require("footer.php");?>