
<html>
	<head>
		<!-- Set title -->
		<title>Methodisch inkorrekt</title>
		<!-- Implement Stylesheet -->
		<link rel="stylesheet" href="css/style.css">
		
		<!-- Implement Semantic CSS library from https://semantic-ui.com/ -->
		<link rel="stylesheet" type="text/css" href="uk/semantic.min.css">
		<!-- Implement Semantic JS library from https://semantic-ui.com/-->
		<script src="uk/semantic.min.js"></script>
		
		<!-- Implement JQuery from jquery.com -->
		<script  src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
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
		
					include 'php_data/config.php';
					include 'php_data/tables.php';
		
					 // Create connection
					$conn = new mysqli($servername, $username, $password, $database);
		
					// Check connection
					if ($conn->connect_error) {
						echo 'Unsere Server sind momentan nicht verfügbar!';
					} else {
						$exp_name= $_GET['exp'];
						if(!$exp_name==""){
						
							 $sql = "SELECT exp_name, header_intro,img_intro,description_intro,
											header_1, img_1, description_1,
											header_2, img_2, description_2,
											header_3, img_3, description_3,
											header_4, img_4, description_4,
											header_5, img_5, description_5,
											header_6, img_6, description_6,
											header_7, img_7, description_7,
											header_8, img_8, description_8,
											header_9, img_9, description_9,
											header_10, img_10, description_10
											FROM exps WHERE exp_name='$exp_name'";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
								// output data of each row
								while($row = $result->fetch_assoc()) {
		
									$exp_name= $row['exp_name']; 
									$header_intro= $row['header_intro']; 
									$img_intro= $row['img_intro']; 
									$description_intro=$row['description_intro'];
									$header_1= $row['header_1']; $img_1= $row['img_1']; $description_1= $row['description_1'];
									$header_2= $row['header_2']; $img_2= $row['img_2']; $description_2= $row['description_2'];
									$header_3= $row['header_3']; $img_3= $row['img_3']; $description_3= $row['description_3'];
									$header_4= $row['header_4']; $img_4= $row['img_4']; $description_4= $row['description_4'];
									$header_5= $row['header_5']; $img_5= $row['img_5']; $description_5= $row['description_5'];
									$header_6= $row['header_6']; $img_6= $row['img_6']; $description_6= $row['description_6'];
									$header_7= $row['header_7']; $img_7= $row['img_7']; $description_7= $row['description_7'];
									$header_8= $row['header_8']; $img_8= $row['img_8']; $description_8= $row['description_8'];
									$header_9= $row['header_9']; $img_9= $row['img_9']; $description_9= $row['description_9'];
									$header_10= $row['header_10']; $img_10= $row['img_10']; $description_10= $row['description_10'];

								}
							
					?>
							
							
		<div id="content"  class="ui segment"> 
			<h1 id="header">
			 <p id="shortl"><?php echo $header_intro; ?> </p>
			</h1>
			<h4 id="description">
			<p id="shorts"> <?php echo $description_intro; ?>
			 </p>
			 
			 </h4>
			
			<!---- Step 1 --->
			<hr>
			<h1 id="header_step">Schritt 1 >> <p id="shortl"><?php echo $header_1; ?></p></h1><br>
			<h4 id="description_step"><p id="shorts"><?php echo $description_1; ?></p></h4>
			<!---- Step 1 --->
				
			<!---- Step 2 --->
			<hr>
			<h1 id="header_step">Schritt 2 >> <p id="shortl"><?php echo $header_2; ?></p></h1><br>
			<h4 id="description_step"><p id="shorts"><?php echo $description_2; ?></p></h4>
			<!---- Step 2 --->
			
			<!---- Step 3 --->
			<hr>
			<h1 id="header_step">Schritt 3 >> <p id="shortl"><?php echo $header_3; ?></p></h1><br>
			<h4 id="description_step"><p id="shorts"><?php echo $description_3; ?></p></h4>
			<!---- Step 3 --->
			
			<!---- Step 4 --->
			<hr>
			<h1 id="header_step">Schritt 4 >> <p id="shortl"><?php echo $header_4; ?></p></h1><br>
			<h4 id="description_step"><p id="shorts"><?php echo $description_4; ?></p></h4>
			<!---- Step 4 --->
			
			<!---- Step 5 --->
			<hr>
			<h1 id="header_step">Schritt 5 >> <p id="shortl"><?php echo $header_5; ?></p></h1><br>
			<h4 id="description_step"><p id="shorts"><?php echo $description_5; ?></p></h4>
			<!---- Step 5 --->
			
			<!---- Step 6 --->
			<hr>
			<h1 id="header_step">Schritt 6 >> <p id="shortl"><?php echo $header_6; ?></p></h1><br>
			<h4 id="description_step"><p id="shorts"><?php echo $description_6; ?></p></h4>
			<!---- Step 6 --->
			
			<!---- Step 7 --->
			<hr>
			<h1 id="header_step">Schritt 7 >> <p id="shortl"><?php echo $header_7; ?></p></h1><br>
			<h4 id="description_step"><p id="shorts"><?php echo $description_7; ?></p></h4>
			<!---- Step 7 --->
			
			<!---- Step 8 --->
			<hr>
			<h1 id="header_step">Schritt 8 >><p id="shortl"> <?php echo $header_8; ?></p></h1><br>
			<h4 id="description_step"><p id="shorts"><?php echo $description_8; ?></p></h4>
			<!---- Step 8 --->
			
			<!---- Step 9 --->
			<hr>
			<h1 id="header_step">Schritt 9 >><p id="shortl"> <?php echo $header_9; ?></p></h1><br>
			<h4 id="description_step"><p id="shorts"><?php echo $description_9; ?></p></h4>
			<!---- Step 9 --->
			
			<!---- Step 10 --->
			<hr>
			<h1 id="header_step">Schritt 10 >><p id="shortl"> <?php echo $header_10; ?></p></h1><br>
			<h4 id="description_step"><p id="shorts"><?php echo $description_10; ?></p></h4>
			<!---- Step 10 --->
				
		<?php
							} else {
									?> <h1>Es gabe einen Fehler, diese Experiment gibt es nicht!</h1><?php
							}
						} else {
									?> <h1>Es gabe einen Fehler, diese Experiment gibt es nicht!</h1><?php
							
						}
						
					}
					$conn->close();
		
		?>
		</div>
	</body>
</html>