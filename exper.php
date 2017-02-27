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
							
							
		<div id="content">
			<h1 id="header">
			 <?php echo $header_intro; ?>
			</h1>
			<h4 id="description">
			
			 <?php echo $description_intro; ?>
			 
			 </h4>
			
			<!---- Step 1 --->
			<hr>
			<h1 id="header_step">Schritt 1 >> <?php echo $header_1; ?></h1><br>
			<h4 id="description_step"><?php echo $description_1; ?></h4>
			<!---- Step 1 --->
				
			<!---- Step 2 --->
			<hr>
			<h1 id="header_step">Schritt 2 >> <?php echo $header_2; ?></h1><br>
			<h4 id="description_step"><?php echo $description_2; ?></h4>
			<!---- Step 2 --->
			
			<!---- Step 3 --->
			<hr>
			<h1 id="header_step">Schritt 3 >> <?php echo $header_3; ?></h1><br>
			<h4 id="description_step"><?php echo $description_3; ?></h4>
			<!---- Step 3 --->
			
			<!---- Step 4 --->
			<hr>
			<h1 id="header_step">Schritt 4 >> <?php echo $header_4; ?></h1><br>
			<h4 id="description_step"><?php echo $description_4; ?></h4>
			<!---- Step 4 --->
			
			<!---- Step 5 --->
			<hr>
			<h1 id="header_step">Schritt 5 >> <?php echo $header_5; ?></h1><br>
			<h4 id="description_step"><?php echo $description_5; ?></h4>
			<!---- Step 5 --->
			
			<!---- Step 6 --->
			<hr>
			<h1 id="header_step">Schritt 6 >> <?php echo $header_6; ?></h1><br>
			<h4 id="description_step"><?php echo $description_6; ?></h4>
			<!---- Step 6 --->
			
			<!---- Step 7 --->
			<hr>
			<h1 id="header_step">Schritt 7 >> <?php echo $header_7; ?></h1><br>
			<h4 id="description_step"><?php echo $description_7; ?></h4>
			<!---- Step 7 --->
			
			<!---- Step 8 --->
			<hr>
			<h1 id="header_step">Schritt 8 >> <?php echo $header_8; ?></h1><br>
			<h4 id="description_step"><?php echo $description_8; ?></h4>
			<!---- Step 8 --->
			
			<!---- Step 9 --->
			<hr>
			<h1 id="header_step">Schritt 9 >> <?php echo $header_9; ?></h1><br>
			<h4 id="description_step"><?php echo $description_9; ?></h4>
			<!---- Step 9 --->
			
			<!---- Step 10 --->
			<hr>
			<h1 id="header_step">Schritt 10 >> <?php echo $header_10; ?></h1><br>
			<h4 id="description_step"><?php echo $description_10; ?></h4>
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