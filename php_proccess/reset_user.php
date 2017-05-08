<?php
			include '../php_data/config.php';
			include '../php_data/tables.php';
			if(isset($_COOKIE[$cookie_name])) {
				$user_name=$_COOKIE[$cookie_name];

				$newname=$_GET['newpw'];

				//User permission
				$user_per;

				// Create connection
				$conn = new mysqli($servername, $username, $password, $database);

				// Check connection
				if ($conn->connect_error) {
				echo 'Unsere Server sind momentan nicht verfügbar!';
				} else {	
					$sql = "UPDATE user SET user_name='$new_pw' WHERE user_name='$user_name'";

					if ($conn->query($sql) === TRUE) {
						echo 'success';
					} else {
						echo 'err';
					}
				}
			}

?>