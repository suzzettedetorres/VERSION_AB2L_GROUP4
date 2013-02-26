<html>

<head>
	<title> DORMER </title>
</head>

<body>

	<h1>DORMERS</h1>
	
		<?php
			foreach($data as $d){
				
				echo $d['STUDENTNUMBER'],' ',$d['LASTNAME'],', ',$d['FIRSTNAME'],' ',$d['MIDDLENAME'],'<br>';
				
			}
		?>
		
</body>

</html>