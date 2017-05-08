<?php
			include '../php_data/config.php';
			include '../php_data/tables.php';
			include '../php_data/func.php';
		
			// Create connection
			$conn = new mysqli($servername, $username, $password, $database);
					
			// Check connection
			if ($conn->connect_error) {
				echo 'Unsere Server sind momentan nicht verfügbar!';
			} else {		
				$user=$_GET['user'];
				$pw_unhashed=$_GET['pw'];
				$pw = hash_pw($pw_unhashed);
				
				$user_DATABASE;
				$pw_DATABASE;
				
				
				
				$sql = "SELECT user_name FROM user WHERE user_name='$user'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						$user_DATABASE = $row["user_name"]; 
						//----
						
						$sql = "SELECT user_pw FROM user WHERE user_name='$user_DATABASE'";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								$pw_DATABASE = $row["user_pw"]; 
								//---
								
									if($user==$user_DATABASE){
										if($pw==$pw_DATABASE){
											echo "success";
											$cookie_name = 'dashboard_conf';
											$cookie_value = $user_DATABASE;
											setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/');
										} else {
											echo "err";
										}
									} else {
											echo "err";
									}
								
								//---
							}
						} else {
							echo "pw_not_found";
						}
						
						//----
					}
				} else {
					echo "name_not_found";
				}
				
				
			
			}

?>