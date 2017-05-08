<?php

		include 'config.php';
		include 'tables.php';

		function cleanup($dateiname){
    		$dateiname = strtolower ( $dateiname );
			$dateiname = str_replace ('"', "-", $dateiname );
			$dateiname = str_replace ("'", "-", $dateiname );
			$dateiname = str_replace ("*", "-", $dateiname );
			$dateiname = str_replace ("ß", "ss", $dateiname );
			$dateiname = str_replace ("ß", "ss", $dateiname );
			$dateiname = str_replace ("ä", "ae", $dateiname );
			$dateiname = str_replace ("ä", "ae", $dateiname );
			$dateiname = str_replace ("ö", "oe", $dateiname );
			$dateiname = str_replace ("ö", "oe", $dateiname );
			$dateiname = str_replace ("ü", "ue", $dateiname );
			$dateiname = str_replace ("ü", "ue", $dateiname );
			$dateiname = str_replace ("Ä", "ae", $dateiname );
			$dateiname = str_replace ("Ö", "oe", $dateiname );
			$dateiname = str_replace ("Ü", "ue", $dateiname );
			$dateiname = htmlentities ( $dateiname );
			$dateiname = str_replace ("&", "und", $dateiname );
			$dateiname = str_replace ("+", "und", $dateiname );
			$dateiname = str_replace ("(", "-", $dateiname );
			$dateiname = str_replace (")", "-", $dateiname );
			$dateiname = str_replace (" ", "-", $dateiname );
			$dateiname = str_replace ("\'", "-", $dateiname );
			$dateiname = str_replace ("/", "-", $dateiname );
			$dateiname = str_replace ("?", "-", $dateiname );
			$dateiname = str_replace ("!", "-", $dateiname );
			$dateiname = str_replace (":", "-", $dateiname );
			$dateiname = str_replace (";", "-", $dateiname );
			$dateiname = str_replace (",", "-", $dateiname );
			$dateiname = str_replace ("--", "-", $dateiname );

			$dateiname = filter_var($dateiname, FILTER_SANITIZE_URL);
			return ($dateiname);
		}	

		function getID($name){
			
			include 'config.php';
			include 'tables.php';
			
			//User ID
			$user_ID;
				
			// Create connection
			$conn = new mysqli($servername, $username, $password, $database);
		
			// Check connection
			if ($conn->connect_error) {
				echo 'ERR_NO_SERVER_FOUND';
			} else {		
				$user_ID;
				
				$sql = "SELECT user_id FROM user WHERE user_name='$name'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						$user_ID = $row["user_id"]; 
					}
				} else {
					echo "ID_not_found";
				}
			}
			return $user_ID;
		}

		function getPER($name){
			
			include 'config.php';
			include 'tables.php';
			
			//User permission
			$user_per;
			
			// Create connection
			$conn = new mysqli($servername, $username, $password, $database);
		
			// Check connection
			if ($conn->connect_error) {
				echo 'ERR_NO_SERVER_FOUND';
			} else {		
				$user_per;
				
				$sql = "SELECT user_per FROM user WHERE user_name='$name'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						$user_per = $row["user_per"]; 
					}
				} else {
					echo "per_not_found";
				}
			}
			return $user_per;
		}
	function hash_pw($pw){
		$hashed;
		$hashed = hash('sha256', $pw);
		
		
		return $hashed;
	}
?>