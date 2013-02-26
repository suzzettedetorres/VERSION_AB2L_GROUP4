<html>

<head>
	<title> PAYMENT RECORDS </title>
</head>

<body>

	<h1>PAYMENT RECORDS</h1>
	
		<?php
			foreach($data as $d){
				
				echo $d['PAYMENTRECORDID'],' ',$d['TOTALLIABILITIES'],'<br>';
				
			}
		?>
		
</body>

</html>