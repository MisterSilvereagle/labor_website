<?php

			include 'data/config.php';
			include 'data/func.php';
			if(isset($_COOKIE[$cookie_name])) {
				$user_name=$_COOKIE[$cookie_name];
				if(getPER($user_name)>9){
					
			?>
		
		<div id="content" class="ui segment">
			<form method="get" >
		  
			  <div class="ui form">
			  *Name: <input type="text" id="user_name"><br><br><br>
			  
			  *Permission Level <input type="text" id="user_per"><br><br>
			  
			  *Passwort <input type="password" id="user_pw"><br><br>
			  
			  <input id="create" class="ui submit button" type="button" value="Create">
			</form>
		</div>
	<?php  
		} else {
			?>
			<div id="content" class="ui segment">
				<h1>You have no permisson</h1>
			</div>
			<?php
		}
	} else {
		?>
		<h1>You have no permisson</h1>
		<?php
	} 
?>