<?php

			include 'data/config.php';
			include 'data/func.php';
			if(isset($_COOKIE[$cookie_name])) {
				$user_name=$_COOKIE[$cookie_name];
				if(getPER($user_name)>8){
					
				  
				// Create connection
				$conn = new mysqli($servername, $username, $password, $database);

				// Check connection
				if ($conn->connect_error) {
					echo 'ERR_NO_SERVER_FOUND';
				} else {
				
			?>
		
		<div id="content" class="ui segment">
			
			  <?php
					$sql = "SELECT * FROM user";
 
					$db_erg = mysqli_query( $conn, $sql );
					if ( ! $db_erg )
					{
					  die('ERROR: ' . mysqli_error());
					}

					echo '<table class="ui celled table">
			  <thead>
				<tr>
				  <th>Name</th>
				  <th>Id</th>
				  <th>Permission</th>
				</tr>
			  </thead>
			  <tbody>
			  ';
					while ($zeile = mysqli_fetch_array( $db_erg, MYSQL_ASSOC))
					{
					  echo '<tr>
					  <td>' . $zeile['user_name'] . '</td>
					  <td>' . $zeile['user_id'] . '</td>
					  <td>' . $zeile['user_per'] . ' </td>
					  </tr>
					  ';
					}
				  ?>
				
				<?php
				  echo '  </tbody>
				  
				  
				  <tfoot class="full-width">
					<tr>
					  <th></th>
					  <th colspan="4">
						<div id="add_user" class="ui right floated small primary labeled icon button">
						  <i class="user icon"></i> Add User
						</div>
					  </th>
					</tr>
				  </tfoot>
				  
				  
				  
				  
			</table>';
				  ?>
			
		</div>
	<?php  
		}
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