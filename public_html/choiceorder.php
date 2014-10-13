<?require($_SERVER["DOCUMENT_ROOT"]."/header.php");?>

<?if($UserAuthorized){?>

<?
	$qAvailablePools = "SELECT * FROM `pool` WHERE DealerCode='".$userdata['DealerCode']."' AND Close=0";   
	$AvailablePools = mysql_query($qAvailablePools);
	$AvailablePoolsCount = mysql_num_rows($AvailablePools);

?>	

			<div class="content_shadow_top"></div>
			<div class="content_text">
				Выберите Ваш заказ - наряд.
			</div>
			<div class="content_shadow_bottom"></div>
			<div class="h50px"></div>
			<?if($AvailablePoolsCount>0){?>
				<form method="POST" enctype="multipart/form-data">
					<table class="orders">
						<tr>
							<td>&nbsp;</td>
							<td>№</td>
							<td>ФИО Клиента</td>
							<td>Марка</td>
							<td>Модель</td>
							<td>ВИН</td>
							<td>Цвет</td>					
						</tr>				
						<?
						while($oneAvailablePool = mysql_fetch_array($AvailablePools))
						{
						?>
							<tr>
								<td>
									<div class="radio_div">
										<input type="radio" name="select_order" value="<?=$oneAvailablePool["ID"]?>">
									</div>
								</td>
								<td><?=$oneAvailablePool["OrderCode"]?></td>
								<td><?=$oneAvailablePool["ClientFullName"]?></td>
								<td><?=$oneAvailablePool["Mark"]?></td>
								<td><?=$oneAvailablePool["Model"]?></td>
								<td><?=$oneAvailablePool["VIN"]?></td>
								<td><?=$oneAvailablePool["Color"]?></td>					
							</tr>					
						<?
						}
						?>				
					</table>
					<div class="h50px"></div>
					<div class="button_block">
						<a href="javascript:void(0)" onclick="window.location.reload()" class="button">Обновить список</a>
						<input class="button" type="submit" name="subm_order" value="Далее"/>
						<!--<a href="questions.php" class="button">Далее</a>-->
					</div>
					<?=$Message?>
				</form>
			<?
			}else{
			?>
				<div style="text-align:center">- Список пуст -</div>
				<div class="h50px"></div>
				<div class="button_block">
					<div onclick="window.location.reload()" class="button">Обновить список</div>
				</div>
			<?
			}
			?>
			
<?}?>			

<!-- Footer -->
<?require($_SERVER["DOCUMENT_ROOT"]."/footer.php");?>