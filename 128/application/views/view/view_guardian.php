<html>

<head>
	<title> GUARDIAN </title>
</head>

<body>

	<h1>GUARDIANS</h1>
	
		<?php
			foreach($data as $d){
				
				echo $d['GUARDIANID'],' ',$d['LASTNAME'],', ',$d['FIRSTNAME'],' ',$d['MIDDLENAME'],'<br>';
				
			}
		?>
		
</body>

</html>