<!DOCTYPE HTML>
<head>
	<title>Search Room</title>
</head>

<body>
	<?php
		$_room = "2207";
		
	?>
	
<form id="searchRoom" name="searchRoom" method="post" action="searchRooms" onsubmit="">
	<table>
	<tbody>
	<tr>
	<td>Room: </td>
	<td><input type="text" name="room" id="room" value="<?php print $_room ; ?>"  required/></td>
	</tr>
	
	<td colspan='2'>
	<input type="submit" value="Search Room" onclick="" />
	</td>
	</tr>
	</table>
	</form>
</body>