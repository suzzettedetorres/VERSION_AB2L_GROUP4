<?php if($_SESSION['admin'] == 1){
	$this->load->view("Main.php");
}else{?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link href="../../style.1.2.1.css" media="screen" rel="stylesheet" type="text/css" />
<link href="../../Main.css" media="screen" rel="stylesheet" type="text/css" />
</head>

<body>	
<div id='login'>
	<div id='adminPic'>                	
    	<img src="../../img/adminlogin.png" />                   
    </div>
    <div id='loginFo'>
    	<div class="fg-color-white" id="title">
        	Women's Residence Hall <br /> Dormers Management System
            <br />
        </div>
		<form method="post" action="checkLogin" autocomplete="on">
			<div id='unamePass'>
				<div class="input-control text inputf" >
                	Username
					<input name="adminname" class="inputUP" type="text" required />
				</div>
				<div class="input-control text inputf">
                	Password
					<input  name="adminpwd" class="inputUP" type="password" required/>
				</div>
				<?php
					if($_SESSION['validadmin'] == 0){
						echo "Invalid username or password!";
					}
				?>
			</div>
			<div id='submit'>
				<input type="submit" class="btn btn-green border-color-white" value=" Submit ">
			</div>							
		</form>					    
    </div>
</div>

</body>

</html>

<?php }?>




<!--References:
Retrived at 2 February, 2013 from
http://simoborto.altervista.org
http://dev7studios.com/
-->
