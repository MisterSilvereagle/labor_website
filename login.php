<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="style.css">
		
		<link rel="stylesheet" type="text/css" href="uk/semantic.min.css">
		<script
		  src="https://code.jquery.com/jquery-3.1.1.min.js"
		  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
		  crossorigin="anonymous"></script>
		<script src="uk/semantic.min.js"></script>
	</head>
	<body onload="hide_wrong_true();">
	<div style=" 
		top: 25%;
		width: 25%;
		left: 37%;
	  " class="ui very padded segment">
		<div class="ui equal width form">
		  <div class="fields">
			<div class="field">
			  <label>Username</label>
			  <input id="username" type="text" placeholder="Username">
			</div>
			<div class="field">
			  <label>Password</label>
			  <input id="password" type="password">
			</div>
		  </div>
		  </div><br>
		  <button id="login" style="" class="ui right labeled icon button">
		  <i class="right arrow icon"></i>
		  Login
		</button>
		</div>
		<div id="true" style="left: 37%; width: 25%; top: 24%;" class="ui success message">
		  <i class="close icon"></i>
		  <div class="header">
			Login was successful.
		  </div>
		  <p>You are loged in!</p>
		</div>
		<div id="false" style="left: 37%; width: 25%; top: 24%;" class="ui negative message">
		  <i class="close icon"></i>
		  <div class="header">
			Login failed!
		  </div>
		  <p>Wrong data!
		</p>
		</div>
		<script type="text/javascript">
			
			
			$("#login").click(function(){
								var data_from_ajax;
								$.get('http://134.255.234.216/exper/login_php.php?user='+document.getElementById('username').value+'&pw='+document.getElementById('password').value, function(data) {
								  	data_from_ajax = data;
									if(data_from_ajax=="success"){
										show_true();
										hide_wrong();
										
										document.location.href = "main.php";
									} else {
										show_wrong();
										hide_true();
									}
								});
			});
			
			
			function hide_wrong_true(){
				hide_true();
				hide_wrong();
			}
			
			function hide_wrong(){
				$("#false").hide();
			}
			
		 	function hide_true(){
				$("#true").hide();
			}
			
			function show_wrong(){
				$("#false").show().fadeIn();
			}
			
		 	function show_true(){
				$("#true").show().fadeIn();
			}
		
		</script>
	</body>
</html>