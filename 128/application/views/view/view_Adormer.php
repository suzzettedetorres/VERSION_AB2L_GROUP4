<html>

<head>
	<title> DORMER </title>
</head>

<body>
	
		<?php
			foreach($data as $d){
				echo '<h1>'.$d['LASTNAME'].', '.$d['FIRSTNAME'].' '.$d['MIDDLENAME'].'</h1>';
				echo 'Student Number : '.$d['STUDENTNUMBER'].'<br>';
				echo 'Birthday : ';
				switch(substr($d['BIRTHDAY'],0,2)){
						case '01':
							echo 'January';
							break;
						case '02':
							echo 'February';
							break;
						case '03':
							echo 'March';
							break;
						case '04':
							echo 'April';
							break;
						case '05':
							echo 'May';
							break;
						case '06':
							echo 'June';
							break;
						case '07':
							echo 'July';
							break;
						case '08':
							echo 'August';
							break;
						case '09':
							echo 'September';
							break;
						case '10':
							echo 'October';
							break;
						case '11':
							echo 'November';
							break;
						case '12':
							echo 'December';
							break;
					}
				echo ' '.(substr($d['BIRTHDAY'],3,2));
				echo ' '.(substr($d['BIRTHDAY'],6,4)).'<br>';
				echo 'Age : '.$d['AGE'].'<br>';
				echo 'Course : '.$d['COURSE'].'<br>';
				echo 'College : '.$d['COLLEGE'].'<br>';
				echo 'Classification : '.$d['CLASSIFICATION'].'<br>';
				echo 'Expected Time of Graduation : ';
					switch(substr($d['ETIMEOFGRAD'],0,2)){
						case '01':
							echo 'January';
							break;
						case '02':
							echo 'February';
							break;
						case '03':
							echo 'March';
							break;
						case '04':
							echo 'April';
							break;
						case '05':
							echo 'May';
							break;
						case '06':
							echo 'June';
							break;
						case '07':
							echo 'July';
							break;
						case '08':
							echo 'August';
							break;
						case '09':
							echo 'September';
							break;
						case '10':
							echo 'October';
							break;
						case '11':
							echo 'November';
							break;
						case '12':
							echo 'December';
							break;
					}
				echo ' '.(substr($d['ETIMEOFGRAD'],6,4)).'<br>';
				echo 'Civil Status : '.$d['CIVILSTATUS'].'<br>';
				echo 'Home Address : '.$d['HOMEADDRESS'].'<br>';
				echo 'Contact Number : '.$d['CONTACTNUMBER'].'<br>';
				echo 'Email Address : '.$d['EMAILADDRESS'].'<br>';
				echo 'Scholarship : '.$d['SCHOLARSHIP'].'<br>';
				echo 'STFAP Bracket : '.$d['STFAPBRACKET'].'<br>';
				echo 'Monthly Allowance : '.$d['MONTHLYALLOWANCE'].'<br>';
				echo 'Religion : '.$d['RELIGION'].'<br>';
				echo 'Number of Brother : '.$d['NUMOFBROTHER'].'<br>';
				echo 'Number of Sister : '.$d['NUMOFSISTER'].'<br>';
				echo 'Birth Order : '.$d['BIRTHORDER'].'<br>';
				echo 'In Relationship? : '.$d['INRELATIONSHIP'].'<br>';
				echo 'Status of Residency : '.$d['STATUSOFRESIDENCY'].'<br>';
				echo 'Room Number : '.$d['ROOMNUMBER'].'<br>';
				echo 'Date Accepted : ';
				switch(substr($d['DATEACCEPTED'],0,2)){
						case '01':
							echo 'January';
							break;
						case '02':
							echo 'February';
							break;
						case '03':
							echo 'March';
							break;
						case '04':
							echo 'April';
							break;
						case '05':
							echo 'May';
							break;
						case '06':
							echo 'June';
							break;
						case '07':
							echo 'July';
							break;
						case '08':
							echo 'August';
							break;
						case '09':
							echo 'September';
							break;
						case '10':
							echo 'October';
							break;
						case '11':
							echo 'November';
							break;
						case '12':
							echo 'December';
							break;
					}
				echo ' '.(substr($d['DATEACCEPTED'],3,2));
				echo ' '.(substr($d['DATEACCEPTED'],6,4)).'<br>';
				
			}
		?>
		
</body>

</html>