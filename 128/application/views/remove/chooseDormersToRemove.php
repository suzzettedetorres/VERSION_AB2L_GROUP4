<!DOCTYPE HTML>
<head>
	<title>Choose Dormer To Remove</title>
</head>

<body>
	
<form id="removeDormer" name="removeDormer" method="post" action="confirmRemoveDormers" onsubmit="">
	<table>
	<tbody>
	<?php
			foreach($data as $d){
				
				print  '<tr><td><input type="radio" name="stnum" value="'.$d['STUDENTNUMBER'].'">Student Number: '.$d['STUDENTNUMBER'].'</td><td> Name: '.$d['LASTNAME'].', '.$d['FIRSTNAME'].' '.$d['MIDDLENAME'].'</td></tr>';
				
			}
	?>
	
	<td colspan='2'>
	<input type="submit" value="Remove Dormer" onclick="" />
	</td>
	</tr>
	</table>
</form>

</body>