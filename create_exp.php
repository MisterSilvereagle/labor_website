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
					
		
						if($_GET['exp_name']){
							
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
									echo "suc";

								//		<meta http-equiv="refresh" content="1; url=http://134.255.234.216/exper/exper.php?exp=">
								}
					} else {
						echo "err";
					}
						
				}
				$conn->close();
		
		?>