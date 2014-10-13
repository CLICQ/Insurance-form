<?require("header.php");?>

<?
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
		Удаление дилера <b><?=$CurrDealer["DealerName"]?></b>
	</div>
	<div class="page_content">
		<form method="POST" enctype="multipart/form-data">
			Вы действительно хотите удалить дилера <b><?=$CurrDealer["DealerName"]?></b> (Код:&nbsp;<b><?=$CurrDealer["DealerCode"]?></b>)?<br/>
			Диллер и все открытые опросы для него будут удалены безвозвратно! 
			<br/><br/>
			<input type="submit" name="delete_dealer" class="abutton" value="Удалить дилера"/>
			<a class="abutton" href="/admin/">Назад к списку дилеров</a>
		</form>
	</div>	

<?require("footer.php");?>