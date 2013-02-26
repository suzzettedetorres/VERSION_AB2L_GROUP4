<html>

<head>
	<title> APPLICANT </title>
</head>

<body>

	<h1>APPLICANTS</h1>
	
		<?php
			foreach($data as $d){
				
				echo $d['STUDENTNUMBER'],' ',$d['LASTNAME'],', ',$d['FIRSTNAME'],' ',$d['MIDDLENAME'],'<br>';
				
			}
		?>
		
</body>

</html>