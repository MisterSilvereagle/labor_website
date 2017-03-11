<?php

			include 'data/config.php';
			include 'data/func.php';
			if(isset($_COOKIE[$cookie_name])) {
				$user_name=$_COOKIE[$cookie_name];
			?>
				 <div class="ui inverted segment">
				  <div class="ui inverted relaxed divided list">
				  <p>User informations:</p>

					<div class="item">
					  <div class="content">
						<div class="header"> 
								<p>UserID: <?php echo getID($user_name); ?></p>
								<!--divider--><div class="ui divider"></div>
								<p>User permission:  <?php echo getPER($user_name); ?> </p>
								<!--divider--><div class="ui divider"></div>

								<p>Password: </p>
								<p>*******</p>
								<div class="ui left corner labeled input">
								  <input id="old_pw" type="text" placeholder="Old Password">
								  <div class="ui left corner label">
									<i class="asterisk icon"></i>
								  </div>
								</div><br><br>
								<div class="ui left corner labeled input">
								  <input id="new_pw" type="text" placeholder="New Password">
								  <div class="ui left corner label">
									<i class="asterisk icon"></i>
								  </div>
								</div><br><br>
								<button id="res_pw" class="ui button">
								<i class="paste icon"></i>
								Reset
								</button>
								<div id="pw_failed" class="ui red message">Failed!</div>
								<div id="pw_success" class="ui green message">Changed!</div>
						</div>
					  </div>
					</div>
				  </div>
				</div>
	<?php  
} else {
				
			} ?>