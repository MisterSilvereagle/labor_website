<?php
			
			
					include 'data/config.php';
					include 'data/tables.php';
					include 'data/func.php';
					
					 // Create connection
					$conn = new mysqli($servername, $username, $password, $database);
		
					// Check connection
					if ($conn->connect_error) {
						echo 'ERR_NO_SERVER_FOUND';
					} else {
		
						$user_name = $_GET['user_name']; 
						$user_pw = $_GET['user_pw']; 
						$user_per = $_GET['user_per'];
						$user_id = uniqid();
						
						$user_pw = hash_pw($user_pw);
		
						if($_GET['user_name']){
							
							$sql = "INSERT INTO user (user_name, user_pw, user_id, user_per) VALUES ('$user_name', '$user_pw', '$user_id', '$user_per')";

							if (mysqli_query($conn, $sql)) {
								echo "success";
							}
					} else {
						echo "err";
					}
						
				}
				$conn->close();
		
		?>