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

				<?php
				$result = mysqli_query($conn,"SELECT * FROM exps");
				echo "<ul>";
					while($row = mysqli_fetch_array($result))
					{
					echo "<li><a href='http://134.255.234.216/exper/exper.php?exp=" . $row['exp_name'] . "'><h1>" . $row['header_intro'] . "</h1></a></li>";
					echo "<li><h4>" . $row['description_intro'] . "</h4></li>";
					}
				echo "<ul>";
				?>
			</div>
		<?php
			}			
		$conn->close();
		?>
	</body>
</html>