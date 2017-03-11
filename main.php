<?php
			include 'data/config.php';
			if(isset($_COOKIE[$cookie_name])) {

			$user_name=$_COOKIE[$cookie_name];

?>
<html>
	<head>
		<!--Set Title-->
		<title>Dash-Server Management</title>
		
		<!--Set UTF-8-->
		<meta charset="utf-8">
		<!--Set ViewPort-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="style.css">
		
		<link rel="stylesheet" type="text/css" href="uk/semantic.min.css">
		<script
		  src="https://code.jquery.com/jquery-3.1.1.min.js"
		  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
		  crossorigin="anonymous"></script>
		<script src="uk/semantic.min.js"></script>
		
	</head>
    <body onload="urlCheck();">
		<!--<div class="ui menu">
		  <a class="item" onClick="btn_home()">Home</a>
		  <a class="item" onClick="btn_acc_sett()">Account Settings</a>
		  <a class="item" onClick="btn_server_data()">Server System</a>
		  <a class="item" onClick="btn_status()">Server Status</a>
		  <a class="item" onClick="btn_cmd()">Server command prompt</a>
		</div> -->
		<div class="ui labeled icon menu">
		  <a class="item">
			<i onClick="btn_home()" class="home icon"></i>
		  </a>
		  <a class="item">
			<i onClick="btn_acc_sett()" class="settings icon"></i>
		  </a>
		  <a class="item">
			<i onClick="btn_server_data()" class="database icon"></i>
		  </a>
		  <a class="item">
			<i onClick="btn_status()" class="bar chart icon"></i>
		  </a>
		  <a class="item">
			<i onClick="btn_cmd()" class="terminal icon"></i>
		  </a>
		</div>
		<div id="content">
		</div>
		<script type="text/javascript">
			
			function btn_home() {
				window.location = '#home';
				urlCheck();
			}
			function btn_acc_sett() {
				window.location = '#acc_set';
				urlCheck();
			}
			
			function btn_server_data() {
				window.location = '#server_data';
				urlCheck();
			}
			
			function btn_status() {
				window.location = '#server_status';
				urlCheck();
			}
			
			function btn_cmd() {
				window.location = '#server_cmd';
				urlCheck();
			}
			function urlCheck() {
				jQuery.support.cors = true;
				if(document.URL.indexOf("server_status") >= 0){
					$("#content").load("st.php").hide().fadeIn("slow");
				}else if(document.URL.indexOf("server_data") >= 0){
					$("#content").load("createEXP.php", function(){
						
						$('#err').hide();
						$('#suc').hide();
						
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
					}).hide().fadeIn("slow");
				}else if(document.URL.indexOf("server_cmd") >= 0){
					$("#content").load("CONTENT/CMD.php", function(){
						
					}).hide().fadeIn("slow");
				}
				
				else if(document.URL.indexOf("acc_set") >= 0){
					$("#content").load("ACC_SETT.php", function(){
			
								$("#user_failed").hide();
								$("#user_success").hide();
								$("#pw_failed").hide();
								$("#pw_success").hide();
						
								$("#res_pw").click(function(){
													var data_from_ajax;
													$.get('http://134.255.234.216/exper/reset_pw.php?stpw='+document.getElementById('old_pw').value+'&newpw='+document.getElementById('new_pw').value+'', function(data) {
														data_from_ajax = data;
														if(data_from_ajax=="wrong_pws"){
															$("#pw_failed").show().fadeIn("slow");
															$("#pw_success").hide();
														} else {
															$("#pw_success").show().fadeIn("slow");
															$("#pw_failed").hide();
														}
													});
								});
								$("#res_user").click(function(){
													var data_from_ajax;
													$.get('http://134.255.234.216/exper/reset_user.php?stuser='+document.getElementById('old_user').value+'&newuser='+document.getElementById('new_user').value+'', function(data) {
														data_from_ajax = data;
														if(data_from_ajax=="wrong_pws"){
															$("#user_failed").show().fadeIn("slow");
															$("#user_success").hide();
														} else {
															$("#user_success").show().fadeIn("slow");
															$("#user_failed").hide();
														}
													});
								});
					}).hide().fadeIn("slow");
				}else if(document.URL.indexOf("home") >= 0){
						$("#content").load("CONTENT/HOME.html").hide().fadeIn("slow");
				}
			}
			
		</script>
		
	</body>
</html>
<?php

								   
} else {
	?> <a href="index.php">Login</a> <?php
}
								   
?>
