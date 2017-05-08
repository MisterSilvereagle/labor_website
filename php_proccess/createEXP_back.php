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
	<body onLoad="onload()">
	
		<script type="text/javascript"> 
			function onload(){
				$('#err').hide();
				$('#suc').hide();
			}
			
		</script>
	
	<div style="
    border-radius: 0px;" class="ui inverted menu">
	  <a class="item" href="index.php">
		Home
	  </a>
	  <a class="active item" href="createEXP.php">
		Create
	  </a>
	  <a class="item" href="about.php">
		About
	  </a>
	</div>
		
		<div id="content" class="ui segment">
			<form method="get" >
		  
			  <div class="ui form">
			  *Experiment id: <input type="text" id="exp_name"><br><br><br>
			  
			  *Intro Header: <input type="text" id="header_intro"><br><br>
			  
			  <div class="field">
				<label>*Intro Beschreibung: </label>
				<textarea type="text" id="description_intro"></textarea>
			  </div> <br><br><br>
			  
			  
			  Schritt 1 Header: <input type="text" id="header_1"><br><br>
			    
			  <div class="field">
				<label>Schritt 1 Beschreibung: </label>
				<textarea type="text" id="description_1"></textarea>
			  </div> <br><br><br>
			  
			  
			  Schritt 2 Header: <input type="text" id="header_2"><br><br><div class="ui form">
			  <div class="field">
				<label>Schritt 2 Beschreibung: </label>
				<textarea type="text" id="description_2"></textarea>
			  </div> <br><br><br>
			  
			  
			  Schritt 3 Header: <input type="text" id="header_3"><br><br>
			  <div class="field">
				<label>Schritt 3 Beschreibung: </label>
				<textarea type="text" id="description_3"></textarea>
			  </div> <br><br><br>
			  
			  Schritt 4 Header: <input type="text" id="header_4"><br><br>
			  <div class="field">
				<label>Schritt 4 Beschreibung: </label>
				<textarea type="text" id="description_4"></textarea>
			  </div> <br><br><br>
			  
			  Schritt 5 Header: <input type="text" id="header_5"><br><br>
			  <div class="field">
				<label>Schritt 5 Beschreibung: </label>
				<textarea type="text" id="description_5"></textarea>
			  </div> <br><br><br>
			  
			  Schritt 6 Header: <input type="text" id="header_6"><br><br>
			  <div class="field">
				<label>Schritt 6 Beschreibung: </label>
				<textarea type="text" id="description_6"></textarea>
			  </div> <br><br><br>
			  
			  Schritt 7 Header: <input type="text" id="header_7"><br><br>
			  <div class="field">
				<label>Schritt 7 Beschreibung: </label>
				<textarea type="text" id="description_7"></textarea>
			  </div> <br><br><br>
			  
			  Schritt 8 Header: <input type="text" id="header_8"><br><br>
			  <div class="field">
				<label>Schritt 8 Beschreibung: </label>
				<textarea type="text" id="description_8"></textarea>
			  </div> <br><br><br>
			  
			  Schritt 9 Header: <input type="text" id="header_9"><br><br>
			  <div class="field">
				<label>Schritt 9 Beschreibung: </label>
				<textarea type="text" id="description_9"></textarea>
			  </div> <br><br><br>
			  
			  Schritt 10 Header: <input type="text" id="header_10"><br><b
			  <div class="field">
				<label>Schritt 10 Beschreibung: </label>
				<textarea type="text" id="description_10"></textarea>
			  </div> <br><br><br>
			  </div>
			  <div id="suc" class="ui success message">
				  <i class="close icon"></i>
				  <div class="header">
					Erfolgreich eingetragen!
				  </div>
				  <a href="index.php">Weiter zur Hauptseite!</a>
			  </div>
			  <div id="err" class="ui negative message">
				  <i class="close icon"></i>
				  <div class="header">
				  	Den Namen gibt es schon oder es wurden nicht alle Felder ausgefüllt (Markiert: *)!
					
				  </div>
				  <p>
				</p></div>
			  
			  
			  
			  <input id="create" class="ui submit button" type="button" value="Create">
			  
			  <script type="text/javascript">
					$('#create').click(function(){ 	
							if(document.getElementById('exp_name').value == "" || document.getElementById('header_intro').value == "" || document.getElementById('description_intro').value == ""){
								$('#err').show();
								$('#suc').hide();


							} else {
									//text = text.replace(/\n\r?/g, '<br />');
								var data_from_ajax;
								$.get("http://134.255.234.216/exper/create_exp.php?exp_name="+document.getElementById("exp_name").value
									+"&header_intro="+document.getElementById("header_intro").value
									+"&description_intro="+document.getElementById("description_intro").value.replace(/\n\r?/g, '<br />')
									+"&header_1="+document.getElementById("header_1").value
									+"&description_1="+document.getElementById("description_1").value
										+"&header_2="+document.getElementById("header_2").value
										+"&description_2="+document.getElementById("description_2").value
											+"&header_3="+document.getElementById("header_3").value
											+"&description_3="+document.getElementById("description_3").value
												+"&header_4="+document.getElementById("header_4").value
												+"&description_4="+document.getElementById('description_4').value
													+"&header_5="+document.getElementById("header_5").value
													+"&description_5="+document.getElementById("description_5").value
														+"&header_6="+document.getElementById("header_6").value
														+"&description_6="+document.getElementById("description_6").value
															+"&header_7="+document.getElementById("header_7").value
															+"&description_7="+document.getElementById("description_7").value
																+"&header_8="+document.getElementById("header_8").value
																+"&description_8="+document.getElementById("description_8").value
																	+"&header_9="+document.getElementById("header_9").value
																	+"&description_9="+document.getElementById("description_9").value
																		+"&header_10="+document.getElementById("header_10").value
																		+"&description_10="+document.getElementById("description_10").value+"", function(data) {
									data_from_ajax = data;
										if(data_from_ajax=="suc"){										
											$('#err').hide();
											$('#suc').show();
											
											

										} else if(data_from_ajax=="err"){

											$('#err').show();
											$('#suc').hide();

										}
								});

							}

					});
								
			  </script>
			  
			</form>
				
		</div>
		
	</body>
</html>