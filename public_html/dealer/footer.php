		
		<?if($UserAuthorized){?>
		
				</td>				
			</tr>
		</table>
		
		<?}?>
		
		<?if(!$UserAuthorized){?>
			<div class="center">
				<form method="POST" enctype="multipart/form-data">
					<div class="auth_block">
						<!--<div class="content_shadow_top"></div>-->
						<div class="content_text">
							<b>Вход в панель дилера</b><br/><br/>
							<input placeholder="логин" type="text" name="login"/><br/>
							<input placeholder="пароль" type="text" name="password"/><br/>
							<div style="color:red"><?=$errLogin[0]?></div>							
						</div>
						<div class="content_shadow_bottom"></div>
						<div class="h20px"></div>				
						<div class="button_block">	
							<input class="button" type="submit" name="subm_auth" value="Войти в систему"/>
						</div>					
					</div>
				</form>
			</div>
		<?}?>		
		
	</body>
</html>