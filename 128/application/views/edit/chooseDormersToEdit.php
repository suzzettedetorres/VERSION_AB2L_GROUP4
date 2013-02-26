<!DOCTYPE HTML>
<head>
	<title>Choose Dormer To Edit</title>
</head>

<body>
	
<form id="editDormer" name="editDormer" method="post" action="editDormers" onsubmit="">
	<table>
	<tbody>
	<?php
			foreach($data as $d){
				
				print  '<tr><td><input type="radio" name="stnum" value="'.$d['STUDENTNUMBER'].'">Student Number: '.$d['STUDENTNUMBER'].'</td><td> Name: '.$d['LASTNAME'].', '.$d['FIRSTNAME'].' '.$d['MIDDLENAME'].'</td></tr>';
				
			}
	?>
	
	<td colspan='2'>
	<input type="submit" value="Edit Dormer" onclick="" />
	</td>
	</tr>
	</table>
</form>

</body>