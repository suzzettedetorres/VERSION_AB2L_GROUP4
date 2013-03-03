<!DOCTYPE HTML>
<head>
	<title>Search Dormer</title>
</head>

<body>
	<?php
		$_stnum = "2010-49621";
		
	?>
	
<form id="searchDormer" name="searchDormer" method="post" action="t_searchDormers" onsubmit="">
	<table>
	<tbody>
	<tr>
	<td>Student Number: </td>
	<td><input type="text" name="stnum" id="stnum" pattern="[0-9]{4}-[0-9]{5}" value="<?php print $_stnum ; ?>"  required/></td>
	</tr>
	
	<td colspan='2'>
	<input type="submit" value="Search Dormer" onclick="" />
	</td>
	</tr>
	</table>
	</form>
</body>