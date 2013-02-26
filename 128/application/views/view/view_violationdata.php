<html>

<head>
	<title> VIOLATION DATA </title>
</head>

<body>

	<h1>VIOLATION DATA</h1>
	
		<?php
			foreach($data as $d){
				
				echo '<h2> VIOLATION ID:',$d['VIOLATIONID'],'</h2><br>';
				echo '<h3> VIOLATION:',$d['VIOLATION'],'<br>';
				echo 'DATE:',$d['DATEOFVIOLATION'],'<br>';
				echo 'REMARK:',$d['REMARK'],'</h3><br>';
				
			}
		?>
		
</body>

</html>