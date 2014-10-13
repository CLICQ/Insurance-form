<?require("header.php");?>	

	<?
		$err = array();
		if(
			!isset($_REQUEST["login"]) OR $_REQUEST["login"]=="" OR		
			!isset($_REQUEST["password"]) OR $_REQUEST["password"]=="" OR		
			!isset($_REQUEST["ordercode"]) OR $_REQUEST["ordercode"]=="" OR
			!isset($_REQUEST["cfn"]) OR $_REQUEST["cfn"]=="" OR
			!isset($_REQUEST["mark"]) OR $_REQUEST["mark"]=="" OR
			!isset($_REQUEST["model"]) OR $_REQUEST["model"]=="" OR
			!isset($_REQUEST["vin"]) OR $_REQUEST["vin"]=="" OR
			!isset($_REQUEST["color"])
		)
		{
			$err[] = "Не хватает параметров";	
		}else{
			$Login=$_REQUEST["login"];
			$Password=$_REQUEST["password"];
			$OrderCode = $_REQUEST["ordercode"];
			$ClientFullname = $_REQUEST["cfn"];
			$Mark = $_REQUEST["mark"];
			$Model = $_REQUEST["model"];
			$VIN = $_REQUEST["vin"];	
			$Color = $_REQUEST["color"];			
			
			$users = mysql_fetch_assoc(mysql_query("SELECT users_id, users_password FROM `users` WHERE `users_login`='".mysql_real_escape_string($Login)."' LIMIT 1"));

			if($users['users_password'] !== md5(md5($Password))) 
			{
				$err[] = "Не верный логин/пароль"; 
			}			
			$pool = mysql_query("SELECT COUNT(ID) FROM pool WHERE OrderCode='".$OrderCode."'")or die ("<br>Invalid pool: " . mysql_error()); 
			if(mysql_result($pool, 0) > 0) 
			{ 
				$err[] = "Опрос с таким номером заказ-наряда уже существует"; 
			}
		}
		if(count($err) == 0){
			$AddNewPool = "INSERT INTO pool SET 
				DealerCode='123123',
				DealerName='Автосервис Успех',
				OrderCode='".$OrderCode."',
				ClientFullName='".$ClientFullname."',
				Mark='".$Mark."',
				Model='".$Model."',
				VIN='".$VIN."',
				Color='".$Color."',
				Close=0";
			if(mysql_query($AddNewPool)){
				$Message = "Опрос добавлен!";
			}				
		}
		
//"http://guriev.bget.ru/addpool/?login=123123&password=123123&ordercode=3H000106&cfn=Василий Васильевич Замуткин&mark=AF35&model=sdf-25&vin=2352234235&color=зеленый"
	?>
		<div class="content_shadow_top"></div>
		<div class="content_text">
			<?
			if (count($err)>0) {
			?>
				<table style="width:100%">
					<tr>
						<td colspan="2" style="color:#F84444">
						<?
						print "<b>При добавлении опроса произошли следующие ошибки:</b><br>";
						foreach($err AS $error) 
						{	 
							print $error."<br>"; 
						}							
						?>
						</td>
					</tr>
				</table>
			<?}else{
				echo $Message;
			}?>
		</div>
		<div class="content_shadow_bottom"></div>
		<!--
		<div class="h50px"></div>
		<div class="button_block">
			<a href="choiceorder.php" class="button">
				Перейти к вопросам
			</a>
		</div>
		-->

<!-- Footer -->
<?require("footer.php");?>