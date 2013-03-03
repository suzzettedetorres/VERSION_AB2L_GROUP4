<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link href="style.1.2.1.css" media="screen" rel="stylesheet" type="text/css" />
<link href="Main.css" media="screen" rel="stylesheet" type="text/css" />
</head>

<body>	
<div id='login'>
	<div id='adminPic'>                	
    	<img src="img/adminlogin.png" />                   
    </div>
    <div id='loginFo'>
    	<div class="fg-color-white" id="title">
        	Women's Residence Hall <br /> Dormers Management System
            <br />
        </div>
		<form method="post" action="index.php/insert/goToMain" autocomplete="on">
			<div id='unamePass'>
				<div class="input-control text inputf" >
                	Username
					<input class="inputUP" type="text" required />
				</div>
				<div class="input-control text inputf">
                	Password
					<input class="inputUP" type="password" required/>
				</div>
			</div>
			<div id='submit'>
				<input type="submit" class="btn btn-green border-color-white" value=" Submit ">
			</div>							
		</form>					    
    </div>
</div>

</body>

</html>




<!--References:
Retrived at 2 February, 2013 from
http://simoborto.altervista.org
http://dev7studios.com/
-->
