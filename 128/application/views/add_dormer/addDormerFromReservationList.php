<!DOCTYPE HTML>
<head>
	<title>Add Dormer From Applicant's Reservation List</title>
</head>

<body>
	
<form id="addDormer" name="addDormer" method="post" action="confirmAddToDormers" onsubmit="">
	<table>
	<tbody>
	<?php
			foreach($data as $d){
				
				print  '<tr><td><input type="radio" name="stnum" value="'.$d['STUDENTNUMBER'].'">Student Number: '.$d['STUDENTNUMBER'].'</td><td> Name: '.$d['LASTNAME'].', '.$d['FIRSTNAME'].' '.$d['MIDDLENAME'].'</td></tr>';
				
			}
	?>
	
	<td colspan='2'>
	<input type="submit" value="Add Dormer" onclick="" />
	</td>
	</tr>
	</table>
</form>

</body>