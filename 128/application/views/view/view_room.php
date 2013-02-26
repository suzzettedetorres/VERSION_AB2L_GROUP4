<html>

<head>
	<title> ROOMS </title>
</head>

<body>

	<h1>ROOMS</h1>
	
		<?php
			foreach($data as $d){
				
				echo '<h2> ROOM NUMBER:',$d['ROOMNUMBER'],'</h2><br>';
				echo '<h3> CAPACITY:',$d['CAPACITY'],'</h2><br>';
				echo '<h3> VACANCY:',$d['VACANCY'],'</h3><br>';
				
			}
		?>
		
</body>

</html>