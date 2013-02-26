<html>

<head>
	<title> EQUIPMENT </title>
</head>

<body>

	<h1>EQUIPMENTS</h1>
	
		<?php
			foreach($data as $d){
				
				echo $d['CONTROLNUMBER'],' ',$d['EQUIPMENTNAME'],'<br>';
				
			}
		?>
		
</body>

</html>