<html>
	<head>
		<title>Methodisch inkorrekt</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		
		<div id="content">
			<form name="uploadformular" action="createEXP.php" method="get" enctype="multipart/form-data">
			  Experiment Name: <input type="text" name="exp_name"><br><br><br>
			  
			  Intro Header: <input type="text" name="header_intro"><br><br>
			  Intro Bild: <input type="file" name="pic_intro" size="25"><br><br>
			  Intro Beschreibung: <textarea  type="text" name="description_intro"> </textarea> <br><br><br>
			  
			  
			  Schritt 1 Header: <input type="text" name="header_1"><br><br>
			  Schritt 1 Bild: <input type="file" name="pic_1"><br><br>
			  Schritt 1 Beschreibung: <textarea  type="text" name="description_1"></textarea><br><br><br>
			  
			  
			  Schritt 2 Header: <input type="text" name="header_2"><br><br>
			  Schritt 2 Bild: <input type="file" name="pic_2"><br><br>
			  Schritt 2 Beschreibung: <textarea  type="text" name="description_2"></textarea><br><br><br>
			  
			  
			  Schritt 3 Header: <input type="text" name="header_3"><br><br>
			  Schritt 3 Bild: <input type="file" name="pic_3"><br><br>
			  Schritt 3 Beschreibung: <textarea  type="text" name="description_3"></textarea><br><br><br>
			  
			  
			  Schritt 4 Header: <input type="text" name="header_4"><br><br>
			  Schritt 4 Bild: <input type="file" name="pic_4"><br><br>
			  Schritt 4 Beschreibung: <textarea  type="text" name="description_4"></textarea><br><br><br>
			  
			  
			  Schritt 5 Header: <input type="text" name="header_5"><br><br>
			  Schritt 5 Bild: <input type="file" name="pic_5"><br><br>
			  Schritt 5 Beschreibung: <textarea  type="text" name="description_5"></textarea><br><br><br>
			  
			  
			  Schritt 6 Header: <input type="text" name="header_6"><br><br>
			  Schritt 6 Bild: <input type="file" name="pic_6"><br><br>
			  Schritt 6 Beschreibung: <textarea  type="text" name="description_6"></textarea><br><br><br>
			  
			  
			  Schritt 7 Header: <input type="text" name="header_7"><br><br>
			  Schritt 7 Bild: <input type="file" name="pic_7"><br><br>
			  Schritt 7 Beschreibung: <textarea type="text" name="description_7"></textarea><br><br><br>
			  
			  
			  Schritt 8 Header: <input type="text" name="header_8"><br><br>
			  Schritt 8 Bild: <input type="file" name="pic_8"><br><br>
			  Schritt 8 Beschreibung: <textarea type="text" name="description_8"></textarea><br><br><br>
			  
			  
			  Schritt 9 Header: <input type="text" name="header_9"><br><br>
			  Schritt 9 Bild: <input type="file" name="pic_9"><br><br>
			  Schritt 9 Beschreibung: <textarea type="text" name="description_9"></textarea><br><br><br>
			  
			  
			  Schritt 10 Header: <input type="text" name="header_10"><br><br>
			  Schritt 10 Bild: <input type="file" name="pic_10"><br><br>
			  Schritt 10 Beschreibung: <textarea type="text" name="description_10"></textarea><br><br><br>
			  
			  
			  
			  
			  
			  
			  <input type="submit" value="Create">
			</form>
				<?php
			
			
					include 'data/config.php';
					include 'data/tables.php';
					include 'data/func.php';
					
					 // Create connection
					$conn = new mysqli($servername, $username, $password, $database);
					
					//Create experiment table
					if ($conn->query($experiments_table) === TRUE) {} else {echo "Error creating table: " . $conn->error;}
		
					// Check connection
					if ($conn->connect_error) {
						echo 'Unsere Server sind momentan nicht verfügbar!';
					} else {
		
						$exp_name= cleanup($_GET['exp_name']); 
						$header_intro= $_GET['header_intro']; $img_intro= $_GET['pic_intro']; $description_intro=$_GET['description_intro'];
						$header_1= $_GET['header_1']; $img_1= $_GET['pic_1']; $description_1= $_GET['description_1'];
						$header_2= $_GET['header_2']; $img_2= $_GET['pic_2']; $description_2= $_GET['description_2'];
						$header_3= $_GET['header_3']; $img_3= $_GET['pic_3']; $description_3= $_GET['description_3'];
						$header_4= $_GET['header_4']; $img_4= $_GET['pic_4']; $description_4= $_GET['description_4'];
						$header_5= $_GET['header_5']; $img_5= $_GET['pic_5']; $description_5= $_GET['description_5'];
						$header_6= $_GET['header_6']; $img_6= $_GET['pic_6']; $description_6= $_GET['description_6'];
						$header_7= $_GET['header_7']; $img_7= $_GET['pic_7']; $description_7= $_GET['description_7'];
						$header_8= $_GET['header_8']; $img_8= $_GET['pic_8']; $description_8= $_GET['description_8'];
						$header_9= $_GET['header_9']; $img_9= $_GET['pic_9']; $description_9= $_GET['description_9'];
						$header_10= $_GET['header_10']; $img_10= $_GET['pic_10']; $description_10= $_GET['description_10'];
					
		
						if(!$_GET['exp_name'] == "" ){
							
							$sql = "INSERT INTO exps (
							exp_name, 
							header_intro, img_intro, description_intro,
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
							) VALUES (
							'$exp_name', '$header_intro', '$img_intro', '$description_intro',
							'$header_1', '$img_1', '$description_1',
							'$header_2', '$img_2', '$description_2',
							'$header_3', '$img_3', '$description_3',
							'$header_4', '$img_4', '$description_4',
							'$header_5', '$img_5', '$description_5',
							'$header_6', '$img_6', '$description_6',
							'$header_7', '$img_7', '$description_7',
							'$header_8', '$img_8', '$description_8',
							'$header_9', '$img_9', '$description_9',
							'$header_10', '$img_10', '$description_10'
							)";



								if (mysqli_query($conn, $sql)) {
									echo "Das Experiment wurde eingetragen!";

									?>
										<meta http-equiv="refresh" content="1; url=http://134.255.234.216/exper/exper.php?exp=<?php echo $exp_name; ?>">
									<?php
								}
					} else {
						echo "Bitte fuellen Sie alle notwendigen Felder aus!";
					}
						
				}
				$conn->close();
		
		?>
		</div>
		
	</body>
</html>