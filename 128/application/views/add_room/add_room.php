<!DOCTYPE HTML>
<head>
	<title>Add Room</title>
</head>

<body>
	<?php
		$_roomnum = "2207";
		$_capacity = "3";
		$_vacancy = "2";
	?>
	
	<form id="roomForm" name="roomForm" method="post" action="addroom" onsubmit="">
	<table>
	<tbody>
	
	<tr>
	<td>Room Number: </td>
	<td><input type=number name="roomnum" id="roomnum" value="<?php print $_roomnum ; ?>" required/></td>
	</tr>
	
	<tr>
	<td>Capacity: </td>
	<td><input type=number name="capacity" id="capacity" value="<?php print $_capacity ; ?>" min="1" max="4" required/></td>
	</tr>
	
	<tr>
	<td>Vacancy: </td>
	<td><input type=number name="vacancy" id="vacancy" value="<?php print $_vacancy ; ?>" min="0" max="4" required/></td>
	</tr>
	
	<tr>
	<td colspan='2'>
	<input type="submit" value="Add Room" onclick="" />
	</td>
	</tr>
	
	</table>
	</form>
</body>