<html>
	<head>
		<title> LOGIN PAGE </title>
	</head>
	<link rel="stylesheet" type="text/css" href="loginstyle.css" />
	<script src="jQuery.js"></script>
	<script>
			$(document).ready(function(){
		  $("#loginbox").hover(function(){
			$("#loginbox").animate({
				opacity:'.9'
			  });
		  },function(){
			$("#loginbox").animate({
				opacity:'.3'
			  });
		  });
		});
	</script>
	<body>
		<div id="header">
			Women's Residence Hall Dormers Management System
		</div>
		<div id = "loginbox">
			<div id="picbox">
				<img src = "images/userlogin.jpg" />
				<br />
				<p align="center">ADMINISTRATOR</p>
			</div>
			<div id="formbox">
				<table id = "formtable">
					<form id = "loginform" method="post" action="checklogin.php">
						<tr>
							<td>
								USERNAME
							</td>
							<td>
								<input type = "text" name = "uname" id = "uname" />
							</td>
						</tr>
						<tr>
							<td>
								PASSWORD
							</td>
							<td>
								<input type = "password" name = "pword" id = "pword" />
							</td>
						</tr>
						<tr>
						
						</tr>
						<tr>
							<td>
							</td>
							<td>
								<br />
								&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" onclick="submit() name="" value="" class="css3button">SUBMIT</button>
								<!--&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" onclick="submit() name="" value="" class="css3button">SUBMIT</button>!-->
								
							</td>
						</tr>
					</form>
				</table>
				<?php
					if(isset($_GET['status']) && $_GET['status'] == "loginfailed") { 
						echo 'Login Failed. Try again';
					}
				?>
			</div>
		</div>
	</body>
</html>