<?php

			include 'data/config.php';
			include 'data/func.php';
			if(isset($_COOKIE[$cookie_name])) {
				$user_name=$_COOKIE[$cookie_name];
				if(getPER($user_name)>5){
					
			?>
		
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
			</form>
				
		</div>
	<?php  
		} else {
			?>
			<div id="content" class="ui segment">
				<h1>You have no permisson</h1>
			</div>
			<?php
		}
	} else {
		?>
		<h1>You have no permisson</h1>
		<?php
	} 
?>