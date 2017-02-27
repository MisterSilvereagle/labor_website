<html>
	<head>
		<title>Methodisch inkorrekt</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php
		
			include 'data/config.php';
			include 'data/tables.php';
		
			// Create connection
			$conn = new mysqli($servername, $username, $password, $database);
					
			//Create experiment table
			if ($conn->query($experiments_table) === TRUE) {} else {echo "Error creating table: " . $conn->error;}
		
			// Check connection
			if ($conn->connect_error) {
				echo 'Unsere Server sind momentan nicht verfügbar!';
			} else {
				?>			
			<div id="content">



			</div>
		<?php
			}			
		$conn->close();
		?>
	</body>
</html>