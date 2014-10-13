<?require("header.php");?>

<?
	$qDealersList = "SELECT * FROM `users`";   
	$DealersList = mysql_query($qDealersList);

	//echo $_SERVER['DOCUMENT_ROOT'];	
	//"/home/g/guriev/guriev.bget.ru/public_html/admin/users"
?>
	<script type="text/javascript">
		$( document ).ready(function() {
			$(".left_menu a").removeClass("Active");
			$("#DealersList").addClass("Active");
		});		
	</script>	
	
	<div class="page_title">
		Список дилеров
	</div>
	<div class="page_content">
		<table class="w100pers">
			<tr>
				<td><b>Наименование</b></td>
				<td><b>Код дилера</b></td>
				<td></td>
				<td></td>				
			</tr>		
		<?
		while($oneDealer = mysql_fetch_array($DealersList))
		{
		?>
			<tr>
				<td>
					<?=$oneDealer["DealerName"]?>
				</td>
				<td>
					<?=$oneDealer["DealerCode"]?>
				</td>
				<td>
					<a href="editdealer.php?dealerid=<?=$oneDealer["users_id"]?>">Изменить</a>
				</td>
				<td>
					<a href="deletedealer.php?dealerid=<?=$oneDealer["users_id"]?>">Удалить</a>
				</td>				
			</tr>
		<?
		}
		?>
		</table>
		<br/>
		<a class="abutton" href="adddealer.php" style="float:right">+&nbsp;Добавить дилера</a>
	</div>	

<?require("footer.php");?>