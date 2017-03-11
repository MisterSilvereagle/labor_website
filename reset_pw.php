<?php
			include 'data/config.php';
			include 'data/tables.php';
			if(isset($_COOKIE[$cookie_name])) {
				$user_name=$_COOKIE[$cookie_name];

				$st_pw=$_GET['stpw'];
				$new_pw=$_GET['newpw'];

				$pw_DATABASE;


				//User permission
				$user_per;

				// Create connection
				$conn = new mysqli($servername, $username, $password, $database);

				// Check connection
				if ($conn->connect_error) {
					echo 'ERR_NO_SERVER_FOUND';
				} else {	


					$sql = "SELECT user_pw FROM user WHERE user_name='$user_name'";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							$pw_DATABASE = $row["user_pw"]; 
						}
					}

					if($st_pw==$pw_DATABASE){
						$sql = "UPDATE user SET user_pw='$new_pw' WHERE user_name='$user_name'";

						if ($conn->query($sql) === TRUE) {
							echo 'success';
						} else {
							echo 'err';
						}

					} else {
						echo 'wrong_pws';
					}
				}
			}
?>