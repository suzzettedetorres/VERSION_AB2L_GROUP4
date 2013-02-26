<!DOCTYPE HTML>
<head>
	<title>Remove Dormer</title>
</head>

<body>
	<?php
		$_roomnum = "2209";
		
	?>
	
<form id="removeRoom" name="removeRoom" method="post" action="removeRooms" onsubmit="">
	<table>
	<tbody>
	<tr>
	<td>Room Number: </td>
	<td><input type="text" name="roomnum" id="roomnum" value="<?php print $_roomnum ; ?>"  required/></td>
	</tr>
	
	<td colspan='2'>
	<input type="submit" value="Remove Room" onclick="" />
	</td>
	</tr>
	</table>
	</form>
</body>