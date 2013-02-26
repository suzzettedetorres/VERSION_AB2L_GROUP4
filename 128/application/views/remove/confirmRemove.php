<!DOCTYPE HTML>
<head>
	<title>Confirm Remove Resident</title>
</head>

<body>
	
<form id="removeDormer" name="removeDormer" method="post" action="removeDormers" onsubmit="">
	<table>
	<tbody>
	<?php
			foreach($data as $d){
				
				print  '<tr><td>Student Number: <input type="text" name="stnum" value="'.$d['STUDENTNUMBER'].'"></td></tr><tr><td> Name: '.$d['LASTNAME'].', '.$d['FIRSTNAME'].' '.$d['MIDDLENAME'].'</td></tr>';
				
			}
	?>
	
	<td colspan='2'>
	<input type="submit" value="Remove Dormer" onclick="" />
	</td>
	</tr>
	</table>
</form>

</body>