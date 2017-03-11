<html>
	<head>
		<title>Methodisch inkorrekt</title>
		<link rel="stylesheet" href="style.css">
		
		<link rel="stylesheet" type="text/css" href="uk/semantic.min.css">
		<script
		  src="https://code.jquery.com/jquery-3.1.1.min.js"
		  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
		  crossorigin="anonymous"></script>
		<script src="uk/semantic.min.js"></script>
	</head>
	<body>
	
	
	<div style="
    border-radius: 0px;" class="ui inverted menu">
	  <a class="active item" href="index.php">
		Home
	  </a>
	  <a class="item" href="login.php">
		Login
	  </a>
	  <a class="item" href="about.php">
		About
	  </a>
	</div>
	
		<?php
		
			include 'data/config.php';
			include 'data/tables.php';
		
			// Create connection
			$conn = new mysqli($servername, $username, $password, $database);
					
			//Create experiment table
			if ($conn->query($experiments_table) === TRUE) {} else {echo "Error creating table: " . $conn->error;}
		
			// Check connection
			if ($conn->connect_error) {
				echo 'ERR_NO_SERVER_FOUND';
			} else {
				?>			
			<div id="content" class="ui segment">
				<?php
				$result = mysqli_query($conn,"SELECT * FROM exps");
				echo "<div class='ui list'>";
					while($row = mysqli_fetch_array($result))
					{
						?>
						<div class="item">
							<img class="ui avatar image" src="pics/lab.png">
							<div class="content">
							  <a class="header" href='http://134.255.234.216/exper/exper.php?exp=<?php echo $row['exp_name'] ?>'><h1 id="shorth"><?php echo  $row['header_intro'] ?></h1></a>
							  <div class="description"><p id="shortp"><?php echo $row['description_intro'] ?></p></div>
							</div>
						</div>
						<hr style="height: 1px;">
						
						
						<?php
					}
				echo "<div>";
				?>
			</div>
		<?php
			}			
		$conn->close();
		?>
	</body>
</html>