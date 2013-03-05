<!DOCTYPE HTML>
<head>
	<title>Choose Dormer To View</title>
</head>

<body>
	
<form id="searchDormer" name="searchDormer" method="post" action="r_searchDormers" onsubmit="">
	<table>
	<body>
	<?php
			foreach($data as $d){
				
				print  '<tr><td><input type="radio" name="stnum" value="'.$d['STUDENTNUMBER'].'">Student Number: '.$d['STUDENTNUMBER'].'</td><td> Name: '.$d['LASTNAME'].', '.$d['FIRSTNAME'].' '.$d['MIDDLENAME'].'</td></tr>';
				
			}
	?>
	
	<td colspan='2'>
	<input type="submit" value="View Dormer" onclick="" />
	</td>
	</tr>
	</table>
</form>

</body>